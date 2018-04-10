 <?php require_once('inc/connection.php');?>
 <?php
 //check the form submission
if(isset($_POST['submit'])){





}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In- User Mangement System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="login">

	<form action="index.php" method="post"> </form>

	<fieldset>

		<legend><h1> Log In</h1></legend>

<p>
	<label for="">Username:</label>
	<input type="text" name="email" id="" placeholder="email address">
</p>
<p>
	<label for="">Password:</label>
	<input type="Password" name="Password" id="" placeholder="Password">
</p>
<p>
	<button type="submit" name="submit">Log in</button>
</p>
	</fieldset>
	
</div>
</body>
</html>
<?php mysqli_close($connection);?>
