<?php 

	$numero = mt_rand(0,10); 
	if($numero % 2 == 0)
	{
		$par = "par";
	}
	else
	{
		$par = "impar";
	}
?>

<html>
	<head>
		<title>e66</title>
	</head>
	<body>
		<p><b><?php echo $numero ?> es <?php echo $par ?></b></p>
	</body>
</html>