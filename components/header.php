<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SevaCare AI - AI-Powered Government Hospital Scheduler</title>
    
    <!-- Tailwind CSS (CDN for rapid development/preview) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#0f4c81',
                        secondary: '#2563eb',
                        success: '#e8f5e9',
                        successDark: '#10b981',
                        dark: '#121212',
                        darker: '#1e1e1e'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Chart.js for Dashboard -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-dark dark:text-gray-200 transition-colors duration-300">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass transition-all duration-300 border-b border-gray-200 dark:border-gray-800" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer" onclick="window.scrollTo(0,0)">
                    <div class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center text-2xl font-bold shadow-lg">
                        <i class="ph ph-heartbeat"></i>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-primary dark:text-white">SevaCare AI</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Home</a>
                    <a href="#queue" class="text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Live Queue</a>
                    <a href="#features" class="text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Features</a>
                    <a href="#dashboard" class="text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Admin Dashboard</a>
                </div>

                <!-- Right Actions -->
                <div class="flex items-center gap-4">
                    <!-- Dark Mode Toggle -->
                    <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors text-gray-600 dark:text-gray-300">
                        <i class="ph ph-moon text-xl dark:hidden"></i>
                        <i class="ph ph-sun text-xl hidden dark:block"></i>
                    </button>
                    
                    <!-- CTA Button -->
                    <a href="#book" class="hidden md:flex items-center gap-2 bg-primary hover:bg-secondary text-white px-5 py-2.5 rounded-full font-medium transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        <i class="ph ph-calendar-plus"></i>
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Wrapper -->
    <main class="pt-20">
