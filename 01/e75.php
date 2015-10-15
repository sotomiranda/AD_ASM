<?php
	$title = 'E1';
	$texto = 'Numero aleatorio entre 1 y 100, ambos inclusive.';
	$aleatorio = rand(1,100);
?>

<html>
	<title><?php echo $title ?></title>
	<body>
		<p><b><u><?php echo $texto ?></u></b></p>
		<input name="aleatorio" readonly="readonly" style="width: 20px; border: 1px solid red; background-color: aqua; color: green; text-align: center;" value="<?php echo $aleatorio ?>"/>
	</body>
	</html>