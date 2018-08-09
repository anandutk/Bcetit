<?php
$con=mysqli_connect("localhost","root",'');
$db=mysqli_select_db($con,'mstmarks') or die('database selection problem');
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
    <th colspan="4">MST Current 5 Sum Marks List<label><a href="index.php"></a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php

 $sql="SELECT * FROM mst5summarks";
 $result_set=mysqli_query($con,$sql);
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
 
 ?>
    </table>
    
</div>
</body>
</html>