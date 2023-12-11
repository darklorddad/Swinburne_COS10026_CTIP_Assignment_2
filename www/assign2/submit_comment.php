<?php
// Check if comment is set
if (!isset($_POST['comment'])) {
    die('Comment not provided');
}

$comment = $_POST['comment'];

// Database credentials
$db_host = 'localhost';
$db_name = 'testdb';
$db_charset = 'utf8';
$db_user = 'correct_username'; // replace with your correct username
$db_pass = 'correct_password'; // replace with your correct password

try {
    // Connect to your database
    $db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=$db_charset", $db_user, $db_pass);

    // Insert the comment into the database
    $query = $db->prepare("INSERT INTO comments (comment) VALUES (?)");
    $query->execute([$comment]);

    // Redirect back to the original page
    header('Location: contributions.php');
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
?>