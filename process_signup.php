<?php

function isRequired($value) {
    return !empty($value);
}

function isValidUsername($username) {
    return preg_match('/^[a-zA-Z0-9_]+$/', $username);
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isValidPassword($password) {
    return preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z]).{8,}$/', $password);
}

function isDuplicateUsername($username) {
    $userFile = 'users.txt';
    $existingUsers = file($userFile, FILE_IGNORE_NEW_LINES);
    
    foreach ($existingUsers as $existingUser) {
        list($existingUsername, $existingEmail, $existingPassword) = explode('|', $existingUser);
        if ($username === $existingUsername) {
            return true;
        }
    }
    
    return false;
}


function isDuplicateEmail($email) {
    $userFile = 'users.txt';
    $existingUsers = file($userFile, FILE_IGNORE_NEW_LINES);
    foreach ($existingUsers as $existingUser) {
        list($existingUsername, $existingEmail, $existingPassword) = explode('|', $existingUser);
        if ($email === $existingEmail) {
            return true;
        }
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $validationErrors = array();

    if (!isRequired($username)) {
        $validationErrors['username'] = 'Username is required';
    }
    else {
        if (isDuplicateUsername($username)) {
            $validationErrors['username'] = 'Username is already in use';
        }
    }

    if (!isRequired($email)) {
        $validationErrors['email'] = 'Email is required';
    } else {
        if (isDuplicateEmail($email)) {
            $validationErrors['email'] = 'Email is already in use';
        }
    }

    if (!isRequired($password)) {
        $validationErrors['password'] = 'Password is required';
    }

    if (!isValidUsername($username)) {
        $validationErrors['username'] = 'Invalid username format';
    }

    if (!isValidEmail($email)) {
        $validationErrors['email'] = 'Invalid email format';
    }

    if (!isValidPassword($password)) {
        $validationErrors['password'] = 'Invalid password format';
    }

    if (empty($validationErrors)) {
       
        $userFile = 'users.txt';
        $userRecord = $username . '|' . $email . '|' . password_hash($password, PASSWORD_BCRYPT) . "\n";
        file_put_contents($userFile, $userRecord, FILE_APPEND | LOCK_EX);
        echo "Registration successful. Redirecting...";
        header("Location: welcome.php?username=$username");
        exit();
    }
    
}
?>