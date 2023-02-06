<?php

require("db.php");

    
$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];
$id = $_POST["id"];

$sql = "UPDATE students SET Name ='$Name', Email ='$Email', Address ='$Address' WHERE id='$id'";
$results = mysqli_query($conn, $sql);
if($results > 0){
    echo json_encode("Success");
}
    
?>