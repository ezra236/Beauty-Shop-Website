-- Create the database if it doesn't already exist
CREATE DATABASE IF NOT EXISTS ckay_users;
USE ckay_users;

-- Create a table for storing sign-in or sign-up submissions
CREATE TABLE IF NOT EXISTS sign_in_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    updates_opt_in TINYINT(1) NOT NULL DEFAULT 0,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
