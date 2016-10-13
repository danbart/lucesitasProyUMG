<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_terapias = array();	
	$tdatalcs_terapias[".truncateText"] = true;
	$tdatalcs_terapias[".NumberOfChars"] = 80; 
	$tdatalcs_terapias[".ShortName"] = "lcs_terapias";
	$tdatalcs_terapias[".OwnerID"] = "";
	$tdatalcs_terapias[".OriginalTable"] = "lcs_terapias";

//	field labels
$fieldLabelslcs_terapias = array();
$fieldToolTipslcs_terapias = array();
$pageTitleslcs_terapias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_terapias["Spanish"] = array();
	$fieldToolTipslcs_terapias["Spanish"] = array();
	$pageTitleslcs_terapias["Spanish"] = array();
	$fieldLabelslcs_terapias["Spanish"]["idterapias"] = "No.";
	$fieldToolTipslcs_terapias["Spanish"]["idterapias"] = "";
	$fieldLabelslcs_terapias["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipslcs_terapias["Spanish"]["fecha"] = "";
	$fieldLabelslcs_terapias["Spanish"]["hora"] = "Hora";
	$fieldToolTipslcs_terapias["Spanish"]["hora"] = "";
	$fieldLabelslcs_terapias["Spanish"]["TipoTerapia"] = "Tipo Terapia";
	$fieldToolTipslcs_terapias["Spanish"]["TipoTerapia"] = "";
	$fieldLabelslcs_terapias["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_terapias["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_terapias["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_terapias["Spanish"]["_idEstudiante"] = "";
	$fieldLabelslcs_terapias["Spanish"]["_idterapista"] = "Terapista";
	$fieldToolTipslcs_terapias["Spanish"]["_idterapista"] = "";
	if (count($fieldToolTipslcs_terapias["Spanish"]))
		$tdatalcs_terapias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_terapias[""] = array();
	$fieldToolTipslcs_terapias[""] = array();
	$pageTitleslcs_terapias[""] = array();
	$fieldLabelslcs_terapias[""]["idterapias"] = "Idterapias";
	$fieldToolTipslcs_terapias[""]["idterapias"] = "";
	$fieldLabelslcs_terapias[""]["fecha"] = "Fecha";
	$fieldToolTipslcs_terapias[""]["fecha"] = "";
	$fieldLabelslcs_terapias[""]["hora"] = "Hora";
	$fieldToolTipslcs_terapias[""]["hora"] = "";
	$fieldLabelslcs_terapias[""]["TipoTerapia"] = "Tipo Terapia";
	$fieldToolTipslcs_terapias[""]["TipoTerapia"] = "";
	$fieldLabelslcs_terapias[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_terapias[""]["Ingresado"] = "";
	$fieldLabelslcs_terapias[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_terapias[""]["_idEstudiante"] = "";
	$fieldLabelslcs_terapias[""]["_idterapista"] = "Idterapista";
	$fieldToolTipslcs_terapias[""]["_idterapista"] = "";
	if (count($fieldToolTipslcs_terapias[""]))
		$tdatalcs_terapias[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_terapias[".NCSearch"] = true;



$tdatalcs_terapias[".shortTableName"] = "lcs_terapias";
$tdatalcs_terapias[".nSecOptions"] = 0;
$tdatalcs_terapias[".recsPerRowList"] = 1;
$tdatalcs_terapias[".mainTableOwnerID"] = "";
$tdatalcs_terapias[".moveNext"] = 1;
$tdatalcs_terapias[".nType"] = 0;

$tdatalcs_terapias[".strOriginalTableName"] = "lcs_terapias";




$tdatalcs_terapias[".showAddInPopup"] = true;

$tdatalcs_terapias[".showEditInPopup"] = true;

$tdatalcs_terapias[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_terapias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_terapias[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_terapias[".listAjax"] = true;
else 
	$tdatalcs_terapias[".listAjax"] = false;

	$tdatalcs_terapias[".audit"] = false;

	$tdatalcs_terapias[".locking"] = false;

$tdatalcs_terapias[".edit"] = true;

$tdatalcs_terapias[".list"] = true;

$tdatalcs_terapias[".view"] = true;

$tdatalcs_terapias[".import"] = true;

$tdatalcs_terapias[".exportTo"] = true;

$tdatalcs_terapias[".printFriendly"] = true;

$tdatalcs_terapias[".delete"] = true;

$tdatalcs_terapias[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_terapias[".searchSaving"] = false;
//

$tdatalcs_terapias[".showSearchPanel"] = true;
		$tdatalcs_terapias[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_terapias[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_terapias[".isUseAjaxSuggest"] = true;

$tdatalcs_terapias[".rowHighlite"] = true;



$tdatalcs_terapias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_terapias[".isUseTimeForSearch"] = false;





$tdatalcs_terapias[".allSearchFields"] = array();
$tdatalcs_terapias[".filterFields"] = array();
$tdatalcs_terapias[".requiredSearchFields"] = array();

$tdatalcs_terapias[".allSearchFields"][] = "idterapias";
	$tdatalcs_terapias[".allSearchFields"][] = "fecha";
	$tdatalcs_terapias[".allSearchFields"][] = "hora";
	$tdatalcs_terapias[".allSearchFields"][] = "TipoTerapia";
	$tdatalcs_terapias[".allSearchFields"][] = "Ingresado";
	$tdatalcs_terapias[".allSearchFields"][] = "_idEstudiante";
	$tdatalcs_terapias[".allSearchFields"][] = "_idterapista";
	

$tdatalcs_terapias[".googleLikeFields"] = array();
$tdatalcs_terapias[".googleLikeFields"][] = "idterapias";
$tdatalcs_terapias[".googleLikeFields"][] = "fecha";
$tdatalcs_terapias[".googleLikeFields"][] = "hora";
$tdatalcs_terapias[".googleLikeFields"][] = "TipoTerapia";
$tdatalcs_terapias[".googleLikeFields"][] = "Ingresado";
$tdatalcs_terapias[".googleLikeFields"][] = "_idEstudiante";
$tdatalcs_terapias[".googleLikeFields"][] = "_idterapista";


$tdatalcs_terapias[".advSearchFields"] = array();
$tdatalcs_terapias[".advSearchFields"][] = "idterapias";
$tdatalcs_terapias[".advSearchFields"][] = "fecha";
$tdatalcs_terapias[".advSearchFields"][] = "hora";
$tdatalcs_terapias[".advSearchFields"][] = "TipoTerapia";
$tdatalcs_terapias[".advSearchFields"][] = "Ingresado";
$tdatalcs_terapias[".advSearchFields"][] = "_idEstudiante";
$tdatalcs_terapias[".advSearchFields"][] = "_idterapista";

$tdatalcs_terapias[".tableType"] = "list";

$tdatalcs_terapias[".printerPageOrientation"] = 0;
$tdatalcs_terapias[".nPrinterPageScale"] = 100;

$tdatalcs_terapias[".nPrinterSplitRecords"] = 40;

$tdatalcs_terapias[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_terapias[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_terapias[".isViewPagePDF"] = true;
$tdatalcs_terapias[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_terapias[".isPrinterPagePDF"] = true;
$tdatalcs_terapias[".nPrinterPagePDFScale"] = 100;


$tdatalcs_terapias[".pageSize"] = 20;

$tdatalcs_terapias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_terapias[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_terapias[".orderindexes"] = array();

$tdatalcs_terapias[".sqlHead"] = "SELECT idterapias,   fecha,   hora,   TipoTerapia,   Ingresado,   _idEstudiante,   _idterapista";
$tdatalcs_terapias[".sqlFrom"] = "FROM lcs_terapias";
$tdatalcs_terapias[".sqlWhereExpr"] = "";
$tdatalcs_terapias[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_terapias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_terapias[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_terapias = array();
$tableKeyslcs_terapias[] = "idterapias";
$tdatalcs_terapias[".Keys"] = $tableKeyslcs_terapias;

$tdatalcs_terapias[".listFields"] = array();
$tdatalcs_terapias[".listFields"][] = "idterapias";
$tdatalcs_terapias[".listFields"][] = "fecha";
$tdatalcs_terapias[".listFields"][] = "hora";
$tdatalcs_terapias[".listFields"][] = "TipoTerapia";
$tdatalcs_terapias[".listFields"][] = "Ingresado";
$tdatalcs_terapias[".listFields"][] = "_idEstudiante";
$tdatalcs_terapias[".listFields"][] = "_idterapista";

$tdatalcs_terapias[".hideMobileList"] = array();


$tdatalcs_terapias[".viewFields"] = array();
$tdatalcs_terapias[".viewFields"][] = "idterapias";
$tdatalcs_terapias[".viewFields"][] = "fecha";
$tdatalcs_terapias[".viewFields"][] = "hora";
$tdatalcs_terapias[".viewFields"][] = "TipoTerapia";
$tdatalcs_terapias[".viewFields"][] = "Ingresado";
$tdatalcs_terapias[".viewFields"][] = "_idEstudiante";
$tdatalcs_terapias[".viewFields"][] = "_idterapista";

$tdatalcs_terapias[".addFields"] = array();
$tdatalcs_terapias[".addFields"][] = "fecha";
$tdatalcs_terapias[".addFields"][] = "hora";
$tdatalcs_terapias[".addFields"][] = "TipoTerapia";
$tdatalcs_terapias[".addFields"][] = "_idEstudiante";
$tdatalcs_terapias[".addFields"][] = "_idterapista";

$tdatalcs_terapias[".inlineAddFields"] = array();

$tdatalcs_terapias[".editFields"] = array();
$tdatalcs_terapias[".editFields"][] = "fecha";
$tdatalcs_terapias[".editFields"][] = "hora";
$tdatalcs_terapias[".editFields"][] = "TipoTerapia";
$tdatalcs_terapias[".editFields"][] = "_idEstudiante";
$tdatalcs_terapias[".editFields"][] = "_idterapista";

$tdatalcs_terapias[".inlineEditFields"] = array();

$tdatalcs_terapias[".exportFields"] = array();
$tdatalcs_terapias[".exportFields"][] = "idterapias";
$tdatalcs_terapias[".exportFields"][] = "fecha";
$tdatalcs_terapias[".exportFields"][] = "hora";
$tdatalcs_terapias[".exportFields"][] = "TipoTerapia";
$tdatalcs_terapias[".exportFields"][] = "Ingresado";
$tdatalcs_terapias[".exportFields"][] = "_idEstudiante";
$tdatalcs_terapias[".exportFields"][] = "_idterapista";

$tdatalcs_terapias[".importFields"] = array();
$tdatalcs_terapias[".importFields"][] = "fecha";
$tdatalcs_terapias[".importFields"][] = "hora";
$tdatalcs_terapias[".importFields"][] = "TipoTerapia";
$tdatalcs_terapias[".importFields"][] = "_idEstudiante";
$tdatalcs_terapias[".importFields"][] = "_idterapista";

$tdatalcs_terapias[".printFields"] = array();
$tdatalcs_terapias[".printFields"][] = "idterapias";
$tdatalcs_terapias[".printFields"][] = "fecha";
$tdatalcs_terapias[".printFields"][] = "hora";
$tdatalcs_terapias[".printFields"][] = "TipoTerapia";
$tdatalcs_terapias[".printFields"][] = "Ingresado";
$tdatalcs_terapias[".printFields"][] = "_idEstudiante";
$tdatalcs_terapias[".printFields"][] = "_idterapista";

//	idterapias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idterapias";
	$fdata["GoodName"] = "idterapias";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("lcs_terapias","idterapias"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idterapias"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idterapias";
	
		
		
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

	

	
	$tdatalcs_terapias["idterapias"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("lcs_terapias","fecha"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatalcs_terapias["fecha"] = $fdata;
//	hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hora";
	$fdata["GoodName"] = "hora";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("lcs_terapias","hora"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "hora"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatalcs_terapias["hora"] = $fdata;
//	TipoTerapia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TipoTerapia";
	$fdata["GoodName"] = "TipoTerapia";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("lcs_terapias","TipoTerapia"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoTerapia"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoTerapia";
	
		
		
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

	

	
	$tdatalcs_terapias["TipoTerapia"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("lcs_terapias","Ingresado"); 
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

	

	
	$tdatalcs_terapias["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("lcs_terapias","_idEstudiante"); 
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

	

	
	$tdatalcs_terapias["_idEstudiante"] = $fdata;
//	_idterapista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "_idterapista";
	$fdata["GoodName"] = "_idterapista";
	$fdata["ownerTable"] = "lcs_terapias";
	$fdata["Label"] = GetFieldLabel("lcs_terapias","_idterapista"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "_idterapista"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "_idterapista";
	
		
		
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
	$edata["LookupTable"] = "lcs_terapista";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "idterapista";
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

	

	
	$tdatalcs_terapias["_idterapista"] = $fdata;

	
$tables_data["lcs_terapias"]=&$tdatalcs_terapias;
$field_labels["lcs_terapias"] = &$fieldLabelslcs_terapias;
$fieldToolTips["lcs_terapias"] = &$fieldToolTipslcs_terapias;
$page_titles["lcs_terapias"] = &$pageTitleslcs_terapias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_terapias"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_terapias"] = array();


	
				$strOriginalDetailsTable="lcs_terapista";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="lcs_terapista";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lcs_terapista";
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
					$masterTablesData["lcs_terapias"][0] = $masterParams;	
				$masterTablesData["lcs_terapias"][0]["masterKeys"] = array();
	$masterTablesData["lcs_terapias"][0]["masterKeys"][]="idterapista";
				$masterTablesData["lcs_terapias"][0]["detailKeys"] = array();
	$masterTablesData["lcs_terapias"][0]["detailKeys"][]="_idterapista";
		
	
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
	$masterTablesData["lcs_terapias"][1] = $masterParams;	
				$masterTablesData["lcs_terapias"][1]["masterKeys"] = array();
	$masterTablesData["lcs_terapias"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_terapias"][1]["detailKeys"] = array();
	$masterTablesData["lcs_terapias"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_terapias"][2] = $masterParams;	
				$masterTablesData["lcs_terapias"][2]["masterKeys"] = array();
	$masterTablesData["lcs_terapias"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_terapias"][2]["detailKeys"] = array();
	$masterTablesData["lcs_terapias"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_terapias"][3] = $masterParams;	
				$masterTablesData["lcs_terapias"][3]["masterKeys"] = array();
	$masterTablesData["lcs_terapias"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_terapias"][3]["detailKeys"] = array();
	$masterTablesData["lcs_terapias"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_terapias"][4] = $masterParams;	
				$masterTablesData["lcs_terapias"][4]["masterKeys"] = array();
	$masterTablesData["lcs_terapias"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_terapias"][4]["detailKeys"] = array();
	$masterTablesData["lcs_terapias"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_terapias"][5] = $masterParams;	
				$masterTablesData["lcs_terapias"][5]["masterKeys"] = array();
	$masterTablesData["lcs_terapias"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_terapias"][5]["detailKeys"] = array();
	$masterTablesData["lcs_terapias"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_terapias"][6] = $masterParams;	
				$masterTablesData["lcs_terapias"][6]["masterKeys"] = array();
	$masterTablesData["lcs_terapias"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_terapias"][6]["detailKeys"] = array();
	$masterTablesData["lcs_terapias"][6]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_terapias"][7] = $masterParams;	
				$masterTablesData["lcs_terapias"][7]["masterKeys"] = array();
	$masterTablesData["lcs_terapias"][7]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_terapias"][7]["detailKeys"] = array();
	$masterTablesData["lcs_terapias"][7]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_terapias()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idterapias,   fecha,   hora,   TipoTerapia,   Ingresado,   _idEstudiante,   _idterapista";
$proto3["m_strFrom"] = "FROM lcs_terapias";
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
	"m_strName" => "idterapias",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "lcs_terapias"
));

$proto8["m_sql"] = "idterapias";
$proto8["m_srcTableName"] = "lcs_terapias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "lcs_terapias"
));

$proto10["m_sql"] = "fecha";
$proto10["m_srcTableName"] = "lcs_terapias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hora",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "lcs_terapias"
));

$proto12["m_sql"] = "hora";
$proto12["m_srcTableName"] = "lcs_terapias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoTerapia",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "lcs_terapias"
));

$proto14["m_sql"] = "TipoTerapia";
$proto14["m_srcTableName"] = "lcs_terapias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "lcs_terapias"
));

$proto16["m_sql"] = "Ingresado";
$proto16["m_srcTableName"] = "lcs_terapias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "lcs_terapias"
));

$proto18["m_sql"] = "_idEstudiante";
$proto18["m_srcTableName"] = "lcs_terapias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "_idterapista",
	"m_strTable" => "lcs_terapias",
	"m_srcTableName" => "lcs_terapias"
));

$proto20["m_sql"] = "_idterapista";
$proto20["m_srcTableName"] = "lcs_terapias";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "lcs_terapias";
$proto23["m_srcTableName"] = "lcs_terapias";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idterapias";
$proto23["m_columns"][] = "fecha";
$proto23["m_columns"][] = "hora";
$proto23["m_columns"][] = "TipoTerapia";
$proto23["m_columns"][] = "Ingresado";
$proto23["m_columns"][] = "_idEstudiante";
$proto23["m_columns"][] = "_idterapista";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "lcs_terapias";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "lcs_terapias";
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
$proto3["m_srcTableName"]="lcs_terapias";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_terapias = createSqlQuery_lcs_terapias();


	
							
	
$tdatalcs_terapias[".sqlquery"] = $queryData_lcs_terapias;

$tableEvents["lcs_terapias"] = new eventsBase;
$tdatalcs_terapias[".hasEvents"] = false;

?>