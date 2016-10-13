<?php
function DisplayMasterTableInfoForPrint_lcs_estudiante($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "lcs_estudiante";

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "TranstornosEsfinteres" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_estudiante","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "TranstornosSueno" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_estudiante","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( !$where )
		return;

	$str = SecuritySQL("Export");
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["Nombre"]));
	$keylink.= "&key2=".runner_htmlspecialchars(rawurlencode(@$data["Apellido"]));
	$keylink.= "&key3=".runner_htmlspecialchars(rawurlencode(@$data["Direcccion"]));
	$keylink.= "&key4=".runner_htmlspecialchars(rawurlencode(@$data["FNacimiento"]));
	$keylink.= "&key5=".runner_htmlspecialchars(rawurlencode(@$data["FotoRostro"]));
	$keylink.= "&key6=".runner_htmlspecialchars(rawurlencode(@$data["Ingresado"]));
	$keylink.= "&key7=".runner_htmlspecialchars(rawurlencode(@$data["_idCentro"]));
	
	$xt->assign("idEstudiante_mastervalue", $viewControls->showDBValue("idEstudiante", $data, $keylink));
	$format = $settings->getViewFormat("idEstudiante");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("idEstudiante")))
		$class = ' rnr-field-number';
		
	$xt->assign("idEstudiante_class", $class); // add class for field header as field value

	$layout = GetPageLayout("lcs_estudiante", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("lcs_estudiante", "masterprint"));
}

?>