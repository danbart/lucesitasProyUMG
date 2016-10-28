<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTranstornosAlimenticio = array();	
	$tdataTranstornosAlimenticio[".truncateText"] = true;
	$tdataTranstornosAlimenticio[".NumberOfChars"] = 80; 
	$tdataTranstornosAlimenticio[".ShortName"] = "TranstornosAlimenticio";
	$tdataTranstornosAlimenticio[".OwnerID"] = "";
	$tdataTranstornosAlimenticio[".OriginalTable"] = "lcs_transtornoalimenticio";

//	field labels
$fieldLabelsTranstornosAlimenticio = array();
$fieldToolTipsTranstornosAlimenticio = array();
$pageTitlesTranstornosAlimenticio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTranstornosAlimenticio["Spanish"] = array();
	$fieldToolTipsTranstornosAlimenticio["Spanish"] = array();
	$pageTitlesTranstornosAlimenticio["Spanish"] = array();
	$fieldLabelsTranstornosAlimenticio["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsTranstornosAlimenticio["Spanish"]["Estudiante"] = "";
	$fieldLabelsTranstornosAlimenticio["Spanish"]["edad"] = "Edad";
	$fieldToolTipsTranstornosAlimenticio["Spanish"]["edad"] = "";
	$fieldLabelsTranstornosAlimenticio["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipsTranstornosAlimenticio["Spanish"]["Ingresado"] = "";
	$fieldLabelsTranstornosAlimenticio["Spanish"]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsTranstornosAlimenticio["Spanish"]["FotoRostro"] = "";
	$fieldLabelsTranstornosAlimenticio["Spanish"]["TipoTAlimenticio"] = "Alimenticio";
	$fieldToolTipsTranstornosAlimenticio["Spanish"]["TipoTAlimenticio"] = "";
	if (count($fieldToolTipsTranstornosAlimenticio["Spanish"]))
		$tdataTranstornosAlimenticio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTranstornosAlimenticio[""] = array();
	$fieldToolTipsTranstornosAlimenticio[""] = array();
	$pageTitlesTranstornosAlimenticio[""] = array();
	$fieldLabelsTranstornosAlimenticio[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsTranstornosAlimenticio[""]["Estudiante"] = "";
	$fieldLabelsTranstornosAlimenticio[""]["edad"] = "Edad";
	$fieldToolTipsTranstornosAlimenticio[""]["edad"] = "";
	$fieldLabelsTranstornosAlimenticio[""]["Ingresado"] = "Ingresado";
	$fieldToolTipsTranstornosAlimenticio[""]["Ingresado"] = "";
	$fieldLabelsTranstornosAlimenticio[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsTranstornosAlimenticio[""]["FotoRostro"] = "";
	$fieldLabelsTranstornosAlimenticio[""]["TipoTAlimenticio"] = "Tipo TAlimenticio";
	$fieldToolTipsTranstornosAlimenticio[""]["TipoTAlimenticio"] = "";
	if (count($fieldToolTipsTranstornosAlimenticio[""]))
		$tdataTranstornosAlimenticio[".isUseToolTips"] = true;
}
	
	
	$tdataTranstornosAlimenticio[".NCSearch"] = true;



$tdataTranstornosAlimenticio[".shortTableName"] = "TranstornosAlimenticio";
$tdataTranstornosAlimenticio[".nSecOptions"] = 0;
$tdataTranstornosAlimenticio[".recsPerRowList"] = 1;
$tdataTranstornosAlimenticio[".mainTableOwnerID"] = "";
$tdataTranstornosAlimenticio[".moveNext"] = 1;
$tdataTranstornosAlimenticio[".nType"] = 2;

$tdataTranstornosAlimenticio[".strOriginalTableName"] = "lcs_transtornoalimenticio";




$tdataTranstornosAlimenticio[".showAddInPopup"] = false;

$tdataTranstornosAlimenticio[".showEditInPopup"] = false;

$tdataTranstornosAlimenticio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTranstornosAlimenticio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTranstornosAlimenticio[".fieldsForRegister"] = array();

$tdataTranstornosAlimenticio[".listAjax"] = false;

	$tdataTranstornosAlimenticio[".audit"] = false;

	$tdataTranstornosAlimenticio[".locking"] = false;


$tdataTranstornosAlimenticio[".list"] = true;

$tdataTranstornosAlimenticio[".inlineAdd"] = true;


$tdataTranstornosAlimenticio[".exportTo"] = true;

$tdataTranstornosAlimenticio[".printFriendly"] = true;


$tdataTranstornosAlimenticio[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTranstornosAlimenticio[".searchSaving"] = false;
//

$tdataTranstornosAlimenticio[".showSearchPanel"] = true;
		$tdataTranstornosAlimenticio[".flexibleSearch"] = true;		

if (isMobile())
	$tdataTranstornosAlimenticio[".isUseAjaxSuggest"] = false;
else 
	$tdataTranstornosAlimenticio[".isUseAjaxSuggest"] = true;




$tdataTranstornosAlimenticio[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTranstornosAlimenticio[".isUseTimeForSearch"] = false;





$tdataTranstornosAlimenticio[".allSearchFields"] = array();
$tdataTranstornosAlimenticio[".filterFields"] = array();
$tdataTranstornosAlimenticio[".requiredSearchFields"] = array();

$tdataTranstornosAlimenticio[".allSearchFields"][] = "Estudiante";
	$tdataTranstornosAlimenticio[".allSearchFields"][] = "edad";
	$tdataTranstornosAlimenticio[".allSearchFields"][] = "TipoTAlimenticio";
	$tdataTranstornosAlimenticio[".allSearchFields"][] = "FotoRostro";
	$tdataTranstornosAlimenticio[".allSearchFields"][] = "Ingresado";
	

$tdataTranstornosAlimenticio[".googleLikeFields"] = array();
$tdataTranstornosAlimenticio[".googleLikeFields"][] = "Estudiante";
$tdataTranstornosAlimenticio[".googleLikeFields"][] = "edad";
$tdataTranstornosAlimenticio[".googleLikeFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".googleLikeFields"][] = "FotoRostro";
$tdataTranstornosAlimenticio[".googleLikeFields"][] = "Ingresado";


$tdataTranstornosAlimenticio[".advSearchFields"] = array();
$tdataTranstornosAlimenticio[".advSearchFields"][] = "Estudiante";
$tdataTranstornosAlimenticio[".advSearchFields"][] = "edad";
$tdataTranstornosAlimenticio[".advSearchFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".advSearchFields"][] = "FotoRostro";
$tdataTranstornosAlimenticio[".advSearchFields"][] = "Ingresado";

$tdataTranstornosAlimenticio[".tableType"] = "report";

$tdataTranstornosAlimenticio[".printerPageOrientation"] = 0;
$tdataTranstornosAlimenticio[".nPrinterPageScale"] = 100;

$tdataTranstornosAlimenticio[".nPrinterSplitRecords"] = 40;

$tdataTranstornosAlimenticio[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataTranstornosAlimenticio[".reportPrintPartitionType"] = 0;	
$tdataTranstornosAlimenticio[".reportPrintGroupsPerPage"] = 3;	
$tdataTranstornosAlimenticio[".lowGroup"] = 1;

$tdataTranstornosAlimenticio[".reportGroupFields"] = true;
$tdataTranstornosAlimenticio[".pageSize"] = 5;
$tdataTranstornosAlimenticio[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataTranstornosAlimenticio[".reportGroupFieldsData"] = $reportGroupFields;


$tdataTranstornosAlimenticio[".isExistTotalFields"] = true;




$tdataTranstornosAlimenticio[".repShowDet"] = true;

$tdataTranstornosAlimenticio[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataTranstornosAlimenticio[".isPrinterPagePDF"] = true;
$tdataTranstornosAlimenticio[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTranstornosAlimenticio[".strOrderBy"] = $tstrOrderBy;

$tdataTranstornosAlimenticio[".orderindexes"] = array();

$tdataTranstornosAlimenticio[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_transtornoalimenticio.TipoTAlimenticio,  lcs_estudiante.FotoRostro,  lcs_transtornoalimenticio.Ingresado";
$tdataTranstornosAlimenticio[".sqlFrom"] = "FROM lcs_transtornoalimenticio  INNER JOIN lcs_estudiante ON lcs_transtornoalimenticio.`_idEstudiante` = lcs_estudiante.idEstudiante";
$tdataTranstornosAlimenticio[".sqlWhereExpr"] = "";
$tdataTranstornosAlimenticio[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTranstornosAlimenticio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTranstornosAlimenticio[".arrGroupsPerPage"] = $arrGPP;

$tdataTranstornosAlimenticio[".highlightSearchResults"] = true;

$tableKeysTranstornosAlimenticio = array();
$tdataTranstornosAlimenticio[".Keys"] = $tableKeysTranstornosAlimenticio;

$tdataTranstornosAlimenticio[".listFields"] = array();
$tdataTranstornosAlimenticio[".listFields"][] = "Estudiante";
$tdataTranstornosAlimenticio[".listFields"][] = "edad";
$tdataTranstornosAlimenticio[".listFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".listFields"][] = "FotoRostro";
$tdataTranstornosAlimenticio[".listFields"][] = "Ingresado";

$tdataTranstornosAlimenticio[".hideMobileList"] = array();


$tdataTranstornosAlimenticio[".viewFields"] = array();
$tdataTranstornosAlimenticio[".viewFields"][] = "Estudiante";
$tdataTranstornosAlimenticio[".viewFields"][] = "edad";
$tdataTranstornosAlimenticio[".viewFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".viewFields"][] = "FotoRostro";
$tdataTranstornosAlimenticio[".viewFields"][] = "Ingresado";

$tdataTranstornosAlimenticio[".addFields"] = array();
$tdataTranstornosAlimenticio[".addFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".addFields"][] = "Ingresado";

$tdataTranstornosAlimenticio[".inlineAddFields"] = array();
$tdataTranstornosAlimenticio[".inlineAddFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".inlineAddFields"][] = "Ingresado";

$tdataTranstornosAlimenticio[".editFields"] = array();
$tdataTranstornosAlimenticio[".editFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".editFields"][] = "Ingresado";

$tdataTranstornosAlimenticio[".inlineEditFields"] = array();
$tdataTranstornosAlimenticio[".inlineEditFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".inlineEditFields"][] = "Ingresado";

$tdataTranstornosAlimenticio[".exportFields"] = array();
$tdataTranstornosAlimenticio[".exportFields"][] = "Estudiante";
$tdataTranstornosAlimenticio[".exportFields"][] = "edad";
$tdataTranstornosAlimenticio[".exportFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".exportFields"][] = "FotoRostro";
$tdataTranstornosAlimenticio[".exportFields"][] = "Ingresado";

$tdataTranstornosAlimenticio[".importFields"] = array();
$tdataTranstornosAlimenticio[".importFields"][] = "Estudiante";
$tdataTranstornosAlimenticio[".importFields"][] = "edad";
$tdataTranstornosAlimenticio[".importFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".importFields"][] = "FotoRostro";
$tdataTranstornosAlimenticio[".importFields"][] = "Ingresado";

$tdataTranstornosAlimenticio[".printFields"] = array();
$tdataTranstornosAlimenticio[".printFields"][] = "Estudiante";
$tdataTranstornosAlimenticio[".printFields"][] = "edad";
$tdataTranstornosAlimenticio[".printFields"][] = "TipoTAlimenticio";
$tdataTranstornosAlimenticio[".printFields"][] = "FotoRostro";
$tdataTranstornosAlimenticio[".printFields"][] = "Ingresado";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TranstornosAlimenticio","Estudiante"); 
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

	

	
	$tdataTranstornosAlimenticio["Estudiante"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TranstornosAlimenticio","edad"); 
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

	

	
	$tdataTranstornosAlimenticio["edad"] = $fdata;
//	TipoTAlimenticio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoTAlimenticio";
	$fdata["GoodName"] = "TipoTAlimenticio";
	$fdata["ownerTable"] = "lcs_transtornoalimenticio";
	$fdata["Label"] = GetFieldLabel("TranstornosAlimenticio","TipoTAlimenticio"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "TipoTAlimenticio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_transtornoalimenticio.TipoTAlimenticio";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTranstornosAlimenticio["TipoTAlimenticio"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("TranstornosAlimenticio","FotoRostro"); 
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

	

	
	$tdataTranstornosAlimenticio["FotoRostro"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_transtornoalimenticio";
	$fdata["Label"] = GetFieldLabel("TranstornosAlimenticio","Ingresado"); 
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
	$fdata["FullName"] = "lcs_transtornoalimenticio.Ingresado";
	
		
		
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

	

	
	$tdataTranstornosAlimenticio["Ingresado"] = $fdata;

	
$tables_data["TranstornosAlimenticio"]=&$tdataTranstornosAlimenticio;
$field_labels["TranstornosAlimenticio"] = &$fieldLabelsTranstornosAlimenticio;
$fieldToolTips["TranstornosAlimenticio"] = &$fieldToolTipsTranstornosAlimenticio;
$page_titles["TranstornosAlimenticio"] = &$pageTitlesTranstornosAlimenticio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TranstornosAlimenticio"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["TranstornosAlimenticio"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TranstornosAlimenticio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_transtornoalimenticio.TipoTAlimenticio,  lcs_estudiante.FotoRostro,  lcs_transtornoalimenticio.Ingresado";
$proto0["m_strFrom"] = "FROM lcs_transtornoalimenticio  INNER JOIN lcs_estudiante ON lcs_transtornoalimenticio.`_idEstudiante` = lcs_estudiante.idEstudiante";
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
$proto5["m_srcTableName"] = "TranstornosAlimenticio";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto10["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto10["m_srcTableName"] = "TranstornosAlimenticio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoTAlimenticio",
	"m_strTable" => "lcs_transtornoalimenticio",
	"m_srcTableName" => "TranstornosAlimenticio"
));

$proto12["m_sql"] = "lcs_transtornoalimenticio.TipoTAlimenticio";
$proto12["m_srcTableName"] = "TranstornosAlimenticio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "TranstornosAlimenticio"
));

$proto14["m_sql"] = "lcs_estudiante.FotoRostro";
$proto14["m_srcTableName"] = "TranstornosAlimenticio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_transtornoalimenticio",
	"m_srcTableName" => "TranstornosAlimenticio"
));

$proto16["m_sql"] = "lcs_transtornoalimenticio.Ingresado";
$proto16["m_srcTableName"] = "TranstornosAlimenticio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "lcs_transtornoalimenticio";
$proto19["m_srcTableName"] = "TranstornosAlimenticio";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idTranstornoAlimenticio";
$proto19["m_columns"][] = "TipoTAlimenticio";
$proto19["m_columns"][] = "Ingresado";
$proto19["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "lcs_transtornoalimenticio";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "TranstornosAlimenticio";
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
$proto23["m_strName"] = "lcs_estudiante";
$proto23["m_srcTableName"] = "TranstornosAlimenticio";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idEstudiante";
$proto23["m_columns"][] = "Nombre";
$proto23["m_columns"][] = "Apellido";
$proto23["m_columns"][] = "Direcccion";
$proto23["m_columns"][] = "FNacimiento";
$proto23["m_columns"][] = "FotoRostro";
$proto23["m_columns"][] = "Ingresado";
$proto23["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN lcs_estudiante ON lcs_transtornoalimenticio.`_idEstudiante` = lcs_estudiante.idEstudiante";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "TranstornosAlimenticio";
$proto24=array();
$proto24["m_sql"] = "lcs_transtornoalimenticio.`_idEstudiante` = lcs_estudiante.idEstudiante";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_transtornoalimenticio",
	"m_srcTableName" => "TranstornosAlimenticio"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= lcs_estudiante.idEstudiante";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TranstornosAlimenticio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TranstornosAlimenticio = createSqlQuery_TranstornosAlimenticio();


	
					
	
$tdataTranstornosAlimenticio[".sqlquery"] = $queryData_TranstornosAlimenticio;

$tableEvents["TranstornosAlimenticio"] = new eventsBase;
$tdataTranstornosAlimenticio[".hasEvents"] = false;

?>