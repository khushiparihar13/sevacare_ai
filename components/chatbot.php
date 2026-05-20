<!-- AI Chatbot Widget -->
<div id="chatbot-widget" class="fixed bottom-6 right-6 z-50 w-80 shadow-2xl rounded-2xl overflow-hidden glass dark:bg-darker/90 flex flex-col border border-gray-200 dark:border-gray-700">
    <!-- Chatbot Header -->
    <div class="bg-primary p-4 flex items-center justify-between cursor-pointer" onclick="toggleChatbot()">
        <div class="flex items-center gap-3">
            <div class="relative">
                <img src="assets/images/chatbot_avatar.png" alt="AI Assistant" class="w-10 h-10 rounded-full border-2 border-white object-cover bg-white">
                <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-primary"></div>
            </div>
            <div>
                <h4 class="text-white font-semibold text-sm">Seva Assistant</h4>
                <p class="text-primary-100 text-xs opacity-80">Online &bull; AI Powered</p>
            </div>
        </div>
        <button class="text-white hover:bg-white/20 p-1 rounded transition-colors">
            <i class="ph ph-x" id="chatbot-close-icon"></i>
        </button>
    </div>

    <!-- Chat Messages Area -->
    <div id="chatbot-messages" class="h-80 overflow-y-auto p-4 bg-gray-50/50 dark:bg-dark/50 flex flex-col gap-3">
        <!-- Initial Message -->
        <div class="flex gap-2">
            <img src="assets/images/chatbot_avatar.png" class="w-6 h-6 rounded-full self-end bg-white object-cover">
            <div class="bg-white dark:bg-darker p-3 rounded-2xl rounded-bl-none shadow-sm text-sm text-gray-700 dark:text-gray-300 border border-gray-100 dark:border-gray-800">
                Namaste! 🙏 I am Seva, your AI hospital assistant. How can I help you today?
            </div>
        </div>
        
        <!-- Suggestions -->
        <div class="flex flex-wrap gap-2 mt-1">
            <button onclick="sendSuggestedMessage('Book an appointment')" class="text-xs bg-blue-50 hover:bg-blue-100 text-primary dark:bg-primary/20 dark:hover:bg-primary/30 dark:text-blue-300 px-3 py-1.5 rounded-full transition-colors border border-blue-100 dark:border-primary/30">Book an appointment</button>
            <button onclick="sendSuggestedMessage('Check OPD timings')" class="text-xs bg-blue-50 hover:bg-blue-100 text-primary dark:bg-primary/20 dark:hover:bg-primary/30 dark:text-blue-300 px-3 py-1.5 rounded-full transition-colors border border-blue-100 dark:border-primary/30">Check OPD timings</button>
        </div>
    </div>

    <!-- Chat Input -->
    <div class="p-3 bg-white dark:bg-darker border-t border-gray-100 dark:border-gray-700">
        <form id="chatbot-form" class="flex gap-2" onsubmit="handleChatSubmit(event)">
            <input type="text" id="chatbot-input" placeholder="Type a message..." class="flex-1 bg-gray-100 dark:bg-dark rounded-full px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 text-gray-800 dark:text-gray-200 border border-transparent dark:border-gray-700">
            <button type="submit" class="bg-primary hover:bg-secondary text-white w-9 h-9 rounded-full flex items-center justify-center transition-colors">
                <i class="ph-fill ph-paper-plane-right"></i>
            </button>
        </form>
    </div>
</div>

<!-- Chatbot Toggle Button (when closed) -->
<button id="chatbot-toggle-btn" onclick="toggleChatbot()" class="fixed bottom-6 right-6 z-40 bg-primary hover:bg-secondary text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center transition-transform hover:scale-110 active:scale-95">
    <i class="ph ph-chat-teardrop-text text-3xl"></i>
</button>
