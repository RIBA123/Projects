<?php
include 'db_config.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_id'])) {
        $editId = $_POST['edit_id'];

       
        $stmt = $conn->prepare("SELECT * FROM registrations WHERE id = :id");
        $stmt->bindParam(':id', $editId);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($record) {
         
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="style.css">
                <title>Edit Vehicle</title>
            </head>
            <body class="admin-body4">

<form action="update.php" method="post" class="mt-3">
<input type="hidden" name="edit_id" value="<?php echo $record['id']; ?>">
<div class="container mt-2 text-center text-white">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Edit Vehicle</h2>
            <form action="db.php" method="post" class="mt-3 form-group">

                <!-- Form group for Model -->
                <div class="form-group">
                    <label for="model">Model:</label>
                    <input type="text" id="model" name="model" class="form-control" value="<?php echo $record['model']; ?>" required>
                  
                </div>

                <!-- Other form groups with centered labels and inputs -->
                <div class="form-group">
                    <label for="type">Type:</label>
                    <input type="text" id="type" name="type" class="form-control" value="<?php echo $record['type']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="chassisNumber">Chassis Number:</label>
                    <input type="text" id="chassisNumber" name="chassisNumber" class="form-control" value="<?php echo $record['chassis_number']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="productionYear">Production Year:</label>
                    <input type="text" id="productionYear" name="productionYear" class="form-control" value="<?php echo $record['production_year']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="registrationNumber">Registration Number:</label>
                    <input type="text" id="registrationNumber" name="registrationNumber" class="form-control" value="<?php echo $record['registration_number']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="fuelType">Fuel Type:</label>
                    <input type="text" id="fuelType" name="fuelType" class="form-control" value="<?php echo $record['fuel_type']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="registrationTo">Registration To:</label>
                    <input type="text" id="registrationTo" name="registrationTo" class="form-control" value="<?php echo $record['registration_to']; ?>" required>
                </div>

                <div class="btn-container text-center pt-1">
                    <button type="submit" class="btn btn-primary">Edit Vehicle</button>
                </div>
            </form>
        </div>
    </div>
</div>
 </form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
} else {
    echo "Record not found.";
        }

    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
