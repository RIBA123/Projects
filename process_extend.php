<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['extend_id']) && isset($_POST['new_registration_to'])) {
    $extendId = $_POST['extend_id'];
    $newRegistrationTo = $_POST['new_registration_to'];

    try {
        $stmt = $conn->prepare("UPDATE registrations SET registration_to = :new_registration_to WHERE id = :id");
        $stmt->bindParam(':new_registration_to', $newRegistrationTo);
        $stmt->bindParam(':id', $extendId);

        $stmt->execute();

        header("Location: admin.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$conn = null;
?>
