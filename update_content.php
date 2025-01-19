<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $description = $_POST['description'];

    // Handle image upload
    $image = $_FILES['image'];
    $uploadDir = 'uploads/';
    $imagePath = $uploadDir . basename($image['name']);
    
    if (move_uploaded_file($image['tmp_name'], $imagePath)) {
        // Save data in the database
        $conn = new mysqli('localhost', 'root', '', 'website_db');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "UPDATE home_content SET heading=?, subheading=?, description=?, image_path=? WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $heading, $subheading, $description, $imagePath);
        
        if ($stmt->execute()) {
            echo "Content updated successfully!";
        } else {
            echo "Error updating content: " . $stmt->error;
        }
        
        $stmt->close();
        $conn->close();
    } else {
        echo "Error uploading image.";
    }
}
?>