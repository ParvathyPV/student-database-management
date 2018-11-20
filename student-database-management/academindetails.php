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
    $name=$_POST['name'];
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("connection failed".$conn->connect_error);
	}
	$sql="SELECT * from marksheet  where name='$name'";
	$res=$conn->query($sql);
	if($res->num_rows>0){?>
		<table class="table table-condensed table-striped table-hover">
			<tr>
				<th>Name</th>
				<th>AdmissionNo</th>
				<th>Subject1</th>
				<th>Subject1</th>
				<th>Subject1</th>
				<th>Percentage</th>
				</tr>
				<?php foreach($res as $value){?>
				<tr>
				<td><?php echo $value['name']?></td>
				<td><?php echo $value['admno']?></td>
				<td><?php echo $value['sub1']?></td>
				<td><?php echo $value['sub2']?></td>
				<td><?php echo $value['sub3']?></td>
				<td><?php echo $value['per']?></td>
				
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
