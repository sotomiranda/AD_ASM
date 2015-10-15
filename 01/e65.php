<?php
	$num;
?>
<!DOCTYPE html>
<html>
<head>
	<title>E65</title>
</head>
<body>
<p><?php 
	for($i=0;$i<10;$i++) {
		$num=rand(1,100);
		if ($i<9) {
			echo $num.", ";
		}
		else {
			echo $num;
		}
}
?></p>
</body>
</html>