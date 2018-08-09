<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!--jQuery library--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
tr:hover{
background-color:#e57373;
}
th{
background-color: #37474F;
color: #F8F8FF;
} 
tbody{
color: #800000;
font-size: 20px !important;
}   
</style>
</head>
<body>
<?php
$id=$_SESSION['id'];
$sql="SELECT * FROM login where id=$id";
$result_set=mysqli_query($con,$sql);
if($result_set==true)
{
include('profile_header.php');
include('assignmentmarks.php');
if(isset($_POST['submit']))
{  
$a=$_POST['q1'];
$b=$_POST['q2'];
$c=$_POST['q3'];
$d=$_POST['q4'];
$sql="INSERT INTO ri_g_m_g8_15(q1,q2,q3,q4) VALUES('$a','$b','$c','$d')";
$r=mysqli_query($con,$sql);
if($r==true)
{
?>
<script type="text/javascript"> alert("Marks uploaded sucessfully");
</script>
<?php
}	
else
{
	?>
	<script type="text/javascript"> alert("Plz try again");
</script>
<?php
}
}
}
include("footer.php");
?>