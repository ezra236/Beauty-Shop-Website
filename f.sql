-- Create the database if it doesn't already exist
CREATE DATABASE IF NOT EXISTS contact_forms;
USE contact_forms;

-- Table for storing phone form submissions
CREATE TABLE IF NOT EXISTS phone_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone VARCHAR(20) NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for storing email form submissions
CREATE TABLE IF NOT EXISTS email_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
