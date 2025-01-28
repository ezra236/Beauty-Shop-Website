<?php
if (isset($_POST['submit'])) {
    // Get the selected image ID and the new image file
    $image_id = $_POST['image_id'];
    $new_image = $_FILES['new_image']['name'];
    $target_dir = "uploads/";

    // Move the new image to the uploads directory
    if (move_uploaded_file($_FILES['new_image']['tmp_name'], $target_dir . $new_image)) {
        // Connect to the database
        $conn = new mysqli("localhost", "root", "", "website_db");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Delete the old image from the database
        $sql = "DELETE FROM shampoo WHERE id = $image_id";
        if ($conn->query($sql) === TRUE) {
            // Insert the new image into the database
            $sql = "INSERT INTO shampoo (image_path) VALUES ('$target_dir$new_image')";
            if ($conn->query($sql) === TRUE) {
                echo "Image updated successfully!";
            } else {
                echo "Error updating image: " . $conn->error;
            }
        } else {
            echo "Error deleting image: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Error uploading file.";
    }
}
?>
