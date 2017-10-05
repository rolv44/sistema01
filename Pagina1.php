<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="chartist/dist/chartist.min.css">
    <!--Javascript-->

    <script src="css/bootstrap-3.3.7-dist/js/jquery-3.2.1.js"></script>
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/tablaClientes.js"></script>
    <script src="chartist/dist/chartist.min.js"></script>

    <style>
        #map {
            height: 550px;
            width: 100%;
        }

    </style>
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                    <a class="navbar-brand" href="#">AGUA DE MESA</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <h1>CLIENTES
                    <button type="button" data-toggle="modal" data-target="#inreggen" class="btn btn-primary pull-right menu"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;CLIENTE NUEVO</button>
                    <button type="button" onclick="rr();" data-toggle="modal" data-target=".grafico" data-placemente="top" title="GRAFICO" class="btn btn-primary pull-right menu"><span class="glyphicon glyphicon-blackboard"></span></button>
                </h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>TELEFONO</th>
                            <th>DIRECCION</th>
                            <th>REFERENCIA</th>
                            <th>FRECUENCIA</th>
                            <th>LATITUD</th>
                            <th>LONGITUD</th>
                            <th>FECHA</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>TELEFONO</th>
                            <th>DIRECCION</th>
                            <th>REFERENCIA</th>
                            <th>FRECUENCIA</th>
                            <th>LATITUD</th>
                            <th>LONGITUD</th>
                            <th>FECHA</th>
                            <th>ACCIONES</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


    <?php include("modals.php"); ?>

    <div class="navbar navbar-default navbar-fixed-bottom">
        <footer>
            <center>
                <div class="container">
                    <a class="link" rel="nofollow" href="https://www.facebook.com/InnovatioCoorp/" target="_blank">Sitio Web diseñado por Innovatio Coorporation </a>
                    <h4>INNOVATIO CORPORATION</h4>
                </div>
            </center>
        </footer>
    </div>
</body>

</html>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwQkiFEwdVj-a2pGG3KGmC7Irzm6ZBIhM">
    //src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwQkiFEwdVj-a2pGG3KGmC7Irzm6ZBIhM&callback=initMap"

</script>
<script>
    function verMapa(x, y) {
        var uluru = {
            lat: x,
            lng: y
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });

        $('.bs-example-modal-lg').on('shown.bs.modal', function() {
            var currentCenter = map.getCenter(); // Get current center before resizing
            google.maps.event.trigger(map, "resize");
            map.setCenter(currentCenter); // Re-set previous center
        });
    }

    function editarUsu(id, nom, ape, tel, dir, ref, fre, lat, lon, fecha) {
        document.getElementById('idc').value = id;
        document.getElementById('enombre').value = decodeURIComponent(nom);
        document.getElementById('eapellido').value = ape.split("+").join("'");
        document.getElementById('etelefono').value = decodeURIComponent(tel);
        document.getElementById('edireccion').value = decodeURIComponent(dir);
        document.getElementById('ereferencia').value = decodeURIComponent(ref);
        document.getElementById('efrecuencia').value = decodeURIComponent(fre);
        document.getElementById('elatitud').value = decodeURIComponent(lat);
        document.getElementById('elongitud').value = decodeURIComponent(lon);
        document.getElementById('efecha').setAttribute('value', fecha);
    }

    function cc() {
        $.ajax({
            type: 'POST',
            url: 'ajax/TraeDataCliente.php',
            dataType: 'json',
            success: function(data) {
                var valor = eval(data);
                var tam = Object.keys(valor).length;
                var nombre = new Array();
                var frec = new Array();
                var lim=new Array();
                var cont=0;
                for (var key in valor) {
                    nombre.push(valor[cont].nombre);
                    frec.push(valor[cont].frecuencia);
                    lim.push(valor[cont].tiempo);
                    cont++;
                }
                var data = {
                    labels: nombre,
                    series: [
                        frec,
                        lim
                    ]
                };

                var options = {
                    seriesBarDistance: 15
                };

                var responsiveOptions = [
                    ['screen and (min-width: 641px) and (max-width: 1024px)', {
                        seriesBarDistance: 10,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value;
                            }
                        }
                    }],
                    ['screen and (max-width: 640px)', {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0];
                            }
                        }
                    }]
                ];

                new Chartist.Bar('.ct-chart', data, options, responsiveOptions);
                rr();



            },
            error: function(q, w, e) {
                alert('Error al conseguir datos' + q);
            }

        });


    }


    function rr() {
        $('.grafico').on('shown.bs.modal', function(e) {
            cc();
        });
    }

</script>
