<?php
include('conn.php');
$sql = "SELECT * FROM USER";
$result = mysqli_query($database,$sql);
if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}
$row = mysqli_fetch_row($result,MYSQLI_BOTH);

echo $row[0]; // 42
echo $row[1]; // the email value
?>