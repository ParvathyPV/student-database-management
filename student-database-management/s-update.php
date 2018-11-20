<!Doctype html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="s-details";
    $admi=$_POST['admno'];
    $phone=$_POST['phone'];
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("connection failed".$conn->connect_error);
	}
	$sql="UPDATE stud set cno='$phone' where admno='$admi'";
	if($conn->query($sql)===TRUE)
	{
		echo "record is updated successfully";
	}
	else
	{
		echo "error".$sql." ".$conn->error;
	}
	$conn->close();
	?>
</body>
</html>