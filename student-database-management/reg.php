
<!Doctype html>
<html>
<head>
  <title>DETAILS</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
  form {
 display: inline-block;
}
input,textarea{
padding:6px 8px;font-size:18px;box-sizing: border-box;width:200px;border-radius:5px;border-width:1px;border-style:solid;border-color:grey;
}

</style>
</head>
<body style="background-image: url(reg.jpg);">
  
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-xs-0"></div>
    <div class="col-sm-4 col-xs-12">
      <center>
<h2 align="center" style="color:black;"><u><b>DETAILS FORM</b></u></h2>
<a href="lblogout.php"><button class="btn btn-primary" style="border:2px solid white;margin-left:500px;">LOGOUT</button></a>
<form name="contactform" action="s-insert.php" method="post" id="contact-form">
  <label style="font-size:17px;">Name :</label>
  <input type="text" name="name" id="name" style="margin-left: 25px;"><br><br>
   <label style="font-size:17px;">AdmiNO :</label>
  <input type="text" name="admno" id="admno" style="margin-left: 18px;"><br><br>
  <label style="font-size:17px;">DOB:</label>
  <input type="date" name="dob" id="dob" style="margin-left: 25px;"><br><br>
  <label style="font-size:17px;">Course:</label>
  <input type="text" name="cou" id="cou" style="margin-left: 15px;" ><br><br>
    <label style="font-size:17px;">Branch:</label>
  <input type="text" name="branch" id="branch" style="margin-left: 15px;" ><br>
   <label style="font-size:17px;margin-right:300px;">Father'sName :</label>
  <input type="text" name="fat_name" id="fat_name" style="margin-left: 70px;"><br><br>
<label align="center" style="font-size:17px;margin-right: 330px;">PermanentAddress:</label>
  <textarea style="margin-left:75px;" name="address" cols="28" rows="5" id="address"></textarea><br><br>
  <label align="center" style="font-size:17px;">Phone:</label>
  <input type="tel" name="phone" id="phone" style="margin-left: 15px;" pattern="[0-9]{10}"><br><br>
  <button name="submit" value="Submit" id="submitForm" style="display: inline-block;
background-color:green;
color:#ffffff;
border-radius: 5px;
text-align:center;
margin-top:2px;
padding: 13px 50px;
border-width: 5px;
border-color: white;
border-style:solid;margin-left: 50px;">SUBMIT</button>

</form></center>

<div class="col-sm-4 col-xs-0"></div>
</div>

 

</body>
</html>