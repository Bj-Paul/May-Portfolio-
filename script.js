/* ==========================================
   Portfolio Main JavaScript
   Author: BJ Paul Cabunilas
========================================== */

document.addEventListener("DOMContentLoaded", () => {

    /* ===============================
       Loading Screen
    =============================== */

    const loader = document.getElementById("loader");

    window.addEventListener("load", () => {

        if (loader) {

            loader.style.opacity = "0";

            loader.style.visibility = "hidden";

            loader.style.transition = "0.6s";

        }

    });

    /* ===============================
       Sticky Navbar
    =============================== */

    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", () => {

        if (!navbar) return;

        if (window.scrollY > 80) {

            navbar.classList.add("scrolled");

        } else {

            navbar.classList.remove("scrolled");

        }

    });

    /* ===============================
       Scroll Progress Bar
    =============================== */

    const progressBar = document.getElementById("progressBar");

    window.addEventListener("scroll", () => {

        if (!progressBar) return;

        const scrollTop = document.documentElement.scrollTop;

        const scrollHeight =
            document.documentElement.scrollHeight -
            document.documentElement.clientHeight;

        const progress = (scrollTop / scrollHeight) * 100;

        progressBar.style.width = progress + "%";

    });

    /* ===============================
       Mobile Menu
    =============================== */

    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("close-menu");
    const mobileMenu = document.getElementById("mobile-menu");

    if (menuBtn && mobileMenu) {

        menuBtn.addEventListener("click", () => {

            mobileMenu.style.right = "0";

        });

    }

    if (closeBtn && mobileMenu) {

        closeBtn.addEventListener("click", () => {

            mobileMenu.style.right = "-100%";

        });

    }

    /* ===============================
       Close Mobile Menu
    =============================== */

    document.querySelectorAll("#mobile-menu a").forEach(link => {

        link.addEventListener("click", () => {

            if (mobileMenu) {

                mobileMenu.style.right = "-100%";

            }

        });

    });

    /* ===============================
       Smooth Scroll
    =============================== */

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {

        anchor.addEventListener("click", function (e) {

            const target = document.querySelector(this.getAttribute("href"));

            if (target) {

                e.preventDefault();

                target.scrollIntoView({

                    behavior: "smooth"

                });

            }

        });

    });

    /* ===============================
       Active Navigation
    =============================== */

    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll("nav a");

    window.addEventListener("scroll", () => {

        let current = "";

        sections.forEach(section => {

            const top = section.offsetTop - 150;

            const height = section.offsetHeight;

            if (pageYOffset >= top && pageYOffset < top + height) {

                current = section.getAttribute("id");

            }

        });

        navLinks.forEach(link => {

            link.classList.remove("text-blue-400");

            if (link.getAttribute("href") === "#" + current) {

                link.classList.add("text-blue-400");

            }

        });

    });

    /* ===============================
       Back To Top Button
    =============================== */

    const backToTop = document.getElementById("backToTop");

    if (backToTop) {

        window.addEventListener("scroll", () => {

            if (window.scrollY > 300) {

                backToTop.classList.remove("hidden");

            } else {

                backToTop.classList.add("hidden");

            }

        });

        backToTop.addEventListener("click", () => {

            window.scrollTo({

                top: 0,

                behavior: "smooth"

            });

        });

    }

    /* ===============================
       Animated Skill Bars
    =============================== */

    const skillBars = document.querySelectorAll(".skill-progress");

    const animateSkills = () => {

        skillBars.forEach(bar => {

            const width = bar.dataset.width;

            if (width) {

                bar.style.width = width;

            }

        });

    };

    const skillsSection = document.getElementById("skills");

    if (skillsSection) {

        const observer = new IntersectionObserver(entries => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    animateSkills();

                }

            });

        });

        observer.observe(skillsSection);

    }

    /* ===============================
       AOS Animation
    =============================== */

    if (typeof AOS !== "undefined") {

        AOS.init({

            duration: 1000,

            once: true,

            easing: "ease-in-out"

        });

    }

    /* ===============================
       Typed.js
    =============================== */

    if (typeof Typed !== "undefined" && document.getElementById("typed")) {

        new Typed("#typed", {

            strings: [

                " Web Developer",

                "PHP Developer",

                "JavaScript Developer",

                "Frontend Developer",

                "Backend Developer"

            ],

            typeSpeed: 60,

            backSpeed: 40,

            backDelay: 1800,

            loop: true

        });

    }

});