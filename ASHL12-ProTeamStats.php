<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Stats</title>
<script src="ASHL12.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.3.3 - ASHL12-STHS.db - ASHL12-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (min-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(2){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(2){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(2){display:none;}}
@media screen and (max-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(1){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(1){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(1){display:none;}}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSTeamStat_Table2 thead th:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(2){display:none;}
}
@media screen and (max-width: 960px) {
.STHSTeamStat_Table2 thead th:nth-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(8){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(9){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(9){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(9){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(10){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(10){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(10){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(11){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(11){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(3){display:none;}
}
}</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Arizona Coyotes</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Boston Bruins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Buffalo Sabres</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Calgary Flames</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Carolina Hurricanes</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Blackhawks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Colorado Avalanche</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Columbus Blue Jackets</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Dallas Stars</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Detroit Red Wings</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Edmonton Oilers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Florida Panthers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Los Angeles Kings</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Minnesota Wild</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Montreal Canadiens</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Nashville Predators</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>New Jersey Devils</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>New York Islanders</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>New York Rangers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Ottawa Senators</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Philadelphia Flyers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Pittsburgh Penguins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Quebec Nordiques</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>San Jose Sharks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Seattle Kraken</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>St. Louis Blues</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Tampa Bay Lightning</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Toronto Maple Leafs</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Vancouver Canucks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Vegas Golden Knights</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Washington Capitals</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Winnipeg Jets</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Anaheim Ducks</td><td>ANH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Arizona Coyotes</td><td>ARZ</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Boston Bruins</td><td>BOS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Buffalo Sabres</td><td>BUF</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Calgary Flames</td><td>CGY</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Carolina Hurricanes</td><td>CAR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Blackhawks</td><td>CHI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Colorado Avalanche</td><td>COL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Columbus Blue Jackets</td><td>CLB</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Dallas Stars</td><td>DAL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Detroit Red Wings</td><td>DET</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Edmonton Oilers</td><td>EDM</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Florida Panthers</td><td>FLA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Los Angeles Kings</td><td>LOS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Minnesota Wild</td><td>MIN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Montreal Canadiens</td><td>MTL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Nashville Predators</td><td>NSH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>New Jersey Devils</td><td>NJD</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>New York Islanders</td><td>NYI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>New York Rangers</td><td>NYR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Ottawa Senators</td><td>OTT</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Philadelphia Flyers</td><td>PHI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Pittsburgh Penguins</td><td>PIT</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Quebec Nordiques</td><td>QUE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>San Jose Sharks</td><td>SJS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Seattle Kraken</td><td>SEA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>St. Louis Blues</td><td>STL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Tampa Bay Lightning</td><td>TBL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Toronto Maple Leafs</td><td>TOR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Vancouver Canucks</td><td>VAN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Vegas Golden Knights</td><td>VEG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Washington Capitals</td><td>WSH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Winnipeg Jets</td><td>WPG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>0,00</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>0,00</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>0,00</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>0,00</td></tr>
<tr><td>5</td><td>Buffalo Sabres</td><td>0,00</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>0,00</td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>0,00</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>0,00</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>0,00</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>0,00</td></tr>
<tr><td>11</td><td>Dallas Stars</td><td>0,00</td></tr>
<tr><td>12</td><td>Detroit Red Wings</td><td>0,00</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>0,00</td></tr>
<tr><td>14</td><td>Florida Panthers</td><td>0,00</td></tr>
<tr><td>15</td><td>Los Angeles Kings</td><td>0,00</td></tr>
<tr><td>16</td><td>Minnesota Wild</td><td>0,00</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>0,00</td></tr>
<tr><td>19</td><td>New Jersey Devils</td><td>0,00</td></tr>
<tr><td>20</td><td>New York Islanders</td><td>0,00</td></tr>
<tr><td>21</td><td>New York Rangers</td><td>0,00</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>0,00</td></tr>
<tr><td>23</td><td>Philadelphia Flyers</td><td>0,00</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>0,00</td></tr>
<tr><td>25</td><td>Quebec Nordiques</td><td>0,00</td></tr>
<tr><td>26</td><td>San Jose Sharks</td><td>0,00</td></tr>
<tr><td>27</td><td>Seattle Kraken</td><td>0,00</td></tr>
<tr><td>28</td><td>St. Louis Blues</td><td>0,00</td></tr>
<tr><td>29</td><td>Tampa Bay Lightning</td><td>0,00</td></tr>
<tr><td>30</td><td>Toronto Maple Leafs</td><td>0,00</td></tr>
<tr><td>31</td><td>Vancouver Canucks</td><td>0,00</td></tr>
<tr><td>32</td><td>Vegas Golden Knights</td><td>0,00</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Anaheim Ducks</td><td>0,00</td></tr>
<tr><td>2</td><td>Vegas Golden Knights</td><td>0,00</td></tr>
<tr><td>3</td><td>Vancouver Canucks</td><td>0,00</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>0,00</td></tr>
<tr><td>5</td><td>Tampa Bay Lightning</td><td>0,00</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>0,00</td></tr>
<tr><td>7</td><td>Seattle Kraken</td><td>0,00</td></tr>
<tr><td>8</td><td>San Jose Sharks</td><td>0,00</td></tr>
<tr><td>9</td><td>Quebec Nordiques</td><td>0,00</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>0,00</td></tr>
<tr><td>11</td><td>Philadelphia Flyers</td><td>0,00</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>0,00</td></tr>
<tr><td>13</td><td>New York Rangers</td><td>0,00</td></tr>
<tr><td>14</td><td>New York Islanders</td><td>0,00</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>0,00</td></tr>
<tr><td>16</td><td>Washington Capitals</td><td>0,00</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00</td></tr>
<tr><td>18</td><td>Minnesota Wild</td><td>0,00</td></tr>
<tr><td>19</td><td>Los Angeles Kings</td><td>0,00</td></tr>
<tr><td>20</td><td>Florida Panthers</td><td>0,00</td></tr>
<tr><td>21</td><td>Edmonton Oilers</td><td>0,00</td></tr>
<tr><td>22</td><td>Detroit Red Wings</td><td>0,00</td></tr>
<tr><td>23</td><td>Dallas Stars</td><td>0,00</td></tr>
<tr><td>24</td><td>Columbus Blue Jackets</td><td>0,00</td></tr>
<tr><td>25</td><td>Colorado Avalanche</td><td>0,00</td></tr>
<tr><td>26</td><td>Chicago Blackhawks</td><td>0,00</td></tr>
<tr><td>27</td><td>Carolina Hurricanes</td><td>0,00</td></tr>
<tr><td>28</td><td>Calgary Flames</td><td>0,00</td></tr>
<tr><td>29</td><td>Buffalo Sabres</td><td>0,00</td></tr>
<tr><td>30</td><td>Boston Bruins</td><td>0,00</td></tr>
<tr><td>31</td><td>Arizona Coyotes</td><td>0,00</td></tr>
<tr><td>32</td><td>Montreal Canadiens</td><td>0,00</td></tr>
<tr><td>33</td><td>Winnipeg Jets</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>0,00%</td></tr>
<tr><td>2</td><td>Washington Capitals</td><td>0,00%</td></tr>
<tr><td>3</td><td>Vegas Golden Knights</td><td>0,00%</td></tr>
<tr><td>4</td><td>Vancouver Canucks</td><td>0,00%</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>0,00%</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>0,00%</td></tr>
<tr><td>7</td><td>St. Louis Blues</td><td>0,00%</td></tr>
<tr><td>8</td><td>Seattle Kraken</td><td>0,00%</td></tr>
<tr><td>9</td><td>San Jose Sharks</td><td>0,00%</td></tr>
<tr><td>10</td><td>Quebec Nordiques</td><td>0,00%</td></tr>
<tr><td>11</td><td>Pittsburgh Penguins</td><td>0,00%</td></tr>
<tr><td>12</td><td>Philadelphia Flyers</td><td>0,00%</td></tr>
<tr><td>13</td><td>Ottawa Senators</td><td>0,00%</td></tr>
<tr><td>14</td><td>New York Rangers</td><td>0,00%</td></tr>
<tr><td>15</td><td>New York Islanders</td><td>0,00%</td></tr>
<tr><td>16</td><td>New Jersey Devils</td><td>0,00%</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00%</td></tr>
<tr><td>18</td><td>Montreal Canadiens</td><td>0,00%</td></tr>
<tr><td>19</td><td>Minnesota Wild</td><td>0,00%</td></tr>
<tr><td>20</td><td>Los Angeles Kings</td><td>0,00%</td></tr>
<tr><td>21</td><td>Florida Panthers</td><td>0,00%</td></tr>
<tr><td>22</td><td>Edmonton Oilers</td><td>0,00%</td></tr>
<tr><td>23</td><td>Detroit Red Wings</td><td>0,00%</td></tr>
<tr><td>24</td><td>Dallas Stars</td><td>0,00%</td></tr>
<tr><td>25</td><td>Columbus Blue Jackets</td><td>0,00%</td></tr>
<tr><td>26</td><td>Colorado Avalanche</td><td>0,00%</td></tr>
<tr><td>27</td><td>Chicago Blackhawks</td><td>0,00%</td></tr>
<tr><td>28</td><td>Carolina Hurricanes</td><td>0,00%</td></tr>
<tr><td>29</td><td>Calgary Flames</td><td>0,00%</td></tr>
<tr><td>30</td><td>Buffalo Sabres</td><td>0,00%</td></tr>
<tr><td>31</td><td>Boston Bruins</td><td>0,00%</td></tr>
<tr><td>32</td><td>Arizona Coyotes</td><td>0,00%</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>0,00%</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>0,00%</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>0,00%</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>0,00%</td></tr>
<tr><td>5</td><td>Buffalo Sabres</td><td>0,00%</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>0,00%</td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>0,00%</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>0,00%</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>0,00%</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>0,00%</td></tr>
<tr><td>11</td><td>Dallas Stars</td><td>0,00%</td></tr>
<tr><td>12</td><td>Detroit Red Wings</td><td>0,00%</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>0,00%</td></tr>
<tr><td>14</td><td>Florida Panthers</td><td>0,00%</td></tr>
<tr><td>15</td><td>Los Angeles Kings</td><td>0,00%</td></tr>
<tr><td>16</td><td>Minnesota Wild</td><td>0,00%</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00%</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>0,00%</td></tr>
<tr><td>19</td><td>New Jersey Devils</td><td>0,00%</td></tr>
<tr><td>20</td><td>New York Islanders</td><td>0,00%</td></tr>
<tr><td>21</td><td>New York Rangers</td><td>0,00%</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>0,00%</td></tr>
<tr><td>23</td><td>Philadelphia Flyers</td><td>0,00%</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>0,00%</td></tr>
<tr><td>25</td><td>Quebec Nordiques</td><td>0,00%</td></tr>
<tr><td>26</td><td>San Jose Sharks</td><td>0,00%</td></tr>
<tr><td>27</td><td>Seattle Kraken</td><td>0,00%</td></tr>
<tr><td>28</td><td>St. Louis Blues</td><td>0,00%</td></tr>
<tr><td>29</td><td>Tampa Bay Lightning</td><td>0,00%</td></tr>
<tr><td>30</td><td>Toronto Maple Leafs</td><td>0,00%</td></tr>
<tr><td>31</td><td>Vancouver Canucks</td><td>0,00%</td></tr>
<tr><td>32</td><td>Vegas Golden Knights</td><td>0,00%</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>0,00%</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>0,00%</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>0,00%</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>0,00%</td></tr>
<tr><td>5</td><td>Buffalo Sabres</td><td>0,00%</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>0,00%</td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>0,00%</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>0,00%</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>0,00%</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>0,00%</td></tr>
<tr><td>11</td><td>Dallas Stars</td><td>0,00%</td></tr>
<tr><td>12</td><td>Detroit Red Wings</td><td>0,00%</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>0,00%</td></tr>
<tr><td>14</td><td>Florida Panthers</td><td>0,00%</td></tr>
<tr><td>15</td><td>Los Angeles Kings</td><td>0,00%</td></tr>
<tr><td>16</td><td>Minnesota Wild</td><td>0,00%</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00%</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>0,00%</td></tr>
<tr><td>19</td><td>New Jersey Devils</td><td>0,00%</td></tr>
<tr><td>20</td><td>New York Islanders</td><td>0,00%</td></tr>
<tr><td>21</td><td>New York Rangers</td><td>0,00%</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>0,00%</td></tr>
<tr><td>23</td><td>Philadelphia Flyers</td><td>0,00%</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>0,00%</td></tr>
<tr><td>25</td><td>Quebec Nordiques</td><td>0,00%</td></tr>
<tr><td>26</td><td>San Jose Sharks</td><td>0,00%</td></tr>
<tr><td>27</td><td>Seattle Kraken</td><td>0,00%</td></tr>
<tr><td>28</td><td>St. Louis Blues</td><td>0,00%</td></tr>
<tr><td>29</td><td>Tampa Bay Lightning</td><td>0,00%</td></tr>
<tr><td>30</td><td>Toronto Maple Leafs</td><td>0,00%</td></tr>
<tr><td>31</td><td>Vancouver Canucks</td><td>0,00%</td></tr>
<tr><td>32</td><td>Vegas Golden Knights</td><td>0,00%</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>0,00%</td></tr>
<tr><td>2</td><td>Washington Capitals</td><td>0,00%</td></tr>
<tr><td>3</td><td>Vegas Golden Knights</td><td>0,00%</td></tr>
<tr><td>4</td><td>Vancouver Canucks</td><td>0,00%</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>0,00%</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>0,00%</td></tr>
<tr><td>7</td><td>St. Louis Blues</td><td>0,00%</td></tr>
<tr><td>8</td><td>Seattle Kraken</td><td>0,00%</td></tr>
<tr><td>9</td><td>San Jose Sharks</td><td>0,00%</td></tr>
<tr><td>10</td><td>Quebec Nordiques</td><td>0,00%</td></tr>
<tr><td>11</td><td>Pittsburgh Penguins</td><td>0,00%</td></tr>
<tr><td>12</td><td>Philadelphia Flyers</td><td>0,00%</td></tr>
<tr><td>13</td><td>Ottawa Senators</td><td>0,00%</td></tr>
<tr><td>14</td><td>New York Rangers</td><td>0,00%</td></tr>
<tr><td>15</td><td>New York Islanders</td><td>0,00%</td></tr>
<tr><td>16</td><td>New Jersey Devils</td><td>0,00%</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00%</td></tr>
<tr><td>18</td><td>Montreal Canadiens</td><td>0,00%</td></tr>
<tr><td>19</td><td>Minnesota Wild</td><td>0,00%</td></tr>
<tr><td>20</td><td>Los Angeles Kings</td><td>0,00%</td></tr>
<tr><td>21</td><td>Florida Panthers</td><td>0,00%</td></tr>
<tr><td>22</td><td>Edmonton Oilers</td><td>0,00%</td></tr>
<tr><td>23</td><td>Detroit Red Wings</td><td>0,00%</td></tr>
<tr><td>24</td><td>Dallas Stars</td><td>0,00%</td></tr>
<tr><td>25</td><td>Columbus Blue Jackets</td><td>0,00%</td></tr>
<tr><td>26</td><td>Colorado Avalanche</td><td>0,00%</td></tr>
<tr><td>27</td><td>Chicago Blackhawks</td><td>0,00%</td></tr>
<tr><td>28</td><td>Carolina Hurricanes</td><td>0,00%</td></tr>
<tr><td>29</td><td>Calgary Flames</td><td>0,00%</td></tr>
<tr><td>30</td><td>Buffalo Sabres</td><td>0,00%</td></tr>
<tr><td>31</td><td>Boston Bruins</td><td>0,00%</td></tr>
<tr><td>32</td><td>Arizona Coyotes</td><td>0,00%</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>0,00</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>0,00</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>0,00</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>0,00</td></tr>
<tr><td>5</td><td>Buffalo Sabres</td><td>0,00</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>0,00</td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>0,00</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>0,00</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>0,00</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>0,00</td></tr>
<tr><td>11</td><td>Dallas Stars</td><td>0,00</td></tr>
<tr><td>12</td><td>Detroit Red Wings</td><td>0,00</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>0,00</td></tr>
<tr><td>14</td><td>Florida Panthers</td><td>0,00</td></tr>
<tr><td>15</td><td>Los Angeles Kings</td><td>0,00</td></tr>
<tr><td>16</td><td>Minnesota Wild</td><td>0,00</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>0,00</td></tr>
<tr><td>19</td><td>New Jersey Devils</td><td>0,00</td></tr>
<tr><td>20</td><td>New York Islanders</td><td>0,00</td></tr>
<tr><td>21</td><td>New York Rangers</td><td>0,00</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>0,00</td></tr>
<tr><td>23</td><td>Philadelphia Flyers</td><td>0,00</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>0,00</td></tr>
<tr><td>25</td><td>Quebec Nordiques</td><td>0,00</td></tr>
<tr><td>26</td><td>San Jose Sharks</td><td>0,00</td></tr>
<tr><td>27</td><td>Seattle Kraken</td><td>0,00</td></tr>
<tr><td>28</td><td>St. Louis Blues</td><td>0,00</td></tr>
<tr><td>29</td><td>Tampa Bay Lightning</td><td>0,00</td></tr>
<tr><td>30</td><td>Toronto Maple Leafs</td><td>0,00</td></tr>
<tr><td>31</td><td>Vancouver Canucks</td><td>0,00</td></tr>
<tr><td>32</td><td>Vegas Golden Knights</td><td>0,00</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Anaheim Ducks</td><td>0,00</td></tr>
<tr><td>2</td><td>Vegas Golden Knights</td><td>0,00</td></tr>
<tr><td>3</td><td>Vancouver Canucks</td><td>0,00</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>0,00</td></tr>
<tr><td>5</td><td>Tampa Bay Lightning</td><td>0,00</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>0,00</td></tr>
<tr><td>7</td><td>Seattle Kraken</td><td>0,00</td></tr>
<tr><td>8</td><td>San Jose Sharks</td><td>0,00</td></tr>
<tr><td>9</td><td>Quebec Nordiques</td><td>0,00</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>0,00</td></tr>
<tr><td>11</td><td>Philadelphia Flyers</td><td>0,00</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>0,00</td></tr>
<tr><td>13</td><td>New York Rangers</td><td>0,00</td></tr>
<tr><td>14</td><td>New York Islanders</td><td>0,00</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>0,00</td></tr>
<tr><td>16</td><td>Washington Capitals</td><td>0,00</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00</td></tr>
<tr><td>18</td><td>Minnesota Wild</td><td>0,00</td></tr>
<tr><td>19</td><td>Los Angeles Kings</td><td>0,00</td></tr>
<tr><td>20</td><td>Florida Panthers</td><td>0,00</td></tr>
<tr><td>21</td><td>Edmonton Oilers</td><td>0,00</td></tr>
<tr><td>22</td><td>Detroit Red Wings</td><td>0,00</td></tr>
<tr><td>23</td><td>Dallas Stars</td><td>0,00</td></tr>
<tr><td>24</td><td>Columbus Blue Jackets</td><td>0,00</td></tr>
<tr><td>25</td><td>Colorado Avalanche</td><td>0,00</td></tr>
<tr><td>26</td><td>Chicago Blackhawks</td><td>0,00</td></tr>
<tr><td>27</td><td>Carolina Hurricanes</td><td>0,00</td></tr>
<tr><td>28</td><td>Calgary Flames</td><td>0,00</td></tr>
<tr><td>29</td><td>Buffalo Sabres</td><td>0,00</td></tr>
<tr><td>30</td><td>Boston Bruins</td><td>0,00</td></tr>
<tr><td>31</td><td>Arizona Coyotes</td><td>0,00</td></tr>
<tr><td>32</td><td>Montreal Canadiens</td><td>0,00</td></tr>
<tr><td>33</td><td>Winnipeg Jets</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>0,00%</td></tr>
<tr><td>2</td><td>Washington Capitals</td><td>0,00%</td></tr>
<tr><td>3</td><td>Vegas Golden Knights</td><td>0,00%</td></tr>
<tr><td>4</td><td>Vancouver Canucks</td><td>0,00%</td></tr>
<tr><td>5</td><td>Toronto Maple Leafs</td><td>0,00%</td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>0,00%</td></tr>
<tr><td>7</td><td>St. Louis Blues</td><td>0,00%</td></tr>
<tr><td>8</td><td>Seattle Kraken</td><td>0,00%</td></tr>
<tr><td>9</td><td>San Jose Sharks</td><td>0,00%</td></tr>
<tr><td>10</td><td>Quebec Nordiques</td><td>0,00%</td></tr>
<tr><td>11</td><td>Pittsburgh Penguins</td><td>0,00%</td></tr>
<tr><td>12</td><td>Philadelphia Flyers</td><td>0,00%</td></tr>
<tr><td>13</td><td>Ottawa Senators</td><td>0,00%</td></tr>
<tr><td>14</td><td>New York Rangers</td><td>0,00%</td></tr>
<tr><td>15</td><td>New York Islanders</td><td>0,00%</td></tr>
<tr><td>16</td><td>New Jersey Devils</td><td>0,00%</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00%</td></tr>
<tr><td>18</td><td>Montreal Canadiens</td><td>0,00%</td></tr>
<tr><td>19</td><td>Minnesota Wild</td><td>0,00%</td></tr>
<tr><td>20</td><td>Los Angeles Kings</td><td>0,00%</td></tr>
<tr><td>21</td><td>Florida Panthers</td><td>0,00%</td></tr>
<tr><td>22</td><td>Edmonton Oilers</td><td>0,00%</td></tr>
<tr><td>23</td><td>Detroit Red Wings</td><td>0,00%</td></tr>
<tr><td>24</td><td>Dallas Stars</td><td>0,00%</td></tr>
<tr><td>25</td><td>Columbus Blue Jackets</td><td>0,00%</td></tr>
<tr><td>26</td><td>Colorado Avalanche</td><td>0,00%</td></tr>
<tr><td>27</td><td>Chicago Blackhawks</td><td>0,00%</td></tr>
<tr><td>28</td><td>Carolina Hurricanes</td><td>0,00%</td></tr>
<tr><td>29</td><td>Calgary Flames</td><td>0,00%</td></tr>
<tr><td>30</td><td>Buffalo Sabres</td><td>0,00%</td></tr>
<tr><td>31</td><td>Boston Bruins</td><td>0,00%</td></tr>
<tr><td>32</td><td>Arizona Coyotes</td><td>0,00%</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Anaheim Ducks</td><td>0,00</td></tr>
<tr><td>2</td><td>Vegas Golden Knights</td><td>0,00</td></tr>
<tr><td>3</td><td>Vancouver Canucks</td><td>0,00</td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>0,00</td></tr>
<tr><td>5</td><td>Tampa Bay Lightning</td><td>0,00</td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>0,00</td></tr>
<tr><td>7</td><td>Seattle Kraken</td><td>0,00</td></tr>
<tr><td>8</td><td>San Jose Sharks</td><td>0,00</td></tr>
<tr><td>9</td><td>Quebec Nordiques</td><td>0,00</td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>0,00</td></tr>
<tr><td>11</td><td>Philadelphia Flyers</td><td>0,00</td></tr>
<tr><td>12</td><td>Ottawa Senators</td><td>0,00</td></tr>
<tr><td>13</td><td>New York Rangers</td><td>0,00</td></tr>
<tr><td>14</td><td>New York Islanders</td><td>0,00</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>0,00</td></tr>
<tr><td>16</td><td>Washington Capitals</td><td>0,00</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00</td></tr>
<tr><td>18</td><td>Minnesota Wild</td><td>0,00</td></tr>
<tr><td>19</td><td>Los Angeles Kings</td><td>0,00</td></tr>
<tr><td>20</td><td>Florida Panthers</td><td>0,00</td></tr>
<tr><td>21</td><td>Edmonton Oilers</td><td>0,00</td></tr>
<tr><td>22</td><td>Detroit Red Wings</td><td>0,00</td></tr>
<tr><td>23</td><td>Dallas Stars</td><td>0,00</td></tr>
<tr><td>24</td><td>Columbus Blue Jackets</td><td>0,00</td></tr>
<tr><td>25</td><td>Colorado Avalanche</td><td>0,00</td></tr>
<tr><td>26</td><td>Chicago Blackhawks</td><td>0,00</td></tr>
<tr><td>27</td><td>Carolina Hurricanes</td><td>0,00</td></tr>
<tr><td>28</td><td>Calgary Flames</td><td>0,00</td></tr>
<tr><td>29</td><td>Buffalo Sabres</td><td>0,00</td></tr>
<tr><td>30</td><td>Boston Bruins</td><td>0,00</td></tr>
<tr><td>31</td><td>Arizona Coyotes</td><td>0,00</td></tr>
<tr><td>32</td><td>Montreal Canadiens</td><td>0,00</td></tr>
<tr><td>33</td><td>Winnipeg Jets</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>0,00</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>0,00</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>0,00</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>0,00</td></tr>
<tr><td>5</td><td>Buffalo Sabres</td><td>0,00</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>0,00</td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>0,00</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>0,00</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>0,00</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>0,00</td></tr>
<tr><td>11</td><td>Dallas Stars</td><td>0,00</td></tr>
<tr><td>12</td><td>Detroit Red Wings</td><td>0,00</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>0,00</td></tr>
<tr><td>14</td><td>Florida Panthers</td><td>0,00</td></tr>
<tr><td>15</td><td>Los Angeles Kings</td><td>0,00</td></tr>
<tr><td>16</td><td>Minnesota Wild</td><td>0,00</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>0,00</td></tr>
<tr><td>19</td><td>New Jersey Devils</td><td>0,00</td></tr>
<tr><td>20</td><td>New York Islanders</td><td>0,00</td></tr>
<tr><td>21</td><td>New York Rangers</td><td>0,00</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>0,00</td></tr>
<tr><td>23</td><td>Philadelphia Flyers</td><td>0,00</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>0,00</td></tr>
<tr><td>25</td><td>Quebec Nordiques</td><td>0,00</td></tr>
<tr><td>26</td><td>San Jose Sharks</td><td>0,00</td></tr>
<tr><td>27</td><td>Seattle Kraken</td><td>0,00</td></tr>
<tr><td>28</td><td>St. Louis Blues</td><td>0,00</td></tr>
<tr><td>29</td><td>Tampa Bay Lightning</td><td>0,00</td></tr>
<tr><td>30</td><td>Toronto Maple Leafs</td><td>0,00</td></tr>
<tr><td>31</td><td>Vancouver Canucks</td><td>0,00</td></tr>
<tr><td>32</td><td>Vegas Golden Knights</td><td>0,00</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Winnipeg Jets</td><td>0,00%</td></tr>
<tr><td>2</td><td>Montreal Canadiens</td><td>0,00%</td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>0,00%</td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>0,00%</td></tr>
<tr><td>5</td><td>Buffalo Sabres</td><td>0,00%</td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>0,00%</td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>0,00%</td></tr>
<tr><td>8</td><td>Chicago Blackhawks</td><td>0,00%</td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>0,00%</td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>0,00%</td></tr>
<tr><td>11</td><td>Dallas Stars</td><td>0,00%</td></tr>
<tr><td>12</td><td>Detroit Red Wings</td><td>0,00%</td></tr>
<tr><td>13</td><td>Edmonton Oilers</td><td>0,00%</td></tr>
<tr><td>14</td><td>Florida Panthers</td><td>0,00%</td></tr>
<tr><td>15</td><td>Los Angeles Kings</td><td>0,00%</td></tr>
<tr><td>16</td><td>Minnesota Wild</td><td>0,00%</td></tr>
<tr><td>17</td><td>Nashville Predators</td><td>0,00%</td></tr>
<tr><td>18</td><td>Washington Capitals</td><td>0,00%</td></tr>
<tr><td>19</td><td>New Jersey Devils</td><td>0,00%</td></tr>
<tr><td>20</td><td>New York Islanders</td><td>0,00%</td></tr>
<tr><td>21</td><td>New York Rangers</td><td>0,00%</td></tr>
<tr><td>22</td><td>Ottawa Senators</td><td>0,00%</td></tr>
<tr><td>23</td><td>Philadelphia Flyers</td><td>0,00%</td></tr>
<tr><td>24</td><td>Pittsburgh Penguins</td><td>0,00%</td></tr>
<tr><td>25</td><td>Quebec Nordiques</td><td>0,00%</td></tr>
<tr><td>26</td><td>San Jose Sharks</td><td>0,00%</td></tr>
<tr><td>27</td><td>Seattle Kraken</td><td>0,00%</td></tr>
<tr><td>28</td><td>St. Louis Blues</td><td>0,00%</td></tr>
<tr><td>29</td><td>Tampa Bay Lightning</td><td>0,00%</td></tr>
<tr><td>30</td><td>Toronto Maple Leafs</td><td>0,00%</td></tr>
<tr><td>31</td><td>Vancouver Canucks</td><td>0,00%</td></tr>
<tr><td>32</td><td>Vegas Golden Knights</td><td>0,00%</td></tr>
<tr><td>33</td><td>Anaheim Ducks</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
