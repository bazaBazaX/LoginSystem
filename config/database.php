<?php 

defined("DB_HOST") || define("DB_HOST", "MySQL-8.4");
defined("DB_USER") || define("DB_USER", "root");
defined("DB_PASS") || define("DB_PASS", "");
defined("DB_NAME") || define("DB_NAME", "loginSystem");

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>