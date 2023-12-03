<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login or register on my website</title>
</head>
<body>
<?php include 'process_login.php'; ?>
<div class="container1">
        <h1>Login Form</h1>
      
        <?php if (!empty($validationErrors)) : ?>
            <div class="error">
                <?php foreach ($validationErrors as $error) : ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br><br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required autocomplete="off">
            <br><br>
            
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>