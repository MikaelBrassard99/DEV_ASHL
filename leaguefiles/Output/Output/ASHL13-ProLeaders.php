<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Leaders</title>
<script src="ASHL13.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - ASHL13-STHS.db - ASHL13-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(3){display:none;}
}
@media screen and (max-width: 1060px) {
.STHSScoring_PlayersTable1 tbody td:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(8){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(8){display:none;}
}
@media screen and (max-width: 960px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(3){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(4){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(4){display:none;}
}
@media screen and (max-width: 890px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(13){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(13){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(15){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(15){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(16){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(16){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(5){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(5){display:none;}
}</style>
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter()});$(function (){$("table").stickyTableHeaders();});</script>
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW25">#</th><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th></tr></thead>
<tbody></tbody></table>
<?php include "Footer.php";?>
