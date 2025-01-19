USE website_db;

CREATE TABLE promo_content (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Unique identifier for each record
    heading VARCHAR(255) NOT NULL,      -- Heading (H1) text
    subheading VARCHAR(255) NOT NULL,   -- Subheading (H4) text
    description TEXT NOT NULL,          -- Description paragraph
    image_path1 VARCHAR(255) NOT NULL,  -- Path to the first image
    image_path2 VARCHAR(255) NOT NULL,  -- Path to the second image
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Tracks the last update
);
INSERT INTO promo_content (heading, subheading, description, image_path1, image_path2)
VALUES (
    'THE HOLIDAY HANGOVER',
    'UP TO 60% OFF SELECT ITEMS',
    'Hit refresh + save on routine faves. Exclusions apply.',
    'uploads/pl.jpg',
    'uploads/beae.jpg'
);
