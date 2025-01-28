CREATE DATABASE website_db;

USE website_db;

CREATE TABLE shampoo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL
);

INSERT INTO shampoo (image_path) VALUES
('hb.jpeg'),
('mod1.jpg'),
('hb1.jpeg'),
('h3.jpg'),
('h2.jpg'),
('h1.jpg');
