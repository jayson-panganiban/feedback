<?php
// Connect to the SQLite database
$db = new SQLite3(__DIR__ . '/feedback.db');

// Check if the connection was successful
if (!$db) {
    die("Database connection failed: " . $db->lastErrorMsg());
}
?>
