<?php
class User {
    public static function register($username, $password, $isAdmin = 0) {
        try {
            $db = Database::getInstance();
            $connection = $db->getConnection();

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (username, password, isAdmin) VALUES (:username, :password, :isAdmin)";
            $statement = $connection->prepare($query);
            $statement->bindParam(':username', $username);
            $statement->bindParam(':password', $hashedPassword);
            $statement->bindParam(':isAdmin', $isAdmin);
            $statement->execute();

            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public static function authenticate($username, $password) {
        try {
            $db = Database::getInstance();
            $connection = $db->getConnection();

            $query = "SELECT * FROM users WHERE username = :username";
            $statement = $connection->prepare($query);
            $statement->bindParam(':username', $username);
            $statement->execute();
            $user = $statement->fetch();

            if ($user && password_verify($password, $user['password'])) {
                return $user; 
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }


}

?>
