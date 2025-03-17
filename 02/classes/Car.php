<?php
	class Car 
	{
		public $color;
		public $wheels = 4;
		public $speed = 180;
		var $brand; //not recommended
		
		// protected
		// private
		
		//Since PHP 5.6		
		public $path = __DIR__ . '/test';
		public $test = 2+3;
	}