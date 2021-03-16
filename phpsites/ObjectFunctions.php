<!DOCTYPE html>
<html>
<head>
	<title>ForLoop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

	<body>
	
	
		<?php
	
		class Student
		{

			var $name;
			var $major;
			var $gpa;
		

			function __construct($name,$major,$gpa)
			{
				$this->name = $name;
				$this->major = $major;
				$this->gpa = $gpa;
			}
		
			function hasHonors()
			{
				if($this->gpa >= 3.5)
				{
					return "true";	
				}
				return "false";
			}
		}

		$student1 = new Student("Niklas","Computer science",2.5);
	
		echo $student1->hasHonors();
	
	?>



	</body>
	<div>
	<?php 	include "footer.html";  ?>
</div>
</html>