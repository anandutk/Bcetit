<?php
session_start();
if(isset($_POST['submit'])){
$id=$_SESSION['id'];
$o=$_POST['oldpassword'];
$n=$_POST['newpassword'];
include("connection.php");
$q= "select * from registeration where id='$id' and password='$o'"; //this query is used to check the old password match with the database password
$re=mysqli_query($con,$q);
	if($re){
		$record=mysqli_num_rows($re);
		if($record>0){
		$qq= "update user set   password='$n' where id='$id'"; //this query is used to update the password  
		$rr=mysqli_query($con,$qq);
		if($rr){
		echo "password change successfully ";
		}
		}
		else{
			echo "error";
	
		}
	}
}


?>
<form action="" method="post">
old password:<br>
<input type="password" name="oldpassword"><br>
new password:<br>
<input type="password" name="newpassword"><br>
<input type="submit" name="submit">
</form>


