/* ==========================================
   Dark Mode Toggle
   Author: BJ Paul Cabunilas
========================================== */

document.addEventListener("DOMContentLoaded", () => {

    const html = document.documentElement;
    const toggle = document.getElementById("darkToggle");

    // Get saved theme
    let currentTheme = localStorage.getItem("theme");

    // Default to dark mode
    if (!currentTheme) {
        currentTheme = "dark";
        localStorage.setItem("theme", currentTheme);
    }

    // Apply saved theme
    applyTheme(currentTheme);

    // Toggle theme
    if (toggle) {

        toggle.addEventListener("click", () => {

            currentTheme = html.classList.contains("dark")
                ? "light"
                : "dark";

            localStorage.setItem("theme", currentTheme);

            applyTheme(currentTheme);

        });

    }

    // Apply Theme
    function applyTheme(theme) {

        const icon = toggle ? toggle.querySelector("i") : null;

        if (theme === "dark") {

            html.classList.add("dark");

            document.body.classList.remove(
                "bg-white",
                "text-slate-900"
            );

            document.body.classList.add(
                "bg-slate-950",
                "text-white"
            );

            if (icon) {

                icon.classList.remove("fa-sun");

                icon.classList.add("fa-moon");

            }

        } else {

            html.classList.remove("dark");

            document.body.classList.remove(
                "bg-slate-950",
                "text-white"
            );

            document.body.classList.add(
                "bg-white",
                "text-slate-900"
            );

            if (icon) {

                icon.classList.remove("fa-moon");

                icon.classList.add("fa-sun");

            }

        }

    }

});