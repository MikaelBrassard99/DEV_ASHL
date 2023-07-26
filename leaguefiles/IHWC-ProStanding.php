<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Pro Standing</title>
<script src="IHWC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1060px) {
.STHSWarning {display:block;}
table.basictablesorter thead th:nth-last-child(2){display:none;}
table.basictablesorter tbody td:nth-last-child(2){display:none;}
table.basictablesorter thead th:nth-last-child(3){display:none;}
table.basictablesorter tbody td:nth-last-child(3){display:none;}
table.basictablesorter thead th:nth-last-child(4){display:none;}
table.basictablesorter tbody td:nth-last-child(4){display:none;}
}@media screen and (max-width: 890px) {
table.basictablesorter thead th:nth-last-child(5){display:none;}
table.basictablesorter tbody td:nth-last-child(5){display:none;}
table.basictablesorter thead th:nth-last-child(6){display:none;}
table.basictablesorter tbody td:nth-last-child(6){display:none;}
}
table.basictablesorter tbody td.staticTD {font-size:9pt;border-right:hidden; border-left:hidden;}
</style>
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
<script>$(function(){$("table").basictablesorter({ widgets: ['staticRow'] })});</script>
<div class="tabsmain standard"><ul class="tabmain-links">
<li class="activemain"><a href="#tabmain2">Conference</a></li>
<li><a href="#tabmain3">Division</a></li>
<li><a href="#tabmain4">Overall</a></li>
</ul><div class="tabmain-content">
<div class="tabmain active" id="tabmain2">
<h2 class="STHSStanding_H2Header">Conference 1</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="IHWC-ProTeamRoster.php#CANADA">CANADA</a></td><td>5</td><td>5</td><td>0</td><td>0</td><td><b>10</b></td><td>4</td><td>25</td><td>12</td><td>13</td><td>1,000</td><td>2-0-0</td><td>3-0-0</td><td>5-0-0</td><td>2-0-0</td><td>3-0-0</td><td>W3</td></tr>
<tr><td>2 - Y</td><td><a href="IHWC-ProTeamRoster.php#ALLEMAGNE">ALLEMAGNE</a></td><td>5</td><td>4</td><td>1</td><td>0</td><td><b>8</b></td><td>3</td><td>19</td><td>19</td><td>0</td><td>0,800</td><td>3-1-0</td><td>1-0-0</td><td>4-1-0</td><td>3-1-0</td><td>1-0-0</td><td>L1</td></tr>
<tr><td>3 - X</td><td><a href="IHWC-ProTeamRoster.php#SUEDE">SUEDE</a></td><td>5</td><td>2</td><td>1</td><td>2</td><td><b>6</b></td><td>2</td><td>17</td><td>16</td><td>1</td><td>0,600</td><td>1-1-1</td><td>1-0-1</td><td>2-1-2</td><td>1-1-1</td><td>1-0-1</td><td>L1</td></tr>
<tr class="static"><td colspan="18"><hr /></td></tr>
<tr><td>4 - E</td><td><a href="IHWC-ProTeamRoster.php#REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a></td><td>5</td><td>2</td><td>3</td><td>0</td><td><b>4</b></td><td>2</td><td>18</td><td>19</td><td>-1</td><td>0,400</td><td>0-2-0</td><td>2-1-0</td><td>2-3-0</td><td>0-2-0</td><td>2-1-0</td><td>W1</td></tr>
<tr><td>5 - E</td><td><a href="IHWC-ProTeamRoster.php#SLOVAQUIE">SLOVAQUIE</a></td><td>5</td><td>1</td><td>3</td><td>1</td><td><b>3</b></td><td>1</td><td>17</td><td>25</td><td>-8</td><td>0,300</td><td>0-1-1</td><td>1-2-0</td><td>1-3-1</td><td>0-1-1</td><td>1-2-0</td><td>W1</td></tr>
<tr><td>6 - E</td><td><a href="IHWC-ProTeamRoster.php#U23NORTHAMERICA">U23 NORTH AMERICA</a></td><td>5</td><td>1</td><td>3</td><td>1</td><td><b>3</b></td><td>0</td><td>17</td><td>22</td><td>-5</td><td>0,300</td><td>0-2-0</td><td>1-1-1</td><td>1-3-1</td><td>0-2-0</td><td>1-1-1</td><td>L1</td></tr>
</tbody></table><br />
<h2 class="STHSStanding_H2Header">Conference 2</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="IHWC-ProTeamRoster.php#FINLANDE">FINLANDE</a></td><td>5</td><td>4</td><td>1</td><td>0</td><td><b>8</b></td><td>3</td><td>19</td><td>13</td><td>6</td><td>0,800</td><td>2-0-0</td><td>2-1-0</td><td>4-1-0</td><td>2-0-0</td><td>2-1-0</td><td>W2</td></tr>
<tr><td>2 - X</td><td><a href="IHWC-ProTeamRoster.php#ETATS-UNIS">ETATS-UNIS</a></td><td>5</td><td>3</td><td>0</td><td>2</td><td><b>8</b></td><td>2</td><td>18</td><td>15</td><td>3</td><td>0,800</td><td>1-0-2</td><td>2-0-0</td><td>3-0-2</td><td>1-0-2</td><td>2-0-0</td><td>W1</td></tr>
<tr><td>3 - Y</td><td><a href="IHWC-ProTeamRoster.php#SUISSE">SUISSE</a></td><td>5</td><td>3</td><td>2</td><td>0</td><td><b>6</b></td><td>2</td><td>18</td><td>16</td><td>2</td><td>0,600</td><td>2-2-0</td><td>1-0-0</td><td>3-2-0</td><td>2-2-0</td><td>1-0-0</td><td>L1</td></tr>
<tr class="static"><td colspan="18"><hr /></td></tr>
<tr><td>4 - E</td><td><a href="IHWC-ProTeamRoster.php#RUSSIE">RUSSIE</a></td><td>5</td><td>2</td><td>2</td><td>1</td><td><b>5</b></td><td>2</td><td>20</td><td>20</td><td>0</td><td>0,500</td><td>1-2-1</td><td>1-0-0</td><td>2-2-1</td><td>1-2-1</td><td>1-0-0</td><td>L1</td></tr>
<tr><td>5 - E</td><td><a href="IHWC-ProTeamRoster.php#TEAMWORLD">TEAM WORLD</a></td><td>5</td><td>2</td><td>2</td><td>1</td><td><b>5</b></td><td>2</td><td>15</td><td>17</td><td>-2</td><td>0,500</td><td>0-1-0</td><td>2-1-1</td><td>2-2-1</td><td>0-1-0</td><td>2-1-1</td><td>L1</td></tr>
<tr><td>6 - E</td><td><a href="IHWC-ProTeamRoster.php#LETTONIE">LETTONIE</a></td><td>5</td><td>1</td><td>4</td><td>0</td><td><b>2</b></td><td>1</td><td>8</td><td>17</td><td>-9</td><td>0,200</td><td>0-1-0</td><td>1-3-0</td><td>1-4-0</td><td>0-1-0</td><td>1-3-0</td><td>L2</td></tr>
</tbody></table><br />
x - Clinched Playoff Berth<br />
y - Clinched Division Title<br />
z - Clinched Conference Title<br />
e - Eliminated<br />
*Seeding 3 division leaders<br />
</div><div class="tabmain" id="tabmain3">
<h2 class="STHSStanding_H2Header">Division 1</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="IHWC-ProTeamRoster.php#CANADA">CANADA</a></td><td>5</td><td>5</td><td>0</td><td>0</td><td><b>10</b></td><td>4</td><td>25</td><td>12</td><td>13</td><td>1,000</td><td>2-0-0</td><td>3-0-0</td><td>5-0-0</td><td>2-0-0</td><td>3-0-0</td><td>W3</td></tr>
<tr><td>2 - X</td><td><a href="IHWC-ProTeamRoster.php#SUEDE">SUEDE</a></td><td>5</td><td>2</td><td>1</td><td>2</td><td><b>6</b></td><td>2</td><td>17</td><td>16</td><td>1</td><td>0,600</td><td>1-1-1</td><td>1-0-1</td><td>2-1-2</td><td>1-1-1</td><td>1-0-1</td><td>L1</td></tr>
<tr><td>3 - E</td><td><a href="IHWC-ProTeamRoster.php#REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a></td><td>5</td><td>2</td><td>3</td><td>0</td><td><b>4</b></td><td>2</td><td>18</td><td>19</td><td>-1</td><td>0,400</td><td>0-2-0</td><td>2-1-0</td><td>2-3-0</td><td>0-2-0</td><td>2-1-0</td><td>W1</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Division 2</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Y</td><td><a href="IHWC-ProTeamRoster.php#ALLEMAGNE">ALLEMAGNE</a></td><td>5</td><td>4</td><td>1</td><td>0</td><td><b>8</b></td><td>3</td><td>19</td><td>19</td><td>0</td><td>0,800</td><td>3-1-0</td><td>1-0-0</td><td>4-1-0</td><td>3-1-0</td><td>1-0-0</td><td>L1</td></tr>
<tr><td>2 - E</td><td><a href="IHWC-ProTeamRoster.php#SLOVAQUIE">SLOVAQUIE</a></td><td>5</td><td>1</td><td>3</td><td>1</td><td><b>3</b></td><td>1</td><td>17</td><td>25</td><td>-8</td><td>0,300</td><td>0-1-1</td><td>1-2-0</td><td>1-3-1</td><td>0-1-1</td><td>1-2-0</td><td>W1</td></tr>
<tr><td>3 - E</td><td><a href="IHWC-ProTeamRoster.php#U23NORTHAMERICA">U23 NORTH AMERICA</a></td><td>5</td><td>1</td><td>3</td><td>1</td><td><b>3</b></td><td>0</td><td>17</td><td>22</td><td>-5</td><td>0,300</td><td>0-2-0</td><td>1-1-1</td><td>1-3-1</td><td>0-2-0</td><td>1-1-1</td><td>L1</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Division 4</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Y</td><td><a href="IHWC-ProTeamRoster.php#SUISSE">SUISSE</a></td><td>5</td><td>3</td><td>2</td><td>0</td><td><b>6</b></td><td>2</td><td>18</td><td>16</td><td>2</td><td>0,600</td><td>2-2-0</td><td>1-0-0</td><td>3-2-0</td><td>2-2-0</td><td>1-0-0</td><td>L1</td></tr>
<tr><td>2 - E</td><td><a href="IHWC-ProTeamRoster.php#RUSSIE">RUSSIE</a></td><td>5</td><td>2</td><td>2</td><td>1</td><td><b>5</b></td><td>2</td><td>20</td><td>20</td><td>0</td><td>0,500</td><td>1-2-1</td><td>1-0-0</td><td>2-2-1</td><td>1-2-1</td><td>1-0-0</td><td>L1</td></tr>
<tr><td>3 - E</td><td><a href="IHWC-ProTeamRoster.php#LETTONIE">LETTONIE</a></td><td>5</td><td>1</td><td>4</td><td>0</td><td><b>2</b></td><td>1</td><td>8</td><td>17</td><td>-9</td><td>0,200</td><td>0-1-0</td><td>1-3-0</td><td>1-4-0</td><td>0-1-0</td><td>1-3-0</td><td>L2</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Division 5</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="IHWC-ProTeamRoster.php#FINLANDE">FINLANDE</a></td><td>5</td><td>4</td><td>1</td><td>0</td><td><b>8</b></td><td>3</td><td>19</td><td>13</td><td>6</td><td>0,800</td><td>2-0-0</td><td>2-1-0</td><td>4-1-0</td><td>2-0-0</td><td>2-1-0</td><td>W2</td></tr>
<tr><td>2 - X</td><td><a href="IHWC-ProTeamRoster.php#ETATS-UNIS">ETATS-UNIS</a></td><td>5</td><td>3</td><td>0</td><td>2</td><td><b>8</b></td><td>2</td><td>18</td><td>15</td><td>3</td><td>0,800</td><td>1-0-2</td><td>2-0-0</td><td>3-0-2</td><td>1-0-2</td><td>2-0-0</td><td>W1</td></tr>
<tr><td>3 - E</td><td><a href="IHWC-ProTeamRoster.php#TEAMWORLD">TEAM WORLD</a></td><td>5</td><td>2</td><td>2</td><td>1</td><td><b>5</b></td><td>2</td><td>15</td><td>17</td><td>-2</td><td>0,500</td><td>0-1-0</td><td>2-1-1</td><td>2-2-1</td><td>0-1-0</td><td>2-1-1</td><td>L1</td></tr>
</tbody></table>
</div><div class="tabmain" id="tabmain4">
<h2 class="STHSStanding_H2Header">Overall</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="IHWC-ProTeamRoster.php#CANADA">CANADA</a></td><td>5</td><td>5</td><td>0</td><td>0</td><td><b>10</b></td><td>4</td><td>25</td><td>12</td><td>13</td><td>1,000</td><td>2-0-0</td><td>3-0-0</td><td>5-0-0</td><td>2-0-0</td><td>3-0-0</td><td>W3</td></tr>
<tr><td>2 - Z</td><td><a href="IHWC-ProTeamRoster.php#FINLANDE">FINLANDE</a></td><td>5</td><td>4</td><td>1</td><td>0</td><td><b>8</b></td><td>3</td><td>19</td><td>13</td><td>6</td><td>0,800</td><td>2-0-0</td><td>2-1-0</td><td>4-1-0</td><td>2-0-0</td><td>2-1-0</td><td>W2</td></tr>
<tr><td>3 - Y</td><td><a href="IHWC-ProTeamRoster.php#ALLEMAGNE">ALLEMAGNE</a></td><td>5</td><td>4</td><td>1</td><td>0</td><td><b>8</b></td><td>3</td><td>19</td><td>19</td><td>0</td><td>0,800</td><td>3-1-0</td><td>1-0-0</td><td>4-1-0</td><td>3-1-0</td><td>1-0-0</td><td>L1</td></tr>
<tr><td>4 - X</td><td><a href="IHWC-ProTeamRoster.php#ETATS-UNIS">ETATS-UNIS</a></td><td>5</td><td>3</td><td>0</td><td>2</td><td><b>8</b></td><td>2</td><td>18</td><td>15</td><td>3</td><td>0,800</td><td>1-0-2</td><td>2-0-0</td><td>3-0-2</td><td>1-0-2</td><td>2-0-0</td><td>W1</td></tr>
<tr><td>5 - Y</td><td><a href="IHWC-ProTeamRoster.php#SUISSE">SUISSE</a></td><td>5</td><td>3</td><td>2</td><td>0</td><td><b>6</b></td><td>2</td><td>18</td><td>16</td><td>2</td><td>0,600</td><td>2-2-0</td><td>1-0-0</td><td>3-2-0</td><td>2-2-0</td><td>1-0-0</td><td>L1</td></tr>
<tr><td>6 - X</td><td><a href="IHWC-ProTeamRoster.php#SUEDE">SUEDE</a></td><td>5</td><td>2</td><td>1</td><td>2</td><td><b>6</b></td><td>2</td><td>17</td><td>16</td><td>1</td><td>0,600</td><td>1-1-1</td><td>1-0-1</td><td>2-1-2</td><td>1-1-1</td><td>1-0-1</td><td>L1</td></tr>
<tr><td>7 - E</td><td><a href="IHWC-ProTeamRoster.php#RUSSIE">RUSSIE</a></td><td>5</td><td>2</td><td>2</td><td>1</td><td><b>5</b></td><td>2</td><td>20</td><td>20</td><td>0</td><td>0,500</td><td>1-2-1</td><td>1-0-0</td><td>2-2-1</td><td>1-2-1</td><td>1-0-0</td><td>L1</td></tr>
<tr><td>8 - E</td><td><a href="IHWC-ProTeamRoster.php#TEAMWORLD">TEAM WORLD</a></td><td>5</td><td>2</td><td>2</td><td>1</td><td><b>5</b></td><td>2</td><td>15</td><td>17</td><td>-2</td><td>0,500</td><td>0-1-0</td><td>2-1-1</td><td>2-2-1</td><td>0-1-0</td><td>2-1-1</td><td>L1</td></tr>
<tr><td>9 - E</td><td><a href="IHWC-ProTeamRoster.php#REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a></td><td>5</td><td>2</td><td>3</td><td>0</td><td><b>4</b></td><td>2</td><td>18</td><td>19</td><td>-1</td><td>0,400</td><td>0-2-0</td><td>2-1-0</td><td>2-3-0</td><td>0-2-0</td><td>2-1-0</td><td>W1</td></tr>
<tr><td>10 - E</td><td><a href="IHWC-ProTeamRoster.php#SLOVAQUIE">SLOVAQUIE</a></td><td>5</td><td>1</td><td>3</td><td>1</td><td><b>3</b></td><td>1</td><td>17</td><td>25</td><td>-8</td><td>0,300</td><td>0-1-1</td><td>1-2-0</td><td>1-3-1</td><td>0-1-1</td><td>1-2-0</td><td>W1</td></tr>
<tr><td>11 - E</td><td><a href="IHWC-ProTeamRoster.php#U23NORTHAMERICA">U23 NORTH AMERICA</a></td><td>5</td><td>1</td><td>3</td><td>1</td><td><b>3</b></td><td>0</td><td>17</td><td>22</td><td>-5</td><td>0,300</td><td>0-2-0</td><td>1-1-1</td><td>1-3-1</td><td>0-2-0</td><td>1-1-1</td><td>L1</td></tr>
<tr><td>12 - E</td><td><a href="IHWC-ProTeamRoster.php#LETTONIE">LETTONIE</a></td><td>5</td><td>1</td><td>4</td><td>0</td><td><b>2</b></td><td>1</td><td>8</td><td>17</td><td>-9</td><td>0,200</td><td>0-1-0</td><td>1-3-0</td><td>1-4-0</td><td>0-1-0</td><td>1-3-0</td><td>L2</td></tr>
</tbody></table></div></div></div>
<h2 class="STHSStanding_PointSystem">Point System</h2>
<b>Win :</b> 2 -- <b>Loss :</b> 0 -- <b>OT Win :</b> 2 -- <b>OT Loss :</b> 1 -- <b>SO Win :</b> 2 -- <b>SO Loss :</b> 1<br /><br />P.S. The simulator only uses points to give the title. If two team have the same amount of point, none of them will be award the title until your simulate the last game/day of your season.
<?php include "Footer.php";?>
