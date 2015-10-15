<?php
	/*No se si he entendido bien el ejercicio pero esto es lo que he entendido por transformar a real, como los ejemplos de clase
	si printeas una cadena como si fuera un entero que contenga numero en el primer caracter lo reconoce como entero y si no no.*/
	$caracteres = "0123456789abc.";
	$num=0;
	while($num<5) {
		$pos=rand(0,13);
		$cadena1 = $cadena1.$caracteres[$pos];
		$pos=rand(0,13);
		$cadena2 = $cadena2.$caracteres[$pos];
		$num++;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>e73</title>
</head>
<body>
<p><?php printf("La cadena entera <b>%s</b> se convierte al entero <b>%d</b><br>", $cadena1,$cadena1);
	printf("La cadena real <b>%s</b> se convierte al número real <b>%.4f</b>", $cadena2,$cadena2);
?></p>
</body>
</html>