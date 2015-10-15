<?php
	$cadena=$_GET['cadena'];
	$cadenacod;
	$caracter;
	for ($i=0;$i<strlen($cadena);$i++) {
		$caracter = $cadena[$i];
		if ($caracter ==' ') {
			$cadenacod .= " ";
		}
		else if (ord($caracter)+13>ord('z')) {
			$cadenacod .= chr((ord($caracter)+13)-26);
		}
		else {
			$cadenacod .= chr(ord($caracter)+13);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ROT13</title>
</head>
<body>
	<p><?php echo $cadenacod?></p>
</body>
</html>