<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_medicamento = array();	
	$tdatalcs_medicamento[".truncateText"] = true;
	$tdatalcs_medicamento[".NumberOfChars"] = 80; 
	$tdatalcs_medicamento[".ShortName"] = "lcs_medicamento";
	$tdatalcs_medicamento[".OwnerID"] = "";
	$tdatalcs_medicamento[".OriginalTable"] = "lcs_medicamento";

//	field labels
$fieldLabelslcs_medicamento = array();
$fieldToolTipslcs_medicamento = array();
$pageTitleslcs_medicamento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_medicamento["Spanish"] = array();
	$fieldToolTipslcs_medicamento["Spanish"] = array();
	$pageTitleslcs_medicamento["Spanish"] = array();
	$fieldLabelslcs_medicamento["Spanish"]["idMedicamento"] = "No.";
	$fieldToolTipslcs_medicamento["Spanish"]["idMedicamento"] = "";
	$fieldLabelslcs_medicamento["Spanish"]["TipoMedicamento"] = "Tipo Medicamento";
	$fieldToolTipslcs_medicamento["Spanish"]["TipoMedicamento"] = "";
	$fieldLabelslcs_medicamento["Spanish"]["Hora"] = "Dosis a cuantas Horas";
	$fieldToolTipslcs_medicamento["Spanish"]["Hora"] = "";
	$fieldLabelslcs_medicamento["Spanish"]["Dosis"] = "Cuantas Dosis";
	$fieldToolTipslcs_medicamento["Spanish"]["Dosis"] = "";
	$fieldLabelslcs_medicamento["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_medicamento["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_medicamento["Spanish"]["_idEnfermedades"] = "Enfermedades";
	$fieldToolTipslcs_medicamento["Spanish"]["_idEnfermedades"] = "";
	$fieldLabelslcs_medicamento["Spanish"]["NombreMed"] = "Nombre Medicamento";
	$fieldToolTipslcs_medicamento["Spanish"]["NombreMed"] = "";
	$fieldLabelslcs_medicamento["Spanish"]["dias"] = "Cantidad de Dias";
	$fieldToolTipslcs_medicamento["Spanish"]["dias"] = "";
	if (count($fieldToolTipslcs_medicamento["Spanish"]))
		$tdatalcs_medicamento[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_medicamento[""] = array();
	$fieldToolTipslcs_medicamento[""] = array();
	$pageTitleslcs_medicamento[""] = array();
	$fieldLabelslcs_medicamento[""]["idMedicamento"] = "Id Medicamento";
	$fieldToolTipslcs_medicamento[""]["idMedicamento"] = "";
	$fieldLabelslcs_medicamento[""]["TipoMedicamento"] = "Tipo Medicamento";
	$fieldToolTipslcs_medicamento[""]["TipoMedicamento"] = "";
	$fieldLabelslcs_medicamento[""]["Hora"] = "Hora";
	$fieldToolTipslcs_medicamento[""]["Hora"] = "";
	$fieldLabelslcs_medicamento[""]["Dosis"] = "Dosis";
	$fieldToolTipslcs_medicamento[""]["Dosis"] = "";
	$fieldLabelslcs_medicamento[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_medicamento[""]["Ingresado"] = "";
	$fieldLabelslcs_medicamento[""]["_idEnfermedades"] = "Id Enfermedades";
	$fieldToolTipslcs_medicamento[""]["_idEnfermedades"] = "";
	$fieldLabelslcs_medicamento[""]["NombreMed"] = "Nombre Med";
	$fieldToolTipslcs_medicamento[""]["NombreMed"] = "";
	$fieldLabelslcs_medicamento[""]["dias"] = "Dias";
	$fieldToolTipslcs_medicamento[""]["dias"] = "";
	if (count($fieldToolTipslcs_medicamento[""]))
		$tdatalcs_medicamento[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_medicamento[".NCSearch"] = true;



$tdatalcs_medicamento[".shortTableName"] = "lcs_medicamento";
$tdatalcs_medicamento[".nSecOptions"] = 0;
$tdatalcs_medicamento[".recsPerRowList"] = 1;
$tdatalcs_medicamento[".mainTableOwnerID"] = "";
$tdatalcs_medicamento[".moveNext"] = 1;
$tdatalcs_medicamento[".nType"] = 0;

$tdatalcs_medicamento[".strOriginalTableName"] = "lcs_medicamento";




$tdatalcs_medicamento[".showAddInPopup"] = true;

$tdatalcs_medicamento[".showEditInPopup"] = true;

$tdatalcs_medicamento[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_medicamento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_medicamento[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_medicamento[".listAjax"] = true;
else 
	$tdatalcs_medicamento[".listAjax"] = false;

	$tdatalcs_medicamento[".audit"] = true;

	$tdatalcs_medicamento[".locking"] = false;

$tdatalcs_medicamento[".edit"] = true;

$tdatalcs_medicamento[".list"] = true;

$tdatalcs_medicamento[".view"] = true;

$tdatalcs_medicamento[".import"] = true;

$tdatalcs_medicamento[".exportTo"] = true;

$tdatalcs_medicamento[".printFriendly"] = true;

$tdatalcs_medicamento[".delete"] = true;

$tdatalcs_medicamento[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_medicamento[".searchSaving"] = false;
//

$tdatalcs_medicamento[".showSearchPanel"] = true;
		$tdatalcs_medicamento[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_medicamento[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_medicamento[".isUseAjaxSuggest"] = true;

$tdatalcs_medicamento[".rowHighlite"] = true;



$tdatalcs_medicamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_medicamento[".isUseTimeForSearch"] = false;





$tdatalcs_medicamento[".allSearchFields"] = array();
$tdatalcs_medicamento[".filterFields"] = array();
$tdatalcs_medicamento[".requiredSearchFields"] = array();

$tdatalcs_medicamento[".allSearchFields"][] = "idMedicamento";
	$tdatalcs_medicamento[".allSearchFields"][] = "TipoMedicamento";
	$tdatalcs_medicamento[".allSearchFields"][] = "NombreMed";
	$tdatalcs_medicamento[".allSearchFields"][] = "dias";
	$tdatalcs_medicamento[".allSearchFields"][] = "Hora";
	$tdatalcs_medicamento[".allSearchFields"][] = "Dosis";
	$tdatalcs_medicamento[".allSearchFields"][] = "Ingresado";
	$tdatalcs_medicamento[".allSearchFields"][] = "_idEnfermedades";
	

$tdatalcs_medicamento[".googleLikeFields"] = array();
$tdatalcs_medicamento[".googleLikeFields"][] = "idMedicamento";
$tdatalcs_medicamento[".googleLikeFields"][] = "TipoMedicamento";
$tdatalcs_medicamento[".googleLikeFields"][] = "NombreMed";
$tdatalcs_medicamento[".googleLikeFields"][] = "dias";
$tdatalcs_medicamento[".googleLikeFields"][] = "Hora";
$tdatalcs_medicamento[".googleLikeFields"][] = "Dosis";
$tdatalcs_medicamento[".googleLikeFields"][] = "Ingresado";
$tdatalcs_medicamento[".googleLikeFields"][] = "_idEnfermedades";


$tdatalcs_medicamento[".advSearchFields"] = array();
$tdatalcs_medicamento[".advSearchFields"][] = "idMedicamento";
$tdatalcs_medicamento[".advSearchFields"][] = "TipoMedicamento";
$tdatalcs_medicamento[".advSearchFields"][] = "NombreMed";
$tdatalcs_medicamento[".advSearchFields"][] = "dias";
$tdatalcs_medicamento[".advSearchFields"][] = "Hora";
$tdatalcs_medicamento[".advSearchFields"][] = "Dosis";
$tdatalcs_medicamento[".advSearchFields"][] = "Ingresado";
$tdatalcs_medicamento[".advSearchFields"][] = "_idEnfermedades";

$tdatalcs_medicamento[".tableType"] = "list";

$tdatalcs_medicamento[".printerPageOrientation"] = 0;
$tdatalcs_medicamento[".nPrinterPageScale"] = 100;

$tdatalcs_medicamento[".nPrinterSplitRecords"] = 40;

$tdatalcs_medicamento[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_medicamento[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_medicamento[".isViewPagePDF"] = true;
$tdatalcs_medicamento[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_medicamento[".isPrinterPagePDF"] = true;
$tdatalcs_medicamento[".nPrinterPagePDFScale"] = 100;


$tdatalcs_medicamento[".pageSize"] = 20;

$tdatalcs_medicamento[".warnLeavingPages"] = true;

$tdatalcs_medicamento[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_medicamento[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_medicamento[".orderindexes"] = array();

$tdatalcs_medicamento[".sqlHead"] = "SELECT idMedicamento,   TipoMedicamento,   NombreMed,   dias,   Hora,   Dosis,   Ingresado,   `_idEnfermedades`";
$tdatalcs_medicamento[".sqlFrom"] = "FROM lcs_medicamento";
$tdatalcs_medicamento[".sqlWhereExpr"] = "";
$tdatalcs_medicamento[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_medicamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_medicamento[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_medicamento = array();
$tableKeyslcs_medicamento[] = "idMedicamento";
$tdatalcs_medicamento[".Keys"] = $tableKeyslcs_medicamento;

$tdatalcs_medicamento[".listFields"] = array();
$tdatalcs_medicamento[".listFields"][] = "idMedicamento";
$tdatalcs_medicamento[".listFields"][] = "TipoMedicamento";
$tdatalcs_medicamento[".listFields"][] = "NombreMed";
$tdatalcs_medicamento[".listFields"][] = "dias";
$tdatalcs_medicamento[".listFields"][] = "Hora";
$tdatalcs_medicamento[".listFields"][] = "Dosis";
$tdatalcs_medicamento[".listFields"][] = "Ingresado";
$tdatalcs_medicamento[".listFields"][] = "_idEnfermedades";

$tdatalcs_medicamento[".hideMobileList"] = array();


$tdatalcs_medicamento[".viewFields"] = array();
$tdatalcs_medicamento[".viewFields"][] = "idMedicamento";
$tdatalcs_medicamento[".viewFields"][] = "TipoMedicamento";
$tdatalcs_medicamento[".viewFields"][] = "NombreMed";
$tdatalcs_medicamento[".viewFields"][] = "dias";
$tdatalcs_medicamento[".viewFields"][] = "Hora";
$tdatalcs_medicamento[".viewFields"][] = "Dosis";
$tdatalcs_medicamento[".viewFields"][] = "Ingresado";
$tdatalcs_medicamento[".viewFields"][] = "_idEnfermedades";

$tdatalcs_medicamento[".addFields"] = array();
$tdatalcs_medicamento[".addFields"][] = "_idEnfermedades";
$tdatalcs_medicamento[".addFields"][] = "TipoMedicamento";
$tdatalcs_medicamento[".addFields"][] = "NombreMed";
$tdatalcs_medicamento[".addFields"][] = "dias";
$tdatalcs_medicamento[".addFields"][] = "Hora";
$tdatalcs_medicamento[".addFields"][] = "Dosis";

$tdatalcs_medicamento[".inlineAddFields"] = array();

$tdatalcs_medicamento[".editFields"] = array();
$tdatalcs_medicamento[".editFields"][] = "TipoMedicamento";
$tdatalcs_medicamento[".editFields"][] = "NombreMed";
$tdatalcs_medicamento[".editFields"][] = "dias";
$tdatalcs_medicamento[".editFields"][] = "Hora";
$tdatalcs_medicamento[".editFields"][] = "Dosis";
$tdatalcs_medicamento[".editFields"][] = "_idEnfermedades";

$tdatalcs_medicamento[".inlineEditFields"] = array();

$tdatalcs_medicamento[".exportFields"] = array();
$tdatalcs_medicamento[".exportFields"][] = "idMedicamento";
$tdatalcs_medicamento[".exportFields"][] = "TipoMedicamento";
$tdatalcs_medicamento[".exportFields"][] = "NombreMed";
$tdatalcs_medicamento[".exportFields"][] = "dias";
$tdatalcs_medicamento[".exportFields"][] = "Hora";
$tdatalcs_medicamento[".exportFields"][] = "Dosis";
$tdatalcs_medicamento[".exportFields"][] = "Ingresado";
$tdatalcs_medicamento[".exportFields"][] = "_idEnfermedades";

$tdatalcs_medicamento[".importFields"] = array();
$tdatalcs_medicamento[".importFields"][] = "TipoMedicamento";
$tdatalcs_medicamento[".importFields"][] = "NombreMed";
$tdatalcs_medicamento[".importFields"][] = "dias";
$tdatalcs_medicamento[".importFields"][] = "Hora";
$tdatalcs_medicamento[".importFields"][] = "Dosis";
$tdatalcs_medicamento[".importFields"][] = "_idEnfermedades";

$tdatalcs_medicamento[".printFields"] = array();
$tdatalcs_medicamento[".printFields"][] = "idMedicamento";
$tdatalcs_medicamento[".printFields"][] = "TipoMedicamento";
$tdatalcs_medicamento[".printFields"][] = "NombreMed";
$tdatalcs_medicamento[".printFields"][] = "dias";
$tdatalcs_medicamento[".printFields"][] = "Hora";
$tdatalcs_medicamento[".printFields"][] = "Dosis";
$tdatalcs_medicamento[".printFields"][] = "Ingresado";
$tdatalcs_medicamento[".printFields"][] = "_idEnfermedades";

//	idMedicamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idMedicamento";
	$fdata["GoodName"] = "idMedicamento";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("lcs_medicamento","idMedicamento"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idMedicamento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idMedicamento";
	
		
		
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

	

	
	$tdatalcs_medicamento["idMedicamento"] = $fdata;
//	TipoMedicamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoMedicamento";
	$fdata["GoodName"] = "TipoMedicamento";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("lcs_medicamento","TipoMedicamento"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoMedicamento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoMedicamento";
	
		
		
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
	$edata["LookupValues"][] = "Ninguno";
	$edata["LookupValues"][] = "Aerosoles";
	$edata["LookupValues"][] = "Candelillas";
	$edata["LookupValues"][] = "Cataplasma";
	$edata["LookupValues"][] = "Glicerinas";
	$edata["LookupValues"][] = "Gotas";
	$edata["LookupValues"][] = "Inhalaciones";
	$edata["LookupValues"][] = "Inyecciones";
	$edata["LookupValues"][] = "Irrigaciones";
	$edata["LookupValues"][] = "Jarabes";
	$edata["LookupValues"][] = "Ovulos";
	$edata["LookupValues"][] = "Pastas";
	$edata["LookupValues"][] = "Pastilla";
	$edata["LookupValues"][] = "Pildoras";
	$edata["LookupValues"][] = "Polvos";
	$edata["LookupValues"][] = "Pomada";
	$edata["LookupValues"][] = "Supositorios";
	$edata["LookupValues"][] = "Tabletas";
	$edata["LookupValues"][] = "Tinturas";

		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_medicamento["TipoMedicamento"] = $fdata;
//	NombreMed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NombreMed";
	$fdata["GoodName"] = "NombreMed";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("lcs_medicamento","NombreMed"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "NombreMed"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NombreMed";
	
		
		
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

	

	
	$tdatalcs_medicamento["NombreMed"] = $fdata;
//	dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dias";
	$fdata["GoodName"] = "dias";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("lcs_medicamento","dias"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dias"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias";
	
		
		
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

	

	
	$tdatalcs_medicamento["dias"] = $fdata;
//	Hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Hora";
	$fdata["GoodName"] = "Hora";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("lcs_medicamento","Hora"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Hora"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hora";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatalcs_medicamento["Hora"] = $fdata;
//	Dosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Dosis";
	$fdata["GoodName"] = "Dosis";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("lcs_medicamento","Dosis"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Dosis"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dosis";
	
		
		
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
			$edata["EditParams"].= " maxlength=45";
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatalcs_medicamento["Dosis"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("lcs_medicamento","Ingresado"); 
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

	

	
	$tdatalcs_medicamento["Ingresado"] = $fdata;
//	_idEnfermedades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "_idEnfermedades";
	$fdata["GoodName"] = "_idEnfermedades";
	$fdata["ownerTable"] = "lcs_medicamento";
	$fdata["Label"] = GetFieldLabel("lcs_medicamento","_idEnfermedades"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "_idEnfermedades"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_idEnfermedades`";
	
		
		
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
	$edata["LookupTable"] = "lcs_enfermedades";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "idEnfermedades";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TipoEnfermedad";
	
		
	$edata["LookupOrderBy"] = "TipoEnfermedad";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatalcs_medicamento["_idEnfermedades"] = $fdata;

	
$tables_data["lcs_medicamento"]=&$tdatalcs_medicamento;
$field_labels["lcs_medicamento"] = &$fieldLabelslcs_medicamento;
$fieldToolTips["lcs_medicamento"] = &$fieldToolTipslcs_medicamento;
$page_titles["lcs_medicamento"] = &$pageTitleslcs_medicamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_medicamento"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_medicamento"] = array();


	
				$strOriginalDetailsTable="lcs_enfermedades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="lcs_enfermedades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lcs_enfermedades";
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
					$masterTablesData["lcs_medicamento"][0] = $masterParams;	
				$masterTablesData["lcs_medicamento"][0]["masterKeys"] = array();
	$masterTablesData["lcs_medicamento"][0]["masterKeys"][]="idEnfermedades";
				$masterTablesData["lcs_medicamento"][0]["detailKeys"] = array();
	$masterTablesData["lcs_medicamento"][0]["detailKeys"][]="_idEnfermedades";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_medicamento()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idMedicamento,   TipoMedicamento,   NombreMed,   dias,   Hora,   Dosis,   Ingresado,   `_idEnfermedades`";
$proto3["m_strFrom"] = "FROM lcs_medicamento";
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
	"m_strName" => "idMedicamento",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "lcs_medicamento"
));

$proto8["m_sql"] = "idMedicamento";
$proto8["m_srcTableName"] = "lcs_medicamento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoMedicamento",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "lcs_medicamento"
));

$proto10["m_sql"] = "TipoMedicamento";
$proto10["m_srcTableName"] = "lcs_medicamento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreMed",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "lcs_medicamento"
));

$proto12["m_sql"] = "NombreMed";
$proto12["m_srcTableName"] = "lcs_medicamento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dias",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "lcs_medicamento"
));

$proto14["m_sql"] = "dias";
$proto14["m_srcTableName"] = "lcs_medicamento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Hora",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "lcs_medicamento"
));

$proto16["m_sql"] = "Hora";
$proto16["m_srcTableName"] = "lcs_medicamento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Dosis",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "lcs_medicamento"
));

$proto18["m_sql"] = "Dosis";
$proto18["m_srcTableName"] = "lcs_medicamento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "lcs_medicamento"
));

$proto20["m_sql"] = "Ingresado";
$proto20["m_srcTableName"] = "lcs_medicamento";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEnfermedades",
	"m_strTable" => "lcs_medicamento",
	"m_srcTableName" => "lcs_medicamento"
));

$proto22["m_sql"] = "`_idEnfermedades`";
$proto22["m_srcTableName"] = "lcs_medicamento";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "lcs_medicamento";
$proto25["m_srcTableName"] = "lcs_medicamento";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idMedicamento";
$proto25["m_columns"][] = "TipoMedicamento";
$proto25["m_columns"][] = "NombreMed";
$proto25["m_columns"][] = "dias";
$proto25["m_columns"][] = "Hora";
$proto25["m_columns"][] = "Dosis";
$proto25["m_columns"][] = "Ingresado";
$proto25["m_columns"][] = "_idEnfermedades";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "lcs_medicamento";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "lcs_medicamento";
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
$proto3["m_srcTableName"]="lcs_medicamento";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_medicamento = createSqlQuery_lcs_medicamento();


	
								
	
$tdatalcs_medicamento[".sqlquery"] = $queryData_lcs_medicamento;

$tableEvents["lcs_medicamento"] = new eventsBase;
$tdatalcs_medicamento[".hasEvents"] = false;

?>