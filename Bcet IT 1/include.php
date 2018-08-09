<?php
if(isset($_POST['submit'])){
$a=$_POST['email'];
$b=$_POST['university_roll'];
$con=mysqli_connect('localhost','root',''); 
$db=mysqli_select_db($con,'bcetit'); 
$q="select * from signup where email='$a' and university_roll='$b'";
$res=mysqli_query($con,$q);//use to execute the query
if($res==true)//if the query is true or not
$r=mysqli_num_rows($res);
	//	echo "<br>";
		if($r>0) {
			
			//echo "hello";
			$arr=mysqli_fetch_assoc($res);
		
		//$arr=mysqli_fetch_assoc($res);//to save the profile data into an array
		header('location:1index.php');//use to  direct the profile page
		}else {
		 echo "either email or passowrd worng";
		}
		
	 }
	 ?>