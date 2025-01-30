<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $position = intval($_POST['position']); // Ensure it's an integer
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

    // Check file size (optional - 10MB limit)
    if ($_FILES["image"]["size"] > 10000000) {
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

        // Update existing item at the given position
        $updateSql = "UPDATE wonderful 
                      SET image_path = ?, heading = ?, description = ? 
                      WHERE id = ?";
        
        $stmt = $conn->prepare($updateSql);
        $stmt->bind_param("sssi", $targetFile, $heading, $description, $position);

        if ($stmt->execute()) {
            echo "Promo item updated successfully!";
        } else {
            echo "Error updating item: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
