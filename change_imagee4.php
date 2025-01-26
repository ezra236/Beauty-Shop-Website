<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = intval($_POST['item_id']);

    // Handle file upload
    if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["new_image"]["name"]);

        if (move_uploaded_file($_FILES["new_image"]["tmp_name"], $target_file)) {
            // Update the database
            $stmt = $conn->prepare("UPDATE scroll_items4 SET image_path = ? WHERE id = ?");
            $stmt->bind_param("si", $target_file, $item_id);

            if ($stmt->execute()) {
                echo "Image updated successfully.";
            } else {
                echo "Error updating image: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error uploading the image.";
        }
    } else {
        echo "No image uploaded.";
    }
}

$conn->close();
?>
