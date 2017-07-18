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
        <nav class="teal lighten-2" role="navigation">
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
                        <li class="tab col s3"><a class="active" href="#test1">NEGOCIOS</a></li>
                        <li class="tab col s3"><a href="#test2">USUARIOS</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <h4>Agregar negocio</h4><a href="http://www.mapcoordinates.net/es" target="_blank">Buscar coordenadas</a>
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s4">
                                    <input id="txtNombre" type="text" class="validate">
                                    <label for="txtNombre">Nombre del negocio</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="txtLatitud" type="text" class="validate">
                                    <label for="txtLatitud">Latitud</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="txtLongitud" type="text" class="validate">
                                    <label for="txtLongitud">Longitud</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s4">
                                    <input id="txtrutDueño" type="text" maxlength="9" class="validate">
                                    <label for="txtrutDueño">Rut dueño</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="txtHorario" type="text" class="validate">
                                    <label for="txtHorario">Horario</label>
                                </div>
                                <div class="col s4">
                                    <label>Tipo de negocio</label>
                                    <select class="browser-default" id="selectTipo">
                                        <option value="" disabled="true" selected>Seleccione</option>
                                        <option value="Verduderia">Verduderia</option>
                                        <option value="Carniceria">Carniceria</option>
                                        <option value="Panaderia">Panaderia</option>
                                        <option value="Limpieza">Limpieza</option>
                                        <option value="Confiteria">Confiteria</option>
                                        <option value="Minimarket">Minimarket</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
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
                            <div class="row">
                                <div class="col s4">
                                    <label>Region</label>
                                    <select class="browser-default" id="selectRegion">
                                        <option value="" disabled="true" selected>Seleccione</option>
                                    </select>
                                </div>
                                <div class="col s4">
                                    <label>Provincia</label>
                                    <select class="browser-default" id="selectProvincia">
                                        <option value="" disabled="true" selected>Seleccione</option>
                                    </select>

                                </div>
                                <div class="col s4">
                                    <label>Comuna</label>
                                    <select class="browser-default" id="selectComuna">
                                        <option value="" disabled="" selected>Seleccione</option>
                                    </select>  
                                </div>
                            </div>
                            <div class="row">
                                <input type="button" class="waves-effect waves-light btn light-green accent-3 s12" value="Agregar negocio" id="btnAgregarNegocio"/>
                            </div>
                        </div>

                    </div>
                    <h4>Negocios existentes</h4>
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
                            <thead><th>Nombre</th><th>Dueño</th><th>Ubicacion</th><th>Horario</th><th>Tipo</th><th>Modificar</th><th>Eliminar</th></thead>
                            <tbody id="tbodynegocios"></tbody>
                        </table>
                    </div>
                </div>
                <div id="test2" class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="txtBuscarUsuario" type="text" class="validate">
                            <label for="txtBuscarUsuario">Nombre del usuario</label>
                        </div>
                        <div class="col s3">
                            <br>
                            <input id="btnBuscarUsuario" type="button" class="waves-effect waves-light btn" value="Buscar"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <table>
                                <thead><th>Rut</th><th>Nombre</th><th>Edad</th><th>Correo</th><th>Rol</th><th>Modificar</th><th>Eliminar</th></thead>
                                <tbody id="tbodyusuarios"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="modalEliminarNegocio" class="modal">
            <div class="modal-content">
                <h3>¿Esta seguro que desea eliminar este negocio?</h3>
                <input type="hidden" id="idoculto" />
            </div>
            <div class="modal-footer">
                <input type="button" value="Si" id="bteliminarNegSi" class="btn green"/>
                <input type="button" value="No" id="bteliminarNegNo" class="btn yellow modal-action modal-close"/>
            </div>
        </div>

        <div id="modalActualizarNeg" class="modal">
            <div class="modal-content">
                <h4>Actualizar negocio</h4>
                <div class="input-field validate">
                    <label for="txtMNid">ID</label>
                    <input type="text" name="txtMNid" id="txtMNid" required="true" disabled="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMNnombre">Nombre del negocio</label>
                    <input type="text" name="txtMNnombre" id="txtMNnombre" required="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMNhorario">Horario de atencio</label>
                    <input type="text" name="txtMNhorario" id="txtMNhorario" required="true" placeholder=""/>
                </div>
                <div class="">
                    <label>Tipo de negocio</label>
                    <select class="browser-default" id="selectMNTipo">
                        <option value="nada" disabled="true" selected>Seleccione</option>
                        <option value="Verduderia">Verduderia</option>
                        <option value="Carniceria">Carniceria</option>
                        <option value="Panaderia">Panaderia</option>
                        <option value="Limpieza">Limpieza</option>
                        <option value="Confiteria">Confiteria</option>
                        <option value="Minimarket">Minimarket</option>
                    </select>
                </div>
                <div class="input-field">
                    <label for="txtMNlatitud">Latitud</label>
                    <input type="text" name="txtMNlatitud" id="txtMNlatitud" required="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMNlongitud">Longitud</label>
                    <input type="text" name="txtMNlongitud" id="txtMNlongitud" required="true" placeholder=""/>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" value="Actualizar" class="btn green" id="btnActualizarN"/>
                <input type="button" value="Cancelar" class="btn red modal-action modal-close" id="btncancel"/>
            </div>
        </div>

        <div id="modalEliminarUsuario" class="modal">
            <div class="modal-content">
                <h3>¿Esta seguro que desea eliminar este usuario?</h3>
                <input type="hidden" id="rutoculto" />
                <input type="hidden" id="roloculto" />
            </div>
            <div class="modal-footer">
                <input type="button" value="Si" id="bteliminarUsuSi" class="btn green"/>
                <input type="button" value="No" id="bteliminarUsuNo" class="btn yellow modal-action modal-close"/>
            </div>
        </div>

        <div id="modalActualizarUsuario" class="modal">
            <div class="modal-content">
                <h4>Actualizar usuario</h4>
                <div class="input-field validate">
                    <label for="txtMUrut">Rut</label>
                    <input type="text" name="txtMUrut" id="txtMUrut" required="true" disabled="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMUnombre">Nombre</label>
                    <input type="text" name="txtMUnombre" id="txtMUnombre" required="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMUapellido">Apellido</label>
                    <input type="text" name="txtMUapellido" id="txtMUapellido" required="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMUclave">Clave</label>
                    <input type="text" name="txtMUclave" id="txtMUclave" required="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMUedad">Edad</label>
                    <input type="text" name="txtMUedad" id="txtMUedad" required="true" placeholder=""/>
                </div>
                <div class="input-field">
                    <label for="txtMUcorreo">Correo</label>
                    <input type="text" name="txtMUcorreo" id="txtMUcorreo" required="true" placeholder=""/>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" value="Actualizar" class="btn green" id="btnActualizarU"/>
                <input type="button" value="Cancelar" class="btn red modal-action modal-close" id="btncancel"/>
            </div>
        </div>

        <footer class="page-footer teal lighten-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">NegoSeApp</h5>
                        <p class="grey-text text-lighten-4">Es un sistema que le ayudara a buscar facilmente un producto en muchos negocios dentro de un area,
                            ahorrando el trabajo de salir sin rumbo buscando un produco</p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Funciones</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Buscar un producto</a></li>
                            <li><a class="white-text" href="#!">Seleccionar un negocio</a></li>
                            <li><a class="white-text" href="#!">Comprar productos</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Contacto</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Quiero que mi negocio aparesca!, presione</a></li>
                            <li><a class="white-text" href="#!">Tengo una duda! presione</a></li>
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
                cargarNegocios();
                cargarRegiones();
                cargarUsuarios();
                function cargarSesion() {
                    var url = "<?php echo site_url(); ?>/getUs";
                    $("#NombreUsuario").empty();
                    $.getJSON(url, function (res) {
                        var x = res.Nombre + " " + res.Apellido;
                        $("#NombreUsuario").append(x);
                    });
                }

                function cargarNegocios() {
                    var url = "<?php echo site_url(); ?>/getNeg";
                    $("#tbodynegocios").empty();
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            var x = "<tr><td>" + o.Nombre + "</td>";
                            x += "<td>" + o.rutUsuario + "</td>";
                            x += "<td>" + o.latitud + "<br>" + o.longitud + "</td>";
                            x += "<td>" + o.horarioAtencion + "</td>";
                            x += "<td>" + o.tipoNegocio + "</td>";
                            x += '<td> <button id="edit" value="' + o.idNegocio + "," + o.Nombre + "," + o.rutUsuario + "," + o.latitud + "," + o.longitud + "," + o.tipoNegocio + "," + o.horarioAtencion + '" class="btn-ﬂoating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button>';
                            x += '<td> <button id="delete" value="' + o.idNegocio + '" class="btn-ﬂoating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></button></ td></tr>';
                            $("#tbodynegocios").append(x);
                        });
                    });
                }

                function cargarRegiones() {
                    var url = "<?php echo site_url(); ?>/getRegi";
                    $("#selectProvincia").prop('disabled', true);
                    $("#selectComuna").prop('disabled', true);
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            var x = "<option value='" + o.id + "'>" + o.nombre + "</option>";
                            $("#selectRegion").append(x);
                        });
                    });
                }

                $("#selectRegion").change(function () {
                    var id = $("#selectRegion").val();
                    $.ajax({
                        url: "<?php echo site_url(); ?>/getProvi",
                        type: 'POST',
                        dataType: 'json',
                        data: {"id": id}
                    }).success(function (obj) {
                        $("#selectProvincia").prop('disabled', false);
                        $("#selectProvincia").empty();
                        $("#selectProvincia").append("<option value='' disabled='true' selected >Seleccione</option>");
                        $.each(obj, function (i, o) {
                            var x = "<option value='" + o.id + "'>" + o.nombre + "</option>";
                            $("#selectProvincia").append(x);
                        });
                    });
                });

                $("#selectProvincia").change(function () {
                    var id = $("#selectProvincia").val();
                    $.ajax({
                        url: "<?php echo site_url(); ?>/getComu",
                        type: 'POST',
                        dataType: 'json',
                        data: {"id": id}
                    }).success(function (obj) {
                        $("#selectComuna").prop('disabled', false);
                        $("#selectComuna").empty();
                        $("#selectComuna").append("<option value='' disabled='true' selected >Seleccione</option>");
                        $.each(obj, function (i, o) {
                            var x = "<option value='" + o.id + "'>" + o.nombre + "</option>";
                            $("#selectComuna").append(x);
                        });
                    });
                });

                $("#btnAgregarNegocio").click(function () {
                    var nombre = $("#txtNombre").val();
                    var horario = $("#txtHorario").val();
                    var rutaImg = "<?php echo base_url(); ?>img/negocios/default.jpg";
                    var tipo = $("#selectTipo").val();
                    var latitud = $("#txtLatitud").val();
                    var longitud = $("#txtLongitud").val();
                    var rutUsuario = $("#txtrutDueño").val();
                    var idRegion = $("#selectRegion").val();
                    var idProvincia = $("#selectProvincia").val();
                    var idComuna = $("#selectComuna").val();
                    if (nombre.length == 0 || horario.length == 0 || tipo == 0 || latitud.length == 0 || longitud.length == 0 || rutUsuario.length == 0 || idRegion == 0 || idProvincia == 0 || idComuna == 0) {
                        Materialize.toast("Todos los datos son obligatorios");
                    } else {
                        $.ajax({
                            url: "<?php echo site_url(); ?>/aNegocio",
                            type: 'POST',
                            dataType: 'json',
                            data: {"nombre": nombre, "horario": horario, "rutaImg": rutaImg, "tipo": tipo, "latitud": latitud, "longitud": longitud, "rutUsuario": rutUsuario, "idRegion": idRegion, "idProvincia": idProvincia, "idComuna": idComuna}
                        }).success(function (obj) {
                            Materialize.toast("" + obj);
                            $("#tbodynegocios").empty();
                            cargarNegocios();
                            $("#txtNombre").val("");
                            $("#txtHorario").val("");
                            $("#selectTipo").val("");
                            $("#txtLatitud").val("");
                            $("#txtLongitud").val("");
                            $("#txtrutDueño").val("");
                        });
                    }
                });

                $("#tbodynegocios").on("click", "#delete", function (e) {
                    e.preventDefault();
                    $("#idoculto").val($(this).val());
                    $("#modalEliminarNegocio").modal("open");
                });

                $("#bteliminarNegSi").click(function () {
                    var id = $("#idoculto").val();
                    $.ajax({
                        url: "<?php echo site_url() ?>/eNegocio",
                        type: 'POST',
                        dataType: 'json',
                        data: {"idNegocio": id}
                    }).success(function (obj) {
                        Materialize.toast("" + obj, 3000);
                        $("#modalEliminar").modal("close");
                        $("#tbodynegocios").empty();
                        cargarNegocios();
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

                $("#tbodynegocios").on("click", "#edit", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split(",");
                    $("#txtMNid").val(fila[0]);
                    $("#txtMNnombre").val(fila[1]);
                    $("#txtMNlatitud").val(fila[3]);
                    $("#txtMNlongitud").val(fila[4]);
                    $("#txtMNhorario").val(fila[6]);
                    $("#selectMNTipo").val(fila[5])
                    $("#modalActualizarNeg").modal('open');
                });

                $("#btnActualizarN").click(function () {
                    var id = $("#txtMNid").val();
                    var nombre = $("#txtMNnombre").val();
                    var latitud = $("#txtMNlatitud").val();
                    var longitud = $("#txtMNlongitud").val();
                    var horario = $("#txtMNhorario").val();
                    var tipo = $("#selectMNTipo").val();
                    if (nombre == "" || latitud == "" || longitud == "" || horario == "" || tipo == "nada") {
                        Materialize.toast("Faltan datos");
                    } else {
                        $.ajax({
                            url: "<?php echo site_url(); ?>/mNegocio",
                            type: 'POST',
                            dataType: 'json',
                            data: {"idNegocio": id, "nombre": nombre, "latitud": latitud, "longitud": longitud, "horario": horario, "tipo": tipo}
                        }).success(function (obj) {
                            Materialize.toast("" + obj, 3000);
                            $("#modalActualizarNeg").modal('close');
                            $("#tbodynegocios").empty();
                            cargarNegocios();
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
                        window.location = "<?php echo base_url(); ?>";
                    });
                });

                function cargarUsuarios() {
                    var url = "<?php echo site_url(); ?>/getUsu";
                    $("#tbodyusuarios").empty();
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            var x = "<tr><td>" + o.Rut + "</td>";
                            x += "<td>" + o.Nombre + " " + o.Apellido + "</td>";
                            x += "<td>" + o.Edad + "</td>";
                            x += "<td>" + o.Correo + "</td>";
                            x += "<td>" + o.Rol + "</td>";
                            x += '<td> <button id="edit" value="' + o.Rut + "," + o.Nombre + "," + o.Apellido + "," + o.Edad + "," + o.Clave + "," + o.Correo + '" class="btn-ﬂoating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button>';
                            x += '<td> <button id="delete" value="' + o.Rut + "," + o.Rol + '" class="btn-ﬂoating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></button></ td></tr>';
                            $("#tbodyusuarios").append(x);
                        });
                    });
                }

                $("#tbodyusuarios").on("click", "#delete", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split(",");
                    $("#rutoculto").val(fila[0]);
                    $("#roloculto").val(fila[1]);
                    $("#modalEliminarUsuario").modal("open");
                });

                $("#bteliminarUsuSi").click(function () {
                    var rut = $("#rutoculto").val();
                    var rol = $("#roloculto").val();
                    if (rol == "Usuario") {
                        $.ajax({
                            url: "<?php echo site_url() ?>/eUsu",
                            type: 'POST',
                            dataType: 'json',
                            data: {"Rut": rut}
                        }).success(function (obj) {
                            Materialize.toast("" + obj, 3000);
                            $("#modalEliminar").modal("close");
                            $("#tbodyusuarios").empty();
                            cargarUsuarios();
                            $("#modalEliminarNegocio").modal('close');
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
                    } else {
                        Materialize.toast("Solo se pueden eliminar los usuarios con Rol = Usuario");
                    }
                });

                $("#tbodyusuarios").on("click", "#edit", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split(",");
                    $("#txtMUrut").val(fila[0]);
                    $("#txtMUnombre").val(fila[1]);
                    $("#txtMUapellido").val(fila[2]);
                    $("#txtMUedad").val(fila[3]);
                    $("#txtMUclave").val(fila[4]);
                    $("#txtMUcorreo").val(fila[5]);
                    $("#modalActualizarUsuario").modal('open');
                });

                $("#btnActualizarU").click(function () {
                    var Rut = $("#txtMUrut").val();
                    var nombre = $("#txtMUnombre").val();
                    var apellido = $("#txtMUapellido").val();
                    var clave = $("#txtMUclave").val();
                    var edad = $("#txtMUedad").val();
                    var correo = $("#txtMUcorreo").val();
                    if (nombre == "" || apellido == "" || clave == "" || edad == "" || correo == "") {
                        Materialize.toast("Faltan datos");
                    } else {
                        $.ajax({
                            url: "<?php echo site_url(); ?>/mUsu",
                            type: 'POST',
                            dataType: 'json',
                            data: {"Rut": Rut, "nombre": nombre, "apellido": apellido, "clave": clave, "edad": edad, "correo": correo}
                        }).success(function (obj) {
                            Materialize.toast("" + obj, 3000);
                            $("#modalActualizarUsuario").modal('close');
                            $("#tbodyusuarios").empty();
                            cargarUsuarios();
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

            });
        </script>

    </body>

</html>