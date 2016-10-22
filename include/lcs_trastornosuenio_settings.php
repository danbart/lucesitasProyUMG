<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_trastornosuenio = array();	
	$tdatalcs_trastornosuenio[".truncateText"] = true;
	$tdatalcs_trastornosuenio[".NumberOfChars"] = 80; 
	$tdatalcs_trastornosuenio[".ShortName"] = "lcs_trastornosuenio";
	$tdatalcs_trastornosuenio[".OwnerID"] = "";
	$tdatalcs_trastornosuenio[".OriginalTable"] = "lcs_trastornosuenio";

//	field labels
$fieldLabelslcs_trastornosuenio = array();
$fieldToolTipslcs_trastornosuenio = array();
$pageTitleslcs_trastornosuenio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_trastornosuenio["Spanish"] = array();
	$fieldToolTipslcs_trastornosuenio["Spanish"] = array();
	$pageTitleslcs_trastornosuenio["Spanish"] = array();
	$fieldLabelslcs_trastornosuenio["Spanish"]["idTrastornoSuenio"] = "No.";
	$fieldToolTipslcs_trastornosuenio["Spanish"]["idTrastornoSuenio"] = "";
	$fieldLabelslcs_trastornosuenio["Spanish"]["TipoTSue_o"] = "Tipo";
	$fieldToolTipslcs_trastornosuenio["Spanish"]["TipoTSueño"] = "";
	$fieldLabelslcs_trastornosuenio["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_trastornosuenio["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_trastornosuenio["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_trastornosuenio["Spanish"]["_idEstudiante"] = "";
	$pageTitleslcs_trastornosuenio["Spanish"]["add"] = "Trastorno Sueño, Añadir nuevo registro";
	if (count($fieldToolTipslcs_trastornosuenio["Spanish"]))
		$tdatalcs_trastornosuenio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_trastornosuenio[""] = array();
	$fieldToolTipslcs_trastornosuenio[""] = array();
	$pageTitleslcs_trastornosuenio[""] = array();
	$fieldLabelslcs_trastornosuenio[""]["idTrastornoSuenio"] = "Id Trastorno Suenio";
	$fieldToolTipslcs_trastornosuenio[""]["idTrastornoSuenio"] = "";
	$fieldLabelslcs_trastornosuenio[""]["TipoTSue_o"] = "Tipo TSueño";
	$fieldToolTipslcs_trastornosuenio[""]["TipoTSueño"] = "";
	$fieldLabelslcs_trastornosuenio[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_trastornosuenio[""]["Ingresado"] = "";
	$fieldLabelslcs_trastornosuenio[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_trastornosuenio[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_trastornosuenio[""]))
		$tdatalcs_trastornosuenio[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_trastornosuenio[".NCSearch"] = true;



$tdatalcs_trastornosuenio[".shortTableName"] = "lcs_trastornosuenio";
$tdatalcs_trastornosuenio[".nSecOptions"] = 0;
$tdatalcs_trastornosuenio[".recsPerRowList"] = 1;
$tdatalcs_trastornosuenio[".mainTableOwnerID"] = "";
$tdatalcs_trastornosuenio[".moveNext"] = 1;
$tdatalcs_trastornosuenio[".nType"] = 0;

$tdatalcs_trastornosuenio[".strOriginalTableName"] = "lcs_trastornosuenio";




$tdatalcs_trastornosuenio[".showAddInPopup"] = true;

$tdatalcs_trastornosuenio[".showEditInPopup"] = true;

$tdatalcs_trastornosuenio[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_trastornosuenio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_trastornosuenio[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_trastornosuenio[".listAjax"] = true;
else 
	$tdatalcs_trastornosuenio[".listAjax"] = false;

	$tdatalcs_trastornosuenio[".audit"] = true;

	$tdatalcs_trastornosuenio[".locking"] = false;

$tdatalcs_trastornosuenio[".edit"] = true;

$tdatalcs_trastornosuenio[".list"] = true;

$tdatalcs_trastornosuenio[".view"] = true;

$tdatalcs_trastornosuenio[".import"] = true;

$tdatalcs_trastornosuenio[".exportTo"] = true;

$tdatalcs_trastornosuenio[".printFriendly"] = true;

$tdatalcs_trastornosuenio[".delete"] = true;

$tdatalcs_trastornosuenio[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_trastornosuenio[".searchSaving"] = false;
//

$tdatalcs_trastornosuenio[".showSearchPanel"] = true;
		$tdatalcs_trastornosuenio[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_trastornosuenio[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_trastornosuenio[".isUseAjaxSuggest"] = true;

$tdatalcs_trastornosuenio[".rowHighlite"] = true;



$tdatalcs_trastornosuenio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_trastornosuenio[".isUseTimeForSearch"] = false;





$tdatalcs_trastornosuenio[".allSearchFields"] = array();
$tdatalcs_trastornosuenio[".filterFields"] = array();
$tdatalcs_trastornosuenio[".requiredSearchFields"] = array();

$tdatalcs_trastornosuenio[".allSearchFields"][] = "idTrastornoSuenio";
	$tdatalcs_trastornosuenio[".allSearchFields"][] = "TipoTSueño";
	$tdatalcs_trastornosuenio[".allSearchFields"][] = "Ingresado";
	$tdatalcs_trastornosuenio[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_trastornosuenio[".googleLikeFields"] = array();
$tdatalcs_trastornosuenio[".googleLikeFields"][] = "idTrastornoSuenio";
$tdatalcs_trastornosuenio[".googleLikeFields"][] = "TipoTSueño";
$tdatalcs_trastornosuenio[".googleLikeFields"][] = "Ingresado";
$tdatalcs_trastornosuenio[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_trastornosuenio[".advSearchFields"] = array();
$tdatalcs_trastornosuenio[".advSearchFields"][] = "idTrastornoSuenio";
$tdatalcs_trastornosuenio[".advSearchFields"][] = "TipoTSueño";
$tdatalcs_trastornosuenio[".advSearchFields"][] = "Ingresado";
$tdatalcs_trastornosuenio[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_trastornosuenio[".tableType"] = "list";

$tdatalcs_trastornosuenio[".printerPageOrientation"] = 0;
$tdatalcs_trastornosuenio[".nPrinterPageScale"] = 100;

$tdatalcs_trastornosuenio[".nPrinterSplitRecords"] = 40;

$tdatalcs_trastornosuenio[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_trastornosuenio[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_trastornosuenio[".isViewPagePDF"] = true;
$tdatalcs_trastornosuenio[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_trastornosuenio[".isPrinterPagePDF"] = true;
$tdatalcs_trastornosuenio[".nPrinterPagePDFScale"] = 100;


$tdatalcs_trastornosuenio[".pageSize"] = 20;

$tdatalcs_trastornosuenio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_trastornosuenio[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_trastornosuenio[".orderindexes"] = array();

$tdatalcs_trastornosuenio[".sqlHead"] = "SELECT idTrastornoSuenio,   TipoTSueño,   Ingresado,   _idEstudiante";
$tdatalcs_trastornosuenio[".sqlFrom"] = "FROM lcs_trastornosuenio";
$tdatalcs_trastornosuenio[".sqlWhereExpr"] = "";
$tdatalcs_trastornosuenio[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_trastornosuenio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_trastornosuenio[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_trastornosuenio = array();
$tableKeyslcs_trastornosuenio[] = "idTrastornoSuenio";
$tdatalcs_trastornosuenio[".Keys"] = $tableKeyslcs_trastornosuenio;

$tdatalcs_trastornosuenio[".listFields"] = array();
$tdatalcs_trastornosuenio[".listFields"][] = "idTrastornoSuenio";
$tdatalcs_trastornosuenio[".listFields"][] = "TipoTSueño";
$tdatalcs_trastornosuenio[".listFields"][] = "Ingresado";
$tdatalcs_trastornosuenio[".listFields"][] = "_idEstudiante";

$tdatalcs_trastornosuenio[".hideMobileList"] = array();


$tdatalcs_trastornosuenio[".viewFields"] = array();
$tdatalcs_trastornosuenio[".viewFields"][] = "idTrastornoSuenio";
$tdatalcs_trastornosuenio[".viewFields"][] = "TipoTSueño";
$tdatalcs_trastornosuenio[".viewFields"][] = "Ingresado";
$tdatalcs_trastornosuenio[".viewFields"][] = "_idEstudiante";

$tdatalcs_trastornosuenio[".addFields"] = array();
$tdatalcs_trastornosuenio[".addFields"][] = "_idEstudiante";
$tdatalcs_trastornosuenio[".addFields"][] = "TipoTSueño";

$tdatalcs_trastornosuenio[".inlineAddFields"] = array();

$tdatalcs_trastornosuenio[".editFields"] = array();
$tdatalcs_trastornosuenio[".editFields"][] = "TipoTSueño";
$tdatalcs_trastornosuenio[".editFields"][] = "_idEstudiante";

$tdatalcs_trastornosuenio[".inlineEditFields"] = array();

$tdatalcs_trastornosuenio[".exportFields"] = array();
$tdatalcs_trastornosuenio[".exportFields"][] = "idTrastornoSuenio";
$tdatalcs_trastornosuenio[".exportFields"][] = "TipoTSueño";
$tdatalcs_trastornosuenio[".exportFields"][] = "Ingresado";
$tdatalcs_trastornosuenio[".exportFields"][] = "_idEstudiante";

$tdatalcs_trastornosuenio[".importFields"] = array();
$tdatalcs_trastornosuenio[".importFields"][] = "TipoTSueño";
$tdatalcs_trastornosuenio[".importFields"][] = "_idEstudiante";

$tdatalcs_trastornosuenio[".printFields"] = array();
$tdatalcs_trastornosuenio[".printFields"][] = "idTrastornoSuenio";
$tdatalcs_trastornosuenio[".printFields"][] = "TipoTSueño";
$tdatalcs_trastornosuenio[".printFields"][] = "Ingresado";
$tdatalcs_trastornosuenio[".printFields"][] = "_idEstudiante";

//	idTrastornoSuenio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTrastornoSuenio";
	$fdata["GoodName"] = "idTrastornoSuenio";
	$fdata["ownerTable"] = "lcs_trastornosuenio";
	$fdata["Label"] = GetFieldLabel("lcs_trastornosuenio","idTrastornoSuenio"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idTrastornoSuenio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idTrastornoSuenio";
	
		
		
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

	

	
	$tdatalcs_trastornosuenio["idTrastornoSuenio"] = $fdata;
//	TipoTSueño
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoTSueño";
	$fdata["GoodName"] = "TipoTSue_o";
	$fdata["ownerTable"] = "lcs_trastornosuenio";
	$fdata["Label"] = GetFieldLabel("lcs_trastornosuenio","TipoTSue_o"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoTSueño"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoTSueño";
	
		
		
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

	

	
	$tdatalcs_trastornosuenio["TipoTSueño"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_trastornosuenio";
	$fdata["Label"] = GetFieldLabel("lcs_trastornosuenio","Ingresado"); 
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

	

	
	$tdatalcs_trastornosuenio["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_trastornosuenio";
	$fdata["Label"] = GetFieldLabel("lcs_trastornosuenio","_idEstudiante"); 
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

	

	
	$tdatalcs_trastornosuenio["_idEstudiante"] = $fdata;

	
$tables_data["lcs_trastornosuenio"]=&$tdatalcs_trastornosuenio;
$field_labels["lcs_trastornosuenio"] = &$fieldLabelslcs_trastornosuenio;
$fieldToolTips["lcs_trastornosuenio"] = &$fieldToolTipslcs_trastornosuenio;
$page_titles["lcs_trastornosuenio"] = &$pageTitleslcs_trastornosuenio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_trastornosuenio"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_trastornosuenio"] = array();


	
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
	$masterTablesData["lcs_trastornosuenio"][0] = $masterParams;	
				$masterTablesData["lcs_trastornosuenio"][0]["masterKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_trastornosuenio"][0]["detailKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][0]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_trastornosuenio"][1] = $masterParams;	
				$masterTablesData["lcs_trastornosuenio"][1]["masterKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_trastornosuenio"][1]["detailKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_trastornosuenio"][2] = $masterParams;	
				$masterTablesData["lcs_trastornosuenio"][2]["masterKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_trastornosuenio"][2]["detailKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_trastornosuenio"][3] = $masterParams;	
				$masterTablesData["lcs_trastornosuenio"][3]["masterKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_trastornosuenio"][3]["detailKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_trastornosuenio"][4] = $masterParams;	
				$masterTablesData["lcs_trastornosuenio"][4]["masterKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_trastornosuenio"][4]["detailKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_trastornosuenio"][5] = $masterParams;	
				$masterTablesData["lcs_trastornosuenio"][5]["masterKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_trastornosuenio"][5]["detailKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_trastornosuenio"][6] = $masterParams;	
				$masterTablesData["lcs_trastornosuenio"][6]["masterKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_trastornosuenio"][6]["detailKeys"] = array();
	$masterTablesData["lcs_trastornosuenio"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_trastornosuenio()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idTrastornoSuenio,   TipoTSueño,   Ingresado,   _idEstudiante";
$proto3["m_strFrom"] = "FROM lcs_trastornosuenio";
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
	"m_strName" => "idTrastornoSuenio",
	"m_strTable" => "lcs_trastornosuenio",
	"m_srcTableName" => "lcs_trastornosuenio"
));

$proto8["m_sql"] = "idTrastornoSuenio";
$proto8["m_srcTableName"] = "lcs_trastornosuenio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoTSueño",
	"m_strTable" => "lcs_trastornosuenio",
	"m_srcTableName" => "lcs_trastornosuenio"
));

$proto10["m_sql"] = "TipoTSueño";
$proto10["m_srcTableName"] = "lcs_trastornosuenio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_trastornosuenio",
	"m_srcTableName" => "lcs_trastornosuenio"
));

$proto12["m_sql"] = "Ingresado";
$proto12["m_srcTableName"] = "lcs_trastornosuenio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_trastornosuenio",
	"m_srcTableName" => "lcs_trastornosuenio"
));

$proto14["m_sql"] = "_idEstudiante";
$proto14["m_srcTableName"] = "lcs_trastornosuenio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "lcs_trastornosuenio";
$proto17["m_srcTableName"] = "lcs_trastornosuenio";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idTrastornoSuenio";
$proto17["m_columns"][] = "TipoTSueño";
$proto17["m_columns"][] = "Ingresado";
$proto17["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "lcs_trastornosuenio";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "lcs_trastornosuenio";
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
$proto3["m_srcTableName"]="lcs_trastornosuenio";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_trastornosuenio = createSqlQuery_lcs_trastornosuenio();


	
				
	
$tdatalcs_trastornosuenio[".sqlquery"] = $queryData_lcs_trastornosuenio;

$tableEvents["lcs_trastornosuenio"] = new eventsBase;
$tdatalcs_trastornosuenio[".hasEvents"] = false;

?>