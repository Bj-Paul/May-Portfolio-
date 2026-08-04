<!-- ================= CONTACT SECTION ================= -->

<section id="contact" class="py-24 bg-slate-900">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Title -->

        <div class="text-center mb-16" data-aos="fade-up">

            <span class="text-blue-400 uppercase tracking-widest font-semibold">
                Contact Me
            </span>

            <h2 class="text-5xl font-bold text-white mt-4">
                Let's Work Together
            </h2>

            <p class="text-gray-400 mt-5 max-w-3xl mx-auto">
                Interested in working together or have a project in mind?
                Feel free to send me a message. I'll get back to you as soon as possible.
            </p>

        </div>

        <div class="grid lg:grid-cols-2 gap-12">

            <!-- ================= LEFT ================= -->

            <div data-aos="fade-right">

                <div class="space-y-6">

                    <!-- Email -->

                    <div class="glass rounded-2xl p-6 flex items-center gap-5">

                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">

                            <i class="fas fa-envelope text-2xl text-white"></i>

                        </div>

                        <div>

                            <h3 class="text-xl font-semibold text-white">
                                Email
                            </h3>

                            <p class="text-gray-400">
                                bjpaulcabunilas15@gmail.com
                            </p>

                        </div>

                    </div>

                    <!-- Phone -->

                    <div class="glass rounded-2xl p-6 flex items-center gap-5">

                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-green-500 to-emerald-600 flex items-center justify-center">

                            <i class="fas fa-phone text-2xl text-white"></i>

                        </div>

                        <div>

                            <h3 class="text-xl font-semibold text-white">
                                Phone
                            </h3>

                            <p class="text-gray-400">
                                +63 994 914 6166
                            </p>

                        </div>

                    </div>

                    <!-- Location -->

                    <div class="glass rounded-2xl p-6 flex items-center gap-5">

                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-orange-500 to-red-600 flex items-center justify-center">

                            <i class="fas fa-map-marker-alt text-2xl text-white"></i>

                        </div>

                        <div>

                            <h3 class="text-xl font-semibold text-white">
                                Location
                            </h3>

                            <p class="text-gray-400">
                                Escalante City, Negros Occidental, Philippines
                            </p>

                        </div>

                    </div>

                    <!-- Social Links -->

                    <div class="glass rounded-2xl p-6">

                        <h3 class="text-xl font-semibold mb-6 text-white">

                            Connect with Me

                        </h3>

                        <div class="flex gap-5 text-2xl">

                            <a href="https://github.com/"
                               target="_blank"
                               class="w-14 h-14 rounded-full bg-slate-800 hover:bg-blue-600 flex items-center justify-center transition">

                                <i class="fab fa-github"></i>

                            </a>

                            <a href="https://linkedin.com/"
                               target="_blank"
                               class="w-14 h-14 rounded-full bg-slate-800 hover:bg-blue-600 flex items-center justify-center transition">

                                <i class="fab fa-linkedin-in"></i>

                            </a>

                            <a href="https://facebook.com/"
                               target="_blank"
                               class="w-14 h-14 rounded-full bg-slate-800 hover:bg-blue-600 flex items-center justify-center transition">

                                <i class="fab fa-facebook-f"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- ================= RIGHT ================= -->

            <div data-aos="fade-left">

                <form action="includes/contact-process.php"
                      method="POST"
                      class="glass rounded-3xl p-8">

                    <div class="grid md:grid-cols-2 gap-6">

                        <div>

                            <label class="block mb-2 text-gray-300">
                                Full Name
                            </label>

                            <input
                                type="text"
                                name="name"
                                required
                                class="w-full p-4 rounded-xl bg-slate-800 border border-slate-700 focus:border-blue-500 outline-none text-white">

                        </div>

                        <div>

                            <label class="block mb-2 text-gray-300">
                                Email Address
                            </label>

                            <input
                                type="email"
                                name="email"
                                required
                                class="w-full p-4 rounded-xl bg-slate-800 border border-slate-700 focus:border-blue-500 outline-none text-white">

                        </div>

                    </div>

                    <div class="mt-6">

                        <label class="block mb-2 text-gray-300">
                            Subject
                        </label>

                        <input
                            type="text"
                            name="subject"
                            required
                            class="w-full p-4 rounded-xl bg-slate-800 border border-slate-700 focus:border-blue-500 outline-none text-white">

                    </div>

                    <div class="mt-6">

                        <label class="block mb-2 text-gray-300">
                            Message
                        </label>

                        <textarea
                            name="message"
                            rows="6"
                            required
                            class="w-full p-4 rounded-xl bg-slate-800 border border-slate-700 focus:border-blue-500 outline-none text-white resize-none"></textarea>

                    </div>

                    <button
                        type="submit"
                        class="mt-8 w-full py-4 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 hover:scale-[1.02] transition duration-300 font-semibold">

                        <i class="fas fa-paper-plane mr-2"></i>

                        Send Message

                    </button >

                </form>

            </div>

        </div>

    </div>

</section>