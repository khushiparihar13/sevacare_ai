<?php
require_once '../includes/db_connect.php';

// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get raw POST data
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if ($data) {
        $fullName = trim($data['fullName'] ?? '');
        $phone = trim($data['phone'] ?? '');
        $department = trim($data['department'] ?? '');
        $date = trim($data['date'] ?? '');
        $timeSlot = trim($data['timeSlot'] ?? '');
        $isEmergency = isset($data['isEmergency']) && $data['isEmergency'] ? 1 : 0;

        if (empty($fullName) || empty($phone) || empty($department) || empty($date) || empty($timeSlot)) {
            echo json_encode(['success' => false, 'message' => 'Missing required fields']);
            exit;
        }

        try {
            // 1. Check if patient exists by phone, else insert
            $stmt = $pdo->prepare("SELECT id FROM patients WHERE phone = ? LIMIT 1");
            $stmt->execute([$phone]);
            $patient = $stmt->fetch();

            if ($patient) {
                $patientId = $patient['id'];
            } else {
                $stmt = $pdo->prepare("INSERT INTO patients (full_name, phone) VALUES (?, ?)");
                $stmt->execute([$fullName, $phone]);
                $patientId = $pdo->lastInsertId();
            }

            // 2. Find an available doctor in the selected department (dummy load balancing)
            $stmt = $pdo->prepare("SELECT id FROM doctors WHERE department = ? AND status = 'Active' ORDER BY RAND() LIMIT 1");
            $stmt->execute([$department]);
            $doctor = $stmt->fetch();
            
            $doctorId = $doctor ? $doctor['id'] : NULL;

            // 3. Generate a random token number for simulation
            $tokenNumber = rand(1, 100);

            // 4. Insert Appointment
            $stmt = $pdo->prepare("
                INSERT INTO appointments (patient_id, doctor_id, department, appointment_date, time_slot, token_number, is_emergency) 
                VALUES (?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->execute([$patientId, $doctorId, $department, $date, $timeSlot, $tokenNumber, $isEmergency]);

            echo json_encode(['success' => true, 'message' => 'Appointment booked successfully', 'token' => $tokenNumber]);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid JSON data']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
