USE website_db;
CREATE TABLE promo_content4 (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Unique identifier for each record
    heading VARCHAR(255) NOT NULL,      -- Heading (H1) text
    subheading VARCHAR(255) NOT NULL,   -- Subheading (H4) text
    description TEXT NOT NULL,          -- Description paragraph
    image_path VARCHAR(255) NOT NULL,   -- Path to the promotional image
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Tracks the last update
);
INSERT INTO promo_content4 (heading, subheading, description, image_path) 
VALUES (
    'THE HOLIDAY HANGOVER',
    'UP TO 60% OFF SELECT ITEMS',
    'Hit refresh + save on routine faves. Exclusions apply.',
    'uploads/b22.jpg'
);

