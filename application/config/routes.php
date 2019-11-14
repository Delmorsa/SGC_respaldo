<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/**********************************************************************************/
$route["iniciarSesion"] = "Login_controller/iniciarSesion";
$route["cerrarSesion"] = "Login_controller/Salir";

$route["Roles"] = "Usuarios_controller";
$route["guardarRol"] = "Usuarios_controller/guardarRol";
$route["actualizarRol"] = "Usuarios_controller/actualizarRol";
$route["modificarEstadoRol"] = "Usuarios_controller/modificarEstadoRol";

$route["Usuarios"] = "Usuarios_controller/usuarios";
$route["guardarUsuario"] = "Usuarios_controller/guardarUsuario";
$route["actualizarUsuario"] = "Usuarios_controller/actualizarUsuario";
$route["modificarEstadoUsuario"] = "Usuarios_controller/modificarEstadoUsuario";

$route["Perfil"] = "Usuarios_controller/perfil";
$route["actualizarPassword"] = "Usuarios_controller/actualizarPassword";
$route["actualizarDatPerfil"] = "Usuarios_controller/actualizarDatPerfil";
/*************************************************************************************/
$route["Areas"] = "Areas_controller";
$route["guardarAreas"] = "Areas_controller/guardarAreas";
$route["actualizarAreas"] = "Areas_controller/actualizarAreas";
$route["Baja_AltaAreas"] = "Areas_controller/Baja_Alta";
/*************************************************************************************/
$route["Simbologia"] = "Siglas_controller";
$route["guardarSimbologia"] = "Siglas_controller/guardarSimbologia";
$route["actualizarSimbologia"] = "Siglas_controller/actualizarSimbologia";
$route["Baja_Alta"] = "Siglas_controller/Baja_Alta";
/*************************************************************************************/
$route["CategoriasAut"] = "Autorizaciones_controller";
$route["guardarAutCategoria"] = "Autorizaciones_controller/guardarAutCategoria";
$route["actualizarAutCategoria"] = "Autorizaciones_controller/actualizarAutCategoria";
$route["baja"] = "Autorizaciones_controller/baja";

$route["Permisos"] = "Autorizaciones_controller/indexCrear";
$route["guardarPermisos"] = "Autorizaciones_controller/guardarPermisos";
$route["actualizarPermisos"] = "Autorizaciones_controller/actualizarPermisos";
$route["bajaPermisos"] = "Autorizaciones_controller/bajaPermisos";


$route["Asignar_Permiso"] = "Autorizaciones_controller/indexAsignar";
$route["asignarPermiso"] = "Autorizaciones_controller/asignarPermiso";
$route["getAuthAsig/(:any)"] = "Autorizaciones_controller/getAuthAsig/$1";
/*************************************************************************************/
$route["CatReportes"] = "CategoriaReporte_controller";

/*************************************************************************************/

$route["guardarCatRep"] = "CategoriaReporte_controller/guardarCatRep";
$route["actualizarCatRep"] = "CategoriaReporte_controller/actualizarCatRep";
$route["Baja_AltaCatRep"] = "CategoriaReporte_controller/Baja_AltaCatRep";
/*************************************************************************************/
/*************************************************************************************/

$route["Maquinas"] = "Maquinas_controller";
$route["guardarMaquina"] = "Maquinas_controller/guardarMaquina";
$route["actualizarMaquina"] = "Maquinas_controller/actualizarMaquina";
$route["BajaAlta"] = "Maquinas_controller/BajaAlta";

/*************************************************************************************/

$route["Informes"] = "Informes_controller";
$route["reporte_2"] = "Informes/racymp_controller";

$route["reporte_4"] = "Informes/Mcpe_controller";
$route["nuevoMCPE"] = "Informes/Mcpe_controller/nuevoMCPE";
$route["guardarMcpeVerificPeso"] = "Informes/Mcpe_controller/guardarMcpeVerificPeso";
$route["guardarMcpeVerificCaract"] = "Informes/Mcpe_controller/guardarMcpeVerificCaract";
$route["getMcpePesoBasculaAjax/(:any)"] = "Informes/Mcpe_controller/getMcpePesoBasculaAjax/$1";
$route["getMcpeCaractCalidadAjax/(:any)"] = "Informes/Mcpe_controller/getMcpeCaractCalidadAjax/$1";
$route["darDeBajaMcpe"] = "Informes/Mcpe_controller/darDeBaja";
$route["editarMcpePeso/(:any)"] = "Informes/Mcpe_controller/editarMcpePeso/$1";
$route["actualizarMcpeVerificPeso"] = "Informes/Mcpe_controller/actualizarMcpeVerificPeso";
$route["editarMcpeCaract/(:any)"] = "Informes/Mcpe_controller/editarMcpeCaract/$1";
$route["actualizarMcpeVerificCaract"] = "Informes/Mcpe_controller/actualizarMcpeVerificCaract";


$route["reporte_6"] = "Informes/CNS_controller";
$route["nuevoCNS"] = "Informes/CNS_controller/nuevoCNS";
$route["guardarCNS"] = "Informes/CNS_controller/guardarCNS";
$route["mostrarCNSDetalle/(:any)"] = "Informes/CNS_controller/mostrarCNSDetalle/$1";
$route["editarCNS/(:any)"] = "Informes/CNS_controller/editarCNS/$1";
$route["actualizarCNS"] = "Informes/CNS_controller/actualizarCNS";
$route["BajaAltaCNS"] = "Informes/CNS_controller/BajaAltaCNS";


/********************ALDER*****************************/
$route["monitoreos"] = "Monitoreo_controller/index";
$route["crearmonitoreo"] = "Monitoreo_controller/crearmonitoreo";
$route["reporte_7"] = "Informes/Rvpbp_controller";
$route["nuevorvpbp"] = "Informes/Rvpbp_controller/nuevorvpbp";
$route["guardarRVPBP"] = "Informes/Rvpbp_controller/guardarRVPBP";
$route["BajaAltaRVPBP"] = "Informes/Rvpbp_controller/BajaAltaRVPBP";
$route["verRVPBP/(:any)"] = "Informes/Rvpbp_controller/verRVPBP/$1";
$route["editarRVPBP/(:any)"] = "Informes/Rvpbp_controller/editarRVPBP/$1";
$route["guardareditarRVPBP"] = "Informes/Rvpbp_controller/guardareditarRVPBP";
$route["imprimirRVPBP/(:any)"] = "Informes/Rvpbp_controller/imprimirRVPBP/$1";
/*************************************************************************************/
$route["reporte_8"] = "Informes/Veced_controller";
$route["nuevoVECED"] = "Informes/Veced_controller/nuevoVECED";
$route["getProductosSAP"] = "Informes/Veced_controller/getProductosSAP";
$route["guardarVeced"] = "Informes/Veced_controller/guardarVeced";
$route["mostrarVecedAjax/(:any)"] = "Informes/Veced_controller/mostrarVecedAjax/$1";
$route["BajaAltaVeced"] = "Informes/Veced_controller/BajaAltaVeced";
$route["editarVeced/(:any)"] = "Informes/Veced_controller/editarVeced/$1";
$route["actualizarVeced"] = "Informes/Veced_controller/actualizarVeced";
/***********************************************************************************/
$route["reporte_9"] = "Informes/Pccn3_controller";
$route["nuevoPCCN3"] = "Informes/Pccn3_controller/nuevoPCCN3";
$route["guardarPccn3"] = "Informes/Pccn3_controller/guardarPccn3";
$route["mostrarPccn3Ajax/(:any)"] = "Informes/Pccn3_controller/mostrarPccn3Ajax/$1";
$route["BajaAltaPccn3"] = "Informes/Pccn3_controller/BajaAltaPccn3";
$route["editarPccn3/(:any)"] = "Informes/Pccn3_controller/editarPccn3/$1";
$route["actualizarPccn3"] = "Informes/Pccn3_controller/actualizarPccn3";
/*************************************************************************************/
$route["reporte_10"] = "Informes/CPP_controller";
$route["nuevocpp"] = "Informes/CPP_controller/nuevocpp";
$route["getGramos/(:any)"] = "Informes/CPP_controller/getGramos/$1";
$route["getMuestra/(:any)/(:any)/(:any)/(:any)"] = "Informes/CPP_controller/getMuestra/$1/$2/$3/$4";
$route["guardarCPP"] = "Informes/CPP_controller/guardarCPP";
$route["editarCPP/(:any)"] = "Informes/CPP_controller/editarCPP/$1";
$route["verCPP/(:any)"] = "Informes/CPP_controller/verCPP/$1";
$route["imprimirCPP/(:any)"] = "Informes/CPP_controller/imprimirCPP/$1";
$route["guardarEditarCPP"] = "Informes/CPP_controller/guardarEditarCPP";
/*******************************************************************************************/
$route["reporte_11"] = "Informes/Eepdc_controller";
$route["crearEepdc"] = "Informes/Eepdc_controller/crearEepdc";
$route["guardarEepdc"] = "Informes/Eepdc_controller/guardarEepdc";
$route["actualizarEepdc"] = "Informes/Eepdc_controller/actualizarEepdc";
$route["BajaEepdc"] = "Informes/Eepdc_controller/darDeBaja";
$route["detalleEepdcAjax/(:any)"] = "Informes/Eepdc_controller/detalleEepdcAjax/$1";
$route["getEepdcByID/(:any)"] = "Informes/Eepdc_controller/getEepdcByID/$1";
/*******************************************************************************************/
$route["reporte_13"] = "Informes/Mdtde_controller";
$route["crearMdtde"] = "Informes/Mdtde_controller/crearMdtde";
$route["guardarMdtde"] = "Informes/Mdtde_controller/guardarMdtde";
$route["guardarMdtde1"] = "Informes/Mdtde_controller/guardarMdtde1";
$route["getMdtdeAjax/(:any)"] = "Informes/Mdtde_controller/getMdtdeAjax/$1";
$route["bajaMdtde"] = "Informes/Mdtde_controller/bajaMdtde";
$route["editarDetalle/(:any)"] = "Informes/Mdtde_controller/editarDetalle/$1";
$route["updateDetalle"] = "Informes/Mdtde_controller/updateDetalle";
$route["editarmdtde/(:any)"] = "Informes/Mdtde_controller/editarmdtde/$1";
/*******************************************************************************************/
$route["reporte_14"] = "Informes/Cdt_controller";
$route["crearCdt"] = "Informes/Cdt_controller/crearCdt";
$route["guardarCdt"] = "Informes/Cdt_controller/guardarCdt";
$route["getCdtAjax/(:any)"] = "Informes/Cdt_controller/getCdtAjax/$1";
$route["bajaCdt"] = "Informes/Cdt_controller/bajaCdt";
$route["editarDetalle/(:any)"] = "Informes/Cdt_controller/editarDetalle/$1";
$route["updateDetalle"] = "Informes/Cdt_controller/updateDetalle";
$route["editarCdt/(:any)"] = "Informes/Cdt_controller/editarCdt/$1";
$route["guardarCdt1"] = "Informes/Cdt_controller/guardarCdt1";
