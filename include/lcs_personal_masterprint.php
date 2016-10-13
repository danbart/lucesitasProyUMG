<?php
function DisplayMasterTableInfoForPrint_lcs_personal($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "lcs_personal";

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "lcs_sesion" )
	{
		$keysAssoc["idUsuario"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("idUsuario", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("idUsuario", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("idUsuario", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("lcs_personal","idUsuario").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["idUsuario"]));
	$keylink.= "&key2=".runner_htmlspecialchars(rawurlencode(@$data["TipoUsuario"]));
	$keylink.= "&key3=".runner_htmlspecialchars(rawurlencode(@$data["Nombre"]));
	$keylink.= "&key4=".runner_htmlspecialchars(rawurlencode(@$data["Apellido"]));
	$keylink.= "&key5=".runner_htmlspecialchars(rawurlencode(@$data["Telefono"]));
	$keylink.= "&key6=".runner_htmlspecialchars(rawurlencode(@$data["Email"]));
	$keylink.= "&key7=".runner_htmlspecialchars(rawurlencode(@$data["Password"]));
	$keylink.= "&key8=".runner_htmlspecialchars(rawurlencode(@$data["celular"]));
	$keylink.= "&key9=".runner_htmlspecialchars(rawurlencode(@$data["Voluntario"]));
	$keylink.= "&key10=".runner_htmlspecialchars(rawurlencode(@$data["Ingresado"]));
	$keylink.= "&key11=".runner_htmlspecialchars(rawurlencode(@$data["_idCentro"]));
	
	$xt->assign("idUsuario_mastervalue", $viewControls->showDBValue("idUsuario", $data, $keylink));
	$format = $settings->getViewFormat("idUsuario");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("idUsuario")))
		$class = ' rnr-field-number';
		
	$xt->assign("idUsuario_class", $class); // add class for field header as field value
	$xt->assign("TipoUsuario_mastervalue", $viewControls->showDBValue("TipoUsuario", $data, $keylink));
	$format = $settings->getViewFormat("TipoUsuario");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TipoUsuario")))
		$class = ' rnr-field-number';
		
	$xt->assign("TipoUsuario_class", $class); // add class for field header as field value
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
	$xt->assign("Password_mastervalue", $viewControls->showDBValue("Password", $data, $keylink));
	$format = $settings->getViewFormat("Password");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Password")))
		$class = ' rnr-field-number';
		
	$xt->assign("Password_class", $class); // add class for field header as field value
	$xt->assign("celular_mastervalue", $viewControls->showDBValue("celular", $data, $keylink));
	$format = $settings->getViewFormat("celular");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("celular")))
		$class = ' rnr-field-number';
		
	$xt->assign("celular_class", $class); // add class for field header as field value
	$xt->assign("Voluntario_mastervalue", $viewControls->showDBValue("Voluntario", $data, $keylink));
	$format = $settings->getViewFormat("Voluntario");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Voluntario")))
		$class = ' rnr-field-number';
		
	$xt->assign("Voluntario_class", $class); // add class for field header as field value
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
	$xt->assign("_idCentro_mastervalue", $viewControls->showDBValue("_idCentro", $data, $keylink));
	$format = $settings->getViewFormat("_idCentro");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("_idCentro")))
		$class = ' rnr-field-number';
		
	$xt->assign("_idCentro_class", $class); // add class for field header as field value

	$layout = GetPageLayout("lcs_personal", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("lcs_personal", "masterprint"));
}

?>