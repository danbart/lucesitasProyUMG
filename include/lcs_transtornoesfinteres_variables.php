<?php
$strTableName="lcs_transtornoesfinteres";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="lcs_transtornoesfinteres";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("lcs_transtornoesfinteres");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["lcs_transtornoesfinteres"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>