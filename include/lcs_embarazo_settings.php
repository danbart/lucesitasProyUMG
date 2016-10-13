<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalcs_embarazo = array();	
	$tdatalcs_embarazo[".truncateText"] = true;
	$tdatalcs_embarazo[".NumberOfChars"] = 80; 
	$tdatalcs_embarazo[".ShortName"] = "lcs_embarazo";
	$tdatalcs_embarazo[".OwnerID"] = "";
	$tdatalcs_embarazo[".OriginalTable"] = "lcs_embarazo";

//	field labels
$fieldLabelslcs_embarazo = array();
$fieldToolTipslcs_embarazo = array();
$pageTitleslcs_embarazo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslcs_embarazo["Spanish"] = array();
	$fieldToolTipslcs_embarazo["Spanish"] = array();
	$pageTitleslcs_embarazo["Spanish"] = array();
	$fieldLabelslcs_embarazo["Spanish"]["idEmbarazo"] = "No.";
	$fieldToolTipslcs_embarazo["Spanish"]["idEmbarazo"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["MesesNac"] = "Meses Nacido";
	$fieldToolTipslcs_embarazo["Spanish"]["MesesNac"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["TipoParto"] = "Tipo Parto";
	$fieldToolTipslcs_embarazo["Spanish"]["TipoParto"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["AbortosAnt"] = "Abortos Anteriores";
	$fieldToolTipslcs_embarazo["Spanish"]["AbortosAnt"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["Emorragias"] = "Emorragias";
	$fieldToolTipslcs_embarazo["Spanish"]["Emorragias"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["infecciones"] = "Infecciones";
	$fieldToolTipslcs_embarazo["Spanish"]["infecciones"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["LloroPronto"] = "Lloro Pronto";
	$fieldToolTipslcs_embarazo["Spanish"]["LloroPronto"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["RespiroPronto"] = "Respiro Pronto";
	$fieldToolTipslcs_embarazo["Spanish"]["RespiroPronto"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["ColorNacido"] = "Color Nacido";
	$fieldToolTipslcs_embarazo["Spanish"]["ColorNacido"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["SufrimientoFetal"] = "Sufrimiento Fetal";
	$fieldToolTipslcs_embarazo["Spanish"]["SufrimientoFetal"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["EmbDeseado"] = "Embarazo Deseado";
	$fieldToolTipslcs_embarazo["Spanish"]["EmbDeseado"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["Embarazocol"] = "Color";
	$fieldToolTipslcs_embarazo["Spanish"]["Embarazocol"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_embarazo["Spanish"]["Ingresado"] = "";
	$fieldLabelslcs_embarazo["Spanish"]["_idEstudiante"] = "Estudiante";
	$fieldToolTipslcs_embarazo["Spanish"]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_embarazo["Spanish"]))
		$tdatalcs_embarazo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslcs_embarazo[""] = array();
	$fieldToolTipslcs_embarazo[""] = array();
	$pageTitleslcs_embarazo[""] = array();
	$fieldLabelslcs_embarazo[""]["idEmbarazo"] = "Id Embarazo";
	$fieldToolTipslcs_embarazo[""]["idEmbarazo"] = "";
	$fieldLabelslcs_embarazo[""]["MesesNac"] = "Meses Nac";
	$fieldToolTipslcs_embarazo[""]["MesesNac"] = "";
	$fieldLabelslcs_embarazo[""]["TipoParto"] = "Tipo Parto";
	$fieldToolTipslcs_embarazo[""]["TipoParto"] = "";
	$fieldLabelslcs_embarazo[""]["AbortosAnt"] = "Abortos Ant";
	$fieldToolTipslcs_embarazo[""]["AbortosAnt"] = "";
	$fieldLabelslcs_embarazo[""]["Emorragias"] = "Emorragias";
	$fieldToolTipslcs_embarazo[""]["Emorragias"] = "";
	$fieldLabelslcs_embarazo[""]["infecciones"] = "Infecciones";
	$fieldToolTipslcs_embarazo[""]["infecciones"] = "";
	$fieldLabelslcs_embarazo[""]["LloroPronto"] = "Lloro Pronto";
	$fieldToolTipslcs_embarazo[""]["LloroPronto"] = "";
	$fieldLabelslcs_embarazo[""]["RespiroPronto"] = "Respiro Pronto";
	$fieldToolTipslcs_embarazo[""]["RespiroPronto"] = "";
	$fieldLabelslcs_embarazo[""]["ColorNacido"] = "Color Nacido";
	$fieldToolTipslcs_embarazo[""]["ColorNacido"] = "";
	$fieldLabelslcs_embarazo[""]["SufrimientoFetal"] = "Sufrimiento Fetal";
	$fieldToolTipslcs_embarazo[""]["SufrimientoFetal"] = "";
	$fieldLabelslcs_embarazo[""]["EmbDeseado"] = "Emb Deseado";
	$fieldToolTipslcs_embarazo[""]["EmbDeseado"] = "";
	$fieldLabelslcs_embarazo[""]["Embarazocol"] = "Embarazocol";
	$fieldToolTipslcs_embarazo[""]["Embarazocol"] = "";
	$fieldLabelslcs_embarazo[""]["Ingresado"] = "Ingresado";
	$fieldToolTipslcs_embarazo[""]["Ingresado"] = "";
	$fieldLabelslcs_embarazo[""]["_idEstudiante"] = "Id Estudiante";
	$fieldToolTipslcs_embarazo[""]["_idEstudiante"] = "";
	if (count($fieldToolTipslcs_embarazo[""]))
		$tdatalcs_embarazo[".isUseToolTips"] = true;
}
	
	
	$tdatalcs_embarazo[".NCSearch"] = true;



$tdatalcs_embarazo[".shortTableName"] = "lcs_embarazo";
$tdatalcs_embarazo[".nSecOptions"] = 0;
$tdatalcs_embarazo[".recsPerRowList"] = 1;
$tdatalcs_embarazo[".mainTableOwnerID"] = "";
$tdatalcs_embarazo[".moveNext"] = 1;
$tdatalcs_embarazo[".nType"] = 0;

$tdatalcs_embarazo[".strOriginalTableName"] = "lcs_embarazo";




$tdatalcs_embarazo[".showAddInPopup"] = true;

$tdatalcs_embarazo[".showEditInPopup"] = true;

$tdatalcs_embarazo[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatalcs_embarazo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalcs_embarazo[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatalcs_embarazo[".listAjax"] = true;
else 
	$tdatalcs_embarazo[".listAjax"] = false;

	$tdatalcs_embarazo[".audit"] = false;

	$tdatalcs_embarazo[".locking"] = false;

$tdatalcs_embarazo[".edit"] = true;

$tdatalcs_embarazo[".list"] = true;

$tdatalcs_embarazo[".view"] = true;

$tdatalcs_embarazo[".import"] = true;

$tdatalcs_embarazo[".exportTo"] = true;

$tdatalcs_embarazo[".printFriendly"] = true;

$tdatalcs_embarazo[".delete"] = true;

$tdatalcs_embarazo[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalcs_embarazo[".searchSaving"] = false;
//

$tdatalcs_embarazo[".showSearchPanel"] = true;
		$tdatalcs_embarazo[".flexibleSearch"] = true;		

if (isMobile())
	$tdatalcs_embarazo[".isUseAjaxSuggest"] = false;
else 
	$tdatalcs_embarazo[".isUseAjaxSuggest"] = true;

$tdatalcs_embarazo[".rowHighlite"] = true;



$tdatalcs_embarazo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalcs_embarazo[".isUseTimeForSearch"] = false;





$tdatalcs_embarazo[".allSearchFields"] = array();
$tdatalcs_embarazo[".filterFields"] = array();
$tdatalcs_embarazo[".requiredSearchFields"] = array();

$tdatalcs_embarazo[".allSearchFields"][] = "idEmbarazo";
	$tdatalcs_embarazo[".allSearchFields"][] = "MesesNac";
	$tdatalcs_embarazo[".allSearchFields"][] = "TipoParto";
	$tdatalcs_embarazo[".allSearchFields"][] = "AbortosAnt";
	$tdatalcs_embarazo[".allSearchFields"][] = "Emorragias";
	$tdatalcs_embarazo[".allSearchFields"][] = "infecciones";
	$tdatalcs_embarazo[".allSearchFields"][] = "LloroPronto";
	$tdatalcs_embarazo[".allSearchFields"][] = "RespiroPronto";
	$tdatalcs_embarazo[".allSearchFields"][] = "ColorNacido";
	$tdatalcs_embarazo[".allSearchFields"][] = "SufrimientoFetal";
	$tdatalcs_embarazo[".allSearchFields"][] = "EmbDeseado";
	$tdatalcs_embarazo[".allSearchFields"][] = "Embarazocol";
	$tdatalcs_embarazo[".allSearchFields"][] = "Ingresado";
	$tdatalcs_embarazo[".allSearchFields"][] = "_idEstudiante";
	
$tdatalcs_embarazo[".filterFields"][] = "Emorragias";	
$tdatalcs_embarazo[".filterFields"][] = "infecciones";	
$tdatalcs_embarazo[".filterFields"][] = "LloroPronto";	
$tdatalcs_embarazo[".filterFields"][] = "RespiroPronto";	
$tdatalcs_embarazo[".filterFields"][] = "SufrimientoFetal";	

$tdatalcs_embarazo[".googleLikeFields"] = array();
$tdatalcs_embarazo[".googleLikeFields"][] = "idEmbarazo";
$tdatalcs_embarazo[".googleLikeFields"][] = "MesesNac";
$tdatalcs_embarazo[".googleLikeFields"][] = "TipoParto";
$tdatalcs_embarazo[".googleLikeFields"][] = "AbortosAnt";
$tdatalcs_embarazo[".googleLikeFields"][] = "Emorragias";
$tdatalcs_embarazo[".googleLikeFields"][] = "infecciones";
$tdatalcs_embarazo[".googleLikeFields"][] = "LloroPronto";
$tdatalcs_embarazo[".googleLikeFields"][] = "RespiroPronto";
$tdatalcs_embarazo[".googleLikeFields"][] = "ColorNacido";
$tdatalcs_embarazo[".googleLikeFields"][] = "SufrimientoFetal";
$tdatalcs_embarazo[".googleLikeFields"][] = "EmbDeseado";
$tdatalcs_embarazo[".googleLikeFields"][] = "Embarazocol";
$tdatalcs_embarazo[".googleLikeFields"][] = "Ingresado";
$tdatalcs_embarazo[".googleLikeFields"][] = "_idEstudiante";


$tdatalcs_embarazo[".advSearchFields"] = array();
$tdatalcs_embarazo[".advSearchFields"][] = "idEmbarazo";
$tdatalcs_embarazo[".advSearchFields"][] = "MesesNac";
$tdatalcs_embarazo[".advSearchFields"][] = "TipoParto";
$tdatalcs_embarazo[".advSearchFields"][] = "AbortosAnt";
$tdatalcs_embarazo[".advSearchFields"][] = "Emorragias";
$tdatalcs_embarazo[".advSearchFields"][] = "infecciones";
$tdatalcs_embarazo[".advSearchFields"][] = "LloroPronto";
$tdatalcs_embarazo[".advSearchFields"][] = "RespiroPronto";
$tdatalcs_embarazo[".advSearchFields"][] = "ColorNacido";
$tdatalcs_embarazo[".advSearchFields"][] = "SufrimientoFetal";
$tdatalcs_embarazo[".advSearchFields"][] = "EmbDeseado";
$tdatalcs_embarazo[".advSearchFields"][] = "Embarazocol";
$tdatalcs_embarazo[".advSearchFields"][] = "Ingresado";
$tdatalcs_embarazo[".advSearchFields"][] = "_idEstudiante";

$tdatalcs_embarazo[".tableType"] = "list";

$tdatalcs_embarazo[".printerPageOrientation"] = 0;
$tdatalcs_embarazo[".nPrinterPageScale"] = 100;

$tdatalcs_embarazo[".nPrinterSplitRecords"] = 40;

$tdatalcs_embarazo[".nPrinterPDFSplitRecords"] = 40;





	


$tdatalcs_embarazo[".isResizeColumns"] = true;



// view page pdf
$tdatalcs_embarazo[".isViewPagePDF"] = true;
$tdatalcs_embarazo[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalcs_embarazo[".isPrinterPagePDF"] = true;
$tdatalcs_embarazo[".nPrinterPagePDFScale"] = 100;


$tdatalcs_embarazo[".pageSize"] = 20;

$tdatalcs_embarazo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalcs_embarazo[".strOrderBy"] = $tstrOrderBy;

$tdatalcs_embarazo[".orderindexes"] = array();

$tdatalcs_embarazo[".sqlHead"] = "SELECT idEmbarazo,   MesesNac,   TipoParto,   AbortosAnt,   Emorragias,   infecciones,   LloroPronto,   RespiroPronto,   ColorNacido,   SufrimientoFetal,   EmbDeseado,   Embarazocol,   Ingresado,   `_idEstudiante`";
$tdatalcs_embarazo[".sqlFrom"] = "FROM lcs_embarazo";
$tdatalcs_embarazo[".sqlWhereExpr"] = "";
$tdatalcs_embarazo[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalcs_embarazo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalcs_embarazo[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslcs_embarazo = array();
$tableKeyslcs_embarazo[] = "idEmbarazo";
$tdatalcs_embarazo[".Keys"] = $tableKeyslcs_embarazo;

$tdatalcs_embarazo[".listFields"] = array();
$tdatalcs_embarazo[".listFields"][] = "idEmbarazo";
$tdatalcs_embarazo[".listFields"][] = "MesesNac";
$tdatalcs_embarazo[".listFields"][] = "TipoParto";
$tdatalcs_embarazo[".listFields"][] = "AbortosAnt";
$tdatalcs_embarazo[".listFields"][] = "Emorragias";
$tdatalcs_embarazo[".listFields"][] = "infecciones";
$tdatalcs_embarazo[".listFields"][] = "LloroPronto";
$tdatalcs_embarazo[".listFields"][] = "RespiroPronto";
$tdatalcs_embarazo[".listFields"][] = "ColorNacido";
$tdatalcs_embarazo[".listFields"][] = "SufrimientoFetal";
$tdatalcs_embarazo[".listFields"][] = "EmbDeseado";
$tdatalcs_embarazo[".listFields"][] = "Embarazocol";
$tdatalcs_embarazo[".listFields"][] = "Ingresado";
$tdatalcs_embarazo[".listFields"][] = "_idEstudiante";

$tdatalcs_embarazo[".hideMobileList"] = array();


$tdatalcs_embarazo[".viewFields"] = array();
$tdatalcs_embarazo[".viewFields"][] = "idEmbarazo";
$tdatalcs_embarazo[".viewFields"][] = "MesesNac";
$tdatalcs_embarazo[".viewFields"][] = "TipoParto";
$tdatalcs_embarazo[".viewFields"][] = "AbortosAnt";
$tdatalcs_embarazo[".viewFields"][] = "Emorragias";
$tdatalcs_embarazo[".viewFields"][] = "infecciones";
$tdatalcs_embarazo[".viewFields"][] = "LloroPronto";
$tdatalcs_embarazo[".viewFields"][] = "RespiroPronto";
$tdatalcs_embarazo[".viewFields"][] = "ColorNacido";
$tdatalcs_embarazo[".viewFields"][] = "SufrimientoFetal";
$tdatalcs_embarazo[".viewFields"][] = "EmbDeseado";
$tdatalcs_embarazo[".viewFields"][] = "Embarazocol";
$tdatalcs_embarazo[".viewFields"][] = "Ingresado";
$tdatalcs_embarazo[".viewFields"][] = "_idEstudiante";

$tdatalcs_embarazo[".addFields"] = array();
$tdatalcs_embarazo[".addFields"][] = "MesesNac";
$tdatalcs_embarazo[".addFields"][] = "TipoParto";
$tdatalcs_embarazo[".addFields"][] = "AbortosAnt";
$tdatalcs_embarazo[".addFields"][] = "Emorragias";
$tdatalcs_embarazo[".addFields"][] = "infecciones";
$tdatalcs_embarazo[".addFields"][] = "LloroPronto";
$tdatalcs_embarazo[".addFields"][] = "RespiroPronto";
$tdatalcs_embarazo[".addFields"][] = "ColorNacido";
$tdatalcs_embarazo[".addFields"][] = "SufrimientoFetal";
$tdatalcs_embarazo[".addFields"][] = "EmbDeseado";
$tdatalcs_embarazo[".addFields"][] = "Embarazocol";
$tdatalcs_embarazo[".addFields"][] = "_idEstudiante";

$tdatalcs_embarazo[".inlineAddFields"] = array();

$tdatalcs_embarazo[".editFields"] = array();
$tdatalcs_embarazo[".editFields"][] = "MesesNac";
$tdatalcs_embarazo[".editFields"][] = "TipoParto";
$tdatalcs_embarazo[".editFields"][] = "AbortosAnt";
$tdatalcs_embarazo[".editFields"][] = "Emorragias";
$tdatalcs_embarazo[".editFields"][] = "infecciones";
$tdatalcs_embarazo[".editFields"][] = "LloroPronto";
$tdatalcs_embarazo[".editFields"][] = "RespiroPronto";
$tdatalcs_embarazo[".editFields"][] = "ColorNacido";
$tdatalcs_embarazo[".editFields"][] = "SufrimientoFetal";
$tdatalcs_embarazo[".editFields"][] = "EmbDeseado";
$tdatalcs_embarazo[".editFields"][] = "Embarazocol";
$tdatalcs_embarazo[".editFields"][] = "_idEstudiante";

$tdatalcs_embarazo[".inlineEditFields"] = array();

$tdatalcs_embarazo[".exportFields"] = array();
$tdatalcs_embarazo[".exportFields"][] = "idEmbarazo";
$tdatalcs_embarazo[".exportFields"][] = "MesesNac";
$tdatalcs_embarazo[".exportFields"][] = "TipoParto";
$tdatalcs_embarazo[".exportFields"][] = "AbortosAnt";
$tdatalcs_embarazo[".exportFields"][] = "Emorragias";
$tdatalcs_embarazo[".exportFields"][] = "infecciones";
$tdatalcs_embarazo[".exportFields"][] = "LloroPronto";
$tdatalcs_embarazo[".exportFields"][] = "RespiroPronto";
$tdatalcs_embarazo[".exportFields"][] = "ColorNacido";
$tdatalcs_embarazo[".exportFields"][] = "SufrimientoFetal";
$tdatalcs_embarazo[".exportFields"][] = "EmbDeseado";
$tdatalcs_embarazo[".exportFields"][] = "Embarazocol";
$tdatalcs_embarazo[".exportFields"][] = "Ingresado";
$tdatalcs_embarazo[".exportFields"][] = "_idEstudiante";

$tdatalcs_embarazo[".importFields"] = array();
$tdatalcs_embarazo[".importFields"][] = "MesesNac";
$tdatalcs_embarazo[".importFields"][] = "TipoParto";
$tdatalcs_embarazo[".importFields"][] = "AbortosAnt";
$tdatalcs_embarazo[".importFields"][] = "Emorragias";
$tdatalcs_embarazo[".importFields"][] = "infecciones";
$tdatalcs_embarazo[".importFields"][] = "LloroPronto";
$tdatalcs_embarazo[".importFields"][] = "RespiroPronto";
$tdatalcs_embarazo[".importFields"][] = "ColorNacido";
$tdatalcs_embarazo[".importFields"][] = "SufrimientoFetal";
$tdatalcs_embarazo[".importFields"][] = "EmbDeseado";
$tdatalcs_embarazo[".importFields"][] = "Embarazocol";
$tdatalcs_embarazo[".importFields"][] = "_idEstudiante";

$tdatalcs_embarazo[".printFields"] = array();
$tdatalcs_embarazo[".printFields"][] = "idEmbarazo";
$tdatalcs_embarazo[".printFields"][] = "MesesNac";
$tdatalcs_embarazo[".printFields"][] = "TipoParto";
$tdatalcs_embarazo[".printFields"][] = "AbortosAnt";
$tdatalcs_embarazo[".printFields"][] = "Emorragias";
$tdatalcs_embarazo[".printFields"][] = "infecciones";
$tdatalcs_embarazo[".printFields"][] = "LloroPronto";
$tdatalcs_embarazo[".printFields"][] = "RespiroPronto";
$tdatalcs_embarazo[".printFields"][] = "ColorNacido";
$tdatalcs_embarazo[".printFields"][] = "SufrimientoFetal";
$tdatalcs_embarazo[".printFields"][] = "EmbDeseado";
$tdatalcs_embarazo[".printFields"][] = "Embarazocol";
$tdatalcs_embarazo[".printFields"][] = "Ingresado";
$tdatalcs_embarazo[".printFields"][] = "_idEstudiante";

//	idEmbarazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idEmbarazo";
	$fdata["GoodName"] = "idEmbarazo";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","idEmbarazo"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idEmbarazo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEmbarazo";
	
		
		
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

	

	
	$tdatalcs_embarazo["idEmbarazo"] = $fdata;
//	MesesNac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MesesNac";
	$fdata["GoodName"] = "MesesNac";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","MesesNac"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MesesNac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MesesNac";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatalcs_embarazo["MesesNac"] = $fdata;
//	TipoParto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoParto";
	$fdata["GoodName"] = "TipoParto";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","TipoParto"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TipoParto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoParto";
	
		
		
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

	

	
	$tdatalcs_embarazo["TipoParto"] = $fdata;
//	AbortosAnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AbortosAnt";
	$fdata["GoodName"] = "AbortosAnt";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","AbortosAnt"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AbortosAnt"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AbortosAnt";
	
		
		
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

	

	
	$tdatalcs_embarazo["AbortosAnt"] = $fdata;
//	Emorragias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Emorragias";
	$fdata["GoodName"] = "Emorragias";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","Emorragias"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Emorragias"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Emorragias";
	
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idEmbarazo";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_embarazo["Emorragias"] = $fdata;
//	infecciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "infecciones";
	$fdata["GoodName"] = "infecciones";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","infecciones"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "infecciones"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "infecciones";
	
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idEmbarazo";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_embarazo["infecciones"] = $fdata;
//	LloroPronto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LloroPronto";
	$fdata["GoodName"] = "LloroPronto";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","LloroPronto"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "LloroPronto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LloroPronto";
	
		
		
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idEmbarazo";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_embarazo["LloroPronto"] = $fdata;
//	RespiroPronto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RespiroPronto";
	$fdata["GoodName"] = "RespiroPronto";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","RespiroPronto"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RespiroPronto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RespiroPronto";
	
		
		
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idEmbarazo";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_embarazo["RespiroPronto"] = $fdata;
//	ColorNacido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ColorNacido";
	$fdata["GoodName"] = "ColorNacido";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","ColorNacido"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ColorNacido"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ColorNacido";
	
		
		
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

	

	
	$tdatalcs_embarazo["ColorNacido"] = $fdata;
//	SufrimientoFetal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SufrimientoFetal";
	$fdata["GoodName"] = "SufrimientoFetal";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","SufrimientoFetal"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SufrimientoFetal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SufrimientoFetal";
	
		
		
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
			$fdata["filterTotalFields"] = "idEmbarazo";	
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;	
	
		
		
		
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";	

//end of Filters settings	

	
	$tdatalcs_embarazo["SufrimientoFetal"] = $fdata;
//	EmbDeseado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EmbDeseado";
	$fdata["GoodName"] = "EmbDeseado";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","EmbDeseado"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EmbDeseado"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmbDeseado";
	
		
		
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

	

	
	$tdatalcs_embarazo["EmbDeseado"] = $fdata;
//	Embarazocol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Embarazocol";
	$fdata["GoodName"] = "Embarazocol";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","Embarazocol"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Embarazocol"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Embarazocol";
	
		
		
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

	

	
	$tdatalcs_embarazo["Embarazocol"] = $fdata;
//	Ingresado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Ingresado";
	$fdata["GoodName"] = "Ingresado";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","Ingresado"); 
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

	

	
	$tdatalcs_embarazo["Ingresado"] = $fdata;
//	_idEstudiante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "_idEstudiante";
	$fdata["GoodName"] = "_idEstudiante";
	$fdata["ownerTable"] = "lcs_embarazo";
	$fdata["Label"] = GetFieldLabel("lcs_embarazo","_idEstudiante"); 
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

	

	
	$tdatalcs_embarazo["_idEstudiante"] = $fdata;

	
$tables_data["lcs_embarazo"]=&$tdatalcs_embarazo;
$field_labels["lcs_embarazo"] = &$fieldLabelslcs_embarazo;
$fieldToolTips["lcs_embarazo"] = &$fieldToolTipslcs_embarazo;
$page_titles["lcs_embarazo"] = &$pageTitleslcs_embarazo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lcs_embarazo"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["lcs_embarazo"] = array();


	
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
	$masterTablesData["lcs_embarazo"][0] = $masterParams;	
				$masterTablesData["lcs_embarazo"][0]["masterKeys"] = array();
	$masterTablesData["lcs_embarazo"][0]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_embarazo"][0]["detailKeys"] = array();
	$masterTablesData["lcs_embarazo"][0]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_embarazo"][1] = $masterParams;	
				$masterTablesData["lcs_embarazo"][1]["masterKeys"] = array();
	$masterTablesData["lcs_embarazo"][1]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_embarazo"][1]["detailKeys"] = array();
	$masterTablesData["lcs_embarazo"][1]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_embarazo"][2] = $masterParams;	
				$masterTablesData["lcs_embarazo"][2]["masterKeys"] = array();
	$masterTablesData["lcs_embarazo"][2]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_embarazo"][2]["detailKeys"] = array();
	$masterTablesData["lcs_embarazo"][2]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_embarazo"][3] = $masterParams;	
				$masterTablesData["lcs_embarazo"][3]["masterKeys"] = array();
	$masterTablesData["lcs_embarazo"][3]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_embarazo"][3]["detailKeys"] = array();
	$masterTablesData["lcs_embarazo"][3]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_embarazo"][4] = $masterParams;	
				$masterTablesData["lcs_embarazo"][4]["masterKeys"] = array();
	$masterTablesData["lcs_embarazo"][4]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_embarazo"][4]["detailKeys"] = array();
	$masterTablesData["lcs_embarazo"][4]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_embarazo"][5] = $masterParams;	
				$masterTablesData["lcs_embarazo"][5]["masterKeys"] = array();
	$masterTablesData["lcs_embarazo"][5]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_embarazo"][5]["detailKeys"] = array();
	$masterTablesData["lcs_embarazo"][5]["detailKeys"][]="_idEstudiante";
		
	
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
	$masterTablesData["lcs_embarazo"][6] = $masterParams;	
				$masterTablesData["lcs_embarazo"][6]["masterKeys"] = array();
	$masterTablesData["lcs_embarazo"][6]["masterKeys"][]="idEstudiante";
				$masterTablesData["lcs_embarazo"][6]["detailKeys"] = array();
	$masterTablesData["lcs_embarazo"][6]["detailKeys"][]="_idEstudiante";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lcs_embarazo()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idEmbarazo,   MesesNac,   TipoParto,   AbortosAnt,   Emorragias,   infecciones,   LloroPronto,   RespiroPronto,   ColorNacido,   SufrimientoFetal,   EmbDeseado,   Embarazocol,   Ingresado,   `_idEstudiante`";
$proto3["m_strFrom"] = "FROM lcs_embarazo";
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
	"m_strName" => "idEmbarazo",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto8["m_sql"] = "idEmbarazo";
$proto8["m_srcTableName"] = "lcs_embarazo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MesesNac",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto10["m_sql"] = "MesesNac";
$proto10["m_srcTableName"] = "lcs_embarazo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoParto",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto12["m_sql"] = "TipoParto";
$proto12["m_srcTableName"] = "lcs_embarazo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AbortosAnt",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto14["m_sql"] = "AbortosAnt";
$proto14["m_srcTableName"] = "lcs_embarazo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Emorragias",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto16["m_sql"] = "Emorragias";
$proto16["m_srcTableName"] = "lcs_embarazo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "infecciones",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto18["m_sql"] = "infecciones";
$proto18["m_srcTableName"] = "lcs_embarazo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LloroPronto",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto20["m_sql"] = "LloroPronto";
$proto20["m_srcTableName"] = "lcs_embarazo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RespiroPronto",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto22["m_sql"] = "RespiroPronto";
$proto22["m_srcTableName"] = "lcs_embarazo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ColorNacido",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto24["m_sql"] = "ColorNacido";
$proto24["m_srcTableName"] = "lcs_embarazo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SufrimientoFetal",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto26["m_sql"] = "SufrimientoFetal";
$proto26["m_srcTableName"] = "lcs_embarazo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto3["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EmbDeseado",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto28["m_sql"] = "EmbDeseado";
$proto28["m_srcTableName"] = "lcs_embarazo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto3["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Embarazocol",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto30["m_sql"] = "Embarazocol";
$proto30["m_srcTableName"] = "lcs_embarazo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto3["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Ingresado",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto32["m_sql"] = "Ingresado";
$proto32["m_srcTableName"] = "lcs_embarazo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto3["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "_idEstudiante",
	"m_strTable" => "lcs_embarazo",
	"m_srcTableName" => "lcs_embarazo"
));

$proto34["m_sql"] = "`_idEstudiante`";
$proto34["m_srcTableName"] = "lcs_embarazo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "lcs_embarazo";
$proto37["m_srcTableName"] = "lcs_embarazo";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "idEmbarazo";
$proto37["m_columns"][] = "MesesNac";
$proto37["m_columns"][] = "TipoParto";
$proto37["m_columns"][] = "AbortosAnt";
$proto37["m_columns"][] = "Emorragias";
$proto37["m_columns"][] = "infecciones";
$proto37["m_columns"][] = "LloroPronto";
$proto37["m_columns"][] = "RespiroPronto";
$proto37["m_columns"][] = "ColorNacido";
$proto37["m_columns"][] = "SufrimientoFetal";
$proto37["m_columns"][] = "EmbDeseado";
$proto37["m_columns"][] = "Embarazocol";
$proto37["m_columns"][] = "Ingresado";
$proto37["m_columns"][] = "_idEstudiante";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "lcs_embarazo";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "lcs_embarazo";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="lcs_embarazo";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_lcs_embarazo = createSqlQuery_lcs_embarazo();


	
														
	
$tdatalcs_embarazo[".sqlquery"] = $queryData_lcs_embarazo;

include_once(getabspath("include/lcs_embarazo_events.php"));
$tableEvents["lcs_embarazo"] = new eventclass_lcs_embarazo;
$tdatalcs_embarazo[".hasEvents"] = true;

?>