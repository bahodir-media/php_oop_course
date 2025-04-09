<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>

<body>
	<h1>Урок 12. Автозагрузка и пространства имен</h1>
	<?php

	use classes\BookProduct;
	use classes\NoteBookProduct;
	use classes\interfaces\I3D;
	use classes\interfaces\IGadget;

	/* 	require_once 'classes/Product.php';
	require_once 'classes/I3D.php';
	require_once 'classes/IGadget.php';
	require_once 'classes/BookProduct.php';
	require_once 'classes/NoteBookProduct.php'; */

	function autoloader1($class)
	{
		$class = str_replace('\\', '/', $class);
		$file = __DIR__ . "/{$class}.php";
		if (file_exists($file)) {
			require_once $file;
		}
	}
	/* 	function autoloader2($class)
	{
		$file = __DIR__ . "/interfaces/{$class}.php";
		if (file_exists($file)) {
			require_once $file;
		}
	} */
	spl_autoload_register('autoloader1');
	//spl_autoload_register('autoloader2');

	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}

	function offerCase(IGadget $product)
	{
		echo "<p>Предлогаем чехол для гаджета {$product->getName()}</p>";
	}

	$book = new \classes\BookProduct("Три мушкетера", 100, 300);
	$notebook = new \classes\NoteBookProduct("Lenovo", 1000, "Intel i7");

	/* var_dump($book instanceof IGadget); // false
		  var_dump($notebook instanceof IGadget); // true */

	offerCase($notebook);
	// offerCase($book); // error, BookProduct не реализует интерфейс IGadget

	debug($book);

	echo $book->getProduct();

	?>

</body>

</html>