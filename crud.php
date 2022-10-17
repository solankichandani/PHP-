<?php
	$con=(mysqli_connect("localhost","root","","student"));
	if(isset($_POST['txtnm']))
	{
		$nm=$_POST['txtnm'];
		$cnm=$_POST['txtcnm'];
		$co=$_POST['txtco'];
		$sql="INSERT INTO `stud_mgt`(`stud_name`, `course`, `contact`) VALUES ('$nm','$cnm','$co')";
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
<div class="container mt-2">
	<form action="crud.php" method="POST">
		<input type="text" name="txtnm" class="form-control" placeholder="Enter student name" required><br>
		<input type="text" name="txtcnm" class="form-control" placeholder="Enter course name" required><br>
		<input type="text" name="txtco" class="form-control" placeholder="Enter contact" required><br>
		<input type="submit" name="btn " class="btn btn-success w-100" value="save">
	</form>
</div>
<div class="container mt-2">
	<table class="table table-border text-center" cellpadding="1" cellspacing="1" width="100%">
		<tr>
			<th>Id</th>
			<th>Student name</th>
			<th>Course</th>
			<th>Contact</th>
			<th>Action</th>
		<?php
			$sql = "SELECT * FROM `stud_mgt`";
			$res = mysqli_query($con,$sql);
			$i=1;
			while($row = mysqli_fetch_assoc($res))
			{
		?>
		<tr>
			<td><?php echo $i; ?>
			<td><?php echo $row['stud_name']; ?>
			<td><?php echo $row['course']; ?>
			<td><?php echo $row['contact']; ?>
			<td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
			<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-nm="<?php echo $row['stud_name']; ?>" data-bs-cnm="<?php echo $row['course']; ?>" data-bs-co="<?php echo $row['contact']; ?>"data-bs-id="<?php echo $row['id']; ?>">Update</button>
				<?php
					$i++;
					}
				?>
			</table>
			<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel"> Update Record </h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="crud.php" method="POST">
			<div class="mb-3">
				<label for="recipient-name" class="col-form-label">stud_name:</label>
				<input type="text" name="txtsnm" class="form-control" id="sname">
				<input type="text" name="txtid" class="form-control" id="id" hidden>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">course:</label>
            <input type="text" name="txtscn" class="form-control" id="course">
          </div>
		  <div class="mb-3">
            <label for="message-text" class="col-form-label">contact:</label>
            <input type="text" name="txtcno" class="form-control" id="cno">
          </div>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary w-100">Update</button>
		  </div>
				</form>
			</div>
			</div>
			</div>	
	</body>
</html>
<script>
	const exampleModal = document.getElementById('staticBackdrop')
	exampleModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const nm = button.getAttribute('data-bs-nm')
    const cnm = button.getAttribute('data-bs-cnm')
	const co = button.getAttribute('data-bs-co')
    const id = button.getAttribute('data-bs-id')
    const modalTitle = exampleModal.querySelector('.modal-title')
	modalTitle.textContent = `Update Record ID ${id}`
    document.getElementById('sname').value = nm;
	document.getElementById('course').value = cnm;
	document.getElementById('cno').value = co;
	document.getElementById('id').value = id;
})
</script>
<?php
	if(isset($_POST['txtid']))
	{
		$id = $_POST['txtid'];
		$nm = $_POST['txtsnm'];
		$cnm = $_POST['txtscn'];
		$co = $_POST['txtcno'];
		$sql="UPDATE `stud_mgt` SET `stud_name`='$nm',`course`='$cnm',`contact`='$co' WHERE `id`='$id'";
		mysqli_query($con,$sql);
		
	}
?>


	
	