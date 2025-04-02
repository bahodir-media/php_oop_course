<?php
class BookProduct extends Product
{
	public $numPages;

	public function __construct($name, $price, $numPages)
	{
		parent::__construct($name, $price);
		$this->numPages = $numPages;
	}

	public function getProduct()
	{
		$out = parent::getProduct();
		$out .= "Количество страниц: {$this->numPages}<br>";
		return $out;
	}

	public function getNumPages()
	{
		return $this->numPages;
	}
}