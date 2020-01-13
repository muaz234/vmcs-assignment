<?php

include('../db_connect.php');
$sql= "UPDATE drinks SET quantity = ". $_POST['quantity'] ." WHERE id = ". $_POST['id'] .";";
$result = mysqli_query($conn, $sql);
echo $result;



// $_POST['work_id'];