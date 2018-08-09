<!--in these file the user edit the data ass your wish and then the data will be store in the 
database -->
<?php
session_start();//session is created 
$id=$_SESSION['id'];//with the help of the session they give id of the user those user are login 
include('connection.php');//create a connection
$q = "select * from user where id='$id'";//query is used to match the id with the database
$run=mysqli_query($con,$q);//use to execute the query
if($run) {//if the is to be executed
	$a = mysqli_fetch_assoc($run);//then convert the data in associative array
	//var_dump($a);
 // echo $a['id'];
}
if(isset($_POST['submit'])) {//if click the submit button
	$n = $_POST['name'];
	$e = $_POST['email'];
	$c = $_POST['contact'];
	$a = $_POST['address'];
	$q = "update user set name='$n',email='$e',contact='$c',address='$a' where id='$id'";
//this query is used to update the data 	
	$rr = mysqli_query($con,$q);//use to execute the query
	if($rr)
	{   //echo "Record updated";
         echo "<script>alert('Record Updated');</script>";
         header('location:profile.php');
	}
}
?>
<h1>Edit ur Profile</h1>
<form actioin="edit.php" method="POST" value="<?php echo $a['id']?>">
Id:<input type="text" name="id" value="<?php echo $a['id']?>" disabled><br><br><!--disabled is used 
when the any colum data will be not change id will not chnage this region they going to be disabled is used
and then the input type form is to be created and put the value in the table with the help of 
the associative array-->
Name:<input type="text" name="name" value="<?php echo $a['name']?>"><br><br>
Email:<input type="text" name="email" value="<?php echo $a['email']?>"><br><br>
Contact:<input type="text" name="contact" value="<?php echo $a['contact']?>"><br><br>
Address:<input type="text" name="address" value="<?php echo $a['address']?>"><br><br>
<input type="submit" name="submit">
</form>