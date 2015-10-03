<?php
	$n1 = rand(-100,100);
	$n2 = rand(1,100);
?>

<html>
	<title>
		e68
	</title>
	<body>
		<b>
			<p><?php printf("%d + %d = %d", $n1,$n2,$n1+$n2) ?></p>
			<p><?php printf("%d - %d = %d", $n1,$n2,$n1-$n2) ?></p>
			<p><?php printf("%d * %d = %d", $n1,$n2,$n1*$n2) ?></p>
			<p><?php printf("%d / %d = %d", $n1,$n2,$n1/$n2) ?></p>
			<p><?php printf("%d %% %d = %d", $n1,$n2,$n1%$n2) ?></p>
			<p><?php printf("El opuesto de %d es %d", $n1,-$n1) ?></p>
			<p><?php printf("%d++ vale %d", $n1,++$n1) ?></p>
			<p><?php $n1--; printf("%d-- vale %d", $n1,--$n1) ?></p>
		</b>
	</body>
</html>