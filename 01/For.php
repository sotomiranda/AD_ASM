<?php
	for($i=0;$i<100;$i++){
		$array[]=rand(0,9);
	}
	var_dump($array);
	printf("<br/>");
	for ($i=1;$i<count($array);$i++) {
		for ($j=0;$j<count($array)-$i;$j++) {
			if ($array[$j]>$array[$j+1]) {
				$aux=$array[$j];
				$array[$j]=$array[$j+1];
				$array[$j+1]=$aux;
			}
		}
	}
	var_dump($array);
?>