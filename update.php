<?php
include 'db_config.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_id'])) {
       
        $editedId = $_POST['edit_id'];
        $editedModel = $_POST['model'];
        $editedType = $_POST['type'];
        $editedChassisNumber = $_POST['chassisNumber'];
        $editedProductionYear = $_POST['productionYear'];
        $editedRegistrationNumber = $_POST['registrationNumber'];
        $editedFuelType = $_POST['fuelType'];
        $editedRegistrationTo = $_POST['registrationTo'];

        
        $stmt = $conn->prepare("UPDATE registrations SET
    model = :model,
    type = :type,
    chassis_number = :chassisNumber,  
    production_year = :productionYear, 
    registration_number = :registrationNumber, 
    fuel_type = :fuelType, 
    registration_to = :registrationTo
    WHERE id = :id");

$stmt->bindParam(':model', $editedModel);
$stmt->bindParam(':type', $editedType);
$stmt->bindParam(':chassisNumber', $editedChassisNumber);
$stmt->bindParam(':productionYear', $editedProductionYear);
$stmt->bindParam(':registrationNumber', $editedRegistrationNumber);
$stmt->bindParam(':fuelType', $editedFuelType);
$stmt->bindParam(':registrationTo', $editedRegistrationTo);
$stmt->bindParam(':id', $editedId);


        $stmt->execute();

       
        header("Location: admin.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
