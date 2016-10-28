<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTranstornosSueno = array();	
	$tdataTranstornosSueno[".truncateText"] = true;
	$tdataTranstornosSueno[".NumberOfChars"] = 80; 
	$tdataTranstornosSueno[".ShortName"] = "TranstornosSueno";
	$tdataTranstornosSueno[".OwnerID"] = "";
	$tdataTranstornosSueno[".OriginalTable"] = "lcs_transtornoalimenticio";

//	field labels
$fieldLabelsTranstornosSueno = array();
$fieldToolTipsTranstornosSueno = array();
$pageTitlesTranstornosSueno = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTranstornosSueno["Spanish"] = array();
	$fieldToolTipsTranstornosSueno["Spanish"] = array();
	$pageTitlesTranstornosSueno["Spanish"] = array();
	$fieldLabelsTranstornosSueno["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsTranstornosSueno["Spanish"]["Estudiante"] = "";
	$fieldLabelsTranstornosSueno["Spanish"]["edad"] = "Edad";
	$fieldToolTipsTranstornosSueno["Spanish"]["edad"] = "";
	$fieldLabelsTranstornosSueno["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipsTranstornosSueno["Spanish"]["Ingresado"] = "";
	$fieldLabelsTranstornosSueno["Spanish"]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsTranstornosSueno["Spanish"]["FotoRostro"] = "";
	$fieldLabelsTranstornosSueno["Spanish"]["TipoTSue_o"] = "Sueño";
	$fieldToolTipsTranstornosSueno["Spanish"]["TipoTSueño"] = "";
	if (count($fieldToolTipsTranstornosSueno["Spanish"]))
		$tdataTranstornosSueno[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTranstornosSueno[""] = array();
	$fieldToolTipsTranstornosSueno[""] = array();
	$pageTitlesTranstornosSueno[""] = array();
	$fieldLabelsTranstornosSueno[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsTranstornosSueno[""]["Estudiante"] = "";
	$fieldLabelsTranstornosSueno[""]["edad"] = "Edad";
	$fieldToolTipsTranstornosSueno[""]["edad"] = "";
	$fieldLabelsTranstornosSueno[""]["Ingresado"] = "Ingresado";
	$fieldToolTipsTranstornosSueno[""]["Ingresado"] = "";
	$fieldLabelsTranstornosSueno[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsTranstornosSueno[""]["FotoRostro"] = "";
	$fieldLabelsTranstornosSueno[""]["TipoTSue_o"] = "Tipo TSueño";
	$fieldToolTipsTranstornosSueno[""]["TipoTSueño"] = "";
	if (count($fieldToolTipsTranstornosSueno[""]))
		$tdataTranstornosSueno[".isUseToolTips"] = true;
}
	
	
	$tdataTranstornosSueno[".NCSearch"] = true;



$tdataTranstornosSueno[".shortTableName"] = "TranstornosSueno";
$tdataTranstornosSueno[".nSecOptions"] = 0;
$tdataTranstornosSueno[".recsPerRowList"] = 1;
$tdataTranstornosSueno[".mainTableOwnerID"] = "";
$tdataTranstornosSueno[".moveNext"] = 1;
$tdataTranstornosSueno[".nType"] = 2;

$tdataTranstornosSueno[".strOriginalTableName"] = "lcs_transtornoalimenticio";




$tdataTranstornosSueno[".showAddInPopup"] = false;

$tdataTranstornosSueno[".showEditInPopup"] = false;

$tdataTranstornosSueno[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTranstornosSueno[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTranstornosSueno[".fieldsForRegister"] = array();

$tdataTranstornosSueno[".listAjax"] = false;

	$tdataTranstornosSueno[".audit"] = false;

	$tdataTranstornosSueno[".locking"] = false;


$tdataTranstornosSueno[".list"] = true;

$tdataTranstornosSueno[".inlineAdd"] = true;


$tdataTranstornosSueno[".exportTo"] = true;

$tdataTranstornosSueno[".printFriendly"] = true;


$tdataTranstornosSueno[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTranstornosSueno[".searchSaving"] = false;
//

$tdataTranstornosSueno[".showSearchPanel"] = true;
		$tdataTranstornosSueno[".flexibleSearch"] = true;		

if (isMobile())
	$tdataTranstornosSueno[".isUseAjaxSuggest"] = false;
else 
	$tdataTranstornosSueno[".isUseAjaxSuggest"] = true;




$tdataTranstornosSueno[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTranstornosSueno[".isUseTimeForSearch"] = false;





$tdataTranstornosSueno[".allSearchFields"] = array();
$tdataTranstornosSueno[".filterFields"] = array();
$tdataTranstornosSueno[".requiredSearchFields"] = array();

$tdataTranstornosSueno[".allSearchFields"][] = "Estudiante";
	$tdataTranstornosSueno[".allSearchFields"][] = "edad";
	$tdataTranstornosSueno[".allSearchFields"][] = "FotoRostro";
	$tdataTranstornosSueno[".allSearchFields"][] = "Ingresado";
	$tdataTranstornosSueno[".allSearchFields"][] = "TipoTSueño";
	

$tdataTranstornosSueno[".googleLikeFields"] = array();
$tdataTranstornosSueno[".googleLikeFields"][] = "Estudiante";
$tdataTranstornosSueno[".googleLikeFields"][] = "edad";
$tdataTranstornosSueno[".googleLikeFields"][] = "FotoRostro";
$tdataTranstornosSueno[".googleLikeFields"][] = "Ingresado";
$tdataTranstornosSueno[".googleLikeFields"][] = "TipoTSueño";


$tdataTranstornosSueno[".advSearchFields"] = array();
$tdataTranstornosSueno[".advSearchFields"][] = "Estudiante";
$tdataTranstornosSueno[".advSearchFields"][] = "edad";
$tdataTranstornosSueno[".advSearchFields"][] = "FotoRostro";
$tdataTranstornosSueno[".advSearchFields"][] = "Ingresado";
$tdataTranstornosSueno[".advSearchFields"][] = "TipoTSueño";

$tdataTranstornosSueno[".tableType"] = "report";

$tdataTranstornosSueno[".printerPageOrientation"] = 0;
$tdataTranstornosSueno[".nPrinterPageScale"] = 100;

$tdataTranstornosSueno[".nPrinterSplitRecords"] = 40;

$tdataTranstornosSueno[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataTranstornosSueno[".reportPrintPartitionType"] = 0;	
$tdataTranstornosSueno[".reportPrintGroupsPerPage"] = 3;	
$tdataTranstornosSueno[".lowGroup"] = 1;

$tdataTranstornosSueno[".reportGroupFields"] = true;
$tdataTranstornosSueno[".pageSize"] = 5;
$tdataTranstornosSueno[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataTranstornosSueno[".reportGroupFieldsData"] = $reportGroupFields;


$tdataTranstornosSueno[".isExistTotalFields"] = true;




$tdataTranstornosSueno[".repShowDet"] = true;

$tdataTranstornosSueno[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataTranstornosSueno[".isPrinterPagePDF"] = true;
$tdataTranstornosSueno[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTranstornosSueno[".strOrderBy"] = $tstrOrderBy;

$tdataTranstornosSueno[".orderindexes"] = array();

$tdataTranstornosSueno[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_estudiante.FotoRostro,  lcs_trastornosuenio.Ingresado,  lcs_trastornosuenio.`TipoTSueño`";
$tdataTranstornosSueno[".sqlFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_trastornosuenio ON lcs_estudiante.idEstudiante = lcs_trastornosuenio.`_idEstudiante`";
$tdataTranstornosSueno[".sqlWhereExpr"] = "";
$tdataTranstornosSueno[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTranstornosSueno[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTranstornosSueno[".arrGroupsPerPage"] = $arrGPP;

$tdataTranstornosSueno[".highlightSearchResults"] = true;

$tableKeysTranstornosSueno = array();
$tdataTranstornosSueno[".Keys"] = $tableKeysTranstornosSueno;

$tdataTranstornosSueno[".listFields"] = array();
$tdataTranstornosSueno[".listFields"][] = "Estudiante";
$tdataTranstornosSueno[".listFields"][] = "edad";
$tdataTranstornosSueno[".listFields"][] = "FotoRostro";
$tdataTranstornosSueno[".listFields"][] = "Ingresado";
$tdataTranstornosSueno[".listFields"][] = "TipoTSueño";

$tdataTranstornosSueno[".hideMobileList"] = array();


$tdataTranstornosSueno[".viewFields"] = array();
$tdataTranstornosSueno[".viewFields"][] = "Estudiante";
$tdataTranstornosSueno[".viewFields"][] = "edad";
$tdataTranstornosSueno[".viewFields"][] = "FotoRostro";
$tdataTranstornosSueno[".viewFields"][] = "Ingresado";
$tdataTranstornosSueno[".viewFields"][] = "TipoTSueño";

$tdataTranstornosSueno[".addFields"] = array();
$tdataTranstornosSueno[".addFields"][] = "Ingresado";

$tdataTranstornosSueno[".inlineAddFields"] = array();
$tdataTranstornosSueno[".inlineAddFields"][] = "Ingresado";

$tdataTranstornosSueno[".editFields"] = array();
$tdataTranstornosSueno[".editFields"][] = "Ingresado";

$tdataTranstornosSueno[".inlineEditFields"] = array();
$tdataTranstornosSueno[".inlineEditFields"][] = "Ingresado";

$tdataTranstornosSueno[".exportFields"] = array();
$tdataTranstornosSueno[".exportFields"][] = "Estudiante";
$tdataTranstornosSueno[".exportFields"][] = "edad";
$tdataTranstornosSueno[".exportFields"][] = "FotoRostro";
$tdataTranstornosSueno[".exportFields"][] = "Ingresado";
$tdataTranstornosSueno[".exportFields"][] = "TipoTSueño";

$tdataTranstornosSueno[".importFields"] = array();
$tdataTranstornosSueno[".importFields"][] = "Estudiante";
$tdataTranstornosSueno[".importFields"][] = "edad";
$tdataTranstornosSueno[".importFields"][] = "FotoRostro";
$tdataTranstornosSueno[".importFields"][] = "Ingresado";
$tdataTranstornosSueno[".importFields"][] = "TipoTSueño";

$tdataTranstornosSueno[".printFields"] = array();
$tdataTranstornosSueno[".printFields"][] = "Estudiante";
$tdataTranstornosSueno[".printFields"][] = "edad";
$tdataTranstornosSueno[".printFields"][] = "FotoRostro";
$tdataTranstornosSueno[".printFields"][] = "Ingresado";
$tdataTranstornosSueno[".printFields"][] = "TipoTSueño";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TranstornosSueno","Estudiante"); 
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

	

	
	$tdataTranstornosSueno["Estudiante"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TranstornosSueno","edad"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
		$fdata["isTotalMin"] = true;
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

	

	
	$tdataTranstornosSueno["edad"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("TranstornosSueno","FotoRostro"); 
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
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
			$vdata["ImageWidth"] = 357;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataTranstornosSueno["FotoRostro"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_trastornosuenio";
	$fdata["Label"] = GetFieldLabel("TranstornosSueno","Ingresado"); 
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
	$fdata["FullName"] = "lcs_trastornosuenio.Ingresado";
	
		
		
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
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
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
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataTranstornosSueno["Ingresado"] = $fdata;
//	TipoTSueño
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TipoTSueño";
	$fdata["GoodName"] = "TipoTSue_o";
	$fdata["ownerTable"] = "lcs_trastornosuenio";
	$fdata["Label"] = GetFieldLabel("TranstornosSueno","TipoTSue_o"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoTSueño"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_trastornosuenio.`TipoTSueño`";
	
		
		
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

	

	
	$tdataTranstornosSueno["TipoTSueño"] = $fdata;

	
$tables_data["TranstornosSueno"]=&$tdataTranstornosSueno;
$field_labels["TranstornosSueno"] = &$fieldLabelsTranstornosSueno;
$fieldToolTips["TranstornosSueno"] = &$fieldToolTipsTranstornosSueno;
$page_titles["TranstornosSueno"] = &$pageTitlesTranstornosSueno;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TranstornosSueno"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["TranstornosSueno"] = array();


	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="lcs_estudiante";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lcs_estudiante";
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
					$masterTablesData["TranstornosSueno"][0] = $masterParams;	
				$masterTablesData["TranstornosSueno"][0]["masterKeys"] = array();
	$masterTablesData["TranstornosSueno"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["TranstornosSueno"][0]["detailKeys"] = array();
	$masterTablesData["TranstornosSueno"][0]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TranstornosSueno()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_estudiante.FotoRostro,  lcs_trastornosuenio.Ingresado,  lcs_trastornosuenio.`TipoTSueño`";
$proto0["m_strFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_trastornosuenio ON lcs_estudiante.idEstudiante = lcs_trastornosuenio.`_idEstudiante`";
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
	"m_sql" => "' '"
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_estudiante.Apellido"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido)";
$proto5["m_srcTableName"] = "TranstornosSueno";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto10["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto10["m_srcTableName"] = "TranstornosSueno";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "TranstornosSueno"
));

$proto12["m_sql"] = "lcs_estudiante.FotoRostro";
$proto12["m_srcTableName"] = "TranstornosSueno";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_trastornosuenio",
	"m_srcTableName" => "TranstornosSueno"
));

$proto14["m_sql"] = "lcs_trastornosuenio.Ingresado";
$proto14["m_srcTableName"] = "TranstornosSueno";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoTSueño",
	"m_strTable" => "lcs_trastornosuenio",
	"m_srcTableName" => "TranstornosSueno"
));

$proto16["m_sql"] = "lcs_trastornosuenio.`TipoTSueño`";
$proto16["m_srcTableName"] = "TranstornosSueno";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "lcs_estudiante";
$proto19["m_srcTableName"] = "TranstornosSueno";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idEstudiante";
$proto19["m_columns"][] = "Nombre";
$proto19["m_columns"][] = "Apellido";
$proto19["m_columns"][] = "Direcccion";
$proto19["m_columns"][] = "FNacimiento";
$proto19["m_columns"][] = "FotoRostro";
$proto19["m_columns"][] = "Ingresado";
$proto19["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "lcs_estudiante";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "TranstornosSueno";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "lcs_trastornosuenio";
$proto23["m_srcTableName"] = "TranstornosSueno";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idTrastornoSuenio";
$proto23["m_columns"][] = "TipoTSueño";
$proto23["m_columns"][] = "Ingresado";
$proto23["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN lcs_trastornosuenio ON lcs_estudiante.idEstudiante = lcs_trastornosuenio.`_idEstudiante`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "TranstornosSueno";
$proto24=array();
$proto24["m_sql"] = "lcs_estudiante.idEstudiante = lcs_trastornosuenio.`_idEstudiante`";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "TranstornosSueno"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= lcs_trastornosuenio.`_idEstudiante`";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TranstornosSueno";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TranstornosSueno = createSqlQuery_TranstornosSueno();


	
					
	
$tdataTranstornosSueno[".sqlquery"] = $queryData_TranstornosSueno;

$tableEvents["TranstornosSueno"] = new eventsBase;
$tdataTranstornosSueno[".hasEvents"] = false;

?>