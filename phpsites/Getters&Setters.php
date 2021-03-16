<!DOCTYPE html>
<html>
<head>
	<title>ForLoop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

	<body>
	
	
		<?php
	
		class Movie
		{

			public $title;
			private  $rating;
			
		

			function __construct($title,$rating)
			{
				$this->title = $title;
				$this-setRating($rating);
			}
			
			function getRating()
			{
				return $this->rating;
			}
			
			function setRating($rating)
			{
				if ($rating =="G"||$rating =="PG"|| $rating =="PG-13"|| $rating =="R") 
				{
					$this->rating = $rating;
				}else
				{
					$this->rating = "NR";
				}
			}
		}

		$avengers = new Movie("Avengers","PG-13");
	

	 	$avengers->setRating("PG");
		echo $avengers->getRating();
	
	?>



	</body>
	<div>
	<?php 	include "footer.html";  ?>
</div>
</html>