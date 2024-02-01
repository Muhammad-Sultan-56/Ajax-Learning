<?php

include("config.php");

$limit = 5;
$page = "";

if(isset($_POST['page_no'])){
    $page = $_POST['page_no'];
}
else{
    $page = 1;
}

$offset = ($page - 1) * $limit;



$select_qry = "SELECT * FROM `ajax_crud` LIMIT $offset, $limit";
$select_qry_result = mysqli_query($cn, $select_qry);

if (mysqli_num_rows($select_qry_result) > 0) {

    $i = 1;
    $output = "";
    while ($row = mysqli_fetch_assoc($select_qry_result)) {
        $output .= "
        <tr>
        <th >$i</th>
        <td>$row[first_name] $row[last_name]</td>
        <td><button class='btn btn-warning btn-sm edit-btn' data-edit='$row[id]'><i class='bi bi-pencil-square'></i> Edit</button></td>
        <td><button class='btn btn-danger btn-sm delete-btn' data-id='$row[id]' data-bs-toggle='modal' data-bs-target='#editModal'><i class='bi bi-trash3'></i> Delete</button></td>
        </tr>
        ";
        $i++;
    }

    $output .= "  <nav>
    <ul class='pagination justify-content-center' id='pagination'>
        <li class='page-item active' aria-current='page'><a href='' class='page-link shadow-none' id='1'>1</a></li>
        <li class='page-item'><a class='page-link shadow-none' id='2' href=''>2</a></li>
        <li class='page-item'><a class='page-link shadow-none' id='3' href=''>3</a></li>
    </ul>
</nav>";
    echo $output;
} else {
    echo "Record Not Found";
}
