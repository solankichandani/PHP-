<?php
	$con=mysqli_connect("localhost","root","","pg2");
	$val=$_GET['val'];
	$sql="DELETE FROM `employee` WHERE Empcode='$val'";
	mysqli_query($con,$sql);
	header("location:search.php");
?>