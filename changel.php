<?php
// Establish a database connection
$conn = new mysqli("localhost", "root", "", "website_db");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a file is uploaded
if (isset($_FILES['image'])) {
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/";  // Make sure the "uploads" folder exists
    $target_file = $target_dir . basename($image);

    // Move the uploaded file to the "uploads" directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // Delete the old image from the database
        $delete_sql = "UPDATE `right-shampoo` SET image_path = ? WHERE id = 1";  // Assuming id = 1
        $stmt = $conn->prepare($delete_sql);
        $stmt->bind_param("s", $target_file);
        $stmt->execute();

        echo "The image has been uploaded and updated successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "No image uploaded.";
}

$conn->close();
?>
