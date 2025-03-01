<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if needed
$database = "review_db"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$age_range = $_POST['age_range'] ?? '';

// Check if there are at least 2 reviews for the selected age range
$sql = "SELECT review, headline, name, age_range, gender, created_at 
        FROM reviews 
        WHERE age_range = ? 
        ORDER BY id DESC LIMIT 1";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $age_range);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    // If no matching age range found, return the latest review
    $sql = "SELECT review, headline, name, age_range, gender, created_at FROM reviews ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($row):
?>
    <div class="review-card">
        <div class="review-header">
            <div><?php echo htmlspecialchars($row['name']); ?></div>
            <div><?php echo htmlspecialchars($row['created_at']); ?></div>
        </div>
        <div class="starsr">★★★★★</div>
        <div class="review-titler"><?php echo htmlspecialchars($row['headline']); ?></div>
        <div class="review-body"><?php echo htmlspecialchars($row['review']); ?></div>
        <div class="review-details">
            <div class="des">Recommend To A Friend:</div><div class="dez">Yes</div>
            <div class="des">Age:</div><div class="dez"><?php echo htmlspecialchars($row['age_range']); ?></div>
            <div class="des">Gender:</div><div class="dez"><?php echo htmlspecialchars($row['gender']); ?></div>
            <div class="des">Shade Number:</div><div class="dez">Not sure</div>
        </div>
    </div>
<?php
else:
    echo "<div>No reviews available</div>";
endif;

$conn->close();
?>
