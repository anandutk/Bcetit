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
<h4 class="text-center"> GROUP: G_3 </h4>
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
<td>Manjinder Singh</td>
<td>1601695</td>
</tr>
<tr>
<td>2</td>
<td>Meenu Malgotra</td>
<td>1601696</td>
</tr>
<tr>
<td>3</td>
<td>Nimish Thakur</td>
<td>1601698</td>
</tr>
<tr>
<td>4</td>
<td>paramjit Singh</td>
<td>1601699</td>
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
<td><a href='cng3_16.php'>Computer Network-I</a></td>
<td><a href='u_cng3_16.php'>Computer Network-I</a></td>
</tr>
<tr>
<td>2</td>
<td><a href='cag3_16.php'>Computer Architecture</a></td>
<td><a href='u_cag3_16.php'>Computer Architecture</a></td>
</tr>
<tr>
<td>3</td>
<td><a href='mpg3_16.php'>Microprocessors </a></td>
<td><a href='u_mpg3_16.php'>Microprocessors </a></td>
</tr>
<tr>
<td>4</td>
<td><a href='spg3_16.php'>System Programming</a></td>
<td><a href='u_spg3_16.php'>System Programming</a></td>
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
$sql="SELECT * FROM ri_g_m_g3_16";
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
$sql="SELECT * FROM am_g_m_g3_16";
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
$sql="SELECT * FROM an_g_m_g3_16";
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
$sql="SELECT * FROM bl_g_m_g3_16";
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