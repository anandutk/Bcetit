<?php
session_start();
include('connection.php');
$id=$_SESSION['id'];
$sql="SELECT * FROM login where id=$id";
$result_set=mysqli_query($con,$sql);
if($result_set==true)
{
include('profile_header.php');
include('fileupload.php');
if(isset($_POST['btn-upload']))
{    
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="uploads/";
$res=move_uploaded_file($file_loc,$folder.$file);
if($res)
{
$sql="INSERT INTO wtg6_15(file,type,size,date) VALUES('$file','$file_type','$file_size',NOW())";
$r=mysqli_query($con,$sql);
if($r)
{
?>
<script type="text/javascript"> alert("fileupload sucessffuly");
</script>
<?php
}	
}
else
{
	?>
	<script type="text/javascript"> alert("Plz try again");
</script>
<?php
}
}
include('footer.php'); 
}
else
{
	header('location:index.php');
}