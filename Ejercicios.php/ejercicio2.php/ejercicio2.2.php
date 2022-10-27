<?php
$ganados =$_POST['estudiante'];
$materia = $_POST['materia'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$promedio = "promedio final:";

$suma = ($nota1 + $nota2 +$nota3) / 3 ;
 echo $estudiante."  ".$materia." ".$promedio." ".$suma;
?>