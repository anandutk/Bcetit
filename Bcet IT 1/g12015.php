<?php
session_start();
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'it_login') or die('database selection problem');

?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5x;
    text-align: left;
}
table {
    width: 50%;    
    background-color: #000000;
}
body{
	background-color:#e6e6fa;
	}
	a:hover {
	background-color:#00ffff;
    opacity: 0.8;
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
	 ?>
<h2>Assienment Question</h2> 
<table>
  <tr>
    <th>subject</th>
    <th> Assienments Question</th>
  </tr>
  <tr>
  <td>Algorithms</td>
   <td><a href="2015batchdaaassienments.php">View</a></td>
  </tr>
  <tr>
  <td>java</td>
  <td><a href="2015batchjavaassienments.php">View</a></td>
 </tr>
  <tr>
  <td>CN-II</td>
  <td><a href="2015batchcnassienments.php">View</a></td>
  </tr>
  <tr>
  <td>DBMS</td>
   <td><a href="2015batchdbmsassienments.php">view</a></td>
   </tr>
  </table>
<h2> Group-1  2015 Batch Students profile</h2>
<div class="col-sm-3 col-sm-offset-0 sidenav">
<h2> Student Information</h2>
<table id="#01">
  <tr>
    <th>Sr.No</th>
    <th>Name</th>
    <th>Uni Roll</th> 
  </tr>
  <tr>
  <td>1</td>
    <td>Aarti</td>
    <td> 151470</td>
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
</table>
</div>
</div>
<?php
include('2015batch/assienmentquestions.php');
?>

<h2>Submit Assienment</h2>
<table id="#01">
  <tr>
    <th>Sr.No</th>
    <th>Subject</th>
  </tr>
  <tr>
  <td>1</td>
    <td><a href='2015g1algorithm.php'>Algorithm</a></td>
    </tr>
  <tr>
  <td>2</td>
    <td><a href='2015g1java.php'>Java</a></td>
  
  </tr>
  <tr>
  <td>3</td>
    <td><a href='2015g1cn.php'>CN-II</a></td>
  </tr>
  <tr>
  <td>3</td>
    <td><a href='2015g1dbms.php'>DBMS</a></td>
  </tr>
</table><br>

<div class="col-sm-67 col-sm-offset- sidenav">
<h2>Assienments Marks</h2>
<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'amitassienmentsmarks') or die('database selection problem');
?>
<div id="header">
<label>java marks</label>
</div>
<div id="body">
 <table id="3">
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
<div id="header">
<label>Algorithm Marks</label>
</div>
<div id="body">
 <table id="4">
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
<div class="col-sm-67 col-sm-offset-0 sidenav">
<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'anilassienmentsmarks') or die('database selection problem');
?>
<div id="header">
<label>CN-II marks</label>
</div>
<div id="body">
 <table id="5">
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
<div id="header">
<label>DBMS marks</label>
</div>
<div id="body">
 <table id="6">
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
<a href="studentlogout.php"<input type="submit" name="logout" value="logout"><h4  color="red">logout<h4></a>
<a href="studentchangepassword.php"<input type="submit" name="changepassword" value="changepassword"><h4>change password<h4></a>
<?php
 }
 else
 {	 
header('location:index.php');
 }
 ?>
</body>
