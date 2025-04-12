<?php

namespace core\traits;

trait TSingleton
{
	private static $instance;
	private function __construct()
	{
		
	}
	
	public static function getInstance()
	{
		if (self::$instance === null) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}
