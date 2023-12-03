<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Produtct Caregories</title>
    
</head>
<body>
     <h1>Categories</h1>
    <table class="table2">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
            </tr>
        </thead>
       
        <?php
            include 'fetch2_data.php'; 
            ?>
    </table>
    <div class="button-container">
    <button class="button1">
        <a href="index.php">Online store</a>
    </button>
    </div>
    
</body>
</html>