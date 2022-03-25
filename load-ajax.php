<?php
$x = 1;
$conn = mysqli_connect("localhost", "root", "", "db_jquery") or die("Connection Failed");
$sql = "SELECT * FROM tbl_user";
$result = mysqli_query($conn, $sql) or die("sql failed"); ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">
                ID
            </th>
            <th scope="col">
                First Name
            </th>
            <th scope="col">
                Last Name
            </th>
        </tr>
    </thead>
    <?php if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
        <tbody>
            <tr>
                <td> <?php echo $x;$x++; ?> </td>
                <td><?php echo $row['firstName'] ?></td>
                <td><?php echo $row['lastName'] ?></td>
            </tr>
        </tbody>
        <?php }
        mysqli_close($conn);
    } else {
        echo "Record Not Found";
    }
?>
</table>
