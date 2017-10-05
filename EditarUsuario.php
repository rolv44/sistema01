<?php
include("conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$codigo=$_POST['idc'];
$nombre=htmlentities($_POST['enombre']);
$apellido=htmlentities($_POST['eapellido']);
$telefono=htmlentities($_POST['etelefono']);
$direccion=htmlentities($_POST['edireccion']);
$referencia=htmlentities($_POST['ereferencia']);
$frecuencia=htmlentities($_POST['efrecuencia']);
$latitud=htmlentities($_POST['elatitud']);
$longitud=htmlentities($_POST['elongitud']);
$fecha=$_POST['efecha'];
$resultado=mysqli_query($con,"update cliente set Nombre='$nombre',Apellido=\"$apellido\",Telefono='$telefono',Direccion='$direccion',Referencia='$referencia',Frecuencia='$frecuencia',Latitud='$latitud',Longitud='$longitud',Fecha='$fecha' where IdCliente='$codigo'  ")or die(mysqli_error($con));
if($resultado){
    header("Location:Pagina1.php");
}else{echo"<h1>ERROR AL ACTUALIZAR DATOS!</h1>";}
?>