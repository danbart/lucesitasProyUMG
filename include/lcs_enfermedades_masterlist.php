<?php
function DisplayMasterTableInfo_lcs_enfermedades($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "lcs_enfermedades";
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "lcs_medicamento")
	{
		$keysAssoc["idEnfermedades"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEnfermedades", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEnfermedades", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEnfermedades", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_enfermedades","idEnfermedades").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}
	if( !$where )
		return;
	
	$str = SecuritySQL("Search");
	if( strlen($str) )
		$where.= " and ".$str;

	$strWhere = whereAdd( $masterQuery->WhereToSql(), $where );
	if( strlen($strWhere) )
		$strWhere = " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["idEnfermedades"]));
	
	$xt->assign("idEnfermedades_mastervalue", $viewControls->showDBValue("idEnfermedades", $data, $keylink));
	$format = $settings->getViewFormat("idEnfermedades");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("idEnfermedades")))
		$class = ' rnr-field-number';
		
	$xt->assign("idEnfermedades_class", $class); // add class for field header as field value
	$xt->assign("TipoEnfermedad_mastervalue", $viewControls->showDBValue("TipoEnfermedad", $data, $keylink));
	$format = $settings->getViewFormat("TipoEnfermedad");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TipoEnfermedad")))
		$class = ' rnr-field-number';
		
	$xt->assign("TipoEnfermedad_class", $class); // add class for field header as field value
	$xt->assign("Ingresado_mastervalue", $viewControls->showDBValue("Ingresado", $data, $keylink));
	$format = $settings->getViewFormat("Ingresado");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Ingresado")))
		$class = ' rnr-field-number';
		
	$xt->assign("Ingresado_class", $class); // add class for field header as field value
	$xt->assign("_idEstudiante_mastervalue", $viewControls->showDBValue("_idEstudiante", $data, $keylink));
	$format = $settings->getViewFormat("_idEstudiante");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("_idEstudiante")))
		$class = ' rnr-field-number';
		
	$xt->assign("_idEstudiante_class", $class); // add class for field header as field value

	$layout = GetPageLayout("lcs_enfermedades", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("lcs_enfermedades", "masterlist"));
}

?>