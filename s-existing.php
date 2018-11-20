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
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sum=($sub1+$sub2+$sub3);
	$per=($sum/300)*100;
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	$sql="INSERT INTO marksheet(name,admno,sub1,sub2,sub3,per) VALUES('$fullname','$admno','$sub1','$sub2','$sub3','$per')";
	if($conn->query($sql)===TRUE)
	{
      require_once('selectstud.php');
     die;
	}
	else{
		echo "error".$sql." ".$conn->error;
	}
	$conn->close();
	?>
</body>
</html>