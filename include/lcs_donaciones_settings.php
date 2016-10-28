<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_donaciones = array();	
	$tdatalcs_donaciones[".truncateText"] = true;
	$tdatalcs_donaciones[".NumberOfChars"] = 80; 
	$tdatalcs_donaciones[".ShortName"] = "lcs_donaciones";
	$tdatalcs_donaciones[".OwnerID"] = "";
	$tdatalcs_donaciones[".OriginalTable"] = "lcs_donaciones";

//	field labels
$fieldLabelslcs_donaciones = array();
$fieldToolTipslcs_donaciones = array();
$pageTitleslcs_donaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_donaciones["Spanish"] = array();
	$fieldToolTipslcs_donaciones["Spanish"] = array();
	$pageTitleslcs_donaciones["Spanish"] = array();
	$fieldLabelslcs_donaciones["Spanish"]["idDonaciones"] = "No.";
	$fieldToolTipslcs_donaciones["Spanish"]["idDonaciones"] = "";
	$fieldLabelslcs_donaciones["Spanish"]["monto"] = "Monto";
	$fieldToolTipslcs_donaciones["Spanish"]["monto"] = "";
	$fieldLabelslcs_donaciones["Spanish"]["Donante"] = "Donante";
	$fieldToolTipslcs_donaciones["Spanish"]["Donante"] = "";
	$fieldLabelslcs_donaciones["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipslcs_donaciones["Spanish"]["fecha"] = "";
	$fieldLabelslcs_donaciones["Spanish"]["_idCentro"] = "Centro";
	$fieldToolTipslcs_donaciones["Spanish"]["_idCentro"] = "";
	if (count($fieldToolTipslcs_donaciones["Spanish"]))
		$tdatalcs_donaciones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_donaciones[""] = array();
	$fieldToolTipslcs_donaciones[""] = array();
	$pageTitleslcs_donaciones[""] = array();
	$fieldLabelslcs_donaciones[""]["idDonaciones"] = "Id Donaciones";
	$fieldToolTipslcs_donaciones[""]["idDonaciones"] = "";
	$fieldLabelslcs_donaciones[""]["monto"] = "Monto";
	$fieldToolTipslcs_donaciones[""]["monto"] = "";
	$fieldLabelslcs_donaciones[""]["Donante"] = "Donante";
	$fieldToolTipslcs_donaciones[""]["Donante"] = "";
	$fieldLabelslcs_donaciones[""]["fecha"] = "Fecha";
	$fieldToolTipslcs_donaciones[""]["fecha"] = "";
	$fieldLabelslcs_donaciones[""]["_idCentro"] = "Id Centro";
	$fieldToolTipslcs_donaciones[""]["_idCentro"] = "";
	if (count($fieldToolTipslcs_donaciones[""]))
		$tdatalcs_donaciones[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_donaciones[".NCSearch"] = true;



$tdatalcs_donaciones[".shortTableName"] = "lcs_donaciones";
$tdatalcs_donaciones[".nSecOptions"] = 0;
$tdatalcs_donaciones[".recsPerRowList"] = 1;
$tdatalcs_donaciones[".mainTableOwnerID"] = "";
$tdatalcs_donaciones[".moveNext"] = 1;
$tdatalcs_donaciones[".nType"] = 0;

$tdatalcs_donaciones[".strOriginalTableName"] = "lcs_donaciones";




$tdatalcs_donaciones[".showAddInPopup"] = true;

$tdatalcs_donaciones[".showEditInPopup"] = true;

$tdatalcs_donaciones[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_donaciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_donaciones[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_donaciones[".listAjax"] = true;
else 
	$tdatalcs_donaciones[".listAjax"] = false;

	$tdatalcs_donaciones[".audit"] = true;

	$tdatalcs_donaciones[".locking"] = false;

$tdatalcs_donaciones[".edit"] = true;

$tdatalcs_donaciones[".list"] = true;

$tdatalcs_donaciones[".view"] = true;

$tdatalcs_donaciones[".import"] = true;

$tdatalcs_donaciones[".exportTo"] = true;

$tdatalcs_donaciones[".printFriendly"] = true;

$tdatalcs_donaciones[".delete"] = true;

$tdatalcs_donaciones[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_donaciones[".searchSaving"] = false;
//

$tdatalcs_donaciones[".showSearchPanel"] = true;
		$tdatalcs_donaciones[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_donaciones[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_donaciones[".isUseAjaxSuggest"] = true;

$tdatalcs_donaciones[".rowHighlite"] = true;



$tdatalcs_donaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_donaciones[".isUseTimeForSearch"] = false;





$tdatalcs_donaciones[".allSearchFields"] = array();
$tdatalcs_donaciones[".filterFields"] = array();
$tdatalcs_donaciones[".requiredSearchFields"] = array();

$tdatalcs_donaciones[".allSearchFields"][] = "idDonaciones";
	$tdatalcs_donaciones[".allSearchFields"][] = "monto";
	$tdatalcs_donaciones[".allSearchFields"][] = "Donante";
	$tdatalcs_donaciones[".allSearchFields"][] = "fecha";
	$tdatalcs_donaciones[".allSearchFields"][] = "_idCentro";
	

$tdatalcs_donaciones[".googleLikeFields"] = array();
$tdatalcs_donaciones[".googleLikeFields"][] = "idDonaciones";
$tdatalcs_donaciones[".googleLikeFields"][] = "monto";
$tdatalcs_donaciones[".googleLikeFields"][] = "Donante";
$tdatalcs_donaciones[".googleLikeFields"][] = "fecha";
$tdatalcs_donaciones[".googleLikeFields"][] = "_idCentro";


$tdatalcs_donaciones[".advSearchFields"] = array();
$tdatalcs_donaciones[".advSearchFields"][] = "idDonaciones";
$tdatalcs_donaciones[".advSearchFields"][] = "monto";
$tdatalcs_donaciones[".advSearchFields"][] = "Donante";
$tdatalcs_donaciones[".advSearchFields"][] = "fecha";
$tdatalcs_donaciones[".advSearchFields"][] = "_idCentro";

$tdatalcs_donaciones[".tableType"] = "list";

$tdatalcs_donaciones[".printerPageOrientation"] = 0;
$tdatalcs_donaciones[".nPrinterPageScale"] = 100;

$tdatalcs_donaciones[".nPrinterSplitRecords"] = 40;

$tdatalcs_donaciones[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatalcs_donaciones[".pageSize"] = 20;

$tdatalcs_donaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_donaciones[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_donaciones[".orderindexes"] = array();

$tdatalcs_donaciones[".sqlHead"] = "SELECT idDonaciones,   monto,   Donante,   fecha,   `_idCentro`";
$tdatalcs_donaciones[".sqlFrom"] = "FROM lcs_donaciones";
$tdatalcs_donaciones[".sqlWhereExpr"] = "";
$tdatalcs_donaciones[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_donaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_donaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatalcs_donaciones[".highlightSearchResults"] = true;

$tableKeyslcs_donaciones = array();
$tableKeyslcs_donaciones[] = "idDonaciones";
$tdatalcs_donaciones[".Keys"] = $tableKeyslcs_donaciones;

$tdatalcs_donaciones[".listFields"] = array();
$tdatalcs_donaciones[".listFields"][] = "idDonaciones";
$tdatalcs_donaciones[".listFields"][] = "monto";
$tdatalcs_donaciones[".listFields"][] = "Donante";
$tdatalcs_donaciones[".listFields"][] = "fecha";
$tdatalcs_donaciones[".listFields"][] = "_idCentro";

$tdatalcs_donaciones[".hideMobileList"] = array();


$tdatalcs_donaciones[".viewFields"] = array();
$tdatalcs_donaciones[".viewFields"][] = "idDonaciones";
$tdatalcs_donaciones[".viewFields"][] = "monto";
$tdatalcs_donaciones[".viewFields"][] = "Donante";
$tdatalcs_donaciones[".viewFields"][] = "fecha";
$tdatalcs_donaciones[".viewFields"][] = "_idCentro";

$tdatalcs_donaciones[".addFields"] = array();
$tdatalcs_donaciones[".addFields"][] = "monto";
$tdatalcs_donaciones[".addFields"][] = "Donante";
$tdatalcs_donaciones[".addFields"][] = "_idCentro";

$tdatalcs_donaciones[".inlineAddFields"] = array();

$tdatalcs_donaciones[".editFields"] = array();
$tdatalcs_donaciones[".editFields"][] = "monto";
$tdatalcs_donaciones[".editFields"][] = "Donante";
$tdatalcs_donaciones[".editFields"][] = "_idCentro";

$tdatalcs_donaciones[".inlineEditFields"] = array();

$tdatalcs_donaciones[".exportFields"] = array();
$tdatalcs_donaciones[".exportFields"][] = "idDonaciones";
$tdatalcs_donaciones[".exportFields"][] = "monto";
$tdatalcs_donaciones[".exportFields"][] = "Donante";
$tdatalcs_donaciones[".exportFields"][] = "fecha";
$tdatalcs_donaciones[".exportFields"][] = "_idCentro";

$tdatalcs_donaciones[".importFields"] = array();
$tdatalcs_donaciones[".importFields"][] = "monto";
$tdatalcs_donaciones[".importFields"][] = "Donante";
$tdatalcs_donaciones[".importFields"][] = "_idCentro";

$tdatalcs_donaciones[".printFields"] = array();
$tdatalcs_donaciones[".printFields"][] = "idDonaciones";
$tdatalcs_donaciones[".printFields"][] = "monto";
$tdatalcs_donaciones[".printFields"][] = "Donante";
$tdatalcs_donaciones[".printFields"][] = "fecha";
$tdatalcs_donaciones[".printFields"][] = "_idCentro";

//	idDonaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idDonaciones";
	$fdata["GoodName"] = "idDonaciones";
	$fdata["ownerTable"] = "lcs_donaciones";
	$fdata["Label"] = GetFieldLabel("lcs_donaciones","idDonaciones"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idDonaciones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idDonaciones";
	
		
		
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

	

	
	$tdatalcs_donaciones["idDonaciones"] = $fdata;
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "lcs_donaciones";
	$fdata["Label"] = GetFieldLabel("lcs_donaciones","monto"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "monto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monto";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatalcs_donaciones["monto"] = $fdata;
//	Donante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Donante";
	$fdata["GoodName"] = "Donante";
	$fdata["ownerTable"] = "lcs_donaciones";
	$fdata["Label"] = GetFieldLabel("lcs_donaciones","Donante"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Donante"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Donante";
	
		
		
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
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_donaciones["Donante"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "lcs_donaciones";
	$fdata["Label"] = GetFieldLabel("lcs_donaciones","fecha"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 2; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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

	

	
	$tdatalcs_donaciones["fecha"] = $fdata;
//	_idCentro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "_idCentro";
	$fdata["GoodName"] = "_idCentro";
	$fdata["ownerTable"] = "lcs_donaciones";
	$fdata["Label"] = GetFieldLabel("lcs_donaciones","_idCentro"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "_idCentro"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_idCentro`";
	
		
		
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
	$edata["LookupTable"] = "lcs_centro";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idCentro";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";
	
		
	$edata["LookupOrderBy"] = "Nombre";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
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

	

	
	$tdatalcs_donaciones["_idCentro"] = $fdata;

	
$tables_data["lcs_donaciones"]=&$tdatalcs_donaciones;
$field_labels["lcs_donaciones"] = &$fieldLabelslcs_donaciones;
$fieldToolTips["lcs_donaciones"] = &$fieldToolTipslcs_donaciones;
$page_titles["lcs_donaciones"] = &$pageTitleslcs_donaciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_donaciones"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_donaciones"] = array();


	
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
					$masterTablesData["lcs_donaciones"][0] = $masterParams;	
				$masterTablesData["lcs_donaciones"][0]["masterKeys"] = array();
	$masterTablesData["lcs_donaciones"][0]["masterKeys"][]="idCentro";
				$masterTablesData["lcs_donaciones"][0]["detailKeys"] = array();
	$masterTablesData["lcs_donaciones"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_donaciones()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idDonaciones,   monto,   Donante,   fecha,   `_idCentro`";
$proto3["m_strFrom"] = "FROM lcs_donaciones";
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
	"m_strName" => "idDonaciones",
	"m_strTable" => "lcs_donaciones",
	"m_srcTableName" => "lcs_donaciones"
));

$proto8["m_sql"] = "idDonaciones";
$proto8["m_srcTableName"] = "lcs_donaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "lcs_donaciones",
	"m_srcTableName" => "lcs_donaciones"
));

$proto10["m_sql"] = "monto";
$proto10["m_srcTableName"] = "lcs_donaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Donante",
	"m_strTable" => "lcs_donaciones",
	"m_srcTableName" => "lcs_donaciones"
));

$proto12["m_sql"] = "Donante";
$proto12["m_srcTableName"] = "lcs_donaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "lcs_donaciones",
	"m_srcTableName" => "lcs_donaciones"
));

$proto14["m_sql"] = "fecha";
$proto14["m_srcTableName"] = "lcs_donaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "_idCentro",
	"m_strTable" => "lcs_donaciones",
	"m_srcTableName" => "lcs_donaciones"
));

$proto16["m_sql"] = "`_idCentro`";
$proto16["m_srcTableName"] = "lcs_donaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "lcs_donaciones";
$proto19["m_srcTableName"] = "lcs_donaciones";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idDonaciones";
$proto19["m_columns"][] = "monto";
$proto19["m_columns"][] = "Donante";
$proto19["m_columns"][] = "fecha";
$proto19["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "lcs_donaciones";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "lcs_donaciones";
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

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="lcs_donaciones";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_donaciones = createSqlQuery_lcs_donaciones();


	
					
	
$tdatalcs_donaciones[".sqlquery"] = $queryData_lcs_donaciones;

$tableEvents["lcs_donaciones"] = new eventsBase;
$tdatalcs_donaciones[".hasEvents"] = false;

?>