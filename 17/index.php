<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>

<body>
	<h1>Урок 17. Шаблоны проектирования</h1>
	<?php
	
	// https://designpatternsphp.readthedocs.io/ru/latest/

	use core\interfaces\IGadget;
	use app\{BookProduct, NoteBookProduct};

	require_once __DIR__ . '/vendor/autoload.php';
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
	
	$a1 = \app\A::getInstance();
	$a2 = \app\A::getInstance();
	
	var_dump($a1);
	echo '<br>';
	var_dump($a2);
	echo '<br>';
	$b1 = \app\B::getInstance();
	$b2 = \app\B::getInstance();
	
	var_dump($b1);
	echo '<br>';
	var_dump($b2);

	
	?>

</body>

</html>