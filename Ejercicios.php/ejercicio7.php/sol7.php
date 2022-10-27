<?php
$nom = $_POST ['aprendiz'];
$asig = $_POST ['asig'];
$cal = $_POST['calificación'];


if ($cal<7){
    echo  $nom." ".$asig." ".$cal.":"." Desaprobado";
    
}else{
    echo  $nom." ".$asig." ".$cal.":"." Aprobado";
}

?>