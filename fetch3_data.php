<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "onlinestore";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM storage";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['product_id'] . "</td>";
                echo "<td>" . $row['storage_temperature'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No data available</td></tr>";
        }

        $conn->close();
        ?>