<?php
	$con=mysqli_connect("localhost","root","","emp_mgt");
?>
<html>
	<head>
		<title>EMP_MGT</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
		<script href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div class="cantainer mt-2">
		<form class="example" action="2.php" method="POST" >
			<input type="text" name="search" placeholder="search emp code">
			<button type="submit"><i class="fa fa-search"></i>search</button>
		</form>
		
		<table class="table table-bordered text-center" cellpadding="0" cellspacing="0" border="1px solid" width="100%">
		<tr>
			<th>EMP_CODE
			<th>FRIST_NAME
			<th>LAST_NAME
			<th>EMAIL
			<th>CONTACT
			<th>ADDRESS
			<th>DOB
			<th>CITY
			<th>STATE
			<th>COUNTRY
			<th>ACTION
		</tr>
		
		<?php
			if(isset($_REQUEST['search']))
			{
				$val = $_REQUEST['search'];
				$sql="SELECT * FROM `emp_table` where emp_code='$val'";
				$res=mysqli_query($con,$sql);
				$i=1;
				while($row=mysqli_fetch_assoc($res))
			{
		?>
		<tr>
			<td><?php echo $row['emp_code'];?>
			<td><?php echo $row['frist_name']; ?>
			<td><?php echo $row['last_name']; ?>
			<td><?php echo $row['email']; ?>
			<td><?php echo $row['contact']; ?>
			<td><?php echo $row['address']; ?>
			<td><?php echo $row['dob']; ?>
			<td><?php echo $row['city']; ?>
			<td><?php echo $row['state']; ?>
			<td><?php echo $row['country']; ?>
			<td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a><br>
			<?php
			}
			}
			?>
			
		</div>
	</body>
</html>
		