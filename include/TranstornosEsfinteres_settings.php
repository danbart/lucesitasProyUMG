<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTranstornosEsfinteres = array();	
	$tdataTranstornosEsfinteres[".truncateText"] = true;
	$tdataTranstornosEsfinteres[".NumberOfChars"] = 80; 
	$tdataTranstornosEsfinteres[".ShortName"] = "TranstornosEsfinteres";
	$tdataTranstornosEsfinteres[".OwnerID"] = "";
	$tdataTranstornosEsfinteres[".OriginalTable"] = "lcs_transtornoalimenticio";

//	field labels
$fieldLabelsTranstornosEsfinteres = array();
$fieldToolTipsTranstornosEsfinteres = array();
$pageTitlesTranstornosEsfinteres = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTranstornosEsfinteres["Spanish"] = array();
	$fieldToolTipsTranstornosEsfinteres["Spanish"] = array();
	$pageTitlesTranstornosEsfinteres["Spanish"] = array();
	$fieldLabelsTranstornosEsfinteres["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsTranstornosEsfinteres["Spanish"]["Estudiante"] = "";
	$fieldLabelsTranstornosEsfinteres["Spanish"]["edad"] = "Edad";
	$fieldToolTipsTranstornosEsfinteres["Spanish"]["edad"] = "";
	$fieldLabelsTranstornosEsfinteres["Spanish"]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsTranstornosEsfinteres["Spanish"]["FotoRostro"] = "";
	$fieldLabelsTranstornosEsfinteres["Spanish"]["TipoEsfinteres"] = "Tipo Esfinteres";
	$fieldToolTipsTranstornosEsfinteres["Spanish"]["TipoEsfinteres"] = "";
	$fieldLabelsTranstornosEsfinteres["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipsTranstornosEsfinteres["Spanish"]["Ingresado"] = "";
	if (count($fieldToolTipsTranstornosEsfinteres["Spanish"]))
		$tdataTranstornosEsfinteres[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTranstornosEsfinteres[""] = array();
	$fieldToolTipsTranstornosEsfinteres[""] = array();
	$pageTitlesTranstornosEsfinteres[""] = array();
	$fieldLabelsTranstornosEsfinteres[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsTranstornosEsfinteres[""]["Estudiante"] = "";
	$fieldLabelsTranstornosEsfinteres[""]["edad"] = "Edad";
	$fieldToolTipsTranstornosEsfinteres[""]["edad"] = "";
	$fieldLabelsTranstornosEsfinteres[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsTranstornosEsfinteres[""]["FotoRostro"] = "";
	$fieldLabelsTranstornosEsfinteres[""]["TipoEsfinteres"] = "Tipo Esfinteres";
	$fieldToolTipsTranstornosEsfinteres[""]["TipoEsfinteres"] = "";
	$fieldLabelsTranstornosEsfinteres[""]["Ingresado"] = "Ingresado";
	$fieldToolTipsTranstornosEsfinteres[""]["Ingresado"] = "";
	if (count($fieldToolTipsTranstornosEsfinteres[""]))
		$tdataTranstornosEsfinteres[".isUseToolTips"] = true;
}
	
	
	$tdataTranstornosEsfinteres[".NCSearch"] = true;



$tdataTranstornosEsfinteres[".shortTableName"] = "TranstornosEsfinteres";
$tdataTranstornosEsfinteres[".nSecOptions"] = 0;
$tdataTranstornosEsfinteres[".recsPerRowList"] = 1;
$tdataTranstornosEsfinteres[".mainTableOwnerID"] = "";
$tdataTranstornosEsfinteres[".moveNext"] = 1;
$tdataTranstornosEsfinteres[".nType"] = 2;

$tdataTranstornosEsfinteres[".strOriginalTableName"] = "lcs_transtornoalimenticio";




$tdataTranstornosEsfinteres[".showAddInPopup"] = false;

$tdataTranstornosEsfinteres[".showEditInPopup"] = false;

$tdataTranstornosEsfinteres[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTranstornosEsfinteres[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTranstornosEsfinteres[".fieldsForRegister"] = array();

$tdataTranstornosEsfinteres[".listAjax"] = false;

	$tdataTranstornosEsfinteres[".audit"] = false;

	$tdataTranstornosEsfinteres[".locking"] = false;


$tdataTranstornosEsfinteres[".list"] = true;

$tdataTranstornosEsfinteres[".inlineAdd"] = true;


$tdataTranstornosEsfinteres[".exportTo"] = true;

$tdataTranstornosEsfinteres[".printFriendly"] = true;


$tdataTranstornosEsfinteres[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTranstornosEsfinteres[".searchSaving"] = false;
//

$tdataTranstornosEsfinteres[".showSearchPanel"] = true;
		$tdataTranstornosEsfinteres[".flexibleSearch"] = true;		

if (isMobile())
	$tdataTranstornosEsfinteres[".isUseAjaxSuggest"] = false;
else 
	$tdataTranstornosEsfinteres[".isUseAjaxSuggest"] = true;




$tdataTranstornosEsfinteres[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTranstornosEsfinteres[".isUseTimeForSearch"] = false;





$tdataTranstornosEsfinteres[".allSearchFields"] = array();
$tdataTranstornosEsfinteres[".filterFields"] = array();
$tdataTranstornosEsfinteres[".requiredSearchFields"] = array();

$tdataTranstornosEsfinteres[".allSearchFields"][] = "Estudiante";
	$tdataTranstornosEsfinteres[".allSearchFields"][] = "edad";
	$tdataTranstornosEsfinteres[".allSearchFields"][] = "FotoRostro";
	$tdataTranstornosEsfinteres[".allSearchFields"][] = "TipoEsfinteres";
	$tdataTranstornosEsfinteres[".allSearchFields"][] = "Ingresado";
	

$tdataTranstornosEsfinteres[".googleLikeFields"] = array();
$tdataTranstornosEsfinteres[".googleLikeFields"][] = "Estudiante";
$tdataTranstornosEsfinteres[".googleLikeFields"][] = "edad";
$tdataTranstornosEsfinteres[".googleLikeFields"][] = "FotoRostro";
$tdataTranstornosEsfinteres[".googleLikeFields"][] = "TipoEsfinteres";
$tdataTranstornosEsfinteres[".googleLikeFields"][] = "Ingresado";


$tdataTranstornosEsfinteres[".advSearchFields"] = array();
$tdataTranstornosEsfinteres[".advSearchFields"][] = "Estudiante";
$tdataTranstornosEsfinteres[".advSearchFields"][] = "edad";
$tdataTranstornosEsfinteres[".advSearchFields"][] = "FotoRostro";
$tdataTranstornosEsfinteres[".advSearchFields"][] = "TipoEsfinteres";
$tdataTranstornosEsfinteres[".advSearchFields"][] = "Ingresado";

$tdataTranstornosEsfinteres[".tableType"] = "report";

$tdataTranstornosEsfinteres[".printerPageOrientation"] = 0;
$tdataTranstornosEsfinteres[".nPrinterPageScale"] = 100;

$tdataTranstornosEsfinteres[".nPrinterSplitRecords"] = 40;

$tdataTranstornosEsfinteres[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataTranstornosEsfinteres[".reportPrintPartitionType"] = 0;	
$tdataTranstornosEsfinteres[".reportPrintGroupsPerPage"] = 3;	
$tdataTranstornosEsfinteres[".lowGroup"] = 1;

$tdataTranstornosEsfinteres[".reportGroupFields"] = true;
$tdataTranstornosEsfinteres[".pageSize"] = 5;
$tdataTranstornosEsfinteres[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataTranstornosEsfinteres[".reportGroupFieldsData"] = $reportGroupFields;


$tdataTranstornosEsfinteres[".isExistTotalFields"] = true;




$tdataTranstornosEsfinteres[".repShowDet"] = true;

$tdataTranstornosEsfinteres[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataTranstornosEsfinteres[".isPrinterPagePDF"] = true;
$tdataTranstornosEsfinteres[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTranstornosEsfinteres[".strOrderBy"] = $tstrOrderBy;

$tdataTranstornosEsfinteres[".orderindexes"] = array();

$tdataTranstornosEsfinteres[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_estudiante.FotoRostro,  lcs_transtornoesfinteres.TipoEsfinteres,  lcs_transtornoesfinteres.Ingresado";
$tdataTranstornosEsfinteres[".sqlFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_transtornoesfinteres ON lcs_estudiante.idEstudiante = lcs_transtornoesfinteres.`_idEstudiante`";
$tdataTranstornosEsfinteres[".sqlWhereExpr"] = "";
$tdataTranstornosEsfinteres[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTranstornosEsfinteres[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTranstornosEsfinteres[".arrGroupsPerPage"] = $arrGPP;

$tdataTranstornosEsfinteres[".highlightSearchResults"] = true;

$tableKeysTranstornosEsfinteres = array();
$tdataTranstornosEsfinteres[".Keys"] = $tableKeysTranstornosEsfinteres;

$tdataTranstornosEsfinteres[".listFields"] = array();
$tdataTranstornosEsfinteres[".listFields"][] = "Estudiante";
$tdataTranstornosEsfinteres[".listFields"][] = "edad";
$tdataTranstornosEsfinteres[".listFields"][] = "FotoRostro";
$tdataTranstornosEsfinteres[".listFields"][] = "TipoEsfinteres";
$tdataTranstornosEsfinteres[".listFields"][] = "Ingresado";

$tdataTranstornosEsfinteres[".hideMobileList"] = array();


$tdataTranstornosEsfinteres[".viewFields"] = array();
$tdataTranstornosEsfinteres[".viewFields"][] = "Estudiante";
$tdataTranstornosEsfinteres[".viewFields"][] = "edad";
$tdataTranstornosEsfinteres[".viewFields"][] = "FotoRostro";
$tdataTranstornosEsfinteres[".viewFields"][] = "TipoEsfinteres";
$tdataTranstornosEsfinteres[".viewFields"][] = "Ingresado";

$tdataTranstornosEsfinteres[".addFields"] = array();
$tdataTranstornosEsfinteres[".addFields"][] = "Ingresado";

$tdataTranstornosEsfinteres[".inlineAddFields"] = array();
$tdataTranstornosEsfinteres[".inlineAddFields"][] = "Ingresado";

$tdataTranstornosEsfinteres[".editFields"] = array();
$tdataTranstornosEsfinteres[".editFields"][] = "Ingresado";

$tdataTranstornosEsfinteres[".inlineEditFields"] = array();
$tdataTranstornosEsfinteres[".inlineEditFields"][] = "Ingresado";

$tdataTranstornosEsfinteres[".exportFields"] = array();
$tdataTranstornosEsfinteres[".exportFields"][] = "Estudiante";
$tdataTranstornosEsfinteres[".exportFields"][] = "edad";
$tdataTranstornosEsfinteres[".exportFields"][] = "FotoRostro";
$tdataTranstornosEsfinteres[".exportFields"][] = "TipoEsfinteres";
$tdataTranstornosEsfinteres[".exportFields"][] = "Ingresado";

$tdataTranstornosEsfinteres[".importFields"] = array();
$tdataTranstornosEsfinteres[".importFields"][] = "Estudiante";
$tdataTranstornosEsfinteres[".importFields"][] = "edad";
$tdataTranstornosEsfinteres[".importFields"][] = "FotoRostro";
$tdataTranstornosEsfinteres[".importFields"][] = "TipoEsfinteres";
$tdataTranstornosEsfinteres[".importFields"][] = "Ingresado";

$tdataTranstornosEsfinteres[".printFields"] = array();
$tdataTranstornosEsfinteres[".printFields"][] = "Estudiante";
$tdataTranstornosEsfinteres[".printFields"][] = "edad";
$tdataTranstornosEsfinteres[".printFields"][] = "FotoRostro";
$tdataTranstornosEsfinteres[".printFields"][] = "TipoEsfinteres";
$tdataTranstornosEsfinteres[".printFields"][] = "Ingresado";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TranstornosEsfinteres","Estudiante"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Estudiante"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTranstornosEsfinteres["Estudiante"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TranstornosEsfinteres","edad"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "edad"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataTranstornosEsfinteres["edad"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("TranstornosEsfinteres","FotoRostro"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FotoRostro"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_estudiante.FotoRostro";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
			$vdata["ImageWidth"] = 357;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTranstornosEsfinteres["FotoRostro"] = $fdata;
//	TipoEsfinteres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TipoEsfinteres";
	$fdata["GoodName"] = "TipoEsfinteres";
	$fdata["ownerTable"] = "lcs_transtornoesfinteres";
	$fdata["Label"] = GetFieldLabel("TranstornosEsfinteres","TipoEsfinteres"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoEsfinteres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_transtornoesfinteres.TipoEsfinteres";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTranstornosEsfinteres["TipoEsfinteres"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_transtornoesfinteres";
	$fdata["Label"] = GetFieldLabel("TranstornosEsfinteres","Ingresado"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Ingresado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_transtornoesfinteres.Ingresado";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataTranstornosEsfinteres["Ingresado"] = $fdata;

	
$tables_data["TranstornosEsfinteres"]=&$tdataTranstornosEsfinteres;
$field_labels["TranstornosEsfinteres"] = &$fieldLabelsTranstornosEsfinteres;
$fieldToolTips["TranstornosEsfinteres"] = &$fieldToolTipsTranstornosEsfinteres;
$page_titles["TranstornosEsfinteres"] = &$pageTitlesTranstornosEsfinteres;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TranstornosEsfinteres"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["TranstornosEsfinteres"] = array();


	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="lcs_estudiante";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lcs_estudiante";
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
					$masterTablesData["TranstornosEsfinteres"][0] = $masterParams;	
				$masterTablesData["TranstornosEsfinteres"][0]["masterKeys"] = array();
	$masterTablesData["TranstornosEsfinteres"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["TranstornosEsfinteres"][0]["detailKeys"] = array();
	$masterTablesData["TranstornosEsfinteres"][0]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TranstornosEsfinteres()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_estudiante.FotoRostro,  lcs_transtornoesfinteres.TipoEsfinteres,  lcs_transtornoesfinteres.Ingresado";
$proto0["m_strFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_transtornoesfinteres ON lcs_estudiante.idEstudiante = lcs_transtornoesfinteres.`_idEstudiante`";
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
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_CUSTOM";
$proto6["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_estudiante.Nombre"
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_estudiante.Apellido"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido)";
$proto5["m_srcTableName"] = "TranstornosEsfinteres";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto10["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto10["m_srcTableName"] = "TranstornosEsfinteres";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "TranstornosEsfinteres"
));

$proto12["m_sql"] = "lcs_estudiante.FotoRostro";
$proto12["m_srcTableName"] = "TranstornosEsfinteres";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEsfinteres",
	"m_strTable" => "lcs_transtornoesfinteres",
	"m_srcTableName" => "TranstornosEsfinteres"
));

$proto14["m_sql"] = "lcs_transtornoesfinteres.TipoEsfinteres";
$proto14["m_srcTableName"] = "TranstornosEsfinteres";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_transtornoesfinteres",
	"m_srcTableName" => "TranstornosEsfinteres"
));

$proto16["m_sql"] = "lcs_transtornoesfinteres.Ingresado";
$proto16["m_srcTableName"] = "TranstornosEsfinteres";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "lcs_estudiante";
$proto19["m_srcTableName"] = "TranstornosEsfinteres";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idEstudiante";
$proto19["m_columns"][] = "Nombre";
$proto19["m_columns"][] = "Apellido";
$proto19["m_columns"][] = "Direcccion";
$proto19["m_columns"][] = "FNacimiento";
$proto19["m_columns"][] = "FotoRostro";
$proto19["m_columns"][] = "Ingresado";
$proto19["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "lcs_estudiante";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "TranstornosEsfinteres";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "lcs_transtornoesfinteres";
$proto23["m_srcTableName"] = "TranstornosEsfinteres";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idTranstornoEsfinteres";
$proto23["m_columns"][] = "TipoEsfinteres";
$proto23["m_columns"][] = "Ingresado";
$proto23["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN lcs_transtornoesfinteres ON lcs_estudiante.idEstudiante = lcs_transtornoesfinteres.`_idEstudiante`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "TranstornosEsfinteres";
$proto24=array();
$proto24["m_sql"] = "lcs_estudiante.idEstudiante = lcs_transtornoesfinteres.`_idEstudiante`";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "TranstornosEsfinteres"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= lcs_transtornoesfinteres.`_idEstudiante`";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TranstornosEsfinteres";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TranstornosEsfinteres = createSqlQuery_TranstornosEsfinteres();


	
					
	
$tdataTranstornosEsfinteres[".sqlquery"] = $queryData_TranstornosEsfinteres;

$tableEvents["TranstornosEsfinteres"] = new eventsBase;
$tdataTranstornosEsfinteres[".hasEvents"] = false;

?>