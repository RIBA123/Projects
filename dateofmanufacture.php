<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Date of Manufacture</title>
</head>
<body>
<table class="table2" >
        <tr>
            <th>product id</th>
            <th>date of manufacture</th>
            
        </tr>
        <?php
            include 'fetch5_data.php'; 
            ?>
    </table>
    <div class="button-container">
    <button class="button1">
        <a href="index.php">Online store</a>
    </button>
    </div>
    
    
</body>
</html>