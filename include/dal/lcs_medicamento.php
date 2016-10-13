<?php
$dalTablelcs_medicamento = array();
$dalTablelcs_medicamento["idMedicamento"] = array("type"=>3,"varname"=>"idMedicamento");
$dalTablelcs_medicamento["TipoMedicamento"] = array("type"=>200,"varname"=>"TipoMedicamento");
$dalTablelcs_medicamento["NombreMed"] = array("type"=>200,"varname"=>"NombreMed");
$dalTablelcs_medicamento["dias"] = array("type"=>16,"varname"=>"dias");
$dalTablelcs_medicamento["Hora"] = array("type"=>134,"varname"=>"Hora");
$dalTablelcs_medicamento["Dosis"] = array("type"=>200,"varname"=>"Dosis");
$dalTablelcs_medicamento["Ingresado"] = array("type"=>135,"varname"=>"Ingresado");
$dalTablelcs_medicamento["_idEnfermedades"] = array("type"=>3,"varname"=>"_idEnfermedades");
	$dalTablelcs_medicamento["idMedicamento"]["key"]=true;
$dal_info["lcs_medicamento"]=&$dalTablelcs_medicamento;

?>