<?php 
	$centenas = -100 + mt_rand()/mt_getrandmax() *200;
	$realdec = mt_rand(1,10);
	$suma = $centenas + $realdec;
	$resta = $centenas - $realdec;
	$multi = $centenas * $realdec;
	$divi = $centenas / $realdec;
	$resto = $centenas % $realdec;
	$opu = -$centenas;
	$inc = ++$centenas;
		--$centenas;
	$decr = --$centenas;
		++$centenas;
?>
	<html>
		<head><title>e70</title></head>
		<body>
			<p><b><?php print"$centenas" ?> + <?php echo $realdec ?> = <?php  echo $suma ?></b>
			<br/>
			<b><?php print"$centenas" ?> - <?php echo $realdec ?> = <?php  echo $resta ?></b>
			<br/>
			<b><?php print"$centenas" ?> * <?php echo $realdec ?> = <?php  echo $multi ?></b>
			<br/>
			<b><?php print"$centenas" ?> / <?php echo $realdec ?> = <?php  echo $divi ?></b>
			<br/>
			<b><?php print"$centenas" ?> % <?php echo $realdec ?> = <?php  echo $resto ?></b>
			<br/>
			<b>El opuesto de <?php print"$centenas" ?> es <?php echo $opu ?></b>
			<br/>
			<b><?php print"$centenas" ?>++ vale <?php echo $inc ?></b>
			<br/>
			<b><?php print"$centenas" ?>-- vale <?php echo $decr ?></b>
			<br/></p>
		</body>
	</html>