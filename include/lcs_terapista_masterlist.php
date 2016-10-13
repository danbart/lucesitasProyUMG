<?php
function DisplayMasterTableInfo_lcs_terapista($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "lcs_terapista";
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "lcs_terapias")
	{
		$keysAssoc["idterapista"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idterapista", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idterapista", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idterapista", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_terapista","idterapista").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["idterapista"]));
	
	$xt->assign("idterapista_mastervalue", $viewControls->showDBValue("idterapista", $data, $keylink));
	$format = $settings->getViewFormat("idterapista");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("idterapista")))
		$class = ' rnr-field-number';
		
	$xt->assign("idterapista_class", $class); // add class for field header as field value
	$xt->assign("Nombre_mastervalue", $viewControls->showDBValue("Nombre", $data, $keylink));
	$format = $settings->getViewFormat("Nombre");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Nombre")))
		$class = ' rnr-field-number';
		
	$xt->assign("Nombre_class", $class); // add class for field header as field value
	$xt->assign("Apellido_mastervalue", $viewControls->showDBValue("Apellido", $data, $keylink));
	$format = $settings->getViewFormat("Apellido");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Apellido")))
		$class = ' rnr-field-number';
		
	$xt->assign("Apellido_class", $class); // add class for field header as field value
	$xt->assign("Telefono_mastervalue", $viewControls->showDBValue("Telefono", $data, $keylink));
	$format = $settings->getViewFormat("Telefono");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Telefono")))
		$class = ' rnr-field-number';
		
	$xt->assign("Telefono_class", $class); // add class for field header as field value
	$xt->assign("Email_mastervalue", $viewControls->showDBValue("Email", $data, $keylink));
	$format = $settings->getViewFormat("Email");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Email")))
		$class = ' rnr-field-number';
		
	$xt->assign("Email_class", $class); // add class for field header as field value
	$xt->assign("Direccion_mastervalue", $viewControls->showDBValue("Direccion", $data, $keylink));
	$format = $settings->getViewFormat("Direccion");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Direccion")))
		$class = ' rnr-field-number';
		
	$xt->assign("Direccion_class", $class); // add class for field header as field value
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
	$xt->assign("_idEspeMed_mastervalue", $viewControls->showDBValue("_idEspeMed", $data, $keylink));
	$format = $settings->getViewFormat("_idEspeMed");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("_idEspeMed")))
		$class = ' rnr-field-number';
		
	$xt->assign("_idEspeMed_class", $class); // add class for field header as field value

	$layout = GetPageLayout("lcs_terapista", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("lcs_terapista", "masterlist"));
}

?>