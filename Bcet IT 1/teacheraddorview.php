<?php
session_start();
$id=$_SESSION['id'];
if(isset($_POST['submit'])){
if($id=1)
{
header('location:ritikaassiementsview.php');
}
else
{
	echo "error";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<h2>welcome to the staff login</h2>

<p></p>
<div class="btn-group">
<a href="#"<input type="submit" name="viewassienments" value="viewassienments"><h4>view Assienments</h4></a><br>
<a href="#"<input type="submit" name="addnotice" value="addnotice"><h4>Add notice</h4></a><br>
<a href="staffchangepassword.php"<input type="submit" name="submit" value="submit"><h4>Change password</h4></a><br>
<button><a href="stafflogout.php"<input type="submit" name="logout" value="logout"><h4>logout</h4></button></a>
</div>
</div>
</body>
</html>
