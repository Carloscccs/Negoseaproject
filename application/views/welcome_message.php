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
                    <li><a href="#modalIniciarSesion">Iniciar sesion</a></li>
                    <li><a href="#modalRegistrarse">Registrarse</a></li>
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
                        <input id="lpass" type="password" class="validate">
                        <label for="lpass">CLAVE</label>
                    </div>
                </div>
                <div class="row">
                    <input id="btnIngresar" type="button" class="waves-effect waves-light btn" value="Iniciar Sesion" />
                </div>
            </div>
        </div>

        <div id="modalRegistrarse" class="modal">
            <div class="modal-content">
                <div class="row">
                    <h3>Registro</h3>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Rut" type="text" class="validate" maxlength="9" placeholder="123456789" required="true">
                        <label for="Rut">RUT</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Nombre" type="text" class="validate" required="true">
                        <label for="Nombre">NOMBRE</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Apellido" type="text" class="validate">
                        <label for="Apellido">Apellido</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Edad" type="number" max="99" min="18" class="validate">
                        <label for="Edad">EDAD</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Clave" type="password" class="validate">
                        <label for="Clave">CLAVE</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Correo" type="text" class="validate">
                        <label for="Correo">CORREO</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>Region</label>
                        <select class="browser-default" id="selectRegion">
                            <option value="" disabled="true" selected>Seleccione</option>
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
                    <input id="btnRegistrarse" type="button" class="waves-effect waves-light btn" value="Registro" />
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
        <script>
            $(function () {
                $('.modal').modal();
                cargarRegiones();
                $("#map").googleMap({
                    zoom: 16, // Initial zoom level (optional)
                    coords: [-35.43606651, -71.62379444], // Map center (optional)
                    type: "ROADMAP" // Map type (optional)
                });
                cargarMarcadores();
                function cargarMarcadores() {
                    var url = "<?php echo site_url(); ?>/getNeg";
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            $("#map").addMarker({
                                coords: [o.latitud, o.longitud], // GPS coords
                                title: o.Nombre, // Title
                                text: "<b>"+o.tipoNegocio+" - Horario: "+o.horarioAtencion+" <a href='<?php echo site_url(); ?>/venta?id="+o.idNegocio+"' >Ir</a></b>" // HTML content
                            });
                        });
                    });

                }
                
                $("#btnBuscarProductoMapa").click(function (){
                    var Nombre = $("#producto").val();
                    $.ajax({
                        url: "<?php echo site_url();?>/busProdNegs",
                        type: 'POST',
                        dataType: 'json',
                        data: {"nombreProducto":Nombre}
                    }).success(function (obj){
                        $("#map").googleMap();
                        $.each(obj,function(i,o){
                            $("#map").addMarker({
                                coords: [o.latitud, o.longitud], // GPS coords
                                title: o.Nombre, // Title
                                text: "<b>"+o.tipoNegocio+" - Horario: "+o.horarioAtencion+" <a href='<?php echo site_url(); ?>/venta?id="+o.idNegocio+"' >Ir</a></b>" // HTML content
                            });
                        });
                    });
                });

                $("#btnIngresar").click(function () {
                    var rut = $("#lrut").val();
                    var clave = $("#lpass").val();
                    if (rut.length == 0 || clave.length == 0) {
                        Materialize.toast("RUT y clave son obligatorios");
                    } else {
                        if (rut.length < 8) {
                            Materialize.toast("RUT no valido");
                        } else {
                            $.ajax({
                                url: "<?php echo site_url(); ?>/buscaru",
                                type: 'POST',
                                dataType: 'json',
                                data: {"lrut": rut, "lpass": clave}
                            }).success(function (obj) {
                                if (obj == "Administrador") {
                                    window.location = "<?php echo site_url(); ?>/madmin";
                                } else if (obj == "Dueño") {
                                    window.location = "<?php echo site_url(); ?>/mdueno";
                                } else if (obj == "Usuario") {
                                    window.location = "<?php echo site_url(); ?>/musu";
                                } else {
                                    Materialize.toast("Datos incorrecto o usuario no existe");
                                }


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
                    }
                });

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

                $("#btnRegistrarse").click(function () {
                    var Rut = $("#Rut").val();
                    var Nombre = $("#Nombre").val();
                    var Apellido = $("#Apellido").val();
                    var Edad = $("#Edad").val();
                    var Clave = $("#Clave").val();
                    var Correo = $("#Correo").val();
                    var idRegion = $("#selectRegion").val();
                    var idProvincia = $("#selectProvincia").val();
                    var idComuna = $("#selectComuna").val();
                    if (Rut == "" || Nombre == "" || Apellido == "" || Edad == "" || Clave == "" || Correo == "" || idRegion == 0 || idProvincia == 0 || idComuna == 0) {
                        Materialize.toast("Todos los campos son obligatorios");
                    } else {
                        $.ajax({
                            url: "<?php echo site_url(); ?>/rUsuario",
                            type: 'POST',
                            dataType: 'json',
                            data: {"Rut": Rut, "Nombre": Nombre, "Apellido": Apellido, "Edad": Edad, "Clave": Clave, "Correo": Correo, "idRegion": idRegion, "idProvincia": idProvincia, "idComuna": idComuna}
                        }).success(function (obj) {
                            Materialize.toast(obj);
                            $("#modalRegistrarse").modal('close');
                        });
                    }
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