<?php
function DisplayMasterTableInfo_lcs_centro($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "lcs_centro";
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "lcs_personal")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_estudiante")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_donaciones")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Reporte Estudiantes")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "RepEstudMed")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "EstuHistSocial")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "EstuHistLengua")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "EstuHistEmoci")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "EstuHistEmbarazo")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "EstuHistCaracter")
	{
		$keysAssoc["idCentro"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idCentro", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idCentro", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idCentro", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_centro","idCentro").": ".$keyValue;
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
	
	$xt->assign("idCentro_mastervalue", $viewControls->showDBValue("idCentro", $data, $keylink));
	$format = $settings->getViewFormat("idCentro");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("idCentro")))
		$class = ' rnr-field-number';
		
	$xt->assign("idCentro_class", $class); // add class for field header as field value
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
	$xt->assign("Direcci_n_mastervalue", $viewControls->showDBValue("Dirección", $data, $keylink));
	$format = $settings->getViewFormat("Dirección");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Dirección")))
		$class = ' rnr-field-number';
		
	$xt->assign("Direcci_n_class", $class); // add class for field header as field value
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
	$xt->assign("Propietario_mastervalue", $viewControls->showDBValue("Propietario", $data, $keylink));
	$format = $settings->getViewFormat("Propietario");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Propietario")))
		$class = ' rnr-field-number';
		
	$xt->assign("Propietario_class", $class); // add class for field header as field value
	$xt->assign("Responsable_mastervalue", $viewControls->showDBValue("Responsable", $data, $keylink));
	$format = $settings->getViewFormat("Responsable");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Responsable")))
		$class = ' rnr-field-number';
		
	$xt->assign("Responsable_class", $class); // add class for field header as field value
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

	$layout = GetPageLayout("lcs_centro", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("lcs_centro", "masterlist"));
}

?>