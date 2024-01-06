<?php

require_once 'db_config.php'; 
define('DB_HOST', 'localhost');
define('DB_NAME', 'registrations');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (
        isset($_POST["model"]) && isset($_POST["type"]) &&
        isset($_POST["chassisNumber"]) && isset($_POST["productionYear"]) &&
        isset($_POST["registrationNumber"]) && isset($_POST["fuelType"]) &&
        isset($_POST["registrationTo"])
    ) {
        
        $model = $_POST["model"];
        $type = $_POST["type"];
        $chassisNumber = $_POST["chassisNumber"];
        $productionYear = $_POST["productionYear"];
        $registrationNumber = $_POST["registrationNumber"];
        $fuelType = $_POST["fuelType"];
        $registrationTo = $_POST["registrationTo"];

        try {
          
            $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);

            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           
            $sql = "INSERT INTO registrations 
                    (model, type, chassis_number, production_year, registration_number, fuel_type, registration_to) 
                    VALUES (:model, :type, :chassisNumber, :productionYear, :registrationNumber, :fuelType, :registrationTo)";

          
            $stmt = $conn->prepare($sql);

            
            $stmt->bindParam(':model', $model);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':chassisNumber', $chassisNumber);
            $stmt->bindParam(':productionYear', $productionYear);
            $stmt->bindParam(':registrationNumber', $registrationNumber);
            $stmt->bindParam(':fuelType', $fuelType);
            $stmt->bindParam(':registrationTo', $registrationTo);

           
            $stmt->execute();

          
            header("Location: admin.php");
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
           
            $conn = null;
        }
    } else {
        echo "Error: All fields are required.";
    }
}

?>
