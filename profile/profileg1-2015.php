
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
        <title>G1 2015</title>
        <style>
.jumbotron{
    margin-top: 10px;
}
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
$sql="SELECT * FROM student where id=$id";
$result_set=mysqli_query($con,$sql);
if($result_set==true)
 {
 include('profile_header.php'); 
?>
<body>
       
           <div class="container">
  <div class="jumbotron" style="margin-top: 10px; background-color: #e57373; text-decoration-color: #e8eaf6" >
<h2 class="text-center">STUDENT PROFILE</h2>
<h4 class="text-center"> GROUP: G_1 </h4>
<h4 class="text-center"> BATCH: 2015</h4>
  </div>
           </div>
           <div class="container">
<div class="clear"></div>
    <h4>      
        <marquee behavior="scrolling" scrollamount="2" bgcolor="#37474F" style="color: White;" > Welcome to Department of IT BCET Gurdaspur </marquee>
    </h4>
    </div>
<div class="container">
    
    <h2> STUDENT INFORMATION</h2>
<table class="table tabble-striped table-bordered  ";> 
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
include('2015batch/assienmentquestions.php');
?>
<div class="container">
<h2>Submit Assienment</h2>
<table class="table tabble-striped table-bordered ">
<tbody>
  <tr>
    <th>Sr.No</th>
    <th>Subject</th>
  </tr>
  <tr>
  <td>1</td>
    <td><a href='2015g1algorithm.php'>Network Programming</a></td>
    </tr>
<tr>
  <td>2</td>
    <td><a href='2015g1java.php'>Web Technolgogies</a></td>
  
  </tr>
  <tr>
  <td>3</td>
    <td><a href='2015g1cn.php'>Software Engineering</a></td>
  </tr>
  <tr>
  <td>3</td>
    <td><a href='2015g1dbms.php'>Computer Graphics</a></td>
  </tr>
  </tbody>
</table>
</div>

<div class="container">
<h2>Assienments Marks</h2>
<table class="table tabble-striped table-bordered ">
<tbody>
<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'amitassienmentsmarks') or die('database selection problem');
?>


    <tr>
    <th colspan="6"> Network Programming Assignment Marks <label><a href="index.php"></a></label></th>
    </tr>
    <tr>
    <td>Q.1 Marks</td>
    <td>Q.2 Marks</td>
    <td>Q.3 Marks</td>
    <td>Q.4 Marks</td>
    <td>Total Marks</td>
    </tr>
	</tbody>
</table>
</div>
    <?php

 $sql="SELECT * FROM g12015";
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
</div>
<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'ritikaassienmentsmarks') or die('database selection problem');
?>
<div class="container">
<table class="table tabble-striped table-bordered ">
<tbody>
    <tr>
    <th colspan="6"> Web Technolgogies Assignment Marks <label><a href="index.php"></a></label></th>
    </tr>
    <tr>
    <td>Q.1 Marks</td>
    <td>Q.2 Marks</td>
    <td>Q.3 Marks</td>
    <td>Q.4 Marks</td>
    <td>Total Marks</td>
    </tr>
	</tbody>
</table>
</div>
    <?php

 $sql="SELECT * FROM g12015";
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
 <div class="container">

<table class="table tabble-striped table-bordered">
<tbody>

    <tr>
    <th colspan="6">Software Engineering Assignment Marks</th>
    </tr>
    <tr>
    <td>Q.1 Marks</td>
    <td>Q.2 Marks</td>
    <td>Q.3 Marks</td>
    <td>Q.4 Marks</td>
    <td>Total Marks</td>
    </tr>
	</tbody>
</table>
</div>
    <?php

 $sql="SELECT * FROM g12015";
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
$db=mysqli_select_db($con,'gurpreetassienmentsmarks') or die('database selection problem');
?>
<div class="container">

<table class="table tabble-striped table-bordered ">
<tbody>
    <tr>
    <th colspan="6"> Computer Graphics Assignment Marks </th>
    </tr>
	<td>Q.1 Marks</td>
    <td>Q.2 Marks</td>
    <td>Q.3 Marks</td>
    <td>Q.4 Marks</td>
    <td>Total Marks</td>
    </tr>
	</tbody>
</table>
</div>
    <?php

 $sql="SELECT * FROM g12015";
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
    </table>
    
</div>

<?php
 }
 else
 {	 
header('location:index.php');
 }
 ?>
 <?php include('footer.php'); ?>
</body>
