<?php
class conexion{
 function conectar(){
     return mysqli_connect("localhost","root","root","sistema01");
 }   
}

?>