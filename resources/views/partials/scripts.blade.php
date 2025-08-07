<script id="mobile-menu-toggle">
    document.addEventListener("DOMContentLoaded", function () {
        const menuBtn = document.getElementById("mobile-menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener("click", function () {
                mobileMenu.classList.toggle("hidden");
            });
        }
    });
</script>
<script id="hero-slider">
    document.addEventListener("DOMContentLoaded", function () {
        const sliderTrack = document.getElementById("hero-slider");
        const slides = sliderTrack.children;
        const dots = document.querySelectorAll(".slider-dot");
        const prevBtn = document.getElementById("prev-slide");
        const nextBtn = document.getElementById("next-slide");
        let currentSlide = 0;
        const totalSlides = slides.length;
        function updateSlider() {
            const translateX = -currentSlide * 100;
            sliderTrack.style.transform = `translateX(${translateX}%)`;
            dots.forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.add("active", "bg-white");
                    dot.classList.remove("bg-opacity-50");
                } else {
                    dot.classList.remove("active", "bg-white");
                    dot.classList.add("bg-opacity-50");
                }
            });
        }
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }
        nextBtn.addEventListener("click", nextSlide);
        prevBtn.addEventListener("click", prevSlide);
        dots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                currentSlide = index;
                updateSlider();
            });
        });
        setInterval(nextSlide, 5000);
    });
</script>
<script id="testimonial-slider">
    document.addEventListener("DOMContentLoaded", function () {
        const testimonialTrack = document.getElementById("testimonial-slider");
        const testimonialDots = document.querySelectorAll(".testimonial-dot");
        let currentTestimonial = 0;
        const totalTestimonials = 3;
        function updateTestimonialSlider() {
            const translateX = -currentTestimonial * 100;
            testimonialTrack.style.transform = `translateX(${translateX}%)`;
            testimonialDots.forEach((dot, index) => {
                if (index === currentTestimonial) {
                    dot.classList.add("active", "bg-primary");
                    dot.classList.remove("bg-gray-300");
                } else {
                    dot.classList.remove("active", "bg-primary");
                    dot.classList.add("bg-gray-300");
                }
            });
        }
        function nextTestimonial() {
            currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
            updateTestimonialSlider();
        }
        testimonialDots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                currentTestimonial = index;
                updateTestimonialSlider();
            });
        });
        setInterval(nextTestimonial, 4000);
    });
</script>
<script id="gallery-lightbox">
    document.addEventListener("DOMContentLoaded", function () {
        const galleryItems = document.querySelectorAll(".gallery-item");
        galleryItems.forEach((item) => {
            item.addEventListener("click", function () {
                const bgImage = this.querySelector("div").style.backgroundImage;
                const imageUrl = bgImage.slice(5, -2);
                const lightbox = document.createElement("div");
                lightbox.className = "fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4";
                lightbox.innerHTML = `
                    <div class="relative max-w-4xl max-h-full">
                        <img src="${imageUrl}" alt="Gallery Image" class="max-w-full max-h-full object-contain rounded-lg">
                        <button class="absolute top-4 right-4 w-10 h-10 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center text-white transition-all" onclick="this.closest('.fixed').remove()">
                            <i class="ri-close-line text-xl"></i>
                        </button>
                    </div>
                `;
                document.body.appendChild(lightbox);
                lightbox.addEventListener("click", function (e) {
                    if (e.target === lightbox) {
                        lightbox.remove();
                    }
                });
            });
        });
    });
</script>