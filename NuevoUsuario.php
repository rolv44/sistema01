<?php
include("conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$nombre=htmlentities($_POST['nombre']);
$apellido=htmlentities($_POST['apellido']);
$telefono=htmlentities($_POST['telefono']);
$direccion=htmlentities($_POST['direccion']);
$referencia=htmlentities($_POST['referencia']);
$frecuencia=htmlentities($_POST['frecuencia']);
$latitud=htmlentities($_POST['latitud']);
$longitud=htmlentities($_POST['longitud']);
$fecha=$_POST['fecha'];
$resultado=mysqli_query($con,"insert into cliente values(null,'$nombre','$apellido','$telefono','$direccion','$referencia','$frecuencia','$latitud','$longitud','$fecha');")or die(mysqli_error($con));
if($resultado){
    header("Location:Pagina1.php");
}else{echo"<h1>Error al ingresar cliente</h1>";}


?>