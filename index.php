<?php
session_start();

// Include the database configuration
include 'config.php';

// Handle form submission
$feedback_message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    // Prepare the SQL statement
    $stmt = $db->prepare('INSERT INTO feedback (name, email, message, rating) VALUES (:name, :email, :message, :rating)');
    if ($stmt) {
        $stmt->bindValue(':name', $name, SQLITE3_TEXT);
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $stmt->bindValue(':message', $message, SQLITE3_TEXT);
        $stmt->bindValue(':rating', $rating, SQLITE3_INTEGER);

        // Execute the statement
        if ($stmt->execute()) {
            // Store success message in session
            $_SESSION['feedback_success'] = "Feedback submitted successfully!";
            // Redirect to the index page after successful submission
            header('Location: index.php');
            exit();
        } else {
            $feedback_message = "Failed to submit feedback: " . $db->lastErrorMsg();
        }
    } else {
        $feedback_message = "Failed to prepare the statement: " . $db->lastErrorMsg();
    }
}

// Include the header template
include 'templates/header.php';
// Include the index template
include 'templates/index.php';
// Include the footer template
include 'templates/footer.php';
?>
