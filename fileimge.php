<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/
	bootstrap.min.js"></script>
	</head>
<body>
	<form action="fileimge.php" method="POST" enctype="multipart/form-data">
	 <div class="container mt-2">
		<input type="text" name="txtroll" class="form-control" placeholder="enter roll number"></br>
		<input type="text" name="txtnm"class="form-control" placeholder="enter student name"></br>
		<input type="file" name="Fileuplaod1"class="form-control" id="impInp" accept=".png,.jpg,.jpeg"></br>
		<img src="" id="blah" alt="select image" style="border-radius:50%" height="150" width="150"></br><br>
		<input type="submit" name="btn-save"  class="btn btn-success w-100" value="save">
	</div>
	</form>
	<table class="table table-boder table-center" cellpadding="0" cellspacing="0" border="1px solid" width="100%">
		<tr>
			<th>id
			<th>roll_no
			<th>user_name
			<th>prof_pic
		</tr>
		<?php
			$con=mysqli_connect("localhost","root","","table_");
			$sql="SELECT * FROM `table_stud`";
			$res= mysqli_query($con,$sql);
			$i=1;
				while($row=mysqli_fetch_assoc($res))
				{
		?>
			<tr>
					<td><?php echo $i; ?>
					<td><?php echo $row['roll_no']; ?>
					<td><?php echo $row['stud_name']; ?>
					<td><img height="50" width="50" src="<?php echo "images/".$row['prof-pic'];?>">
					
			
				<?php
					$i++;
				}
				?>
	
	
</body>
<?php
	if(isset($_POST['txtroll']))
	{
		
		if($con)
		{
			$roll=$_POST['txtroll'];
			$nm=$_POST['txtnm'];
			$target_dir="images/";
			$name=rand(150,480000);
			$extension=pathinfo($_FILES["Fileuplaod1"]["name"],PATHINFO_EXTENSION);
			$fnm=$name.".".$extension;
			move_uploaded_file($_FILES["Fileuplaod1"]["tmp_name"],$target_dir.$name.".".$extension);
			$sql="INSERT INTO `table_stud`(`roll_no`, `stud_name`, `prof-pic`) VALUES ('$roll','$nm','$fnm')";
			mysqli_query($con,$sql);
		}
	}
?>
</html>
<script>
	impInp.onchange = evt =>
		{
			const[file]=impInp.files
				if(file)
			{
				blah.src=URL.createObjectURL(file)
			}
		}
</script>
