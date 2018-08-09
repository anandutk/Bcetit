<?php
session_start();
$id=$_SESSION["id"];
$conn = mysqli_connect("localhost","root","");
$a=mysqli_select_db($conn,'studentlogin');
if(count($_POST)>0) {
$result = mysqli_query($conn,"SELECT *from loginstudent WHERE id='" . $_SESSION["id"] . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"]) {
mysqli_query($conn,"UPDATE loginstudent set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>

<html>
<head>
<style>
body{
background-image:url("computer.jpg");
height:100%;
background-position:center;
background-repeat:no-repeat;
background-size:cover;
}
</style>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2"></td>
</tr>
<tr>
<td width="40%"><label><h3 style="color:white;">Current Password</h3></label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label><h3 style="color:white;">New Password</h3></label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label><h3 style="color:white;">Confirm Password</h3></label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>