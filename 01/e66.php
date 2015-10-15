<?php 
	$numero = rand(0,10);
	$texto;
	if ($numero%2==0){
		$texto = "par";
	}
	else {
		$texto ="impar";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>E66</title>
</head>
<body>
<p><?php printf("%d es %s",$numero,$texto) ?></p>
</body>
</html>
