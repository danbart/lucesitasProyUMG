<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEstuHistEmoci = array();	
	$tdataEstuHistEmoci[".truncateText"] = true;
	$tdataEstuHistEmoci[".NumberOfChars"] = 80; 
	$tdataEstuHistEmoci[".ShortName"] = "EstuHistEmoci";
	$tdataEstuHistEmoci[".OwnerID"] = "";
	$tdataEstuHistEmoci[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelsEstuHistEmoci = array();
$fieldToolTipsEstuHistEmoci = array();
$pageTitlesEstuHistEmoci = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsEstuHistEmoci["Spanish"] = array();
	$fieldToolTipsEstuHistEmoci["Spanish"] = array();
	$pageTitlesEstuHistEmoci["Spanish"] = array();
	$fieldLabelsEstuHistEmoci["Spanish"]["FotoRostro"] = "Foto";
	$fieldToolTipsEstuHistEmoci["Spanish"]["FotoRostro"] = "";
	$fieldLabelsEstuHistEmoci["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistEmoci["Spanish"]["Estudiante"] = "";
	$fieldLabelsEstuHistEmoci["Spanish"]["edad"] = "Edad";
	$fieldToolTipsEstuHistEmoci["Spanish"]["edad"] = "";
	$fieldLabelsEstuHistEmoci["Spanish"]["TipoEmocion"] = "Emocion";
	$fieldToolTipsEstuHistEmoci["Spanish"]["TipoEmocion"] = "";
	$fieldLabelsEstuHistEmoci["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipsEstuHistEmoci["Spanish"]["Ingresado"] = "";
	if (count($fieldToolTipsEstuHistEmoci["Spanish"]))
		$tdataEstuHistEmoci[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEstuHistEmoci[""] = array();
	$fieldToolTipsEstuHistEmoci[""] = array();
	$pageTitlesEstuHistEmoci[""] = array();
	$fieldLabelsEstuHistEmoci[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsEstuHistEmoci[""]["FotoRostro"] = "";
	$fieldLabelsEstuHistEmoci[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistEmoci[""]["Estudiante"] = "";
	$fieldLabelsEstuHistEmoci[""]["edad"] = "Edad";
	$fieldToolTipsEstuHistEmoci[""]["edad"] = "";
	$fieldLabelsEstuHistEmoci[""]["TipoEmocion"] = "Tipo Emocion";
	$fieldToolTipsEstuHistEmoci[""]["TipoEmocion"] = "";
	$fieldLabelsEstuHistEmoci[""]["Ingresado"] = "Ingresado";
	$fieldToolTipsEstuHistEmoci[""]["Ingresado"] = "";
	if (count($fieldToolTipsEstuHistEmoci[""]))
		$tdataEstuHistEmoci[".isUseToolTips"] = true;
}
	
	
	$tdataEstuHistEmoci[".NCSearch"] = true;



$tdataEstuHistEmoci[".shortTableName"] = "EstuHistEmoci";
$tdataEstuHistEmoci[".nSecOptions"] = 0;
$tdataEstuHistEmoci[".recsPerRowList"] = 1;
$tdataEstuHistEmoci[".mainTableOwnerID"] = "";
$tdataEstuHistEmoci[".moveNext"] = 1;
$tdataEstuHistEmoci[".nType"] = 2;

$tdataEstuHistEmoci[".strOriginalTableName"] = "lcs_estudiante";




$tdataEstuHistEmoci[".showAddInPopup"] = false;

$tdataEstuHistEmoci[".showEditInPopup"] = false;

$tdataEstuHistEmoci[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEstuHistEmoci[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEstuHistEmoci[".fieldsForRegister"] = array();

$tdataEstuHistEmoci[".listAjax"] = false;

	$tdataEstuHistEmoci[".audit"] = false;

	$tdataEstuHistEmoci[".locking"] = false;


$tdataEstuHistEmoci[".list"] = true;

$tdataEstuHistEmoci[".inlineAdd"] = true;


$tdataEstuHistEmoci[".exportTo"] = true;

$tdataEstuHistEmoci[".printFriendly"] = true;


$tdataEstuHistEmoci[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataEstuHistEmoci[".searchSaving"] = false;
//

$tdataEstuHistEmoci[".showSearchPanel"] = true;
		$tdataEstuHistEmoci[".flexibleSearch"] = true;		

if (isMobile())
	$tdataEstuHistEmoci[".isUseAjaxSuggest"] = false;
else 
	$tdataEstuHistEmoci[".isUseAjaxSuggest"] = true;




$tdataEstuHistEmoci[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEstuHistEmoci[".isUseTimeForSearch"] = false;



$tdataEstuHistEmoci[".useDetailsPreview"] = true;


$tdataEstuHistEmoci[".allSearchFields"] = array();
$tdataEstuHistEmoci[".filterFields"] = array();
$tdataEstuHistEmoci[".requiredSearchFields"] = array();

$tdataEstuHistEmoci[".allSearchFields"][] = "Estudiante";
	$tdataEstuHistEmoci[".allSearchFields"][] = "FotoRostro";
	$tdataEstuHistEmoci[".allSearchFields"][] = "edad";
	$tdataEstuHistEmoci[".allSearchFields"][] = "TipoEmocion";
	$tdataEstuHistEmoci[".allSearchFields"][] = "Ingresado";
	

$tdataEstuHistEmoci[".googleLikeFields"] = array();
$tdataEstuHistEmoci[".googleLikeFields"][] = "Estudiante";
$tdataEstuHistEmoci[".googleLikeFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".googleLikeFields"][] = "edad";
$tdataEstuHistEmoci[".googleLikeFields"][] = "TipoEmocion";
$tdataEstuHistEmoci[".googleLikeFields"][] = "Ingresado";


$tdataEstuHistEmoci[".advSearchFields"] = array();
$tdataEstuHistEmoci[".advSearchFields"][] = "Estudiante";
$tdataEstuHistEmoci[".advSearchFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".advSearchFields"][] = "edad";
$tdataEstuHistEmoci[".advSearchFields"][] = "TipoEmocion";
$tdataEstuHistEmoci[".advSearchFields"][] = "Ingresado";

$tdataEstuHistEmoci[".tableType"] = "report";

$tdataEstuHistEmoci[".printerPageOrientation"] = 0;
$tdataEstuHistEmoci[".nPrinterPageScale"] = 100;

$tdataEstuHistEmoci[".nPrinterSplitRecords"] = 40;

$tdataEstuHistEmoci[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataEstuHistEmoci[".reportPrintPartitionType"] = 0;	
$tdataEstuHistEmoci[".reportPrintGroupsPerPage"] = 3;	
$tdataEstuHistEmoci[".lowGroup"] = 1;

$tdataEstuHistEmoci[".reportGroupFields"] = true;
$tdataEstuHistEmoci[".pageSize"] = 5;
$tdataEstuHistEmoci[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataEstuHistEmoci[".reportGroupFieldsData"] = $reportGroupFields;




$tdataEstuHistEmoci[".reportPageSummary"] = true;


$tdataEstuHistEmoci[".repShowDet"] = true;

$tdataEstuHistEmoci[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataEstuHistEmoci[".isPrinterPagePDF"] = true;
$tdataEstuHistEmoci[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEstuHistEmoci[".strOrderBy"] = $tstrOrderBy;

$tdataEstuHistEmoci[".orderindexes"] = array();

$tdataEstuHistEmoci[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_emociones.TipoEmocion,  lcs_emociones.Ingresado";
$tdataEstuHistEmoci[".sqlFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_emociones ON lcs_estudiante.idEstudiante = lcs_emociones.`_idEstudiante`";
$tdataEstuHistEmoci[".sqlWhereExpr"] = "";
$tdataEstuHistEmoci[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEstuHistEmoci[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEstuHistEmoci[".arrGroupsPerPage"] = $arrGPP;

$tdataEstuHistEmoci[".highlightSearchResults"] = true;

$tableKeysEstuHistEmoci = array();
$tdataEstuHistEmoci[".Keys"] = $tableKeysEstuHistEmoci;

$tdataEstuHistEmoci[".listFields"] = array();
$tdataEstuHistEmoci[".listFields"][] = "Estudiante";
$tdataEstuHistEmoci[".listFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".listFields"][] = "edad";
$tdataEstuHistEmoci[".listFields"][] = "TipoEmocion";
$tdataEstuHistEmoci[".listFields"][] = "Ingresado";

$tdataEstuHistEmoci[".hideMobileList"] = array();


$tdataEstuHistEmoci[".viewFields"] = array();
$tdataEstuHistEmoci[".viewFields"][] = "Estudiante";
$tdataEstuHistEmoci[".viewFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".viewFields"][] = "edad";
$tdataEstuHistEmoci[".viewFields"][] = "TipoEmocion";
$tdataEstuHistEmoci[".viewFields"][] = "Ingresado";

$tdataEstuHistEmoci[".addFields"] = array();
$tdataEstuHistEmoci[".addFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".addFields"][] = "Ingresado";

$tdataEstuHistEmoci[".inlineAddFields"] = array();
$tdataEstuHistEmoci[".inlineAddFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".inlineAddFields"][] = "Ingresado";

$tdataEstuHistEmoci[".editFields"] = array();
$tdataEstuHistEmoci[".editFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".editFields"][] = "Ingresado";

$tdataEstuHistEmoci[".inlineEditFields"] = array();
$tdataEstuHistEmoci[".inlineEditFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".inlineEditFields"][] = "Ingresado";

$tdataEstuHistEmoci[".exportFields"] = array();
$tdataEstuHistEmoci[".exportFields"][] = "Estudiante";
$tdataEstuHistEmoci[".exportFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".exportFields"][] = "edad";
$tdataEstuHistEmoci[".exportFields"][] = "TipoEmocion";
$tdataEstuHistEmoci[".exportFields"][] = "Ingresado";

$tdataEstuHistEmoci[".importFields"] = array();
$tdataEstuHistEmoci[".importFields"][] = "Estudiante";
$tdataEstuHistEmoci[".importFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".importFields"][] = "edad";
$tdataEstuHistEmoci[".importFields"][] = "TipoEmocion";
$tdataEstuHistEmoci[".importFields"][] = "Ingresado";

$tdataEstuHistEmoci[".printFields"] = array();
$tdataEstuHistEmoci[".printFields"][] = "Estudiante";
$tdataEstuHistEmoci[".printFields"][] = "FotoRostro";
$tdataEstuHistEmoci[".printFields"][] = "edad";
$tdataEstuHistEmoci[".printFields"][] = "TipoEmocion";
$tdataEstuHistEmoci[".printFields"][] = "Ingresado";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistEmoci","Estudiante"); 
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
	$fdata["FullName"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido)";
	
		
		
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

	

	
	$tdataEstuHistEmoci["Estudiante"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("EstuHistEmoci","FotoRostro"); 
	$fdata["FieldType"] = 201;
	
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
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 150;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
							$edata["acceptFileTypes"] = "jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 300;
	
		$edata["maxTotalFilesSize"] = 500;
	
		
		
		
		
		$edata["controlWidth"] = 300;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdataEstuHistEmoci["FotoRostro"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistEmoci","edad"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
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

	

	
	$tdataEstuHistEmoci["edad"] = $fdata;
//	TipoEmocion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TipoEmocion";
	$fdata["GoodName"] = "TipoEmocion";
	$fdata["ownerTable"] = "lcs_emociones";
	$fdata["Label"] = GetFieldLabel("EstuHistEmoci","TipoEmocion"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoEmocion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_emociones.TipoEmocion";
	
		
		
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

	

	
	$tdataEstuHistEmoci["TipoEmocion"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_emociones";
	$fdata["Label"] = GetFieldLabel("EstuHistEmoci","Ingresado"); 
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
	$fdata["FullName"] = "lcs_emociones.Ingresado";
	
		
		
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 300;
	
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

	

	
	$tdataEstuHistEmoci["Ingresado"] = $fdata;

	
$tables_data["EstuHistEmoci"]=&$tdataEstuHistEmoci;
$field_labels["EstuHistEmoci"] = &$fieldLabelsEstuHistEmoci;
$fieldToolTips["EstuHistEmoci"] = &$fieldToolTipsEstuHistEmoci;
$page_titles["EstuHistEmoci"] = &$pageTitlesEstuHistEmoci;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["EstuHistEmoci"] = array();
//	lcs_descsocial
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_descsocial";
		$detailsParam["dOriginalTable"] = "lcs_descsocial";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_descsocial";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_embarazo
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_embarazo";
		$detailsParam["dOriginalTable"] = "lcs_embarazo";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_embarazo";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_emociones
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_emociones";
		$detailsParam["dOriginalTable"] = "lcs_emociones";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_emociones";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_encargado
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_encargado";
		$detailsParam["dOriginalTable"] = "lcs_encargado";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_encargado";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_enfermedades
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_enfermedades";
		$detailsParam["dOriginalTable"] = "lcs_enfermedades";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_enfermedades";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_histoiralfamiliar
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_histoiralfamiliar";
		$detailsParam["dOriginalTable"] = "lcs_histoiralfamiliar";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_histoiralfamiliar";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_historialclinico
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_historialclinico";
		$detailsParam["dOriginalTable"] = "lcs_historialclinico";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_historialclinico";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_lenguaje
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_lenguaje";
		$detailsParam["dOriginalTable"] = "lcs_lenguaje";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_lenguaje";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_terapias
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_terapias";
		$detailsParam["dOriginalTable"] = "lcs_terapias";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_terapias";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_tiposocial
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_tiposocial";
		$detailsParam["dOriginalTable"] = "lcs_tiposocial";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_tiposocial";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_transtornoalimenticio
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_transtornoalimenticio";
		$detailsParam["dOriginalTable"] = "lcs_transtornoalimenticio";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_transtornoalimenticio";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_transtornoesfinteres
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_transtornoesfinteres";
		$detailsParam["dOriginalTable"] = "lcs_transtornoesfinteres";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_transtornoesfinteres";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
//	lcs_trastornosuenio
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_trastornosuenio";
		$detailsParam["dOriginalTable"] = "lcs_trastornosuenio";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_trastornosuenio";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["EstuHistEmoci"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistEmoci"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["EstuHistEmoci"] = array();


	
				$strOriginalDetailsTable="lcs_centro";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="lcs_centro";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lcs_centro";
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
					$masterTablesData["EstuHistEmoci"][0] = $masterParams;	
				$masterTablesData["EstuHistEmoci"][0]["masterKeys"] = array();
	$masterTablesData["EstuHistEmoci"][0]["masterKeys"][]="idCentro";
				$masterTablesData["EstuHistEmoci"][0]["detailKeys"] = array();
	$masterTablesData["EstuHistEmoci"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_EstuHistEmoci()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_emociones.TipoEmocion,  lcs_emociones.Ingresado";
$proto0["m_strFrom"] = "FROM lcs_estudiante  LEFT OUTER JOIN lcs_emociones ON lcs_estudiante.idEstudiante = lcs_emociones.`_idEstudiante`";
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
	"m_sql" => "\" \""
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "lcs_estudiante.Apellido"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido)";
$proto5["m_srcTableName"] = "EstuHistEmoci";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistEmoci"
));

$proto10["m_sql"] = "lcs_estudiante.FotoRostro";
$proto10["m_srcTableName"] = "EstuHistEmoci";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto12["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto12["m_srcTableName"] = "EstuHistEmoci";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEmocion",
	"m_strTable" => "lcs_emociones",
	"m_srcTableName" => "EstuHistEmoci"
));

$proto14["m_sql"] = "lcs_emociones.TipoEmocion";
$proto14["m_srcTableName"] = "EstuHistEmoci";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_emociones",
	"m_srcTableName" => "EstuHistEmoci"
));

$proto16["m_sql"] = "lcs_emociones.Ingresado";
$proto16["m_srcTableName"] = "EstuHistEmoci";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "lcs_estudiante";
$proto19["m_srcTableName"] = "EstuHistEmoci";
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
$proto18["m_srcTableName"] = "EstuHistEmoci";
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
$proto22["m_link"] = "SQLL_LEFTJOIN";
			$proto23=array();
$proto23["m_strName"] = "lcs_emociones";
$proto23["m_srcTableName"] = "EstuHistEmoci";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idEmociones";
$proto23["m_columns"][] = "TipoEmocion";
$proto23["m_columns"][] = "Ingresado";
$proto23["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "LEFT OUTER JOIN lcs_emociones ON lcs_estudiante.idEstudiante = lcs_emociones.`_idEstudiante`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "EstuHistEmoci";
$proto24=array();
$proto24["m_sql"] = "lcs_estudiante.idEstudiante = lcs_emociones.`_idEstudiante`";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistEmoci"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= lcs_emociones.`_idEstudiante`";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="EstuHistEmoci";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_EstuHistEmoci = createSqlQuery_EstuHistEmoci();


	
					
	
$tdataEstuHistEmoci[".sqlquery"] = $queryData_EstuHistEmoci;

$tableEvents["EstuHistEmoci"] = new eventsBase;
$tdataEstuHistEmoci[".hasEvents"] = false;

?>