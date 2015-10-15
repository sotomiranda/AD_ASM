<?php

	$numero1 = rand(-100,100);
	$numero2 = rand(1,100);
?>
<!DOCTYPE html>
<html>
<head>
	<title>E68</title>
</head>
<body>
<p><b><?php printf("%d + %d = %d",$numero1,$numero2,$numero1+$numero2)?></b></p>
<p><b><?php printf("%d - %d = %d",$numero1,$numero2,$numero1-$numero2)?></b></p>
<p><b><?php printf("%d * %d = %d",$numero1,$numero2,$numero1*$numero2)?></b></p>
<p><b><?php printf("%d / %d = %f",$numero1,$numero2,$numero1/$numero2)?></b></p>
<p><b><?php printf("%d %% %d = %d",$numero1,$numero2,$numero1%$numero2)?></b></p>
<p><b><?php printf("El opuesto de %d es %d",$numero1,-$numero1)?></b></p>
<p><b><?php printf("%d++ vale %d",$numero1,++$numero1)?></b></p>
<p><b><?php $numero1--; printf("%d-- vale %d",$numero1,--$numero1)?></b></p>
</body>
</html>