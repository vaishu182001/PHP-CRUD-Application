
<?php

session_start();
//logout
if (isset($_POST['but_logout']))
{
	session_destroy();
	header('Location:login.html');
}
echo "Welcome".$_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<style>
.div1{
		background-color: gray;
	}
	ul {
  list-style-type: none;
  margin: 0;
  padding: 10;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
body{

	background : yellow;
}

</style>
</head>
<body>
	<div class="div1">
		<br>
		<br>

<h1 style="text-align: center;color: yellow">Welcome Customer ! </h1>


<br>
<br>

</div>
<ul>
 
 
  
  <li><a href="http://localhost/PHPApp/updation.html">Update Customer Information</a></li>
  <li><a href="http://localhost/PHPApp/Productlist.html">View Categories</a></li>

</ul>
<div>
	<img src="shopping.jpg" width="1400" >

	</div>

	<br>
	<br>
	<form method='POST' action="">
		<center><input type="submit" value="Logout" name="but_logout"><center>
	</form>

</body>
</html>


