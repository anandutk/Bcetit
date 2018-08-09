<!DOCTYPE html>
<html>
<head>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<form method="POST">
<div class="imgcontainer">
<img src="loginpic.jpg" alt="Avatar" class="avatar">
</div>
<div class="container">
<label><b>Curret Password</b></label>
<input type="text" placeholder="current Password" name="currentPassword" required>
<label><b>New Password</b></label>
<input type="text" placeholder="New Password" name="NewPassword" required>
<label><b>Confirm Password</b></label>
<input type="password" placeholder="Confirm password" name="ConfirmPassword" required>
<button type="submit" name="login" value="login">submit</button><br>
<input type="checkbox" checked="checked"> Remember me
</div>

</div>
</form>
</body>
</html>
