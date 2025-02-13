import './styles/addPost.css';
    $(document).ready(function() {
    // Close card functionality
    $('.close-btn').click(function() {
        $('.card').slideUp();
    });

    // Image preview functionality
    $('#postImage').change(function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
    $('#imagePreview').html('<img src="' + e.target.result + '" class="preview-image" alt="Preview">');
};

    if (file) {
    reader.readAsDataURL(file);
}
});

    // Form submission
    $('#postForm').submit(function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    // Add your AJAX submission logic here
    $.ajax({
    type: 'POST',
    url: '/your-endpoint',
    data: formData,
    processData: false,
    contentType: false,
    success: function(response) {
    console.log('Post created successfully:', response);
    // Reset form and close card
    $('#postForm')[0].reset();
    $('#imagePreview').empty();
    $('.card').slideUp();
},
    error: function(xhr, status, error) {
    console.error('Error creating post:', error);
}
});
});
});

$(document).ready(function () {
    $('.close-card-btn').on('click', function () {
        $('.card').slideUp(); // Slide up (hide) the card when the button is clicked
    });
});

