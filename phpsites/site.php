<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="site.php" method="post">
		
		Apples : <input type="checkbox" name="fruits[]" value="apples"><br>
			Oranges : <input type="checkbox" name="fruits[]" value="Oranges"><br>
				Pears : <input type="checkbox" name="fruits[]" value="Pears"><br>
		<input type="submit" name="php">
	</form>
<?php  
	$fruits = $_POST['fruits'];
	echo $fruits[0];



?>


</body>
</html>