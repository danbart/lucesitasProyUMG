<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["lcs_centro"]["lcs_personal._idCentro"]["edit"] = array("table" => "lcs_personal", "field" => "_idCentro", "page" => "edit");
	$lookupTableLinks["lcs_centro"]["lcs_estudiante._idCentro"]["edit"] = array("table" => "lcs_estudiante", "field" => "_idCentro", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_terapias._idEstudiante"]["edit"] = array("table" => "lcs_terapias", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_terapista"]["lcs_terapias._idterapista"]["edit"] = array("table" => "lcs_terapias", "field" => "_idterapista", "page" => "edit");
	$lookupTableLinks["lcs_espemed"]["lcs_terapista._idEspeMed"]["edit"] = array("table" => "lcs_terapista", "field" => "_idEspeMed", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_tiposocial._idEstudiante"]["edit"] = array("table" => "lcs_tiposocial", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_transtornoalimenticio._idEstudiante"]["edit"] = array("table" => "lcs_transtornoalimenticio", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_transtornoesfinteres._idEstudiante"]["edit"] = array("table" => "lcs_transtornoesfinteres", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_trastornosuenio._idEstudiante"]["edit"] = array("table" => "lcs_trastornosuenio", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_lenguaje._idEstudiante"]["edit"] = array("table" => "lcs_lenguaje", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_historialclinico._idEstudiante"]["edit"] = array("table" => "lcs_historialclinico", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_histoiralfamiliar._idEstudiante"]["edit"] = array("table" => "lcs_histoiralfamiliar", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_enfermedades._idEstudiante"]["edit"] = array("table" => "lcs_enfermedades", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_embarazo._idEstudiante"]["edit"] = array("table" => "lcs_embarazo", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_descsocial._idEstudiante"]["edit"] = array("table" => "lcs_descsocial", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_encargado._idEstudiante"]["edit"] = array("table" => "lcs_encargado", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_estudiante"]["lcs_emociones._idEstudiante"]["edit"] = array("table" => "lcs_emociones", "field" => "_idEstudiante", "page" => "edit");
	$lookupTableLinks["lcs_enfermedades"]["lcs_medicamento._idEnfermedades"]["edit"] = array("table" => "lcs_medicamento", "field" => "_idEnfermedades", "page" => "edit");
	$lookupTableLinks["lcs_personal"]["lcs_sesion.l_idUsuario"]["edit"] = array("table" => "lcs_sesion", "field" => "l_idUsuario", "page" => "edit");
}

?>