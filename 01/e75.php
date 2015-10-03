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
			<input type="textbox" style="border-size=1px; width:20px; border-color: red; text-align:center; background-color: aqua;" readonly value=<?php echo $random ?>>
		</h1>
	</body>
</html>