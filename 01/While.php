<?php
$num=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>While</title>
</head>
<body>
<?php while($num!=16){
		$num=rand(0,50);
		printf("<p>%d</p>",$num);
	}?>
</body>
</html>
