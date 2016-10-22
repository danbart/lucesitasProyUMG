<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproylucesitasv80_audit = array();	
	$tdataproylucesitasv80_audit[".truncateText"] = true;
	$tdataproylucesitasv80_audit[".NumberOfChars"] = 80; 
	$tdataproylucesitasv80_audit[".ShortName"] = "proylucesitasv80_audit";
	$tdataproylucesitasv80_audit[".OwnerID"] = "";
	$tdataproylucesitasv80_audit[".OriginalTable"] = "proylucesitasv80_audit";

//	field labels
$fieldLabelsproylucesitasv80_audit = array();
$fieldToolTipsproylucesitasv80_audit = array();
$pageTitlesproylucesitasv80_audit = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproylucesitasv80_audit["Spanish"] = array();
	$fieldToolTipsproylucesitasv80_audit["Spanish"] = array();
	$pageTitlesproylucesitasv80_audit["Spanish"] = array();
	$fieldLabelsproylucesitasv80_audit["Spanish"]["id"] = "Id";
	$fieldToolTipsproylucesitasv80_audit["Spanish"]["id"] = "";
	$fieldLabelsproylucesitasv80_audit["Spanish"]["datetime"] = "Datetime";
	$fieldToolTipsproylucesitasv80_audit["Spanish"]["datetime"] = "";
	$fieldLabelsproylucesitasv80_audit["Spanish"]["ip"] = "Ip";
	$fieldToolTipsproylucesitasv80_audit["Spanish"]["ip"] = "";
	$fieldLabelsproylucesitasv80_audit["Spanish"]["user"] = "User";
	$fieldToolTipsproylucesitasv80_audit["Spanish"]["user"] = "";
	$fieldLabelsproylucesitasv80_audit["Spanish"]["table"] = "Table";
	$fieldToolTipsproylucesitasv80_audit["Spanish"]["table"] = "";
	$fieldLabelsproylucesitasv80_audit["Spanish"]["action"] = "Action";
	$fieldToolTipsproylucesitasv80_audit["Spanish"]["action"] = "";
	$fieldLabelsproylucesitasv80_audit["Spanish"]["description"] = "Description";
	$fieldToolTipsproylucesitasv80_audit["Spanish"]["description"] = "";
	if (count($fieldToolTipsproylucesitasv80_audit["Spanish"]))
		$tdataproylucesitasv80_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproylucesitasv80_audit[""] = array();
	$fieldToolTipsproylucesitasv80_audit[""] = array();
	$pageTitlesproylucesitasv80_audit[""] = array();
	$fieldLabelsproylucesitasv80_audit[""]["id"] = "Id";
	$fieldToolTipsproylucesitasv80_audit[""]["id"] = "";
	$fieldLabelsproylucesitasv80_audit[""]["datetime"] = "Datetime";
	$fieldToolTipsproylucesitasv80_audit[""]["datetime"] = "";
	$fieldLabelsproylucesitasv80_audit[""]["ip"] = "Ip";
	$fieldToolTipsproylucesitasv80_audit[""]["ip"] = "";
	$fieldLabelsproylucesitasv80_audit[""]["user"] = "User";
	$fieldToolTipsproylucesitasv80_audit[""]["user"] = "";
	$fieldLabelsproylucesitasv80_audit[""]["table"] = "Table";
	$fieldToolTipsproylucesitasv80_audit[""]["table"] = "";
	$fieldLabelsproylucesitasv80_audit[""]["action"] = "Action";
	$fieldToolTipsproylucesitasv80_audit[""]["action"] = "";
	$fieldLabelsproylucesitasv80_audit[""]["description"] = "Description";
	$fieldToolTipsproylucesitasv80_audit[""]["description"] = "";
	if (count($fieldToolTipsproylucesitasv80_audit[""]))
		$tdataproylucesitasv80_audit[".isUseToolTips"] = true;
}
	
	
	$tdataproylucesitasv80_audit[".NCSearch"] = true;



$tdataproylucesitasv80_audit[".shortTableName"] = "proylucesitasv80_audit";
$tdataproylucesitasv80_audit[".nSecOptions"] = 0;
$tdataproylucesitasv80_audit[".recsPerRowList"] = 1;
$tdataproylucesitasv80_audit[".mainTableOwnerID"] = "";
$tdataproylucesitasv80_audit[".moveNext"] = 1;
$tdataproylucesitasv80_audit[".nType"] = 0;

$tdataproylucesitasv80_audit[".strOriginalTableName"] = "proylucesitasv80_audit";




$tdataproylucesitasv80_audit[".showAddInPopup"] = true;

$tdataproylucesitasv80_audit[".showEditInPopup"] = true;

$tdataproylucesitasv80_audit[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdataproylucesitasv80_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproylucesitasv80_audit[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataproylucesitasv80_audit[".listAjax"] = true;
else 
	$tdataproylucesitasv80_audit[".listAjax"] = false;

	$tdataproylucesitasv80_audit[".audit"] = false;

	$tdataproylucesitasv80_audit[".locking"] = false;

$tdataproylucesitasv80_audit[".edit"] = true;

$tdataproylucesitasv80_audit[".list"] = true;

$tdataproylucesitasv80_audit[".view"] = true;

$tdataproylucesitasv80_audit[".import"] = true;

$tdataproylucesitasv80_audit[".exportTo"] = true;

$tdataproylucesitasv80_audit[".printFriendly"] = true;

$tdataproylucesitasv80_audit[".delete"] = true;

$tdataproylucesitasv80_audit[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataproylucesitasv80_audit[".searchSaving"] = false;
//

$tdataproylucesitasv80_audit[".showSearchPanel"] = true;
		$tdataproylucesitasv80_audit[".flexibleSearch"] = true;		

if (isMobile())
	$tdataproylucesitasv80_audit[".isUseAjaxSuggest"] = false;
else 
	$tdataproylucesitasv80_audit[".isUseAjaxSuggest"] = true;

$tdataproylucesitasv80_audit[".rowHighlite"] = true;



$tdataproylucesitasv80_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproylucesitasv80_audit[".isUseTimeForSearch"] = false;





$tdataproylucesitasv80_audit[".allSearchFields"] = array();
$tdataproylucesitasv80_audit[".filterFields"] = array();
$tdataproylucesitasv80_audit[".requiredSearchFields"] = array();

$tdataproylucesitasv80_audit[".allSearchFields"][] = "id";
	$tdataproylucesitasv80_audit[".allSearchFields"][] = "datetime";
	$tdataproylucesitasv80_audit[".allSearchFields"][] = "ip";
	$tdataproylucesitasv80_audit[".allSearchFields"][] = "user";
	$tdataproylucesitasv80_audit[".allSearchFields"][] = "table";
	$tdataproylucesitasv80_audit[".allSearchFields"][] = "action";
	$tdataproylucesitasv80_audit[".allSearchFields"][] = "description";
	

$tdataproylucesitasv80_audit[".googleLikeFields"] = array();
$tdataproylucesitasv80_audit[".googleLikeFields"][] = "id";
$tdataproylucesitasv80_audit[".googleLikeFields"][] = "datetime";
$tdataproylucesitasv80_audit[".googleLikeFields"][] = "ip";
$tdataproylucesitasv80_audit[".googleLikeFields"][] = "user";
$tdataproylucesitasv80_audit[".googleLikeFields"][] = "table";
$tdataproylucesitasv80_audit[".googleLikeFields"][] = "action";
$tdataproylucesitasv80_audit[".googleLikeFields"][] = "description";


$tdataproylucesitasv80_audit[".advSearchFields"] = array();
$tdataproylucesitasv80_audit[".advSearchFields"][] = "id";
$tdataproylucesitasv80_audit[".advSearchFields"][] = "datetime";
$tdataproylucesitasv80_audit[".advSearchFields"][] = "ip";
$tdataproylucesitasv80_audit[".advSearchFields"][] = "user";
$tdataproylucesitasv80_audit[".advSearchFields"][] = "table";
$tdataproylucesitasv80_audit[".advSearchFields"][] = "action";
$tdataproylucesitasv80_audit[".advSearchFields"][] = "description";

$tdataproylucesitasv80_audit[".tableType"] = "list";

$tdataproylucesitasv80_audit[".printerPageOrientation"] = 0;
$tdataproylucesitasv80_audit[".nPrinterPageScale"] = 100;

$tdataproylucesitasv80_audit[".nPrinterSplitRecords"] = 40;

$tdataproylucesitasv80_audit[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataproylucesitasv80_audit[".pageSize"] = 20;

$tdataproylucesitasv80_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproylucesitasv80_audit[".strOrderBy"] = $tstrOrderBy;

$tdataproylucesitasv80_audit[".orderindexes"] = array();

$tdataproylucesitasv80_audit[".sqlHead"] = "SELECT id,   `datetime`,   ip,   `user`,   `table`,   `action`,   description";
$tdataproylucesitasv80_audit[".sqlFrom"] = "FROM proylucesitasv80_audit";
$tdataproylucesitasv80_audit[".sqlWhereExpr"] = "";
$tdataproylucesitasv80_audit[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproylucesitasv80_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproylucesitasv80_audit[".arrGroupsPerPage"] = $arrGPP;

$tdataproylucesitasv80_audit[".highlightSearchResults"] = true;

$tableKeysproylucesitasv80_audit = array();
$tableKeysproylucesitasv80_audit[] = "id";
$tdataproylucesitasv80_audit[".Keys"] = $tableKeysproylucesitasv80_audit;

$tdataproylucesitasv80_audit[".listFields"] = array();
$tdataproylucesitasv80_audit[".listFields"][] = "id";
$tdataproylucesitasv80_audit[".listFields"][] = "datetime";
$tdataproylucesitasv80_audit[".listFields"][] = "ip";
$tdataproylucesitasv80_audit[".listFields"][] = "user";
$tdataproylucesitasv80_audit[".listFields"][] = "table";
$tdataproylucesitasv80_audit[".listFields"][] = "action";
$tdataproylucesitasv80_audit[".listFields"][] = "description";

$tdataproylucesitasv80_audit[".hideMobileList"] = array();


$tdataproylucesitasv80_audit[".viewFields"] = array();
$tdataproylucesitasv80_audit[".viewFields"][] = "id";
$tdataproylucesitasv80_audit[".viewFields"][] = "datetime";
$tdataproylucesitasv80_audit[".viewFields"][] = "ip";
$tdataproylucesitasv80_audit[".viewFields"][] = "user";
$tdataproylucesitasv80_audit[".viewFields"][] = "table";
$tdataproylucesitasv80_audit[".viewFields"][] = "action";
$tdataproylucesitasv80_audit[".viewFields"][] = "description";

$tdataproylucesitasv80_audit[".addFields"] = array();
$tdataproylucesitasv80_audit[".addFields"][] = "datetime";
$tdataproylucesitasv80_audit[".addFields"][] = "ip";
$tdataproylucesitasv80_audit[".addFields"][] = "user";
$tdataproylucesitasv80_audit[".addFields"][] = "table";
$tdataproylucesitasv80_audit[".addFields"][] = "action";
$tdataproylucesitasv80_audit[".addFields"][] = "description";

$tdataproylucesitasv80_audit[".inlineAddFields"] = array();
$tdataproylucesitasv80_audit[".inlineAddFields"][] = "datetime";
$tdataproylucesitasv80_audit[".inlineAddFields"][] = "ip";
$tdataproylucesitasv80_audit[".inlineAddFields"][] = "user";
$tdataproylucesitasv80_audit[".inlineAddFields"][] = "table";
$tdataproylucesitasv80_audit[".inlineAddFields"][] = "action";
$tdataproylucesitasv80_audit[".inlineAddFields"][] = "description";

$tdataproylucesitasv80_audit[".editFields"] = array();
$tdataproylucesitasv80_audit[".editFields"][] = "datetime";
$tdataproylucesitasv80_audit[".editFields"][] = "ip";
$tdataproylucesitasv80_audit[".editFields"][] = "user";
$tdataproylucesitasv80_audit[".editFields"][] = "table";
$tdataproylucesitasv80_audit[".editFields"][] = "action";
$tdataproylucesitasv80_audit[".editFields"][] = "description";

$tdataproylucesitasv80_audit[".inlineEditFields"] = array();
$tdataproylucesitasv80_audit[".inlineEditFields"][] = "datetime";
$tdataproylucesitasv80_audit[".inlineEditFields"][] = "ip";
$tdataproylucesitasv80_audit[".inlineEditFields"][] = "user";
$tdataproylucesitasv80_audit[".inlineEditFields"][] = "table";
$tdataproylucesitasv80_audit[".inlineEditFields"][] = "action";
$tdataproylucesitasv80_audit[".inlineEditFields"][] = "description";

$tdataproylucesitasv80_audit[".exportFields"] = array();
$tdataproylucesitasv80_audit[".exportFields"][] = "id";
$tdataproylucesitasv80_audit[".exportFields"][] = "datetime";
$tdataproylucesitasv80_audit[".exportFields"][] = "ip";
$tdataproylucesitasv80_audit[".exportFields"][] = "user";
$tdataproylucesitasv80_audit[".exportFields"][] = "table";
$tdataproylucesitasv80_audit[".exportFields"][] = "action";
$tdataproylucesitasv80_audit[".exportFields"][] = "description";

$tdataproylucesitasv80_audit[".importFields"] = array();
$tdataproylucesitasv80_audit[".importFields"][] = "datetime";
$tdataproylucesitasv80_audit[".importFields"][] = "ip";
$tdataproylucesitasv80_audit[".importFields"][] = "user";
$tdataproylucesitasv80_audit[".importFields"][] = "table";
$tdataproylucesitasv80_audit[".importFields"][] = "action";
$tdataproylucesitasv80_audit[".importFields"][] = "description";

$tdataproylucesitasv80_audit[".printFields"] = array();
$tdataproylucesitasv80_audit[".printFields"][] = "id";
$tdataproylucesitasv80_audit[".printFields"][] = "datetime";
$tdataproylucesitasv80_audit[".printFields"][] = "ip";
$tdataproylucesitasv80_audit[".printFields"][] = "user";
$tdataproylucesitasv80_audit[".printFields"][] = "table";
$tdataproylucesitasv80_audit[".printFields"][] = "action";
$tdataproylucesitasv80_audit[".printFields"][] = "description";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "proylucesitasv80_audit";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_audit","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
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

	

	
	$tdataproylucesitasv80_audit["id"] = $fdata;
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "proylucesitasv80_audit";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_audit","datetime"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "datetime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";
	
		
		
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
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataproylucesitasv80_audit["datetime"] = $fdata;
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "proylucesitasv80_audit";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_audit","ip"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";
	
		
		
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
			$edata["EditParams"].= " maxlength=40";
	
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

	

	
	$tdataproylucesitasv80_audit["ip"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "proylucesitasv80_audit";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_audit","user"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";
	
		
		
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
			$edata["EditParams"].= " maxlength=300";
	
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

	

	
	$tdataproylucesitasv80_audit["user"] = $fdata;
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "proylucesitasv80_audit";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_audit","table"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "table"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";
	
		
		
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
			$edata["EditParams"].= " maxlength=300";
	
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

	

	
	$tdataproylucesitasv80_audit["table"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "proylucesitasv80_audit";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_audit","action"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "action"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdataproylucesitasv80_audit["action"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "proylucesitasv80_audit";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_audit","description"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "description"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdataproylucesitasv80_audit["description"] = $fdata;

	
$tables_data["proylucesitasv80_audit"]=&$tdataproylucesitasv80_audit;
$field_labels["proylucesitasv80_audit"] = &$fieldLabelsproylucesitasv80_audit;
$fieldToolTips["proylucesitasv80_audit"] = &$fieldToolTipsproylucesitasv80_audit;
$page_titles["proylucesitasv80_audit"] = &$pageTitlesproylucesitasv80_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["proylucesitasv80_audit"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["proylucesitasv80_audit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_proylucesitasv80_audit()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "id,   `datetime`,   ip,   `user`,   `table`,   `action`,   description";
$proto3["m_strFrom"] = "FROM proylucesitasv80_audit";
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
	"m_strName" => "id",
	"m_strTable" => "proylucesitasv80_audit",
	"m_srcTableName" => "proylucesitasv80_audit"
));

$proto8["m_sql"] = "id";
$proto8["m_srcTableName"] = "proylucesitasv80_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "proylucesitasv80_audit",
	"m_srcTableName" => "proylucesitasv80_audit"
));

$proto10["m_sql"] = "`datetime`";
$proto10["m_srcTableName"] = "proylucesitasv80_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "proylucesitasv80_audit",
	"m_srcTableName" => "proylucesitasv80_audit"
));

$proto12["m_sql"] = "ip";
$proto12["m_srcTableName"] = "proylucesitasv80_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "proylucesitasv80_audit",
	"m_srcTableName" => "proylucesitasv80_audit"
));

$proto14["m_sql"] = "`user`";
$proto14["m_srcTableName"] = "proylucesitasv80_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "proylucesitasv80_audit",
	"m_srcTableName" => "proylucesitasv80_audit"
));

$proto16["m_sql"] = "`table`";
$proto16["m_srcTableName"] = "proylucesitasv80_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "proylucesitasv80_audit",
	"m_srcTableName" => "proylucesitasv80_audit"
));

$proto18["m_sql"] = "`action`";
$proto18["m_srcTableName"] = "proylucesitasv80_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "proylucesitasv80_audit",
	"m_srcTableName" => "proylucesitasv80_audit"
));

$proto20["m_sql"] = "description";
$proto20["m_srcTableName"] = "proylucesitasv80_audit";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "proylucesitasv80_audit";
$proto23["m_srcTableName"] = "proylucesitasv80_audit";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "datetime";
$proto23["m_columns"][] = "ip";
$proto23["m_columns"][] = "user";
$proto23["m_columns"][] = "table";
$proto23["m_columns"][] = "action";
$proto23["m_columns"][] = "description";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "proylucesitasv80_audit";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "proylucesitasv80_audit";
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
$proto3["m_srcTableName"]="proylucesitasv80_audit";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_proylucesitasv80_audit = createSqlQuery_proylucesitasv80_audit();


	
							
	
$tdataproylucesitasv80_audit[".sqlquery"] = $queryData_proylucesitasv80_audit;

$tableEvents["proylucesitasv80_audit"] = new eventsBase;
$tdataproylucesitasv80_audit[".hasEvents"] = false;

?>