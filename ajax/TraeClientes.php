<?php
	include ("../conexion.php");
    $cn=new conexion();
    $con=$cn->conectar();
	$consulta = "SELECT * FROM cliente";
	$registro = mysqli_query($con,$consulta)or die(mysqli_error($con));
	$tabla = "";
	while($row = mysqli_fetch_array($registro)){		
        $n=utf8_decode($row['Nombre']);
        $a=str_replace("'","+",$row['Apellido']);
        $t=utf8_decode($row['Telefono']);
        $d=utf8_decode($row['Direccion']);
        $r=utf8_decode($row['Referencia']);
        $f=utf8_decode($row['Frecuencia']);
        $l=urlencode($row['Latitud']);
        $ln=urlencode($row['Longitud']);
		$editar = '<button onclick=\"editarUsu('.$row['IdCliente'].',\''.$n.'\',\''.$a.'\',\''.$t.'\',\''.$d.'\',\''.$r.'\',\''.$f.'\',\''.$l.'\',\''.$ln.'\',\''.$row['Fecha'].'\');\" data-toggle=\"modal\" data-target=\".editar\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></button>';
        
		$vermapa = '<button onclick=\"verMapa('.$row['Latitud'].','.$row['Longitud'].');\" data-toggle=\"modal\" data-placement=\"top\"  data-target=\".bs-example-modal-lg\" title=\"REVISAR MAPA\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></button>';
        
		$tabla.='{
				  "nombre":"'.$row['Nombre'].'",
				  "apellido":"'.$row['Apellido'].'",
				  "telefono":"'.$row['Telefono'].'",
				  "direccion":"'.$row['Direccion'].'",
				  "referencia":"'.$row['Referencia'].'",
                  "frecuencia":"'.$row['Frecuencia'].'",
                  "latitud":"'.$row['Latitud'].'",
                  "longitud":"'.$row['Longitud'].'",
                  "fecha":"'.$row['Fecha'].'",
				  "acciones":"'.$editar.$vermapa.'"
				},';		
	}	
	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';	

?>
