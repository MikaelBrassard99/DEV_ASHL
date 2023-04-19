<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Teams And GM Info</title>
<script src="IHWC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1160px) {
.STHSWarning {display:block;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(1){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(1){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(2){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(2){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(3){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(3){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(4){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(4){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(5){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(5){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(6){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(6){display:none;}
}</style>
<link href="IHWC.css" rel="stylesheet" type="text/css" />
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
<table class="STHSTeamsAndGMInfo_MainTable"><thead><tr>
<th>Team Name</th>
<th>General Manager</th>
<th>Instant Messenger</th>
<th>Email</th>
<th>City</th>
<th>Arena</th>
<th>Farm Team Name</th>
<th>Last File Load Date</th>
<th># of Load Lines</th>
<th># of Fail Auto Roster</th>
<th># of Fail Pro Auto Line</th>
<th># of Fail Farm Auto Line</th>
<th># of Fail Simulation</th></tr></thead><tbody>
<tr><td>ALLEMAGNE</td>
<td>David Côté</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 12</td>
<td>12 avril 2020 at 05:34</td>
<td>2</td>
<td>2</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>CANADA</td>
<td>Martin Mercier</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 10</td>
<td>12 avril 2020 at 05:33</td>
<td>2</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>ETATS-UNIS</td>
<td>Jonathan Légaré</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 5</td>
<td>11 avril 2020 at 07:05</td>
<td>6</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>FINLANDE</td>
<td>Sébastien Tremblay</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 11</td>
<td>12 avril 2020 at 05:34</td>
<td>2</td>
<td>2</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>LETTONIE</td>
<td>Olivier Madgin</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 9</td>
<td>8 avril 2020 at 15:41</td>
<td>4</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>REPUBLIQUE TCHEQUE</td>
<td>Éric Simard</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 2</td>
<td>8 avril 2020 at 05:35</td>
<td>3</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>RUSSIE</td>
<td>Maxime-Olivier Mercier</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 1</td>
<td>5 avril 2020 at 06:37</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>SLOVAQUIE</td>
<td>Felix Fortier</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 6</td>
<td>9 avril 2020 at 05:20</td>
<td>2</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>SUEDE</td>
<td>Alexandre Brabant</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 4</td>
<td>12 avril 2020 at 05:34</td>
<td>4</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>SUISSE</td>
<td>Simon Brassard</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 3</td>
<td>10 avril 2020 at 05:45</td>
<td>5</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>TEAM WORLD</td>
<td>Yannick Ferland</td>
<td></td>
<td><a href="mailto:"></a></td>
<td></td>
<td></td>
<td>Farm Team 7</td>
<td>10 avril 2020 at 18:03</td>
<td>5</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
<tr><td>U23 NORTH AMERICA</td>
<td>J-P Vandal</td>
<td></td>
<td><a href="mailto:j@imesimon">j@imesimon</a></td>
<td></td>
<td></td>
<td>Farm Team 8</td>
<td>8 avril 2020 at 15:41</td>
<td>2</td>
<td>3</td>
<td>0</td>
<td>0</td>
<td>1</td></tr>
</tbody></table><br />
<a href="mailto:j@imesimon">Email all General Manager</a>
<?php include "Footer.php";?>
