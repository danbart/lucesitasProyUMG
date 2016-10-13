<?php
function DisplayMasterTableInfo_EstuHistCaracter($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "EstuHistCaracter";
	
	$settings = new ProjectSettings($tName, PAGE_REPORT);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_REPORT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "lcs_descsocial")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_embarazo")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_emociones")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_encargado")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_enfermedades")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_histoiralfamiliar")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_historialclinico")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_lenguaje")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_terapias")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_tiposocial")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_transtornoalimenticio")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_transtornoesfinteres")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_trastornosuenio")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistCaracter","idEstudiante").": ".$keyValue;
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
	
		$xt->assign("Estudiante_mastervalue", $viewControls->showDBValue("Estudiante", $data, $keylink));
	$format = $settings->getViewFormat("Estudiante");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Estudiante")))
		$class = ' rnr-field-number';
	
	$xt->assign("Estudiante_class", $class); // add class for field header as field value
		$xt->assign("FotoRostro_mastervalue", $viewControls->showDBValue("FotoRostro", $data, $keylink));
	$format = $settings->getViewFormat("FotoRostro");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FotoRostro")))
		$class = ' rnr-field-number';
	
	$xt->assign("FotoRostro_class", $class); // add class for field header as field value
		$xt->assign("edad_mastervalue", $viewControls->showDBValue("edad", $data, $keylink));
	$format = $settings->getViewFormat("edad");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("edad")))
		$class = ' rnr-field-number';
	
	$xt->assign("edad_class", $class); // add class for field header as field value
		$xt->assign("Tipo_Social_mastervalue", $viewControls->showDBValue("Tipo Social", $data, $keylink));
	$format = $settings->getViewFormat("Tipo Social");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Tipo Social")))
		$class = ' rnr-field-number';
	
	$xt->assign("Tipo_Social_class", $class); // add class for field header as field value
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

	$layout = GetPageLayout("EstuHistCaracter", "masterreport");
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("EstuHistCaracter", "masterreport"));
}
?>