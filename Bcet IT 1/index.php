<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--code of the first heading-->
<style>
<style>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="stylesheet/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</style>
<!--code of the navbar-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--image slide css code-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;
}
.w3-content w3-section{
align:center;
}
</style>
</head>
<body>
<div class="header">
<div class="well well-lg"><h2>Department of Information Technology</h2>                                                                 
<p>Beant college of Engineering & Technology Gurdaspur<p></div>
<!--<div><img src="ss.jpg" width="40" height="40" style="display: inline;"></div>
</div>-->
<?php include("modules/nav.php")
?>
<div class="container">
</div>
<div id="myNav" class="overlay">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div class="overlay-content">
<a href="Semesterresults.php ">Semester Result</a>
<a href="mstresults.php">MST Result</a>
<a href="activitiesresults.php">Activities Result</a>
</div>
</div>
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
<!-- image slide show-->
<div class="w3-container">
</div>
<div class="w3-content w3-section" style="max-width:1400px">
<img class="mySlides w3-animate-top" src="birthday1.jpg" style="width:100%">
<img class="mySlides w3-animate-bottom" src="birthday2.jpg" style="width:100%">
<img class="mySlides w3-animate-top" src="birthday3.jpg" style="width:100%">
<img class="mySlides w3-animate-bottom" src="birthday4.jpg" style="width:100%">
</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";  
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}    
x[myIndex-1].style.display = "block";  
setTimeout(carousel, 2500); 
}
</script>
</body>
</html>
