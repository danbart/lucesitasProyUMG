<?php
function DisplayMasterTableInfoForPrint_EstudHistoClin($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "EstudHistoClin";

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
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_embarazo" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_emociones" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_encargado" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_enfermedades" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_histoiralfamiliar" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_historialclinico" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_lenguaje" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_terapias" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_tiposocial" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_transtornoalimenticio" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_transtornoesfinteres" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "lcs_trastornosuenio" )
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstudHistoClin","idEstudiante").": ".$keyValue;
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
	$xt->assign("RelacionHermano_mastervalue", $viewControls->showDBValue("RelacionHermano", $data, $keylink));
	$format = $settings->getViewFormat("RelacionHermano");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("RelacionHermano")))
		$class = ' rnr-field-number';
		
	$xt->assign("RelacionHermano_class", $class); // add class for field header as field value
	$xt->assign("RelacionCompaneros_mastervalue", $viewControls->showDBValue("RelacionCompaneros", $data, $keylink));
	$format = $settings->getViewFormat("RelacionCompaneros");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("RelacionCompaneros")))
		$class = ' rnr-field-number';
		
	$xt->assign("RelacionCompaneros_class", $class); // add class for field header as field value
	$xt->assign("CQuinJuega_mastervalue", $viewControls->showDBValue("CQuinJuega", $data, $keylink));
	$format = $settings->getViewFormat("CQuinJuega");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CQuinJuega")))
		$class = ' rnr-field-number';
		
	$xt->assign("CQuinJuega_class", $class); // add class for field header as field value
	$xt->assign("CQueJuega_mastervalue", $viewControls->showDBValue("CQueJuega", $data, $keylink));
	$format = $settings->getViewFormat("CQueJuega");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CQueJuega")))
		$class = ' rnr-field-number';
		
	$xt->assign("CQueJuega_class", $class); // add class for field header as field value
	$xt->assign("TipoEmocion_mastervalue", $viewControls->showDBValue("TipoEmocion", $data, $keylink));
	$format = $settings->getViewFormat("TipoEmocion");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TipoEmocion")))
		$class = ' rnr-field-number';
		
	$xt->assign("TipoEmocion_class", $class); // add class for field header as field value
	$xt->assign("CQNinio_mastervalue", $viewControls->showDBValue("CQNinio", $data, $keylink));
	$format = $settings->getViewFormat("CQNinio");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CQNinio")))
		$class = ' rnr-field-number';
		
	$xt->assign("CQNinio_class", $class); // add class for field header as field value
	$xt->assign("FProblematico_mastervalue", $viewControls->showDBValue("FProblematico", $data, $keylink));
	$format = $settings->getViewFormat("FProblematico");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FProblematico")))
		$class = ' rnr-field-number';
		
	$xt->assign("FProblematico_class", $class); // add class for field header as field value
	$xt->assign("DuermeSolo_mastervalue", $viewControls->showDBValue("DuermeSolo", $data, $keylink));
	$format = $settings->getViewFormat("DuermeSolo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("DuermeSolo")))
		$class = ' rnr-field-number';
		
	$xt->assign("DuermeSolo_class", $class); // add class for field header as field value
	$xt->assign("ComparteCuarto_mastervalue", $viewControls->showDBValue("ComparteCuarto", $data, $keylink));
	$format = $settings->getViewFormat("ComparteCuarto");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ComparteCuarto")))
		$class = ' rnr-field-number';
		
	$xt->assign("ComparteCuarto_class", $class); // add class for field header as field value
	$xt->assign("ParineteIgual_mastervalue", $viewControls->showDBValue("ParineteIgual", $data, $keylink));
	$format = $settings->getViewFormat("ParineteIgual");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ParineteIgual")))
		$class = ' rnr-field-number';
		
	$xt->assign("ParineteIgual_class", $class); // add class for field header as field value
	$xt->assign("TSocial_mastervalue", $viewControls->showDBValue("TSocial", $data, $keylink));
	$format = $settings->getViewFormat("TSocial");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TSocial")))
		$class = ' rnr-field-number';
		
	$xt->assign("TSocial_class", $class); // add class for field header as field value
	$xt->assign("Balbucea_mastervalue", $viewControls->showDBValue("Balbucea", $data, $keylink));
	$format = $settings->getViewFormat("Balbucea");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Balbucea")))
		$class = ' rnr-field-number';
		
	$xt->assign("Balbucea_class", $class); // add class for field header as field value
	$xt->assign("Edad1Palabra_mastervalue", $viewControls->showDBValue("Edad1Palabra", $data, $keylink));
	$format = $settings->getViewFormat("Edad1Palabra");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Edad1Palabra")))
		$class = ' rnr-field-number';
		
	$xt->assign("Edad1Palabra_class", $class); // add class for field header as field value
	$xt->assign("EdadMesVocalizo_mastervalue", $viewControls->showDBValue("EdadMesVocalizo", $data, $keylink));
	$format = $settings->getViewFormat("EdadMesVocalizo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("EdadMesVocalizo")))
		$class = ' rnr-field-number';
		
	$xt->assign("EdadMesVocalizo_class", $class); // add class for field header as field value
	$xt->assign("AdaptSocial_mastervalue", $viewControls->showDBValue("AdaptSocial", $data, $keylink));
	$format = $settings->getViewFormat("AdaptSocial");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("AdaptSocial")))
		$class = ' rnr-field-number';
		
	$xt->assign("AdaptSocial_class", $class); // add class for field header as field value
	$xt->assign("Documento_mastervalue", $viewControls->showDBValue("Documento", $data, $keylink));
	$format = $settings->getViewFormat("Documento");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Documento")))
		$class = ' rnr-field-number';
		
	$xt->assign("Documento_class", $class); // add class for field header as field value

	$layout = GetPageLayout("EstudHistoClin", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("EstudHistoClin", "masterprint"));
}

?>