<?php
// Connect to SQLite database
$db = new SQLite3('feedback.db');

// Drop the table if it already exists
$db->exec("DROP TABLE IF EXISTS feedback");

// Create the feedback table with the necessary columns
$db->exec("CREATE TABLE feedback (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL,
    message TEXT NOT NULL,
    rating INTEGER NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

// Check if the table was created successfully
if ($db->lastErrorCode() === 0) {
    echo "Database and table created successfully!";
} else {
    echo "Error creating database and table: " . $db->lastErrorMsg();
}
?>
