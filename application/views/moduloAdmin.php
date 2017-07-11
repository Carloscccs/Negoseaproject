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
                    <li><a href="">Cerrar sesion</a></li>
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
                    <h3>Agregar negocio</h3>
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
                                    <input id="txtrutDueño" type="text" class="validate">
                                    <label for="txtrutDueño">Rut dueño</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="txtHorario" type="text" class="validate">
                                    <label for="txtHorario">Horario</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="file-field input-field s12">
                                    <div class="btn">
                                        <span>Foto</span>
                                        <input type="file">
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
                                        <option value="0" selected>Region x</option>
                                    </select>
                                </div>
                                <div class="col s4">
                                    <label>Provincia</label>
                                    <select class="browser-default" id="selectProvincia">
                                        <option value="0" selected>Provincia x</option>
                                    </select>

                                </div>
                                <div class="col s4">
                                    <label>Comuna</label>
                                    <select class="browser-default">
                                        <option value="0" selected>Comuna x</option>
                                    </select>  
                                </div>
                            </div>
                            <div class="row">
                                <input type="button" class="waves-effect waves-light btn light-green accent-3 s12" value="Agregar negocio"/>
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
                            <thead><th>Nombre</th><th>Dueño</th><th>Ubicacion</th><th>Horario</th><th>Tipo</th><th>Modificar</th><th>Eliminar</th></thead>
                            <tbody id="tbodynegocios"></tbody>
                        </table>
                    </div>
                </div>
                <div id="test2" class="col s12"><h1>Usuarios</h1></div>

            </div>
        </div>


        <footer class="page-footer teal lighten-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">NegoSea</h5>
                        <p class="grey-text text-lighten-4">Un empresa bla bla bla bla</p>


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
                cargarSesion();
                cargarNegocios();
                cargarRegiones();
                function cargarSesion() {
                    var url = "<?php echo site_url(); ?>/getUs";
                    $("#NombreUsuario").empty();
                    $.getJSON(url, function (res) {
                        var x = res.Nombre + " " + res.Apellido;
                        $("#NombreUsuario").append(x);
                    });
                }

                function cargarNegocios() {
                    var url = "<?php echo site_url(); ?>/verNego";
                    $("#tbodynegocios").empty();
                    $.getJSON(url, function (res) {
                        if (res != null) {
                            $.each(res, function (i, o) {
                                var x = "<tr><td>" + o.Nombre + "</td>";
                                x += "<td>" + o.rutUsuario + "</td>";
                                x += "<td>" + o.latitud + "<br>" + o.longitud + "</td>";
                                x += "<td>" + o.tipoNegocio + "</td>";
                                x += '<td> <button id="edit" value="' + o.idNegocio + "," + o.Nombre + "," + o.rutUsuario + "," + o.latitud + "," + o.longitud + "," + o.tipoNegocio + '" class="btn-ﬂoating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button>';
                                x += '<td> <button id="delete" value="' + o.idNegocio + '" class="btn-ﬂoating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></button></ td></tr>';
                            });
                        }
                    });
                }

                function cargarRegiones() {
                    var url = "<?php echo site_url(); ?>/getRegi";
                    $("#selectRegion").empty();
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
                        $("#selectProvincia").empty();
                        $.each(obj, function (i, o) {
                            var x = "<option value='" + o.id + "'>" + o.nombre + "</option>";
                            $("#selectProvincia").append(x);
                        });
                    });
                })


            });
        </script>

    </body>

</html>