<?php
if(isset($_POST['submit'])) {
$a= $_FILES['image'];
$source=$a['tmp_name'];
$target="image".$a['name'];
$n = $a['name'];
$res=move_uploaded_file($source,$target);

}
?>


<form action="changeprofilepic.php" method="POST" enctype="multipart/form-data">


<input type="file" name="image">
<input type="submit" name="submit" value="Upload Pic">
</form>
<a href="profile.php">Go to Profile</a>