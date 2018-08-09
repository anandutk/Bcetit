<?php
if(isset($_POST['btn-upload']))
{    
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="uploads/";
$res=move_uploaded_file($file_loc,$folder.$file);
if($res)
{
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'assienmentstudents') or die('database selection problem');
$sql="INSERT INTO mohit2016(file,type,size) VALUES('$file','$file_type','$file_size')";
$r=mysqli_query($con,$sql);
if($r)
{
echo "file uploaded";
}	
}
else
{
	echo "error";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body{
background-image:url("computer.jpg");
height:100%;
background-position:center;
background-repeat:no-repeat;
background-size:cover;
}
.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
<title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</style>
<!--code of the navbar-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

<div class="well well-lg"><h2>Department of Information Technology</h2>                                                                 
<p>Beant college of Engineering & Technology Gurdaspur<p></div>
</div>

<!-- THIS IS THE NAV BAR CODE-->
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>
<a class="navbar-brand" href="#">BCET IT</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class="active"><a href="#">Home</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">People <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="studentloginform.php">students</a></li>
<li><a href="staff.php">staff</a></li>
<li><a href="#">faculty</a></li>
</ul>
</li>

<li><a href="#">Events</a></li>
<li><a href="#">Student Activities</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">

<li><a href="staffloginform.php"><span class="glyphicon glyphicon-log-in"></span>staff Login
<li><a href="studentloginform.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>
</div>
</div>
</nav>

<div class="container">
</div>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="Semesterresults.php ">Semester Result</a>
    <a href="mstresults.php">MST Result</a>
    <a href="activitiesresults.php">Activities Result</a>
  </div>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Result Section</span>
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
<title>File Upload and view With PHP and mysqli</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file" /><br>
<button type="submit" name="btn-upload">upload</button>
</form>
</body>
</html>