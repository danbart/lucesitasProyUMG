<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_enfermedades = array();	
	$tdatalcs_enfermedades[".truncateText"] = true;
	$tdatalcs_enfermedades[".NumberOfChars"] = 80; 
	$tdatalcs_enfermedades[".ShortName"] = "lcs_enfermedades";
	$tdatalcs_enfermedades[".OwnerID"] = "";
	$tdatalcs_enfermedades[".OriginalTable"] = "lcs_enfermedades";

//	field labels
$fieldLabelslcs_enfermedades = array();
$fieldToolTipslcs_enfermedades = array();
$pageTitleslcs_enfermedades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_enfermedades["Spanish"] = array();
	$fieldToolTipslcs_enfermedades["Spanish"] = array();
	$pageTitleslcs_enfermedades["Spanish"] = array();
	$fieldLabelslcs_enfermedades["Spanish"]["idEnfermedades"] = "No.";
	$fieldToolTipslcs_enfermedades["Spanish"]["idEnfermedades"] = "";
	$fieldLabelslcs_enfermedades["Spanish"]["TipoEnfermedad"] = "Tipo Enfermedad";
	$fieldToolTipslcs_enfermedades["Spanish"]["TipoEnfermedad"] = "";
	$fieldLabelslcs_enfermedades["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_enfermedades["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_enfermedades["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_enfermedades["Spanish"]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_enfermedades["Spanish"]))
		$tdatalcs_enfermedades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_enfermedades[""] = array();
	$fieldToolTipslcs_enfermedades[""] = array();
	$pageTitleslcs_enfermedades[""] = array();
	$fieldLabelslcs_enfermedades[""]["idEnfermedades"] = "Id Enfermedades";
	$fieldToolTipslcs_enfermedades[""]["idEnfermedades"] = "";
	$fieldLabelslcs_enfermedades[""]["TipoEnfermedad"] = "Tipo Enfermedad";
	$fieldToolTipslcs_enfermedades[""]["TipoEnfermedad"] = "";
	$fieldLabelslcs_enfermedades[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_enfermedades[""]["Ingresado"] = "";
	$fieldLabelslcs_enfermedades[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_enfermedades[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_enfermedades[""]))
		$tdatalcs_enfermedades[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_enfermedades[".NCSearch"] = true;



$tdatalcs_enfermedades[".shortTableName"] = "lcs_enfermedades";
$tdatalcs_enfermedades[".nSecOptions"] = 0;
$tdatalcs_enfermedades[".recsPerRowList"] = 1;
$tdatalcs_enfermedades[".mainTableOwnerID"] = "";
$tdatalcs_enfermedades[".moveNext"] = 1;
$tdatalcs_enfermedades[".nType"] = 0;

$tdatalcs_enfermedades[".strOriginalTableName"] = "lcs_enfermedades";




$tdatalcs_enfermedades[".showAddInPopup"] = true;

$tdatalcs_enfermedades[".showEditInPopup"] = true;

$tdatalcs_enfermedades[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_enfermedades[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_enfermedades[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_enfermedades[".listAjax"] = true;
else 
	$tdatalcs_enfermedades[".listAjax"] = false;

	$tdatalcs_enfermedades[".audit"] = false;

	$tdatalcs_enfermedades[".locking"] = false;

$tdatalcs_enfermedades[".edit"] = true;

$tdatalcs_enfermedades[".list"] = true;

$tdatalcs_enfermedades[".view"] = true;

$tdatalcs_enfermedades[".import"] = true;

$tdatalcs_enfermedades[".exportTo"] = true;

$tdatalcs_enfermedades[".printFriendly"] = true;

$tdatalcs_enfermedades[".delete"] = true;

$tdatalcs_enfermedades[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_enfermedades[".searchSaving"] = false;
//

$tdatalcs_enfermedades[".showSearchPanel"] = true;
		$tdatalcs_enfermedades[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_enfermedades[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_enfermedades[".isUseAjaxSuggest"] = true;

$tdatalcs_enfermedades[".rowHighlite"] = true;



$tdatalcs_enfermedades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_enfermedades[".isUseTimeForSearch"] = false;



$tdatalcs_enfermedades[".useDetailsPreview"] = true;


$tdatalcs_enfermedades[".allSearchFields"] = array();
$tdatalcs_enfermedades[".filterFields"] = array();
$tdatalcs_enfermedades[".requiredSearchFields"] = array();

$tdatalcs_enfermedades[".allSearchFields"][] = "idEnfermedades";
	$tdatalcs_enfermedades[".allSearchFields"][] = "TipoEnfermedad";
	$tdatalcs_enfermedades[".allSearchFields"][] = "Ingresado";
	$tdatalcs_enfermedades[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_enfermedades[".googleLikeFields"] = array();
$tdatalcs_enfermedades[".googleLikeFields"][] = "idEnfermedades";
$tdatalcs_enfermedades[".googleLikeFields"][] = "TipoEnfermedad";
$tdatalcs_enfermedades[".googleLikeFields"][] = "Ingresado";
$tdatalcs_enfermedades[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_enfermedades[".advSearchFields"] = array();
$tdatalcs_enfermedades[".advSearchFields"][] = "idEnfermedades";
$tdatalcs_enfermedades[".advSearchFields"][] = "TipoEnfermedad";
$tdatalcs_enfermedades[".advSearchFields"][] = "Ingresado";
$tdatalcs_enfermedades[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_enfermedades[".tableType"] = "list";

$tdatalcs_enfermedades[".printerPageOrientation"] = 0;
$tdatalcs_enfermedades[".nPrinterPageScale"] = 100;

$tdatalcs_enfermedades[".nPrinterSplitRecords"] = 40;

$tdatalcs_enfermedades[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_enfermedades[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_enfermedades[".isViewPagePDF"] = true;
$tdatalcs_enfermedades[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_enfermedades[".isPrinterPagePDF"] = true;
$tdatalcs_enfermedades[".nPrinterPagePDFScale"] = 100;


$tdatalcs_enfermedades[".pageSize"] = 20;

$tdatalcs_enfermedades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_enfermedades[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_enfermedades[".orderindexes"] = array();

$tdatalcs_enfermedades[".sqlHead"] = "SELECT idEnfermedades,   TipoEnfermedad,   Ingresado,   _idEstudiante";
$tdatalcs_enfermedades[".sqlFrom"] = "FROM lcs_enfermedades";
$tdatalcs_enfermedades[".sqlWhereExpr"] = "";
$tdatalcs_enfermedades[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_enfermedades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_enfermedades[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_enfermedades = array();
$tableKeyslcs_enfermedades[] = "idEnfermedades";
$tdatalcs_enfermedades[".Keys"] = $tableKeyslcs_enfermedades;

$tdatalcs_enfermedades[".listFields"] = array();
$tdatalcs_enfermedades[".listFields"][] = "idEnfermedades";
$tdatalcs_enfermedades[".listFields"][] = "TipoEnfermedad";
$tdatalcs_enfermedades[".listFields"][] = "Ingresado";
$tdatalcs_enfermedades[".listFields"][] = "_idEstudiante";

$tdatalcs_enfermedades[".hideMobileList"] = array();


$tdatalcs_enfermedades[".viewFields"] = array();
$tdatalcs_enfermedades[".viewFields"][] = "idEnfermedades";
$tdatalcs_enfermedades[".viewFields"][] = "TipoEnfermedad";
$tdatalcs_enfermedades[".viewFields"][] = "Ingresado";
$tdatalcs_enfermedades[".viewFields"][] = "_idEstudiante";

$tdatalcs_enfermedades[".addFields"] = array();
$tdatalcs_enfermedades[".addFields"][] = "TipoEnfermedad";
$tdatalcs_enfermedades[".addFields"][] = "_idEstudiante";

$tdatalcs_enfermedades[".inlineAddFields"] = array();

$tdatalcs_enfermedades[".editFields"] = array();
$tdatalcs_enfermedades[".editFields"][] = "TipoEnfermedad";
$tdatalcs_enfermedades[".editFields"][] = "_idEstudiante";

$tdatalcs_enfermedades[".inlineEditFields"] = array();

$tdatalcs_enfermedades[".exportFields"] = array();
$tdatalcs_enfermedades[".exportFields"][] = "idEnfermedades";
$tdatalcs_enfermedades[".exportFields"][] = "TipoEnfermedad";
$tdatalcs_enfermedades[".exportFields"][] = "Ingresado";
$tdatalcs_enfermedades[".exportFields"][] = "_idEstudiante";

$tdatalcs_enfermedades[".importFields"] = array();
$tdatalcs_enfermedades[".importFields"][] = "TipoEnfermedad";
$tdatalcs_enfermedades[".importFields"][] = "_idEstudiante";

$tdatalcs_enfermedades[".printFields"] = array();
$tdatalcs_enfermedades[".printFields"][] = "idEnfermedades";
$tdatalcs_enfermedades[".printFields"][] = "TipoEnfermedad";
$tdatalcs_enfermedades[".printFields"][] = "Ingresado";
$tdatalcs_enfermedades[".printFields"][] = "_idEstudiante";

//	idEnfermedades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idEnfermedades";
	$fdata["GoodName"] = "idEnfermedades";
	$fdata["ownerTable"] = "lcs_enfermedades";
	$fdata["Label"] = GetFieldLabel("lcs_enfermedades","idEnfermedades"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idEnfermedades"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEnfermedades";
	
		
		
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

	

	
	$tdatalcs_enfermedades["idEnfermedades"] = $fdata;
//	TipoEnfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoEnfermedad";
	$fdata["GoodName"] = "TipoEnfermedad";
	$fdata["ownerTable"] = "lcs_enfermedades";
	$fdata["Label"] = GetFieldLabel("lcs_enfermedades","TipoEnfermedad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoEnfermedad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoEnfermedad";
	
		
		
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

	

	
	$tdatalcs_enfermedades["TipoEnfermedad"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_enfermedades";
	$fdata["Label"] = GetFieldLabel("lcs_enfermedades","Ingresado"); 
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

	

	
	$tdatalcs_enfermedades["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_enfermedades";
	$fdata["Label"] = GetFieldLabel("lcs_enfermedades","_idEstudiante"); 
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

	

	
	$tdatalcs_enfermedades["_idEstudiante"] = $fdata;

	
$tables_data["lcs_enfermedades"]=&$tdatalcs_enfermedades;
$field_labels["lcs_enfermedades"] = &$fieldLabelslcs_enfermedades;
$fieldToolTips["lcs_enfermedades"] = &$fieldToolTipslcs_enfermedades;
$page_titles["lcs_enfermedades"] = &$pageTitleslcs_enfermedades;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_enfermedades"] = array();
//	lcs_medicamento
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_medicamento";
		$detailsParam["dOriginalTable"] = "lcs_medicamento";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_medicamento";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_enfermedades"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_enfermedades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_enfermedades"][$dIndex]["masterKeys"][]="idEnfermedades";

				$detailsTablesData["lcs_enfermedades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_enfermedades"][$dIndex]["detailKeys"][]="_idEnfermedades";
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_enfermedades"] = array();


	
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
	$masterParams["previewOnList"]= 0;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_enfermedades"][0] = $masterParams;	
				$masterTablesData["lcs_enfermedades"][0]["masterKeys"] = array();
	$masterTablesData["lcs_enfermedades"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_enfermedades"][0]["masterKeys"][]="Nombre";
				$masterTablesData["lcs_enfermedades"][0]["detailKeys"] = array();
	$masterTablesData["lcs_enfermedades"][0]["detailKeys"][]="_idEstudiante";
				$masterTablesData["lcs_enfermedades"][0]["detailKeys"][]="TipoEnfermedad";
		
	
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
	$masterTablesData["lcs_enfermedades"][1] = $masterParams;	
				$masterTablesData["lcs_enfermedades"][1]["masterKeys"] = array();
	$masterTablesData["lcs_enfermedades"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_enfermedades"][1]["detailKeys"] = array();
	$masterTablesData["lcs_enfermedades"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_enfermedades"][2] = $masterParams;	
				$masterTablesData["lcs_enfermedades"][2]["masterKeys"] = array();
	$masterTablesData["lcs_enfermedades"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_enfermedades"][2]["detailKeys"] = array();
	$masterTablesData["lcs_enfermedades"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_enfermedades"][3] = $masterParams;	
				$masterTablesData["lcs_enfermedades"][3]["masterKeys"] = array();
	$masterTablesData["lcs_enfermedades"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_enfermedades"][3]["detailKeys"] = array();
	$masterTablesData["lcs_enfermedades"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_enfermedades"][4] = $masterParams;	
				$masterTablesData["lcs_enfermedades"][4]["masterKeys"] = array();
	$masterTablesData["lcs_enfermedades"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_enfermedades"][4]["detailKeys"] = array();
	$masterTablesData["lcs_enfermedades"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_enfermedades"][5] = $masterParams;	
				$masterTablesData["lcs_enfermedades"][5]["masterKeys"] = array();
	$masterTablesData["lcs_enfermedades"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_enfermedades"][5]["detailKeys"] = array();
	$masterTablesData["lcs_enfermedades"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_enfermedades"][6] = $masterParams;	
				$masterTablesData["lcs_enfermedades"][6]["masterKeys"] = array();
	$masterTablesData["lcs_enfermedades"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_enfermedades"][6]["detailKeys"] = array();
	$masterTablesData["lcs_enfermedades"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_enfermedades()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idEnfermedades,   TipoEnfermedad,   Ingresado,   _idEstudiante";
$proto3["m_strFrom"] = "FROM lcs_enfermedades";
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
	"m_strName" => "idEnfermedades",
	"m_strTable" => "lcs_enfermedades",
	"m_srcTableName" => "lcs_enfermedades"
));

$proto8["m_sql"] = "idEnfermedades";
$proto8["m_srcTableName"] = "lcs_enfermedades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEnfermedad",
	"m_strTable" => "lcs_enfermedades",
	"m_srcTableName" => "lcs_enfermedades"
));

$proto10["m_sql"] = "TipoEnfermedad";
$proto10["m_srcTableName"] = "lcs_enfermedades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_enfermedades",
	"m_srcTableName" => "lcs_enfermedades"
));

$proto12["m_sql"] = "Ingresado";
$proto12["m_srcTableName"] = "lcs_enfermedades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_enfermedades",
	"m_srcTableName" => "lcs_enfermedades"
));

$proto14["m_sql"] = "_idEstudiante";
$proto14["m_srcTableName"] = "lcs_enfermedades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "lcs_enfermedades";
$proto17["m_srcTableName"] = "lcs_enfermedades";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idEnfermedades";
$proto17["m_columns"][] = "TipoEnfermedad";
$proto17["m_columns"][] = "Ingresado";
$proto17["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "lcs_enfermedades";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "lcs_enfermedades";
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
$proto3["m_srcTableName"]="lcs_enfermedades";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_enfermedades = createSqlQuery_lcs_enfermedades();


	
				
	
$tdatalcs_enfermedades[".sqlquery"] = $queryData_lcs_enfermedades;

$tableEvents["lcs_enfermedades"] = new eventsBase;
$tdatalcs_enfermedades[".hasEvents"] = false;

?>