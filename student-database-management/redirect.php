<!Doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
body{
	background-image: url(logout.jpg);
	background-size: 1800px 750px;
	font-size: 75px;
	margin-top: 100px;
}
p{
    
    position: relative;
    -webkit-animation-name: example; 
    -webkit-animation-duration: 4s; 
    animation-name: example;
    animation-duration: 4s;
}
.text{
	  position: relative;
    -webkit-animation-name: examples; 
    -webkit-animation-duration: 4s; 
    animation-name: examples;
    animation-duration: 4s;
}

@-webkit-keyframes examples {
    0%   { color:white;left:0px; top:10px;}
    25%  { color:#FF1493;left:200px; top:10px;}
    50%  { color:hotpink;left:200px; top:200px;}
    75%  {color:white;left:0px; top:200px;}
    100% { color:black;left:0px; top:10px;}
}

@keyframes example {
    0%   { left:0px; top:10px;}
    25%  {left:200px; top:10px;}
    50%  { left:200px; top:200px;}
    75%  {left:0px; top:200px;}
    100% {left:0px; top:10px;}
}
</style>
</head>
<body>
    <a href="relogout.php"><button class="btn" style="width:10px;height:7px;color:black;font-size: 23px;margin-top:20px;margin-left:50px;"><b>LOGOUT</b></button></a>
<center><p class="text"><b>User Not Found Try Again</b></p><br>
		<p><img src="thumbs.jpg" class="img-circle" height=450;"></p></center>
</body>
</html>