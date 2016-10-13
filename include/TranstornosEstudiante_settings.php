<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTranstornosEstudiante = array();	
	$tdataTranstornosEstudiante[".truncateText"] = true;
	$tdataTranstornosEstudiante[".NumberOfChars"] = 80; 
	$tdataTranstornosEstudiante[".ShortName"] = "TranstornosEstudiante";
	$tdataTranstornosEstudiante[".OwnerID"] = "";
	$tdataTranstornosEstudiante[".OriginalTable"] = "lcs_transtornoalimenticio";

//	field labels
$fieldLabelsTranstornosEstudiante = array();
$fieldToolTipsTranstornosEstudiante = array();
$pageTitlesTranstornosEstudiante = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTranstornosEstudiante["Spanish"] = array();
	$fieldToolTipsTranstornosEstudiante["Spanish"] = array();
	$pageTitlesTranstornosEstudiante["Spanish"] = array();
	$fieldLabelsTranstornosEstudiante["Spanish"]["TipoTAlimenticio"] = "Tipo TAlimenticio";
	$fieldToolTipsTranstornosEstudiante["Spanish"]["TipoTAlimenticio"] = "";
	$fieldLabelsTranstornosEstudiante["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsTranstornosEstudiante["Spanish"]["Estudiante"] = "";
	$fieldLabelsTranstornosEstudiante["Spanish"]["edad"] = "Edad";
	$fieldToolTipsTranstornosEstudiante["Spanish"]["edad"] = "";
	$fieldLabelsTranstornosEstudiante["Spanish"]["TipoEsfinteres"] = "Tipo Esfinteres";
	$fieldToolTipsTranstornosEstudiante["Spanish"]["TipoEsfinteres"] = "";
	$fieldLabelsTranstornosEstudiante["Spanish"]["TipoTSue_o"] = "Tipo TSueño";
	$fieldToolTipsTranstornosEstudiante["Spanish"]["TipoTSueño"] = "";
	$fieldLabelsTranstornosEstudiante["Spanish"]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsTranstornosEstudiante["Spanish"]["FotoRostro"] = "";
	if (count($fieldToolTipsTranstornosEstudiante["Spanish"]))
		$tdataTranstornosEstudiante[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTranstornosEstudiante[""] = array();
	$fieldToolTipsTranstornosEstudiante[""] = array();
	$pageTitlesTranstornosEstudiante[""] = array();
	$fieldLabelsTranstornosEstudiante[""]["TipoTAlimenticio"] = "Tipo TAlimenticio";
	$fieldToolTipsTranstornosEstudiante[""]["TipoTAlimenticio"] = "";
	$fieldLabelsTranstornosEstudiante[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsTranstornosEstudiante[""]["Estudiante"] = "";
	$fieldLabelsTranstornosEstudiante[""]["edad"] = "Edad";
	$fieldToolTipsTranstornosEstudiante[""]["edad"] = "";
	$fieldLabelsTranstornosEstudiante[""]["TipoEsfinteres"] = "Tipo Esfinteres";
	$fieldToolTipsTranstornosEstudiante[""]["TipoEsfinteres"] = "";
	$fieldLabelsTranstornosEstudiante[""]["TipoTSue_o"] = "Tipo TSueño";
	$fieldToolTipsTranstornosEstudiante[""]["TipoTSueño"] = "";
	$fieldLabelsTranstornosEstudiante[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsTranstornosEstudiante[""]["FotoRostro"] = "";
	if (count($fieldToolTipsTranstornosEstudiante[""]))
		$tdataTranstornosEstudiante[".isUseToolTips"] = true;
}
	
	
	$tdataTranstornosEstudiante[".NCSearch"] = true;



$tdataTranstornosEstudiante[".shortTableName"] = "TranstornosEstudiante";
$tdataTranstornosEstudiante[".nSecOptions"] = 0;
$tdataTranstornosEstudiante[".recsPerRowList"] = 1;
$tdataTranstornosEstudiante[".mainTableOwnerID"] = "";
$tdataTranstornosEstudiante[".moveNext"] = 1;
$tdataTranstornosEstudiante[".nType"] = 2;

$tdataTranstornosEstudiante[".strOriginalTableName"] = "lcs_transtornoalimenticio";




$tdataTranstornosEstudiante[".showAddInPopup"] = false;

$tdataTranstornosEstudiante[".showEditInPopup"] = false;

$tdataTranstornosEstudiante[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTranstornosEstudiante[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTranstornosEstudiante[".fieldsForRegister"] = array();

$tdataTranstornosEstudiante[".listAjax"] = false;

	$tdataTranstornosEstudiante[".audit"] = false;

	$tdataTranstornosEstudiante[".locking"] = false;


$tdataTranstornosEstudiante[".list"] = true;

$tdataTranstornosEstudiante[".inlineAdd"] = true;


$tdataTranstornosEstudiante[".exportTo"] = true;

$tdataTranstornosEstudiante[".printFriendly"] = true;


$tdataTranstornosEstudiante[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTranstornosEstudiante[".searchSaving"] = false;
//

$tdataTranstornosEstudiante[".showSearchPanel"] = true;
		$tdataTranstornosEstudiante[".flexibleSearch"] = true;		

if (isMobile())
	$tdataTranstornosEstudiante[".isUseAjaxSuggest"] = false;
else 
	$tdataTranstornosEstudiante[".isUseAjaxSuggest"] = true;




$tdataTranstornosEstudiante[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTranstornosEstudiante[".isUseTimeForSearch"] = false;





$tdataTranstornosEstudiante[".allSearchFields"] = array();
$tdataTranstornosEstudiante[".filterFields"] = array();
$tdataTranstornosEstudiante[".requiredSearchFields"] = array();

$tdataTranstornosEstudiante[".allSearchFields"][] = "Estudiante";
	$tdataTranstornosEstudiante[".allSearchFields"][] = "edad";
	$tdataTranstornosEstudiante[".allSearchFields"][] = "TipoEsfinteres";
	$tdataTranstornosEstudiante[".allSearchFields"][] = "TipoTSueño";
	$tdataTranstornosEstudiante[".allSearchFields"][] = "TipoTAlimenticio";
	$tdataTranstornosEstudiante[".allSearchFields"][] = "FotoRostro";
	

$tdataTranstornosEstudiante[".googleLikeFields"] = array();
$tdataTranstornosEstudiante[".googleLikeFields"][] = "Estudiante";
$tdataTranstornosEstudiante[".googleLikeFields"][] = "edad";
$tdataTranstornosEstudiante[".googleLikeFields"][] = "TipoEsfinteres";
$tdataTranstornosEstudiante[".googleLikeFields"][] = "TipoTSueño";
$tdataTranstornosEstudiante[".googleLikeFields"][] = "TipoTAlimenticio";
$tdataTranstornosEstudiante[".googleLikeFields"][] = "FotoRostro";


$tdataTranstornosEstudiante[".advSearchFields"] = array();
$tdataTranstornosEstudiante[".advSearchFields"][] = "Estudiante";
$tdataTranstornosEstudiante[".advSearchFields"][] = "edad";
$tdataTranstornosEstudiante[".advSearchFields"][] = "TipoEsfinteres";
$tdataTranstornosEstudiante[".advSearchFields"][] = "TipoTSueño";
$tdataTranstornosEstudiante[".advSearchFields"][] = "TipoTAlimenticio";
$tdataTranstornosEstudiante[".advSearchFields"][] = "FotoRostro";

$tdataTranstornosEstudiante[".tableType"] = "report";

$tdataTranstornosEstudiante[".printerPageOrientation"] = 0;
$tdataTranstornosEstudiante[".nPrinterPageScale"] = 100;

$tdataTranstornosEstudiante[".nPrinterSplitRecords"] = 40;

$tdataTranstornosEstudiante[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataTranstornosEstudiante[".reportPrintPartitionType"] = 0;	
$tdataTranstornosEstudiante[".reportPrintGroupsPerPage"] = 3;	
$tdataTranstornosEstudiante[".lowGroup"] = 1;

$tdataTranstornosEstudiante[".reportGroupFields"] = true;
$tdataTranstornosEstudiante[".pageSize"] = 5;
$tdataTranstornosEstudiante[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataTranstornosEstudiante[".reportGroupFieldsData"] = $reportGroupFields;


$tdataTranstornosEstudiante[".isExistTotalFields"] = true;




$tdataTranstornosEstudiante[".repShowDet"] = true;

$tdataTranstornosEstudiante[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataTranstornosEstudiante[".isPrinterPagePDF"] = true;
$tdataTranstornosEstudiante[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTranstornosEstudiante[".strOrderBy"] = $tstrOrderBy;

$tdataTranstornosEstudiante[".orderindexes"] = array();

$tdataTranstornosEstudiante[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_transtornoesfinteres.TipoEsfinteres,  lcs_trastornosuenio.`TipoTSueño`,  lcs_transtornoalimenticio.TipoTAlimenticio,  lcs_estudiante.FotoRostro";
$tdataTranstornosEstudiante[".sqlFrom"] = "FROM lcs_transtornoalimenticio  INNER JOIN lcs_estudiante ON lcs_transtornoalimenticio.`_idEstudiante` = lcs_estudiante.idEstudiante  INNER JOIN lcs_transtornoesfinteres ON lcs_estudiante.idEstudiante = lcs_transtornoesfinteres.`_idEstudiante`  INNER JOIN lcs_trastornosuenio ON lcs_estudiante.idEstudiante = lcs_trastornosuenio.`_idEstudiante`";
$tdataTranstornosEstudiante[".sqlWhereExpr"] = "";
$tdataTranstornosEstudiante[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTranstornosEstudiante[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTranstornosEstudiante[".arrGroupsPerPage"] = $arrGPP;

$tdataTranstornosEstudiante[".highlightSearchResults"] = true;

$tableKeysTranstornosEstudiante = array();
$tdataTranstornosEstudiante[".Keys"] = $tableKeysTranstornosEstudiante;

$tdataTranstornosEstudiante[".listFields"] = array();
$tdataTranstornosEstudiante[".listFields"][] = "Estudiante";
$tdataTranstornosEstudiante[".listFields"][] = "edad";
$tdataTranstornosEstudiante[".listFields"][] = "TipoEsfinteres";
$tdataTranstornosEstudiante[".listFields"][] = "TipoTSueño";
$tdataTranstornosEstudiante[".listFields"][] = "TipoTAlimenticio";
$tdataTranstornosEstudiante[".listFields"][] = "FotoRostro";

$tdataTranstornosEstudiante[".hideMobileList"] = array();


$tdataTranstornosEstudiante[".viewFields"] = array();
$tdataTranstornosEstudiante[".viewFields"][] = "Estudiante";
$tdataTranstornosEstudiante[".viewFields"][] = "edad";
$tdataTranstornosEstudiante[".viewFields"][] = "TipoEsfinteres";
$tdataTranstornosEstudiante[".viewFields"][] = "TipoTSueño";
$tdataTranstornosEstudiante[".viewFields"][] = "TipoTAlimenticio";
$tdataTranstornosEstudiante[".viewFields"][] = "FotoRostro";

$tdataTranstornosEstudiante[".addFields"] = array();
$tdataTranstornosEstudiante[".addFields"][] = "TipoTAlimenticio";

$tdataTranstornosEstudiante[".inlineAddFields"] = array();
$tdataTranstornosEstudiante[".inlineAddFields"][] = "TipoTAlimenticio";

$tdataTranstornosEstudiante[".editFields"] = array();
$tdataTranstornosEstudiante[".editFields"][] = "TipoTAlimenticio";

$tdataTranstornosEstudiante[".inlineEditFields"] = array();
$tdataTranstornosEstudiante[".inlineEditFields"][] = "TipoTAlimenticio";

$tdataTranstornosEstudiante[".exportFields"] = array();
$tdataTranstornosEstudiante[".exportFields"][] = "Estudiante";
$tdataTranstornosEstudiante[".exportFields"][] = "edad";
$tdataTranstornosEstudiante[".exportFields"][] = "TipoEsfinteres";
$tdataTranstornosEstudiante[".exportFields"][] = "TipoTSueño";
$tdataTranstornosEstudiante[".exportFields"][] = "TipoTAlimenticio";
$tdataTranstornosEstudiante[".exportFields"][] = "FotoRostro";

$tdataTranstornosEstudiante[".importFields"] = array();
$tdataTranstornosEstudiante[".importFields"][] = "Estudiante";
$tdataTranstornosEstudiante[".importFields"][] = "edad";
$tdataTranstornosEstudiante[".importFields"][] = "TipoEsfinteres";
$tdataTranstornosEstudiante[".importFields"][] = "TipoTSueño";
$tdataTranstornosEstudiante[".importFields"][] = "TipoTAlimenticio";
$tdataTranstornosEstudiante[".importFields"][] = "FotoRostro";

$tdataTranstornosEstudiante[".printFields"] = array();
$tdataTranstornosEstudiante[".printFields"][] = "Estudiante";
$tdataTranstornosEstudiante[".printFields"][] = "edad";
$tdataTranstornosEstudiante[".printFields"][] = "TipoEsfinteres";
$tdataTranstornosEstudiante[".printFields"][] = "TipoTSueño";
$tdataTranstornosEstudiante[".printFields"][] = "TipoTAlimenticio";
$tdataTranstornosEstudiante[".printFields"][] = "FotoRostro";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TranstornosEstudiante","Estudiante"); 
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

	

	
	$tdataTranstornosEstudiante["Estudiante"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TranstornosEstudiante","edad"); 
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

	

	
	$tdataTranstornosEstudiante["edad"] = $fdata;
//	TipoEsfinteres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoEsfinteres";
	$fdata["GoodName"] = "TipoEsfinteres";
	$fdata["ownerTable"] = "lcs_transtornoesfinteres";
	$fdata["Label"] = GetFieldLabel("TranstornosEstudiante","TipoEsfinteres"); 
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

	

	
	$tdataTranstornosEstudiante["TipoEsfinteres"] = $fdata;
//	TipoTSueño
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TipoTSueño";
	$fdata["GoodName"] = "TipoTSue_o";
	$fdata["ownerTable"] = "lcs_trastornosuenio";
	$fdata["Label"] = GetFieldLabel("TranstornosEstudiante","TipoTSue_o"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoTSueño"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_trastornosuenio.`TipoTSueño`";
	
		
		
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

	

	
	$tdataTranstornosEstudiante["TipoTSueño"] = $fdata;
//	TipoTAlimenticio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TipoTAlimenticio";
	$fdata["GoodName"] = "TipoTAlimenticio";
	$fdata["ownerTable"] = "lcs_transtornoalimenticio";
	$fdata["Label"] = GetFieldLabel("TranstornosEstudiante","TipoTAlimenticio"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "TipoTAlimenticio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_transtornoalimenticio.TipoTAlimenticio";
	
		
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTranstornosEstudiante["TipoTAlimenticio"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("TranstornosEstudiante","FotoRostro"); 
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

	

	
	$tdataTranstornosEstudiante["FotoRostro"] = $fdata;

	
$tables_data["TranstornosEstudiante"]=&$tdataTranstornosEstudiante;
$field_labels["TranstornosEstudiante"] = &$fieldLabelsTranstornosEstudiante;
$fieldToolTips["TranstornosEstudiante"] = &$fieldToolTipsTranstornosEstudiante;
$page_titles["TranstornosEstudiante"] = &$pageTitlesTranstornosEstudiante;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TranstornosEstudiante"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["TranstornosEstudiante"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TranstornosEstudiante()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, ' ', lcs_estudiante.Apellido) AS Estudiante,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_transtornoesfinteres.TipoEsfinteres,  lcs_trastornosuenio.`TipoTSueño`,  lcs_transtornoalimenticio.TipoTAlimenticio,  lcs_estudiante.FotoRostro";
$proto0["m_strFrom"] = "FROM lcs_transtornoalimenticio  INNER JOIN lcs_estudiante ON lcs_transtornoalimenticio.`_idEstudiante` = lcs_estudiante.idEstudiante  INNER JOIN lcs_transtornoesfinteres ON lcs_estudiante.idEstudiante = lcs_transtornoesfinteres.`_idEstudiante`  INNER JOIN lcs_trastornosuenio ON lcs_estudiante.idEstudiante = lcs_trastornosuenio.`_idEstudiante`";
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
$proto5["m_srcTableName"] = "TranstornosEstudiante";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto10["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto10["m_srcTableName"] = "TranstornosEstudiante";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEsfinteres",
	"m_strTable" => "lcs_transtornoesfinteres",
	"m_srcTableName" => "TranstornosEstudiante"
));

$proto12["m_sql"] = "lcs_transtornoesfinteres.TipoEsfinteres";
$proto12["m_srcTableName"] = "TranstornosEstudiante";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoTSueño",
	"m_strTable" => "lcs_trastornosuenio",
	"m_srcTableName" => "TranstornosEstudiante"
));

$proto14["m_sql"] = "lcs_trastornosuenio.`TipoTSueño`";
$proto14["m_srcTableName"] = "TranstornosEstudiante";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoTAlimenticio",
	"m_strTable" => "lcs_transtornoalimenticio",
	"m_srcTableName" => "TranstornosEstudiante"
));

$proto16["m_sql"] = "lcs_transtornoalimenticio.TipoTAlimenticio";
$proto16["m_srcTableName"] = "TranstornosEstudiante";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "TranstornosEstudiante"
));

$proto18["m_sql"] = "lcs_estudiante.FotoRostro";
$proto18["m_srcTableName"] = "TranstornosEstudiante";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "lcs_transtornoalimenticio";
$proto21["m_srcTableName"] = "TranstornosEstudiante";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "idTranstornoAlimenticio";
$proto21["m_columns"][] = "TipoTAlimenticio";
$proto21["m_columns"][] = "Ingresado";
$proto21["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "lcs_transtornoalimenticio";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "TranstornosEstudiante";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "lcs_estudiante";
$proto25["m_srcTableName"] = "TranstornosEstudiante";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idEstudiante";
$proto25["m_columns"][] = "Nombre";
$proto25["m_columns"][] = "Apellido";
$proto25["m_columns"][] = "Direcccion";
$proto25["m_columns"][] = "FNacimiento";
$proto25["m_columns"][] = "FotoRostro";
$proto25["m_columns"][] = "Ingresado";
$proto25["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN lcs_estudiante ON lcs_transtornoalimenticio.`_idEstudiante` = lcs_estudiante.idEstudiante";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "TranstornosEstudiante";
$proto26=array();
$proto26["m_sql"] = "lcs_transtornoalimenticio.`_idEstudiante` = lcs_estudiante.idEstudiante";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_transtornoalimenticio",
	"m_srcTableName" => "TranstornosEstudiante"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= lcs_estudiante.idEstudiante";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "lcs_transtornoesfinteres";
$proto29["m_srcTableName"] = "TranstornosEstudiante";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "idTranstornoEsfinteres";
$proto29["m_columns"][] = "TipoEsfinteres";
$proto29["m_columns"][] = "Ingresado";
$proto29["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN lcs_transtornoesfinteres ON lcs_estudiante.idEstudiante = lcs_transtornoesfinteres.`_idEstudiante`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "TranstornosEstudiante";
$proto30=array();
$proto30["m_sql"] = "lcs_estudiante.idEstudiante = lcs_transtornoesfinteres.`_idEstudiante`";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "TranstornosEstudiante"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= lcs_transtornoesfinteres.`_idEstudiante`";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "lcs_trastornosuenio";
$proto33["m_srcTableName"] = "TranstornosEstudiante";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "idTrastornoSuenio";
$proto33["m_columns"][] = "TipoTSueño";
$proto33["m_columns"][] = "Ingresado";
$proto33["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN lcs_trastornosuenio ON lcs_estudiante.idEstudiante = lcs_trastornosuenio.`_idEstudiante`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "TranstornosEstudiante";
$proto34=array();
$proto34["m_sql"] = "lcs_estudiante.idEstudiante = lcs_trastornosuenio.`_idEstudiante`";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "TranstornosEstudiante"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= lcs_trastornosuenio.`_idEstudiante`";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TranstornosEstudiante";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TranstornosEstudiante = createSqlQuery_TranstornosEstudiante();


	
						
	
$tdataTranstornosEstudiante[".sqlquery"] = $queryData_TranstornosEstudiante;

$tableEvents["TranstornosEstudiante"] = new eventsBase;
$tdataTranstornosEstudiante[".hasEvents"] = false;

?>