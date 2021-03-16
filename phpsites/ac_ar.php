<!DOCTYPE html>
<html>
<head>
	<title>Associative array</title>
</head>
<body>
	<form action="ac_ar.php" method="post">
		<input type="text" name="student">
		
		<input type="submit">
	</form>
<?php  
	
	$grades = array("Jim" => "A+", "Pam" => "B-" ,"Oscar" => "C+");
     echo $grades[$_POST["student"]];

?>


</body>
</html>