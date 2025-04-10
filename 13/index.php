<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>

<body>
	<h1>Урок 13. Composer и автозагрузка</h1>
	<?php

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

	offerCase($notebook);
	debug($book);

	echo $book->getProduct();
	
	$mail = new \PHPMailer\PHPMailer\PHPMailer();
	debug($mail);

	?>

</body>

</html>