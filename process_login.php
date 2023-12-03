<?php
$validationErrors = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $authenticated = false;

    $usersData = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($usersData as $userData) {
        $dataArray = explode("|", $userData);

        if ($username === $dataArray[0] && password_verify($password, $dataArray[2])) {
            $authenticated = true;
            break;
        }
    }

    if ($authenticated) {
        header("Location: welcome.php?username=$username");
        exit;
    } else {
       
        $validationErrors[] = 'Invalid username/password combination.';
    }
}
?>
