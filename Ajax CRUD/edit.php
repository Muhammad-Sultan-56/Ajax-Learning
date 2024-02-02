<?php

include("config.php");

$id = $_POST['id'];

$select_qry = "SELECT * FROM `ajax_crud` WHERE id = '$id'";
$select_qry_result = mysqli_query($cn, $select_qry);

if (mysqli_num_rows($select_qry_result) > 0) {

    while ($row = mysqli_fetch_assoc($select_qry_result)) {
        echo "
        <h3>Edit Data</h3>
        <hr>
        <div class='row'>

        <div class='col-md-6'>
            <label class='form-label'>First Name</label>
            <input type='text' class='form-control shadow-none' value='$row[first_name]'  id='edit-fname'>
            <input type='hidden' class='form-control shadow-none' value='$row[id]'  id='edit-id'>

        </div><!--col-->

        <div class='col-md-6'>
            <label class='form-label'>Last Name</label>
            <input type='text' class='form-control shadow-none' value='$row[last_name]'  id='edit-lname'>
        </div>
     </div><!--row-->

    <div class='row'>
        <div class='col-md-12 text-end'>
            <button type='submit'  class='btn btn-secondary shadow-none mt-3' id='save' value='save'><i class='bi bi-pencil-square'></i> Save & Submit</button>
        </div>
    </div>
    
        ";
     
    }
}
else{
    echo "Record Not Found";
}

?>