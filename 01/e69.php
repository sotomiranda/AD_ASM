 <?php
	$numero = mt_rand()/mt_getrandmax();
	$numero2 =-1000+mt_rand()/mt_getrandmax()*(1000-(-1000));

?>
<!DOCTYPE html>
<html>
<head>
	<title>E69</title>
</head>
<body>
	<p><?php echo "<b>Número real aleatorio entre 0 y 1: </b>$numero"?></p>
	<p><?php echo "<b>Número real aleatorio entre -1000 y 1000: </b>$numero2"?></p>
	<p><?php printf("<b>Segundo número truncado a las milésimas: </b>%.3f",round($numero2,3))?></p>
	<p><?php printf("<b>Segundo número truncado a las decenas: </b>%d",round(($numero2>0)?$numero2-5:$numero2+5,-1))?></p>
</body>
</html>