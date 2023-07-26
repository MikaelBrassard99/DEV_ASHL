<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro All Players Stats</title>
<script src="WC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
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
.STHSScoring_PlayersTable2 tbody td:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-last-child(3){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-last-child(3){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(1){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(1){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(2){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(2){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(3){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(3){display:none;}
}
@media screen and (max-width: 960px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(2){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(2){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(3){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-child(2){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-child(2){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-child(3){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-child(3){display:none;}
}
@media screen and (max-width: 890px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(12){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(12){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(14){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(14){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(15){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(15){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(8){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(8){display:none;}
}</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter()});</script>
<h1 class="ProTotalPlayerStat_Player1">Pro Players Stats #1</h1>
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><br /><h1 class="ProTotalPlayerStat_Player2">Pro Players Stats #2</h1><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
</table><br /><h1 class="ProTotalPlayerStat_Goaler">Pro Goaler Stats</h1><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table>
<?php include "Footer.php";?>
