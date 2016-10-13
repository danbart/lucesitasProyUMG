<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEstuHistSocial = array();	
	$tdataEstuHistSocial[".truncateText"] = true;
	$tdataEstuHistSocial[".NumberOfChars"] = 80; 
	$tdataEstuHistSocial[".ShortName"] = "EstuHistSocial";
	$tdataEstuHistSocial[".OwnerID"] = "";
	$tdataEstuHistSocial[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelsEstuHistSocial = array();
$fieldToolTipsEstuHistSocial = array();
$pageTitlesEstuHistSocial = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsEstuHistSocial["Spanish"] = array();
	$fieldToolTipsEstuHistSocial["Spanish"] = array();
	$pageTitlesEstuHistSocial["Spanish"] = array();
	$fieldLabelsEstuHistSocial["Spanish"]["FotoRostro"] = "Foto";
	$fieldToolTipsEstuHistSocial["Spanish"]["FotoRostro"] = "";
	$fieldLabelsEstuHistSocial["Spanish"]["RelacionHermano"] = "Relacion Hermano";
	$fieldToolTipsEstuHistSocial["Spanish"]["RelacionHermano"] = "";
	$fieldLabelsEstuHistSocial["Spanish"]["RelacionCompaneros"] = "Relacion Companeros";
	$fieldToolTipsEstuHistSocial["Spanish"]["RelacionCompaneros"] = "";
	$fieldLabelsEstuHistSocial["Spanish"]["CQuinJuega"] = "Con quien Juega";
	$fieldToolTipsEstuHistSocial["Spanish"]["CQuinJuega"] = "";
	$fieldLabelsEstuHistSocial["Spanish"]["CQueJuega"] = "Con Que Juega";
	$fieldToolTipsEstuHistSocial["Spanish"]["CQueJuega"] = "";
	$fieldLabelsEstuHistSocial["Spanish"]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistSocial["Spanish"]["Estudiante"] = "";
	$fieldLabelsEstuHistSocial["Spanish"]["edad"] = "Edad";
	$fieldToolTipsEstuHistSocial["Spanish"]["edad"] = "";
	if (count($fieldToolTipsEstuHistSocial["Spanish"]))
		$tdataEstuHistSocial[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEstuHistSocial[""] = array();
	$fieldToolTipsEstuHistSocial[""] = array();
	$pageTitlesEstuHistSocial[""] = array();
	$fieldLabelsEstuHistSocial[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipsEstuHistSocial[""]["FotoRostro"] = "";
	$fieldLabelsEstuHistSocial[""]["RelacionHermano"] = "Relacion Hermano";
	$fieldToolTipsEstuHistSocial[""]["RelacionHermano"] = "";
	$fieldLabelsEstuHistSocial[""]["RelacionCompaneros"] = "Relacion Companeros";
	$fieldToolTipsEstuHistSocial[""]["RelacionCompaneros"] = "";
	$fieldLabelsEstuHistSocial[""]["CQuinJuega"] = "CQuin Juega";
	$fieldToolTipsEstuHistSocial[""]["CQuinJuega"] = "";
	$fieldLabelsEstuHistSocial[""]["CQueJuega"] = "CQue Juega";
	$fieldToolTipsEstuHistSocial[""]["CQueJuega"] = "";
	$fieldLabelsEstuHistSocial[""]["Estudiante"] = "Estudiante";
	$fieldToolTipsEstuHistSocial[""]["Estudiante"] = "";
	$fieldLabelsEstuHistSocial[""]["edad"] = "Edad";
	$fieldToolTipsEstuHistSocial[""]["edad"] = "";
	if (count($fieldToolTipsEstuHistSocial[""]))
		$tdataEstuHistSocial[".isUseToolTips"] = true;
}
	
	
	$tdataEstuHistSocial[".NCSearch"] = true;



$tdataEstuHistSocial[".shortTableName"] = "EstuHistSocial";
$tdataEstuHistSocial[".nSecOptions"] = 0;
$tdataEstuHistSocial[".recsPerRowList"] = 1;
$tdataEstuHistSocial[".mainTableOwnerID"] = "";
$tdataEstuHistSocial[".moveNext"] = 1;
$tdataEstuHistSocial[".nType"] = 2;

$tdataEstuHistSocial[".strOriginalTableName"] = "lcs_estudiante";




$tdataEstuHistSocial[".showAddInPopup"] = false;

$tdataEstuHistSocial[".showEditInPopup"] = false;

$tdataEstuHistSocial[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEstuHistSocial[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEstuHistSocial[".fieldsForRegister"] = array();

$tdataEstuHistSocial[".listAjax"] = false;

	$tdataEstuHistSocial[".audit"] = false;

	$tdataEstuHistSocial[".locking"] = false;


$tdataEstuHistSocial[".list"] = true;

$tdataEstuHistSocial[".inlineAdd"] = true;


$tdataEstuHistSocial[".exportTo"] = true;

$tdataEstuHistSocial[".printFriendly"] = true;


$tdataEstuHistSocial[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataEstuHistSocial[".searchSaving"] = false;
//

$tdataEstuHistSocial[".showSearchPanel"] = true;
		$tdataEstuHistSocial[".flexibleSearch"] = true;		

if (isMobile())
	$tdataEstuHistSocial[".isUseAjaxSuggest"] = false;
else 
	$tdataEstuHistSocial[".isUseAjaxSuggest"] = true;




$tdataEstuHistSocial[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEstuHistSocial[".isUseTimeForSearch"] = false;



$tdataEstuHistSocial[".useDetailsPreview"] = true;


$tdataEstuHistSocial[".allSearchFields"] = array();
$tdataEstuHistSocial[".filterFields"] = array();
$tdataEstuHistSocial[".requiredSearchFields"] = array();

$tdataEstuHistSocial[".allSearchFields"][] = "Estudiante";
	$tdataEstuHistSocial[".allSearchFields"][] = "FotoRostro";
	$tdataEstuHistSocial[".allSearchFields"][] = "edad";
	$tdataEstuHistSocial[".allSearchFields"][] = "RelacionHermano";
	$tdataEstuHistSocial[".allSearchFields"][] = "RelacionCompaneros";
	$tdataEstuHistSocial[".allSearchFields"][] = "CQuinJuega";
	$tdataEstuHistSocial[".allSearchFields"][] = "CQueJuega";
	

$tdataEstuHistSocial[".googleLikeFields"] = array();
$tdataEstuHistSocial[".googleLikeFields"][] = "Estudiante";
$tdataEstuHistSocial[".googleLikeFields"][] = "FotoRostro";
$tdataEstuHistSocial[".googleLikeFields"][] = "edad";
$tdataEstuHistSocial[".googleLikeFields"][] = "RelacionHermano";
$tdataEstuHistSocial[".googleLikeFields"][] = "RelacionCompaneros";
$tdataEstuHistSocial[".googleLikeFields"][] = "CQuinJuega";
$tdataEstuHistSocial[".googleLikeFields"][] = "CQueJuega";


$tdataEstuHistSocial[".advSearchFields"] = array();
$tdataEstuHistSocial[".advSearchFields"][] = "Estudiante";
$tdataEstuHistSocial[".advSearchFields"][] = "FotoRostro";
$tdataEstuHistSocial[".advSearchFields"][] = "edad";
$tdataEstuHistSocial[".advSearchFields"][] = "RelacionHermano";
$tdataEstuHistSocial[".advSearchFields"][] = "RelacionCompaneros";
$tdataEstuHistSocial[".advSearchFields"][] = "CQuinJuega";
$tdataEstuHistSocial[".advSearchFields"][] = "CQueJuega";

$tdataEstuHistSocial[".tableType"] = "report";

$tdataEstuHistSocial[".printerPageOrientation"] = 0;
$tdataEstuHistSocial[".nPrinterPageScale"] = 100;

$tdataEstuHistSocial[".nPrinterSplitRecords"] = 40;

$tdataEstuHistSocial[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataEstuHistSocial[".reportPrintPartitionType"] = 0;	
$tdataEstuHistSocial[".reportPrintGroupsPerPage"] = 3;	
$tdataEstuHistSocial[".lowGroup"] = 1;

$tdataEstuHistSocial[".reportGroupFields"] = true;
$tdataEstuHistSocial[".pageSize"] = 5;
$tdataEstuHistSocial[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "Estudiante";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataEstuHistSocial[".reportGroupFieldsData"] = $reportGroupFields;




$tdataEstuHistSocial[".reportPageSummary"] = true;


$tdataEstuHistSocial[".repShowDet"] = true;

$tdataEstuHistSocial[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf
$tdataEstuHistSocial[".isPrinterPagePDF"] = true;
$tdataEstuHistSocial[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEstuHistSocial[".strOrderBy"] = $tstrOrderBy;

$tdataEstuHistSocial[".orderindexes"] = array();

$tdataEstuHistSocial[".sqlHead"] = "SELECT concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_descsocial.RelacionHermano,  lcs_descsocial.RelacionCompaneros,  lcs_descsocial.CQuinJuega,  lcs_descsocial.CQueJuega";
$tdataEstuHistSocial[".sqlFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_descsocial ON lcs_estudiante.idEstudiante = lcs_descsocial.`_idEstudiante`";
$tdataEstuHistSocial[".sqlWhereExpr"] = "";
$tdataEstuHistSocial[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEstuHistSocial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEstuHistSocial[".arrGroupsPerPage"] = $arrGPP;

$tdataEstuHistSocial[".highlightSearchResults"] = true;

$tableKeysEstuHistSocial = array();
$tdataEstuHistSocial[".Keys"] = $tableKeysEstuHistSocial;

$tdataEstuHistSocial[".listFields"] = array();
$tdataEstuHistSocial[".listFields"][] = "Estudiante";
$tdataEstuHistSocial[".listFields"][] = "FotoRostro";
$tdataEstuHistSocial[".listFields"][] = "edad";
$tdataEstuHistSocial[".listFields"][] = "RelacionHermano";
$tdataEstuHistSocial[".listFields"][] = "RelacionCompaneros";
$tdataEstuHistSocial[".listFields"][] = "CQuinJuega";
$tdataEstuHistSocial[".listFields"][] = "CQueJuega";

$tdataEstuHistSocial[".hideMobileList"] = array();


$tdataEstuHistSocial[".viewFields"] = array();
$tdataEstuHistSocial[".viewFields"][] = "Estudiante";
$tdataEstuHistSocial[".viewFields"][] = "FotoRostro";
$tdataEstuHistSocial[".viewFields"][] = "edad";
$tdataEstuHistSocial[".viewFields"][] = "RelacionHermano";
$tdataEstuHistSocial[".viewFields"][] = "RelacionCompaneros";
$tdataEstuHistSocial[".viewFields"][] = "CQuinJuega";
$tdataEstuHistSocial[".viewFields"][] = "CQueJuega";

$tdataEstuHistSocial[".addFields"] = array();
$tdataEstuHistSocial[".addFields"][] = "FotoRostro";

$tdataEstuHistSocial[".inlineAddFields"] = array();
$tdataEstuHistSocial[".inlineAddFields"][] = "FotoRostro";

$tdataEstuHistSocial[".editFields"] = array();
$tdataEstuHistSocial[".editFields"][] = "FotoRostro";

$tdataEstuHistSocial[".inlineEditFields"] = array();
$tdataEstuHistSocial[".inlineEditFields"][] = "FotoRostro";

$tdataEstuHistSocial[".exportFields"] = array();
$tdataEstuHistSocial[".exportFields"][] = "Estudiante";
$tdataEstuHistSocial[".exportFields"][] = "FotoRostro";
$tdataEstuHistSocial[".exportFields"][] = "edad";
$tdataEstuHistSocial[".exportFields"][] = "RelacionHermano";
$tdataEstuHistSocial[".exportFields"][] = "RelacionCompaneros";
$tdataEstuHistSocial[".exportFields"][] = "CQuinJuega";
$tdataEstuHistSocial[".exportFields"][] = "CQueJuega";

$tdataEstuHistSocial[".importFields"] = array();
$tdataEstuHistSocial[".importFields"][] = "Estudiante";
$tdataEstuHistSocial[".importFields"][] = "FotoRostro";
$tdataEstuHistSocial[".importFields"][] = "edad";
$tdataEstuHistSocial[".importFields"][] = "RelacionHermano";
$tdataEstuHistSocial[".importFields"][] = "RelacionCompaneros";
$tdataEstuHistSocial[".importFields"][] = "CQuinJuega";
$tdataEstuHistSocial[".importFields"][] = "CQueJuega";

$tdataEstuHistSocial[".printFields"] = array();
$tdataEstuHistSocial[".printFields"][] = "Estudiante";
$tdataEstuHistSocial[".printFields"][] = "FotoRostro";
$tdataEstuHistSocial[".printFields"][] = "edad";
$tdataEstuHistSocial[".printFields"][] = "RelacionHermano";
$tdataEstuHistSocial[".printFields"][] = "RelacionCompaneros";
$tdataEstuHistSocial[".printFields"][] = "CQuinJuega";
$tdataEstuHistSocial[".printFields"][] = "CQueJuega";

//	Estudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Estudiante";
	$fdata["GoodName"] = "Estudiante";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistSocial","Estudiante"); 
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

	

	
	$tdataEstuHistSocial["Estudiante"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("EstuHistSocial","FotoRostro"); 
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

	

	
	$tdataEstuHistSocial["FotoRostro"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("EstuHistSocial","edad"); 
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

	

	
	$tdataEstuHistSocial["edad"] = $fdata;
//	RelacionHermano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RelacionHermano";
	$fdata["GoodName"] = "RelacionHermano";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("EstuHistSocial","RelacionHermano"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RelacionHermano"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_descsocial.RelacionHermano";
	
		
		
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

	

	
	$tdataEstuHistSocial["RelacionHermano"] = $fdata;
//	RelacionCompaneros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RelacionCompaneros";
	$fdata["GoodName"] = "RelacionCompaneros";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("EstuHistSocial","RelacionCompaneros"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RelacionCompaneros"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_descsocial.RelacionCompaneros";
	
		
		
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

	

	
	$tdataEstuHistSocial["RelacionCompaneros"] = $fdata;
//	CQuinJuega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CQuinJuega";
	$fdata["GoodName"] = "CQuinJuega";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("EstuHistSocial","CQuinJuega"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CQuinJuega"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_descsocial.CQuinJuega";
	
		
		
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

	

	
	$tdataEstuHistSocial["CQuinJuega"] = $fdata;
//	CQueJuega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CQueJuega";
	$fdata["GoodName"] = "CQueJuega";
	$fdata["ownerTable"] = "lcs_descsocial";
	$fdata["Label"] = GetFieldLabel("EstuHistSocial","CQueJuega"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CQueJuega"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lcs_descsocial.CQueJuega";
	
		
		
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

	

	
	$tdataEstuHistSocial["CQueJuega"] = $fdata;

	
$tables_data["EstuHistSocial"]=&$tdataEstuHistSocial;
$field_labels["EstuHistSocial"] = &$fieldLabelsEstuHistSocial;
$fieldToolTips["EstuHistSocial"] = &$fieldToolTipsEstuHistSocial;
$page_titles["EstuHistSocial"] = &$pageTitlesEstuHistSocial;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["EstuHistSocial"] = array();
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
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
			
	$detailsTablesData["EstuHistSocial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["EstuHistSocial"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["EstuHistSocial"] = array();


	
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
					$masterTablesData["EstuHistSocial"][0] = $masterParams;	
				$masterTablesData["EstuHistSocial"][0]["masterKeys"] = array();
	$masterTablesData["EstuHistSocial"][0]["masterKeys"][]="idCentro";
				$masterTablesData["EstuHistSocial"][0]["detailKeys"] = array();
	$masterTablesData["EstuHistSocial"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_EstuHistSocial()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(lcs_estudiante.Nombre, \" \", lcs_estudiante.Apellido) AS Estudiante,  lcs_estudiante.FotoRostro,  year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1) AS edad,  lcs_descsocial.RelacionHermano,  lcs_descsocial.RelacionCompaneros,  lcs_descsocial.CQuinJuega,  lcs_descsocial.CQueJuega";
$proto0["m_strFrom"] = "FROM lcs_estudiante  INNER JOIN lcs_descsocial ON lcs_estudiante.idEstudiante = lcs_descsocial.`_idEstudiante`";
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
$proto5["m_srcTableName"] = "EstuHistSocial";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Estudiante";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistSocial"
));

$proto10["m_sql"] = "lcs_estudiante.FotoRostro";
$proto10["m_srcTableName"] = "EstuHistSocial";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)"
));

$proto12["m_sql"] = "year(curdate())-year(lcs_estudiante.FNacimiento) + if(date_format(curdate(), '%m-%d')>date_format(lcs_estudiante.FNacimiento, '%m-%d'),0,-1)";
$proto12["m_srcTableName"] = "EstuHistSocial";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RelacionHermano",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "EstuHistSocial"
));

$proto14["m_sql"] = "lcs_descsocial.RelacionHermano";
$proto14["m_srcTableName"] = "EstuHistSocial";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RelacionCompaneros",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "EstuHistSocial"
));

$proto16["m_sql"] = "lcs_descsocial.RelacionCompaneros";
$proto16["m_srcTableName"] = "EstuHistSocial";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CQuinJuega",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "EstuHistSocial"
));

$proto18["m_sql"] = "lcs_descsocial.CQuinJuega";
$proto18["m_srcTableName"] = "EstuHistSocial";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CQueJuega",
	"m_strTable" => "lcs_descsocial",
	"m_srcTableName" => "EstuHistSocial"
));

$proto20["m_sql"] = "lcs_descsocial.CQueJuega";
$proto20["m_srcTableName"] = "EstuHistSocial";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "lcs_estudiante";
$proto23["m_srcTableName"] = "EstuHistSocial";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idEstudiante";
$proto23["m_columns"][] = "Nombre";
$proto23["m_columns"][] = "Apellido";
$proto23["m_columns"][] = "Direcccion";
$proto23["m_columns"][] = "FNacimiento";
$proto23["m_columns"][] = "FotoRostro";
$proto23["m_columns"][] = "Ingresado";
$proto23["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "lcs_estudiante";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "EstuHistSocial";
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

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "lcs_descsocial";
$proto27["m_srcTableName"] = "EstuHistSocial";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "idDescSocial";
$proto27["m_columns"][] = "RelacionHermano";
$proto27["m_columns"][] = "RelacionCompaneros";
$proto27["m_columns"][] = "CQuinJuega";
$proto27["m_columns"][] = "CQueJuega";
$proto27["m_columns"][] = "ingresado";
$proto27["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN lcs_descsocial ON lcs_estudiante.idEstudiante = lcs_descsocial.`_idEstudiante`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "EstuHistSocial";
$proto28=array();
$proto28["m_sql"] = "lcs_estudiante.idEstudiante = lcs_descsocial.`_idEstudiante`";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "EstuHistSocial"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= lcs_descsocial.`_idEstudiante`";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="EstuHistSocial";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_EstuHistSocial = createSqlQuery_EstuHistSocial();


	
							
	
$tdataEstuHistSocial[".sqlquery"] = $queryData_EstuHistSocial;

$tableEvents["EstuHistSocial"] = new eventsBase;
$tdataEstuHistSocial[".hasEvents"] = false;

?>