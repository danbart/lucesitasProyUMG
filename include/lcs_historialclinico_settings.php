<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_historialclinico = array();	
	$tdatalcs_historialclinico[".truncateText"] = true;
	$tdatalcs_historialclinico[".NumberOfChars"] = 80; 
	$tdatalcs_historialclinico[".ShortName"] = "lcs_historialclinico";
	$tdatalcs_historialclinico[".OwnerID"] = "";
	$tdatalcs_historialclinico[".OriginalTable"] = "lcs_historialclinico";

//	field labels
$fieldLabelslcs_historialclinico = array();
$fieldToolTipslcs_historialclinico = array();
$pageTitleslcs_historialclinico = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_historialclinico["Spanish"] = array();
	$fieldToolTipslcs_historialclinico["Spanish"] = array();
	$pageTitleslcs_historialclinico["Spanish"] = array();
	$fieldLabelslcs_historialclinico["Spanish"]["idHistorialClinico"] = "No.";
	$fieldToolTipslcs_historialclinico["Spanish"]["idHistorialClinico"] = "";
	$fieldLabelslcs_historialclinico["Spanish"]["Documento"] = "Documento";
	$fieldToolTipslcs_historialclinico["Spanish"]["Documento"] = "";
	$fieldLabelslcs_historialclinico["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_historialclinico["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_historialclinico["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_historialclinico["Spanish"]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_historialclinico["Spanish"]))
		$tdatalcs_historialclinico[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_historialclinico[""] = array();
	$fieldToolTipslcs_historialclinico[""] = array();
	$pageTitleslcs_historialclinico[""] = array();
	$fieldLabelslcs_historialclinico[""]["idHistorialClinico"] = "Id Historial Clinico";
	$fieldToolTipslcs_historialclinico[""]["idHistorialClinico"] = "";
	$fieldLabelslcs_historialclinico[""]["Documento"] = "Documento";
	$fieldToolTipslcs_historialclinico[""]["Documento"] = "";
	$fieldLabelslcs_historialclinico[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_historialclinico[""]["Ingresado"] = "";
	$fieldLabelslcs_historialclinico[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_historialclinico[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_historialclinico[""]))
		$tdatalcs_historialclinico[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_historialclinico[".NCSearch"] = true;



$tdatalcs_historialclinico[".shortTableName"] = "lcs_historialclinico";
$tdatalcs_historialclinico[".nSecOptions"] = 0;
$tdatalcs_historialclinico[".recsPerRowList"] = 1;
$tdatalcs_historialclinico[".mainTableOwnerID"] = "";
$tdatalcs_historialclinico[".moveNext"] = 1;
$tdatalcs_historialclinico[".nType"] = 0;

$tdatalcs_historialclinico[".strOriginalTableName"] = "lcs_historialclinico";




$tdatalcs_historialclinico[".showAddInPopup"] = true;

$tdatalcs_historialclinico[".showEditInPopup"] = true;

$tdatalcs_historialclinico[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_historialclinico[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_historialclinico[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_historialclinico[".listAjax"] = true;
else 
	$tdatalcs_historialclinico[".listAjax"] = false;

	$tdatalcs_historialclinico[".audit"] = false;

	$tdatalcs_historialclinico[".locking"] = false;

$tdatalcs_historialclinico[".edit"] = true;

$tdatalcs_historialclinico[".list"] = true;

$tdatalcs_historialclinico[".view"] = true;

$tdatalcs_historialclinico[".import"] = true;

$tdatalcs_historialclinico[".exportTo"] = true;

$tdatalcs_historialclinico[".printFriendly"] = true;

$tdatalcs_historialclinico[".delete"] = true;

$tdatalcs_historialclinico[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_historialclinico[".searchSaving"] = false;
//

$tdatalcs_historialclinico[".showSearchPanel"] = true;
		$tdatalcs_historialclinico[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_historialclinico[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_historialclinico[".isUseAjaxSuggest"] = true;

$tdatalcs_historialclinico[".rowHighlite"] = true;



$tdatalcs_historialclinico[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_historialclinico[".isUseTimeForSearch"] = false;





$tdatalcs_historialclinico[".allSearchFields"] = array();
$tdatalcs_historialclinico[".filterFields"] = array();
$tdatalcs_historialclinico[".requiredSearchFields"] = array();

$tdatalcs_historialclinico[".allSearchFields"][] = "idHistorialClinico";
	$tdatalcs_historialclinico[".allSearchFields"][] = "Documento";
	$tdatalcs_historialclinico[".allSearchFields"][] = "Ingresado";
	$tdatalcs_historialclinico[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_historialclinico[".googleLikeFields"] = array();
$tdatalcs_historialclinico[".googleLikeFields"][] = "idHistorialClinico";
$tdatalcs_historialclinico[".googleLikeFields"][] = "Documento";
$tdatalcs_historialclinico[".googleLikeFields"][] = "Ingresado";
$tdatalcs_historialclinico[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_historialclinico[".advSearchFields"] = array();
$tdatalcs_historialclinico[".advSearchFields"][] = "idHistorialClinico";
$tdatalcs_historialclinico[".advSearchFields"][] = "Documento";
$tdatalcs_historialclinico[".advSearchFields"][] = "Ingresado";
$tdatalcs_historialclinico[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_historialclinico[".tableType"] = "list";

$tdatalcs_historialclinico[".printerPageOrientation"] = 0;
$tdatalcs_historialclinico[".nPrinterPageScale"] = 100;

$tdatalcs_historialclinico[".nPrinterSplitRecords"] = 40;

$tdatalcs_historialclinico[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_historialclinico[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_historialclinico[".isViewPagePDF"] = true;
$tdatalcs_historialclinico[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_historialclinico[".isPrinterPagePDF"] = true;
$tdatalcs_historialclinico[".nPrinterPagePDFScale"] = 100;


$tdatalcs_historialclinico[".pageSize"] = 20;

$tdatalcs_historialclinico[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_historialclinico[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_historialclinico[".orderindexes"] = array();

$tdatalcs_historialclinico[".sqlHead"] = "SELECT idHistorialClinico,   Documento,   Ingresado,   _idEstudiante";
$tdatalcs_historialclinico[".sqlFrom"] = "FROM lcs_historialclinico";
$tdatalcs_historialclinico[".sqlWhereExpr"] = "";
$tdatalcs_historialclinico[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_historialclinico[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_historialclinico[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_historialclinico = array();
$tableKeyslcs_historialclinico[] = "idHistorialClinico";
$tdatalcs_historialclinico[".Keys"] = $tableKeyslcs_historialclinico;

$tdatalcs_historialclinico[".listFields"] = array();
$tdatalcs_historialclinico[".listFields"][] = "idHistorialClinico";
$tdatalcs_historialclinico[".listFields"][] = "Documento";
$tdatalcs_historialclinico[".listFields"][] = "Ingresado";
$tdatalcs_historialclinico[".listFields"][] = "_idEstudiante";

$tdatalcs_historialclinico[".hideMobileList"] = array();


$tdatalcs_historialclinico[".viewFields"] = array();
$tdatalcs_historialclinico[".viewFields"][] = "idHistorialClinico";
$tdatalcs_historialclinico[".viewFields"][] = "Documento";
$tdatalcs_historialclinico[".viewFields"][] = "Ingresado";
$tdatalcs_historialclinico[".viewFields"][] = "_idEstudiante";

$tdatalcs_historialclinico[".addFields"] = array();
$tdatalcs_historialclinico[".addFields"][] = "Documento";
$tdatalcs_historialclinico[".addFields"][] = "_idEstudiante";

$tdatalcs_historialclinico[".inlineAddFields"] = array();

$tdatalcs_historialclinico[".editFields"] = array();
$tdatalcs_historialclinico[".editFields"][] = "Documento";
$tdatalcs_historialclinico[".editFields"][] = "_idEstudiante";

$tdatalcs_historialclinico[".inlineEditFields"] = array();

$tdatalcs_historialclinico[".exportFields"] = array();
$tdatalcs_historialclinico[".exportFields"][] = "idHistorialClinico";
$tdatalcs_historialclinico[".exportFields"][] = "Documento";
$tdatalcs_historialclinico[".exportFields"][] = "Ingresado";
$tdatalcs_historialclinico[".exportFields"][] = "_idEstudiante";

$tdatalcs_historialclinico[".importFields"] = array();
$tdatalcs_historialclinico[".importFields"][] = "Documento";
$tdatalcs_historialclinico[".importFields"][] = "_idEstudiante";

$tdatalcs_historialclinico[".printFields"] = array();
$tdatalcs_historialclinico[".printFields"][] = "idHistorialClinico";
$tdatalcs_historialclinico[".printFields"][] = "Documento";
$tdatalcs_historialclinico[".printFields"][] = "Ingresado";
$tdatalcs_historialclinico[".printFields"][] = "_idEstudiante";

//	idHistorialClinico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idHistorialClinico";
	$fdata["GoodName"] = "idHistorialClinico";
	$fdata["ownerTable"] = "lcs_historialclinico";
	$fdata["Label"] = GetFieldLabel("lcs_historialclinico","idHistorialClinico"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idHistorialClinico"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idHistorialClinico";
	
		
		
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

	

	
	$tdatalcs_historialclinico["idHistorialClinico"] = $fdata;
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "lcs_historialclinico";
	$fdata["Label"] = GetFieldLabel("lcs_historialclinico","Documento"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Documento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documento";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "HisClinFiles";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
								$vdata["ShowIcon"] = true; 
			
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
							$edata["acceptFileTypes"] = "doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 5000;
	
		
		
		
		
		
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

	

	
	$tdatalcs_historialclinico["Documento"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_historialclinico";
	$fdata["Label"] = GetFieldLabel("lcs_historialclinico","Ingresado"); 
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

	

	
	$tdatalcs_historialclinico["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_historialclinico";
	$fdata["Label"] = GetFieldLabel("lcs_historialclinico","_idEstudiante"); 
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

	

	
	$tdatalcs_historialclinico["_idEstudiante"] = $fdata;

	
$tables_data["lcs_historialclinico"]=&$tdatalcs_historialclinico;
$field_labels["lcs_historialclinico"] = &$fieldLabelslcs_historialclinico;
$fieldToolTips["lcs_historialclinico"] = &$fieldToolTipslcs_historialclinico;
$page_titles["lcs_historialclinico"] = &$pageTitleslcs_historialclinico;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_historialclinico"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_historialclinico"] = array();


	
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
	$masterTablesData["lcs_historialclinico"][0] = $masterParams;	
				$masterTablesData["lcs_historialclinico"][0]["masterKeys"] = array();
	$masterTablesData["lcs_historialclinico"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_historialclinico"][0]["detailKeys"] = array();
	$masterTablesData["lcs_historialclinico"][0]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_historialclinico"][1] = $masterParams;	
				$masterTablesData["lcs_historialclinico"][1]["masterKeys"] = array();
	$masterTablesData["lcs_historialclinico"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_historialclinico"][1]["detailKeys"] = array();
	$masterTablesData["lcs_historialclinico"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_historialclinico"][2] = $masterParams;	
				$masterTablesData["lcs_historialclinico"][2]["masterKeys"] = array();
	$masterTablesData["lcs_historialclinico"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_historialclinico"][2]["detailKeys"] = array();
	$masterTablesData["lcs_historialclinico"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_historialclinico"][3] = $masterParams;	
				$masterTablesData["lcs_historialclinico"][3]["masterKeys"] = array();
	$masterTablesData["lcs_historialclinico"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_historialclinico"][3]["detailKeys"] = array();
	$masterTablesData["lcs_historialclinico"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_historialclinico"][4] = $masterParams;	
				$masterTablesData["lcs_historialclinico"][4]["masterKeys"] = array();
	$masterTablesData["lcs_historialclinico"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_historialclinico"][4]["detailKeys"] = array();
	$masterTablesData["lcs_historialclinico"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_historialclinico"][5] = $masterParams;	
				$masterTablesData["lcs_historialclinico"][5]["masterKeys"] = array();
	$masterTablesData["lcs_historialclinico"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_historialclinico"][5]["detailKeys"] = array();
	$masterTablesData["lcs_historialclinico"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_historialclinico"][6] = $masterParams;	
				$masterTablesData["lcs_historialclinico"][6]["masterKeys"] = array();
	$masterTablesData["lcs_historialclinico"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_historialclinico"][6]["detailKeys"] = array();
	$masterTablesData["lcs_historialclinico"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_historialclinico()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idHistorialClinico,   Documento,   Ingresado,   _idEstudiante";
$proto3["m_strFrom"] = "FROM lcs_historialclinico";
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
	"m_strName" => "idHistorialClinico",
	"m_strTable" => "lcs_historialclinico",
	"m_srcTableName" => "lcs_historialclinico"
));

$proto8["m_sql"] = "idHistorialClinico";
$proto8["m_srcTableName"] = "lcs_historialclinico";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "lcs_historialclinico",
	"m_srcTableName" => "lcs_historialclinico"
));

$proto10["m_sql"] = "Documento";
$proto10["m_srcTableName"] = "lcs_historialclinico";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_historialclinico",
	"m_srcTableName" => "lcs_historialclinico"
));

$proto12["m_sql"] = "Ingresado";
$proto12["m_srcTableName"] = "lcs_historialclinico";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_historialclinico",
	"m_srcTableName" => "lcs_historialclinico"
));

$proto14["m_sql"] = "_idEstudiante";
$proto14["m_srcTableName"] = "lcs_historialclinico";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "lcs_historialclinico";
$proto17["m_srcTableName"] = "lcs_historialclinico";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idHistorialClinico";
$proto17["m_columns"][] = "Documento";
$proto17["m_columns"][] = "Ingresado";
$proto17["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "lcs_historialclinico";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "lcs_historialclinico";
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
$proto3["m_srcTableName"]="lcs_historialclinico";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_historialclinico = createSqlQuery_lcs_historialclinico();


	
				
	
$tdatalcs_historialclinico[".sqlquery"] = $queryData_lcs_historialclinico;

$tableEvents["lcs_historialclinico"] = new eventsBase;
$tdatalcs_historialclinico[".hasEvents"] = false;

?>