<?php

class Product
{
	private $name;
	protected $price;

	private $discount = 0;


	/* 	public $public = 'PUBLIC';
		protected $protected = 'PROTECTED';
		private $private = 'PRIVATE'; */

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
		/* 		var_dump($this->public);
				var_dump($this->protected);
				var_dump($this->private); */
	}

	public function getProduct()
	{
		return "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена со скидкой: {$this->getPrice()}<br>";
	}

	public function getName()
	{
		return $this->name;
	}

	public function getPrice()
	{
		return $this->price - ($this->price * $this->discount / 100);
	}

	public function getDiscount(): int
	{
		return $this->discount;
	}

	public function setDiscount(int $discount)
	{
		$this->discount = $discount;
	}

}