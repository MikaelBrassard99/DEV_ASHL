﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Awards</title>
<script src="ASHL10-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL10-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL10-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL10-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<table class="STHSAward_Table"><thead><tr><th>Awards</th><th>Winner</th></tr></thead>
<tbody><tr><td><b>Stanley Cup</b> : Playoff Champion</td><td>
<b>Nashville Predators</b>
</td></tr>
<tr><td><b>Presidents' Trophy</b> : Best Overall Record</td><td>
<b>Philadelphia Flyers</b>
</td></tr>
<tr><td><b>Prince of Wales Trophy</b> : Eastern Conference Champion</td><td>
<b>Columbus Blue Jackets</b>
</td></tr>
<tr><td><b>Clarence S. Campbell Bowl</b>  : Western Conference Champion</td><td>
<b>Nashville Predators</b>
</td></tr>
<tr><td><b>Art Ross Trophy</b> : Top Point Scorer in the NHL</td><td>
</td></tr>
<tr><td><b>Maurice Richard Trophy</b> : Top Goal Scorer in the NHL</td><td>
</td></tr>
<tr><td><b>Hart Memorial Trophy </b> :  NHL Most Valuable Player</td><td>
</td></tr>
<tr><td><b>Calder Memorial Trophy :</b> Rookie of the Year</td><td>