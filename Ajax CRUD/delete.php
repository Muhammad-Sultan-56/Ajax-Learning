<?php

include("config.php");

$id = $_POST['id'];

$delete_qry = "DELETE FROM `ajax_crud` WHERE id = '$id'";
$delete_qry_result = mysqli_query($cn , $delete_qry);

if($delete_qry_result){
    echo 1;
}
else{
    echo 0;
}

?>