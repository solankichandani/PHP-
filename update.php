<?php
	$con=mysqli_connect("localhost","root","","pg2");
	$ec=$_GET['Empcode'];
	$sql="SELECT * FROM `employee` WHERE Empcode='$ec'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
?>
<head>
		<title>EMPLOYEE</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container mt-2">
		<form action="update.php" method="POST">
			<input value="<?php echo $row['Empcode']; ?>" type="text" name="txtec" class="form-control" placeholder="Enter Emp Code" required><br>
			<input value="<?php echo $row['fname']; ?>" type="text" name="txtfnm" class="form-control" placeholder="Enter Fullname" required><br>
			<input value="<?php echo $row['lname']; ?>" type="text" name="txtlnm" class="form-control" placeholder="Enter Lastname" required><br>
			<input value="<?php echo $row['email']; ?>" type="Email" name="txtem" class="form-control" placeholder="Enter Email" required><br>
			<input  value="<?php echo $row['contact']; ?>" type="text" name="txtcno" class="form-control" placeholder="Enter Contactno" required><br>
			<input  value="<?php echo $row['address']; ?>" type="text" name="txtad" class="form-control" rows="4"  placeholder="Enter Address" required><br>
			<input  value="<?php echo $row['dob']; ?>" type="date" name="txtdt" class="form-control" placeholder="Enter Birthdate" required"><br>
			<input  value="<?php echo $row['city']; ?>" type="text" name="txtcy" class="form-control" placeholder="Enter City" required><br>
			<input  value="<?php echo $row['state']; ?>" type="text" name="txtst" class="form-control" placeholder="Enter State" required><br>
			<input  value="<?php echo $row['country']; ?>" type="text" name="txtcou" class="form-control" placeholder="Enter Country" required><br>
			<button type="submit" class="btn btn-primary " value="update">UPDATE</button>
		</form>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['Empcode']))
	{
		$ec = $_POST['Empcode'];
		$fnm=$_POST['fname'];
		$lnm=$_POST['lname'];
		$em=$_POST['email'];
		$cno=$_POST['contact'];
		$ad=$_POST['address'];
		$dt=$_POST['bod'];
		$cy=$_POST['city'];
		$st=$_POST['state'];
		$cou=$_POST['country'];
		$sql="UPDATE FROM `employee` SET  fname='$fnm', lname='$lnm', email='$em', contact='$cno', address='$ad', dob='$dt',city='$cy', state='$st', country='$cou' WHERE Empcode='$ec'";
		echo $sql;
		mysqli_query($con,$sql);
	}
?>
