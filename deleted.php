<?php

include('connection.php');

$id = $_GET['id'];

$query = "DELETE FROM userlist WHERE id = '$id'";
$data = mysqli_query($conn, $query);

if ($data) {
	   
    echo "<script>window.alert('Record Deleted'); window.location = 'display.php';</script>";

} else {
    echo "Data not Deleted: " . mysqli_error($conn);
}

?>
