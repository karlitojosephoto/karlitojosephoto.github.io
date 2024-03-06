// JavaScript for Testimonials Carousel
const testimonialContainer = document.querySelector('.testimonial-carousel') as HTMLElement;

if (testimonialContainer) {
    // Scroll the testimonials every 5 seconds
    let scrollInterval = setInterval(scrollTestimonials, 5000);

    function scrollTestimonials() {
        testimonialContainer.scrollBy({left: testimonialContainer.offsetWidth, behavior: 'smooth'});
    }

    // Pause scrolling when hovering over testimonials
    testimonialContainer.addEventListener('mouseenter', () => {
        clearInterval(scrollInterval);
    });

    testimonialContainer.addEventListener('mouseleave', () => {
        scrollInterval = setInterval(scrollTestimonials, 5000);
    });
}