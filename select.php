<?php

include("config.php");

$limit = 5;
$page = "";

if (isset($_POST['page_no'])) {
    $page = $_POST['page_no'];
} else {
    $page = 1;
}

$offset = ($page - 1) * $limit;

$select_qry = "SELECT * FROM `ajax_crud` LIMIT $offset, $limit";
$select_qry_result = mysqli_query($cn, $select_qry);

$output = "";
if (mysqli_num_rows($select_qry_result) > 0) {

    $output .= "<table class='table table-striped table-hover'>

        <tr>
            <th scope='col'>#</th>
            <th scope='col'>Full Name</th>
            <th scope='col'>Edit</th>
            <th scope='col'>Delete</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($select_qry_result)) {
        $output .= "
        <tr>
        <th >$row[id]</th>
        <td>$row[first_name] $row[last_name]</td>
        <td><button class='btn btn-warning btn-sm edit-btn' data-edit='$row[id]'><i class='bi bi-pencil-square'></i> Edit</button></td>
        <td><button class='btn btn-danger btn-sm delete-btn' data-id='$row[id]' data-bs-toggle='modal' data-bs-target='#editModal'><i class='bi bi-trash3'></i> Delete</button></td>
        </tr> ";
    }

    $output .= '</table>';

    $select_sql = "SELECT * FROM `ajax_crud`";
    $select_sql_result = mysqli_query($cn, $select_sql) or die("Query Failed");

    $total_records = mysqli_num_rows($select_sql_result);
    $total_pages = ceil(($total_records / $limit));

    $output .= "
    <h6>Total Record : $total_records</h6>
    <div class='pagination justify-content-center' id='pagination'>
    <ul class='pagination'>";

    for ($i=1; $i <= $total_pages; $i++){
        if($i == $page){
            $active = "active";
        }else{
            $active = "";
        }
        $output .=  "<li class='page-item $active'><a class='page-link' id='$i' href=''>$i</a> </li>";
    }

    $output .='</ul></div>';

    echo $output;
} else {
    echo "Record Not Found";
}
