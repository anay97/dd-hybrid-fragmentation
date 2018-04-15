<?php
require('connect.php');
require('distributer.php');
$user=$_POST['username'];
$pass=$_POST['pass'];
$fnm=$_POST['fnm'];
$lnm=$_POST['lnm'];
$addr=$_POST['addr'];
$contact=$_POST['contact'];




$query="INSERT INTO users(username,pass) VALUES('$user','$pass')";
$id=intval(get_latest())+1;

if(mysqli_query($conn,$query)){
	$table='';
	if($addr=='Mira Road'){
		$table='miraroad';
	}
	else{
		$table='goregaon';
	}
	$q2="INSERT INTO $table(id,firstname,lastname,contact) VALUES($id,'$fnm','$lnm','$contact')";
	if(mysqli_query($conn,$q2)){
	header('Location:redirect_to_home.php');
	}
}else{
	echo'fatal error';
}




?>