<!DOCTYPE html>
<html>
<head>
<?php include("class_lib.php"); ?>
</head>
<body>
<?php

	
	$result1 = new addition("20","15");
	$stefan = new person("Jason Jones");
	$jimmy = new person("Billy Jones");
	
	echo "first value is : " . $result1->get_first();
	echo "<br>second value is : " . $result1->get_second();
	echo "<br>addition of above is : " . $result1->get_result();

	echo "<br>Stefan's full name: " . $stefan->get_name();
	echo "<br> Nick's full name: " . $jimmy->get_name();

	$jenifer = new employee("Jenny lewis");
	echo "<br> Jenny is new employee and her name is " . $jenifer->get_name();
?>
</body>
</html>