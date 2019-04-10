<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .abc
  {
  	font-size:13px;
  }
  .neha
  {
  	border-bottom: 2px solid currentColor;
  }
  .navbar{
  	border-radius: 0px;
  	background-color: (255,255,255,0);
  }
  .xyz
  {
  	color:rgb(128, 130, 132);
  }
 
</style>

</head>
<body>
	<div class="banner" style="height:36px;width:100%; background-color:#a1a1a1;text-align:center;padding-top:7px;color:#ffffff;vertical-align: baseline;letter-spacing: 1px;"><span class="abc">Welcome to laravel class</span>
		<a class="neha" href="#" style="color:#ffffff;text-decoration:none;letter-spacing:03.5px;">Laravel CA</a>
		<span class="abc">Views of Homepage</span>

	</div>
	<nav class="navbar" style="width:100%; height:60px;">
    <ul class="nav navbar-nav">
          <li><a href="/home" class="xyz">Home</a></li>
          <li><a href="/about" class="xyz">About</a></li>
          <li><a href="/contact" class="xyz">Contact page</a></li>
    </ul>
    <ul class="nav navbar-nav" style="letter-spacing: 10px;font-style: bold;font-size:20px;text-shadow:1px;text-align: center;
          font-family: "Times New Roman";"><li style="padding-left:240px;"><a href="#" class="xyz">Neha</a></li>
    </ul>
</nav>
<form action="/home" method="POST">
<input type="text" name="abc">Name</input>
<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>