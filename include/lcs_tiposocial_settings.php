<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_tiposocial = array();	
	$tdatalcs_tiposocial[".truncateText"] = true;
	$tdatalcs_tiposocial[".NumberOfChars"] = 80; 
	$tdatalcs_tiposocial[".ShortName"] = "lcs_tiposocial";
	$tdatalcs_tiposocial[".OwnerID"] = "";
	$tdatalcs_tiposocial[".OriginalTable"] = "lcs_tiposocial";

//	field labels
$fieldLabelslcs_tiposocial = array();
$fieldToolTipslcs_tiposocial = array();
$pageTitleslcs_tiposocial = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_tiposocial["Spanish"] = array();
	$fieldToolTipslcs_tiposocial["Spanish"] = array();
	$pageTitleslcs_tiposocial["Spanish"] = array();
	$fieldLabelslcs_tiposocial["Spanish"]["idTipoSocial"] = "No.";
	$fieldToolTipslcs_tiposocial["Spanish"]["idTipoSocial"] = "";
	$fieldLabelslcs_tiposocial["Spanish"]["TSocial"] = "Tipo Social";
	$fieldToolTipslcs_tiposocial["Spanish"]["TSocial"] = "";
	$fieldLabelslcs_tiposocial["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_tiposocial["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_tiposocial["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_tiposocial["Spanish"]["_idEstudiante"] = "";
	$pageTitleslcs_tiposocial["Spanish"]["add"] = "Tipo Social, Añadir nuevo registro";
	if (count($fieldToolTipslcs_tiposocial["Spanish"]))
		$tdatalcs_tiposocial[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_tiposocial[""] = array();
	$fieldToolTipslcs_tiposocial[""] = array();
	$pageTitleslcs_tiposocial[""] = array();
	$fieldLabelslcs_tiposocial[""]["idTipoSocial"] = "Id Tipo Social";
	$fieldToolTipslcs_tiposocial[""]["idTipoSocial"] = "";
	$fieldLabelslcs_tiposocial[""]["TSocial"] = "TSocial";
	$fieldToolTipslcs_tiposocial[""]["TSocial"] = "";
	$fieldLabelslcs_tiposocial[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_tiposocial[""]["Ingresado"] = "";
	$fieldLabelslcs_tiposocial[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_tiposocial[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_tiposocial[""]))
		$tdatalcs_tiposocial[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_tiposocial[".NCSearch"] = true;



$tdatalcs_tiposocial[".shortTableName"] = "lcs_tiposocial";
$tdatalcs_tiposocial[".nSecOptions"] = 0;
$tdatalcs_tiposocial[".recsPerRowList"] = 1;
$tdatalcs_tiposocial[".mainTableOwnerID"] = "";
$tdatalcs_tiposocial[".moveNext"] = 1;
$tdatalcs_tiposocial[".nType"] = 0;

$tdatalcs_tiposocial[".strOriginalTableName"] = "lcs_tiposocial";




$tdatalcs_tiposocial[".showAddInPopup"] = true;

$tdatalcs_tiposocial[".showEditInPopup"] = true;

$tdatalcs_tiposocial[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_tiposocial[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_tiposocial[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_tiposocial[".listAjax"] = true;
else 
	$tdatalcs_tiposocial[".listAjax"] = false;

	$tdatalcs_tiposocial[".audit"] = true;

	$tdatalcs_tiposocial[".locking"] = false;

$tdatalcs_tiposocial[".edit"] = true;

$tdatalcs_tiposocial[".list"] = true;

$tdatalcs_tiposocial[".view"] = true;

$tdatalcs_tiposocial[".import"] = true;

$tdatalcs_tiposocial[".exportTo"] = true;

$tdatalcs_tiposocial[".printFriendly"] = true;

$tdatalcs_tiposocial[".delete"] = true;

$tdatalcs_tiposocial[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_tiposocial[".searchSaving"] = false;
//

$tdatalcs_tiposocial[".showSearchPanel"] = true;
		$tdatalcs_tiposocial[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_tiposocial[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_tiposocial[".isUseAjaxSuggest"] = true;

$tdatalcs_tiposocial[".rowHighlite"] = true;



$tdatalcs_tiposocial[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_tiposocial[".isUseTimeForSearch"] = false;





$tdatalcs_tiposocial[".allSearchFields"] = array();
$tdatalcs_tiposocial[".filterFields"] = array();
$tdatalcs_tiposocial[".requiredSearchFields"] = array();

$tdatalcs_tiposocial[".allSearchFields"][] = "idTipoSocial";
	$tdatalcs_tiposocial[".allSearchFields"][] = "TSocial";
	$tdatalcs_tiposocial[".allSearchFields"][] = "Ingresado";
	$tdatalcs_tiposocial[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_tiposocial[".googleLikeFields"] = array();
$tdatalcs_tiposocial[".googleLikeFields"][] = "idTipoSocial";
$tdatalcs_tiposocial[".googleLikeFields"][] = "TSocial";
$tdatalcs_tiposocial[".googleLikeFields"][] = "Ingresado";
$tdatalcs_tiposocial[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_tiposocial[".advSearchFields"] = array();
$tdatalcs_tiposocial[".advSearchFields"][] = "idTipoSocial";
$tdatalcs_tiposocial[".advSearchFields"][] = "TSocial";
$tdatalcs_tiposocial[".advSearchFields"][] = "Ingresado";
$tdatalcs_tiposocial[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_tiposocial[".tableType"] = "list";

$tdatalcs_tiposocial[".printerPageOrientation"] = 0;
$tdatalcs_tiposocial[".nPrinterPageScale"] = 100;

$tdatalcs_tiposocial[".nPrinterSplitRecords"] = 40;

$tdatalcs_tiposocial[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_tiposocial[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_tiposocial[".isViewPagePDF"] = true;
$tdatalcs_tiposocial[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_tiposocial[".isPrinterPagePDF"] = true;
$tdatalcs_tiposocial[".nPrinterPagePDFScale"] = 100;


$tdatalcs_tiposocial[".pageSize"] = 20;

$tdatalcs_tiposocial[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_tiposocial[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_tiposocial[".orderindexes"] = array();

$tdatalcs_tiposocial[".sqlHead"] = "SELECT idTipoSocial,   TSocial,   Ingresado,   _idEstudiante";
$tdatalcs_tiposocial[".sqlFrom"] = "FROM lcs_tiposocial";
$tdatalcs_tiposocial[".sqlWhereExpr"] = "";
$tdatalcs_tiposocial[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_tiposocial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_tiposocial[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_tiposocial = array();
$tableKeyslcs_tiposocial[] = "idTipoSocial";
$tdatalcs_tiposocial[".Keys"] = $tableKeyslcs_tiposocial;

$tdatalcs_tiposocial[".listFields"] = array();
$tdatalcs_tiposocial[".listFields"][] = "idTipoSocial";
$tdatalcs_tiposocial[".listFields"][] = "TSocial";
$tdatalcs_tiposocial[".listFields"][] = "Ingresado";
$tdatalcs_tiposocial[".listFields"][] = "_idEstudiante";

$tdatalcs_tiposocial[".hideMobileList"] = array();


$tdatalcs_tiposocial[".viewFields"] = array();
$tdatalcs_tiposocial[".viewFields"][] = "idTipoSocial";
$tdatalcs_tiposocial[".viewFields"][] = "TSocial";
$tdatalcs_tiposocial[".viewFields"][] = "Ingresado";
$tdatalcs_tiposocial[".viewFields"][] = "_idEstudiante";

$tdatalcs_tiposocial[".addFields"] = array();
$tdatalcs_tiposocial[".addFields"][] = "_idEstudiante";
$tdatalcs_tiposocial[".addFields"][] = "TSocial";

$tdatalcs_tiposocial[".inlineAddFields"] = array();

$tdatalcs_tiposocial[".editFields"] = array();
$tdatalcs_tiposocial[".editFields"][] = "TSocial";
$tdatalcs_tiposocial[".editFields"][] = "_idEstudiante";

$tdatalcs_tiposocial[".inlineEditFields"] = array();

$tdatalcs_tiposocial[".exportFields"] = array();
$tdatalcs_tiposocial[".exportFields"][] = "idTipoSocial";
$tdatalcs_tiposocial[".exportFields"][] = "TSocial";
$tdatalcs_tiposocial[".exportFields"][] = "Ingresado";
$tdatalcs_tiposocial[".exportFields"][] = "_idEstudiante";

$tdatalcs_tiposocial[".importFields"] = array();
$tdatalcs_tiposocial[".importFields"][] = "TSocial";
$tdatalcs_tiposocial[".importFields"][] = "_idEstudiante";

$tdatalcs_tiposocial[".printFields"] = array();
$tdatalcs_tiposocial[".printFields"][] = "idTipoSocial";
$tdatalcs_tiposocial[".printFields"][] = "TSocial";
$tdatalcs_tiposocial[".printFields"][] = "Ingresado";
$tdatalcs_tiposocial[".printFields"][] = "_idEstudiante";

//	idTipoSocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTipoSocial";
	$fdata["GoodName"] = "idTipoSocial";
	$fdata["ownerTable"] = "lcs_tiposocial";
	$fdata["Label"] = GetFieldLabel("lcs_tiposocial","idTipoSocial"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idTipoSocial"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idTipoSocial";
	
		
		
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

	

	
	$tdatalcs_tiposocial["idTipoSocial"] = $fdata;
//	TSocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TSocial";
	$fdata["GoodName"] = "TSocial";
	$fdata["ownerTable"] = "lcs_tiposocial";
	$fdata["Label"] = GetFieldLabel("lcs_tiposocial","TSocial"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TSocial"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TSocial";
	
		
		
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

	

	
	$tdatalcs_tiposocial["TSocial"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_tiposocial";
	$fdata["Label"] = GetFieldLabel("lcs_tiposocial","Ingresado"); 
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

	

	
	$tdatalcs_tiposocial["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_tiposocial";
	$fdata["Label"] = GetFieldLabel("lcs_tiposocial","_idEstudiante"); 
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

	

	
	$tdatalcs_tiposocial["_idEstudiante"] = $fdata;

	
$tables_data["lcs_tiposocial"]=&$tdatalcs_tiposocial;
$field_labels["lcs_tiposocial"] = &$fieldLabelslcs_tiposocial;
$fieldToolTips["lcs_tiposocial"] = &$fieldToolTipslcs_tiposocial;
$page_titles["lcs_tiposocial"] = &$pageTitleslcs_tiposocial;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_tiposocial"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_tiposocial"] = array();


	
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
	$masterTablesData["lcs_tiposocial"][0] = $masterParams;	
				$masterTablesData["lcs_tiposocial"][0]["masterKeys"] = array();
	$masterTablesData["lcs_tiposocial"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_tiposocial"][0]["detailKeys"] = array();
	$masterTablesData["lcs_tiposocial"][0]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_tiposocial"][1] = $masterParams;	
				$masterTablesData["lcs_tiposocial"][1]["masterKeys"] = array();
	$masterTablesData["lcs_tiposocial"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_tiposocial"][1]["detailKeys"] = array();
	$masterTablesData["lcs_tiposocial"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_tiposocial"][2] = $masterParams;	
				$masterTablesData["lcs_tiposocial"][2]["masterKeys"] = array();
	$masterTablesData["lcs_tiposocial"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_tiposocial"][2]["detailKeys"] = array();
	$masterTablesData["lcs_tiposocial"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_tiposocial"][3] = $masterParams;	
				$masterTablesData["lcs_tiposocial"][3]["masterKeys"] = array();
	$masterTablesData["lcs_tiposocial"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_tiposocial"][3]["detailKeys"] = array();
	$masterTablesData["lcs_tiposocial"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_tiposocial"][4] = $masterParams;	
				$masterTablesData["lcs_tiposocial"][4]["masterKeys"] = array();
	$masterTablesData["lcs_tiposocial"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_tiposocial"][4]["detailKeys"] = array();
	$masterTablesData["lcs_tiposocial"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_tiposocial"][5] = $masterParams;	
				$masterTablesData["lcs_tiposocial"][5]["masterKeys"] = array();
	$masterTablesData["lcs_tiposocial"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_tiposocial"][5]["detailKeys"] = array();
	$masterTablesData["lcs_tiposocial"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_tiposocial"][6] = $masterParams;	
				$masterTablesData["lcs_tiposocial"][6]["masterKeys"] = array();
	$masterTablesData["lcs_tiposocial"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_tiposocial"][6]["detailKeys"] = array();
	$masterTablesData["lcs_tiposocial"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_tiposocial()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idTipoSocial,   TSocial,   Ingresado,   _idEstudiante";
$proto3["m_strFrom"] = "FROM lcs_tiposocial";
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
	"m_strName" => "idTipoSocial",
	"m_strTable" => "lcs_tiposocial",
	"m_srcTableName" => "lcs_tiposocial"
));

$proto8["m_sql"] = "idTipoSocial";
$proto8["m_srcTableName"] = "lcs_tiposocial";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TSocial",
	"m_strTable" => "lcs_tiposocial",
	"m_srcTableName" => "lcs_tiposocial"
));

$proto10["m_sql"] = "TSocial";
$proto10["m_srcTableName"] = "lcs_tiposocial";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_tiposocial",
	"m_srcTableName" => "lcs_tiposocial"
));

$proto12["m_sql"] = "Ingresado";
$proto12["m_srcTableName"] = "lcs_tiposocial";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_tiposocial",
	"m_srcTableName" => "lcs_tiposocial"
));

$proto14["m_sql"] = "_idEstudiante";
$proto14["m_srcTableName"] = "lcs_tiposocial";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "lcs_tiposocial";
$proto17["m_srcTableName"] = "lcs_tiposocial";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idTipoSocial";
$proto17["m_columns"][] = "TSocial";
$proto17["m_columns"][] = "Ingresado";
$proto17["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "lcs_tiposocial";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "lcs_tiposocial";
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
$proto3["m_srcTableName"]="lcs_tiposocial";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_tiposocial = createSqlQuery_lcs_tiposocial();


	
				
	
$tdatalcs_tiposocial[".sqlquery"] = $queryData_lcs_tiposocial;

$tableEvents["lcs_tiposocial"] = new eventsBase;
$tdatalcs_tiposocial[".hasEvents"] = false;

?>