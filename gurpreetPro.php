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
        <title>Gurpreet singh</title>
        <style>
.jumbotron{
    margin-top: 30px;
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
$sql="SELECT * FROM login where id=$id";
$result_set=mysqli_query($con,$sql);
if($result_set==true)
 {
	 include('profile_header.php');
?>	
 <div class="container">
  <div class="jumbotron" style="margin-top: 30px">
<h2 class="text-center">Gurpreet Singh</h2>
  </div>
           </div>
		   <div class="container">
<h2>Assignments of Students</h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
  <tr>
    <th>Sr.No</th>
    <th>Batch</th> 
  </tr>
  <tr>
  <td>1</td>
    <td><a href="#">2014</a></td>
   
    
  </tr>
  <tr>
  <td>2</td>
    <td><a href="gu_s_g_va_15.php">2015</a></td>
  
  </tr>
  <tr>
  <td>3</td>
    <td><a href="#">2016</a></td>
    
  </tr>
  </tr>
  <tr>
  <td>4</td>
    <td><a href="#">2017</a></td>
    
    
  </tr>
  </tbody>
</table>
</div>
<div class="container">
<h2>Upload Assignments</h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
  <tr>
    <th>Sr.No</th>
    <th>Batch</th> 
  </tr>
  <tr>
  <td>1</td>
    <td><a href="#">2014</a></td>
   
    
  </tr>
  <tr>
  <td>2</td>
    <td><a href="gu_u_a_15.php">2015</a></td>
  
  </tr>
  <tr>
  <td>3</td>
    <td><a href="#">2016</a></td>
    
    
  </tr>
  </tr>
  <tr>
  <td>4</td>
    <td><a href="#">2017</a></td>
    
    
  </tr>
  </tbody>
</table>
</div>
<div class="container">
<h2>Give Marks</h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
  <tr>
    <th>Sr.No</th>
    <th>Batch</th> 
  </tr>
  <tr>
  <td>1</td>
    <td><a href="#">2014</a></td>
   
    
  </tr>
  <tr>
  <td>2</td>
    <td><a href="gu_s_g_gm_15.php">2015</a></td>
  
  </tr>
  <tr>
  <td>3</td>
    <td><a href="#">2016</a></td>
    
  </tr>
  </tr>
  <tr>
  <td>4</td>
    <td><a href="#">2017</a></td>
    
    
  </tr>
  </tbody>
</table>
</div>
<div class="container">
<h2>Upload MST Marks</h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
  <tr>
    <th>Sr.No</th>
    <th>Batch</th> 
  </tr>
  <tr>
  <td>1</td>
    <td><a href="#">2014</a></td>
   </tr>
  <tr>
  <td>2</td>
    <td><a href="gu_u_mst_m_15.php">2015</a></td>
  
  </tr>
  <tr>
  <td>3</td>
    <td><a href="#">2016</a></td>
    
    
  </tr>
  </tr>
  <tr>
  <td>4</td>
    <td><a href="#">2017</a></td>
    
    
  </tr>
  </tbody>
</table>
</div>

<?php
 }
 else
 {
	 header('location:index.php');
 }
 include('footer.php');
 ?>
</body>