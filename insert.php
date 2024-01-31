<?php

include("config.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$insert_qry = "INSERT INTO `ajax_crud`(`first_name`, `last_name`) VALUES ('$first_name','$last_name')";
$insert_qry_result = mysqli_query($cn , $insert_qry);

if($insert_qry_result){
    echo 1;
}
else{
    echo 0;
}

?>