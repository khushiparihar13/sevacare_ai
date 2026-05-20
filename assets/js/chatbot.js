function toggleChatbot() {
    const widget = document.getElementById('chatbot-widget');
    const toggleBtn = document.getElementById('chatbot-toggle-btn');
    
    if (widget.classList.contains('active')) {
        widget.classList.remove('active');
        toggleBtn.classList.remove('hidden');
    } else {
        widget.classList.add('active');
        toggleBtn.classList.add('hidden');
    }
}

function handleChatSubmit(e) {
    e.preventDefault();
    const inputField = document.getElementById('chatbot-input');
    const message = inputField.value.trim();
    if (message) {
        appendMessage(message, 'user');
        inputField.value = '';
        
        // Simulate AI thinking and response
        setTimeout(() => {
            generateAIResponse(message);
        }, 1000);
    }
}

function sendSuggestedMessage(message) {
    appendMessage(message, 'user');
    
    setTimeout(() => {
        generateAIResponse(message);
    }, 1000);
}

function appendMessage(text, sender) {
    const messagesContainer = document.getElementById('chatbot-messages');
    const msgDiv = document.createElement('div');
    msgDiv.className = 'flex gap-2 ' + (sender === 'user' ? 'justify-end' : '');
    
    let innerHTML = '';
    
    if (sender === 'user') {
        innerHTML = `
            <div class="bg-primary text-white p-3 rounded-2xl rounded-br-none shadow-sm text-sm max-w-[80%]">
                ${text}
            </div>
        `;
    } else {
        innerHTML = `
            <img src="assets/images/chatbot_avatar.png" class="w-6 h-6 rounded-full self-end bg-white object-cover">
            <div class="bg-white dark:bg-darker p-3 rounded-2xl rounded-bl-none shadow-sm text-sm text-gray-700 dark:text-gray-300 border border-gray-100 dark:border-gray-800 max-w-[80%]">
                ${text}
            </div>
        `;
    }
    
    msgDiv.innerHTML = innerHTML;
    messagesContainer.appendChild(msgDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

function generateAIResponse(userMessage) {
    const msg = userMessage.toLowerCase();
    let response = "I'm sorry, I didn't quite catch that. You can ask me about appointments, departments, or queue status.";
    
    if (msg.includes('appointment') || msg.includes('book')) {
        response = "You can book an appointment using the form on this page. Just select your department and our AI will suggest the best time slot!";
    } else if (msg.includes('time') || msg.includes('opd') || msg.includes('timing')) {
        response = "General OPD timings are from 9:00 AM to 5:00 PM. Emergency services are available 24x7.";
    } else if (msg.includes('queue') || msg.includes('wait')) {
        response = "You can check the real-time AI predicted wait times in the 'Live Queue' section above. Currently, Cardiology has a 45 min wait.";
    } else if (msg.includes('hello') || msg.includes('hi') || msg.includes('namaste')) {
        response = "Namaste! How can I assist you with your hospital visit today?";
    }
    
    appendMessage(response, 'bot');
}
