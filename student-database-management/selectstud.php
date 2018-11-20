<!DOCTYPE html>
<html>
<head>
	<title>
		selectstudent
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
	$sql="SELECT * from marksheet where admno='$admno'";
	$res=$conn->query($sql);
	if($res->num_rows>0){?>
		<table class="table table-condensed table-striped table-hover">
			<tr>
				<th>Fullname</th>
				<th>AdimissionNo:</th>
				<th>Subject1</th>
				<th>Subject2</th>
				<th>Subject3</th>
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
			echo "marklist not generated";
	$conn->close();
	?>
</body>
</html>
