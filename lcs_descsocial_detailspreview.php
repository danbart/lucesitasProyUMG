<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/lcs_descsocial_variables.php");

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
$page_layouts["lcs_descsocial_detailspreview"] = $layout;

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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["idDescSocial"]));
	
	
	//	idDescSocial - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("idDescSocial", $data, $keylink);
			$row["idDescSocial_value"] = $value;
			$format = $pSet->getViewFormat("idDescSocial");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("idDescSocial")))
				$class = ' rnr-field-number';
			$row["idDescSocial_class"] = $class;
	//	RelacionHermano - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RelacionHermano", $data, $keylink);
			$row["RelacionHermano_value"] = $value;
			$format = $pSet->getViewFormat("RelacionHermano");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RelacionHermano")))
				$class = ' rnr-field-number';
			$row["RelacionHermano_class"] = $class;
	//	RelacionCompaneros - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RelacionCompaneros", $data, $keylink);
			$row["RelacionCompaneros_value"] = $value;
			$format = $pSet->getViewFormat("RelacionCompaneros");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RelacionCompaneros")))
				$class = ' rnr-field-number';
			$row["RelacionCompaneros_class"] = $class;
	//	CQuinJuega - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CQuinJuega", $data, $keylink);
			$row["CQuinJuega_value"] = $value;
			$format = $pSet->getViewFormat("CQuinJuega");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CQuinJuega")))
				$class = ' rnr-field-number';
			$row["CQuinJuega_class"] = $class;
	//	CQueJuega - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CQueJuega", $data, $keylink);
			$row["CQueJuega_value"] = $value;
			$format = $pSet->getViewFormat("CQueJuega");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CQueJuega")))
				$class = ' rnr-field-number';
			$row["CQueJuega_class"] = $class;
	//	ingresado - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ingresado", $data, $keylink);
			$row["ingresado_value"] = $value;
			$format = $pSet->getViewFormat("ingresado");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ingresado")))
				$class = ' rnr-field-number';
			$row["ingresado_class"] = $class;
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
$xt->load_template(GetTemplateName("lcs_descsocial", "detailspreview"));
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