<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "review_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $review = $conn->real_escape_string($_POST['review']);
    $headline = $conn->real_escape_string($_POST['headline']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $age_range = $conn->real_escape_string($_POST['age_range']);
    $gender = $conn->real_escape_string($_POST['gender']);

    // Insert into database
    $sql = "INSERT INTO reviews2 (review, headline, name, email, age_range, gender) 
            VALUES ('$review', '$headline', '$name', '$email', '$age_range', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
