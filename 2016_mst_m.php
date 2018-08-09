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
<title>MST marks</title>
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
<h2 class="text-center">Batch-2016 MST Marks</h2>
</div>
</div>

<div class="container">
<h2>Computer Network-I</h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th>File Name</th>
<th>Type</th>
<th>Size</th>
<th>Date</th>
<th>Download</th> 
</tr>

<?php

 $sql="SELECT * FROM ri_u_mst_m_16";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['Date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 
 ?>
 </tbody>
</table>
</div>
<div class="container">
<h2>Computer Architecture</h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th>File Name</th>
<th>Type</th>
<th>Size</th>
<th>Date</th>
<th>Download</th> 
</tr>

<?php

 $sql="SELECT * FROM am_u_mst_m_16";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['Date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 
 ?>
 </tbody>
</table>
</div>
<div class="container">
<h2>Microprocessors </h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th>File Name</th>
<th>Type</th>
<th>Size</th>
<th>Date</th>
<th>Download</th> 
</tr>

<?php

 $sql="SELECT * FROM an_u_mst_m_16";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['Date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 
 ?>
 </tbody>
</table>
</div>
<div class="container">
<h2>System Programming </h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
<th>File Name</th>
<th>Type</th>
<th>Size</th>
<th>Date</th>
<th>Download</th> 
</tr>

<?php

 $sql="SELECT * FROM bl_u_mst_m_15";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['Date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 
 ?>
 </tbody>
</table>
</div>
<?php include('footer.php'); 
}
else
{
	header('location:login.php');
}
?>
</body>
</html>