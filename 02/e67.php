<?php 

	$numero = mt_rand(1,7); 
	if($numero == 1)
	{
		$dia = "Lunes";
	}

	if($numero == 2)
	{
		$dia = "Martes";
	}

	if($numero == 3)
	{
		$dia = "Miercoles";
	}

	if($numero == 4)
	{
		$dia = "Jueves";
	}

	if($numero == 5)
	{
		$dia = "Viernes";
	}

	if($numero == 6)
	{
		$dia = "Sabado";
	}

	if($numero == 7)
	{
		$dia = "Domingo";
	}
?>

<html>
	<head>
		<title>e66</title>
	</head>
	<body>
		<p><b><?php echo $dia ?></b></p>
	</body>
</html>