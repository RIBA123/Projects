<?php

include 'db_config.php';

try {
    
    $sql = "SELECT * FROM registrations";
    $stmt = $conn->query($sql);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <table class="table mt-5 table-bordered">
        <thead class="thead-light">
            <tr>
                
                <th>Model</th>
                <th>Type</th>
                <th>Chassis Number</th>
                <th>Production Year</th>
                <th>Registration Number</th>
                <th>Fuel Type</th>
                <th>Registration To</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= $row['model'] ?></td>
                    <td><?= $row['type'] ?></td>
                    <td><?= $row['chassis_number'] ?></td>
                    <td><?= $row['production_year'] ?></td>
                    <td><?= $row['registration_number'] ?></td>
                    <td><?= $row['fuel_type'] ?></td>
                    <td><?= $row['registration_to'] ?></td>
                    <td>
                        <form method='post' action='edit.php'>
                            <input type='hidden' name='edit_id' value='<?= $row['id'] ?>'>
                            <button type='submit' class='btn btn-warning m-1 '>Edit</button>
                        </form>
                        <form method='post' action='delete.php'>
                            <input type='hidden' name='delete_id' value='<?= $row['id'] ?>'>
                            <button type='submit' class='btn btn-danger m-1'>Delete</button>
                        </form>
                        <form method='post' action='extend.php'>
                            <input type='hidden' name='extend_id' value='<?= $row['id'] ?>'>
                            <button type='submit' class='btn btn-success m-1'>Extend</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>

        </tbody>
    </table>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
