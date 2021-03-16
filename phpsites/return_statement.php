<!DOCTYPE html>
<html>
<head>
	<title>return statement</title>
</head>
<body>

<?php 
	function cube($num)
	{
		return $num * $num * $num;

	}

	$cubeResult = cube($num);
	echo $cubeResult;
 ?>


</body>
</html>