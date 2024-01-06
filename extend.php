<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extend Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="admin-body6">

    <div class="container mt-5 d-flex flex-column align-items-center">
        <div class="col-md-6">

            <h2 class="text-center text-white mb-4 p-3">Extend Registration</h2>

            <?php
            include 'db_config.php';

            $errorMessage = $successMessage = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['extend_id'])) {
                $extendId = $_POST['extend_id'];

                try {
                    $stmt = $conn->prepare("SELECT * FROM registrations WHERE id = :id");
                    $stmt->bindParam(':id', $extendId);
                    $stmt->execute();
                    $record = $stmt->fetch(PDO::FETCH_ASSOC);

                    if ($record) {
                        $currentDate = date('Y-m-d');
                        $expiryDate = $record['registration_to'];

                        if ($expiryDate <= $currentDate) {

                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new_registration_to'])) {
                                $newRegistrationTo = $_POST['new_registration_to'];

                                $successMessage = "Registration extended successfully!";
                            }
                        } else {
                            $errorMessage = "Error: Registration is not expired or not about to expire.";
                        }
                    } else {
                        $errorMessage = "Error: Record not found.";
                    }
                } catch (PDOException $e) {
                    $errorMessage = "Error: " . $e->getMessage();
                }
            }

            $conn = null;
            ?>

            <?php if ($errorMessage): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errorMessage; ?>
                    <?php if ($errorMessage == "Error: Registration is not expired or not about to expire."): ?>
                        <br>
                        <a href="javascript:history.go(-1)" class="btn btn-primary mt-2">Go Back</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if ($successMessage): ?>
                <div class="alert alert-success" role="alert">
                    <?= $successMessage; ?>
                </div>
            <?php else: ?>
                <form action="process_extend.php" method="post">
                    <?php if (empty($errorMessage) && empty($successMessage)): ?>
                        <input type="hidden" name="extend_id" value="<?= $record['id']; ?>">

                        <div class="form-group">
                            <label for="new_registration_to">New Registration To:</label>
                            <input type="date" id="new_registration_to" name="new_registration_to" class="form-control" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Extend Registration</button>
                        </div>
                    <?php endif; ?>
                </form>
            <?php endif; ?>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
