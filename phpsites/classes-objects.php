<!DOCTYPE html>
<html>
<head>
	<title>ForLoop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

	<body>
	
	
		<?php
	
		class Book
		{

			var $title;
			var $author;
			var $pages;
		}

		$book1 = new Book;
		$book1 ->title = "Lord of the rings";
		$book1 ->author = "J.R Tolkien";
		$book1 ->pages = 400;
		
		$book2 = new Book;
		$book2 ->title = "Harry potter";
		$book2 ->author = "Rowling";
		$book2 ->pages = 600;
		echo $book1->title;





		?>



	</body>
	<div>
	<?php 	include "footer.html";  ?>
</div>
</html>