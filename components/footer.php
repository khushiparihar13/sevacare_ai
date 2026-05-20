    </main>

    <!-- Footer -->
    <footer class="bg-white dark:bg-darker border-t border-gray-200 dark:border-gray-800 pt-16 pb-8 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded-lg bg-primary text-white flex items-center justify-center text-xl shadow-md">
                            <i class="ph ph-heartbeat"></i>
                        </div>
                        <span class="font-bold text-lg text-primary dark:text-white">SevaCare AI</span>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm mb-4">
                        Transforming government healthcare with artificial intelligence. Faster queues, smarter care.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors"><i class="ph ph-twitter-logo text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors"><i class="ph ph-facebook-logo text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors"><i class="ph ph-linkedin-logo text-xl"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                        <li><a href="#home" class="hover:text-primary transition-colors">Home</a></li>
                        <li><a href="#queue" class="hover:text-primary transition-colors">Live Queue</a></li>
                        <li><a href="#book" class="hover:text-primary transition-colors">Book Appointment</a></li>
                        <li><a href="#dashboard" class="hover:text-primary transition-colors">Admin Dashboard</a></li>
                    </ul>
                </div>

                <!-- Departments -->
                <div>
                    <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-4">Departments</h4>
                    <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                        <li><a href="#" class="hover:text-primary transition-colors">Cardiology</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Neurology</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Pediatrics</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Orthopedics</a></li>
                    </ul>
                </div>

                <!-- Contact & Emergency -->
                <div>
                    <h4 class="font-semibold text-gray-800 dark:text-gray-200 mb-4">Emergency Contact</h4>
                    <div class="bg-red-50 dark:bg-red-900/20 p-4 rounded-xl border border-red-100 dark:border-red-800/30">
                        <div class="flex items-center gap-3 text-red-600 dark:text-red-400 mb-2">
                            <i class="ph-fill ph-phone-call text-xl"></i>
                            <span class="font-bold text-lg">108</span>
                        </div>
                        <p class="text-xs text-red-500 dark:text-red-400/80">National Ambulance Service</p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 dark:border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    &copy; 2026 SevaCare AI. A Govt. Health Initiative Prototype.
                </p>
                <div class="flex gap-4 text-sm text-gray-500 dark:text-gray-400">
                    <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-primary transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <?php include 'components/chatbot.php'; ?>

    <!-- Custom Scripts -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/queue_simulation.js"></script>
    <script src="assets/js/chatbot.js"></script>
</body>
</html>
