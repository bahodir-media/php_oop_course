<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>

<body>
	<h1>Урок 11. Интерфейсы и контроль типа</h1>
	<?php
	require_once 'classes/Product.php';
	require_once 'classes/I3D.php';
	require_once 'classes/IGadget.php';
	require_once 'classes/BookProduct.php';
	require_once 'classes/NoteBookProduct.php';

	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}

	function offerCase(IGadget $product)
	{
		echo "<p>Предлогаем чехол для гаджета {$product->getName()}</p>";
	}

	$book = new BookProduct("Три мушкетера", 100, 300);
	$notebook = new NoteBookProduct("Lenovo", 1000, "Intel i7");

	/* var_dump($book instanceof IGadget); // false
	   var_dump($notebook instanceof IGadget); // true */

	offerCase($notebook);
	// offerCase($book); // error, BookProduct не реализует интерфейс IGadget
	
	debug($book);

	echo $book->getProduct();

	class A
	{
	}
	class B extends A
	{
	}
	class C
	{
	}

	$a = new A;
	$b = new B;
	$c = new C;

	var_dump($a instanceof A); // true
	var_dump($b instanceof B); // true
	var_dump($b instanceof A); // true
	var_dump($c instanceof C); // true
	
	?>

</body>

</html>