<?php

	$numero1 = -100+mt_rand()/mt_getrandmax()*(100-(-100));
	$numero2 = mt_rand()/mt_getrandmax()*10;
?>
<!DOCTYPE html>
<html>
<head>
	<title>E68</title>
</head>
<body>
<p><b><?php printf("%f + %f = %f",$numero1,$numero2,$numero1+$numero2)?></b></p>
<p><b><?php printf("%f - %f = %f",$numero1,$numero2,$numero1-$numero2)?></b></p>
<p><b><?php printf("%f * %f = %f",$numero1,$numero2,$numero1*$numero2)?></b></p>
<p><b><?php printf("%f / %f = %f",$numero1,$numero2,$numero1/$numero2)?></b></p>
<p><b><?php printf("%f %% %f = %f",$numero1,$numero2,$numero1%$numero2)?></b></p>
<p><b><?php printf("El opuesto de %f es %f",$numero1,-$numero1)?></b></p>
<p><b><?php printf("%f++ vale %f",$numero1,++$numero1)?></b></p>
<p><b><?php $numero1--; printf("%f-- vale %f",$numero1,--$numero1)?></b></p>
</body>
</html>