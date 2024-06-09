<?php

use PHPUnit\Framework\TestCase;

class FeedbackTest extends TestCase
{
    protected $db;

    protected function setUp(): void
    {
        $this->db = new SQLite3(':memory:');
        $this->db->exec("CREATE TABLE feedback (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            email TEXT NOT NULL,
            message TEXT NOT NULL,
            rating INTEGER NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");
    }

    protected function tearDown(): void
    {
        $this->db->close();
    }

    public function testInsertFeedback()
    {
        $stmt = $this->db->prepare('INSERT INTO feedback (name, email, message, rating) VALUES (:name, :email, :message, :rating)');
        $stmt->bindValue(':name', 'Test User', SQLITE3_TEXT);
        $stmt->bindValue(':email', 'test@example.com', SQLITE3_TEXT);
        $stmt->bindValue(':message', 'This is a test message.', SQLITE3_TEXT);
        $stmt->bindValue(':rating', 5, SQLITE3_INTEGER);

        $result = $stmt->execute();
        $this->assertNotFalse($result, 'Failed to insert feedback');

        $result = $this->db->query('SELECT * FROM feedback WHERE name = "Test User"');
        $feedback = $result->fetchArray(SQLITE3_ASSOC);

        $this->assertNotEmpty($feedback, 'No feedback found');
        $this->assertEquals('Test User', $feedback['name']);
        $this->assertEquals('test@example.com', $feedback['email']);
        $this->assertEquals('This is a test message.', $feedback['message']);
        $this->assertEquals(5, $feedback['rating']);
    }
}
