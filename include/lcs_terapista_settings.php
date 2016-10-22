<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_terapista = array();	
	$tdatalcs_terapista[".truncateText"] = true;
	$tdatalcs_terapista[".NumberOfChars"] = 80; 
	$tdatalcs_terapista[".ShortName"] = "lcs_terapista";
	$tdatalcs_terapista[".OwnerID"] = "";
	$tdatalcs_terapista[".OriginalTable"] = "lcs_terapista";

//	field labels
$fieldLabelslcs_terapista = array();
$fieldToolTipslcs_terapista = array();
$pageTitleslcs_terapista = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_terapista["Spanish"] = array();
	$fieldToolTipslcs_terapista["Spanish"] = array();
	$pageTitleslcs_terapista["Spanish"] = array();
	$fieldLabelslcs_terapista["Spanish"]["idterapista"] = "No.";
	$fieldToolTipslcs_terapista["Spanish"]["idterapista"] = "";
	$fieldLabelslcs_terapista["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipslcs_terapista["Spanish"]["Nombre"] = "";
	$fieldLabelslcs_terapista["Spanish"]["Apellido"] = "Apellido";
	$fieldToolTipslcs_terapista["Spanish"]["Apellido"] = "";
	$fieldLabelslcs_terapista["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipslcs_terapista["Spanish"]["Telefono"] = "";
	$fieldLabelslcs_terapista["Spanish"]["Email"] = "Email";
	$fieldToolTipslcs_terapista["Spanish"]["Email"] = "";
	$fieldLabelslcs_terapista["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipslcs_terapista["Spanish"]["Direccion"] = "";
	$fieldLabelslcs_terapista["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_terapista["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_terapista["Spanish"]["_idEspeMed"] = "Especialista";
	$fieldToolTipslcs_terapista["Spanish"]["_idEspeMed"] = "";
	if (count($fieldToolTipslcs_terapista["Spanish"]))
		$tdatalcs_terapista[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_terapista[""] = array();
	$fieldToolTipslcs_terapista[""] = array();
	$pageTitleslcs_terapista[""] = array();
	$fieldLabelslcs_terapista[""]["idterapista"] = "Idterapista";
	$fieldToolTipslcs_terapista[""]["idterapista"] = "";
	$fieldLabelslcs_terapista[""]["Nombre"] = "Nombre";
	$fieldToolTipslcs_terapista[""]["Nombre"] = "";
	$fieldLabelslcs_terapista[""]["Apellido"] = "Apellido";
	$fieldToolTipslcs_terapista[""]["Apellido"] = "";
	$fieldLabelslcs_terapista[""]["Telefono"] = "Telefono";
	$fieldToolTipslcs_terapista[""]["Telefono"] = "";
	$fieldLabelslcs_terapista[""]["Email"] = "Email";
	$fieldToolTipslcs_terapista[""]["Email"] = "";
	$fieldLabelslcs_terapista[""]["Direccion"] = "Direccion";
	$fieldToolTipslcs_terapista[""]["Direccion"] = "";
	$fieldLabelslcs_terapista[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_terapista[""]["Ingresado"] = "";
	$fieldLabelslcs_terapista[""]["_idEspeMed"] = "Id Espe Med";
	$fieldToolTipslcs_terapista[""]["_idEspeMed"] = "";
	if (count($fieldToolTipslcs_terapista[""]))
		$tdatalcs_terapista[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_terapista[".NCSearch"] = true;



$tdatalcs_terapista[".shortTableName"] = "lcs_terapista";
$tdatalcs_terapista[".nSecOptions"] = 0;
$tdatalcs_terapista[".recsPerRowList"] = 1;
$tdatalcs_terapista[".mainTableOwnerID"] = "";
$tdatalcs_terapista[".moveNext"] = 1;
$tdatalcs_terapista[".nType"] = 0;

$tdatalcs_terapista[".strOriginalTableName"] = "lcs_terapista";




$tdatalcs_terapista[".showAddInPopup"] = true;

$tdatalcs_terapista[".showEditInPopup"] = true;

$tdatalcs_terapista[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_terapista[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_terapista[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_terapista[".listAjax"] = true;
else 
	$tdatalcs_terapista[".listAjax"] = false;

	$tdatalcs_terapista[".audit"] = true;

	$tdatalcs_terapista[".locking"] = false;

$tdatalcs_terapista[".edit"] = true;

$tdatalcs_terapista[".list"] = true;

$tdatalcs_terapista[".view"] = true;

$tdatalcs_terapista[".import"] = true;

$tdatalcs_terapista[".exportTo"] = true;

$tdatalcs_terapista[".printFriendly"] = true;

$tdatalcs_terapista[".delete"] = true;

$tdatalcs_terapista[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_terapista[".searchSaving"] = false;
//

$tdatalcs_terapista[".showSearchPanel"] = true;
		$tdatalcs_terapista[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_terapista[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_terapista[".isUseAjaxSuggest"] = true;

$tdatalcs_terapista[".rowHighlite"] = true;



$tdatalcs_terapista[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_terapista[".isUseTimeForSearch"] = false;



$tdatalcs_terapista[".useDetailsPreview"] = true;


$tdatalcs_terapista[".allSearchFields"] = array();
$tdatalcs_terapista[".filterFields"] = array();
$tdatalcs_terapista[".requiredSearchFields"] = array();

$tdatalcs_terapista[".allSearchFields"][] = "idterapista";
	$tdatalcs_terapista[".allSearchFields"][] = "Nombre";
	$tdatalcs_terapista[".allSearchFields"][] = "Apellido";
	$tdatalcs_terapista[".allSearchFields"][] = "Telefono";
	$tdatalcs_terapista[".allSearchFields"][] = "Email";
	$tdatalcs_terapista[".allSearchFields"][] = "Direccion";
	$tdatalcs_terapista[".allSearchFields"][] = "Ingresado";
	$tdatalcs_terapista[".allSearchFields"][] = "_idEspeMed";
	

$tdatalcs_terapista[".googleLikeFields"] = array();
$tdatalcs_terapista[".googleLikeFields"][] = "idterapista";
$tdatalcs_terapista[".googleLikeFields"][] = "Nombre";
$tdatalcs_terapista[".googleLikeFields"][] = "Apellido";
$tdatalcs_terapista[".googleLikeFields"][] = "Telefono";
$tdatalcs_terapista[".googleLikeFields"][] = "Email";
$tdatalcs_terapista[".googleLikeFields"][] = "Direccion";
$tdatalcs_terapista[".googleLikeFields"][] = "Ingresado";
$tdatalcs_terapista[".googleLikeFields"][] = "_idEspeMed";


$tdatalcs_terapista[".advSearchFields"] = array();
$tdatalcs_terapista[".advSearchFields"][] = "idterapista";
$tdatalcs_terapista[".advSearchFields"][] = "Nombre";
$tdatalcs_terapista[".advSearchFields"][] = "Apellido";
$tdatalcs_terapista[".advSearchFields"][] = "Telefono";
$tdatalcs_terapista[".advSearchFields"][] = "Email";
$tdatalcs_terapista[".advSearchFields"][] = "Direccion";
$tdatalcs_terapista[".advSearchFields"][] = "Ingresado";
$tdatalcs_terapista[".advSearchFields"][] = "_idEspeMed";

$tdatalcs_terapista[".tableType"] = "list";

$tdatalcs_terapista[".printerPageOrientation"] = 0;
$tdatalcs_terapista[".nPrinterPageScale"] = 100;

$tdatalcs_terapista[".nPrinterSplitRecords"] = 40;

$tdatalcs_terapista[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_terapista[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_terapista[".isViewPagePDF"] = true;
$tdatalcs_terapista[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_terapista[".isPrinterPagePDF"] = true;
$tdatalcs_terapista[".nPrinterPagePDFScale"] = 100;


$tdatalcs_terapista[".pageSize"] = 20;

$tdatalcs_terapista[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_terapista[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_terapista[".orderindexes"] = array();

$tdatalcs_terapista[".sqlHead"] = "SELECT idterapista,   Nombre,   Apellido,   Telefono,   Email,   Direccion,   Ingresado,   `_idEspeMed`";
$tdatalcs_terapista[".sqlFrom"] = "FROM lcs_terapista";
$tdatalcs_terapista[".sqlWhereExpr"] = "";
$tdatalcs_terapista[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_terapista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_terapista[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_terapista = array();
$tableKeyslcs_terapista[] = "idterapista";
$tdatalcs_terapista[".Keys"] = $tableKeyslcs_terapista;

$tdatalcs_terapista[".listFields"] = array();
$tdatalcs_terapista[".listFields"][] = "idterapista";
$tdatalcs_terapista[".listFields"][] = "Nombre";
$tdatalcs_terapista[".listFields"][] = "Apellido";
$tdatalcs_terapista[".listFields"][] = "Telefono";
$tdatalcs_terapista[".listFields"][] = "Email";
$tdatalcs_terapista[".listFields"][] = "Direccion";
$tdatalcs_terapista[".listFields"][] = "Ingresado";
$tdatalcs_terapista[".listFields"][] = "_idEspeMed";

$tdatalcs_terapista[".hideMobileList"] = array();


$tdatalcs_terapista[".viewFields"] = array();
$tdatalcs_terapista[".viewFields"][] = "idterapista";
$tdatalcs_terapista[".viewFields"][] = "Nombre";
$tdatalcs_terapista[".viewFields"][] = "Apellido";
$tdatalcs_terapista[".viewFields"][] = "Telefono";
$tdatalcs_terapista[".viewFields"][] = "Email";
$tdatalcs_terapista[".viewFields"][] = "Direccion";
$tdatalcs_terapista[".viewFields"][] = "Ingresado";
$tdatalcs_terapista[".viewFields"][] = "_idEspeMed";

$tdatalcs_terapista[".addFields"] = array();
$tdatalcs_terapista[".addFields"][] = "Nombre";
$tdatalcs_terapista[".addFields"][] = "Apellido";
$tdatalcs_terapista[".addFields"][] = "Telefono";
$tdatalcs_terapista[".addFields"][] = "Email";
$tdatalcs_terapista[".addFields"][] = "Direccion";
$tdatalcs_terapista[".addFields"][] = "_idEspeMed";

$tdatalcs_terapista[".inlineAddFields"] = array();

$tdatalcs_terapista[".editFields"] = array();
$tdatalcs_terapista[".editFields"][] = "Nombre";
$tdatalcs_terapista[".editFields"][] = "Apellido";
$tdatalcs_terapista[".editFields"][] = "Telefono";
$tdatalcs_terapista[".editFields"][] = "Email";
$tdatalcs_terapista[".editFields"][] = "Direccion";
$tdatalcs_terapista[".editFields"][] = "_idEspeMed";

$tdatalcs_terapista[".inlineEditFields"] = array();

$tdatalcs_terapista[".exportFields"] = array();
$tdatalcs_terapista[".exportFields"][] = "idterapista";
$tdatalcs_terapista[".exportFields"][] = "Nombre";
$tdatalcs_terapista[".exportFields"][] = "Apellido";
$tdatalcs_terapista[".exportFields"][] = "Telefono";
$tdatalcs_terapista[".exportFields"][] = "Email";
$tdatalcs_terapista[".exportFields"][] = "Direccion";
$tdatalcs_terapista[".exportFields"][] = "Ingresado";
$tdatalcs_terapista[".exportFields"][] = "_idEspeMed";

$tdatalcs_terapista[".importFields"] = array();
$tdatalcs_terapista[".importFields"][] = "Nombre";
$tdatalcs_terapista[".importFields"][] = "Apellido";
$tdatalcs_terapista[".importFields"][] = "Telefono";
$tdatalcs_terapista[".importFields"][] = "Email";
$tdatalcs_terapista[".importFields"][] = "Direccion";
$tdatalcs_terapista[".importFields"][] = "_idEspeMed";

$tdatalcs_terapista[".printFields"] = array();
$tdatalcs_terapista[".printFields"][] = "idterapista";
$tdatalcs_terapista[".printFields"][] = "Nombre";
$tdatalcs_terapista[".printFields"][] = "Apellido";
$tdatalcs_terapista[".printFields"][] = "Telefono";
$tdatalcs_terapista[".printFields"][] = "Email";
$tdatalcs_terapista[".printFields"][] = "Direccion";
$tdatalcs_terapista[".printFields"][] = "Ingresado";
$tdatalcs_terapista[".printFields"][] = "_idEspeMed";

//	idterapista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idterapista";
	$fdata["GoodName"] = "idterapista";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("lcs_terapista","idterapista"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idterapista"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idterapista";
	
		
		
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

	

	
	$tdatalcs_terapista["idterapista"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("lcs_terapista","Nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";
	
		
		
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

	

	
	$tdatalcs_terapista["Nombre"] = $fdata;
//	Apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Apellido";
	$fdata["GoodName"] = "Apellido";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("lcs_terapista","Apellido"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Apellido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Apellido";
	
		
		
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

	

	
	$tdatalcs_terapista["Apellido"] = $fdata;
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("lcs_terapista","Telefono"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Telefono"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telefono";
	
		
		
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

	

	
	$tdatalcs_terapista["Telefono"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("lcs_terapista","Email"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_terapista["Email"] = $fdata;
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("lcs_terapista","Direccion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Direccion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direccion";
	
		
		
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

	

	
	$tdatalcs_terapista["Direccion"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("lcs_terapista","Ingresado"); 
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

	

	
	$tdatalcs_terapista["Ingresado"] = $fdata;
//	_idEspeMed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "_idEspeMed";
	$fdata["GoodName"] = "_idEspeMed";
	$fdata["ownerTable"] = "lcs_terapista";
	$fdata["Label"] = GetFieldLabel("lcs_terapista","_idEspeMed"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "_idEspeMed"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_idEspeMed`";
	
		
		
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
	$edata["LookupTable"] = "lcs_espemed";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "idEspeMed";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TipoEspecialidad";
	
		
	$edata["LookupOrderBy"] = "TipoEspecialidad";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatalcs_terapista["_idEspeMed"] = $fdata;

	
$tables_data["lcs_terapista"]=&$tdatalcs_terapista;
$field_labels["lcs_terapista"] = &$fieldLabelslcs_terapista;
$fieldToolTips["lcs_terapista"] = &$fieldToolTipslcs_terapista;
$page_titles["lcs_terapista"] = &$pageTitleslcs_terapista;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_terapista"] = array();
//	lcs_terapias
	
	

		$dIndex = 0;
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
			
	$detailsTablesData["lcs_terapista"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_terapista"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_terapista"][$dIndex]["masterKeys"][]="idterapista";

				$detailsTablesData["lcs_terapista"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_terapista"][$dIndex]["detailKeys"][]="_idterapista";
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_terapista"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_terapista()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idterapista,   Nombre,   Apellido,   Telefono,   Email,   Direccion,   Ingresado,   `_idEspeMed`";
$proto3["m_strFrom"] = "FROM lcs_terapista";
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
	"m_strName" => "idterapista",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "lcs_terapista"
));

$proto8["m_sql"] = "idterapista";
$proto8["m_srcTableName"] = "lcs_terapista";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "lcs_terapista"
));

$proto10["m_sql"] = "Nombre";
$proto10["m_srcTableName"] = "lcs_terapista";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Apellido",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "lcs_terapista"
));

$proto12["m_sql"] = "Apellido";
$proto12["m_srcTableName"] = "lcs_terapista";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "lcs_terapista"
));

$proto14["m_sql"] = "Telefono";
$proto14["m_srcTableName"] = "lcs_terapista";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "lcs_terapista"
));

$proto16["m_sql"] = "Email";
$proto16["m_srcTableName"] = "lcs_terapista";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "lcs_terapista"
));

$proto18["m_sql"] = "Direccion";
$proto18["m_srcTableName"] = "lcs_terapista";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "lcs_terapista"
));

$proto20["m_sql"] = "Ingresado";
$proto20["m_srcTableName"] = "lcs_terapista";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEspeMed",
	"m_strTable" => "lcs_terapista",
	"m_srcTableName" => "lcs_terapista"
));

$proto22["m_sql"] = "`_idEspeMed`";
$proto22["m_srcTableName"] = "lcs_terapista";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "lcs_terapista";
$proto25["m_srcTableName"] = "lcs_terapista";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idterapista";
$proto25["m_columns"][] = "Nombre";
$proto25["m_columns"][] = "Apellido";
$proto25["m_columns"][] = "Telefono";
$proto25["m_columns"][] = "Email";
$proto25["m_columns"][] = "Direccion";
$proto25["m_columns"][] = "Ingresado";
$proto25["m_columns"][] = "_idEspeMed";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "lcs_terapista";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "lcs_terapista";
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

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="lcs_terapista";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_terapista = createSqlQuery_lcs_terapista();


	
								
	
$tdatalcs_terapista[".sqlquery"] = $queryData_lcs_terapista;

$tableEvents["lcs_terapista"] = new eventsBase;
$tdatalcs_terapista[".hasEvents"] = false;

?>