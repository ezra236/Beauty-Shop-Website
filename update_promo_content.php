<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $description = $_POST['description'];

    // Handle image uploads
    $image1 = $_FILES['image1'];
    $image2 = $_FILES['image2'];
    $uploadDir = 'uploads/';
    
    $imagePath1 = $uploadDir . basename($image1['name']);
    $imagePath2 = $uploadDir . basename($image2['name']);

    if (move_uploaded_file($image1['tmp_name'], $imagePath1) && move_uploaded_file($image2['tmp_name'], $imagePath2)) {
        // Save data in the database
        $conn = new mysqli('localhost', 'root', '', 'website_db');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "UPDATE promo_content SET heading=?, subheading=?, description=?, image_path1=?, image_path2=? WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $heading, $subheading, $description, $imagePath1, $imagePath2);
        
        if ($stmt->execute()) {
            echo "Promo content updated successfully!";
        } else {
            echo "Error updating promo content: " . $stmt->error;
        }
        
        $stmt->close();
        $conn->close();
    } else {
        echo "Error uploading images.";
    }
}
?>
