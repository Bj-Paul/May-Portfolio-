<!-- ================= NAVBAR ================= -->

<header
    id="navbar"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300">

    <nav class="max-w-7xl mx-auto px-6 py-4">

        <div class="glass flex items-center justify-between rounded-2xl px-6 py-4">

            <!-- Logo -->

            <a href="index.php"
                class="text-2xl font-extrabold tracking-wide">

                <span class="text-white">BJ PAUL</span>

                <span
                    class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">

                    Portfolio

                </span>

            </a>

            <!-- Desktop Menu -->

            <ul class="hidden lg:flex items-center gap-8 text-gray-300 font-medium">

                <li>
                    <a href="#home"
                        class="hover:text-blue-400 duration-300">
                        Home
                    </a>
                </li>

                <li>
                    <a href="#about"
                        class="hover:text-blue-400 duration-300">
                        About
                    </a>
                </li>

                <li>
                    <a href="#projects"
                        class="hover:text-blue-400 duration-300">
                        Projects
                    </a>
                </li>

                <li>
                    <a href="#services"
                        class="hover:text-blue-400 duration-300">
                        Services
                    </a>
                </li>

                <li>
                    <a href="#contact"
                        class="hover:text-blue-400 duration-300">
                        Contact
                    </a>
                </li>

            </ul>

            <!-- Right Side -->

            <div class="hidden lg:flex items-center gap-4">

                <!-- Dark Mode -->

                <button
                    id="darkToggle"
                    class="w-11 h-11 rounded-full glass flex items-center justify-center hover:bg-indigo-600 duration-300">

                    <i class="fas fa-moon"></i>

                </button>

                <!-- Resume -->

                <a href="resume/resume.pdf"
                    target="_blank"
                    class="px-5 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 hover:scale-105 duration-300 font-semibold">

                    Resume

                </a>

            </div>

            <!-- Mobile Button -->

            <button
                id="menu-btn"
                class="lg:hidden text-3xl">

                <i class="fas fa-bars"></i>

            </button>

        </div>

    </nav>

</header>

<!-- ================= MOBILE MENU ================= -->

<div
    id="mobile-menu"
    class="fixed top-0 right-[-100%] w-72 h-screen bg-slate-900 transition-all duration-500 z-[999] shadow-2xl">

    <div class="flex justify-between items-center p-6 border-b border-slate-700">

        <h2 class="text-xl font-bold">

            Menu

        </h2>

        <button id="close-menu">

            <i class="fas fa-times text-2xl"></i>

        </button>

    </div>

    <ul class="flex flex-col mt-8 text-lg">

        <li>

            <a class="block py-4 px-6 hover:bg-slate-800"
                href="#home">

                Home

            </a>

        </li>

        <li>

            <a class="block py-4 px-6 hover:bg-slate-800"
                href="#about">

                About

            </a>

        </li>

        <li>

            <a class="block py-4 px-6 hover:bg-slate-800"
                href="#skills">

                Skills

            </a>

        </li>

        <li>

            <a class="block py-4 px-6 hover:bg-slate-800"
                href="#experience">

                Experience

            </a>

        </li>

        <li>

            <a class="block py-4 px-6 hover:bg-slate-800"
                href="#projects">

                Projects

            </a>

        </li>

        <li>

            <a class="block py-4 px-6 hover:bg-slate-800"
                href="#services">

                Services

            </a>

        </li>

        <li>

            <a class="block py-4 px-6 hover:bg-slate-800"
                href="#contact">

                Contact

            </a>

        </li>

    </ul>

    <!-- Social Links -->

    <div class="absolute bottom-8 left-0 w-full">

        <div class="flex justify-center gap-5 text-2xl">

            <a href="#" class="hover:text-blue-400">
                <i class="fab fa-github"></i>
            </a>

            <a href="#" class="hover:text-blue-400">
                <i class="fab fa-linkedin"></i>
            </a>

            <a href="https://www.facebook.com/share/1JKeJpaRWY/" class="hover:text-blue-400">
                <i class="fab fa-facebook"></i>
            </a>

            <a href="#" class="hover:text-blue-400">
                <i class="fas fa-envelope"></i>
            </a>

        </div>

    </div>

</div>