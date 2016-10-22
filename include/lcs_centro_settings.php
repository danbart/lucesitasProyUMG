<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_centro = array();	
	$tdatalcs_centro[".truncateText"] = true;
	$tdatalcs_centro[".NumberOfChars"] = 80; 
	$tdatalcs_centro[".ShortName"] = "lcs_centro";
	$tdatalcs_centro[".OwnerID"] = "";
	$tdatalcs_centro[".OriginalTable"] = "lcs_centro";

//	field labels
$fieldLabelslcs_centro = array();
$fieldToolTipslcs_centro = array();
$pageTitleslcs_centro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_centro["Spanish"] = array();
	$fieldToolTipslcs_centro["Spanish"] = array();
	$pageTitleslcs_centro["Spanish"] = array();
	$fieldLabelslcs_centro["Spanish"]["idCentro"] = "No.";
	$fieldToolTipslcs_centro["Spanish"]["idCentro"] = "";
	$fieldLabelslcs_centro["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipslcs_centro["Spanish"]["Nombre"] = "";
	$fieldLabelslcs_centro["Spanish"]["Direcci_n"] = "Dirección";
	$fieldToolTipslcs_centro["Spanish"]["Dirección"] = "";
	$fieldLabelslcs_centro["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipslcs_centro["Spanish"]["Telefono"] = "";
	$fieldLabelslcs_centro["Spanish"]["Propietario"] = "Propietario";
	$fieldToolTipslcs_centro["Spanish"]["Propietario"] = "";
	$fieldLabelslcs_centro["Spanish"]["Responsable"] = "Responsable";
	$fieldToolTipslcs_centro["Spanish"]["Responsable"] = "";
	$fieldLabelslcs_centro["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_centro["Spanish"]["Ingresado"] = "";
	$pageTitleslcs_centro["Spanish"]["add"] = "Centro - Añadir nuevo registro";
	$pageTitleslcs_centro["Spanish"]["edit"] = "Centro - Editar registro ";
	$pageTitleslcs_centro["Spanish"]["import"] = "Centro - Importar";
	$pageTitleslcs_centro["Spanish"]["view"] = "Centro - Ver registro";
	$pageTitleslcs_centro["Spanish"]["masterlist"] = "Centro";
	$pageTitleslcs_centro["Spanish"]["masterprint"] = "Centro";
	if (count($fieldToolTipslcs_centro["Spanish"]))
		$tdatalcs_centro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_centro[""] = array();
	$fieldToolTipslcs_centro[""] = array();
	$pageTitleslcs_centro[""] = array();
	$fieldLabelslcs_centro[""]["idCentro"] = "Id Centro";
	$fieldToolTipslcs_centro[""]["idCentro"] = "";
	$fieldLabelslcs_centro[""]["Nombre"] = "Nombre";
	$fieldToolTipslcs_centro[""]["Nombre"] = "";
	$fieldLabelslcs_centro[""]["Direcci_n"] = "Dirección";
	$fieldToolTipslcs_centro[""]["Dirección"] = "";
	$fieldLabelslcs_centro[""]["Telefono"] = "Telefono";
	$fieldToolTipslcs_centro[""]["Telefono"] = "";
	$fieldLabelslcs_centro[""]["Propietario"] = "Propietario";
	$fieldToolTipslcs_centro[""]["Propietario"] = "";
	$fieldLabelslcs_centro[""]["Responsable"] = "Responsable";
	$fieldToolTipslcs_centro[""]["Responsable"] = "";
	$fieldLabelslcs_centro[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_centro[""]["Ingresado"] = "";
	if (count($fieldToolTipslcs_centro[""]))
		$tdatalcs_centro[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_centro[".NCSearch"] = true;



$tdatalcs_centro[".shortTableName"] = "lcs_centro";
$tdatalcs_centro[".nSecOptions"] = 0;
$tdatalcs_centro[".recsPerRowList"] = 1;
$tdatalcs_centro[".mainTableOwnerID"] = "";
$tdatalcs_centro[".moveNext"] = 1;
$tdatalcs_centro[".nType"] = 0;

$tdatalcs_centro[".strOriginalTableName"] = "lcs_centro";




$tdatalcs_centro[".showAddInPopup"] = true;

$tdatalcs_centro[".showEditInPopup"] = true;

$tdatalcs_centro[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
			;
$popupPagesLayoutNames["edit"] = "add2";
			;
$popupPagesLayoutNames["view"] = "add2";
$tdatalcs_centro[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_centro[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_centro[".listAjax"] = true;
else 
	$tdatalcs_centro[".listAjax"] = false;

	$tdatalcs_centro[".audit"] = true;

	$tdatalcs_centro[".locking"] = false;


$tdatalcs_centro[".list"] = true;


$tdatalcs_centro[".import"] = true;

$tdatalcs_centro[".exportTo"] = true;

$tdatalcs_centro[".printFriendly"] = true;


$tdatalcs_centro[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_centro[".searchSaving"] = false;
//

$tdatalcs_centro[".showSearchPanel"] = true;
		$tdatalcs_centro[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_centro[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_centro[".isUseAjaxSuggest"] = true;

$tdatalcs_centro[".rowHighlite"] = true;



$tdatalcs_centro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_centro[".isUseTimeForSearch"] = false;



$tdatalcs_centro[".useDetailsPreview"] = true;


$tdatalcs_centro[".allSearchFields"] = array();
$tdatalcs_centro[".filterFields"] = array();
$tdatalcs_centro[".requiredSearchFields"] = array();

$tdatalcs_centro[".allSearchFields"][] = "idCentro";
	$tdatalcs_centro[".allSearchFields"][] = "Nombre";
	$tdatalcs_centro[".allSearchFields"][] = "Dirección";
	$tdatalcs_centro[".allSearchFields"][] = "Telefono";
	$tdatalcs_centro[".allSearchFields"][] = "Propietario";
	$tdatalcs_centro[".allSearchFields"][] = "Responsable";
	$tdatalcs_centro[".allSearchFields"][] = "Ingresado";
	

$tdatalcs_centro[".googleLikeFields"] = array();
$tdatalcs_centro[".googleLikeFields"][] = "idCentro";
$tdatalcs_centro[".googleLikeFields"][] = "Nombre";
$tdatalcs_centro[".googleLikeFields"][] = "Dirección";
$tdatalcs_centro[".googleLikeFields"][] = "Telefono";
$tdatalcs_centro[".googleLikeFields"][] = "Propietario";
$tdatalcs_centro[".googleLikeFields"][] = "Responsable";
$tdatalcs_centro[".googleLikeFields"][] = "Ingresado";


$tdatalcs_centro[".advSearchFields"] = array();
$tdatalcs_centro[".advSearchFields"][] = "idCentro";
$tdatalcs_centro[".advSearchFields"][] = "Nombre";
$tdatalcs_centro[".advSearchFields"][] = "Dirección";
$tdatalcs_centro[".advSearchFields"][] = "Telefono";
$tdatalcs_centro[".advSearchFields"][] = "Propietario";
$tdatalcs_centro[".advSearchFields"][] = "Responsable";
$tdatalcs_centro[".advSearchFields"][] = "Ingresado";

$tdatalcs_centro[".tableType"] = "list";

$tdatalcs_centro[".printerPageOrientation"] = 0;
$tdatalcs_centro[".nPrinterPageScale"] = 100;

$tdatalcs_centro[".nPrinterSplitRecords"] = 40;

$tdatalcs_centro[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_centro[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_centro[".isViewPagePDF"] = true;
$tdatalcs_centro[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_centro[".isPrinterPagePDF"] = true;
$tdatalcs_centro[".nPrinterPagePDFScale"] = 100;


$tdatalcs_centro[".pageSize"] = 20;

$tdatalcs_centro[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_centro[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_centro[".orderindexes"] = array();

$tdatalcs_centro[".sqlHead"] = "SELECT idCentro,   Nombre,   `Dirección`,   Telefono,   Propietario,   Responsable,   Ingresado";
$tdatalcs_centro[".sqlFrom"] = "FROM lcs_centro";
$tdatalcs_centro[".sqlWhereExpr"] = "";
$tdatalcs_centro[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_centro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_centro[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_centro = array();
$tdatalcs_centro[".Keys"] = $tableKeyslcs_centro;

$tdatalcs_centro[".listFields"] = array();
$tdatalcs_centro[".listFields"][] = "idCentro";
$tdatalcs_centro[".listFields"][] = "Nombre";
$tdatalcs_centro[".listFields"][] = "Dirección";
$tdatalcs_centro[".listFields"][] = "Telefono";
$tdatalcs_centro[".listFields"][] = "Propietario";
$tdatalcs_centro[".listFields"][] = "Responsable";
$tdatalcs_centro[".listFields"][] = "Ingresado";

$tdatalcs_centro[".hideMobileList"] = array();


$tdatalcs_centro[".viewFields"] = array();

$tdatalcs_centro[".addFields"] = array();
$tdatalcs_centro[".addFields"][] = "Nombre";
$tdatalcs_centro[".addFields"][] = "Dirección";
$tdatalcs_centro[".addFields"][] = "Telefono";
$tdatalcs_centro[".addFields"][] = "Propietario";
$tdatalcs_centro[".addFields"][] = "Responsable";

$tdatalcs_centro[".inlineAddFields"] = array();

$tdatalcs_centro[".editFields"] = array();

$tdatalcs_centro[".inlineEditFields"] = array();

$tdatalcs_centro[".exportFields"] = array();
$tdatalcs_centro[".exportFields"][] = "idCentro";
$tdatalcs_centro[".exportFields"][] = "Nombre";
$tdatalcs_centro[".exportFields"][] = "Dirección";
$tdatalcs_centro[".exportFields"][] = "Telefono";
$tdatalcs_centro[".exportFields"][] = "Propietario";
$tdatalcs_centro[".exportFields"][] = "Responsable";
$tdatalcs_centro[".exportFields"][] = "Ingresado";

$tdatalcs_centro[".importFields"] = array();
$tdatalcs_centro[".importFields"][] = "Nombre";
$tdatalcs_centro[".importFields"][] = "Dirección";
$tdatalcs_centro[".importFields"][] = "Telefono";
$tdatalcs_centro[".importFields"][] = "Propietario";
$tdatalcs_centro[".importFields"][] = "Responsable";

$tdatalcs_centro[".printFields"] = array();
$tdatalcs_centro[".printFields"][] = "idCentro";
$tdatalcs_centro[".printFields"][] = "Nombre";
$tdatalcs_centro[".printFields"][] = "Dirección";
$tdatalcs_centro[".printFields"][] = "Telefono";
$tdatalcs_centro[".printFields"][] = "Propietario";
$tdatalcs_centro[".printFields"][] = "Responsable";
$tdatalcs_centro[".printFields"][] = "Ingresado";

//	idCentro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idCentro";
	$fdata["GoodName"] = "idCentro";
	$fdata["ownerTable"] = "lcs_centro";
	$fdata["Label"] = GetFieldLabel("lcs_centro","idCentro"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idCentro"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCentro";
	
		
		
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
			
		$edata["controlWidth"] = 300;
	
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

	

	
	$tdatalcs_centro["idCentro"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "lcs_centro";
	$fdata["Label"] = GetFieldLabel("lcs_centro","Nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
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
	
		$edata["controlWidth"] = 300;
	
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

	

	
	$tdatalcs_centro["Nombre"] = $fdata;
//	Dirección
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Dirección";
	$fdata["GoodName"] = "Direcci_n";
	$fdata["ownerTable"] = "lcs_centro";
	$fdata["Label"] = GetFieldLabel("lcs_centro","Direcci_n"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Dirección"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dirección`";
	
		
		
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
	
		$edata["controlWidth"] = 300;
	
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

	

	
	$tdatalcs_centro["Dirección"] = $fdata;
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "lcs_centro";
	$fdata["Label"] = GetFieldLabel("lcs_centro","Telefono"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
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
	
		$edata["controlWidth"] = 300;
	
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

	

	
	$tdatalcs_centro["Telefono"] = $fdata;
//	Propietario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Propietario";
	$fdata["GoodName"] = "Propietario";
	$fdata["ownerTable"] = "lcs_centro";
	$fdata["Label"] = GetFieldLabel("lcs_centro","Propietario"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Propietario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Propietario";
	
		
		
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
	
		$edata["controlWidth"] = 300;
	
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

	

	
	$tdatalcs_centro["Propietario"] = $fdata;
//	Responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Responsable";
	$fdata["GoodName"] = "Responsable";
	$fdata["ownerTable"] = "lcs_centro";
	$fdata["Label"] = GetFieldLabel("lcs_centro","Responsable"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Responsable"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Responsable";
	
		
		
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
	
		$edata["controlWidth"] = 300;
	
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

	

	
	$tdatalcs_centro["Responsable"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_centro";
	$fdata["Label"] = GetFieldLabel("lcs_centro","Ingresado"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
		
		$edata["controlWidth"] = 300;
	
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

	

	
	$tdatalcs_centro["Ingresado"] = $fdata;

	
$tables_data["lcs_centro"]=&$tdatalcs_centro;
$field_labels["lcs_centro"] = &$fieldLabelslcs_centro;
$fieldToolTips["lcs_centro"] = &$fieldToolTipslcs_centro;
$page_titles["lcs_centro"] = &$pageTitleslcs_centro;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_centro"] = array();
//	lcs_estudiante
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_estudiante";
		$detailsParam["dOriginalTable"] = "lcs_estudiante";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_estudiante";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
//	lcs_donaciones
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_donaciones";
		$detailsParam["dOriginalTable"] = "lcs_donaciones";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_donaciones";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
//	Reporte Estudiantes
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Reporte Estudiantes";
		$detailsParam["dOriginalTable"] = "lcs_estudiante";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Reporte_Estudiantes";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
//	RepEstudMed
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="RepEstudMed";
		$detailsParam["dOriginalTable"] = "lcs_estudiante";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "RepEstudMed";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
//	EstuHistSocial
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="EstuHistSocial";
		$detailsParam["dOriginalTable"] = "lcs_estudiante";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "EstuHistSocial";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
//	EstuHistLengua
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="EstuHistLengua";
		$detailsParam["dOriginalTable"] = "lcs_estudiante";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "EstuHistLengua";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
//	EstuHistEmoci
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="EstuHistEmoci";
		$detailsParam["dOriginalTable"] = "lcs_estudiante";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "EstuHistEmoci";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
//	EstuHistEmbarazo
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="EstuHistEmbarazo";
		$detailsParam["dOriginalTable"] = "lcs_estudiante";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "EstuHistEmbarazo";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
//	EstuHistCaracter
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="EstuHistCaracter";
		$detailsParam["dOriginalTable"] = "lcs_estudiante";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "EstuHistCaracter";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
//	lcs_personal
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_personal";
		$detailsParam["dOriginalTable"] = "lcs_personal";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_personal";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_centro"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["masterKeys"][]="idCentro";

				$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_centro"][$dIndex]["detailKeys"][]="_idCentro";
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_centro"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_centro()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idCentro,   Nombre,   `Dirección`,   Telefono,   Propietario,   Responsable,   Ingresado";
$proto3["m_strFrom"] = "FROM lcs_centro";
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
	"m_strName" => "idCentro",
	"m_strTable" => "lcs_centro",
	"m_srcTableName" => "lcs_centro"
));

$proto8["m_sql"] = "idCentro";
$proto8["m_srcTableName"] = "lcs_centro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "lcs_centro",
	"m_srcTableName" => "lcs_centro"
));

$proto10["m_sql"] = "Nombre";
$proto10["m_srcTableName"] = "lcs_centro";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Dirección",
	"m_strTable" => "lcs_centro",
	"m_srcTableName" => "lcs_centro"
));

$proto12["m_sql"] = "`Dirección`";
$proto12["m_srcTableName"] = "lcs_centro";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "lcs_centro",
	"m_srcTableName" => "lcs_centro"
));

$proto14["m_sql"] = "Telefono";
$proto14["m_srcTableName"] = "lcs_centro";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Propietario",
	"m_strTable" => "lcs_centro",
	"m_srcTableName" => "lcs_centro"
));

$proto16["m_sql"] = "Propietario";
$proto16["m_srcTableName"] = "lcs_centro";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Responsable",
	"m_strTable" => "lcs_centro",
	"m_srcTableName" => "lcs_centro"
));

$proto18["m_sql"] = "Responsable";
$proto18["m_srcTableName"] = "lcs_centro";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_centro",
	"m_srcTableName" => "lcs_centro"
));

$proto20["m_sql"] = "Ingresado";
$proto20["m_srcTableName"] = "lcs_centro";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "lcs_centro";
$proto23["m_srcTableName"] = "lcs_centro";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idCentro";
$proto23["m_columns"][] = "Nombre";
$proto23["m_columns"][] = "Dirección";
$proto23["m_columns"][] = "Telefono";
$proto23["m_columns"][] = "Propietario";
$proto23["m_columns"][] = "Responsable";
$proto23["m_columns"][] = "Ingresado";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "lcs_centro";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "lcs_centro";
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
$proto3["m_srcTableName"]="lcs_centro";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_centro = createSqlQuery_lcs_centro();


	
							
	
$tdatalcs_centro[".sqlquery"] = $queryData_lcs_centro;

include_once(getabspath("include/lcs_centro_events.php"));
$tableEvents["lcs_centro"] = new eventclass_lcs_centro;
$tdatalcs_centro[".hasEvents"] = true;

?>