<?php  
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$conn = mysqli_connect("localhost", "root", "", "db_jquery") or die("Connection Failed");
$sql = "INSERT INTO tbl_user(firstName,lastName)VALUES('$firstName','$lastName')";
// $result = mysqli_query($conn, $sql) or die("sql failed");
if (mysqli_query($conn,$sql)) {
    echo 1;
}else {
    echo 0;
}




?>