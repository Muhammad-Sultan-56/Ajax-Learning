<?php

include("config.php");
$select_qry = "SELECT * FROM `ajax_crud`";
$select_qry_result = mysqli_query($cn, $select_qry);

if (mysqli_num_rows($select_qry_result) > 0) {

    $i = 1;
    while ($row = mysqli_fetch_assoc($select_qry_result)) {
        echo "
        <tr>
        <th >$i</th>
        <td>$row[first_name] $row[last_name]</td>
        <td><button class='btn btn-warning btn-sm'><i class='bi bi-pencil-square'></i> Edit</button></td>
        <td><button class='btn btn-danger btn-sm'><i class='bi bi-trash3'></i> Delete</button></td>
        </tr>
        ";
        $i++;
    }
}
