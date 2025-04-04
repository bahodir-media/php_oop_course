<?php
class NoteBookProduct extends Product
{
	public $cpu;
	
	public function __construct($name, $price, $cpu)
	{
		parent::__construct($name, $price);
		$this->cpu = $cpu;
	}
	
	public function getProduct()
	{
		$out = parent::getProduct();
		$out .= "Процессор: {$this->cpu}<br>";
		return $out;
	}
	
	public function getCpu()
	{
		return $this->cpu;
	}
}