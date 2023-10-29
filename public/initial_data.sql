-- Create a database if it doesn't exist
CREATE DATABASE IF NOT EXISTS interac;

-- Use the database
USE interac;

-- Create a 'selfies' table
CREATE TABLE IF NOT EXISTS selfies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dataUrl TEXT NOT NULL
);

-- Add any additional SQL commands you need to set up your database here
