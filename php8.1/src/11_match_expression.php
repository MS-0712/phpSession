<?php 

$marks = 78; 

$res = match (true) { 
	$marks < 33 => 'Fail', 
	$marks < 45 => 'Third Division', 
	$marks < 60 => 'Second Division', 
	$marks < 75 => 'First Division', 
	$marks <= 100 => 'Distinction'
}; 

var_dump($res); 
?>
