<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproylucesitasv80_users = array();	
	$tdataproylucesitasv80_users[".truncateText"] = true;
	$tdataproylucesitasv80_users[".NumberOfChars"] = 80; 
	$tdataproylucesitasv80_users[".ShortName"] = "proylucesitasv80_users";
	$tdataproylucesitasv80_users[".OwnerID"] = "";
	$tdataproylucesitasv80_users[".OriginalTable"] = "proylucesitasv80_users";

//	field labels
$fieldLabelsproylucesitasv80_users = array();
$fieldToolTipsproylucesitasv80_users = array();
$pageTitlesproylucesitasv80_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproylucesitasv80_users["Spanish"] = array();
	$fieldToolTipsproylucesitasv80_users["Spanish"] = array();
	$pageTitlesproylucesitasv80_users["Spanish"] = array();
	$fieldLabelsproylucesitasv80_users["Spanish"]["ID"] = "ID";
	$fieldToolTipsproylucesitasv80_users["Spanish"]["ID"] = "";
	$fieldLabelsproylucesitasv80_users["Spanish"]["username"] = "Username";
	$fieldToolTipsproylucesitasv80_users["Spanish"]["username"] = "";
	$fieldLabelsproylucesitasv80_users["Spanish"]["password"] = "Password";
	$fieldToolTipsproylucesitasv80_users["Spanish"]["password"] = "";
	$fieldLabelsproylucesitasv80_users["Spanish"]["email"] = "Email";
	$fieldToolTipsproylucesitasv80_users["Spanish"]["email"] = "";
	$fieldLabelsproylucesitasv80_users["Spanish"]["fullname"] = "Fullname";
	$fieldToolTipsproylucesitasv80_users["Spanish"]["fullname"] = "";
	$fieldLabelsproylucesitasv80_users["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsproylucesitasv80_users["Spanish"]["groupid"] = "";
	$fieldLabelsproylucesitasv80_users["Spanish"]["active"] = "Active";
	$fieldToolTipsproylucesitasv80_users["Spanish"]["active"] = "";
	if (count($fieldToolTipsproylucesitasv80_users["Spanish"]))
		$tdataproylucesitasv80_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproylucesitasv80_users[""] = array();
	$fieldToolTipsproylucesitasv80_users[""] = array();
	$pageTitlesproylucesitasv80_users[""] = array();
	$fieldLabelsproylucesitasv80_users[""]["ID"] = "ID";
	$fieldToolTipsproylucesitasv80_users[""]["ID"] = "";
	$fieldLabelsproylucesitasv80_users[""]["username"] = "Username";
	$fieldToolTipsproylucesitasv80_users[""]["username"] = "";
	$fieldLabelsproylucesitasv80_users[""]["password"] = "Password";
	$fieldToolTipsproylucesitasv80_users[""]["password"] = "";
	$fieldLabelsproylucesitasv80_users[""]["email"] = "Email";
	$fieldToolTipsproylucesitasv80_users[""]["email"] = "";
	$fieldLabelsproylucesitasv80_users[""]["fullname"] = "Fullname";
	$fieldToolTipsproylucesitasv80_users[""]["fullname"] = "";
	$fieldLabelsproylucesitasv80_users[""]["groupid"] = "Groupid";
	$fieldToolTipsproylucesitasv80_users[""]["groupid"] = "";
	$fieldLabelsproylucesitasv80_users[""]["active"] = "Active";
	$fieldToolTipsproylucesitasv80_users[""]["active"] = "";
	if (count($fieldToolTipsproylucesitasv80_users[""]))
		$tdataproylucesitasv80_users[".isUseToolTips"] = true;
}
	
	
	$tdataproylucesitasv80_users[".NCSearch"] = true;



$tdataproylucesitasv80_users[".shortTableName"] = "proylucesitasv80_users";
$tdataproylucesitasv80_users[".nSecOptions"] = 0;
$tdataproylucesitasv80_users[".recsPerRowList"] = 1;
$tdataproylucesitasv80_users[".mainTableOwnerID"] = "";
$tdataproylucesitasv80_users[".moveNext"] = 1;
$tdataproylucesitasv80_users[".nType"] = 0;

$tdataproylucesitasv80_users[".strOriginalTableName"] = "proylucesitasv80_users";




$tdataproylucesitasv80_users[".showAddInPopup"] = false;

$tdataproylucesitasv80_users[".showEditInPopup"] = false;

$tdataproylucesitasv80_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproylucesitasv80_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproylucesitasv80_users[".fieldsForRegister"] = array();
	//Begin register settings
			$tdataproylucesitasv80_users[".fieldsForRegister"] = array();
$tdataproylucesitasv80_users[".fieldsForRegister"][] = "username";
			$tdataproylucesitasv80_users[".fieldsForRegister"][] = "password";
			$tdataproylucesitasv80_users[".fieldsForRegister"][] = "email";
			$tdataproylucesitasv80_users[".fieldsForRegister"][] = "fullname";
/*
$tdataproylucesitasv80_users[".PasswordField"] = "password";
$tdataproylucesitasv80_users[".UserNameField"] = "username";	
*/
//End register settings	

$tdataproylucesitasv80_users[".listAjax"] = false;

	$tdataproylucesitasv80_users[".audit"] = false;

	$tdataproylucesitasv80_users[".locking"] = false;








$tdataproylucesitasv80_users[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataproylucesitasv80_users[".searchSaving"] = false;
//

$tdataproylucesitasv80_users[".showSearchPanel"] = true;
		$tdataproylucesitasv80_users[".flexibleSearch"] = true;		

if (isMobile())
	$tdataproylucesitasv80_users[".isUseAjaxSuggest"] = false;
else 
	$tdataproylucesitasv80_users[".isUseAjaxSuggest"] = true;

$tdataproylucesitasv80_users[".rowHighlite"] = true;



$tdataproylucesitasv80_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproylucesitasv80_users[".isUseTimeForSearch"] = false;





$tdataproylucesitasv80_users[".allSearchFields"] = array();
$tdataproylucesitasv80_users[".filterFields"] = array();
$tdataproylucesitasv80_users[".requiredSearchFields"] = array();

$tdataproylucesitasv80_users[".allSearchFields"][] = "ID";
	$tdataproylucesitasv80_users[".allSearchFields"][] = "username";
	$tdataproylucesitasv80_users[".allSearchFields"][] = "password";
	$tdataproylucesitasv80_users[".allSearchFields"][] = "email";
	$tdataproylucesitasv80_users[".allSearchFields"][] = "fullname";
	$tdataproylucesitasv80_users[".allSearchFields"][] = "groupid";
	$tdataproylucesitasv80_users[".allSearchFields"][] = "active";
	

$tdataproylucesitasv80_users[".googleLikeFields"] = array();
$tdataproylucesitasv80_users[".googleLikeFields"][] = "ID";
$tdataproylucesitasv80_users[".googleLikeFields"][] = "username";
$tdataproylucesitasv80_users[".googleLikeFields"][] = "password";
$tdataproylucesitasv80_users[".googleLikeFields"][] = "email";
$tdataproylucesitasv80_users[".googleLikeFields"][] = "fullname";
$tdataproylucesitasv80_users[".googleLikeFields"][] = "groupid";
$tdataproylucesitasv80_users[".googleLikeFields"][] = "active";


$tdataproylucesitasv80_users[".advSearchFields"] = array();
$tdataproylucesitasv80_users[".advSearchFields"][] = "ID";
$tdataproylucesitasv80_users[".advSearchFields"][] = "username";
$tdataproylucesitasv80_users[".advSearchFields"][] = "password";
$tdataproylucesitasv80_users[".advSearchFields"][] = "email";
$tdataproylucesitasv80_users[".advSearchFields"][] = "fullname";
$tdataproylucesitasv80_users[".advSearchFields"][] = "groupid";
$tdataproylucesitasv80_users[".advSearchFields"][] = "active";

$tdataproylucesitasv80_users[".tableType"] = "list";

$tdataproylucesitasv80_users[".printerPageOrientation"] = 0;
$tdataproylucesitasv80_users[".nPrinterPageScale"] = 100;

$tdataproylucesitasv80_users[".nPrinterSplitRecords"] = 40;

$tdataproylucesitasv80_users[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataproylucesitasv80_users[".pageSize"] = 20;

$tdataproylucesitasv80_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproylucesitasv80_users[".strOrderBy"] = $tstrOrderBy;

$tdataproylucesitasv80_users[".orderindexes"] = array();

$tdataproylucesitasv80_users[".sqlHead"] = "SELECT ID,   username,   password,   email,   fullname,   groupid,   active";
$tdataproylucesitasv80_users[".sqlFrom"] = "FROM proylucesitasv80_users";
$tdataproylucesitasv80_users[".sqlWhereExpr"] = "";
$tdataproylucesitasv80_users[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproylucesitasv80_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproylucesitasv80_users[".arrGroupsPerPage"] = $arrGPP;

$tdataproylucesitasv80_users[".highlightSearchResults"] = true;

$tableKeysproylucesitasv80_users = array();
$tableKeysproylucesitasv80_users[] = "ID";
$tdataproylucesitasv80_users[".Keys"] = $tableKeysproylucesitasv80_users;

$tdataproylucesitasv80_users[".listFields"] = array();
$tdataproylucesitasv80_users[".listFields"][] = "ID";
$tdataproylucesitasv80_users[".listFields"][] = "username";
$tdataproylucesitasv80_users[".listFields"][] = "password";
$tdataproylucesitasv80_users[".listFields"][] = "email";
$tdataproylucesitasv80_users[".listFields"][] = "fullname";
$tdataproylucesitasv80_users[".listFields"][] = "groupid";
$tdataproylucesitasv80_users[".listFields"][] = "active";

$tdataproylucesitasv80_users[".hideMobileList"] = array();


$tdataproylucesitasv80_users[".viewFields"] = array();
$tdataproylucesitasv80_users[".viewFields"][] = "ID";
$tdataproylucesitasv80_users[".viewFields"][] = "username";
$tdataproylucesitasv80_users[".viewFields"][] = "password";
$tdataproylucesitasv80_users[".viewFields"][] = "email";
$tdataproylucesitasv80_users[".viewFields"][] = "fullname";
$tdataproylucesitasv80_users[".viewFields"][] = "groupid";
$tdataproylucesitasv80_users[".viewFields"][] = "active";

$tdataproylucesitasv80_users[".addFields"] = array();
$tdataproylucesitasv80_users[".addFields"][] = "username";
$tdataproylucesitasv80_users[".addFields"][] = "password";
$tdataproylucesitasv80_users[".addFields"][] = "email";
$tdataproylucesitasv80_users[".addFields"][] = "fullname";
$tdataproylucesitasv80_users[".addFields"][] = "groupid";
$tdataproylucesitasv80_users[".addFields"][] = "active";

$tdataproylucesitasv80_users[".inlineAddFields"] = array();
$tdataproylucesitasv80_users[".inlineAddFields"][] = "username";
$tdataproylucesitasv80_users[".inlineAddFields"][] = "password";
$tdataproylucesitasv80_users[".inlineAddFields"][] = "email";
$tdataproylucesitasv80_users[".inlineAddFields"][] = "fullname";
$tdataproylucesitasv80_users[".inlineAddFields"][] = "groupid";
$tdataproylucesitasv80_users[".inlineAddFields"][] = "active";

$tdataproylucesitasv80_users[".editFields"] = array();
$tdataproylucesitasv80_users[".editFields"][] = "username";
$tdataproylucesitasv80_users[".editFields"][] = "password";
$tdataproylucesitasv80_users[".editFields"][] = "email";
$tdataproylucesitasv80_users[".editFields"][] = "fullname";
$tdataproylucesitasv80_users[".editFields"][] = "groupid";
$tdataproylucesitasv80_users[".editFields"][] = "active";

$tdataproylucesitasv80_users[".inlineEditFields"] = array();
$tdataproylucesitasv80_users[".inlineEditFields"][] = "username";
$tdataproylucesitasv80_users[".inlineEditFields"][] = "password";
$tdataproylucesitasv80_users[".inlineEditFields"][] = "email";
$tdataproylucesitasv80_users[".inlineEditFields"][] = "fullname";
$tdataproylucesitasv80_users[".inlineEditFields"][] = "groupid";
$tdataproylucesitasv80_users[".inlineEditFields"][] = "active";

$tdataproylucesitasv80_users[".exportFields"] = array();
$tdataproylucesitasv80_users[".exportFields"][] = "ID";
$tdataproylucesitasv80_users[".exportFields"][] = "username";
$tdataproylucesitasv80_users[".exportFields"][] = "password";
$tdataproylucesitasv80_users[".exportFields"][] = "email";
$tdataproylucesitasv80_users[".exportFields"][] = "fullname";
$tdataproylucesitasv80_users[".exportFields"][] = "groupid";
$tdataproylucesitasv80_users[".exportFields"][] = "active";

$tdataproylucesitasv80_users[".importFields"] = array();
$tdataproylucesitasv80_users[".importFields"][] = "ID";
$tdataproylucesitasv80_users[".importFields"][] = "username";
$tdataproylucesitasv80_users[".importFields"][] = "password";
$tdataproylucesitasv80_users[".importFields"][] = "email";
$tdataproylucesitasv80_users[".importFields"][] = "fullname";
$tdataproylucesitasv80_users[".importFields"][] = "groupid";
$tdataproylucesitasv80_users[".importFields"][] = "active";

$tdataproylucesitasv80_users[".printFields"] = array();
$tdataproylucesitasv80_users[".printFields"][] = "ID";
$tdataproylucesitasv80_users[".printFields"][] = "username";
$tdataproylucesitasv80_users[".printFields"][] = "password";
$tdataproylucesitasv80_users[".printFields"][] = "email";
$tdataproylucesitasv80_users[".printFields"][] = "fullname";
$tdataproylucesitasv80_users[".printFields"][] = "groupid";
$tdataproylucesitasv80_users[".printFields"][] = "active";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "proylucesitasv80_users";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_users","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";
	
		
		
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

	

	
	$tdataproylucesitasv80_users["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "proylucesitasv80_users";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_users","username"); 
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
	
		$fdata["strField"] = "username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";
	
		
		
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
		
		
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataproylucesitasv80_users["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "proylucesitasv80_users";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_users","password"); 
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
	
		$fdata["strField"] = "password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";
	
		
		
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
	
	$edata = array("EditFormat" => "Password");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataproylucesitasv80_users["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "proylucesitasv80_users";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_users","email"); 
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
	
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataproylucesitasv80_users["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "proylucesitasv80_users";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_users","fullname"); 
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
	
		$fdata["strField"] = "fullname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";
	
		
		
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

	

	
	$tdataproylucesitasv80_users["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "proylucesitasv80_users";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_users","groupid"); 
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
	
		$fdata["strField"] = "groupid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";
	
		
		
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

	

	
	$tdataproylucesitasv80_users["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "proylucesitasv80_users";
	$fdata["Label"] = GetFieldLabel("proylucesitasv80_users","active"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "active"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
					//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataproylucesitasv80_users["active"] = $fdata;

	
$tables_data["proylucesitasv80_users"]=&$tdataproylucesitasv80_users;
$field_labels["proylucesitasv80_users"] = &$fieldLabelsproylucesitasv80_users;
$fieldToolTips["proylucesitasv80_users"] = &$fieldToolTipsproylucesitasv80_users;
$page_titles["proylucesitasv80_users"] = &$pageTitlesproylucesitasv80_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["proylucesitasv80_users"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["proylucesitasv80_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_proylucesitasv80_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   username,   password,   email,   fullname,   groupid,   active";
$proto0["m_strFrom"] = "FROM proylucesitasv80_users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "proylucesitasv80_users",
	"m_srcTableName" => "proylucesitasv80_users"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "proylucesitasv80_users";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "proylucesitasv80_users",
	"m_srcTableName" => "proylucesitasv80_users"
));

$proto7["m_sql"] = "username";
$proto7["m_srcTableName"] = "proylucesitasv80_users";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "proylucesitasv80_users",
	"m_srcTableName" => "proylucesitasv80_users"
));

$proto9["m_sql"] = "password";
$proto9["m_srcTableName"] = "proylucesitasv80_users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "proylucesitasv80_users",
	"m_srcTableName" => "proylucesitasv80_users"
));

$proto11["m_sql"] = "email";
$proto11["m_srcTableName"] = "proylucesitasv80_users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "proylucesitasv80_users",
	"m_srcTableName" => "proylucesitasv80_users"
));

$proto13["m_sql"] = "fullname";
$proto13["m_srcTableName"] = "proylucesitasv80_users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "proylucesitasv80_users",
	"m_srcTableName" => "proylucesitasv80_users"
));

$proto15["m_sql"] = "groupid";
$proto15["m_srcTableName"] = "proylucesitasv80_users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "proylucesitasv80_users",
	"m_srcTableName" => "proylucesitasv80_users"
));

$proto17["m_sql"] = "active";
$proto17["m_srcTableName"] = "proylucesitasv80_users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "proylucesitasv80_users";
$proto20["m_srcTableName"] = "proylucesitasv80_users";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "username";
$proto20["m_columns"][] = "password";
$proto20["m_columns"][] = "email";
$proto20["m_columns"][] = "fullname";
$proto20["m_columns"][] = "groupid";
$proto20["m_columns"][] = "active";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "proylucesitasv80_users";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "proylucesitasv80_users";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="proylucesitasv80_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_proylucesitasv80_users = createSqlQuery_proylucesitasv80_users();


	
							
	
$tdataproylucesitasv80_users[".sqlquery"] = $queryData_proylucesitasv80_users;

$tableEvents["proylucesitasv80_users"] = new eventsBase;
$tdataproylucesitasv80_users[".hasEvents"] = false;

?>