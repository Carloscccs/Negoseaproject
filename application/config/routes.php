<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['buscaru'] = 'welcome/validarUsuario';
$route['madmin'] = 'welcome/admin';
$route['getUs'] = 'welcome/getUsuario';
$route['getNeg'] = 'welcome/getNegocios';
$route['getRegi'] = 'welcome/getRegiones';
$route['getProvi'] = 'welcome/getProvincias';
$route['getComu'] = 'welcome/getComunas';
$route['aNegocio'] = 'welcome/agregarNegocio';
$route['eNegocio'] = 'welcome/eliminarNegocio';
$route['mNegocio'] = 'welcome/actualizarNegocio';
$route['cSesion'] = 'welcome/cerrarSesion';
$route['getUsu'] = 'welcome/getUsuarios';
$route['eUsu'] = 'welcome/eliminarUsuario';
$route['mUsu'] = 'welcome/modificarUsuario1';
$route['mdueno'] = 'welcome/dueño';
$route['getIdNego'] = 'welcome/getIdNegocio';
$route['aProducto'] = 'welcome/agregarProducto';
$route['getProduNego'] = 'welcome/getProductosNegocio';
$route['eProducto'] = 'welcome/eliminarProducto';
$route['mProducto'] = 'welcome/modificarProducto';
$route['rUsuario'] = 'welcome/registrarUsuario';
$route['musu'] = 'welcome/usuario';
$route['mUsu2'] = 'welcome/modificarUsuario2';
$route['venta'] = 'welcome/venta';
$route['getProduNego'] = 'welcome/getProductosNegocioVenta';
$route['addCarro'] = 'welcome/addCarro';
$route['getCarro'] = 'welcome/getCarro';
$route['vaciarCarro'] = 'welcome/vaciar';
$route['deleteCarro'] = 'welcome/borrarCarro';
$route['busProdNegs'] = 'welcome/buscarProductoNegocios';
$route['getDatNego'] = 'welcome/getDatosNegocio';
$route['rVenta'] = 'welcome/procesarVenta';
$route['getIDv'] = 'welcome/getIdVenta';
$route['getVN'] = 'welcome/getVentasNegocio';
$route['getDV'] = 'welcome/getDetalleVenta';
$route['setEV'] = 'welcome/cambiarEstadoVenta';
$route['getPV'] = 'welcome/getProductosVendidos';