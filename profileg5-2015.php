<?php  
session_start();
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'bcet_it') or die('database selection problem');
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
<title>G5_2015</title>
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
?>
<body>
<div class="container">
<div class="jumbotron" style="margin-top: 30px">
<h2 class="text-center">STUDENT PROFILE</h2>
<h4 class="text-center"> GROUP: G_5 </h4>
<h4 class="text-center"> BATCH: 2015</h4>
</div>
</div>
<div class="container">
<h2>Student Information </h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>Uni Roll</th> 
</tr>
<tr>
<td>1</td>
<td>Sanjay singh k</td>
<td>1501490</td>
</tr>
<tr>
<td>2</td>
<td>shikha</td>
<td>1501491</td>
</tr>
<tr>
<td>3</td>
<td>shweta</td>
<td>1501494</td>
</tr>
<tr>
<td>4</td>
<td>Somil sethi</td>
<td>1501495</td>
</tr>
</tbody>
</table>
</div>
<?php
include('2015batch/assienmentquestions.php');
?>
<div class="container">
<h2> Submit Assignment</h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th>Sr.No</th>
<th>Subject</th>
<th>Uploaded Files</th>
</tr>
<tr>
<td>1</td>
<td><a href='networkg5_15.php'>Network Programming</a></td>
<td><a href='u_networkg5_15.php'>Network Programming</a></td>
</tr>
<tr>
<td>2</td>
<td><a href='wtg5_15.php'>Web Technologies</a></td>
<td><a href='u_wtg5_15.php'>Web Technologies</a></td>
</tr>
<tr>
<td>3</td>
<td><a href='seg5_15.php'>Software Engineering</a></td>
<td><a href='u_seg5_15.php'>Software Engineering</a></td>
</tr>
<tr>
<td>4</td>
<td><a href='cgg5_15.php'>Computer Graphics</a></td>
<td><a href='u_seg5_15.php'>Software Engineering</a></td>
</tr>
</tbody>
</table>
</div>
<div class="container">
<h2>Assignments Marks</h2>
<table class="table tabble-striped table-bordered table-hover">

<tr>
<th colspan="6"> Network Programming Assignment Marks</th>
</tr>
<tr>
<td>Q.1 Marks</td>
<td>Q.2 Marks</td>
<td>Q.3 Marks</td>
<td>Q.4 Marks</td>
</tr>
<?php
$sql="SELECT * FROM am_g_m_g5_15";
$result_set=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result_set))
{
?>
<tr>
<td><?php echo $row['q1'] ?></td>
<td><?php echo $row['q2'] ?></td>
<td><?php echo $row['q3'] ?></td>
<td><?php echo $row['q4'] ?></td>
</tr>
<?php
}
?>
</table><br>
</div>

<div class="container">
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th colspan="6"> Web Technolgogies Assignment Marks <label><a href="index.php"></a></label></th>
</tr>
<tr>
<td>Q.1 Marks</td>
<td>Q.2 Marks</td>
<td>Q.3 Marks</td>
<td>Q.4 Marks</td>
</tr>
<?php
$sql="SELECT * FROM gu_g_m_g5_15";
$result_set=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result_set))
{
?>
<tr>
<td><?php echo $row['q1'] ?></td>
<td><?php echo $row['q2'] ?></td>
<td><?php echo $row['q3'] ?></td>
<td><?php echo $row['q4'] ?></td>
</tr>
<?php
}
?>
</table><br>
</div>


<div class="container">
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th colspan="6">Software Engineering Assignment Marks</th>
</tr>
<tr>
<td>Q.1 Marks</td>
<td>Q.2 Marks</td>
<td>Q.3 Marks</td>
<td>Q.4 Marks</td>
</tr>
<?php
$sql="SELECT * FROM mo_g_m_g5_15";
$result_set=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result_set))
{
?>
<tr>
<td><?php echo $row['q1'] ?></td>
<td><?php echo $row['q2'] ?></td>
<td><?php echo $row['q3'] ?></td>
<td><?php echo $row['q4'] ?></td>
</tr>
<?php
}
?>
</table><br>
</div>

<div class="container">
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th colspan="6"> Computer Graphics Assignments Marks</th>
<tr>
<td>Q.1 Marks</td>
<td>Q.2 Marks</td>
<td>Q.3 Marks</td>
<td>Q.4 Marks</td>
</tr>
<?php
$sql="SELECT * FROM ri_g_m_g5_15";
$result_set=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result_set))
{
?>
<tr>
<td><?php echo $row['q1'] ?></td>
<td><?php echo $row['q2'] ?></td>
<td><?php echo $row['q3'] ?></td>
<td><?php echo $row['q4'] ?></td>
</tr>
<?php
}
?>
</table><br>

<?php
}
else
{
header('location:index.php');
}include('footer.php');
?>
</body>