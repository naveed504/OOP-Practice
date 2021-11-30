<?php

class Singlton {
	private static $obj = NULL;

	private function __construct()
	{
		echo "InItialize Only Once";
	}

	public static function getConnect()
	{
		if(!isset(self::$obj)) {
			self::$obj = new Singlton();
		}
		return self::$obj;
	} 
}

$obj1 = Singlton::getConnect();
$obj2 = Singlton::getConnect();

var_dump($obj1 == $obj2);
$varres = Singlton::$obj ;
var_dump($varres);