<?php
$hermano1 = $_POST ['hermano1'] ;
$hermano2 = $_POST ['hermano2'];

if ($hermano1>= $hermano2){
    $resta_hermanos = $hermano1 - $hermano2;
    echo "la diferencia de edad es:". $resta_hermanos;
    echo "<br>";
    echo "la edad mayor es: " .$hermano1;
    
}else if ($hermano1 < $hermano2){
    $resta_hermanos = $hermano2 - $hermano1;
    echo "la diferencia de edad es:". $resta_hermanos;
    echo "<br>";
    echo "la edad mayor es: " .$hermano2;
}

?>
