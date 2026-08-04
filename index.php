<?php
$pageTitle = "Home";
include 'includes/header.php';
include 'includes/navbar.php';
?>


<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">

    <div id="particles-js" class="absolute inset-0"></div>

    <div class="container mx-auto px-6 relative z-10">

        <div class="grid lg:grid-cols-2 gap-10 items-center">

            
            <div data-aos="fade-right">

                <p class="text-indigo-400 uppercase tracking-widest mb-3">
                    Welcome to my portfolio
                </p>

                <h1 class="text-5xl md:text-7xl font-black leading-tight">

                    Hi,

                    I'm

                    <span
                        class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                        Bj Paul Cabunilas!
                    </span>

                </h1>

                <h2 class="text-2xl mt-6 text-gray-300">

                    <span id="typed"></span>

                </h2>

                <p class="mt-8 text-gray-400 leading-8">

                    Web Developer with
                    1 year of experience building responsive,
                    modern web applications using PHP,
                    JavaScript, Tailwind CSS and MySQL.

                </p>

                <div class="flex gap-5 mt-10">

                    <a href="#projects"
                        class="px-8 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 font-semibold hover:scale-105 duration-300">

                        View Projects

                    </a>

                    <a href="resume/resume.pdf"
                        class="glass px-8 py-4 rounded-xl">

                        Download Resume

                    </a>

                </div>

            </div>

           

            <div
                class="flex justify-center"
                data-aos="zoom-in">

                <div
                    class="glass rounded-full p-3">

                    <img
                        src="assets/image/bj.png"
                        class="rounded-full w-96 h-96 object-cover"
                        alt="Profile">

                </div>

            </div>

        </div>

    </div>

</section>

<?php include 'about.php'; ?>
<?php include 'projects.php'; ?>
<?php include 'services.php'; ?>
<?php include 'contacts.php'; ?>

<?php include 'includes/footer.php'; ?>