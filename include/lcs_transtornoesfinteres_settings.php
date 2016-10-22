<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_transtornoesfinteres = array();	
	$tdatalcs_transtornoesfinteres[".truncateText"] = true;
	$tdatalcs_transtornoesfinteres[".NumberOfChars"] = 80; 
	$tdatalcs_transtornoesfinteres[".ShortName"] = "lcs_transtornoesfinteres";
	$tdatalcs_transtornoesfinteres[".OwnerID"] = "";
	$tdatalcs_transtornoesfinteres[".OriginalTable"] = "lcs_transtornoesfinteres";

//	field labels
$fieldLabelslcs_transtornoesfinteres = array();
$fieldToolTipslcs_transtornoesfinteres = array();
$pageTitleslcs_transtornoesfinteres = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_transtornoesfinteres["Spanish"] = array();
	$fieldToolTipslcs_transtornoesfinteres["Spanish"] = array();
	$pageTitleslcs_transtornoesfinteres["Spanish"] = array();
	$fieldLabelslcs_transtornoesfinteres["Spanish"]["idTranstornoEsfinteres"] = "No.";
	$fieldToolTipslcs_transtornoesfinteres["Spanish"]["idTranstornoEsfinteres"] = "";
	$fieldLabelslcs_transtornoesfinteres["Spanish"]["TipoEsfinteres"] = "Tipo Esfinteres";
	$fieldToolTipslcs_transtornoesfinteres["Spanish"]["TipoEsfinteres"] = "";
	$fieldLabelslcs_transtornoesfinteres["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_transtornoesfinteres["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_transtornoesfinteres["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_transtornoesfinteres["Spanish"]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_transtornoesfinteres["Spanish"]))
		$tdatalcs_transtornoesfinteres[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_transtornoesfinteres[""] = array();
	$fieldToolTipslcs_transtornoesfinteres[""] = array();
	$pageTitleslcs_transtornoesfinteres[""] = array();
	$fieldLabelslcs_transtornoesfinteres[""]["idTranstornoEsfinteres"] = "Id Transtorno Esfinteres";
	$fieldToolTipslcs_transtornoesfinteres[""]["idTranstornoEsfinteres"] = "";
	$fieldLabelslcs_transtornoesfinteres[""]["TipoEsfinteres"] = "Tipo Esfinteres";
	$fieldToolTipslcs_transtornoesfinteres[""]["TipoEsfinteres"] = "";
	$fieldLabelslcs_transtornoesfinteres[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_transtornoesfinteres[""]["Ingresado"] = "";
	$fieldLabelslcs_transtornoesfinteres[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_transtornoesfinteres[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_transtornoesfinteres[""]))
		$tdatalcs_transtornoesfinteres[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_transtornoesfinteres[".NCSearch"] = true;



$tdatalcs_transtornoesfinteres[".shortTableName"] = "lcs_transtornoesfinteres";
$tdatalcs_transtornoesfinteres[".nSecOptions"] = 0;
$tdatalcs_transtornoesfinteres[".recsPerRowList"] = 1;
$tdatalcs_transtornoesfinteres[".mainTableOwnerID"] = "";
$tdatalcs_transtornoesfinteres[".moveNext"] = 1;
$tdatalcs_transtornoesfinteres[".nType"] = 0;

$tdatalcs_transtornoesfinteres[".strOriginalTableName"] = "lcs_transtornoesfinteres";




$tdatalcs_transtornoesfinteres[".showAddInPopup"] = true;

$tdatalcs_transtornoesfinteres[".showEditInPopup"] = true;

$tdatalcs_transtornoesfinteres[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_transtornoesfinteres[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_transtornoesfinteres[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_transtornoesfinteres[".listAjax"] = true;
else 
	$tdatalcs_transtornoesfinteres[".listAjax"] = false;

	$tdatalcs_transtornoesfinteres[".audit"] = true;

	$tdatalcs_transtornoesfinteres[".locking"] = false;

$tdatalcs_transtornoesfinteres[".edit"] = true;

$tdatalcs_transtornoesfinteres[".list"] = true;

$tdatalcs_transtornoesfinteres[".view"] = true;

$tdatalcs_transtornoesfinteres[".import"] = true;

$tdatalcs_transtornoesfinteres[".exportTo"] = true;

$tdatalcs_transtornoesfinteres[".printFriendly"] = true;

$tdatalcs_transtornoesfinteres[".delete"] = true;

$tdatalcs_transtornoesfinteres[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_transtornoesfinteres[".searchSaving"] = false;
//

$tdatalcs_transtornoesfinteres[".showSearchPanel"] = true;
		$tdatalcs_transtornoesfinteres[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_transtornoesfinteres[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_transtornoesfinteres[".isUseAjaxSuggest"] = true;

$tdatalcs_transtornoesfinteres[".rowHighlite"] = true;



$tdatalcs_transtornoesfinteres[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_transtornoesfinteres[".isUseTimeForSearch"] = false;





$tdatalcs_transtornoesfinteres[".allSearchFields"] = array();
$tdatalcs_transtornoesfinteres[".filterFields"] = array();
$tdatalcs_transtornoesfinteres[".requiredSearchFields"] = array();

$tdatalcs_transtornoesfinteres[".allSearchFields"][] = "idTranstornoEsfinteres";
	$tdatalcs_transtornoesfinteres[".allSearchFields"][] = "TipoEsfinteres";
	$tdatalcs_transtornoesfinteres[".allSearchFields"][] = "Ingresado";
	$tdatalcs_transtornoesfinteres[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_transtornoesfinteres[".googleLikeFields"] = array();
$tdatalcs_transtornoesfinteres[".googleLikeFields"][] = "idTranstornoEsfinteres";
$tdatalcs_transtornoesfinteres[".googleLikeFields"][] = "TipoEsfinteres";
$tdatalcs_transtornoesfinteres[".googleLikeFields"][] = "Ingresado";
$tdatalcs_transtornoesfinteres[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_transtornoesfinteres[".advSearchFields"] = array();
$tdatalcs_transtornoesfinteres[".advSearchFields"][] = "idTranstornoEsfinteres";
$tdatalcs_transtornoesfinteres[".advSearchFields"][] = "TipoEsfinteres";
$tdatalcs_transtornoesfinteres[".advSearchFields"][] = "Ingresado";
$tdatalcs_transtornoesfinteres[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_transtornoesfinteres[".tableType"] = "list";

$tdatalcs_transtornoesfinteres[".printerPageOrientation"] = 0;
$tdatalcs_transtornoesfinteres[".nPrinterPageScale"] = 100;

$tdatalcs_transtornoesfinteres[".nPrinterSplitRecords"] = 40;

$tdatalcs_transtornoesfinteres[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_transtornoesfinteres[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_transtornoesfinteres[".isViewPagePDF"] = true;
$tdatalcs_transtornoesfinteres[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_transtornoesfinteres[".isPrinterPagePDF"] = true;
$tdatalcs_transtornoesfinteres[".nPrinterPagePDFScale"] = 100;


$tdatalcs_transtornoesfinteres[".pageSize"] = 20;

$tdatalcs_transtornoesfinteres[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_transtornoesfinteres[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_transtornoesfinteres[".orderindexes"] = array();

$tdatalcs_transtornoesfinteres[".sqlHead"] = "SELECT idTranstornoEsfinteres,   TipoEsfinteres,   Ingresado,   _idEstudiante";
$tdatalcs_transtornoesfinteres[".sqlFrom"] = "FROM lcs_transtornoesfinteres";
$tdatalcs_transtornoesfinteres[".sqlWhereExpr"] = "";
$tdatalcs_transtornoesfinteres[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_transtornoesfinteres[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_transtornoesfinteres[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_transtornoesfinteres = array();
$tableKeyslcs_transtornoesfinteres[] = "idTranstornoEsfinteres";
$tdatalcs_transtornoesfinteres[".Keys"] = $tableKeyslcs_transtornoesfinteres;

$tdatalcs_transtornoesfinteres[".listFields"] = array();
$tdatalcs_transtornoesfinteres[".listFields"][] = "idTranstornoEsfinteres";
$tdatalcs_transtornoesfinteres[".listFields"][] = "TipoEsfinteres";
$tdatalcs_transtornoesfinteres[".listFields"][] = "Ingresado";
$tdatalcs_transtornoesfinteres[".listFields"][] = "_idEstudiante";

$tdatalcs_transtornoesfinteres[".hideMobileList"] = array();


$tdatalcs_transtornoesfinteres[".viewFields"] = array();
$tdatalcs_transtornoesfinteres[".viewFields"][] = "idTranstornoEsfinteres";
$tdatalcs_transtornoesfinteres[".viewFields"][] = "TipoEsfinteres";
$tdatalcs_transtornoesfinteres[".viewFields"][] = "Ingresado";
$tdatalcs_transtornoesfinteres[".viewFields"][] = "_idEstudiante";

$tdatalcs_transtornoesfinteres[".addFields"] = array();
$tdatalcs_transtornoesfinteres[".addFields"][] = "_idEstudiante";
$tdatalcs_transtornoesfinteres[".addFields"][] = "TipoEsfinteres";

$tdatalcs_transtornoesfinteres[".inlineAddFields"] = array();

$tdatalcs_transtornoesfinteres[".editFields"] = array();
$tdatalcs_transtornoesfinteres[".editFields"][] = "TipoEsfinteres";
$tdatalcs_transtornoesfinteres[".editFields"][] = "_idEstudiante";

$tdatalcs_transtornoesfinteres[".inlineEditFields"] = array();

$tdatalcs_transtornoesfinteres[".exportFields"] = array();
$tdatalcs_transtornoesfinteres[".exportFields"][] = "idTranstornoEsfinteres";
$tdatalcs_transtornoesfinteres[".exportFields"][] = "TipoEsfinteres";
$tdatalcs_transtornoesfinteres[".exportFields"][] = "Ingresado";
$tdatalcs_transtornoesfinteres[".exportFields"][] = "_idEstudiante";

$tdatalcs_transtornoesfinteres[".importFields"] = array();
$tdatalcs_transtornoesfinteres[".importFields"][] = "TipoEsfinteres";
$tdatalcs_transtornoesfinteres[".importFields"][] = "_idEstudiante";

$tdatalcs_transtornoesfinteres[".printFields"] = array();
$tdatalcs_transtornoesfinteres[".printFields"][] = "idTranstornoEsfinteres";
$tdatalcs_transtornoesfinteres[".printFields"][] = "TipoEsfinteres";
$tdatalcs_transtornoesfinteres[".printFields"][] = "Ingresado";
$tdatalcs_transtornoesfinteres[".printFields"][] = "_idEstudiante";

//	idTranstornoEsfinteres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTranstornoEsfinteres";
	$fdata["GoodName"] = "idTranstornoEsfinteres";
	$fdata["ownerTable"] = "lcs_transtornoesfinteres";
	$fdata["Label"] = GetFieldLabel("lcs_transtornoesfinteres","idTranstornoEsfinteres"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idTranstornoEsfinteres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idTranstornoEsfinteres";
	
		
		
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

	

	
	$tdatalcs_transtornoesfinteres["idTranstornoEsfinteres"] = $fdata;
//	TipoEsfinteres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoEsfinteres";
	$fdata["GoodName"] = "TipoEsfinteres";
	$fdata["ownerTable"] = "lcs_transtornoesfinteres";
	$fdata["Label"] = GetFieldLabel("lcs_transtornoesfinteres","TipoEsfinteres"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoEsfinteres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoEsfinteres";
	
		
		
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

	

	
	$tdatalcs_transtornoesfinteres["TipoEsfinteres"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_transtornoesfinteres";
	$fdata["Label"] = GetFieldLabel("lcs_transtornoesfinteres","Ingresado"); 
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

	

	
	$tdatalcs_transtornoesfinteres["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_transtornoesfinteres";
	$fdata["Label"] = GetFieldLabel("lcs_transtornoesfinteres","_idEstudiante"); 
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

	

	
	$tdatalcs_transtornoesfinteres["_idEstudiante"] = $fdata;

	
$tables_data["lcs_transtornoesfinteres"]=&$tdatalcs_transtornoesfinteres;
$field_labels["lcs_transtornoesfinteres"] = &$fieldLabelslcs_transtornoesfinteres;
$fieldToolTips["lcs_transtornoesfinteres"] = &$fieldToolTipslcs_transtornoesfinteres;
$page_titles["lcs_transtornoesfinteres"] = &$pageTitleslcs_transtornoesfinteres;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_transtornoesfinteres"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_transtornoesfinteres"] = array();


	
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
	$masterTablesData["lcs_transtornoesfinteres"][0] = $masterParams;	
				$masterTablesData["lcs_transtornoesfinteres"][0]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoesfinteres"][0]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][0]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoesfinteres"][1] = $masterParams;	
				$masterTablesData["lcs_transtornoesfinteres"][1]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoesfinteres"][1]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoesfinteres"][2] = $masterParams;	
				$masterTablesData["lcs_transtornoesfinteres"][2]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoesfinteres"][2]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoesfinteres"][3] = $masterParams;	
				$masterTablesData["lcs_transtornoesfinteres"][3]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoesfinteres"][3]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoesfinteres"][4] = $masterParams;	
				$masterTablesData["lcs_transtornoesfinteres"][4]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoesfinteres"][4]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoesfinteres"][5] = $masterParams;	
				$masterTablesData["lcs_transtornoesfinteres"][5]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoesfinteres"][5]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoesfinteres"][6] = $masterParams;	
				$masterTablesData["lcs_transtornoesfinteres"][6]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoesfinteres"][6]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoesfinteres"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_transtornoesfinteres()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idTranstornoEsfinteres,   TipoEsfinteres,   Ingresado,   _idEstudiante";
$proto3["m_strFrom"] = "FROM lcs_transtornoesfinteres";
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
	"m_strName" => "idTranstornoEsfinteres",
	"m_strTable" => "lcs_transtornoesfinteres",
	"m_srcTableName" => "lcs_transtornoesfinteres"
));

$proto8["m_sql"] = "idTranstornoEsfinteres";
$proto8["m_srcTableName"] = "lcs_transtornoesfinteres";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEsfinteres",
	"m_strTable" => "lcs_transtornoesfinteres",
	"m_srcTableName" => "lcs_transtornoesfinteres"
));

$proto10["m_sql"] = "TipoEsfinteres";
$proto10["m_srcTableName"] = "lcs_transtornoesfinteres";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_transtornoesfinteres",
	"m_srcTableName" => "lcs_transtornoesfinteres"
));

$proto12["m_sql"] = "Ingresado";
$proto12["m_srcTableName"] = "lcs_transtornoesfinteres";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_transtornoesfinteres",
	"m_srcTableName" => "lcs_transtornoesfinteres"
));

$proto14["m_sql"] = "_idEstudiante";
$proto14["m_srcTableName"] = "lcs_transtornoesfinteres";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "lcs_transtornoesfinteres";
$proto17["m_srcTableName"] = "lcs_transtornoesfinteres";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idTranstornoEsfinteres";
$proto17["m_columns"][] = "TipoEsfinteres";
$proto17["m_columns"][] = "Ingresado";
$proto17["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "lcs_transtornoesfinteres";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "lcs_transtornoesfinteres";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="lcs_transtornoesfinteres";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_transtornoesfinteres = createSqlQuery_lcs_transtornoesfinteres();


	
				
	
$tdatalcs_transtornoesfinteres[".sqlquery"] = $queryData_lcs_transtornoesfinteres;

$tableEvents["lcs_transtornoesfinteres"] = new eventsBase;
$tdatalcs_transtornoesfinteres[".hasEvents"] = false;

?>