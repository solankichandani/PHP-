<?php
	$con=mysqli_connect("localhost","root","","pg2");
	if(isset($_POST['txtec']))
	{
		$ec=$_POST['txtec'];
		$fnm=$_POST['txtfnm'];
		$lnm=$_POST['txtlnm'];
		$em=$_POST['txtem'];
		$cno=$_POST['txtcno'];
		$ad=$_POST['txtad'];
		$dt=$_POST['txtdt'];
		$cy=$_POST['txtcy'];
		$st=$_POST['txtst'];
		$cou=$_POST['txtcou'];
		$sql="INSERT INTO `employee`(`Empcode`, `fname`, `lname`,`email`, `contact`, `address`, `dob`, `city`, `state`, `country`) VALUES ('$ec','$fnm','$lnm','$em','$cno','$ad','$dt','$cy','$st','$cou')";
		mysqli_query($con,$sql);
	}
?>
<html>	
	<head>
		<title>EMPLOYEE</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container mt-2">
		<form action="form.php" method="POST">
			<input type="text" name="txtec" class="form-control" placeholder="Enter Emp Code" required><br>
			<input type="text" name="txtfnm" class="form-control" placeholder="Enter Fullname" required><br>
			<input type="text" name="txtlnm" class="form-control" placeholder="Enter Lastname" required><br>
			<input type="Email" name="txtem" class="form-control" placeholder="Enter Email" required><br>
			<input type="text" name="txtcno" class="form-control" placeholder="Enter Contactno" required><br>
			<textarea type="text" name="txtad" class="form-control" rows="4"  placeholder="Enter Address" required></textarea><br>
			<input type="date" name="txtdt" class="form-control" placeholder="Enter Birthdate" required"><br>
			<input type="text" name="txtcy" class="form-control" placeholder="Enter City" required><br>
			<input type="text" name="txtst" class="form-control" placeholder="Enter State" required><br>
			<input type="text" name="txtcou" class="form-control" placeholder="Enter Country" required><br>
			<button type="submit" class="btn btn-primary " value="save">Submit</button>
			<button type="delete" class="btn btn-success " value="clear">Delete</button>
		</form>
		</div>
	</body>
</html>