<?php
	$random = rand(1,100);
?>

<html>
	<title>
		e1
	</title>
	<body>
		<u><b>
			Numero aleatorio entre 100 y 200, ambos inclusive
		</b></u>
		<br>
		<h1>
			<?php printf("%d,%b,%o,%x",$random,$random,$random,$random)?>
		</h1>
	</body>
</html>