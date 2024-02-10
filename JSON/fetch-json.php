<?php

include("config.php");

$sql = "SELECT * FROM `serialize`";
$result = mysqli_query($cn , $sql);

$output = mysqli_fetch_all($result , MYSQLI_ASSOC);


echo json_encode($output);
// echo "<pre>";
// print_r($output);
// echo "</pre>";
?>