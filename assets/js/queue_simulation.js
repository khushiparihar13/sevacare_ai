document.addEventListener('DOMContentLoaded', () => {
    
    const queueContainer = document.getElementById('queue-container');
    if (!queueContainer) return;

    // Dummy Queue Data Structure
    const departments = [
        { name: 'Cardiology', waitTime: 45, token: 12, density: 'Medium', color: 'blue' },
        { name: 'General Medicine', waitTime: 120, token: 35, density: 'High', color: 'red' },
        { name: 'Pediatrics', waitTime: 20, token: 8, density: 'Low', color: 'green' },
        { name: 'Orthopedics', waitTime: 60, token: 15, density: 'Medium', color: 'yellow' }
    ];

    function renderQueueCards() {
        queueContainer.innerHTML = '';
        
        departments.forEach(dept => {
            // Determine styling based on density
            let densityStyle = '';
            if (dept.density === 'High') densityStyle = 'bg-red-50 text-red-700 dark:bg-red-900/20 dark:text-red-400 border-red-200 dark:border-red-800/30';
            else if (dept.density === 'Medium') densityStyle = 'bg-yellow-50 text-yellow-700 dark:bg-yellow-900/20 dark:text-yellow-400 border-yellow-200 dark:border-yellow-800/30';
            else densityStyle = 'bg-green-50 text-green-700 dark:bg-green-900/20 dark:text-green-400 border-green-200 dark:border-green-800/30';

            const card = document.createElement('div');
            card.className = `p-3 sm:p-4 rounded-xl border transition-all flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 ${densityStyle}`;
            card.innerHTML = `
                <div class="flex items-center gap-3 w-full sm:w-auto">
                    <div class="w-2 h-2 rounded-full ${dept.density === 'High' ? 'bg-red-500' : dept.density === 'Medium' ? 'bg-yellow-500' : 'bg-green-500'}"></div>
                    <div>
                        <h4 class="font-bold text-sm text-gray-900 dark:text-white">${dept.name}</h4>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-full bg-white/60 dark:bg-black/30">${dept.density} Density</span>
                    </div>
                </div>
                <div class="flex items-center gap-6 w-full sm:w-auto justify-between sm:justify-end">
                    <div class="text-center">
                        <p class="text-[10px] opacity-70 mb-0.5 uppercase tracking-wider">Token</p>
                        <p class="text-lg font-black text-gray-900 dark:text-white">#${dept.token}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-[10px] opacity-70 mb-0.5 uppercase tracking-wider">Est. Wait</p>
                        <p class="text-lg font-bold flex items-center justify-end gap-1"><i class="ph ph-clock"></i> ${dept.waitTime}m</p>
                    </div>
                </div>
            `;
            queueContainer.appendChild(card);
        });
    }

    // Initial render
    renderQueueCards();

    // Simulate real-time updates every 8 seconds
    setInterval(() => {
        departments.forEach(dept => {
            // Randomly update token and wait time slightly
            if (Math.random() > 0.5) {
                dept.token += 1;
                dept.waitTime = Math.max(5, dept.waitTime - Math.floor(Math.random() * 5));
                if (dept.waitTime < 15) dept.density = 'Low';
                else if (dept.waitTime > 90) dept.density = 'High';
                else dept.density = 'Medium';
            }
        });
        renderQueueCards();
    }, 8000);

    // Initialize Chart.js for Admin Dashboard Preview
    initCharts();
});

function initCharts() {
    const queueCtx = document.getElementById('queueChart');
    const adminCtx = document.getElementById('adminChart');
    
    // Global chart defaults for theme compatibility
    const isDark = document.documentElement.classList.contains('dark');
    Chart.defaults.color = isDark ? '#9ca3af' : '#4b5563';
    Chart.defaults.font.family = "'Inter', sans-serif";

    if (queueCtx) {
        new Chart(queueCtx, {
            type: 'line',
            data: {
                labels: ['9 AM', '10 AM', '11 AM', '12 PM', '1 PM', '2 PM'],
                datasets: [{
                    label: 'Avg Wait Time (mins)',
                    data: [15, 30, 45, 120, 90, 40],
                    borderColor: '#0f4c81',
                    backgroundColor: 'rgba(15, 76, 129, 0.1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, grid: { color: isDark ? 'rgba(255,255,255,0.05)' : 'rgba(0,0,0,0.05)' } },
                    x: { grid: { display: false } }
                }
            }
        });
    }

    if (adminCtx) {
        new Chart(adminCtx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [{
                    label: 'Patient Volume',
                    data: [350, 420, 300, 500, 480, 200],
                    backgroundColor: '#2563eb',
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { display: false },
                    x: { grid: { display: false } }
                }
            }
        });
    }
}

// Re-render charts on theme change
window.addEventListener('themeChanged', () => {
    // In a real app, you'd destroy and recreate the charts or update their config
    // Here we just reload the page for simplicity of demo
    // location.reload();
});
