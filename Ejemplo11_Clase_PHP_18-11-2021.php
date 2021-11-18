<!DOCTYPE html>
<html>
<head>
	<title>Aprendiendo PHP</title>
	<meta charset="utf-8">

</head>
<body>

	<?php 
		echo " <h1>Mi programa PHP</h1> Hola mundo";
		$nombre='Adilem';
		echo "<br>Mi nombre es ".$nombre;
		$edad=5;
		$suma=$edad+5;
		echo "<br>Suma: ".$suma;
		$d=date("D");
		if ($d=="Fri") {
			echo "Por fin es viernes!";
		}
		elseif ($d=="Sun") {
			echo "Domingo, dia de relax";
		}
		else{
			echo "<br>No es ni viernes ni domingo. Pase un buen dia.";
		}

	 ?>
	 <form action="Ejemplo11_Clase_PHP2_18-11-2021.php" method="post">
	 	Nombre:<input type="text" name="nombre">
	 	Edad:<input type="text" name="edad">
	 	<input type="submit" name="">
	 </form>
	 <?php 


	  ?>
</body>
</html>