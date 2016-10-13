<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_espemed = array();	
	$tdatalcs_espemed[".truncateText"] = true;
	$tdatalcs_espemed[".NumberOfChars"] = 80; 
	$tdatalcs_espemed[".ShortName"] = "lcs_espemed";
	$tdatalcs_espemed[".OwnerID"] = "";
	$tdatalcs_espemed[".OriginalTable"] = "lcs_espemed";

//	field labels
$fieldLabelslcs_espemed = array();
$fieldToolTipslcs_espemed = array();
$pageTitleslcs_espemed = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_espemed["Spanish"] = array();
	$fieldToolTipslcs_espemed["Spanish"] = array();
	$pageTitleslcs_espemed["Spanish"] = array();
	$fieldLabelslcs_espemed["Spanish"]["idEspeMed"] = "No";
	$fieldToolTipslcs_espemed["Spanish"]["idEspeMed"] = "";
	$fieldLabelslcs_espemed["Spanish"]["TipoEspecialidad"] = "Tipo Especialidad";
	$fieldToolTipslcs_espemed["Spanish"]["TipoEspecialidad"] = "";
	$fieldLabelslcs_espemed["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_espemed["Spanish"]["Ingresado"] = "";
	if (count($fieldToolTipslcs_espemed["Spanish"]))
		$tdatalcs_espemed[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_espemed[""] = array();
	$fieldToolTipslcs_espemed[""] = array();
	$pageTitleslcs_espemed[""] = array();
	$fieldLabelslcs_espemed[""]["idEspeMed"] = "Id Espe Med";
	$fieldToolTipslcs_espemed[""]["idEspeMed"] = "";
	$fieldLabelslcs_espemed[""]["TipoEspecialidad"] = "Tipo Especialidad";
	$fieldToolTipslcs_espemed[""]["TipoEspecialidad"] = "";
	$fieldLabelslcs_espemed[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_espemed[""]["Ingresado"] = "";
	if (count($fieldToolTipslcs_espemed[""]))
		$tdatalcs_espemed[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_espemed[".NCSearch"] = true;



$tdatalcs_espemed[".shortTableName"] = "lcs_espemed";
$tdatalcs_espemed[".nSecOptions"] = 0;
$tdatalcs_espemed[".recsPerRowList"] = 1;
$tdatalcs_espemed[".mainTableOwnerID"] = "";
$tdatalcs_espemed[".moveNext"] = 1;
$tdatalcs_espemed[".nType"] = 0;

$tdatalcs_espemed[".strOriginalTableName"] = "lcs_espemed";




$tdatalcs_espemed[".showAddInPopup"] = true;

$tdatalcs_espemed[".showEditInPopup"] = true;

$tdatalcs_espemed[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_espemed[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_espemed[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_espemed[".listAjax"] = true;
else 
	$tdatalcs_espemed[".listAjax"] = false;

	$tdatalcs_espemed[".audit"] = false;

	$tdatalcs_espemed[".locking"] = false;

$tdatalcs_espemed[".edit"] = true;

$tdatalcs_espemed[".list"] = true;

$tdatalcs_espemed[".view"] = true;

$tdatalcs_espemed[".import"] = true;

$tdatalcs_espemed[".exportTo"] = true;

$tdatalcs_espemed[".printFriendly"] = true;

$tdatalcs_espemed[".delete"] = true;

$tdatalcs_espemed[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_espemed[".searchSaving"] = false;
//

$tdatalcs_espemed[".showSearchPanel"] = true;
		$tdatalcs_espemed[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_espemed[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_espemed[".isUseAjaxSuggest"] = true;

$tdatalcs_espemed[".rowHighlite"] = true;



$tdatalcs_espemed[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_espemed[".isUseTimeForSearch"] = false;





$tdatalcs_espemed[".allSearchFields"] = array();
$tdatalcs_espemed[".filterFields"] = array();
$tdatalcs_espemed[".requiredSearchFields"] = array();

$tdatalcs_espemed[".allSearchFields"][] = "idEspeMed";
	$tdatalcs_espemed[".allSearchFields"][] = "TipoEspecialidad";
	$tdatalcs_espemed[".allSearchFields"][] = "Ingresado";
	

$tdatalcs_espemed[".googleLikeFields"] = array();
$tdatalcs_espemed[".googleLikeFields"][] = "idEspeMed";
$tdatalcs_espemed[".googleLikeFields"][] = "TipoEspecialidad";
$tdatalcs_espemed[".googleLikeFields"][] = "Ingresado";


$tdatalcs_espemed[".advSearchFields"] = array();
$tdatalcs_espemed[".advSearchFields"][] = "idEspeMed";
$tdatalcs_espemed[".advSearchFields"][] = "TipoEspecialidad";
$tdatalcs_espemed[".advSearchFields"][] = "Ingresado";

$tdatalcs_espemed[".tableType"] = "list";

$tdatalcs_espemed[".printerPageOrientation"] = 0;
$tdatalcs_espemed[".nPrinterPageScale"] = 100;

$tdatalcs_espemed[".nPrinterSplitRecords"] = 40;

$tdatalcs_espemed[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_espemed[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_espemed[".isViewPagePDF"] = true;
$tdatalcs_espemed[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_espemed[".isPrinterPagePDF"] = true;
$tdatalcs_espemed[".nPrinterPagePDFScale"] = 100;


$tdatalcs_espemed[".pageSize"] = 20;

$tdatalcs_espemed[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_espemed[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_espemed[".orderindexes"] = array();

$tdatalcs_espemed[".sqlHead"] = "SELECT idEspeMed,   TipoEspecialidad,   Ingresado";
$tdatalcs_espemed[".sqlFrom"] = "FROM lcs_espemed";
$tdatalcs_espemed[".sqlWhereExpr"] = "";
$tdatalcs_espemed[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_espemed[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_espemed[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_espemed = array();
$tableKeyslcs_espemed[] = "idEspeMed";
$tdatalcs_espemed[".Keys"] = $tableKeyslcs_espemed;

$tdatalcs_espemed[".listFields"] = array();
$tdatalcs_espemed[".listFields"][] = "idEspeMed";
$tdatalcs_espemed[".listFields"][] = "TipoEspecialidad";
$tdatalcs_espemed[".listFields"][] = "Ingresado";

$tdatalcs_espemed[".hideMobileList"] = array();


$tdatalcs_espemed[".viewFields"] = array();
$tdatalcs_espemed[".viewFields"][] = "idEspeMed";
$tdatalcs_espemed[".viewFields"][] = "TipoEspecialidad";
$tdatalcs_espemed[".viewFields"][] = "Ingresado";

$tdatalcs_espemed[".addFields"] = array();
$tdatalcs_espemed[".addFields"][] = "TipoEspecialidad";

$tdatalcs_espemed[".inlineAddFields"] = array();

$tdatalcs_espemed[".editFields"] = array();
$tdatalcs_espemed[".editFields"][] = "TipoEspecialidad";

$tdatalcs_espemed[".inlineEditFields"] = array();

$tdatalcs_espemed[".exportFields"] = array();
$tdatalcs_espemed[".exportFields"][] = "idEspeMed";
$tdatalcs_espemed[".exportFields"][] = "TipoEspecialidad";
$tdatalcs_espemed[".exportFields"][] = "Ingresado";

$tdatalcs_espemed[".importFields"] = array();
$tdatalcs_espemed[".importFields"][] = "TipoEspecialidad";

$tdatalcs_espemed[".printFields"] = array();
$tdatalcs_espemed[".printFields"][] = "idEspeMed";
$tdatalcs_espemed[".printFields"][] = "TipoEspecialidad";
$tdatalcs_espemed[".printFields"][] = "Ingresado";

//	idEspeMed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idEspeMed";
	$fdata["GoodName"] = "idEspeMed";
	$fdata["ownerTable"] = "lcs_espemed";
	$fdata["Label"] = GetFieldLabel("lcs_espemed","idEspeMed"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idEspeMed"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEspeMed";
	
		
		
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

	

	
	$tdatalcs_espemed["idEspeMed"] = $fdata;
//	TipoEspecialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoEspecialidad";
	$fdata["GoodName"] = "TipoEspecialidad";
	$fdata["ownerTable"] = "lcs_espemed";
	$fdata["Label"] = GetFieldLabel("lcs_espemed","TipoEspecialidad"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoEspecialidad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoEspecialidad";
	
		
		
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

	

	
	$tdatalcs_espemed["TipoEspecialidad"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_espemed";
	$fdata["Label"] = GetFieldLabel("lcs_espemed","Ingresado"); 
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

	

	
	$tdatalcs_espemed["Ingresado"] = $fdata;

	
$tables_data["lcs_espemed"]=&$tdatalcs_espemed;
$field_labels["lcs_espemed"] = &$fieldLabelslcs_espemed;
$fieldToolTips["lcs_espemed"] = &$fieldToolTipslcs_espemed;
$page_titles["lcs_espemed"] = &$pageTitleslcs_espemed;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_espemed"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_espemed"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_espemed()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idEspeMed,   TipoEspecialidad,   Ingresado";
$proto3["m_strFrom"] = "FROM lcs_espemed";
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
	"m_strName" => "idEspeMed",
	"m_strTable" => "lcs_espemed",
	"m_srcTableName" => "lcs_espemed"
));

$proto8["m_sql"] = "idEspeMed";
$proto8["m_srcTableName"] = "lcs_espemed";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEspecialidad",
	"m_strTable" => "lcs_espemed",
	"m_srcTableName" => "lcs_espemed"
));

$proto10["m_sql"] = "TipoEspecialidad";
$proto10["m_srcTableName"] = "lcs_espemed";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_espemed",
	"m_srcTableName" => "lcs_espemed"
));

$proto12["m_sql"] = "Ingresado";
$proto12["m_srcTableName"] = "lcs_espemed";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "lcs_espemed";
$proto15["m_srcTableName"] = "lcs_espemed";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "idEspeMed";
$proto15["m_columns"][] = "TipoEspecialidad";
$proto15["m_columns"][] = "Ingresado";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "lcs_espemed";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "lcs_espemed";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="lcs_espemed";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_espemed = createSqlQuery_lcs_espemed();


	
			
	
$tdatalcs_espemed[".sqlquery"] = $queryData_lcs_espemed;

$tableEvents["lcs_espemed"] = new eventsBase;
$tdatalcs_espemed[".hasEvents"] = false;

?>