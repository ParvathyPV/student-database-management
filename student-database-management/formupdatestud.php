<!DOCTYPE html>
<html>
<head>
	<title>formupdate student</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <style >
    body {
      padding-top: 40px;
      padding-bottom: 40px;
      
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    
   
     .form-control {
      position: relative;
      height: auto;
     
      box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }
     .form-control:focus {
      z-index: 2;
    }
    .form-signin  {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
body{
  margin-top:90px;
    height: 1000px;
    background-image:url(admin.jpg);  
    background-size: 1800px 750px;
}
button{
  width:300px;
  height:40px;
  border-radius: 5px;
  border:1px solid green;
  background-color:green;
  color:white;
}

  </style>
</head>
<body>
<div class="container">
  <form class="form-signin" method="POST" action="s-update.php">
     <center> <h3 style="font-size:35px;"><b> Student Update</b></h3></center>
      
      <input type="text" name="admno" id="admno" class="form-control" placeholder="enter the admission no:" required autofocus><br>
      
      
      <input type="text" name="phone" id="phone" class="form-control" placeholder="enter the phoneno:" required>
    <br>
      <button type="submit" name="submit">Update</button>
    </form>
  </div> 
</body>
</html>