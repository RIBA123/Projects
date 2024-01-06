<?php
require_once 'Auth.php';



$auth = new Auth($db);


$auth->logout();


header("Location: index.php");
exit();
?>
