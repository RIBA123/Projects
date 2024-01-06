<?php
require_once 'db_config.php';
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Search Results</title>
</head>
<body class="admin-body5">

<div class="container mt-5 text-center">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["searchModel"])) {
        try {
            $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $searchModel = $_GET["searchModel"];
            $sql = "SELECT * FROM registrations 
                    WHERE registration_number = :searchModel";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':searchModel', $searchModel);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($results) > 0) {
                echo "<h2 class='mb-3 text-white'>Search Results</h2>";
                echo "<div class='list-group'>";
                foreach ($results as $result) {
                    echo "<div class='list-group-item'>";
                    echo "<h5 class='mb-1'>Model: " . $result['model'] . "</h5>";
                    echo "<p class='mb-1'>Type: " . $result['type'] . "</p>";
                    echo "<p class='mb-1'>Chassis Number: " . $result['chassis_number'] . "</p>";
                    echo "<p class='mb-1'>Production Year: " . $result['production_year'] . "</p>";
                    echo "<p class='mb-1'>Registration Number: " . $result['registration_number'] . "</p>";
                    echo "<p class='mb-1'>Fuel Type: " . $result['fuel_type'] . "</p>";
                    echo "<p class='mb-1'>Registration To: " . $result['registration_to'] . "</p>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "<p class='text-danger mt-3'>No matching records found.</p>";
            }
        } catch (PDOException $e) {
            echo "<p class='text-danger mt-3'>Error: " . $e->getMessage() . "</p>";
        } finally {
            $conn = null;
        }
    }
    ?>
    <div class="btn-container">
        <a href='index.php' class='btn btn-primary mt-3'>Home</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
