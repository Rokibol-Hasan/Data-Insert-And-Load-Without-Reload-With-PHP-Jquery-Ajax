<?php

$conn = mysqli_connect("localhost", "root", "", "db_jquery") or die("Connection Failed");
$sql = "SELECT * FROM tbl_user";
$result = mysqli_query($conn, $sql) or die("sql failed");
$output = "";
if (mysqli_num_rows($result) > 0) {
    $output = '<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            Name
        </th>
    </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
        <td>{$row['userid']}</td>
        <td>{$row['username']}</td>
        </tr>
        ";
    }
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
} else {
    echo "Record Not Found";
}
