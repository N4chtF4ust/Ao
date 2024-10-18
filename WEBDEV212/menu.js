let slideIndex = 0;

function showSlides() {
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    // Remove previous floating classes
    slides.forEach(slide => {
        slide.querySelector('.product-box').classList.remove('floating', 'floating-side');
    });

    // Ensure the middleIndex calculation is safe
    const middleIndex = slideIndex + 2;

    // Adjust floating products based on middle index
    if (totalSlides > 0) {
        if (middleIndex < totalSlides) {
            slides[middleIndex].querySelector('.product-box').classList.add('floating'); // Middle product zoom in
        }
        if (middleIndex > 0) {
            slides[Math.max(middleIndex - 2, 0)].querySelector('.product-box').classList.add('floating-side'); // Left side product zoom out
        }
        if (middleIndex < totalSlides - 1) {
            slides[Math.min(middleIndex + 2, totalSlides - 1)].querySelector('.product-box').classList.add('floating-side'); // Right side product zoom out
        }
    }

    const offset = -slideIndex * (100 / Math.min(5, totalSlides)); // Display up to 5 products
    document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
}

function changeSlide(direction) {
    const totalSlides = document.querySelectorAll('.carousel-item').length;

    slideIndex += direction;
    slideIndex = Math.max(0, Math.min(slideIndex, totalSlides - 5)); // Clamp to valid range

    showSlides();
}

// Toggle shop section
function toggleShopSection() {
    const shopSection = document.getElementById('shop-section');
    shopSection.classList.toggle('active');
}

// Auto-slide every 7.5 seconds
setInterval(() => {
    changeSlide(1);
}, 7500);

// Initial display
document.addEventListener("DOMContentLoaded", () => {
    showSlides();
});

// Filter products
function filterProducts(category) {
    const products = document.querySelectorAll('.product');
    products.forEach(product => {
        product.style.display = (category === 'all' || product.getAttribute('data-category') === category) ? 'block' : 'none';
    });
}

// Show all products by default
filterProducts('all');

