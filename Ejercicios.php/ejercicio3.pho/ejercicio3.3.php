
<?php
$gan =$_POST['gan'];
$per = $_POST['per'];
$emp = $_POST['emp'];

$pgan = $gan * 3;
$pper = $per * 0;
$pemp = $emp * 1;

$suma = ($pgan + $pper +$pemp) ;

echo "total:".  $suma; 
?>