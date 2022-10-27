<?php
$Valorpro = $_POST['valprod'];
$Prv = $Valorpro + ($Valorpro * 0.15);

if($Valorpro){
    echo "Vendido por: ".$Prv;
}
?>