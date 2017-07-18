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
        <nav class="grey darken-2" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo"><img src="<?php echo base_url(); ?>img/logo-sin.gif" /></a>
                <ul class="right hide-on-med-and-down">
                    <li><a id="nombreUsuario">None</a></li>
                    <li><a id="cerrarsesion">Cerrar sesion</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">No implementado</a></li>
                    <li><a href="#">No implementado</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>

        <div class="container">
            <input type="hidden" id="idNegocioOculto" />
            <div class="row">
                <div class="col s3">
                    <div class="input-field col s4">
                        <img id="imgNegocio" class="responsive-img" />
                    </div>
                </div>
                <div class="col s4">
                    <h4 id="nombreNegocio"></h4>
                    <h6 id="tipoNegocio">Minimarket</h6>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="txtNombreProducto" type="text" class="validate" placeholder="Arroz" required="true">
                            <label for="txtNombreProducto">Nombre</label>
                        </div>
                        <div class="col s6">
                            <br />
                            <input type="button" value="Buscar" id="btnBuscarProductoNegocio" class="btn" />
                        </div>
                    </div>
                    <div class="row">
                        <table>
                            <thead>
                            <th>Imagen</th><th>Nombre</th><th>Precio</th><th>Cantidad</th><th>Agregar</th>
                            </thead>
                            <tbody id="tbodyProductoNegocio"></tbody>
                        </table>
                    </div>
                </div>
                <div class="col s1"></div>
                <div class="col s5">
                    <div class="row"><h5>Tu compra</h5></div>
                    <div class="row">
                        <table>
                            <thead><th>ID</th><th>Nombre</th><th>Cantidad</th><th>Precio</th><th>Total</th><th>Eliminar</th></thead>
                        <tbody id="tbodyCarrito"></tbody>
                        </table>
                    </div>
                    <div class="row">
                        <h4 id="subTotal">$0</h4>
                    </div>
                    <div class="row">
                        <div class="s5">
                            <input type="button" value="Vaciar carro" id="btnVaciar" class="btn red" />
                        </div>
                        <div class="s5">
                            <input type="button" value="Comprar" class="btn green" id="btnVenta" />
                        </div>
                    </div>
                </div>
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
                        <input id="Clave" type="text" class="validate">
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
                    <input id="btnActualizarDatos" type="button" class="waves-effect waves-light btn" value="Registro" />
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
                cargarSesion();
                obtenerID();
                cargarDatosNegocio();
                cargarRegiones();
                cargarProductos();
                cargarCarro();

                function cargarSesion() {
                    var url = "<?php echo site_url(); ?>/getUs";
                    $("#nombreUsuario").empty();
                    $.getJSON(url, function (res) {
                        var x = res.Nombre + " " + res.Apellido;
                        $("#nombreUsuario").append(x);
                    });
                }

                function obtenerID() {
                    var strReturn = "";
                    var strHref = window.location.href;
                    var bFound = false;
                    var cmpstring = "id" + "=";
                    var cmplen = cmpstring.length;
                    if (strHref.indexOf("?") > -1) {
                        var strQueryString = strHref.substr(strHref.indexOf("?") + 1);
                        var aQueryString = strQueryString.split("&");
                        for (var iParam = 0; iParam < aQueryString.length; iParam++) {
                            if (aQueryString[iParam].substr(0, cmplen) == cmpstring) {
                                var aParam = aQueryString[iParam].split("=");
                                strReturn = aParam[1];
                                bFound = true;
                                break;
                            }
                        }
                    }
                    if (bFound == false) {
                        alert("Sin id");
                    } else {
                        $("#idNegocioOculto").val(strReturn);
                    }
                }
                
                function cargarDatosNegocio(){
                    var idNegocio = $("#idNegocioOculto").val();
                    $.ajax({
                        url: "<?php echo site_url();?>/getDatNego",
                        type: 'POST',
                        dataType: 'json',
                        data: {"idNegocio":idNegocio}
                    }).success(function (obj){
                        $("#nombreNegocio").text(obj[0].Nombre);
                        $("#tipoNegocio").text(obj[0].tipoNegocio);
                        $("#imgNegocio").attr('src',obj[0].rutaImg);
                    });
                }
                
                function cargarProductos(){
                    var idNegocio = $("#idNegocioOculto").val();
                    $("#tbodyProductoNegocio").empty();
                    $.ajax({
                        url: "<?php echo site_url();?>/getProduNego",
                        type: 'POST',
                        dataType: 'json',
                        data: {"idNegocio":idNegocio}
                    }).success(function (obj){
                        $.each(obj, function (i, o){
                            var x = "<tr><td><img src='"+o.rutaImg+"' class='responsive-img' /></td><td>"+o.Nombre+"</td><td>"+o.Precio+"</td><td><input type='number' value='1' min='1' width='1em' id='txtID"+o.idProducto+"' /></td><td><button id='add' value='"+o.idProducto+","+o.Nombre+","+o.Precio+"' class='btn-ﬂoating btn-large waves-effect waves-light green'><i class='material-icons'>play_arrow</i></button></td></tr>";
                            $("#tbodyProductoNegocio").append(x);
                        });
                    });
                }
                
                $("#tbodyProductoNegocio").on("click", "#add", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split(",");
                    var idProducto = fila[0];
                    var Nombre = fila[1];
                    var Precio = fila[2];
                    var Cantidad = $("#txtID"+idProducto).val();
                    $.ajax({
                        url: "<?php echo site_url();?>/addCarro",
                        type: 'POST',
                        dataType: 'json',
                        data: {"idProducto":idProducto,"Nombre":Nombre,"Precio":Precio,"Cantidad":Cantidad}
                    }).success(function (obj){
                        Materialize.toast(obj, 3000);
                        cargarCarro();
                    });
                });
                
                $("#tbodyCarrito").on("click", "#delete", function (e) {
                    e.preventDefault();
                    var idProducto = $(this).val();
                    $.ajax({
                        url: "<?php echo site_url();?>/deleteCarro",
                        type: 'POST',
                        dataType: 'json',
                        data: {"idProducto":idProducto}
                    }).success(function (obj){
                        Materialize.toast(obj, 3000);
                        cargarCarro();
                    });
                    cargarCarro();
                });
                
                function cargarCarro(){
                    var url = "<?php echo site_url();?>/getCarro";
                    $("#tbodyCarrito").empty();
                    $.getJSON(url, function (result){
                       $.each(result, function (i,o){
                           var x = "<tr><td>"+o.idProducto+"</td><td>"+o.Nombre+"</td><td>"+o.Cantidad+"</td><td>"+o.Precio+"</td><td>"+o.Total+"</td><td><button id='delete' value='"+o.idProducto+"' class='btn-ﬂoating btn-large waves-effect waves-light red'><i class='material-icons'>delete</i></button>";
                           $("#tbodyCarrito").append(x);
                       });
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
                
                $("#btnVaciar").click(function (){
                    $.ajax({
                        url: "<?php echo site_url();?>/vaciarCarro"
                    }).success(function (obj){
                        Materialize.toast(obj,3000);
                        cargarCarro();
                    });
                });
                
                $("#btnVenta").click(function(){
                    var idNegocio = $("#idNegocioOculto").val();
                    $.ajax({
                        url: "<?php echo site_url();?>/rVenta",
                        type: 'POST',
                        dataType: 'json',
                        data: {"idNegocio":idNegocio}
                    }).success(function (obj){
                        var res = obj;
                        var fila = res.split(",");
                        alert(fila[0]);
                        alert("Se ha generado una venta asociada al ID:"+fila[1]+", anote este numero ya que con el prodra retirar sus productos");
                        window.location = "<?php echo site_url();?>/musu";
                    });
                });
                
            });
        </script>

    </body>

</html>