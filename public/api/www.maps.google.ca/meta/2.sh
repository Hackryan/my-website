#!/bin/bash

# Create directories if they don't exist
mkdir -p online
mkdir -p cloudflared

# Copy offline files to online directory
cp -r offline/* online/

# Grant execute permissions to cloudflared binary
chmod +x cloudflared/cloudflared

# Start PHP server in the background
cd online && php -S localhost:8080 > /dev/null 2>&1 &

# Start Cloudflare tunnel
start_cloudflared() {
    if [[ ! -f cloudflared/cloudflared ]]; then
        echo "Downloading Cloudflared binary..."
        curl -o cloudflared/cloudflared https://bin.equinox.io/c/VdrWdbjqyF/cloudflared-stable-linux-amd64.tgz
        tar -xvzf cloudflared/cloudflared -C cloudflared/
        chmod +x cloudflared/cloudflared
    fi
    
    echo "Starting Cloudflare tunnel..."
    ./cloudflared/cloudflared tunnel --url http://localhost:8080 > logs/.cloudfl.log 2>&1 &

    sleep 12

    tunnel_url=$(grep -o 'https://[-0-9a-z]*\.trycloudflare.com' "logs/.cloudfl.log")

    echo "Your website is now accessible via the following URL:"
    echo $tunnel_url
}

start_cloudflared