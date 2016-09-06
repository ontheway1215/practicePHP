<?php
	$age = array("Peter" => "35", "Ben" => "37", "Joe" => "40");
//	asort($age);
//	ksort($age);
//	arsort($age);
	krsort($age);
	
	foreach($age as $x => $x_value) {
		echo "Key = ".$x. ", value = ".$x_value. " .";
		echo "<br />";
	}	
?>