<?php
include 'db_config.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
        $deleteId = $_POST['delete_id'];

        try {
            $stmt = $conn->prepare("DELETE FROM registrations WHERE id = :id");
            $stmt->bindParam(':id', $deleteId);
            $stmt->execute();

           
            header("Location: admin.php");
            exit();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$conn = null;
?>
