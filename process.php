
<head>
<link rel="stylesheet" href="style.css">
<nav class="navbar">
    <a href="вработинашстудент.php" class="logo-link">
        <div class="logo">
        <img src="https://i.postimg.cc/34RVJxpZ/image.jpg" alt="Clickable Image">

        </div>
    </a>

        
</head>

<?php
$servername = 'localhost';
$username = 'id21361540_paneribarski'; 
$password = 'Paneribata123@'; 
$dbname = 'id21361540_pane'; 

$conn = new mysqli($localhost, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {  
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['Number'];
    $studentType = $_POST['studentTypeInput'];

    // Use prepared statements to insert data
    $sql = "INSERT INTO students (firstname, lastname, email, number, student_type) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $firstname, $lastname, $email, $number, $studentType);

    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Number</th><th>Student Type</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['number'] . "</td><td>" . $row['student_type'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No data found";
}

$conn->close();
?>



