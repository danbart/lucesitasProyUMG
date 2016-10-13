<?php
function DisplayMasterTableInfoForPrint_Reporte_Estudiante_Medicamento($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "Reporte Estudiante Medicamento";

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "lcs_descsocial" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_embarazo" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_emociones" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_encargado" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_enfermedades" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_histoiralfamiliar" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_historialclinico" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_lenguaje" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_terapias" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_tiposocial" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_transtornoalimenticio" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_transtornoesfinteres" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_trastornosuenio" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiante_Medicamento","idEstudiante").": ".$keyValue;
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
	$xt->assign("TipoMedicamento_mastervalue", $viewControls->showDBValue("TipoMedicamento", $data, $keylink));
	$format = $settings->getViewFormat("TipoMedicamento");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TipoMedicamento")))
		$class = ' rnr-field-number';
		
	$xt->assign("TipoMedicamento_class", $class); // add class for field header as field value
	$xt->assign("NombreMed_mastervalue", $viewControls->showDBValue("NombreMed", $data, $keylink));
	$format = $settings->getViewFormat("NombreMed");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("NombreMed")))
		$class = ' rnr-field-number';
		
	$xt->assign("NombreMed_class", $class); // add class for field header as field value
	$xt->assign("Hora_mastervalue", $viewControls->showDBValue("Hora", $data, $keylink));
	$format = $settings->getViewFormat("Hora");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Hora")))
		$class = ' rnr-field-number';
		
	$xt->assign("Hora_class", $class); // add class for field header as field value
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
	$xt->assign("dias_mastervalue", $viewControls->showDBValue("dias", $data, $keylink));
	$format = $settings->getViewFormat("dias");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("dias")))
		$class = ' rnr-field-number';
		
	$xt->assign("dias_class", $class); // add class for field header as field value
	$xt->assign("Dosis_mastervalue", $viewControls->showDBValue("Dosis", $data, $keylink));
	$format = $settings->getViewFormat("Dosis");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Dosis")))
		$class = ' rnr-field-number';
		
	$xt->assign("Dosis_class", $class); // add class for field header as field value

	$layout = GetPageLayout("Reporte_Estudiante_Medicamento", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("Reporte_Estudiante_Medicamento", "masterprint"));
}

?>