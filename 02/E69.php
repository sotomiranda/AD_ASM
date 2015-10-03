<?php 
	$real = mt_rand()/mt_getrandmax();
	$centenas = -1000 + mt_rand()/mt_getrandmax()*2000;
	$decimales = floor($centenas*1000)/1000;
	$decenas = floor(round($centenas/10))*10;

	
?>

	<html>
		<head><title>e69</title></head>
		<body>
			<p><b>Numero real aleatorio entre 0 y 1:</b> <?php print"$real" ?>
			<br/>
			<b>Numero real aleatorio entre -1000 y 1000:</b> <?php print"$centenas" ?>
			<br/>
			<b>Segundo numero truncado a las milesimas:</b> <?php print"$decimales" ?>
			</br>
			<b>Segundo numero truncado a las decenas:</b> <?php print"$decenas" ?>
			</p>
		</body>
	</html>