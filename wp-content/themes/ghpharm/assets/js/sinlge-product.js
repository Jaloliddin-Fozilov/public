// Get the main image element
const mainImage = document.getElementById('main-image');

// Get all thumbnail images
const thumbnails = document.querySelectorAll('.thumbnail-item img');

// Add click event to each thumbnail
thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', function() {
        // Get the full-size image source from data-src attribute
        const newSrc = this.getAttribute('data-src');

        // Update the main image source
        mainImage.setAttribute('src', newSrc);
    });
});
