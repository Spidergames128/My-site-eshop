<?php
$host = 'localhost';
$user = 'root';
$pass = ''; //toto jenom odjebel
$db   = 'p_eshop';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}
?>
