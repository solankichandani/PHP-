<?php
	$con=mysqli_connect("localhost","root","","employ_");
	$id=$_GET['id'];
	$sql="DELETE FROM `employ_mgt` WHERE id='$id'";
	mysqli_query($con,$sql);
	header("location:employ.php");
?>