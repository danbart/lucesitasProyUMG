<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_personal = array();	
	$tdatalcs_personal[".truncateText"] = true;
	$tdatalcs_personal[".NumberOfChars"] = 80; 
	$tdatalcs_personal[".ShortName"] = "lcs_personal";
	$tdatalcs_personal[".OwnerID"] = "";
	$tdatalcs_personal[".OriginalTable"] = "lcs_personal";

//	field labels
$fieldLabelslcs_personal = array();
$fieldToolTipslcs_personal = array();
$pageTitleslcs_personal = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_personal["Spanish"] = array();
	$fieldToolTipslcs_personal["Spanish"] = array();
	$pageTitleslcs_personal["Spanish"] = array();
	$fieldLabelslcs_personal["Spanish"]["idUsuario"] = "No.";
	$fieldToolTipslcs_personal["Spanish"]["idUsuario"] = "";
	$fieldLabelslcs_personal["Spanish"]["TipoUsuario"] = "Tipo Usuario";
	$fieldToolTipslcs_personal["Spanish"]["TipoUsuario"] = "";
	$fieldLabelslcs_personal["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipslcs_personal["Spanish"]["Nombre"] = "";
	$fieldLabelslcs_personal["Spanish"]["Apellido"] = "Apellido";
	$fieldToolTipslcs_personal["Spanish"]["Apellido"] = "";
	$fieldLabelslcs_personal["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipslcs_personal["Spanish"]["Telefono"] = "";
	$fieldLabelslcs_personal["Spanish"]["Email"] = "Email";
	$fieldToolTipslcs_personal["Spanish"]["Email"] = "";
	$fieldLabelslcs_personal["Spanish"]["Password"] = "Password";
	$fieldToolTipslcs_personal["Spanish"]["Password"] = "";
	$fieldLabelslcs_personal["Spanish"]["celular"] = "Celular";
	$fieldToolTipslcs_personal["Spanish"]["celular"] = "";
	$fieldLabelslcs_personal["Spanish"]["Voluntario"] = "Voluntario";
	$fieldToolTipslcs_personal["Spanish"]["Voluntario"] = "";
	$fieldLabelslcs_personal["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_personal["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_personal["Spanish"]["_idCentro"] = "No. Centro";
	$fieldToolTipslcs_personal["Spanish"]["_idCentro"] = "";
	$pageTitleslcs_personal["Spanish"]["add"] = "Personal - Añadir nuevo registro";
	$pageTitleslcs_personal["Spanish"]["edit"] = "Personal - Editar registro";
	$pageTitleslcs_personal["Spanish"]["view"] = "Personal, Ver registro";
	if (count($fieldToolTipslcs_personal["Spanish"]))
		$tdatalcs_personal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_personal[""] = array();
	$fieldToolTipslcs_personal[""] = array();
	$pageTitleslcs_personal[""] = array();
	$fieldLabelslcs_personal[""]["idUsuario"] = "Id Usuario";
	$fieldToolTipslcs_personal[""]["idUsuario"] = "";
	$fieldLabelslcs_personal[""]["TipoUsuario"] = "Tipo Usuario";
	$fieldToolTipslcs_personal[""]["TipoUsuario"] = "";
	$fieldLabelslcs_personal[""]["Nombre"] = "Nombre";
	$fieldToolTipslcs_personal[""]["Nombre"] = "";
	$fieldLabelslcs_personal[""]["Apellido"] = "Apellido";
	$fieldToolTipslcs_personal[""]["Apellido"] = "";
	$fieldLabelslcs_personal[""]["Telefono"] = "Telefono";
	$fieldToolTipslcs_personal[""]["Telefono"] = "";
	$fieldLabelslcs_personal[""]["Email"] = "Email";
	$fieldToolTipslcs_personal[""]["Email"] = "";
	$fieldLabelslcs_personal[""]["Password"] = "Password";
	$fieldToolTipslcs_personal[""]["Password"] = "";
	$fieldLabelslcs_personal[""]["celular"] = "Celular";
	$fieldToolTipslcs_personal[""]["celular"] = "";
	$fieldLabelslcs_personal[""]["Voluntario"] = "Voluntario";
	$fieldToolTipslcs_personal[""]["Voluntario"] = "";
	$fieldLabelslcs_personal[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_personal[""]["Ingresado"] = "";
	$fieldLabelslcs_personal[""]["_idCentro"] = "Id Centro";
	$fieldToolTipslcs_personal[""]["_idCentro"] = "";
	if (count($fieldToolTipslcs_personal[""]))
		$tdatalcs_personal[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_personal[".NCSearch"] = true;



$tdatalcs_personal[".shortTableName"] = "lcs_personal";
$tdatalcs_personal[".nSecOptions"] = 0;
$tdatalcs_personal[".recsPerRowList"] = 1;
$tdatalcs_personal[".mainTableOwnerID"] = "";
$tdatalcs_personal[".moveNext"] = 1;
$tdatalcs_personal[".nType"] = 0;

$tdatalcs_personal[".strOriginalTableName"] = "lcs_personal";




$tdatalcs_personal[".showAddInPopup"] = true;

$tdatalcs_personal[".showEditInPopup"] = true;

$tdatalcs_personal[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_personal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_personal[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_personal[".listAjax"] = true;
else 
	$tdatalcs_personal[".listAjax"] = false;

	$tdatalcs_personal[".audit"] = false;

	$tdatalcs_personal[".locking"] = false;

$tdatalcs_personal[".edit"] = true;

$tdatalcs_personal[".list"] = true;

$tdatalcs_personal[".view"] = true;

$tdatalcs_personal[".import"] = true;

$tdatalcs_personal[".exportTo"] = true;

$tdatalcs_personal[".printFriendly"] = true;

$tdatalcs_personal[".delete"] = true;

$tdatalcs_personal[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_personal[".searchSaving"] = false;
//

$tdatalcs_personal[".showSearchPanel"] = true;
		$tdatalcs_personal[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_personal[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_personal[".isUseAjaxSuggest"] = true;

$tdatalcs_personal[".rowHighlite"] = true;



$tdatalcs_personal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_personal[".isUseTimeForSearch"] = false;



$tdatalcs_personal[".useDetailsPreview"] = true;


$tdatalcs_personal[".allSearchFields"] = array();
$tdatalcs_personal[".filterFields"] = array();
$tdatalcs_personal[".requiredSearchFields"] = array();

$tdatalcs_personal[".allSearchFields"][] = "idUsuario";
	$tdatalcs_personal[".allSearchFields"][] = "TipoUsuario";
	$tdatalcs_personal[".allSearchFields"][] = "Nombre";
	$tdatalcs_personal[".allSearchFields"][] = "Apellido";
	$tdatalcs_personal[".allSearchFields"][] = "Telefono";
	$tdatalcs_personal[".allSearchFields"][] = "Email";
	$tdatalcs_personal[".allSearchFields"][] = "Password";
	$tdatalcs_personal[".allSearchFields"][] = "celular";
	$tdatalcs_personal[".allSearchFields"][] = "Voluntario";
	$tdatalcs_personal[".allSearchFields"][] = "Ingresado";
	$tdatalcs_personal[".allSearchFields"][] = "_idCentro";
	

$tdatalcs_personal[".googleLikeFields"] = array();
$tdatalcs_personal[".googleLikeFields"][] = "idUsuario";
$tdatalcs_personal[".googleLikeFields"][] = "TipoUsuario";
$tdatalcs_personal[".googleLikeFields"][] = "Nombre";
$tdatalcs_personal[".googleLikeFields"][] = "Apellido";
$tdatalcs_personal[".googleLikeFields"][] = "Telefono";
$tdatalcs_personal[".googleLikeFields"][] = "Email";
$tdatalcs_personal[".googleLikeFields"][] = "Password";
$tdatalcs_personal[".googleLikeFields"][] = "celular";
$tdatalcs_personal[".googleLikeFields"][] = "Voluntario";
$tdatalcs_personal[".googleLikeFields"][] = "Ingresado";
$tdatalcs_personal[".googleLikeFields"][] = "_idCentro";


$tdatalcs_personal[".advSearchFields"] = array();
$tdatalcs_personal[".advSearchFields"][] = "idUsuario";
$tdatalcs_personal[".advSearchFields"][] = "TipoUsuario";
$tdatalcs_personal[".advSearchFields"][] = "Nombre";
$tdatalcs_personal[".advSearchFields"][] = "Apellido";
$tdatalcs_personal[".advSearchFields"][] = "Telefono";
$tdatalcs_personal[".advSearchFields"][] = "Email";
$tdatalcs_personal[".advSearchFields"][] = "Password";
$tdatalcs_personal[".advSearchFields"][] = "celular";
$tdatalcs_personal[".advSearchFields"][] = "Voluntario";
$tdatalcs_personal[".advSearchFields"][] = "Ingresado";
$tdatalcs_personal[".advSearchFields"][] = "_idCentro";

$tdatalcs_personal[".tableType"] = "list";

$tdatalcs_personal[".printerPageOrientation"] = 0;
$tdatalcs_personal[".nPrinterPageScale"] = 100;

$tdatalcs_personal[".nPrinterSplitRecords"] = 40;

$tdatalcs_personal[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_personal[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_personal[".isViewPagePDF"] = true;
$tdatalcs_personal[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_personal[".isPrinterPagePDF"] = true;
$tdatalcs_personal[".nPrinterPagePDFScale"] = 100;


$tdatalcs_personal[".pageSize"] = 20;

$tdatalcs_personal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_personal[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_personal[".orderindexes"] = array();

$tdatalcs_personal[".sqlHead"] = "SELECT idUsuario,   TipoUsuario,   Nombre,   Apellido,   Telefono,   Email,   Password,   celular,   Voluntario,   Ingresado,   `_idCentro`";
$tdatalcs_personal[".sqlFrom"] = "FROM lcs_personal";
$tdatalcs_personal[".sqlWhereExpr"] = "";
$tdatalcs_personal[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_personal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_personal[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_personal = array();
$tableKeyslcs_personal[] = "idUsuario";
$tableKeyslcs_personal[] = "TipoUsuario";
$tableKeyslcs_personal[] = "Nombre";
$tableKeyslcs_personal[] = "Apellido";
$tableKeyslcs_personal[] = "Telefono";
$tableKeyslcs_personal[] = "Email";
$tableKeyslcs_personal[] = "Password";
$tableKeyslcs_personal[] = "celular";
$tableKeyslcs_personal[] = "Voluntario";
$tableKeyslcs_personal[] = "Ingresado";
$tableKeyslcs_personal[] = "_idCentro";
$tdatalcs_personal[".Keys"] = $tableKeyslcs_personal;

$tdatalcs_personal[".listFields"] = array();
$tdatalcs_personal[".listFields"][] = "idUsuario";
$tdatalcs_personal[".listFields"][] = "TipoUsuario";
$tdatalcs_personal[".listFields"][] = "Nombre";
$tdatalcs_personal[".listFields"][] = "Apellido";
$tdatalcs_personal[".listFields"][] = "Telefono";
$tdatalcs_personal[".listFields"][] = "Email";
$tdatalcs_personal[".listFields"][] = "Password";
$tdatalcs_personal[".listFields"][] = "celular";
$tdatalcs_personal[".listFields"][] = "Voluntario";
$tdatalcs_personal[".listFields"][] = "Ingresado";
$tdatalcs_personal[".listFields"][] = "_idCentro";

$tdatalcs_personal[".hideMobileList"] = array();


$tdatalcs_personal[".viewFields"] = array();
$tdatalcs_personal[".viewFields"][] = "idUsuario";
$tdatalcs_personal[".viewFields"][] = "TipoUsuario";
$tdatalcs_personal[".viewFields"][] = "Nombre";
$tdatalcs_personal[".viewFields"][] = "Apellido";
$tdatalcs_personal[".viewFields"][] = "Telefono";
$tdatalcs_personal[".viewFields"][] = "Email";
$tdatalcs_personal[".viewFields"][] = "Password";
$tdatalcs_personal[".viewFields"][] = "celular";
$tdatalcs_personal[".viewFields"][] = "Voluntario";
$tdatalcs_personal[".viewFields"][] = "Ingresado";
$tdatalcs_personal[".viewFields"][] = "_idCentro";

$tdatalcs_personal[".addFields"] = array();
$tdatalcs_personal[".addFields"][] = "TipoUsuario";
$tdatalcs_personal[".addFields"][] = "Nombre";
$tdatalcs_personal[".addFields"][] = "Apellido";
$tdatalcs_personal[".addFields"][] = "Telefono";
$tdatalcs_personal[".addFields"][] = "Email";
$tdatalcs_personal[".addFields"][] = "Password";
$tdatalcs_personal[".addFields"][] = "celular";
$tdatalcs_personal[".addFields"][] = "Voluntario";
$tdatalcs_personal[".addFields"][] = "_idCentro";

$tdatalcs_personal[".inlineAddFields"] = array();

$tdatalcs_personal[".editFields"] = array();
$tdatalcs_personal[".editFields"][] = "TipoUsuario";
$tdatalcs_personal[".editFields"][] = "Nombre";
$tdatalcs_personal[".editFields"][] = "Apellido";
$tdatalcs_personal[".editFields"][] = "Telefono";
$tdatalcs_personal[".editFields"][] = "Email";
$tdatalcs_personal[".editFields"][] = "Password";
$tdatalcs_personal[".editFields"][] = "celular";
$tdatalcs_personal[".editFields"][] = "Voluntario";
$tdatalcs_personal[".editFields"][] = "_idCentro";

$tdatalcs_personal[".inlineEditFields"] = array();

$tdatalcs_personal[".exportFields"] = array();
$tdatalcs_personal[".exportFields"][] = "idUsuario";
$tdatalcs_personal[".exportFields"][] = "TipoUsuario";
$tdatalcs_personal[".exportFields"][] = "Nombre";
$tdatalcs_personal[".exportFields"][] = "Apellido";
$tdatalcs_personal[".exportFields"][] = "Telefono";
$tdatalcs_personal[".exportFields"][] = "Email";
$tdatalcs_personal[".exportFields"][] = "Password";
$tdatalcs_personal[".exportFields"][] = "celular";
$tdatalcs_personal[".exportFields"][] = "Voluntario";
$tdatalcs_personal[".exportFields"][] = "Ingresado";
$tdatalcs_personal[".exportFields"][] = "_idCentro";

$tdatalcs_personal[".importFields"] = array();
$tdatalcs_personal[".importFields"][] = "TipoUsuario";
$tdatalcs_personal[".importFields"][] = "Nombre";
$tdatalcs_personal[".importFields"][] = "Apellido";
$tdatalcs_personal[".importFields"][] = "Telefono";
$tdatalcs_personal[".importFields"][] = "Email";
$tdatalcs_personal[".importFields"][] = "Password";
$tdatalcs_personal[".importFields"][] = "celular";
$tdatalcs_personal[".importFields"][] = "Voluntario";
$tdatalcs_personal[".importFields"][] = "_idCentro";

$tdatalcs_personal[".printFields"] = array();
$tdatalcs_personal[".printFields"][] = "idUsuario";
$tdatalcs_personal[".printFields"][] = "TipoUsuario";
$tdatalcs_personal[".printFields"][] = "Nombre";
$tdatalcs_personal[".printFields"][] = "Apellido";
$tdatalcs_personal[".printFields"][] = "Telefono";
$tdatalcs_personal[".printFields"][] = "Email";
$tdatalcs_personal[".printFields"][] = "Password";
$tdatalcs_personal[".printFields"][] = "celular";
$tdatalcs_personal[".printFields"][] = "Voluntario";
$tdatalcs_personal[".printFields"][] = "Ingresado";
$tdatalcs_personal[".printFields"][] = "_idCentro";

//	idUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idUsuario";
	$fdata["GoodName"] = "idUsuario";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","idUsuario"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idUsuario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idUsuario";
	
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_personal["idUsuario"] = $fdata;
//	TipoUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoUsuario";
	$fdata["GoodName"] = "TipoUsuario";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","TipoUsuario"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoUsuario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoUsuario";
	
		
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Administrador";
	$edata["LookupValues"][] = "Usuario";

		
		$edata["SelectSize"] = 1;
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_personal["TipoUsuario"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","Nombre"); 
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
			$edata["EditParams"].= " maxlength=45";
	
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

	

	
	$tdatalcs_personal["Nombre"] = $fdata;
//	Apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Apellido";
	$fdata["GoodName"] = "Apellido";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","Apellido"); 
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
			$edata["EditParams"].= " maxlength=45";
	
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

	

	
	$tdatalcs_personal["Apellido"] = $fdata;
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","Telefono"); 
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
			$edata["EditParams"].= " maxlength=45";
	
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

	

	
	$tdatalcs_personal["Telefono"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","Email"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";
	
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";
	
		$edata["controlWidth"] = 300;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_personal["Email"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","Password"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";
	
		
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
	
	$edata = array("EditFormat" => "Password");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 300;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_personal["Password"] = $fdata;
//	celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "celular";
	$fdata["GoodName"] = "celular";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","celular"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "celular"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "celular";
	
		
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
			$edata["EditParams"].= " maxlength=45";
	
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

	

	
	$tdatalcs_personal["celular"] = $fdata;
//	Voluntario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Voluntario";
	$fdata["GoodName"] = "Voluntario";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","Voluntario"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Voluntario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Voluntario";
	
		
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatalcs_personal["Voluntario"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","Ingresado"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_personal["Ingresado"] = $fdata;
//	_idCentro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "_idCentro";
	$fdata["GoodName"] = "_idCentro";
	$fdata["ownerTable"] = "lcs_personal";
	$fdata["Label"] = GetFieldLabel("lcs_personal","_idCentro"); 
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
		
		
			
	$edata["LinkField"] = "Nombre";
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatalcs_personal["_idCentro"] = $fdata;

	
$tables_data["lcs_personal"]=&$tdatalcs_personal;
$field_labels["lcs_personal"] = &$fieldLabelslcs_personal;
$fieldToolTips["lcs_personal"] = &$fieldToolTipslcs_personal;
$page_titles["lcs_personal"] = &$pageTitleslcs_personal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_personal"] = array();
//	lcs_sesion
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lcs_sesion";
		$detailsParam["dOriginalTable"] = "lcs_sesion";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lcs_sesion";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["lcs_personal"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lcs_personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lcs_personal"][$dIndex]["masterKeys"][]="idUsuario";

				$detailsTablesData["lcs_personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lcs_personal"][$dIndex]["detailKeys"][]="l_idUsuario";
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_personal"] = array();


	
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
					$masterTablesData["lcs_personal"][0] = $masterParams;	
				$masterTablesData["lcs_personal"][0]["masterKeys"] = array();
	$masterTablesData["lcs_personal"][0]["masterKeys"][]="idCentro";
				$masterTablesData["lcs_personal"][0]["detailKeys"] = array();
	$masterTablesData["lcs_personal"][0]["detailKeys"][]="_idCentro";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_personal()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idUsuario,   TipoUsuario,   Nombre,   Apellido,   Telefono,   Email,   Password,   celular,   Voluntario,   Ingresado,   `_idCentro`";
$proto3["m_strFrom"] = "FROM lcs_personal";
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
	"m_strName" => "idUsuario",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto8["m_sql"] = "idUsuario";
$proto8["m_srcTableName"] = "lcs_personal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoUsuario",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto10["m_sql"] = "TipoUsuario";
$proto10["m_srcTableName"] = "lcs_personal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto12["m_sql"] = "Nombre";
$proto12["m_srcTableName"] = "lcs_personal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Apellido",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto14["m_sql"] = "Apellido";
$proto14["m_srcTableName"] = "lcs_personal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto16["m_sql"] = "Telefono";
$proto16["m_srcTableName"] = "lcs_personal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto18["m_sql"] = "Email";
$proto18["m_srcTableName"] = "lcs_personal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto20["m_sql"] = "Password";
$proto20["m_srcTableName"] = "lcs_personal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "celular",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto22["m_sql"] = "celular";
$proto22["m_srcTableName"] = "lcs_personal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Voluntario",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto24["m_sql"] = "Voluntario";
$proto24["m_srcTableName"] = "lcs_personal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto26["m_sql"] = "Ingresado";
$proto26["m_srcTableName"] = "lcs_personal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto3["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "_idCentro",
	"m_strTable" => "lcs_personal",
	"m_srcTableName" => "lcs_personal"
));

$proto28["m_sql"] = "`_idCentro`";
$proto28["m_srcTableName"] = "lcs_personal";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "lcs_personal";
$proto31["m_srcTableName"] = "lcs_personal";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "idUsuario";
$proto31["m_columns"][] = "TipoUsuario";
$proto31["m_columns"][] = "Nombre";
$proto31["m_columns"][] = "Apellido";
$proto31["m_columns"][] = "Telefono";
$proto31["m_columns"][] = "Email";
$proto31["m_columns"][] = "Password";
$proto31["m_columns"][] = "celular";
$proto31["m_columns"][] = "Voluntario";
$proto31["m_columns"][] = "Ingresado";
$proto31["m_columns"][] = "_idCentro";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "lcs_personal";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "lcs_personal";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="lcs_personal";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_personal = createSqlQuery_lcs_personal();


	
											
	
$tdatalcs_personal[".sqlquery"] = $queryData_lcs_personal;

$tableEvents["lcs_personal"] = new eventsBase;
$tdatalcs_personal[".hasEvents"] = false;

?>