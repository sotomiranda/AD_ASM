<?php
	$title = 'E1';
	$texto = 'Numero aleatorio entre 100 y 200, ambos inclusive.';
	$aleatorio = 0;
	$ale2 = "aleatorio";
	$$ale2 = rand(100,200);
?>

<html>
	<title><?php echo $title ?></title>
	<body>
		<p><b><u><?php echo $texto ?></u></b></p>
		<h1><b><font size="200"><?php echo $aleatorio ?></font></b></h1>
	</body>
	</html>