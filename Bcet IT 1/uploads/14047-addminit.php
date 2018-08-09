<?php
$id=$_GET['val'];
include('connection.php');
$q="select * from user where id='$id'";
$run=mysqli_query($con,$q)
if($run)
{
	$arr = mysqli_fetch_assoc($run);
	var_dump($arr);
}
if(isset($_POST['submit'])){
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['gender'];
$d = $_POST['contact'];
$e = $_POST['address'];
$f = $_POST['city'];
$qq="update user set name='$a', email='$b', gender='$c', contact='$d', address='$e', city='$f'";
$rr =mysqli_query($con,$qq);
if($arr)
{
	echo "record updated sucessfull";
}
}
?>
<h1>welcome</h1>
<form action="" method="POST" value="<?php echo $arr['id']?>
id<input type="text" name="id" value="<?php echo $arr['id']?>" disabled><br><br>
Name:<input type="text" name="name" value="<?php echo $arr['name']?>"><br><br>
Email:S<input type="text" name="email" value="<?php echo $arr['email']?>"><br><br>
Gender<input type="text" name="gender" value="<?php echo $arr['gender']?>"><br><br>
Contact<input type="text" name="contact" value="<?php echo $arr['contact']?>"><br><br>
Address<input type="text" name="address" value="<?php echo $arr['address']?>"><br><br>
City<input type="text" name="city" value="<?php echo $arr['city']?>"><br><br>
<input type="submit" name="submit">
</form>