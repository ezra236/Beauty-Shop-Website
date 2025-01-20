<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $position = $_POST['position'];
    $heading = $_POST['heading'];
    $description = $_POST['description'];

    // Handle file upload
    $targetDir = "uploads/"; // Directory to save uploaded images
    $originalFileName = basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
    $uniqueFileName = pathinfo($originalFileName, PATHINFO_FILENAME) . '_' . time() . '.' . $imageFileType;
    $targetFile = $targetDir . $uniqueFileName;

    // Check if the file is an actual image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }

    // Check file size (optional - 2MB limit here)
    if ($_FILES["image"]["size"] > 2000000) {
        die("Sorry, your file is too large.");
    }

    // Allow certain file formats
    if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    }

    // Attempt to upload the file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars($uniqueFileName) . " has been uploaded.";

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
                          VALUES ('$targetFile', '$heading', '$description')";
            if ($conn->query($insertSql) === TRUE) {
                echo "Promo item updated successfully!";
            } else {
                echo "Error inserting new item: " . $conn->error;
            }
        } else {
            echo "Error deleting item: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
