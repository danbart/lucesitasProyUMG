<?php
function DisplayMasterTableInfoForPrint_Reporte_Estudiantes($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "Reporte Estudiantes";

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
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_embarazo" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_emociones" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_encargado" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_enfermedades" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
		$keysAssoc["Nombre"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
				$where.= " and ";
		$showKeys.= " , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("Nombre", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("Nombre", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("Nombre", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","Nombre").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_histoiralfamiliar" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_historialclinico" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_lenguaje" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_terapias" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_tiposocial" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_transtornoalimenticio" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_transtornoesfinteres" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_trastornosuenio" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Reporte_Estudiantes","idEstudiante").": ".$keyValue;
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
	
	$xt->assign("fecha_mastervalue", $viewControls->showDBValue("fecha", $data, $keylink));
	$format = $settings->getViewFormat("fecha");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("fecha")))
		$class = ' rnr-field-number';
		
	$xt->assign("fecha_class", $class); // add class for field header as field value
	$xt->assign("hora_mastervalue", $viewControls->showDBValue("hora", $data, $keylink));
	$format = $settings->getViewFormat("hora");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("hora")))
		$class = ' rnr-field-number';
		
	$xt->assign("hora_class", $class); // add class for field header as field value
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
	$xt->assign("TipoTerapia_mastervalue", $viewControls->showDBValue("TipoTerapia", $data, $keylink));
	$format = $settings->getViewFormat("TipoTerapia");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TipoTerapia")))
		$class = ' rnr-field-number';
		
	$xt->assign("TipoTerapia_class", $class); // add class for field header as field value
	$xt->assign("Nombre_Terapista_mastervalue", $viewControls->showDBValue("Nombre Terapista", $data, $keylink));
	$format = $settings->getViewFormat("Nombre Terapista");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Nombre Terapista")))
		$class = ' rnr-field-number';
		
	$xt->assign("Nombre_Terapista_class", $class); // add class for field header as field value
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

	$layout = GetPageLayout("Reporte_Estudiantes", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("Reporte_Estudiantes", "masterprint"));
}

?>