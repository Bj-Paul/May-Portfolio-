/* ==========================================
   Typing Animation
   Author: BJ Paul Cabunilas
========================================== */

document.addEventListener("DOMContentLoaded", function () {

    // Make sure Typed.js is loaded
    if (typeof Typed === "undefined") {
        console.warn("Typed.js library is not loaded.");
        return;
    }

    // Make sure the target element exists
    const typedElement = document.getElementById("typed");

    if (!typedElement) return;

    new Typed("#typed", {

        strings: [

            "Web Developer",

            "PHP Developer",

            "JavaScript Developer",

            "Frontend Developer",

            "Backend Developer",

            "Tailwind CSS Developer",

            "MySQL Database Developer",

            "Responsive Web Designer",

            "Chat Moderator (1 Year Experience)"

        ],

        typeSpeed: 60,

        backSpeed: 40,

        backDelay: 1800,

        startDelay: 500,

        smartBackspace: true,

        shuffle: false,

        loop: true,

        showCursor: true,

        cursorChar: "|",

        autoInsertCss: true

    });

});