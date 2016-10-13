<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEstudHistoClin = array();	
	$tdataEstudHistoClin[".truncateText"] = true;
	$tdataEstudHistoClin[".NumberOfChars"] = 80; 
	$tdataEstudHistoClin[".ShortName"] = "EstudHistoClin";
	$tdataEstudHistoClin[".OwnerID"] = "";
	$tdataEstudHistoClin[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelsEstudHistoClin = array();
$fieldToolTipsEstudHistoClin = array();
$pageTitlesEstudHistoClin = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsEstudHistoClin["Spanish"] = array();
	$fieldToolTipsEstudHistoClin["Spanish"] = array();
	$pageTitlesEstudHistoClin["Spanish"] = array();
	$fieldLabelsEstudHistoClin["Spanish"]["FotoRostro"] = "Foto";
	$fieldToolTipsEstudHistoClin["Spanish"]["FotoRostro"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["RelacionHermano"] = "Relacion Hermano";
	$fieldToolTipsEstudHistoClin["Spanish"]["RelacionHermano"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["RelacionCompaneros"] = "Relacion Companeros";
	$fieldToolTipsEstudHistoClin["Spanish"]["RelacionCompaneros"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["CQuinJuega"] = "Con quien Juega";
	$fieldToolTipsEstudHistoClin["Spanish"]["CQuinJuega"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["CQueJuega"] = "Con Que Juega";
	$fieldToolTipsEstudHistoClin["Spanish"]["CQueJuega"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["TipoEmocion"] = "Tipo Emocion";
	$fieldToolTipsEstudHistoClin["Spanish"]["TipoEmocion"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["CQNinio"] = "CQNinio";
	$fieldToolTipsEstudHistoClin["Spanish"]["CQNinio"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["FProblematico"] = "FProblematico";
	$fieldToolTipsEstudHistoClin["Spanish"]["FProblematico"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["DuermeSolo"] = "Duerme Solo";
	$fieldToolTipsEstudHistoClin["Spanish"]["DuermeSolo"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["ComparteCuarto"] = "Comparte Cuarto";
	$fieldToolTipsEstudHistoClin["Spanish"]["ComparteCuarto"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["ParineteIgual"] = "Parinete Igual";
	$fieldToolTipsEstudHistoClin["Spanish"]["ParineteIgual"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["TSocial"] = "Tipo Social";
	$fieldToolTipsEstudHistoClin["Spanish"]["TSocial"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["Balbucea"] = "Balbucea";
	$fieldToolTipsEstudHistoClin["Spanish"]["Balbucea"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["Edad1Palabra"] = "Edad primera Palabra";
	$fieldToolTipsEstudHistoClin["Spanish"]["Edad1Palabra"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["EdadMesVocalizo"] = "Edad Mes Vocalizo";
	$fieldToolTipsEstudHistoClin["Spanish"]["EdadMesVocalizo"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["AdaptSocial"] = "Adaptación Social";
	$fieldToolTipsEstudHistoClin["Spanish"]["AdaptSocial"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsEstudHistoClin["Spanish"]["Documento"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstudHistoClin["Spanish"]["Estudiante"] = "";
	$fieldLabelsEstudHistoClin["Spanish"]["edad"] = "Edad";
	$fieldToolTipsEstudHistoClin["Spanish"]["edad"] = "";
	if (count($fieldToolTipsEstudHistoClin["Spanish"]))
		$tdataEstudHistoClin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEstudHistoClin[""] = array();
	$fieldToolTipsEstudHistoClin[""] = array();
	$pageTitlesEstudHistoClin[""] = array();
	$fieldLabelsEstudHistoClin[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsEstudHistoClin[""]["FotoRostro"] = "";
	$fieldLabelsEstudHistoClin[""]["RelacionHermano"] = "Relacion Hermano";
	$fieldToolTipsEstudHistoClin[""]["RelacionHermano"] = "";
	$fieldLabelsEstudHistoClin[""]["RelacionCompaneros"] = "Relacion Companeros";
	$fieldToolTipsEstudHistoClin[""]["RelacionCompaneros"] = "";
	$fieldLabelsEstudHistoClin[""]["CQuinJuega"] = "CQuin Juega";
	$fieldToolTipsEstudHistoClin[""]["CQuinJuega"] = "";
	$fieldLabelsEstudHistoClin[""]["CQueJuega"] = "CQue Juega";
	$fieldToolTipsEstudHistoClin[""]["CQueJuega"] = "";
	$fieldLabelsEstudHistoClin[""]["TipoEmocion"] = "Tipo Emocion";
	$fieldToolTipsEstudHistoClin[""]["TipoEmocion"] = "";
	$fieldLabelsEstudHistoClin[""]["CQNinio"] = "CQNinio";
	$fieldToolTipsEstudHistoClin[""]["CQNinio"] = "";
	$fieldLabelsEstudHistoClin[""]["FProblematico"] = "FProblematico";
	$fieldToolTipsEstudHistoClin[""]["FProblematico"] = "";
	$fieldLabelsEstudHistoClin[""]["DuermeSolo"] = "Duerme Solo";
	$fieldToolTipsEstudHistoClin[""]["DuermeSolo"] = "";
	$fieldLabelsEstudHistoClin[""]["ComparteCuarto"] = "Comparte Cuarto";
	$fieldToolTipsEstudHistoClin[""]["ComparteCuarto"] = "";
	$fieldLabelsEstudHistoClin[""]["ParineteIgual"] = "Parinete Igual";
	$fieldToolTipsEstudHistoClin[""]["ParineteIgual"] = "";
	$fieldLabelsEstudHistoClin[""]["TSocial"] = "TSocial";
	$fieldToolTipsEstudHistoClin[""]["TSocial"] = "";
	$fieldLabelsEstudHistoClin[""]["Balbucea"] = "Balbucea";
	$fieldToolTipsEstudHistoClin[""]["Balbucea"] = "";
	$fieldLabelsEstudHistoClin[""]["Edad1Palabra"] = "Edad1Palabra";
	$fieldToolTipsEstudHistoClin[""]["Edad1Palabra"] = "";
	$fieldLabelsEstudHistoClin[""]["EdadMesVocalizo"] = "Edad Mes Vocalizo";
	$fieldToolTipsEstudHistoClin[""]["EdadMesVocalizo"] = "";
	$fieldLabelsEstudHistoClin[""]["AdaptSocial"] = "Adapt Social";
	$fieldToolTipsEstudHistoClin[""]["AdaptSocial"] = "";
	$fieldLabelsEstudHistoClin[""]["Documento"] = "Documento";
	$fieldToolTipsEstudHistoClin[""]["Documento"] = "";
	$fieldLabelsEstudHistoClin[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstudHistoClin[""]["Estudiante"] = "";
	$fieldLabelsEstudHistoClin[""]["edad"] = "Edad";
	$fieldToolTipsEstudHistoClin[""]["edad"] = "";
	if (count($fieldToolTipsEstudHistoClin[""]))
		$tdataEstudHistoClin[".isUseToolTips"] = true;
}
	
	
	$tdataEstudHistoClin[".NCSearch"] = true;



$tdataEstudHistoClin[".shortTableName"] = "EstudHistoClin";
$tdataEstudHistoClin[".nSecOptions"] = 0;
$tdataEstudHistoClin[".recsPerRowList"] = 1;
$tdataEstudHistoClin[".mainTableOwnerID"] = "";
$tdataEstudHistoClin[".moveNext"] = 1;
$tdataEstudHistoClin[".nType"] = 2;

$tdataEstudHistoClin[".strOriginalTableName"] = "lcs_estudiante";




$tdataEstudHistoClin[".showAddInPopup"] = false;

$tdataEstudHistoClin[".showEditInPopup"] = false;

$tdataEstudHistoClin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEstudHistoClin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEstudHistoClin[".fieldsForRegister"] = array();

$tdataEstudHistoClin[".listAjax"] = false;

	$tdataEstudHistoClin[".audit"] = false;

	$tdataEstudHistoClin[".locking"] = false;


$tdataEstudHistoClin[".list"] = true;

$tdataEstudHistoClin[".inlineAdd"] = true;


$tdataEstudHistoClin[".exportTo"] = true;

$tdataEstudHistoClin[".printFriendly"] = true;


$tdataEstudHistoClin[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataEstudHistoClin[".searchSaving"] = false;
//

$tdataEstudHistoClin[".showSearchPanel"] = true;
		$tdataEstudHistoClin[".flexibleSearch"] = true;		

if (isMobile())
	$tdataEstudHistoClin[".isUseAjaxSuggest"] = false;
else 
	$tdataEstudHistoClin[".isUseAjaxSuggest"] = true;




$tdataEstudHistoClin[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEstudHistoClin[".isUseTimeForSearch"] = false;



$tdataEstudHistoClin[".useDetailsPreview"] = true;


$tdataEstudHistoClin[".allSearchFields"] = array();
$tdataEstudHistoClin[".filterFields"] = array();
$tdataEstudHistoClin[".requiredSearchFields"] = array();

$tdataEstudHistoClin[".allSearchFields"][] = "Estudiante";
	$tdataEstudHistoClin[".allSearchFields"][] = "FotoRostro";
	$tdataEstudHistoClin[".allSearchFields"][] = "edad";
	$tdataEstudHistoClin[".allSearchFields"][] = "RelacionHermano";
	$tdataEstudHistoClin[".allSearchFields"][] = "RelacionCompaneros";
	$tdataEstudHistoClin[".allSearchFields"][] = "CQuinJuega";
	$tdataEstudHistoClin[".allSearchFields"][] = "CQueJuega";
	$tdataEstudHistoClin[".allSearchFields"][] = "TipoEmocion";
	$tdataEstudHistoClin[".allSearchFields"][] = "CQNinio";
	$tdataEstudHistoClin[".allSearchFields"][] = "FProblematico";
	$tdataEstudHistoClin[".allSearchFields"][] = "DuermeSolo";
	$tdataEstudHistoClin[".allSearchFields"][] = "ComparteCuarto";
	$tdataEstudHistoClin[".allSearchFields"][] = "ParineteIgual";
	$tdataEstudHistoClin[".allSearchFields"][] = "TSocial";
	$tdataEstudHistoClin[".allSearchFields"][] = "Balbucea";
	$tdataEstudHistoClin[".allSearchFields"][] = "Edad1Palabra";
	$tdataEstudHistoClin[".allSearchFields"][] = "EdadMesVocalizo";
	$tdataEstudHistoClin[".allSearchFields"][] = "AdaptSocial";
	$tdataEstudHistoClin[".allSearchFields"][] = "Documento";
	

$tdataEstudHistoClin[".googleLikeFields"] = array();
$tdataEstudHistoClin[".googleLikeFields"][] = "Estudiante";
$tdataEstudHistoClin[".googleLikeFields"][] = "FotoRostro";
$tdataEstudHistoClin[".googleLikeFields"][] = "edad";
$tdataEstudHistoClin[".googleLikeFields"][] = "RelacionHermano";
$tdataEstudHistoClin[".googleLikeFields"][] = "RelacionCompaneros";
$tdataEstudHistoClin[".googleLikeFields"][] = "CQuinJuega";
$tdataEstudHistoClin[".googleLikeFields"][] = "CQueJuega";
$tdataEstudHistoClin[".googleLikeFields"][] = "TipoEmocion";
$tdataEstudHistoClin[".googleLikeFields"][] = "CQNinio";
$tdataEstudHistoClin[".googleLikeFields"][] = "FProblematico";
$tdataEstudHistoClin[".googleLikeFields"][] = "DuermeSolo";
$tdataEstudHistoClin[".googleLikeFields"][] = "ComparteCuarto";
$tdataEstudHistoClin[".googleLikeFields"][] = "ParineteIgual";
$tdataEstudHistoClin[".googleLikeFields"][] = "TSocial";
$tdataEstudHistoClin[".googleLikeFields"][] = "Balbucea";
$tdataEstudHistoClin[".googleLikeFields"][] = "Edad1Palabra";
$tdataEstudHistoClin[".googleLikeFields"][] = "EdadMesVocalizo";
$tdataEstudHistoClin[".googleLikeFields"][] = "AdaptSocial";
$tdataEstudHistoClin[".googleLikeFields"][] = "Documento";


$tdataEstudHistoClin[".advSearchFields"] = array();
$tdataEstudHistoClin[".advSearchFields"][] = "Estudiante";
$tdataEstudHistoClin[".advSearchFields"][] = "FotoRostro";
$tdataEstudHistoClin[".advSearchFields"][] = "edad";
$tdataEstudHistoClin[".advSearchFields"][] = "RelacionHermano";
$tdataEstudHistoClin[".advSearchFields"][] = "RelacionCompaneros";
$tdataEstudHistoClin[".advSearchFields"][] = "CQuinJuega";
$tdataEstudHistoClin[".advSearchFields"][] = "CQueJuega";
$tdataEstudHistoClin[".advSearchFields"][] = "TipoEmocion";
$tdataEstudHistoClin[".advSearchFields"][] = "CQNinio";
$tdataEstudHistoClin[".advSearchFields"][] = "FProblematico";
$tdataEstudHistoClin[".advSearchFields"][] = "DuermeSolo";
$tdataEstudHistoClin[".advSearchFields"][] = "ComparteCuarto";
$tdataEstudHistoClin[".advSearchFields"][] = "ParineteIgual";
$tdataEstudHistoClin[".advSearchFields"][] = "TSocial";
$tdataEstudHistoClin[".advSearchFields"][] = "Balbucea";
$tdataEstudHistoClin[".advSearchFields"][] = "Edad1Palabra";
$tdataEstudHistoClin[".advSearchFields"][] = "EdadMesVocalizo";
$tdataEstudHistoClin[".advSearchFields"][] = "AdaptSocial";
$tdataEstudHistoClin[".advSearchFields"][] = "Documento";

$tdataEstudHistoClin[".tableType"] = "report";

$tdataEstudHistoClin[".printerPageOrientation"] = 0;
$tdataEstudHistoClin[".nPrinterPageScale"] = 100;

$tdataEstudHistoClin[".nPrinterSplitRecords"] = 40;

$tdataEstudHistoClin[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataEstudHistoClin[".reportPrintPartitionType"] = 0;	
$tdataEstudHistoClin[".reportPrintGroupsPerPage"] = 3;	
$tdataEstudHistoClin[".lowGroup"] = 1;

$tdataEstudHistoClin[".reportGroupFields"] = true;
$tdataEstudHistoClin[".pageSize"] = 5;
$tdataEstudHistoClin[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataEstudHistoClin[".reportGroupFieldsData"] = $reportGroupFields;




$tdataEstudHistoClin[".reportPageSummary"] = true;


$tdataEstudHistoClin[".repShowDet"] = true;

$tdataEstudHistoClin[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEstudHistoClin[".strOrderBy"] = $tstrOrderBy;

$tdataEstudHistoClin[".orderindexes"] = array();

$tdataEstudHistoClin[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_descsocial.RelacionHermano,  lcs_descsocial.RelacionCompaneros,  lcs_descsocial.CQuinJuega,  lcs_descsocial.CQueJuega,  lcs_emociones.TipoEmocion,  lcs_histoiralfamiliar.CQNinio,  lcs_histoiralfamiliar.FProblematico,  lcs_histoiralfamiliar.DuermeSolo,  lcs_histoiralfamiliar.ComparteCuarto,  lcs_histoiralfamiliar.ParineteIgual,  lcs_tiposocial.TSocial,  lcs_lenguaje.Balbucea,  lcs_lenguaje.Edad1Palabra,  lcs_lenguaje.EdadMesVocalizo,  lcs_lenguaje.AdaptSocial,  lcs_historialclinico.Documento";
$tdataEstudHistoClin[".sqlFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_descsocial ON lcs_estudiante.idEstudiante = lcs_descsocial.`_idEstudiante`  LEFT OUTER JOIN lcs_emociones ON lcs_estudiante.idEstudiante = lcs_emociones.`_idEstudiante`  LEFT OUTER JOIN lcs_histoiralfamiliar ON lcs_estudiante.idEstudiante = lcs_histoiralfamiliar.`_idEstudiante`  LEFT OUTER JOIN lcs_lenguaje ON lcs_estudiante.idEstudiante = lcs_lenguaje.`_idEstudiante`  LEFT OUTER JOIN lcs_tiposocial ON lcs_estudiante.idEstudiante = lcs_tiposocial.`_idEstudiante`  LEFT OUTER JOIN lcs_historialclinico ON lcs_estudiante.idEstudiante = lcs_historialclinico.`_idEstudiante`";
$tdataEstudHistoClin[".sqlWhereExpr"] = "";
$tdataEstudHistoClin[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEstudHistoClin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEstudHistoClin[".arrGroupsPerPage"] = $arrGPP;

$tdataEstudHistoClin[".highlightSearchResults"] = true;

$tableKeysEstudHistoClin = array();
$tdataEstudHistoClin[".Keys"] = $tableKeysEstudHistoClin;

$tdataEstudHistoClin[".listFields"] = array();
$tdataEstudHistoClin[".listFields"][] = "Estudiante";
$tdataEstudHistoClin[".listFields"][] = "FotoRostro";
$tdataEstudHistoClin[".listFields"][] = "edad";
$tdataEstudHistoClin[".listFields"][] = "RelacionHermano";
$tdataEstudHistoClin[".listFields"][] = "RelacionCompaneros";
$tdataEstudHistoClin[".listFields"][] = "CQuinJuega";
$tdataEstudHistoClin[".listFields"][] = "CQueJuega";
$tdataEstudHistoClin[".listFields"][] = "TipoEmocion";
$tdataEstudHistoClin[".listFields"][] = "CQNinio";
$tdataEstudHistoClin[".listFields"][] = "FProblematico";
$tdataEstudHistoClin[".listFields"][] = "DuermeSolo";
$tdataEstudHistoClin[".listFields"][] = "ComparteCuarto";
$tdataEstudHistoClin[".listFields"][] = "ParineteIgual";
$tdataEstudHistoClin[".listFields"][] = "TSocial";
$tdataEstudHistoClin[".listFields"][] = "Balbucea";
$tdataEstudHistoClin[".listFields"][] = "Edad1Palabra";
$tdataEstudHistoClin[".listFields"][] = "EdadMesVocalizo";
$tdataEstudHistoClin[".listFields"][] = "AdaptSocial";
$tdataEstudHistoClin[".listFields"][] = "Documento";

$tdataEstudHistoClin[".hideMobileList"] = array();


$tdataEstudHistoClin[".viewFields"] = array();
$tdataEstudHistoClin[".viewFields"][] = "Estudiante";
$tdataEstudHistoClin[".viewFields"][] = "FotoRostro";
$tdataEstudHistoClin[".viewFields"][] = "edad";
$tdataEstudHistoClin[".viewFields"][] = "RelacionHermano";
$tdataEstudHistoClin[".viewFields"][] = "RelacionCompaneros";
$tdataEstudHistoClin[".viewFields"][] = "CQuinJuega";
$tdataEstudHistoClin[".viewFields"][] = "CQueJuega";
$tdataEstudHistoClin[".viewFields"][] = "TipoEmocion";
$tdataEstudHistoClin[".viewFields"][] = "CQNinio";
$tdataEstudHistoClin[".viewFields"][] = "FProblematico";
$tdataEstudHistoClin[".viewFields"][] = "DuermeSolo";
$tdataEstudHistoClin[".viewFields"][] = "ComparteCuarto";
$tdataEstudHistoClin[".viewFields"][] = "ParineteIgual";
$tdataEstudHistoClin[".viewFields"][] = "TSocial";
$tdataEstudHistoClin[".viewFields"][] = "Balbucea";
$tdataEstudHistoClin[".viewFields"][] = "Edad1Palabra";
$tdataEstudHistoClin[".viewFields"][] = "EdadMesVocalizo";
$tdataEstudHistoClin[".viewFields"][] = "AdaptSocial";
$tdataEstudHistoClin[".viewFields"][] = "Documento";

$tdataEstudHistoClin[".addFields"] = array();
$tdataEstudHistoClin[".addFields"][] = "FotoRostro";

$tdataEstudHistoClin[".inlineAddFields"] = array();
$tdataEstudHistoClin[".inlineAddFields"][] = "FotoRostro";

$tdataEstudHistoClin[".editFields"] = array();
$tdataEstudHistoClin[".editFields"][] = "FotoRostro";

$tdataEstudHistoClin[".inlineEditFields"] = array();
$tdataEstudHistoClin[".inlineEditFields"][] = "FotoRostro";

$tdataEstudHistoClin[".exportFields"] = array();
$tdataEstudHistoClin[".exportFields"][] = "Estudiante";
$tdataEstudHistoClin[".exportFields"][] = "FotoRostro";
$tdataEstudHistoClin[".exportFields"][] = "edad";
$tdataEstudHistoClin[".exportFields"][] = "RelacionHermano";
$tdataEstudHistoClin[".exportFields"][] = "RelacionCompaneros";
$tdataEstudHistoClin[".exportFields"][] = "CQuinJuega";
$tdataEstudHistoClin[".exportFields"][] = "CQueJuega";
$tdataEstudHistoClin[".exportFields"][] = "TipoEmocion";
$tdataEstudHistoClin[".exportFields"][] = "CQNinio";
$tdataEstudHistoClin[".exportFields"][] = "FProblematico";
$tdataEstudHistoClin[".exportFields"][] = "DuermeSolo";
$tdataEstudHistoClin[".exportFields"][] = "ComparteCuarto";
$tdataEstudHistoClin[".exportFields"][] = "ParineteIgual";
$tdataEstudHistoClin[".exportFields"][] = "TSocial";
$tdataEstudHistoClin[".exportFields"][] = "Balbucea";
$tdataEstudHistoClin[".exportFields"][] = "Edad1Palabra";
$tdataEstudHistoClin[".exportFields"][] = "EdadMesVocalizo";
$tdataEstudHistoClin[".exportFields"][] = "AdaptSocial";
$tdataEstudHistoClin[".exportFields"][] = "Documento";

$tdataEstudHistoClin[".importFields"] = array();
$tdataEstudHistoClin[".importFields"][] = "Estudiante";
$tdataEstudHistoClin[".importFields"][] = "FotoRostro";
$tdataEstudHistoClin[".importFields"][] = "edad";
$tdataEstudHistoClin[".importFields"][] = "RelacionHermano";
$tdataEstudHistoClin[".importFields"][] = "RelacionCompaneros";
$tdataEstudHistoClin[".importFields"][] = "CQuinJuega";
$tdataEstudHistoClin[".importFields"][] = "CQueJuega";
$tdataEstudHistoClin[".importFields"][] = "TipoEmocion";
$tdataEstudHistoClin[".importFields"][] = "CQNinio";
$tdataEstudHistoClin[".importFields"][] = "FProblematico";
$tdataEstudHistoClin[".importFields"][] = "DuermeSolo";
$tdataEstudHistoClin[".importFields"][] = "ComparteCuarto";
$tdataEstudHistoClin[".importFields"][] = "ParineteIgual";
$tdataEstudHistoClin[".importFields"][] = "TSocial";
$tdataEstudHistoClin[".importFields"][] = "Balbucea";
$tdataEstudHistoClin[".importFields"][] = "Edad1Palabra";
$tdataEstudHistoClin[".importFields"][] = "EdadMesVocalizo";
$tdataEstudHistoClin[".importFields"][] = "AdaptSocial";
$tdataEstudHistoClin[".importFields"][] = "Documento";

$tdataEstudHistoClin[".printFields"] = array();
$tdataEstudHistoClin[".printFields"][] = "Estudiante";
$tdataEstudHistoClin[".printFields"][] = "FotoRostro";
$tdataEstudHistoClin[".printFields"][] = "edad";
$tdataEstudHistoClin[".printFields"][] = "RelacionHermano";
$tdataEstudHistoClin[".printFields"][] = "RelacionCompaneros";
$tdataEstudHistoClin[".printFields"][] = "CQuinJuega";
$tdataEstudHistoClin[".printFields"][] = "CQueJuega";
$tdataEstudHistoClin[".printFields"][] = "TipoEmocion";
$tdataEstudHistoClin[".printFields"][] = "CQNinio";
$tdataEstudHistoClin[".printFields"][] = "FProblematico";
$tdataEstudHistoClin[".printFields"][] = "DuermeSolo";
$tdataEstudHistoClin[".printFields"][] = "ComparteCuarto";
$tdataEstudHistoClin[".printFields"][] = "ParineteIgual";
$tdataEstudHistoClin[".printFields"][] = "TSocial";
$tdataEstudHistoClin[".printFields"][] = "Balbucea";
$tdataEstudHistoClin[".printFields"][] = "Edad1Palabra";
$tdataEstudHistoClin[".printFields"][] = "EdadMesVocalizo";
$tdataEstudHistoClin[".printFields"][] = "AdaptSocial";
$tdataEstudHistoClin[".printFields"][] = "Documento";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","Estudiante"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Estudiante"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["Estudiante"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","FotoRostro"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FotoRostro"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_estudiante.FotoRostro";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 150;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
							$edata["acceptFileTypes"] = "jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 300;
	
		$edata["maxTotalFilesSize"] = 500;
	
		
		
		
		
		$edata["controlWidth"] = 300;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdataEstudHistoClin["FotoRostro"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","edad"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "edad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["edad"] = $fdata;
//	RelacionHermano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RelacionHermano";
	$fdata["GoodName"] = "RelacionHermano";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","RelacionHermano"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RelacionHermano"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_descsocial.RelacionHermano";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["RelacionHermano"] = $fdata;
//	RelacionCompaneros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RelacionCompaneros";
	$fdata["GoodName"] = "RelacionCompaneros";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","RelacionCompaneros"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RelacionCompaneros"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_descsocial.RelacionCompaneros";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["RelacionCompaneros"] = $fdata;
//	CQuinJuega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CQuinJuega";
	$fdata["GoodName"] = "CQuinJuega";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","CQuinJuega"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CQuinJuega"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_descsocial.CQuinJuega";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["CQuinJuega"] = $fdata;
//	CQueJuega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CQueJuega";
	$fdata["GoodName"] = "CQueJuega";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","CQueJuega"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CQueJuega"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_descsocial.CQueJuega";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["CQueJuega"] = $fdata;
//	TipoEmocion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TipoEmocion";
	$fdata["GoodName"] = "TipoEmocion";
	$fdata["ownerTable"] = "lcs_emociones";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","TipoEmocion"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoEmocion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_emociones.TipoEmocion";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["TipoEmocion"] = $fdata;
//	CQNinio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CQNinio";
	$fdata["GoodName"] = "CQNinio";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","CQNinio"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CQNinio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_histoiralfamiliar.CQNinio";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["CQNinio"] = $fdata;
//	FProblematico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FProblematico";
	$fdata["GoodName"] = "FProblematico";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","FProblematico"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FProblematico"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_histoiralfamiliar.FProblematico";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["FProblematico"] = $fdata;
//	DuermeSolo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DuermeSolo";
	$fdata["GoodName"] = "DuermeSolo";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","DuermeSolo"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DuermeSolo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_histoiralfamiliar.DuermeSolo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["DuermeSolo"] = $fdata;
//	ComparteCuarto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ComparteCuarto";
	$fdata["GoodName"] = "ComparteCuarto";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","ComparteCuarto"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ComparteCuarto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_histoiralfamiliar.ComparteCuarto";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["ComparteCuarto"] = $fdata;
//	ParineteIgual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ParineteIgual";
	$fdata["GoodName"] = "ParineteIgual";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","ParineteIgual"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ParineteIgual"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_histoiralfamiliar.ParineteIgual";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["ParineteIgual"] = $fdata;
//	TSocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "TSocial";
	$fdata["GoodName"] = "TSocial";
	$fdata["ownerTable"] = "lcs_tiposocial";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","TSocial"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TSocial"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_tiposocial.TSocial";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["TSocial"] = $fdata;
//	Balbucea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Balbucea";
	$fdata["GoodName"] = "Balbucea";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","Balbucea"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Balbucea"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_lenguaje.Balbucea";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["Balbucea"] = $fdata;
//	Edad1Palabra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Edad1Palabra";
	$fdata["GoodName"] = "Edad1Palabra";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","Edad1Palabra"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Edad1Palabra"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_lenguaje.Edad1Palabra";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["Edad1Palabra"] = $fdata;
//	EdadMesVocalizo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "EdadMesVocalizo";
	$fdata["GoodName"] = "EdadMesVocalizo";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","EdadMesVocalizo"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EdadMesVocalizo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_lenguaje.EdadMesVocalizo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["EdadMesVocalizo"] = $fdata;
//	AdaptSocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "AdaptSocial";
	$fdata["GoodName"] = "AdaptSocial";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","AdaptSocial"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AdaptSocial"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_lenguaje.AdaptSocial";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["AdaptSocial"] = $fdata;
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "lcs_historialclinico";
	$fdata["Label"] = GetFieldLabel("EstudHistoClin","Documento"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Documento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_historialclinico.Documento";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
						$vdata["ShowFileSize"] = true; 
					
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataEstudHistoClin["Documento"] = $fdata;

	
$tables_data["EstudHistoClin"]=&$tdataEstudHistoClin;
$field_labels["EstudHistoClin"] = &$fieldLabelsEstudHistoClin;
$fieldToolTips["EstudHistoClin"] = &$fieldToolTipsEstudHistoClin;
$page_titles["EstudHistoClin"] = &$pageTitlesEstudHistoClin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["EstudHistoClin"] = array();
//	lcs_descsocial
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_descsocial";
		$detailsParam["dOriginalTable"] = "lcs_descsocial";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_descsocial";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_embarazo
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_embarazo";
		$detailsParam["dOriginalTable"] = "lcs_embarazo";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_embarazo";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_emociones
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_emociones";
		$detailsParam["dOriginalTable"] = "lcs_emociones";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_emociones";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_encargado
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_encargado";
		$detailsParam["dOriginalTable"] = "lcs_encargado";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_encargado";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_enfermedades
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_enfermedades";
		$detailsParam["dOriginalTable"] = "lcs_enfermedades";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_enfermedades";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_histoiralfamiliar
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_histoiralfamiliar";
		$detailsParam["dOriginalTable"] = "lcs_histoiralfamiliar";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_histoiralfamiliar";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_historialclinico
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_historialclinico";
		$detailsParam["dOriginalTable"] = "lcs_historialclinico";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_historialclinico";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_lenguaje
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_lenguaje";
		$detailsParam["dOriginalTable"] = "lcs_lenguaje";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_lenguaje";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_terapias
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_terapias";
		$detailsParam["dOriginalTable"] = "lcs_terapias";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_terapias";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_tiposocial
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_tiposocial";
		$detailsParam["dOriginalTable"] = "lcs_tiposocial";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_tiposocial";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_transtornoalimenticio
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_transtornoalimenticio";
		$detailsParam["dOriginalTable"] = "lcs_transtornoalimenticio";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_transtornoalimenticio";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_transtornoesfinteres
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_transtornoesfinteres";
		$detailsParam["dOriginalTable"] = "lcs_transtornoesfinteres";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_transtornoesfinteres";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_trastornosuenio
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_trastornosuenio";
		$detailsParam["dOriginalTable"] = "lcs_trastornosuenio";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_trastornosuenio";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstudHistoClin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstudHistoClin"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["EstudHistoClin"] = array();


	
				$strOriginalDetailsTable="lcs_centro";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="lcs_centro";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lcs_centro";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["EstudHistoClin"][0] = $masterParams;	
				$masterTablesData["EstudHistoClin"][0]["masterKeys"] = array();
	$masterTablesData["EstudHistoClin"][0]["masterKeys"][]="idCentro";
				$masterTablesData["EstudHistoClin"][0]["detailKeys"] = array();
	$masterTablesData["EstudHistoClin"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_EstudHistoClin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_descsocial.RelacionHermano,  lcs_descsocial.RelacionCompaneros,  lcs_descsocial.CQuinJuega,  lcs_descsocial.CQueJuega,  lcs_emociones.TipoEmocion,  lcs_histoiralfamiliar.CQNinio,  lcs_histoiralfamiliar.FProblematico,  lcs_histoiralfamiliar.DuermeSolo,  lcs_histoiralfamiliar.ComparteCuarto,  lcs_histoiralfamiliar.ParineteIgual,  lcs_tiposocial.TSocial,  lcs_lenguaje.Balbucea,  lcs_lenguaje.Edad1Palabra,  lcs_lenguaje.EdadMesVocalizo,  lcs_lenguaje.AdaptSocial,  lcs_historialclinico.Documento";
$proto0["m_strFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_descsocial ON lcs_estudiante.idEstudiante = lcs_descsocial.`_idEstudiante`  LEFT OUTER JOIN lcs_emociones ON lcs_estudiante.idEstudiante = lcs_emociones.`_idEstudiante`  LEFT OUTER JOIN lcs_histoiralfamiliar ON lcs_estudiante.idEstudiante = lcs_histoiralfamiliar.`_idEstudiante`  LEFT OUTER JOIN lcs_lenguaje ON lcs_estudiante.idEstudiante = lcs_lenguaje.`_idEstudiante`  LEFT OUTER JOIN lcs_tiposocial ON lcs_estudiante.idEstudiante = lcs_tiposocial.`_idEstudiante`  LEFT OUTER JOIN lcs_historialclinico ON lcs_estudiante.idEstudiante = lcs_historialclinico.`_idEstudiante`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_CUSTOM";
$proto6["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_estudiante.Nombre"
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" \""
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_estudiante.Apellido"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido)";
$proto5["m_srcTableName"] = "EstudHistoClin";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstudHistoClin"
));

$proto10["m_sql"] = "lcs_estudiante.FotoRostro";
$proto10["m_srcTableName"] = "EstudHistoClin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto12["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto12["m_srcTableName"] = "EstudHistoClin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RelacionHermano",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "EstudHistoClin"
));

$proto14["m_sql"] = "lcs_descsocial.RelacionHermano";
$proto14["m_srcTableName"] = "EstudHistoClin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RelacionCompaneros",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "EstudHistoClin"
));

$proto16["m_sql"] = "lcs_descsocial.RelacionCompaneros";
$proto16["m_srcTableName"] = "EstudHistoClin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CQuinJuega",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "EstudHistoClin"
));

$proto18["m_sql"] = "lcs_descsocial.CQuinJuega";
$proto18["m_srcTableName"] = "EstudHistoClin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CQueJuega",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "EstudHistoClin"
));

$proto20["m_sql"] = "lcs_descsocial.CQueJuega";
$proto20["m_srcTableName"] = "EstudHistoClin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEmocion",
	"m_strTable" => "lcs_emociones",
	"m_srcTableName" => "EstudHistoClin"
));

$proto22["m_sql"] = "lcs_emociones.TipoEmocion";
$proto22["m_srcTableName"] = "EstudHistoClin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CQNinio",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "EstudHistoClin"
));

$proto24["m_sql"] = "lcs_histoiralfamiliar.CQNinio";
$proto24["m_srcTableName"] = "EstudHistoClin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FProblematico",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "EstudHistoClin"
));

$proto26["m_sql"] = "lcs_histoiralfamiliar.FProblematico";
$proto26["m_srcTableName"] = "EstudHistoClin";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DuermeSolo",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "EstudHistoClin"
));

$proto28["m_sql"] = "lcs_histoiralfamiliar.DuermeSolo";
$proto28["m_srcTableName"] = "EstudHistoClin";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ComparteCuarto",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "EstudHistoClin"
));

$proto30["m_sql"] = "lcs_histoiralfamiliar.ComparteCuarto";
$proto30["m_srcTableName"] = "EstudHistoClin";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ParineteIgual",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "EstudHistoClin"
));

$proto32["m_sql"] = "lcs_histoiralfamiliar.ParineteIgual";
$proto32["m_srcTableName"] = "EstudHistoClin";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "TSocial",
	"m_strTable" => "lcs_tiposocial",
	"m_srcTableName" => "EstudHistoClin"
));

$proto34["m_sql"] = "lcs_tiposocial.TSocial";
$proto34["m_srcTableName"] = "EstudHistoClin";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Balbucea",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "EstudHistoClin"
));

$proto36["m_sql"] = "lcs_lenguaje.Balbucea";
$proto36["m_srcTableName"] = "EstudHistoClin";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Edad1Palabra",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "EstudHistoClin"
));

$proto38["m_sql"] = "lcs_lenguaje.Edad1Palabra";
$proto38["m_srcTableName"] = "EstudHistoClin";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "EdadMesVocalizo",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "EstudHistoClin"
));

$proto40["m_sql"] = "lcs_lenguaje.EdadMesVocalizo";
$proto40["m_srcTableName"] = "EstudHistoClin";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "AdaptSocial",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "EstudHistoClin"
));

$proto42["m_sql"] = "lcs_lenguaje.AdaptSocial";
$proto42["m_srcTableName"] = "EstudHistoClin";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "lcs_historialclinico",
	"m_srcTableName" => "EstudHistoClin"
));

$proto44["m_sql"] = "lcs_historialclinico.Documento";
$proto44["m_srcTableName"] = "EstudHistoClin";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "lcs_estudiante";
$proto47["m_srcTableName"] = "EstudHistoClin";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "idEstudiante";
$proto47["m_columns"][] = "Nombre";
$proto47["m_columns"][] = "Apellido";
$proto47["m_columns"][] = "Direcccion";
$proto47["m_columns"][] = "FNacimiento";
$proto47["m_columns"][] = "FotoRostro";
$proto47["m_columns"][] = "Ingresado";
$proto47["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "lcs_estudiante";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "EstudHistoClin";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_LEFTJOIN";
			$proto51=array();
$proto51["m_strName"] = "lcs_descsocial";
$proto51["m_srcTableName"] = "EstudHistoClin";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "idDescSocial";
$proto51["m_columns"][] = "RelacionHermano";
$proto51["m_columns"][] = "RelacionCompaneros";
$proto51["m_columns"][] = "CQuinJuega";
$proto51["m_columns"][] = "CQueJuega";
$proto51["m_columns"][] = "ingresado";
$proto51["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "LEFT OUTER JOIN lcs_descsocial ON lcs_estudiante.idEstudiante = lcs_descsocial.`_idEstudiante`";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "EstudHistoClin";
$proto52=array();
$proto52["m_sql"] = "lcs_estudiante.idEstudiante = lcs_descsocial.`_idEstudiante`";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstudHistoClin"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= lcs_descsocial.`_idEstudiante`";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_LEFTJOIN";
			$proto55=array();
$proto55["m_strName"] = "lcs_emociones";
$proto55["m_srcTableName"] = "EstudHistoClin";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "idEmociones";
$proto55["m_columns"][] = "TipoEmocion";
$proto55["m_columns"][] = "Ingresado";
$proto55["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "LEFT OUTER JOIN lcs_emociones ON lcs_estudiante.idEstudiante = lcs_emociones.`_idEstudiante`";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "EstudHistoClin";
$proto56=array();
$proto56["m_sql"] = "lcs_estudiante.idEstudiante = lcs_emociones.`_idEstudiante`";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstudHistoClin"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= lcs_emociones.`_idEstudiante`";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_LEFTJOIN";
			$proto59=array();
$proto59["m_strName"] = "lcs_histoiralfamiliar";
$proto59["m_srcTableName"] = "EstudHistoClin";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "idHistoiralFamiliar";
$proto59["m_columns"][] = "CQNinio";
$proto59["m_columns"][] = "FProblematico";
$proto59["m_columns"][] = "DuermeSolo";
$proto59["m_columns"][] = "ComparteCuarto";
$proto59["m_columns"][] = "ParineteIgual";
$proto59["m_columns"][] = "Ingresado";
$proto59["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "LEFT OUTER JOIN lcs_histoiralfamiliar ON lcs_estudiante.idEstudiante = lcs_histoiralfamiliar.`_idEstudiante`";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "EstudHistoClin";
$proto60=array();
$proto60["m_sql"] = "lcs_estudiante.idEstudiante = lcs_histoiralfamiliar.`_idEstudiante`";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstudHistoClin"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= lcs_histoiralfamiliar.`_idEstudiante`";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
												$proto62=array();
$proto62["m_link"] = "SQLL_LEFTJOIN";
			$proto63=array();
$proto63["m_strName"] = "lcs_lenguaje";
$proto63["m_srcTableName"] = "EstudHistoClin";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "idLenguaje";
$proto63["m_columns"][] = "Balbucea";
$proto63["m_columns"][] = "Edad1Palabra";
$proto63["m_columns"][] = "EdadMesVocalizo";
$proto63["m_columns"][] = "AdaptSocial";
$proto63["m_columns"][] = "Ingresado";
$proto63["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "LEFT OUTER JOIN lcs_lenguaje ON lcs_estudiante.idEstudiante = lcs_lenguaje.`_idEstudiante`";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "EstudHistoClin";
$proto64=array();
$proto64["m_sql"] = "lcs_estudiante.idEstudiante = lcs_lenguaje.`_idEstudiante`";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstudHistoClin"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= lcs_lenguaje.`_idEstudiante`";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto66=array();
$proto66["m_link"] = "SQLL_LEFTJOIN";
			$proto67=array();
$proto67["m_strName"] = "lcs_tiposocial";
$proto67["m_srcTableName"] = "EstudHistoClin";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "idTipoSocial";
$proto67["m_columns"][] = "TSocial";
$proto67["m_columns"][] = "Ingresado";
$proto67["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "LEFT OUTER JOIN lcs_tiposocial ON lcs_estudiante.idEstudiante = lcs_tiposocial.`_idEstudiante`";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "EstudHistoClin";
$proto68=array();
$proto68["m_sql"] = "lcs_estudiante.idEstudiante = lcs_tiposocial.`_idEstudiante`";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstudHistoClin"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= lcs_tiposocial.`_idEstudiante`";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
												$proto70=array();
$proto70["m_link"] = "SQLL_LEFTJOIN";
			$proto71=array();
$proto71["m_strName"] = "lcs_historialclinico";
$proto71["m_srcTableName"] = "EstudHistoClin";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "idHistorialClinico";
$proto71["m_columns"][] = "Documento";
$proto71["m_columns"][] = "Ingresado";
$proto71["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "LEFT OUTER JOIN lcs_historialclinico ON lcs_estudiante.idEstudiante = lcs_historialclinico.`_idEstudiante`";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "EstudHistoClin";
$proto72=array();
$proto72["m_sql"] = "lcs_estudiante.idEstudiante = lcs_historialclinico.`_idEstudiante`";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstudHistoClin"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= lcs_historialclinico.`_idEstudiante`";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="EstudHistoClin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_EstudHistoClin = createSqlQuery_EstudHistoClin();


	
																			
	
$tdataEstudHistoClin[".sqlquery"] = $queryData_EstudHistoClin;

$tableEvents["EstudHistoClin"] = new eventsBase;
$tdataEstudHistoClin[".hasEvents"] = false;

?>