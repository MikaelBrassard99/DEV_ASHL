<?php $PerformanceMonitorStart = microtime(true);
$DatabaseFile = (string)"";
$CareerStatDatabaseFile = (string)"";
$NewsDatabaseFile = (string)"";
$GameHTMLDatabaseFile = (string)"";
$GameJSONDatabaseFile = (string)"";
$LegacyHTMLDatabaseFile = (string)"";
$AllStarDatabaseFile = (string)"";
$Cookie_Name = (string)"";
$CookieTeamNumberKey = (string)"";
$LeagueOwner = (string)"";
$MetaContent = (string)"";
$WebClientHeadCode = (string)"";
$DoNotRequiredLoginDynamicWebsite = (boolean)FALSE;
$LangOverwrite = (boolean)FALSE;
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
$LangOverwrite = (boolean)FALSE;
$WebClientHeadCode = "<link href=\"STHSMain.css\" rel=\"stylesheet\" type=\"text/css\" />";
If (file_exists("STHSMain-CSSOverwrite.css") == true){$WebClientHeadCode = $WebClientHeadCode . "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}

If (file_exists("STHSSetting.ini") == True){
	$dbSTHSOptions = new SQLite3("STHSSetting.ini");
	$Query = "Select * FROM STHSOptions";
	$STHSOptions = $dbSTHSOptions->querySingle($Query,true);
	if (isset($STHSOptions)){
		
		$DatabaseFile = $STHSOptions['DatabaseFile'];
		$DatabaseFileS14 = (string)"ASHL13-STHS.db";
		$DatabaseFileS13 = (string)"ASHL12-STHS.db";
		$DatabaseFileS12 = (string)"ASHL11-STHS.db";
		$DatabaseFileS11 = (string)"ASHL101-STHS.db";
		$DatabaseFileS_C = (string)"ASHL10-STHS.db";
		$DatabaseFileS10 = (string)"ASHL9-STHS.db";

		$CareerStatDatabaseFile =  $STHSOptions['CareerStatDatabaseFile'];
		$NewsDatabaseFile =  $STHSOptions['NewsDatabaseFile'];
		$GameHTMLDatabaseFile = $STHSOptions['GameHTMLDatabaseFile'];
		$GameJSONDatabaseFile = $STHSOptions['GameJSONDatabaseFile'];
		$LegacyHTMLDatabaseFile = $STHSOptions['LegacyHTMLDatabaseFile'];
		$AllStarDatabaseFile = $STHSOptions['AllStarDatabaseFile'];
		$Cookie_Name =  $STHSOptions['Cookie_Name'];
		$CookieTeamNumberKey =  $_SERVER['SERVER_NAME'] . $STHSOptions['CookieTeamNumberKey'];
		$LeagueOwner =  $STHSOptions['LeagueOwner'];
		$MetaContent =  $STHSOptions['MetaContent'];
		If ($STHSOptions['DoNotRequiredLoginDynamicWebsite'] == "TRUE"){$DoNotRequiredLoginDynamicWebsite = True;}
		$lang = $STHSOptions['Lang']; 
	}
}
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
require_once "Cookie.php";
?>