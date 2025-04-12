<?php

namespace app;

use core\interfaces\I3D;
use core\Product;

class BookProduct extends Product implements I3D
{
	public $numPages;

	public $action1 = '';
	public $action2 = '';

	const TEST = 20;
	//CONST TEST2 = 30; // error

	public function __construct($name, $price, $numPages)
	{
		parent::__construct($name, $price);
		$this->numPages = $numPages;
		$this->setDiscount(5);
		//var_dump(self::class);
	}

	public function test() {}

	public function getProduct($type = 'book')
	{
		$out = parent::getProduct();
		$out .= "Цена без скидки: {$this->price}<br>";
		$out .= "Количество страниц: {$this->numPages}<br>";
		$out .= "Cкидка: {$this->getDiscount()}%<br>";
		return $out;
	}

	public function getNumPages()
	{
		return $this->numPages;
	}

	public function addProduct($name, $price, $numPages = 0)
	{
		var_dump($name);
		var_dump($price);
		var_dump($numPages);
	}

	public function doAction1()
	{
		echo $this->action1 = "<p>Выполняем действие 1</p>";
		return $this;
	}

	public function doAction2()
	{
		echo $this->action2 = "<p>Выполняем действие 2</p>";
		return $this;
	}
}
