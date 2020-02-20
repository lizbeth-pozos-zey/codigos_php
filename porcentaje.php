<!DOCTYPE html>
<html>
<head>
	<title>PORCENTAJE SOBRE PREGUNTA</title>
</head>
<body>
<h2>¿Cuál es el porcentaje de estudientes que estan a favor o en contra de hacer un convivio al finalizar los examenes?</h2>

<<?php echo "$alum"?>

<foreach ($i as $i => $alum): ?>
	<input type="int" name="res">
	<<?php if (res="SI"): ?>
	$p=$p+1;
	<?php endif?>;


<<?php if (res="NO"): ?>
	$n=$n+1;
<?php endif?>


<<?php if (res=res+1): ?>
<?php else: ?>
	<<?php echo "OPCIÓN NO VALIDA" ?>
<?php endif ?>
<?php endforeach ?>>

<<?php echo $t=$n+$p?>

<<?php echo "PERSONAS A FAVOR: $p*100/alum" ?>
<<?php echo "PERSONAS EN CONTRA: $n*100/alum" ?>
<<?php echo "PERSONAS EN TOTAL: $t*100/alum" ?>



</body>
</html>