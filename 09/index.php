<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>

<body>
	<h1>Урок 9. Модификаторы доступа</h1>
	<?php
	require_once 'classes/Product.php';
	require_once 'classes/BookProduct.php';
	//require_once 'classes/NoteBookProduct.php';
	
	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}

	$book = new BookProduct("Три мушкетера", 100, 300);

	debug($book);

	//$book->discount = 50; // Изменяем значение свойства discount у объекта book
	
	//echo $book->getDiscount();
	echo $book->getProduct();

	//echo $book->price;
	
	//var_dump($book->public); // Доступен, так как public доступен везде
	//var_dump($book->protected); // Ошибка, так как protected доступен только внутри класса и его потомков
	//var_dump($book->private); // Ошибка, так как private доступен только внутри класса
	


	?>

</body>

</html>