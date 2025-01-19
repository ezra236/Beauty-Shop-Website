<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $position = $_POST['position'];
    $image = $_POST['image'];
    $heading = $_POST['heading'];
    $description = $_POST['description'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'website_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete item at the given position (1-based index)
    $deleteSql = "DELETE FROM wonderful WHERE id = $position";
    if ($conn->query($deleteSql) === TRUE) {
        // Insert new item
        $insertSql = "INSERT INTO wonderful (image_path, heading, description) 
                      VALUES ('$image', '$heading', '$description')";
        if ($conn->query($insertSql) === TRUE) {
            echo "Promo item updated successfully!";
        } else {
            echo "Error inserting new item: " . $conn->error;
        }
    } else {
        echo "Error deleting item: " . $conn->error;
    }

    $conn->close();
}
?>
