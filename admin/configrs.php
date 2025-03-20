<?php
$servername = "192.168.3.200:6671"; 
$username = "pelaksana"; 
$password = "5DLngElEFDRNf0VP5EPzPIg7h+sfOLPP4IogjMcg5k4="; 
$dbname = "sik"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>