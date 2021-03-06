<?php
$dDebug = false;
$dSQL = "";

$bUseMobileStyleOnly = false;

$tables_data = array();
$page_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$lookupTableLinks = array();

include(getabspath('classes/layout.php'));

//	custom labels
$custom_labels = array();
$custom_labels["Spanish"] = array();

define('NOT_TABLE_BASED_TNAME', ".global");

/**
 *  Define constants of page name 
 */
define('PAGE_LIST',"list");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_RPRINT',"rprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_ADMIN_MEMBERS',"admin_members");
define('PAGE_ADMIN_RIGHTS',"admin_rights");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard

//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard


define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);

define("TAB_TYPE_SECTION", 1);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);

define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants 
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

$globalSettings = array();
$globalSettings["nLoginForm"] = 1;
$globalSettings["nLoginMethod"] = 1;

$globalSettings["popupPagesLayoutNames"] = array();
if(!isMobile())
{
						
	;
$globalSettings["popupPagesLayoutNames"]["login"] = "login2";
}




$globalSettings["createLoginPage"] = true;
$globalSettings["isUseEncryption"] = 0;
$globalSettings["encryptionKey"] = "";

$globalSettings["apiGoogleMapsCode"] = "";


$globalSettings["useBuiltInMailer"] = false;

//password global settings for register page
$globalSettings["pwdStrong"] = true;
$globalSettings["pwdLen"] = 8;
$globalSettings["pwdUnique"] = 4;
$globalSettings["pwdDigits"] = 2;

/**
 * If true then detail table name will be printed before detail table on the view page 
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup  
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed 
 */
$globalSettings["searchSuggestsNumber"] = 10;

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["openPDFFileDirectly"] = true;

$globalSettings["override"] = array();


$wr_pagestylepath = "FancyCoral";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$cLoginTable = "lcs_userslogin";
$cDisplayNameField = "fullname";
$cUserNameField	= "username";
$cPasswordField	= "password";
$cUserGroupField = "groupid";
$cEmailField = "email";

if ($cDisplayNameField == ''){
	$cDisplayNameField = $cUserNameField;
}

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;
$useFlashChartLibrary = true;

												$cUserNameFieldType	= 200;
												$cPasswordFieldType	= 200;
												$cEmailFieldType = 200;
																											

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";


$mlang_messages = array();
$mlang_charsets = array();


$menuAssignments = array();
$menuSelector = array();
$menuSelector["page"] = "lcs_centro_list";
$menuSelector["id"] = "main";
$menuSelector["name"] = "main";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;

$menuStyles = array();
$menuStyle = array();
$menuStyle["page"] = "menu";
$menuStyle["id"] = "main";
$menuStyle["style"] = "1";
$menuStyle["horizontal"] = "0";
$menuStyles[] = $menuStyle;

// table captions
$tableCaptions = array();
$tableCaptions["Spanish"] = array();
$tableCaptions["Spanish"]["lcs_centro"] = "Centro";
$tableCaptions["Spanish"]["lcs_estudiante"] = "Estudiante";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"]["lcs_terapias"] = "Terapias";
$tableCaptions["Spanish"]["lcs_terapista"] = "Terapista";
$tableCaptions["Spanish"]["lcs_tiposocial"] = "Tiposocial";
$tableCaptions["Spanish"]["lcs_transtornoalimenticio"] = "Transtorno Alimenticio";
$tableCaptions["Spanish"]["lcs_transtornoesfinteres"] = "Transtorno Esfinteres";
$tableCaptions["Spanish"]["lcs_trastornosuenio"] = "Trastorno sueño";
$tableCaptions["Spanish"]["lcs_lenguaje"] = "Lenguaje";
$tableCaptions["Spanish"]["lcs_historialclinico"] = "Historial Clinico";
$tableCaptions["Spanish"]["lcs_histoiralfamiliar"] = "Histoiral Familiar";
$tableCaptions["Spanish"]["lcs_enfermedades"] = "Enfermedades";
$tableCaptions["Spanish"]["lcs_embarazo"] = "Embarazo";
$tableCaptions["Spanish"]["lcs_espemed"] = "Especialidad Medica";
$tableCaptions["Spanish"]["lcs_descsocial"] = "Descsocial";
$tableCaptions["Spanish"]["lcs_encargado"] = "Encargado";
$tableCaptions["Spanish"]["lcs_emociones"] = "Emociones";
$tableCaptions["Spanish"]["lcs_medicamento"] = "Medicamento";
$tableCaptions["Spanish"]["lcs_donaciones"] = "Donaciones";
$tableCaptions["Spanish"]["Reporte_Estudiantes"] = "Reporte Estudiantes";
$tableCaptions["Spanish"]["RepEstudMed"] = "Rep Estud Med";
$tableCaptions["Spanish"]["EstuHistSocial"] = "Estu Hist Social";
$tableCaptions["Spanish"]["TranstornosAlimenticio"] = "Transtornos Alimenticio";
$tableCaptions["Spanish"]["EstuHistLengua"] = "Estu Hist Lengua";
$tableCaptions["Spanish"]["TranstornosEsfinteres"] = "Transtornos Esfinteres";
$tableCaptions["Spanish"]["TranstornosSueno"] = "Transtornos Sueno";
$tableCaptions["Spanish"]["EstuHistEmoci"] = "Estu Hist Emoci";
$tableCaptions["Spanish"]["EstuHistEmbarazo"] = "Estu Hist Embarazo";
$tableCaptions["Spanish"]["EstuHistCaracter"] = "Estu Hist Caracter";
$tableCaptions["Spanish"]["lcs_userslogin"] = "Lcs Userslogin";
$tableCaptions["Spanish"]["proylucesitasv80_audit"] = "Proylucesitasv80 Audit";
$tableCaptions["Spanish"]["lcs_personal"] = "Personal";
$tableCaptions[""] = array();
$tableCaptions[""][""] = "";
$tableCaptions[""]["lcs_centro"] = "Lcs Centro";
$tableCaptions[""]["lcs_estudiante"] = "Lcs Estudiante";
$tableCaptions[""]["lcs_terapias"] = "Lcs Terapias";
$tableCaptions[""]["lcs_terapista"] = "Lcs Terapista";
$tableCaptions[""]["lcs_tiposocial"] = "Lcs Tiposocial";
$tableCaptions[""]["lcs_transtornoalimenticio"] = "Lcs Transtornoalimenticio";
$tableCaptions[""]["lcs_transtornoesfinteres"] = "Lcs Transtornoesfinteres";
$tableCaptions[""]["lcs_trastornosuenio"] = "Lcs Trastornosuenio";
$tableCaptions[""]["lcs_lenguaje"] = "Lcs Lenguaje";
$tableCaptions[""]["lcs_historialclinico"] = "Lcs Historialclinico";
$tableCaptions[""]["lcs_histoiralfamiliar"] = "Lcs Histoiralfamiliar";
$tableCaptions[""]["lcs_enfermedades"] = "Lcs Enfermedades";
$tableCaptions[""]["lcs_embarazo"] = "Lcs Embarazo";
$tableCaptions[""]["lcs_espemed"] = "Lcs Espemed";
$tableCaptions[""]["lcs_descsocial"] = "Lcs Descsocial";
$tableCaptions[""]["lcs_encargado"] = "Lcs Encargado";
$tableCaptions[""]["lcs_emociones"] = "Lcs Emociones";
$tableCaptions[""]["lcs_medicamento"] = "Lcs Medicamento";
$tableCaptions[""]["lcs_donaciones"] = "Lcs Donaciones";
$tableCaptions[""]["Reporte_Estudiantes"] = "Reporte Estudiantes";
$tableCaptions[""]["RepEstudMed"] = "Rep Estud Med";
$tableCaptions[""]["EstuHistSocial"] = "Estu Hist Social";
$tableCaptions[""]["TranstornosAlimenticio"] = "Transtornos Alimenticio";
$tableCaptions[""]["EstuHistLengua"] = "Estu Hist Lengua";
$tableCaptions[""]["TranstornosEsfinteres"] = "Transtornos Esfinteres";
$tableCaptions[""]["TranstornosSueno"] = "Transtornos Sueno";
$tableCaptions[""]["EstuHistEmoci"] = "Estu Hist Emoci";
$tableCaptions[""]["EstuHistEmbarazo"] = "Estu Hist Embarazo";
$tableCaptions[""]["EstuHistCaracter"] = "Estu Hist Caracter";
$tableCaptions[""]["lcs_userslogin"] = "Lcs Userslogin";
$tableCaptions[""]["proylucesitasv80_audit"] = "Proylucesitasv80 Audit";
$tableCaptions[""]["lcs_personal"] = "Lcs Personal";


$globalEvents = new class_GlobalEvents;
$tableEvents = array();

$mlang_defaultlang = "Spanish";



$page_titles[".global"] = array();
if(mlang_getcurrentlang()=="Spanish")
{
}
if(mlang_getcurrentlang()=="")
{
}

include(getabspath('classes/security.php'));
include( getabspath("connections/dbfunctions_legacy.php") ); 
include( getabspath("connections/ConnectionManager.php") ); 
$cman = new ConnectionManager();
// default connection link #9875
$conn = $cman->getDefault()->conn;

$scriptname = getFileNameFromURL();
	if(!isLogged() && $scriptname!="login.php" && $scriptname!="remind.php" && $scriptname!="register.php")
{
	Security::doGuestLogin();
}



$isGroupSecurity = true;

$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 0;

include(getabspath('classes/projectsettings.php'));
include_once(getabspath('classes/runnerpage.php'));


?>