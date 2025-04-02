<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>

<body>
	<h1>Урок 7. Наследование. Часть 2</h1>
	<?php
	require_once 'classes/Product.php';
	require_once 'classes/BookProduct.php';
	require_once 'classes/NoteBookProduct.php';

	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}

	$book = new BookProduct("Три мушкетера", 100, 300);
	$notebook = new NoteBookProduct("MacBook", 1000, "Intel i7");

	debug($book);
	debug($notebook);

	echo $book->getProduct();
	echo $notebook->getProduct();

	?>

</body>

</html>