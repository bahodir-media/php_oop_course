<?php

class Car
{

	public $color;
	public $wheels;
	public $speed;
	public $brand;

	public function __construct($color, $wheels = 4, $speed, $brand)
	{
		$this->color = $color;
		$this->wheels = $wheels;
		$this->speed = $speed;
		$this->brand = $brand;
	}

	public function Car($color, $wheels = 4, $speed, $brand)
	{
		$this->color = $color;
		$this->wheels = $wheels;
		$this->speed = $speed;
		$this->brand = $brand;
	}

	public function getLorem()
	{
		?>
		<div>Hello, world!</div>
		<?php
	}

	public function getCarInfo()
	{
		return "<h3>О моем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>";
	}

	public function __destruct()
	{
		var_dump($this);
	}

}