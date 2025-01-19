CREATE DATABASE website_db;
USE website_db;
CREATE TABLE home_content (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each record
    heading VARCHAR(255) NOT NULL,     -- For the H1 text
    subheading VARCHAR(255) NOT NULL,  -- For the H4 text
    description TEXT NOT NULL,         -- For the paragraph content
    image_path VARCHAR(255) NOT NULL,  -- Path to the uploaded image
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Tracks the last update
);
INSERT INTO home_content (heading, subheading, description, image_path) 
VALUES (
    'Welcome to Our Store!',
    'Seasonal Sale is Live',
    'Enjoy up to 60% off on select items. Don’t miss out on our biggest sale of the year!',
    'uploads/default.jpg'
);



