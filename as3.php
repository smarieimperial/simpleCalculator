<?php

$num1 =$_POST['num1'];
$num2 =$_POST['num2'];
$op = $_POST['op'];

if ($op == 'add'){
	$res = $num1 + $num2;
	print "Result of adding " . $num1 . " and " . $num2 . " is " . $res . "<br>";
	}
else if ($op == 'sub'){
	$res = $num1 - $num2;
	print "Result of subtracting " . $num1 . " and " . $num2 . " is " . $res . "<br>";
	}
else if ($op == 'mult'){
	$res = $num1 * $num2;
	print "Result of multiplying " . $num1 . " and " . $num2 . " is " . $res . "<br>";
	} 
else if ($op == 'div'){
	$res = $num1 / $num2;
	print "Result of dividing " . $num1 . " and " . $num2 . " is " . $res . "<br>";
	}
?>

