<?php
session_start(); //session is created
session_unset(); //delete the value of the session
session_destroy();//use to distroy the session of the  those user login the account
header('location:studentloginform.php');//header function isused to redirect the login page
exit();
?>