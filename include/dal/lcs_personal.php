<?php
$dalTablelcs_personal = array();
$dalTablelcs_personal["idUsuario"] = array("type"=>3,"varname"=>"idUsuario");
$dalTablelcs_personal["Nombre"] = array("type"=>200,"varname"=>"Nombre");
$dalTablelcs_personal["Apellido"] = array("type"=>200,"varname"=>"Apellido");
$dalTablelcs_personal["Telefono"] = array("type"=>200,"varname"=>"Telefono");
$dalTablelcs_personal["Email"] = array("type"=>200,"varname"=>"Email");
$dalTablelcs_personal["celular"] = array("type"=>200,"varname"=>"celular");
$dalTablelcs_personal["Voluntario"] = array("type"=>16,"varname"=>"Voluntario");
$dalTablelcs_personal["Ingresado"] = array("type"=>135,"varname"=>"Ingresado");
$dalTablelcs_personal["_idCentro"] = array("type"=>3,"varname"=>"_idCentro");
	$dalTablelcs_personal["idUsuario"]["key"]=true;
$dal_info["lcs_personal"]=&$dalTablelcs_personal;

?>