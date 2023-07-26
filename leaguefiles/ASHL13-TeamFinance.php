<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Team Finance</title>
<script src="ASHL13.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - ASHL13-STHS.db - ASHL13-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 960px) {.STHSWarning {display:block;}
.STHSFinance_FarmSalaryTable {display:none;}
.STHSFinance_TeamTable tr > td:nth-child(6){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(7){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(8){display:none;}}
@media screen and (max-width: 720px) {.STHSFinance_ProSalaryTable{display:none}}
</style>
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleKraken">Seattle Kraken</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
 | <a href="#SalaryCapCentrale">Salary Cap Centrale Report</a></div>
<h1 class="TeamFinancePro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Honda Center</td></tr>
<tr><td>Level 1: </td><td>5174 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 85 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 55 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 300 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>17174</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>86 450 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>86 450 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 455 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 455 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(500 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>411 667 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>13 199 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>425 952 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>89 449 920 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>18 575 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 454 950 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>92 904 870 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>85 950 070 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>1 049 980 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>18 950 020 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>82 025 883 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(10 878 987 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>John Tavares</td>
<td>10 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td>Matt Duchene</td>
<td>8 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Cam Fowler</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Roman Josi</td>
<td>6 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Matt Dumba</td>
<td>6 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Zachary Werenski</td>
<td>5 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Andre Burakovsky</td>
<td>5 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Brock Boeser</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Rickard Rakell</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Adam Fox</td>
<td>4 650 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td>Dylan Strome</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Chris Tierney</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Petr Mrazek</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Andrew Copp</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Vitek Vanecek</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Joey Laleggia</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Rhett Gardner</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Jansen Harkins</td>
<td>1 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>Nino Niederreiter</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>19</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 86 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 60 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 36 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 13 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 86 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 60 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 36 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 13 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 86 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 60 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 36 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 13 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Max Willman</td>
<td>195 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Sheldon Rempal</td>
<td>195 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Max Friberg</td>
<td>185 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Mike Hardman</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Adam Helewka</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Matthew Highmore</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Ryan Sproul</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Kyle Wood</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Carl Dahlstrom</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Joe Snively</td>
<td>115 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>115 000 $</td></tr>
<tr><td>Thomas Novak</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Tyler Benson</td>
<td>97 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Simon Ryfors</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Cole Perfetti</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jiri Sekac</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Kirill Ustimenko</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kyle Olson</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Hannibal Weitzmann</td>
<td>77 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Igor Shvyryov</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Lars Volden</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Christian Folin</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Simeon Varlamov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Kerby Rychel</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Odeen Tufto</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Michael Brodzinski</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Kalle Kossila</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Joonas Lyytinen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Joseph Garreffa</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 455 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 525 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 225 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 455 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 525 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 225 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Gila River Arena</td></tr>
<tr><td>Level 1: </td><td>5799 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 90 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 70 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>17799</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>83 450 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>83 116 667 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 740 900 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 740 900 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>1 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>395 794 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>9 360 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>404 524 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>84 950 040 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>14 736 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>2 740 896 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>87 690 936 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>84 116 740 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>2 883 310 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>17 116 690 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>120 317 942 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>32 627 006 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Hampus Lindholm</td>
<td>8 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 250 000 $</td></tr>
<tr><td>Kris Letang</td>
<td>8 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Bo Horvat</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Brandon Montour</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Robert Thomas</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Clayton Keller</td>
<td>5 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Kevin Labanc</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Miles Wood</td>
<td>5 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Brett Pesce</td>
<td>4 600 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 600 000 $</td></tr>
<tr><td>Duncan Siemens</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Jack Campbell</td>
<td>4 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Luca Sbisa</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 666 667 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 666 667 $</td></tr>
<tr><td>JC Lipon</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Trey Fix-Wolansky</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Zach Sanford</td>
<td>2 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td>Mareks Mitens</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Brandon Duhaime</td>
<td>1 650 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 650 000 $</td></tr>
<tr><td>Jermaine Loewen</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Tobias Björnfot</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>19</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 83 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 65 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 50 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 31 350 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 83 116 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 65 616 667 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 51 166 667 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 31 350 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 83 116 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 65 616 667 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 51 166 667 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 31 350 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Mark Kastelic</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Hafthor Sigrunarson</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Rodion Amirov</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Benjamin King</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Kirill Steklov</td>
<td>90 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jack Matier</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Marko Mladenovic</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jacob Ratcliffe</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Brandon Coe</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ozzy Wiesblatt</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Aleksi Heponiemi</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Arturs Silovs</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ralfs Bergmanis</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Demid Yeremeyev</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Declan Bronte</td>
<td>75 900 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 900 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 900 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 900 $</td></tr>
<tr><td>Artur Cholach</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Reinhard Venter</td>
<td>75 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Hakan Salt</td>
<td>75 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Roko Mandic</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Karma Stein</td>
<td>60 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td>Austin Mitchell-King</td>
<td>60 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 740 900 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 175 900 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 605 900 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 240 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 740 900 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 175 900 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 605 900 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 240 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">TD Garden</td></tr>
<tr><td>Level 1: </td><td>5765 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>17765</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 45 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>77 250 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>77 250 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 730 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 730 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 600 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>367 857 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>14 677 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>382 143 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>80 250 030 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>23 280 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>4 330 080 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>84 580 110 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>77 249 970 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>9 750 080 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>10 249 920 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>42 581 832 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(41 998 278 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>David Pastrnak</td>
<td>10 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td>Igor Shestyorkin</td>
<td>7 700 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 700 000 $</td></tr>
<tr><td>Oliver Ekman-Larsson</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Brad Marchand</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Nico Hischier</td>
<td>6 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 300 000 $</td></tr>
<tr><td>Derrick Pouliot</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Nathan Beaulieu</td>
<td>4 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Tyson Baillie</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Adam Boqvist</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Pavel Francouz</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Ahti Oksanen</td>
<td>2 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Marko Dano</td>
<td>2 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Frédérik Gauthier</td>
<td>2 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td>Jakob Forsbacka Karlsson</td>
<td>1 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Hudson Fasching</td>
<td>1 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td>Jacob Bryson</td>
<td>1 550 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 550 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 550 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 550 000 $</td></tr>
<tr><td>Eric Gelinas</td>
<td>0 $ (0)</td></tr>
<tr><td>Charlie Coyle</td>
<td>0 $ (0)</td></tr>
<tr><td>Oscar Klefbom</td>
<td>0 $ (0)</td></tr>
<tr><td>Nikita Jevpalovs</td>
<td>0 $ (0)</td></tr>
<tr><td>Mason Marchment</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 77 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 57 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 44 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 25 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 77 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 57 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 44 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 25 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 77 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 57 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 44 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 25 200 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Steven Fogarty</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Maximilian Veronneau</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Mattias Norstebo</td>
<td>185 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Roland McKeown</td>
<td>180 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Simon Tremblay</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Déreck Baribeau</td>
<td>150 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Alexander Dergachyov</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Brett Kulak</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Rodrigo Abols</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Calvin Thurkauf</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Damien Giroux</td>
<td>120 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Tim Gettinger</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Chad Yetman</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Jacob Christiansen</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kent Johnson</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Max Golod</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Calen Addison</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Matias Maccelli</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Matt Kiersted</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Noel Gunler</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ryan McGregor</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Keean Washkurak</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Adam Mascherin</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Robert Bortuzzo</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>James Reimer</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alexander Khokhlachev</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Colton Sissons</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dalton Thrower</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Zane McIntyre</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>29</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 730 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 710 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 270 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 730 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 710 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 270 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">KeyBank Center</td></tr>
<tr><td>Level 1: </td><td>8500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 110 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3070 - 80 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 265 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>22070</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 22 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>59 500 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>59 500 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>3 154 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>3 154 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>5 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>283 333 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>16 960 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>297 619 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>62 499 990 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>27 712 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>5 154 432 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>67 654 422 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>64 499 930 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>22 500 120 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td><span style="color:red">-2 500 120 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>40 857 454 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(26 796 968 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Chris Driedger</td>
<td>7 200 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 200 000 $</td></tr>
<tr><td>Jordan Subban</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Oskar Lindblom</td>
<td>5 400 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td>Daniel Sprong</td>
<td>4 400 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 400 000 $</td></tr>
<tr><td>Nick Schmaltz</td>
<td>4 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Curtis Lazar</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Josh Anderson</td>
<td>3 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Marcus Pettersson</td>
<td>3 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Madison Bowey</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Theodor Blueger</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Darren Dietz</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Matt Roy</td>
<td>2 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Niko Mikkola</td>
<td>1 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>John Quenneville</td>
<td>1 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>Filip Hronek</td>
<td>1 650 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 650 000 $</td></tr>
<tr><td>Brock McGinn</td>
<td>1 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Nathan Bastian</td>
<td>1 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Lukas Vejdemo</td>
<td>1 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Erik Källgren</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Joe Morrow</td>
<td>0 $ (0)</td></tr>
<tr><td>Nick Leddy</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 59 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 50 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 37 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 30 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 59 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 50 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 37 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 30 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 59 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 50 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 37 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 30 750 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Trevor Cox</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Alexei Melnichuk</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Owen Tippett</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Alexander Alexeyev</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Radim Zohorna</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Timothy Liljegren</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Sakari Manninen</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Joe Veleno</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Brendan Burke</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Lucas Carlsson</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Malte Strömwall</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Eric Cornel</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Scott Laughton</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Dylan Sikura</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Nick Baptiste</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Jujhar Khaira</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Ian Mitchell</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Yegor Korshkov</td>
<td>99 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>99 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>99 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>99 500 $</td></tr>
<tr><td>Alexis Lafrenière</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Gregorio Gios</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Maxim Letunov</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Semyon Chistyakov</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Tyler Tucker</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ty Emberson</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Théo Rochette</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Yaniv Perets</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Evgeny Grachev</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Josh Brown</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Ian McCoshen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jason Fram</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Robin Press</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Daniel O'Regan</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Taylor Doherty</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alexei Mitrofanov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>34</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 154 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 159 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 424 500 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 154 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 159 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 424 500 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scotiabank Saddledome</td></tr>
<tr><td>Level 1: </td><td>7500 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6500 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3289 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>5000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>2000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>24289</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>89 000 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>89 000 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 487 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 487 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(5 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>423 810 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>7 997 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>435 714 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>91 499 940 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>18 750 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 487 500 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>94 987 440 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>84 000 100 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>2 999 950 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>17 000 050 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>36 755 063 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(58 232 377 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sidney Crosby</td>
<td>10 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td>Tyler Seguin</td>
<td>8 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>8 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Teuvo Teravainen</td>
<td>8 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Robby Fabbri</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Vyacheslav Voynov</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Valeri Nichushkin</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Thomas Chabot</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Olli Maatta</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Cal Petersen</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Anthony Beauvillier</td>
<td>3 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Ryan Lindgren</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Markus Nutivaara</td>
<td>2 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Brandon Hagel</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Tyler Motte</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Blake Lizotte</td>
<td>1 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Leon Gawanke</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Connor Brown</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td>Kody Clark</td>
<td>850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>850 000 $</td></tr>
<tr><td>Calvin Pickard</td>
<td>0 $ (0)</td></tr>
<tr><td>Ivan Barbashev</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 69 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 59 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 29 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 69 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 59 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 29 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 69 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 59 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 29 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Lukas Sedlak</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Kevin Lankinen</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Adam Almqvist</td>
<td>157 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>157 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>157 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>157 500 $</td></tr>
<tr><td>Colton Point</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Lucas Johansen</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Yevgeni Svechnikov</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Nick Merkley</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Clark Bishop</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Dennis Gilbert</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Dakota Joshua</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Jacob Olofsson</td>
<td>82 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Josh Williams</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Marc-Andre Fleury</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dmitri Mikhailov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Michael Sgarbossa</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jaycob Megna</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nate Schmidt</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Zach Pochiro</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nick Shore</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>J.T. Compher</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Mark Friedman</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Tanner Kero</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Drake Caggiula</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Brogan Rafferty</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Anton Zlobin</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 487 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 170 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 487 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 170 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">PNC Arena</td></tr>
<tr><td>Level 1: </td><td>7500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6180 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>4000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 95 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>3000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>24680</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>71 300 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>71 966 667 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>3 005 045 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>3 005 045 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>342 698 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>16 156 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>351 429 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>73 800 090 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>24 221 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>4 505 106 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>78 305 196 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>71 966 580 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>15 033 470 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>4 966 530 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>49 205 400 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(29 099 796 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jamie Benn</td>
<td>6 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 800 000 $</td></tr>
<tr><td>Derek Stepan</td>
<td>6 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Alexander Edler</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Josh Harding</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 666 667 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 666 667 $</td></tr>
<tr><td>Sonny Milano</td>
<td>4 100 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 100 000 $</td></tr>
<tr><td>Adam Clendening</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Nikolai Knyzhov</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Dylan Gambrell</td>
<td>3 400 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 400 000 $</td></tr>
<tr><td>Kevin Stenlund</td>
<td>3 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 400 000 $</td></tr>
<tr><td>Martins Dzierkals</td>
<td>3 200 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Andreas Borgman</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Erik Foley</td>
<td>2 950 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 950 000 $</td></tr>
<tr><td>Robin Kovacs</td>
<td>2 850 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>2 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Jonathon Merrill</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Johan Larsson</td>
<td>2 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Matthew Finn</td>
<td>2 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Rasmus Asplund</td>
<td>2 050 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 050 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 050 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 050 000 $</td></tr>
<tr><td>Sami Niku</td>
<td>1 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td>Alexander Chmelevski</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Tyler Parsons</td>
<td>850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>850 000 $</td></tr>
<tr><td>Ryan Hartman</td>
<td>0 $ (0)</td></tr>
<tr><td>Anthony Camara</td>
<td>0 $ (0)</td></tr>
<tr><td>Keith Kinkaid</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 71 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 39 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 25 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 15 700 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 71 966 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 39 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 25 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 15 700 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 71 966 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 39 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 25 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 15 700 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Josh Bailey</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Lukas Bengtsson</td>
<td>195 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Guillaume Brisebois</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Fabian Zetterlund</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jack Lafontaine</td>
<td>145 045 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>145 045 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>145 045 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>145 045 $</td></tr>
<tr><td>Kiefer Sherwood</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Justin Brazeau</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Greg McKegg</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Louis Belpedio</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Connor Dewar</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Sam Lafferty</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Mikhail Vorobyov</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Riley Damiani</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Artyom Minulin</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Nils Aman</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Amir Garayev</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Dmitri Voronkov</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Jacob Peterson</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nikita Grebyonkin</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Brennan Menell</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jakob Stenqvist</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Johannes Kinnvall</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Helge Grans</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ben Zloty</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Arshdeep Bains</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ben Mirageas</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Sami Aittokallio</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Michael Bournival</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Rihards Bukarts</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>29</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 005 045 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 412 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 445 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 005 045 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 412 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 445 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">United Center</td></tr>
<tr><td>Level 1: </td><td>6500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 120 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2500 - 70 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4500 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1500 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>20500</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>79 800 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>79 800 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 507 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 507 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>380 000 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>13 481 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>396 667 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>83 300 070 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>21 546 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>4 007 556 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>87 307 626 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>79 800 000 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>7 200 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>12 799 950 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>177 044 277 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>89 736 651 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeny Dadonov</td>
<td>8 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 600 000 $</td></tr>
<tr><td>Tyler Ennis</td>
<td>7 350 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 350 000 $</td></tr>
<tr><td>David Savard</td>
<td>6 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>David Musil</td>
<td>5 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 800 000 $</td></tr>
<tr><td>Cody Franson</td>
<td>5 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Jamie Oleksiak</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Hunter Shinkaruk</td>
<td>4 700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td>Tomas Tatar</td>
<td>4 650 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td>Jordan Kyrou</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>John Nyberg</td>
<td>3 800 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Ondrej Palat</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Remi Elie</td>
<td>3 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 400 000 $</td></tr>
<tr><td>Karel Vejmelka</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Joshua Jacobs</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Joe Hicketts</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Mitchell Vande Sompel</td>
<td>2 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Jordan Caron</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Juuso Pärssinen</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Alexandre Texier</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Daniil Gushchin</td>
<td>800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>800 000 $</td></tr>
<tr><td>Frederik Dichow</td>
<td>750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>750 000 $</td></tr>
<tr><td>Jonathan Toews</td>
<td>0 $ (0)</td></tr>
<tr><td>Zack MacEwen</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 79 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 48 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 29 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 18 350 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 79 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 48 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 29 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 18 350 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 79 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 48 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 29 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 18 350 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>MacKenzie Entwistle</td>
<td>200 000 $ (6)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Samuel Montembeault</td>
<td>200 000 $ (6)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Michael Joly</td>
<td>195 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Chaz Reddekopp</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Julien Pelletier</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Anders Nilsson</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Jérémy Davies</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Peetro Seppälä</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Simon Johansson</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Rem Pitlick</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Marat Khairullin</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Nick Blankenburg</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Semyon Der-Arguchintsev</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Martin Frk</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Ryan Suzuki</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Mikael Pyyhtiä</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Justin Gill</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Arber Xhekaj</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ty Voit</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Lorenzo Canonica</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Nikita Nesterenko</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Joakim Nordstrom</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Michael Spacek</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Calle Rosén</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Sven Baertschi</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Ryan Spooner</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jordan Schneider</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 507 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 540 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 835 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 400 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 507 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 540 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 835 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 400 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Ball Arena</td></tr>
<tr><td>Level 1: </td><td>6007 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 85 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18007</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>67 025 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>67 025 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 715 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 715 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>3 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>319 167 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>9 220 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>331 071 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>69 524 910 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>22 661 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>4 214 946 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>73 739 856 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>70 025 070 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>16 974 980 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>3 025 020 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>75 869 468 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>2 129 612 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeny Kuznetsov</td>
<td>7 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Jakub Voracek</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Travis Hamonic</td>
<td>7 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>William Karlsson</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Philipp Grubauer</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Marcus Johansson</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Colin Wilson</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Yann Sauve</td>
<td>4 575 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 575 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 575 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 575 000 $</td></tr>
<tr><td>Andreas Englund</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Jani Hakanpaa</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Devon Toews</td>
<td>2 950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 950 000 $</td></tr>
<tr><td>Brett Cote</td>
<td>2 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Niklas Hjalmarsson</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Marcus Davidsson</td>
<td>1 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Ivan Morozov</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Xavier Bernard</td>
<td>750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>750 000 $</td></tr>
<tr><td>Andrew Hammond</td>
<td>0 $ (0)</td></tr>
<tr><td>Zach Aston-Reese</td>
<td>0 $ (0)</td></tr>
<tr><td>Rocco Grimaldi</td>
<td>0 $ (0)</td></tr>
<tr><td>Taylor Leier</td>
<td>0 $ (0)</td></tr>
<tr><td>Joachim Nermark</td>
<td>0 $ (0)</td></tr>
<tr><td>Artyom Zub</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 67 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 36 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 16 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 6 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 67 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 36 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 16 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 6 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 67 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 36 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 16 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 6 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Justin Auger</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Karlis Cukste</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Gustav Olofsson</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Matej Tomek</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Kurtis MacDermid</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Mathieu Olivier</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Vadim Vasjonkin</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Sam Miletic</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Christoph Bertschy</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Joel L'Esperance</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Keegan Iverson</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Brett Budgell</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Oskar Bäck</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Mitchell Gibson</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Brendan Warren</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Frédérick Gaudreau</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Erik Gustafsson</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Joseph Cramarossa</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dustin Tokarski</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Colin Smith</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Stephen Silas</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Christian Djoos</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Patrik Nemeth</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Kyle Rau</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 715 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 710 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 715 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 710 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Nationwide Arena</td></tr>
<tr><td>Level 1: </td><td>7500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>7000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3500 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>3000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>25000</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 110 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 85 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>78 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>78 050 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 960 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 960 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 600 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(1 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>371 667 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>10 538 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>388 333 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>81 549 930 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>16 452 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 060 072 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>84 610 002 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>77 050 070 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>9 949 980 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>10 050 020 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>156 629 827 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>72 019 825 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nathan MacKinnon</td>
<td>10 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td>Seth Jones</td>
<td>7 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 800 000 $</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>6 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Alexandar Georgiyev</td>
<td>5 950 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 950 000 $</td></tr>
<tr><td>Jared McCann</td>
<td>5 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Boone Jenner</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Charlie McAvoy</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Ilya Mikheyev</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Alexander Kerfoot</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Jonas Brodin</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Nicolas Kerdiles</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Oliver Wahlstrom</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Adam Lowry</td>
<td>2 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Noah Juulsen</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Max Görtz</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Ondrej Pavelec</td>
<td>0 $ (0)</td></tr>
<tr><td>Dan DeKeyser</td>
<td>0 $ (0)</td></tr>
<tr><td>Chandler Stephenson</td>
<td>0 $ (0)</td></tr>
<tr><td>Nick Bjugstad</td>
<td>0 $ (0)</td></tr>
<tr><td>Jack Johnson</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 78 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 52 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 40 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 30 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 78 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 52 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 40 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 30 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 78 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 52 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 40 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 30 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Nathan Walker</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Mattias Samuelsson</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Shane Bowers</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Brandon Hickey</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jake Walman</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Riley Stillman</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Josh Lawrence</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Chad Nychuk</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Justin Robidas</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>James Malatesta</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Carsen Twarynski</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Marcus Karlberg</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Axel Holmstrom</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kale McCallum</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Samuel Asselin</td>
<td>82 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Marco Costantini</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tim Bozon</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Calle Clang</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jacob Dion</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jakob Robillard</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Mirko Hoefflin</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Michal Kempný</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Barclay Goodrow</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Anton Blidh</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alex Belzile</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Andrey Pedan</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 960 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 585 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 960 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 585 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">American Airlines Center</td></tr>
<tr><td>Level 1: </td><td>8000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>4000 - 95 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>5000 - 80 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>2000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>25000</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>71 606 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>71 606 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 682 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 682 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>340 981 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>14 422 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>352 886 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>74 106 060 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>19 798 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 682 428 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>77 788 488 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>71 606 010 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>15 394 040 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>4 605 960 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>107 983 731 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>30 195 243 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Leon Draisaitl</td>
<td>8 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 200 000 $</td></tr>
<tr><td>Tyler Myers</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Jordan Binnington</td>
<td>7 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td>Mathew Barzal</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Slater Koekkoek</td>
<td>6 951 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 951 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 951 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 951 000 $</td></tr>
<tr><td>Vince Dunn</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Haydn Fleury</td>
<td>5 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Henrik Samuelsson</td>
<td>3 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Pavel Zacha</td>
<td>3 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Oskar Sundqvist</td>
<td>2 880 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 880 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 880 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 880 000 $</td></tr>
<tr><td>Phillip Di Giuseppe</td>
<td>2 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Tyler Biggs</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Filip Chytil</td>
<td>2 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td>Sam Steel</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Alexander True</td>
<td>1 350 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 350 000 $</td></tr>
<tr><td>Tobias Lindberg</td>
<td>850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>850 000 $</td></tr>
<tr><td>Hugo Hävelid</td>
<td>850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>850 000 $</td></tr>
<tr><td>Albin Eriksson</td>
<td>825 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>825 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>825 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>825 000 $</td></tr>
<tr><td>Simon Bourque</td>
<td>750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>750 000 $</td></tr>
<tr><td>Cole Sanford</td>
<td>650 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>650 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 71 606 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 36 726 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 33 051 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 17 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 71 606 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 36 726 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 33 051 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 17 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 71 606 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 36 726 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 33 051 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 17 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Curtis Hamilton</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Christian Jaros</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Zach Whitecloud</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Adam Brooks</td>
<td>185 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Jacob Larsson</td>
<td>185 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Jake Oettinger</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Travis Boyd</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Evan Fitzpatrick</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Parker Wotherspoon</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Andrey Makarov</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Matteson Iacopelli</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Adam Brodecki</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Anthony Richard</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Martin Fehervary</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Chad Krys</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ryan Collins</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Bogdan Trineyev</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Oliver Suni</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ty Ronning</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Daniel Audette</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Santeri Virtanen</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Laurent Dauphin</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Travis Zajac</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Justin Kea</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 682 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 430 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 280 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 682 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 430 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 280 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Little Caesars Arena</td></tr>
<tr><td>Level 1: </td><td>10566 - 120 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 86 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2500 - 65 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1500 - 170 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>24066</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 33 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 22 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>72 650 001 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>72 650 001 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 775 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 775 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 400 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>345 952 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>9 543 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>362 619 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>76 149 990 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>14 382 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>2 675 052 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>78 825 042 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>72 649 920 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>14 350 130 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>5 649 870 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>71 559 811 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(7 265 231 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Ellis</td>
<td>7 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 800 000 $</td></tr>
<tr><td>John Klingberg</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Jonathan Drouin</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Jaden Schwartz</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Torey Krug</td>
<td>6 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Tomas Hertl</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Kyle Connor</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Ty Rattie</td>
<td>5 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Jonathon Blum</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Connor Hellebuyck</td>
<td>4 200 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td>Samuel Morin</td>
<td>2 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Jordan Greenway</td>
<td>2 150 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 150 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 150 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 150 000 $</td></tr>
<tr><td>Angelo Miceli</td>
<td>2 000 001 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 001 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 001 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 001 $</td></tr>
<tr><td>Mark Katic</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Trevor Zegras</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Alec Martinez</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Bryan Little</td>
<td>850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>850 000 $</td></tr>
<tr><td>Tomas Nosek</td>
<td>0 $ (0)</td></tr>
<tr><td>Jean-Gabriel Pageau</td>
<td>0 $ (0)</td></tr>
<tr><td>John Moore</td>
<td>0 $ (0)</td></tr>
<tr><td>Louis Leblanc</td>
<td>0 $ (0)</td></tr>
<tr><td>Alex Dubeau</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 72 650 001 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 54 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 44 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 32 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 72 650 001 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 54 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 44 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 32 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 72 650 001 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 54 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 44 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 32 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Zach Hyman</td>
<td>195 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Elvis Merzlikins</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Shane Prince</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Nikolas Brouillard</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Karl Alzner</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alexander Barabanov</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Collin Delia</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Yanni Gourde</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Lars Eller</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Marcus Foligno</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jyrki Jokipakka</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Aaron Dell</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ben Chiarot</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Michael Frolik</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Vadim Shipachev</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Greg Chase</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Nikita Soshnikov</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Brandon McMillan</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Dean Kukan</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Morgan Ellis</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jordan Martinook</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Antoine Roussel</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Tom Kuhnhackl</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Zach Trotman</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jeff Carter</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Timur Bilyalov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 775 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 815 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 775 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 815 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Rogers Place</td></tr>
<tr><td>Level 1: </td><td>5000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>4839 - 110 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 85 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 330 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>16839</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>85 950 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>85 950 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 378 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 378 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>409 286 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>12 788 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>421 190 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>88 449 900 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>20 852 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 878 472 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>92 328 372 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>85 950 060 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>1 049 990 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>18 950 010 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>35 499 940 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(56 828 432 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Taylor Hall</td>
<td>8 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 250 000 $</td></tr>
<tr><td>Sam Gagner</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Brendan Gallagher</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Kailer Yamamoto</td>
<td>5 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Matt Hackett</td>
<td>4 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Anton Slepyshev</td>
<td>4 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td>Colten Teubert</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Cody Ceci</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Cédric Paquette</td>
<td>3 700 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 700 000 $</td></tr>
<tr><td>Tobias Rieder</td>
<td>3 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td>Martin Marincin</td>
<td>3 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td>Ville Husso</td>
<td>3 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Martin Gernat</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Jack Dougherty</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Bogdan Yakimov</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Gabriel Vilardi</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Kirby Dach</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Frank Vatrano</td>
<td>2 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Dmitri Samorukov</td>
<td>2 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Henri Jokiharju</td>
<td>2 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Paul Bittner</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Tyler Bunz</td>
<td>1 850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 850 000 $</td></tr>
<tr><td>Cameron Hughes</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Otto Leskinen</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 85 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 66 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 13 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 85 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 66 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 13 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 85 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 66 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 13 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brett Howden</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Dominik Masin</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Kieffer Bellows</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Jared Knight</td>
<td>185 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Samu Perhonen</td>
<td>185 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>J.D. Greenway</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Mikko Vainonen</td>
<td>165 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Patrick Khodorenko</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Michael McLeod</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Tyrell Goulbourne</td>
<td>96 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>96 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>96 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>96 000 $</td></tr>
<tr><td>Libor Hájek</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Philip Tomasino</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Shane Pinto</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jakub Lauko</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Marco Rossi</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Andrew Peeke</td>
<td>87 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Jimmy Huntington</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Keaton Middleton</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Alex Lintuniemi</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dillon Simpson</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Matthew Spencer</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Olivier Roy</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Andrej Nestrasil</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Stephon Williams</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 378 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 975 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 378 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 975 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">FLA Live Arena</td></tr>
<tr><td>Level 1: </td><td>6500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 85 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2250 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 300 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>19250</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>87 175 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>87 175 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 005 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 005 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 950 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(2 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>415 119 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>5 403 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>434 167 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>91 175 070 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>10 511 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>1 955 046 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>93 130 116 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>85 174 990 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>1 825 060 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>18 174 940 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>127 745 468 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>34 615 352 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Steven Stamkos</td>
<td>9 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td>Aaron Ekblad</td>
<td>9 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>8 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Jonathan Huberdeau</td>
<td>8 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Aleksander Barkov</td>
<td>6 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Claude Giroux</td>
<td>6 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Travis Sanheim</td>
<td>5 750 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>5 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Shea Theodore</td>
<td>4 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 600 000 $</td></tr>
<tr><td>Christian Dvorak</td>
<td>4 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Brendan Perlini</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Sean Walker</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Maxime Lajoie</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Brandon Tanev</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Casey DeSmith</td>
<td>2 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Jake Evans</td>
<td>2 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>K'Andre Miller</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Max Jones</td>
<td>925 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>925 000 $</td></tr>
<tr><td>MacKenzie MacEachern</td>
<td>0 $ (0)</td></tr>
<tr><td>Joel Edmundson</td>
<td>0 $ (0)</td></tr>
<tr><td>Ryan O'Reilly</td>
<td>0 $ (0)</td></tr>
<tr><td>Tobias Enstrom</td>
<td>0 $ (0)</td></tr>
<tr><td>Tyler Bozak</td>
<td>0 $ (0)</td></tr>
<tr><td>Jacob De La Rose</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 87 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 66 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 25 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 21 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 87 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 66 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 25 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 21 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 87 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 66 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 25 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 21 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Joel Hanley</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Keith Petruzzelli</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Michael McNiven</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Linus Lindstrom</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dylan Coghlan</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Matej Pekar</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Lucas Elvenes</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jonathan Gruden</td>
<td>82 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Tanner Kaspick</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Aapeli Rasanen</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Alexei Marchenko</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Gemel Smith</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Joakim Nygard</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alan Quine</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Seth Griffith</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Adam Janosik</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Greg Pateryn</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alex Velischek</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Ryan Tesink</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Andrej Sustr</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Ben Harpur</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Patrick Bjorkstrand</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Beau Bennett</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Peter Cehlarik</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alex Biega</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 005 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 292 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 005 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 292 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Staples Center</td></tr>
<tr><td>Level 1: </td><td>6118 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18118</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>85 700 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>85 860 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 855 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 855 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>408 857 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>9 973 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>420 000 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>88 200 000 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>20 726 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 855 036 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>92 055 036 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>85 859 970 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>1 140 080 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>18 859 920 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>163 010 223 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>70 955 187 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Drew Doughty</td>
<td>9 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 750 000 $</td></tr>
<tr><td>Anze Kopitar</td>
<td>9 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td>Jeff Skinner</td>
<td>8 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Kevin Fiala</td>
<td>7 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Danton Heinen</td>
<td>6 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Michael Del Zotto</td>
<td>6 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Jake DeBrusk</td>
<td>4 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Mark Pysyk</td>
<td>4 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Ilya Samsonov</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Mathieu Joseph</td>
<td>3 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td>Rasmus Andersson</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Michael McCarron</td>
<td>2 700 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 860 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 860 000 $</td></tr>
<tr><td>Andreas Johnsson</td>
<td>2 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Victor Mete</td>
<td>2 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Keegan Kanzig</td>
<td>2 100 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Dante Fabbro</td>
<td>2 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Nicolas Roy</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Pierre Engvall</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Luke Kunin</td>
<td>1 700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>Justin Dowling</td>
<td>800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>800 000 $</td></tr>
<tr><td>Benjamin Conz</td>
<td>0 $ (0)</td></tr>
<tr><td>Anders Bjork</td>
<td>0 $ (0)</td></tr>
<tr><td>Kevin Shattenkirk</td>
<td>0 $ (0)</td></tr>
<tr><td>Caleb Jones</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 85 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 69 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 49 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 24 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 85 860 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 69 460 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 49 160 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 23 860 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 85 860 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 69 460 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 49 160 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 23 860 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ben Hutton</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Mitchell Stephens</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Joachim Blichfeld</td>
<td>155 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>155 000 $</td></tr>
<tr><td>Garrett Pilon</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Ross Colton</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Ryan Shea</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Boris Katchouk</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ivan Lodnia</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Maxim Sushko</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Sergei Zborovsky</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nicolas Beaudin</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Oleg Sosunov</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Riley Tufte</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Emil Bemstrom</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Mikey Eyssimont</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Mike Robinson</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Brent Gates</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Max Hermens</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Joonas Korpisalo</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Brendan Gaunce</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Antti Niemi</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 855 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 855 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Xcel Energy Center</td></tr>
<tr><td>Level 1: </td><td>6568 - 127 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 90 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 68 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 44 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 188 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18568</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>74 100 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>74 100 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 365 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 365 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 400 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>352 857 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>12 715 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>364 762 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>76 600 020 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>17 554 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 265 044 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>79 865 064 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>74 099 970 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>12 900 080 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>7 099 920 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(5 088 119 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(84 953 183 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>9 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Mark Stone</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Thatcher Demko</td>
<td>6 800 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 800 000 $</td></tr>
<tr><td>Anthony Cirelli</td>
<td>6 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Denis Guryanov</td>
<td>6 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Ryan Murray</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Morgan Klimchuk</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Mikhail Grigorenko</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Ryan Murphy</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Tyler Wotherspoon</td>
<td>4 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 100 000 $</td></tr>
<tr><td>Tyson Barrie</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Alex Barré-Boulet</td>
<td>2 600 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 600 000 $</td></tr>
<tr><td>Dylan Demelo</td>
<td>1 950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Jared Coreau</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>John Hayden</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Lane Pederson</td>
<td>1 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>Lucas Raymond</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Jordan Harris</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Zack Phillips</td>
<td>0 $ (0)</td></tr>
<tr><td>Derek Forbort</td>
<td>0 $ (0)</td></tr>
<tr><td>Evan Rodrigues</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 74 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 51 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 43 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 33 800 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 74 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 51 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 43 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 33 800 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 74 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 51 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 43 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 33 800 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Sebastian Collberg</td>
<td>195 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>John Leonard</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Christophe Lalancette</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Denis Godla</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Sam Carrick</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Adam Ginning</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Charles-Olivier Roussel</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Ivan Chekhovich</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Cale Fleury</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Brycen Martin</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Justin Almeida</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Igor Bobkov</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Sebastian Repo</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Gustav Lindstrom</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>John Marino</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Yegor Sharangovich</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Brett Leason</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Austin Lemieux</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Devin Shore</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nikita Filatov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nick Seeler</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nick Sorensen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Tyler Graovac</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Antoine Bibeau</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Daniil Zharkov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 365 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 330 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 315 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 365 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 330 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 315 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Bell Centre</td></tr>
<tr><td>Level 1: </td><td>7273 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2500 - 90 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4500 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1500 - 350 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>21273</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 10 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>72 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>72 050 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 687 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 687 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>343 095 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>14 449 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>353 810 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>74 300 100 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>18 481 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 437 466 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>77 737 566 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>72 049 950 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>14 950 100 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>5 049 900 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>295 014 368 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>217 276 802 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sean Monahan</td>
<td>9 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Alex Pietrangelo</td>
<td>9 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Filip Forsberg</td>
<td>8 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Michal Neuvirth</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Jakub Vrana</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Julius Honka</td>
<td>5 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>William Carrier</td>
<td>5 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Brendan Lemieux</td>
<td>4 700 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td>Lawson Crouse</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Conner Bleackley</td>
<td>2 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Simon Despres</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Tim Erixon</td>
<td>1 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>Mikey Anderson</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Oskari Laaksonen</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Oscar Dansk</td>
<td>0 $ (0)</td></tr>
<tr><td>Fredrik Claesson</td>
<td>0 $ (0)</td></tr>
<tr><td>Noel Acciari</td>
<td>0 $ (0)</td></tr>
<tr><td>Jordan Oesterle</td>
<td>0 $ (0)</td></tr>
<tr><td>Adam Henrique</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 72 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 51 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 50 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 42 950 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 72 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 51 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 50 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 42 950 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 72 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 51 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 50 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 42 950 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Joel Kiviranta</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Joseph Duszak</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Mathias From</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Joseph Labate</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Jeffrey Viel</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Daniel Vladar</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jared Davidson</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Rory Kerins</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Michael Pezzetta</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jack Studnicka</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Alexis Shank</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Brian Halonen</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Elmer Söderblom</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Cédric Desruisseaux</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Scott Sabourin</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nathan Staios</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Thomas Casey</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Dakota Mermis</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Isaak Phillips</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Clay Hanus</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jack Dugan</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Florian Elias</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Cory Schneider</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jonathan Audy-Marchessault</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Francis Beauvillier</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Magnus Paajarvi</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Keaton Ellerby</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 687 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 160 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 285 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 687 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 160 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 285 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Bridgestone Arena</td></tr>
<tr><td>Level 1: </td><td>5113 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 110 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 70 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 350 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>17113</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>87 100 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>87 100 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 457 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 457 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>414 762 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>7 836 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>431 429 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>90 600 090 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>18 589 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 457 554 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>94 057 644 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>87 100 020 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td><span style="color:red">-99 970 $</span></td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>20 099 970 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>75 893 194 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(18 164 450 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Carter Hart</td>
<td>10 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td>Mitchell Marner</td>
<td>9 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td>Nick Suzuki</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Alexander Burmistrov</td>
<td>6 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Sam Reinhart</td>
<td>6 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Nic Petan</td>
<td>6 200 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 200 000 $</td></tr>
<tr><td>Dmitri Orlov</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Justin Faulk</td>
<td>5 850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 850 000 $</td></tr>
<tr><td>Colton Parayko</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Tristan Jarry</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Drake Batherson</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Jarred Tinordi</td>
<td>3 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Adam Pelech</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Brett Pollock</td>
<td>2 900 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td>Trevor Moore</td>
<td>2 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Nicholas Caamano</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Logan Brown</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Tage Thompson</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Anders Lee</td>
<td>0 $ (0)</td></tr>
<tr><td>Connor Murphy</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 87 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 73 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 55 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 36 850 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 87 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 73 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 55 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 36 850 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 87 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 73 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 55 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 36 850 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Karson Kuhlman</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Jonas Johansson</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Cristoval Nieves</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Mark Jankowski</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Morgan Barron</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Alexei Toropchenko</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Jaxson Stauber</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Josh Dunne</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alex Turcotte</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Cole Guttman</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jaydon Dureau</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jan Drozg</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Cole Clayton</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Ian Cole</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Luke Adam</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Radim Simek</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Darcy Kuemper</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Ryan Carpenter</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Mitch Moroz</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Robert Hagg</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Michael Chaput</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Reilly Smith</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Marc-Olivier Roy</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Miikka Salomäki</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Kyle Platzer</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dylan Blujus</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Harri Sateri</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Stefan Noesen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 457 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 285 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 457 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 285 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Prudential Center</td></tr>
<tr><td>Level 1: </td><td>5625 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 350 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>17625</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>63 700 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>62 616 667 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>962 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>962 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>298 175 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>5 175 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>322 381 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>67 700 010 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>10 551 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>1 962 486 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>69 662 496 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>62 616 750 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>24 383 300 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td><span style="color:red">-4 383 300 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>89 097 424 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>19 434 928 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jacob Trouba</td>
<td>8 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td>Adam Erne</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Ilya Sorokin</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 166 667 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 166 667 $</td></tr>
<tr><td>Artemi Panarin</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Will Butcher</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>German Rubtsov</td>
<td>4 300 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td>Travis Dermott</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Steven Santini</td>
<td>3 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td>Adam Gaudette</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Dysin Mayo</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Nolan Patrick</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Roope Hintz</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Gabriel Carlsson</td>
<td>2 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Jason Dickinson</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Malcolm Subban</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Taylor Raddysh</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Evan Barratt</td>
<td>1 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td>Taro Hirose</td>
<td>1 400 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td>Jacob Middleton</td>
<td>1 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>James Neal</td>
<td>0 $ (0)</td></tr>
<tr><td>Evander Kane</td>
<td>0 $ (0)</td></tr>
<tr><td>Tuukka Rask</td>
<td>0 $ (0)</td></tr>
<tr><td>Brian Dumoulin</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 63 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 57 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 27 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 11 300 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 62 616 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 54 616 667 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 25 216 667 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 9 466 667 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 62 616 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 54 616 667 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 25 216 667 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 9 466 667 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jakob Silfverberg</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Jackson Houck</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Andrew Fritsch</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Lucas Lessio</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Brayden Burke</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Benjamin Finkelstein</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Simon Benoît</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ivan Prosvetov</td>
<td>82 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Anatoli Golyshev</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Brad Malone</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Adam Polasek</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jeremy Smith</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Andrew Agozzino</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alex Chiasson</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Andrej Bykov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alex Grant</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Lukas Sutter</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Zach Hall</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Andrey Zubarev</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>19</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 962 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 295 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 962 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 295 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">UBS Arena</td></tr>
<tr><td>Level 1: </td><td>5000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>4250 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>16250</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>89 950 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>89 950 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 596 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 596 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 300 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>428 333 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>8 583 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>442 619 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>92 949 990 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>15 573 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>2 896 578 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>95 846 568 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>89 949 930 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td><span style="color:red">-2 949 880 $</span></td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>22 949 880 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>781 730 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(95 064 838 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Cale Makar</td>
<td>8 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Darnell Nurse</td>
<td>8 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Braden Holtby</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Andrei Svechnikov</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Zach Bogosian</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Scott Harrington</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Cole Cassels</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Jesper Bratt</td>
<td>4 850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 850 000 $</td></tr>
<tr><td>Cal Foote</td>
<td>4 700 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td>Martin Reway</td>
<td>4 650 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td>Steve Mason</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Saku Maenalanen</td>
<td>4 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td>Vince Hinostroza</td>
<td>4 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Jake Virtanen</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Jaedon Descheneau</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Joakim Ryan</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Shayne Gostisbehere</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Carter Verhaeghe</td>
<td>1 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Joel Eriksson Ek</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Mitch Holmberg</td>
<td>0 $ (0)</td></tr>
<tr><td>Sean Malone</td>
<td>0 $ (0)</td></tr>
<tr><td>Kevin Hayes</td>
<td>0 $ (0)</td></tr>
<tr><td>Yan-Pavel Laplante</td>
<td>0 $ (0)</td></tr>
<tr><td>Maxim Mamin</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 53 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 31 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 21 700 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 53 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 31 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 21 700 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 53 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 31 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 21 700 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Christopher Clapperton</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Jake Paterson</td>
<td>156 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>156 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>156 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>156 500 $</td></tr>
<tr><td>Brett Seney</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jonathan Dahlen</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Julien Gauthier</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Brandon Gignac</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Victor Antipin</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Colton White</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Matthew Phillips</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Filip Ahl</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jérémy Roy</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Blake Siebenaler</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Vili Saarijärvi</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Shamil Shmakov</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Matthew Bradley</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Julius Bergman</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alexandre Bélanger</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dylan Olsen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Kirill Kabanov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Stephen Johns</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Brenden Kichton</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Frans Nielsen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dion Phaneuf</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nico Sturm</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 596 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 596 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Madison Square Garden</td></tr>
<tr><td>Level 1: </td><td>5200 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 90 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>17200</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>89 200 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>88 700 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>3 059 200 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>3 069 200 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 550 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>422 381 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>16 501 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>435 952 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>91 549 920 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>22 899 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>4 259 214 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>95 809 134 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>88 700 010 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td><span style="color:red">-1 699 960 $</span></td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>21 699 960 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>131 664 852 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>35 855 718 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brayden Point</td>
<td>9 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 750 000 $</td></tr>
<tr><td>Andrey Vasilevskiy</td>
<td>8 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Travis Konecny</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Dylan Cozens</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Ryan McDonagh</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Denis Malgin</td>
<td>6 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Gustav Forsling</td>
<td>5 750 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Tyler Bertuzzi</td>
<td>5 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Jakob Chychrun</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Brandon Carlo</td>
<td>4 700 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td>Ivan Provorov</td>
<td>4 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Viktor Arvidsson</td>
<td>3 350 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 350 000 $</td></tr>
<tr><td>Adin Hill</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Jake McCabe</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Ryan Donato</td>
<td>2 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Jason Robertson</td>
<td>2 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Nikolay Goldobin</td>
<td>2 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Christian Fischer</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Henrik Borgstrom</td>
<td>1 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Glenn Gawdin</td>
<td>0 $ (0)</td></tr>
<tr><td>Eric Robinson</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 75 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 74 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 59 950 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 88 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 75 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 75 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 60 950 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 88 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 75 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 75 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 60 950 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Vladislav Gavrikov</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Josh Mahura</td>
<td>160 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Michael DiPietro</td>
<td>155 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>155 000 $</td></tr>
<tr><td>Trent Frederic</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Rasmus Sandin</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Pierre-Olivier Joseph</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>William Lagesson</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Felix Sandström</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Stuart Skinner</td>
<td>146 700 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>146 700 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>146 700 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>146 700 $</td></tr>
<tr><td>Josh Norris</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Andrei Altybarmakyan</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Scott Walford</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Conor Timmins</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Tyson Foerster</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alex Formenton</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Evan Bouchard</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Nick Robertson</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Moritz Seider</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Dawson Mercer</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Morgan Frost</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Walker Duehr</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ryan Poehling</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Aidan Dudas</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Lauri Pajuniemi</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Filip Westerlund</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Cam Hillis</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Spencer Watson</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Joseph Blandisi</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jeremy Bracco</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>29</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 059 200 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 291 700 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 146 700 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 069 200 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 281 700 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 146 700 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Centre Canadian Tire</td></tr>
<tr><td>Level 1: </td><td>8500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2153 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>21153</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 115 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 70 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>79 860 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>79 860 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 715 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 680 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 750 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>380 286 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>9 032 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>392 190 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>82 359 900 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>15 941 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>2 965 026 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>85 324 926 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>79 860 060 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>7 139 990 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>12 860 010 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>52 556 113 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(32 768 813 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Ovechkin</td>
<td>8 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Erik Karlsson</td>
<td>8 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Dylan Larkin</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Elias Pettersson</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Robin Lehner</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Mika Zibanejad</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Jared Cowen</td>
<td>4 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>4 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td>Nick Cousins</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Dylan McIlrath</td>
<td>3 850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 850 000 $</td></tr>
<tr><td>Kyle Clifford</td>
<td>3 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Andrey Kuzmenko</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Dmitrij Jaskin</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Conor Sheary</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Ilya Konovalov</td>
<td>2 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Raman Hrabarenka</td>
<td>2 210 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 210 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 210 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 210 000 $</td></tr>
<tr><td>Nils Lundkvist</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Stefan Elliott</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Garret Sparks</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Vladimir Tkachev</td>
<td>0 $ (0)</td></tr>
<tr><td>Aaron Ness</td>
<td>0 $ (0)</td></tr>
<tr><td>Nick Paul</td>
<td>0 $ (0)</td></tr>
<tr><td>Tanner Pearson</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 79 860 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 43 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 17 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 8 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 79 860 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 43 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 17 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 8 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 79 860 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 43 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 17 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 8 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andrew Nielsen</td>
<td>197 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>197 500 $</td></tr>
<tr><td>Matt Puempel</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Brinson Pasichnuk</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Tanner Jeannot</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jayden Halbgewachs</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Cody Donaghey</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Yevgeni Alikin</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kole Lind</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Arttu Ruotsalainen</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Anton Krasotkin</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Hunter Drew</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Aarne Talvitie</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>50 000 $</td></tr>
<tr><td>Mac Hollowell</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jack Bar</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Jack Gorniak</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Jakob Ragnarsson</td>
<td>72 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>72 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>72 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>72 500 $</td></tr>
<tr><td>Louick Marcotte</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Maxwell Reinhart</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Wayne Simmonds</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jerry D'Amigo</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Kevin Roy</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jérémy Grégoire</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Chase De Leo</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Mason Geertsen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jayson Megna</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 715 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 165 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 680 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 165 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Wells Fargo Center</td></tr>
<tr><td>Level 1: </td><td>7500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6500 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2500 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>7000 - 80 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1500 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>25000</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>85 160 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>85 160 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 250 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 250 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 200 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(4 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>405 524 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>6 720 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>415 048 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>87 160 080 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>13 172 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>2 449 992 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>89 610 072 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>81 160 040 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>5 840 010 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>14 159 990 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>292 762 158 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>203 152 086 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nikita Kucherov</td>
<td>9 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td>Jack Hughes</td>
<td>8 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Josh Morrissey</td>
<td>8 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Logan Couture</td>
<td>7 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 300 000 $</td></tr>
<tr><td>Tim Stützle</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Adam Larsson</td>
<td>6 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Brandon Saad</td>
<td>6 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Alex Petrovic</td>
<td>5 150 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 150 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 150 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 150 000 $</td></tr>
<tr><td>Jeremy Swayman</td>
<td>4 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Kirill Kaprizov</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Brendan Smith</td>
<td>3 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td>Marc Staal</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Paul Stastny</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Max Pacioretty</td>
<td>2 210 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 210 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 210 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 210 000 $</td></tr>
<tr><td>Reid Boucher</td>
<td>1 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Samuel Blais</td>
<td>1 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Matt Luff</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Markus Niemelainen</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td>Seth Jarvis</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Jake Sanderson</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>J.T. Miller</td>
<td>0 $ (0)</td></tr>
<tr><td>Victor Olofsson</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 85 160 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 44 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 40 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 32 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 85 160 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 44 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 40 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 32 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 85 160 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 44 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 40 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 32 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Fredrik Karlström</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Daniel Brickley</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Chris Martenet</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jens Lööke</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Keegan Kolesar</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kirill Kirsanov</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jakub Kovar</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Mike Winther</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Michael Parks</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Drew Shore</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Zach Budish</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Alexis Loiseau</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Alexandre Mallet</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Radovan Bondra</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Brendan Ranford</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Teemu Eronen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Anthony Brodeur</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Brian Lashoff</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jordie Benn</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Peter Mueller</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Gerald Mayhew</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Kyle Okposo</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Byron Froese</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Corey Schueneman</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 565 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 90 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 565 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 90 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">PPG Paints Arena</td></tr>
<tr><td>Level 1: </td><td>6387 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18387</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 900 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 800 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>74 500 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>74 500 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>3 445 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>3 445 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>354 762 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>18 522 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>371 429 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>78 000 090 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>26 586 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>4 944 996 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>82 945 086 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>74 500 020 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>12 500 030 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>7 499 970 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>661 990 390 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>579 045 304 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Anthony DeAngelo</td>
<td>6 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Neal Pionk</td>
<td>6 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Jamie McBain</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>John Gibson</td>
<td>5 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Michael Dal Colle</td>
<td>5 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Colin White</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Tyson Jost</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Travis Brown</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Alexander Nylander</td>
<td>3 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td>Mike Matheson</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Ryan Strome</td>
<td>3 200 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Troy Stecher</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Kaapo Kähkönen</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Oliver Kylington</td>
<td>2 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Conor Garland</td>
<td>2 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Matt Benning</td>
<td>2 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>2 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Zachary Senyshyn</td>
<td>1 950 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Pius Suter</td>
<td>1 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>Patric Hornqvist</td>
<td>0 $ (0)</td></tr>
<tr><td>Nikita Scherbak</td>
<td>0 $ (0)</td></tr>
<tr><td>Vincent Trocheck</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 74 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 53 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 31 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 25 900 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 74 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 53 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 31 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 25 900 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 74 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 53 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 31 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 25 900 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Julius Nättinen</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Noah Gregor</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Alexander Delnov</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Janne Kuokkanen</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Dillon Dube</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>David Griger</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Mikhail Maltsev</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Josef Korenar</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Kale Clague</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Nicolas Hague</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Lucas Wallmark</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Alexander Volkov</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Alex Limoges</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Alexis Gravel</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Axel Andersson</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Kevin Klima</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Daniil Miromanov</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Alex Steeves</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Riley Kidney</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Dmitri Nikolayev</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Daniil Chayka</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Matej Blümel</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ostap Safin</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Reid Duke</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Leo Lööf</td>
<td>77 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Ryan Pulock</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Andrew O'Brien</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Casey Fitzgerald</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Charlie Lindgren</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nathan Smith</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>30</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 445 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 612 500 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 445 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 612 500 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Colisée Pepsi</td></tr>
<tr><td>Level 1: </td><td>6000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4176 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>20176</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>70 820 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>68 320 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 182 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 182 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>325 333 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>11 734 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>351 524 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>73 820 040 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>19 798 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 682 428 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>77 502 468 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>68 319 930 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>18 680 120 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>1 319 880 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>170 792 562 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>93 290 094 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Joel Farabee</td>
<td>10 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Marc-Edouard Vlasic</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Nicklas Backstrom</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Adrian Kempe</td>
<td>5 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Bobby Ryan</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Carson Soucy</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Kevin Poulin</td>
<td>3 970 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 970 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 970 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 970 000 $</td></tr>
<tr><td>Maxime Comtois</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Gabriel Gagné</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Mike Reilly</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Logan Stanley</td>
<td>2 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Sean Durzi</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Isaac Ratcliffe</td>
<td>1 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Yakov Trenin</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Juuso Välimäki</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Philipp Kurashev</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Frédéric Allard</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td>Mason McDonald</td>
<td>1 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td>Dmitry Sokolov</td>
<td>1 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td>Jake Bean</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Matt Boldy</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Oskar Steen</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Morgan Geekie</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Logan O'Connor</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 70 820 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 53 520 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 23 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 13 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 68 320 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 51 020 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 24 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 14 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 68 320 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 51 020 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 24 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 14 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Logan Thompson</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Nate Schnarr</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Gavin Bayreuther</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Austin Strand</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Marian Studenic</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Brett Lernout</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Bobby Trivigno</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Nick Perbix</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>J.J. Moser</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Mack Guzda</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Xavier Parent</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Callum Booth</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Pierrick Dubé</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Declan McDonnell</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Rémi Poirier</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Johnny Kovacevic</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Stelio Mattheos</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Filip Kral</td>
<td>77 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Josh Brook</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Jack Perbix</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Maxim Cajkovic</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Dovar Tinling</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Jordan Kawaguchi</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Arvid Henrikson</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Cameron Wright</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 182 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 555 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 315 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 182 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 555 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 315 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">SAP Center</td></tr>
<tr><td>Level 1: </td><td>7500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6500 - 122 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>4000 - 72 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 62 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>3000 - 230 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>25000</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 32 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 14 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>80 200 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>80 450 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 750 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 750 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 250 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>383 095 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>14 785 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>393 810 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>82 700 100 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>18 817 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 499 962 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>86 200 062 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>80 449 950 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>6 550 100 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>13 449 900 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>257 242 478 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>171 042 416 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex DeBrincat</td>
<td>7 750 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 750 000 $</td></tr>
<tr><td>Timo Meier</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Sam Bennett</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Noah Dobson</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Alex Nedeljkovic</td>
<td>5 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>A.J. Greer</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Jack Roslovic</td>
<td>4 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 900 000 $</td></tr>
<tr><td>Trevor Murphy</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Ethan Bear</td>
<td>3 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 900 000 $</td></tr>
<tr><td>Francis Perron</td>
<td>3 600 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td>Warren Foegele</td>
<td>3 600 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td>Joey Anderson</td>
<td>3 300 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td>Alexandre Fortin</td>
<td>3 200 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Julien Nantel</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Christian Wolanin</td>
<td>2 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Philippe Myers</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Antoine Waked</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Maxime St-Cyr</td>
<td>1 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Chase Marchand</td>
<td>1 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Jérémy Lauzon</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Manuel Wiederer</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Bowen Byram</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Artturi Lehkonen</td>
<td>0 $ (0)</td></tr>
<tr><td>Keith Yandle</td>
<td>0 $ (0)</td></tr>
<tr><td>Jason Demers</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 80 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 68 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 60 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 47 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 80 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 68 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 60 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 46 700 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 80 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 68 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 60 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 46 700 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Bruno-Carl Denis</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Rafaël Harvey-Pinard</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Samuel Harvey</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Justin Bergeron</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Zachary Emond</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Jean-Christophe Beaudin</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Samuel Regis</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Peter Abbandonato</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Alex Beaucage</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Joel Teasdale</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Félix Bibeau</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Jacob Neveu</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Cutter Gauthier</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Evan Nause</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Logan Cooley</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Cam York</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Noah Warren</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>William Dufour</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ty Gallagher</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Mathieu Gagnon</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Alexis Arsenault</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Vincent Marleau</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Zachary Lauzon</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Patrik Hamrla</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>William Rouleau</td>
<td>75 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 2 172 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 755 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 75 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 2 172 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 755 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 75 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#SeattleKraken">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Climate Pledge Arena</td></tr>
<tr><td>Level 1: </td><td>5500 - 145 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 120 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>5000 - 72 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>6000 - 57 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>3000 - 365 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>25000</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 250 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 225 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>89 385 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>89 385 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>3 235 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>3 235 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 200 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>425 643 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>17 392 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>437 548 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>91 885 080 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>26 532 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>4 934 952 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>96 820 032 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>89 385 030 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td><span style="color:red">-2 384 980 $</span></td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>22 384 980 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>126 644 265 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>29 824 233 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Johansen</td>
<td>7 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Quinn Hughes</td>
<td>7 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Jordan Staal</td>
<td>7 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td>Juuse Saros</td>
<td>7 150 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 150 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 150 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 150 000 $</td></tr>
<tr><td>Erik Gudbranson</td>
<td>6 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Phillip Danault</td>
<td>4 700 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td>Linus Ullmark</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Ryan MacInnis</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Cole Ully</td>
<td>4 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td>Kasperi Kapanen</td>
<td>4 125 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 125 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 125 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 125 000 $</td></tr>
<tr><td>Sergey Tolchinsky</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Martin Necas</td>
<td>3 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td>Vladislav Kamenev</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Justin Kloos</td>
<td>2 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td>Frank Corrado</td>
<td>2 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Garnet Hathaway</td>
<td>2 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Alex Iafallo</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Scott Kosmachuk</td>
<td>2 400 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Nick Jensen</td>
<td>2 010 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 010 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 010 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 010 000 $</td></tr>
<tr><td>Mirco Mueller</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Brendan Guhle</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Eeli Tolvanen</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Patrick Kane</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 385 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 55 225 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 23 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 14 650 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 385 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 55 225 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 23 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 14 650 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 89 385 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 55 225 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 23 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 14 650 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alex Lyon</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Dominik Bokk</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Filip Berglund</td>
<td>197 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>197 500 $</td></tr>
<tr><td>Wyatt Kalynuk</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Connor Bunnaman</td>
<td>170 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Parker Kelly</td>
<td>170 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>David Quenneville</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Kole Sherwood</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Filip Chlapik</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Adam Wilsby</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Sean Day</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Luke Green</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Matthew Villalta</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Pontus Holmberg</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Troy Terry</td>
<td>97 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Artyom Galimov</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Gabriel Fortier</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Braydyn Chizen</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jett Woo</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Daniil Tarasov</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Lucas Feuk</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Mathias Emilio Pettersen</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Kacper Bartnik</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Arnaud Durandeau</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Nikolai Hakala</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>William Lockwood</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Anthony Salinitri</td>
<td>50 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>50 000 $</td></tr>
<tr><td>Brett Murray</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 235 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 535 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 375 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 235 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 535 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 375 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Enterprise Center</td></tr>
<tr><td>Level 1: </td><td>9000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6500 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3150 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>5000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>24650</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 650 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 500 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>55 250 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>57 208 334 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 765 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 765 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 600 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>1 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>272 421 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>14 866 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>270 714 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>56 849 940 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>20 242 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 765 012 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>60 614 952 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>58 208 410 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>28 791 640 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td><span style="color:red">-8 791 640 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>432 457 503 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>371 842 551 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jaroslav Halak</td>
<td>6 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Alexander Urbom</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Valentin Zykov</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Antti Suomela</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Dillon Heatherington</td>
<td>3 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 900 000 $</td></tr>
<tr><td>Calvin de Haan</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Marek Mazanec</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Alex Tuch</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Griffin Reinhart</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Charles Hudon</td>
<td>2 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td>Noah Rod</td>
<td>2 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Jake Dotchin</td>
<td>2 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Anthony Angello</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Connor Carrick</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Filip Gustavsson</td>
<td>2 250 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 208 334 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 208 334 $</td></tr>
<tr><td>Brock Nelson</td>
<td>1 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Daniel Bernhardt</td>
<td>1 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>Jesper Boqvist</td>
<td>1 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td>Michael Mersch</td>
<td>0 $ (0)</td></tr>
<tr><td>Maxim Shalunov</td>
<td>0 $ (0)</td></tr>
<tr><td>Nikita Nesterov</td>
<td>0 $ (0)</td></tr>
<tr><td>Austin Watson</td>
<td>0 $ (0)</td></tr>
<tr><td>Sven Andrighetto</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 55 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 40 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 23 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 12 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 57 208 334 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 41 508 334 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 24 658 334 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 11 958 334 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 57 208 334 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 41 508 334 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 24 658 334 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 11 958 334 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Marcus Hogberg</td>
<td>195 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Dennis Cholowski</td>
<td>195 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Eetu Luostarinen</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Vitali Abramov</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Mason Appleton</td>
<td>165 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Michael Paliotta</td>
<td>165 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Givani Smith</td>
<td>160 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Declan Chisholm</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Vilmos Gallo</td>
<td>130 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Joonas Donskoi</td>
<td>127 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>127 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>127 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>127 500 $</td></tr>
<tr><td>Steve Weinstein</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Peter Stoykewych</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Ryan McAllister</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Sean Kuraly</td>
<td>122 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>122 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>122 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>122 500 $</td></tr>
<tr><td>Connor Ingram</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Michael Vukojevic</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Otto Koivula</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ben McCartney</td>
<td>87 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Ralfs Freibergs</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Adam Ruzicka</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ivan Ivan</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Mark Barberio</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Tye Felhaber</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Niklas Hansson</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dennis Yan</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Blake Speers</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Christopher Tanev</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 765 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 135 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 645 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 130 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 765 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 135 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 645 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 130 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Amalie Arena</td></tr>
<tr><td>Level 1: </td><td>7000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6000 - 120 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3000 - 70 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4500 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>2000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>22500</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>80 025 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>80 525 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 712 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 712 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>383 452 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>9 207 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>404 881 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>85 025 010 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>9 207 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>1 712 502 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>86 737 512 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>80 524 920 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>6 475 130 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>13 524 870 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>303 402 210 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>216 664 698 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Auston Matthews</td>
<td>9 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Jack Eichel</td>
<td>9 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 250 000 $</td></tr>
<tr><td>P.K. Subban</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 750 000 $</td></tr>
<tr><td>Noah Hanifin</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Nikita Zadorov</td>
<td>6 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Jacob Josefson</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Miro Heiskanen</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Casey Mittelstadt</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Josh Ho-Sang</td>
<td>4 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Esa Lindell</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Brett Ritchie</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Jayce Hawryluk</td>
<td>2 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Jordan Weal</td>
<td>2 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Ken Appleby</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Tucker Poolman</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Pavel Padakin</td>
<td>1 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Spencer Knight</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Austin Wagner</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Alex Newhook</td>
<td>925 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>925 000 $</td></tr>
<tr><td>Andreas Athanasiou</td>
<td>0 $ (0)</td></tr>
<tr><td>Mads Eller</td>
<td>0 $ (0)</td></tr>
<tr><td>Bryan Rust</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 80 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 62 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 46 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 27 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 80 525 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 62 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 45 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 26 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 80 525 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 62 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 45 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 26 750 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alexandre Carrier</td>
<td>160 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Riley Stadel</td>
<td>155 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>155 000 $</td></tr>
<tr><td>Ty Dellandrea</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Dylan Samberg</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Marat Khusnutdinov</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Lukas Cormier</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Isak Rosén</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Luke Evangelista</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>William Strömgren</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Braden Schneider</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Kaedan Korczak</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Antonio Stranges</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Dryden McKay</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Patrick Moynihan</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ruslan Iskhakov</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Miroslav Svoboda</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Magnus Chrona</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Freddie Hamilton</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Brandon Burlon</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Patrick Holland</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Matt Schmalz</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nick Ebert</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Marcus Kruger</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Pontus Aberg</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dmytro Timashov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nicolas Aubé-Kubel</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Anders Lindback</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Johnathan MacLeod</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Robbie Russo</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>29</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 712 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 047 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 347 500 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 712 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 047 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 347 500 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scotiabank Arena</td></tr>
<tr><td>Level 1: </td><td>6500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5319 - 110 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 55 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 350 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18819</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>250 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1237 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>1487</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>72 200 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>72 200 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 865 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 865 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>900 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>500 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>343 810 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>10 027 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>343 810 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>72 200 100 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>14 866 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>2 765 076 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>74 965 176 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>72 700 100 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>14 299 950 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>5 700 050 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>111 395 962 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>36 430 786 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mikko Rantanen</td>
<td>9 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Sebastian Aho</td>
<td>9 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Brayden Schenn</td>
<td>7 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Morgan Rielly</td>
<td>6 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Mikael Granlund</td>
<td>6 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>T.J. Brennan</td>
<td>5 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 600 000 $</td></tr>
<tr><td>Ville Pokka</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Samuel Girard</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Mikko Koskinen</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Petteri Lindbohm</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Emerson Etem</td>
<td>2 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td>Mikko Lehtonen</td>
<td>2 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Sebastian Aho (D)</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Dominic Turgeon</td>
<td>1 950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Steven Lorentz</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Justin Holl</td>
<td>1 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Joel Armia</td>
<td>0 $ (0)</td></tr>
<tr><td>Teemu Pulkkinen</td>
<td>0 $ (0)</td></tr>
<tr><td>Anthony Stolarz</td>
<td>0 $ (0)</td></tr>
<tr><td>Eric Comrie</td>
<td>0 $ (0)</td></tr>
<tr><td>Marco Scandella</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 72 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 61 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 34 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 29 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 72 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 61 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 34 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 29 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 72 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 61 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 34 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 29 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Olli Juolevi</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Juuso Ikonen</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Veini Vehvilainen</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Petrus Palmu</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Otto Somppi</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Teemu Turunen</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Oliwer Kaski</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Aleksi Saarela</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Eetu Sopanen</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Lassi Thomson</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Kay Schweri</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Joni Jurmo</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Vladislav Kotkov</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Olivier Galipeau</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Markus Granlund</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Vinni Lettieri</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ville Leskinen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Antti Raanta</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>T.J. Oshie</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>David Warsofsky</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Kyle Capobianco</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Christopher Gibson</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jeff Malott</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 865 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 865 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Rogers Arena</td></tr>
<tr><td>Level 1: </td><td>9500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6410 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>2000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>23910</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>87 550 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>87 550 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 552 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 552 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 200 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(3 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>416 905 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>13 723 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>427 381 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>89 750 010 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>13 723 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>2 552 478 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>92 302 488 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>84 550 050 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>2 450 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>17 550 000 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>290 966 412 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>198 663 924 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Connor McDavid</td>
<td>12 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>12 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>12 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>12 750 000 $</td></tr>
<tr><td>Patrik Laine</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Brady Tkachuk</td>
<td>6 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Dougie Hamilton</td>
<td>6 650 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 650 000 $</td></tr>
<tr><td>Matthew Tkachuk</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Max Domi</td>
<td>5 700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 700 000 $</td></tr>
<tr><td>Damon Severson</td>
<td>5 650 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 650 000 $</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>5 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>5 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 300 000 $</td></tr>
<tr><td>Dominik Kubalik</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Mackenzie Blackwood</td>
<td>4 700 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td>Matt Grzelcyk</td>
<td>2 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Mario Ferraro</td>
<td>2 700 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td>Stefan Matteau</td>
<td>2 400 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Cooper Marody</td>
<td>1 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Carl Klingberg</td>
<td>1 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Lean Bergmann</td>
<td>1 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Sami Vatanen</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td>David Rittich</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Ryan McLeod</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Corey Perry</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 87 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 67 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 50 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 27 650 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 87 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 67 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 50 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 27 650 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 87 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 67 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 50 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 27 650 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jake Allen</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Anton Forsberg</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Mattias Backman</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>James Van Riemsdyk</td>
<td>170 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Quinton Howden</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Dillon Fournier</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Nikolay Prokhorkin</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Brandon Halverson</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Trevor Carrick</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Spencer Smallman</td>
<td>110 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Jakub Jerabek</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Ryan Dzingel</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Tyler Soy</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Kelly Klima</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alexis Pepin</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jordan Schmaltz</td>
<td>87 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Mathieu Desgagnés</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Matt Filipe</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Matthew Cairns</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Todd Burgess</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Mac Bennett</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Arturas Laukaitis</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Mattias Tedenby</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Nicklas Jensen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Connor Crisp</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 552 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 110 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 110 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 552 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 110 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 110 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">T-Mobile Arena</td></tr>
<tr><td>Level 1: </td><td>5500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>4800 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2068 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>17368</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 149 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>75 650 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>75 650 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>3 020 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>3 020 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 750 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>5 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>360 238 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>16 237 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>376 905 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>79 150 050 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>22 957 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>4 270 002 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>83 420 052 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>80 649 980 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>6 350 070 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>13 649 930 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>83 644 987 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>224 935 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Justin Schultz</td>
<td>8 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 300 000 $</td></tr>
<tr><td>Pierre-Luc Dubois</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Matt Murray</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Chris Bigras</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Anthony Duclair</td>
<td>6 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 200 000 $</td></tr>
<tr><td>Jake Guentzel</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Ondrej Kase</td>
<td>5 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Brendan Leipsic</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Brandon Gormley</td>
<td>4 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Filip Zadina</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Kaapo Kakko</td>
<td>3 700 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 700 000 $</td></tr>
<tr><td>Jonathan Quick</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Myles Bell</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Spencer Martin</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>David Rundblad</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Juho Lammikko</td>
<td>1 950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Jakub Zboril</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Xavier Ouellet</td>
<td>0 $ (0)</td></tr>
<tr><td>David Kampf</td>
<td>0 $ (0)</td></tr>
<tr><td>Nathan Todd</td>
<td>0 $ (0)</td></tr>
<tr><td>Kevin Rooney</td>
<td>0 $ (0)</td></tr>
<tr><td>Brandon Sutter</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 75 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 63 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 39 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 19 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 75 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 63 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 39 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 19 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 75 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 63 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 39 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 19 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Connor Hurley</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Justin Bailey</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>David Gustafsson</td>
<td>185 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Mike Amadio</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Michael Bunting</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Connor Mackey</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Will Borgen</td>
<td>175 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Connor Clifton</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Brad Morrison</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Kyle Keyser</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Andrew Poturalski</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Sergei Telegin</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Ilya Usov</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Matias Mäntykivi</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Ben Roger</td>
<td>115 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>115 000 $</td></tr>
<tr><td>Aliaksei Protas</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Viktor Neuchev</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Shakir Mukhamadullin</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nathan Légaré</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Cole Schwindt</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Vladislav Kolyachonok</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Vladimir Grudinin</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Pavel Gogolev</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>David Perron</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Ben Bishop</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Dryden Hunt</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Keith Aulie</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 020 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 260 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 805 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 175 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 020 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 1 260 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 805 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 175 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Capital One Arena</td></tr>
<tr><td>Level 1: </td><td>6506 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18506</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>80 900 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>81 650 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>1 942 500 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>1 942 500 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>388 810 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>10 444 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>397 143 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>83 400 030 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>18 508 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>3 442 488 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>86 842 518 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>81 650 100 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>5 349 950 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>14 650 050 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>91 486 037 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>4 643 519 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Carey Price</td>
<td>10 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 500 000 $</td></tr>
<tr><td>Victor Hedman</td>
<td>8 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Johnny Gaudreau</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>William Nylander</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 750 000 $</td></tr>
<tr><td>Sean Couturier</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Jaccob Slavin</td>
<td>6 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Alexander Wennberg</td>
<td>5 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 800 000 $</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>5 400 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td>Mike Hoffman</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Erik Cernak</td>
<td>3 600 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td>Vladislav Namestnikov</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Tom Wilson</td>
<td>2 850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td>Michael Rasmussen</td>
<td>2 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Colby Cohen</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Andrew Mangiapane</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Ivan Nalimov</td>
<td>1 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td>Jaret Anderson-Dolan</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Zack Kassian</td>
<td>0 $ (0)</td></tr>
<tr><td>Dominik Kahun</td>
<td>0 $ (0)</td></tr>
<tr><td>Alexander Radulov</td>
<td>0 $ (0)</td></tr>
<tr><td>Nazem Kadri</td>
<td>0 $ (0)</td></tr>
<tr><td>Michael Grabner</td>
<td>0 $ (0)</td></tr>
<tr><td>Shane Hanna</td>
<td>0 $ (0)</td></tr>
<tr><td>Nick Ritchie</td>
<td>0 $ (0)</td></tr>
<tr><td>Ilya Lyubushkin</td>
<td>0 $ (0)</td></tr>
<tr><td>Andrew Cogliano</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 80 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 71 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 53 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 33 900 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 81 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 70 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 52 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 33 900 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 81 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 70 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 52 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 33 900 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Klim Kostin</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Tyler Steenbergen</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Nikolai Kovalenko</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Blake Coleman</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Tomas Vincour</td>
<td>112 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>112 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>112 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>112 500 $</td></tr>
<tr><td>Dmitry Zavgorodniy</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Cole Caufield</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Kaiden Guhle</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alexander Romanov</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Mason Shaw</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Hudson Elynuik</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Artemi Knyazev</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Kristian Tanus</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Yegor Sokolov</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Bode Wilde</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Simon Gnyp</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Markus Nurmi</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Valentin Nussbaumer</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Luke Henman</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Alex Peters</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Justin Pogge</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Anton Lander</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Yegor Rykov</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Brandon Pirri</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jean-François Bérubé</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 942 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 285 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 942 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 285 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Canada Life Centre</td></tr>
<tr><td>Level 1: </td><td>6000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4004 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>2000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>20004</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 29 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>41</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>77 300 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>76 633 333 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>2 075 000 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>2 075 000 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>364 921 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>11 156 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>210</td></tr>
<tr><td>Pro Expenses Per Days</td><td>380 000 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>79 800 000 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>186</td></tr>
<tr><td>Farm Expenses Per Days</td><td>21 909 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>4 075 074 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>83 875 074 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>76 633 410 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 87 000 050 $</td><td>10 366 640 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 67 000 050 $ </td><td>9 633 360 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>97 865 255 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>13 990 181 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mark Scheifele</td>
<td>9 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 333 333 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 333 333 $</td></tr>
<tr><td>John Carlson</td>
<td>8 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Nail Yakupov</td>
<td>7 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Dmitri Kulikov</td>
<td>7 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Elias Lindholm</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Émile Poirier</td>
<td>6 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Matthew Nieto</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Martin Jones</td>
<td>5 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Brady Skjei</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Anthony Mantha</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Radek Faksa</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Mark Visentin</td>
<td>3 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td>Jake Gardiner</td>
<td>1 950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Patrick Brown</td>
<td>1 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td>Tyler Cuma</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Tyler Johnson</td>
<td>0 $ (0)</td></tr>
<tr><td>Nicolas Deslauriers</td>
<td>0 $ (0)</td></tr>
<tr><td>Mac Weegar</td>
<td>0 $ (0)</td></tr>
<tr><td>Ryan Graves</td>
<td>0 $ (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>19</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 77 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 67 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 35 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 23 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 76 633 333 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 66 733 333 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 35 083 333 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 22 833 333 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 76 633 333 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 66 733 333 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 35 083 333 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 22 833 333 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Rinat Valiev</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Adam Tambellini</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Brent Pedersen</td>
<td>170 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Skyler McKenzie</td>
<td>160 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Sheldon Dries</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jérôme Verrier</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Alexander Killorn</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Kevin Lidström</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Cody Glass</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Devante Smith-Pelly</td>
<td>97 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Philip Larsen</td>
<td>97 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Sam Jardine</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Darren Helm</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Will Cuylle</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Magnus Nygren</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ross Johnston</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Colin Miller</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Milan Lucic</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Patrik Berglund</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Daniel Lafontaine</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Jaroslav Janus</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Stuart Percy</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Brett Connolly</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Casey Cizikas</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Tom McCollum</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Kevin Gravel</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Alexander Avtsin</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td>Frederik Andersen</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 075 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 677 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 160 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 2 075 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 677 500 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 160 000 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="STHSTeamFinance_SalaryCapCentrale"><a id="SalaryCapCentrale">Salary Cap Centrale</a></h1>
<table class="STHSFinance_TeamTable"><tr>
<td class="STHSCenter"><h3 class="STHSTeamFinance_Team">Team</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_CurrentFund">Current Fund</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_EstimatedSeasonSalaryCap">Estimated Season Salary Cap</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_UnderMaximum">Under Maximum of 87 000 050 $ <br/> Available Cap Space</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_OverMinimum">Over Minimum of<br />67 000 050 $</h3></td>
<td><h3 class="STHSTeamFinance_ProPlayers">Pro Players</h3></td><td><h3 class="STHSTeamFinance_FarmPlayers">Farm Players</h3></td><td><h3 class="STHSTeamFinance_TotalPlayers">Total Players</h3></td></tr>
<tr><td>Anaheim Ducks</td>
<td>82 025 883 $</td>
<td>85 950 070 $</td>
<td>1 049 980 $</td>
<td>18 950 020 $</td>
<td>19</td><td>28</td><td>47</td></tr>
<tr><td>Arizona Coyotes</td>
<td>120 317 942 $</td>
<td>84 116 740 $</td>
<td>2 883 310 $</td>
<td>17 116 690 $</td>
<td>19</td><td>21</td><td>40</td></tr>
<tr><td>Boston Bruins</td>
<td>42 581 832 $</td>
<td>77 249 970 $</td>
<td>9 750 080 $</td>
<td>10 249 920 $</td>
<td>22</td><td>29</td><td>51</td></tr>
<tr><td>Buffalo Sabres</td>
<td>40 857 454 $</td>
<td>64 499 930 $</td>
<td>22 500 120 $</td>
<td><span style="color:red">-2 500 120 $</span></td>
<td>21</td><td>34</td><td>55</td></tr>
<tr><td>Calgary Flames</td>
<td>36 755 063 $</td>
<td>84 000 100 $</td>
<td>2 999 950 $</td>
<td>17 000 050 $</td>
<td>21</td><td>25</td><td>46</td></tr>
<tr><td>Carolina Hurricanes</td>
<td>49 205 400 $</td>
<td>71 966 580 $</td>
<td>15 033 470 $</td>
<td>4 966 530 $</td>
<td>24</td><td>29</td><td>53</td></tr>
<tr><td>Chicago Blackhawks</td>
<td>177 044 277 $</td>
<td>79 800 000 $</td>
<td>7 200 050 $</td>
<td>12 799 950 $</td>
<td>23</td><td>27</td><td>50</td></tr>
<tr><td>Colorado Avalanche</td>
<td>75 869 468 $</td>
<td>70 025 070 $</td>
<td>16 974 980 $</td>
<td>3 025 020 $</td>
<td>22</td><td>24</td><td>46</td></tr>
<tr><td>Columbus Blue Jackets</td>
<td>156 629 827 $</td>
<td>77 050 070 $</td>
<td>9 949 980 $</td>
<td>10 050 020 $</td>
<td>21</td><td>26</td><td>47</td></tr>
<tr><td>Dallas Stars</td>
<td>107 983 731 $</td>
<td>71 606 010 $</td>
<td>15 394 040 $</td>
<td>4 605 960 $</td>
<td>20</td><td>24</td><td>44</td></tr>
<tr><td>Detroit Red Wings</td>
<td>71 559 811 $</td>
<td>72 649 920 $</td>
<td>14 350 130 $</td>
<td>5 649 870 $</td>
<td>22</td><td>26</td><td>48</td></tr>
<tr><td>Edmonton Oilers</td>
<td>35 499 940 $</td>
<td>85 950 060 $</td>
<td>1 049 990 $</td>
<td>18 950 010 $</td>
<td>25</td><td>24</td><td>49</td></tr>
<tr><td>Florida Panthers</td>
<td>127 745 468 $</td>
<td>85 174 990 $</td>
<td>1 825 060 $</td>
<td>18 174 940 $</td>
<td>24</td><td>25</td><td>49</td></tr>
<tr><td>Los Angeles Kings</td>
<td>163 010 223 $</td>
<td>85 859 970 $</td>
<td>1 140 080 $</td>
<td>18 859 920 $</td>
<td>24</td><td>21</td><td>45</td></tr>
<tr><td>Minnesota Wild</td>
<td>(5 088 119 $)</td>
<td>74 099 970 $</td>
<td>12 900 080 $</td>
<td>7 099 920 $</td>
<td>21</td><td>25</td><td>46</td></tr>
<tr><td>Montreal Canadiens</td>
<td>295 014 368 $</td>
<td>72 049 950 $</td>
<td>14 950 100 $</td>
<td>5 049 900 $</td>
<td>20</td><td>27</td><td>47</td></tr>
<tr><td>Nashville Predators</td>
<td>75 893 194 $</td>
<td>87 100 020 $</td>
<td><span style="color:red">-99 970 $</span></td>
<td>20 099 970 $</td>
<td>20</td><td>28</td><td>48</td></tr>
<tr><td>New Jersey Devils</td>
<td>89 097 424 $</td>
<td>62 616 750 $</td>
<td>24 383 300 $</td>
<td><span style="color:red">-4 383 300 $</span></td>
<td>23</td><td>19</td><td>42</td></tr>
<tr><td>New York Islanders</td>
<td>781 730 $</td>
<td>89 949 930 $</td>
<td><span style="color:red">-2 949 880 $</span></td>
<td>22 949 880 $</td>
<td>24</td><td>24</td><td>48</td></tr>
<tr><td>New York Rangers</td>
<td>131 664 852 $</td>
<td>88 700 010 $</td>
<td><span style="color:red">-1 699 960 $</span></td>
<td>21 699 960 $</td>
<td>21</td><td>29</td><td>50</td></tr>
<tr><td>Ottawa Senators</td>
<td>52 556 113 $</td>
<td>79 860 060 $</td>
<td>7 139 990 $</td>
<td>12 860 010 $</td>
<td>23</td><td>25</td><td>48</td></tr>
<tr><td>Philadelphia Flyers</td>
<td>292 762 158 $</td>
<td>81 160 040 $</td>
<td>5 840 010 $</td>
<td>14 159 990 $</td>
<td>22</td><td>24</td><td>46</td></tr>
<tr><td>Pittsburgh Penguins</td>
<td>661 990 390 $</td>
<td>74 500 020 $</td>
<td>12 500 030 $</td>
<td>7 499 970 $</td>
<td>23</td><td>30</td><td>53</td></tr>
<tr><td>Quebec Nordiques</td>
<td>170 792 562 $</td>
<td>68 319 930 $</td>
<td>18 680 120 $</td>
<td>1 319 880 $</td>
<td>24</td><td>25</td><td>49</td></tr>
<tr><td>San Jose Sharks</td>
<td>257 242 478 $</td>
<td>80 449 950 $</td>
<td>6 550 100 $</td>
<td>13 449 900 $</td>
<td>25</td><td>25</td><td>50</td></tr>
<tr><td>Seattle Kraken</td>
<td>126 644 265 $</td>
<td>89 385 030 $</td>
<td><span style="color:red">-2 384 980 $</span></td>
<td>22 384 980 $</td>
<td>23</td><td>28</td><td>51</td></tr>
<tr><td>St. Louis Blues</td>
<td>432 457 503 $</td>
<td>58 208 410 $</td>
<td>28 791 640 $</td>
<td><span style="color:red">-8 791 640 $</span></td>
<td>23</td><td>27</td><td>50</td></tr>
<tr><td>Tampa Bay Lightning</td>
<td>303 402 210 $</td>
<td>80 524 920 $</td>
<td>6 475 130 $</td>
<td>13 524 870 $</td>
<td>22</td><td>29</td><td>51</td></tr>
<tr><td>Toronto Maple Leafs</td>
<td>111 395 962 $</td>
<td>72 700 100 $</td>
<td>14 299 950 $</td>
<td>5 700 050 $</td>
<td>21</td><td>23</td><td>44</td></tr>
<tr><td>Vancouver Canucks</td>
<td>290 966 412 $</td>
<td>84 550 050 $</td>
<td>2 450 000 $</td>
<td>17 550 000 $</td>
<td>21</td><td>25</td><td>46</td></tr>
<tr><td>Vegas Golden Knights</td>
<td>83 644 987 $</td>
<td>80 649 980 $</td>
<td>6 350 070 $</td>
<td>13 649 930 $</td>
<td>22</td><td>27</td><td>49</td></tr>
<tr><td>Washington Capitals</td>
<td>91 486 037 $</td>
<td>81 650 100 $</td>
<td>5 349 950 $</td>
<td>14 650 050 $</td>
<td>26</td><td>25</td><td>51</td></tr>
<tr><td>Winnipeg Jets</td>
<td>97 865 255 $</td>
<td>76 633 410 $</td>
<td>10 366 640 $</td>
<td>9 633 360 $</td>
<td>19</td><td>28</td><td>47</td></tr>
</table>
<?php include "Footer.php";?>
