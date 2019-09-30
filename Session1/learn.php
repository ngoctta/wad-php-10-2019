<?php 
	echo "Hello world";
 ?>
 <h1>Hello world</h1>
 echo "Hello world"
 <?php 
 // bien trong php
 	$myClass = "WAD PHP";
 	echo $myClass;
 	$loptoi = "WAD PHP"; // khong nen
 	// camel
 	$defineMyUserForClass = "Test";
 	$ab = "Demo test"; // khong nen

 	// cac phep tinh co ban 
 	$numberOne = 7;
 	$numberTwo = 8;
 	echo "<br>";
 	echo $numberTwo + $numberOne;
 	// => Convention code

 	// Ham trong php
 	function myFunction() {
 		echo "test function";
 	}
 	echo "<br>";
 	myFunction();

 	function myFunction1() {
 		$a = 3;
 		$b = 5;
 		return $a + $b;
 	}
 	echo "<br>";
 	echo myFunction1();
 	function myFunction2($a, $b) {
 		return $a + $b;
 	}
 	echo "<br>";
 	echo myFunction2(4, 5);
 	$n = 3;

 	// bai 2
 	$week = [
 		2 => "thu hai",
 		3 => "thu ba",
 		4 => "thu tu",
 		5 => "thu nam",
 		6 => "thu sau",
 		7 => "thu bay",
 		8 => "chu nhat",
 	];
 	function checkDay($n) {
 		global $week;
 		if ( isset($week[$n]) ) {
 			return $week[$n];
 		} else {
 			return "khong phai ngay trong tuan";
 		}
 	}
 	echo "<br>";
 	echo checkDay(1);

 	// bai 3
	function checkDay2($n) {
 		global $week;
 		switch (isset($week[$n])) {
 			case true:
 				return $week[$n];
 				break;
 			
 			default:
 				return "khong phai ngay trong tuan";
 				break;
 		}
 	}

 	echo "<br>";
 	echo checkDay2(1);

 	for ($i=0; $i < 10; $i++) { 
 		echo "$i <br>";
 	}
 	$n = 1;
 	while ($n <= 10) {
 		echo "$n <br>";
 		$n++;
 	}


 	function bai4() {
 		for ($i=0; $i <= 100; $i++) { 
 			echo "<br>";
	 		if ($i % 6 == 0) {
	 			echo "$i chia het cho 6";
	 		} elseif ($i % 3 == 0) {
				echo "$i chia het cho 3";
	 		} elseif ($i % 2 == 0) {
	 			echo "$i chia het cho 2";
	 		} else {
	 			echo "$i khong chia het cho 2, 3, 6";
	 		}
	 	}
 	}
 	bai4();
  ?>