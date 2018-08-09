<?php
if(isset($_POST['signup'])) { 
	 $a=$_POST['email'];
     $b=$_POST['university_roll'];
	 $c=$_POST['college_roll'];
	 
	 $con=mysqli_connect('localhost','root',''); //predefined method in php for connection with server
     $db=mysqli_select_db($con,'bcetit');    //   for selecting database 
	 
	 $q="select * from signup where email='$a' and university_roll='$b' and college_roll='$c'";//this query is used to check
	 //the email or passowrd are matched with the database or not
	 
	 $res=mysqli_query($con,$q);//use to execute the query
	 if($res==true)
	 {//if the query is true or not
	  header('location:1index.php');//use to  direct the profile page
		}else {
		 echo "either email or passowrd worng";
		}
		}
?>
<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Signup Form</h2>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="email" name="email" required>

    <label><b>University roll no</b></label>
    <input type="text" placeholder="university_roll" name="university_roll" required>

    <label><b>college roll no</b></label>
    <input type="text" placeholder="college_roll" name="college_roll" required>
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <input type="submit" name="signup" value="signup">
    </div>
  </div>
</form>

</body>
</html>
