<!DOCTYPE html>
<html>
<head>
	<title>User input</title>
</head>

<body>
<form action="return_statement.php" method="get">
		Name: <input type="text" name="username">
		Age: <input type="number" name="age">
		<input type="submit">
	</form>
	<br>
		<?php echo$_GET["username"]?>
	<br>
	<?php echo$_GET["age"]?>
	</body>
</html>