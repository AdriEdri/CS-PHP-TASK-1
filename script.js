// Smooth scroll for internal navigation links (for pages with anchor links)
document.querySelectorAll('header nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent the default anchor behavior

        // Get the target section id from the link (assuming it's a section link like #home, #about, etc.)
        const targetId = this.getAttribute('href').substring(1); 
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 50, // Adjust scroll position to prevent overlap with header
                behavior: 'smooth' // Smooth scroll effect
            });
        }
    });
});

// Door image hover effect (scale up the door images on hover)
const doorImages = document.querySelectorAll('.door-image');
doorImages.forEach(door => {
    door.addEventListener('mouseenter', () => {
        door.style.transform = 'scale(1.1)'; // Slightly scale up the door on hover
    });
    door.addEventListener('mouseleave', () => {
        door.style.transform = 'scale(1)'; // Reset to original size when mouse leaves
    });
});

// Alert welcome message when the page loads
window.addEventListener('load', () => {
    alert("Welcome to the Door Adventure! Choose your door and start the adventure.");
});
