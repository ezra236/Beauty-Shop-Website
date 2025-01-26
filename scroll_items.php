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

// Retrieve images from the database
$sql = "SELECT * FROM scroll_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="scroll-items" data-image="' . htmlspecialchars($row['image_path']) . '">';
        echo '<img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['image_name']) . '">';
        echo '</div>';
    }
} else {
    echo "No images found.";
}

$conn->close();
?>
