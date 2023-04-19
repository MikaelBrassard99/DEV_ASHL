<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Today Transactions</title>
<script src="ASHL11-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL11-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL11-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
[2021-09-23 18:01:10] - Maximum Farm Players Limit Reached for Laval Chiefs!<br />
[2021-09-23 18:01:10] - Maximum Farm Players Limit Reached for Manitoba Moose!<br />
[2021-09-23 18:01:09] - Maximum Farm Players Limit Reached for Binghamton Senators!<br />
[2021-09-23 18:01:09] - Maximum Farm Players Limit Reached for Rochester Americans!Maximum Players per Team Limit Reached for Buffalo Sabres!Current fund for Buffalo Sabres is under 0 $.<br />
[2021-09-23 18:00:45] - Sam Lafferty of Carolina Hurricanes was sent down to farm.<br />
[2021-09-23 17:59:49] - Kiefer Sherwood of Carolina Hurricanes was sent down to farm.<br />
[2021-09-23 17:59:09] - Joel Kiviranta of Carolina Hurricanes was sent down to farm.<br />
[2021-09-23 17:58:52] - Kevin Lankinen of Carolina Hurricanes was sent to farm.<br />
[2021-09-23 17:58:30] - Eric Comrie of Carolina Hurricanes was sent to farm.<br />
[2021-09-23 17:57:32] - Laurent Dauphin of Carolina Hurricanes was sent down to farm.<br />
<?php include "Footer.php";?>
