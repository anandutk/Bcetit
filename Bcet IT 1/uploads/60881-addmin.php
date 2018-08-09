<!--in this file the addmine edit or delete the account of the user the help og the query string
query string is used to give the any data of the next page of the user in this case the addmine with
the help of the id they edit or delete the account of the user -->
<?php
include('connection.php'); //connection is created
$q="select * from user"; //query is used to show all the data in user table
$run=mysqli_query($con,$q);// execute the query
if($run){                   //if the query will be run
	$ru=mysqli_num_rows($run);// check the number of rows
	if($ru>0){  //if the number of the rows greater the zero
		?>
		<h1> WELCOME </h1>
		<table border='8'> <!--create a table to show the data -->
		<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>GENDER</th>
		<th>CONTACT</th>
		<th>ADDRESS</th>
		<th>CITY</th>
		<th colspan="2">ACTION</th>
		</tr>
		<?php 
		while($arr=mysqli_fetch_assoc($run)){ //loop is used to show all the data in the in the table 
//var_dump($arr);
?>
<tr>
		
<td><?php echo $arr['id'];?></td><!--to print the data in the table -->
<td><?php echo $arr['name'];?></td>
<td><?php echo $arr['email'];?></td>
<td><?php echo $arr['gender'];?></td>
<td><?php echo $arr['contact'];?></td>
<td><?php echo $arr['address'];?></td>
<td><?php echo $arr['city'];?></td>
<td> <a href="addminit.php?val=<?=$arr['id'];?>">EDIT</a></td> 
<td> <a href="addminde.php?val=<?=$arr['id'];?>">DELETE<a></td>
<!--this two link is used to edit or delete the data of users by the addmine use of query string in 
this two cases-->
		</tr>
		
	<?php
		}
		echo "</table>";
	}
}
?>
		
		
		
		
		
		
		
		
		
		
		
		
		
	




