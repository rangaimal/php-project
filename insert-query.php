<?php require_once('inc/connection.php');?>
<?php
$first_name='kalana';
$last_name='koralgedara';
$email='kalana.k2.kk@gmail.com';
$password='k2';
$is_deleted=0;



$hashed_password=sha1($password);
$query="INSERT INTO user(first_name, last_name, email, hashed_password, is_deleted) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}', '{$is_deleted}')";

$result=mysqli_query($connection,$query);
if($result){
	echo"1 record added";
}else{
	echo "database query failed";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert query</title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection);?>
