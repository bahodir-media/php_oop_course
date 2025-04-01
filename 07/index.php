<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>

<body>
	<h1>Урок 7. Наследование. Часть 1</h1>
	<?php
	require_once 'classes/Product.php';

	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}

	$book = new Product("Три мушкетера", 100, null, 2000);
	$notebook = new Product("MacBook", 1000, "Apple");

	debug($book);
	debug($notebook);

	echo $book->getProduct('book');
	echo $notebook->getProduct();

	?>

</body>

</html>