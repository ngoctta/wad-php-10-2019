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
 	echo "<br>";
 	echo  "======== bai 3 =========";
 	echo "<br>";
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

 	// bai 4
 	echo "<br>";
 	echo  "======== bai 4 =========";
 	echo "<br>";
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

 	// bai 5
 	echo "<br>";
 	echo  "======== bai 5 =========";
 	echo "<br>";
 	$binh = 27;
 	$minh = $binh / 3;
 	$numberBook = 0;
 	while ($binh != $minh * 2) {
 		$binh --;
 		$minh ++;
 		$numberBook++;
 	}
 	echo $numberBook;

 	// bai 6
 	echo "<br>";
 	echo  "======== bai 6 =========";
 	echo "<br>";
 	$monny = 0;
 	$candyShell = 0;
 	$numberCandy = 0;
 
 	while ($monny < 2000) {
 		$monny += 200;
 		$candyShell ++;
 		$numberCandy ++;
 		if($numberCandy % 2 == 0){
 			$numberCandy ++;
 			$candyShell = 0;
 		}
 	}
 	echo $numberCandy;

 	// bai 7
 	echo "<br>";
 	echo  "======== bai 7 =========";
 	echo "<br>";
 	$keo = 0;
 	
 	$usdStart = 0;
 	while ($keo < 50) {
 		$usdStart += 5;
 		$tam = $usdStart / 5;
 		$euro = $tam * 3;
 		$usd = 0;
 		$keo = $tam;
		
 		while(($euro > 0) || ($usd > 0)){
 			if($keo >= 50){
 				break;
 			}
 			if($euro >= 2){
 				$tam = floor($euro / 2);
 				$usd += $tam * 3;
 				$euro -= $tam * 2;
 				$keo += $tam;
 			} else if($usd >= 5) {
 				$tam = floor($usd / 5); 				
 				$euro += $tam * 3;
 				$usd -= $tam * 5;
 				$keo += $tam;
 			}else{
 				break;
 			}
 		}		
 	}
 	echo "Số đô la ban đầu là $usdStart dư $usd";

 	// bai 8
 	echo "<br>";
 	echo  "======== bai 8 =========";
 	echo "<br>";
 
 	$red = 50;
 	$array = [];
 	for ($green = 0; $green < 50; $green++ ) { 
 		if(2*$green/5 + 3/4*$red == 27){
 			$array[] = ["green" => $green, "red" => $red];
 		}
 		$red--;
 	}
 	echo "<pre>";
 	print_r($array);
 	echo "</pre>";

 	echo "=======================";
 	

  ?>