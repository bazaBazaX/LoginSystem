<?php 

defined("DB_HOST") || define("DB_HOST", "localhost");
defined("DB_USER") || define("DB_USER", "baza");
defined("DB_PASS") || define("DB_PASS", "baza123");
defined("DB_NAME") || define("DB_NAME", "loginSystem");

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connection is succesful!";

?>