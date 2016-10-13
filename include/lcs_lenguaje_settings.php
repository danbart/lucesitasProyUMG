<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_lenguaje = array();	
	$tdatalcs_lenguaje[".truncateText"] = true;
	$tdatalcs_lenguaje[".NumberOfChars"] = 80; 
	$tdatalcs_lenguaje[".ShortName"] = "lcs_lenguaje";
	$tdatalcs_lenguaje[".OwnerID"] = "";
	$tdatalcs_lenguaje[".OriginalTable"] = "lcs_lenguaje";

//	field labels
$fieldLabelslcs_lenguaje = array();
$fieldToolTipslcs_lenguaje = array();
$pageTitleslcs_lenguaje = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_lenguaje["Spanish"] = array();
	$fieldToolTipslcs_lenguaje["Spanish"] = array();
	$pageTitleslcs_lenguaje["Spanish"] = array();
	$fieldLabelslcs_lenguaje["Spanish"]["idLenguaje"] = "No.";
	$fieldToolTipslcs_lenguaje["Spanish"]["idLenguaje"] = "";
	$fieldLabelslcs_lenguaje["Spanish"]["Balbucea"] = "Balbucea";
	$fieldToolTipslcs_lenguaje["Spanish"]["Balbucea"] = "";
	$fieldLabelslcs_lenguaje["Spanish"]["Edad1Palabra"] = "Edad Primera Palabra";
	$fieldToolTipslcs_lenguaje["Spanish"]["Edad1Palabra"] = "";
	$fieldLabelslcs_lenguaje["Spanish"]["EdadMesVocalizo"] = "Edad Mes Vocalizo";
	$fieldToolTipslcs_lenguaje["Spanish"]["EdadMesVocalizo"] = "";
	$fieldLabelslcs_lenguaje["Spanish"]["AdaptSocial"] = "Adaptacion Social";
	$fieldToolTipslcs_lenguaje["Spanish"]["AdaptSocial"] = "";
	$fieldLabelslcs_lenguaje["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_lenguaje["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_lenguaje["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_lenguaje["Spanish"]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_lenguaje["Spanish"]))
		$tdatalcs_lenguaje[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_lenguaje[""] = array();
	$fieldToolTipslcs_lenguaje[""] = array();
	$pageTitleslcs_lenguaje[""] = array();
	$fieldLabelslcs_lenguaje[""]["idLenguaje"] = "Id Lenguaje";
	$fieldToolTipslcs_lenguaje[""]["idLenguaje"] = "";
	$fieldLabelslcs_lenguaje[""]["Balbucea"] = "Balbucea";
	$fieldToolTipslcs_lenguaje[""]["Balbucea"] = "";
	$fieldLabelslcs_lenguaje[""]["Edad1Palabra"] = "Edad1Palabra";
	$fieldToolTipslcs_lenguaje[""]["Edad1Palabra"] = "";
	$fieldLabelslcs_lenguaje[""]["EdadMesVocalizo"] = "Edad Mes Vocalizo";
	$fieldToolTipslcs_lenguaje[""]["EdadMesVocalizo"] = "";
	$fieldLabelslcs_lenguaje[""]["AdaptSocial"] = "Adapt Social";
	$fieldToolTipslcs_lenguaje[""]["AdaptSocial"] = "";
	$fieldLabelslcs_lenguaje[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_lenguaje[""]["Ingresado"] = "";
	$fieldLabelslcs_lenguaje[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_lenguaje[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_lenguaje[""]))
		$tdatalcs_lenguaje[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_lenguaje[".NCSearch"] = true;



$tdatalcs_lenguaje[".shortTableName"] = "lcs_lenguaje";
$tdatalcs_lenguaje[".nSecOptions"] = 0;
$tdatalcs_lenguaje[".recsPerRowList"] = 1;
$tdatalcs_lenguaje[".mainTableOwnerID"] = "";
$tdatalcs_lenguaje[".moveNext"] = 1;
$tdatalcs_lenguaje[".nType"] = 0;

$tdatalcs_lenguaje[".strOriginalTableName"] = "lcs_lenguaje";




$tdatalcs_lenguaje[".showAddInPopup"] = true;

$tdatalcs_lenguaje[".showEditInPopup"] = true;

$tdatalcs_lenguaje[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_lenguaje[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_lenguaje[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_lenguaje[".listAjax"] = true;
else 
	$tdatalcs_lenguaje[".listAjax"] = false;

	$tdatalcs_lenguaje[".audit"] = false;

	$tdatalcs_lenguaje[".locking"] = false;

$tdatalcs_lenguaje[".edit"] = true;

$tdatalcs_lenguaje[".list"] = true;

$tdatalcs_lenguaje[".view"] = true;

$tdatalcs_lenguaje[".import"] = true;

$tdatalcs_lenguaje[".exportTo"] = true;

$tdatalcs_lenguaje[".printFriendly"] = true;

$tdatalcs_lenguaje[".delete"] = true;

$tdatalcs_lenguaje[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_lenguaje[".searchSaving"] = false;
//

$tdatalcs_lenguaje[".showSearchPanel"] = true;
		$tdatalcs_lenguaje[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_lenguaje[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_lenguaje[".isUseAjaxSuggest"] = true;

$tdatalcs_lenguaje[".rowHighlite"] = true;



$tdatalcs_lenguaje[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_lenguaje[".isUseTimeForSearch"] = false;





$tdatalcs_lenguaje[".allSearchFields"] = array();
$tdatalcs_lenguaje[".filterFields"] = array();
$tdatalcs_lenguaje[".requiredSearchFields"] = array();

$tdatalcs_lenguaje[".allSearchFields"][] = "idLenguaje";
	$tdatalcs_lenguaje[".allSearchFields"][] = "Balbucea";
	$tdatalcs_lenguaje[".allSearchFields"][] = "Edad1Palabra";
	$tdatalcs_lenguaje[".allSearchFields"][] = "EdadMesVocalizo";
	$tdatalcs_lenguaje[".allSearchFields"][] = "AdaptSocial";
	$tdatalcs_lenguaje[".allSearchFields"][] = "Ingresado";
	$tdatalcs_lenguaje[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_lenguaje[".googleLikeFields"] = array();
$tdatalcs_lenguaje[".googleLikeFields"][] = "idLenguaje";
$tdatalcs_lenguaje[".googleLikeFields"][] = "Balbucea";
$tdatalcs_lenguaje[".googleLikeFields"][] = "Edad1Palabra";
$tdatalcs_lenguaje[".googleLikeFields"][] = "EdadMesVocalizo";
$tdatalcs_lenguaje[".googleLikeFields"][] = "AdaptSocial";
$tdatalcs_lenguaje[".googleLikeFields"][] = "Ingresado";
$tdatalcs_lenguaje[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_lenguaje[".advSearchFields"] = array();
$tdatalcs_lenguaje[".advSearchFields"][] = "idLenguaje";
$tdatalcs_lenguaje[".advSearchFields"][] = "Balbucea";
$tdatalcs_lenguaje[".advSearchFields"][] = "Edad1Palabra";
$tdatalcs_lenguaje[".advSearchFields"][] = "EdadMesVocalizo";
$tdatalcs_lenguaje[".advSearchFields"][] = "AdaptSocial";
$tdatalcs_lenguaje[".advSearchFields"][] = "Ingresado";
$tdatalcs_lenguaje[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_lenguaje[".tableType"] = "list";

$tdatalcs_lenguaje[".printerPageOrientation"] = 0;
$tdatalcs_lenguaje[".nPrinterPageScale"] = 100;

$tdatalcs_lenguaje[".nPrinterSplitRecords"] = 40;

$tdatalcs_lenguaje[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_lenguaje[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_lenguaje[".isViewPagePDF"] = true;
$tdatalcs_lenguaje[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_lenguaje[".isPrinterPagePDF"] = true;
$tdatalcs_lenguaje[".nPrinterPagePDFScale"] = 100;


$tdatalcs_lenguaje[".pageSize"] = 20;

$tdatalcs_lenguaje[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_lenguaje[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_lenguaje[".orderindexes"] = array();

$tdatalcs_lenguaje[".sqlHead"] = "SELECT idLenguaje,   Balbucea,   Edad1Palabra,   EdadMesVocalizo,   AdaptSocial,   Ingresado,   _idEstudiante";
$tdatalcs_lenguaje[".sqlFrom"] = "FROM lcs_lenguaje";
$tdatalcs_lenguaje[".sqlWhereExpr"] = "";
$tdatalcs_lenguaje[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_lenguaje[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_lenguaje[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_lenguaje = array();
$tableKeyslcs_lenguaje[] = "idLenguaje";
$tdatalcs_lenguaje[".Keys"] = $tableKeyslcs_lenguaje;

$tdatalcs_lenguaje[".listFields"] = array();
$tdatalcs_lenguaje[".listFields"][] = "idLenguaje";
$tdatalcs_lenguaje[".listFields"][] = "Balbucea";
$tdatalcs_lenguaje[".listFields"][] = "Edad1Palabra";
$tdatalcs_lenguaje[".listFields"][] = "EdadMesVocalizo";
$tdatalcs_lenguaje[".listFields"][] = "AdaptSocial";
$tdatalcs_lenguaje[".listFields"][] = "Ingresado";
$tdatalcs_lenguaje[".listFields"][] = "_idEstudiante";

$tdatalcs_lenguaje[".hideMobileList"] = array();


$tdatalcs_lenguaje[".viewFields"] = array();
$tdatalcs_lenguaje[".viewFields"][] = "idLenguaje";
$tdatalcs_lenguaje[".viewFields"][] = "Balbucea";
$tdatalcs_lenguaje[".viewFields"][] = "Edad1Palabra";
$tdatalcs_lenguaje[".viewFields"][] = "EdadMesVocalizo";
$tdatalcs_lenguaje[".viewFields"][] = "AdaptSocial";
$tdatalcs_lenguaje[".viewFields"][] = "Ingresado";
$tdatalcs_lenguaje[".viewFields"][] = "_idEstudiante";

$tdatalcs_lenguaje[".addFields"] = array();
$tdatalcs_lenguaje[".addFields"][] = "Balbucea";
$tdatalcs_lenguaje[".addFields"][] = "Edad1Palabra";
$tdatalcs_lenguaje[".addFields"][] = "EdadMesVocalizo";
$tdatalcs_lenguaje[".addFields"][] = "AdaptSocial";
$tdatalcs_lenguaje[".addFields"][] = "_idEstudiante";

$tdatalcs_lenguaje[".inlineAddFields"] = array();

$tdatalcs_lenguaje[".editFields"] = array();
$tdatalcs_lenguaje[".editFields"][] = "Balbucea";
$tdatalcs_lenguaje[".editFields"][] = "Edad1Palabra";
$tdatalcs_lenguaje[".editFields"][] = "EdadMesVocalizo";
$tdatalcs_lenguaje[".editFields"][] = "AdaptSocial";
$tdatalcs_lenguaje[".editFields"][] = "_idEstudiante";

$tdatalcs_lenguaje[".inlineEditFields"] = array();

$tdatalcs_lenguaje[".exportFields"] = array();
$tdatalcs_lenguaje[".exportFields"][] = "idLenguaje";
$tdatalcs_lenguaje[".exportFields"][] = "Balbucea";
$tdatalcs_lenguaje[".exportFields"][] = "Edad1Palabra";
$tdatalcs_lenguaje[".exportFields"][] = "EdadMesVocalizo";
$tdatalcs_lenguaje[".exportFields"][] = "AdaptSocial";
$tdatalcs_lenguaje[".exportFields"][] = "Ingresado";
$tdatalcs_lenguaje[".exportFields"][] = "_idEstudiante";

$tdatalcs_lenguaje[".importFields"] = array();
$tdatalcs_lenguaje[".importFields"][] = "Balbucea";
$tdatalcs_lenguaje[".importFields"][] = "Edad1Palabra";
$tdatalcs_lenguaje[".importFields"][] = "EdadMesVocalizo";
$tdatalcs_lenguaje[".importFields"][] = "AdaptSocial";
$tdatalcs_lenguaje[".importFields"][] = "_idEstudiante";

$tdatalcs_lenguaje[".printFields"] = array();
$tdatalcs_lenguaje[".printFields"][] = "idLenguaje";
$tdatalcs_lenguaje[".printFields"][] = "Balbucea";
$tdatalcs_lenguaje[".printFields"][] = "Edad1Palabra";
$tdatalcs_lenguaje[".printFields"][] = "EdadMesVocalizo";
$tdatalcs_lenguaje[".printFields"][] = "AdaptSocial";
$tdatalcs_lenguaje[".printFields"][] = "Ingresado";
$tdatalcs_lenguaje[".printFields"][] = "_idEstudiante";

//	idLenguaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idLenguaje";
	$fdata["GoodName"] = "idLenguaje";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("lcs_lenguaje","idLenguaje"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idLenguaje"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idLenguaje";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatalcs_lenguaje["idLenguaje"] = $fdata;
//	Balbucea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Balbucea";
	$fdata["GoodName"] = "Balbucea";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("lcs_lenguaje","Balbucea"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Balbucea"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Balbucea";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_lenguaje["Balbucea"] = $fdata;
//	Edad1Palabra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Edad1Palabra";
	$fdata["GoodName"] = "Edad1Palabra";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("lcs_lenguaje","Edad1Palabra"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Edad1Palabra"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Edad1Palabra";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_lenguaje["Edad1Palabra"] = $fdata;
//	EdadMesVocalizo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EdadMesVocalizo";
	$fdata["GoodName"] = "EdadMesVocalizo";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("lcs_lenguaje","EdadMesVocalizo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EdadMesVocalizo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EdadMesVocalizo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_lenguaje["EdadMesVocalizo"] = $fdata;
//	AdaptSocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AdaptSocial";
	$fdata["GoodName"] = "AdaptSocial";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("lcs_lenguaje","AdaptSocial"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AdaptSocial"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AdaptSocial";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_lenguaje["AdaptSocial"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("lcs_lenguaje","Ingresado"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Ingresado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ingresado";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatalcs_lenguaje["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_lenguaje";
	$fdata["Label"] = GetFieldLabel("lcs_lenguaje","_idEstudiante"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "_idEstudiante"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "_idEstudiante";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "lcs_estudiante";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "idEstudiante";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";
	
		
	$edata["LookupOrderBy"] = "Nombre";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatalcs_lenguaje["_idEstudiante"] = $fdata;

	
$tables_data["lcs_lenguaje"]=&$tdatalcs_lenguaje;
$field_labels["lcs_lenguaje"] = &$fieldLabelslcs_lenguaje;
$fieldToolTips["lcs_lenguaje"] = &$fieldToolTipslcs_lenguaje;
$page_titles["lcs_lenguaje"] = &$pageTitleslcs_lenguaje;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_lenguaje"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_lenguaje"] = array();


	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Reporte Estudiantes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Reporte_Estudiantes";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_lenguaje"][0] = $masterParams;	
				$masterTablesData["lcs_lenguaje"][0]["masterKeys"] = array();
	$masterTablesData["lcs_lenguaje"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_lenguaje"][0]["detailKeys"] = array();
	$masterTablesData["lcs_lenguaje"][0]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="RepEstudMed";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "RepEstudMed";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_lenguaje"][1] = $masterParams;	
				$masterTablesData["lcs_lenguaje"][1]["masterKeys"] = array();
	$masterTablesData["lcs_lenguaje"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_lenguaje"][1]["detailKeys"] = array();
	$masterTablesData["lcs_lenguaje"][1]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistSocial";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistSocial";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_lenguaje"][2] = $masterParams;	
				$masterTablesData["lcs_lenguaje"][2]["masterKeys"] = array();
	$masterTablesData["lcs_lenguaje"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_lenguaje"][2]["detailKeys"] = array();
	$masterTablesData["lcs_lenguaje"][2]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistLengua";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistLengua";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_lenguaje"][3] = $masterParams;	
				$masterTablesData["lcs_lenguaje"][3]["masterKeys"] = array();
	$masterTablesData["lcs_lenguaje"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_lenguaje"][3]["detailKeys"] = array();
	$masterTablesData["lcs_lenguaje"][3]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistEmoci";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistEmoci";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_lenguaje"][4] = $masterParams;	
				$masterTablesData["lcs_lenguaje"][4]["masterKeys"] = array();
	$masterTablesData["lcs_lenguaje"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_lenguaje"][4]["detailKeys"] = array();
	$masterTablesData["lcs_lenguaje"][4]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistEmbarazo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistEmbarazo";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_lenguaje"][5] = $masterParams;	
				$masterTablesData["lcs_lenguaje"][5]["masterKeys"] = array();
	$masterTablesData["lcs_lenguaje"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_lenguaje"][5]["detailKeys"] = array();
	$masterTablesData["lcs_lenguaje"][5]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistCaracter";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistCaracter";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_lenguaje"][6] = $masterParams;	
				$masterTablesData["lcs_lenguaje"][6]["masterKeys"] = array();
	$masterTablesData["lcs_lenguaje"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_lenguaje"][6]["detailKeys"] = array();
	$masterTablesData["lcs_lenguaje"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_lenguaje()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idLenguaje,   Balbucea,   Edad1Palabra,   EdadMesVocalizo,   AdaptSocial,   Ingresado,   _idEstudiante";
$proto3["m_strFrom"] = "FROM lcs_lenguaje";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto3["m_where"] = $obj;
$proto6=array();
$proto6["m_sql"] = "";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idLenguaje",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "lcs_lenguaje"
));

$proto8["m_sql"] = "idLenguaje";
$proto8["m_srcTableName"] = "lcs_lenguaje";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Balbucea",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "lcs_lenguaje"
));

$proto10["m_sql"] = "Balbucea";
$proto10["m_srcTableName"] = "lcs_lenguaje";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Edad1Palabra",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "lcs_lenguaje"
));

$proto12["m_sql"] = "Edad1Palabra";
$proto12["m_srcTableName"] = "lcs_lenguaje";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EdadMesVocalizo",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "lcs_lenguaje"
));

$proto14["m_sql"] = "EdadMesVocalizo";
$proto14["m_srcTableName"] = "lcs_lenguaje";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AdaptSocial",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "lcs_lenguaje"
));

$proto16["m_sql"] = "AdaptSocial";
$proto16["m_srcTableName"] = "lcs_lenguaje";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "lcs_lenguaje"
));

$proto18["m_sql"] = "Ingresado";
$proto18["m_srcTableName"] = "lcs_lenguaje";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_lenguaje",
	"m_srcTableName" => "lcs_lenguaje"
));

$proto20["m_sql"] = "_idEstudiante";
$proto20["m_srcTableName"] = "lcs_lenguaje";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "lcs_lenguaje";
$proto23["m_srcTableName"] = "lcs_lenguaje";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idLenguaje";
$proto23["m_columns"][] = "Balbucea";
$proto23["m_columns"][] = "Edad1Palabra";
$proto23["m_columns"][] = "EdadMesVocalizo";
$proto23["m_columns"][] = "AdaptSocial";
$proto23["m_columns"][] = "Ingresado";
$proto23["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "lcs_lenguaje";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "lcs_lenguaje";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="lcs_lenguaje";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_lenguaje = createSqlQuery_lcs_lenguaje();


	
							
	
$tdatalcs_lenguaje[".sqlquery"] = $queryData_lcs_lenguaje;

$tableEvents["lcs_lenguaje"] = new eventsBase;
$tdatalcs_lenguaje[".hasEvents"] = false;

?>