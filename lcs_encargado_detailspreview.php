<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/lcs_encargado_variables.php");

$mode = postvalue("mode");


require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "FusionAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"detailspreviewheader", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst", 
	"block"=>"display_first", "substyle"=>1  );

$layout->skins["dcount"] = "empty";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields", 
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "grid";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["lcs_encargado_detailspreview"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
if($mastertable != "")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$strTableName."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$strTableName."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new RunnerPage($params);

if($mastertable == "Reporte Estudiantes")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("_idEstudiante") . "=" . make_db_value("_idEstudiante",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "RepEstudMed")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("_idEstudiante") . "=" . make_db_value("_idEstudiante",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "EstuHistSocial")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("_idEstudiante") . "=" . make_db_value("_idEstudiante",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "EstuHistLengua")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("_idEstudiante") . "=" . make_db_value("_idEstudiante",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "EstuHistEmoci")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("_idEstudiante") . "=" . make_db_value("_idEstudiante",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "EstuHistEmbarazo")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("_idEstudiante") . "=" . make_db_value("_idEstudiante",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "EstuHistCaracter")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("_idEstudiante") . "=" . make_db_value("_idEstudiante",$_SESSION[$strTableName."_masterkey1"]);
}

$str = SecuritySQL("Search");
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["idEncargado"]));
	
	
	//	idEncargado - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idEncargado", $data, $keylink);
			$row["idEncargado_value"] = $value;
			$format = $pSet->getViewFormat("idEncargado");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idEncargado")))
				$class = ' rnr-field-number';
			$row["idEncargado_class"] = $class;
	//	Nombre - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Nombre", $data, $keylink);
			$row["Nombre_value"] = $value;
			$format = $pSet->getViewFormat("Nombre");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Nombre")))
				$class = ' rnr-field-number';
			$row["Nombre_class"] = $class;
	//	Apellido - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Apellido", $data, $keylink);
			$row["Apellido_value"] = $value;
			$format = $pSet->getViewFormat("Apellido");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Apellido")))
				$class = ' rnr-field-number';
			$row["Apellido_class"] = $class;
	//	Direccion - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Direccion", $data, $keylink);
			$row["Direccion_value"] = $value;
			$format = $pSet->getViewFormat("Direccion");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Direccion")))
				$class = ' rnr-field-number';
			$row["Direccion_class"] = $class;
	//	Telefono - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Telefono", $data, $keylink);
			$row["Telefono_value"] = $value;
			$format = $pSet->getViewFormat("Telefono");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Telefono")))
				$class = ' rnr-field-number';
			$row["Telefono_class"] = $class;
	//	Ocupacion - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Ocupacion", $data, $keylink);
			$row["Ocupacion_value"] = $value;
			$format = $pSet->getViewFormat("Ocupacion");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Ocupacion")))
				$class = ' rnr-field-number';
			$row["Ocupacion_class"] = $class;
	//	Fnac - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Fnac", $data, $keylink);
			$row["Fnac_value"] = $value;
			$format = $pSet->getViewFormat("Fnac");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Fnac")))
				$class = ' rnr-field-number';
			$row["Fnac_class"] = $class;
	//	Ingresado - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Ingresado", $data, $keylink);
			$row["Ingresado_value"] = $value;
			$format = $pSet->getViewFormat("Ingresado");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Ingresado")))
				$class = ' rnr-field-number';
			$row["Ingresado_class"] = $class;
	//	_idEstudiante - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("_idEstudiante", $data, $keylink);
			$row["_idEstudiante_value"] = $value;
			$format = $pSet->getViewFormat("_idEstudiante");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("_idEstudiante")))
				$class = ' rnr-field-number';
			$row["_idEstudiante_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("lcs_encargado", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), isMobile()) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>