<?php
$dalTablelcs_donaciones = array();
$dalTablelcs_donaciones["idDonaciones"] = array("type"=>3,"varname"=>"idDonaciones");
$dalTablelcs_donaciones["monto"] = array("type"=>5,"varname"=>"monto");
$dalTablelcs_donaciones["Donante"] = array("type"=>200,"varname"=>"Donante");
$dalTablelcs_donaciones["fecha"] = array("type"=>7,"varname"=>"fecha");
$dalTablelcs_donaciones["_idCentro"] = array("type"=>3,"varname"=>"_idCentro");
	$dalTablelcs_donaciones["idDonaciones"]["key"]=true;
$dal_info["lcs_donaciones"]=&$dalTablelcs_donaciones;

?>