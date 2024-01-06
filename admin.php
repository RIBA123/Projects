<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Vehicle registration System</title>
</head>
<body class="admin-body">
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <div class="ml-auto">
            <a class="navbar-text" href="logout.php" style="text-decoration: none;" >Logout</a>
        </div>
    </nav>
    
    
    <div class="container mt-5 text-white">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Vehicle registration</h2>
            <form action="db.php" method="post" class="mt-3 form-group">
                <div class="form-group">
                    <label for="model">Model:</label>
                    <input type="text" id="model" name="model" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="type">Type:</label>
                    <input type="text" id="type" name="type" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="chassisNumber">Chassis Number:</label>
                    <input type="text" id="chassisNumber" name="chassisNumber" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="productionYear">Production Year:</label>
                    <input type="text" id="productionYear" name="productionYear" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="registrationNumber">Registration Number:</label>
                    <input type="text" id="registrationNumber" name="registrationNumber" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="fuelType">Fuel Type:</label>
                    <select id="fuelType" name="fuelType" class="form-control" required>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Electric">Electric</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="registrationTo">Registration To:</label>
                    <input type="text" id="registrationTo" name="registrationTo" class="form-control" required>
                </div>

                <div class="btn-container text-center mt-3">
                    <button type="submit" class="btn btn-primary">Register Vehicle</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include('forms.php');
include('db_config.php');
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
