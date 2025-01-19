USE website_db;
CREATE TABLE detail (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Unique identifier for each record
    heading VARCHAR(255) NOT NULL,      -- Main heading (H1)
    subheading VARCHAR(255) NOT NULL,   -- Subheading (H2)
    description TEXT NOT NULL,          -- Paragraph description
    image_path VARCHAR(255) NOT NULL,   -- Path to the image
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Tracks the last update
);
INSERT INTO detail (heading, subheading, description, image_path) 
VALUES (
    'CKARY BEAUTY',
    'SNATCH THE FENTY FACE',
    'Ckary\'s real-life routine that\'s the base to every showstopping look',
    'uploads/t1.jpg'
);
