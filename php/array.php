<?php

$myArray = array("David, Erin, Dane, Marshall");

$myArray[] = "Alex";

print_r($myArray);

echo $myArray[1];


echo "<br><br>";

$secondArray[0] = "pizza";

$secondArray[1] = "yogurt";

$secondArray[5] = "milk";

$secondArray["myFavoiriteFood"] = "ice cream";

print_r($secondArray);

echo "<br><br>";

$thirdArray = array(
    
    "France" => "French", 
    "USA" => "United States", 
    "Germany" => "German");

unset($thirdArray["France"]);

print_r($thirdArray);

echo sizeof($thirdArray);


?>