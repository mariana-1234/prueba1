<?php
   $Nom = $_GET['Nombre'];
   $Mat = $_GET['Materia'];
   $Ex1 = $_GET['Ex1'];
   $Ex2 = $_GET['Ex2'];
   $Ex3 = $_GET['Ex3'];

   $porc1 = $Ex1 * 0.3;
   $porc2 = $Ex2 *0.3;
   $porc3 = $Ex3 * 0.4;

   $final = $porc1 + $porc2 + $porc3;

   if ($final<4) {
      echo "El estudiante ".$Nom." Reprobo con una nota de ".$final;
   }else{
      echo "El estudiante ".$Nom." aprobo con una nota de ".$final;
   }
?>