<?php

if ($_FILES['img']['name'] != "") {
    $file_name = $_FILES['img']['name'];
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);

    $valid_extensions = array("jpg", "png", "jpeg", "gif");

    if (in_array($extension, $valid_extensions)) {
        $new_name = rand() . "." . $extension;
        $path = "img/" . $new_name;

        if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {

            echo "<img src='$path' class='img-fluid'> <br><br>
        <button class='btn btn-info mt-3' data-path='$path' type='submit'>Delete</button>
        ";
        }
    } else {
        echo '<script>alert(Please Choose Valid Extensions)</script>';
    }
} else {
    echo '<script>alert(Please Choose a Image)</script>';
}
