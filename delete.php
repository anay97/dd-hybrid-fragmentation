<?php
$id=$_GET['id'];
$loc=$_GET['loc'];

require('connect.php');

if($loc=='Mira Road'){
	$loc='miraroad';
}
else{
	$loc='goregaon';
}

$sql = "DELETE FROM $loc WHERE id=$id";

if (mysqli_query($conn, $sql)) {
	$sql2 = "DELETE FROM users WHERE id=$id";
	if (mysqli_query($conn, $sql2)) {
		header("Location:redirect_to_home.php");
	}
} else {
    echo "Error deleting record: ";
}
?>