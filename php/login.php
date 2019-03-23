<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
	</head>
	<body>
		<form action="profile.php" method="post">
			username:<input name="username" type="text">
			password:<input name="password" type="text">
			<input name="submit" type="submit">
		</form>
	</body>
</html>
