<?php
$conn = new mysqli('Localhost', 'root', '', 'mydb');

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}
?>