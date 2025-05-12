<?php




$host = 'localhost';
$user = 'gnthealt_varioshine';
$pass = 'varioshine@25';
$db = 'gnthealt_varioshine';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}
$conn->set_charset("utf8mb4");



?>