<?php
require_once(getabspath("classes/cipherer.php"));




$tdataReporte_Estudiante_Medicamento = array();	
	$tdataReporte_Estudiante_Medicamento[".truncateText"] = true;
	$tdataReporte_Estudiante_Medicamento[".NumberOfChars"] = 80; 
	$tdataReporte_Estudiante_Medicamento[".ShortName"] = "Reporte_Estudiante_Medicamento";
	$tdataReporte_Estudiante_Medicamento[".OwnerID"] = "";
	$tdataReporte_Estudiante_Medicamento[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelsReporte_Estudiante_Medicamento = array();
$fieldToolTipsReporte_Estudiante_Medicamento = array();
$pageTitlesReporte_Estudiante_Medicamento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsReporte_Estudiante_Medicamento["Spanish"] = array();
	$fieldToolTipsReporte_Estudiante_Medicamento["Spanish"] = array();
	$pageTitlesReporte_Estudiante_Medicamento["Spanish"] = array();
	$fieldLabelsReporte_Estudiante_Medicamento["Spanish"]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsReporte_Estudiante_Medicamento["Spanish"]["FotoRostro"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento["Spanish"]["TipoEnfermedad"] = "Tipo Enfermedad";
	$fieldToolTipsReporte_Estudiante_Medicamento["Spanish"]["TipoEnfermedad"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento["Spanish"]["TipoMedicamento"] = "Tipo Medicamento";
	$fieldToolTipsReporte_Estudiante_Medicamento["Spanish"]["TipoMedicamento"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento["Spanish"]["NombreMed"] = "Medicamento";
	$fieldToolTipsReporte_Estudiante_Medicamento["Spanish"]["NombreMed"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento["Spanish"]["dias"] = "Dias";
	$fieldToolTipsReporte_Estudiante_Medicamento["Spanish"]["dias"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento["Spanish"]["Hora"] = "Hora";
	$fieldToolTipsReporte_Estudiante_Medicamento["Spanish"]["Hora"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento["Spanish"]["Dosis"] = "Dosis";
	$fieldToolTipsReporte_Estudiante_Medicamento["Spanish"]["Dosis"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsReporte_Estudiante_Medicamento["Spanish"]["Estudiante"] = "";
	if (count($fieldToolTipsReporte_Estudiante_Medicamento["Spanish"]))
		$tdataReporte_Estudiante_Medicamento[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsReporte_Estudiante_Medicamento[""] = array();
	$fieldToolTipsReporte_Estudiante_Medicamento[""] = array();
	$pageTitlesReporte_Estudiante_Medicamento[""] = array();
	$fieldLabelsReporte_Estudiante_Medicamento[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsReporte_Estudiante_Medicamento[""]["FotoRostro"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento[""]["TipoEnfermedad"] = "Tipo Enfermedad";
	$fieldToolTipsReporte_Estudiante_Medicamento[""]["TipoEnfermedad"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento[""]["TipoMedicamento"] = "Tipo Medicamento";
	$fieldToolTipsReporte_Estudiante_Medicamento[""]["TipoMedicamento"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento[""]["NombreMed"] = "Nombre Med";
	$fieldToolTipsReporte_Estudiante_Medicamento[""]["NombreMed"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento[""]["dias"] = "Dias";
	$fieldToolTipsReporte_Estudiante_Medicamento[""]["dias"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento[""]["Hora"] = "Hora";
	$fieldToolTipsReporte_Estudiante_Medicamento[""]["Hora"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento[""]["Dosis"] = "Dosis";
	$fieldToolTipsReporte_Estudiante_Medicamento[""]["Dosis"] = "";
	$fieldLabelsReporte_Estudiante_Medicamento[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsReporte_Estudiante_Medicamento[""]["Estudiante"] = "";
	if (count($fieldToolTipsReporte_Estudiante_Medicamento[""]))
		$tdataReporte_Estudiante_Medicamento[".isUseToolTips"] = true;
}
	
	
	$tdataReporte_Estudiante_Medicamento[".NCSearch"] = true;



$tdataReporte_Estudiante_Medicamento[".shortTableName"] = "Reporte_Estudiante_Medicamento";
$tdataReporte_Estudiante_Medicamento[".nSecOptions"] = 0;
$tdataReporte_Estudiante_Medicamento[".recsPerRowList"] = 1;
$tdataReporte_Estudiante_Medicamento[".mainTableOwnerID"] = "";
$tdataReporte_Estudiante_Medicamento[".moveNext"] = 1;
$tdataReporte_Estudiante_Medicamento[".nType"] = 2;

$tdataReporte_Estudiante_Medicamento[".strOriginalTableName"] = "lcs_estudiante";




$tdataReporte_Estudiante_Medicamento[".showAddInPopup"] = false;

$tdataReporte_Estudiante_Medicamento[".showEditInPopup"] = false;

$tdataReporte_Estudiante_Medicamento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataReporte_Estudiante_Medicamento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataReporte_Estudiante_Medicamento[".fieldsForRegister"] = array();

$tdataReporte_Estudiante_Medicamento[".listAjax"] = false;

	$tdataReporte_Estudiante_Medicamento[".audit"] = false;

	$tdataReporte_Estudiante_Medicamento[".locking"] = false;


$tdataReporte_Estudiante_Medicamento[".list"] = true;

$tdataReporte_Estudiante_Medicamento[".inlineAdd"] = true;


$tdataReporte_Estudiante_Medicamento[".exportTo"] = true;

$tdataReporte_Estudiante_Medicamento[".printFriendly"] = true;


$tdataReporte_Estudiante_Medicamento[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataReporte_Estudiante_Medicamento[".searchSaving"] = false;
//

$tdataReporte_Estudiante_Medicamento[".showSearchPanel"] = true;
		$tdataReporte_Estudiante_Medicamento[".flexibleSearch"] = true;		

if (isMobile())
	$tdataReporte_Estudiante_Medicamento[".isUseAjaxSuggest"] = false;
else 
	$tdataReporte_Estudiante_Medicamento[".isUseAjaxSuggest"] = true;




$tdataReporte_Estudiante_Medicamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReporte_Estudiante_Medicamento[".isUseTimeForSearch"] = false;



$tdataReporte_Estudiante_Medicamento[".useDetailsPreview"] = true;


$tdataReporte_Estudiante_Medicamento[".allSearchFields"] = array();
$tdataReporte_Estudiante_Medicamento[".filterFields"] = array();
$tdataReporte_Estudiante_Medicamento[".requiredSearchFields"] = array();

$tdataReporte_Estudiante_Medicamento[".allSearchFields"][] = "Estudiante";
	$tdataReporte_Estudiante_Medicamento[".allSearchFields"][] = "TipoMedicamento";
	$tdataReporte_Estudiante_Medicamento[".allSearchFields"][] = "NombreMed";
	$tdataReporte_Estudiante_Medicamento[".allSearchFields"][] = "Hora";
	$tdataReporte_Estudiante_Medicamento[".allSearchFields"][] = "FotoRostro";
	$tdataReporte_Estudiante_Medicamento[".allSearchFields"][] = "TipoEnfermedad";
	$tdataReporte_Estudiante_Medicamento[".allSearchFields"][] = "dias";
	$tdataReporte_Estudiante_Medicamento[".allSearchFields"][] = "Dosis";
	

$tdataReporte_Estudiante_Medicamento[".googleLikeFields"] = array();
$tdataReporte_Estudiante_Medicamento[".googleLikeFields"][] = "Estudiante";
$tdataReporte_Estudiante_Medicamento[".googleLikeFields"][] = "TipoMedicamento";
$tdataReporte_Estudiante_Medicamento[".googleLikeFields"][] = "NombreMed";
$tdataReporte_Estudiante_Medicamento[".googleLikeFields"][] = "Hora";
$tdataReporte_Estudiante_Medicamento[".googleLikeFields"][] = "FotoRostro";
$tdataReporte_Estudiante_Medicamento[".googleLikeFields"][] = "TipoEnfermedad";
$tdataReporte_Estudiante_Medicamento[".googleLikeFields"][] = "dias";
$tdataReporte_Estudiante_Medicamento[".googleLikeFields"][] = "Dosis";


$tdataReporte_Estudiante_Medicamento[".advSearchFields"] = array();
$tdataReporte_Estudiante_Medicamento[".advSearchFields"][] = "Estudiante";
$tdataReporte_Estudiante_Medicamento[".advSearchFields"][] = "TipoMedicamento";
$tdataReporte_Estudiante_Medicamento[".advSearchFields"][] = "NombreMed";
$tdataReporte_Estudiante_Medicamento[".advSearchFields"][] = "Hora";
$tdataReporte_Estudiante_Medicamento[".advSearchFields"][] = "FotoRostro";
$tdataReporte_Estudiante_Medicamento[".advSearchFields"][] = "TipoEnfermedad";
$tdataReporte_Estudiante_Medicamento[".advSearchFields"][] = "dias";
$tdataReporte_Estudiante_Medicamento[".advSearchFields"][] = "Dosis";

$tdataReporte_Estudiante_Medicamento[".tableType"] = "report";

$tdataReporte_Estudiante_Medicamento[".printerPageOrientation"] = 0;
$tdataReporte_Estudiante_Medicamento[".nPrinterPageScale"] = 100;

$tdataReporte_Estudiante_Medicamento[".nPrinterSplitRecords"] = 40;

$tdataReporte_Estudiante_Medicamento[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataReporte_Estudiante_Medicamento[".reportPrintPartitionType"] = 0;	
$tdataReporte_Estudiante_Medicamento[".reportPrintGroupsPerPage"] = 3;	
$tdataReporte_Estudiante_Medicamento[".lowGroup"] = 2;

$tdataReporte_Estudiante_Medicamento[".reportGroupFields"] = true;
$tdataReporte_Estudiante_Medicamento[".pageSize"] = 5;
$tdataReporte_Estudiante_Medicamento[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "TipoEnfermedad";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataReporte_Estudiante_Medicamento[".reportGroupFieldsData"] = $reportGroupFields;






$tdataReporte_Estudiante_Medicamento[".repShowDet"] = true;

$tdataReporte_Estudiante_Medicamento[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataReporte_Estudiante_Medicamento[".isPrinterPagePDF"] = true;
$tdataReporte_Estudiante_Medicamento[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReporte_Estudiante_Medicamento[".strOrderBy"] = $tstrOrderBy;

$tdataReporte_Estudiante_Medicamento[".orderindexes"] = array();

$tdataReporte_Estudiante_Medicamento[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,    lcs_medicamento.TipoMedicamento,  lcs_medicamento.NombreMed,  lcs_medicamento.Hora,  lcs_estudiante.FotoRostro,  lcs_enfermedades.TipoEnfermedad,  lcs_medicamento.dias,  lcs_medicamento.Dosis";
$tdataReporte_Estudiante_Medicamento[".sqlFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_enfermedades ON lcs_estudiante.idEstudiante = lcs_enfermedades.`_idEstudiante`  INNER JOIN lcs_medicamento ON lcs_enfermedades.idEnfermedades = lcs_medicamento.`_idEnfermedades`";
$tdataReporte_Estudiante_Medicamento[".sqlWhereExpr"] = "";
$tdataReporte_Estudiante_Medicamento[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReporte_Estudiante_Medicamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReporte_Estudiante_Medicamento[".arrGroupsPerPage"] = $arrGPP;

$tdataReporte_Estudiante_Medicamento[".highlightSearchResults"] = true;

$tableKeysReporte_Estudiante_Medicamento = array();
$tdataReporte_Estudiante_Medicamento[".Keys"] = $tableKeysReporte_Estudiante_Medicamento;

$tdataReporte_Estudiante_Medicamento[".listFields"] = array();
$tdataReporte_Estudiante_Medicamento[".listFields"][] = "Estudiante";
$tdataReporte_Estudiante_Medicamento[".listFields"][] = "TipoMedicamento";
$tdataReporte_Estudiante_Medicamento[".listFields"][] = "NombreMed";
$tdataReporte_Estudiante_Medicamento[".listFields"][] = "Hora";
$tdataReporte_Estudiante_Medicamento[".listFields"][] = "FotoRostro";
$tdataReporte_Estudiante_Medicamento[".listFields"][] = "TipoEnfermedad";
$tdataReporte_Estudiante_Medicamento[".listFields"][] = "dias";
$tdataReporte_Estudiante_Medicamento[".listFields"][] = "Dosis";

$tdataReporte_Estudiante_Medicamento[".hideMobileList"] = array();


$tdataReporte_Estudiante_Medicamento[".viewFields"] = array();
$tdataReporte_Estudiante_Medicamento[".viewFields"][] = "Estudiante";
$tdataReporte_Estudiante_Medicamento[".viewFields"][] = "TipoMedicamento";
$tdataReporte_Estudiante_Medicamento[".viewFields"][] = "NombreMed";
$tdataReporte_Estudiante_Medicamento[".viewFields"][] = "Hora";
$tdataReporte_Estudiante_Medicamento[".viewFields"][] = "FotoRostro";
$tdataReporte_Estudiante_Medicamento[".viewFields"][] = "TipoEnfermedad";
$tdataReporte_Estudiante_Medicamento[".viewFields"][] = "dias";
$tdataReporte_Estudiante_Medicamento[".viewFields"][] = "Dosis";

$tdataReporte_Estudiante_Medicamento[".addFields"] = array();
$tdataReporte_Estudiante_Medicamento[".addFields"][] = "FotoRostro";

$tdataReporte_Estudiante_Medicamento[".inlineAddFields"] = array();
$tdataReporte_Estudiante_Medicamento[".inlineAddFields"][] = "FotoRostro";

$tdataReporte_Estudiante_Medicamento[".editFields"] = array();
$tdataReporte_Estudiante_Medicamento[".editFields"][] = "FotoRostro";

$tdataReporte_Estudiante_Medicamento[".inlineEditFields"] = array();
$tdataReporte_Estudiante_Medicamento[".inlineEditFields"][] = "FotoRostro";

$tdataReporte_Estudiante_Medicamento[".exportFields"] = array();
$tdataReporte_Estudiante_Medicamento[".exportFields"][] = "Estudiante";
$tdataReporte_Estudiante_Medicamento[".exportFields"][] = "TipoMedicamento";
$tdataReporte_Estudiante_Medicamento[".exportFields"][] = "NombreMed";
$tdataReporte_Estudiante_Medicamento[".exportFields"][] = "Hora";
$tdataReporte_Estudiante_Medicamento[".exportFields"][] = "FotoRostro";
$tdataReporte_Estudiante_Medicamento[".exportFields"][] = "TipoEnfermedad";
$tdataReporte_Estudiante_Medicamento[".exportFields"][] = "dias";
$tdataReporte_Estudiante_Medicamento[".exportFields"][] = "Dosis";

$tdataReporte_Estudiante_Medicamento[".importFields"] = array();
$tdataReporte_Estudiante_Medicamento[".importFields"][] = "Estudiante";
$tdataReporte_Estudiante_Medicamento[".importFields"][] = "TipoMedicamento";
$tdataReporte_Estudiante_Medicamento[".importFields"][] = "NombreMed";
$tdataReporte_Estudiante_Medicamento[".importFields"][] = "Hora";
$tdataReporte_Estudiante_Medicamento[".importFields"][] = "FotoRostro";
$tdataReporte_Estudiante_Medicamento[".importFields"][] = "TipoEnfermedad";
$tdataReporte_Estudiante_Medicamento[".importFields"][] = "dias";
$tdataReporte_Estudiante_Medicamento[".importFields"][] = "Dosis";

$tdataReporte_Estudiante_Medicamento[".printFields"] = array();
$tdataReporte_Estudiante_Medicamento[".printFields"][] = "Estudiante";
$tdataReporte_Estudiante_Medicamento[".printFields"][] = "TipoMedicamento";
$tdataReporte_Estudiante_Medicamento[".printFields"][] = "NombreMed";
$tdataReporte_Estudiante_Medicamento[".printFields"][] = "Hora";
$tdataReporte_Estudiante_Medicamento[".printFields"][] = "FotoRostro";
$tdataReporte_Estudiante_Medicamento[".printFields"][] = "TipoEnfermedad";
$tdataReporte_Estudiante_Medicamento[".printFields"][] = "dias";
$tdataReporte_Estudiante_Medicamento[".printFields"][] = "Dosis";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiante_Medicamento","Estudiante"); 
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

	

	
	$tdataReporte_Estudiante_Medicamento["Estudiante"] = $fdata;
//	TipoMedicamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoMedicamento";
	$fdata["GoodName"] = "TipoMedicamento";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiante_Medicamento","TipoMedicamento"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoMedicamento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_medicamento.TipoMedicamento";
	
		
		
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

	

	
	$tdataReporte_Estudiante_Medicamento["TipoMedicamento"] = $fdata;
//	NombreMed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NombreMed";
	$fdata["GoodName"] = "NombreMed";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiante_Medicamento","NombreMed"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "NombreMed"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_medicamento.NombreMed";
	
		
		
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

	

	
	$tdataReporte_Estudiante_Medicamento["NombreMed"] = $fdata;
//	Hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Hora";
	$fdata["GoodName"] = "Hora";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiante_Medicamento","Hora"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Hora"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_medicamento.Hora";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataReporte_Estudiante_Medicamento["Hora"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiante_Medicamento","FotoRostro"); 
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

	

	
	$tdataReporte_Estudiante_Medicamento["FotoRostro"] = $fdata;
//	TipoEnfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoEnfermedad";
	$fdata["GoodName"] = "TipoEnfermedad";
	$fdata["ownerTable"] = "lcs_enfermedades";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiante_Medicamento","TipoEnfermedad"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoEnfermedad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_enfermedades.TipoEnfermedad";
	
		
		
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

	

	
	$tdataReporte_Estudiante_Medicamento["TipoEnfermedad"] = $fdata;
//	dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dias";
	$fdata["GoodName"] = "dias";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiante_Medicamento","dias"); 
	$fdata["FieldType"] = 16;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dias"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_medicamento.dias";
	
		
		
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

	

	
	$tdataReporte_Estudiante_Medicamento["dias"] = $fdata;
//	Dosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Dosis";
	$fdata["GoodName"] = "Dosis";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiante_Medicamento","Dosis"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Dosis"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_medicamento.Dosis";
	
		
		
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

	

	
	$tdataReporte_Estudiante_Medicamento["Dosis"] = $fdata;

	
$tables_data["Reporte Estudiante Medicamento"]=&$tdataReporte_Estudiante_Medicamento;
$field_labels["Reporte_Estudiante_Medicamento"] = &$fieldLabelsReporte_Estudiante_Medicamento;
$fieldToolTips["Reporte Estudiante Medicamento"] = &$fieldToolTipsReporte_Estudiante_Medicamento;
$page_titles["Reporte_Estudiante_Medicamento"] = &$pageTitlesReporte_Estudiante_Medicamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Reporte Estudiante Medicamento"] = array();
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiante Medicamento"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["Reporte Estudiante Medicamento"] = array();


	
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
					$masterTablesData["Reporte Estudiante Medicamento"][0] = $masterParams;	
				$masterTablesData["Reporte Estudiante Medicamento"][0]["masterKeys"] = array();
	$masterTablesData["Reporte Estudiante Medicamento"][0]["masterKeys"][]="idCentro";
				$masterTablesData["Reporte Estudiante Medicamento"][0]["detailKeys"] = array();
	$masterTablesData["Reporte Estudiante Medicamento"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Reporte_Estudiante_Medicamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,    lcs_medicamento.TipoMedicamento,  lcs_medicamento.NombreMed,  lcs_medicamento.Hora,  lcs_estudiante.FotoRostro,  lcs_enfermedades.TipoEnfermedad,  lcs_medicamento.dias,  lcs_medicamento.Dosis";
$proto0["m_strFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_enfermedades ON lcs_estudiante.idEstudiante = lcs_enfermedades.`_idEstudiante`  INNER JOIN lcs_medicamento ON lcs_enfermedades.idEnfermedades = lcs_medicamento.`_idEnfermedades`";
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
$proto5["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoMedicamento",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "Reporte Estudiante Medicamento"
));

$proto10["m_sql"] = "lcs_medicamento.TipoMedicamento";
$proto10["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreMed",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "Reporte Estudiante Medicamento"
));

$proto12["m_sql"] = "lcs_medicamento.NombreMed";
$proto12["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Hora",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "Reporte Estudiante Medicamento"
));

$proto14["m_sql"] = "lcs_medicamento.Hora";
$proto14["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "Reporte Estudiante Medicamento"
));

$proto16["m_sql"] = "lcs_estudiante.FotoRostro";
$proto16["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEnfermedad",
	"m_strTable" => "lcs_enfermedades",
	"m_srcTableName" => "Reporte Estudiante Medicamento"
));

$proto18["m_sql"] = "lcs_enfermedades.TipoEnfermedad";
$proto18["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dias",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "Reporte Estudiante Medicamento"
));

$proto20["m_sql"] = "lcs_medicamento.dias";
$proto20["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Dosis",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "Reporte Estudiante Medicamento"
));

$proto22["m_sql"] = "lcs_medicamento.Dosis";
$proto22["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "lcs_estudiante";
$proto25["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idEstudiante";
$proto25["m_columns"][] = "Nombre";
$proto25["m_columns"][] = "Apellido";
$proto25["m_columns"][] = "Direcccion";
$proto25["m_columns"][] = "FNacimiento";
$proto25["m_columns"][] = "FotoRostro";
$proto25["m_columns"][] = "Ingresado";
$proto25["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "lcs_estudiante";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "lcs_enfermedades";
$proto29["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "idEnfermedades";
$proto29["m_columns"][] = "TipoEnfermedad";
$proto29["m_columns"][] = "Ingresado";
$proto29["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT OUTER JOIN lcs_enfermedades ON lcs_estudiante.idEstudiante = lcs_enfermedades.`_idEstudiante`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto30=array();
$proto30["m_sql"] = "lcs_estudiante.idEstudiante = lcs_enfermedades.`_idEstudiante`";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "Reporte Estudiante Medicamento"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= lcs_enfermedades.`_idEstudiante`";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "lcs_medicamento";
$proto33["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "idMedicamento";
$proto33["m_columns"][] = "TipoMedicamento";
$proto33["m_columns"][] = "NombreMed";
$proto33["m_columns"][] = "dias";
$proto33["m_columns"][] = "Hora";
$proto33["m_columns"][] = "Dosis";
$proto33["m_columns"][] = "Ingresado";
$proto33["m_columns"][] = "_idEnfermedades";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN lcs_medicamento ON lcs_enfermedades.idEnfermedades = lcs_medicamento.`_idEnfermedades`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Reporte Estudiante Medicamento";
$proto34=array();
$proto34["m_sql"] = "lcs_enfermedades.idEnfermedades = lcs_medicamento.`_idEnfermedades`";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEnfermedades",
	"m_strTable" => "lcs_enfermedades",
	"m_srcTableName" => "Reporte Estudiante Medicamento"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= lcs_medicamento.`_idEnfermedades`";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Reporte Estudiante Medicamento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Reporte_Estudiante_Medicamento = createSqlQuery_Reporte_Estudiante_Medicamento();


	
								
	
$tdataReporte_Estudiante_Medicamento[".sqlquery"] = $queryData_Reporte_Estudiante_Medicamento;

$tableEvents["Reporte Estudiante Medicamento"] = new eventsBase;
$tdataReporte_Estudiante_Medicamento[".hasEvents"] = false;

?>