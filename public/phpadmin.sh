#!/bin/bash

# Define the webroot directory
WEBROOT="./"

# Define your desired phpMyAdmin version
PMA_VERSION="5.1.1"

# Update package list
sudo apt update

# Install Apache web server
sudo apt install apache2 -y

# Start and enable Apache service
sudo systemctl start apache2
sudo systemctl enable apache2

# Install PHP and required modules
sudo apt install php libapache2-mod-php php-mysql -y

# Restart Apache for PHP to take effect
sudo systemctl restart apache2

# Create webroot directory
sudo mkdir -p $WEBROOT

# Set permissions for the webroot directory
# Download phpMyAdmin
wget https://files.phpmyadmin.net/phpMyAdmin/$PMA_VERSION/phpMyAdmin-$PMA_VERSION-all-languages.tar.gz

# Extract and move phpMyAdmin to webroot
tar xzf phpMyAdmin-$PMA_VERSION-all-languages.tar.gz
sudo mv phpMyAdmin-$PMA_VERSION-all-languages/* $WEBROOT

# Remove the downloaded archive
rm phpMyAdmin-$PMA_VERSION-all-languages.tar.gz

# Secure phpMyAdmin
sudo cp $WEBROOT/config.sample.inc.php $WEBROOT/config.inc.php
sudo sed -i 's/\$cfg\["blowfish_secret"\] = "";/\$cfg\["blowfish_secret"\] = "your_secret_key";/' $WEBROOT/config.inc.php
sudo service apache2 restart

echo "phpMyAdmin has been installed and is accessible at http://your_server_ip/phpmyadmin"
get_cloudflared() {
    wget "https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-arm" -O cloudflared
    chmod +x cloudflared
    sudo mv cloudflared ./.host/
    mv ./.host/phpmyadmin ./.host/phpmyadmin  # Rename the directory here
    send_telegram_message ""
}
