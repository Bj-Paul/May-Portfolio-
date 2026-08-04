<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= isset($pageTitle) ? $pageTitle . " | Your Name" : "Your Name |  Web Developer"; ?>
    </title>

    <meta name="description" content="Professional portfolio of a  Web Developer specializing in PHP, JavaScript, Tailwind CSS, and MySQL.">
    <meta name="keywords" content="PHP Developer, Web Developer, Tailwind CSS, JavaScript, Portfolio">
    <meta name="author" content="Your Name">

    <!-- Open Graph -->
    <meta property="og:title" content="Your Name |  Web Developer">
    <meta property="og:description" content="Modern  Developer Portfolio">
    <meta property="og:image" content="assets/images/profile.png">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: '#6366F1',
                        secondary: '#8B5CF6'
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- AOS Animation -->
    <link rel="stylesheet"
        href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <!-- Swiper -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/animations.css">

</head>

<body class="bg-slate-950 text-white font-poppins overflow-x-hidden">

<!-- Scroll Progress -->
<div id="progressBar"
     class="fixed top-0 left-0 h-1 bg-gradient-to-r from-blue-500 to-purple-600 z-[9999]"
     style="width:0%;">
</div>

<!-- Loading Screen -->
<div id="loader"
     class="fixed inset-0 bg-slate-950 flex flex-col items-center justify-center z-[99999]">

    <div class="w-16 h-16 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin"></div>

    <p class="mt-6 text-gray-300 tracking-widest">
        Loading Portfolio...
    </p>

</div>