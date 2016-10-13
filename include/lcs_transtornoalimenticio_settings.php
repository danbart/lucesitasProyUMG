<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_transtornoalimenticio = array();	
	$tdatalcs_transtornoalimenticio[".truncateText"] = true;
	$tdatalcs_transtornoalimenticio[".NumberOfChars"] = 80; 
	$tdatalcs_transtornoalimenticio[".ShortName"] = "lcs_transtornoalimenticio";
	$tdatalcs_transtornoalimenticio[".OwnerID"] = "";
	$tdatalcs_transtornoalimenticio[".OriginalTable"] = "lcs_transtornoalimenticio";

//	field labels
$fieldLabelslcs_transtornoalimenticio = array();
$fieldToolTipslcs_transtornoalimenticio = array();
$pageTitleslcs_transtornoalimenticio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_transtornoalimenticio["Spanish"] = array();
	$fieldToolTipslcs_transtornoalimenticio["Spanish"] = array();
	$pageTitleslcs_transtornoalimenticio["Spanish"] = array();
	$fieldLabelslcs_transtornoalimenticio["Spanish"]["idTranstornoAlimenticio"] = "No.";
	$fieldToolTipslcs_transtornoalimenticio["Spanish"]["idTranstornoAlimenticio"] = "";
	$fieldLabelslcs_transtornoalimenticio["Spanish"]["TipoTAlimenticio"] = "Trastorno Alimenticio";
	$fieldToolTipslcs_transtornoalimenticio["Spanish"]["TipoTAlimenticio"] = "";
	$fieldLabelslcs_transtornoalimenticio["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_transtornoalimenticio["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_transtornoalimenticio["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_transtornoalimenticio["Spanish"]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_transtornoalimenticio["Spanish"]))
		$tdatalcs_transtornoalimenticio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_transtornoalimenticio[""] = array();
	$fieldToolTipslcs_transtornoalimenticio[""] = array();
	$pageTitleslcs_transtornoalimenticio[""] = array();
	$fieldLabelslcs_transtornoalimenticio[""]["idTranstornoAlimenticio"] = "Id Transtorno Alimenticio";
	$fieldToolTipslcs_transtornoalimenticio[""]["idTranstornoAlimenticio"] = "";
	$fieldLabelslcs_transtornoalimenticio[""]["TipoTAlimenticio"] = "Tipo TAlimenticio";
	$fieldToolTipslcs_transtornoalimenticio[""]["TipoTAlimenticio"] = "";
	$fieldLabelslcs_transtornoalimenticio[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_transtornoalimenticio[""]["Ingresado"] = "";
	$fieldLabelslcs_transtornoalimenticio[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_transtornoalimenticio[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_transtornoalimenticio[""]))
		$tdatalcs_transtornoalimenticio[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_transtornoalimenticio[".NCSearch"] = true;



$tdatalcs_transtornoalimenticio[".shortTableName"] = "lcs_transtornoalimenticio";
$tdatalcs_transtornoalimenticio[".nSecOptions"] = 0;
$tdatalcs_transtornoalimenticio[".recsPerRowList"] = 1;
$tdatalcs_transtornoalimenticio[".mainTableOwnerID"] = "";
$tdatalcs_transtornoalimenticio[".moveNext"] = 1;
$tdatalcs_transtornoalimenticio[".nType"] = 0;

$tdatalcs_transtornoalimenticio[".strOriginalTableName"] = "lcs_transtornoalimenticio";




$tdatalcs_transtornoalimenticio[".showAddInPopup"] = true;

$tdatalcs_transtornoalimenticio[".showEditInPopup"] = true;

$tdatalcs_transtornoalimenticio[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_transtornoalimenticio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_transtornoalimenticio[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_transtornoalimenticio[".listAjax"] = true;
else 
	$tdatalcs_transtornoalimenticio[".listAjax"] = false;

	$tdatalcs_transtornoalimenticio[".audit"] = false;

	$tdatalcs_transtornoalimenticio[".locking"] = false;

$tdatalcs_transtornoalimenticio[".edit"] = true;

$tdatalcs_transtornoalimenticio[".list"] = true;

$tdatalcs_transtornoalimenticio[".view"] = true;

$tdatalcs_transtornoalimenticio[".import"] = true;

$tdatalcs_transtornoalimenticio[".exportTo"] = true;

$tdatalcs_transtornoalimenticio[".printFriendly"] = true;

$tdatalcs_transtornoalimenticio[".delete"] = true;

$tdatalcs_transtornoalimenticio[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_transtornoalimenticio[".searchSaving"] = false;
//

$tdatalcs_transtornoalimenticio[".showSearchPanel"] = true;
		$tdatalcs_transtornoalimenticio[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_transtornoalimenticio[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_transtornoalimenticio[".isUseAjaxSuggest"] = true;

$tdatalcs_transtornoalimenticio[".rowHighlite"] = true;



$tdatalcs_transtornoalimenticio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_transtornoalimenticio[".isUseTimeForSearch"] = false;





$tdatalcs_transtornoalimenticio[".allSearchFields"] = array();
$tdatalcs_transtornoalimenticio[".filterFields"] = array();
$tdatalcs_transtornoalimenticio[".requiredSearchFields"] = array();

$tdatalcs_transtornoalimenticio[".allSearchFields"][] = "idTranstornoAlimenticio";
	$tdatalcs_transtornoalimenticio[".allSearchFields"][] = "TipoTAlimenticio";
	$tdatalcs_transtornoalimenticio[".allSearchFields"][] = "Ingresado";
	$tdatalcs_transtornoalimenticio[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_transtornoalimenticio[".googleLikeFields"] = array();
$tdatalcs_transtornoalimenticio[".googleLikeFields"][] = "idTranstornoAlimenticio";
$tdatalcs_transtornoalimenticio[".googleLikeFields"][] = "TipoTAlimenticio";
$tdatalcs_transtornoalimenticio[".googleLikeFields"][] = "Ingresado";
$tdatalcs_transtornoalimenticio[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_transtornoalimenticio[".advSearchFields"] = array();
$tdatalcs_transtornoalimenticio[".advSearchFields"][] = "idTranstornoAlimenticio";
$tdatalcs_transtornoalimenticio[".advSearchFields"][] = "TipoTAlimenticio";
$tdatalcs_transtornoalimenticio[".advSearchFields"][] = "Ingresado";
$tdatalcs_transtornoalimenticio[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_transtornoalimenticio[".tableType"] = "list";

$tdatalcs_transtornoalimenticio[".printerPageOrientation"] = 0;
$tdatalcs_transtornoalimenticio[".nPrinterPageScale"] = 100;

$tdatalcs_transtornoalimenticio[".nPrinterSplitRecords"] = 40;

$tdatalcs_transtornoalimenticio[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_transtornoalimenticio[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_transtornoalimenticio[".isViewPagePDF"] = true;
$tdatalcs_transtornoalimenticio[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_transtornoalimenticio[".isPrinterPagePDF"] = true;
$tdatalcs_transtornoalimenticio[".nPrinterPagePDFScale"] = 100;


$tdatalcs_transtornoalimenticio[".pageSize"] = 20;

$tdatalcs_transtornoalimenticio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_transtornoalimenticio[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_transtornoalimenticio[".orderindexes"] = array();

$tdatalcs_transtornoalimenticio[".sqlHead"] = "SELECT idTranstornoAlimenticio,   TipoTAlimenticio,   Ingresado,   `_idEstudiante`";
$tdatalcs_transtornoalimenticio[".sqlFrom"] = "FROM lcs_transtornoalimenticio";
$tdatalcs_transtornoalimenticio[".sqlWhereExpr"] = "";
$tdatalcs_transtornoalimenticio[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_transtornoalimenticio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_transtornoalimenticio[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_transtornoalimenticio = array();
$tableKeyslcs_transtornoalimenticio[] = "idTranstornoAlimenticio";
$tdatalcs_transtornoalimenticio[".Keys"] = $tableKeyslcs_transtornoalimenticio;

$tdatalcs_transtornoalimenticio[".listFields"] = array();
$tdatalcs_transtornoalimenticio[".listFields"][] = "idTranstornoAlimenticio";
$tdatalcs_transtornoalimenticio[".listFields"][] = "TipoTAlimenticio";
$tdatalcs_transtornoalimenticio[".listFields"][] = "Ingresado";
$tdatalcs_transtornoalimenticio[".listFields"][] = "_idEstudiante";

$tdatalcs_transtornoalimenticio[".hideMobileList"] = array();


$tdatalcs_transtornoalimenticio[".viewFields"] = array();
$tdatalcs_transtornoalimenticio[".viewFields"][] = "idTranstornoAlimenticio";
$tdatalcs_transtornoalimenticio[".viewFields"][] = "TipoTAlimenticio";
$tdatalcs_transtornoalimenticio[".viewFields"][] = "Ingresado";
$tdatalcs_transtornoalimenticio[".viewFields"][] = "_idEstudiante";

$tdatalcs_transtornoalimenticio[".addFields"] = array();
$tdatalcs_transtornoalimenticio[".addFields"][] = "TipoTAlimenticio";
$tdatalcs_transtornoalimenticio[".addFields"][] = "_idEstudiante";

$tdatalcs_transtornoalimenticio[".inlineAddFields"] = array();

$tdatalcs_transtornoalimenticio[".editFields"] = array();
$tdatalcs_transtornoalimenticio[".editFields"][] = "TipoTAlimenticio";
$tdatalcs_transtornoalimenticio[".editFields"][] = "_idEstudiante";

$tdatalcs_transtornoalimenticio[".inlineEditFields"] = array();

$tdatalcs_transtornoalimenticio[".exportFields"] = array();
$tdatalcs_transtornoalimenticio[".exportFields"][] = "idTranstornoAlimenticio";
$tdatalcs_transtornoalimenticio[".exportFields"][] = "TipoTAlimenticio";
$tdatalcs_transtornoalimenticio[".exportFields"][] = "Ingresado";
$tdatalcs_transtornoalimenticio[".exportFields"][] = "_idEstudiante";

$tdatalcs_transtornoalimenticio[".importFields"] = array();
$tdatalcs_transtornoalimenticio[".importFields"][] = "TipoTAlimenticio";
$tdatalcs_transtornoalimenticio[".importFields"][] = "_idEstudiante";

$tdatalcs_transtornoalimenticio[".printFields"] = array();
$tdatalcs_transtornoalimenticio[".printFields"][] = "idTranstornoAlimenticio";
$tdatalcs_transtornoalimenticio[".printFields"][] = "TipoTAlimenticio";
$tdatalcs_transtornoalimenticio[".printFields"][] = "Ingresado";
$tdatalcs_transtornoalimenticio[".printFields"][] = "_idEstudiante";

//	idTranstornoAlimenticio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTranstornoAlimenticio";
	$fdata["GoodName"] = "idTranstornoAlimenticio";
	$fdata["ownerTable"] = "lcs_transtornoalimenticio";
	$fdata["Label"] = GetFieldLabel("lcs_transtornoalimenticio","idTranstornoAlimenticio"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idTranstornoAlimenticio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idTranstornoAlimenticio";
	
		
		
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

	

	
	$tdatalcs_transtornoalimenticio["idTranstornoAlimenticio"] = $fdata;
//	TipoTAlimenticio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoTAlimenticio";
	$fdata["GoodName"] = "TipoTAlimenticio";
	$fdata["ownerTable"] = "lcs_transtornoalimenticio";
	$fdata["Label"] = GetFieldLabel("lcs_transtornoalimenticio","TipoTAlimenticio"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoTAlimenticio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoTAlimenticio";
	
		
		
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

	

	
	$tdatalcs_transtornoalimenticio["TipoTAlimenticio"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_transtornoalimenticio";
	$fdata["Label"] = GetFieldLabel("lcs_transtornoalimenticio","Ingresado"); 
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

	

	
	$tdatalcs_transtornoalimenticio["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_transtornoalimenticio";
	$fdata["Label"] = GetFieldLabel("lcs_transtornoalimenticio","_idEstudiante"); 
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
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatalcs_transtornoalimenticio["_idEstudiante"] = $fdata;

	
$tables_data["lcs_transtornoalimenticio"]=&$tdatalcs_transtornoalimenticio;
$field_labels["lcs_transtornoalimenticio"] = &$fieldLabelslcs_transtornoalimenticio;
$fieldToolTips["lcs_transtornoalimenticio"] = &$fieldToolTipslcs_transtornoalimenticio;
$page_titles["lcs_transtornoalimenticio"] = &$pageTitleslcs_transtornoalimenticio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_transtornoalimenticio"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_transtornoalimenticio"] = array();


	
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
	$masterTablesData["lcs_transtornoalimenticio"][0] = $masterParams;	
				$masterTablesData["lcs_transtornoalimenticio"][0]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoalimenticio"][0]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][0]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoalimenticio"][1] = $masterParams;	
				$masterTablesData["lcs_transtornoalimenticio"][1]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoalimenticio"][1]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoalimenticio"][2] = $masterParams;	
				$masterTablesData["lcs_transtornoalimenticio"][2]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoalimenticio"][2]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoalimenticio"][3] = $masterParams;	
				$masterTablesData["lcs_transtornoalimenticio"][3]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoalimenticio"][3]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoalimenticio"][4] = $masterParams;	
				$masterTablesData["lcs_transtornoalimenticio"][4]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoalimenticio"][4]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoalimenticio"][5] = $masterParams;	
				$masterTablesData["lcs_transtornoalimenticio"][5]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoalimenticio"][5]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_transtornoalimenticio"][6] = $masterParams;	
				$masterTablesData["lcs_transtornoalimenticio"][6]["masterKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_transtornoalimenticio"][6]["detailKeys"] = array();
	$masterTablesData["lcs_transtornoalimenticio"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_transtornoalimenticio()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idTranstornoAlimenticio,   TipoTAlimenticio,   Ingresado,   `_idEstudiante`";
$proto3["m_strFrom"] = "FROM lcs_transtornoalimenticio";
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
	"m_strName" => "idTranstornoAlimenticio",
	"m_strTable" => "lcs_transtornoalimenticio",
	"m_srcTableName" => "lcs_transtornoalimenticio"
));

$proto8["m_sql"] = "idTranstornoAlimenticio";
$proto8["m_srcTableName"] = "lcs_transtornoalimenticio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoTAlimenticio",
	"m_strTable" => "lcs_transtornoalimenticio",
	"m_srcTableName" => "lcs_transtornoalimenticio"
));

$proto10["m_sql"] = "TipoTAlimenticio";
$proto10["m_srcTableName"] = "lcs_transtornoalimenticio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_transtornoalimenticio",
	"m_srcTableName" => "lcs_transtornoalimenticio"
));

$proto12["m_sql"] = "Ingresado";
$proto12["m_srcTableName"] = "lcs_transtornoalimenticio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_transtornoalimenticio",
	"m_srcTableName" => "lcs_transtornoalimenticio"
));

$proto14["m_sql"] = "`_idEstudiante`";
$proto14["m_srcTableName"] = "lcs_transtornoalimenticio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "lcs_transtornoalimenticio";
$proto17["m_srcTableName"] = "lcs_transtornoalimenticio";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idTranstornoAlimenticio";
$proto17["m_columns"][] = "TipoTAlimenticio";
$proto17["m_columns"][] = "Ingresado";
$proto17["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "lcs_transtornoalimenticio";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "lcs_transtornoalimenticio";
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
$proto3["m_srcTableName"]="lcs_transtornoalimenticio";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_transtornoalimenticio = createSqlQuery_lcs_transtornoalimenticio();


	
				
	
$tdatalcs_transtornoalimenticio[".sqlquery"] = $queryData_lcs_transtornoalimenticio;

$tableEvents["lcs_transtornoalimenticio"] = new eventsBase;
$tdatalcs_transtornoalimenticio[".hasEvents"] = false;

?>