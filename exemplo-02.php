<?php

$conn = new mysqli("localhost", "root", "Denise280600", "dbphp7");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {

    array_push($data, $row);


}

echo jason_encode($data);