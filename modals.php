<div id="reggen" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div id="inreggen" class="modal fade RegistrarProducto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel" align="center">REGISTRAR CLIENTE</h4>
                </div>
                <div class="panel panel-success container-fluid">
                    <div class="panel-body">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6 col-lg-6 col-lg-offset-3">
                            <form action="NuevoUsuario.php" method="POST">
                                <div class="form-group">
                                    <label for="nombre" class="sr-only">NOMBRE</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" required placeholder="NOMBRE CLIENTE">
                                </div>
                                <div class="form-group">
                                    <label for="desc" class="sr-only">APELLIDO</label>
                                    <input class="form-control" type="text" name="apellido" id="apellido" required placeholder="APELLIDOS">
                                </div>
                                <div class="form-group">
                                    <label for="marca" class="sr-only">TELEFONO</label>
                                    <input class="form-control" type="text" name="telefono" id="telefono" size="15" required placeholder="TELEFONO">
                                </div>
                                <div class="form-group">
                                    <label for="tamanio" class="sr-only">DIRECCION</label>
                                    <input class="form-control" type="text" name="direccion" id="direccion" size="10" placeholder="DIRECCION">
                                </div>
                                <div class="form-group">
                                    <label for="cant" class="sr-only">REFERENCIA</label>
                                    <input class="form-control" type="text" name="referencia" id="referencia" size="5" required placeholder="REFERENCIA">
                                </div>
                                <div class="form-group">
                                    <label for="pc" class="sr-only">FRECUENCIA</label>
                                    <input class="form-control" type="text" name="frecuencia" id="frecuencia" size="5" required placeholder="FRECUENCIA">
                                </div>
                                <div class="form-group">
                                    <label for="pv" class="sr-only">LATITUD</label>
                                    <input class="form-control" type="text" name="latitud" id="latitud" size="5" required placeholder="LATITUD">
                                </div>
                                <div class="form-group">
                                    <label for="pbl" class="sr-only">LONGITUD</label>
                                    <input class="form-control" type="text" name="longitud" id="longitud" size="20" placeholder="LONGITUD">
                                </div>
                                <div class="form-group">
                                    <label for="" class="sr-only">FECHA</label>
                                    <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <button type="submit" name="botonpro" class="btn btn-success form-control" id="botonpro"><span class="glyphicon glyphicon-ok-sign"></span> GUARDAR</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="col-md-12 col-lg-12">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel" align="center">EDITAR CLIENTE</h4>
            </div>
            <div class="panel panel-success container-fluid">
                <div class="panel-body">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6 col-lg-6 col-lg-offset-3">
                        <form action="EditarUsuario.php" method="POST">
                            <input type="hidden" name="idc" id="idc">
                            <div class="form-group">
                                <label for="nombre" class="sr-only">NOMBRE</label>
                                <input class="form-control" type="text" id="enombre" name="enombre" required placeholder="NOMBRE CLIENTE">
                            </div>
                            <div class="form-group">
                                <label for="desc" class="sr-only">APELLIDO</label>
                                <input class="form-control" type="text" name="eapellido" id="eapellido" required placeholder="APELLIDOS">
                            </div>
                            <div class="form-group">
                                <label for="marca" class="sr-only">TELEFONO</label>
                                <input class="form-control" type="text" name="etelefono" id="etelefono" size="15" required placeholder="TELEFONO">
                            </div>
                            <div class="form-group">
                                <label for="tamanio" class="sr-only">DIRECCION</label>
                                <input class="form-control" type="text" name="edireccion" id="edireccion" size="10" placeholder="DIRECCION">
                            </div>
                            <div class="form-group">
                                <label for="cant" class="sr-only">REFERENCIA</label>
                                <input class="form-control" type="text" name="ereferencia" id="ereferencia" size="5" required placeholder="REFERENCIA">
                            </div>
                            <div class="form-group">
                                <label for="pc" class="sr-only">FRECUENCIA</label>
                                <input class="form-control" type="text" name="efrecuencia" id="efrecuencia" size="5" required placeholder="FRECUENCIA">
                            </div>
                            <div class="form-group">
                                <label for="pv" class="sr-only">LATITUD</label>
                                <input class="form-control" type="text" name="elatitud" id="elatitud" size="5" required placeholder="LATITUD">
                            </div>
                            <div class="form-group">
                                <label for="pbl" class="sr-only">LONGITUD</label>
                                <input class="form-control" type="text" name="elongitud" id="elongitud" size="20" placeholder="LONGITUD">
                            </div>
                            <div class="form-group">
                                <label for="" class="sr-only">FECHA</label>
                                <input type="date" class="form-control" name="efecha" id="efecha">
                            </div>
                            <button type="submit" name="ebotonpro" class="btn btn-success form-control" id="ebotonpro"><span class="glyphicon glyphicon-ok-sign"></span> GUARDAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade grafico" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">GRAFICO</h4>
            </div>
            <div class="modal-body" >
                <div class="table-responsive" style="height:400px;">
                    
                    <div class="ct-chart ct-golden-section" style="width:800px; height:400px;" ></div>
                
            </div>
        </div>
    </div>
</div>
