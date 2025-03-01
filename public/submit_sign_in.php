<?php
// Enable error reporting for debugging (remove or adjust for production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

// Get the JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Validate required fields
if (!isset($data['email']) || empty($data['email'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Email is required.'
    ]);
    exit;
}

$email = $data['email'];
// Use the provided updates_opt_in or default to 0
$updates_opt_in = isset($data['updates_opt_in']) ? (int)$data['updates_opt_in'] : 0;

// Database connection parameters
$db_host = 'localhost';
$db_name = 'ckay_users'; // Must match your created database
$db_user = 'root';
$db_pass = ''; // Ensure this matches your MySQL credentials

try {
    // Connect to the database using PDO
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL INSERT statement
    $stmt = $pdo->prepare("INSERT INTO sign_in_submissions (email, updates_opt_in) VALUES (:email, :updates_opt_in)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':updates_opt_in', $updates_opt_in);

    // Execute the insertion
    $stmt->execute();

    // Return a JSON success response
    echo json_encode([
        'success' => true,
        'message' => 'Submission successful.'
    ]);
} catch (PDOException $e) {
    // Return error message if an exception occurs
    echo json_encode([
        'success' => false,
        'message' => 'Database error: ' . $e->getMessage()
    ]);
}
?>
