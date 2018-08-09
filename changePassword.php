<?php
session_start();
$id=$_SESSION["id"];
$con = mysqli_connect("localhost","root","");
$a=mysqli_select_db($con,'bcet_it');
$id=$_SESSION['id'];
$sql="SELECT * FROM login where id=$id";
$result_set=mysqli_query($con,$sql);
if($result_set==true)
{
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT * from login WHERE id='" . $_SESSION["id"] . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"]) {
mysqli_query($con,"UPDATE login set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
?>
<script type="text/javascript"> alert("password Changed successfully");
</script>

<?php
}else{
?>
<script type="text/javascript"> alert("password do not match");
</script>
<?php
}
}
}
else{
  header('location:login.php');
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
<!DOCTYPE html>
<html lang="en">
    <head>
         <title>change password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <body>
     <?php include('profile_header.php'); ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    
                    
                        <div class="form-group", style="margin-top: 50px">
                        <h4>Change Password</h4>
                    
                        <form name="frmChange" method="POST" action="" onSubmit="return validatePassword()">
                            <input type="password" class="form-control" name="currentPassword"  placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newPassword" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirmPassword"  placeholder="Re-type New Password" required>
                        </div>
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary">Change</button>
                        
                        
                    </form>
                </div>
            </div>
        </div>
     <?php include('footer.php'); ?>
    </body>
</html>
