<?php
	const LOGIN=1;
	const ACCESO_EMPRESARIALES=2;
	const ACCESO_FACTURACION=4;
	const ESCRITURA_EMPRESARIALES=8;
	const ESCRITURA_FACTURACION=16;
	const PERMISOS_AD=32;
	$usario;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><?php 
$usuario=LOGIN;
echo "Comprobación login.<br/>";
echo "--------------------------<br/>";
if ($usuario & LOGIN) {
	echo ("El usuario tiene permisos de login.<br/>");
} else {
	echo ("El usuario no tiene permisos de login.<br/>");
}

if ($usuario & ACCESO_EMPRESARIALES) {
	echo ("El usuario tiene permisos de acceso a datos empresariales.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a datos empresariales.<br/>");
}

if ($usuario & ACCESO_FACTURACION) {
	echo ("El usuario tiene permisos de acceso a datos facturación.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a datos facturación.<br/>");
}

if ($usuario & ESCRITURA_EMPRESARIALES) {
	echo ("El usuario tiene permisos de acceso a escritura empresariales.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a escritura empresariales.<br/>");
}

if ($usuario & ESCRITURA_FACTURACION) {
	echo ("El usuario tiene permisos de acceso a escritura facturación.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a escritura facturación.<br/>");
}

if ($usuario & PERMISOS_AD) {
	echo ("El usuario tiene permisos de acceso a permisos administrador.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a permisos administrador.<br/>");
}
?></p>
<br/>
<p><?php 
$usuario+=ACCESO_FACTURACION+ACCESO_EMPRESARIALES;
echo "Comprobacion accesos de lectura.<br/>";
echo "-----------------------------------------<br/>";
if ($usuario & LOGIN) {
	echo ("El usuario tiene permisos de login.<br/>");
} else {
	echo ("El usuario no tiene permisos de login.<br/>");
}

if ($usuario & ACCESO_EMPRESARIALES) {
	echo ("El usuario tiene permisos de acceso a datos empresariales.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a datos empresariales.<br/>");
}

if ($usuario & ACCESO_FACTURACION) {
	echo ("El usuario tiene permisos de acceso a datos facturación.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a datos facturación.<br/>");
}

if ($usuario & ESCRITURA_EMPRESARIALES) {
	echo ("El usuario tiene permisos de acceso a escritura empresariales.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a escritura empresariales.<br/>");
}

if ($usuario & ESCRITURA_FACTURACION) {
	echo ("El usuario tiene permisos de acceso a escritura facturación.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a escritura facturación.<br/>");
}

if ($usuario & PERMISOS_AD) {
	echo ("El usuario tiene permisos de acceso a permisos administrador.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a permisos administrador.<br/>");
}
?></p>
<br/>
<p><?php 
$usuario+=PERMISOS_AD;
echo "Comprobación permisos de administrador.<br/>";
echo "---------------------------------------------------<br/>";
if ($usuario & LOGIN) {
	echo ("El usuario tiene permisos de login.<br/>");
} else {
	echo ("El usuario no tiene permisos de login.<br/>");
}

if ($usuario & ACCESO_EMPRESARIALES) {
	echo ("El usuario tiene permisos de acceso a datos empresariales.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a datos empresariales.<br/>");
}

if ($usuario & ACCESO_FACTURACION) {
	echo ("El usuario tiene permisos de acceso a datos facturación.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a datos facturación.<br/>");
}

if ($usuario & ESCRITURA_EMPRESARIALES) {
	echo ("El usuario tiene permisos de acceso a escritura empresariales.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a escritura empresariales.<br/>");
}

if ($usuario & ESCRITURA_FACTURACION) {
	echo ("El usuario tiene permisos de acceso a escritura facturación.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a escritura facturación.<br/>");
}

if ($usuario & PERMISOS_AD) {
	echo ("El usuario tiene permisos de acceso a permisos administrador.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a permisos administrador.<br/>");
}
?></p>
<br/><br/>
<p><?php 
$usuario-=ACCESO_EMPRESARIALES;
echo "Comprobación quitar permisos de lectura empresariales.<br/>";
echo "--------------------------------------------------------------------<br/>";
if ($usuario & LOGIN) {
	echo ("El usuario tiene permisos de login.<br/>");
} else {
	echo ("El usuario no tiene permisos de login.<br/>");
}

if ($usuario & ACCESO_EMPRESARIALES) {
	echo ("El usuario tiene permisos de acceso a datos empresariales.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a datos empresariales.<br/>");
}

if ($usuario & ACCESO_FACTURACION) {
	echo ("El usuario tiene permisos de acceso a datos facturación.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a datos facturación.<br/>");
}

if ($usuario & ESCRITURA_EMPRESARIALES) {
	echo ("El usuario tiene permisos de acceso a escritura empresariales.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a escritura empresariales.<br/>");
}

if ($usuario & ESCRITURA_FACTURACION) {
	echo ("El usuario tiene permisos de acceso a escritura facturación.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a escritura facturación.<br/>");
}

if ($usuario & PERMISOS_AD) {
	echo ("El usuario tiene permisos de acceso a permisos administrador.<br/>");
} else {
	echo ("El usuario no tiene permisos de acceso a permisos administrador.<br/>");
}
?></p>
</body>
</html>