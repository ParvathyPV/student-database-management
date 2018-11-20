<!Doctype html>
<html>
<head>
<title>delete</title>
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
$sql="DELETE from stud where admno='$admno'";
$sq="DELETE from marksheet where admno='$admno'";
if($conn->query($sql)===TRUE){
if($conn->query($sq)===TRUE){
	echo "the row is deleted successfully";
}
else{
echo "error".$sql." ".$conn->error;
}
}
$conn->close();
?>
</body>
</html>
