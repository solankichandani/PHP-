<?php
	$con=mysqli_connect("localhost","root","","student");
	$id=$_GET['id'];
	$sql="DELETE FROM `stud_mgt` WHERE id='$id'";
	mysqli_query($con,$sql);
	header("location:crud.php");
?>