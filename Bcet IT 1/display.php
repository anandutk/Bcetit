<html>
<head>
<title>News</title>
</head>
<body>
<?php
mysqli_connect('localhost','username','password');
mysqli_select_db('db');
$query = mysqli_query('SELECT * FROM news ORDER BY id DESC');
while($output = mysqli_fetch_assoc($query))
{
	echo $output['subject'].'<br />';
	echo $output['news'].'<br / >';
	echo date('D-M-Y', $output['date']).'<br / >';
	echo 'Posted by '.$output['postedby'];
	echo '<hr />'; 
}
?>
</body>
</html>