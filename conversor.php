<!DOCTYPE html>
<html>
<head>
	<title>CONVERSOR</title>
</head>
<body>
//LIZBETH POZOS YÁÑEZ 

 <<?php  echo  "VALOR DE LIBRA EN PESO MX "
	$vli=(24.20)
	echo <br><h1> "VALOR DE EURO EN PESO MX"</h1>
	$veu=20.54
	echo  <br><h1> "VALOR DEl DÓLAR EN PESO MX"</h1>
	$vdl=18.76

	
	echo  <br><h1> " MENÚ DE OPCIONES A QUE DESEA CAMBIAR: "//OPCIONES PARA EL MENÚ</h1>
	echo  <br><h1> " 1-PESO-MX A DÓLAR"</h1>
	echo  <br><h1>" 2-PESO-MX A LIBRA"</h1>
	echo  <br><h1> " 3-PESO-MX A EURO"</h1>
	echo  <br><h1>" 4-DÓLAR A PESOMX"</h1>
	echo  <br><h1> " 5-LIBRA A PESOMX"</h1>
	echo  <br><h1> " 6-EURO A PESOMX"</h1>
	
	</h2>
		<DoWhile     //MENÚ DE OPCIONES CON CICLO SEGUN
			1:
				<<?php echo  <br><h1> "PESO-MX A DÓLAR"</h1>
				echo  <br><h1>"INGRESE LA CANTIDAD DE PESOS"</h1>
				<input type="text" name="$pes"> 
				$dl= $vdl/$pes
				echo  <br><h1> " LA CANTIDAD ES: " $pes " A " $dl " DÓLAR"</h1>
			2:
				<<?php echo  <br><h1> "PESO-MX A LIBRA"</h1>
				echo  <br><h1> "INGRESE LA CANTIDAD DE PESOS"</h1>
				<input type="text" name="$pes"> 
				$lb= $vli*$pes
				echo  <br><h1> " LA CANTIDAD ES: " $pes " A " $lb "LIBRAS"</h1>
			3:
				<<?php echo  <br><h1> "PESO-MX A EURO"</h1>
				echo  <br><h1> "INGRESE LA CANTIDAD DE PESOS"</h1>
				<input type="text" name="$pes"> 
				eu<- veu*pes
				echo  <br><h1> " LA CANTIDAD ES: " $pes " A " $eu "EURO"</h1>
			4:
				<<?php echo  <br><h1> " DÓLAR A PESOMX"</h1>
				echo  <br><h1> "INGRESE LA CANTIDAD DE DOLAR"</h1>
				<input type="text" name="$dol"> 
				peso<- $vdl*$dol
				echo  <br><h1> " LA CANTIDAD ES: " $dol " A " $peso "PESO"</h1>
			5:
				<<?php echo  <br><h1> " LIBRA A PESOMX"</h1>
				echo  <br><h1> "INGRESE LA CANTIDAD DE LIBRAS"</h1>;
				<input type="text" name="$libra">;
				$lib<- $libra*24.57;
				echo  <br><h1> " LA CANTIDAD ES: " $libra " A " $lib "PESO"</h1>;
				
			6:
				<<?php echo  <br><h1>" EURO A PESOMX"</h1>;
				  echo  <br><h1>" LA CANTIDAD DE EUROS"</h1>;
				<input type="text" name="$euro">;
				$euros<- $euro*20.74;
				<<?php echo  <br><h1> " LA CANTIDAD ES: " $euro " A " $euros "PESO"</h1>;
				
			7:
				<<?php echo "¿DESEA SALIR? S/N? ";
			
				<break>
				</switch> 
</body>
</html>