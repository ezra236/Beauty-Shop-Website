-- Create the database
CREATE DATABASE IF NOT EXISTS website_db;

-- Use the database
USE website_db;

-- Create the table to store scroll-items
CREATE TABLE IF NOT EXISTS scroll_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_name VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL
);

-- Insert sample data into the table
INSERT INTO scroll_items (image_name, image_path) VALUES
('Image 1', 'mod1.jpg'),
('Image 2', 'mod2.jpg'),
('Image 3', 'lips.jpg'),
('Image 4', 'pip.jpeg'),
('Image 5', 'mod.jpg'),
('Image 6', 'Pink lip gloss💗.jpg');
