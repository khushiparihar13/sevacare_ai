<?php
require_once 'includes/db_connect.php';
include 'components/header.php';
?>

<!-- Hero Section -->
<section id="home" class="relative pt-20 pb-32 lg:pt-32 lg:pb-40 overflow-hidden">
    <div class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-100 via-white to-white dark:from-blue-900/20 dark:via-dark dark:to-dark transition-colors duration-300"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
            <!-- Text Content -->
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 text-sm font-semibold mb-6 border border-blue-100 dark:border-blue-800/50">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    AI-Powered Government Initiative
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 dark:text-white leading-tight mb-6">
                    Transforming Government Hospital Queues with <span class="text-gradient">AI</span>
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
                    Experience seamless healthcare with AI-powered appointment scheduling, smart queue prediction, intelligent doctor load management, and real-time patient notifications.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#book" class="bg-primary hover:bg-secondary text-white px-8 py-4 rounded-full font-semibold text-center transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Book Appointment
                    </a>
                    <a href="#queue" class="glass dark:bg-darker text-gray-800 dark:text-gray-200 px-8 py-4 rounded-full font-semibold text-center hover:bg-gray-50 dark:hover:bg-gray-800 transition-all shadow border border-gray-200 dark:border-gray-700">
                        View Live Queue
                    </a>
                </div>
                
                <!-- Floating Stats -->
                <div class="grid grid-cols-3 gap-4 mt-12 pt-8 border-t border-gray-200 dark:border-gray-800">
                    <div>
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">12,000+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Patients Managed</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-green-600 dark:text-green-400">45%</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Reduced Wait Time</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">120+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Doctors Connected</div>
                    </div>
                </div>
            </div>
            
            <!-- Illustration -->
            <div class="relative lg:ml-auto">
                <div class="absolute inset-0 bg-blue-500 rounded-full blur-3xl opacity-20 animate-pulse"></div>
                <img src="assets/images/hero_illustration.png" alt="HealthTech Dashboard" class="relative z-10 w-full max-w-lg mx-auto animate-float drop-shadow-2xl rounded-2xl">
                

            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-white dark:bg-darker transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">How It Works</h2>
            <p class="text-gray-600 dark:text-gray-400">Our AI-driven process simplifies your hospital visit from start to finish.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
            <!-- Connecting Line (Desktop) -->
            <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gray-200 dark:bg-gray-700 -z-10 transform -translate-y-1/2"></div>
            
            <!-- Step 1 -->
            <div class="relative flex flex-col items-center text-center group">
                <div class="w-16 h-16 rounded-full bg-blue-50 dark:bg-dark glass flex items-center justify-center text-2xl text-primary border-4 border-white dark:border-darker shadow-md mb-6 group-hover:scale-110 transition-transform">
                    <i class="ph ph-calendar-plus"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">1. Book Appointment</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Select department and preferred doctor.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="relative flex flex-col items-center text-center group">
                <div class="w-16 h-16 rounded-full bg-blue-50 dark:bg-dark glass flex items-center justify-center text-2xl text-primary border-4 border-white dark:border-darker shadow-md mb-6 group-hover:scale-110 transition-transform">
                    <i class="ph ph-brain"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">2. AI Predicts Queue</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Our AI assigns an optimized token & time.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="relative flex flex-col items-center text-center group">
                <div class="w-16 h-16 rounded-full bg-blue-50 dark:bg-dark glass flex items-center justify-center text-2xl text-primary border-4 border-white dark:border-darker shadow-md mb-6 group-hover:scale-110 transition-transform">
                    <i class="ph ph-chat-circle-text"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">3. SMS Notification</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Receive live updates on your phone.</p>
            </div>
            
            <!-- Step 4 -->
            <div class="relative flex flex-col items-center text-center group">
                <div class="w-16 h-16 rounded-full bg-blue-50 dark:bg-dark glass flex items-center justify-center text-2xl text-primary border-4 border-white dark:border-darker shadow-md mb-6 group-hover:scale-110 transition-transform">
                    <i class="ph ph-stethoscope"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">4. Doctor Consultation</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Arrive just in time for your check-up.</p>
            </div>
        </div>
    </div>
</section>

<!-- AI Features Section -->
<section id="features" class="py-20 bg-gray-50 dark:bg-dark transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Intelligent Healthcare Features</h2>
            <p class="text-gray-600 dark:text-gray-400">Empowering hospitals with cutting-edge artificial intelligence to deliver better care, faster.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Feature Card 1 -->
            <div class="bg-white dark:bg-darker p-6 rounded-2xl shadow-sm hover:shadow-soft border border-gray-100 dark:border-gray-800 transition-all hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 flex items-center justify-center text-2xl mb-4">
                    <i class="ph-fill ph-chart-line-up"></i>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">AI Queue Prediction</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Machine learning algorithms predict accurate wait times based on historical data.</p>
            </div>
            
            <!-- Feature Card 2 -->
            <div class="bg-white dark:bg-darker p-6 rounded-2xl shadow-sm hover:shadow-soft border border-gray-100 dark:border-gray-800 transition-all hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-purple-50 dark:bg-purple-900/20 text-purple-600 flex items-center justify-center text-2xl mb-4">
                    <i class="ph-fill ph-calendar-check"></i>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Smart Scheduling</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Automated load balancing across doctors to prevent overcrowding.</p>
            </div>
            
            <!-- Feature Card 3 -->
            <div class="bg-white dark:bg-darker p-6 rounded-2xl shadow-sm hover:shadow-soft border border-gray-100 dark:border-gray-800 transition-all hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-red-50 dark:bg-red-900/20 text-red-600 flex items-center justify-center text-2xl mb-4">
                    <i class="ph-fill ph-warning-circle"></i>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">Emergency Priority</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">AI automatically detects and prioritizes critical emergency cases in the queue.</p>
            </div>
            
            <!-- Feature Card 4 -->
            <div class="bg-white dark:bg-darker p-6 rounded-2xl shadow-sm hover:shadow-soft border border-gray-100 dark:border-gray-800 transition-all hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-green-50 dark:bg-green-900/20 text-green-600 flex items-center justify-center text-2xl mb-4">
                    <i class="ph-fill ph-qr-code"></i>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-2">QR Check-in</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Contactless arrival confirmation using unique QR codes sent via SMS.</p>
            </div>
        </div>
    </div>
</section>

<!-- Live Queue Prediction Section -->
<section id="queue" class="py-20 bg-white dark:bg-darker transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Live Queue Dashboard</h2>
                <p class="text-gray-600 dark:text-gray-400">Monitor real-time patient density and AI-estimated wait times across departments.</p>
            </div>
            <div class="mt-4 md:mt-0 flex items-center gap-2 text-sm text-gray-500 font-medium">
                <span class="relative flex h-3 w-3">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                </span>
                Live Updates Active
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Queue Cards Container -->
            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-3" id="queue-container">
                <!-- Data populated by JS (queue_simulation.js) -->
                <div class="animate-pulse bg-gray-100 dark:bg-gray-800 h-16 rounded-xl"></div>
                <div class="animate-pulse bg-gray-100 dark:bg-gray-800 h-16 rounded-xl"></div>
                <div class="animate-pulse bg-gray-100 dark:bg-gray-800 h-16 rounded-xl"></div>
                <div class="animate-pulse bg-gray-100 dark:bg-gray-800 h-16 rounded-xl"></div>
            </div>
            
            <!-- Analytics Chart -->
            <div class="bg-gray-50 dark:bg-dark rounded-xl p-5 border border-gray-100 dark:border-gray-800 overflow-hidden flex flex-col justify-between">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-sm text-gray-900 dark:text-white">AI Wait Time Trend</h3>
                    <span class="text-[10px] text-green-500 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full font-semibold">+Live</span>
                </div>
                <div class="relative w-full h-[120px] md:h-[140px] lg:h-[180px]">
                    <canvas id="queueChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart Appointment Booking Section -->
<section id="book" class="py-20 bg-gray-50 dark:bg-dark transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-darker rounded-3xl shadow-xl overflow-hidden border border-gray-100 dark:border-gray-800">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Form Area -->
                <div class="p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Book Appointment</h2>
                    <p class="text-gray-500 dark:text-gray-400 mb-8">Let our AI find the best slot for you.</p>
                    
                    <form id="booking-form" class="space-y-5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
                                <input type="text" id="patient-name" required class="w-full bg-gray-50 dark:bg-dark border border-gray-200 dark:border-gray-700 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-primary text-gray-900 dark:text-white">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
                                <input type="tel" id="patient-phone" required class="w-full bg-gray-50 dark:bg-dark border border-gray-200 dark:border-gray-700 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-primary text-gray-900 dark:text-white">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Department</label>
                            <select id="department-select" required class="w-full bg-gray-50 dark:bg-dark border border-gray-200 dark:border-gray-700 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-primary text-gray-900 dark:text-white">
                                <option value="">Select Department</option>
                                <option value="Cardiology">Cardiology</option>
                                <option value="General Medicine">General Medicine</option>
                                <option value="Pediatrics">Pediatrics</option>
                                <option value="Orthopedics">Orthopedics</option>
                                <option value="Neurology">Neurology</option>
                            </select>
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Date</label>
                                <input type="date" id="date-select" required class="w-full bg-gray-50 dark:bg-dark border border-gray-200 dark:border-gray-700 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-primary text-gray-900 dark:text-white">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">AI Suggested Time</label>
                                <select id="time-select" required class="w-full bg-gray-50 dark:bg-dark border border-gray-200 dark:border-gray-700 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-primary text-gray-900 dark:text-white">
                                    <option value="">Select slot</option>
                                    <option value="09:00">09:00 AM - Optimal</option>
                                    <option value="11:30">11:30 AM</option>
                                    <option value="14:15">02:15 PM</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-red-50 dark:bg-red-900/10 rounded-lg border border-red-100 dark:border-red-800/30">
                            <input type="checkbox" id="emergency-toggle" class="w-5 h-5 text-red-600 rounded focus:ring-red-500 bg-white dark:bg-dark border-gray-300 dark:border-gray-600">
                            <label for="emergency-toggle" class="text-sm font-medium text-red-700 dark:text-red-400">This is an emergency case (AI Priority Bypass)</label>
                        </div>

                        <button type="submit" class="w-full bg-primary hover:bg-secondary text-white font-bold py-3 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            <i class="ph ph-magic-wand"></i> Generate Smart Token
                        </button>
                    </form>
                </div>
                
                <!-- Info Area -->
                <div class="bg-blue-600 dark:bg-primary p-8 md:p-12 text-white flex flex-col justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4xKSIvPjwvc3ZnPg==')]"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur rounded-2xl flex items-center justify-center text-3xl mb-6">
                            <i class="ph-fill ph-shield-check"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Why Book Online?</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="ph-fill ph-check-circle mt-1 text-blue-200"></i>
                                <span>Bypass physical queues and save up to 2 hours.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="ph-fill ph-check-circle mt-1 text-blue-200"></i>
                                <span>Get AI-calculated arrival times to minimize waiting.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="ph-fill ph-check-circle mt-1 text-blue-200"></i>
                                <span>Automatic allocation to available doctors to balance load.</span>
                            </li>
                        </ul>
                        
                        <!-- Dynamic Wait Time Display based on department select -->
                        <div id="ai-estimate-box" class="mt-8 bg-black/20 p-4 rounded-xl backdrop-blur hidden">
                            <p class="text-blue-100 text-sm mb-1">AI Estimated Wait for <span id="sel-dept-name" class="font-bold"></span></p>
                            <div class="text-2xl font-bold flex items-center gap-2">
                                <i class="ph ph-clock"></i> <span id="sel-dept-time">--</span> mins
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Admin Dashboard Preview -->
<section id="dashboard" class="py-20 bg-white dark:bg-darker transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Powerful Admin Controls</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto">Hospital administrators get a bird's-eye view of all operations, AI analytics, and resource management.</p>
        
        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-dark">
            <!-- Mockup Top Bar -->
            <div class="bg-gray-100 dark:bg-gray-900 px-4 py-3 flex items-center justify-between border-b border-gray-200 dark:border-gray-800">
                <div class="flex gap-2">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                </div>
                <div class="text-xs font-mono text-gray-500">admin.sevacare.gov.in</div>
                <div></div>
            </div>
            <!-- Mockup Content -->
            <div class="p-6 md:p-10 grid grid-cols-1 md:grid-cols-4 gap-6 text-left">
                <!-- Sidebar -->
                <div class="hidden md:flex flex-col gap-2">
                    <div class="bg-primary text-white p-3 rounded-lg text-sm font-medium"><i class="ph ph-squares-four mr-2"></i> Overview</div>
                    <div class="text-gray-600 dark:text-gray-400 p-3 rounded-lg text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-800"><i class="ph ph-users mr-2"></i> Patients</div>
                    <div class="text-gray-600 dark:text-gray-400 p-3 rounded-lg text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-800"><i class="ph ph-user-md mr-2"></i> Doctors</div>
                    <div class="text-gray-600 dark:text-gray-400 p-3 rounded-lg text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-800"><i class="ph ph-chart-bar mr-2"></i> Analytics</div>
                </div>
                <!-- Main Area -->
                <div class="md:col-span-3">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                        <div class="bg-white dark:bg-darker p-3 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="text-gray-500 dark:text-gray-400 text-[10px] uppercase tracking-wider mb-1">Total Patients</div>
                            <div class="text-xl font-bold text-gray-900 dark:text-white">842 <span class="text-[10px] text-green-500 ml-1 font-normal">+12%</span></div>
                        </div>
                        <div class="bg-white dark:bg-darker p-3 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="text-gray-500 dark:text-gray-400 text-[10px] uppercase tracking-wider mb-1">Active Doctors</div>
                            <div class="text-xl font-bold text-gray-900 dark:text-white">45 <span class="text-[10px] text-gray-400 ml-1 font-normal">/ 50</span></div>
                        </div>
                        <div class="bg-white dark:bg-darker p-3 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="text-gray-500 dark:text-gray-400 text-[10px] uppercase tracking-wider mb-1">Avg Wait</div>
                            <div class="text-xl font-bold text-green-600">22m <span class="text-[10px] ml-1 font-normal">-5m</span></div>
                        </div>
                        <div class="bg-white dark:bg-darker p-3 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="text-gray-500 dark:text-gray-400 text-[10px] uppercase tracking-wider mb-1">Emergencies</div>
                            <div class="text-xl font-bold text-red-600">12 <span class="text-[10px] text-gray-400 ml-1 font-normal">Active</span></div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-darker p-4 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
                        <h4 class="font-bold text-gray-900 dark:text-white mb-3 text-sm flex justify-between items-center">
                            Peak Hours Heatmap
                            <i class="ph ph-chart-bar text-primary"></i>
                        </h4>
                        <div class="relative w-full h-[120px] md:h-[140px] lg:h-[180px]">
                            <canvas id="adminChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Overlay to prevent clicks -->
            <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent dark:from-darker flex items-end justify-center pb-8">
                <button class="bg-dark text-white dark:bg-white dark:text-dark px-6 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition-transform">
                    Request Admin Access
                </button>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>
