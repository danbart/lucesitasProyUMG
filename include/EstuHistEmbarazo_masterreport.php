<?php
function DisplayMasterTableInfo_EstuHistEmbarazo($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "EstuHistEmbarazo";
	
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
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_embarazo")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_emociones")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_encargado")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_enfermedades")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_histoiralfamiliar")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_historialclinico")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_lenguaje")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_terapias")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_tiposocial")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_transtornoalimenticio")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_transtornoesfinteres")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "lcs_trastornosuenio")
	{
		$keysAssoc["idEstudiante"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idEstudiante", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idEstudiante", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idEstudiante", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("EstuHistEmbarazo","idEstudiante").": ".$keyValue;
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
		$xt->assign("MesesNac_mastervalue", $viewControls->showDBValue("MesesNac", $data, $keylink));
	$format = $settings->getViewFormat("MesesNac");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("MesesNac")))
		$class = ' rnr-field-number';
	
	$xt->assign("MesesNac_class", $class); // add class for field header as field value
		$xt->assign("TipoParto_mastervalue", $viewControls->showDBValue("TipoParto", $data, $keylink));
	$format = $settings->getViewFormat("TipoParto");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TipoParto")))
		$class = ' rnr-field-number';
	
	$xt->assign("TipoParto_class", $class); // add class for field header as field value
		$xt->assign("AbortosAnt_mastervalue", $viewControls->showDBValue("AbortosAnt", $data, $keylink));
	$format = $settings->getViewFormat("AbortosAnt");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("AbortosAnt")))
		$class = ' rnr-field-number';
	
	$xt->assign("AbortosAnt_class", $class); // add class for field header as field value
		$xt->assign("Emorragias_mastervalue", $viewControls->showDBValue("Emorragias", $data, $keylink));
	$format = $settings->getViewFormat("Emorragias");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Emorragias")))
		$class = ' rnr-field-number';
	
	$xt->assign("Emorragias_class", $class); // add class for field header as field value
		$xt->assign("infecciones_mastervalue", $viewControls->showDBValue("infecciones", $data, $keylink));
	$format = $settings->getViewFormat("infecciones");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("infecciones")))
		$class = ' rnr-field-number';
	
	$xt->assign("infecciones_class", $class); // add class for field header as field value
		$xt->assign("LloroPronto_mastervalue", $viewControls->showDBValue("LloroPronto", $data, $keylink));
	$format = $settings->getViewFormat("LloroPronto");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("LloroPronto")))
		$class = ' rnr-field-number';
	
	$xt->assign("LloroPronto_class", $class); // add class for field header as field value
		$xt->assign("RespiroPronto_mastervalue", $viewControls->showDBValue("RespiroPronto", $data, $keylink));
	$format = $settings->getViewFormat("RespiroPronto");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("RespiroPronto")))
		$class = ' rnr-field-number';
	
	$xt->assign("RespiroPronto_class", $class); // add class for field header as field value
		$xt->assign("ColorNacido_mastervalue", $viewControls->showDBValue("ColorNacido", $data, $keylink));
	$format = $settings->getViewFormat("ColorNacido");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ColorNacido")))
		$class = ' rnr-field-number';
	
	$xt->assign("ColorNacido_class", $class); // add class for field header as field value
		$xt->assign("SufrimientoFetal_mastervalue", $viewControls->showDBValue("SufrimientoFetal", $data, $keylink));
	$format = $settings->getViewFormat("SufrimientoFetal");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SufrimientoFetal")))
		$class = ' rnr-field-number';
	
	$xt->assign("SufrimientoFetal_class", $class); // add class for field header as field value
		$xt->assign("EmbDeseado_mastervalue", $viewControls->showDBValue("EmbDeseado", $data, $keylink));
	$format = $settings->getViewFormat("EmbDeseado");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("EmbDeseado")))
		$class = ' rnr-field-number';
	
	$xt->assign("EmbDeseado_class", $class); // add class for field header as field value
		$xt->assign("Embarazocol_mastervalue", $viewControls->showDBValue("Embarazocol", $data, $keylink));
	$format = $settings->getViewFormat("Embarazocol");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Embarazocol")))
		$class = ' rnr-field-number';
	
	$xt->assign("Embarazocol_class", $class); // add class for field header as field value
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

	$layout = GetPageLayout("EstuHistEmbarazo", "masterreport");
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("EstuHistEmbarazo", "masterreport"));
}
?>