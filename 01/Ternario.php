<?php
	$user= $_GET['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ternario</title>
</head>
<body>
<p><?php 
	printf(isset($user)?"Bienvenido $user":"<a href=\"#\">Login</a>");
?></p>
</body>
</html>