<?php
if(isset($_POST['login'])){
$a=$_POST['uniroll'];
$b=$_POST['collroll'];
$c=$_POST['password'];
$con=mysqli_connect('localhost','root',''); 
$db=mysqli_select_db($con,'studentlogin'); 
$q="select * from loginstudent where uniroll='$a' and collroll='$b' and password='$c'" ;
$res=mysqli_query($con,$q);
if($res==true)
$r=mysqli_num_rows($res);
echo "<br>";
if($r>0){
$arr=mysqli_fetch_assoc($res);	
session_start();
$_SESSION['id']=$arr['id'];
?>
<script type="text/javascript"> alert("login sucessfully");</script>
<?php	
header('location:assienmentsubmit.php');
}
else {
?>
<script type="text/javascript"> alert("Plz enter correct information");
</script>
<?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<form method="POST">
<div class="imgcontainer">
<img src="loginpic.jpg" alt="Avatar" class="avatar">
</div>
<div class="container">
<label><b>Enter University roll no</b></label>
<input type="text" placeholder="Enter university roll no" name="uniroll" required>
<label><b>Enter collage roll no</b></label>
<input type="text" placeholder="Enter collage roll no" name="collroll" required>
<label><b>Enter Password</b></label>
<input type="password" placeholder="Enter password" name="password" required>
<button type="submit" name="login" value="login">login</button><br>
<input type="checkbox" checked="checked"> Remember me
</div>
<div class="container" style="background-color:#f1f1f1">
<button type="button" class="cancelbtn">Cancel</button>
<span class="psw">Forgot <a href="#">password?</a></span>
</div>
</form>
</body>
</html>
