<?php
$valorp = $_POST['val'];
$precio = $valorp-($valorp*0.2);

if($valorp>=20000){
    echo "total de pago:". $precio;
}else{
    echo "total de pago". $valorp;
}
?>