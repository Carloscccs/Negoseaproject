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
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_W49odkPfpz2ATIC_7-oq3lRqol0l6zs"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>lib/js/jquery.googlemap.js"></script>
    </head>

    <body>
        <nav class="grey darken-2" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo"><img src="<?php echo base_url(); ?>img/logo-sin.gif" /></a>
                <ul class="right hide-on-med-and-down">
                    <li><a id="nombreUsuario">None</a></li>
                    <li><a id="cerrarsesion">Cerrar sesion</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Iniciar sesion</a></li>
                    <li><a href="#">Registrarse</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col s12 l8">
                    <div class="input-field col s4">
                        <input id="ubicacion" type="text" class="validate" >
                        <label for="ubicacion">Ubicacion</label>
                    </div>
                    <div class="col s3">
                        <p></p>
                        <a id="btnBuscar" class="waves-effect waves-light btn">Buscar</a>
                    </div>
                    <div class="input-field col s3">
                        <input id="producto" type="text" class="validate">
                        <label for="producto">Producto</label>
                    </div>
                    <div class="col s2">
                        <p></p>
                        <a id="btnBuscarProductoMapa" class="waves-effect waves-light btn">Buscar</a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div id="map" style="width: 100%; height: 600px;"></div>
                </div>
                <br><br>
            </div>
        </div>

        <div id="modalIniciarSesion" class="modal">
            <div class="modal-content">
                <div class="row">
                    <h3>Iniciar sesion</h3>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="lrut" type="text" class="validate" maxlength="9" placeholder="123456789" required="true">
                        <label for="lrut">RUT</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="lpass" type="text" class="validate">
                        <label for="lpass">CLAVE</label>
                    </div>
                </div>
                <div class="row">
                    <input id="btnIngresar" type="button" class="waves-effect waves-light btn" value="Iniciar Sesion" />
                </div>
            </div>
        </div>

        <div id="modalActualizarDatos" class="modal">
            <div class="modal-content">
                <div class="row">
                    <h3>Modificar perfil</h3>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Rut" type="text" class="validate" disabled="true" maxlength="9" placeholder="123456789" required="true">
                        <label class="active" for="Rut">RUT</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label class="active" for="Nombre">NOMBRE</label>
                        <input id="Nombre" type="text" class="validate" required="true" >
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label class="active" for="Apellido">Apellido</label>
                        <input id="Apellido" type="text" class="validate">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label class="active" for="Edad">EDAD</label>
                        <input id="Edad" type="number" max="99" min="18" class="validate">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label class="active" for="Clave">CLAVE</label>
                        <input id="Clave" type="password" class="validate">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label class="active" for="Correo">CORREO</label>
                        <input id="Correo" type="text" class="validate">                       
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>Region</label>
                        <select class="browser-default" id="selectRegion">
                            <option value="0" disabled="true" selected>Seleccione</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>Provincia</label>
                        <select class="browser-default" id="selectProvincia">
                            <option value="" disabled="true" selected>Seleccione</option>
                        </select>

                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>Comuna</label>
                        <select class="browser-default" id="selectComuna">
                            <option value="" disabled="" selected>Seleccione</option>
                        </select>  
                    </div>
                </div>
                <div class="row">
                    <input id="btnActualizarDatos" type="button" class="waves-effect waves-light btn" value="Actualizar" />
                </div>
            </div>
        </div>

        <footer class="page-footer grey darken-1">
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
        <script src="<?php echo base_url(); ?>lib/js/validarRUT.js"></script>
        <script>
            $(function () {
                $('.modal').modal();
                cargarSesion();
                cargarRegiones();
                $("#map").googleMap({
                    zoom: 16, // Initial zoom level (optional)
                    coords: [-35.43606651, -71.62379444], // Map center (optional)
                    type: "ROADMAP" // Map type (optional)
                });

                $("#btnBuscar").click(function () {
                    $("#map").googleMap();
                    $("#map").addMarker({
                        coords: [-35.43611021, -71.62354767], // GPS coords
                        zoom: 16,
                        text: '<h3>Don pepe</h3> <br> TIPO: Verdureria <br> <a href="#" >Click aqui</a>' // HTML content
                    });
                });

                cargarMarcadores();
                function cargarMarcadores() {
                    var url = "<?php echo site_url(); ?>/getNeg";
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            $("#map").addMarker({
                                coords: [o.latitud, o.longitud], // GPS coords
                                title: o.Nombre, // Title
                                text: "<b>" + o.tipoNegocio + " - Horario: " + o.horarioAtencion + " <a href='<?php echo site_url(); ?>/venta?id=" + o.idNegocio + "' >Ir</a></b>" // HTML content
                            });
                        });
                    });

                }

                $("#btnBuscarProductoMapa").click(function () {
                    var Nombre = $("#producto").val();
                    $.ajax({
                        url: "<?php echo site_url(); ?>/busProdNegs",
                        type: 'POST',
                        dataType: 'json',
                        data: {"nombreProducto": Nombre}
                    }).success(function (obj) {
                        $("#map").googleMap();
                        $.each(obj, function (i, o) {
                            $("#map").addMarker({
                                coords: [o.latitud, o.longitud], // GPS coords
                                title: o.Nombre, // Title
                                text: "<b>" + o.tipoNegocio + " - Horario: " + o.horarioAtencion + " <a href='<?php echo site_url(); ?>/venta?id=" + o.idNegocio + "' >Ir</a></b>" // HTML content
                            });
                        });
                    });
                });

                function cargarSesion() {
                    var url = "<?php echo site_url(); ?>/getUs";
                    $("#nombreUsuario").empty();
                    $.getJSON(url, function (res) {
                        var x = res.Nombre + " " + res.Apellido;
                        $("#nombreUsuario").append(x);
                    });
                }

                function cargarRegiones() {
                    var url = "<?php echo site_url(); ?>/getRegi";
                    $("#selectProvincia").prop('disabled', true);
                    $("#selectComuna").prop('disabled', true);
                    $("#selectProvincia").empty();
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
                        $("#selectProvincia").append("<option value='0' disabled='true' selected >Seleccione</option>");
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
                        $("#selectComuna").append("<option value='0' disabled='true' selected >Seleccione</option>");
                        $.each(obj, function (i, o) {
                            var x = "<option value='" + o.id + "'>" + o.nombre + "</option>";
                            $("#selectComuna").append(x);
                        });
                    });
                });

                $("#nombreUsuario").click(function () {
                    var url = "<?php echo site_url(); ?>/getUs";
                    $.getJSON(url, function (res) {
                        $("#Rut").val(res["Rut"]);
                        $("#Nombre").val(res["Nombre"]);
                        $("#Apellido").val(res["Apellido"]);
                        $("#Edad").val(res["Edad"]);
                        $("#Clave").val(res["Clave"]);
                        $("#Correo").val(res["Correo"]);

                        $("#modalActualizarDatos").modal('open');
                    });
                });

                $("#btnActualizarDatos").click(function () {
                    var Rut = $("#Rut").val();
                    var Nombre = $("#Nombre").val();
                    var Apellido = $("#Apellido").val();
                    var Edad = $("#Edad").val();
                    var Clave = $("#Clave").val();
                    var Correo = $("#Correo").val();
                    var idRegion = $("#selectRegion").val();
                    var idProvincia = $("#selectRegion").val();
                    var idComuna = $("#selectRegion").val();
                    if (Nombre == "" || Apellido == "" || Edad <= 0 || Clave == "" || Correo == "") {
                        Materialize.toast("Todos los datos son obligatorios");
                    } else {
                        if (idRegion == null || idProvincia == null || idComuna == null) {
                            Materialize.toast("Actualize sus datos geograficos");
                        } else {
                            $.ajax({
                                url: "<?php echo site_url(); ?>/mUsu2",
                                type: 'POST',
                                dataType: 'json',
                                data: {"Rut": Rut, "Nombre": Nombre, "Apellido": Apellido, "Edad": Edad, "Clave": Clave, "Correo": Correo, "idRegion": idRegion, "idProvincia": idProvincia, "idComuna": idComuna}
                            }).success(function (obj) {
                                Materialize.toast(obj);
                                $("#modalActualizarDatos").modal('close');
                            });
                        }
                    }
                });

                $("#cerrarsesion").click(function () {
                    $.ajax({
                        url: "<?php echo site_url(); ?>/cSesion"
                    }).success(function (obj) {
                        window.location = "<?php echo base_url(); ?>";
                    });
                });

                $("#btnBuscar").click(function () {
                    var direccion = $("#ubicacion").val();
                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({'address': direccion}, geocodeResult);
                });

                function geocodeResult(results, status) {
                    // Verificamos el estatus

                    if (status == 'OK') {
                        // Si hay resultados encontrados, centramos y repintamos el mapa
                        // esto para eliminar cualquier pin antes puesto
                        var mapOptions = {
                            center: results[0].geometry.location,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map($("#map").get(0), mapOptions);
                        // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
                        map.fitBounds(results[0].geometry.viewport);
                    } else {
                        // En caso de no haber resultados o que haya ocurrido un error
                        // lanzamos un mensaje con el error
                        alert("Geocoding no tuvo éxito debido a: " + status);
                    }
                    cargarMarcadores();
                }

            });
        </script>

    </body>

</html>