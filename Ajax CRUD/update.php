<?php

include("config.php");

$id = $_POST['editId'];
$fname = $_POST['editFname'];
$lname = $_POST['editLname'];

$update_qry = "UPDATE `ajax_crud` SET `first_name`='$fname',`last_name`='$lname' WHERE `id`='$id'";
$update_qry_result = mysqli_query($cn , $update_qry);
if($update_qry_result){
    echo 1;
}
else{
    echo 0;
}


?>