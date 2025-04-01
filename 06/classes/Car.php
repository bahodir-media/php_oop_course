<?php

class Car
{

	public $color;
	public $wheels;
	public $speed;
	public $brand;

	public const TEST_CAR = 'Prototype';
	public const TEST_CAR_SPEED = 300;

	public static $countCar = 0;

	public function __construct($color, $wheels = 4, $speed, $brand)
	{
		$this->color = $color;
		$this->wheels = $wheels;
		$this->speed = $speed;
		$this->brand = $brand;
		self::$countCar++;
	}

	public static function getCount()
	{
		return self::$countCar;
	}

	public function test()
	{
		echo 'Тест метода класса<br>';
	}

	public function getCarInfo()
	{
		return "<h3>О моем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>";
	}

	public function getPrototypeInfo()
	{
		return "<h3>О прототипе:</h3>
			Марка: " . self::TEST_CAR . "<br>
			Скорость: " . self::TEST_CAR_SPEED . "<br>";
	}
}