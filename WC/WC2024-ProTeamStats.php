﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Pro Team Stats</title>
<script src="WC2024.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.9.9 - WC2024-STHS.bin - WC2024-STHSCareerStat.bin"/>
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
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>ALLEMAGNE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>CANADA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>ÉTATS-UNIS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>FINLANDE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>LETTONIE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>QUÉBEC</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>RUSSIE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>SLOVAQUIE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>SUÈDE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>SUISSE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>TCHÉQUIE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>WORLD</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>ALLEMAGNE</td><td>GER</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>CANADA</td><td>CAN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>ÉTATS-UNIS</td><td>USA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>FINLANDE</td><td>FIN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>LETTONIE</td><td>LET</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>QUÉBEC</td><td>QUÉ</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>RUSSIE</td><td>RUS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>SLOVAQUIE</td><td>SLO</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>SUÈDE</td><td>SWE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>SUISSE</td><td>SUI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>TCHÉQUIE</td><td>TCH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>WORLD</td><td>WOR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>WORLD</td><td>0,00</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>0,00</td></tr>
<tr><td>3</td><td>SUISSE</td><td>0,00</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>0,00</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>0,00</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>0,00</td></tr>
<tr><td>7</td><td>QUÉBEC</td><td>0,00</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>0,00</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>0,00</td></tr>
<tr><td>10</td><td>ÉTATS-UNIS</td><td>0,00</td></tr>
<tr><td>11</td><td>CANADA</td><td>0,00</td></tr>
<tr><td>12</td><td>ALLEMAGNE</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>ALLEMAGNE</td><td>0,00</td></tr>
<tr><td>2</td><td>CANADA</td><td>0,00</td></tr>
<tr><td>3</td><td>ÉTATS-UNIS</td><td>0,00</td></tr>
<tr><td>4</td><td>FINLANDE</td><td>0,00</td></tr>
<tr><td>5</td><td>LETTONIE</td><td>0,00</td></tr>
<tr><td>6</td><td>QUÉBEC</td><td>0,00</td></tr>
<tr><td>7</td><td>RUSSIE</td><td>0,00</td></tr>
<tr><td>8</td><td>SLOVAQUIE</td><td>0,00</td></tr>
<tr><td>9</td><td>SUÈDE</td><td>0,00</td></tr>
<tr><td>10</td><td>SUISSE</td><td>0,00</td></tr>
<tr><td>11</td><td>TCHÉQUIE</td><td>0,00</td></tr>
<tr><td>12</td><td>WORLD</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>WORLD</td><td>0,00%</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>0,00%</td></tr>
<tr><td>3</td><td>SUISSE</td><td>0,00%</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>0,00%</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>0,00%</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>0,00%</td></tr>
<tr><td>7</td><td>QUÉBEC</td><td>0,00%</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>0,00%</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>0,00%</td></tr>
<tr><td>10</td><td>ÉTATS-UNIS</td><td>0,00%</td></tr>
<tr><td>11</td><td>CANADA</td><td>0,00%</td></tr>
<tr><td>12</td><td>ALLEMAGNE</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>WORLD</td><td>0,00%</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>0,00%</td></tr>
<tr><td>3</td><td>SUISSE</td><td>0,00%</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>0,00%</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>0,00%</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>0,00%</td></tr>
<tr><td>7</td><td>QUÉBEC</td><td>0,00%</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>0,00%</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>0,00%</td></tr>
<tr><td>10</td><td>ÉTATS-UNIS</td><td>0,00%</td></tr>
<tr><td>11</td><td>CANADA</td><td>0,00%</td></tr>
<tr><td>12</td><td>ALLEMAGNE</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>WORLD</td><td>0,00%</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>0,00%</td></tr>
<tr><td>3</td><td>SUISSE</td><td>0,00%</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>0,00%</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>0,00%</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>0,00%</td></tr>
<tr><td>7</td><td>QUÉBEC</td><td>0,00%</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>0,00%</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>0,00%</td></tr>
<tr><td>10</td><td>ÉTATS-UNIS</td><td>0,00%</td></tr>
<tr><td>11</td><td>CANADA</td><td>0,00%</td></tr>
<tr><td>12</td><td>ALLEMAGNE</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>WORLD</td><td>0,00%</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>0,00%</td></tr>
<tr><td>3</td><td>SUISSE</td><td>0,00%</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>0,00%</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>0,00%</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>0,00%</td></tr>
<tr><td>7</td><td>QUÉBEC</td><td>0,00%</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>0,00%</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>0,00%</td></tr>
<tr><td>10</td><td>ÉTATS-UNIS</td><td>0,00%</td></tr>
<tr><td>11</td><td>CANADA</td><td>0,00%</td></tr>
<tr><td>12</td><td>ALLEMAGNE</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>WORLD</td><td>0,00</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>0,00</td></tr>
<tr><td>3</td><td>SUISSE</td><td>0,00</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>0,00</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>0,00</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>0,00</td></tr>
<tr><td>7</td><td>QUÉBEC</td><td>0,00</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>0,00</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>0,00</td></tr>
<tr><td>10</td><td>ÉTATS-UNIS</td><td>0,00</td></tr>
<tr><td>11</td><td>CANADA</td><td>0,00</td></tr>
<tr><td>12</td><td>ALLEMAGNE</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>ALLEMAGNE</td><td>0,00</td></tr>
<tr><td>2</td><td>CANADA</td><td>0,00</td></tr>
<tr><td>3</td><td>ÉTATS-UNIS</td><td>0,00</td></tr>
<tr><td>4</td><td>FINLANDE</td><td>0,00</td></tr>
<tr><td>5</td><td>LETTONIE</td><td>0,00</td></tr>
<tr><td>6</td><td>QUÉBEC</td><td>0,00</td></tr>
<tr><td>7</td><td>RUSSIE</td><td>0,00</td></tr>
<tr><td>8</td><td>SLOVAQUIE</td><td>0,00</td></tr>
<tr><td>9</td><td>SUÈDE</td><td>0,00</td></tr>
<tr><td>10</td><td>SUISSE</td><td>0,00</td></tr>
<tr><td>11</td><td>TCHÉQUIE</td><td>0,00</td></tr>
<tr><td>12</td><td>WORLD</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>WORLD</td><td>0,00%</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>0,00%</td></tr>
<tr><td>3</td><td>SUISSE</td><td>0,00%</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>0,00%</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>0,00%</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>0,00%</td></tr>
<tr><td>7</td><td>QUÉBEC</td><td>0,00%</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>0,00%</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>0,00%</td></tr>
<tr><td>10</td><td>ÉTATS-UNIS</td><td>0,00%</td></tr>
<tr><td>11</td><td>CANADA</td><td>0,00%</td></tr>
<tr><td>12</td><td>ALLEMAGNE</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>ALLEMAGNE</td><td>0,00</td></tr>
<tr><td>2</td><td>CANADA</td><td>0,00</td></tr>
<tr><td>3</td><td>ÉTATS-UNIS</td><td>0,00</td></tr>
<tr><td>4</td><td>FINLANDE</td><td>0,00</td></tr>
<tr><td>5</td><td>LETTONIE</td><td>0,00</td></tr>
<tr><td>6</td><td>QUÉBEC</td><td>0,00</td></tr>
<tr><td>7</td><td>RUSSIE</td><td>0,00</td></tr>
<tr><td>8</td><td>SLOVAQUIE</td><td>0,00</td></tr>
<tr><td>9</td><td>SUÈDE</td><td>0,00</td></tr>
<tr><td>10</td><td>SUISSE</td><td>0,00</td></tr>
<tr><td>11</td><td>TCHÉQUIE</td><td>0,00</td></tr>
<tr><td>12</td><td>WORLD</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>WORLD</td><td>0,00</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>0,00</td></tr>
<tr><td>3</td><td>SUISSE</td><td>0,00</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>0,00</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>0,00</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>0,00</td></tr>
<tr><td>7</td><td>QUÉBEC</td><td>0,00</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>0,00</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>0,00</td></tr>
<tr><td>10</td><td>ÉTATS-UNIS</td><td>0,00</td></tr>
<tr><td>11</td><td>CANADA</td><td>0,00</td></tr>
<tr><td>12</td><td>ALLEMAGNE</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>WORLD</td><td>0,00%</td></tr>
<tr><td>2</td><td>TCHÉQUIE</td><td>0,00%</td></tr>
<tr><td>3</td><td>SUISSE</td><td>0,00%</td></tr>
<tr><td>4</td><td>SUÈDE</td><td>0,00%</td></tr>
<tr><td>5</td><td>SLOVAQUIE</td><td>0,00%</td></tr>
<tr><td>6</td><td>RUSSIE</td><td>0,00%</td></tr>
<tr><td>7</td><td>QUÉBEC</td><td>0,00%</td></tr>
<tr><td>8</td><td>LETTONIE</td><td>0,00%</td></tr>
<tr><td>9</td><td>FINLANDE</td><td>0,00%</td></tr>
<tr><td>10</td><td>ÉTATS-UNIS</td><td>0,00%</td></tr>
<tr><td>11</td><td>CANADA</td><td>0,00%</td></tr>
<tr><td>12</td><td>ALLEMAGNE</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
