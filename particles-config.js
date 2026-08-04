/* ==========================================
   Particles.js Configuration
   Author: BJ Paul Cabunilas
========================================== */

document.addEventListener("DOMContentLoaded", function () {

    // Check if particles.js library is loaded
    if (typeof particlesJS === "undefined") {
        console.warn("particles.js library is not loaded.");
        return;
    }

    // Check if particles container exists
    const container = document.getElementById("particles-js");

    if (!container) return;

    particlesJS("particles-js", {

        particles: {

            number: {
                value: 70,
                density: {
                    enable: true,
                    value_area: 900
                }
            },

            color: {
                value: ["#3B82F6", "#8B5CF6", "#60A5FA"]
            },

            shape: {
                type: "circle"
            },

            opacity: {
                value: 0.5,
                random: true
            },

            size: {
                value: 3,
                random: true
            },

            line_linked: {
                enable: true,
                distance: 150,
                color: "#3B82F6",
                opacity: 0.25,
                width: 1
            },

            move: {
                enable: true,
                speed: 2,
                direction: "none",
                random: false,
                straight: false,
                out_mode: "out",
                bounce: false
            }

        },

        interactivity: {

            detect_on: "canvas",

            events: {

                onhover: {
                    enable: true,
                    mode: "grab"
                },

                onclick: {
                    enable: true,
                    mode: "push"
                },

                resize: true

            },

            modes: {

                grab: {

                    distance: 180,

                    line_linked: {

                        opacity: 0.7

                    }

                },

                push: {

                    particles_nb: 4

                }

            }

        },

        retina_detect: true

    });

});