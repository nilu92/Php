<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style type="text/css">
	div
	{
		font-family: Helvetica, Arial, sans-serif;
		display: inline-block;
		 text-align: center;
    	padding: 50px 0px;	
	}
</style>
</head>
<body>
	<div class="container">
	<div class="mb-2">
	<form action=Calculator.php class="form-control" method="post">
		
	First num: <input  type="number" step ="0.0000001" class="form-control" name="num1"><br>
	second num:<input type="number" step ="0.0000001" class="form-control" name="num2"><br>
	OP: <input type="text" class="form-control" name="op"><br>
		<input class="form-control" type="submit" name="">
	</form>

	<?php 
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$op = $_POST["op"];
	$result;

	if($op == "+")
	{
	 $result = $num1 + $num2;
	 echo round($result);

	}
	elseif ($op == "-") 
	{
		 $result = $num1 + $num2;
		  echo round($result);
	}
	elseif ($op == "*") 
	{
	 	$result= $num1 * $num2;
	 	 echo round($result);
	}
	elseif ($op == "/") 
	{
		$result = $num1 / $num2;
		 echo round($result);
	
	}else
	{
		echo "invalid operator";
	}

	 ?>



</div>
</div>
</body>
</html>