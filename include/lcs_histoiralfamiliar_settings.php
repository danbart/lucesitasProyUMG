<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_histoiralfamiliar = array();	
	$tdatalcs_histoiralfamiliar[".truncateText"] = true;
	$tdatalcs_histoiralfamiliar[".NumberOfChars"] = 80; 
	$tdatalcs_histoiralfamiliar[".ShortName"] = "lcs_histoiralfamiliar";
	$tdatalcs_histoiralfamiliar[".OwnerID"] = "";
	$tdatalcs_histoiralfamiliar[".OriginalTable"] = "lcs_histoiralfamiliar";

//	field labels
$fieldLabelslcs_histoiralfamiliar = array();
$fieldToolTipslcs_histoiralfamiliar = array();
$pageTitleslcs_histoiralfamiliar = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_histoiralfamiliar["Spanish"] = array();
	$fieldToolTipslcs_histoiralfamiliar["Spanish"] = array();
	$pageTitleslcs_histoiralfamiliar["Spanish"] = array();
	$fieldLabelslcs_histoiralfamiliar["Spanish"]["idHistoiralFamiliar"] = "No.";
	$fieldToolTipslcs_histoiralfamiliar["Spanish"]["idHistoiralFamiliar"] = "";
	$fieldLabelslcs_histoiralfamiliar["Spanish"]["CQNinio"] = "CQNinio";
	$fieldToolTipslcs_histoiralfamiliar["Spanish"]["CQNinio"] = "";
	$fieldLabelslcs_histoiralfamiliar["Spanish"]["FProblematico"] = "Familiar Problematico";
	$fieldToolTipslcs_histoiralfamiliar["Spanish"]["FProblematico"] = "";
	$fieldLabelslcs_histoiralfamiliar["Spanish"]["DuermeSolo"] = "Duerme Solo";
	$fieldToolTipslcs_histoiralfamiliar["Spanish"]["DuermeSolo"] = "";
	$fieldLabelslcs_histoiralfamiliar["Spanish"]["ComparteCuarto"] = "Comparte Cuarto";
	$fieldToolTipslcs_histoiralfamiliar["Spanish"]["ComparteCuarto"] = "";
	$fieldLabelslcs_histoiralfamiliar["Spanish"]["ParineteIgual"] = "Parinete Igual";
	$fieldToolTipslcs_histoiralfamiliar["Spanish"]["ParineteIgual"] = "";
	$fieldLabelslcs_histoiralfamiliar["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_histoiralfamiliar["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_histoiralfamiliar["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_histoiralfamiliar["Spanish"]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_histoiralfamiliar["Spanish"]))
		$tdatalcs_histoiralfamiliar[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_histoiralfamiliar[""] = array();
	$fieldToolTipslcs_histoiralfamiliar[""] = array();
	$pageTitleslcs_histoiralfamiliar[""] = array();
	$fieldLabelslcs_histoiralfamiliar[""]["idHistoiralFamiliar"] = "Id Histoiral Familiar";
	$fieldToolTipslcs_histoiralfamiliar[""]["idHistoiralFamiliar"] = "";
	$fieldLabelslcs_histoiralfamiliar[""]["CQNinio"] = "CQNinio";
	$fieldToolTipslcs_histoiralfamiliar[""]["CQNinio"] = "";
	$fieldLabelslcs_histoiralfamiliar[""]["FProblematico"] = "FProblematico";
	$fieldToolTipslcs_histoiralfamiliar[""]["FProblematico"] = "";
	$fieldLabelslcs_histoiralfamiliar[""]["DuermeSolo"] = "Duerme Solo";
	$fieldToolTipslcs_histoiralfamiliar[""]["DuermeSolo"] = "";
	$fieldLabelslcs_histoiralfamiliar[""]["ComparteCuarto"] = "Comparte Cuarto";
	$fieldToolTipslcs_histoiralfamiliar[""]["ComparteCuarto"] = "";
	$fieldLabelslcs_histoiralfamiliar[""]["ParineteIgual"] = "Parinete Igual";
	$fieldToolTipslcs_histoiralfamiliar[""]["ParineteIgual"] = "";
	$fieldLabelslcs_histoiralfamiliar[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_histoiralfamiliar[""]["Ingresado"] = "";
	$fieldLabelslcs_histoiralfamiliar[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_histoiralfamiliar[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_histoiralfamiliar[""]))
		$tdatalcs_histoiralfamiliar[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_histoiralfamiliar[".NCSearch"] = true;



$tdatalcs_histoiralfamiliar[".shortTableName"] = "lcs_histoiralfamiliar";
$tdatalcs_histoiralfamiliar[".nSecOptions"] = 0;
$tdatalcs_histoiralfamiliar[".recsPerRowList"] = 1;
$tdatalcs_histoiralfamiliar[".mainTableOwnerID"] = "";
$tdatalcs_histoiralfamiliar[".moveNext"] = 1;
$tdatalcs_histoiralfamiliar[".nType"] = 0;

$tdatalcs_histoiralfamiliar[".strOriginalTableName"] = "lcs_histoiralfamiliar";




$tdatalcs_histoiralfamiliar[".showAddInPopup"] = true;

$tdatalcs_histoiralfamiliar[".showEditInPopup"] = true;

$tdatalcs_histoiralfamiliar[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_histoiralfamiliar[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_histoiralfamiliar[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_histoiralfamiliar[".listAjax"] = true;
else 
	$tdatalcs_histoiralfamiliar[".listAjax"] = false;

	$tdatalcs_histoiralfamiliar[".audit"] = false;

	$tdatalcs_histoiralfamiliar[".locking"] = false;

$tdatalcs_histoiralfamiliar[".edit"] = true;

$tdatalcs_histoiralfamiliar[".list"] = true;

$tdatalcs_histoiralfamiliar[".view"] = true;

$tdatalcs_histoiralfamiliar[".import"] = true;

$tdatalcs_histoiralfamiliar[".exportTo"] = true;

$tdatalcs_histoiralfamiliar[".printFriendly"] = true;

$tdatalcs_histoiralfamiliar[".delete"] = true;

$tdatalcs_histoiralfamiliar[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_histoiralfamiliar[".searchSaving"] = false;
//

$tdatalcs_histoiralfamiliar[".showSearchPanel"] = true;
		$tdatalcs_histoiralfamiliar[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_histoiralfamiliar[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_histoiralfamiliar[".isUseAjaxSuggest"] = true;

$tdatalcs_histoiralfamiliar[".rowHighlite"] = true;



$tdatalcs_histoiralfamiliar[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_histoiralfamiliar[".isUseTimeForSearch"] = false;





$tdatalcs_histoiralfamiliar[".allSearchFields"] = array();
$tdatalcs_histoiralfamiliar[".filterFields"] = array();
$tdatalcs_histoiralfamiliar[".requiredSearchFields"] = array();

$tdatalcs_histoiralfamiliar[".allSearchFields"][] = "idHistoiralFamiliar";
	$tdatalcs_histoiralfamiliar[".allSearchFields"][] = "CQNinio";
	$tdatalcs_histoiralfamiliar[".allSearchFields"][] = "FProblematico";
	$tdatalcs_histoiralfamiliar[".allSearchFields"][] = "DuermeSolo";
	$tdatalcs_histoiralfamiliar[".allSearchFields"][] = "ComparteCuarto";
	$tdatalcs_histoiralfamiliar[".allSearchFields"][] = "ParineteIgual";
	$tdatalcs_histoiralfamiliar[".allSearchFields"][] = "Ingresado";
	$tdatalcs_histoiralfamiliar[".allSearchFields"][] = "_idEstudiante";
	
$tdatalcs_histoiralfamiliar[".filterFields"][] = "CQNinio";	
$tdatalcs_histoiralfamiliar[".filterFields"][] = "FProblematico";	
$tdatalcs_histoiralfamiliar[".filterFields"][] = "DuermeSolo";	
$tdatalcs_histoiralfamiliar[".filterFields"][] = "ComparteCuarto";	
$tdatalcs_histoiralfamiliar[".filterFields"][] = "ParineteIgual";	

$tdatalcs_histoiralfamiliar[".googleLikeFields"] = array();
$tdatalcs_histoiralfamiliar[".googleLikeFields"][] = "idHistoiralFamiliar";
$tdatalcs_histoiralfamiliar[".googleLikeFields"][] = "CQNinio";
$tdatalcs_histoiralfamiliar[".googleLikeFields"][] = "FProblematico";
$tdatalcs_histoiralfamiliar[".googleLikeFields"][] = "DuermeSolo";
$tdatalcs_histoiralfamiliar[".googleLikeFields"][] = "ComparteCuarto";
$tdatalcs_histoiralfamiliar[".googleLikeFields"][] = "ParineteIgual";
$tdatalcs_histoiralfamiliar[".googleLikeFields"][] = "Ingresado";
$tdatalcs_histoiralfamiliar[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_histoiralfamiliar[".advSearchFields"] = array();
$tdatalcs_histoiralfamiliar[".advSearchFields"][] = "idHistoiralFamiliar";
$tdatalcs_histoiralfamiliar[".advSearchFields"][] = "CQNinio";
$tdatalcs_histoiralfamiliar[".advSearchFields"][] = "FProblematico";
$tdatalcs_histoiralfamiliar[".advSearchFields"][] = "DuermeSolo";
$tdatalcs_histoiralfamiliar[".advSearchFields"][] = "ComparteCuarto";
$tdatalcs_histoiralfamiliar[".advSearchFields"][] = "ParineteIgual";
$tdatalcs_histoiralfamiliar[".advSearchFields"][] = "Ingresado";
$tdatalcs_histoiralfamiliar[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_histoiralfamiliar[".tableType"] = "list";

$tdatalcs_histoiralfamiliar[".printerPageOrientation"] = 0;
$tdatalcs_histoiralfamiliar[".nPrinterPageScale"] = 100;

$tdatalcs_histoiralfamiliar[".nPrinterSplitRecords"] = 40;

$tdatalcs_histoiralfamiliar[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_histoiralfamiliar[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_histoiralfamiliar[".isViewPagePDF"] = true;
$tdatalcs_histoiralfamiliar[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_histoiralfamiliar[".isPrinterPagePDF"] = true;
$tdatalcs_histoiralfamiliar[".nPrinterPagePDFScale"] = 100;


$tdatalcs_histoiralfamiliar[".pageSize"] = 20;

$tdatalcs_histoiralfamiliar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_histoiralfamiliar[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_histoiralfamiliar[".orderindexes"] = array();

$tdatalcs_histoiralfamiliar[".sqlHead"] = "SELECT idHistoiralFamiliar,   CQNinio,   FProblematico,   DuermeSolo,   ComparteCuarto,   ParineteIgual,   Ingresado,   `_idEstudiante`";
$tdatalcs_histoiralfamiliar[".sqlFrom"] = "FROM lcs_histoiralfamiliar";
$tdatalcs_histoiralfamiliar[".sqlWhereExpr"] = "";
$tdatalcs_histoiralfamiliar[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_histoiralfamiliar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_histoiralfamiliar[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_histoiralfamiliar = array();
$tableKeyslcs_histoiralfamiliar[] = "idHistoiralFamiliar";
$tdatalcs_histoiralfamiliar[".Keys"] = $tableKeyslcs_histoiralfamiliar;

$tdatalcs_histoiralfamiliar[".listFields"] = array();
$tdatalcs_histoiralfamiliar[".listFields"][] = "idHistoiralFamiliar";
$tdatalcs_histoiralfamiliar[".listFields"][] = "CQNinio";
$tdatalcs_histoiralfamiliar[".listFields"][] = "FProblematico";
$tdatalcs_histoiralfamiliar[".listFields"][] = "DuermeSolo";
$tdatalcs_histoiralfamiliar[".listFields"][] = "ComparteCuarto";
$tdatalcs_histoiralfamiliar[".listFields"][] = "ParineteIgual";
$tdatalcs_histoiralfamiliar[".listFields"][] = "Ingresado";
$tdatalcs_histoiralfamiliar[".listFields"][] = "_idEstudiante";

$tdatalcs_histoiralfamiliar[".hideMobileList"] = array();


$tdatalcs_histoiralfamiliar[".viewFields"] = array();
$tdatalcs_histoiralfamiliar[".viewFields"][] = "idHistoiralFamiliar";
$tdatalcs_histoiralfamiliar[".viewFields"][] = "CQNinio";
$tdatalcs_histoiralfamiliar[".viewFields"][] = "FProblematico";
$tdatalcs_histoiralfamiliar[".viewFields"][] = "DuermeSolo";
$tdatalcs_histoiralfamiliar[".viewFields"][] = "ComparteCuarto";
$tdatalcs_histoiralfamiliar[".viewFields"][] = "ParineteIgual";
$tdatalcs_histoiralfamiliar[".viewFields"][] = "Ingresado";
$tdatalcs_histoiralfamiliar[".viewFields"][] = "_idEstudiante";

$tdatalcs_histoiralfamiliar[".addFields"] = array();
$tdatalcs_histoiralfamiliar[".addFields"][] = "CQNinio";
$tdatalcs_histoiralfamiliar[".addFields"][] = "FProblematico";
$tdatalcs_histoiralfamiliar[".addFields"][] = "DuermeSolo";
$tdatalcs_histoiralfamiliar[".addFields"][] = "ComparteCuarto";
$tdatalcs_histoiralfamiliar[".addFields"][] = "ParineteIgual";
$tdatalcs_histoiralfamiliar[".addFields"][] = "_idEstudiante";

$tdatalcs_histoiralfamiliar[".inlineAddFields"] = array();

$tdatalcs_histoiralfamiliar[".editFields"] = array();
$tdatalcs_histoiralfamiliar[".editFields"][] = "CQNinio";
$tdatalcs_histoiralfamiliar[".editFields"][] = "FProblematico";
$tdatalcs_histoiralfamiliar[".editFields"][] = "DuermeSolo";
$tdatalcs_histoiralfamiliar[".editFields"][] = "ComparteCuarto";
$tdatalcs_histoiralfamiliar[".editFields"][] = "ParineteIgual";
$tdatalcs_histoiralfamiliar[".editFields"][] = "_idEstudiante";

$tdatalcs_histoiralfamiliar[".inlineEditFields"] = array();

$tdatalcs_histoiralfamiliar[".exportFields"] = array();
$tdatalcs_histoiralfamiliar[".exportFields"][] = "idHistoiralFamiliar";
$tdatalcs_histoiralfamiliar[".exportFields"][] = "CQNinio";
$tdatalcs_histoiralfamiliar[".exportFields"][] = "FProblematico";
$tdatalcs_histoiralfamiliar[".exportFields"][] = "DuermeSolo";
$tdatalcs_histoiralfamiliar[".exportFields"][] = "ComparteCuarto";
$tdatalcs_histoiralfamiliar[".exportFields"][] = "ParineteIgual";
$tdatalcs_histoiralfamiliar[".exportFields"][] = "Ingresado";
$tdatalcs_histoiralfamiliar[".exportFields"][] = "_idEstudiante";

$tdatalcs_histoiralfamiliar[".importFields"] = array();
$tdatalcs_histoiralfamiliar[".importFields"][] = "CQNinio";
$tdatalcs_histoiralfamiliar[".importFields"][] = "FProblematico";
$tdatalcs_histoiralfamiliar[".importFields"][] = "DuermeSolo";
$tdatalcs_histoiralfamiliar[".importFields"][] = "ComparteCuarto";
$tdatalcs_histoiralfamiliar[".importFields"][] = "ParineteIgual";
$tdatalcs_histoiralfamiliar[".importFields"][] = "_idEstudiante";

$tdatalcs_histoiralfamiliar[".printFields"] = array();
$tdatalcs_histoiralfamiliar[".printFields"][] = "idHistoiralFamiliar";
$tdatalcs_histoiralfamiliar[".printFields"][] = "CQNinio";
$tdatalcs_histoiralfamiliar[".printFields"][] = "FProblematico";
$tdatalcs_histoiralfamiliar[".printFields"][] = "DuermeSolo";
$tdatalcs_histoiralfamiliar[".printFields"][] = "ComparteCuarto";
$tdatalcs_histoiralfamiliar[".printFields"][] = "ParineteIgual";
$tdatalcs_histoiralfamiliar[".printFields"][] = "Ingresado";
$tdatalcs_histoiralfamiliar[".printFields"][] = "_idEstudiante";

//	idHistoiralFamiliar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idHistoiralFamiliar";
	$fdata["GoodName"] = "idHistoiralFamiliar";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("lcs_histoiralfamiliar","idHistoiralFamiliar"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idHistoiralFamiliar"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idHistoiralFamiliar";
	
		
		
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

	

	
	$tdatalcs_histoiralfamiliar["idHistoiralFamiliar"] = $fdata;
//	CQNinio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CQNinio";
	$fdata["GoodName"] = "CQNinio";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("lcs_histoiralfamiliar","CQNinio"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CQNinio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CQNinio";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idHistoiralFamiliar";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_histoiralfamiliar["CQNinio"] = $fdata;
//	FProblematico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FProblematico";
	$fdata["GoodName"] = "FProblematico";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("lcs_histoiralfamiliar","FProblematico"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FProblematico"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FProblematico";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idHistoiralFamiliar";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_histoiralfamiliar["FProblematico"] = $fdata;
//	DuermeSolo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DuermeSolo";
	$fdata["GoodName"] = "DuermeSolo";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("lcs_histoiralfamiliar","DuermeSolo"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DuermeSolo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DuermeSolo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idHistoiralFamiliar";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_histoiralfamiliar["DuermeSolo"] = $fdata;
//	ComparteCuarto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ComparteCuarto";
	$fdata["GoodName"] = "ComparteCuarto";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("lcs_histoiralfamiliar","ComparteCuarto"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ComparteCuarto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ComparteCuarto";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idHistoiralFamiliar";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_histoiralfamiliar["ComparteCuarto"] = $fdata;
//	ParineteIgual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ParineteIgual";
	$fdata["GoodName"] = "ParineteIgual";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("lcs_histoiralfamiliar","ParineteIgual"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ParineteIgual"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ParineteIgual";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idHistoiralFamiliar";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_histoiralfamiliar["ParineteIgual"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("lcs_histoiralfamiliar","Ingresado"); 
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

	

	
	$tdatalcs_histoiralfamiliar["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_histoiralfamiliar";
	$fdata["Label"] = GetFieldLabel("lcs_histoiralfamiliar","_idEstudiante"); 
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

	

	
	$tdatalcs_histoiralfamiliar["_idEstudiante"] = $fdata;

	
$tables_data["lcs_histoiralfamiliar"]=&$tdatalcs_histoiralfamiliar;
$field_labels["lcs_histoiralfamiliar"] = &$fieldLabelslcs_histoiralfamiliar;
$fieldToolTips["lcs_histoiralfamiliar"] = &$fieldToolTipslcs_histoiralfamiliar;
$page_titles["lcs_histoiralfamiliar"] = &$pageTitleslcs_histoiralfamiliar;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_histoiralfamiliar"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_histoiralfamiliar"] = array();


	
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
	$masterTablesData["lcs_histoiralfamiliar"][0] = $masterParams;	
				$masterTablesData["lcs_histoiralfamiliar"][0]["masterKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_histoiralfamiliar"][0]["detailKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][0]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_histoiralfamiliar"][1] = $masterParams;	
				$masterTablesData["lcs_histoiralfamiliar"][1]["masterKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_histoiralfamiliar"][1]["detailKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_histoiralfamiliar"][2] = $masterParams;	
				$masterTablesData["lcs_histoiralfamiliar"][2]["masterKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_histoiralfamiliar"][2]["detailKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_histoiralfamiliar"][3] = $masterParams;	
				$masterTablesData["lcs_histoiralfamiliar"][3]["masterKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_histoiralfamiliar"][3]["detailKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_histoiralfamiliar"][4] = $masterParams;	
				$masterTablesData["lcs_histoiralfamiliar"][4]["masterKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_histoiralfamiliar"][4]["detailKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_histoiralfamiliar"][5] = $masterParams;	
				$masterTablesData["lcs_histoiralfamiliar"][5]["masterKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_histoiralfamiliar"][5]["detailKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_histoiralfamiliar"][6] = $masterParams;	
				$masterTablesData["lcs_histoiralfamiliar"][6]["masterKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_histoiralfamiliar"][6]["detailKeys"] = array();
	$masterTablesData["lcs_histoiralfamiliar"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_histoiralfamiliar()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idHistoiralFamiliar,   CQNinio,   FProblematico,   DuermeSolo,   ComparteCuarto,   ParineteIgual,   Ingresado,   `_idEstudiante`";
$proto3["m_strFrom"] = "FROM lcs_histoiralfamiliar";
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
	"m_strName" => "idHistoiralFamiliar",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "lcs_histoiralfamiliar"
));

$proto8["m_sql"] = "idHistoiralFamiliar";
$proto8["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CQNinio",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "lcs_histoiralfamiliar"
));

$proto10["m_sql"] = "CQNinio";
$proto10["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FProblematico",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "lcs_histoiralfamiliar"
));

$proto12["m_sql"] = "FProblematico";
$proto12["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DuermeSolo",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "lcs_histoiralfamiliar"
));

$proto14["m_sql"] = "DuermeSolo";
$proto14["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ComparteCuarto",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "lcs_histoiralfamiliar"
));

$proto16["m_sql"] = "ComparteCuarto";
$proto16["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ParineteIgual",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "lcs_histoiralfamiliar"
));

$proto18["m_sql"] = "ParineteIgual";
$proto18["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "lcs_histoiralfamiliar"
));

$proto20["m_sql"] = "Ingresado";
$proto20["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_histoiralfamiliar",
	"m_srcTableName" => "lcs_histoiralfamiliar"
));

$proto22["m_sql"] = "`_idEstudiante`";
$proto22["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "lcs_histoiralfamiliar";
$proto25["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idHistoiralFamiliar";
$proto25["m_columns"][] = "CQNinio";
$proto25["m_columns"][] = "FProblematico";
$proto25["m_columns"][] = "DuermeSolo";
$proto25["m_columns"][] = "ComparteCuarto";
$proto25["m_columns"][] = "ParineteIgual";
$proto25["m_columns"][] = "Ingresado";
$proto25["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "lcs_histoiralfamiliar";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "lcs_histoiralfamiliar";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="lcs_histoiralfamiliar";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_histoiralfamiliar = createSqlQuery_lcs_histoiralfamiliar();


	
								
	
$tdatalcs_histoiralfamiliar[".sqlquery"] = $queryData_lcs_histoiralfamiliar;

$tableEvents["lcs_histoiralfamiliar"] = new eventsBase;
$tdatalcs_histoiralfamiliar[".hasEvents"] = false;

?>