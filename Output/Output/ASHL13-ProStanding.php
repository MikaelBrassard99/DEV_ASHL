﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Standing</title>
<script src="ASHL13.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - ASHL13-STHS.db - ASHL13-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1060px) {
.STHSWarning {display:block;}
table.basictablesorter thead th:nth-last-child(3){display:none;}
table.basictablesorter tbody td:nth-last-child(3){display:none;}
table.basictablesorter thead th:nth-last-child(4){display:none;}
table.basictablesorter tbody td:nth-last-child(4){display:none;}
table.basictablesorter thead th:nth-last-child(5){display:none;}
table.basictablesorter tbody td:nth-last-child(5){display:none;}
}@media screen and (max-width: 890px) {
table.basictablesorter thead th:nth-last-child(6){display:none;}
table.basictablesorter tbody td:nth-last-child(6){display:none;}
table.basictablesorter thead th:nth-last-child(7){display:none;}
table.basictablesorter tbody td:nth-last-child(7){display:none;}
}
table.basictablesorter tbody td.staticTD {font-size:9pt;border-right:hidden; border-left:hidden;}
</style>
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter({ widgets: ['staticRow'] })});</script>
<div class="tabsmain standard"><ul class="tabmain-links">
<li class="activemain"><a href="#tabmain2">Conference</a></li>
<li><a href="#tabmain3">Division</a></li>
<li><a href="#tabmain4">Overall</a></li>
</ul><div class="tabmain-content">
<div class="tabmain active" id="tabmain2">
<h2 class="STHSStanding_H2Header">Eastern Conference</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href=ProTeam.php?Team=31>Quebec Nordiques</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>2</td><td><a href=ProTeam.php?Team=20>Columbus Blue Jackets</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>3</td><td><a href=ProTeam.php?Team=14>Washington Capitals</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>4</td><td><a href=ProTeam.php?Team=13>Tampa Bay Lightning</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>5</td><td><a href=ProTeam.php?Team=12>Florida Panthers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>6</td><td><a href=ProTeam.php?Team=11>Carolina Hurricanes</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>7</td><td><a href=ProTeam.php?Team=10>Boston Bruins</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>8</td><td><a href=ProTeam.php?Team=9>Ottawa Senators</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr class="static"><td colspan="20"><hr /></td></tr>
<tr><td>9</td><td><a href=ProTeam.php?Team=8>Toronto Maple Leafs</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>10</td><td><a href=ProTeam.php?Team=7>Montreal Canadiens</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>11</td><td><a href=ProTeam.php?Team=6>Buffalo Sabres</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>12</td><td><a href=ProTeam.php?Team=5>Pittsburgh Penguins</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>13</td><td><a href=ProTeam.php?Team=4>Philadelphia Flyers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>14</td><td><a href=ProTeam.php?Team=3>New York Rangers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>15</td><td><a href=ProTeam.php?Team=2>New York Islanders</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>16</td><td><a href=ProTeam.php?Team=1>New Jersey Devils</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
</tbody></table><br />
<h2 class="STHSStanding_H2Header">Western Conference</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href=ProTeam.php?Team=33>Vegas Golden Knights</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>2</td><td><a href=ProTeam.php?Team=29>Dallas Stars</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>3</td><td><a href=ProTeam.php?Team=32>Seattle Kraken</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>4</td><td><a href=ProTeam.php?Team=30>Arizona Coyotes</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>5</td><td><a href=ProTeam.php?Team=28>San Jose Sharks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>6</td><td><a href=ProTeam.php?Team=27>Los Angeles Kings</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>7</td><td><a href=ProTeam.php?Team=26>Anaheim Ducks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>8</td><td><a href=ProTeam.php?Team=25>Vancouver Canucks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr class="static"><td colspan="20"><hr /></td></tr>
<tr><td>9</td><td><a href=ProTeam.php?Team=24>Minnesota Wild</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>10</td><td><a href=ProTeam.php?Team=23>Edmonton Oilers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>11</td><td><a href=ProTeam.php?Team=22>Colorado Avalanche</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>12</td><td><a href=ProTeam.php?Team=21>Calgary Flames</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>13</td><td><a href=ProTeam.php?Team=19>St. Louis Blues</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>14</td><td><a href=ProTeam.php?Team=18>Nashville Predators</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>15</td><td><a href=ProTeam.php?Team=17>Detroit Red Wings</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>16</td><td><a href=ProTeam.php?Team=16>Chicago Blackhawks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>17</td><td><a href=ProTeam.php?Team=15>Winnipeg Jets</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
</tbody></table><br />
*Seeding 1 division leaders<br />
</div><div class="tabmain" id="tabmain3">
<h2 class="STHSStanding_H2Header">Métropolitaine</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href=ProTeam.php?Team=20>Columbus Blue Jackets</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>2</td><td><a href=ProTeam.php?Team=14>Washington Capitals</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>3</td><td><a href=ProTeam.php?Team=11>Carolina Hurricanes</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>4</td><td><a href=ProTeam.php?Team=5>Pittsburgh Penguins</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>5</td><td><a href=ProTeam.php?Team=4>Philadelphia Flyers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>6</td><td><a href=ProTeam.php?Team=3>New York Rangers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>7</td><td><a href=ProTeam.php?Team=2>New York Islanders</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>8</td><td><a href=ProTeam.php?Team=1>New Jersey Devils</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Atlantique</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href=ProTeam.php?Team=31>Quebec Nordiques</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>2</td><td><a href=ProTeam.php?Team=13>Tampa Bay Lightning</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>3</td><td><a href=ProTeam.php?Team=12>Florida Panthers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>4</td><td><a href=ProTeam.php?Team=10>Boston Bruins</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>5</td><td><a href=ProTeam.php?Team=9>Ottawa Senators</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>6</td><td><a href=ProTeam.php?Team=8>Toronto Maple Leafs</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>7</td><td><a href=ProTeam.php?Team=7>Montreal Canadiens</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>8</td><td><a href=ProTeam.php?Team=6>Buffalo Sabres</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Centrale</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href=ProTeam.php?Team=29>Dallas Stars</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>2</td><td><a href=ProTeam.php?Team=24>Minnesota Wild</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>3</td><td><a href=ProTeam.php?Team=22>Colorado Avalanche</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>4</td><td><a href=ProTeam.php?Team=19>St. Louis Blues</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>5</td><td><a href=ProTeam.php?Team=18>Nashville Predators</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>6</td><td><a href=ProTeam.php?Team=17>Detroit Red Wings</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>7</td><td><a href=ProTeam.php?Team=16>Chicago Blackhawks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>8</td><td><a href=ProTeam.php?Team=15>Winnipeg Jets</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Pacifique</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href=ProTeam.php?Team=33>Vegas Golden Knights</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>2</td><td><a href=ProTeam.php?Team=32>Seattle Kraken</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>3</td><td><a href=ProTeam.php?Team=30>Arizona Coyotes</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>4</td><td><a href=ProTeam.php?Team=28>San Jose Sharks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>5</td><td><a href=ProTeam.php?Team=27>Los Angeles Kings</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>6</td><td><a href=ProTeam.php?Team=26>Anaheim Ducks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>7</td><td><a href=ProTeam.php?Team=25>Vancouver Canucks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>8</td><td><a href=ProTeam.php?Team=23>Edmonton Oilers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>9</td><td><a href=ProTeam.php?Team=21>Calgary Flames</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
</tbody></table>
</div><div class="tabmain" id="tabmain4">
<h2 class="STHSStanding_H2Header">Overall</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">RW</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href=ProTeam.php?Team=33>Vegas Golden Knights</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>2</td><td><a href=ProTeam.php?Team=32>Seattle Kraken</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>3</td><td><a href=ProTeam.php?Team=31>Quebec Nordiques</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>4</td><td><a href=ProTeam.php?Team=30>Arizona Coyotes</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>5</td><td><a href=ProTeam.php?Team=29>Dallas Stars</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>6</td><td><a href=ProTeam.php?Team=28>San Jose Sharks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>7</td><td><a href=ProTeam.php?Team=27>Los Angeles Kings</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>8</td><td><a href=ProTeam.php?Team=26>Anaheim Ducks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>9</td><td><a href=ProTeam.php?Team=25>Vancouver Canucks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>10</td><td><a href=ProTeam.php?Team=24>Minnesota Wild</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>11</td><td><a href=ProTeam.php?Team=23>Edmonton Oilers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>12</td><td><a href=ProTeam.php?Team=22>Colorado Avalanche</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>13</td><td><a href=ProTeam.php?Team=21>Calgary Flames</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>14</td><td><a href=ProTeam.php?Team=20>Columbus Blue Jackets</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>15</td><td><a href=ProTeam.php?Team=19>St. Louis Blues</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>16</td><td><a href=ProTeam.php?Team=18>Nashville Predators</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>17</td><td><a href=ProTeam.php?Team=17>Detroit Red Wings</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>18</td><td><a href=ProTeam.php?Team=16>Chicago Blackhawks</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>19</td><td><a href=ProTeam.php?Team=15>Winnipeg Jets</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>20</td><td><a href=ProTeam.php?Team=14>Washington Capitals</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>21</td><td><a href=ProTeam.php?Team=13>Tampa Bay Lightning</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>22</td><td><a href=ProTeam.php?Team=12>Florida Panthers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>23</td><td><a href=ProTeam.php?Team=11>Carolina Hurricanes</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>24</td><td><a href=ProTeam.php?Team=10>Boston Bruins</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>25</td><td><a href=ProTeam.php?Team=9>Ottawa Senators</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>26</td><td><a href=ProTeam.php?Team=8>Toronto Maple Leafs</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>27</td><td><a href=ProTeam.php?Team=7>Montreal Canadiens</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>28</td><td><a href=ProTeam.php?Team=6>Buffalo Sabres</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>29</td><td><a href=ProTeam.php?Team=5>Pittsburgh Penguins</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>30</td><td><a href=ProTeam.php?Team=4>Philadelphia Flyers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>31</td><td><a href=ProTeam.php?Team=3>New York Rangers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>32</td><td><a href=ProTeam.php?Team=2>New York Islanders</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
<tr><td>33</td><td><a href=ProTeam.php?Team=1>New Jersey Devils</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td><td></td></tr>
</tbody></table></div></div></div>
<h2 class="STHSStanding_PointSystem">Point System</h2>
<b>Win :</b> 2 -- <b>Loss :</b> 0 -- <b>OT Win :</b> 2 -- <b>OT Loss :</b> 1 -- <b>SO Win :</b> 2 -- <b>SO Loss :</b> 1<br /><br />P.S. The simulator only uses points to give the title. If two team have the same amount of point, none of them will be award the title until your simulate the last game/day of your season.
<?php include "Footer.php";?>