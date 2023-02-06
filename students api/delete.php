<?php

require("db.php");

$id = $_POST['id'];
$sql = "DELETE FROM students WHERE id='$id'";
$results = mysqli_query($conn, $sql);
if($results > 0){
    echo json_encode("Success");
}

?>