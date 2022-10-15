<?php
	$con=mysqli_connect("localhost","root","","employ_");
	if(isset($_POST['txtno']))
	{
		
		$nm=$_POST['txtnm'];
		$cno=$_POST['txtno'];
		$sql="INSERT INTO `employ_mgt`( `emp_name`, `emp_cono`) VALUES ('$nm','$cno')";
		mysqli_query($con,$sql);
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/
	bootstrap.min.js"></script>
	</head>
	<body>
    <div class="containar mt-2">
		<form action="employ.php" method="POST">
			<input type="text" name="txtno" class="form-control" placeholder="enter employ id" required><br>
			<input type="text" name="txtnm" class="form-control" placeholder="enter employ name" requried><br>
			<input type="text" name="txtno" class="form-control" placeholder= "enter employ contact " required><br>
			<input type="submit" class="btn btn-primary w-100" value="save">
		</form>
		<table class="table table-border text-center" cellpadding="0" cellspacing="0" border="1px solid" width="100%">
		<tr>
			<td style="widths:20%;">id
			<td style="widths:50%;">emp_name
			<td style="widths:20%;">emp_cono
			<td style="widths:10%;">action
		</tr>
		<?php
					$sql = "SELECT * FROM `employ_mgt`";
					$res = mysqli_query($con,$sql);
					$i=1;
					while($row=mysqli_fetch_assoc($res))
					{
				?>
				<tr>
					<td><?php echo $i; ?>
					<td><?php echo $row['emp_name']; ?>
					<td><?php echo $row['emp_cono']; ?>
					<td><a class="btn btn-danger" href="empdelete.php?id=<?php echo $row['id']; ?>">Delete</a><br>
					<?php
					$i++;
					}
					?>
	</body>
</html>