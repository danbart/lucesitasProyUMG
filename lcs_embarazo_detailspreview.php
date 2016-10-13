<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/lcs_embarazo_variables.php");

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
$page_layouts["lcs_embarazo_detailspreview"] = $layout;

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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["idEmbarazo"]));
	
	
	//	idEmbarazo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idEmbarazo", $data, $keylink);
			$row["idEmbarazo_value"] = $value;
			$format = $pSet->getViewFormat("idEmbarazo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idEmbarazo")))
				$class = ' rnr-field-number';
			$row["idEmbarazo_class"] = $class;
	//	MesesNac - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("MesesNac", $data, $keylink);
			$row["MesesNac_value"] = $value;
			$format = $pSet->getViewFormat("MesesNac");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("MesesNac")))
				$class = ' rnr-field-number';
			$row["MesesNac_class"] = $class;
	//	TipoParto - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TipoParto", $data, $keylink);
			$row["TipoParto_value"] = $value;
			$format = $pSet->getViewFormat("TipoParto");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TipoParto")))
				$class = ' rnr-field-number';
			$row["TipoParto_class"] = $class;
	//	AbortosAnt - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("AbortosAnt", $data, $keylink);
			$row["AbortosAnt_value"] = $value;
			$format = $pSet->getViewFormat("AbortosAnt");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("AbortosAnt")))
				$class = ' rnr-field-number';
			$row["AbortosAnt_class"] = $class;
	//	Emorragias - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Emorragias", $data, $keylink);
			$row["Emorragias_value"] = $value;
			$format = $pSet->getViewFormat("Emorragias");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Emorragias")))
				$class = ' rnr-field-number';
			$row["Emorragias_class"] = $class;
	//	infecciones - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("infecciones", $data, $keylink);
			$row["infecciones_value"] = $value;
			$format = $pSet->getViewFormat("infecciones");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("infecciones")))
				$class = ' rnr-field-number';
			$row["infecciones_class"] = $class;
	//	LloroPronto - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("LloroPronto", $data, $keylink);
			$row["LloroPronto_value"] = $value;
			$format = $pSet->getViewFormat("LloroPronto");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("LloroPronto")))
				$class = ' rnr-field-number';
			$row["LloroPronto_class"] = $class;
	//	RespiroPronto - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RespiroPronto", $data, $keylink);
			$row["RespiroPronto_value"] = $value;
			$format = $pSet->getViewFormat("RespiroPronto");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RespiroPronto")))
				$class = ' rnr-field-number';
			$row["RespiroPronto_class"] = $class;
	//	ColorNacido - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ColorNacido", $data, $keylink);
			$row["ColorNacido_value"] = $value;
			$format = $pSet->getViewFormat("ColorNacido");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ColorNacido")))
				$class = ' rnr-field-number';
			$row["ColorNacido_class"] = $class;
	//	SufrimientoFetal - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SufrimientoFetal", $data, $keylink);
			$row["SufrimientoFetal_value"] = $value;
			$format = $pSet->getViewFormat("SufrimientoFetal");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SufrimientoFetal")))
				$class = ' rnr-field-number';
			$row["SufrimientoFetal_class"] = $class;
	//	EmbDeseado - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EmbDeseado", $data, $keylink);
			$row["EmbDeseado_value"] = $value;
			$format = $pSet->getViewFormat("EmbDeseado");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EmbDeseado")))
				$class = ' rnr-field-number';
			$row["EmbDeseado_class"] = $class;
	//	Embarazocol - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Embarazocol", $data, $keylink);
			$row["Embarazocol_value"] = $value;
			$format = $pSet->getViewFormat("Embarazocol");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Embarazocol")))
				$class = ' rnr-field-number';
			$row["Embarazocol_class"] = $class;
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
$xt->load_template(GetTemplateName("lcs_embarazo", "detailspreview"));
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