<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEstuHistLengua = array();	
	$tdataEstuHistLengua[".truncateText"] = true;
	$tdataEstuHistLengua[".NumberOfChars"] = 80; 
	$tdataEstuHistLengua[".ShortName"] = "EstuHistLengua";
	$tdataEstuHistLengua[".OwnerID"] = "";
	$tdataEstuHistLengua[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelsEstuHistLengua = array();
$fieldToolTipsEstuHistLengua = array();
$pageTitlesEstuHistLengua = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsEstuHistLengua["Spanish"] = array();
	$fieldToolTipsEstuHistLengua["Spanish"] = array();
	$pageTitlesEstuHistLengua["Spanish"] = array();
	$fieldLabelsEstuHistLengua["Spanish"]["FotoRostro"] = "Foto";
	$fieldToolTipsEstuHistLengua["Spanish"]["FotoRostro"] = "";
	$fieldLabelsEstuHistLengua["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistLengua["Spanish"]["Estudiante"] = "";
	$fieldLabelsEstuHistLengua["Spanish"]["edad"] = "Edad";
	$fieldToolTipsEstuHistLengua["Spanish"]["edad"] = "";
	$fieldLabelsEstuHistLengua["Spanish"]["Balbucea"] = "Balbucea";
	$fieldToolTipsEstuHistLengua["Spanish"]["Balbucea"] = "";
	$fieldLabelsEstuHistLengua["Spanish"]["Edad1Palabra"] = "Primera Palabra";
	$fieldToolTipsEstuHistLengua["Spanish"]["Edad1Palabra"] = "";
	$fieldLabelsEstuHistLengua["Spanish"]["EdadMesVocalizo"] = "Mes Vocalizo";
	$fieldToolTipsEstuHistLengua["Spanish"]["EdadMesVocalizo"] = "";
	$fieldLabelsEstuHistLengua["Spanish"]["AdaptSocial"] = "Adaptación Social";
	$fieldToolTipsEstuHistLengua["Spanish"]["AdaptSocial"] = "";
	$fieldLabelsEstuHistLengua["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipsEstuHistLengua["Spanish"]["Ingresado"] = "";
	if (count($fieldToolTipsEstuHistLengua["Spanish"]))
		$tdataEstuHistLengua[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEstuHistLengua[""] = array();
	$fieldToolTipsEstuHistLengua[""] = array();
	$pageTitlesEstuHistLengua[""] = array();
	$fieldLabelsEstuHistLengua[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsEstuHistLengua[""]["FotoRostro"] = "";
	$fieldLabelsEstuHistLengua[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistLengua[""]["Estudiante"] = "";
	$fieldLabelsEstuHistLengua[""]["edad"] = "Edad";
	$fieldToolTipsEstuHistLengua[""]["edad"] = "";
	$fieldLabelsEstuHistLengua[""]["Balbucea"] = "Balbucea";
	$fieldToolTipsEstuHistLengua[""]["Balbucea"] = "";
	$fieldLabelsEstuHistLengua[""]["Edad1Palabra"] = "Edad1Palabra";
	$fieldToolTipsEstuHistLengua[""]["Edad1Palabra"] = "";
	$fieldLabelsEstuHistLengua[""]["EdadMesVocalizo"] = "Edad Mes Vocalizo";
	$fieldToolTipsEstuHistLengua[""]["EdadMesVocalizo"] = "";
	$fieldLabelsEstuHistLengua[""]["AdaptSocial"] = "Adapt Social";
	$fieldToolTipsEstuHistLengua[""]["AdaptSocial"] = "";
	$fieldLabelsEstuHistLengua[""]["Ingresado"] = "Ingresado";
	$fieldToolTipsEstuHistLengua[""]["Ingresado"] = "";
	if (count($fieldToolTipsEstuHistLengua[""]))
		$tdataEstuHistLengua[".isUseToolTips"] = true;
}
	
	
	$tdataEstuHistLengua[".NCSearch"] = true;



$tdataEstuHistLengua[".shortTableName"] = "EstuHistLengua";
$tdataEstuHistLengua[".nSecOptions"] = 0;
$tdataEstuHistLengua[".recsPerRowList"] = 1;
$tdataEstuHistLengua[".mainTableOwnerID"] = "";
$tdataEstuHistLengua[".moveNext"] = 1;
$tdataEstuHistLengua[".nType"] = 2;

$tdataEstuHistLengua[".strOriginalTableName"] = "lcs_estudiante";




$tdataEstuHistLengua[".showAddInPopup"] = false;

$tdataEstuHistLengua[".showEditInPopup"] = false;

$tdataEstuHistLengua[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEstuHistLengua[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEstuHistLengua[".fieldsForRegister"] = array();

$tdataEstuHistLengua[".listAjax"] = false;

	$tdataEstuHistLengua[".audit"] = false;

	$tdataEstuHistLengua[".locking"] = false;


$tdataEstuHistLengua[".list"] = true;

$tdataEstuHistLengua[".inlineAdd"] = true;


$tdataEstuHistLengua[".exportTo"] = true;

$tdataEstuHistLengua[".printFriendly"] = true;


$tdataEstuHistLengua[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataEstuHistLengua[".searchSaving"] = false;
//

$tdataEstuHistLengua[".showSearchPanel"] = true;
		$tdataEstuHistLengua[".flexibleSearch"] = true;		

if (isMobile())
	$tdataEstuHistLengua[".isUseAjaxSuggest"] = false;
else 
	$tdataEstuHistLengua[".isUseAjaxSuggest"] = true;




$tdataEstuHistLengua[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEstuHistLengua[".isUseTimeForSearch"] = false;



$tdataEstuHistLengua[".useDetailsPreview"] = true;


$tdataEstuHistLengua[".allSearchFields"] = array();
$tdataEstuHistLengua[".filterFields"] = array();
$tdataEstuHistLengua[".requiredSearchFields"] = array();

$tdataEstuHistLengua[".allSearchFields"][] = "Estudiante";
	$tdataEstuHistLengua[".allSearchFields"][] = "FotoRostro";
	$tdataEstuHistLengua[".allSearchFields"][] = "edad";
	$tdataEstuHistLengua[".allSearchFields"][] = "Balbucea";
	$tdataEstuHistLengua[".allSearchFields"][] = "Edad1Palabra";
	$tdataEstuHistLengua[".allSearchFields"][] = "EdadMesVocalizo";
	$tdataEstuHistLengua[".allSearchFields"][] = "AdaptSocial";
	$tdataEstuHistLengua[".allSearchFields"][] = "Ingresado";
	

$tdataEstuHistLengua[".googleLikeFields"] = array();
$tdataEstuHistLengua[".googleLikeFields"][] = "Estudiante";
$tdataEstuHistLengua[".googleLikeFields"][] = "FotoRostro";
$tdataEstuHistLengua[".googleLikeFields"][] = "edad";
$tdataEstuHistLengua[".googleLikeFields"][] = "Balbucea";
$tdataEstuHistLengua[".googleLikeFields"][] = "Edad1Palabra";
$tdataEstuHistLengua[".googleLikeFields"][] = "EdadMesVocalizo";
$tdataEstuHistLengua[".googleLikeFields"][] = "AdaptSocial";
$tdataEstuHistLengua[".googleLikeFields"][] = "Ingresado";


$tdataEstuHistLengua[".advSearchFields"] = array();
$tdataEstuHistLengua[".advSearchFields"][] = "Estudiante";
$tdataEstuHistLengua[".advSearchFields"][] = "FotoRostro";
$tdataEstuHistLengua[".advSearchFields"][] = "edad";
$tdataEstuHistLengua[".advSearchFields"][] = "Balbucea";
$tdataEstuHistLengua[".advSearchFields"][] = "Edad1Palabra";
$tdataEstuHistLengua[".advSearchFields"][] = "EdadMesVocalizo";
$tdataEstuHistLengua[".advSearchFields"][] = "AdaptSocial";
$tdataEstuHistLengua[".advSearchFields"][] = "Ingresado";

$tdataEstuHistLengua[".tableType"] = "report";

$tdataEstuHistLengua[".printerPageOrientation"] = 0;
$tdataEstuHistLengua[".nPrinterPageScale"] = 100;

$tdataEstuHistLengua[".nPrinterSplitRecords"] = 40;

$tdataEstuHistLengua[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataEstuHistLengua[".reportPrintPartitionType"] = 0;	
$tdataEstuHistLengua[".reportPrintGroupsPerPage"] = 3;	
$tdataEstuHistLengua[".lowGroup"] = 1;

$tdataEstuHistLengua[".reportGroupFields"] = true;
$tdataEstuHistLengua[".pageSize"] = 5;
$tdataEstuHistLengua[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataEstuHistLengua[".reportGroupFieldsData"] = $reportGroupFields;




$tdataEstuHistLengua[".reportPageSummary"] = true;


$tdataEstuHistLengua[".repShowDet"] = true;

$tdataEstuHistLengua[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataEstuHistLengua[".isPrinterPagePDF"] = true;
$tdataEstuHistLengua[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEstuHistLengua[".strOrderBy"] = $tstrOrderBy;

$tdataEstuHistLengua[".orderindexes"] = array();

$tdataEstuHistLengua[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_lenguaje.Balbucea,  lcs_lenguaje.Edad1Palabra,  lcs_lenguaje.EdadMesVocalizo,  lcs_lenguaje.AdaptSocial,  lcs_lenguaje.Ingresado";
$tdataEstuHistLengua[".sqlFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_lenguaje ON lcs_estudiante.idEstudiante = lcs_lenguaje.`_idEstudiante`";
$tdataEstuHistLengua[".sqlWhereExpr"] = "";
$tdataEstuHistLengua[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEstuHistLengua[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEstuHistLengua[".arrGroupsPerPage"] = $arrGPP;

$tdataEstuHistLengua[".highlightSearchResults"] = true;

$tableKeysEstuHistLengua = array();
$tdataEstuHistLengua[".Keys"] = $tableKeysEstuHistLengua;

$tdataEstuHistLengua[".listFields"] = array();
$tdataEstuHistLengua[".listFields"][] = "Estudiante";
$tdataEstuHistLengua[".listFields"][] = "FotoRostro";
$tdataEstuHistLengua[".listFields"][] = "edad";
$tdataEstuHistLengua[".listFields"][] = "Balbucea";
$tdataEstuHistLengua[".listFields"][] = "Edad1Palabra";
$tdataEstuHistLengua[".listFields"][] = "EdadMesVocalizo";
$tdataEstuHistLengua[".listFields"][] = "AdaptSocial";
$tdataEstuHistLengua[".listFields"][] = "Ingresado";

$tdataEstuHistLengua[".hideMobileList"] = array();


$tdataEstuHistLengua[".viewFields"] = array();
$tdataEstuHistLengua[".viewFields"][] = "Estudiante";
$tdataEstuHistLengua[".viewFields"][] = "FotoRostro";
$tdataEstuHistLengua[".viewFields"][] = "edad";
$tdataEstuHistLengua[".viewFields"][] = "Balbucea";
$tdataEstuHistLengua[".viewFields"][] = "Edad1Palabra";
$tdataEstuHistLengua[".viewFields"][] = "EdadMesVocalizo";
$tdataEstuHistLengua[".viewFields"][] = "AdaptSocial";
$tdataEstuHistLengua[".viewFields"][] = "Ingresado";

$tdataEstuHistLengua[".addFields"] = array();
$tdataEstuHistLengua[".addFields"][] = "FotoRostro";
$tdataEstuHistLengua[".addFields"][] = "Ingresado";

$tdataEstuHistLengua[".inlineAddFields"] = array();
$tdataEstuHistLengua[".inlineAddFields"][] = "FotoRostro";
$tdataEstuHistLengua[".inlineAddFields"][] = "Ingresado";

$tdataEstuHistLengua[".editFields"] = array();
$tdataEstuHistLengua[".editFields"][] = "FotoRostro";
$tdataEstuHistLengua[".editFields"][] = "Ingresado";

$tdataEstuHistLengua[".inlineEditFields"] = array();
$tdataEstuHistLengua[".inlineEditFields"][] = "FotoRostro";
$tdataEstuHistLengua[".inlineEditFields"][] = "Ingresado";

$tdataEstuHistLengua[".exportFields"] = array();
$tdataEstuHistLengua[".exportFields"][] = "Estudiante";
$tdataEstuHistLengua[".exportFields"][] = "FotoRostro";
$tdataEstuHistLengua[".exportFields"][] = "edad";
$tdataEstuHistLengua[".exportFields"][] = "Balbucea";
$tdataEstuHistLengua[".exportFields"][] = "Edad1Palabra";
$tdataEstuHistLengua[".exportFields"][] = "EdadMesVocalizo";
$tdataEstuHistLengua[".exportFields"][] = "AdaptSocial";
$tdataEstuHistLengua[".exportFields"][] = "Ingresado";

$tdataEstuHistLengua[".importFields"] = array();
$tdataEstuHistLengua[".importFields"][] = "Estudiante";
$tdataEstuHistLengua[".importFields"][] = "FotoRostro";
$tdataEstuHistLengua[".importFields"][] = "edad";
$tdataEstuHistLengua[".importFields"][] = "Balbucea";
$tdataEstuHistLengua[".importFields"][] = "Edad1Palabra";
$tdataEstuHistLengua[".importFields"][] = "EdadMesVocalizo";
$tdataEstuHistLengua[".importFields"][] = "AdaptSocial";
$tdataEstuHistLengua[".importFields"][] = "Ingresado";

$tdataEstuHistLengua[".printFields"] = array();
$tdataEstuHistLengua[".printFields"][] = "Estudiante";
$tdataEstuHistLengua[".printFields"][] = "FotoRostro";
$tdataEstuHistLengua[".printFields"][] = "edad";
$tdataEstuHistLengua[".printFields"][] = "Balbucea";
$tdataEstuHistLengua[".printFields"][] = "Edad1Palabra";
$tdataEstuHistLengua[".printFields"][] = "EdadMesVocalizo";
$tdataEstuHistLengua[".printFields"][] = "AdaptSocial";
$tdataEstuHistLengua[".printFields"][] = "Ingresado";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistLengua","Estudiante"); 
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

	

	
	$tdataEstuHistLengua["Estudiante"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("EstuHistLengua","FotoRostro"); 
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

	

	
	$tdataEstuHistLengua["FotoRostro"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistLengua","edad"); 
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

	

	
	$tdataEstuHistLengua["edad"] = $fdata;
//	Balbucea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Balbucea";
	$fdata["GoodName"] = "Balbucea";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("EstuHistLengua","Balbucea"); 
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

	

	
	$tdataEstuHistLengua["Balbucea"] = $fdata;
//	Edad1Palabra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Edad1Palabra";
	$fdata["GoodName"] = "Edad1Palabra";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("EstuHistLengua","Edad1Palabra"); 
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

	

	
	$tdataEstuHistLengua["Edad1Palabra"] = $fdata;
//	EdadMesVocalizo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EdadMesVocalizo";
	$fdata["GoodName"] = "EdadMesVocalizo";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("EstuHistLengua","EdadMesVocalizo"); 
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

	

	
	$tdataEstuHistLengua["EdadMesVocalizo"] = $fdata;
//	AdaptSocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AdaptSocial";
	$fdata["GoodName"] = "AdaptSocial";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("EstuHistLengua","AdaptSocial"); 
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

	

	
	$tdataEstuHistLengua["AdaptSocial"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("EstuHistLengua","Ingresado"); 
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
	$fdata["FullName"] = "lcs_lenguaje.Ingresado";
	
		
		
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

	

	
	$tdataEstuHistLengua["Ingresado"] = $fdata;

	
$tables_data["EstuHistLengua"]=&$tdataEstuHistLengua;
$field_labels["EstuHistLengua"] = &$fieldLabelsEstuHistLengua;
$fieldToolTips["EstuHistLengua"] = &$fieldToolTipsEstuHistLengua;
$page_titles["EstuHistLengua"] = &$pageTitlesEstuHistLengua;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["EstuHistLengua"] = array();
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistLengua"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistLengua"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["EstuHistLengua"] = array();


	
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
					$masterTablesData["EstuHistLengua"][0] = $masterParams;	
				$masterTablesData["EstuHistLengua"][0]["masterKeys"] = array();
	$masterTablesData["EstuHistLengua"][0]["masterKeys"][]="idCentro";
				$masterTablesData["EstuHistLengua"][0]["detailKeys"] = array();
	$masterTablesData["EstuHistLengua"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_EstuHistLengua()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_lenguaje.Balbucea,  lcs_lenguaje.Edad1Palabra,  lcs_lenguaje.EdadMesVocalizo,  lcs_lenguaje.AdaptSocial,  lcs_lenguaje.Ingresado";
$proto0["m_strFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_lenguaje ON lcs_estudiante.idEstudiante = lcs_lenguaje.`_idEstudiante`";
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
$proto5["m_srcTableName"] = "EstuHistLengua";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistLengua"
));

$proto10["m_sql"] = "lcs_estudiante.FotoRostro";
$proto10["m_srcTableName"] = "EstuHistLengua";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto12["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto12["m_srcTableName"] = "EstuHistLengua";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Balbucea",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "EstuHistLengua"
));

$proto14["m_sql"] = "lcs_lenguaje.Balbucea";
$proto14["m_srcTableName"] = "EstuHistLengua";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Edad1Palabra",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "EstuHistLengua"
));

$proto16["m_sql"] = "lcs_lenguaje.Edad1Palabra";
$proto16["m_srcTableName"] = "EstuHistLengua";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EdadMesVocalizo",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "EstuHistLengua"
));

$proto18["m_sql"] = "lcs_lenguaje.EdadMesVocalizo";
$proto18["m_srcTableName"] = "EstuHistLengua";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AdaptSocial",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "EstuHistLengua"
));

$proto20["m_sql"] = "lcs_lenguaje.AdaptSocial";
$proto20["m_srcTableName"] = "EstuHistLengua";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "EstuHistLengua"
));

$proto22["m_sql"] = "lcs_lenguaje.Ingresado";
$proto22["m_srcTableName"] = "EstuHistLengua";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "lcs_estudiante";
$proto25["m_srcTableName"] = "EstuHistLengua";
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
$proto24["m_srcTableName"] = "EstuHistLengua";
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
$proto29["m_strName"] = "lcs_lenguaje";
$proto29["m_srcTableName"] = "EstuHistLengua";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "idLenguaje";
$proto29["m_columns"][] = "Balbucea";
$proto29["m_columns"][] = "Edad1Palabra";
$proto29["m_columns"][] = "EdadMesVocalizo";
$proto29["m_columns"][] = "AdaptSocial";
$proto29["m_columns"][] = "Ingresado";
$proto29["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT OUTER JOIN lcs_lenguaje ON lcs_estudiante.idEstudiante = lcs_lenguaje.`_idEstudiante`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "EstuHistLengua";
$proto30=array();
$proto30["m_sql"] = "lcs_estudiante.idEstudiante = lcs_lenguaje.`_idEstudiante`";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistLengua"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= lcs_lenguaje.`_idEstudiante`";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="EstuHistLengua";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_EstuHistLengua = createSqlQuery_EstuHistLengua();


	
								
	
$tdataEstuHistLengua[".sqlquery"] = $queryData_EstuHistLengua;

$tableEvents["EstuHistLengua"] = new eventsBase;
$tdataEstuHistLengua[".hasEvents"] = false;

?>