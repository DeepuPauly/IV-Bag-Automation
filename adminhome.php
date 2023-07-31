<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<link rel="stylesheet" type= "text/css" href="style3.css">
	</head>
	<body>
		
	<form action="adduser.php" method="post">
		<?php if (isset($_GET['error'])) { ?>

			<p class="error"><?php echo $_GET['error']; ?></p>
		
		<?php } ?>
	<label>User Name</label>
	<input type="text" name="uname" placeholder="User Name">
	<label>Password</label>
	<input type="password" name="password" placeholder="Password">
	<button type="submit">ADD</button>
	</form>
	
	</body>
</html>
