<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Pro Power Ranking</title>
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
<script>$(function(){$("table").basictablesorter()});$(function (){$("table").stickyTableHeaders();});</script>
<table class="basictablesorter"><thead><tr><th class="STHSW35">Today</th><th class="STHSW35">Last</th><th class="STHSW200">Teams</th><th class="STHSW45">Points</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">T</th><th class="STHSW25">OTL</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th></tr></thead>
<tr><td>1</td><td>1</td><td>ETATS-UNIS</td><td>17</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>7</td></tr>
<tr><td>2</td><td>2</td><td>SUISSE</td><td>5</td><td>1</td><td>0</td><td>0</td><td>2</td><td>0</td><td>9</td><td>9</td></tr>
<tr><td>3</td><td>3</td><td>FINLANDE</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>5</td><td>7</td></tr>
<tr><td>4</td><td>4</td><td>CANADA</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>8</td><td>10</td></tr>
<tr><td>5</td><td>5</td><td>RUSSIE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>6</td><td>6</td><td>REPUBLIQUE TCHEQUE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>7</td><td>7</td><td>SLOVAQUIE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>8</td><td>8</td><td>TEAM WORLD</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>9</td><td>9</td><td>U23 NORTH AMERICA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>10</td><td>10</td><td>LETTONIE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>11</td><td>11</td><td>SUEDE</td><td>-2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>2</td><td>4</td></tr>
<tr><td>12</td><td>12</td><td>ALLEMAGNE</td><td>-2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>3</td></tr>
</table>
<?php include "Footer.php";?>
