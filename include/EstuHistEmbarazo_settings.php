<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEstuHistEmbarazo = array();	
	$tdataEstuHistEmbarazo[".truncateText"] = true;
	$tdataEstuHistEmbarazo[".NumberOfChars"] = 80; 
	$tdataEstuHistEmbarazo[".ShortName"] = "EstuHistEmbarazo";
	$tdataEstuHistEmbarazo[".OwnerID"] = "";
	$tdataEstuHistEmbarazo[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelsEstuHistEmbarazo = array();
$fieldToolTipsEstuHistEmbarazo = array();
$pageTitlesEstuHistEmbarazo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsEstuHistEmbarazo["Spanish"] = array();
	$fieldToolTipsEstuHistEmbarazo["Spanish"] = array();
	$pageTitlesEstuHistEmbarazo["Spanish"] = array();
	$fieldLabelsEstuHistEmbarazo["Spanish"]["FotoRostro"] = "Foto";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["FotoRostro"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["Estudiante"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["edad"] = "Edad";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["edad"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["Ingresado"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["MesesNac"] = "Meses Nacido";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["MesesNac"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["TipoParto"] = "Tipo Parto";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["TipoParto"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["AbortosAnt"] = "Abortos Anticipado";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["AbortosAnt"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["Emorragias"] = "Emorragias";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["Emorragias"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["infecciones"] = "Infecciones";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["infecciones"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["LloroPronto"] = "Lloro Pronto";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["LloroPronto"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["RespiroPronto"] = "Respiro Pronto";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["RespiroPronto"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["ColorNacido"] = "Color Nacido";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["ColorNacido"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["SufrimientoFetal"] = "Sufrimiento Fetal";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["SufrimientoFetal"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["EmbDeseado"] = "Emb Deseado";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["EmbDeseado"] = "";
	$fieldLabelsEstuHistEmbarazo["Spanish"]["Embarazocol"] = "Embarazocol";
	$fieldToolTipsEstuHistEmbarazo["Spanish"]["Embarazocol"] = "";
	if (count($fieldToolTipsEstuHistEmbarazo["Spanish"]))
		$tdataEstuHistEmbarazo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEstuHistEmbarazo[""] = array();
	$fieldToolTipsEstuHistEmbarazo[""] = array();
	$pageTitlesEstuHistEmbarazo[""] = array();
	$fieldLabelsEstuHistEmbarazo[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsEstuHistEmbarazo[""]["FotoRostro"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistEmbarazo[""]["Estudiante"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["edad"] = "Edad";
	$fieldToolTipsEstuHistEmbarazo[""]["edad"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["Ingresado"] = "Ingresado";
	$fieldToolTipsEstuHistEmbarazo[""]["Ingresado"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["MesesNac"] = "Meses Nac";
	$fieldToolTipsEstuHistEmbarazo[""]["MesesNac"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["TipoParto"] = "Tipo Parto";
	$fieldToolTipsEstuHistEmbarazo[""]["TipoParto"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["AbortosAnt"] = "Abortos Ant";
	$fieldToolTipsEstuHistEmbarazo[""]["AbortosAnt"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["Emorragias"] = "Emorragias";
	$fieldToolTipsEstuHistEmbarazo[""]["Emorragias"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["infecciones"] = "Infecciones";
	$fieldToolTipsEstuHistEmbarazo[""]["infecciones"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["LloroPronto"] = "Lloro Pronto";
	$fieldToolTipsEstuHistEmbarazo[""]["LloroPronto"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["RespiroPronto"] = "Respiro Pronto";
	$fieldToolTipsEstuHistEmbarazo[""]["RespiroPronto"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["ColorNacido"] = "Color Nacido";
	$fieldToolTipsEstuHistEmbarazo[""]["ColorNacido"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["SufrimientoFetal"] = "Sufrimiento Fetal";
	$fieldToolTipsEstuHistEmbarazo[""]["SufrimientoFetal"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["EmbDeseado"] = "Emb Deseado";
	$fieldToolTipsEstuHistEmbarazo[""]["EmbDeseado"] = "";
	$fieldLabelsEstuHistEmbarazo[""]["Embarazocol"] = "Embarazocol";
	$fieldToolTipsEstuHistEmbarazo[""]["Embarazocol"] = "";
	if (count($fieldToolTipsEstuHistEmbarazo[""]))
		$tdataEstuHistEmbarazo[".isUseToolTips"] = true;
}
	
	
	$tdataEstuHistEmbarazo[".NCSearch"] = true;



$tdataEstuHistEmbarazo[".shortTableName"] = "EstuHistEmbarazo";
$tdataEstuHistEmbarazo[".nSecOptions"] = 0;
$tdataEstuHistEmbarazo[".recsPerRowList"] = 1;
$tdataEstuHistEmbarazo[".mainTableOwnerID"] = "";
$tdataEstuHistEmbarazo[".moveNext"] = 1;
$tdataEstuHistEmbarazo[".nType"] = 2;

$tdataEstuHistEmbarazo[".strOriginalTableName"] = "lcs_estudiante";




$tdataEstuHistEmbarazo[".showAddInPopup"] = false;

$tdataEstuHistEmbarazo[".showEditInPopup"] = false;

$tdataEstuHistEmbarazo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEstuHistEmbarazo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEstuHistEmbarazo[".fieldsForRegister"] = array();

$tdataEstuHistEmbarazo[".listAjax"] = false;

	$tdataEstuHistEmbarazo[".audit"] = false;

	$tdataEstuHistEmbarazo[".locking"] = false;


$tdataEstuHistEmbarazo[".list"] = true;

$tdataEstuHistEmbarazo[".inlineAdd"] = true;


$tdataEstuHistEmbarazo[".exportTo"] = true;

$tdataEstuHistEmbarazo[".printFriendly"] = true;


$tdataEstuHistEmbarazo[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataEstuHistEmbarazo[".searchSaving"] = false;
//

$tdataEstuHistEmbarazo[".showSearchPanel"] = true;
		$tdataEstuHistEmbarazo[".flexibleSearch"] = true;		

if (isMobile())
	$tdataEstuHistEmbarazo[".isUseAjaxSuggest"] = false;
else 
	$tdataEstuHistEmbarazo[".isUseAjaxSuggest"] = true;




$tdataEstuHistEmbarazo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEstuHistEmbarazo[".isUseTimeForSearch"] = false;



$tdataEstuHistEmbarazo[".useDetailsPreview"] = true;


$tdataEstuHistEmbarazo[".allSearchFields"] = array();
$tdataEstuHistEmbarazo[".filterFields"] = array();
$tdataEstuHistEmbarazo[".requiredSearchFields"] = array();

$tdataEstuHistEmbarazo[".allSearchFields"][] = "Estudiante";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "FotoRostro";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "edad";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "MesesNac";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "TipoParto";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "AbortosAnt";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "Emorragias";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "infecciones";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "LloroPronto";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "RespiroPronto";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "ColorNacido";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "SufrimientoFetal";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "EmbDeseado";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "Embarazocol";
	$tdataEstuHistEmbarazo[".allSearchFields"][] = "Ingresado";
	

$tdataEstuHistEmbarazo[".googleLikeFields"] = array();
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "Estudiante";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "edad";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "MesesNac";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "TipoParto";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "AbortosAnt";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "Emorragias";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "infecciones";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "LloroPronto";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "RespiroPronto";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "ColorNacido";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "SufrimientoFetal";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "EmbDeseado";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "Embarazocol";
$tdataEstuHistEmbarazo[".googleLikeFields"][] = "Ingresado";


$tdataEstuHistEmbarazo[".advSearchFields"] = array();
$tdataEstuHistEmbarazo[".advSearchFields"][] = "Estudiante";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "edad";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "MesesNac";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "TipoParto";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "AbortosAnt";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "Emorragias";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "infecciones";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "LloroPronto";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "RespiroPronto";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "ColorNacido";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "SufrimientoFetal";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "EmbDeseado";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "Embarazocol";
$tdataEstuHistEmbarazo[".advSearchFields"][] = "Ingresado";

$tdataEstuHistEmbarazo[".tableType"] = "report";

$tdataEstuHistEmbarazo[".printerPageOrientation"] = 0;
$tdataEstuHistEmbarazo[".nPrinterPageScale"] = 100;

$tdataEstuHistEmbarazo[".nPrinterSplitRecords"] = 40;

$tdataEstuHistEmbarazo[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataEstuHistEmbarazo[".reportPrintPartitionType"] = 0;	
$tdataEstuHistEmbarazo[".reportPrintGroupsPerPage"] = 3;	
$tdataEstuHistEmbarazo[".lowGroup"] = 1;

$tdataEstuHistEmbarazo[".reportGroupFields"] = true;
$tdataEstuHistEmbarazo[".pageSize"] = 5;
$tdataEstuHistEmbarazo[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataEstuHistEmbarazo[".reportGroupFieldsData"] = $reportGroupFields;




$tdataEstuHistEmbarazo[".reportPageSummary"] = true;


$tdataEstuHistEmbarazo[".repShowDet"] = true;

$tdataEstuHistEmbarazo[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataEstuHistEmbarazo[".isPrinterPagePDF"] = true;
$tdataEstuHistEmbarazo[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEstuHistEmbarazo[".strOrderBy"] = $tstrOrderBy;

$tdataEstuHistEmbarazo[".orderindexes"] = array();

$tdataEstuHistEmbarazo[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_embarazo.MesesNac,  lcs_embarazo.TipoParto,  lcs_embarazo.AbortosAnt,  lcs_embarazo.Emorragias,  lcs_embarazo.infecciones,  lcs_embarazo.LloroPronto,  lcs_embarazo.RespiroPronto,  lcs_embarazo.ColorNacido,  lcs_embarazo.SufrimientoFetal,  lcs_embarazo.EmbDeseado,  lcs_embarazo.Embarazocol,  lcs_embarazo.Ingresado";
$tdataEstuHistEmbarazo[".sqlFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_embarazo ON lcs_estudiante.idEstudiante = lcs_embarazo.`_idEstudiante`";
$tdataEstuHistEmbarazo[".sqlWhereExpr"] = "";
$tdataEstuHistEmbarazo[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEstuHistEmbarazo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEstuHistEmbarazo[".arrGroupsPerPage"] = $arrGPP;

$tdataEstuHistEmbarazo[".highlightSearchResults"] = true;

$tableKeysEstuHistEmbarazo = array();
$tdataEstuHistEmbarazo[".Keys"] = $tableKeysEstuHistEmbarazo;

$tdataEstuHistEmbarazo[".listFields"] = array();
$tdataEstuHistEmbarazo[".listFields"][] = "Estudiante";
$tdataEstuHistEmbarazo[".listFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".listFields"][] = "edad";
$tdataEstuHistEmbarazo[".listFields"][] = "MesesNac";
$tdataEstuHistEmbarazo[".listFields"][] = "TipoParto";
$tdataEstuHistEmbarazo[".listFields"][] = "AbortosAnt";
$tdataEstuHistEmbarazo[".listFields"][] = "Emorragias";
$tdataEstuHistEmbarazo[".listFields"][] = "infecciones";
$tdataEstuHistEmbarazo[".listFields"][] = "LloroPronto";
$tdataEstuHistEmbarazo[".listFields"][] = "RespiroPronto";
$tdataEstuHistEmbarazo[".listFields"][] = "ColorNacido";
$tdataEstuHistEmbarazo[".listFields"][] = "SufrimientoFetal";
$tdataEstuHistEmbarazo[".listFields"][] = "EmbDeseado";
$tdataEstuHistEmbarazo[".listFields"][] = "Embarazocol";
$tdataEstuHistEmbarazo[".listFields"][] = "Ingresado";

$tdataEstuHistEmbarazo[".hideMobileList"] = array();


$tdataEstuHistEmbarazo[".viewFields"] = array();
$tdataEstuHistEmbarazo[".viewFields"][] = "Estudiante";
$tdataEstuHistEmbarazo[".viewFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".viewFields"][] = "edad";
$tdataEstuHistEmbarazo[".viewFields"][] = "MesesNac";
$tdataEstuHistEmbarazo[".viewFields"][] = "TipoParto";
$tdataEstuHistEmbarazo[".viewFields"][] = "AbortosAnt";
$tdataEstuHistEmbarazo[".viewFields"][] = "Emorragias";
$tdataEstuHistEmbarazo[".viewFields"][] = "infecciones";
$tdataEstuHistEmbarazo[".viewFields"][] = "LloroPronto";
$tdataEstuHistEmbarazo[".viewFields"][] = "RespiroPronto";
$tdataEstuHistEmbarazo[".viewFields"][] = "ColorNacido";
$tdataEstuHistEmbarazo[".viewFields"][] = "SufrimientoFetal";
$tdataEstuHistEmbarazo[".viewFields"][] = "EmbDeseado";
$tdataEstuHistEmbarazo[".viewFields"][] = "Embarazocol";
$tdataEstuHistEmbarazo[".viewFields"][] = "Ingresado";

$tdataEstuHistEmbarazo[".addFields"] = array();
$tdataEstuHistEmbarazo[".addFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".addFields"][] = "Ingresado";

$tdataEstuHistEmbarazo[".inlineAddFields"] = array();
$tdataEstuHistEmbarazo[".inlineAddFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".inlineAddFields"][] = "Ingresado";

$tdataEstuHistEmbarazo[".editFields"] = array();
$tdataEstuHistEmbarazo[".editFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".editFields"][] = "Ingresado";

$tdataEstuHistEmbarazo[".inlineEditFields"] = array();
$tdataEstuHistEmbarazo[".inlineEditFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".inlineEditFields"][] = "Ingresado";

$tdataEstuHistEmbarazo[".exportFields"] = array();
$tdataEstuHistEmbarazo[".exportFields"][] = "Estudiante";
$tdataEstuHistEmbarazo[".exportFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".exportFields"][] = "edad";
$tdataEstuHistEmbarazo[".exportFields"][] = "MesesNac";
$tdataEstuHistEmbarazo[".exportFields"][] = "TipoParto";
$tdataEstuHistEmbarazo[".exportFields"][] = "AbortosAnt";
$tdataEstuHistEmbarazo[".exportFields"][] = "Emorragias";
$tdataEstuHistEmbarazo[".exportFields"][] = "infecciones";
$tdataEstuHistEmbarazo[".exportFields"][] = "LloroPronto";
$tdataEstuHistEmbarazo[".exportFields"][] = "RespiroPronto";
$tdataEstuHistEmbarazo[".exportFields"][] = "ColorNacido";
$tdataEstuHistEmbarazo[".exportFields"][] = "SufrimientoFetal";
$tdataEstuHistEmbarazo[".exportFields"][] = "EmbDeseado";
$tdataEstuHistEmbarazo[".exportFields"][] = "Embarazocol";
$tdataEstuHistEmbarazo[".exportFields"][] = "Ingresado";

$tdataEstuHistEmbarazo[".importFields"] = array();
$tdataEstuHistEmbarazo[".importFields"][] = "Estudiante";
$tdataEstuHistEmbarazo[".importFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".importFields"][] = "edad";
$tdataEstuHistEmbarazo[".importFields"][] = "MesesNac";
$tdataEstuHistEmbarazo[".importFields"][] = "TipoParto";
$tdataEstuHistEmbarazo[".importFields"][] = "AbortosAnt";
$tdataEstuHistEmbarazo[".importFields"][] = "Emorragias";
$tdataEstuHistEmbarazo[".importFields"][] = "infecciones";
$tdataEstuHistEmbarazo[".importFields"][] = "LloroPronto";
$tdataEstuHistEmbarazo[".importFields"][] = "RespiroPronto";
$tdataEstuHistEmbarazo[".importFields"][] = "ColorNacido";
$tdataEstuHistEmbarazo[".importFields"][] = "SufrimientoFetal";
$tdataEstuHistEmbarazo[".importFields"][] = "EmbDeseado";
$tdataEstuHistEmbarazo[".importFields"][] = "Embarazocol";
$tdataEstuHistEmbarazo[".importFields"][] = "Ingresado";

$tdataEstuHistEmbarazo[".printFields"] = array();
$tdataEstuHistEmbarazo[".printFields"][] = "Estudiante";
$tdataEstuHistEmbarazo[".printFields"][] = "FotoRostro";
$tdataEstuHistEmbarazo[".printFields"][] = "edad";
$tdataEstuHistEmbarazo[".printFields"][] = "MesesNac";
$tdataEstuHistEmbarazo[".printFields"][] = "TipoParto";
$tdataEstuHistEmbarazo[".printFields"][] = "AbortosAnt";
$tdataEstuHistEmbarazo[".printFields"][] = "Emorragias";
$tdataEstuHistEmbarazo[".printFields"][] = "infecciones";
$tdataEstuHistEmbarazo[".printFields"][] = "LloroPronto";
$tdataEstuHistEmbarazo[".printFields"][] = "RespiroPronto";
$tdataEstuHistEmbarazo[".printFields"][] = "ColorNacido";
$tdataEstuHistEmbarazo[".printFields"][] = "SufrimientoFetal";
$tdataEstuHistEmbarazo[".printFields"][] = "EmbDeseado";
$tdataEstuHistEmbarazo[".printFields"][] = "Embarazocol";
$tdataEstuHistEmbarazo[".printFields"][] = "Ingresado";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","Estudiante"); 
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

	

	
	$tdataEstuHistEmbarazo["Estudiante"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","FotoRostro"); 
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

	

	
	$tdataEstuHistEmbarazo["FotoRostro"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","edad"); 
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

	

	
	$tdataEstuHistEmbarazo["edad"] = $fdata;
//	MesesNac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MesesNac";
	$fdata["GoodName"] = "MesesNac";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","MesesNac"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MesesNac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.MesesNac";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["MesesNac"] = $fdata;
//	TipoParto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TipoParto";
	$fdata["GoodName"] = "TipoParto";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","TipoParto"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoParto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.TipoParto";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["TipoParto"] = $fdata;
//	AbortosAnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AbortosAnt";
	$fdata["GoodName"] = "AbortosAnt";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","AbortosAnt"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AbortosAnt"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.AbortosAnt";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["AbortosAnt"] = $fdata;
//	Emorragias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Emorragias";
	$fdata["GoodName"] = "Emorragias";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","Emorragias"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Emorragias"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.Emorragias";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["Emorragias"] = $fdata;
//	infecciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "infecciones";
	$fdata["GoodName"] = "infecciones";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","infecciones"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "infecciones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.infecciones";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["infecciones"] = $fdata;
//	LloroPronto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LloroPronto";
	$fdata["GoodName"] = "LloroPronto";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","LloroPronto"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "LloroPronto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.LloroPronto";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["LloroPronto"] = $fdata;
//	RespiroPronto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RespiroPronto";
	$fdata["GoodName"] = "RespiroPronto";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","RespiroPronto"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RespiroPronto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.RespiroPronto";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["RespiroPronto"] = $fdata;
//	ColorNacido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ColorNacido";
	$fdata["GoodName"] = "ColorNacido";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","ColorNacido"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ColorNacido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.ColorNacido";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["ColorNacido"] = $fdata;
//	SufrimientoFetal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SufrimientoFetal";
	$fdata["GoodName"] = "SufrimientoFetal";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","SufrimientoFetal"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SufrimientoFetal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.SufrimientoFetal";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["SufrimientoFetal"] = $fdata;
//	EmbDeseado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "EmbDeseado";
	$fdata["GoodName"] = "EmbDeseado";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","EmbDeseado"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EmbDeseado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.EmbDeseado";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["EmbDeseado"] = $fdata;
//	Embarazocol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Embarazocol";
	$fdata["GoodName"] = "Embarazocol";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","Embarazocol"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Embarazocol"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.Embarazocol";
	
		
		
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

	

	
	$tdataEstuHistEmbarazo["Embarazocol"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("EstuHistEmbarazo","Ingresado"); 
	$fdata["FieldType"] = 135;
	
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
	
		$fdata["strField"] = "Ingresado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_embarazo.Ingresado";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 300;
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataEstuHistEmbarazo["Ingresado"] = $fdata;

	
$tables_data["EstuHistEmbarazo"]=&$tdataEstuHistEmbarazo;
$field_labels["EstuHistEmbarazo"] = &$fieldLabelsEstuHistEmbarazo;
$fieldToolTips["EstuHistEmbarazo"] = &$fieldToolTipsEstuHistEmbarazo;
$page_titles["EstuHistEmbarazo"] = &$pageTitlesEstuHistEmbarazo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["EstuHistEmbarazo"] = array();
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistEmbarazo"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmbarazo"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["EstuHistEmbarazo"] = array();


	
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
					$masterTablesData["EstuHistEmbarazo"][0] = $masterParams;	
				$masterTablesData["EstuHistEmbarazo"][0]["masterKeys"] = array();
	$masterTablesData["EstuHistEmbarazo"][0]["masterKeys"][]="idCentro";
				$masterTablesData["EstuHistEmbarazo"][0]["detailKeys"] = array();
	$masterTablesData["EstuHistEmbarazo"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_EstuHistEmbarazo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_embarazo.MesesNac,  lcs_embarazo.TipoParto,  lcs_embarazo.AbortosAnt,  lcs_embarazo.Emorragias,  lcs_embarazo.infecciones,  lcs_embarazo.LloroPronto,  lcs_embarazo.RespiroPronto,  lcs_embarazo.ColorNacido,  lcs_embarazo.SufrimientoFetal,  lcs_embarazo.EmbDeseado,  lcs_embarazo.Embarazocol,  lcs_embarazo.Ingresado";
$proto0["m_strFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_embarazo ON lcs_estudiante.idEstudiante = lcs_embarazo.`_idEstudiante`";
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
$proto5["m_srcTableName"] = "EstuHistEmbarazo";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto10["m_sql"] = "lcs_estudiante.FotoRostro";
$proto10["m_srcTableName"] = "EstuHistEmbarazo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto12["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto12["m_srcTableName"] = "EstuHistEmbarazo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MesesNac",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto14["m_sql"] = "lcs_embarazo.MesesNac";
$proto14["m_srcTableName"] = "EstuHistEmbarazo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoParto",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto16["m_sql"] = "lcs_embarazo.TipoParto";
$proto16["m_srcTableName"] = "EstuHistEmbarazo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AbortosAnt",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto18["m_sql"] = "lcs_embarazo.AbortosAnt";
$proto18["m_srcTableName"] = "EstuHistEmbarazo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Emorragias",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto20["m_sql"] = "lcs_embarazo.Emorragias";
$proto20["m_srcTableName"] = "EstuHistEmbarazo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "infecciones",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto22["m_sql"] = "lcs_embarazo.infecciones";
$proto22["m_srcTableName"] = "EstuHistEmbarazo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LloroPronto",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto24["m_sql"] = "lcs_embarazo.LloroPronto";
$proto24["m_srcTableName"] = "EstuHistEmbarazo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "RespiroPronto",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto26["m_sql"] = "lcs_embarazo.RespiroPronto";
$proto26["m_srcTableName"] = "EstuHistEmbarazo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ColorNacido",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto28["m_sql"] = "lcs_embarazo.ColorNacido";
$proto28["m_srcTableName"] = "EstuHistEmbarazo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SufrimientoFetal",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto30["m_sql"] = "lcs_embarazo.SufrimientoFetal";
$proto30["m_srcTableName"] = "EstuHistEmbarazo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EmbDeseado",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto32["m_sql"] = "lcs_embarazo.EmbDeseado";
$proto32["m_srcTableName"] = "EstuHistEmbarazo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Embarazocol",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto34["m_sql"] = "lcs_embarazo.Embarazocol";
$proto34["m_srcTableName"] = "EstuHistEmbarazo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto36["m_sql"] = "lcs_embarazo.Ingresado";
$proto36["m_srcTableName"] = "EstuHistEmbarazo";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "lcs_estudiante";
$proto39["m_srcTableName"] = "EstuHistEmbarazo";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "idEstudiante";
$proto39["m_columns"][] = "Nombre";
$proto39["m_columns"][] = "Apellido";
$proto39["m_columns"][] = "Direcccion";
$proto39["m_columns"][] = "FNacimiento";
$proto39["m_columns"][] = "FotoRostro";
$proto39["m_columns"][] = "Ingresado";
$proto39["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "lcs_estudiante";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "EstuHistEmbarazo";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_INNERJOIN";
			$proto43=array();
$proto43["m_strName"] = "lcs_embarazo";
$proto43["m_srcTableName"] = "EstuHistEmbarazo";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "idEmbarazo";
$proto43["m_columns"][] = "MesesNac";
$proto43["m_columns"][] = "TipoParto";
$proto43["m_columns"][] = "AbortosAnt";
$proto43["m_columns"][] = "Emorragias";
$proto43["m_columns"][] = "infecciones";
$proto43["m_columns"][] = "LloroPronto";
$proto43["m_columns"][] = "RespiroPronto";
$proto43["m_columns"][] = "ColorNacido";
$proto43["m_columns"][] = "SufrimientoFetal";
$proto43["m_columns"][] = "EmbDeseado";
$proto43["m_columns"][] = "Embarazocol";
$proto43["m_columns"][] = "Ingresado";
$proto43["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "INNER JOIN lcs_embarazo ON lcs_estudiante.idEstudiante = lcs_embarazo.`_idEstudiante`";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "EstuHistEmbarazo";
$proto44=array();
$proto44["m_sql"] = "lcs_estudiante.idEstudiante = lcs_embarazo.`_idEstudiante`";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistEmbarazo"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= lcs_embarazo.`_idEstudiante`";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="EstuHistEmbarazo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_EstuHistEmbarazo = createSqlQuery_EstuHistEmbarazo();


	
															
	
$tdataEstuHistEmbarazo[".sqlquery"] = $queryData_EstuHistEmbarazo;

$tableEvents["EstuHistEmbarazo"] = new eventsBase;
$tdataEstuHistEmbarazo[".hasEvents"] = false;

?>