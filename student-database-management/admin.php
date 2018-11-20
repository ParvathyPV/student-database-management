
<!DOCTYPE html>
<html >
<head>
  <title>Login Form</title>
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
  <form class="form-signin" method="POST" action="loginscript.php">
     <center> <h3 style="font-size:35px;"><b> Admin Login Form</b></h3></center>
      
      <input type="text" name="id" id="id" class="form-control" placeholder="enter the admin id" required autofocus><br>
      
      
      <input type="text" name="name" id="name" class="form-control" placeholder="enter the admin name" required>
    <br>
      <button type="submit" name="submit">Sign in</button>
    </form>
  </div> 
  </body>
</html>