
<!DOCTYPE html>
<html>
<head>
	<title>teachertask</title>
	<style >
	body{
		background-image:url(admin.jpg); 
	}
</style>
</head>
<body>
	<?php 
	session_start();
	if (!isset($_SESSION["id"])) {
		header("Location:admin.php");
	}
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="admin";
    $ID=$_SESSION['id'];
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("connection failed".$conn->connect_error);
	}
	$sql="SELECT * from admin1  where id='$ID'";
	$res=$conn->query($sql);
	if($res->num_rows>0){?>	
	<a href="admin.php"><input type=button value="Go back" style="font-size:23px;width:100px;height:40px;border-radius:5px;color:white;background-color:green;margin-left:1200px;"></a>
	<br><br><br>
	<div>
		<a href="teachertask.php">	<input type=button value="Insert" style="font-size:23px;width:100px;height:65px;border-radius:5px;color:white;background-color:green;margin-left:600px;"></a>
	</div><br>
	<div>
		<a href="formupdatestud.php">	<input type=button value="Update" style="font-size:23px;width:100px;height:65px;border-radius:5px;color:white;background-color:green;margin-left:600px;"></a>
	</div><br>
	<div>
		<a href="formdeletestud.php">	<input type=button value="Delete" style="font-size:23px;width:100px;height:65px;border-radius:5px;color:white;background-color:green;margin-left:600px;"></a>
	</div><br>
	<div>
		<a href="selectioncri.php">	<input type=button value="Select" style="font-size:23px;width:100px;height:65px;border-radius:5px;color:white;background-color:green;margin-left:600px;"></a>
	</div><br>
</body>
</html>
<?php } ?>