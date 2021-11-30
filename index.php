<?php
include "admintrait.php";
// This File Is Use for AdminTrait 

class Main 
{
	use AdminCredentialsTrait;
	
	public function runcode()
	{

	}
}
$obj = new Main;
$obj->adminprofile();
