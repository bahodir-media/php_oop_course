<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>
<body>
	<h1>Урок 1.Класс и объект</h1>
	
	<p>Manual: <a href="https://www.php.net/manual/en/language.oop5.php">Classes and Objects</a></p>
	
	<?php
		require_once "classes/FirstClass.php";
		
		$o1 = new FirstClass();
		$o2 = new FirstClass();
		
		var_dump( $o1 );
		var_dump( $o2 );
		
	?>
</body>
</html>