<?php
// Include the database configuration
include '../config.php';

// Fetch all feedback records
$result = $db->query('SELECT * FROM feedback');

// Include the header template
include 'header.php';
?>

<main>
    <section class="feedback-reports">
        <h2 class="text-center">Feedback Reports</h2>
        <table class="table table-dark table-striped table-hover mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetchArray(SQLITE3_ASSOC)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['message']); ?></td>
                        <td><?php echo htmlspecialchars($row['rating']); ?> stars</td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </section>
</main>

<?php
// Include the footer template
include 'footer.php';
?>
