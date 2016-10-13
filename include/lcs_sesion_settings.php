<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_sesion = array();	
	$tdatalcs_sesion[".truncateText"] = true;
	$tdatalcs_sesion[".NumberOfChars"] = 80; 
	$tdatalcs_sesion[".ShortName"] = "lcs_sesion";
	$tdatalcs_sesion[".OwnerID"] = "";
	$tdatalcs_sesion[".OriginalTable"] = "lcs_sesion";

//	field labels
$fieldLabelslcs_sesion = array();
$fieldToolTipslcs_sesion = array();
$pageTitleslcs_sesion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_sesion["Spanish"] = array();
	$fieldToolTipslcs_sesion["Spanish"] = array();
	$pageTitleslcs_sesion["Spanish"] = array();
	$fieldLabelslcs_sesion["Spanish"]["idSesion"] = "No.";
	$fieldToolTipslcs_sesion["Spanish"]["idSesion"] = "";
	$fieldLabelslcs_sesion["Spanish"]["Ingreso"] = "Ingreso";
	$fieldToolTipslcs_sesion["Spanish"]["Ingreso"] = "";
	$fieldLabelslcs_sesion["Spanish"]["salio"] = "Salio";
	$fieldToolTipslcs_sesion["Spanish"]["salio"] = "";
	$fieldLabelslcs_sesion["Spanish"]["l_idUsuario"] = "Usuario";
	$fieldToolTipslcs_sesion["Spanish"]["l_idUsuario"] = "";
	if (count($fieldToolTipslcs_sesion["Spanish"]))
		$tdatalcs_sesion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_sesion[""] = array();
	$fieldToolTipslcs_sesion[""] = array();
	$pageTitleslcs_sesion[""] = array();
	$fieldLabelslcs_sesion[""]["idSesion"] = "Id Sesion";
	$fieldToolTipslcs_sesion[""]["idSesion"] = "";
	$fieldLabelslcs_sesion[""]["Ingreso"] = "Ingreso";
	$fieldToolTipslcs_sesion[""]["Ingreso"] = "";
	$fieldLabelslcs_sesion[""]["salio"] = "Salio";
	$fieldToolTipslcs_sesion[""]["salio"] = "";
	$fieldLabelslcs_sesion[""]["l_idUsuario"] = "L IdUsuario";
	$fieldToolTipslcs_sesion[""]["l_idUsuario"] = "";
	if (count($fieldToolTipslcs_sesion[""]))
		$tdatalcs_sesion[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_sesion[".NCSearch"] = true;



$tdatalcs_sesion[".shortTableName"] = "lcs_sesion";
$tdatalcs_sesion[".nSecOptions"] = 0;
$tdatalcs_sesion[".recsPerRowList"] = 1;
$tdatalcs_sesion[".mainTableOwnerID"] = "";
$tdatalcs_sesion[".moveNext"] = 1;
$tdatalcs_sesion[".nType"] = 0;

$tdatalcs_sesion[".strOriginalTableName"] = "lcs_sesion";




$tdatalcs_sesion[".showAddInPopup"] = false;

$tdatalcs_sesion[".showEditInPopup"] = false;

$tdatalcs_sesion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalcs_sesion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_sesion[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_sesion[".listAjax"] = true;
else 
	$tdatalcs_sesion[".listAjax"] = false;

	$tdatalcs_sesion[".audit"] = false;

	$tdatalcs_sesion[".locking"] = false;


$tdatalcs_sesion[".list"] = true;


$tdatalcs_sesion[".import"] = true;

$tdatalcs_sesion[".exportTo"] = true;

$tdatalcs_sesion[".printFriendly"] = true;


$tdatalcs_sesion[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_sesion[".searchSaving"] = false;
//

$tdatalcs_sesion[".showSearchPanel"] = true;
		$tdatalcs_sesion[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_sesion[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_sesion[".isUseAjaxSuggest"] = true;

$tdatalcs_sesion[".rowHighlite"] = true;



$tdatalcs_sesion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_sesion[".isUseTimeForSearch"] = false;





$tdatalcs_sesion[".allSearchFields"] = array();
$tdatalcs_sesion[".filterFields"] = array();
$tdatalcs_sesion[".requiredSearchFields"] = array();

$tdatalcs_sesion[".allSearchFields"][] = "idSesion";
	$tdatalcs_sesion[".allSearchFields"][] = "Ingreso";
	$tdatalcs_sesion[".allSearchFields"][] = "salio";
	$tdatalcs_sesion[".allSearchFields"][] = "l_idUsuario";
	

$tdatalcs_sesion[".googleLikeFields"] = array();
$tdatalcs_sesion[".googleLikeFields"][] = "idSesion";
$tdatalcs_sesion[".googleLikeFields"][] = "Ingreso";
$tdatalcs_sesion[".googleLikeFields"][] = "salio";
$tdatalcs_sesion[".googleLikeFields"][] = "l_idUsuario";


$tdatalcs_sesion[".advSearchFields"] = array();
$tdatalcs_sesion[".advSearchFields"][] = "idSesion";
$tdatalcs_sesion[".advSearchFields"][] = "Ingreso";
$tdatalcs_sesion[".advSearchFields"][] = "salio";
$tdatalcs_sesion[".advSearchFields"][] = "l_idUsuario";

$tdatalcs_sesion[".tableType"] = "list";

$tdatalcs_sesion[".printerPageOrientation"] = 0;
$tdatalcs_sesion[".nPrinterPageScale"] = 100;

$tdatalcs_sesion[".nPrinterSplitRecords"] = 40;

$tdatalcs_sesion[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatalcs_sesion[".pageSize"] = 20;

$tdatalcs_sesion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_sesion[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_sesion[".orderindexes"] = array();

$tdatalcs_sesion[".sqlHead"] = "SELECT idSesion,   Ingreso,   salio,   l_idUsuario";
$tdatalcs_sesion[".sqlFrom"] = "FROM lcs_sesion";
$tdatalcs_sesion[".sqlWhereExpr"] = "";
$tdatalcs_sesion[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_sesion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_sesion[".arrGroupsPerPage"] = $arrGPP;

$tdatalcs_sesion[".highlightSearchResults"] = true;

$tableKeyslcs_sesion = array();
$tableKeyslcs_sesion[] = "idSesion";
$tdatalcs_sesion[".Keys"] = $tableKeyslcs_sesion;

$tdatalcs_sesion[".listFields"] = array();
$tdatalcs_sesion[".listFields"][] = "idSesion";
$tdatalcs_sesion[".listFields"][] = "Ingreso";
$tdatalcs_sesion[".listFields"][] = "salio";
$tdatalcs_sesion[".listFields"][] = "l_idUsuario";

$tdatalcs_sesion[".hideMobileList"] = array();


$tdatalcs_sesion[".viewFields"] = array();

$tdatalcs_sesion[".addFields"] = array();

$tdatalcs_sesion[".inlineAddFields"] = array();

$tdatalcs_sesion[".editFields"] = array();

$tdatalcs_sesion[".inlineEditFields"] = array();

$tdatalcs_sesion[".exportFields"] = array();
$tdatalcs_sesion[".exportFields"][] = "idSesion";
$tdatalcs_sesion[".exportFields"][] = "Ingreso";
$tdatalcs_sesion[".exportFields"][] = "salio";
$tdatalcs_sesion[".exportFields"][] = "l_idUsuario";

$tdatalcs_sesion[".importFields"] = array();

$tdatalcs_sesion[".printFields"] = array();
$tdatalcs_sesion[".printFields"][] = "idSesion";
$tdatalcs_sesion[".printFields"][] = "Ingreso";
$tdatalcs_sesion[".printFields"][] = "salio";
$tdatalcs_sesion[".printFields"][] = "l_idUsuario";

//	idSesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idSesion";
	$fdata["GoodName"] = "idSesion";
	$fdata["ownerTable"] = "lcs_sesion";
	$fdata["Label"] = GetFieldLabel("lcs_sesion","idSesion"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idSesion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idSesion";
	
		
		
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

	

	
	$tdatalcs_sesion["idSesion"] = $fdata;
//	Ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ingreso";
	$fdata["GoodName"] = "Ingreso";
	$fdata["ownerTable"] = "lcs_sesion";
	$fdata["Label"] = GetFieldLabel("lcs_sesion","Ingreso"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Ingreso"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ingreso";
	
		
		
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

	

	
	$tdatalcs_sesion["Ingreso"] = $fdata;
//	salio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "salio";
	$fdata["GoodName"] = "salio";
	$fdata["ownerTable"] = "lcs_sesion";
	$fdata["Label"] = GetFieldLabel("lcs_sesion","salio"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "salio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salio";
	
		
		
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

	

	
	$tdatalcs_sesion["salio"] = $fdata;
//	l_idUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "l_idUsuario";
	$fdata["GoodName"] = "l_idUsuario";
	$fdata["ownerTable"] = "lcs_sesion";
	$fdata["Label"] = GetFieldLabel("lcs_sesion","l_idUsuario"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "l_idUsuario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "l_idUsuario";
	
		
		
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
	$edata["LookupTable"] = "lcs_personal";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "idUsuario";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idUsuario";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
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

	

	
	$tdatalcs_sesion["l_idUsuario"] = $fdata;

	
$tables_data["lcs_sesion"]=&$tdatalcs_sesion;
$field_labels["lcs_sesion"] = &$fieldLabelslcs_sesion;
$fieldToolTips["lcs_sesion"] = &$fieldToolTipslcs_sesion;
$page_titles["lcs_sesion"] = &$pageTitleslcs_sesion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_sesion"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_sesion"] = array();


	
				$strOriginalDetailsTable="lcs_personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="lcs_personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lcs_personal";
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
					$masterTablesData["lcs_sesion"][0] = $masterParams;	
				$masterTablesData["lcs_sesion"][0]["masterKeys"] = array();
	$masterTablesData["lcs_sesion"][0]["masterKeys"][]="idUsuario";
				$masterTablesData["lcs_sesion"][0]["detailKeys"] = array();
	$masterTablesData["lcs_sesion"][0]["detailKeys"][]="l_idUsuario";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_sesion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idSesion,   Ingreso,   salio,   l_idUsuario";
$proto0["m_strFrom"] = "FROM lcs_sesion";
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
	"m_strName" => "idSesion",
	"m_strTable" => "lcs_sesion",
	"m_srcTableName" => "lcs_sesion"
));

$proto5["m_sql"] = "idSesion";
$proto5["m_srcTableName"] = "lcs_sesion";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingreso",
	"m_strTable" => "lcs_sesion",
	"m_srcTableName" => "lcs_sesion"
));

$proto7["m_sql"] = "Ingreso";
$proto7["m_srcTableName"] = "lcs_sesion";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "salio",
	"m_strTable" => "lcs_sesion",
	"m_srcTableName" => "lcs_sesion"
));

$proto9["m_sql"] = "salio";
$proto9["m_srcTableName"] = "lcs_sesion";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "l_idUsuario",
	"m_strTable" => "lcs_sesion",
	"m_srcTableName" => "lcs_sesion"
));

$proto11["m_sql"] = "l_idUsuario";
$proto11["m_srcTableName"] = "lcs_sesion";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "lcs_sesion";
$proto14["m_srcTableName"] = "lcs_sesion";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "idSesion";
$proto14["m_columns"][] = "Ingreso";
$proto14["m_columns"][] = "salio";
$proto14["m_columns"][] = "l_idUsuario";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "lcs_sesion";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "lcs_sesion";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="lcs_sesion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lcs_sesion = createSqlQuery_lcs_sesion();


	
				
	
$tdatalcs_sesion[".sqlquery"] = $queryData_lcs_sesion;

$tableEvents["lcs_sesion"] = new eventsBase;
$tdatalcs_sesion[".hasEvents"] = false;

?>