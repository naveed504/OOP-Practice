<?php


class Shape 
{
	public function __call($nameOfFunction , $numberOfParameters)
	{		
		if($nameOfFunction == 'area') {
			switch(count($numberOfParameters)) {

				case 1:
				echo  "Area of Circle ". 3.14 * $numberOfParameters[0];
				break ;
				case 2:
				echo "Area of Ractangule " . $numberOfParameters[0] * $numberOfParameters[1];
				break;
			}
		}
	}
}

$obj = new Shape;
echo $obj->area(3 , 5) ."<br>";
