<?php
header("Content-Type: application/json");

// Get the POST data (JSON format)
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['email'])) {
    echo json_encode(['success' => false, 'message' => 'Email not provided.']);
    exit;
}

$email = $data['email'];

try {
    // Connect to the database (adjust these settings as needed)
    $pdo = new PDO("mysql:host=localhost;dbname=contact_forms", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Insert the email into the email_submissions table
    $stmt = $pdo->prepare("INSERT INTO email_submissions (email) VALUES (:email)");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    echo json_encode(['success' => true, 'message' => 'Email submitted successfully.']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>
