<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>profile</title>
	</head>
	<body>
		<form action="dataentry.php">
			First Name: <input name="firstname" type="text">
			Last Name: <input name="lastname" type="text">
			Phone: <input name="phone" type="text">
			Email: <input name="email" type="text">
			<input name="submit" type="submit">
		</form>
	</body>
</html>
