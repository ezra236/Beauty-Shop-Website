USE website_db;
CREATE TABLE wonderful (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Unique identifier for each item
    image_path VARCHAR(255) NOT NULL,    -- Image path of the product
    heading VARCHAR(255) NOT NULL,       -- Heading (H3) text
    description TEXT NOT NULL,           -- Description paragraph
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Tracks the last update
);
INSERT INTO wonderful (image_path, heading, description)
VALUES 
('br.jpg', 'UP TO 50% OFF LIP', 'So many lip faves to play with—what are you picking?'),
('pinj.jpg', 'UP TO 40% OFF FACE', 'No routine is complete without them.'),
('purp.jpg', 'UP TO 60% OFF EYE', 'Essentials that enhance every eye look.'),
('pu.jpg', 'UP TO 50% OFF LIP', 'So many lip faves to play with—what are you picking?'),
('lipss.jpg', 'UP TO 50% OFF LIP', 'So many lip faves to play with—what are you picking?'),
('pi.jpg', 'UP TO 50% OFF LIP', 'So many lip faves to play with—what are you picking?');
