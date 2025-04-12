<?php

namespace core\traits;

trait TColor
{
	private $color;

	public function setColor($color)
	{
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	}
}