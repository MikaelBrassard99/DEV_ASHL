<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Pro Standing</title>
<script src="IHWC-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="IHWC-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"IHWC-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"IHWC-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSCenter"><h1>ETATS-UNIS wins the tournament!</h1></div>
<table class="STHSTableFullW"><tr>
<td><b> Round : 1</b></td>
<td><b> Round : 2</b></td>
<td><b> Round : 3</b></td>
</tr>
<tr>
<td><b>
<a href="IHWC-PLF-ProTeamRoster.html#CANADA">CANADA - 0</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="IHWC-PLF-ProTeamRoster.html#SUISSE">SUISSE - 1</a><br />
<a href="IHWC-PLF-ProTeamRoster.html#ALLEMAGNE">ALLEMAGNE - 0</a><br />
<br /></b></td>
<td><b>
<a href="IHWC-PLF-ProTeamRoster.html#SUISSE">SUISSE - 0</a><br />
<a href="IHWC-PLF-ProTeamRoster.html#CANADA">CANADA - 1</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="IHWC-PLF-ProTeamRoster.html#SUEDE">SUEDE - 0</a><br />
<a href="IHWC-PLF-ProTeamRoster.html#ETATS-UNIS">ETATS-UNIS - 1</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<a href="IHWC-PLF-ProTeamRoster.html#FINLANDE">FINLANDE - 1</a><br />
<a href="IHWC-PLF-ProTeamRoster.html#SUISSE">SUISSE - 0</a><br />
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="IHWC-PLF-ProTeamRoster.html#FINLANDE">FINLANDE - 0</a><br />
<br /></b></td>
<td><b>
<a href="IHWC-PLF-ProTeamRoster.html#ETATS-UNIS">ETATS-UNIS - 1</a><br />
<a href="IHWC-PLF-ProTeamRoster.html#FINLANDE">FINLANDE - 0</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<a href="IHWC-PLF-ProTeamRoster.html#ETATS-UNIS">ETATS-UNIS - 1</a><br />
<a href="IHWC-PLF-ProTeamRoster.html#CANADA">CANADA - 0</a><br />
<br /></b></td>
</tr>
</table>
<?php include "Footer.php";?>
