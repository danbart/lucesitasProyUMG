<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_emociones = array();	
	$tdatalcs_emociones[".truncateText"] = true;
	$tdatalcs_emociones[".NumberOfChars"] = 80; 
	$tdatalcs_emociones[".ShortName"] = "lcs_emociones";
	$tdatalcs_emociones[".OwnerID"] = "";
	$tdatalcs_emociones[".OriginalTable"] = "lcs_emociones";

//	field labels
$fieldLabelslcs_emociones = array();
$fieldToolTipslcs_emociones = array();
$pageTitleslcs_emociones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_emociones["Spanish"] = array();
	$fieldToolTipslcs_emociones["Spanish"] = array();
	$pageTitleslcs_emociones["Spanish"] = array();
	$fieldLabelslcs_emociones["Spanish"]["idEmociones"] = "No.";
	$fieldToolTipslcs_emociones["Spanish"]["idEmociones"] = "";
	$fieldLabelslcs_emociones["Spanish"]["TipoEmocion"] = "Tipo Emocion";
	$fieldToolTipslcs_emociones["Spanish"]["TipoEmocion"] = "";
	$fieldLabelslcs_emociones["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_emociones["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_emociones["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_emociones["Spanish"]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_emociones["Spanish"]))
		$tdatalcs_emociones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_emociones[""] = array();
	$fieldToolTipslcs_emociones[""] = array();
	$pageTitleslcs_emociones[""] = array();
	$fieldLabelslcs_emociones[""]["idEmociones"] = "Id Emociones";
	$fieldToolTipslcs_emociones[""]["idEmociones"] = "";
	$fieldLabelslcs_emociones[""]["TipoEmocion"] = "Tipo Emocion";
	$fieldToolTipslcs_emociones[""]["TipoEmocion"] = "";
	$fieldLabelslcs_emociones[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_emociones[""]["Ingresado"] = "";
	$fieldLabelslcs_emociones[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_emociones[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_emociones[""]))
		$tdatalcs_emociones[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_emociones[".NCSearch"] = true;



$tdatalcs_emociones[".shortTableName"] = "lcs_emociones";
$tdatalcs_emociones[".nSecOptions"] = 0;
$tdatalcs_emociones[".recsPerRowList"] = 1;
$tdatalcs_emociones[".mainTableOwnerID"] = "";
$tdatalcs_emociones[".moveNext"] = 1;
$tdatalcs_emociones[".nType"] = 0;

$tdatalcs_emociones[".strOriginalTableName"] = "lcs_emociones";




$tdatalcs_emociones[".showAddInPopup"] = true;

$tdatalcs_emociones[".showEditInPopup"] = true;

$tdatalcs_emociones[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_emociones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_emociones[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_emociones[".listAjax"] = true;
else 
	$tdatalcs_emociones[".listAjax"] = false;

	$tdatalcs_emociones[".audit"] = true;

	$tdatalcs_emociones[".locking"] = false;

$tdatalcs_emociones[".edit"] = true;

$tdatalcs_emociones[".list"] = true;

$tdatalcs_emociones[".view"] = true;

$tdatalcs_emociones[".import"] = true;

$tdatalcs_emociones[".exportTo"] = true;

$tdatalcs_emociones[".printFriendly"] = true;

$tdatalcs_emociones[".delete"] = true;

$tdatalcs_emociones[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_emociones[".searchSaving"] = false;
//

$tdatalcs_emociones[".showSearchPanel"] = true;
		$tdatalcs_emociones[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_emociones[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_emociones[".isUseAjaxSuggest"] = true;

$tdatalcs_emociones[".rowHighlite"] = true;



$tdatalcs_emociones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_emociones[".isUseTimeForSearch"] = false;





$tdatalcs_emociones[".allSearchFields"] = array();
$tdatalcs_emociones[".filterFields"] = array();
$tdatalcs_emociones[".requiredSearchFields"] = array();

$tdatalcs_emociones[".allSearchFields"][] = "idEmociones";
	$tdatalcs_emociones[".allSearchFields"][] = "TipoEmocion";
	$tdatalcs_emociones[".allSearchFields"][] = "Ingresado";
	$tdatalcs_emociones[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_emociones[".googleLikeFields"] = array();
$tdatalcs_emociones[".googleLikeFields"][] = "idEmociones";
$tdatalcs_emociones[".googleLikeFields"][] = "TipoEmocion";
$tdatalcs_emociones[".googleLikeFields"][] = "Ingresado";
$tdatalcs_emociones[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_emociones[".advSearchFields"] = array();
$tdatalcs_emociones[".advSearchFields"][] = "idEmociones";
$tdatalcs_emociones[".advSearchFields"][] = "TipoEmocion";
$tdatalcs_emociones[".advSearchFields"][] = "Ingresado";
$tdatalcs_emociones[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_emociones[".tableType"] = "list";

$tdatalcs_emociones[".printerPageOrientation"] = 0;
$tdatalcs_emociones[".nPrinterPageScale"] = 100;

$tdatalcs_emociones[".nPrinterSplitRecords"] = 40;

$tdatalcs_emociones[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_emociones[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_emociones[".isViewPagePDF"] = true;
$tdatalcs_emociones[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_emociones[".isPrinterPagePDF"] = true;
$tdatalcs_emociones[".nPrinterPagePDFScale"] = 100;


$tdatalcs_emociones[".pageSize"] = 20;

$tdatalcs_emociones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_emociones[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_emociones[".orderindexes"] = array();

$tdatalcs_emociones[".sqlHead"] = "SELECT idEmociones,   TipoEmocion,   Ingresado,   `_idEstudiante`";
$tdatalcs_emociones[".sqlFrom"] = "FROM lcs_emociones";
$tdatalcs_emociones[".sqlWhereExpr"] = "";
$tdatalcs_emociones[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_emociones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_emociones[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_emociones = array();
$tableKeyslcs_emociones[] = "idEmociones";
$tdatalcs_emociones[".Keys"] = $tableKeyslcs_emociones;

$tdatalcs_emociones[".listFields"] = array();
$tdatalcs_emociones[".listFields"][] = "idEmociones";
$tdatalcs_emociones[".listFields"][] = "TipoEmocion";
$tdatalcs_emociones[".listFields"][] = "Ingresado";
$tdatalcs_emociones[".listFields"][] = "_idEstudiante";

$tdatalcs_emociones[".hideMobileList"] = array();


$tdatalcs_emociones[".viewFields"] = array();
$tdatalcs_emociones[".viewFields"][] = "idEmociones";
$tdatalcs_emociones[".viewFields"][] = "TipoEmocion";
$tdatalcs_emociones[".viewFields"][] = "Ingresado";
$tdatalcs_emociones[".viewFields"][] = "_idEstudiante";

$tdatalcs_emociones[".addFields"] = array();
$tdatalcs_emociones[".addFields"][] = "_idEstudiante";
$tdatalcs_emociones[".addFields"][] = "TipoEmocion";

$tdatalcs_emociones[".inlineAddFields"] = array();

$tdatalcs_emociones[".editFields"] = array();
$tdatalcs_emociones[".editFields"][] = "TipoEmocion";
$tdatalcs_emociones[".editFields"][] = "_idEstudiante";

$tdatalcs_emociones[".inlineEditFields"] = array();

$tdatalcs_emociones[".exportFields"] = array();
$tdatalcs_emociones[".exportFields"][] = "idEmociones";
$tdatalcs_emociones[".exportFields"][] = "TipoEmocion";
$tdatalcs_emociones[".exportFields"][] = "Ingresado";
$tdatalcs_emociones[".exportFields"][] = "_idEstudiante";

$tdatalcs_emociones[".importFields"] = array();
$tdatalcs_emociones[".importFields"][] = "TipoEmocion";
$tdatalcs_emociones[".importFields"][] = "_idEstudiante";

$tdatalcs_emociones[".printFields"] = array();
$tdatalcs_emociones[".printFields"][] = "idEmociones";
$tdatalcs_emociones[".printFields"][] = "TipoEmocion";
$tdatalcs_emociones[".printFields"][] = "Ingresado";
$tdatalcs_emociones[".printFields"][] = "_idEstudiante";

//	idEmociones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idEmociones";
	$fdata["GoodName"] = "idEmociones";
	$fdata["ownerTable"] = "lcs_emociones";
	$fdata["Label"] = GetFieldLabel("lcs_emociones","idEmociones"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idEmociones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEmociones";
	
		
		
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

	

	
	$tdatalcs_emociones["idEmociones"] = $fdata;
//	TipoEmocion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoEmocion";
	$fdata["GoodName"] = "TipoEmocion";
	$fdata["ownerTable"] = "lcs_emociones";
	$fdata["Label"] = GetFieldLabel("lcs_emociones","TipoEmocion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoEmocion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoEmocion";
	
		
		
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

	

	
	$tdatalcs_emociones["TipoEmocion"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_emociones";
	$fdata["Label"] = GetFieldLabel("lcs_emociones","Ingresado"); 
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

	

	
	$tdatalcs_emociones["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_emociones";
	$fdata["Label"] = GetFieldLabel("lcs_emociones","_idEstudiante"); 
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
	$edata["LinkFieldType"] = 3;
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

	

	
	$tdatalcs_emociones["_idEstudiante"] = $fdata;

	
$tables_data["lcs_emociones"]=&$tdatalcs_emociones;
$field_labels["lcs_emociones"] = &$fieldLabelslcs_emociones;
$fieldToolTips["lcs_emociones"] = &$fieldToolTipslcs_emociones;
$page_titles["lcs_emociones"] = &$pageTitleslcs_emociones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_emociones"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_emociones"] = array();


	
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
	$masterTablesData["lcs_emociones"][0] = $masterParams;	
				$masterTablesData["lcs_emociones"][0]["masterKeys"] = array();
	$masterTablesData["lcs_emociones"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_emociones"][0]["detailKeys"] = array();
	$masterTablesData["lcs_emociones"][0]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_emociones"][1] = $masterParams;	
				$masterTablesData["lcs_emociones"][1]["masterKeys"] = array();
	$masterTablesData["lcs_emociones"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_emociones"][1]["detailKeys"] = array();
	$masterTablesData["lcs_emociones"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_emociones"][2] = $masterParams;	
				$masterTablesData["lcs_emociones"][2]["masterKeys"] = array();
	$masterTablesData["lcs_emociones"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_emociones"][2]["detailKeys"] = array();
	$masterTablesData["lcs_emociones"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_emociones"][3] = $masterParams;	
				$masterTablesData["lcs_emociones"][3]["masterKeys"] = array();
	$masterTablesData["lcs_emociones"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_emociones"][3]["detailKeys"] = array();
	$masterTablesData["lcs_emociones"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_emociones"][4] = $masterParams;	
				$masterTablesData["lcs_emociones"][4]["masterKeys"] = array();
	$masterTablesData["lcs_emociones"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_emociones"][4]["detailKeys"] = array();
	$masterTablesData["lcs_emociones"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_emociones"][5] = $masterParams;	
				$masterTablesData["lcs_emociones"][5]["masterKeys"] = array();
	$masterTablesData["lcs_emociones"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_emociones"][5]["detailKeys"] = array();
	$masterTablesData["lcs_emociones"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_emociones"][6] = $masterParams;	
				$masterTablesData["lcs_emociones"][6]["masterKeys"] = array();
	$masterTablesData["lcs_emociones"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_emociones"][6]["detailKeys"] = array();
	$masterTablesData["lcs_emociones"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_emociones()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idEmociones,   TipoEmocion,   Ingresado,   `_idEstudiante`";
$proto3["m_strFrom"] = "FROM lcs_emociones";
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
	"m_strName" => "idEmociones",
	"m_strTable" => "lcs_emociones",
	"m_srcTableName" => "lcs_emociones"
));

$proto8["m_sql"] = "idEmociones";
$proto8["m_srcTableName"] = "lcs_emociones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEmocion",
	"m_strTable" => "lcs_emociones",
	"m_srcTableName" => "lcs_emociones"
));

$proto10["m_sql"] = "TipoEmocion";
$proto10["m_srcTableName"] = "lcs_emociones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_emociones",
	"m_srcTableName" => "lcs_emociones"
));

$proto12["m_sql"] = "Ingresado";
$proto12["m_srcTableName"] = "lcs_emociones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_emociones",
	"m_srcTableName" => "lcs_emociones"
));

$proto14["m_sql"] = "`_idEstudiante`";
$proto14["m_srcTableName"] = "lcs_emociones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "lcs_emociones";
$proto17["m_srcTableName"] = "lcs_emociones";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idEmociones";
$proto17["m_columns"][] = "TipoEmocion";
$proto17["m_columns"][] = "Ingresado";
$proto17["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "lcs_emociones";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "lcs_emociones";
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
$proto3["m_srcTableName"]="lcs_emociones";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_emociones = createSqlQuery_lcs_emociones();


	
				
	
$tdatalcs_emociones[".sqlquery"] = $queryData_lcs_emociones;

$tableEvents["lcs_emociones"] = new eventsBase;
$tdatalcs_emociones[".hasEvents"] = false;

?>