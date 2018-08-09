<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'assienmentstudents') or die('database selection problem');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and mysqli</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label></label>
</div>
<div id="body">
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="index.php"></a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	session_start();
$id=$_SESSION['id'];
 $sql="SELECT * FROM amitverma2017 where id=$id";
 $result_set=mysqli_query($con,$sql);
 if($result_set==true)
 {
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 }
 else
 {
	 header('location:staffloginform.php');
 }
 ?>
    </table>
    
</div>
</body>
</html>