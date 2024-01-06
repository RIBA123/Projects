<?php
require_once 'User.php';

class Auth {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function login($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && (new User($user['username'], $password))->verifyPassword($user['password'])) {
            session_start();
            $_SESSION['admin'] = $user['username'];
            return true;
        } else {
            return false;
        }
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function isLoggedIn() {
        session_start();
        return isset($_SESSION['admin']);
    }
}
?>
