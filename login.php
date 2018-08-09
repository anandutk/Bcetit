<?php
if(isset($_POST['submit'])){
$a=$_POST['username'];
$b=$_POST['password'];
include('connection.php');
$q="select * from login where username='$a' and password='$b'" ;
$res=mysqli_query($con,$q);
if($res==true)
$r=mysqli_num_rows($res);
//echo "<br>";
if($r>0){
$arr=mysqli_fetch_assoc($res);  
session_start();
$_SESSION['id']=$arr['id'];
if($a==G1_2015)
{
header('location:profileg1-2015.php');
}
elseif($a==G2_2015)
{
header('location:profileg2-2015.php');
}
elseif($a==G3_2015)
{
header('location:profileg3-2015.php');
}
elseif($a==G4_2015)
{
 header('location:profileg4-2015.php');
}
elseif($a==G5_2015)
{
header('location:profileg5-2015.php');
}
elseif($a==G6_2015)
{
header('location:profileg6-2015.php');
}
elseif($a==G7_2015)
{
header('location:profileg7-2015.php');
}
elseif($a==G8_2015)
{
header('location:profileg8-2015.php');
}
elseif($a==G9_2015)
{
header('location:profileg9-2015.php');
}
elseif($a==G1_2016)
{
header('location:profileg1-2016.php');
}
elseif($a==G2_2016)
{
header('location:profileg2-2016.php');
}
elseif($a==G3_2016)
{
header('location:profileg3-2016.php');
}
elseif($a==G4_2016)
{
header('location:profileg4-2016.php');
}
elseif($a==G5_2016)
{
    header('location:profileg5-2016.php');
}
elseif($a==G6_2016)
{
header('location:profileg6-2016.php');
}
elseif($a==G7_2016){
header('location:profileg7-2016.php');
}
elseif($a==G8_2016){
header('location:profileg8-2016.php');
}
elseif($a==G9_2016){
header('location:profileg9-2016.php');
}
elseif($a==IT_Amit){
header('location:amitPro.php');
}
elseif($a==IT_Anil){
header('location:anilPro.php');
}
elseif($a==IT_Baljinder){
header('location:baljinderPro.php');
}
elseif($a==IT_Gurpreet){
header('location:gurpreetPro.php');
}
elseif($a==IT_Guresh){
header('location:gureshPro.php');
}
elseif($a==IT_Mohit){
header('location:mohitPro.php');
}
elseif($a==IT_Ritika){
header('location:ritikaPro.php');
}
}
else {
    ?>
<script type="text/javascript"> alert("Plz enter correct information");
</script>
<?php
}
}?>




<!DOCTYPE html>
<html lang="en">
<head>
<head>
         <title>login form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  
  <meta charset="u.tf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
</style>

<body>
<?php include('fixed_header.php');?>
<div id="content" style="margin-top: 40px;">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to Department of IT BCET</i><p>
                                <form method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                   
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p> <a href="ContactUs.php">Forget Password</a></p></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php include('footer.php'); ?>
    </body>
</html>