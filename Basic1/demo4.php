<?php
	$x = 5;
	$y = 10;
	
	function myTest(){
		static $x = 0;
		echo $x;
		$x++;
	}	
	myTest();
	echo '<br>';
	myTest();
	echo '<br>';
	myTest();
?>