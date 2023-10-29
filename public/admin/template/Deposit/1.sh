#!/bin/bash

# Check if Composer is not already installed
if [ ! -f "composer.phar" ]; then
    echo "Installing Composer..."
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
else
    echo "Composer is already installed."
fi

# Check if the vendor directory exists, create it if not
if [ ! -d "vendor" ]; then
    mkdir vendor
fi

# Install PHPMailer using Composer
if [ ! -f "composer.json" ]; then
    echo '{
        "require": {
            "phpmailer/phpmailer": "^6.5"
        }
    }' > composer.json
    php composer.phar install
else
    echo "Composer configuration file (composer.json) already exists. PHPMailer not installed."
fi

echo "Installation completed."

