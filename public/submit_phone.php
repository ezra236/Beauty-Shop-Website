<?php
header("Content-Type: application/json");

// Get the POST data (JSON format)
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['phone'])) {
    echo json_encode(['success' => false, 'message' => 'Phone not provided.']);
    exit;
}

$phone = $data['phone'];

try {
    // Connect to the database (adjust these settings as needed)
    $pdo = new PDO("mysql:host=localhost;dbname=contact_forms", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Insert the phone number into the phone_submissions table
    $stmt = $pdo->prepare("INSERT INTO phone_submissions (phone) VALUES (:phone)");
    $stmt->bindParam(':phone', $phone);
    $stmt->execute();
    
    echo json_encode(['success' => true, 'message' => 'Phone submitted successfully.']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>
