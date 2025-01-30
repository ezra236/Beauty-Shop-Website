<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'website_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all items from the 'wonderful' table in descending order (most recent first)
$sql = "SELECT * FROM wonderful ORDER BY id DESC";
$result = $conn->query($sql);

// Define the list of unique links
$links = ["All-products.html", "productA.html", "productB.html", "productC.html", "productD.html", "productE.html"];
$linkCount = count($links);

echo '<div class="s">
        <div class="wonderful">';

if ($result->num_rows > 0) {
    $index = 0;
    while ($row = $result->fetch_assoc()) {
        // Assign a unique link based on the item's position
        $itemLink = $links[$index % $linkCount];  // Loop through predefined links

        echo '<div class="wonderful-item">
                <img src="' . htmlspecialchars($row['image_path']) . '" alt="Product Image">
                <h3>' . htmlspecialchars($row['heading']) . '</h3>
                <p>' . htmlspecialchars($row['description']) . '</p>
                <a href="' . $itemLink . '">SHOP NOW</a>
              </div>';
        
        $index++;  // Move to the next link in the list
    }
} else {
    echo '<p>No items found.</p>';
}

echo '  </div>
      </div>';

$conn->close();
?>
