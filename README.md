# SevaCare AI

**SevaCare AI** is a modern, AI-powered HealthTech single-page web application designed for government hospital check-up scheduling. It offers an intelligent queue prediction system, automated load-balanced doctor assignments, and a compact SaaS-style administrative dashboard.

## Features

- **Smart Appointment Booking:** Book appointments online and bypass physical queues. The system utilizes AI-based simulation to allocate optimal time slots and evenly distribute load among available doctors.
- **Live Queue Dashboard:** A real-time, responsive dashboard that monitors patient density, current tokens, and estimated wait times across various hospital departments.
- **Admin Dashboard Preview:** A lightweight, compact overview for hospital administrators featuring key metrics (total patients, active doctors, average wait time) and a peak hours heatmap.
- **Seva Assistant (Chatbot):** An interactive, simulated AI helpdesk assistant that can guide patients through the booking process, check OPD timings, and answer FAQs.
- **Modern UI/UX:** Built with Tailwind CSS, featuring glassmorphism elements, dark/light mode toggle, and smooth micro-interactions that rival premium SaaS products.

## Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript, Tailwind CSS (via CDN)
- **Backend:** PHP 8+
- **Database:** MySQL
- **Charts:** Chart.js

## Project Structure

```text
/SevaCare_AI
├── api/
│   └── book_appointment.php      # API endpoint for handling booking form submissions
├── assets/
│   ├── css/
│   │   └── style.css             # Custom styling, animations, and dark mode tweaks
│   ├── images/                   # Contains generated illustrations and avatars
│   └── js/
│       ├── main.js               # Theme toggle, sticky navbar, booking form submission logic
│       ├── chatbot.js            # Seva Assistant chat widget logic
│       └── queue_simulation.js   # Dynamic queue updates and Chart.js initialization
├── components/
│   ├── header.php                # Reusable header, navbar, and Tailwind config
│   ├── footer.php                # Reusable footer
│   └── chatbot.php               # Chatbot UI widget
├── database/
│   └── database.sql              # SQL script to initialize the database schema and dummy data
├── includes/
│   └── db_connect.php            # Secure PDO database connection file
├── index.php                     # Main application landing page (Single Page App)
└── README.md                     # Project documentation
```

## Setup Instructions

This project is designed to run on a local server environment such as **XAMPP**, **WAMP**, or **MAMP**.

1. **Clone or Extract the Project:**
   Place the `SevaCare_AI` folder into your local server's document root (e.g., `C:\xampp\htdocs\SevaCare_AI`).

2. **Start your Local Server:**
   Open your XAMPP Control Panel and start **Apache** and **MySQL**.

3. **Database Configuration:**
   - Open phpMyAdmin (usually `http://localhost/phpmyadmin`).
   - Create a new database or simply run the provided SQL script which will do it for you.
   - You can run the following command in your terminal or import the file manually:
     ```bash
     mysql -u root -p < c:\xampp\htdocs\SevaCare_AI\database\database.sql
     ```
   *(Note: The script creates the `sevacare_ai` database and populates it with tables and dummy data).*

4. **Verify Database Connection:**
   If your MySQL username/password is different from the default (`root` / `empty password`), update the credentials in `includes/db_connect.php`.

5. **Run the Application:**
   Open your web browser and navigate to:
   ```text
   http://localhost/SevaCare_AI/
   ```

## Development & Customization

- **Styling:** The project uses Tailwind CSS via CDN. For production, you may want to integrate Node.js and build a minified Tailwind CSS file. Custom overrides are stored in `assets/css/style.css`.
- **API Endpoints:** New API routes can be added inside the `/api` directory to interact with the database via AJAX/Fetch requests.
- **Scalability:** The folder structure is modular, allowing easy integration of dedicated `/admin`, `/doctor`, and `/patient` portals in the future.
