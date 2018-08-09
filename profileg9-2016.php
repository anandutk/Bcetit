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
<title>G1_2016</title>
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
<h4 class="text-center"> GROUP: G_9 </h4>
<h4 class="text-center"> BATCH: 2016</h4>
</div>
</div>
<div class="container">
<h2>Student Information</h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>Uni Roll</th> 
</tr>
<tr>
<td>1</td>
<td>Aarti</td>
<td> 1501470</td>
</tr>
<tr>
<td>2</td>
<td>Anand</td>
<td>1501471</td>
</tr>
<tr>
<td>3</td>
<td>Dinkar Kohli</td>
<td>1501472</td>
</tr>
<tr>
<td>4</td>
<td>Gurkirat</td>
<td>1501474</td>
</tr>
</tbody>
</table>
</div>
<?php
include('2016batch/assienmentquestions.php');
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
<td><a href='cng9_16.php'>Computer Network-I</a></td>
<td><a href='u_cng9_16.php'>Computer Network-I</a></td>
</tr>
<tr>
<td>2</td>
<td><a href='cag9_16.php'>Computer Architecture</a></td>
<td><a href='u_cag9_16.php'>Computer Architecture</a></td>
</tr>
<tr>
<td>3</td>
<td><a href='mpg9_16.php'>Microprocessors </a></td>
<td><a href='u_mpg9_16.php'>Microprocessors </a></td>
</tr>
<tr>
<td>4</td>
<td><a href='spg9_16.php'>System Programming</a></td>
<td><a href='u_spg9_16.php'>System Programming</a></td>
</tr>
</tbody>
</table>
</div>
<div class="container">
<h2>Assignments Marks</h2>
<table class="table tabble-striped table-bordered table-hover">

<tr>
<th colspan="6"> Computer Network-I Assignment Marks</th>
</tr>
<tr>
<td>Q.1 Marks</td>
<td>Q.2 Marks</td>
<td>Q.3 Marks</td>
<td>Q.4 Marks</td>
</tr>
<?php
$sql="SELECT * FROM ri_g_m_g9_16";
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
<th colspan="6"> Computer Architecture Assignment Marks <label><a href="index.php"></a></label></th>
</tr>
<tr>
<td>Q.1 Marks</td>
<td>Q.2 Marks</td>
<td>Q.3 Marks</td>
<td>Q.4 Marks</td>
</tr>
<?php
$sql="SELECT * FROM am_g_m_g9_16";
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
<th colspan="6">Microprocessors Assignment Marks</th>
</tr>
<tr>
<td>Q.1 Marks</td>
<td>Q.2 Marks</td>
<td>Q.3 Marks</td>
<td>Q.4 Marks</td>
</tr>
<?php
$sql="SELECT * FROM an_g_m_g9_16";
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
<th colspan="6"> System Programing Assignments Marks</th>
<tr>
<td>Q.1 Marks</td>
<td>Q.2 Marks</td>
<td>Q.3 Marks</td>
<td>Q.4 Marks</td>
</tr>
<?php
$sql="SELECT * FROM bl_g_m_g9_16";
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