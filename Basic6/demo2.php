<?php
	$number = array(4, 6 , 2, 11, 22);
//	sort($number);
	rsort($number);
	$arrlength = count($number);
	for ($x = 0; $x < $arrlength; $x++) {
		echo $number[$x];
		echo "<br />";
	}
?>