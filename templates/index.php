<main>
    <section class="feedback-form">
        <?php if (!empty($feedback_message)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $feedback_message; ?>
            </div>
        <?php endif; ?>
        <form action="index.php" method="post" class="needs-validation" novalidate>
            <div class="mb-4">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
                <div class="invalid-feedback">
                    Please enter your name.
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>
            <div class="mb-4">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                <div class="invalid-feedback">
                    Please enter your message.
                </div>
            </div>
            <div class="mb-4">
                <label for="rating" class="form-label">Rating:</label>
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 stars">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 stars">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 stars">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 stars">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star">1 star</label>
                </div>
                <div class="invalid-feedback">
                    Please select a rating.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
    </section>
    <section class="view-reports mt-4">
        <a href="templates/report.php" class="btn btn-secondary">View Feedback Reports</a>
    </section>
</main>
