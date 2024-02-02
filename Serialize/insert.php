<?php

include("config.php");

$name = $_POST['name'];
$age = $_POST['age'];
$country = $_POST['country'];
$gender = $_POST['gender'];


$insert_qry = "INSERT INTO `serialize`(`name`, `age`, `country`, `gender`) VALUES ('$name','$age' , '$country' , '$gender')";
$insert_qry_result = mysqli_query($cn , $insert_qry);

if($insert_qry_result){
    echo "Data Inserted Successfully..";
}
else{
    echo "Data is not Inserted Successfully..";
}

?>