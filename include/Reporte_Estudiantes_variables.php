<?php
$strTableName="Reporte Estudiantes";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="lcs_estudiante";

$gstrOrderBy="ORDER BY lcs_terapias.fecha DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Reporte Estudiantes");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Reporte Estudiantes"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>