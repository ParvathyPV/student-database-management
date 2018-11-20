<!DOCTYPE html>
<html>
<head>
	<title>
		select
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="s-details";
    $admno=$_POST['admno'];
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("connection failed".$conn->connect_error);
	}
	$sql="SELECT * from stud  where admno='$admno'";
	$res=$conn->query($sql);
	if($res->num_rows>0){?>
		<table class="table table-condensed table-striped table-hover">
			<tr>
				<th>Name</th>
				<th>AdmissionNo</th>
				<th>DOB</th>
				<th>Course</th>
				<th>Branch</th>
				<th>Father'sName</th>
				<th>Address</th>
				<th>ContactNo</th>
				</tr>
				<?php foreach($res as $value){?>
				<tr>
				<td><?php echo $value['name']?></td>
				<td><?php echo $value['admno']?></td>
				<td><?php echo $value['dob']?></td>
				<td><?php echo $value['course']?></td>
				<td><?php echo $value['branch']?></td>
				<td><?php echo $value['fathername']?></td>
				<td><?php echo $value['caddress']?></td>
				<td><?php echo $value['cno']?></td>
			</tr>
			<?php }?>	
			</table>
	<?php } 
		else 
			echo "Student does not exist";
	$conn->close();
	?>
</body>
</html>
