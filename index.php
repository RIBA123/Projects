<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Online Store</title>
</head>
<body>
    <h1>Online store</h1>

    <table class="results-table">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Date of Manufacture</th>
                <th>Shelf Life</th>
                <th>Composition</th>
                <th>Storage Temperature</th>
                <th>Place of Origin</th>
                <th>Manufacturer</th>
                <th>Importer</th>
                <th>Product Type</th>
                <th>Nicotine Content</th>
                <th>Tar Content</th>
                <th>Carbon Monoxide Content</th>
                <th>Alcohol Strength</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'fetch_data.php'; 
            ?>
        </tbody>
    </table>
    <div class="button-container">
    <button class="button1">
        <a href="product_categories.php">Go to Product Categories</a>
    </button>
    <button class="button1">
        <a href="alcoholic_products.php">Go to alcohol products with ID and strenght</a>
    </button>
    <button class="button1">
        <a href="storage_temperature.php">Go to Storage Temp</a>
    </button>
    <button class="button1">
        <a href="dateofmanufacture.php">Go to Date of Manufacture</a>
    </button>
</div>


</body>
</html>
