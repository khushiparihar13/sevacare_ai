document.addEventListener('DOMContentLoaded', () => {
    // Theme Toggle Logic
    const themeToggleBtn = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;

    // Check local storage or system preference
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        htmlElement.classList.add('dark');
    } else {
        htmlElement.classList.remove('dark');
    }

    themeToggleBtn.addEventListener('click', () => {
        htmlElement.classList.toggle('dark');
        if (htmlElement.classList.contains('dark')) {
            localStorage.theme = 'dark';
        } else {
            localStorage.theme = 'light';
        }

        // Trigger chart updates if any exist on page
        window.dispatchEvent(new Event('themeChanged'));
    });

    // Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            navbar.classList.add('shadow-md');
            navbar.classList.replace('py-4', 'py-2');
        } else {
            navbar.classList.remove('shadow-md');
            navbar.classList.replace('py-2', 'py-4');
        }
    });

    // Booking Form Logic
    const bookingForm = document.getElementById('booking-form');
    const deptSelect = document.getElementById('department-select');
    const aiEstimateBox = document.getElementById('ai-estimate-box');
    const selDeptName = document.getElementById('sel-dept-name');
    const selDeptTime = document.getElementById('sel-dept-time');

    if (bookingForm) {
        deptSelect.addEventListener('change', (e) => {
            const dept = e.target.value;
            if (dept) {
                aiEstimateBox.classList.remove('hidden');
                selDeptName.innerText = dept;
                // Dummy prediction based on length of string
                const simulatedWait = Math.floor(Math.random() * 40) + 15;
                selDeptTime.innerText = simulatedWait;
            } else {
                aiEstimateBox.classList.add('hidden');
            }
        });

        bookingForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Gather data
            const fullName = document.getElementById('patient-name').value;
            const phone = document.getElementById('patient-phone').value;
            const department = document.getElementById('department-select').value;
            const date = document.getElementById('date-select').value;
            const timeSlot = document.getElementById('time-select').value;
            const isEmergency = document.getElementById('emergency-toggle').checked;

            // Animate button
            const btn = bookingForm.querySelector('button[type="submit"]');
            const originalContent = btn.innerHTML;
            btn.innerHTML = '<i class="ph ph-spinner animate-spin"></i> Processing AI Token...';
            btn.disabled = true;

            try {
                const response = await fetch('api/book_appointment.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ fullName, phone, department, date, timeSlot, isEmergency })
                });

                const result = await response.json();

                if (result.success) {
                    btn.innerHTML = `<i class="ph-fill ph-check-circle"></i> Token #${result.token} Generated! SMS Sent.`;
                    btn.classList.replace('bg-primary', 'bg-green-600');

                    setTimeout(() => {
                        bookingForm.reset();
                        btn.innerHTML = originalContent;
                        btn.classList.replace('bg-green-600', 'bg-primary');
                        btn.disabled = false;
                        aiEstimateBox.classList.add('hidden');
                    }, 4000);
                } else {
                    btn.innerHTML = `<i class="ph-fill ph-warning-circle"></i> Error: ${result.message}`;
                    btn.classList.replace('bg-primary', 'bg-red-600');

                    setTimeout(() => {
                        btn.innerHTML = originalContent;
                        btn.classList.replace('bg-red-600', 'bg-primary');
                        btn.disabled = false;
                    }, 4000);
                }
            } catch (error) {
                console.error("Booking error:", error);
                btn.innerHTML = `<i class="ph-fill ph-warning-circle"></i> Network Error`;
                setTimeout(() => {
                    btn.innerHTML = originalContent;
                    btn.disabled = false;
                }, 3000);
            }
        });
    }
});
