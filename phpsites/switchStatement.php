<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<form action =switchStatement.php method = "post">
		What was your grade?
		<input type="text" name="grade">
		<input type="submit">
	</form>
	<?php 
		$grade = $_POST["grade"];
		switch ($grade) {
			case "A":
				echo "Nice";
				break;
			case "B":
				echo "hmmm";
				break;
			case "C":
				echo "Thats not good";
				break;
			case "D":
				echo "You are a failure!";
				break;			
			case "F":
				echo "F = Total failure";
				break;	
			default:
			echo "You failed to put in a valid grade.";
				break;
		}

	 ?>
</body>
</html>