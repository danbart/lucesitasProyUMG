<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_encargado = array();	
	$tdatalcs_encargado[".truncateText"] = true;
	$tdatalcs_encargado[".NumberOfChars"] = 80; 
	$tdatalcs_encargado[".ShortName"] = "lcs_encargado";
	$tdatalcs_encargado[".OwnerID"] = "";
	$tdatalcs_encargado[".OriginalTable"] = "lcs_encargado";

//	field labels
$fieldLabelslcs_encargado = array();
$fieldToolTipslcs_encargado = array();
$pageTitleslcs_encargado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_encargado["Spanish"] = array();
	$fieldToolTipslcs_encargado["Spanish"] = array();
	$pageTitleslcs_encargado["Spanish"] = array();
	$fieldLabelslcs_encargado["Spanish"]["idEncargado"] = "No.";
	$fieldToolTipslcs_encargado["Spanish"]["idEncargado"] = "";
	$fieldLabelslcs_encargado["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipslcs_encargado["Spanish"]["Nombre"] = "";
	$fieldLabelslcs_encargado["Spanish"]["Apellido"] = "Apellido";
	$fieldToolTipslcs_encargado["Spanish"]["Apellido"] = "";
	$fieldLabelslcs_encargado["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipslcs_encargado["Spanish"]["Direccion"] = "";
	$fieldLabelslcs_encargado["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipslcs_encargado["Spanish"]["Telefono"] = "";
	$fieldLabelslcs_encargado["Spanish"]["Ocupacion"] = "Ocupacion";
	$fieldToolTipslcs_encargado["Spanish"]["Ocupacion"] = "";
	$fieldLabelslcs_encargado["Spanish"]["Fnac"] = "Fecha Nacimiento";
	$fieldToolTipslcs_encargado["Spanish"]["Fnac"] = "";
	$fieldLabelslcs_encargado["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_encargado["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_encargado["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_encargado["Spanish"]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_encargado["Spanish"]))
		$tdatalcs_encargado[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_encargado[""] = array();
	$fieldToolTipslcs_encargado[""] = array();
	$pageTitleslcs_encargado[""] = array();
	$fieldLabelslcs_encargado[""]["idEncargado"] = "Id Encargado";
	$fieldToolTipslcs_encargado[""]["idEncargado"] = "";
	$fieldLabelslcs_encargado[""]["Nombre"] = "Nombre";
	$fieldToolTipslcs_encargado[""]["Nombre"] = "";
	$fieldLabelslcs_encargado[""]["Apellido"] = "Apellido";
	$fieldToolTipslcs_encargado[""]["Apellido"] = "";
	$fieldLabelslcs_encargado[""]["Direccion"] = "Direccion";
	$fieldToolTipslcs_encargado[""]["Direccion"] = "";
	$fieldLabelslcs_encargado[""]["Telefono"] = "Telefono";
	$fieldToolTipslcs_encargado[""]["Telefono"] = "";
	$fieldLabelslcs_encargado[""]["Ocupacion"] = "Ocupacion";
	$fieldToolTipslcs_encargado[""]["Ocupacion"] = "";
	$fieldLabelslcs_encargado[""]["Fnac"] = "Fnac";
	$fieldToolTipslcs_encargado[""]["Fnac"] = "";
	$fieldLabelslcs_encargado[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_encargado[""]["Ingresado"] = "";
	$fieldLabelslcs_encargado[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_encargado[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_encargado[""]))
		$tdatalcs_encargado[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_encargado[".NCSearch"] = true;



$tdatalcs_encargado[".shortTableName"] = "lcs_encargado";
$tdatalcs_encargado[".nSecOptions"] = 0;
$tdatalcs_encargado[".recsPerRowList"] = 1;
$tdatalcs_encargado[".mainTableOwnerID"] = "";
$tdatalcs_encargado[".moveNext"] = 1;
$tdatalcs_encargado[".nType"] = 0;

$tdatalcs_encargado[".strOriginalTableName"] = "lcs_encargado";




$tdatalcs_encargado[".showAddInPopup"] = true;

$tdatalcs_encargado[".showEditInPopup"] = true;

$tdatalcs_encargado[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_encargado[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_encargado[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_encargado[".listAjax"] = true;
else 
	$tdatalcs_encargado[".listAjax"] = false;

	$tdatalcs_encargado[".audit"] = false;

	$tdatalcs_encargado[".locking"] = false;

$tdatalcs_encargado[".edit"] = true;

$tdatalcs_encargado[".list"] = true;

$tdatalcs_encargado[".view"] = true;

$tdatalcs_encargado[".import"] = true;

$tdatalcs_encargado[".exportTo"] = true;

$tdatalcs_encargado[".printFriendly"] = true;

$tdatalcs_encargado[".delete"] = true;

$tdatalcs_encargado[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_encargado[".searchSaving"] = false;
//

$tdatalcs_encargado[".showSearchPanel"] = true;
		$tdatalcs_encargado[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_encargado[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_encargado[".isUseAjaxSuggest"] = true;

$tdatalcs_encargado[".rowHighlite"] = true;



$tdatalcs_encargado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_encargado[".isUseTimeForSearch"] = false;





$tdatalcs_encargado[".allSearchFields"] = array();
$tdatalcs_encargado[".filterFields"] = array();
$tdatalcs_encargado[".requiredSearchFields"] = array();

$tdatalcs_encargado[".allSearchFields"][] = "idEncargado";
	$tdatalcs_encargado[".allSearchFields"][] = "Nombre";
	$tdatalcs_encargado[".allSearchFields"][] = "Apellido";
	$tdatalcs_encargado[".allSearchFields"][] = "Direccion";
	$tdatalcs_encargado[".allSearchFields"][] = "Telefono";
	$tdatalcs_encargado[".allSearchFields"][] = "Ocupacion";
	$tdatalcs_encargado[".allSearchFields"][] = "Fnac";
	$tdatalcs_encargado[".allSearchFields"][] = "Ingresado";
	$tdatalcs_encargado[".allSearchFields"][] = "_idEstudiante";
	

$tdatalcs_encargado[".googleLikeFields"] = array();
$tdatalcs_encargado[".googleLikeFields"][] = "idEncargado";
$tdatalcs_encargado[".googleLikeFields"][] = "Nombre";
$tdatalcs_encargado[".googleLikeFields"][] = "Apellido";
$tdatalcs_encargado[".googleLikeFields"][] = "Direccion";
$tdatalcs_encargado[".googleLikeFields"][] = "Telefono";
$tdatalcs_encargado[".googleLikeFields"][] = "Ocupacion";
$tdatalcs_encargado[".googleLikeFields"][] = "Fnac";
$tdatalcs_encargado[".googleLikeFields"][] = "Ingresado";
$tdatalcs_encargado[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_encargado[".advSearchFields"] = array();
$tdatalcs_encargado[".advSearchFields"][] = "idEncargado";
$tdatalcs_encargado[".advSearchFields"][] = "Nombre";
$tdatalcs_encargado[".advSearchFields"][] = "Apellido";
$tdatalcs_encargado[".advSearchFields"][] = "Direccion";
$tdatalcs_encargado[".advSearchFields"][] = "Telefono";
$tdatalcs_encargado[".advSearchFields"][] = "Ocupacion";
$tdatalcs_encargado[".advSearchFields"][] = "Fnac";
$tdatalcs_encargado[".advSearchFields"][] = "Ingresado";
$tdatalcs_encargado[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_encargado[".tableType"] = "list";

$tdatalcs_encargado[".printerPageOrientation"] = 0;
$tdatalcs_encargado[".nPrinterPageScale"] = 100;

$tdatalcs_encargado[".nPrinterSplitRecords"] = 40;

$tdatalcs_encargado[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_encargado[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_encargado[".isViewPagePDF"] = true;
$tdatalcs_encargado[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_encargado[".isPrinterPagePDF"] = true;
$tdatalcs_encargado[".nPrinterPagePDFScale"] = 100;


$tdatalcs_encargado[".pageSize"] = 20;

$tdatalcs_encargado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_encargado[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_encargado[".orderindexes"] = array();

$tdatalcs_encargado[".sqlHead"] = "SELECT idEncargado,   Nombre,   Apellido,   Direccion,   Telefono,   Ocupacion,   Fnac,   Ingresado,   `_idEstudiante`";
$tdatalcs_encargado[".sqlFrom"] = "FROM lcs_encargado";
$tdatalcs_encargado[".sqlWhereExpr"] = "";
$tdatalcs_encargado[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_encargado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_encargado[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_encargado = array();
$tableKeyslcs_encargado[] = "idEncargado";
$tdatalcs_encargado[".Keys"] = $tableKeyslcs_encargado;

$tdatalcs_encargado[".listFields"] = array();
$tdatalcs_encargado[".listFields"][] = "idEncargado";
$tdatalcs_encargado[".listFields"][] = "Nombre";
$tdatalcs_encargado[".listFields"][] = "Apellido";
$tdatalcs_encargado[".listFields"][] = "Direccion";
$tdatalcs_encargado[".listFields"][] = "Telefono";
$tdatalcs_encargado[".listFields"][] = "Ocupacion";
$tdatalcs_encargado[".listFields"][] = "Fnac";
$tdatalcs_encargado[".listFields"][] = "Ingresado";
$tdatalcs_encargado[".listFields"][] = "_idEstudiante";

$tdatalcs_encargado[".hideMobileList"] = array();


$tdatalcs_encargado[".viewFields"] = array();
$tdatalcs_encargado[".viewFields"][] = "idEncargado";
$tdatalcs_encargado[".viewFields"][] = "Nombre";
$tdatalcs_encargado[".viewFields"][] = "Apellido";
$tdatalcs_encargado[".viewFields"][] = "Direccion";
$tdatalcs_encargado[".viewFields"][] = "Telefono";
$tdatalcs_encargado[".viewFields"][] = "Ocupacion";
$tdatalcs_encargado[".viewFields"][] = "Fnac";
$tdatalcs_encargado[".viewFields"][] = "Ingresado";
$tdatalcs_encargado[".viewFields"][] = "_idEstudiante";

$tdatalcs_encargado[".addFields"] = array();
$tdatalcs_encargado[".addFields"][] = "Nombre";
$tdatalcs_encargado[".addFields"][] = "Apellido";
$tdatalcs_encargado[".addFields"][] = "Direccion";
$tdatalcs_encargado[".addFields"][] = "Telefono";
$tdatalcs_encargado[".addFields"][] = "Ocupacion";
$tdatalcs_encargado[".addFields"][] = "Fnac";
$tdatalcs_encargado[".addFields"][] = "_idEstudiante";

$tdatalcs_encargado[".inlineAddFields"] = array();

$tdatalcs_encargado[".editFields"] = array();
$tdatalcs_encargado[".editFields"][] = "Nombre";
$tdatalcs_encargado[".editFields"][] = "Apellido";
$tdatalcs_encargado[".editFields"][] = "Direccion";
$tdatalcs_encargado[".editFields"][] = "Telefono";
$tdatalcs_encargado[".editFields"][] = "Ocupacion";
$tdatalcs_encargado[".editFields"][] = "Fnac";
$tdatalcs_encargado[".editFields"][] = "_idEstudiante";

$tdatalcs_encargado[".inlineEditFields"] = array();

$tdatalcs_encargado[".exportFields"] = array();
$tdatalcs_encargado[".exportFields"][] = "idEncargado";
$tdatalcs_encargado[".exportFields"][] = "Nombre";
$tdatalcs_encargado[".exportFields"][] = "Apellido";
$tdatalcs_encargado[".exportFields"][] = "Direccion";
$tdatalcs_encargado[".exportFields"][] = "Telefono";
$tdatalcs_encargado[".exportFields"][] = "Ocupacion";
$tdatalcs_encargado[".exportFields"][] = "Fnac";
$tdatalcs_encargado[".exportFields"][] = "Ingresado";
$tdatalcs_encargado[".exportFields"][] = "_idEstudiante";

$tdatalcs_encargado[".importFields"] = array();
$tdatalcs_encargado[".importFields"][] = "Nombre";
$tdatalcs_encargado[".importFields"][] = "Apellido";
$tdatalcs_encargado[".importFields"][] = "Direccion";
$tdatalcs_encargado[".importFields"][] = "Telefono";
$tdatalcs_encargado[".importFields"][] = "Ocupacion";
$tdatalcs_encargado[".importFields"][] = "Fnac";
$tdatalcs_encargado[".importFields"][] = "_idEstudiante";

$tdatalcs_encargado[".printFields"] = array();
$tdatalcs_encargado[".printFields"][] = "idEncargado";
$tdatalcs_encargado[".printFields"][] = "Nombre";
$tdatalcs_encargado[".printFields"][] = "Apellido";
$tdatalcs_encargado[".printFields"][] = "Direccion";
$tdatalcs_encargado[".printFields"][] = "Telefono";
$tdatalcs_encargado[".printFields"][] = "Ocupacion";
$tdatalcs_encargado[".printFields"][] = "Fnac";
$tdatalcs_encargado[".printFields"][] = "Ingresado";
$tdatalcs_encargado[".printFields"][] = "_idEstudiante";

//	idEncargado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idEncargado";
	$fdata["GoodName"] = "idEncargado";
	$fdata["ownerTable"] = "lcs_encargado";
	$fdata["Label"] = GetFieldLabel("lcs_encargado","idEncargado"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idEncargado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEncargado";
	
		
		
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

	

	
	$tdatalcs_encargado["idEncargado"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "lcs_encargado";
	$fdata["Label"] = GetFieldLabel("lcs_encargado","Nombre"); 
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

	

	
	$tdatalcs_encargado["Nombre"] = $fdata;
//	Apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Apellido";
	$fdata["GoodName"] = "Apellido";
	$fdata["ownerTable"] = "lcs_encargado";
	$fdata["Label"] = GetFieldLabel("lcs_encargado","Apellido"); 
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

	

	
	$tdatalcs_encargado["Apellido"] = $fdata;
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "lcs_encargado";
	$fdata["Label"] = GetFieldLabel("lcs_encargado","Direccion"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Direccion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direccion";
	
		
		
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

	

	
	$tdatalcs_encargado["Direccion"] = $fdata;
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "lcs_encargado";
	$fdata["Label"] = GetFieldLabel("lcs_encargado","Telefono"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Telefono"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telefono";
	
		
		
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
	
			
		$edata["strEditMask"] = "999-999-9999"; 

	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";
	
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

	

	
	$tdatalcs_encargado["Telefono"] = $fdata;
//	Ocupacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ocupacion";
	$fdata["GoodName"] = "Ocupacion";
	$fdata["ownerTable"] = "lcs_encargado";
	$fdata["Label"] = GetFieldLabel("lcs_encargado","Ocupacion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Ocupacion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ocupacion";
	
		
		
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

	

	
	$tdatalcs_encargado["Ocupacion"] = $fdata;
//	Fnac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Fnac";
	$fdata["GoodName"] = "Fnac";
	$fdata["ownerTable"] = "lcs_encargado";
	$fdata["Label"] = GetFieldLabel("lcs_encargado","Fnac"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Fnac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fnac";
	
		
		
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

	

	
	$tdatalcs_encargado["Fnac"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_encargado";
	$fdata["Label"] = GetFieldLabel("lcs_encargado","Ingresado"); 
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

	

	
	$tdatalcs_encargado["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_encargado";
	$fdata["Label"] = GetFieldLabel("lcs_encargado","_idEstudiante"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "_idEstudiante"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_idEstudiante`";
	
		
		
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
	$edata["LookupTable"] = "lcs_estudiante";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "idEstudiante";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";
	
		
	$edata["LookupOrderBy"] = "Nombre";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatalcs_encargado["_idEstudiante"] = $fdata;

	
$tables_data["lcs_encargado"]=&$tdatalcs_encargado;
$field_labels["lcs_encargado"] = &$fieldLabelslcs_encargado;
$fieldToolTips["lcs_encargado"] = &$fieldToolTipslcs_encargado;
$page_titles["lcs_encargado"] = &$pageTitleslcs_encargado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_encargado"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_encargado"] = array();


	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Reporte Estudiantes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Reporte_Estudiantes";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_encargado"][0] = $masterParams;	
				$masterTablesData["lcs_encargado"][0]["masterKeys"] = array();
	$masterTablesData["lcs_encargado"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_encargado"][0]["detailKeys"] = array();
	$masterTablesData["lcs_encargado"][0]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="RepEstudMed";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "RepEstudMed";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_encargado"][1] = $masterParams;	
				$masterTablesData["lcs_encargado"][1]["masterKeys"] = array();
	$masterTablesData["lcs_encargado"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_encargado"][1]["detailKeys"] = array();
	$masterTablesData["lcs_encargado"][1]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistSocial";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistSocial";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_encargado"][2] = $masterParams;	
				$masterTablesData["lcs_encargado"][2]["masterKeys"] = array();
	$masterTablesData["lcs_encargado"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_encargado"][2]["detailKeys"] = array();
	$masterTablesData["lcs_encargado"][2]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistLengua";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistLengua";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_encargado"][3] = $masterParams;	
				$masterTablesData["lcs_encargado"][3]["masterKeys"] = array();
	$masterTablesData["lcs_encargado"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_encargado"][3]["detailKeys"] = array();
	$masterTablesData["lcs_encargado"][3]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistEmoci";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistEmoci";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_encargado"][4] = $masterParams;	
				$masterTablesData["lcs_encargado"][4]["masterKeys"] = array();
	$masterTablesData["lcs_encargado"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_encargado"][4]["detailKeys"] = array();
	$masterTablesData["lcs_encargado"][4]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistEmbarazo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistEmbarazo";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_encargado"][5] = $masterParams;	
				$masterTablesData["lcs_encargado"][5]["masterKeys"] = array();
	$masterTablesData["lcs_encargado"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_encargado"][5]["detailKeys"] = array();
	$masterTablesData["lcs_encargado"][5]["detailKeys"][]="_idEstudiante";
		
	
				$strOriginalDetailsTable="lcs_estudiante";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="EstuHistCaracter";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "EstuHistCaracter";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lcs_encargado"][6] = $masterParams;	
				$masterTablesData["lcs_encargado"][6]["masterKeys"] = array();
	$masterTablesData["lcs_encargado"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_encargado"][6]["detailKeys"] = array();
	$masterTablesData["lcs_encargado"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_encargado()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idEncargado,   Nombre,   Apellido,   Direccion,   Telefono,   Ocupacion,   Fnac,   Ingresado,   `_idEstudiante`";
$proto3["m_strFrom"] = "FROM lcs_encargado";
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
	"m_strName" => "idEncargado",
	"m_strTable" => "lcs_encargado",
	"m_srcTableName" => "lcs_encargado"
));

$proto8["m_sql"] = "idEncargado";
$proto8["m_srcTableName"] = "lcs_encargado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "lcs_encargado",
	"m_srcTableName" => "lcs_encargado"
));

$proto10["m_sql"] = "Nombre";
$proto10["m_srcTableName"] = "lcs_encargado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Apellido",
	"m_strTable" => "lcs_encargado",
	"m_srcTableName" => "lcs_encargado"
));

$proto12["m_sql"] = "Apellido";
$proto12["m_srcTableName"] = "lcs_encargado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "lcs_encargado",
	"m_srcTableName" => "lcs_encargado"
));

$proto14["m_sql"] = "Direccion";
$proto14["m_srcTableName"] = "lcs_encargado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "lcs_encargado",
	"m_srcTableName" => "lcs_encargado"
));

$proto16["m_sql"] = "Telefono";
$proto16["m_srcTableName"] = "lcs_encargado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Ocupacion",
	"m_strTable" => "lcs_encargado",
	"m_srcTableName" => "lcs_encargado"
));

$proto18["m_sql"] = "Ocupacion";
$proto18["m_srcTableName"] = "lcs_encargado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Fnac",
	"m_strTable" => "lcs_encargado",
	"m_srcTableName" => "lcs_encargado"
));

$proto20["m_sql"] = "Fnac";
$proto20["m_srcTableName"] = "lcs_encargado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_encargado",
	"m_srcTableName" => "lcs_encargado"
));

$proto22["m_sql"] = "Ingresado";
$proto22["m_srcTableName"] = "lcs_encargado";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_encargado",
	"m_srcTableName" => "lcs_encargado"
));

$proto24["m_sql"] = "`_idEstudiante`";
$proto24["m_srcTableName"] = "lcs_encargado";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "lcs_encargado";
$proto27["m_srcTableName"] = "lcs_encargado";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "idEncargado";
$proto27["m_columns"][] = "Nombre";
$proto27["m_columns"][] = "Apellido";
$proto27["m_columns"][] = "Direccion";
$proto27["m_columns"][] = "Telefono";
$proto27["m_columns"][] = "Ocupacion";
$proto27["m_columns"][] = "Fnac";
$proto27["m_columns"][] = "Ingresado";
$proto27["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "lcs_encargado";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "lcs_encargado";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="lcs_encargado";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_encargado = createSqlQuery_lcs_encargado();


	
									
	
$tdatalcs_encargado[".sqlquery"] = $queryData_lcs_encargado;

$tableEvents["lcs_encargado"] = new eventsBase;
$tdatalcs_encargado[".hasEvents"] = false;

?>