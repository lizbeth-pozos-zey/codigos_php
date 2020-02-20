<!DOCTYPE html>
<html>
<head>
	<title>ALUMNOS CALIFICACIÓN</title>
</head>

<body>


<<?php echo $ "INGRESE LA CALIFICACIÓN"?>
<input type="text" name="calif">
<br>
<<?php if (calif<=10): ?>
<<?php else: ?>
<<?php echo " DESAPROBADO " ?>
<?php endif ?>
<br>
<<?php if (calif>10 and calif<1000): ?>
<<?php else: ?>
<<?php echo " ÁPROBADO " ?>
<?php endif ?>
</body>
</html>