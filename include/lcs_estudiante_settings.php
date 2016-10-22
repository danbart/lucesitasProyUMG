<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_estudiante = array();	
	$tdatalcs_estudiante[".truncateText"] = true;
	$tdatalcs_estudiante[".NumberOfChars"] = 80; 
	$tdatalcs_estudiante[".ShortName"] = "lcs_estudiante";
	$tdatalcs_estudiante[".OwnerID"] = "";
	$tdatalcs_estudiante[".OriginalTable"] = "lcs_estudiante";

//	field labels
$fieldLabelslcs_estudiante = array();
$fieldToolTipslcs_estudiante = array();
$pageTitleslcs_estudiante = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_estudiante["Spanish"] = array();
	$fieldToolTipslcs_estudiante["Spanish"] = array();
	$pageTitleslcs_estudiante["Spanish"] = array();
	$fieldLabelslcs_estudiante["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipslcs_estudiante["Spanish"]["Nombre"] = "";
	$fieldLabelslcs_estudiante["Spanish"]["Apellido"] = "Apellido";
	$fieldToolTipslcs_estudiante["Spanish"]["Apellido"] = "";
	$fieldLabelslcs_estudiante["Spanish"]["Direcccion"] = "Direcccion";
	$fieldToolTipslcs_estudiante["Spanish"]["Direcccion"] = "";
	$fieldLabelslcs_estudiante["Spanish"]["FNacimiento"] = "Fecha Nacimiento";
	$fieldToolTipslcs_estudiante["Spanish"]["FNacimiento"] = "";
	$fieldLabelslcs_estudiante["Spanish"]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipslcs_estudiante["Spanish"]["FotoRostro"] = "";
	$fieldLabelslcs_estudiante["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_estudiante["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_estudiante["Spanish"]["_idCentro"] = "Centro";
	$fieldToolTipslcs_estudiante["Spanish"]["_idCentro"] = "";
	$fieldLabelslcs_estudiante["Spanish"]["idEstudiante"] = "No.";
	$fieldToolTipslcs_estudiante["Spanish"]["idEstudiante"] = "";
	$pageTitleslcs_estudiante["Spanish"]["add"] = "Estudiante - Añadir nuevo registro";
	$pageTitleslcs_estudiante["Spanish"]["edit"] = "Estudiante - Editar registro";
	$pageTitleslcs_estudiante["Spanish"]["view"] = "Estudiante - Ver registro";
	if (count($fieldToolTipslcs_estudiante["Spanish"]))
		$tdatalcs_estudiante[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_estudiante[""] = array();
	$fieldToolTipslcs_estudiante[""] = array();
	$pageTitleslcs_estudiante[""] = array();
	$fieldLabelslcs_estudiante[""]["Nombre"] = "Nombre";
	$fieldToolTipslcs_estudiante[""]["Nombre"] = "";
	$fieldLabelslcs_estudiante[""]["Apellido"] = "Apellido";
	$fieldToolTipslcs_estudiante[""]["Apellido"] = "";
	$fieldLabelslcs_estudiante[""]["Direcccion"] = "Direcccion";
	$fieldToolTipslcs_estudiante[""]["Direcccion"] = "";
	$fieldLabelslcs_estudiante[""]["FNacimiento"] = "FNacimiento";
	$fieldToolTipslcs_estudiante[""]["FNacimiento"] = "";
	$fieldLabelslcs_estudiante[""]["FotoRostro"] = "Foto Rostro";
	$fieldToolTipslcs_estudiante[""]["FotoRostro"] = "";
	$fieldLabelslcs_estudiante[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_estudiante[""]["Ingresado"] = "";
	$fieldLabelslcs_estudiante[""]["_idCentro"] = "Id Centro";
	$fieldToolTipslcs_estudiante[""]["_idCentro"] = "";
	$fieldLabelslcs_estudiante[""]["idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_estudiante[""]["idEstudiante"] = "";
	if (count($fieldToolTipslcs_estudiante[""]))
		$tdatalcs_estudiante[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_estudiante[".NCSearch"] = true;



$tdatalcs_estudiante[".shortTableName"] = "lcs_estudiante";
$tdatalcs_estudiante[".nSecOptions"] = 0;
$tdatalcs_estudiante[".recsPerRowList"] = 1;
$tdatalcs_estudiante[".mainTableOwnerID"] = "";
$tdatalcs_estudiante[".moveNext"] = 1;
$tdatalcs_estudiante[".nType"] = 0;

$tdatalcs_estudiante[".strOriginalTableName"] = "lcs_estudiante";




$tdatalcs_estudiante[".showAddInPopup"] = true;

$tdatalcs_estudiante[".showEditInPopup"] = true;

$tdatalcs_estudiante[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_estudiante[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_estudiante[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_estudiante[".listAjax"] = true;
else 
	$tdatalcs_estudiante[".listAjax"] = false;

	$tdatalcs_estudiante[".audit"] = true;

	$tdatalcs_estudiante[".locking"] = false;

$tdatalcs_estudiante[".edit"] = true;

$tdatalcs_estudiante[".list"] = true;

$tdatalcs_estudiante[".view"] = true;

$tdatalcs_estudiante[".import"] = true;

$tdatalcs_estudiante[".exportTo"] = true;

$tdatalcs_estudiante[".printFriendly"] = true;

$tdatalcs_estudiante[".delete"] = true;

$tdatalcs_estudiante[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_estudiante[".searchSaving"] = false;
//

$tdatalcs_estudiante[".showSearchPanel"] = true;
		$tdatalcs_estudiante[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_estudiante[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_estudiante[".isUseAjaxSuggest"] = true;

$tdatalcs_estudiante[".rowHighlite"] = true;



$tdatalcs_estudiante[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_estudiante[".isUseTimeForSearch"] = false;



$tdatalcs_estudiante[".useDetailsPreview"] = true;


$tdatalcs_estudiante[".allSearchFields"] = array();
$tdatalcs_estudiante[".filterFields"] = array();
$tdatalcs_estudiante[".requiredSearchFields"] = array();

$tdatalcs_estudiante[".allSearchFields"][] = "FotoRostro";
	$tdatalcs_estudiante[".allSearchFields"][] = "idEstudiante";
	$tdatalcs_estudiante[".allSearchFields"][] = "Nombre";
	$tdatalcs_estudiante[".allSearchFields"][] = "Apellido";
	$tdatalcs_estudiante[".allSearchFields"][] = "Direcccion";
	$tdatalcs_estudiante[".allSearchFields"][] = "FNacimiento";
	$tdatalcs_estudiante[".allSearchFields"][] = "Ingresado";
	$tdatalcs_estudiante[".allSearchFields"][] = "_idCentro";
	

$tdatalcs_estudiante[".googleLikeFields"] = array();
$tdatalcs_estudiante[".googleLikeFields"][] = "idEstudiante";
$tdatalcs_estudiante[".googleLikeFields"][] = "Nombre";
$tdatalcs_estudiante[".googleLikeFields"][] = "Apellido";
$tdatalcs_estudiante[".googleLikeFields"][] = "Direcccion";
$tdatalcs_estudiante[".googleLikeFields"][] = "FNacimiento";
$tdatalcs_estudiante[".googleLikeFields"][] = "FotoRostro";
$tdatalcs_estudiante[".googleLikeFields"][] = "Ingresado";
$tdatalcs_estudiante[".googleLikeFields"][] = "_idCentro";


$tdatalcs_estudiante[".advSearchFields"] = array();
$tdatalcs_estudiante[".advSearchFields"][] = "FotoRostro";
$tdatalcs_estudiante[".advSearchFields"][] = "idEstudiante";
$tdatalcs_estudiante[".advSearchFields"][] = "Nombre";
$tdatalcs_estudiante[".advSearchFields"][] = "Apellido";
$tdatalcs_estudiante[".advSearchFields"][] = "Direcccion";
$tdatalcs_estudiante[".advSearchFields"][] = "FNacimiento";
$tdatalcs_estudiante[".advSearchFields"][] = "Ingresado";
$tdatalcs_estudiante[".advSearchFields"][] = "_idCentro";

$tdatalcs_estudiante[".tableType"] = "list";

$tdatalcs_estudiante[".printerPageOrientation"] = 0;
$tdatalcs_estudiante[".nPrinterPageScale"] = 100;

$tdatalcs_estudiante[".nPrinterSplitRecords"] = 40;

$tdatalcs_estudiante[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_estudiante[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_estudiante[".isViewPagePDF"] = true;
$tdatalcs_estudiante[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_estudiante[".isPrinterPagePDF"] = true;
$tdatalcs_estudiante[".nPrinterPagePDFScale"] = 100;


$tdatalcs_estudiante[".pageSize"] = 20;

$tdatalcs_estudiante[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_estudiante[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_estudiante[".orderindexes"] = array();

$tdatalcs_estudiante[".sqlHead"] = "SELECT idEstudiante,   Nombre,   Apellido,   Direcccion,   FNacimiento,   FotoRostro,   Ingresado,   `_idCentro`";
$tdatalcs_estudiante[".sqlFrom"] = "FROM lcs_estudiante";
$tdatalcs_estudiante[".sqlWhereExpr"] = "";
$tdatalcs_estudiante[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_estudiante[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_estudiante[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_estudiante = array();
$tableKeyslcs_estudiante[] = "Nombre";
$tableKeyslcs_estudiante[] = "Apellido";
$tableKeyslcs_estudiante[] = "Direcccion";
$tableKeyslcs_estudiante[] = "FNacimiento";
$tableKeyslcs_estudiante[] = "FotoRostro";
$tableKeyslcs_estudiante[] = "Ingresado";
$tableKeyslcs_estudiante[] = "_idCentro";
$tdatalcs_estudiante[".Keys"] = $tableKeyslcs_estudiante;

$tdatalcs_estudiante[".listFields"] = array();
$tdatalcs_estudiante[".listFields"][] = "idEstudiante";
$tdatalcs_estudiante[".listFields"][] = "Nombre";
$tdatalcs_estudiante[".listFields"][] = "Apellido";
$tdatalcs_estudiante[".listFields"][] = "Direcccion";
$tdatalcs_estudiante[".listFields"][] = "FNacimiento";
$tdatalcs_estudiante[".listFields"][] = "FotoRostro";
$tdatalcs_estudiante[".listFields"][] = "Ingresado";
$tdatalcs_estudiante[".listFields"][] = "_idCentro";

$tdatalcs_estudiante[".hideMobileList"] = array();


$tdatalcs_estudiante[".viewFields"] = array();
$tdatalcs_estudiante[".viewFields"][] = "FotoRostro";
$tdatalcs_estudiante[".viewFields"][] = "idEstudiante";
$tdatalcs_estudiante[".viewFields"][] = "Nombre";
$tdatalcs_estudiante[".viewFields"][] = "Apellido";
$tdatalcs_estudiante[".viewFields"][] = "Direcccion";
$tdatalcs_estudiante[".viewFields"][] = "FNacimiento";
$tdatalcs_estudiante[".viewFields"][] = "Ingresado";
$tdatalcs_estudiante[".viewFields"][] = "_idCentro";

$tdatalcs_estudiante[".addFields"] = array();
$tdatalcs_estudiante[".addFields"][] = "FotoRostro";
$tdatalcs_estudiante[".addFields"][] = "Nombre";
$tdatalcs_estudiante[".addFields"][] = "Apellido";
$tdatalcs_estudiante[".addFields"][] = "Direcccion";
$tdatalcs_estudiante[".addFields"][] = "FNacimiento";
$tdatalcs_estudiante[".addFields"][] = "_idCentro";

$tdatalcs_estudiante[".inlineAddFields"] = array();

$tdatalcs_estudiante[".editFields"] = array();
$tdatalcs_estudiante[".editFields"][] = "FotoRostro";
$tdatalcs_estudiante[".editFields"][] = "Nombre";
$tdatalcs_estudiante[".editFields"][] = "Apellido";
$tdatalcs_estudiante[".editFields"][] = "Direcccion";
$tdatalcs_estudiante[".editFields"][] = "FNacimiento";
$tdatalcs_estudiante[".editFields"][] = "_idCentro";

$tdatalcs_estudiante[".inlineEditFields"] = array();

$tdatalcs_estudiante[".exportFields"] = array();
$tdatalcs_estudiante[".exportFields"][] = "FotoRostro";
$tdatalcs_estudiante[".exportFields"][] = "idEstudiante";
$tdatalcs_estudiante[".exportFields"][] = "Nombre";
$tdatalcs_estudiante[".exportFields"][] = "Apellido";
$tdatalcs_estudiante[".exportFields"][] = "Direcccion";
$tdatalcs_estudiante[".exportFields"][] = "FNacimiento";
$tdatalcs_estudiante[".exportFields"][] = "Ingresado";
$tdatalcs_estudiante[".exportFields"][] = "_idCentro";

$tdatalcs_estudiante[".importFields"] = array();
$tdatalcs_estudiante[".importFields"][] = "idEstudiante";
$tdatalcs_estudiante[".importFields"][] = "Nombre";
$tdatalcs_estudiante[".importFields"][] = "Apellido";
$tdatalcs_estudiante[".importFields"][] = "Direcccion";
$tdatalcs_estudiante[".importFields"][] = "FNacimiento";
$tdatalcs_estudiante[".importFields"][] = "FotoRostro";
$tdatalcs_estudiante[".importFields"][] = "_idCentro";

$tdatalcs_estudiante[".printFields"] = array();
$tdatalcs_estudiante[".printFields"][] = "FotoRostro";
$tdatalcs_estudiante[".printFields"][] = "idEstudiante";
$tdatalcs_estudiante[".printFields"][] = "Nombre";
$tdatalcs_estudiante[".printFields"][] = "Apellido";
$tdatalcs_estudiante[".printFields"][] = "Direcccion";
$tdatalcs_estudiante[".printFields"][] = "FNacimiento";
$tdatalcs_estudiante[".printFields"][] = "Ingresado";
$tdatalcs_estudiante[".printFields"][] = "_idCentro";

//	idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idEstudiante";
	$fdata["GoodName"] = "idEstudiante";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("lcs_estudiante","idEstudiante"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idEstudiante"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEstudiante";
	
		
		
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
			
		$edata["controlWidth"] = 300;
	
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

	

	
	$tdatalcs_estudiante["idEstudiante"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("lcs_estudiante","Nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";
	
		
		$fdata["CompatibilityMode"] = true; 
	
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
			$edata["EditParams"].= " maxlength=75";
	
		$edata["controlWidth"] = 300;
	
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_estudiante["Nombre"] = $fdata;
//	Apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Apellido";
	$fdata["GoodName"] = "Apellido";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("lcs_estudiante","Apellido"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Apellido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Apellido";
	
		
		$fdata["CompatibilityMode"] = true; 
	
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
			$edata["EditParams"].= " maxlength=75";
	
		$edata["controlWidth"] = 300;
	
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_estudiante["Apellido"] = $fdata;
//	Direcccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Direcccion";
	$fdata["GoodName"] = "Direcccion";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("lcs_estudiante","Direcccion"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Direcccion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direcccion";
	
		
		$fdata["CompatibilityMode"] = true; 
	
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
			
		$edata["controlWidth"] = 300;
	
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_estudiante["Direcccion"] = $fdata;
//	FNacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FNacimiento";
	$fdata["GoodName"] = "FNacimiento";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("lcs_estudiante","FNacimiento"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FNacimiento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FNacimiento";
	
		
		$fdata["CompatibilityMode"] = true; 
	
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 2; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 300;
	
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
		
	// the end of search options settings	

	

	
	$tdatalcs_estudiante["FNacimiento"] = $fdata;
//	FotoRostro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FotoRostro";
	$fdata["GoodName"] = "FotoRostro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("lcs_estudiante","FotoRostro"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FotoRostro"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FotoRostro";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "filesPhotoNinio";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 150;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_estudiante["FotoRostro"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("lcs_estudiante","Ingresado"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Ingresado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ingresado";
	
		
		$fdata["CompatibilityMode"] = true; 
	
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
	// the end of search options settings	

	

	
	$tdatalcs_estudiante["Ingresado"] = $fdata;
//	_idCentro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "_idCentro";
	$fdata["GoodName"] = "_idCentro";
	$fdata["ownerTable"] = "lcs_estudiante";
	$fdata["Label"] = GetFieldLabel("lcs_estudiante","_idCentro"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "_idCentro"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_idCentro`";
	
		
		$fdata["CompatibilityMode"] = true; 
	
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
	$edata["LookupTable"] = "lcs_centro";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "idCentro";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Nombre";
	
		
	$edata["LookupOrderBy"] = "Nombre";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 300;
	
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
		
	// the end of search options settings	

	

	
	$tdatalcs_estudiante["_idCentro"] = $fdata;

	
$tables_data["lcs_estudiante"]=&$tdatalcs_estudiante;
$field_labels["lcs_estudiante"] = &$fieldLabelslcs_estudiante;
$fieldToolTips["lcs_estudiante"] = &$fieldToolTipslcs_estudiante;
$page_titles["lcs_estudiante"] = &$pageTitleslcs_estudiante;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_estudiante"] = array();
//	TranstornosEsfinteres
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="TranstornosEsfinteres";
		$detailsParam["dOriginalTable"] = "lcs_transtornoalimenticio";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "TranstornosEsfinteres";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_estudiante"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_estudiante"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_estudiante"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["lcs_estudiante"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_estudiante"][$dIndex]["detailKeys"][]="_idEstudiante";
//	TranstornosSueno
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="TranstornosSueno";
		$detailsParam["dOriginalTable"] = "lcs_transtornoalimenticio";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "TranstornosSueno";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_estudiante"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_estudiante"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_estudiante"][$dIndex]["masterKeys"][]="idEstudiante";

				$detailsTablesData["lcs_estudiante"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_estudiante"][$dIndex]["detailKeys"][]="_idEstudiante";
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_estudiante"] = array();


	
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
					$masterTablesData["lcs_estudiante"][0] = $masterParams;	
				$masterTablesData["lcs_estudiante"][0]["masterKeys"] = array();
	$masterTablesData["lcs_estudiante"][0]["masterKeys"][]="idCentro";
				$masterTablesData["lcs_estudiante"][0]["detailKeys"] = array();
	$masterTablesData["lcs_estudiante"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_estudiante()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idEstudiante,   Nombre,   Apellido,   Direcccion,   FNacimiento,   FotoRostro,   Ingresado,   `_idCentro`";
$proto3["m_strFrom"] = "FROM lcs_estudiante";
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
	"m_strName" => "idEstudiante",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "lcs_estudiante"
));

$proto8["m_sql"] = "idEstudiante";
$proto8["m_srcTableName"] = "lcs_estudiante";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "lcs_estudiante"
));

$proto10["m_sql"] = "Nombre";
$proto10["m_srcTableName"] = "lcs_estudiante";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Apellido",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "lcs_estudiante"
));

$proto12["m_sql"] = "Apellido";
$proto12["m_srcTableName"] = "lcs_estudiante";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Direcccion",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "lcs_estudiante"
));

$proto14["m_sql"] = "Direcccion";
$proto14["m_srcTableName"] = "lcs_estudiante";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FNacimiento",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "lcs_estudiante"
));

$proto16["m_sql"] = "FNacimiento";
$proto16["m_srcTableName"] = "lcs_estudiante";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoRostro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "lcs_estudiante"
));

$proto18["m_sql"] = "FotoRostro";
$proto18["m_srcTableName"] = "lcs_estudiante";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "lcs_estudiante"
));

$proto20["m_sql"] = "Ingresado";
$proto20["m_srcTableName"] = "lcs_estudiante";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "_idCentro",
	"m_strTable" => "lcs_estudiante",
	"m_srcTableName" => "lcs_estudiante"
));

$proto22["m_sql"] = "`_idCentro`";
$proto22["m_srcTableName"] = "lcs_estudiante";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "lcs_estudiante";
$proto25["m_srcTableName"] = "lcs_estudiante";
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
$proto24["m_sql"] = "lcs_estudiante";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "lcs_estudiante";
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
$proto3["m_srcTableName"]="lcs_estudiante";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_estudiante = createSqlQuery_lcs_estudiante();


	
								
	
$tdatalcs_estudiante[".sqlquery"] = $queryData_lcs_estudiante;

$tableEvents["lcs_estudiante"] = new eventsBase;
$tdatalcs_estudiante[".hasEvents"] = false;

?>