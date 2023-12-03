<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SignUP</title>
</head>
<body>
<?php
include 'process_signup.php'; ?>
<h1 class="signupform">Sign Up Form</h1>
<div class="container1">
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <?php if (isset($validationErrors['username'])) { echo '<span class="error">' . $validationErrors['username'] . '</span>'; } ?><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <?php if (isset($validationErrors['email'])) { echo '<span class="error">' . $validationErrors['email'] . '</span>'; } ?><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <?php if (isset($validationErrors['password'])) { echo '<span class="error">' . $validationErrors['password'] . '</span>'; } ?><br><br>

        <input type="submit" value="Sign Up">
      
    </form>
   
    
</div>
<div  class="container2" >

<button  class="buttons"> 
    <a href="index.php">Click here for back to login page</a>

</button>
</div>


</body>
</html>