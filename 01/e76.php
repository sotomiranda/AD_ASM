<?php
	$title = 'E1';
	$texto = 'Numero aleatorio entre 100 y 200, ambos inclusive.';
	$aleatorio = rand(100,200);
	$resultado = "$aleatorio, ".gettype($aleatorio); 
?>

<html>
	<title><?php echo $title ?></title>
	<body>
		<p><b><u><?php echo $texto ?></u></b></p>
		<h1><b><font size="200"><?php echo $resultado ?></font></b></h1>
	</body>
	</html>