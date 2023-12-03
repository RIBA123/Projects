<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "onlinestore";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";


$result = $conn->query($sql);


while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['product_id'] . "</td>";
    echo "<td>" . $row['product_name'] . "</td>";
    echo "<td>" . $row['date_of_manufacture'] . "</td>";
    echo "<td>" . $row['shelf_life'] . "</td>";
    echo "<td>" . $row['composition'] . "</td>";
    echo "<td>" . $row['storage_temperature'] . "</td>";
    echo "<td>" . $row['place_of_origin'] . "</td>";
    echo "<td>" . $row['manufacturer'] . "</td>";
    echo "<td>" . $row['importer'] . "</td>";
    echo "<td>" . $row['product_type'] . "</td>";
    echo "<td>" . $row['nicotine_content'] . "</td>";
    echo "<td>" . $row['tar_content'] . "</td>";
    echo "<td>" . $row['carbon_monoxide_content'] . "</td>";
    echo "<td>" . $row['alcohol_strength'] . "</td>";
    echo "</tr>";
}


$conn->close();
?>
