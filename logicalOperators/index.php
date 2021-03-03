<!DOCTYPE html>
<html lang="en">
<head>
	<title>Logical Operators</title>
</head>
<body>
	<?php
		$a = 42;
		$b = 0;

		if($a && $b){
			echo "Test 1: Both a and b are true<br>";
		}else{
			echo "Test 1: Either a or b is false<br>";
		}

		if ($a and $b) {
			echo "Test 2: Both a and b are true<br>";
		}else{
			echo "Test 2: Either a or b is false<br>";
		}

		if ($a || $b) {
			echo "Test 3: Either a or b is true<br>";
		}else{
			echo "Test 3: Both a and b are false<br>";
		}

		if ($a or $b) {
			echo "Test 4: Either a or b is true<br>";
		}else{
			echo "Test 4: Both a and b are false";
		}

		$a = 10;
		$b = 20;

		if($a){
			echo "Test 5: a is true<br>";
		}else{
			echo "Test 5: a is false<br>";
		}

		if($b){
			echo "Test 6: b is true<br>";
		}else{
			echo "Test 6: b is false<br>";
		}

		if(!$a){
			echo "Test 7: a is true<br>";
		}else{
			echo "Test 7: a is false<br>";
		}

		if(!$b){
			echo "Test 8: b is true<br>";
		}else{
			echo "Test 8: b is false<br>";
		}
	?>
</body>
</html>