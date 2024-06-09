$(document).ready(function(){
    $('.star-rating input').click(function(){
        var rating = $(this).val();
        $('.star-rating label').each(function(){
            if ($(this).prev('input').val() <= rating) {
                $(this).css('color', '#ffb86c'); // Orange
            } else {
                $(this).css('color', '#44475a'); // Default
            }
        });
    });

    // Form validation
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
});
