<?php
date_default_timezone_set('AMERICA/Lima');
include("../conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$data=array();
$fecha=date("Y-m-d");
$resultado=mysqli_query($con,"select *from cliente")or die(mysqli_error($con));
while($row=mysqli_fetch_array($resultado)){
    $dd=new datetime($row[9]);
    $da=new datetime("now");
    $diff=$dd->diff($da);
    array_push($data,array("nombre"=>$row[1],"frecuencia"=>$row[6],"tiempo"=>$diff->days));
}

echo json_encode($data);


?>