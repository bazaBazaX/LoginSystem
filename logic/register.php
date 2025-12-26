<?php 
require "../config/database.php";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = trim($_POST['login']);
    $password = $_POST['password'];
    $email = $_POST['email'];
    $date = new DateTime();
    $dateString = $date->format("Y-m-d H:i:s");

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $connection -> prepare("INSERT INTO users (email, login, password, date) VALUES (?, ?, ?, ?)");
    $stmt->execute([$email, $login, $hash, $dateString]);

    echo "User is created";
}

?>