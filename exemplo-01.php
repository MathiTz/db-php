<?php

$conn = new mysqli("localhost", "root", "Denise280600", "dbphp7");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";


$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();