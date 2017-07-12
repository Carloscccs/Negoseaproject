<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
        <title>NegoseApp</title>

        <!-- CSS  -->
        <link href="<?php echo base_url(); ?>lib/css/icon.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>lib/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="<?php echo base_url(); ?>lib/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <script src="<?php echo base_url(); ?>lib/js/jquery-2.1.1.min.js"></script>
    </head>

    <body>
        <nav class="lime darken-1" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo"><img src="<?php echo base_url(); ?>img/logo-sin.gif" /></a>
                <ul class="right hide-on-med-and-down">
                    <li><a id="NombreUsuario" href="#">name</a></li>
                    <li><a id="cerrarSesion" href="">Cerrar sesion</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">

                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#test1">PRODUCTOS</a></li>
                        <li class="tab col s3"><a href="#test2">REPORTES</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <h3>Agregar producto</h3>
                    <input type="hidden" id="idNegocio" />
                    <input type="hidden" id="rutUsuario" />
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s4">
                                    <input id="txtNombre" type="text" class="validate">
                                    <label for="txtNombre">Nombre del producto</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="txtPrecio" type="number" min="0" value="0" class="validate">
                                    <label for="txtPrecio">Precio</label>
                                </div>
                                <div class="input-field col s4">
                                    <div class="file-field input-field s12">
                                        <div class="btn">
                                            <span>Foto</span>
                                            <input type="file" disabled="true">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s4">
                                    <label>Tipo de producto</label>
                                    <select class="browser-default" id="selectTipo">
                                        <option value="" disabled="true" selected>Seleccione</option>
                                        <option value="Verdura">Verdura</option>
                                        <option value="Carne">Carne</option>
                                        <option value="Confite">Confite</option>
                                        <option value="Limpieza">Limpieza</option>
                                        <option value="Bebida">Bebida</option>
                                        <option value="Congelado">Congelado</option>
                                    </select>
                                </div>
                                <div class="col s4">
                                    <label>Estado</label>
                                    <select class="browser-default" id="selectEstado">
                                        <option value="Disponible">Disponible</option>
                                        <option value="Agotado">Agotado</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <br>
                                    <input type="button" class="waves-effect waves-light btn light-green accent-3 s12" value="Agregar producto" id="btnAgregarProducto"/>
                                </div>
                            </div>

                        </div>
                        <h3>Negocios existentes</h3>
                        <div class="row">
                            <div class="col s4">
                                <div class="input-field col s12">
                                    <input id="txtBuscarNegocio" type="text" class="validate">
                                    <label for="txtBuscarNegocio">Nombre del negocio</label>
                                </div>
                            </div>
                            <div class="col s3">
                                <br>
                                <input type="button" class="waves-effect waves-light btn" value="Buscar"/>
                            </div>
                        </div>
                        <div class="row">
                            <table>
                                <thead><th>Imagen</th><th>Nombre</th><th>Precio</th><th>Tipo</th><th>Estado</th><th>Modificar</th><th>Eliminar</th></thead>
                                <tbody id="tbodyProductos"></tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div id="test2" class="col s12"><h4>Reportes pendientes</h4></div>
            </div>
        </div>

        <div id="modalEliminarProducto" class="modal">
            <div class="modal-content">
                <h3>¿Esta seguro que desea eliminar este producto?</h3>
                <input type="hidden" id="idoculto" />
            </div>
            <div class="modal-footer">
                <input type="button" value="Si" id="bteliminarProdSi" class="btn green"/>
                <input type="button" value="No" id="bteliminarProdNo" class="btn yellow modal-action modal-close"/>
            </div>
        </div>

        <div id="modalActualizarProducto" class="modal">
            <div class="modal-content">
                <h4>Actualizar producto</h4>
                <div class="input-field validate">
                    <label for="txtMPid">ID</label>
                    <input type="text" name="txtMPid" id="txtMPid" required="true" disabled="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMPnombre">Nombre del producto</label>
                    <input type="text" name="txtMPnombre" id="txtMPnombre" required="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMPprecio">Horario de atencio</label>
                    <input type="text" name="txtMPprecio" id="txtMPprecio" required="true" placeholder=""/>
                </div>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Foto</span>
                        <input type="file" disabled="true">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="">
                    <label>Tipo de producto</label>
                    <select class="browser-default" id="selectMPTipo">
                        <option value="" disabled="true" selected>Seleccione</option>
                        <option value="Verdura">Verdura</option>
                        <option value="Carne">Carne</option>
                        <option value="Confite">Confite</option>
                        <option value="Limpieza">Limpieza</option>
                        <option value="Bebida">Bebida</option>
                        <option value="Congelado">Congelado</option>
                    </select>
                </div>
                <div class="">
                    <label>Estado</label>
                    <select class="browser-default" id="selectMPEstado">
                        <option value="Disponible">Disponible</option>
                        <option value="Agotado">Agotado</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" value="Actualizar" class="btn green" id="btnActualizarP"/>
                <input type="button" value="Cancelar" class="btn red modal-action modal-close" id="btncancel"/>
            </div>
        </div>


        <footer class="page-footer lime darken-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">NegoSea</h5>
                        <p class="grey-text text-lighten-4">Una empresa</p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by NegoSea s.a
                </div>
            </div>
        </footer>


        <!--  Scripts-->

        <script src="<?php echo base_url(); ?>lib/js/materialize.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/init.js"></script>
        <script>
            $(function () {
                $('ul.tabs').tabs();
                $(".modal").modal();
                cargarSesion();
                cargarID();
                cargarProductos();
                function cargarSesion() {
                    var url = "<?php echo site_url(); ?>/getUs";
                    $("#NombreUsuario").empty();
                    $.getJSON(url, function (res) {
                        var x = res.Nombre + " " + res.Apellido;
                        var y = res.Rut;
                        $("#NombreUsuario").append(x);
                        $("#rutoculto").val(y);
                    });
                }

                function cargarID() {
                    var Rut = $("#rutoculto").val();
                    $.ajax({
                        url: "<?php echo site_url(); ?>/getIdNego",
                        type: 'POST',
                        dataType: 'json',
                        data: {"Rut": Rut}
                    }).success(function (obj) {
                        $("#idoculto").val(obj);
                    });
                }

                $("#btnAgregarProducto").click(function () {
                    var nombre = $("#txtNombre").val();
                    var precio = $("#txtPrecio").val();
                    var rutaImg = "<?php echo base_url(); ?>img/productos/default.jpg";
                    var tipoProducto = $("#selectTipo").val();
                    var estado = $("#selectEstado").val();
                    var idNegocio = $("#idoculto").val();
                    $.ajax({
                        url: "<?php echo site_url(); ?>/aProducto",
                        type: 'POST',
                        dataType: 'json',
                        data: {"nombre": nombre, "precio": precio, "rutaImg": rutaImg, "tipoProducto": tipoProducto, "estado": estado, "idNegocio": idNegocio}
                    }).success(function (obj) {
                        Materialize.toast("" + obj);
                        cargarProductos();
                    });
                });

                function cargarProductos() {
                    var idNegocio = $("#idoculto").val();
                    $.ajax({
                        url: "<?php echo site_url(); ?>/getProduNego",
                        type: 'POST',
                        dataType: 'json',
                        data: {"idNegocio": idNegocio}
                    }).success(function (obj) {
                        $.each(obj, function (i, o) {
                            var x = "<tr><td><img src'" + o.rutaImg + "' /></td>";
                            x += "<td>" + o.Nombre + "</td>";
                            x += "<td>" + o.Precio + "</td>";
                            x += "<td>" + o.tipoProducto + "</td>";
                            x += "<td>" + o.Estado + "</td>";
                            x += '<td> <button id="edit" value="' + o.idProducto + "," + o.Nombre + "," + o.Precio + "," + o.tipoProducto + '" class="btn-ﬂoating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button>';
                            x += '<td> <button id="delete" value="' + o.idProducto + '" class="btn-ﬂoating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></button></ td></tr>';
                            $("#tbodynegocios").append(x);
                        });
                    });
                }

                $("#tbodyProductos").on("click", "#delete", function (e) {
                    e.preventDefault();
                    $("#idoculto").val($(this).val());
                    $("#modalEliminarNegocio").modal("open");
                });

                $("#bteliminarProdSi").click(function () {
                    var id = $("#idoculto").val();
                    $.ajax({
                        url: "<?php echo site_url() ?>/eProducto",
                        type: 'POST',
                        dataType: 'json',
                        data: {"idProducto": id}
                    }).success(function (obj) {
                        Materialize.toast("" + obj, 3000);
                        $("#modalEliminarProducto").modal("close");
                        $("#tbodyProductos").empty();
                        cargarProductos();
                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        if (jqXHR.status === 0) {
                            alert('Not connect: Verify Network.');
                        } else if (jqXHR.status == 404) {
                            alert('Requested page not found [404]');
                        } else if (jqXHR.status == 500) {
                            alert('Internal Server Error [500].');
                        } else if (textStatus === 'parsererror') {
                            alert('Requested JSON parse failed.');
                        } else if (textStatus === 'timeout') {
                            alert('Time out error.');
                        } else if (textStatus === 'abort') {
                            alert('Ajax request aborted.');
                        } else {
                            alert('Uncaught Error: ' + jqXHR.responseText);
                        }
                    });
                });
                
                $("#tbodyProductos").on("click", "#edit", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split(",");
                    $("#txtMPid").val(fila[0]);
                    $("#txtMPnombre").val(fila[1]);
                    $("#txtMPprecio").val(fila[3]);
                    $("#modalActualizarProducto").modal('open');
                });
                
                $("#btnActualizarP").click(function () {
                    var id = $("#txtMPid").val();
                    var nombre = $("#txtMPnombre").val();
                    var precio = $("#txtMPprecio").val();
                    var tipo = $("#selectMPTipo").val();
                    var estado = $("#selectMPEstado").val();
                    if (nombre == "" || precio == "" ) {
                        Materialize.toast("Faltan datos");
                    } else {
                        $.ajax({
                            url: "<?php echo site_url(); ?>/mProducto",
                            type: 'POST',
                            dataType: 'json',
                            data: {"idProducto": id, "nombre": nombre, "precio": precio, "tipo": tipo, "estado": estado}
                        }).success(function (obj) {
                            Materialize.toast("" + obj, 3000);
                            $("#modalActualizarProducto").modal('close');
                            $("#tbodyProductos").empty();
                            cargarProductos();
                        }).fail(function (jqXHR, textStatus, errorThrown) {
                            if (jqXHR.status === 0) {
                                alert('Not connect: Verify Network.');
                            } else if (jqXHR.status == 404) {
                                alert('Requested page not found [404]');
                            } else if (jqXHR.status == 500) {
                                alert('Internal Server Error [500].');
                            } else if (textStatus === 'parsererror') {
                                alert('Requested JSON parse failed.');
                            } else if (textStatus === 'timeout') {
                                alert('Time out error.');
                            } else if (textStatus === 'abort') {
                                alert('Ajax request aborted.');
                            } else {
                                alert('Uncaught Error: ' + jqXHR.responseText);
                            }
                        });
                    }
                });
                
                $("#cerrarSesion").click(function () {
                    $.ajax({
                        url: "<?php echo site_url(); ?>/cSesion"
                    }).success(function (obj) {

                    });
                });

            });
        </script>

    </body>

</html>