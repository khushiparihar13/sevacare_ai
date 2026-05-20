CREATE DATABASE IF NOT EXISTS sevacare_ai;
USE sevacare_ai;

CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100),
    dob DATE,
    gender ENUM('Male', 'Female', 'Other'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    specialization VARCHAR(100),
    experience_years INT,
    status ENUM('Active', 'On Leave') DEFAULT 'Active',
    image_url VARCHAR(255) DEFAULT 'assets/images/default_doctor.png',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    doctor_id INT,
    department VARCHAR(100),
    appointment_date DATE,
    time_slot VARCHAR(20),
    token_number INT,
    is_emergency BOOLEAN DEFAULT FALSE,
    status ENUM('Pending', 'In Progress', 'Completed', 'Cancelled') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (patient_id) REFERENCES patients(id) ON DELETE CASCADE,
    FOREIGN KEY (doctor_id) REFERENCES doctors(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS queue_stats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    department VARCHAR(100),
    current_token INT DEFAULT 0,
    estimated_wait_time INT DEFAULT 0, 
    queue_density ENUM('Low', 'Medium', 'High', 'Critical') DEFAULT 'Low',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert Dummy Doctors
INSERT INTO doctors (full_name, department, specialization, experience_years) VALUES
('Dr. Aisha Sharma', 'Cardiology', 'Interventional Cardiologist', 12),
('Dr. Rajesh Kumar', 'General Medicine', 'Physician', 8),
('Dr. Neha Gupta', 'Pediatrics', 'Child Specialist', 10),
('Dr. Vikram Singh', 'Orthopedics', 'Surgeon', 15),
('Dr. Meera Reddy', 'Neurology', 'Neurologist', 9);

-- Insert Dummy Queue Stats
INSERT INTO queue_stats (department, current_token, estimated_wait_time, queue_density) VALUES
('Cardiology', 12, 45, 'Medium'),
('General Medicine', 35, 120, 'High'),
('Pediatrics', 8, 20, 'Low'),
('Orthopedics', 15, 60, 'Medium'),
('Neurology', 5, 15, 'Low');
