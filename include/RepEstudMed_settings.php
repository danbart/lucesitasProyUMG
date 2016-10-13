<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRepEstudMed = array();	
	$tdataRepEstudMed[".truncateText"] = true;
	$tdataRepEstudMed[".NumberOfChars"] = 80; 
	$tdataRepEstudMed[".ShortName"] = "RepEstudMed";
	$tdataRepEstudMed[".OwnerID"] = "";
	$tdataRepEstudMed[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelsRepEstudMed = array();
$fieldToolTipsRepEstudMed = array();
$pageTitlesRepEstudMed = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRepEstudMed["Spanish"] = array();
	$fieldToolTipsRepEstudMed["Spanish"] = array();
	$pageTitlesRepEstudMed["Spanish"] = array();
	$fieldLabelsRepEstudMed["Spanish"]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsRepEstudMed["Spanish"]["FotoRostro"] = "";
	$fieldLabelsRepEstudMed["Spanish"]["TipoEnfermedad"] = "Tipo Enfermedad";
	$fieldToolTipsRepEstudMed["Spanish"]["TipoEnfermedad"] = "";
	$fieldLabelsRepEstudMed["Spanish"]["TipoMedicamento"] = "Tipo Medicamento";
	$fieldToolTipsRepEstudMed["Spanish"]["TipoMedicamento"] = "";
	$fieldLabelsRepEstudMed["Spanish"]["NombreMed"] = "Medicamento";
	$fieldToolTipsRepEstudMed["Spanish"]["NombreMed"] = "";
	$fieldLabelsRepEstudMed["Spanish"]["dias"] = "Dias";
	$fieldToolTipsRepEstudMed["Spanish"]["dias"] = "";
	$fieldLabelsRepEstudMed["Spanish"]["Hora"] = "Hora";
	$fieldToolTipsRepEstudMed["Spanish"]["Hora"] = "";
	$fieldLabelsRepEstudMed["Spanish"]["Dosis"] = "Dosis";
	$fieldToolTipsRepEstudMed["Spanish"]["Dosis"] = "";
	$fieldLabelsRepEstudMed["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsRepEstudMed["Spanish"]["Estudiante"] = "";
	if (count($fieldToolTipsRepEstudMed["Spanish"]))
		$tdataRepEstudMed[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRepEstudMed[""] = array();
	$fieldToolTipsRepEstudMed[""] = array();
	$pageTitlesRepEstudMed[""] = array();
	$fieldLabelsRepEstudMed[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsRepEstudMed[""]["FotoRostro"] = "";
	$fieldLabelsRepEstudMed[""]["TipoEnfermedad"] = "Tipo Enfermedad";
	$fieldToolTipsRepEstudMed[""]["TipoEnfermedad"] = "";
	$fieldLabelsRepEstudMed[""]["TipoMedicamento"] = "Tipo Medicamento";
	$fieldToolTipsRepEstudMed[""]["TipoMedicamento"] = "";
	$fieldLabelsRepEstudMed[""]["NombreMed"] = "Nombre Med";
	$fieldToolTipsRepEstudMed[""]["NombreMed"] = "";
	$fieldLabelsRepEstudMed[""]["dias"] = "Dias";
	$fieldToolTipsRepEstudMed[""]["dias"] = "";
	$fieldLabelsRepEstudMed[""]["Hora"] = "Hora";
	$fieldToolTipsRepEstudMed[""]["Hora"] = "";
	$fieldLabelsRepEstudMed[""]["Dosis"] = "Dosis";
	$fieldToolTipsRepEstudMed[""]["Dosis"] = "";
	$fieldLabelsRepEstudMed[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsRepEstudMed[""]["Estudiante"] = "";
	if (count($fieldToolTipsRepEstudMed[""]))
		$tdataRepEstudMed[".isUseToolTips"] = true;
}
	
	
	$tdataRepEstudMed[".NCSearch"] = true;



$tdataRepEstudMed[".shortTableName"] = "RepEstudMed";
$tdataRepEstudMed[".nSecOptions"] = 0;
$tdataRepEstudMed[".recsPerRowList"] = 1;
$tdataRepEstudMed[".mainTableOwnerID"] = "";
$tdataRepEstudMed[".moveNext"] = 1;
$tdataRepEstudMed[".nType"] = 2;

$tdataRepEstudMed[".strOriginalTableName"] = "lcs_estudiante";




$tdataRepEstudMed[".showAddInPopup"] = false;

$tdataRepEstudMed[".showEditInPopup"] = false;

$tdataRepEstudMed[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRepEstudMed[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRepEstudMed[".fieldsForRegister"] = array();

$tdataRepEstudMed[".listAjax"] = false;

	$tdataRepEstudMed[".audit"] = false;

	$tdataRepEstudMed[".locking"] = false;


$tdataRepEstudMed[".list"] = true;

$tdataRepEstudMed[".inlineAdd"] = true;


$tdataRepEstudMed[".exportTo"] = true;

$tdataRepEstudMed[".printFriendly"] = true;


$tdataRepEstudMed[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataRepEstudMed[".searchSaving"] = false;
//

$tdataRepEstudMed[".showSearchPanel"] = true;
		$tdataRepEstudMed[".flexibleSearch"] = true;		

if (isMobile())
	$tdataRepEstudMed[".isUseAjaxSuggest"] = false;
else 
	$tdataRepEstudMed[".isUseAjaxSuggest"] = true;




$tdataRepEstudMed[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRepEstudMed[".isUseTimeForSearch"] = false;



$tdataRepEstudMed[".useDetailsPreview"] = true;


$tdataRepEstudMed[".allSearchFields"] = array();
$tdataRepEstudMed[".filterFields"] = array();
$tdataRepEstudMed[".requiredSearchFields"] = array();

$tdataRepEstudMed[".allSearchFields"][] = "Estudiante";
	$tdataRepEstudMed[".allSearchFields"][] = "TipoMedicamento";
	$tdataRepEstudMed[".allSearchFields"][] = "NombreMed";
	$tdataRepEstudMed[".allSearchFields"][] = "Hora";
	$tdataRepEstudMed[".allSearchFields"][] = "FotoRostro";
	$tdataRepEstudMed[".allSearchFields"][] = "TipoEnfermedad";
	$tdataRepEstudMed[".allSearchFields"][] = "dias";
	$tdataRepEstudMed[".allSearchFields"][] = "Dosis";
	

$tdataRepEstudMed[".googleLikeFields"] = array();
$tdataRepEstudMed[".googleLikeFields"][] = "Estudiante";
$tdataRepEstudMed[".googleLikeFields"][] = "TipoMedicamento";
$tdataRepEstudMed[".googleLikeFields"][] = "NombreMed";
$tdataRepEstudMed[".googleLikeFields"][] = "Hora";
$tdataRepEstudMed[".googleLikeFields"][] = "FotoRostro";
$tdataRepEstudMed[".googleLikeFields"][] = "TipoEnfermedad";
$tdataRepEstudMed[".googleLikeFields"][] = "dias";
$tdataRepEstudMed[".googleLikeFields"][] = "Dosis";


$tdataRepEstudMed[".advSearchFields"] = array();
$tdataRepEstudMed[".advSearchFields"][] = "Estudiante";
$tdataRepEstudMed[".advSearchFields"][] = "TipoMedicamento";
$tdataRepEstudMed[".advSearchFields"][] = "NombreMed";
$tdataRepEstudMed[".advSearchFields"][] = "Hora";
$tdataRepEstudMed[".advSearchFields"][] = "FotoRostro";
$tdataRepEstudMed[".advSearchFields"][] = "TipoEnfermedad";
$tdataRepEstudMed[".advSearchFields"][] = "dias";
$tdataRepEstudMed[".advSearchFields"][] = "Dosis";

$tdataRepEstudMed[".tableType"] = "report";

$tdataRepEstudMed[".printerPageOrientation"] = 0;
$tdataRepEstudMed[".nPrinterPageScale"] = 100;

$tdataRepEstudMed[".nPrinterSplitRecords"] = 40;

$tdataRepEstudMed[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataRepEstudMed[".reportPrintPartitionType"] = 0;	
$tdataRepEstudMed[".reportPrintGroupsPerPage"] = 3;	
$tdataRepEstudMed[".lowGroup"] = 2;

$tdataRepEstudMed[".reportGroupFields"] = true;
$tdataRepEstudMed[".pageSize"] = 5;
$tdataRepEstudMed[".showGroupSummaryCount"] = true;
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
$tdataRepEstudMed[".reportGroupFieldsData"] = $reportGroupFields;






$tdataRepEstudMed[".repShowDet"] = true;

$tdataRepEstudMed[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataRepEstudMed[".isPrinterPagePDF"] = true;
$tdataRepEstudMed[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRepEstudMed[".strOrderBy"] = $tstrOrderBy;

$tdataRepEstudMed[".orderindexes"] = array();

$tdataRepEstudMed[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_medicamento.TipoMedicamento,  lcs_medicamento.NombreMed,  lcs_medicamento.Hora,  lcs_estudiante.FotoRostro,  lcs_enfermedades.TipoEnfermedad,  lcs_medicamento.dias,  lcs_medicamento.Dosis";
$tdataRepEstudMed[".sqlFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_enfermedades ON lcs_estudiante.idEstudiante = lcs_enfermedades.`_idEstudiante`  INNER JOIN lcs_medicamento ON lcs_enfermedades.idEnfermedades = lcs_medicamento.`_idEnfermedades`";
$tdataRepEstudMed[".sqlWhereExpr"] = "";
$tdataRepEstudMed[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRepEstudMed[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRepEstudMed[".arrGroupsPerPage"] = $arrGPP;

$tdataRepEstudMed[".highlightSearchResults"] = true;

$tableKeysRepEstudMed = array();
$tdataRepEstudMed[".Keys"] = $tableKeysRepEstudMed;

$tdataRepEstudMed[".listFields"] = array();
$tdataRepEstudMed[".listFields"][] = "Estudiante";
$tdataRepEstudMed[".listFields"][] = "TipoMedicamento";
$tdataRepEstudMed[".listFields"][] = "NombreMed";
$tdataRepEstudMed[".listFields"][] = "Hora";
$tdataRepEstudMed[".listFields"][] = "FotoRostro";
$tdataRepEstudMed[".listFields"][] = "TipoEnfermedad";
$tdataRepEstudMed[".listFields"][] = "dias";
$tdataRepEstudMed[".listFields"][] = "Dosis";

$tdataRepEstudMed[".hideMobileList"] = array();


$tdataRepEstudMed[".viewFields"] = array();
$tdataRepEstudMed[".viewFields"][] = "Estudiante";
$tdataRepEstudMed[".viewFields"][] = "TipoMedicamento";
$tdataRepEstudMed[".viewFields"][] = "NombreMed";
$tdataRepEstudMed[".viewFields"][] = "Hora";
$tdataRepEstudMed[".viewFields"][] = "FotoRostro";
$tdataRepEstudMed[".viewFields"][] = "TipoEnfermedad";
$tdataRepEstudMed[".viewFields"][] = "dias";
$tdataRepEstudMed[".viewFields"][] = "Dosis";

$tdataRepEstudMed[".addFields"] = array();
$tdataRepEstudMed[".addFields"][] = "FotoRostro";

$tdataRepEstudMed[".inlineAddFields"] = array();
$tdataRepEstudMed[".inlineAddFields"][] = "FotoRostro";

$tdataRepEstudMed[".editFields"] = array();
$tdataRepEstudMed[".editFields"][] = "FotoRostro";

$tdataRepEstudMed[".inlineEditFields"] = array();
$tdataRepEstudMed[".inlineEditFields"][] = "FotoRostro";

$tdataRepEstudMed[".exportFields"] = array();
$tdataRepEstudMed[".exportFields"][] = "Estudiante";
$tdataRepEstudMed[".exportFields"][] = "TipoMedicamento";
$tdataRepEstudMed[".exportFields"][] = "NombreMed";
$tdataRepEstudMed[".exportFields"][] = "Hora";
$tdataRepEstudMed[".exportFields"][] = "FotoRostro";
$tdataRepEstudMed[".exportFields"][] = "TipoEnfermedad";
$tdataRepEstudMed[".exportFields"][] = "dias";
$tdataRepEstudMed[".exportFields"][] = "Dosis";

$tdataRepEstudMed[".importFields"] = array();
$tdataRepEstudMed[".importFields"][] = "Estudiante";
$tdataRepEstudMed[".importFields"][] = "TipoMedicamento";
$tdataRepEstudMed[".importFields"][] = "NombreMed";
$tdataRepEstudMed[".importFields"][] = "Hora";
$tdataRepEstudMed[".importFields"][] = "FotoRostro";
$tdataRepEstudMed[".importFields"][] = "TipoEnfermedad";
$tdataRepEstudMed[".importFields"][] = "dias";
$tdataRepEstudMed[".importFields"][] = "Dosis";

$tdataRepEstudMed[".printFields"] = array();
$tdataRepEstudMed[".printFields"][] = "Estudiante";
$tdataRepEstudMed[".printFields"][] = "TipoMedicamento";
$tdataRepEstudMed[".printFields"][] = "NombreMed";
$tdataRepEstudMed[".printFields"][] = "Hora";
$tdataRepEstudMed[".printFields"][] = "FotoRostro";
$tdataRepEstudMed[".printFields"][] = "TipoEnfermedad";
$tdataRepEstudMed[".printFields"][] = "dias";
$tdataRepEstudMed[".printFields"][] = "Dosis";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("RepEstudMed","Estudiante"); 
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

	

	
	$tdataRepEstudMed["Estudiante"] = $fdata;
//	TipoMedicamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoMedicamento";
	$fdata["GoodName"] = "TipoMedicamento";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("RepEstudMed","TipoMedicamento"); 
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

	

	
	$tdataRepEstudMed["TipoMedicamento"] = $fdata;
//	NombreMed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NombreMed";
	$fdata["GoodName"] = "NombreMed";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("RepEstudMed","NombreMed"); 
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

	

	
	$tdataRepEstudMed["NombreMed"] = $fdata;
//	Hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Hora";
	$fdata["GoodName"] = "Hora";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("RepEstudMed","Hora"); 
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

	

	
	$tdataRepEstudMed["Hora"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("RepEstudMed","FotoRostro"); 
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

	

	
	$tdataRepEstudMed["FotoRostro"] = $fdata;
//	TipoEnfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoEnfermedad";
	$fdata["GoodName"] = "TipoEnfermedad";
	$fdata["ownerTable"] = "lcs_enfermedades";
	$fdata["Label"] = GetFieldLabel("RepEstudMed","TipoEnfermedad"); 
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

	

	
	$tdataRepEstudMed["TipoEnfermedad"] = $fdata;
//	dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dias";
	$fdata["GoodName"] = "dias";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("RepEstudMed","dias"); 
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

	

	
	$tdataRepEstudMed["dias"] = $fdata;
//	Dosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Dosis";
	$fdata["GoodName"] = "Dosis";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("RepEstudMed","Dosis"); 
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

	

	
	$tdataRepEstudMed["Dosis"] = $fdata;

	
$tables_data["RepEstudMed"]=&$tdataRepEstudMed;
$field_labels["RepEstudMed"] = &$fieldLabelsRepEstudMed;
$fieldToolTips["RepEstudMed"] = &$fieldToolTipsRepEstudMed;
$page_titles["RepEstudMed"] = &$pageTitlesRepEstudMed;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RepEstudMed"] = array();
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["RepEstudMed"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RepEstudMed"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["RepEstudMed"] = array();


	
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
					$masterTablesData["RepEstudMed"][0] = $masterParams;	
				$masterTablesData["RepEstudMed"][0]["masterKeys"] = array();
	$masterTablesData["RepEstudMed"][0]["masterKeys"][]="idCentro";
				$masterTablesData["RepEstudMed"][0]["detailKeys"] = array();
	$masterTablesData["RepEstudMed"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RepEstudMed()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_medicamento.TipoMedicamento,  lcs_medicamento.NombreMed,  lcs_medicamento.Hora,  lcs_estudiante.FotoRostro,  lcs_enfermedades.TipoEnfermedad,  lcs_medicamento.dias,  lcs_medicamento.Dosis";
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
$proto5["m_srcTableName"] = "RepEstudMed";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoMedicamento",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "RepEstudMed"
));

$proto10["m_sql"] = "lcs_medicamento.TipoMedicamento";
$proto10["m_srcTableName"] = "RepEstudMed";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreMed",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "RepEstudMed"
));

$proto12["m_sql"] = "lcs_medicamento.NombreMed";
$proto12["m_srcTableName"] = "RepEstudMed";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Hora",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "RepEstudMed"
));

$proto14["m_sql"] = "lcs_medicamento.Hora";
$proto14["m_srcTableName"] = "RepEstudMed";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "RepEstudMed"
));

$proto16["m_sql"] = "lcs_estudiante.FotoRostro";
$proto16["m_srcTableName"] = "RepEstudMed";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEnfermedad",
	"m_strTable" => "lcs_enfermedades",
	"m_srcTableName" => "RepEstudMed"
));

$proto18["m_sql"] = "lcs_enfermedades.TipoEnfermedad";
$proto18["m_srcTableName"] = "RepEstudMed";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dias",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "RepEstudMed"
));

$proto20["m_sql"] = "lcs_medicamento.dias";
$proto20["m_srcTableName"] = "RepEstudMed";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Dosis",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "RepEstudMed"
));

$proto22["m_sql"] = "lcs_medicamento.Dosis";
$proto22["m_srcTableName"] = "RepEstudMed";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "lcs_estudiante";
$proto25["m_srcTableName"] = "RepEstudMed";
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
$proto24["m_srcTableName"] = "RepEstudMed";
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
$proto29["m_srcTableName"] = "RepEstudMed";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "idEnfermedades";
$proto29["m_columns"][] = "TipoEnfermedad";
$proto29["m_columns"][] = "Ingresado";
$proto29["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT OUTER JOIN lcs_enfermedades ON lcs_estudiante.idEstudiante = lcs_enfermedades.`_idEstudiante`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "RepEstudMed";
$proto30=array();
$proto30["m_sql"] = "lcs_estudiante.idEstudiante = lcs_enfermedades.`_idEstudiante`";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "RepEstudMed"
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
$proto33["m_srcTableName"] = "RepEstudMed";
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
$proto32["m_srcTableName"] = "RepEstudMed";
$proto34=array();
$proto34["m_sql"] = "lcs_enfermedades.idEnfermedades = lcs_medicamento.`_idEnfermedades`";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEnfermedades",
	"m_strTable" => "lcs_enfermedades",
	"m_srcTableName" => "RepEstudMed"
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
$proto0["m_srcTableName"]="RepEstudMed";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_RepEstudMed = createSqlQuery_RepEstudMed();


	
								
	
$tdataRepEstudMed[".sqlquery"] = $queryData_RepEstudMed;

$tableEvents["RepEstudMed"] = new eventsBase;
$tdataRepEstudMed[".hasEvents"] = false;

?>