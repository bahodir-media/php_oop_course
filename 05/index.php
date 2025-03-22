<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<h1>Домашнее задание. Класс для работы с файлом</h1>
	<?php

	require_once 'classes/File.php';

	$file = new File(__DIR__ . '/file.txt');
	$file->write('Строка 1');
	$file->write('Строка 2');
	$file->write('Строка 3');
	$file->write('Строка 4');
	$file->write('Строка 5');
	?>
</body>

</html>