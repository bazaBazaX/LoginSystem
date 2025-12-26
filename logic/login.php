<?php 
session_start();
require "../config/database.php";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    $stmt = $connection->prepare("SELECT id, password FROM users WHERE login = ?");
    $stmt->execute([$login]);
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if(!$user) {
        echo "Wrong username";
        exit;
    }

    if(password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        header("Location: ../index.php");
        exit;
    } else {
        echo "Wrong login or password";
    }
}
?>