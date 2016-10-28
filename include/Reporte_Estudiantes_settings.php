<?php
require_once(getabspath("classes/cipherer.php"));




$tdataReporte_Estudiantes = array();	
	$tdataReporte_Estudiantes[".truncateText"] = true;
	$tdataReporte_Estudiantes[".NumberOfChars"] = 80; 
	$tdataReporte_Estudiantes[".ShortName"] = "Reporte_Estudiantes";
	$tdataReporte_Estudiantes[".OwnerID"] = "";
	$tdataReporte_Estudiantes[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelsReporte_Estudiantes = array();
$fieldToolTipsReporte_Estudiantes = array();
$pageTitlesReporte_Estudiantes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsReporte_Estudiantes["Spanish"] = array();
	$fieldToolTipsReporte_Estudiantes["Spanish"] = array();
	$pageTitlesReporte_Estudiantes["Spanish"] = array();
	$fieldLabelsReporte_Estudiantes["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipsReporte_Estudiantes["Spanish"]["Telefono"] = "";
	$fieldLabelsReporte_Estudiantes["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsReporte_Estudiantes["Spanish"]["fecha"] = "";
	$fieldLabelsReporte_Estudiantes["Spanish"]["hora"] = "Hora";
	$fieldToolTipsReporte_Estudiantes["Spanish"]["hora"] = "";
	$fieldLabelsReporte_Estudiantes["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsReporte_Estudiantes["Spanish"]["Estudiante"] = "";
	$fieldLabelsReporte_Estudiantes["Spanish"]["Nombre_Terapista"] = "Nombre Terapista";
	$fieldToolTipsReporte_Estudiantes["Spanish"]["Nombre Terapista"] = "";
	$fieldLabelsReporte_Estudiantes["Spanish"]["edad"] = "Edad";
	$fieldToolTipsReporte_Estudiantes["Spanish"]["edad"] = "";
	$fieldLabelsReporte_Estudiantes["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsReporte_Estudiantes["Spanish"]["Direccion"] = "";
	$fieldLabelsReporte_Estudiantes["Spanish"]["Rostro"] = "Sueño";
	$fieldToolTipsReporte_Estudiantes["Spanish"]["Rostro"] = "";
	$fieldLabelsReporte_Estudiantes["Spanish"]["Terapia"] = "Terapia";
	$fieldToolTipsReporte_Estudiantes["Spanish"]["Terapia"] = "";
	if (count($fieldToolTipsReporte_Estudiantes["Spanish"]))
		$tdataReporte_Estudiantes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsReporte_Estudiantes[""] = array();
	$fieldToolTipsReporte_Estudiantes[""] = array();
	$pageTitlesReporte_Estudiantes[""] = array();
	$fieldLabelsReporte_Estudiantes[""]["Telefono"] = "Telefono";
	$fieldToolTipsReporte_Estudiantes[""]["Telefono"] = "";
	$fieldLabelsReporte_Estudiantes[""]["fecha"] = "Fecha";
	$fieldToolTipsReporte_Estudiantes[""]["fecha"] = "";
	$fieldLabelsReporte_Estudiantes[""]["hora"] = "Hora";
	$fieldToolTipsReporte_Estudiantes[""]["hora"] = "";
	$fieldLabelsReporte_Estudiantes[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsReporte_Estudiantes[""]["Estudiante"] = "";
	$fieldLabelsReporte_Estudiantes[""]["Nombre_Terapista"] = "Nombre Terapista";
	$fieldToolTipsReporte_Estudiantes[""]["Nombre Terapista"] = "";
	$fieldLabelsReporte_Estudiantes[""]["edad"] = "Edad";
	$fieldToolTipsReporte_Estudiantes[""]["edad"] = "";
	$fieldLabelsReporte_Estudiantes[""]["Direccion"] = "Direccion";
	$fieldToolTipsReporte_Estudiantes[""]["Direccion"] = "";
	$fieldLabelsReporte_Estudiantes[""]["Rostro"] = "Rostro";
	$fieldToolTipsReporte_Estudiantes[""]["Rostro"] = "";
	$fieldLabelsReporte_Estudiantes[""]["Terapia"] = "Terapia";
	$fieldToolTipsReporte_Estudiantes[""]["Terapia"] = "";
	if (count($fieldToolTipsReporte_Estudiantes[""]))
		$tdataReporte_Estudiantes[".isUseToolTips"] = true;
}
	
	
	$tdataReporte_Estudiantes[".NCSearch"] = true;



$tdataReporte_Estudiantes[".shortTableName"] = "Reporte_Estudiantes";
$tdataReporte_Estudiantes[".nSecOptions"] = 0;
$tdataReporte_Estudiantes[".recsPerRowList"] = 1;
$tdataReporte_Estudiantes[".mainTableOwnerID"] = "";
$tdataReporte_Estudiantes[".moveNext"] = 1;
$tdataReporte_Estudiantes[".nType"] = 2;

$tdataReporte_Estudiantes[".strOriginalTableName"] = "lcs_estudiante";




$tdataReporte_Estudiantes[".showAddInPopup"] = false;

$tdataReporte_Estudiantes[".showEditInPopup"] = false;

$tdataReporte_Estudiantes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataReporte_Estudiantes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataReporte_Estudiantes[".fieldsForRegister"] = array();

$tdataReporte_Estudiantes[".listAjax"] = false;

	$tdataReporte_Estudiantes[".audit"] = false;

	$tdataReporte_Estudiantes[".locking"] = false;


$tdataReporte_Estudiantes[".list"] = true;

$tdataReporte_Estudiantes[".inlineAdd"] = true;


$tdataReporte_Estudiantes[".exportTo"] = true;

$tdataReporte_Estudiantes[".printFriendly"] = true;


$tdataReporte_Estudiantes[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataReporte_Estudiantes[".searchSaving"] = false;
//

$tdataReporte_Estudiantes[".showSearchPanel"] = true;
		$tdataReporte_Estudiantes[".flexibleSearch"] = true;		

if (isMobile())
	$tdataReporte_Estudiantes[".isUseAjaxSuggest"] = false;
else 
	$tdataReporte_Estudiantes[".isUseAjaxSuggest"] = true;




$tdataReporte_Estudiantes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReporte_Estudiantes[".isUseTimeForSearch"] = false;



$tdataReporte_Estudiantes[".useDetailsPreview"] = true;


$tdataReporte_Estudiantes[".allSearchFields"] = array();
$tdataReporte_Estudiantes[".filterFields"] = array();
$tdataReporte_Estudiantes[".requiredSearchFields"] = array();

$tdataReporte_Estudiantes[".allSearchFields"][] = "fecha";
	$tdataReporte_Estudiantes[".allSearchFields"][] = "hora";
	$tdataReporte_Estudiantes[".allSearchFields"][] = "Estudiante";
	$tdataReporte_Estudiantes[".allSearchFields"][] = "edad";
	$tdataReporte_Estudiantes[".allSearchFields"][] = "Rostro";
	$tdataReporte_Estudiantes[".allSearchFields"][] = "Terapia";
	$tdataReporte_Estudiantes[".allSearchFields"][] = "Nombre Terapista";
	$tdataReporte_Estudiantes[".allSearchFields"][] = "Telefono";
	$tdataReporte_Estudiantes[".allSearchFields"][] = "Direccion";
	

$tdataReporte_Estudiantes[".googleLikeFields"] = array();
$tdataReporte_Estudiantes[".googleLikeFields"][] = "fecha";
$tdataReporte_Estudiantes[".googleLikeFields"][] = "hora";
$tdataReporte_Estudiantes[".googleLikeFields"][] = "Estudiante";
$tdataReporte_Estudiantes[".googleLikeFields"][] = "edad";
$tdataReporte_Estudiantes[".googleLikeFields"][] = "Rostro";
$tdataReporte_Estudiantes[".googleLikeFields"][] = "Terapia";
$tdataReporte_Estudiantes[".googleLikeFields"][] = "Nombre Terapista";
$tdataReporte_Estudiantes[".googleLikeFields"][] = "Telefono";
$tdataReporte_Estudiantes[".googleLikeFields"][] = "Direccion";


$tdataReporte_Estudiantes[".advSearchFields"] = array();
$tdataReporte_Estudiantes[".advSearchFields"][] = "fecha";
$tdataReporte_Estudiantes[".advSearchFields"][] = "hora";
$tdataReporte_Estudiantes[".advSearchFields"][] = "Estudiante";
$tdataReporte_Estudiantes[".advSearchFields"][] = "edad";
$tdataReporte_Estudiantes[".advSearchFields"][] = "Rostro";
$tdataReporte_Estudiantes[".advSearchFields"][] = "Terapia";
$tdataReporte_Estudiantes[".advSearchFields"][] = "Nombre Terapista";
$tdataReporte_Estudiantes[".advSearchFields"][] = "Telefono";
$tdataReporte_Estudiantes[".advSearchFields"][] = "Direccion";

$tdataReporte_Estudiantes[".tableType"] = "report";

$tdataReporte_Estudiantes[".printerPageOrientation"] = 0;
$tdataReporte_Estudiantes[".nPrinterPageScale"] = 100;

$tdataReporte_Estudiantes[".nPrinterSplitRecords"] = 40;

$tdataReporte_Estudiantes[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataReporte_Estudiantes[".reportPrintPartitionType"] = 0;	
$tdataReporte_Estudiantes[".reportPrintGroupsPerPage"] = 3;	
$tdataReporte_Estudiantes[".lowGroup"] = 3;

$tdataReporte_Estudiantes[".reportGroupFields"] = true;
$tdataReporte_Estudiantes[".pageSize"] = 5;
$tdataReporte_Estudiantes[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Nombre Terapista";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "TipoTerapia";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "fecha";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataReporte_Estudiantes[".reportGroupFieldsData"] = $reportGroupFields;






$tdataReporte_Estudiantes[".repShowDet"] = true;

$tdataReporte_Estudiantes[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataReporte_Estudiantes[".isPrinterPagePDF"] = true;
$tdataReporte_Estudiantes[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "ORDER BY lcs_terapias.fecha DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReporte_Estudiantes[".strOrderBy"] = $tstrOrderBy;

$tdataReporte_Estudiantes[".orderindexes"] = array();
$tdataReporte_Estudiantes[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "lcs_terapias.fecha");

$tdataReporte_Estudiantes[".sqlHead"] = "SELECT lcs_terapias.fecha,  lcs_terapias.hora,  concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_estudiante.FotoRostro AS Rostro,  lcs_terapias.TipoTerapia AS Terapia,  concat(lcs_terapista.Nombre, ' ', lcs_terapista.Apellido) AS `Nombre Terapista`,  lcs_terapista.Telefono,  lcs_terapista.Direccion";
$tdataReporte_Estudiantes[".sqlFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_terapias ON lcs_estudiante.idEstudiante = lcs_terapias.`_idEstudiante`  INNER JOIN lcs_terapista ON lcs_terapias.`_idterapista` = lcs_terapista.idterapista";
$tdataReporte_Estudiantes[".sqlWhereExpr"] = "";
$tdataReporte_Estudiantes[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReporte_Estudiantes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReporte_Estudiantes[".arrGroupsPerPage"] = $arrGPP;

$tdataReporte_Estudiantes[".highlightSearchResults"] = true;

$tableKeysReporte_Estudiantes = array();
$tdataReporte_Estudiantes[".Keys"] = $tableKeysReporte_Estudiantes;

$tdataReporte_Estudiantes[".listFields"] = array();
$tdataReporte_Estudiantes[".listFields"][] = "fecha";
$tdataReporte_Estudiantes[".listFields"][] = "hora";
$tdataReporte_Estudiantes[".listFields"][] = "Estudiante";
$tdataReporte_Estudiantes[".listFields"][] = "edad";
$tdataReporte_Estudiantes[".listFields"][] = "Rostro";
$tdataReporte_Estudiantes[".listFields"][] = "Terapia";
$tdataReporte_Estudiantes[".listFields"][] = "Nombre Terapista";
$tdataReporte_Estudiantes[".listFields"][] = "Telefono";
$tdataReporte_Estudiantes[".listFields"][] = "Direccion";

$tdataReporte_Estudiantes[".hideMobileList"] = array();


$tdataReporte_Estudiantes[".viewFields"] = array();
$tdataReporte_Estudiantes[".viewFields"][] = "fecha";
$tdataReporte_Estudiantes[".viewFields"][] = "hora";
$tdataReporte_Estudiantes[".viewFields"][] = "Estudiante";
$tdataReporte_Estudiantes[".viewFields"][] = "edad";
$tdataReporte_Estudiantes[".viewFields"][] = "Rostro";
$tdataReporte_Estudiantes[".viewFields"][] = "Terapia";
$tdataReporte_Estudiantes[".viewFields"][] = "Nombre Terapista";
$tdataReporte_Estudiantes[".viewFields"][] = "Telefono";
$tdataReporte_Estudiantes[".viewFields"][] = "Direccion";

$tdataReporte_Estudiantes[".addFields"] = array();

$tdataReporte_Estudiantes[".inlineAddFields"] = array();

$tdataReporte_Estudiantes[".editFields"] = array();

$tdataReporte_Estudiantes[".inlineEditFields"] = array();

$tdataReporte_Estudiantes[".exportFields"] = array();
$tdataReporte_Estudiantes[".exportFields"][] = "fecha";
$tdataReporte_Estudiantes[".exportFields"][] = "hora";
$tdataReporte_Estudiantes[".exportFields"][] = "Estudiante";
$tdataReporte_Estudiantes[".exportFields"][] = "edad";
$tdataReporte_Estudiantes[".exportFields"][] = "Rostro";
$tdataReporte_Estudiantes[".exportFields"][] = "Terapia";
$tdataReporte_Estudiantes[".exportFields"][] = "Nombre Terapista";
$tdataReporte_Estudiantes[".exportFields"][] = "Telefono";
$tdataReporte_Estudiantes[".exportFields"][] = "Direccion";

$tdataReporte_Estudiantes[".importFields"] = array();
$tdataReporte_Estudiantes[".importFields"][] = "fecha";
$tdataReporte_Estudiantes[".importFields"][] = "hora";
$tdataReporte_Estudiantes[".importFields"][] = "Estudiante";
$tdataReporte_Estudiantes[".importFields"][] = "edad";
$tdataReporte_Estudiantes[".importFields"][] = "Rostro";
$tdataReporte_Estudiantes[".importFields"][] = "Terapia";
$tdataReporte_Estudiantes[".importFields"][] = "Nombre Terapista";
$tdataReporte_Estudiantes[".importFields"][] = "Telefono";
$tdataReporte_Estudiantes[".importFields"][] = "Direccion";

$tdataReporte_Estudiantes[".printFields"] = array();
$tdataReporte_Estudiantes[".printFields"][] = "fecha";
$tdataReporte_Estudiantes[".printFields"][] = "hora";
$tdataReporte_Estudiantes[".printFields"][] = "Estudiante";
$tdataReporte_Estudiantes[".printFields"][] = "edad";
$tdataReporte_Estudiantes[".printFields"][] = "Rostro";
$tdataReporte_Estudiantes[".printFields"][] = "Terapia";
$tdataReporte_Estudiantes[".printFields"][] = "Nombre Terapista";
$tdataReporte_Estudiantes[".printFields"][] = "Telefono";
$tdataReporte_Estudiantes[".printFields"][] = "Direccion";

//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiantes","fecha"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_terapias.fecha";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataReporte_Estudiantes["fecha"] = $fdata;
//	hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hora";
	$fdata["GoodName"] = "hora";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiantes","hora"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "hora"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_terapias.hora";
	
		
		
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

	

	
	$tdataReporte_Estudiantes["hora"] = $fdata;
//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiantes","Estudiante"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido)";
	
		
		
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

	

	
	$tdataReporte_Estudiantes["Estudiante"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiantes","edad"); 
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

	

	
	$tdataReporte_Estudiantes["edad"] = $fdata;
//	Rostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Rostro";
	$fdata["GoodName"] = "Rostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiantes","Rostro"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataReporte_Estudiantes["Rostro"] = $fdata;
//	Terapia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Terapia";
	$fdata["GoodName"] = "Terapia";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiantes","Terapia"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoTerapia"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_terapias.TipoTerapia";
	
		
		
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

	

	
	$tdataReporte_Estudiantes["Terapia"] = $fdata;
//	Nombre Terapista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Nombre Terapista";
	$fdata["GoodName"] = "Nombre_Terapista";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiantes","Nombre_Terapista"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(lcs_terapista.Nombre, ' ', lcs_terapista.Apellido)";
	
		
		
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

	

	
	$tdataReporte_Estudiantes["Nombre Terapista"] = $fdata;
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiantes","Telefono"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Telefono"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_terapista.Telefono";
	
		
		
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

	

	
	$tdataReporte_Estudiantes["Telefono"] = $fdata;
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("Reporte_Estudiantes","Direccion"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Direccion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_terapista.Direccion";
	
		
		
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

	

	
	$tdataReporte_Estudiantes["Direccion"] = $fdata;

	
$tables_data["Reporte Estudiantes"]=&$tdataReporte_Estudiantes;
$field_labels["Reporte_Estudiantes"] = &$fieldLabelsReporte_Estudiantes;
$fieldToolTips["Reporte Estudiantes"] = &$fieldToolTipsReporte_Estudiantes;
$page_titles["Reporte_Estudiantes"] = &$pageTitlesReporte_Estudiantes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Reporte Estudiantes"] = array();
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
	$detailsParam["previewOnList"] = 0;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="Nombre";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";

		
	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="TipoEnfermedad";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["Reporte Estudiantes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Reporte Estudiantes"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["Reporte Estudiantes"] = array();


	
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
					$masterTablesData["Reporte Estudiantes"][0] = $masterParams;	
				$masterTablesData["Reporte Estudiantes"][0]["masterKeys"] = array();
	$masterTablesData["Reporte Estudiantes"][0]["masterKeys"][]="idCentro";
				$masterTablesData["Reporte Estudiantes"][0]["detailKeys"] = array();
	$masterTablesData["Reporte Estudiantes"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Reporte_Estudiantes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "lcs_terapias.fecha,  lcs_terapias.hora,  concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_estudiante.FotoRostro AS Rostro,  lcs_terapias.TipoTerapia AS Terapia,  concat(lcs_terapista.Nombre, ' ', lcs_terapista.Apellido) AS `Nombre Terapista`,  lcs_terapista.Telefono,  lcs_terapista.Direccion";
$proto0["m_strFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_terapias ON lcs_estudiante.idEstudiante = lcs_terapias.`_idEstudiante`  INNER JOIN lcs_terapista ON lcs_terapias.`_idterapista` = lcs_terapista.idterapista";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY lcs_terapias.fecha DESC";
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
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "Reporte Estudiantes"
));

$proto5["m_sql"] = "lcs_terapias.fecha";
$proto5["m_srcTableName"] = "Reporte Estudiantes";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "hora",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "Reporte Estudiantes"
));

$proto7["m_sql"] = "lcs_terapias.hora";
$proto7["m_srcTableName"] = "Reporte Estudiantes";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_CUSTOM";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_estudiante.Nombre"
));

$proto10["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto10["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_estudiante.Apellido"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido)";
$proto9["m_srcTableName"] = "Reporte Estudiantes";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto14["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto14["m_srcTableName"] = "Reporte Estudiantes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "Reporte Estudiantes"
));

$proto16["m_sql"] = "lcs_estudiante.FotoRostro";
$proto16["m_srcTableName"] = "Reporte Estudiantes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Rostro";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoTerapia",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "Reporte Estudiantes"
));

$proto18["m_sql"] = "lcs_terapias.TipoTerapia";
$proto18["m_srcTableName"] = "Reporte Estudiantes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Terapia";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_terapista.Nombre"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_terapista.Apellido"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "concat(lcs_terapista.Nombre, ' ', lcs_terapista.Apellido)";
$proto20["m_srcTableName"] = "Reporte Estudiantes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Nombre Terapista";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "Reporte Estudiantes"
));

$proto25["m_sql"] = "lcs_terapista.Telefono";
$proto25["m_srcTableName"] = "Reporte Estudiantes";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "Reporte Estudiantes"
));

$proto27["m_sql"] = "lcs_terapista.Direccion";
$proto27["m_srcTableName"] = "Reporte Estudiantes";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "lcs_estudiante";
$proto30["m_srcTableName"] = "Reporte Estudiantes";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "idEstudiante";
$proto30["m_columns"][] = "Nombre";
$proto30["m_columns"][] = "Apellido";
$proto30["m_columns"][] = "Direcccion";
$proto30["m_columns"][] = "FNacimiento";
$proto30["m_columns"][] = "FotoRostro";
$proto30["m_columns"][] = "Ingresado";
$proto30["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "lcs_estudiante";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "Reporte Estudiantes";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_LEFTJOIN";
			$proto34=array();
$proto34["m_strName"] = "lcs_terapias";
$proto34["m_srcTableName"] = "Reporte Estudiantes";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "idterapias";
$proto34["m_columns"][] = "fecha";
$proto34["m_columns"][] = "hora";
$proto34["m_columns"][] = "TipoTerapia";
$proto34["m_columns"][] = "Ingresado";
$proto34["m_columns"][] = "_idEstudiante";
$proto34["m_columns"][] = "_idterapista";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "LEFT OUTER JOIN lcs_terapias ON lcs_estudiante.idEstudiante = lcs_terapias.`_idEstudiante`";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "Reporte Estudiantes";
$proto35=array();
$proto35["m_sql"] = "lcs_estudiante.idEstudiante = lcs_terapias.`_idEstudiante`";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "Reporte Estudiantes"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= lcs_terapias.`_idEstudiante`";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_INNERJOIN";
			$proto38=array();
$proto38["m_strName"] = "lcs_terapista";
$proto38["m_srcTableName"] = "Reporte Estudiantes";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "idterapista";
$proto38["m_columns"][] = "Nombre";
$proto38["m_columns"][] = "Apellido";
$proto38["m_columns"][] = "Telefono";
$proto38["m_columns"][] = "Email";
$proto38["m_columns"][] = "Direccion";
$proto38["m_columns"][] = "Ingresado";
$proto38["m_columns"][] = "_idEspeMed";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "INNER JOIN lcs_terapista ON lcs_terapias.`_idterapista` = lcs_terapista.idterapista";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "Reporte Estudiantes";
$proto39=array();
$proto39["m_sql"] = "lcs_terapias.`_idterapista` = lcs_terapista.idterapista";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "_idterapista",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "Reporte Estudiantes"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= lcs_terapista.idterapista";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "Reporte Estudiantes"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Reporte Estudiantes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Reporte_Estudiantes = createSqlQuery_Reporte_Estudiantes();


	
									
	
$tdataReporte_Estudiantes[".sqlquery"] = $queryData_Reporte_Estudiantes;

$tableEvents["Reporte Estudiantes"] = new eventsBase;
$tdataReporte_Estudiantes[".hasEvents"] = false;

?>