<?php
class Registration {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllRegistrations() {
        try {
            $stmt = $this->db->prepare("SELECT * FROM registrations");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function addRegistration($data) {
        try {
            if ($this->isChassisNumberUnique($data['chassis_number'])) {
                $stmt = $this->db->prepare("INSERT INTO registrations (model, type, chassis_number, production_year, registration_number, fuel_type, registration_to) 
                                            VALUES (:model, :type, :chassis_number, :production_year, :registration_number, :fuel_type, :registration_to)");
                $stmt->bindParam(':model', $data['model']);
                $stmt->bindParam(':type', $data['type']);
                $stmt->bindParam(':chassis_number', $data['chassis_number']);
                $stmt->bindParam(':production_year', $data['production_year']);
                $stmt->bindParam(':registration_number', $data['registration_number']);
                $stmt->bindParam(':fuel_type', $data['fuel_type']);
                $stmt->bindParam(':registration_to', $data['registration_to']);

                $stmt->execute();
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    private function isChassisNumberUnique($chassisNumber) {
        try {
            $stmt = $this->db->prepare("SELECT COUNT(*) FROM registrations WHERE chassis_number = :chassis_number");
            $stmt->bindParam(':chassis_number', $chassisNumber);
            $stmt->execute();
            $count = $stmt->fetchColumn();
            return $count === 0;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
