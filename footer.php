    </main>

    <!-- ================= BACK TO TOP ================= -->

    <button
        id="backToTop"
        class="hidden fixed bottom-6 right-6 w-14 h-14 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg hover:scale-110 transition duration-300 z-50">

        <i class="fas fa-arrow-up"></i>

    </button>

    <!-- ================= FOOTER ================= -->

    <footer class="bg-slate-950 border-t border-slate-800 py-12">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid md:grid-cols-3 gap-10">

                <!-- About -->

                <div>

                    <h2 class="text-3xl font-bold mb-4">

                        <span class="text-blue-400">BJ Paul</span>

                        <span class="text-purple-400">Cabunilas</span>

                    </h2>

                    <p class="text-gray-400 leading-8">

                        Web Developer with 1 year of experience
                        building responsive web applications using PHP, MySQL,
                        JavaScript, HTML5, CSS3, and Tailwind CSS.

                    </p>

                </div>

                <!-- Quick Links -->

                <div>

                    <h3 class="text-xl font-semibold mb-5">

                        Quick Links

                    </h3>

                    <ul class="space-y-3 text-gray-400">

                        <li><a href="#home" class="hover:text-blue-400">Home</a></li>

                        <li><a href="#about" class="hover:text-blue-400">About</a></li>

                        <li><a href="#skills" class="hover:text-blue-400">Skills</a></li>

                        <li><a href="#projects" class="hover:text-blue-400">Projects</a></li>

                        <li><a href="#services" class="hover:text-blue-400">Services</a></li>

                        <li><a href="#contact" class="hover:text-blue-400">Contact</a></li>

                    </ul>

                </div>

                <!-- Social -->

                <div>

                    <h3 class="text-xl font-semibold mb-5">

                        Connect With Me

                    </h3>

                    <div class="flex gap-4 mb-5">

                        <a href="https://github.com/Bj-Paul"
                           target="_blank"
                           class="social-icon w-12 h-12 rounded-full glass flex items-center justify-center">

                            <i class="fab fa-github text-xl"></i>

                        </a>

                        <a href="https://www.linkedin.com/in/cabunilas-bj-paul-v-a3083a427/"
                           target="_blank"
                           class="social-icon w-12 h-12 rounded-full glass flex items-center justify-center">

                            <i class="fab fa-linkedin-in text-xl"></i>

                        </a>

                        <a href="https://www.facebook.com/share/1JKeJpaRWY/"
                           target="_blank"
                           class="social-icon w-12 h-12 rounded-full glass flex items-center justify-center">

                            <i class="fab fa-facebook-f text-xl"></i>

                        </a>

                        <a href="mailto:bjpaulcabunilas15@gmail.com"
                           class="social-icon w-12 h-12 rounded-full glass flex items-center justify-center">

                            <i class="fas fa-envelope text-xl"></i>

                        </a>

                    </div>

                    <p class="text-gray-400">

                        📍 Escalante City, Negros Occidental, Philippines

                    </p>

                    <p class="text-gray-400 mt-2">

                        📧 bjpaulcabunilas15@gmail.com

                    </p>

                    <p class="text-gray-400 mt-2">

                        📱 +63 994 914 6166

                    </p>

                </div>

            </div>

            <!-- Copyright -->

            <div class="border-t border-slate-800 mt-12 pt-6 text-center">

                <p class="text-gray-500">

                    © <?php echo date("Y"); ?>

                    BJ Paul Cabunilas.

                    All Rights Reserved.

                </p>

            </div>

        </div>

    </footer>

    <!-- ================= JAVASCRIPT LIBRARIES ================= -->

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- ================= CUSTOM JAVASCRIPT ================= -->

    <script src="assets/js/script.js"></script>

    <script src="assets/js/darkmode.js"></script>

    <script src="assets/js/typing.js"></script>

    <script src="assets/js/counter.js"></script>

    <script src="assets/js/particles-config.js"></script>

    <script>

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            easing: "ease-in-out"
        });

    </script>

</body>

</html>