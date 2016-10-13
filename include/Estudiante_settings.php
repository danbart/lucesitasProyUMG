<?php
require_once(getabspath("classes/cipherer.php"));



$tdataEstudiante = array();	
$tdataEstudiante[".ShortName"] = "Estudiante";

//	field labels
$fieldLabelsEstudiante = array();
$pageTitlesEstudiante = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsEstudiante["Spanish"] = array();
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_Estudiante"] = "Estudiante";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_FotoRostro"] = "Foto";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_edad"] = "Edad";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_RelacionHermano"] = "Relacion Hermano";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_RelacionCompaneros"] = "Relacion Companeros";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_CQuinJuega"] = "Con quien Juega";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_CQueJuega"] = "Con Que Juega";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_TipoEmocion"] = "Tipo Emocion";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_CQNinio"] = "CQNinio";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_FProblematico"] = "FProblematico";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_DuermeSolo"] = "Duerme Solo";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_ComparteCuarto"] = "Comparte Cuarto";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_ParineteIgual"] = "Parinete Igual";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_TSocial"] = "Tipo Social";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_Balbucea"] = "Balbucea";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_Edad1Palabra"] = "Edad primera Palabra";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_EdadMesVocalizo"] = "Edad Mes Vocalizo";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_AdaptSocial"] = "Adaptación Social";
	$fieldLabelsEstudiante["Spanish"]["EstudHistoClin_Documento"] = "Documento";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEstudiante[""] = array();
}

//	search fields
$tdataEstudiante[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"Estudiante" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_Estudiante"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"FotoRostro" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_FotoRostro"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"edad" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_edad"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"RelacionHermano" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_RelacionHermano"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"RelacionCompaneros" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_RelacionCompaneros"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"CQuinJuega" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_CQuinJuega"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"CQueJuega" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_CQueJuega"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"TipoEmocion" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_TipoEmocion"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"CQNinio" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_CQNinio"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"FProblematico" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_FProblematico"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"DuermeSolo" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_DuermeSolo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"ComparteCuarto" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_ComparteCuarto"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"ParineteIgual" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_ParineteIgual"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"TSocial" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_TSocial"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"Balbucea" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_Balbucea"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"Edad1Palabra" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_Edad1Palabra"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"EdadMesVocalizo" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_EdadMesVocalizo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"AdaptSocial" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_AdaptSocial"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"EstudHistoClin", "field"=>"Documento" );
$tdataEstudiante[".searchFields"]["EstudHistoClin_Documento"] = $dashField;

// all search fields
$tdataEstudiante[".allSearchFields"] = array();
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_Estudiante";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_FotoRostro";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_edad";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_RelacionHermano";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_RelacionCompaneros";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_CQuinJuega";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_CQueJuega";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_TipoEmocion";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_CQNinio";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_FProblematico";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_DuermeSolo";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_ComparteCuarto";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_ParineteIgual";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_TSocial";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_Balbucea";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_Edad1Palabra";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_EdadMesVocalizo";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_AdaptSocial";
$tdataEstudiante[".allSearchFields"][] = "EstudHistoClin_Documento";

// good like search fields
$tdataEstudiante[".googleLikeFields"] = array();
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_Estudiante";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_FotoRostro";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_edad";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_RelacionHermano";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_RelacionCompaneros";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_CQuinJuega";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_CQueJuega";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_TipoEmocion";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_CQNinio";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_FProblematico";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_DuermeSolo";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_ComparteCuarto";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_ParineteIgual";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_TSocial";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_Balbucea";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_Edad1Palabra";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_EdadMesVocalizo";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_AdaptSocial";
$tdataEstudiante[".googleLikeFields"][] = "EstudHistoClin_Documento";

$tdataEstudiante[".dashElements"] = array();

	$dbelement = array( "elementName" => "EstudHistoClin_report", "table" => "EstudHistoClin", "type" => 2);
	$dbelement["cellName"] = "cell_0_0";
	
			$tdataEstudiante[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "RepEstudMed_report", "table" => "RepEstudMed", "type" => 2);
	$dbelement["cellName"] = "cell_0_2";
	
			$tdataEstudiante[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Reporte_Estudiantes_report", "table" => "Reporte Estudiantes", "type" => 2);
	$dbelement["cellName"] = "cell_1_2";
	
			$tdataEstudiante[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "lcs_estudiante_search", "table" => "lcs_estudiante", "type" => 4);
	$dbelement["cellName"] = "cell_2_0";
	
			$tdataEstudiante[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "lcs_donaciones_list", "table" => "lcs_donaciones", "type" => 0);
	$dbelement["cellName"] = "cell_2_1";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataEstudiante[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "lcs_tiposocial_list", "table" => "lcs_tiposocial", "type" => 0);
	$dbelement["cellName"] = "cell_3_0";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataEstudiante[".dashElements"][] = $dbelement;

$tdataEstudiante[".shortTableName"] = "Estudiante";
$tdataEstudiante[".nType"] = 4;


$tableEvents["Estudiante"] = new eventsBase;
$tdataEstudiante[".hasEvents"] = false;


$tdataEstudiante[".tableType"] = "dashboard";



$tdataEstudiante[".addPageEvents"] = false;

$tables_data["Estudiante"]=&$tdataEstudiante;
$field_labels["Estudiante"] = &$fieldLabelsEstudiante;
$page_titles["Estudiante"] = &$pageTitlesEstudiante;

?>