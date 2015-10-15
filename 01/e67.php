<?php
$num=rand(1,7);
$dia;
switch ($num) {
	case 1:
	$dia="Lunes";
	break;
	case 2:
	$dia="Martes";
	break;
	case 3:
	$dia="Miércoles";
	break;
	case 4:
	$dia="Jueves";
	break;
	case 5:
	$dia="Viernes";
	break;
	case 6:
	$dia="Sábado";
	break;
	case 7:
	$dia="Domingo";
	break;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><?php echo $dia ?></p>
</body>
</html>