<?php

$stringToArray = "Hello This Is A Coder";
echo $stringToArray . "<br>";

$results= explode(" " , $stringToArray);


foreach($results as $result) {
	echo $result . "<br>";
}

$result2 =implode(" " , $results);
print_r($result2);
