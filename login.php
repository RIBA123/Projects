<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $validUsername = 'Pane';
    $validPassword = 'Pane123';
    

    if ($username == $validUsername && $password == $validPassword) {
      
        $_SESSION['user'] = ['username' => $username, 'isAdmin' => true];

      
        header("Location: admin.php");
        exit();
    } else {
      
        $error = "Invalid username or password";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body class="text-center admin-body3 text-white">

    <div class="container">
        <h1 class="mt-5">Login</h1>

        <?php if(isset($error)) { echo '<p style="color: red;">' . $error . '</p>'; } ?>

        <form action="" method="post" class="mt-3">
            <div class="form-group3">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>

            <div class="form-group3">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary m-2">Login</button>
        </form>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

