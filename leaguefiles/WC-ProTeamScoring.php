<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Team Scoring</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#DANEMARK">DANEMARK</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUÈDE">SUÈDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TCHÉQUIE">TCHÉQUIE</a> | <a href="#USA">USA</a> | <a href="#WORLD">WORLD</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamScoringPro_GER"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">ALLEMAGNE Page</a> ]
[ <a href="WC-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="WC-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="WC-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="WC-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_DAN"><a id="DANEMARK">DANEMARK</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">DANEMARK Page</a> ]
[ <a href="WC-ProTeamRoster.php#DANEMARK">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#DANEMARK">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#DANEMARK">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#DANEMARK">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#DANEMARK">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#DANEMARK">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#DANEMARK">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#DANEMARK">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#DANEMARK">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#DANEMARK">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#DANEMARK">Team History</a> ]
[ <a href="WC-TeamRecords.php#DANEMARK">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DANEMARK');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DANEMARK" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">FINLANDE Page</a> ]
[ <a href="WC-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="WC-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">LETTONIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">RUSSIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_SVK"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SLOVAQUIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_SWE"><a id="SUÈDE">SUÈDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">SUÈDE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SUÈDE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SUÈDE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SUÈDE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SUÈDE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SUÈDE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SUÈDE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SUÈDE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SUÈDE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SUÈDE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SUÈDE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SUÈDE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SUÈDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUÈDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUÈDE" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_SWI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">SUISSE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_CZE"><a id="TCHÉQUIE">TCHÉQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">TCHÉQUIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#TCHÉQUIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#TCHÉQUIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#TCHÉQUIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#TCHÉQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#TCHÉQUIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#TCHÉQUIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#TCHÉQUIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#TCHÉQUIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#TCHÉQUIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#TCHÉQUIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#TCHÉQUIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#TCHÉQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TCHÉQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TCHÉQUIE" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_USA"><a id="USA">USA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">USA Page</a> ]
[ <a href="WC-ProTeamRoster.php#USA">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#USA">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#USA">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#USA">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#USA">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#USA">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#USA">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#USA">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#USA">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#USA">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#USA">Team History</a> ]
[ <a href="WC-TeamRecords.php#USA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_USA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_USA" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_WLD"><a id="WORLD">WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">WORLD Page</a> ]
[ <a href="WC-ProTeamRoster.php#WORLD">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#WORLD">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#WORLD">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#WORLD">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#WORLD">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#WORLD">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#WORLD">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#WORLD">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#WORLD">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#WORLD">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#WORLD">Team History</a> ]
[ <a href="WC-TeamRecords.php#WORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WORLD" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<?php include "Footer.php";?>
