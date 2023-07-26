<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Team Finance</title>
<script src="ASHL11-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 960px) {.STHSWarning {display:block;}
.STHSFinance_FarmSalaryTable {display:none;}
.STHSFinance_TeamTable tr > td:nth-child(6){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(7){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(8){display:none;}}
@media screen and (max-width: 720px) {.STHSFinance_ProSalaryTable{display:none}}
</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL11-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL11-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleKraken">Seattle Kraken</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
 | <a href="#SalaryCapCentrale">Salary Cap Centrale Report</a></div>
<h1 class="TeamFinancePro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#AnaheimDucks">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 175 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 175 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(4 500 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>(4 500 000 $)</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>88 500 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-69 500 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>91 409 992 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>91 409 992 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>John Tavares</td>
<td>10 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td>Cam Fowler</td>
<td>7 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Alexander Edler</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Brandon Montour</td>
<td>6 500 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Zachary Werenski</td>
<td>5 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Brock Boeser</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Jacob Markstrom</td>
<td>5 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Dylan Strome</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Brendan Leipsic</td>
<td>4 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Tyler Wotherspoon</td>
<td>4 100 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 100 000 $</td></tr>
<tr><td>Ryan Strome</td>
<td>3 200 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Stefan Noesen</td>
<td>2 700 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td>Lawson Crouse</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Alexander Nylander</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Zach Sanford</td>
<td>2 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td>Oscar Dansk</td>
<td>2 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Sami Niku</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Robin Kovacs</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Tyler Bozak</td>
<td>1 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Chris Wagner</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Martin Necas</td>
<td>925 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>925 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 79 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 68 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 38 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 79 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 68 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 38 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 79 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 68 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 38 200 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Joey Laleggia</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Daniel Sprong</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Anthony Beauvillier</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Melvin Nyffeler</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Joe Veleno</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Troy Terry</td>
<td>97 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Andrey Pedan</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Nolan Patrick</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Juuso Välimäki</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Filip Hronek</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Ryan Fitzgerald</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Ben Harpur</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Adam Fox</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jesper Boqvist</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Jansen Harkins</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Kalle Kossila</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Axel Holmstrom</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Daniel Zaar</td>
<td>87 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Tyler Parsons</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kyle Wood</td>
<td>82 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Jacob Olofsson</td>
<td>82 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Thomas Novak</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Michael Spacek</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Michael Brodzinski</td>
<td>79 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>79 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>79 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>79 500 $</td></tr>
<tr><td>Cole Sanford</td>
<td>77 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Joonas Lyytinen</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Hannibal Weitzmann</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Owen Tippett</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>29</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 789 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 512 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 595 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 789 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 512 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 595 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>83 335 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>83 335 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>1 400 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>1 400 000 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>82 600 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-63 600 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>105 438 640 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>105 438 640 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Steven Stamkos</td>
<td>9 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td>Hampus Lindholm</td>
<td>8 250 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 250 000 $</td></tr>
<tr><td>Braden Holtby</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Bo Horvat</td>
<td>7 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Erik Johnson</td>
<td>6 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Sam Bennett</td>
<td>6 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>William Karlsson</td>
<td>6 000 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Zach Bogosian</td>
<td>6 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Oskar Lindblom</td>
<td>3 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td>Travis Sanheim</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Zack MacEwen</td>
<td>2 350 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 350 000 $</td></tr>
<tr><td>Benjamin Conz</td>
<td>2 280 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 280 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 280 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 280 000 $</td></tr>
<tr><td>Raman Hrabarenka</td>
<td>2 210 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 210 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 210 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 210 000 $</td></tr>
<tr><td>Gerald Mayhew</td>
<td>1 770 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 770 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 770 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 770 000 $</td></tr>
<tr><td>Michael McCarron</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Mattias Norstebo</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Rodrigo Abols</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Noel Acciari</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Keegan Kanzig</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Sam Steel</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Max Jones</td>
<td>925 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>925 000 $</td></tr>
<tr><td>Arturas Laukaitis</td>
<td>800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>800 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 335 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 70 635 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 53 885 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 43 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 335 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 70 635 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 53 885 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 43 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 335 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 70 635 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 53 885 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 43 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Mike Hardman</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Karlis Cukste</td>
<td>165 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Wayne Simmonds</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Vilmos Gallo</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Mareks Mitens</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Hafthor Sigrunarson</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Vadim Vasjonkin</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Andrei Buyalsky</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Ty Gallagher</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jack Matier</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Arturs Silovs</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Semyon Der-Arguchintsev</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Trey Fix-Wolansky</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Joachim Blichfeld</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jacob Ratcliffe</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Yegor Sharangovich</td>
<td>77 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Gregorio Gios</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Jermaine Loewen</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Kirill Steklov</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Reinhard Venter</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Hakan Salt</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Marko Mladenovic</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Declan Bronte</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Austin Mitchell-King</td>
<td>60 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td>Kacper Bartnik</td>
<td>60 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td>Karma Stein</td>
<td>60 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td>Demid Yeremeyev</td>
<td>50 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>50 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 447 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 670 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 485 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 447 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 670 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 485 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">TD Garden</td></tr>
<tr><td>Level 1: </td><td>5765 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 245 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>17765</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>79 800 001 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>80 800 001 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 750 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>15 929 151 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>15 929 151 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brad Marchand</td>
<td>9 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>David Pastrnak</td>
<td>7 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Oliver Ekman-Larsson</td>
<td>6 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Jake Guentzel</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Rickard Rakell</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Charlie McAvoy</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Bobby Ryan</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Carson Soucy</td>
<td>4 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Derrick Pouliot</td>
<td>4 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Marco Scandella</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Nico Hischier</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Eric Gelinas</td>
<td>3 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 400 000 $</td></tr>
<tr><td>Pavel Francouz</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Igor Shestyorkin</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Marko Dano</td>
<td>2 400 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Scott Kosmachuk</td>
<td>2 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Angelo Miceli</td>
<td>2 000 001 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 001 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 001 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 001 $</td></tr>
<tr><td>Frédérik Gauthier</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Vladimir Tkachev</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Brett Kulak</td>
<td>1 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Hudson Fasching</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Jakob Forsbacka Karlsson</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Mason Marchment</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 84 300 001 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 60 950 001 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 050 001 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 400 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 85 300 001 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 61 950 001 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 42 050 001 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 22 400 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 85 300 001 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 61 950 001 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 42 050 001 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 22 400 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Colton Sissons</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Calle Jarnkrok</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Rick Nash</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Maximilian Veronneau</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Mathias From</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Steven Fogarty</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Simon Tremblay</td>
<td>175 000 $ (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Alexander Khokhlachev</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Dalton Thrower</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Roland McKeown</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Konrad Abeltshauser</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Déreck Baribeau</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Jacob Christiansen</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Ryan McGregor</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Damien Giroux</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Tobias Björnfot</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jacob Bryson</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Shawn Element</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Chad Yetman</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Declan Chisholm</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Max Golod</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Calvin Thurkauf</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Zane McIntyre</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Adam Mascherin</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tim Bozon</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 180 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 560 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 015 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 175 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 180 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 560 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 015 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 175 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">First Niagara Center</td></tr>
<tr><td>Level 1: </td><td>8500 - 92 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3070 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 23 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 192 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>22070</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 16 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 10 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 800 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>83 133 333 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(558 416 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(558 416 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mark Scheifele</td>
<td>8 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 333 333 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 333 333 $</td></tr>
<tr><td>Jordan Eberle</td>
<td>7 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 750 000 $</td></tr>
<tr><td>Tyler Myers</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Jonathan Drouin</td>
<td>7 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Kevin Shattenkirk</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Philipp Grubauer</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>John Gibson</td>
<td>5 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Mikhail Grigorenko</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Nathan Beaulieu</td>
<td>4 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Nick Cousins</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Dylan Olsen</td>
<td>3 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td>Madison Bowey</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Connor Carrick</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Adam Erne</td>
<td>2 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Jan Rutta</td>
<td>2 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Pierre Engvall</td>
<td>1 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Daniel Bernhardt</td>
<td>1 700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>Greg McKegg</td>
<td>1 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>Stefan Elliott</td>
<td>1 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Jujhar Khaira</td>
<td>1 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Alexandre Texier</td>
<td>950 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Michael Bournival</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 77 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 68 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 42 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 133 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 77 783 333 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 68 283 333 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 41 583 333 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 133 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 77 783 333 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 68 283 333 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 41 583 333 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jared Coreau</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Trevor Cox</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Daniel O'Regan</td>
<td>165 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Alexei Mitrofanov</td>
<td>156 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>156 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>156 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>156 500 $</td></tr>
<tr><td>Matthew Highmore</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Trevor Murphy</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Harrison Ruopp</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Cameron Wright</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Nils Lundkvist</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Scott Laughton</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jiri Sekac</td>
<td>115 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>115 000 $</td></tr>
<tr><td>Nick Baptiste</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Eric Cornel</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Simon Ryfors</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Taro Hirose</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jake Oettinger</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Mitchell Vande Sompel</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Maxim Letunov</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Dylan Sikura</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Yegor Korshkov</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Yegor Sokolov</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Robin Press</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Lukas Vejdemo</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Lucas Carlsson</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Brendan Burke</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ty Emberson</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tyler Tucker</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Cameron Morrison</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Filip Westerlund</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>29</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 209 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 919 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 035 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 209 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 919 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 035 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#CalgaryFlames">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>87 805 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>87 805 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(3 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>(3 000 000 $)</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>87 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-68 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>61 032 333 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>61 032 333 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Matt Duchene</td>
<td>8 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>8 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Jonathan Quick</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Travis Hamonic</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Anthony Duclair</td>
<td>6 200 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 200 000 $</td></tr>
<tr><td>Teuvo Teravainen</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Damon Severson</td>
<td>5 650 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 650 000 $</td></tr>
<tr><td>Marcus Johansson</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Olli Maatta</td>
<td>5 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Thomas Chabot</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Chris Tierney</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Ryan MacInnis</td>
<td>3 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Ryan Lindgren</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Adrian Kempe</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Oskar Sundqvist</td>
<td>2 880 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 880 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 880 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 880 000 $</td></tr>
<tr><td>Markus Nutivaara</td>
<td>2 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Anders Nilsson</td>
<td>1 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>Eric Robinson</td>
<td>975 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>975 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>975 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>975 000 $</td></tr>
<tr><td>Blake Lizotte</td>
<td>925 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>925 000 $</td></tr>
<tr><td>Barrett Hayton</td>
<td>925 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>925 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 87 805 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 86 505 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 71 480 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 43 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 87 805 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 86 505 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 71 480 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 43 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 87 805 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 86 505 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 71 480 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 43 600 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Adam Almqvist</td>
<td>157 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>157 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>157 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>157 500 $</td></tr>
<tr><td>Jack Lafontaine</td>
<td>145 045 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>145 045 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>145 045 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>145 045 $</td></tr>
<tr><td>Michael Ferland</td>
<td>135 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 500 $</td></tr>
<tr><td>Laurent Brossoit</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Dennis Gilbert</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Dmitri Mikhailov</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Anton Zlobin</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Paul Byron</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Anthony Angello</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Clark Bishop</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Greg Nemisz</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Colton Point</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Morgan Frost</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Leon Gawanke</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nick Merkley</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ty Smith</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Guillaume Brisebois</td>
<td>87 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Todd Burgess</td>
<td>87 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Filip Chlapik</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kody Clark</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Luke Green</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Jakob Ragnarsson</td>
<td>72 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>72 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>72 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>72 500 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 313 045 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 485 045 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 652 545 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 313 045 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 485 045 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 652 545 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">RBC Center</td></tr>
<tr><td>Level 1: </td><td>6500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5180 - 105 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 68 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 37 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 345 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18680</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>58 695 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>58 695 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 900 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>5 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>5 000 000 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>79 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-60 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>43 877 760 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>43 877 760 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeny Kuznetsov</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Nikita Gusev</td>
<td>5 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Luca Sbisa</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Brandon Saad</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Brian Dumoulin</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Ryan Getzlaf</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Brock Nelson</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Taylor Doherty</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Calvin Pickard</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Keaton Ellerby (Out of Payroll)</td>
<td>3 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td>Ilya Lyubushkin</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Kevin Poulin</td>
<td>2 995 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 995 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 995 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 995 000 $</td></tr>
<tr><td>Marcel Noebels</td>
<td>2 995 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 995 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 995 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 995 000 $</td></tr>
<tr><td>Mark Barberio</td>
<td>2 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Evan Rodrigues</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Shayne Gostisbehere</td>
<td>2 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Peter Trainor</td>
<td>2 600 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 600 000 $</td></tr>
<tr><td>Josh Manson</td>
<td>2 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Anthony Camara</td>
<td>2 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td>Jordan Weal</td>
<td>2 100 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Rihards Bukarts</td>
<td>1 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>John Quenneville</td>
<td>1 700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>Dylan Gambrell</td>
<td>1 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 77 340 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 595 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 21 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 12 850 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 77 340 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 595 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 21 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 12 850 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 77 340 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 595 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 21 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 12 850 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Joel Kiviranta</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Kale Clague</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Johannes Kinnvall</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Rasmus Asplund</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Ryan Haggerty</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Ian Cole</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Kenny Agostino</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Kevin Lankinen</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Louis Belpedio</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Laurent Dauphin</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Joe Colborne</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Sam Lafferty</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Emil Bemstrom</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Tomas Plekanec</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Alexei Bereglazov</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Markus Lauridsen</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Riley Barber</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Kiefer Sherwood</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Mikhail Vorobyov</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Reid McNeill</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ryan McLeod</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Eric Comrie</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Connor Dewar</td>
<td>82 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Jens Lööke</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Radovan Bondra</td>
<td>60 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 855 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 510 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 855 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 510 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 975 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 975 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 475 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>137 257 942 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>137 257 942 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Toews</td>
<td>9 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Evgeny Dadonov</td>
<td>8 600 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 600 000 $</td></tr>
<tr><td>Marc Staal</td>
<td>7 100 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 100 000 $</td></tr>
<tr><td>David Savard</td>
<td>6 250 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Brayden McNabb</td>
<td>5 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Nick Bjugstad</td>
<td>5 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>William Carrier</td>
<td>5 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Cody Franson</td>
<td>5 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Adam Clendening</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Antti Suomela</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Keith Kinkaid</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Mitch Holmberg</td>
<td>3 125 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 125 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 125 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 125 000 $</td></tr>
<tr><td>Nikolay Prokhorkin</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>John Nyberg</td>
<td>2 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Anders Lindback</td>
<td>2 150 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 150 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 150 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 150 000 $</td></tr>
<tr><td>Greg Chase</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Gustav Nyquist</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Mackenzie Blackwood</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Adam Helewka</td>
<td>1 350 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 350 000 $</td></tr>
<tr><td>Justin Holl</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Christian Thomas</td>
<td>800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>800 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 975 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 45 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 975 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 45 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 975 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 45 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Justin Auger</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Nathan Walker</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Austin Czarnik</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Theo Peckham</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Mirko Hoefflin</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jason Fram</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Trevor Van Riemsdyk</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Carter Ashton</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Riley Damiani</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Cooper Marody</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Christopher DiDomenico</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Zach Pochiro</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Julien Pelletier</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Michael McNiven</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Jimmy Huntington</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>MacKenzie Entwistle</td>
<td>92 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 000 $</td></tr>
<tr><td>Jakub Zboril</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Joe Hicketts</td>
<td>87 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Rourke Chartier</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Tyler Benson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Andreas Engqvist</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 644 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 264 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 644 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 264 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Pepsi Center</td></tr>
<tr><td>Level 1: </td><td>6007 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 300 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18007</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>88 575 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>88 575 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 450 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>70 473 176 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>70 473 176 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sean Monahan</td>
<td>9 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Colin Wilson</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Vyacheslav Voynov</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Evgeny Grachev</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Andrew Hammond</td>
<td>6 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Martin Jones</td>
<td>5 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Jonathon Blum</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Magnus Paajarvi</td>
<td>4 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 900 000 $</td></tr>
<tr><td>Yann Sauve</td>
<td>4 575 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 575 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 575 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 575 000 $</td></tr>
<tr><td>Alexander Kerfoot</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Jani Hakanpaa</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Andreas Englund</td>
<td>3 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td>Taylor Leier</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Joachim Nermark</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Devon Toews</td>
<td>2 950 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 950 000 $</td></tr>
<tr><td>Brett Cote</td>
<td>2 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Robby Fabbri</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Alex Iafallo</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Jake Walman</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Christophe Lalancette</td>
<td>1 950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Jason Zucker</td>
<td>1 850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 850 000 $</td></tr>
<tr><td>Colin Smith</td>
<td>800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>800 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 90 825 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 525 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 58 475 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 24 550 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 90 825 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 525 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 58 475 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 24 550 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 90 825 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 525 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 58 475 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 24 550 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Gustav Olofsson</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Christian Djoos</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Stephen Silas</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Kurtis Gabriel</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Luke Moffatt</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Michael Chaput</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Dustin Tokarski</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Troy Rutkowski</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Christoph Bertschy</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Tim Heed</td>
<td>96 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>96 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>96 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>96 000 $</td></tr>
<tr><td>Peter Delmas</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Sam Miletic</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Edward Pasquale</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Francis Beauvillier</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kyle Rau</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Keegan Iverson</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Josh Leivo</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Spencer Watson</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Michael Latta</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Joseph Cramarossa</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Brendan Warren</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Nikita Korostelev</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 391 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 391 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
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
<tr><td>Farm Level 1: </td><td>2000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 550 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 550 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 100 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>50 842 607 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>50 842 607 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nathan MacKinnon</td>
<td>10 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td>Tuukka Rask</td>
<td>9 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Johnny Gaudreau</td>
<td>7 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Nicklas Backstrom</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Oscar Klefbom</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Ilya Mikheyev</td>
<td>5 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Erik Gudbranson</td>
<td>4 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 800 000 $</td></tr>
<tr><td>Jonas Brodin</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Adam Boqvist</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Brandon McMillan</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Dmitrij Jaskin</td>
<td>2 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Carl Gunnarsson</td>
<td>2 350 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 350 000 $</td></tr>
<tr><td>Nikita Nesterov</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Jason Dickinson</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Christian Dvorak</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Marcus Pettersson</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Shawn Matthias</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Pius Suter</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Barclay Goodrow</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Joel Eriksson Ek</td>
<td>1 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Derek Ryan</td>
<td>1 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Remi Elie</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Alexandar Georgiyev</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 68 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 52 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 42 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 68 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 52 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 42 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 68 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 52 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 42 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Gregory Beron</td>
<td>185 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Brendan Guhle</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>David Quenneville</td>
<td>160 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Reto Berra</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Spencer Martin</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Alex Belzile</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Mike Smith</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Marcus Karlberg</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Brett Bulmer</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alexander Dergachyov</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dominik Uher</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Brandon Hickey</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dominik Bokk</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Riley Stillman</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Anton Blidh</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Blake Siebenaler</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Martin Kaut</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Shane Bowers</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Mattias Samuelsson</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ben McCartney</td>
<td>87 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Samuel Asselin</td>
<td>82 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Eric Locke</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Carsen Twarynski</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ben Mirageas</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Filip Ahl</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 660 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 977 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 497 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 660 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 977 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 497 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">American Airlines Center</td></tr>
<tr><td>Level 1: </td><td>6532 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 80 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18532</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 999 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 998 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 311 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>80 048 500 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 200 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>39 554 272 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>39 554 272 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Shea Weber</td>
<td>9 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 237 500 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 237 500 $</td></tr>
<tr><td>Leon Draisaitl</td>
<td>8 200 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 200 000 $</td></tr>
<tr><td>Mathew Barzal</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Alex Petrovic</td>
<td>5 150 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 150 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 150 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 150 000 $</td></tr>
<tr><td>Sven Baertschi</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Duncan Siemens</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Sean Couturier</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Alexander Urbom</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Jordan Binnington</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Max Domi</td>
<td>4 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td>Alexander Radulov</td>
<td>3 810 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 810 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 810 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 810 000 $</td></tr>
<tr><td>Hunter Shinkaruk</td>
<td>3 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 100 000 $</td></tr>
<tr><td>Marek Mazanec</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Haydn Fleury</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Matt Roy</td>
<td>2 001 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 001 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 001 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 001 000 $</td></tr>
<tr><td>Curtis Hamilton</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Conner Bleackley</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Jayce Hawryluk</td>
<td>1 950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Darren Helm</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Travis Boyd</td>
<td>1 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Evan Fitzpatrick</td>
<td>1 400 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 311 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 67 260 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 51 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 15 100 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 80 048 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 64 997 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 49 487 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 837 500 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 80 048 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 64 997 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 49 487 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 837 500 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Filip Gustavsson</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Rhett Gardner</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Brandon Pirri</td>
<td>199 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>199 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>199 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>199 500 $</td></tr>
<tr><td>Cam Atkinson</td>
<td>197 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>197 500 $</td></tr>
<tr><td>Christian Jaros</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Travis Zajac</td>
<td>176 100 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>176 100 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>176 100 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>176 100 $</td></tr>
<tr><td>Jhonas Enroth</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Jimmy Vesey</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Andrew Ladd</td>
<td>147 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>147 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>147 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>147 500 $</td></tr>
<tr><td>Parker Wotherspoon</td>
<td>135 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Rob O'Gara</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Adam Brooks</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Tyson Foerster</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Martin Fehervary</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Nils Höglander</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alexander True</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Adam Brodecki</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Brandon Manning</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Anthony Richard</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Casey Nelson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Tobias Lindberg</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Christian Folin</td>
<td>82 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Albin Eriksson</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Justin Kea</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ryan Collins</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Daniel Audette</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Simon Bourque</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 255 600 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 733 600 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 322 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 255 600 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 733 600 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 322 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Joe Louis Arena</td></tr>
<tr><td>Level 1: </td><td>10566 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 76 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2500 - 55 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>24066</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 33 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 22 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>78 400 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>78 400 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 750 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(1 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>(1 000 000 $)</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>85 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-66 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>59 572 258 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>59 572 258 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeni Malkin</td>
<td>8 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Nick Suzuki</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Brady Tkachuk</td>
<td>6 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Jaden Schwartz</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Nick Leddy</td>
<td>6 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Tomas Hertl</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Jean-Gabriel Pageau</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>John Klingberg</td>
<td>4 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 750 000 $</td></tr>
<tr><td>Connor Hellebuyck</td>
<td>4 200 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td>Josh Anderson</td>
<td>3 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Kyle Connor</td>
<td>3 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td>Ryan Kesler</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Charles Hudon</td>
<td>2 900 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td>Brogan Rafferty</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Mirco Mueller</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Mark Katic</td>
<td>1 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Nikolas Brouillard</td>
<td>1 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Kari Lehtonen</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Philip Larsen</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Jordan Greenway</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Jeff Carter</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 78 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 72 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 55 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 41 400 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 78 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 72 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 55 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 41 400 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 78 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 72 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 55 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 41 400 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Zach Hyman</td>
<td>195 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Timur Bilyalov</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Max Görtz</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Shane Prince</td>
<td>125 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Philippe Hudon</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Alex Dubeau</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Dave Bolland</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Karl Alzner</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Morgan Ellis</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Martin Frk</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alexander Semin</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Marcus Foligno</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Cody Eakin</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jordan Martinook</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Tom Kuhnhackl</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>John Moore</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nicolas Hague</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Collin Delia</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Mark Borowiecki</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Dalton Prout</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 085 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 305 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 690 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 125 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 085 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 305 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 690 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 125 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Rexall Place</td></tr>
<tr><td>Level 1: </td><td>5000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>4839 - 90 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 65 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 330 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>16839</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>81 750 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>81 750 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 400 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>59 343 791 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>59 343 791 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Taylor Hall</td>
<td>8 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 250 000 $</td></tr>
<tr><td>Marc-Andre Fleury</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Sam Gagner</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Brendan Gallagher</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>4 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Chris Stewart</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Colten Teubert</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Cody Ceci</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Cédric Paquette</td>
<td>3 700 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 700 000 $</td></tr>
<tr><td>Tobias Rieder</td>
<td>3 600 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 600 000 $</td></tr>
<tr><td>Martin Marincin</td>
<td>3 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td>Ville Husso</td>
<td>3 200 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Martin Gernat</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Kailer Yamamoto</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Ryan Callahan</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Matt Hackett</td>
<td>2 700 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td>Bogdan Yakimov</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Frank Vatrano</td>
<td>2 200 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Jack Dougherty</td>
<td>1 700 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>Mikko Vainonen</td>
<td>1 650 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 650 000 $</td></tr>
<tr><td>Paul Bittner</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td>Brendan Lemieux</td>
<td>1 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>Cameron Hughes</td>
<td>800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>800 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 81 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 69 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 56 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 37 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 81 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 69 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 56 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 37 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 81 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 69 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 56 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 37 600 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Teemu Hartikainen</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Samu Perhonen</td>
<td>185 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Jared Knight</td>
<td>185 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Tyler Bunz</td>
<td>185 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Alex Lintuniemi</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Dillon Simpson</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Dominik Masin</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Otto Leskinen</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Kieffer Bellows</td>
<td>135 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Michael McLeod</td>
<td>130 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Patrick Khodorenko</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Devan Dubnyk</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Tyrell Goulbourne</td>
<td>96 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>96 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>96 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>96 000 $</td></tr>
<tr><td>Henri Jokiharju</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Libor Hájek</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Philip Tomasino</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Shane Pinto</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Brett Howden</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Kirby Dach</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Matthew Spencer</td>
<td>92 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 000 $</td></tr>
<tr><td>Dmitri Samorukov</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Gabriel Vilardi</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Andrew Peeke</td>
<td>87 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>J.D. Greenway</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jakub Lauko</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Antoine Morand</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 155 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 395 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 283 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 155 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 395 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 283 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 500 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">BankAtlantic Center</td></tr>
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>83 025 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 435 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 950 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>116 572 376 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>116 572 376 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>8 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Jonathan Huberdeau</td>
<td>8 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Dylan Larkin</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Aleksander Barkov</td>
<td>6 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Aaron Ekblad</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Ryan O'Reilly</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Scott Harrington</td>
<td>5 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Joel Edmundson</td>
<td>4 350 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 760 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 760 000 $</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Sean Walker</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Ondrej Kase</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>David Musil</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Brendan Perlini</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Dominic Toninato</td>
<td>2 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Phillip Danault</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Jacob De La Rose</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Joel Hanley</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Alan Quine</td>
<td>1 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Frederik Andersen</td>
<td>1 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td>Ryan Tesink</td>
<td>975 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>975 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>975 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>975 000 $</td></tr>
<tr><td>Mario Ferraro</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Dillon Dube</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 70 925 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 43 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 435 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 70 335 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 43 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 435 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 70 335 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 43 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Fredrik Claesson</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Joakim Nygard</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Justin Abdelkader</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Seth Griffith</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Patrick Bjorkstrand</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Beau Bennett</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Andrej Sustr</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Gemel Smith</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Peter Cehlarik</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Garret Sparks</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Carl Dahlstrom</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Juuso Riikola</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Kelly Klima</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alexei Marchenko</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alexei Emelin</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Matej Pekar</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Brandon Coe</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Wyatt Kalynuk</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kyle Olson</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Aapeli Rasanen</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Keith Petruzzelli</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Linus Lindstrom</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Tanner Kaspick</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Tyler Angle</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Johan Gustafsson</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 360 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 355 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 340 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 360 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 355 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 340 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#LosAngelesKings">Team Records</a> ]
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
<tr><td>Level 4: </td><td>4000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 350 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18118</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>83 775 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>83 775 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>129 752 885 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>129 752 885 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Anze Kopitar</td>
<td>9 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td>Jeff Skinner</td>
<td>8 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Drew Doughty</td>
<td>8 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Michal Neuvirth</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Michael Del Zotto</td>
<td>6 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Corey Perry</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Anthony Mantha</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Mark Pysyk</td>
<td>4 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Vincent Trocheck</td>
<td>4 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td>Derek Forbort</td>
<td>3 850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 850 000 $</td></tr>
<tr><td>Kevin Fiala</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Anthony Cirelli</td>
<td>3 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Brett Ritchie</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Jordan Subban</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Kevin Hayes</td>
<td>2 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Rasmus Andersson</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Anders Bjork</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Adin Hill</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Miles Wood</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Mathieu Joseph</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Nicolas Roy</td>
<td>925 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>925 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 86 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 78 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 44 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 34 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 86 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 78 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 44 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 34 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 86 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 78 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 44 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 34 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ilya Samsonov</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Ben Hutton</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Brendan Gaunce</td>
<td>195 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Robert Hagg</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Joonas Korpisalo</td>
<td>165 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Victor Mete</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Caleb Jones</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dante Fabbro</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Matt Luff</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Alexander Volkov</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Boris Katchouk</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ivan Lodnia</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Maxim Sushko</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Riley Tufte</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Mitchell Stephens</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ross Colton</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Antti Niemi</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Brent Gates</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ryan Segalla</td>
<td>77 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Ryan Rupert</td>
<td>77 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Jeff Taylor</td>
<td>77 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Mikey Eyssimont</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Oleg Sosunov</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 492 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 582 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 555 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 492 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 582 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 555 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Xcel Energy Center</td></tr>
<tr><td>Level 1: </td><td>6568 - 80 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 58 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 188 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18568</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 950 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 950 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 100 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>27 375 496 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>27 375 496 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>9 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Alex Ovechkin</td>
<td>8 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Brendan Smith</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Kevin Labanc</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Jack Roslovic</td>
<td>4 900 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 900 000 $</td></tr>
<tr><td>Ryan Murphy</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Jake Virtanen</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>JC Lipon</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Aaron Ness</td>
<td>3 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td>Ondrej Palat</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Thatcher Demko</td>
<td>3 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Sven Andrighetto</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Justin Kloos</td>
<td>2 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td>Joe Pavelski</td>
<td>2 350 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 350 000 $</td></tr>
<tr><td>Matt Benning</td>
<td>2 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td>Christian Wolanin</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Colby Cohen</td>
<td>2 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Alex Barré-Boulet</td>
<td>2 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Andreas Johnsson</td>
<td>2 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Conor Garland</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Ryan Sproul</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Neal Pionk</td>
<td>1 740 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 740 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 740 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 740 000 $</td></tr>
<tr><td>Brian Elliott</td>
<td>1 260 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 260 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 260 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 260 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 70 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 59 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 33 900 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 70 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 59 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 33 900 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 70 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 59 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 33 900 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Sebastian Collberg</td>
<td>195 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Dylan Demelo</td>
<td>195 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Devin Shore</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Antoine Bibeau</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Sam Carrick</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Adam Ginning</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Charles-Olivier Roussel</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Nick Sorensen</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Cale Fleury</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>François Tremblay</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Matteson Iacopelli</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Daniil Zharkov</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Denis Godla</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Byron Froese</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Tyler Graovac</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kris Russell</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Erik Foley</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>John Marino</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Justin Almeida</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Nick Seeler</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Lane Pederson</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Nolan Stevens</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Curtis Douglas</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ivan Chekhovich</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Brycen Martin</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 340 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 190 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 195 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 340 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 190 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 195 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 850 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 850 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>244 481 828 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>244 481 828 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sidney Crosby</td>
<td>10 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td>Alex Pietrangelo</td>
<td>9 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Filip Forsberg</td>
<td>7 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Brent Burns</td>
<td>6 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Jake Gardiner</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Torey Krug</td>
<td>6 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Julius Honka (Out of Payroll)</td>
<td>5 250 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Tomas Tatar</td>
<td>4 650 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td>Cal Petersen</td>
<td>4 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Dominik Kubalik</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Jakub Vrana</td>
<td>3 350 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 350 000 $</td></tr>
<tr><td>Logan O'Connor</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Danton Heinen</td>
<td>2 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>David Griger</td>
<td>1 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Artyom Zub</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Slater Koekkoek</td>
<td>1 650 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 650 000 $</td></tr>
<tr><td>Chandler Stephenson</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Gabriel Bourque</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Carter Verhaeghe</td>
<td>1 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Jake Allen</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Kyle Turris</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Tomas Hyka</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Noah Gregor</td>
<td>850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>850 000 $</td></tr>
<tr><td>Niko Mikkola</td>
<td>850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>850 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 88 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 69 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 45 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 26 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 88 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 69 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 45 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 26 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 88 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 69 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 45 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 26 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Joni Ortio</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Joseph Duszak</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>John Leonard</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Jeffrey Viel</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Kole Sherwood</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Kurtis MacDermid</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Patrik Berglund</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Derek Mathers</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Mathieu Olivier</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Michael Vukojevic</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Oskari Laaksonen</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Mathieu Desgagnés</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alexis Shank</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Brett Budgell</td>
<td>90 000 $ (3)</td></tr>
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
<tr><td>Marcus Davidsson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Sebastian Aho (D)</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Samuel Montembeault</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Cédric Desruisseaux</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Frédérick Gaudreau</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Gaetan Haas</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 372 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 592 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 767 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 372 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 592 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 767 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NashvillePredators">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>86 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>86 050 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>95 739 967 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>95 739 967 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mitchell Marner</td>
<td>9 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td>Nikita Kucherov</td>
<td>9 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Tyson Barrie</td>
<td>6 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Dmitri Orlov</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Nail Yakupov</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Justin Faulk</td>
<td>5 850 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 850 000 $</td></tr>
<tr><td>Nic Petan</td>
<td>5 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Ty Rattie</td>
<td>5 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Sam Reinhart</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Brett Pesce</td>
<td>4 600 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 600 000 $</td></tr>
<tr><td>Colton Parayko</td>
<td>4 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Tristan Jarry</td>
<td>4 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Adam Pelech</td>
<td>3 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Alec Martinez</td>
<td>2 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td>Tyler Motte</td>
<td>1 900 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Brett Pollock</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Trevor Moore</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Drake Batherson</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Carter Hart</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Karson Kuhlman</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Tage Thompson</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 86 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 62 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 51 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 45 100 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 86 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 62 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 51 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 45 100 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 86 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 62 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 51 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 45 100 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Joshua Jacobs</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Chet Pickard</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Miikka Salomäki</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Cristoval Nieves</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Mark Jankowski</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Marc-Olivier Roy</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Jonas Johansson</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Mitch Moroz</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>T.J. Brodie</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Logan Brown</td>
<td>115 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>115 000 $</td></tr>
<tr><td>Morgan Barron</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Stuart Percy</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Zachary Fucale</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jaydon Dureau</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Cole Clayton</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Josh Dunne</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Matt Kessel</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dylan Coghlan</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Nicholas Caamano</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Kyle Platzer</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Dylan Blujus</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Spencer Stastney</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 507 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 912 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 577 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 507 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 912 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 577 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>75 650 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>79 316 667 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>76 091 901 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>76 091 901 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrice Bergeron</td>
<td>8 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Jack Eichel</td>
<td>8 500 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 250 000 $</td></tr>
<tr><td>Tyler Ennis</td>
<td>7 350 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 350 000 $</td></tr>
<tr><td>Cory Schneider</td>
<td>6 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 900 000 $</td></tr>
<tr><td>Jacob Trouba</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td>Colin Miller (Out of Payroll)</td>
<td>5 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>William Nylander</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Will Butcher</td>
<td>4 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Jared McCann</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Henrik Samuelsson</td>
<td>3 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Steven Santini</td>
<td>3 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td>Victor Rask (Out of Payroll)</td>
<td>3 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td>Ilya Sorokin</td>
<td>3 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 166 667 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 166 667 $</td></tr>
<tr><td>Reilly Smith</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>James Neal</td>
<td>2 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Travis Dermott</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Kevin Stenlund</td>
<td>1 950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Jakob Silfverberg</td>
<td>1 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Dysin Mayo</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Roope Hintz</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Adam Gaudette</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td>Jacob Middleton</td>
<td>500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>500 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 84 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 69 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 55 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 45 850 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 88 066 667 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 72 766 667 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 54 166 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 42 016 667 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 88 066 667 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 72 766 667 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 54 166 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 42 016 667 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Adam Polasek</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Zach Hall</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Jackson Houck</td>
<td>175 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Lukas Sutter</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jeremy Smith</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Gabriel Carlsson</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Andrew Fritsch</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Lucas Lessio</td>
<td>120 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Ryan Kuffner</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Alex Velischek</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Alex Biega</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Alex Grant</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Philipp Kurashev</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Simon Benoît</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nolan Foote</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Evan Barratt</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Taylor Raddysh</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ivan Prosvetov</td>
<td>82 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Sam Kurker</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Benjamin Finkelstein</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Andrew MacDonald</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Andrej Meszaros</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 452 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 917 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 592 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 295 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 452 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 917 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 592 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 295 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Nassau Coliseum</td></tr>
<tr><td>Level 1: </td><td>5000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>4250 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 33 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 186 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>16250</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 33 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 10 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>86 015 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>86 015 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>1 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>1 000 000 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>83 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-64 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>59 688 460 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>59 688 460 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Cale Makar</td>
<td>8 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Seth Jones</td>
<td>7 800 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 800 000 $</td></tr>
<tr><td>David Krejci</td>
<td>6 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 800 000 $</td></tr>
<tr><td>Charlie Coyle</td>
<td>6 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Ben Bishop</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Vince Dunn</td>
<td>5 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Jesper Bratt</td>
<td>4 850 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 850 000 $</td></tr>
<tr><td>Martin Reway</td>
<td>4 650 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td>Max Friberg</td>
<td>4 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td>Vince Hinostroza</td>
<td>4 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Yanni Gourde</td>
<td>3 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td>Cole Cassels</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Joakim Ryan</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Griffin Reinhart</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Darcy Kuemper</td>
<td>2 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td>Tom Wilson</td>
<td>2 850 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td>Ryan Hartman</td>
<td>2 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Jake Paterson</td>
<td>1 565 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 565 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 565 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 565 000 $</td></tr>
<tr><td>Yannick Weber</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Cal Foote</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Jordan Kyrou</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 86 015 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 76 215 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 58 265 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 29 800 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 86 015 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 76 215 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 58 265 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 29 800 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 86 015 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 76 215 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 58 265 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 29 800 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Julius Bergman</td>
<td>185 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Christopher Clapperton</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Brett Seney</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Dion Phaneuf</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Alexandre Carrier</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Sean Malone</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Elvis Merzlikins</td>
<td>135 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Andrej Nestrasil</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Noah Juulsen</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Daniel Carr</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jonathan Dahlen</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Julien Gauthier</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Kerby Rychel</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Brenden Kichton</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kevin Klima</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Colton White</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Yan-Pavel Laplante</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Robbie Russo</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Brandon Gignac</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Shamil Shmakov</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jordan Bellerive</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Matthew Villalta</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jérémy Roy</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Kirill Kabanov</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 625 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 625 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NewYorkRangers">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>83 900 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>83 900 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 450 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>74 881 791 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>74 881 791 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brayden Point</td>
<td>8 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Andrey Vasilevskiy</td>
<td>8 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Ryan McDonagh</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Travis Konecny</td>
<td>7 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Jakob Chychrun</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Brandon Carlo</td>
<td>4 700 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td>Shea Theodore</td>
<td>4 600 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 600 000 $</td></tr>
<tr><td>Ivan Provorov</td>
<td>4 500 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>J.T. Miller</td>
<td>4 325 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 325 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 325 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 325 000 $</td></tr>
<tr><td>Jack Campbell</td>
<td>4 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Tyler Bertuzzi</td>
<td>4 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td>Viktor Arvidsson</td>
<td>3 350 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 350 000 $</td></tr>
<tr><td>Denis Guryanov</td>
<td>3 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 250 000 $</td></tr>
<tr><td>Jake McCabe</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Nikolay Goldobin</td>
<td>2 100 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Pavel Zacha</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Gustav Forsling</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Ryan Donato</td>
<td>1 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>Joseph Blandisi</td>
<td>1 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td>Denis Malgin</td>
<td>1 225 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 225 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 225 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 225 000 $</td></tr>
<tr><td>Dylan Cozens</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Ryan Poehling</td>
<td>900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 59 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 47 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 33 050 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 59 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 47 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 33 050 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 59 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 47 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 33 050 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Christian Fischer</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>J.T. Compher</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Vladislav Gavrikov</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Trent Frederic</td>
<td>150 000 $ (3)</td></tr>
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
<tr><td>Zach Whitecloud</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Casey Fitzgerald</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Henrik Borgstrom</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jean-Sébastien Dea</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Felix Sandström</td>
<td>117 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>117 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>117 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>117 500 $</td></tr>
<tr><td>Damir Zhafyarov</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Jason Robertson</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jan Jenik</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Michael DiPietro</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Nick Robertson</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Rasmus Sandin</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Moritz Seider</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Dawson Mercer</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Josh Norris</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Matej Tomek</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jeremy Bracco</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ziyat Paigin</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Cam Hillis</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Aidan Dudas</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Josh Mahura</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Glenn Gawdin</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Scott Walford</td>
<td>78 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>78 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>78 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>78 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 038 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 055 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 430 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 038 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 055 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 430 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Centre Canadian Tire</td></tr>
<tr><td>Level 1: </td><td>8500 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 85 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2153 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 215 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>21153</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 45 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>73 978 333 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>73 978 333 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 900 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 876 555 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>10 876 555 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Erik Karlsson</td>
<td>8 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Ryan Johansen (Out of Payroll)</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Roman Josi</td>
<td>6 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Jamie McBain</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Michael Frolik</td>
<td>4 650 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 650 000 $</td></tr>
<tr><td>Robin Lehner</td>
<td>4 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Michael Grabner</td>
<td>4 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Vladislav Kamenev</td>
<td>4 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 200 000 $</td></tr>
<tr><td>Ethan Bear</td>
<td>3 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 900 000 $</td></tr>
<tr><td>Dylan McIlrath</td>
<td>3 850 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 850 000 $</td></tr>
<tr><td>Kyle Clifford</td>
<td>3 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Jarred Tinordi</td>
<td>3 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 800 000 $</td></tr>
<tr><td>Ryan Dzingel</td>
<td>3 645 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 645 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 645 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 645 000 $</td></tr>
<tr><td>Ben Chiarot</td>
<td>3 333 333 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 333 333 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 333 333 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 333 333 $</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Tyler Biggs</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Noah Rod</td>
<td>2 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Maxwell Reinhart</td>
<td>1 950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Igor Bobkov</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Nick Paul</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Robert Thomas</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 81 478 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 50 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 37 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 900 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 81 478 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 50 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 37 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 900 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 81 478 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 50 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 37 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 900 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andrew Nielsen</td>
<td>197 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>197 500 $</td></tr>
<tr><td>Maxim Shalunov</td>
<td>185 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Sonny Milano</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Arttu Ruotsalainen</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Danick Martel</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Matt Puempel</td>
<td>160 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Connor Rankin</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Stephon Williams</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Ilya Konovalov</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Zach Parise</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Hunter Drew</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Kevin Roy</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Gustav Possler</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Louick Marcotte</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Stanislav Galiev</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Tanner Jeannot</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Jayden Halbgewachs</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Max McCormick</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Cody Donaghey</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Jack Hughes</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Trevor Zegras</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Mason Geertsen</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Aarne Talvitie</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>50 000 $</td></tr>
<tr><td>Brinson Pasichnuk</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Chase De Leo</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jérémy Grégoire</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Kole Lind</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jack Gorniak</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 612 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 617 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 732 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 577 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 582 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 697 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
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
<tr><td>Level 4: </td><td>7000 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1500 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>25000</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>81 125 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>81 125 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>184 638 813 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>184 638 813 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Elias Pettersson</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Claude Giroux</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Andrei Svechnikov</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Adam Larsson</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Matt Dumba</td>
<td>6 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Ryan Murray</td>
<td>6 000 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Josh Morrissey</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Pierre-Luc Dubois</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Nicolas Kerdiles</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Scott Darling</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Travis Brown</td>
<td>2 850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td>Nick Schmaltz</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Phillip Di Giuseppe</td>
<td>2 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Johan Larsson</td>
<td>2 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Duncan Keith</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>David Rundblad</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Alexis Loiseau</td>
<td>1 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td>Joakim Nordstrom</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>David Rittich</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Casey Mittelstadt</td>
<td>925 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>925 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 81 125 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 675 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 50 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 17 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 81 125 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 675 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 50 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 17 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 81 125 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 675 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 50 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 17 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Teemu Eronen</td>
<td>195 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Randy Gazzola</td>
<td>170 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Mike Winther</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Alexandre Mallet</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Michael Parks</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Vladimir Sobotka</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Daniel Brickley</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jakub Kovar</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Markus Niemelainen</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Keegan Kolesar</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Wojtek Wolski</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Sebastian Repo</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Nikita Filatov</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Brendan Ranford</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Anthony Brodeur</td>
<td>77 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Zach Budish</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Brian Lashoff</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Jordie Benn</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Peter Mueller</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Kyle Okposo</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Aaron Dell</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Chris Martenet</td>
<td>60 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 212 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 655 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 212 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 655 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Consol Energy Center</td></tr>
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>71 950 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>71 950 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 200 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>2 100 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>2 100 000 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>81 900 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-62 900 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>595 281 535 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>595 281 535 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jordan Staal</td>
<td>7 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td>James Reimer</td>
<td>5 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Andre Burakovsky</td>
<td>5 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Josh Bailey</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Ryan Spooner</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Jake DeBrusk</td>
<td>4 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Andrew Cogliano</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Michael Matheson</td>
<td>3 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Tim Erixon</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Zack Phillips</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Troy Stecher</td>
<td>3 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Mac Weegar</td>
<td>2 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 900 000 $</td></tr>
<tr><td>Adam Lowry</td>
<td>2 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Conor Sheary</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>2 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Ryan Lomberg</td>
<td>2 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Victor Olofsson</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Ivan Barbashev</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Anthony DeAngelo</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Nico Sturm</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Kaapo Kähkönen</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td>Mike Green</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td>Colin White</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 71 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 71 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 71 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 12 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Josef Korenar</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Alexander Delnov</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Zachary Senyshyn</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Oliver Kylington</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Robert Bortuzzo</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Axel Andersson</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Andrew O'Brien</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Skyler McKenzie</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Mac Bennett</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Dominik Simon</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Julius Nättinen</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Ryan Wilson</td>
<td>97 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Matt Martin</td>
<td>97 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Greg Meireles</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Raphael Lavoie</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jerry D'Amigo</td>
<td>85 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 500 $</td></tr>
<tr><td>Charlie Lindgren</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Janne Kuokkanen</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Mikhail Maltsev</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Liam Kirk</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Reid Duke</td>
<td>77 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 000 $</td></tr>
<tr><td>Jayson Megna</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Ostap Safin</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Max Hermens</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Alexis Gravel</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Sean Day</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 757 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 750 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 757 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 750 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Colisée Pepsi</td></tr>
<tr><td>Level 1: </td><td>6000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6000 - 110 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4176 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 350 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>20176</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 45 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>79 700 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>79 700 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 350 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>2 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>2 000 000 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>82 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-63 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>149 360 111 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>149 360 111 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Paul Stastny</td>
<td>8 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Marc-Edouard Vlasic</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Jamie Benn</td>
<td>6 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 800 000 $</td></tr>
<tr><td>John Carlson</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>James Van Riemsdyk</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Petr Mrazek</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Dan DeKeyser</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Christopher Tanev</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Kyle Palmieri</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Mike Reilly</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Alex Tuch</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Lukas Sedlak</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Matthew Peca</td>
<td>2 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Brett Connolly</td>
<td>2 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Zach Aston-Reese</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Connor Brown</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Shane Hanna</td>
<td>2 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Connor Murphy</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Gabriel Gagné</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Dillon Fournier</td>
<td>1 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>Sami Aittokallio</td>
<td>1 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td>Maxime Comtois</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Joel Farabee</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Jack Evans (Out of Payroll)</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 80 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 49 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 23 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 10 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 80 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 49 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 23 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 10 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 80 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 49 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 23 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 10 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Marian Studenic</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Austin Strand</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>David Kampf</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Gavin Bayreuther</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Blake Coleman</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Brett Lernout</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Mason McDonald</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Dmitry Sokolov</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Vitali Abramov</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Philip Lane</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Cody Glass</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Maxime Lajoie</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Brad Morrison</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jake Bean</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Yakov Trenin</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Morgan Geekie</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Isaac Ratcliffe</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nate Schnarr</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Olivier Roy</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Callum Booth</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Sean Durzi</td>
<td>83 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>83 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>83 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>83 000 $</td></tr>
<tr><td>Stelio Mattheos</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Frédéric Allard</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Filip Kral</td>
<td>77 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Arvid Henrikson</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 578 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 555 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 917 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 578 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 555 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 917 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">HP Pavilion</td></tr>
<tr><td>Level 1: </td><td>7500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>6500 - 122 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>4000 - 72 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 62 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>3000 - 240 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>25000</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 32 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 14 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>83 550 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>83 550 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 250 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>189 473 325 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>189 473 325 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jaroslav Halak</td>
<td>12 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>12 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>12 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>12 000 000 $</td></tr>
<tr><td>Keith Yandle</td>
<td>7 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td>Jack Johnson</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Brandon Sutter</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Matthew Nieto</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Jacob Josefson</td>
<td>6 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Clayton Keller</td>
<td>5 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 750 000 $</td></tr>
<tr><td>Luke Schenn</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Ryan Pulock</td>
<td>3 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Artturi Lehkonen</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Frank Corrado</td>
<td>2 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>A.J. Greer</td>
<td>2 650 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 650 000 $</td></tr>
<tr><td>Chris Bigras</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Brock McGinn</td>
<td>2 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 300 000 $</td></tr>
<tr><td>Warren Foegele</td>
<td>2 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Maxime St-Cyr</td>
<td>1 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Alex Nedeljkovic</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Francis Perron</td>
<td>1 450 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 450 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 450 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 450 000 $</td></tr>
<tr><td>Julien Nantel</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td>Antoine Waked</td>
<td>1 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td>Timo Meier</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Bruno-Carl Denis</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 49 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 13 800 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 49 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 13 800 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 49 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 13 800 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Philippe Myers</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Martins Dzierkals</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jean-Christophe Beaudin</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Jérémy Lauzon</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Alexandre Fortin</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Manuel Wiederer</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Noah Dobson</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Joey Anderson</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Evan Nause</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>William Dufour</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alex Beaucage</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Peter Abbandonato</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Félix Bibeau</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Chase Marchand</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Joel Teasdale</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Rafaël Harvey-Pinard</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Samuel Harvey</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Mathieu Gagnon</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Zachary Emond</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>William Rouleau</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Samuel Regis</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Justin Bergeron</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Alexis Arsenault</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Jacob Neveu</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Zachary Lauzon</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Vincent Marleau</td>
<td>55 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>55 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>55 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>55 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 440 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 705 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 440 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 705 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#SeattleKraken">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Amazon Center</td></tr>
<tr><td>Level 1: </td><td>5500 - 145 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 120 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>5000 - 76 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>6000 - 57 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>3000 - 390 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>25000</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 975 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 975 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 750 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>77 515 864 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>77 515 864 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Suter</td>
<td>8 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>Max Pacioretty</td>
<td>8 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Jakub Voracek</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Brayden Schenn</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Noah Hanifin</td>
<td>7 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Steve Mason</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Devante Smith-Pelly</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Nikolai Knyzhov</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Kasperi Kapanen</td>
<td>3 125 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 125 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 125 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 125 000 $</td></tr>
<tr><td>Tyson Jost</td>
<td>2 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Samuel Morin</td>
<td>2 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 800 000 $</td></tr>
<tr><td>Drake Caggiula</td>
<td>2 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Joe Morrow</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Jake Dotchin</td>
<td>2 500 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Anton Slepyshev</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Matthew Finn</td>
<td>2 100 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Austin Watson</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Tyson Baillie</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Reid Boucher</td>
<td>1 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Mattias Janmark-Nylen</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Juuse Saros</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Jaedon Descheneau</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 250 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 975 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 65 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 47 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 27 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 975 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 65 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 47 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 27 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 975 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 65 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 47 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 27 750 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alex Lyon</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Jordan Schneider</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Filip Berglund</td>
<td>197 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>197 500 $</td></tr>
<tr><td>Connor Bunnaman</td>
<td>170 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Parker Kelly</td>
<td>170 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Brett Murray</td>
<td>160 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Yevgeni Svechnikov</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Patrik Nemeth</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Stephen Johns</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Chaz Reddekopp</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Jonathan Bernier</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Nick Ebert</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Maxim Mamin</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Vinni Lettieri</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Rem Pitlick</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Brayden Burke</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Adam Ruzicka</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Joseph Garreffa</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Justin Brazeau</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Alexandre Bélanger</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Braydyn Chizen</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Matthew Bradley</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Mason Shaw</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>William Lockwood</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Corey Schueneman</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Kevin Hancock</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 195 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 782 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 195 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 782 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scottrade Center</td></tr>
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>83 850 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>83 850 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 100 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>300 841 668 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>300 841 668 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ondrej Pavelec</td>
<td>7 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td>Mark Stone</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Nazem Kadri</td>
<td>7 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Niklas Hjalmarsson</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Brady Skjei</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Valeri Nichushkin</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Tanner Pearson</td>
<td>5 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 300 000 $</td></tr>
<tr><td>Jamie Oleksiak</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Curtis Lazar</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Artemi Panarin</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Radek Faksa</td>
<td>3 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Theodor Blueger</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Andreas Borgman</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Nikita Tryamkin</td>
<td>2 850 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 850 000 $</td></tr>
<tr><td>Morgan Klimchuk</td>
<td>2 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Nikita Soshnikov</td>
<td>1 850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 850 000 $</td></tr>
<tr><td>John Hayden</td>
<td>1 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Valentin Zykov</td>
<td>1 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 600 000 $</td></tr>
<tr><td>Keith Aulie</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Ian McCoshen</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Frans Nielsen</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 400 000 $</td></tr>
<tr><td>Ivan Nalimov</td>
<td>1 100 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 100 000 $</td></tr>
<tr><td>Dillon Heatherington</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 48 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 17 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 48 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 17 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 48 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 17 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jordan Szwarz</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Marcus Hogberg</td>
<td>195 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Michael Mersch</td>
<td>185 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Jacob Larsson</td>
<td>185 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Michael Paliotta</td>
<td>165 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Miroslav Svoboda</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Andrey Makarov</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Niklas Hansson</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Joonas Donskoi</td>
<td>127 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>127 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>127 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>127 500 $</td></tr>
<tr><td>Peter Stoykewych</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Steve Weinstein</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Sean Kuraly</td>
<td>122 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>122 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>122 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>122 500 $</td></tr>
<tr><td>Cory Conacher</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Tomas Vincour</td>
<td>112 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>112 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>112 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>112 500 $</td></tr>
<tr><td>Kevin Klein</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Mason Appleton</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Adam Burish</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alex Dostie</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Ludwig Bystrom</td>
<td>89 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>89 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>89 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>89 000 $</td></tr>
<tr><td>Zach Trotman</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ralfs Freibergs</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Tye Felhaber</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Oskar Steen</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Dennis Yan</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Blake Speers</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Austin Lemieux</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 114 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 032 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 442 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 165 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 114 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 032 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 442 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 165 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Tampa Bay Times Forum</td></tr>
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>84 380 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>84 130 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>222 315 022 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>222 315 022 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tyler Seguin</td>
<td>8 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 500 000 $</td></tr>
<tr><td>P.K. Subban</td>
<td>8 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 750 000 $</td></tr>
<tr><td>Evander Kane</td>
<td>6 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Elias Lindholm</td>
<td>6 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Émile Poirier</td>
<td>6 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Alexander Wennberg</td>
<td>5 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 800 000 $</td></tr>
<tr><td>Boone Jenner</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Simon Despres</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Nikita Zadorov</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 500 000 $</td></tr>
<tr><td>Esa Lindell</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Bryan Rust</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Patrice Cormier</td>
<td>2 950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 950 000 $</td></tr>
<tr><td>Eric Staal</td>
<td>2 780 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 780 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 780 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 780 000 $</td></tr>
<tr><td>Malcolm Subban</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Tucker Poolman</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Ken Appleby</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Pavel Padakin</td>
<td>1 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Andreas Athanasiou</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Marcus Kruger</td>
<td>1 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>Josh Ho-Sang</td>
<td>1 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 300 000 $</td></tr>
<tr><td>Miro Heiskanen</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Quinn Hughes</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Tyler Toffoli</td>
<td>800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>800 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 84 380 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 51 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 45 550 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 84 130 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 72 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 51 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 45 800 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 84 130 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 72 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 51 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 45 800 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Riley Stadel</td>
<td>155 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>155 000 $</td></tr>
<tr><td>Pontus Aberg</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Patrick Holland</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Lucas Wallmark</td>
<td>150 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Freddie Hamilton</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Liam O'Brien</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Ben Smith</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Adam Wilcox</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Mads Eller</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Nicolas Aubé-Kubel</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Austin Wagner</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Brandon Burlon</td>
<td>97 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Ryan Merkley</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Spencer Knight</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alex Newhook</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Dmytro Timashov</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Kaedan Korczak</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ty Dellandrea</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Sam Jardine</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Markus Granlund</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Matt Schmalz</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Mattias Ekholm</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tomas Jurco</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Patrick Moynihan</td>
<td>50 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>50 000 $</td></tr>
<tr><td>Braden Schneider</td>
<td>50 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>50 000 $</td></tr>
<tr><td>Kasper Krog</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 515 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 570 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 587 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 150 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 515 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 570 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 587 500 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 150 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Air Canada Center</td></tr>
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 650 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 650 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 900 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>107 297 839 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>107 297 839 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mikko Rantanen</td>
<td>7 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Sebastian Aho</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Morgan Rielly</td>
<td>6 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Mike Richards</td>
<td>6 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Adam Henrique</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>T.J. Brennan</td>
<td>5 600 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 600 000 $</td></tr>
<tr><td>Ville Pokka</td>
<td>5 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Mikael Granlund</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Saku Maenalanen</td>
<td>4 300 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 300 000 $</td></tr>
<tr><td>Mikko Koskinen</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Petteri Lindbohm</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Teemu Pulkkinen</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Louis Leblanc</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Zack Kassian</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Emerson Etem</td>
<td>2 700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 700 000 $</td></tr>
<tr><td>Joel Armia</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Jyrki Jokipakka</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Mikko Lehtonen</td>
<td>2 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 200 000 $</td></tr>
<tr><td>Anthony Stolarz</td>
<td>1 850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 850 000 $</td></tr>
<tr><td>Samuel Girard</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Mikko Koivu</td>
<td>800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>800 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 57 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 33 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 24 650 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 57 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 33 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 24 650 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 57 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 33 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 24 650 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ville Leskinen</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Lauri Korpikoski</td>
<td>197 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>197 500 $</td></tr>
<tr><td>Dominic Turgeon</td>
<td>195 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Jesse Blacker</td>
<td>170 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Juuso Ikonen</td>
<td>170 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Veini Vehvilainen</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Nikita Jevpalovs</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Christopher Gibson</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Steven Lorentz</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Aleksi Saarela</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Eetu Sopanen</td>
<td>135 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Teemu Turunen</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Oliwer Kaski</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Kyle Capobianco</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Lassi Thomson</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Olli Juolevi</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Otto Somppi</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Matias Maccelli</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Petrus Palmu</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Vladislav Kotkov</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Joni Jurmo</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Tuukka Tieksola</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Olivier Galipeau</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 935 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 085 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 035 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 365 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 935 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 085 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 035 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 365 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#VancouverCanucks">Team Records</a> ]
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
<tr><td>Level 4: </td><td>4000 - 98 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>2000 - 320 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>23910</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>83 350 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 850 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 850 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>148 791 497 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>148 791 497 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Connor McDavid</td>
<td>10 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 500 000 $</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Chris Driedger</td>
<td>7 200 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 200 000 $</td></tr>
<tr><td>Derek Stepan</td>
<td>6 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 000 $</td></tr>
<tr><td>Dougie Hamilton</td>
<td>6 650 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 650 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 650 000 $</td></tr>
<tr><td>Matthew Tkachuk</td>
<td>6 000 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>5 400 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>5 300 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 300 000 $</td></tr>
<tr><td>Jason Demers</td>
<td>4 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 800 000 $</td></tr>
<tr><td>Filip Zadina</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Matt Grzelcyk</td>
<td>2 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Ahti Oksanen</td>
<td>2 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 750 000 $</td></tr>
<tr><td>Vitek Vanecek</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Stefan Matteau</td>
<td>2 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 400 000 $</td></tr>
<tr><td>Tobias Enstrom</td>
<td>1 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Quinton Howden</td>
<td>1 700 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 700 000 $</td></tr>
<tr><td>Erik Cernak</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Jordan Oesterle</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Loui Eriksson</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Kaapo Kakko</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Matt Filipe</td>
<td>800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>800 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 68 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 60 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 32 350 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 68 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 60 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 32 350 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 68 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 60 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 32 350 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Anton Forsberg</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Mattias Backman</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Carl Klingberg</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Jérémy Davies</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Mattias Tedenby</td>
<td>190 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>MacKenzie MacEachern</td>
<td>180 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Joseph Labate</td>
<td>180 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Lean Bergmann</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Anton Lander</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Brandon Hagel</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Marc-Andre Gragnani</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Nicklas Jensen</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Brandon Halverson</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Trevor Carrick</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Mats Zuccarello</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Jakub Jerabek</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Spencer Smallman</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>David Desharnais</td>
<td>100 000 $ (1)</td></tr>
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
<tr><td>David Schlemko</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alexis Pepin</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Lucas Johansen</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Matt O'Connor</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Connor Crisp</td>
<td>72 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>72 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>72 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>72 500 $</td></tr>
<tr><td>Alex Peters</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Matthew Cairns</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 297 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 567 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 990 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 297 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 567 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 990 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
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
<tr><td>Farm Level 1: </td><td>2000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>85 700 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>85 700 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(3 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>(3 000 000 $)</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>87 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-68 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>108 187 895 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>108 187 895 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrick Kane</td>
<td>9 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Kris Letang</td>
<td>8 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 000 000 $</td></tr>
<tr><td>Logan Couture</td>
<td>7 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 250 000 $</td></tr>
<tr><td>Patrik Laine</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Alexander Burmistrov</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Justin Schultz</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Matt Murray</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Darnell Nurse</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Mika Zibanejad</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Tomas Nosek</td>
<td>4 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 750 000 $</td></tr>
<tr><td>Brandon Gormley</td>
<td>4 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 250 000 $</td></tr>
<tr><td>Myles Bell</td>
<td>2 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Kevin Rooney</td>
<td>2 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 100 000 $</td></tr>
<tr><td>Xavier Ouellet</td>
<td>1 950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 950 000 $</td></tr>
<tr><td>Sergey Tolchinsky</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Michael Bunting</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Casey Cizikas</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Victor Antipin</td>
<td>1 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Darren Dietz</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Tim Stützle</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 000 $</td></tr>
<tr><td>Mike Amadio</td>
<td>850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>850 000 $</td></tr>
<tr><td>Daniel Vladar</td>
<td>850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>850 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 85 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 66 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 40 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 85 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 66 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 40 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 85 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 66 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 40 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Connor Hurley</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Yohann Auvitu </td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Brent Seabrook</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Lukas Bengtsson</td>
<td>195 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Justin Bailey</td>
<td>165 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Nathan Todd</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Connor Clifton</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Logan Shaw</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Kyle Keyser</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Connor Mackey</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Andrew Poturalski</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>German Rubtsov</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Will Borgen</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Luke Witkowski</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Dennis Cholowski</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dryden Hunt</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Vladislav Kolyachonok</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Cole Schwindt</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nathan Légaré</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jeff Malott</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nathan Bastian</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>David Gustafsson</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Daniil Tarasov</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Bernhard Ebner</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Lucas Feuk</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Riley Nash</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Vasili Koshechkin</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 282 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 585 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 245 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 195 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 282 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 585 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 245 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 195 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Verizon Center</td></tr>
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
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 700 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>83 366 667 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 800 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>35 068 050 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>35 068 050 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Ellis</td>
<td>7 800 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 800 000 $</td></tr>
<tr><td>Phil Kessel</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 500 000 $</td></tr>
<tr><td>Jaccob Slavin</td>
<td>6 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 250 000 $</td></tr>
<tr><td>Josh Harding</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 666 667 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 666 667 $</td></tr>
<tr><td>Simeon Varlamov</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 000 000 $</td></tr>
<tr><td>Nino Niederreiter</td>
<td>5 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 500 000 $</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>5 400 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 400 000 $</td></tr>
<tr><td>Michael Dal Colle</td>
<td>5 250 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 250 000 $</td></tr>
<tr><td>Mike Hoffman</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 000 000 $</td></tr>
<tr><td>Jared Cowen</td>
<td>4 700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 700 000 $</td></tr>
<tr><td>Vladislav Namestnikov</td>
<td>3 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Alex DeBrincat</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Kirill Kaprizov</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Oliver Wahlstrom</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Jonathon Merrill</td>
<td>2 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 250 000 $</td></tr>
<tr><td>Nick Ritchie</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Dominik Kahun</td>
<td>1 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 900 000 $</td></tr>
<tr><td>Samuel Blais</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 750 000 $</td></tr>
<tr><td>Alex Goligoski</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 000 000 $</td></tr>
<tr><td>Andrew Mangiapane</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>900 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 82 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 76 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 60 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 33 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 366 667 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 77 566 667 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 60 816 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 33 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 83 366 667 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 77 566 667 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 60 816 667 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 33 200 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Yegor Rykov</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Johnathan MacLeod</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Michael Rasmussen</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Logan Stanley</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Klim Kostin</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Liam Foudy</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Hudson Elynuik</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alexander Alexeyev</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alexei Melnichuk</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Artemi Knyazev</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Dmitry Zavgorodniy</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jordan Spence</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Dustin Wolf</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Bode Wilde</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Nikolai Kovalenko</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Markus Nurmi</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kristian Tanus</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tyler Steenbergen</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Valentin Nussbaumer</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Adam Musil</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Luke Henman</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Simon Gnyp</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 907 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 352 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 90 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 907 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 352 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 90 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">MTS Centre</td></tr>
<tr><td>Level 1: </td><td>6000 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>3000 - 90 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4004 - 85 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>2000 - 350 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>20004</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 18 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 1 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>84 100 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>84 100 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 750 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 84 000 050 $</td><td>84 000 050 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 65 000 050 $ </td><td><span style="color:red">-65 000 050 $</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>82 422 555 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>82 422 555 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Carey Price</td>
<td>10 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>10 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>10 500 000 $</td></tr>
<tr><td>Auston Matthews</td>
<td>9 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 000 000 $</td></tr>
<tr><td>Blake Wheeler</td>
<td>7 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 750 000 $</td></tr>
<tr><td>Dmitri Kulikov</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 000 000 $</td></tr>
<tr><td>Victor Hedman</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 500 000 $</td></tr>
<tr><td>Tyler Johnson</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 000 000 $</td></tr>
<tr><td>Anders Lee</td>
<td>3 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 750 000 $</td></tr>
<tr><td>Calvin de Haan</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 500 000 $</td></tr>
<tr><td>Mark Visentin</td>
<td>3 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 300 000 $</td></tr>
<tr><td>Sami Vatanen</td>
<td>3 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 200 000 $</td></tr>
<tr><td>Bryan Little</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 000 000 $</td></tr>
<tr><td>Nikita Scherbak</td>
<td>2 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 600 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 600 000 $</td></tr>
<tr><td>Rocco Grimaldi</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Jordan Caron</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 500 000 $</td></tr>
<tr><td>Milan Lucic</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 000 000 $</td></tr>
<tr><td>Cole Ully</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 800 000 $</td></tr>
<tr><td>Jordan Schmaltz</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Andrew Copp</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 500 000 $</td></tr>
<tr><td>Ryan Graves</td>
<td>1 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 200 000 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 84 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 76 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 54 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 84 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 76 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 54 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 84 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 76 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 54 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 21 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Michael Joly</td>
<td>195 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Alexander Avtsin</td>
<td>185 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Adam Tambellini</td>
<td>180 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Kevin Gravel</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Daniel Lafontaine</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jérôme Verrier</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Luke Kunin</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Brent Pedersen</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Tyler Cuma</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kay Schweri</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Oscar Fantenberg</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Rinat Valiev</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Nicolas Deslauriers</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kevin Lidström</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Antoine Marcoux</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Otto Koivula</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Matthew Phillips</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Connor Ingram</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jerome Gauthier-Leduc</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jean-François Bérubé</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Maxime Macenauer</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Joel Chouinard</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Frederic St-Denis</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Louis Domingue</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Alexandre Grenier</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Mark Alt</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Simon Stransky</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Olof Lindbom</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 005 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 805 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 005 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 805 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="STHSTeamFinance_SalaryCapCentrale"><a id="SalaryCapCentrale">Salary Cap Centrale</a></h1>
<table class="STHSFinance_TeamTable"><tr>
<td class="STHSCenter"><h3 class="STHSTeamFinance_Team">Team</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_CurrentFund">Current Fund</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_EstimatedSeasonSalaryCap">Estimated Season Salary Cap</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_UnderMaximum">Under Maximum of 84 000 050 $ <br/> Available Cap Space</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_OverMinimum">Over Minimum of<br />65 000 050 $</h3></td>
<td><h3 class="STHSTeamFinance_ProPlayers">Pro Players</h3></td><td><h3 class="STHSTeamFinance_FarmPlayers">Farm Players</h3></td><td><h3 class="STHSTeamFinance_TotalPlayers">Total Players</h3></td></tr>
<tr><td>Anaheim Ducks</td>
<td>91 409 992 $</td>
<td>(4 500 000 $)</td>
<td>88 500 050 $</td>
<td><span style="color:red">-69 500 050 $</span></td>
<td>22</td><td>29</td><td>51</td></tr>
<tr><td>Arizona Coyotes</td>
<td>105 438 640 $</td>
<td>1 400 000 $</td>
<td>82 600 050 $</td>
<td><span style="color:red">-63 600 050 $</span></td>
<td>22</td><td>27</td><td>49</td></tr>
<tr><td>Boston Bruins</td>
<td>15 929 151 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>23</td><td>25</td><td>48</td></tr>
<tr><td>Buffalo Sabres</td>
<td>(558 416 $)</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>22</td><td>29</td><td>51</td></tr>
<tr><td>Calgary Flames</td>
<td>61 032 333 $</td>
<td>(3 000 000 $)</td>
<td>87 000 050 $</td>
<td><span style="color:red">-68 000 050 $</span></td>
<td>20</td><td>22</td><td>42</td></tr>
<tr><td>Carolina Hurricanes</td>
<td>43 877 760 $</td>
<td>5 000 000 $</td>
<td>79 000 050 $</td>
<td><span style="color:red">-60 000 050 $</span></td>
<td>23</td><td>25</td><td>48</td></tr>
<tr><td>Chicago Blackhawks</td>
<td>137 257 942 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>21</td><td>21</td><td>42</td></tr>
<tr><td>Colorado Avalanche</td>
<td>70 473 176 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>22</td><td>22</td><td>44</td></tr>
<tr><td>Columbus Blue Jackets</td>
<td>50 842 607 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>23</td><td>25</td><td>48</td></tr>
<tr><td>Dallas Stars</td>
<td>39 554 272 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>21</td><td>27</td><td>48</td></tr>
<tr><td>Detroit Red Wings</td>
<td>59 572 258 $</td>
<td>(1 000 000 $)</td>
<td>85 000 050 $</td>
<td><span style="color:red">-66 000 050 $</span></td>
<td>21</td><td>20</td><td>41</td></tr>
<tr><td>Edmonton Oilers</td>
<td>59 343 791 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>23</td><td>26</td><td>49</td></tr>
<tr><td>Florida Panthers</td>
<td>116 572 376 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>22</td><td>25</td><td>47</td></tr>
<tr><td>Los Angeles Kings</td>
<td>129 752 885 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>21</td><td>23</td><td>44</td></tr>
<tr><td>Minnesota Wild</td>
<td>27 375 496 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>23</td><td>25</td><td>48</td></tr>
<tr><td>Montreal Canadiens</td>
<td>244 481 828 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>24</td><td>21</td><td>45</td></tr>
<tr><td>Nashville Predators</td>
<td>95 739 967 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>21</td><td>22</td><td>43</td></tr>
<tr><td>New Jersey Devils</td>
<td>76 091 901 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>22</td><td>22</td><td>44</td></tr>
<tr><td>New York Islanders</td>
<td>59 688 460 $</td>
<td>1 000 000 $</td>
<td>83 000 050 $</td>
<td><span style="color:red">-64 000 050 $</span></td>
<td>22</td><td>24</td><td>46</td></tr>
<tr><td>New York Rangers</td>
<td>74 881 791 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>22</td><td>27</td><td>49</td></tr>
<tr><td>Ottawa Senators</td>
<td>10 876 555 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>21</td><td>28</td><td>49</td></tr>
<tr><td>Philadelphia Flyers</td>
<td>184 638 813 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>21</td><td>22</td><td>43</td></tr>
<tr><td>Pittsburgh Penguins</td>
<td>595 281 535 $</td>
<td>2 100 000 $</td>
<td>81 900 050 $</td>
<td><span style="color:red">-62 900 050 $</span></td>
<td>23</td><td>26</td><td>49</td></tr>
<tr><td>Quebec Nordiques</td>
<td>149 360 111 $</td>
<td>2 000 000 $</td>
<td>82 000 050 $</td>
<td><span style="color:red">-63 000 050 $</span></td>
<td>24</td><td>25</td><td>49</td></tr>
<tr><td>San Jose Sharks</td>
<td>189 473 325 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>22</td><td>26</td><td>48</td></tr>
<tr><td>Seattle Kraken</td>
<td>77 515 864 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>22</td><td>26</td><td>48</td></tr>
<tr><td>St. Louis Blues</td>
<td>300 841 668 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>23</td><td>26</td><td>49</td></tr>
<tr><td>Tampa Bay Lightning</td>
<td>222 315 022 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>23</td><td>26</td><td>49</td></tr>
<tr><td>Toronto Maple Leafs</td>
<td>107 297 839 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>21</td><td>23</td><td>44</td></tr>
<tr><td>Vancouver Canucks</td>
<td>148 791 497 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>21</td><td>26</td><td>47</td></tr>
<tr><td>Vegas Golden Knights</td>
<td>108 187 895 $</td>
<td>(3 000 000 $)</td>
<td>87 000 050 $</td>
<td><span style="color:red">-68 000 050 $</span></td>
<td>22</td><td>27</td><td>49</td></tr>
<tr><td>Washington Capitals</td>
<td>35 068 050 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>20</td><td>22</td><td>42</td></tr>
<tr><td>Winnipeg Jets</td>
<td>82 422 555 $</td>
<td>0 $</td>
<td>84 000 050 $</td>
<td><span style="color:red">-65 000 050 $</span></td>
<td>20</td><td>28</td><td>48</td></tr>
</table>
<?php include "Footer.php";?>
