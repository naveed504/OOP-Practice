<?php

class Parentclass 
{
	public function samefunctionname()
	{
		echo "aim here this is parent class"."<br>";
	}
}

class Childclass extends Parentclass
{
	public function samefunctionname()
	{
		echo "aim here  this is child class";
	}
}

$obj = new Parentclass ;
$obj1 = new Childclass ;

$obj->samefunctionname();
$obj1->samefunctionname();