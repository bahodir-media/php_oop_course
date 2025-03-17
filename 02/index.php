<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>
<body>
	<h1>Урок 2. Свойства объекта</h1>
	
		<?php
		require_once "classes/Car.php";
		
		function debug($data) {
			echo "<pre>". print_r($data, 1) ."</pre>";
		}
		
		$car1 = new Car();
		$car2 = new Car();
		
		debug($car1);
		
		//var_dump($car1);
		
		$car1->color = "black";
		$car1->brand = "BMW";
		$car1->speed = 200;
		$car1->year = 1996; //not recommended
		$car1->colour = "red";
		
		$car2->color = "white";
		$car2->brand = "Chevrolet";
		$car2->speed = 190;
		$car2->year = 2018; //not recommended
		
		//debug($car1);
		//debug($car2);
		
		echo "<h3>About my car:</h3>
		Make: {$car1->brand}<br>
		Color: {$car1->color}<br>
		Wheels: {$car1->wheels}<br>
		Year: {$car1->year}<br>
		<br>";
	?>
</body>
</html>