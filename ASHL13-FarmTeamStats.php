<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Stats</title>
<script src="ASHL13.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - ASHL13-STHS.db - ASHL13-STHSCareerStat.db"/>
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
</head><body>
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
<tr><td>Laval Chiefs</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>The Nuuk Vikings</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Providence Bruins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rochester Americans</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Joliette Sportif</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Charlotte Checkers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Blainville-Boisbriand Armada</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Lake Erie Monsters</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Springfield Falcons</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Nunavik Natturaliit</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Grand Rapids Griffins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Oklahoma City Barons</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>San Antonio Rampage</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Gatineau Olympiques</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Houston Aeros</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Trois-Rivières Lions</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Milwaukee Admirals</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Albany Devils</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Connecticut Whale</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Binghamton Senators</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Adirondack Phantoms</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Mercer Island Hafgufa</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Verdun Junior</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Roberval Dwarfs</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Wolves</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Henderson Silver Knights</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chisinau Pelicans</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Manitoba Moose</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Laval Chiefs</td><td>LAV</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>The Nuuk Vikings</td><td>NUU</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Providence Bruins</td><td>PRO</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rochester Americans</td><td>RCH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Joliette Sportif</td><td>JOL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Blainville-Boisbriand Armada</td><td>BBA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Lake Erie Monsters</td><td>LKE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Springfield Falcons</td><td>SPR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Nunavik Natturaliit</td><td>NUN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Grand Rapids Griffins</td><td>GRG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>San Antonio Rampage</td><td>SAR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Gatineau Olympiques</td><td>GAT</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Houston Aeros</td><td>HOU</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Trois-Rivières Lions</td><td>TRL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Milwaukee Admirals</td><td>MIL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Albany Devils</td><td>ALB</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>BRI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Binghamton Senators</td><td>BNG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Adirondack Phantoms</td><td>ADK</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>RNO</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Mercer Island Hafgufa</td><td>MIH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Verdun Junior</td><td>VER</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Roberval Dwarfs</td><td>ROB</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Henderson Silver Knights</td><td>PAR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chisinau Pelicans</td><td>CHP</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Manitoba Moose</td><td>MAN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00</td></tr>
<tr><td>2</td><td>Trois-Rivières Lions</td><td>0,00</td></tr>
<tr><td>3</td><td>The Nuuk Vikings</td><td>0,00</td></tr>
<tr><td>4</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>7</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>8</td><td>Blainville-Boisbriand Armada</td><td>0,00</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>10</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>11</td><td>Nunavik Natturaliit</td><td>0,00</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
<tr><td>13</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>14</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>15</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>16</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Chisinau Pelicans</td><td>0,00</td></tr>
<tr><td>19</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>20</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>21</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>22</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>23</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>24</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
<tr><td>25</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>26</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>27</td><td>Mercer Island Hafgufa</td><td>0,00</td></tr>
<tr><td>28</td><td>Verdun Junior</td><td>0,00</td></tr>
<tr><td>29</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>30</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>31</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>32</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>0,00</td></tr>
<tr><td>2</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>3</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>4</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>5</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>6</td><td>Verdun Junior</td><td>0,00</td></tr>
<tr><td>7</td><td>Mercer Island Hafgufa</td><td>0,00</td></tr>
<tr><td>8</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>9</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>10</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
<tr><td>11</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>12</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>13</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>14</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>15</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>16</td><td>Chisinau Pelicans</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>19</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>20</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>21</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>22</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
<tr><td>23</td><td>Nunavik Natturaliit</td><td>0,00</td></tr>
<tr><td>24</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>25</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>26</td><td>Blainville-Boisbriand Armada</td><td>0,00</td></tr>
<tr><td>27</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>28</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>29</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>30</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>31</td><td>The Nuuk Vikings</td><td>0,00</td></tr>
<tr><td>32</td><td>Trois-Rivières Lions</td><td>0,00</td></tr>
<tr><td>33</td><td>Manitoba Moose</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>2</td><td>Chisinau Pelicans</td><td>0,00%</td></tr>
<tr><td>3</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>5</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>6</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>7</td><td>Verdun Junior</td><td>0,00%</td></tr>
<tr><td>8</td><td>Mercer Island Hafgufa</td><td>0,00%</td></tr>
<tr><td>9</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>10</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>11</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
<tr><td>12</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>13</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>14</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>15</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>16</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Trois-Rivières Lions</td><td>0,00%</td></tr>
<tr><td>19</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>20</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>21</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>22</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>23</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>24</td><td>Nunavik Natturaliit</td><td>0,00%</td></tr>
<tr><td>25</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>26</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>27</td><td>Blainville-Boisbriand Armada</td><td>0,00%</td></tr>
<tr><td>28</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>29</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>30</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>31</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>32</td><td>The Nuuk Vikings</td><td>0,00%</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>2</td><td>Trois-Rivières Lions</td><td>0,00%</td></tr>
<tr><td>3</td><td>The Nuuk Vikings</td><td>0,00%</td></tr>
<tr><td>4</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>7</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>8</td><td>Blainville-Boisbriand Armada</td><td>0,00%</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>10</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>11</td><td>Nunavik Natturaliit</td><td>0,00%</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>13</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>14</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>15</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>16</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Chisinau Pelicans</td><td>0,00%</td></tr>
<tr><td>19</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>20</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>21</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>22</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>23</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>24</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
<tr><td>25</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>26</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>27</td><td>Mercer Island Hafgufa</td><td>0,00%</td></tr>
<tr><td>28</td><td>Verdun Junior</td><td>0,00%</td></tr>
<tr><td>29</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>30</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>31</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>32</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>2</td><td>Trois-Rivières Lions</td><td>0,00%</td></tr>
<tr><td>3</td><td>The Nuuk Vikings</td><td>0,00%</td></tr>
<tr><td>4</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>7</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>8</td><td>Blainville-Boisbriand Armada</td><td>0,00%</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>10</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>11</td><td>Nunavik Natturaliit</td><td>0,00%</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>13</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>14</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>15</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>16</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Chisinau Pelicans</td><td>0,00%</td></tr>
<tr><td>19</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>20</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>21</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>22</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>23</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>24</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
<tr><td>25</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>26</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>27</td><td>Mercer Island Hafgufa</td><td>0,00%</td></tr>
<tr><td>28</td><td>Verdun Junior</td><td>0,00%</td></tr>
<tr><td>29</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>30</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>31</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>32</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>2</td><td>Chisinau Pelicans</td><td>0,00%</td></tr>
<tr><td>3</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>5</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>6</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>7</td><td>Verdun Junior</td><td>0,00%</td></tr>
<tr><td>8</td><td>Mercer Island Hafgufa</td><td>0,00%</td></tr>
<tr><td>9</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>10</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>11</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
<tr><td>12</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>13</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>14</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>15</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>16</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Trois-Rivières Lions</td><td>0,00%</td></tr>
<tr><td>19</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>20</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>21</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>22</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>23</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>24</td><td>Nunavik Natturaliit</td><td>0,00%</td></tr>
<tr><td>25</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>26</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>27</td><td>Blainville-Boisbriand Armada</td><td>0,00%</td></tr>
<tr><td>28</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>29</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>30</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>31</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>32</td><td>The Nuuk Vikings</td><td>0,00%</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00</td></tr>
<tr><td>2</td><td>Trois-Rivières Lions</td><td>0,00</td></tr>
<tr><td>3</td><td>The Nuuk Vikings</td><td>0,00</td></tr>
<tr><td>4</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>7</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>8</td><td>Blainville-Boisbriand Armada</td><td>0,00</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>10</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>11</td><td>Nunavik Natturaliit</td><td>0,00</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
<tr><td>13</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>14</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>15</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>16</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Chisinau Pelicans</td><td>0,00</td></tr>
<tr><td>19</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>20</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>21</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>22</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>23</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>24</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
<tr><td>25</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>26</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>27</td><td>Mercer Island Hafgufa</td><td>0,00</td></tr>
<tr><td>28</td><td>Verdun Junior</td><td>0,00</td></tr>
<tr><td>29</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>30</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>31</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>32</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>0,00</td></tr>
<tr><td>2</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>3</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>4</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>5</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>6</td><td>Verdun Junior</td><td>0,00</td></tr>
<tr><td>7</td><td>Mercer Island Hafgufa</td><td>0,00</td></tr>
<tr><td>8</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>9</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>10</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
<tr><td>11</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>12</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>13</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>14</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>15</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>16</td><td>Chisinau Pelicans</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>19</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>20</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>21</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>22</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
<tr><td>23</td><td>Nunavik Natturaliit</td><td>0,00</td></tr>
<tr><td>24</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>25</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>26</td><td>Blainville-Boisbriand Armada</td><td>0,00</td></tr>
<tr><td>27</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>28</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>29</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>30</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>31</td><td>The Nuuk Vikings</td><td>0,00</td></tr>
<tr><td>32</td><td>Trois-Rivières Lions</td><td>0,00</td></tr>
<tr><td>33</td><td>Manitoba Moose</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>2</td><td>Chisinau Pelicans</td><td>0,00%</td></tr>
<tr><td>3</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>5</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>6</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>7</td><td>Verdun Junior</td><td>0,00%</td></tr>
<tr><td>8</td><td>Mercer Island Hafgufa</td><td>0,00%</td></tr>
<tr><td>9</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>10</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>11</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
<tr><td>12</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>13</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>14</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>15</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>16</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Trois-Rivières Lions</td><td>0,00%</td></tr>
<tr><td>19</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>20</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>21</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>22</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>23</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>24</td><td>Nunavik Natturaliit</td><td>0,00%</td></tr>
<tr><td>25</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>26</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>27</td><td>Blainville-Boisbriand Armada</td><td>0,00%</td></tr>
<tr><td>28</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>29</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>30</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>31</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>32</td><td>The Nuuk Vikings</td><td>0,00%</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Laval Chiefs</td><td>0,00</td></tr>
<tr><td>2</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>3</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>4</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>5</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>6</td><td>Verdun Junior</td><td>0,00</td></tr>
<tr><td>7</td><td>Mercer Island Hafgufa</td><td>0,00</td></tr>
<tr><td>8</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>9</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>10</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
<tr><td>11</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>12</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>13</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>14</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>15</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>16</td><td>Chisinau Pelicans</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>19</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>20</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>21</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>22</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
<tr><td>23</td><td>Nunavik Natturaliit</td><td>0,00</td></tr>
<tr><td>24</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>25</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>26</td><td>Blainville-Boisbriand Armada</td><td>0,00</td></tr>
<tr><td>27</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>28</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>29</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>30</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>31</td><td>The Nuuk Vikings</td><td>0,00</td></tr>
<tr><td>32</td><td>Trois-Rivières Lions</td><td>0,00</td></tr>
<tr><td>33</td><td>Manitoba Moose</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00</td></tr>
<tr><td>2</td><td>Trois-Rivières Lions</td><td>0,00</td></tr>
<tr><td>3</td><td>The Nuuk Vikings</td><td>0,00</td></tr>
<tr><td>4</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>7</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>8</td><td>Blainville-Boisbriand Armada</td><td>0,00</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>10</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>11</td><td>Nunavik Natturaliit</td><td>0,00</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
<tr><td>13</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>14</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>15</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>16</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Chisinau Pelicans</td><td>0,00</td></tr>
<tr><td>19</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>20</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>21</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>22</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>23</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>24</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
<tr><td>25</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>26</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>27</td><td>Mercer Island Hafgufa</td><td>0,00</td></tr>
<tr><td>28</td><td>Verdun Junior</td><td>0,00</td></tr>
<tr><td>29</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>30</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>31</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>32</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>2</td><td>Trois-Rivières Lions</td><td>0,00%</td></tr>
<tr><td>3</td><td>The Nuuk Vikings</td><td>0,00%</td></tr>
<tr><td>4</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>5</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>6</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>7</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>8</td><td>Blainville-Boisbriand Armada</td><td>0,00%</td></tr>
<tr><td>9</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>10</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>11</td><td>Nunavik Natturaliit</td><td>0,00%</td></tr>
<tr><td>12</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>13</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>14</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>15</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>16</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Chisinau Pelicans</td><td>0,00%</td></tr>
<tr><td>19</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>20</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>21</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>22</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>23</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>24</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
<tr><td>25</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>26</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>27</td><td>Mercer Island Hafgufa</td><td>0,00%</td></tr>
<tr><td>28</td><td>Verdun Junior</td><td>0,00%</td></tr>
<tr><td>29</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>30</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>31</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>32</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
