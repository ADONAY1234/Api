<?php
require("db.php");

$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];

$sql = "INSERT INTO students (Name, Email, Address) values('$Name', '$Email', '$Address')";
$results = mysqli_query($conn, $sql);
if($results > 0){
    echo json_encode("Success");
}
?>