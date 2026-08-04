/* ==========================================
   Counter Animation
   Author: BJ Paul Cabunilas
========================================== */

document.addEventListener("DOMContentLoaded", () => {

    const counters = document.querySelectorAll(".counter");

    if (counters.length === 0) return;

    const speed = 40;

    const animateCounter = (counter) => {

        const target = parseInt(counter.getAttribute("data-target"));
        let count = 0;

        const increment = Math.ceil(target / speed);

        const updateCounter = () => {

            if (count < target) {

                count += increment;

                if (count > target) {
                    count = target;
                }

                counter.textContent = count;

                requestAnimationFrame(updateCounter);

            } else {

                counter.textContent = target;

            }

        };

        updateCounter();

    };

    const observer = new IntersectionObserver((entries, observer) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                animateCounter(entry.target);

                observer.unobserve(entry.target);

            }

        });

    }, {
        threshold: 0.5
    });

    counters.forEach(counter => {

        observer.observe(counter);

    });

});