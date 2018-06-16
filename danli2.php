<?php

class danli{

	private $name;
	private static $sigle;
	private function __construct($name) {
		$this->name = $name;
	}
	private function __clone() {

	}

	public static function getInstence($name) {
		if (self::$sigle) {

		} else {
			self::$sigle = new danli($name);
		}

		return self::$sigle;
	}

}

$obj = danli::getInstence('小月');
$obj2 = danli::getInstence('小xiao月');
var_dump($obj,$obj2);