<!DOCTYPE html>
<html>
<head>
	<title>functions</title>
</head>
<div>
	<input type="text" name="sayhi">
	<input type="button" name="sayhi">	
</div>
<body>
	<?php

		function sayHi($name,$age)
		{
			echo "Hi $name, $age";
		}
			sayHi("Mike",67);
	?>
</body>
</html>