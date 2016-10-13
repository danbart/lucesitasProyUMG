<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEstuHistCaracter = array();	
	$tdataEstuHistCaracter[".truncateText"] = true;
	$tdataEstuHistCaracter[".NumberOfChars"] = 80; 
	$tdataEstuHistCaracter[".ShortName"] = "EstuHistCaracter";
	$tdataEstuHistCaracter[".OwnerID"] = "";
	$tdataEstuHistCaracter[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelsEstuHistCaracter = array();
$fieldToolTipsEstuHistCaracter = array();
$pageTitlesEstuHistCaracter = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsEstuHistCaracter["Spanish"] = array();
	$fieldToolTipsEstuHistCaracter["Spanish"] = array();
	$pageTitlesEstuHistCaracter["Spanish"] = array();
	$fieldLabelsEstuHistCaracter["Spanish"]["FotoRostro"] = "Foto";
	$fieldToolTipsEstuHistCaracter["Spanish"]["FotoRostro"] = "";
	$fieldLabelsEstuHistCaracter["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistCaracter["Spanish"]["Estudiante"] = "";
	$fieldLabelsEstuHistCaracter["Spanish"]["edad"] = "Edad";
	$fieldToolTipsEstuHistCaracter["Spanish"]["edad"] = "";
	$fieldLabelsEstuHistCaracter["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipsEstuHistCaracter["Spanish"]["Ingresado"] = "";
	$fieldLabelsEstuHistCaracter["Spanish"]["Tipo_Social"] = "Tipo Social";
	$fieldToolTipsEstuHistCaracter["Spanish"]["Tipo Social"] = "";
	if (count($fieldToolTipsEstuHistCaracter["Spanish"]))
		$tdataEstuHistCaracter[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEstuHistCaracter[""] = array();
	$fieldToolTipsEstuHistCaracter[""] = array();
	$pageTitlesEstuHistCaracter[""] = array();
	$fieldLabelsEstuHistCaracter[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsEstuHistCaracter[""]["FotoRostro"] = "";
	$fieldLabelsEstuHistCaracter[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistCaracter[""]["Estudiante"] = "";
	$fieldLabelsEstuHistCaracter[""]["edad"] = "Edad";
	$fieldToolTipsEstuHistCaracter[""]["edad"] = "";
	$fieldLabelsEstuHistCaracter[""]["Ingresado"] = "Ingresado";
	$fieldToolTipsEstuHistCaracter[""]["Ingresado"] = "";
	$fieldLabelsEstuHistCaracter[""]["Tipo_Social"] = "Tipo Social";
	$fieldToolTipsEstuHistCaracter[""]["Tipo Social"] = "";
	if (count($fieldToolTipsEstuHistCaracter[""]))
		$tdataEstuHistCaracter[".isUseToolTips"] = true;
}
	
	
	$tdataEstuHistCaracter[".NCSearch"] = true;



$tdataEstuHistCaracter[".shortTableName"] = "EstuHistCaracter";
$tdataEstuHistCaracter[".nSecOptions"] = 0;
$tdataEstuHistCaracter[".recsPerRowList"] = 1;
$tdataEstuHistCaracter[".mainTableOwnerID"] = "";
$tdataEstuHistCaracter[".moveNext"] = 1;
$tdataEstuHistCaracter[".nType"] = 2;

$tdataEstuHistCaracter[".strOriginalTableName"] = "lcs_estudiante";




$tdataEstuHistCaracter[".showAddInPopup"] = false;

$tdataEstuHistCaracter[".showEditInPopup"] = false;

$tdataEstuHistCaracter[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEstuHistCaracter[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEstuHistCaracter[".fieldsForRegister"] = array();

$tdataEstuHistCaracter[".listAjax"] = false;

	$tdataEstuHistCaracter[".audit"] = false;

	$tdataEstuHistCaracter[".locking"] = false;


$tdataEstuHistCaracter[".list"] = true;

$tdataEstuHistCaracter[".inlineAdd"] = true;


$tdataEstuHistCaracter[".exportTo"] = true;

$tdataEstuHistCaracter[".printFriendly"] = true;


$tdataEstuHistCaracter[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataEstuHistCaracter[".searchSaving"] = false;
//

$tdataEstuHistCaracter[".showSearchPanel"] = true;
		$tdataEstuHistCaracter[".flexibleSearch"] = true;		

if (isMobile())
	$tdataEstuHistCaracter[".isUseAjaxSuggest"] = false;
else 
	$tdataEstuHistCaracter[".isUseAjaxSuggest"] = true;




$tdataEstuHistCaracter[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEstuHistCaracter[".isUseTimeForSearch"] = false;



$tdataEstuHistCaracter[".useDetailsPreview"] = true;


$tdataEstuHistCaracter[".allSearchFields"] = array();
$tdataEstuHistCaracter[".filterFields"] = array();
$tdataEstuHistCaracter[".requiredSearchFields"] = array();

$tdataEstuHistCaracter[".allSearchFields"][] = "Estudiante";
	$tdataEstuHistCaracter[".allSearchFields"][] = "FotoRostro";
	$tdataEstuHistCaracter[".allSearchFields"][] = "edad";
	$tdataEstuHistCaracter[".allSearchFields"][] = "Tipo Social";
	$tdataEstuHistCaracter[".allSearchFields"][] = "Ingresado";
	

$tdataEstuHistCaracter[".googleLikeFields"] = array();
$tdataEstuHistCaracter[".googleLikeFields"][] = "Estudiante";
$tdataEstuHistCaracter[".googleLikeFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".googleLikeFields"][] = "edad";
$tdataEstuHistCaracter[".googleLikeFields"][] = "Tipo Social";
$tdataEstuHistCaracter[".googleLikeFields"][] = "Ingresado";


$tdataEstuHistCaracter[".advSearchFields"] = array();
$tdataEstuHistCaracter[".advSearchFields"][] = "Estudiante";
$tdataEstuHistCaracter[".advSearchFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".advSearchFields"][] = "edad";
$tdataEstuHistCaracter[".advSearchFields"][] = "Tipo Social";
$tdataEstuHistCaracter[".advSearchFields"][] = "Ingresado";

$tdataEstuHistCaracter[".tableType"] = "report";

$tdataEstuHistCaracter[".printerPageOrientation"] = 0;
$tdataEstuHistCaracter[".nPrinterPageScale"] = 100;

$tdataEstuHistCaracter[".nPrinterSplitRecords"] = 40;

$tdataEstuHistCaracter[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataEstuHistCaracter[".reportPrintPartitionType"] = 0;	
$tdataEstuHistCaracter[".reportPrintGroupsPerPage"] = 3;	
$tdataEstuHistCaracter[".lowGroup"] = 1;

$tdataEstuHistCaracter[".reportGroupFields"] = true;
$tdataEstuHistCaracter[".pageSize"] = 5;
$tdataEstuHistCaracter[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataEstuHistCaracter[".reportGroupFieldsData"] = $reportGroupFields;




$tdataEstuHistCaracter[".reportPageSummary"] = true;


$tdataEstuHistCaracter[".repShowDet"] = true;

$tdataEstuHistCaracter[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataEstuHistCaracter[".isPrinterPagePDF"] = true;
$tdataEstuHistCaracter[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEstuHistCaracter[".strOrderBy"] = $tstrOrderBy;

$tdataEstuHistCaracter[".orderindexes"] = array();

$tdataEstuHistCaracter[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_tiposocial.TSocial AS `Tipo Social`,  lcs_tiposocial.Ingresado";
$tdataEstuHistCaracter[".sqlFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_tiposocial ON lcs_estudiante.idEstudiante = lcs_tiposocial.`_idEstudiante`";
$tdataEstuHistCaracter[".sqlWhereExpr"] = "";
$tdataEstuHistCaracter[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEstuHistCaracter[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEstuHistCaracter[".arrGroupsPerPage"] = $arrGPP;

$tdataEstuHistCaracter[".highlightSearchResults"] = true;

$tableKeysEstuHistCaracter = array();
$tdataEstuHistCaracter[".Keys"] = $tableKeysEstuHistCaracter;

$tdataEstuHistCaracter[".listFields"] = array();
$tdataEstuHistCaracter[".listFields"][] = "Estudiante";
$tdataEstuHistCaracter[".listFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".listFields"][] = "edad";
$tdataEstuHistCaracter[".listFields"][] = "Tipo Social";
$tdataEstuHistCaracter[".listFields"][] = "Ingresado";

$tdataEstuHistCaracter[".hideMobileList"] = array();


$tdataEstuHistCaracter[".viewFields"] = array();
$tdataEstuHistCaracter[".viewFields"][] = "Estudiante";
$tdataEstuHistCaracter[".viewFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".viewFields"][] = "edad";
$tdataEstuHistCaracter[".viewFields"][] = "Tipo Social";
$tdataEstuHistCaracter[".viewFields"][] = "Ingresado";

$tdataEstuHistCaracter[".addFields"] = array();
$tdataEstuHistCaracter[".addFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".addFields"][] = "Ingresado";

$tdataEstuHistCaracter[".inlineAddFields"] = array();
$tdataEstuHistCaracter[".inlineAddFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".inlineAddFields"][] = "Ingresado";

$tdataEstuHistCaracter[".editFields"] = array();
$tdataEstuHistCaracter[".editFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".editFields"][] = "Ingresado";

$tdataEstuHistCaracter[".inlineEditFields"] = array();
$tdataEstuHistCaracter[".inlineEditFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".inlineEditFields"][] = "Ingresado";

$tdataEstuHistCaracter[".exportFields"] = array();
$tdataEstuHistCaracter[".exportFields"][] = "Estudiante";
$tdataEstuHistCaracter[".exportFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".exportFields"][] = "edad";
$tdataEstuHistCaracter[".exportFields"][] = "Tipo Social";
$tdataEstuHistCaracter[".exportFields"][] = "Ingresado";

$tdataEstuHistCaracter[".importFields"] = array();
$tdataEstuHistCaracter[".importFields"][] = "Estudiante";
$tdataEstuHistCaracter[".importFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".importFields"][] = "edad";
$tdataEstuHistCaracter[".importFields"][] = "Tipo Social";
$tdataEstuHistCaracter[".importFields"][] = "Ingresado";

$tdataEstuHistCaracter[".printFields"] = array();
$tdataEstuHistCaracter[".printFields"][] = "Estudiante";
$tdataEstuHistCaracter[".printFields"][] = "FotoRostro";
$tdataEstuHistCaracter[".printFields"][] = "edad";
$tdataEstuHistCaracter[".printFields"][] = "Tipo Social";
$tdataEstuHistCaracter[".printFields"][] = "Ingresado";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistCaracter","Estudiante"); 
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

	

	
	$tdataEstuHistCaracter["Estudiante"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("EstuHistCaracter","FotoRostro"); 
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

	

	
	$tdataEstuHistCaracter["FotoRostro"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistCaracter","edad"); 
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

	

	
	$tdataEstuHistCaracter["edad"] = $fdata;
//	Tipo Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tipo Social";
	$fdata["GoodName"] = "Tipo_Social";
	$fdata["ownerTable"] = "lcs_tiposocial";
	$fdata["Label"] = GetFieldLabel("EstuHistCaracter","Tipo_Social"); 
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

	

	
	$tdataEstuHistCaracter["Tipo Social"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_tiposocial";
	$fdata["Label"] = GetFieldLabel("EstuHistCaracter","Ingresado"); 
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
	$fdata["FullName"] = "lcs_tiposocial.Ingresado";
	
		
		
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

	

	
	$tdataEstuHistCaracter["Ingresado"] = $fdata;

	
$tables_data["EstuHistCaracter"]=&$tdataEstuHistCaracter;
$field_labels["EstuHistCaracter"] = &$fieldLabelsEstuHistCaracter;
$fieldToolTips["EstuHistCaracter"] = &$fieldToolTipsEstuHistCaracter;
$page_titles["EstuHistCaracter"] = &$pageTitlesEstuHistCaracter;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["EstuHistCaracter"] = array();
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistCaracter"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistCaracter"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["EstuHistCaracter"] = array();


	
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
					$masterTablesData["EstuHistCaracter"][0] = $masterParams;	
				$masterTablesData["EstuHistCaracter"][0]["masterKeys"] = array();
	$masterTablesData["EstuHistCaracter"][0]["masterKeys"][]="idCentro";
				$masterTablesData["EstuHistCaracter"][0]["detailKeys"] = array();
	$masterTablesData["EstuHistCaracter"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_EstuHistCaracter()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_tiposocial.TSocial AS `Tipo Social`,  lcs_tiposocial.Ingresado";
$proto0["m_strFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_tiposocial ON lcs_estudiante.idEstudiante = lcs_tiposocial.`_idEstudiante`";
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
$proto5["m_srcTableName"] = "EstuHistCaracter";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistCaracter"
));

$proto10["m_sql"] = "lcs_estudiante.FotoRostro";
$proto10["m_srcTableName"] = "EstuHistCaracter";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto12["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto12["m_srcTableName"] = "EstuHistCaracter";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TSocial",
	"m_strTable" => "lcs_tiposocial",
	"m_srcTableName" => "EstuHistCaracter"
));

$proto14["m_sql"] = "lcs_tiposocial.TSocial";
$proto14["m_srcTableName"] = "EstuHistCaracter";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Tipo Social";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_tiposocial",
	"m_srcTableName" => "EstuHistCaracter"
));

$proto16["m_sql"] = "lcs_tiposocial.Ingresado";
$proto16["m_srcTableName"] = "EstuHistCaracter";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "lcs_estudiante";
$proto19["m_srcTableName"] = "EstuHistCaracter";
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
$proto18["m_srcTableName"] = "EstuHistCaracter";
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
$proto23["m_strName"] = "lcs_tiposocial";
$proto23["m_srcTableName"] = "EstuHistCaracter";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idTipoSocial";
$proto23["m_columns"][] = "TSocial";
$proto23["m_columns"][] = "Ingresado";
$proto23["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN lcs_tiposocial ON lcs_estudiante.idEstudiante = lcs_tiposocial.`_idEstudiante`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "EstuHistCaracter";
$proto24=array();
$proto24["m_sql"] = "lcs_estudiante.idEstudiante = lcs_tiposocial.`_idEstudiante`";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistCaracter"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= lcs_tiposocial.`_idEstudiante`";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="EstuHistCaracter";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_EstuHistCaracter = createSqlQuery_EstuHistCaracter();


	
					
	
$tdataEstuHistCaracter[".sqlquery"] = $queryData_EstuHistCaracter;

$tableEvents["EstuHistCaracter"] = new eventsBase;
$tdataEstuHistCaracter[".hasEvents"] = false;

?>