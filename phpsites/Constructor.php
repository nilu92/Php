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
		

			function __construct($aTitle,$aAuthor,$aPages)
			{
				$this->title = $aTitle;
				$this->author = $aAuthor;
				$this->pages = $aPages;
			}
		}

		$book1 = new Book("Lord of the rings","J.R Tolkien",400);
		$book2 = new Book("Harry potter","Rowling",700);
		
		echo $book1->title;
	?>



	</body>
	<div>
	<?php 	include "footer.html";  ?>
</div>
</html>