<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_userslogin = array();	
	$tdatalcs_userslogin[".truncateText"] = true;
	$tdatalcs_userslogin[".NumberOfChars"] = 80; 
	$tdatalcs_userslogin[".ShortName"] = "lcs_userslogin";
	$tdatalcs_userslogin[".OwnerID"] = "";
	$tdatalcs_userslogin[".OriginalTable"] = "lcs_userslogin";

//	field labels
$fieldLabelslcs_userslogin = array();
$fieldToolTipslcs_userslogin = array();
$pageTitleslcs_userslogin = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_userslogin["Spanish"] = array();
	$fieldToolTipslcs_userslogin["Spanish"] = array();
	$pageTitleslcs_userslogin["Spanish"] = array();
	$fieldLabelslcs_userslogin["Spanish"]["ID"] = "ID";
	$fieldToolTipslcs_userslogin["Spanish"]["ID"] = "";
	$fieldLabelslcs_userslogin["Spanish"]["username"] = "Username";
	$fieldToolTipslcs_userslogin["Spanish"]["username"] = "";
	$fieldLabelslcs_userslogin["Spanish"]["password"] = "Password";
	$fieldToolTipslcs_userslogin["Spanish"]["password"] = "";
	$fieldLabelslcs_userslogin["Spanish"]["email"] = "Email";
	$fieldToolTipslcs_userslogin["Spanish"]["email"] = "";
	$fieldLabelslcs_userslogin["Spanish"]["fullname"] = "Fullname";
	$fieldToolTipslcs_userslogin["Spanish"]["fullname"] = "";
	$fieldLabelslcs_userslogin["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipslcs_userslogin["Spanish"]["groupid"] = "";
	$fieldLabelslcs_userslogin["Spanish"]["active"] = "Active";
	$fieldToolTipslcs_userslogin["Spanish"]["active"] = "";
	$pageTitleslcs_userslogin["Spanish"]["edit"] = "Userslogin, Editar registro [ID:{%ID}]";
	$pageTitleslcs_userslogin["Spanish"]["add"] = "Userslogin, Añadir nuevo registro";
	if (count($fieldToolTipslcs_userslogin["Spanish"]))
		$tdatalcs_userslogin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_userslogin[""] = array();
	$fieldToolTipslcs_userslogin[""] = array();
	$pageTitleslcs_userslogin[""] = array();
	$fieldLabelslcs_userslogin[""]["ID"] = "ID";
	$fieldToolTipslcs_userslogin[""]["ID"] = "";
	$fieldLabelslcs_userslogin[""]["username"] = "Username";
	$fieldToolTipslcs_userslogin[""]["username"] = "";
	$fieldLabelslcs_userslogin[""]["password"] = "Password";
	$fieldToolTipslcs_userslogin[""]["password"] = "";
	$fieldLabelslcs_userslogin[""]["email"] = "Email";
	$fieldToolTipslcs_userslogin[""]["email"] = "";
	$fieldLabelslcs_userslogin[""]["fullname"] = "Fullname";
	$fieldToolTipslcs_userslogin[""]["fullname"] = "";
	$fieldLabelslcs_userslogin[""]["groupid"] = "Groupid";
	$fieldToolTipslcs_userslogin[""]["groupid"] = "";
	$fieldLabelslcs_userslogin[""]["active"] = "Active";
	$fieldToolTipslcs_userslogin[""]["active"] = "";
	if (count($fieldToolTipslcs_userslogin[""]))
		$tdatalcs_userslogin[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_userslogin[".NCSearch"] = true;



$tdatalcs_userslogin[".shortTableName"] = "lcs_userslogin";
$tdatalcs_userslogin[".nSecOptions"] = 0;
$tdatalcs_userslogin[".recsPerRowList"] = 1;
$tdatalcs_userslogin[".mainTableOwnerID"] = "";
$tdatalcs_userslogin[".moveNext"] = 1;
$tdatalcs_userslogin[".nType"] = 0;

$tdatalcs_userslogin[".strOriginalTableName"] = "lcs_userslogin";




$tdatalcs_userslogin[".showAddInPopup"] = true;

$tdatalcs_userslogin[".showEditInPopup"] = true;

$tdatalcs_userslogin[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_userslogin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_userslogin[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_userslogin[".listAjax"] = true;
else 
	$tdatalcs_userslogin[".listAjax"] = false;

	$tdatalcs_userslogin[".audit"] = false;

	$tdatalcs_userslogin[".locking"] = false;

$tdatalcs_userslogin[".edit"] = true;

$tdatalcs_userslogin[".list"] = true;

$tdatalcs_userslogin[".view"] = true;

$tdatalcs_userslogin[".import"] = true;

$tdatalcs_userslogin[".exportTo"] = true;

$tdatalcs_userslogin[".printFriendly"] = true;

$tdatalcs_userslogin[".delete"] = true;

$tdatalcs_userslogin[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_userslogin[".searchSaving"] = false;
//

$tdatalcs_userslogin[".showSearchPanel"] = true;
		$tdatalcs_userslogin[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_userslogin[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_userslogin[".isUseAjaxSuggest"] = true;

$tdatalcs_userslogin[".rowHighlite"] = true;



$tdatalcs_userslogin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_userslogin[".isUseTimeForSearch"] = false;





$tdatalcs_userslogin[".allSearchFields"] = array();
$tdatalcs_userslogin[".filterFields"] = array();
$tdatalcs_userslogin[".requiredSearchFields"] = array();

$tdatalcs_userslogin[".allSearchFields"][] = "ID";
	$tdatalcs_userslogin[".allSearchFields"][] = "username";
	$tdatalcs_userslogin[".allSearchFields"][] = "email";
	$tdatalcs_userslogin[".allSearchFields"][] = "fullname";
	$tdatalcs_userslogin[".allSearchFields"][] = "groupid";
	$tdatalcs_userslogin[".allSearchFields"][] = "active";
	

$tdatalcs_userslogin[".googleLikeFields"] = array();
$tdatalcs_userslogin[".googleLikeFields"][] = "ID";
$tdatalcs_userslogin[".googleLikeFields"][] = "username";
$tdatalcs_userslogin[".googleLikeFields"][] = "password";
$tdatalcs_userslogin[".googleLikeFields"][] = "email";
$tdatalcs_userslogin[".googleLikeFields"][] = "fullname";
$tdatalcs_userslogin[".googleLikeFields"][] = "groupid";
$tdatalcs_userslogin[".googleLikeFields"][] = "active";


$tdatalcs_userslogin[".advSearchFields"] = array();
$tdatalcs_userslogin[".advSearchFields"][] = "ID";
$tdatalcs_userslogin[".advSearchFields"][] = "username";
$tdatalcs_userslogin[".advSearchFields"][] = "email";
$tdatalcs_userslogin[".advSearchFields"][] = "fullname";
$tdatalcs_userslogin[".advSearchFields"][] = "groupid";
$tdatalcs_userslogin[".advSearchFields"][] = "active";

$tdatalcs_userslogin[".tableType"] = "list";

$tdatalcs_userslogin[".printerPageOrientation"] = 0;
$tdatalcs_userslogin[".nPrinterPageScale"] = 100;

$tdatalcs_userslogin[".nPrinterSplitRecords"] = 40;

$tdatalcs_userslogin[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_userslogin[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatalcs_userslogin[".pageSize"] = 20;

$tdatalcs_userslogin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_userslogin[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_userslogin[".orderindexes"] = array();

$tdatalcs_userslogin[".sqlHead"] = "SELECT ID,   username,   password,   email,   fullname,   groupid,   active";
$tdatalcs_userslogin[".sqlFrom"] = "FROM lcs_userslogin";
$tdatalcs_userslogin[".sqlWhereExpr"] = "";
$tdatalcs_userslogin[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_userslogin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_userslogin[".arrGroupsPerPage"] = $arrGPP;

$tdatalcs_userslogin[".highlightSearchResults"] = true;

$tableKeyslcs_userslogin = array();
$tableKeyslcs_userslogin[] = "ID";
$tdatalcs_userslogin[".Keys"] = $tableKeyslcs_userslogin;

$tdatalcs_userslogin[".listFields"] = array();
$tdatalcs_userslogin[".listFields"][] = "ID";
$tdatalcs_userslogin[".listFields"][] = "username";
$tdatalcs_userslogin[".listFields"][] = "email";
$tdatalcs_userslogin[".listFields"][] = "fullname";
$tdatalcs_userslogin[".listFields"][] = "groupid";
$tdatalcs_userslogin[".listFields"][] = "active";

$tdatalcs_userslogin[".hideMobileList"] = array();


$tdatalcs_userslogin[".viewFields"] = array();
$tdatalcs_userslogin[".viewFields"][] = "ID";
$tdatalcs_userslogin[".viewFields"][] = "username";
$tdatalcs_userslogin[".viewFields"][] = "email";
$tdatalcs_userslogin[".viewFields"][] = "fullname";
$tdatalcs_userslogin[".viewFields"][] = "groupid";
$tdatalcs_userslogin[".viewFields"][] = "active";

$tdatalcs_userslogin[".addFields"] = array();
$tdatalcs_userslogin[".addFields"][] = "username";
$tdatalcs_userslogin[".addFields"][] = "password";
$tdatalcs_userslogin[".addFields"][] = "email";
$tdatalcs_userslogin[".addFields"][] = "fullname";
$tdatalcs_userslogin[".addFields"][] = "groupid";
$tdatalcs_userslogin[".addFields"][] = "active";

$tdatalcs_userslogin[".inlineAddFields"] = array();

$tdatalcs_userslogin[".editFields"] = array();
$tdatalcs_userslogin[".editFields"][] = "username";
$tdatalcs_userslogin[".editFields"][] = "password";
$tdatalcs_userslogin[".editFields"][] = "email";
$tdatalcs_userslogin[".editFields"][] = "fullname";
$tdatalcs_userslogin[".editFields"][] = "groupid";
$tdatalcs_userslogin[".editFields"][] = "active";

$tdatalcs_userslogin[".inlineEditFields"] = array();

$tdatalcs_userslogin[".exportFields"] = array();
$tdatalcs_userslogin[".exportFields"][] = "ID";
$tdatalcs_userslogin[".exportFields"][] = "username";
$tdatalcs_userslogin[".exportFields"][] = "email";
$tdatalcs_userslogin[".exportFields"][] = "fullname";
$tdatalcs_userslogin[".exportFields"][] = "groupid";
$tdatalcs_userslogin[".exportFields"][] = "active";

$tdatalcs_userslogin[".importFields"] = array();
$tdatalcs_userslogin[".importFields"][] = "username";
$tdatalcs_userslogin[".importFields"][] = "email";
$tdatalcs_userslogin[".importFields"][] = "fullname";
$tdatalcs_userslogin[".importFields"][] = "groupid";
$tdatalcs_userslogin[".importFields"][] = "active";

$tdatalcs_userslogin[".printFields"] = array();
$tdatalcs_userslogin[".printFields"][] = "ID";
$tdatalcs_userslogin[".printFields"][] = "username";
$tdatalcs_userslogin[".printFields"][] = "email";
$tdatalcs_userslogin[".printFields"][] = "fullname";
$tdatalcs_userslogin[".printFields"][] = "groupid";
$tdatalcs_userslogin[".printFields"][] = "active";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "lcs_userslogin";
	$fdata["Label"] = GetFieldLabel("lcs_userslogin","ID"); 
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

	

	
	$tdatalcs_userslogin["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "lcs_userslogin";
	$fdata["Label"] = GetFieldLabel("lcs_userslogin","username"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_userslogin["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "lcs_userslogin";
	$fdata["Label"] = GetFieldLabel("lcs_userslogin","password"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatalcs_userslogin["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "lcs_userslogin";
	$fdata["Label"] = GetFieldLabel("lcs_userslogin","email"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_userslogin["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "lcs_userslogin";
	$fdata["Label"] = GetFieldLabel("lcs_userslogin","fullname"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatalcs_userslogin["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "lcs_userslogin";
	$fdata["Label"] = GetFieldLabel("lcs_userslogin","groupid"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "admin";
	$edata["LookupValues"][] = "registrador";
	$edata["LookupValues"][] = "voluntario";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_userslogin["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "lcs_userslogin";
	$fdata["Label"] = GetFieldLabel("lcs_userslogin","active"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatalcs_userslogin["active"] = $fdata;

	
$tables_data["lcs_userslogin"]=&$tdatalcs_userslogin;
$field_labels["lcs_userslogin"] = &$fieldLabelslcs_userslogin;
$fieldToolTips["lcs_userslogin"] = &$fieldToolTipslcs_userslogin;
$page_titles["lcs_userslogin"] = &$pageTitleslcs_userslogin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_userslogin"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_userslogin"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_userslogin()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,   username,   password,   email,   fullname,   groupid,   active";
$proto3["m_strFrom"] = "FROM lcs_userslogin";
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
	"m_strName" => "ID",
	"m_strTable" => "lcs_userslogin",
	"m_srcTableName" => "lcs_userslogin"
));

$proto8["m_sql"] = "ID";
$proto8["m_srcTableName"] = "lcs_userslogin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "lcs_userslogin",
	"m_srcTableName" => "lcs_userslogin"
));

$proto10["m_sql"] = "username";
$proto10["m_srcTableName"] = "lcs_userslogin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "lcs_userslogin",
	"m_srcTableName" => "lcs_userslogin"
));

$proto12["m_sql"] = "password";
$proto12["m_srcTableName"] = "lcs_userslogin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "lcs_userslogin",
	"m_srcTableName" => "lcs_userslogin"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "lcs_userslogin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "lcs_userslogin",
	"m_srcTableName" => "lcs_userslogin"
));

$proto16["m_sql"] = "fullname";
$proto16["m_srcTableName"] = "lcs_userslogin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "lcs_userslogin",
	"m_srcTableName" => "lcs_userslogin"
));

$proto18["m_sql"] = "groupid";
$proto18["m_srcTableName"] = "lcs_userslogin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "lcs_userslogin",
	"m_srcTableName" => "lcs_userslogin"
));

$proto20["m_sql"] = "active";
$proto20["m_srcTableName"] = "lcs_userslogin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "lcs_userslogin";
$proto23["m_srcTableName"] = "lcs_userslogin";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "lcs_userslogin";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "lcs_userslogin";
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
$proto3["m_srcTableName"]="lcs_userslogin";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_userslogin = createSqlQuery_lcs_userslogin();


	
							
	
$tdatalcs_userslogin[".sqlquery"] = $queryData_lcs_userslogin;

$tableEvents["lcs_userslogin"] = new eventsBase;
$tdatalcs_userslogin[".hasEvents"] = false;

?>