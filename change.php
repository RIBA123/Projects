<?php
require_once 'db_config.php';

class RegistrationHandler {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

   

    public function extendRegistration($id, $newRegistrationTo) {
        try {
            $stmt = $this->db->prepare("UPDATE registrations SET registration_to = :new_registration_to WHERE id = :id");
            $stmt->bindParam(':new_registration_to', $newRegistrationTo);
            $stmt->bindParam(':id', $id);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"])) {
        $registrationHandler = new RegistrationHandler($conn);

        if ($_POST["action"] == "extend" && isset($_POST["id"])) {
            $id = $_POST["id"];
            $newRegistrationTo = date('Y-m-d', strtotime('+1 year')); // Example: Extend by 1 year

            if ($registrationHandler->extendRegistration($id, $newRegistrationTo)) {
                header("Location: admin.php");
                exit();
            } else {
                echo "Error: Failed to extend registration.";
            }
        }
    }
}
?>
