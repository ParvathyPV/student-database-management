<?php
session_start(); 
$conn=mysqli_connect("localhost","root","","admin") ;
if (isset($_POST["submit"])) {
	$ID=$_POST["id"];
	$name=$_POST["name"];
		$result = mysqli_query($conn,"SELECT * FROM admin1 WHERE id='$ID' and name='$name'  ");
		if (mysqli_num_rows($result)>0) {
			$_SESSION["id"] = $ID;
			header("Location:teachertask1.php");
		} else {
			header("Location:admin.php");
		}
	}
