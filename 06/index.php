<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Премиум. Курс по ООП PHP</title>
</head>

<body>
	<h1>Урок 6. Константы класса. Статические свойства и методы</h1>
	<?php
	require_once 'classes/Car.php';

	function debug($data)
	{
		echo '<pre>' . print_r($data, 1) . '</pre>';
	}
	echo Car::$countCar;
	echo '<br>';
	
	$car1 = new Car('черный', 4, 180, 'volvo');
	echo Car::$countCar;
	echo '<br>';
	$car2 = new Car('черный', 4, 200, 'bmw');
	
	echo Car::getCount();
	
	echo $car1->getCarInfo();
	echo $car2->getCarInfo();
	//echo $car1::Test(); // Ошибка, так как метод test() не статический depricated
	
	echo $car1->getPrototypeInfo();
	
	echo Car::TEST_CAR_SPEED; // 300 
	
	echo Car::class;
	?>

</body>

</html>