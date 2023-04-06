<?php
	$con=mysqli_connect("localhost","root","","pg2");
?>
<html>
	<head>
		<title>textbox</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container mt-3">
	<form class="Example" action="search.php" method="POST">
		<input type="text" name="search" placeholder="Search" >
		<button type="submit"><i class="fa fa-search "></i>search</button>
	</form>

		<table class="table table-bordered text-center" cellpadding="0" cellspacing="0" width="100" border="0">
			<tr>
				<td>Empcode
				<td>fname
				<td>lname
				<td>email
				<td>contact
				<td>address
				<td>dob
				<td>city
				<td>state
				<td>country
				<td>action
			<tr>
			<?php
				if(isset($_REQUEST['search']))
				{
				$val= $_REQUEST['search'];
				$sql="SELECT * FROM `employee` WHERE Empcode='$val'";
				$res=mysqli_query($con,$sql);
				while($row=mysqli_fetch_assoc($res))
				{
			?>
			  <tr>
			  <td><?php echo $row['Empcode']; ?>
			  <td><?php echo $row['fname']; ?>
			  <td><?php echo $row['lname']; ?>
			  <td><?php echo $row['email']; ?>
			  <td><?php echo $row['contact']; ?>
			  <td><?php echo $row['address']; ?>
			  <td><?php echo $row['dob']; ?>
			  <td><?php echo $row['city']; ?>
			  <td><?php echo $row['state']; ?>
			  <td><?php echo $row['country']; ?>
			  <td><a class="btn btn-danger" href="delete.php?val=<?php echo $row['Empcode']; ?>">DELETE</a>
			  <a class="btn btn-success" href="update.php?ec=<?php echo $row['Empcode']; ?>">UPDATE</a>
			 <?php 
				}
				}
			 ?>
		</table>
	</body>
</html>