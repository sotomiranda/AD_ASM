<?php
	$title = 'E1';
	$texto = 'Numero aleatorio entre 1 y 100, ambos inclusive.';
	$aleatorio = rand(1,100);
?>

<html>
	<title><?php echo $title ?></title>
	<body>
		<p><b><u><?php echo $texto ?></u></b></p>
		<h1><b><font size="200"><?php printf("%d, %b, %o, %x", $aleatorio,$aleatorio,$aleatorio,$aleatorio) ?></font></b></h1>
	</body>
	</html>