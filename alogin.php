<!DOCTYPE html>
<html>
<head>
    <title>LOGIN FORM</title>
    <link rel="stylesheet" type= "text/css" href="style.css">
</head>
<body>

<img class="logo" src="administrator.png" > <br><br><br>
<form action="adminlogin.php" method="post">

<h2>LOGIN</h2>

<?php if (isset($_GET['error'])) { ?>

    <p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

<label>User Name</label>

<input type="text" name="adminuname" placeholder="User Name"><br>

<label>Password</label>

<input type="password" name="adminpassword" placeholder="Password"><br> 

<button type="submit">Login</button>

</form>


</body>