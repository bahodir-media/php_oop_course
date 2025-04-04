<?php
class BookProduct extends Product
{
	public $numPages;

	public function __construct($name, $price, $numPages)
	{
		parent::__construct($name, $price);
		$this->numPages = $numPages;
		$this->setDiscount(5);
		/* 		var_dump($this->public);
				var_dump($this->protected);
				var_dump($this->private); */
	}

	public function getProduct()
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
}