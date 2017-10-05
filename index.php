<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/IndexCss.css">
    <script src="css/bootstrap-3.3.7-dist/js/jquery-3.2.1.js"></script>
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="scripts/ValidaUsuario.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-sm-offset-3 ">
                <form action="" autocomplete="off">
                    <h2 align="center">INICIAR SESION</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">USUARIO</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre de Usuario" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">CONTRASEÑA</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <button type="button" onclick="validar()" class="btn btn-block">ACEPTAR</button>
                    <br>
                    <div class="alert alert-danger alert-dismissible" role="alert" hidden="hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span id="ss" aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong> Contraseña o usuario incorrecto.
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
