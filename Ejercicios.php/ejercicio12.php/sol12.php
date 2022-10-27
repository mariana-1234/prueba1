<?php

$Capital = $_POST['capi'];
$Int1 = $Capital+($Capital * 0.2);
$Int2 = $Capital+($Capital * 0.45);
$Int3 = $Capital+($Capital * 0.07);

if($Capital<=500){
    echo "Capital ingresado: ".$Capital." Valor a capital ".$Int1;    
}
elseif($Capital>=500 && $Capital<=1500){
    echo "Capital ingresado: ".$Capital." Valor a capital ".$Int2;
}
if($Capital>=1500){
    echo "Capital ingresado: ".$Capital." Valor a capital ".$Int3;
}
?>
