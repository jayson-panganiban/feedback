document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('feedbackForm');

    form.addEventListener('submit', function(event) {
        // Check if the rating is selected
        const ratingChecked = document.querySelector('input[name="rating"]:checked');
        const ratingFeedback = document.getElementById('ratingFeedback');

        if (!ratingChecked) {
            event.preventDefault();
            event.stopPropagation();
            ratingFeedback.style.display = 'block';
        } else {
            ratingFeedback.style.display = 'none';
        }

        // Check if other fields are valid
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    }, false);
});
