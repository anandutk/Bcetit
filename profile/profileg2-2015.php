<?php
session_start();
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'it_login') or die('database selection problem');
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
        <title>G2_2015</title>
        <style>
<link rel="stylesheet" href="profileCss.css">

        </style>
    </head>

<body>
<?php
$id=$_SESSION['id'];
$sql="SELECT * FROM student where id=$id";
$result_set=mysqli_query($con,$sql);
if($result_set==true)
 {
	 include('profile_header.php');

?>
<body>
       <body>
           <div class="container">
  <div class="jumbotron">
<h2 class="text-center">STUDENT PROFILE</h2>
<h4 class="text-center"> GROUP: G_2 </h4>
<h4 class="text-center"> BATCH: 2015</h4>
  </div>
           </div>

<div class="container">
<h2>student Information</h2>
<table class="table tabble-striped table-bordered ">
<tbody>
  <tr>
    <th>Sr.No</th>
    <th>Name</th>
    <th>Uni Roll</th> 
  </tr>
  <tr>
  <td>1</td>
    <td>Gurwinder singh</td>
    <td>1501475</td>
    </tr>
	<tr>
  <td>2</td>
    <td>Harsh Vishu k</td>
    <td>1501476</td>
  </tr>
  <tr>
  <tr>
  <td>3</td>
    <td>Kajal</td>
    <td>1501478</td>
  </tr>
  <tr>
  <td>4</td>
    <td>Tripta</td>
    <td>161925</td>
    </tr>
	<tr>
  <td>5</td>
    <td>Kamaldeep</td>
    <td>1501479</td>
    </tr>
</tbody>
</table>
</div>
<?php
include('2015batch/assienmentquestions.php');
?>
<div class="col-sm-4 col-sm-offset-0 sidenav">
<h2>Submit Assienment</h2>

<table id="t01">
  <tr>
    <th>Sr.No</th>
    <th>Subject</th>
  </tr>
  <tr>
  <td>1</td>
    <td><a href='2015g2algorithm.php'>Algorithm</a></td>
    </tr>
  <tr>
  <td>2</td>
    <td><a href='2015g2java.php'>Java</a></td>
  
  </tr>
  <tr>
  <td>3</td>
    <td><a href='2015g2cn.php'>CN-II</a></td>
  </tr>
  <tr>
  <td>3</td>
    <td><a href='2015g2dbms.php'>DBMS</a></td>
  </tr>
</table><br>
</div>
<div class="col-sm-67 col-sm-offset-0 sidenav">
<h2>Assienments Marks</h2>
<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'amitassienmentsmarks') or die('database selection problem');
?>
<div id="header">
<label></label>
</div>
<div id="body">
 <table id="t01">
    <tr>
    <th colspan="6"> java Assienments Marks <label><a href="index.php"></a></label></th>
    </tr>
    <tr>
    <td>Q.1 Marks</td>
    <td>Q.2 Marks</td>
    <td>Q.3 Marks</td>
    <td>Q.4 Marks</td>
    <td>Total Marks</td>
    </tr>
    <?php

 $sql="SELECT * FROM g22015";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['q1'] ?></td>
        <td><?php echo $row['q2'] ?></td>
        <td><?php echo $row['q3'] ?></td>
        <td><?php echo $row['q4'] ?></td>
		<td><?php echo $row['total'] ?></td>
        </tr>
        <?php
 }
 
 ?>
    </table><br>
    
</div>
<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'ritikaassienmentsmarks') or die('database selection problem');
?>
<div id="header">
<label></label>
</div>
<div id="body">
 <table id="t01">
    <tr>
    <th colspan="6"> Algorithm Assienments Marks <label><a href="index.php"></a></label></th>
    </tr>
    <tr>
    <td>Q.1 Marks</td>
    <td>Q.2 Marks</td>
    <td>Q.3 Marks</td>
    <td>Q.4 Marks</td>
    <td>Total Marks</td>
    </tr>
    <?php

 $sql="SELECT * FROM g22015";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['q1'] ?></td>
        <td><?php echo $row['q2'] ?></td>
        <td><?php echo $row['q3'] ?></td>
        <td><?php echo $row['q4'] ?></td>
		<td><?php echo $row['total'] ?></td>
        </tr>
        <?php
 }
 
 ?>
    </table><br>
    
</div>
<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'anilassienmentsmarks') or die('database selection problem');
?>
<div id="header">
<label></label>
</div>
<div id="body">
 <table id="t01">
    <tr>
    <th colspan="6"> CN-II Assienments Marks <label><a href="index.php"></a></label></th>
    </tr>
    <tr>
    <td>Q.1 Marks</td>
    <td>Q.2 Marks</td>
    <td>Q.3 Marks</td>
    <td>Q.4 Marks</td>
    <td>Total Marks</td>
    </tr>
    <?php

 $sql="SELECT * FROM g22015";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['q1'] ?></td>
        <td><?php echo $row['q2'] ?></td>
        <td><?php echo $row['q3'] ?></td>
        <td><?php echo $row['q4'] ?></td>
		<td><?php echo $row['total'] ?></td>
        </tr>
        <?php
 }
 
 ?>
    </table><br>
	<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'gurpreetassienmentsmarks') or die('database selection problem');
?>
<div id="header">
<label></label>
</div>
<div id="body">
 <table id="t01">
    <tr>
    <th colspan="6"> DBMS Assienments Marks <label><a href="index.php"></a></label></th>
    </tr>
    <tr>
    <td>Q.1 Marks</td>
    <td>Q.2 Marks</td>
    <td>Q.3 Marks</td>
    <td>Q.4 Marks</td>
    <td>Total Marks</td>
    </tr>
    <?php

 $sql="SELECT * FROM g22015";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['q1'] ?></td>
        <td><?php echo $row['q2'] ?></td>
        <td><?php echo $row['q3'] ?></td>
        <td><?php echo $row['q4'] ?></td>
		<td><?php echo $row['total'] ?></td>
        </tr>
        <?php
 }
 
 ?>
    </table><br>

<?php
 }
 else
 {
	 header('location:studentlogin.php');
 }
 ?>
 <?php include('footer.php'); ?>
 </div>