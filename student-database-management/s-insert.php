<!Doctype html>
<html>
<head>
	<title>insert</title>
</head>
<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="s-details";
	$fullname=$_POST['name'];
	$admno=$_POST['admno'];
	$dob=$_POST['dob'];
	$fatname=$_POST['fat_name'];
	$course=$_POST['cou'];
	$branch=$_POST['branch'];
	$add=$_POST['address'];
	$pho=$_POST['phone'];

	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	$sql="INSERT INTO stud(name,admno,dob,course,branch,fathername,caddress,cno) VALUES('$fullname','$admno','$dob','$course','$branch','$fatname','$add','$pho')";
	if($conn->query($sql)===TRUE)
	{
		echo "new record is entered";

	}
	else{
		echo "error".$sql." ".$conn->error;
	}
	$conn->close();
	?>
</body>
</html>