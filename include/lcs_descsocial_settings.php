<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_descsocial = array();	
	$tdatalcs_descsocial[".truncateText"] = true;
	$tdatalcs_descsocial[".NumberOfChars"] = 80; 
	$tdatalcs_descsocial[".ShortName"] = "lcs_descsocial";
	$tdatalcs_descsocial[".OwnerID"] = "";
	$tdatalcs_descsocial[".OriginalTable"] = "lcs_descsocial";

//	field labels
$fieldLabelslcs_descsocial = array();
$fieldToolTipslcs_descsocial = array();
$pageTitleslcs_descsocial = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_descsocial["Spanish"] = array();
	$fieldToolTipslcs_descsocial["Spanish"] = array();
	$pageTitleslcs_descsocial["Spanish"] = array();
	$fieldLabelslcs_descsocial["Spanish"]["idDescSocial"] = "No.";
	$fieldToolTipslcs_descsocial["Spanish"]["idDescSocial"] = "";
	$fieldLabelslcs_descsocial["Spanish"]["RelacionHermano"] = "Relacion Hermano";
	$fieldToolTipslcs_descsocial["Spanish"]["RelacionHermano"] = "";
	$fieldLabelslcs_descsocial["Spanish"]["RelacionCompaneros"] = "Relacion Compañeros";
	$fieldToolTipslcs_descsocial["Spanish"]["RelacionCompaneros"] = "";
	$fieldLabelslcs_descsocial["Spanish"]["CQuinJuega"] = "Con Quin Juega";
	$fieldToolTipslcs_descsocial["Spanish"]["CQuinJuega"] = "";
	$fieldLabelslcs_descsocial["Spanish"]["CQueJuega"] = "Con Que Juega";
	$fieldToolTipslcs_descsocial["Spanish"]["CQueJuega"] = "";
	$fieldLabelslcs_descsocial["Spanish"]["ingresado"] = "Ingresado";
	$fieldToolTipslcs_descsocial["Spanish"]["ingresado"] = "";
	$fieldLabelslcs_descsocial["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_descsocial["Spanish"]["_idEstudiante"] = "";
	$pageTitleslcs_descsocial["Spanish"]["add"] = "Desorden Social, Añadir nuevo registro";
	if (count($fieldToolTipslcs_descsocial["Spanish"]))
		$tdatalcs_descsocial[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_descsocial[""] = array();
	$fieldToolTipslcs_descsocial[""] = array();
	$pageTitleslcs_descsocial[""] = array();
	$fieldLabelslcs_descsocial[""]["idDescSocial"] = "Id Desc Social";
	$fieldToolTipslcs_descsocial[""]["idDescSocial"] = "";
	$fieldLabelslcs_descsocial[""]["RelacionHermano"] = "Relacion Hermano";
	$fieldToolTipslcs_descsocial[""]["RelacionHermano"] = "";
	$fieldLabelslcs_descsocial[""]["RelacionCompaneros"] = "Relacion Companeros";
	$fieldToolTipslcs_descsocial[""]["RelacionCompaneros"] = "";
	$fieldLabelslcs_descsocial[""]["CQuinJuega"] = "CQuin Juega";
	$fieldToolTipslcs_descsocial[""]["CQuinJuega"] = "";
	$fieldLabelslcs_descsocial[""]["CQueJuega"] = "CQue Juega";
	$fieldToolTipslcs_descsocial[""]["CQueJuega"] = "";
	$fieldLabelslcs_descsocial[""]["ingresado"] = "Ingresado";
	$fieldToolTipslcs_descsocial[""]["ingresado"] = "";
	$fieldLabelslcs_descsocial[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_descsocial[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_descsocial[""]))
		$tdatalcs_descsocial[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_descsocial[".NCSearch"] = true;



$tdatalcs_descsocial[".shortTableName"] = "lcs_descsocial";
$tdatalcs_descsocial[".nSecOptions"] = 0;
$tdatalcs_descsocial[".recsPerRowList"] = 1;
$tdatalcs_descsocial[".mainTableOwnerID"] = "";
$tdatalcs_descsocial[".moveNext"] = 1;
$tdatalcs_descsocial[".nType"] = 0;

$tdatalcs_descsocial[".strOriginalTableName"] = "lcs_descsocial";




$tdatalcs_descsocial[".showAddInPopup"] = true;

$tdatalcs_descsocial[".showEditInPopup"] = true;

$tdatalcs_descsocial[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_descsocial[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_descsocial[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_descsocial[".listAjax"] = true;
else 
	$tdatalcs_descsocial[".listAjax"] = false;

	$tdatalcs_descsocial[".audit"] = false;

	$tdatalcs_descsocial[".locking"] = false;

$tdatalcs_descsocial[".edit"] = true;

$tdatalcs_descsocial[".list"] = true;

$tdatalcs_descsocial[".view"] = true;

$tdatalcs_descsocial[".import"] = true;

$tdatalcs_descsocial[".exportTo"] = true;

$tdatalcs_descsocial[".printFriendly"] = true;

$tdatalcs_descsocial[".delete"] = true;

$tdatalcs_descsocial[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_descsocial[".searchSaving"] = false;
//

$tdatalcs_descsocial[".showSearchPanel"] = true;
		$tdatalcs_descsocial[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_descsocial[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_descsocial[".isUseAjaxSuggest"] = true;

$tdatalcs_descsocial[".rowHighlite"] = true;



$tdatalcs_descsocial[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_descsocial[".isUseTimeForSearch"] = false;





$tdatalcs_descsocial[".allSearchFields"] = array();
$tdatalcs_descsocial[".filterFields"] = array();
$tdatalcs_descsocial[".requiredSearchFields"] = array();

$tdatalcs_descsocial[".allSearchFields"][] = "idDescSocial";
	$tdatalcs_descsocial[".allSearchFields"][] = "RelacionHermano";
	$tdatalcs_descsocial[".allSearchFields"][] = "RelacionCompaneros";
	$tdatalcs_descsocial[".allSearchFields"][] = "CQuinJuega";
	$tdatalcs_descsocial[".allSearchFields"][] = "CQueJuega";
	$tdatalcs_descsocial[".allSearchFields"][] = "ingresado";
	$tdatalcs_descsocial[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_descsocial[".googleLikeFields"] = array();
$tdatalcs_descsocial[".googleLikeFields"][] = "idDescSocial";
$tdatalcs_descsocial[".googleLikeFields"][] = "RelacionHermano";
$tdatalcs_descsocial[".googleLikeFields"][] = "RelacionCompaneros";
$tdatalcs_descsocial[".googleLikeFields"][] = "CQuinJuega";
$tdatalcs_descsocial[".googleLikeFields"][] = "CQueJuega";
$tdatalcs_descsocial[".googleLikeFields"][] = "ingresado";
$tdatalcs_descsocial[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_descsocial[".advSearchFields"] = array();
$tdatalcs_descsocial[".advSearchFields"][] = "idDescSocial";
$tdatalcs_descsocial[".advSearchFields"][] = "RelacionHermano";
$tdatalcs_descsocial[".advSearchFields"][] = "RelacionCompaneros";
$tdatalcs_descsocial[".advSearchFields"][] = "CQuinJuega";
$tdatalcs_descsocial[".advSearchFields"][] = "CQueJuega";
$tdatalcs_descsocial[".advSearchFields"][] = "ingresado";
$tdatalcs_descsocial[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_descsocial[".tableType"] = "list";

$tdatalcs_descsocial[".printerPageOrientation"] = 0;
$tdatalcs_descsocial[".nPrinterPageScale"] = 100;

$tdatalcs_descsocial[".nPrinterSplitRecords"] = 40;

$tdatalcs_descsocial[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_descsocial[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_descsocial[".isViewPagePDF"] = true;
$tdatalcs_descsocial[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_descsocial[".isPrinterPagePDF"] = true;
$tdatalcs_descsocial[".nPrinterPagePDFScale"] = 100;


$tdatalcs_descsocial[".pageSize"] = 20;

$tdatalcs_descsocial[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_descsocial[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_descsocial[".orderindexes"] = array();

$tdatalcs_descsocial[".sqlHead"] = "SELECT idDescSocial,   RelacionHermano,   RelacionCompaneros,   CQuinJuega,   CQueJuega,   ingresado,   `_idEstudiante`";
$tdatalcs_descsocial[".sqlFrom"] = "FROM lcs_descsocial";
$tdatalcs_descsocial[".sqlWhereExpr"] = "";
$tdatalcs_descsocial[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_descsocial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_descsocial[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_descsocial = array();
$tableKeyslcs_descsocial[] = "idDescSocial";
$tdatalcs_descsocial[".Keys"] = $tableKeyslcs_descsocial;

$tdatalcs_descsocial[".listFields"] = array();
$tdatalcs_descsocial[".listFields"][] = "idDescSocial";
$tdatalcs_descsocial[".listFields"][] = "RelacionHermano";
$tdatalcs_descsocial[".listFields"][] = "RelacionCompaneros";
$tdatalcs_descsocial[".listFields"][] = "CQuinJuega";
$tdatalcs_descsocial[".listFields"][] = "CQueJuega";
$tdatalcs_descsocial[".listFields"][] = "ingresado";
$tdatalcs_descsocial[".listFields"][] = "_idEstudiante";

$tdatalcs_descsocial[".hideMobileList"] = array();


$tdatalcs_descsocial[".viewFields"] = array();
$tdatalcs_descsocial[".viewFields"][] = "idDescSocial";
$tdatalcs_descsocial[".viewFields"][] = "RelacionHermano";
$tdatalcs_descsocial[".viewFields"][] = "RelacionCompaneros";
$tdatalcs_descsocial[".viewFields"][] = "CQuinJuega";
$tdatalcs_descsocial[".viewFields"][] = "CQueJuega";
$tdatalcs_descsocial[".viewFields"][] = "ingresado";
$tdatalcs_descsocial[".viewFields"][] = "_idEstudiante";

$tdatalcs_descsocial[".addFields"] = array();
$tdatalcs_descsocial[".addFields"][] = "RelacionHermano";
$tdatalcs_descsocial[".addFields"][] = "RelacionCompaneros";
$tdatalcs_descsocial[".addFields"][] = "CQuinJuega";
$tdatalcs_descsocial[".addFields"][] = "CQueJuega";
$tdatalcs_descsocial[".addFields"][] = "_idEstudiante";

$tdatalcs_descsocial[".inlineAddFields"] = array();

$tdatalcs_descsocial[".editFields"] = array();
$tdatalcs_descsocial[".editFields"][] = "RelacionHermano";
$tdatalcs_descsocial[".editFields"][] = "RelacionCompaneros";
$tdatalcs_descsocial[".editFields"][] = "CQuinJuega";
$tdatalcs_descsocial[".editFields"][] = "CQueJuega";
$tdatalcs_descsocial[".editFields"][] = "_idEstudiante";

$tdatalcs_descsocial[".inlineEditFields"] = array();

$tdatalcs_descsocial[".exportFields"] = array();
$tdatalcs_descsocial[".exportFields"][] = "idDescSocial";
$tdatalcs_descsocial[".exportFields"][] = "RelacionHermano";
$tdatalcs_descsocial[".exportFields"][] = "RelacionCompaneros";
$tdatalcs_descsocial[".exportFields"][] = "CQuinJuega";
$tdatalcs_descsocial[".exportFields"][] = "CQueJuega";
$tdatalcs_descsocial[".exportFields"][] = "ingresado";
$tdatalcs_descsocial[".exportFields"][] = "_idEstudiante";

$tdatalcs_descsocial[".importFields"] = array();
$tdatalcs_descsocial[".importFields"][] = "RelacionHermano";
$tdatalcs_descsocial[".importFields"][] = "RelacionCompaneros";
$tdatalcs_descsocial[".importFields"][] = "CQuinJuega";
$tdatalcs_descsocial[".importFields"][] = "CQueJuega";
$tdatalcs_descsocial[".importFields"][] = "_idEstudiante";

$tdatalcs_descsocial[".printFields"] = array();
$tdatalcs_descsocial[".printFields"][] = "idDescSocial";
$tdatalcs_descsocial[".printFields"][] = "RelacionHermano";
$tdatalcs_descsocial[".printFields"][] = "RelacionCompaneros";
$tdatalcs_descsocial[".printFields"][] = "CQuinJuega";
$tdatalcs_descsocial[".printFields"][] = "CQueJuega";
$tdatalcs_descsocial[".printFields"][] = "ingresado";
$tdatalcs_descsocial[".printFields"][] = "_idEstudiante";

//	idDescSocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idDescSocial";
	$fdata["GoodName"] = "idDescSocial";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("lcs_descsocial","idDescSocial"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idDescSocial"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idDescSocial";
	
		
		
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

	

	
	$tdatalcs_descsocial["idDescSocial"] = $fdata;
//	RelacionHermano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RelacionHermano";
	$fdata["GoodName"] = "RelacionHermano";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("lcs_descsocial","RelacionHermano"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RelacionHermano"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RelacionHermano";
	
		
		
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

	

	
	$tdatalcs_descsocial["RelacionHermano"] = $fdata;
//	RelacionCompaneros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RelacionCompaneros";
	$fdata["GoodName"] = "RelacionCompaneros";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("lcs_descsocial","RelacionCompaneros"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RelacionCompaneros"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RelacionCompaneros";
	
		
		
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

	

	
	$tdatalcs_descsocial["RelacionCompaneros"] = $fdata;
//	CQuinJuega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CQuinJuega";
	$fdata["GoodName"] = "CQuinJuega";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("lcs_descsocial","CQuinJuega"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CQuinJuega"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CQuinJuega";
	
		
		
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

	

	
	$tdatalcs_descsocial["CQuinJuega"] = $fdata;
//	CQueJuega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CQueJuega";
	$fdata["GoodName"] = "CQueJuega";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("lcs_descsocial","CQueJuega"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CQueJuega"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CQueJuega";
	
		
		
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

	

	
	$tdatalcs_descsocial["CQueJuega"] = $fdata;
//	ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ingresado";
	$fdata["GoodName"] = "ingresado";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("lcs_descsocial","ingresado"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ingresado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ingresado";
	
		
		
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

	

	
	$tdatalcs_descsocial["ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("lcs_descsocial","_idEstudiante"); 
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
	$fdata["FullName"] = "`_idEstudiante`";
	
		
		
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

	

	
	$tdatalcs_descsocial["_idEstudiante"] = $fdata;

	
$tables_data["lcs_descsocial"]=&$tdatalcs_descsocial;
$field_labels["lcs_descsocial"] = &$fieldLabelslcs_descsocial;
$fieldToolTips["lcs_descsocial"] = &$fieldToolTipslcs_descsocial;
$page_titles["lcs_descsocial"] = &$pageTitleslcs_descsocial;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_descsocial"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_descsocial"] = array();


	
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
	$masterTablesData["lcs_descsocial"][0] = $masterParams;	
				$masterTablesData["lcs_descsocial"][0]["masterKeys"] = array();
	$masterTablesData["lcs_descsocial"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_descsocial"][0]["detailKeys"] = array();
	$masterTablesData["lcs_descsocial"][0]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_descsocial"][1] = $masterParams;	
				$masterTablesData["lcs_descsocial"][1]["masterKeys"] = array();
	$masterTablesData["lcs_descsocial"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_descsocial"][1]["detailKeys"] = array();
	$masterTablesData["lcs_descsocial"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_descsocial"][2] = $masterParams;	
				$masterTablesData["lcs_descsocial"][2]["masterKeys"] = array();
	$masterTablesData["lcs_descsocial"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_descsocial"][2]["detailKeys"] = array();
	$masterTablesData["lcs_descsocial"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_descsocial"][3] = $masterParams;	
				$masterTablesData["lcs_descsocial"][3]["masterKeys"] = array();
	$masterTablesData["lcs_descsocial"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_descsocial"][3]["detailKeys"] = array();
	$masterTablesData["lcs_descsocial"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_descsocial"][4] = $masterParams;	
				$masterTablesData["lcs_descsocial"][4]["masterKeys"] = array();
	$masterTablesData["lcs_descsocial"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_descsocial"][4]["detailKeys"] = array();
	$masterTablesData["lcs_descsocial"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_descsocial"][5] = $masterParams;	
				$masterTablesData["lcs_descsocial"][5]["masterKeys"] = array();
	$masterTablesData["lcs_descsocial"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_descsocial"][5]["detailKeys"] = array();
	$masterTablesData["lcs_descsocial"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_descsocial"][6] = $masterParams;	
				$masterTablesData["lcs_descsocial"][6]["masterKeys"] = array();
	$masterTablesData["lcs_descsocial"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_descsocial"][6]["detailKeys"] = array();
	$masterTablesData["lcs_descsocial"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_descsocial()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idDescSocial,   RelacionHermano,   RelacionCompaneros,   CQuinJuega,   CQueJuega,   ingresado,   `_idEstudiante`";
$proto3["m_strFrom"] = "FROM lcs_descsocial";
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
	"m_strName" => "idDescSocial",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "lcs_descsocial"
));

$proto8["m_sql"] = "idDescSocial";
$proto8["m_srcTableName"] = "lcs_descsocial";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RelacionHermano",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "lcs_descsocial"
));

$proto10["m_sql"] = "RelacionHermano";
$proto10["m_srcTableName"] = "lcs_descsocial";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RelacionCompaneros",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "lcs_descsocial"
));

$proto12["m_sql"] = "RelacionCompaneros";
$proto12["m_srcTableName"] = "lcs_descsocial";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CQuinJuega",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "lcs_descsocial"
));

$proto14["m_sql"] = "CQuinJuega";
$proto14["m_srcTableName"] = "lcs_descsocial";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CQueJuega",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "lcs_descsocial"
));

$proto16["m_sql"] = "CQueJuega";
$proto16["m_srcTableName"] = "lcs_descsocial";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ingresado",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "lcs_descsocial"
));

$proto18["m_sql"] = "ingresado";
$proto18["m_srcTableName"] = "lcs_descsocial";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "lcs_descsocial"
));

$proto20["m_sql"] = "`_idEstudiante`";
$proto20["m_srcTableName"] = "lcs_descsocial";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "lcs_descsocial";
$proto23["m_srcTableName"] = "lcs_descsocial";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idDescSocial";
$proto23["m_columns"][] = "RelacionHermano";
$proto23["m_columns"][] = "RelacionCompaneros";
$proto23["m_columns"][] = "CQuinJuega";
$proto23["m_columns"][] = "CQueJuega";
$proto23["m_columns"][] = "ingresado";
$proto23["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "lcs_descsocial";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "lcs_descsocial";
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
$proto3["m_srcTableName"]="lcs_descsocial";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_descsocial = createSqlQuery_lcs_descsocial();


	
							
	
$tdatalcs_descsocial[".sqlquery"] = $queryData_lcs_descsocial;

$tableEvents["lcs_descsocial"] = new eventsBase;
$tdatalcs_descsocial[".hasEvents"] = false;

?>