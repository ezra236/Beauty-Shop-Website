<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'website_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all items from the 'wonderful' table
$sql = "SELECT * FROM wonderful";
$result = $conn->query($sql);

// Display items
echo '<div class="s">
        <div class="wonderful">';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="wonderful-item">
                <img src="' . htmlspecialchars($row['image_path']) . '" alt="Product Image">
                <h3>' . htmlspecialchars($row['heading']) . '</h3>
                <p>' . htmlspecialchars($row['description']) . '</p>
                <a href="All-products.html">SHOP NOW</a>
              </div>';
    }
} else {
    echo '<p>No items found.</p>';
}
echo '  </div>
      </div>';

$conn->close();
?>
