<?php
session_start();
$id=$_SESSION["id"];
$conn = mysqli_connect("localhost","root","");
$a=mysqli_select_db($conn,'stafflogin');
if(count($_POST)>0) {
$result = mysqli_query($conn,"SELECT *from loginstaff WHERE id='" . $_SESSION["id"] . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"]) {
mysqli_query($conn,"UPDATE loginstaff set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>