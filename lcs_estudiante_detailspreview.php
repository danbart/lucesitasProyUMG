<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/lcs_estudiante_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "FancyCoral", "MobileCoral");
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
$page_layouts["lcs_estudiante_detailspreview"] = $layout;

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

if($mastertable == "lcs_centro")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("_idCentro") . "=" . make_db_value("_idCentro",$_SESSION[$strTableName."_masterkey1"]);
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

	$display_count = 5;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["Nombre"]));
		$keylink.="&key2=".runner_htmlspecialchars(rawurlencode(@$data["Apellido"]));
		$keylink.="&key3=".runner_htmlspecialchars(rawurlencode(@$data["Direcccion"]));
		$keylink.="&key4=".runner_htmlspecialchars(rawurlencode(@$data["FNacimiento"]));
		$keylink.="&key5=".runner_htmlspecialchars(rawurlencode(@$data["FotoRostro"]));
		$keylink.="&key6=".runner_htmlspecialchars(rawurlencode(@$data["Ingresado"]));
		$keylink.="&key7=".runner_htmlspecialchars(rawurlencode(@$data["_idCentro"]));
	
	
	//	idEstudiante - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idEstudiante", $data, $keylink);
			$row["idEstudiante_value"] = $value;
			$format = $pSet->getViewFormat("idEstudiante");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idEstudiante")))
				$class = ' rnr-field-number';
			$row["idEstudiante_class"] = $class;
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
	//	Direcccion - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Direcccion", $data, $keylink);
			$row["Direcccion_value"] = $value;
			$format = $pSet->getViewFormat("Direcccion");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Direcccion")))
				$class = ' rnr-field-number';
			$row["Direcccion_class"] = $class;
	//	FNacimiento - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FNacimiento", $data, $keylink);
			$row["FNacimiento_value"] = $value;
			$format = $pSet->getViewFormat("FNacimiento");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FNacimiento")))
				$class = ' rnr-field-number';
			$row["FNacimiento_class"] = $class;
	//	FotoRostro - File-based Image
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("FotoRostro", $data, $keylink);
			$row["FotoRostro_value"] = $value;
			$format = $pSet->getViewFormat("FotoRostro");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("FotoRostro")))
				$class = ' rnr-field-number';
			$row["FotoRostro_class"] = $class;
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
	//	_idCentro - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("_idCentro", $data, $keylink);
			$row["_idCentro_value"] = $value;
			$format = $pSet->getViewFormat("_idCentro");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("_idCentro")))
				$class = ' rnr-field-number';
			$row["_idCentro_class"] = $class;
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
$xt->load_template(GetTemplateName("lcs_estudiante", "detailspreview"));
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