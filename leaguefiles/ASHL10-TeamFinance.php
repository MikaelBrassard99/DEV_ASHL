<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Team Finance</title>
<script src="ASHL10.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL10.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL10-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL10-STHSCareerStat.db";
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
[ <a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#AnaheimDucks">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>78 150 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>78 150 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 710 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 966 885 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 281 148 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 843 444 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 322 295 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>76 693 110 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>76 693 110 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>78 150 028 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>4 349 972 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>14 650 028 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>83 437 105 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>6 743 995 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Ovechkin</td>
<td>9 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>8 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td>Tyler Myers</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Cam Fowler</td>
<td>7 500 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Alexander Burmistrov</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Brock Boeser</td>
<td>5 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Émile Poirier</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Bryan Rust</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Taylor Doherty</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Kyle Connor</td>
<td>3 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Markus Nutivaara</td>
<td>2 750 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Jonathon Merrill</td>
<td>2 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Darren Dietz</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Devon Toews</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Pierre Engvall</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Ben Harpur</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Chris Wagner</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Andrey Pedan</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Colton Point</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td>Kalle Kossila</td>
<td>900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td>Ryan Fitzgerald</td>
<td>800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>760 656 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>760 656 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 58 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 45 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 40 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 58 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 45 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 40 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 58 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 45 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 40 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jonathan Audy-Marchessault</td>
<td>300 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>300 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>300 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>300 000 $</td></tr>
<tr><td>Scott Darling</td>
<td>250 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>250 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>250 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>250 000 $</td></tr>
<tr><td>Alex Barré-Boulet</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Anthony Beauvillier</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Robin Kovacs</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Sonny Milano</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Miro Heiskanen</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Adam Fox</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Filip Hronek</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Daniel Sprong</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Owen Tippett</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Troy Terry</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Juuso Välimäki</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Sami Niku</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nils Lundkvist</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Axel Holmstrom</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jacob Olofsson</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Kyle Wood</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Daniel Zaar</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tyler Parsons</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Michael Brodzinski</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Cole Sanford</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Joonas Lyytinen</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Nikita Korostelev</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 235 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 700 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 235 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Gila River Arena</td></tr>
<tr><td>Level 1: </td><td>5799 - 150 $ - 5 799 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 5 000 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 90 $ - 2 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 70 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>17799</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>17 799 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>2 354 850 $</td></tr>
<tr><td>Year to Date Revenue</td><td>2 354 850 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>87 855 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>87 855 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(6 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 443 690 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 440 246 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>4 320 738 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>23 548 500 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 481 230 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>85 911 340 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>85 911 340 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>81 855 006 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>644 994 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>18 355 006 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>88 240 227 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>25 877 387 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>John Tavares</td>
<td>10 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 508 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 508 197 $</td></tr>
<tr><td>Steven Stamkos</td>
<td>9 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td>Ryan Suter</td>
<td>8 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td>Logan Couture</td>
<td>7 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 893 443 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 893 443 $</td></tr>
<tr><td>Hampus Lindholm</td>
<td>6 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Zach Bogosian</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Bo Horvat</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Brandon Gormley</td>
<td>4 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td>Connor Hellebuyck</td>
<td>4 200 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 993 443 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 993 443 $</td></tr>
<tr><td>Andrew Shaw</td>
<td>3 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td>Alex DeBrincat</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Cole Cassels</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Marcel Noebels</td>
<td>2 995 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 847 705 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 995 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 847 705 $</td></tr>
<tr><td>Eric Staal</td>
<td>2 780 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 643 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 780 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 643 279 $</td></tr>
<tr><td>Travis Sanheim</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Jeff Carter</td>
<td>2 070 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 968 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 070 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 968 197 $</td></tr>
<tr><td>Karlis Cukste</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Oskar Lindblom</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Brian Elliott</td>
<td>1 260 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 198 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 260 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 198 033 $</td></tr>
<tr><td>Michael McCarron</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td>Reinhard Venter</td>
<td>650 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>618 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>618 033 $</td></tr>
<tr><td>Hakan Salt</td>
<td>650 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>618 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>618 033 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 87 855 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 68 285 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 50 245 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 42 450 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 87 855 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 68 285 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 50 245 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 42 450 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 87 855 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 68 285 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 50 245 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 42 450 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Matthew Finn</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Duncan Keith</td>
<td>197 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>197 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>197 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>197 000 $</td></tr>
<tr><td>Mattias Norstebo</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Rodrigo Abols</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Max Hermens</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Vilmos Gallo</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Mareks Mitens</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Vadim Vasjonkin</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Hafthor Sigrunarson</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kristers Gudlevskis</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Greg Meireles</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Trey Fix-Wolansky</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Semyon Der-Arguchintsev</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Skyler McKenzie</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Joachim Blichfeld</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jayden Halbgewachs</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jacob Ratcliffe</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Liam Kirk</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Arturas Laukaitis</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Yegor Sharangovich</td>
<td>77 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td>Kirill Steklov</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Jermaine Loewen</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Declan Bronte</td>
<td>65 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Marko Mladenovic</td>
<td>65 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Kacper Bartnik</td>
<td>60 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td>Gregorio Gios</td>
<td>50 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>50 000 $</td></tr>
<tr><td>Demid Yeremeyev</td>
<td>50 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>50 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>50 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 709 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 637 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 640 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 709 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 637 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 640 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#BostonBruins">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>79 850 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>79 516 667 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 250 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 050 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 303 552 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 910 656 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 350 000 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>78 300 000 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>78 300 000 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>79 516 672 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>2 983 328 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>16 016 672 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>23 840 336 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(54 459 664 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brad Marchand</td>
<td>9 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td>Josh Harding</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 666 667 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 338 798 $</td></tr>
<tr><td>Jamie Benn</td>
<td>6 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 465 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 465 574 $</td></tr>
<tr><td>John Carlson</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Charles McAvoy</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Josh Bailey</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Rickard Rakell</td>
<td>5 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>William Nylander</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Derrick Pouliot</td>
<td>4 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Marco Scandella</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Nico Hischier</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Olli Maatta</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Igor Shestyorkin</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Eric Gelinas</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Colton Sissons</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Marko Dano</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Scott Kosmachuk</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Frédérik Gauthier</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Vladimir Tkachev</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Mario Ferraro</td>
<td>950 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Dillon Dube</td>
<td>900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 66 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 46 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 300 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 516 667 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 67 316 667 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 46 816 667 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 966 667 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 516 667 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 67 316 667 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 46 816 667 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 966 667 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Cameron Gaunce</td>
<td>225 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>225 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>225 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>225 000 $</td></tr>
<tr><td>Calle Jarnkrok</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Jordan Schroeder</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Alexander Khokhlachev</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Riley Sheahan</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Dalton Thrower</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Hudson Fasching</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Michael Hutchinson</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Konrad Abeltshauser</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Zach Trotman</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Roland McKeown</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Jakob Forsbacka Karlsson</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Cody Glass</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Simon Tremblay</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Calvin Thurkauf</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Zane McIntyre</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Tim Bozon</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Brian Ferlin</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Adam Mascherin</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ben Sexton</td>
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
<tr><td>Tommy Cross</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Adam Courchaine</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 170 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 540 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 170 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 540 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">First Niagara Center</td></tr>
<tr><td>Level 1: </td><td>8500 - 88 $ - 8 500 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 55 $ - 5 500 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>3070 - 31 $ - 3 070 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 23 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 190 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>22070</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 8 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>22 070 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>1 427 670 $</td></tr>
<tr><td>Year to Date Revenue</td><td>1 427 670 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>79 065 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>79 065 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 954 016 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 296 148 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 855 656 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>11 421 360 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 328 934 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>77 078 172 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>77 078 172 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>79 032 240 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>3 467 760 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>15 532 240 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>15 539 963 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(50 116 849 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tyler Seguin</td>
<td>8 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td>Jordan Eberle</td>
<td>7 750 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 368 852 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 368 852 $</td></tr>
<tr><td>Kevin Shattenkirk</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Adam Henrique</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Ryan O'Reilly</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Jacob Markstrom</td>
<td>5 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 991 803 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 991 803 $</td></tr>
<tr><td>Max Friberg</td>
<td>4 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 088 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 088 525 $</td></tr>
<tr><td>Nathan Beaulieu</td>
<td>4 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td>Michael Grabner</td>
<td>4 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td>Anders Lee</td>
<td>3 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td>Dylan Olsen</td>
<td>3 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td>Connor Carrick</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Mattias Janmark-Nylen</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Joey Laleggia</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Nikita Soshnikov</td>
<td>1 850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 759 016 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 759 016 $</td></tr>
<tr><td>Slater Koekkoek</td>
<td>1 650 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 568 852 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 568 852 $</td></tr>
<tr><td>Alexei Mitrofanov</td>
<td>1 565 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 488 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 565 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 488 033 $</td></tr>
<tr><td>Trevor Murphy</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Oscar Dansk</td>
<td>1 400 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td>Jaedon Descheneau</td>
<td>1 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td>Jiri Sekac</td>
<td>1 150 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 093 443 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 150 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 093 443 $</td></tr>
<tr><td>Eric Cornel</td>
<td>1 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Ty Dellandrea</td>
<td>900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 065 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 75 165 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 63 515 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 065 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 75 165 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 63 515 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 065 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 75 165 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 63 515 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 750 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brad Hunt</td>
<td>220 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>220 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>220 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>220 000 $</td></tr>
<tr><td>Trevor Cox</td>
<td>195 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Daniel O'Regan</td>
<td>165 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Harrison Ruopp</td>
<td>135 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Elvis Merzlikins</td>
<td>135 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Sean Kuraly</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Jujhar Khaira</td>
<td>100 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Matthew Highmore</td>
<td>97 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Scott Laughton</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Carl Dahlstrom</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jesper Boqvist</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Rem Pitlick</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Jake Oettinger</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Ty Smith</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Julius Nättinen</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Timur Bilyalov</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nick Baptiste</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Lucas Carlsson</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Lukas Vejdemo</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Anatoli Golyshev</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Dominic Turgeon</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Maxim Letunov</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Ralfs Freibergs</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Filip Westerlund</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Cameron Morrison</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Peter Cehlarik</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Tomas Kubalik</td>
<td>55 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>55 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>55 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>55 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 730 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 537 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 852 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 235 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 730 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 537 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 852 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 235 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scotiabank Saddledome</td></tr>
<tr><td>Level 1: </td><td>7500 - 100 $ - 7 500 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>6500 - 60 $ - 6 500 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>3289 - 35 $ - 3 289 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>5000 - 20 $ - 5 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>2000 - 200 $ - 2 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>24289</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>24 289 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>1 755 115 $</td></tr>
<tr><td>Year to Date Revenue</td><td>1 755 115 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>83 995 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>83 995 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>4 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(2 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 278 444 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 376 967 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>4 130 901 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>14 040 920 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 426 148 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>82 716 584 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>82 716 584 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>81 994 987 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>505 013 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>18 494 987 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>57 211 453 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(11 464 211 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeni Malkin</td>
<td>9 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 318 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 318 033 $</td></tr>
<tr><td>Travis Hamonic</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Michael Del Zotto</td>
<td>6 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>Oliver Ekman-Larsson</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Teuvo Teravainen</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>James Reimer</td>
<td>5 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 467 213 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 467 213 $</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Jonathon Blum</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Tyler Wotherspoon</td>
<td>4 100 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 898 361 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 898 361 $</td></tr>
<tr><td>Pierre-Luc Dubois</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Damon Severson</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Ryan Dzingel</td>
<td>3 645 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 465 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 645 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 465 738 $</td></tr>
<tr><td>Kyle Palmieri</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Anton Slepyshev</td>
<td>2 950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 804 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 804 918 $</td></tr>
<tr><td>Chris Tierney</td>
<td>2 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Adrian Kempe</td>
<td>1 925 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 830 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 830 328 $</td></tr>
<tr><td>Oskar Sundqvist</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td>Olivier Roy</td>
<td>1 225 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 164 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 225 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 164 754 $</td></tr>
<tr><td>Greg Nemisz</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Riley Barber</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 83 995 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 53 195 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 34 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 28 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 83 995 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 53 195 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 34 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 28 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 83 995 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 53 195 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 34 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 28 600 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brandon Pirri</td>
<td>199 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>199 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>199 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>199 500 $</td></tr>
<tr><td>Jacob Larsson</td>
<td>185 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Jesper Fasth</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Antoine Vermette</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Ryan MacInnis</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Jack Lafontaine</td>
<td>145 045 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>145 045 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>145 045 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>145 045 $</td></tr>
<tr><td>Scott Wilson</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Michael Ferland</td>
<td>135 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 500 $</td></tr>
<tr><td>Melvin Nyffeler</td>
<td>135 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Danny Kristo</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Laurent Brossoit</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Louis Belpedio</td>
<td>125 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Dmitri Mikhailov</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Anton Zlobin</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Zach Boychuk</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Oscar Fantenberg</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Nick Paul</td>
<td>96 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>96 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>96 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>96 500 $</td></tr>
<tr><td>Dennis Gilbert</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Ryan Lindgren</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Leon Gawanke</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Yevgeni Svechnikov</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jiri Hudler</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Todd Burgess</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Luke Green</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 014 045 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 570 045 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 795 045 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 455 045 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 014 045 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 570 045 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 795 045 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 455 045 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">RBC Center</td></tr>
<tr><td>Level 1: </td><td>6500 - 150 $ - 6 500 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5180 - 105 $ - 5 180 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 68 $ - 2 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 37 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 345 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>18680</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>18 680 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>2 147 900 $</td></tr>
<tr><td>Year to Date Revenue</td><td>2 147 900 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>65 500 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>65 500 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>1 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 295 083 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 073 770 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 221 310 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>21 479 000 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 098 361 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>63 704 938 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>63 704 938 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>65 499 970 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>17 000 030 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>1 999 970 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>22 173 288 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(20 052 650 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tyler Johnson (Out of Payroll)</td>
<td>9 800 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 318 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 318 033 $</td></tr>
<tr><td>Loui Eriksson</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Milan Lucic</td>
<td>6 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>Jamie Oleksiak</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Cody Hodgson</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Calvin Pickard</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Jakob Silfverberg</td>
<td>3 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 137 705 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 137 705 $</td></tr>
<tr><td>Keaton Ellerby</td>
<td>3 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 137 705 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 137 705 $</td></tr>
<tr><td>Bryan Little</td>
<td>3 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td>Mark Barberio</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Joe Morrow</td>
<td>2 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Stefan Noesen</td>
<td>2 700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td>Cal Clutterbuck</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Lawson Crouse</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Josh Manson</td>
<td>2 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 281 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 281 967 $</td></tr>
<tr><td>Anthony Camara</td>
<td>2 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 186 885 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 186 885 $</td></tr>
<tr><td>Jordan Weal</td>
<td>2 100 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td>Jarred Tinordi</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Maxwell Reinhart</td>
<td>1 950 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 854 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 854 098 $</td></tr>
<tr><td>Theo Peckham</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td>Jhonas Enroth</td>
<td>1 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td>Reid Boucher</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 69 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 52 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 19 400 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 69 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 52 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 19 400 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 69 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 52 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 19 400 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Joni Ortio</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Andrew Ladd</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Zac Dalpe</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Ben Scrivens</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Sondre Olden</td>
<td>145 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>145 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>145 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>145 000 $</td></tr>
<tr><td>Michael Paliotta</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Patrik Nemeth</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Kenny Agostino</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Stephen Johns</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Carter Ashton</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Paul Byron</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Daniel Carr</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Joe Colborne</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Joey Hishon</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Ryan Pulock</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Markus Lauridsen</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Dominik Simon</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Alexei Bereglazov</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kiefer Sherwood</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Oscar Lindberg</td>
<td>93 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>93 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>93 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>93 000 $</td></tr>
<tr><td>Anton Volchenkov</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ales Hemsky</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Radovan Bondra</td>
<td>60 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 828 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 545 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 270 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 828 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 545 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 270 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>76 850 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>76 850 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 475 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>5 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 853 278 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 259 836 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 779 508 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 284 426 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>74 496 708 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>74 496 708 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>81 849 996 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>650 004 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>18 349 996 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>108 738 522 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>34 241 814 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Toews</td>
<td>9 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td>Evgeny Dadonov</td>
<td>8 600 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 177 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 177 049 $</td></tr>
<tr><td>Erik Karlsson</td>
<td>8 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td>David Backes</td>
<td>8 350 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 939 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 939 344 $</td></tr>
<tr><td>Marc Staal</td>
<td>7 100 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 750 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 750 820 $</td></tr>
<tr><td>Luca Sbisa</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Derick Brassard</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Adam Clendening</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Mitch Holmberg</td>
<td>3 125 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 971 311 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 125 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 971 311 $</td></tr>
<tr><td>Joakim Ryan</td>
<td>3 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Nikolay Prokhorkin</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>William Carrier</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Anders Lindback</td>
<td>2 150 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 044 262 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 150 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 044 262 $</td></tr>
<tr><td>Gustav Nyquist</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Mackenzie Blackwood</td>
<td>1 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td>Adam Helewka</td>
<td>1 350 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td>Greg Chase</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Antti Suomela</td>
<td>925 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>879 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>879 508 $</td></tr>
<tr><td>John Nyberg</td>
<td>850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td>Andreas Engqvist</td>
<td>750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>713 115 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>713 115 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 71 825 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 36 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 22 700 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 71 825 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 36 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 22 700 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 71 825 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 36 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 22 700 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Cody Franson</td>
<td>525 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>525 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>525 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>525 000 $</td></tr>
<tr><td>Jake Muzzin</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Austin Czarnik</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Nathan Walker</td>
<td>195 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Antti Raanta</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Julian Melchiori</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Mirko Hoefflin</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jason Fram</td>
<td>135 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Trevor Van Riemsdyk</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Enrico Miglioranzi</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Christopher DiDomenico</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Cooper Marody</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Philippe Paradis</td>
<td>117 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>117 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>117 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>117 500 $</td></tr>
<tr><td>Julien Pelletier</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Justin Holl</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Michael McNiven</td>
<td>100 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Justin Auger</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jimmy Huntington</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Zach Pochiro</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>MacKenzie Entwistle</td>
<td>92 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 000 $</td></tr>
<tr><td>Jakub Zboril</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Joe Hicketts</td>
<td>87 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Rourke Chartier</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Nikolai Zherdev</td>
<td>77 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 500 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 387 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 149 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 279 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 625 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 387 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 149 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 279 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 625 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>78 210 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>78 210 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 450 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 920 163 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 282 131 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 846 393 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 306 721 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>75 789 818 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>75 789 818 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>78 209 991 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>4 290 009 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>14 709 991 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>56 436 543 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(19 353 275 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeny Grachev</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Andrew Hammond</td>
<td>6 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td>Sean Monahan</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Dustin Byfuglien</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Martin Jones</td>
<td>5 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 467 213 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 467 213 $</td></tr>
<tr><td>Devin Setoguchi</td>
<td>5 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 039 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 039 344 $</td></tr>
<tr><td>Magnus Paajarvi</td>
<td>5 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 944 262 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 944 262 $</td></tr>
<tr><td>Yann Sauve</td>
<td>4 575 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 350 000 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 575 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 350 000 $</td></tr>
<tr><td>Nikita Filatov</td>
<td>4 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td>Alexander Kerfoot</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Jani Hakanpaa</td>
<td>3 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Andreas Englund</td>
<td>3 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td>Joachim Nermark</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Taylor Leier</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Alex Iafallo</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Robby Fabbri</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Gustav Olofsson</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td>Jason Zucker</td>
<td>1 850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 759 016 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 759 016 $</td></tr>
<tr><td>Christian Djoos</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Tim Heed</td>
<td>960 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>912 787 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>960 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>912 787 $</td></tr>
<tr><td>Yakov Trenin</td>
<td>925 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>879 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>879 508 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 210 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 60 010 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 45 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 26 825 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 210 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 60 010 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 45 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 26 825 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 210 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 60 010 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 45 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 26 825 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Carl Gunnarsson</td>
<td>235 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>235 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>235 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>235 000 $</td></tr>
<tr><td>Jake Walman</td>
<td>225 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>225 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>225 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>225 000 $</td></tr>
<tr><td>Peter Delmas</td>
<td>185 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Brett Cote</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Sergey Tolchinsky</td>
<td>165 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Stephen Silas</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Kurtis Gabriel</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Luke Moffatt</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>T.J. Galiardi</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Ryan Stanton</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Gus Young</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Dustin Tokarski</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Stephen MacAulay</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Troy Rutkowski</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Gavin Bayreuther</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Edward Pasquale</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ivan Barbashev</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Francis Beauvillier</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kyle Rau</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Sam Miletic</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Joseph Cramarossa</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Christoph Bertschy</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Keegan Iverson</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Brendan Warren</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 065 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 560 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 590 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 065 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 560 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 590 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Nationwide Arena</td></tr>
<tr><td>Level 1: </td><td>6144 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 99 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18144</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>74 150 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>74 150 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>2 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 745 083 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 215 574 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 646 722 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 248 361 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>72 404 938 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>72 404 938 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>76 150 014 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>6 349 986 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>12 650 014 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>29 615 063 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(42 789 875 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Henrik Lundqvist</td>
<td>12 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>11 885 246 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>12 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>11 885 246 $</td></tr>
<tr><td>Johnny Hockey Gaudreau</td>
<td>7 500 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Ryan Johansen</td>
<td>7 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Brent Seabrook</td>
<td>6 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 895 082 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 895 082 $</td></tr>
<tr><td>Andre Burakovsky</td>
<td>5 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Jonas Brodin</td>
<td>4 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Calvin de Haan</td>
<td>3 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Michael Sgarbossa</td>
<td>2 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 662 295 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 662 295 $</td></tr>
<tr><td>Shayne Gostisbehere</td>
<td>2 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Conor Sheary</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Mikhail Grigorenko</td>
<td>2 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 091 803 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 091 803 $</td></tr>
<tr><td>Nikita Nesterov</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Mirco Mueller</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Jason Dickinson</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Christian Dvorak</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Shawn Matthias</td>
<td>1 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td>Michael Chaput</td>
<td>1 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Barclay Goodrow</td>
<td>1 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Nikita Tryamkin</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Ilya Mikheyev</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Remi Elie</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Alexandar Georgiyev</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 74 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 50 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 37 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 74 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 50 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 37 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 74 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 50 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 37 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Reto Berra</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>T.J. Tynan</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Pius Suter</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Spencer Martin</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Anders Nilsson</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dominik Bokk</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Cal Foote</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alexander Dergachyov</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Adam Boqvist</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Emil Bemstrom</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>David Quenneville</td>
<td>92 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Shane Bowers</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Samuel Blais</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Anton Blidh</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Mattias Samuelsson</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Brendan Guhle</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Marcus Karlberg</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Raphael Lavoie</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Martin Kaut</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Brandon Hickey</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Carsen Twarynski</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Eric Locke</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Blake Siebenaler</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Filip Ahl</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 365 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 495 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 365 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 495 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">American Airlines Center</td></tr>
<tr><td>Level 1: </td><td>6532 - 119 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 79 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 57 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 39 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 265 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18532</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 34 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>81 655 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>79 392 500 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 200 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 114 179 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 301 516 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 904 548 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 371 393 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>79 540 794 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>79 540 794 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>79 392 476 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>3 107 524 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>15 892 476 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>32 226 388 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(47 314 406 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Shea Weber</td>
<td>9 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 237 500 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 881 557 $</td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>9 000 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td>Leon Draisaitl</td>
<td>8 200 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 796 721 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 796 721 $</td></tr>
<tr><td>Alex Petrovic</td>
<td>5 150 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 896 721 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 150 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 896 721 $</td></tr>
<tr><td>Brandon Saad</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Sean Couturier</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Duncan Siemens</td>
<td>4 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Jordan Binnington</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Max Domi</td>
<td>4 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 993 443 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 993 443 $</td></tr>
<tr><td>Mathew Barzal</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Tomas Tatar</td>
<td>3 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 422 951 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 422 951 $</td></tr>
<tr><td>Morgan Ellis</td>
<td>3 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td>Hunter Shinkaruk</td>
<td>3 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 947 541 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 947 541 $</td></tr>
<tr><td>Ryan Hartman</td>
<td>2 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 091 803 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 091 803 $</td></tr>
<tr><td>Haydn Fleury</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Nick Holden</td>
<td>1 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td>Mikko Koivu</td>
<td>1 670 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 587 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 670 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 587 869 $</td></tr>
<tr><td>Phillip Di Giuseppe</td>
<td>1 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td>Curtis McKenzie</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Brian Boyle</td>
<td>1 435 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 364 426 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 435 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 364 426 $</td></tr>
<tr><td>Chad Johnson</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 81 655 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 62 955 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 47 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 36 350 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 392 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 60 692 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 987 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 34 087 500 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 392 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 60 692 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 987 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 34 087 500 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Filip Gustavsson</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Conner Bleackley</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Cam Atkinson</td>
<td>197 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>197 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>197 500 $</td></tr>
<tr><td>Jayce Hawryluk</td>
<td>195 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Christian Jaros</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Jimmy Vesey</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Adam Brodecki</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Rob O'Gara</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Evan Fitzpatrick</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Isac Lundestrom</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Nils Höglander</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Parker Wotherspoon</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Lauri Korpikoski</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kyle Okposo</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Melker Karlsson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Colton Gillies</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Albin Eriksson</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tobias Lindberg</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Justin Kea</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Givani Smith</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 417 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 322 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 417 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 322 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#DetroitRedWings">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 800 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 800 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 050 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(1 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 185 246 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 357 377 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>4 072 131 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 395 082 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>80 914 756 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>80 914 756 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>81 799 997 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>700 003 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>18 299 997 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>43 316 517 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(37 598 239 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrik Laine</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Vyacheslav Voynov</td>
<td>7 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Jaden Schwartz</td>
<td>6 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Elias Lindholm</td>
<td>6 500 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Nick Leddy</td>
<td>6 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td>Torey Krug</td>
<td>6 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td>Ondrej Pavelec</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Mikael Granlund</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Mika Zibanejad</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Jaccob Slavin</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Stefan Elliott</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Alex Goligoski</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Andrew Cogliano</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Adam Lowry</td>
<td>2 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 662 295 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 662 295 $</td></tr>
<tr><td>Dave Bolland</td>
<td>1 950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 854 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 854 098 $</td></tr>
<tr><td>Michael Bournival</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Chandler Stephenson</td>
<td>1 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Max Görtz</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Jimmy Howard</td>
<td>1 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 045 902 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 045 902 $</td></tr>
<tr><td>Jack Hughes</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 82 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 64 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 57 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 050 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 82 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 64 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 57 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 050 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 82 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 64 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 57 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 050 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Kirill Petrov</td>
<td>215 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>215 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>215 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>215 000 $</td></tr>
<tr><td>Troy Stecher</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Zach Hyman</td>
<td>195 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Shane Prince</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Joseph Duszak</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Dennis Persson</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Brooks Macek</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jake Allen</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Philippe Hudon</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Alex Dubeau</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Tomas Vincour</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Mitchell Callahan</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Kale Clague</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Ryan Button</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Brady Tkachuk</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Miha Verlic</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dylan Sikura</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Rasmus Asplund</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Chris Wideman</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Josh Gorges</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Laurent Dauphin</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Luka Gracnar</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Brent Raedeke</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Chad Billins</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Dominic Zwerger</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Valtteri Filppula</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Kaspars Daugavins</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Andrew Agozzino</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 925 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 615 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 295 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 195 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 925 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 615 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 295 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 195 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#EdmontonOilers">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>75 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>75 050 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 400 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 813 933 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 230 328 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 690 984 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 271 311 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>73 736 038 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>73 736 038 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>75 050 008 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>7 449 992 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>11 550 008 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>51 109 095 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(22 626 943 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Taylor Hall</td>
<td>8 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 844 262 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 844 262 $</td></tr>
<tr><td>Marc-Andre Fleury</td>
<td>7 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Sam Gagner</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Brendan Gallagher</td>
<td>6 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Daniel Girardi</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Ryan Callahan</td>
<td>4 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 659 016 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 659 016 $</td></tr>
<tr><td>Chris Stewart</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Cody Ceci</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Tobias Rieder</td>
<td>3 600 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 422 951 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 422 951 $</td></tr>
<tr><td>Colten Teubert</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Martin Marincin</td>
<td>3 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td>Martin Gernat</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Matt Hackett</td>
<td>2 700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td>Kailer Yamamoto</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Cédric Paquette</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Bogdan Yakimov</td>
<td>1 400 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td>Mikko Vainonen</td>
<td>1 400 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td>Kieffer Bellows</td>
<td>1 350 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td>Brendan Lemieux</td>
<td>1 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td>Kirby Dach</td>
<td>950 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 52 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 40 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 34 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 52 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 40 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 34 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 52 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 40 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 34 600 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Teemu Hartikainen</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Toni Rajala</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Samu Perhonen</td>
<td>185 000 $ (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Tyler Bunz</td>
<td>185 000 $ (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Jared Knight</td>
<td>185 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Seth Griffith</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Jack Dougherty</td>
<td>170 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Valentin Zykov</td>
<td>160 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Dominik Masin</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Dillon Simpson</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Otto Leskinen</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Paul Bittner</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Patrick Khodorenko</td>
<td>130 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Devan Dubnyk</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Henri Jokiharju</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Michael McLeod</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Gabriel Vilardi</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Dmitri Samorukov</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jakub Lauko</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>J.D. Greenway</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Antoine Morand</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Matthew Spencer</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tyrell Goulbourne</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Cameron Hughes</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Alex Lintuniemi</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Beau Starrett</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 290 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 520 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 615 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 685 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 290 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 520 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 615 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 685 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">BankAtlantic Center</td></tr>
<tr><td>Level 1: </td><td>6500 - 150 $ - 6 500 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 85 $ - 5 500 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2250 - 50 $ - 2 250 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 30 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 300 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>19250</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>7</td></tr>
<tr><td>Average Attendance - %</td><td>19 250 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>1 975 000 $</td></tr>
<tr><td>Year to Date Revenue</td><td>1 975 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>76 533 333 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>75 993 333 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 750 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 862 296 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 245 792 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 737 376 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>13 825 000 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 287 432 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>74 671 056 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>74 671 056 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>75 993 312 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>6 506 688 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>12 493 312 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>102 342 724 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>41 496 668 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nikita Kucherov</td>
<td>9 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td>Jonathan Huberdeau</td>
<td>8 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td>Andrey Vasilevskiy</td>
<td>8 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td>Aaron Ekblad</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Dylan Larkin</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Nick Bjugstad</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Scott Harrington</td>
<td>5 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Joel Edmundson</td>
<td>4 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 088 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 760 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 575 082 $</td></tr>
<tr><td>Kyle Clifford</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Ben Chiarot</td>
<td>3 333 333 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 169 399 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 333 333 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 169 399 $</td></tr>
<tr><td>Zachary Werenski</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Madison Bowey</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Brendan Perlini</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Josh Anderson</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Zach Sanford</td>
<td>2 300 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 186 885 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 186 885 $</td></tr>
<tr><td>Alexander Nylander</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Liam Foudy</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td>Joe Veleno</td>
<td>850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td>Ville Husso</td>
<td>800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>760 656 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>760 656 $</td></tr>
<tr><td>Dana Tyrell</td>
<td>600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>570 492 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>570 492 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 533 333 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 58 383 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 54 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 26 300 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 993 333 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 57 793 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 560 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 26 300 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 993 333 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 57 793 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 560 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 26 300 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Matt Benning</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Alan Quine</td>
<td>180 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Rihards Bukarts</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Iiro Pakarinen</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Garrett Wilson</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Rasmus Sandin</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Juuso Riikola</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jordan Greenway</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alex Velischek</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tomas Hyka</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jan Kostalek</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Johan Gustafsson</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Vaclav Karabacek</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Aapeli Rasanen</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Linus Lindstrom</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Tanner Kaspick</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Keith Petruzzelli</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>17</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 1 690 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 840 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 1 690 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 840 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Staples Center</td></tr>
<tr><td>Level 1: </td><td>6118 - 98 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18118</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>81 850 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>81 850 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 116 393 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 341 803 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>4 018 032 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 374 590 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>79 726 220 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>79 726 220 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>81 842 606 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>657 394 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>18 342 606 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>100 674 656 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>20 948 436 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Anze Kopitar</td>
<td>9 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td>Jeff Skinner</td>
<td>8 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td>Drew Doughty</td>
<td>8 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td>Jordan Staal</td>
<td>7 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 893 443 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 893 443 $</td></tr>
<tr><td>Michal Neuvirth</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Corey Perry</td>
<td>6 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>Mark Pysyk</td>
<td>4 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td>Vincent Trocheck</td>
<td>4 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 993 443 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 993 443 $</td></tr>
<tr><td>Derek Forbort</td>
<td>3 850 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 660 656 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 660 656 $</td></tr>
<tr><td>Kevin Fiala</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Brett Ritchie</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Philipp Grubauer</td>
<td>2 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Kevin Hayes</td>
<td>2 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Rasmus Andersson</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Anthony Mantha</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Ben Hutton</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Jordan Martinook</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Tyler Bozak</td>
<td>1 350 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td>Miles Wood</td>
<td>1 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td>Thomas Chabot</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 81 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 66 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 65 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 81 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 66 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 65 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 81 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 66 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 65 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jerry D'Amigo</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Robert Hagg</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Laurin Braun</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Victor Mete</td>
<td>125 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Joonas Korpisalo</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Jordan Subban</td>
<td>115 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>115 000 $</td></tr>
<tr><td>Brendan Gaunce</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Caleb Jones</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Anthony Cirelli</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Mathieu Joseph</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Nicolas Roy</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Matt Luff</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Dante Fabbro</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Alexander Volkov</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Anders Bjork</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Mitchell Stephens</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ross Colton</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Adin Hill</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Nolan Stevens</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ryan Segalla</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Ryan Rupert</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Mikey Eyssimont</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Jeff Taylor</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Oleg Sosunov</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 412 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 252 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 412 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 252 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Xcel Energy Center</td></tr>
<tr><td>Level 1: </td><td>6568 - 80 $ - 6 568 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 58 $ - 5 000 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 2 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 20 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 188 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>18568</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>18 568 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>1 153 440 $</td></tr>
<tr><td>Year to Date Revenue</td><td>1 153 440 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>70 790 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>70 790 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 200 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>5 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 540 492 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 160 492 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 481 476 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>9 227 520 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 180 164 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>68 449 512 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>68 449 512 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>75 790 012 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>6 709 988 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>12 290 012 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>49 465 723 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(9 756 269 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Blake Wheeler</td>
<td>7 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 368 852 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 368 852 $</td></tr>
<tr><td>James Van Riemsdyk</td>
<td>5 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Kevin Labanc</td>
<td>5 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Ryan Murphy</td>
<td>4 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Petr Mrazek</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Jake Virtanen</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>JC Lipon</td>
<td>4 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Matt Dumba</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Aaron Ness</td>
<td>3 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td>Brandon McMillan</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Thatcher Demko</td>
<td>3 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td>Sven Andrighetto</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Dmitrij Jaskin</td>
<td>2 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Joe Pavelski</td>
<td>2 350 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 234 426 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 234 426 $</td></tr>
<tr><td>Shane Hanna</td>
<td>2 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Colby Cohen</td>
<td>2 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Devin Shore</td>
<td>1 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td>Andreas Athanasiou</td>
<td>1 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td>Neal Pionk</td>
<td>1 740 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 654 426 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 740 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 654 426 $</td></tr>
<tr><td>Dylan Demelo</td>
<td>1 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td>Byron Froese</td>
<td>1 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Nick Seeler</td>
<td>850 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 70 790 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 65 190 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 30 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 70 790 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 65 190 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 30 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 70 790 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 65 190 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 30 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Justin Kloos</td>
<td>290 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>290 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>290 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>290 000 $</td></tr>
<tr><td>Ryan Sproul</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Nikita Zaitsev</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Antoine Bibeau</td>
<td>170 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Sebastian Collberg</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Nick Sorensen</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Steve Weinstein</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Conor Garland</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Charles-Olivier Roussel</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>François Tremblay</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Daniil Zharkov</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Cody Almond</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jussi Jokinen</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Benoit Pouliot</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Tyler Graovac</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Maxim Noreau</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Reto Suri</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Anton Khudobin</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Erik Foley</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jay Beagle</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Roman Horak</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Adam Ginning</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Derek Dorsett</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Cale Fleury</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Justin Almeida</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ziga Pance</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>John Marino</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 255 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 915 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 290 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 255 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 915 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 290 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Bell Centre</td></tr>
<tr><td>Level 1: </td><td>7273 - 150 $ - 7 273 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 125 $ - 5 500 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2500 - 90 $ - 2 500 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4500 - 75 $ - 4 425 - 98,33%</td></tr>
<tr><td>Luxury : </td><td>1500 - 350 $ - 1 500 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>21273</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 10 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>21 198 - 99,65%</td></tr>
<tr><td>Average Income per Game</td><td>2 860 325 $</td></tr>
<tr><td>Year to Date Revenue</td><td>2 860 325 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>12</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>76 800 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>76 800 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>3 500 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 850 821 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 259 016 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 777 048 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>31 463 575 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 283 607 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>74 449 206 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>74 449 206 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>80 299 976 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>2 200 024 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>16 799 976 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>178 617 194 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>135 631 563 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sidney Crosby</td>
<td>10 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 508 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 508 197 $</td></tr>
<tr><td>Alex Pietrangelo</td>
<td>9 000 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td>Ryan Kesler</td>
<td>7 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Filip Forsberg</td>
<td>6 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 465 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 465 574 $</td></tr>
<tr><td>Roman Josi</td>
<td>6 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>Brandon Montour</td>
<td>6 500 000 $ (8)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Alexander Urbom</td>
<td>3 850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 660 656 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 660 656 $</td></tr>
<tr><td>Jakub Vrana</td>
<td>3 350 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 185 246 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 185 246 $</td></tr>
<tr><td>Anthony Duclair</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Danton Heinen</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Martin Reway</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Jan Rutta</td>
<td>2 100 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td>Ilya Samsonov</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Pavel Francouz</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td>Christophe Lalancette</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td>Julius Honka</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Greg McKegg</td>
<td>1 300 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td>Patrick Bjorkstrand</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Sam Lafferty</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Alex Lyon</td>
<td>975 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>927 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>975 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>927 049 $</td></tr>
<tr><td>Christian Wolanin</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Blake Lizotte</td>
<td>925 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>879 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>879 508 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 44 675 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 38 575 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 23 550 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 44 675 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 38 575 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 23 550 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 44 675 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 38 575 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 23 550 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alex Chiasson</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Hunter Drew</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Dean Kukan</td>
<td>115 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>115 000 $</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Nicolas Deslauriers</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Matteson Iacopelli</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Nolan Patrick</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Maximilian Veronneau</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Derek Mathers</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Yan-Pavel Laplante</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Josh Currie</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Sebastian Aho (D)</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Marcus Davidsson</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Niko Mikkola</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Noah Gregor</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Curtis Douglas</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Gaetan Haas</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Louis Domingue</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Rinat Valiev</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Alexis Gravel</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Bokondji Imama</td>
<td>68 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>68 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>68 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>68 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 033 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 185 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 033 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 185 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Bridgestone Arena</td></tr>
<tr><td>Level 1: </td><td>5113 - 150 $ - 5 113 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 110 $ - 5 000 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 70 $ - 2 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 50 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 350 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>17113</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>17 113 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>2 006 950 $</td></tr>
<tr><td>Year to Date Revenue</td><td>2 006 950 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>78 000 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>78 000 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 934 425 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 278 689 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 836 067 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>20 069 500 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 311 475 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>76 065 550 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>76 065 550 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>78 000 029 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>4 499 971 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>14 500 029 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>107 624 963 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>51 628 913 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mitch Marner</td>
<td>9 500 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td>Tyson Barrie</td>
<td>6 250 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td>Dmitri Orlov</td>
<td>6 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Justin Faulk</td>
<td>5 850 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 562 295 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 562 295 $</td></tr>
<tr><td>Sam Reinhart</td>
<td>5 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Johan Larsson</td>
<td>5 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Marc-Andre Bourdon</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Mikael Backlund</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Darren Helm</td>
<td>4 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 088 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 088 525 $</td></tr>
<tr><td>Brett Pesce</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Tristan Jarry</td>
<td>4 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Kirill Kaprizov</td>
<td>3 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Peter Trainor</td>
<td>2 600 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 472 131 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 472 131 $</td></tr>
<tr><td>Alec Martinez</td>
<td>2 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 186 885 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 186 885 $</td></tr>
<tr><td>Freddie Hamilton</td>
<td>1 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 616 393 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 616 393 $</td></tr>
<tr><td>Brett Pollock</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Trevor Moore</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Carter Hart</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Karson Kuhlman</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 66 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 43 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 43 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 66 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 43 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 43 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 66 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 43 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 43 200 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Joshua Jacobs</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Drew Shore</td>
<td>156 704 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>156 704 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>156 704 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>156 704 $</td></tr>
<tr><td>Christopher Gibson</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Chet Pickard</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Miikka Salomäki</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Marc-Olivier Roy</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Mark Jankowski</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>T.J. Brodie</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Mitch Moroz</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Nate Schmidt</td>
<td>115 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>115 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>115 000 $</td></tr>
<tr><td>Stuart Percy</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Taro Hirose</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Cristoval Nieves</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>John Quenneville</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Logan Brown</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Tage Thompson</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Patrick Wiercioch</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nicholas Caamano</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nick Palmieri</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Luke Adam</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Bode Wilde</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jonas Johansson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Spencer Stastney</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Kyle Platzer</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Dylan Blujus</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 721 704 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 440 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 885 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 721 704 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 440 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 885 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Prudential Center</td></tr>
<tr><td>Level 1: </td><td>5625 - 150 $ - 5 625 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 5 000 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 60 $ - 2 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 40 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 350 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>17625</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>17 625 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>2 098 750 $</td></tr>
<tr><td>Year to Date Revenue</td><td>2 098 750 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>72 950 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>76 950 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 661 476 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 261 475 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 784 425 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>16 790 000 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 220 492 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>70 788 536 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>70 788 536 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>76 949 975 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>5 550 025 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>13 449 975 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>72 303 768 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>18 305 232 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrice Bergeron</td>
<td>8 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td>Jack Eichel</td>
<td>8 000 000 $ (8)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 795 082 $</td></tr>
<tr><td>Jacob Trouba</td>
<td>6 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 893 443 $</td></tr>
<tr><td>Alexander Radulov</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>T.J. Brennan</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Jared McCann</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Henrik Samuelsson</td>
<td>3 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 613 115 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 613 115 $</td></tr>
<tr><td>Ondrej Kase</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Keith Kinkaid</td>
<td>3 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Steven Santini</td>
<td>3 300 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 137 705 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 137 705 $</td></tr>
<tr><td>Mark Katic</td>
<td>3 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td>Victor Rask</td>
<td>3 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td>Reilly Smith</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Will Butcher</td>
<td>2 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Alexander Semin</td>
<td>2 400 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 281 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 281 967 $</td></tr>
<tr><td>Alexander Delnov</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Travis Dermott</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Thomas Hickey</td>
<td>1 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 045 902 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 045 902 $</td></tr>
<tr><td>Kevin Stenlund</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Ilya Sorokin</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Adam Gaudette</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 72 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 57 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 51 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 42 850 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 58 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 52 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 850 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 58 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 52 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 41 850 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Scott Wedgewood</td>
<td>275 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>275 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>275 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>275 000 $</td></tr>
<tr><td>Christopher Tanev</td>
<td>250 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>250 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>250 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>250 000 $</td></tr>
<tr><td>Brendan Mikkelson</td>
<td>225 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>225 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>225 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>225 000 $</td></tr>
<tr><td>Adam Polasek</td>
<td>200 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Zach Hall</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Blake Coleman</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Lukas Sutter</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jackson Houck</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jeremy Smith</td>
<td>130 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Andrew Fritsch</td>
<td>125 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Lucas Lessio</td>
<td>120 000 $ (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Brenden Dillon</td>
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
<tr><td>Ryan Kuffner</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Roope Hintz</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Spencer Knight</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Michael Rasmussen</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Nolan Foote</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nick Merkley</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Gabriel Carlsson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Axel Andersson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Evan Barratt</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Taylor Raddysh</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Dysin Mayo</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Benjamin Finkelstein</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Michael Leighton</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Sam Kurker</td>
<td>55 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>55 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>55 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>55 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 377 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 897 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 802 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 520 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 377 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 897 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 802 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 520 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>74 725 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>74 725 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 773 361 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 225 000 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 675 000 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 257 787 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>72 951 646 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>72 951 646 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>74 725 000 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>7 775 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>11 225 000 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>71 443 798 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(1 507 848 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mark Stone</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>David Krejci</td>
<td>6 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 465 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 465 574 $</td></tr>
<tr><td>Ben Bishop</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Lars Eller</td>
<td>5 225 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 968 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 225 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 968 033 $</td></tr>
<tr><td>Seth Jones</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Erik Gudbranson</td>
<td>4 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 563 934 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 563 934 $</td></tr>
<tr><td>Michael Frolik</td>
<td>4 650 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 421 311 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 421 311 $</td></tr>
<tr><td>Dylan Strome</td>
<td>4 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Ondrej Palat</td>
<td>3 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Gabriel Bourque</td>
<td>3 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td>David Savard</td>
<td>3 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 090 164 $</td></tr>
<tr><td>Nick Cousins</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Vince Hinostroza</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Jyrki Jokipakka</td>
<td>2 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Jared Coreau</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Tom Wilson</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Tyson Baillie</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Patrick Holland</td>
<td>1 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Nikita Scherbak</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Noah Juulsen</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Vince Dunn</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Robbie Russo</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td>Kirill Kabanov</td>
<td>700 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>665 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>665 574 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 74 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 52 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 35 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 28 300 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 74 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 52 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 35 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 28 300 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 74 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 52 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 35 725 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 28 300 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>David Perron</td>
<td>450 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>450 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>450 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>450 000 $</td></tr>
<tr><td>Victor Olofsson</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Julius Bergman</td>
<td>185 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Brett Seney</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Jake Paterson</td>
<td>156 500 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>156 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>156 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>156 500 $</td></tr>
<tr><td>Alexandre Carrier</td>
<td>140 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Sean Malone</td>
<td>135 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Andrej Nestrasil</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Dane Fox</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Scott Mayfield</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Joel Eriksson Ek</td>
<td>120 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Jonathan Dahlen</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Brenden Kichton</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kerby Rychel</td>
<td>100 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Luke Kunin</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dominik Kubalik</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Cale Makar</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Yannick Weber</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Christopher Clapperton</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Julien Gauthier</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Brandon Gignac</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jérémy Roy</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Colton White</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jordan Bellerive</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Kevin Klima</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Shamil Shmakov</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Kelly Klima</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 321 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 226 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 736 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 276 500 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 321 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 226 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 736 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 276 500 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Madison Square Garden</td></tr>
<tr><td>Level 1: </td><td>5200 - 107 $ - 5 200 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 59 $ - 5 000 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 38 $ - 2 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 27 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 212 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>17200</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 27 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 11 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>17 200 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>1 247 400 $</td></tr>
<tr><td>Year to Date Revenue</td><td>1 247 400 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>79 275 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>79 275 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 850 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 009 425 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 299 590 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 898 770 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>9 979 200 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 336 475 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>77 515 550 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>77 515 550 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>79 274 990 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>3 225 010 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>15 774 990 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>72 060 556 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>4 524 206 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brayden Point</td>
<td>8 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td>Ryan McDonagh</td>
<td>7 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Aleksander Barkov</td>
<td>6 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>Nail Yakupov</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Alexander Wennberg</td>
<td>5 800 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 514 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 514 754 $</td></tr>
<tr><td>Shea Theodore</td>
<td>4 600 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 373 770 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 373 770 $</td></tr>
<tr><td>Ivan Provorov</td>
<td>4 500 000 $ (8)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>J.T. Miller</td>
<td>4 325 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 112 295 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 325 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 112 295 $</td></tr>
<tr><td>Jack Campbell</td>
<td>4 250 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td>Dylan McIlrath</td>
<td>3 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td>Travis Konecny</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Viktor Arvidsson</td>
<td>3 350 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 185 246 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 185 246 $</td></tr>
<tr><td>Jake McCabe</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Tyler Bertuzzi</td>
<td>2 150 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 044 262 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 150 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 044 262 $</td></tr>
<tr><td>Griffin Reinhart</td>
<td>2 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td>Erik Haula</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Anthony Stolarz</td>
<td>1 850 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 759 016 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 759 016 $</td></tr>
<tr><td>Adam Pelech</td>
<td>1 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td>Carter Verhaeghe</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Jesper Bratt</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Vladislav Gavrikov</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Nikolay Goldobin</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Damir Zhafyarov</td>
<td>850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 59 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 37 925 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 31 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 59 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 37 925 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 31 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 59 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 37 925 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 31 750 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ethan Bear</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Joseph Blandisi</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Gustav Forsling</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Brandon Carlo</td>
<td>165 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>165 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>165 000 $</td></tr>
<tr><td>Denis Guryanov</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Denis Malgin</td>
<td>122 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>122 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>122 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>122 500 $</td></tr>
<tr><td>Felix Sandström</td>
<td>117 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>117 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>117 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>117 500 $</td></tr>
<tr><td>J.T. Compher</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Christian Fischer</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Henrik Borgstrom</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Robert Thomas</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Jan Jenik</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Ryan Donato</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Michael DiPietro</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Josh Norris</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Josh Mahura</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Trent Frederic</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jeremy Bracco</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Cam Hillis</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Aidan Dudas</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Ziyat Paigin</td>
<td>88 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>88 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>88 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>88 000 $</td></tr>
<tr><td>Casey Fitzgerald</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>William Lagesson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Glenn Gawdin</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jon Gillies</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Matej Tomek</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 855 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 237 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 835 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 855 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 237 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 835 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Centre Canadian Tire</td></tr>
<tr><td>Level 1: </td><td>8500 - 100 $ - 8 500 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 85 $ - 5 500 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2153 - 60 $ - 2 153 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 50 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 215 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>21153</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 45 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>21 153 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>1 861 680 $</td></tr>
<tr><td>Year to Date Revenue</td><td>1 861 680 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>12</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>81 716 667 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 900 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(2 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 133 607 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 339 617 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>4 018 851 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>20 478 480 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 377 869 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>79 916 402 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>79 916 402 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>79 716 637 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>2 783 363 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>16 216 637 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>20 199 403 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(39 238 519 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patric Hornqvist</td>
<td>7 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 893 443 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 893 443 $</td></tr>
<tr><td>Alexander Edler</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Jonathan Drouin</td>
<td>6 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 666 667 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 387 978 $</td></tr>
<tr><td>Jason Spezza</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Zach Parise</td>
<td>5 850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 562 295 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 562 295 $</td></tr>
<tr><td>Jamie McBain</td>
<td>5 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Brayden McNabb</td>
<td>5 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Pekka Rinne</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Sam Bennett</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Brock Nelson</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Magnus Nygren</td>
<td>3 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 565 574 $</td></tr>
<tr><td>Zack Phillips</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Steven Kampfer</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Martin Frk</td>
<td>2 950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 804 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 804 918 $</td></tr>
<tr><td>Evan Rodrigues</td>
<td>2 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Drake Caggiula</td>
<td>2 750 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Benjamin Conz</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Jakob Chychrun</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td>Kevin Roy</td>
<td>1 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td>Jack Roslovic</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Tyson Jost</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Brogan Rafferty</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 82 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 41 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 23 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 81 716 667 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 41 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 23 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 81 716 667 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 41 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 23 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Maxim Shalunov</td>
<td>185 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Filip Berglund</td>
<td>180 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Igor Bobkov</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Arttu Ruotsalainen</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Danick Martel</td>
<td>175 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Andrew Nielsen</td>
<td>170 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Matt Puempel</td>
<td>160 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Stephon Williams</td>
<td>160 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Connor Rankin</td>
<td>160 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Ilya Konovalov</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Gustav Possler</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Max McCormick</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Cody Donaghey</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Ryan Tesink</td>
<td>97 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Marcus Sorensen</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Ian McCoshen</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Ales Music</td>
<td>87 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Mike Amadio</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Andre Petersson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>David Gustafsson</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kole Lind</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Denis Godla</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ivan Chekhovich</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jérémy Grégoire</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Mason Geertsen</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Luke Henman</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Alexis Pepin</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 185 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 040 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 422 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 160 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 185 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 040 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 422 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 160 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
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
<tr><td>Farm Level 1: </td><td>2000 - 80 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 50 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>76 150 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>76 150 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 950 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 843 444 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 248 361 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 745 083 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 281 148 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>74 306 584 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>74 306 584 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>76 150 021 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>6 349 979 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>12 650 021 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>103 146 917 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>28 840 333 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Quick</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Claude Giroux</td>
<td>7 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Adam Larsson</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Ryan Murray</td>
<td>6 000 000 $ (8)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Tomas Hertl</td>
<td>6 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Oscar Klefbom</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Mark Giordano</td>
<td>5 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 514 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 514 754 $</td></tr>
<tr><td>John Moore</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Travis Brown</td>
<td>2 850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 709 836 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 709 836 $</td></tr>
<tr><td>Nick Schmaltz</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Curtis Lazar</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Andreas Johnsson</td>
<td>2 200 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 091 803 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 091 803 $</td></tr>
<tr><td>Brendan Ranford</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td>Alexis Loiseau</td>
<td>1 600 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td>Nick Shore</td>
<td>1 400 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td>Joakim Nordstrom</td>
<td>1 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td>David Rundblad</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Jakub Kovar</td>
<td>1 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Andrei Svechnikov</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Elias Pettersson</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Aaron Dell</td>
<td>700 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>665 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>665 574 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 41 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 35 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 41 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 35 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 76 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 41 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 35 200 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Teemu Eronen</td>
<td>195 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Greg Pateryn</td>
<td>195 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Taylor Chorney</td>
<td>190 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Randy Gazzola</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Alex Plante</td>
<td>170 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Keith Aulie</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Alexandre Mallet</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Tyler Lewington</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Michael Parks</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Daniel Brickley</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Nick Suzuki</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Keegan Kolesar</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Fredrik Karlstrom</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Mike Winther</td>
<td>87 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>87 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>87 500 $</td></tr>
<tr><td>Jacob Peterson</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Nikita Popugaev</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Sebastian Repo</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Markus Niemelainen</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Anthony Brodeur</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Chris Martenet</td>
<td>60 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 372 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 280 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 372 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 280 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Consol Energy Center</td></tr>
<tr><td>Level 1: </td><td>6387 - 150 $ - 6 387 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 125 $ - 5 000 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 2 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 100 $ - 3 504 - 87,60%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>18387</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 900 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 800 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>17 891 - 97,30%</td></tr>
<tr><td>Average Income per Game</td><td>2 533 450 $</td></tr>
<tr><td>Year to Date Revenue</td><td>2 533 450 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>79 550 001 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>79 550 001 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 200 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>1 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 084 425 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 304 098 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 912 294 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>20 267 600 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 361 475 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>78 965 550 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>78 965 550 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>80 549 978 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>1 950 022 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>17 049 978 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>541 710 538 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>483 012 588 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Matt Duchene</td>
<td>8 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td>Cam Ward</td>
<td>7 800 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 416 393 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 416 393 $</td></tr>
<tr><td>Jakub Voracek</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Derek Stepan</td>
<td>6 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>Nicklas Backstrom</td>
<td>6 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 370 492 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 370 492 $</td></tr>
<tr><td>Erik Johnson</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Bobby Ryan</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Brandon Sutter</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Mike Hoffman</td>
<td>5 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Tim Erixon</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Adam Erne</td>
<td>2 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td>Vasili Koshechkin</td>
<td>2 000 001 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 640 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 001 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 640 $</td></tr>
<tr><td>Dion Phaneuf</td>
<td>1 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Henrik Zetterberg</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td>Wayne Simmonds</td>
<td>1 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td>Dustin Brown</td>
<td>1 400 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 331 148 $</td></tr>
<tr><td>Andrew O'Brien</td>
<td>1 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td>Kyle Turris</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Mac Bennett</td>
<td>1 100 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 045 902 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 045 902 $</td></tr>
<tr><td>Ryan Wilson</td>
<td>975 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>927 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>975 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>927 049 $</td></tr>
<tr><td>Matt Martin</td>
<td>975 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>927 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>975 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>927 049 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 550 001 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 70 650 001 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 52 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 32 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 550 001 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 71 650 001 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 33 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 79 550 001 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 71 650 001 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 53 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 33 750 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Anton Stralman</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Jan Kovar</td>
<td>130 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Robert Bortuzzo</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Vinny Saponari</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Justin Braun</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Sébastien Piché</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Stephen Weiss</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Maxime Talbot</td>
<td>97 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Patrick Killeen</td>
<td>97 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Milan Michalek</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Christian Ehrhoff</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Leo Komarov</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>David Jones</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Reid McNeill</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Charlie Lindgren</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Nico Sturm</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Mikhail Maltsev</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Reid Duke</td>
<td>77 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>77 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>77 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>77 000 $</td></tr>
<tr><td>Chad Ruhwedel</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Ostap Safin</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Ryan Collins</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Brandon Halverson</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Robin Norell</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Ryan Kujawinski</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Sean Day</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Dylan Labbé</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Linus Arnesson</td>
<td>45 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>45 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>45 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>45 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 427 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 772 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 315 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 427 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 772 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 315 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Colisée Pepsi</td></tr>
<tr><td>Level 1: </td><td>6000 - 150 $ - 6 000 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>6000 - 110 $ - 6 000 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>3000 - 75 $ - 3 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4176 - 50 $ - 4 176 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 350 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>20176</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 45 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>20 176 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>2 343 800 $</td></tr>
<tr><td>Year to Date Revenue</td><td>2 343 800 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>80 400 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>80 400 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 350 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 077 048 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 318 033 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 954 099 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>23 438 000 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 359 016 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>78 822 928 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>78 822 928 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>80 400 013 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>2 099 987 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>16 900 013 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>126 437 207 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>71 052 279 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Colin Wilson</td>
<td>7 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Ryan Getzlaf</td>
<td>6 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>T.J. Oshie</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Brendan Smith</td>
<td>6 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Simeon Varlamov</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Jake Guentzel</td>
<td>6 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Ilya Kovalchuk</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Kari Lehtonen</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Dan DeKeyser</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Mike Reilly</td>
<td>3 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Alex Tuch</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Mattias Ekholm</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Lukas Sedlak</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Brett Connolly</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Zach Aston-Reese</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Connor Brown</td>
<td>2 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Connor Murphy</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Brett Kulak</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Tom Kuhnhackl</td>
<td>1 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td>Gabriel Gagné</td>
<td>1 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 045 902 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 045 902 $</td></tr>
<tr><td>Tyler Motte</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 80 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 58 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 41 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 18 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 80 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 58 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 41 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 18 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 80 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 58 750 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 41 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 18 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Matthew Peca</td>
<td>280 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>280 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>280 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>280 000 $</td></tr>
<tr><td>Frank Vatrano</td>
<td>170 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Dillon Fournier</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>J.T. Brown</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Ivan Nalimov</td>
<td>110 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Mason McDonald</td>
<td>110 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Philip Lane</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Brett Lernout</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Maxime Lajoie</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Brad Morrison</td>
<td>95 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Maxime Comtois</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Nate Schnarr</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Isaac Ratcliffe</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Jack Evans</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Mikael Wikstrand</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Vitali Abramov</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Sean Durzi</td>
<td>83 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>83 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>83 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>83 000 $</td></tr>
<tr><td>Jack Nevins</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Frédéric Allard</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Ben Hanowski</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Scott Walford</td>
<td>78 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>78 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>78 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>78 000 $</td></tr>
<tr><td>Dmitry Sokolov</td>
<td>78 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>78 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>78 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>78 000 $</td></tr>
<tr><td>Brett MacLean</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Shane Eiserman</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Arvid Henrikson</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 544 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 596 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 385 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 220 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 544 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 596 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 385 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 220 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#SanJoseSharks">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>70 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>70 050 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 700 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(5 500 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 543 444 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 148 361 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 445 083 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 181 148 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>68 506 584 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>68 506 584 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>64 550 021 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>17 949 979 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>1 050 021 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>150 905 067 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>82 398 483 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jaroslav Halak</td>
<td>12 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>11 409 836 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>12 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>11 409 836 $</td></tr>
<tr><td>Paul Stastny</td>
<td>8 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 081 967 $</td></tr>
<tr><td>Tyler Ennis</td>
<td>7 350 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 988 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 988 525 $</td></tr>
<tr><td>Keith Yandle</td>
<td>7 250 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 893 443 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 893 443 $</td></tr>
<tr><td>Jack Johnson</td>
<td>7 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Clayton Keller</td>
<td>5 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 467 213 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 467 213 $</td></tr>
<tr><td>A.J. Greer</td>
<td>2 650 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 519 672 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 519 672 $</td></tr>
<tr><td>Marek Mazanec</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Radek Faksa</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Philippe Myers</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Francis Perron</td>
<td>1 450 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 378 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 450 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 378 689 $</td></tr>
<tr><td>Jérémy Lauzon</td>
<td>1 200 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Manuel Wiederer</td>
<td>1 200 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Timo Meier</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Noah Dobson</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Bruno-Carl Denis</td>
<td>950 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Warren Foegele</td>
<td>900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td>Alex Beaucage</td>
<td>900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td>Peter Abbandonato</td>
<td>850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td>Félix Bibeau</td>
<td>850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td>Joel Teasdale</td>
<td>850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td>Rafaël Harvey-Pinard</td>
<td>850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td>Jacob Neveu</td>
<td>650 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>618 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>618 033 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 70 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 64 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 36 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 17 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 70 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 64 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 36 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 17 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 70 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 64 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 36 550 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 17 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Matthew Nieto</td>
<td>600 000 $ (6)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>600 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>600 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>600 000 $</td></tr>
<tr><td>Jacob Josefson</td>
<td>600 000 $ (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>600 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>600 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>600 000 $</td></tr>
<tr><td>Yanni Gourde</td>
<td>375 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>375 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>375 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>375 000 $</td></tr>
<tr><td>Frank Corrado</td>
<td>280 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>280 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>280 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>280 000 $</td></tr>
<tr><td>Samuel Morin</td>
<td>280 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>280 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>280 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>280 000 $</td></tr>
<tr><td>Artturi Lehkonen</td>
<td>250 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>250 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>250 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>250 000 $</td></tr>
<tr><td>Chris Bigras</td>
<td>250 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>250 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>250 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>250 000 $</td></tr>
<tr><td>Brock McGinn</td>
<td>200 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Alex Nedeljkovic</td>
<td>175 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Julien Nantel</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Jean-Christophe Beaudin</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Maxime St-Cyr</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Alexandre Fortin</td>
<td>120 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Martins Dzierkals</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Antoine Waked</td>
<td>110 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Jean-Sébastien Dea</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Nikolas Brouillard</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Samuel Harvey</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Chase Marchand</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Zachary Emond</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>William Rouleau</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Samuel Regis</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Justin Bergeron</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Alexis Arsenault</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Zachary Lauzon</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Vincent Marleau</td>
<td>55 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>55 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>55 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>55 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 4 590 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 710 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 760 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 480 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 4 590 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 3 710 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 760 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 480 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#SeattleKraken">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Amazon Center</td></tr>
<tr><td>Level 1: </td><td>5500 - 145 $ - 5 500 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 120 $ - 5 500 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>3000 - 76 $ - 3 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>6000 - 57 $ - 6 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1250 - 390 $ - 1 250 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>21250</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>21 250 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>2 515 000 $</td></tr>
<tr><td>Year to Date Revenue</td><td>2 515 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>71 650 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>71 650 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(2 500 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 622 131 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 174 590 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 523 770 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>22 635 000 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 207 377 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>70 027 866 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>70 027 866 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>69 149 990 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>13 350 010 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>5 649 990 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>54 352 704 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>6 959 838 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Max Pacioretty</td>
<td>8 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td>Brayden Schenn</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Nicolas Petan</td>
<td>5 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 467 213 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 467 213 $</td></tr>
<tr><td>Colin Miller</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Darnell Nurse</td>
<td>5 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Nikita Gusev</td>
<td>5 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 991 803 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 991 803 $</td></tr>
<tr><td>Sven Baertschi</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Brendan Leipsic</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Robin Lehner</td>
<td>4 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 040 984 $</td></tr>
<tr><td>Noah Hanifin</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>David Musil</td>
<td>3 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Jake Dotchin</td>
<td>2 500 000 $ (8)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Austin Watson</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Curtis Hamilton</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td>Zachary Senyshyn</td>
<td>1 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td>David Kampf</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Stanislav Galiev</td>
<td>1 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td>David Rittich</td>
<td>1 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 188 525 $</td></tr>
<tr><td>Andreas Borgman</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Filip Chlapik</td>
<td>850 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 71 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 60 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 37 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 71 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 60 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 37 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 71 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 60 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 37 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 27 750 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Raman Hrabarenka</td>
<td>295 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>295 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>295 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>295 000 $</td></tr>
<tr><td>Jordan Schneider</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Brendan Burke</td>
<td>199 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>199 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>199 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>199 500 $</td></tr>
<tr><td>Jordan Schmaltz</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Ryan Haggerty</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Taylor Beck</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Nick Ebert</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Mathieu Perreault</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Antoine Marcoux</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Dominik Uher</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Keegan Kanzig</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Brett Bulmer</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Mikhail Vorobyov</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Mitchell Vande Sompel</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Joseph Garreffa</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Tyler Benson</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Ilya Lyubushkin</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Justin Brazeau</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Connor Dewar</td>
<td>82 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>82 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>82 500 $</td></tr>
<tr><td>Michael Raffl</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Guillaume Brisebois</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Matthew Villalta</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Connor Clifton</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Simon Stransky</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Clark Bishop</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Callum Booth</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Kevin Hancock</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 939 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 879 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 459 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 939 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 879 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 459 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scottrade Center</td></tr>
<tr><td>Level 1: </td><td>6500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5500 - 125 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2150 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 400 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>19150</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 650 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 500 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>81 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>81 383 333 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 100 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 163 115 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 334 153 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>4 002 459 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 387 705 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>80 486 890 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>80 486 890 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>81 383 333 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>1 116 667 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>17 883 333 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>318 232 478 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>237 745 588 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nathan MacKinnon</td>
<td>10 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 508 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 508 197 $</td></tr>
<tr><td>Tuukka Rask</td>
<td>9 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td>Mark Scheifele</td>
<td>8 000 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 333 333 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 923 497 $</td></tr>
<tr><td>Evgeny Kuznetsov</td>
<td>7 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Marc-Edouard Vlasic</td>
<td>7 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Nazem Kadri</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Brady Skjei</td>
<td>5 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Tanner Pearson</td>
<td>5 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 039 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 039 344 $</td></tr>
<tr><td>John Klingberg</td>
<td>4 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 516 393 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 516 393 $</td></tr>
<tr><td>Artemi Panarin</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Theodor Blueger</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Jordan Szwarz</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Ian Cole</td>
<td>1 300 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td>Antoine Roussel</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Marcus Hogberg</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Tomas Plekanec</td>
<td>1 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Matt Roy</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Adam Almqvist</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Jake DeBrusk</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Liam Reddox</td>
<td>800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>760 656 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>760 656 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 81 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 75 350 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 68 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 51 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 81 383 333 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 75 683 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 68 383 333 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 50 333 333 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 81 383 333 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 75 683 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 68 383 333 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 50 333 333 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Peter Holland</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Kevin Klein</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Andy Welinski</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Eric Robinson</td>
<td>97 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Jack Hillen</td>
<td>97 500 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Andrey Makarov</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Patrick McNally</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Mason Appleton</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Adam Burish</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>David Booth</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alex Dostie</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Niklas Hansson</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Bernhard Ebner</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Chase De Leo</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Tye Felhaber</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Dennis Yan</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Blake Speers</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Oskar Steen</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Miroslav Svoboda</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Ludwig Bystrom</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Jens Lööke</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Austin Lemieux</td>
<td>65 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 1 980 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 962 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 492 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 1 980 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 962 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 492 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Tampa Bay Times Forum</td></tr>
<tr><td>Level 1: </td><td>7000 - 150 $ - 7 000 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>6000 - 120 $ - 6 000 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>3000 - 70 $ - 3 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4500 - 50 $ - 4 500 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>2000 - 400 $ - 1 418 - 70,90%</td></tr>
<tr><td>Total Capacity :</td><td>22500</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>21 918 - 97,41%</td></tr>
<tr><td>Average Income per Game</td><td>2 772 200 $</td></tr>
<tr><td>Year to Date Revenue</td><td>2 772 200 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>75 275 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>75 025 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>5 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 947 952 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 229 918 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 689 754 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>24 949 800 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 315 984 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>76 327 072 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>76 327 072 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>75 024 998 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>7 475 002 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>11 524 998 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>186 294 637 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>134 917 365 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>P.K. Subban</td>
<td>8 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 368 852 $</td></tr>
<tr><td>Evander Kane</td>
<td>6 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>Charlie Coyle</td>
<td>6 750 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>David Pastrnak</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Marcus Johansson</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>John Gibson</td>
<td>5 250 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 991 803 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 991 803 $</td></tr>
<tr><td>Boone Jenner</td>
<td>5 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Nikita Zadorov</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Simon Despres</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Brian Dumoulin</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Ryan Strome</td>
<td>3 200 000 $ (8)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td>Patrice Cormier</td>
<td>2 950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 804 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 804 918 $</td></tr>
<tr><td>Darcy Kuemper</td>
<td>2 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 757 377 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 757 377 $</td></tr>
<tr><td>Cody Eakin</td>
<td>2 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td>Quinton Howden</td>
<td>1 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td>Esa Lindell</td>
<td>1 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td>Josh Ho-Sang</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Ben Smith</td>
<td>1 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Quinn Hughes</td>
<td>950 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Martin Necas</td>
<td>925 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>879 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>879 508 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 275 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 57 175 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 45 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 20 950 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 925 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 45 575 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 21 200 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 025 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 925 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 45 575 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 21 200 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Malcolm Subban</td>
<td>200 000 $ (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Pavel Padakin</td>
<td>180 000 $ (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Riley Stadel</td>
<td>155 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>155 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>155 000 $</td></tr>
<tr><td>Pontus Aberg</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Radko Gudas</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Liam O'Brien</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Adam Janosik</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Tucker Poolman</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Mads Eller</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Joonas Donskoi</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Adam Wilcox</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Brandon Burlon</td>
<td>97 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>97 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>97 500 $</td></tr>
<tr><td>Mike Vecchione</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Joey Anderson</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Ryan Merkley</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Austin Wagner</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Lucas Wallmark</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nicolas Aubé-Kubel</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Dmytro Timashov</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Kasper Krog</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Ludwig Blomstrand</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 347 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 302 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 782 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 535 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 347 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 302 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 782 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 535 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Air Canada Center</td></tr>
<tr><td>Level 1: </td><td>6500 - 135 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5319 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 30 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 250 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18819</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>250 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1237 - 15 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>1487</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>77 900 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>77 900 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 900 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>1 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 929 508 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 277 049 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 831 147 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 309 836 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>75 970 488 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>75 970 488 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>78 899 989 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>3 600 011 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>15 399 989 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>91 280 935 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>15 310 447 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mikko Rantanen</td>
<td>7 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Sebastian Aho</td>
<td>7 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Morgan Rielly</td>
<td>6 750 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>Tobias Enstrom</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Mike Richards</td>
<td>6 250 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 942 623 $</td></tr>
<tr><td>Steve Mason</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Luke Schenn</td>
<td>5 900 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 609 836 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 609 836 $</td></tr>
<tr><td>Jean-Gabriel Pageau</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Zack Kassian</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Teemu Pulkkinen</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Louis Leblanc</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 852 459 $</td></tr>
<tr><td>Emerson Etem</td>
<td>2 700 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td>Tyler Biggs</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Joel Armia</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Antti Niemi</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Ville Pokka</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 663 934 $</td></tr>
<tr><td>Sam Carrick</td>
<td>1 350 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td>Mikko Lehtonen</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Kasperi Kapanen</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Samuel Girard</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Oliwer Kaski</td>
<td>850 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>808 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>850 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>808 197 $</td></tr>
<tr><td>Zachary Fucale</td>
<td>750 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>713 115 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>713 115 $</td></tr>
<tr><td>Trevor Smith</td>
<td>700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>665 574 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>665 574 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 77 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 64 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 30 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 11 950 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 77 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 64 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 30 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 11 950 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 77 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 64 650 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 30 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 11 950 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ville Leskinen</td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Jesse Blacker</td>
<td>170 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>170 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>170 000 $</td></tr>
<tr><td>Alexander Barabanov</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Petteri Lindbohm</td>
<td>160 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>160 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>160 000 $</td></tr>
<tr><td>Nikita Jevpalovs</td>
<td>150 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Aleksi Saarela</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Eetu Sopanen</td>
<td>135 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Juuso Ikonen</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Veini Vehvilainen</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Garret Sparks</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Trevor Lewis</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Ville Leino</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Petrus Palmu</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Olli Juolevi</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Teemu Turunen</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Robin Salo</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Andrew Crescenzi</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Justin Kirkland</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Tuukka Tieksola</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Olivier Galipeau</td>
<td>70 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Josh Leivo</td>
<td>0 $ (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>0 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>0 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 315 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 120 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 510 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 315 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 120 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 510 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Rogers Arena</td></tr>
<tr><td>Level 1: </td><td>9500 - 150 $ - 9 500 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>6410 - 120 $ - 6 393 - 99,73%</td></tr>
<tr><td>Level 3: </td><td>2000 - 100 $ - 2 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 95 $ - 3 873 - 96,83%</td></tr>
<tr><td>Luxury : </td><td>2000 - 310 $ - 1 730 - 86,50%</td></tr>
<tr><td>Total Capacity :</td><td>23910</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 40 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 20 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>23 496 - 98,27%</td></tr>
<tr><td>Average Income per Game</td><td>3 296 395 $</td></tr>
<tr><td>Year to Date Revenue</td><td>3 296 395 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>78 850 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>78 683 333 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 750 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>1 000 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 976 230 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 289 891 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 869 673 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>29 667 555 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 325 410 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>76 873 780 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>76 873 780 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>79 683 351 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>2 816 649 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>16 183 351 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>106 148 902 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>58 942 677 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Connor McDavid</td>
<td>10 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 508 197 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 032 787 $</td></tr>
<tr><td>Dougie Hamilton</td>
<td>6 650 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 322 951 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 322 951 $</td></tr>
<tr><td>Cory Schneider</td>
<td>6 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 990 164 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 990 164 $</td></tr>
<tr><td>James Neal</td>
<td>6 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 333 333 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 021 858 $</td></tr>
<tr><td>Matthew Tkachuk</td>
<td>6 000 000 $ (8)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Jason Demers</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>5 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>5 400 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 134 426 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 134 426 $</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>5 300 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 039 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 039 344 $</td></tr>
<tr><td>Josh Morrissey</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Ahti Oksanen</td>
<td>2 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Stefan Matteau</td>
<td>2 400 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 281 967 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 281 967 $</td></tr>
<tr><td>Nicolas Kerdiles</td>
<td>2 250 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 250 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 139 344 $</td></tr>
<tr><td>Mattias Tedenby</td>
<td>1 900 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td>Mattias Backman</td>
<td>1 900 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td>Vitek Vanecek</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Erik Cernak</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Louick Marcotte</td>
<td>1 300 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td>Colin White</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Kaapo Kakko</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Jesse Ylonen</td>
<td>800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>760 656 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>760 656 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 38 600 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 35 400 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 683 333 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 833 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 39 933 333 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 36 733 333 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 78 683 333 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 833 333 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 39 933 333 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 36 733 333 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Anton Forsberg</td>
<td>190 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Rick Nash</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Carl Klingberg</td>
<td>190 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>190 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>190 000 $</td></tr>
<tr><td>Joseph Labate</td>
<td>180 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>180 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>180 000 $</td></tr>
<tr><td>Anton Lander</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Frans Nielsen</td>
<td>140 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Marc-Andre Gragnani</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Nicklas Jensen</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Tom Gilbert</td>
<td>110 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Frederik Andersen</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Jakub Jerabek</td>
<td>110 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>Mats Zuccarello</td>
<td>110 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>110 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>110 000 $</td></tr>
<tr><td>David Desharnais</td>
<td>100 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Justin Shugg</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>David Schlemko</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Lucas Johansen</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Spencer Smallman</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Trevor Carrick</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tyler Soy</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Carl Hagelin</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Matt Filipe</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Petr Straka</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Ken Appleby</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Connor Crisp</td>
<td>72 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>72 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>72 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>72 500 $</td></tr>
<tr><td>Matthew Cairns</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Alex Peters</td>
<td>65 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Andreas Martinsen</td>
<td>60 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>60 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>60 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 917 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 057 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 387 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 480 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 917 500 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 2 057 500 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 387 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 480 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">T-Mobile Arena</td></tr>
<tr><td>Level 1: </td><td>5500 - 150 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>4800 - 90 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2068 - 75 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 250 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>17368</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>75 920 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>75 920 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>5 500 000 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 832 131 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 244 590 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 733 770 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 277 377 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>74 087 866 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>74 087 866 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>81 419 990 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>1 080 010 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>17 919 990 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>111 491 662 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>37 403 796 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrick Kane</td>
<td>9 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td>Kristopher Letang</td>
<td>8 000 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>8 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 606 557 $</td></tr>
<tr><td>Matt Murray</td>
<td>6 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Justin Schultz</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>William Karlsson</td>
<td>6 000 000 $ (8)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 704 918 $</td></tr>
<tr><td>Valeri Nichushkin</td>
<td>5 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Ryan Spooner</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 754 098 $</td></tr>
<tr><td>Devante Smith-Pelly</td>
<td>4 000 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Kevin Poulin</td>
<td>2 995 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 847 705 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 995 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 847 705 $</td></tr>
<tr><td>Matt Grzelcyk</td>
<td>2 750 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Morgan Klimchuk</td>
<td>2 750 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 614 754 $</td></tr>
<tr><td>Myles Bell</td>
<td>2 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Marcus Kruger</td>
<td>2 450 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 329 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 450 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 329 508 $</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Xavier Ouellet</td>
<td>1 950 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 854 098 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 854 098 $</td></tr>
<tr><td>Charles Hudon</td>
<td>1 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td>Mac Weegar</td>
<td>1 350 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 350 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 283 607 $</td></tr>
<tr><td>Michael Bunting</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Kris Russell</td>
<td>1 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Dillon Heatherington</td>
<td>1 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Brett Howden</td>
<td>950 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td>Casey Mittelstadt</td>
<td>925 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>879 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>925 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>879 508 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 920 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 69 320 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 58 625 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 36 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 920 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 69 320 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 58 625 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 36 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 920 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 69 320 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 58 625 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 36 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Connor Hurley</td>
<td>200 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Yohann Auvitu </td>
<td>200 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>200 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>200 000 $</td></tr>
<tr><td>Gregory Beron</td>
<td>195 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>195 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>195 000 $</td></tr>
<tr><td>Michael Mersch</td>
<td>185 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>John Hayden</td>
<td>175 000 $ (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Johan Sundstrom</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Kevin Gravel</td>
<td>150 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Konstantin Barulin</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>David Griger</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Lukas Bengtsson</td>
<td>140 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>140 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>140 000 $</td></tr>
<tr><td>Kyle Keyser</td>
<td>125 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Justin Bailey</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Cory Conacher</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Dennis Cholowski</td>
<td>95 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Dryden Hunt</td>
<td>92 500 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Lassi Thomson</td>
<td>92 500 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>92 500 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>92 500 $</td></tr>
<tr><td>Will Borgen</td>
<td>90 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Brayden Burke</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nathan Bastian</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Daniel Vladar</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Janne Kuokkanen</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Chaz Reddekopp</td>
<td>80 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Lane Pederson</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Riley Nash</td>
<td>80 000 $ (2)</td></tr>
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
<tr><td>Braydyn Chizen</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 145 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 820 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 062 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 375 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 3 145 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 820 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 1 062 500 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 375 000 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Verizon Center</td></tr>
<tr><td>Level 1: </td><td>6506 - 78 $ - 6 506 - 100,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 53 $ - 5 000 - 100,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 30 $ - 2 000 - 100,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 18 $ - 4 000 - 100,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 180 $ - 1 000 - 100,00%</td></tr>
<tr><td>Total Capacity :</td><td>18506</td></tr>
<tr><td>Team Popularity : </td><td>200,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td>Team Popularity : </td><td>100,00%</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>9</td></tr>
<tr><td>Average Attendance - %</td><td>18 506 - 100,00%</td></tr>
<tr><td>Average Income per Game</td><td>1 084 468 $</td></tr>
<tr><td>Year to Date Revenue</td><td>1 084 468 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>10</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>75 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>75 050 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>3 800 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>3 804 099 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 230 328 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>3 690 984 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>9 760 212 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 268 033 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>73 545 914 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>73 545 914 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>75 050 008 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>7 449 992 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>11 550 008 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>3 381 097 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(60 404 605 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Phil Kessel</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Braden Holtby</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>7 131 148 $</td></tr>
<tr><td>Nino Niederreiter</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Ty Rattie</td>
<td>5 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 229 508 $</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>5 400 000 $ (8)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>5 134 426 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>5 400 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>5 134 426 $</td></tr>
<tr><td>Jared Cowen</td>
<td>4 700 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 468 852 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 468 852 $</td></tr>
<tr><td>Colton Parayko</td>
<td>4 500 000 $ (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Ryan Ellis</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>4 278 689 $</td></tr>
<tr><td>Travis Zajac</td>
<td>4 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>4 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 803 279 $</td></tr>
<tr><td>Michael Matheson</td>
<td>3 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 327 869 $</td></tr>
<tr><td>Marcus Foligno</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Saku Maenalanen</td>
<td>2 100 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 100 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 996 721 $</td></tr>
<tr><td>Jacob De La Rose</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Pavel Zacha</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Nick Ritchie</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Dominik Kahun</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 806 557 $</td></tr>
<tr><td>Vladislav Namestnikov</td>
<td>1 800 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td>Angelo Miceli</td>
<td>1 650 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 568 852 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 650 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 568 852 $</td></tr>
<tr><td>Michael Dal Colle</td>
<td>1 600 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 600 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 521 311 $</td></tr>
<tr><td>Juuse Saros</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Anthony DeAngelo</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Johnathan MacLeod</td>
<td>1 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>950 820 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>950 820 $</td></tr>
<tr><td>Andrew Mangiapane</td>
<td>900 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>855 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>900 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>855 738 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 38 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 38 600 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 75 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 56 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 44 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 38 600 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Vladislav Kamenev</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Danny aus den Birken</td>
<td>135 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>135 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>135 000 $</td></tr>
<tr><td>Oliver Kylington</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>Yegor Rykov</td>
<td>130 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>130 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>130 000 $</td></tr>
<tr><td>German Rubtsov</td>
<td>125 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>125 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>125 000 $</td></tr>
<tr><td>Marcus Pettersson</td>
<td>120 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Daniel Bernhardt</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Oliver Wahlstrom</td>
<td>95 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>95 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>95 000 $</td></tr>
<tr><td>Alexei Melnichuk</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Alexander Alexeyev</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nicolas Hague</td>
<td>90 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Klim Kostin</td>
<td>90 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>90 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>90 000 $</td></tr>
<tr><td>Nikolai Kovalenko</td>
<td>85 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Artemi Knyazev</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Dmitry Zavgorodniy</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Jordan Spence</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Markus Nurmi</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Dustin Wolf</td>
<td>85 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kyle Capobianco</td>
<td>85 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>85 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>85 000 $</td></tr>
<tr><td>Kristian Tanus</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Tyler Steenbergen</td>
<td>80 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Valentin Nussbaumer</td>
<td>75 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Adam Musil</td>
<td>75 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Mathias From</td>
<td>75 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>75 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>75 000 $</td></tr>
<tr><td>Hudson Elynuik</td>
<td>70 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td>Simon Gnyp</td>
<td>65 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>65 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>65 000 $</td></tr>
<tr><td>Mason Shaw</td>
<td>45 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>45 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>45 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>45 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 505 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 630 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 995 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 505 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 1 630 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 995 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL10-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#WinnipegJets">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>11</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>82 900 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>82 900 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>1 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Special Salary Cap Value</td><td>(5 000 000 $)</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>4 126 230 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>1 359 016 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>4 077 048 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>58</td></tr>
<tr><td>Pro Expenses Per Days</td><td>1 375 410 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>79 773 780 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>79 773 780 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>77 899 976 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 82 500 000 $</td><td>4 600 024 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 63 500 000 $ </td><td>14 399 976 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>3 391 927 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(76 381 853 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Carey Price</td>
<td>10 500 000 $ (7)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>9 983 607 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>10 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>9 983 607 $</td></tr>
<tr><td>Auston Matthews</td>
<td>9 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>9 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>8 557 377 $</td></tr>
<tr><td>Dmitri Kulikov</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>7 000 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>7 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 655 738 $</td></tr>
<tr><td>Brent Burns</td>
<td>6 750 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 750 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 418 033 $</td></tr>
<tr><td>Victor Hedman</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Niklas Hjalmarsson</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Jake Gardiner</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>6 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>6 180 328 $</td></tr>
<tr><td>Sami Vatanen</td>
<td>3 200 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>3 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>3 042 623 $</td></tr>
<tr><td>Casey Cizikas</td>
<td>2 700 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 700 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 567 213 $</td></tr>
<tr><td>Jordan Caron</td>
<td>2 500 000 $ (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Rocco Grimaldi</td>
<td>2 500 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>2 377 049 $</td></tr>
<tr><td>Mark Visentin</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Phillip Danault</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>2 000 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 901 639 $</td></tr>
<tr><td>Cole Ully</td>
<td>1 800 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 800 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 711 475 $</td></tr>
<tr><td>Andrew Copp</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Logan Shaw</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 500 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 426 230 $</td></tr>
<tr><td>Michael Joly</td>
<td>1 300 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 300 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 236 066 $</td></tr>
<tr><td>Ryan Graves</td>
<td>1 200 000 $ (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>1 200 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>1 140 984 $</td></tr>
<tr><td>Filip Zadina</td>
<td>950 000 $ (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>903 279 $</td></tr>
<tr><td align="right">-Salary Average : </td>
<td>950 000 $</td></tr>
<tr><td align="right">-Salary Average Remaining : </td>
<td>903 279 $</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 82 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 75 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 65 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 55 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 82 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 75 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 65 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 55 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 82 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 75 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 65 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 55 750 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alexander Avtsin</td>
<td>185 000 $ (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>185 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>185 000 $</td></tr>
<tr><td>Linden Vey</td>
<td>175 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>175 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>175 000 $</td></tr>
<tr><td>Adam Tambellini</td>
<td>150 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>150 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>150 000 $</td></tr>
<tr><td>Adam Brooks</td>
<td>120 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>120 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>120 000 $</td></tr>
<tr><td>Brent Pedersen</td>
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
<tr><td>Daniel Lafontaine</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Kevin Lidström</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Jérôme Verrier</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Peter Stoykewych</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Noah Rod</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Colin Blackwell</td>
<td>100 000 $ (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>100 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>100 000 $</td></tr>
<tr><td>Maxime Macenauer</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jerome Gauthier-Leduc</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Jean-François Bérubé</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Joel Chouinard</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Frederic St-Denis</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Alexandre Grenier</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Mark Alt</td>
<td>80 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>80 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>80 000 $</td></tr>
<tr><td>Olof Lindbom</td>
<td>70 000 $ (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average : </td>
<td>70 000 $</td></tr>
<tr><td align="right">Salary Average Remaining : </td>
<td>70 000 $</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 060 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 935 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 185 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 2 060 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 935 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 185 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="STHSTeamFinance_SalaryCapCentrale"><a id="SalaryCapCentrale">Salary Cap Centrale</a></h1>
<table class="STHSFinance_TeamTable"><tr>
<td class="STHSCenter"><h3 class="STHSTeamFinance_Team">Team</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_CurrentFund">Current Fund</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_EstimatedSeasonSalaryCap">Estimated Season Salary Cap</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_UnderMaximum">Under Maximum of 82 500 000 $ <br/> Available Cap Space</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_OverMinimum">Over Minimum of<br />63 500 000 $</h3></td>
<td><h3 class="STHSTeamFinance_ProPlayers">Pro Players</h3></td><td><h3 class="STHSTeamFinance_FarmPlayers">Farm Players</h3></td><td><h3 class="STHSTeamFinance_TotalPlayers">Total Players</h3></td></tr>
<tr><td>Anaheim Ducks</td>
<td>83 437 105 $</td>
<td>78 150 028 $</td>
<td>4 349 972 $</td>
<td>14 650 028 $</td>
<td>23</td><td>25</td><td>48</td></tr>
<tr><td>Arizona Coyotes</td>
<td>88 240 227 $</td>
<td>81 855 006 $</td>
<td>644 994 $</td>
<td>18 355 006 $</td>
<td>22</td><td>27</td><td>49</td></tr>
<tr><td>Boston Bruins</td>
<td>23 840 336 $</td>
<td>79 516 672 $</td>
<td>2 983 328 $</td>
<td>16 016 672 $</td>
<td>21</td><td>23</td><td>44</td></tr>
<tr><td>Buffalo Sabres</td>
<td>15 539 963 $</td>
<td>79 032 240 $</td>
<td>3 467 760 $</td>
<td>15 532 240 $</td>
<td>23</td><td>27</td><td>50</td></tr>
<tr><td>Calgary Flames</td>
<td>57 211 453 $</td>
<td>81 994 987 $</td>
<td>505 013 $</td>
<td>18 494 987 $</td>
<td>20</td><td>24</td><td>44</td></tr>
<tr><td>Carolina Hurricanes</td>
<td>22 173 288 $</td>
<td>65 499 970 $</td>
<td>17 000 030 $</td>
<td>1 999 970 $</td>
<td>22</td><td>23</td><td>45</td></tr>
<tr><td>Chicago Blackhawks</td>
<td>108 738 522 $</td>
<td>81 849 996 $</td>
<td>650 004 $</td>
<td>18 349 996 $</td>
<td>20</td><td>24</td><td>44</td></tr>
<tr><td>Colorado Avalanche</td>
<td>56 436 543 $</td>
<td>78 209 991 $</td>
<td>4 290 009 $</td>
<td>14 709 991 $</td>
<td>21</td><td>24</td><td>45</td></tr>
<tr><td>Columbus Blue Jackets</td>
<td>29 615 063 $</td>
<td>76 150 014 $</td>
<td>6 349 986 $</td>
<td>12 650 014 $</td>
<td>22</td><td>24</td><td>46</td></tr>
<tr><td>Dallas Stars</td>
<td>32 226 388 $</td>
<td>79 392 476 $</td>
<td>3 107 524 $</td>
<td>15 892 476 $</td>
<td>21</td><td>20</td><td>41</td></tr>
<tr><td>Detroit Red Wings</td>
<td>43 316 517 $</td>
<td>81 799 997 $</td>
<td>700 003 $</td>
<td>18 299 997 $</td>
<td>20</td><td>28</td><td>48</td></tr>
<tr><td>Edmonton Oilers</td>
<td>51 109 095 $</td>
<td>75 050 008 $</td>
<td>7 449 992 $</td>
<td>11 550 008 $</td>
<td>21</td><td>26</td><td>47</td></tr>
<tr><td>Florida Panthers</td>
<td>102 342 724 $</td>
<td>75 993 312 $</td>
<td>6 506 688 $</td>
<td>12 493 312 $</td>
<td>20</td><td>17</td><td>37</td></tr>
<tr><td>Los Angeles Kings</td>
<td>100 674 656 $</td>
<td>81 842 606 $</td>
<td>657 394 $</td>
<td>18 342 606 $</td>
<td>20</td><td>24</td><td>44</td></tr>
<tr><td>Minnesota Wild</td>
<td>49 465 723 $</td>
<td>75 790 012 $</td>
<td>6 709 988 $</td>
<td>12 290 012 $</td>
<td>22</td><td>27</td><td>49</td></tr>
<tr><td>Montreal Canadiens</td>
<td>178 617 194 $</td>
<td>80 299 976 $</td>
<td>2 200 024 $</td>
<td>16 799 976 $</td>
<td>22</td><td>21</td><td>43</td></tr>
<tr><td>Nashville Predators</td>
<td>107 624 963 $</td>
<td>78 000 029 $</td>
<td>4 499 971 $</td>
<td>14 500 029 $</td>
<td>20</td><td>25</td><td>45</td></tr>
<tr><td>New Jersey Devils</td>
<td>72 303 768 $</td>
<td>76 949 975 $</td>
<td>5 550 025 $</td>
<td>13 449 975 $</td>
<td>21</td><td>27</td><td>48</td></tr>
<tr><td>New York Islanders</td>
<td>71 443 798 $</td>
<td>74 725 000 $</td>
<td>7 775 000 $</td>
<td>11 225 000 $</td>
<td>23</td><td>27</td><td>50</td></tr>
<tr><td>New York Rangers</td>
<td>72 060 556 $</td>
<td>79 274 990 $</td>
<td>3 225 010 $</td>
<td>15 774 990 $</td>
<td>23</td><td>26</td><td>49</td></tr>
<tr><td>Ottawa Senators</td>
<td>20 199 403 $</td>
<td>79 716 637 $</td>
<td>2 783 363 $</td>
<td>16 216 637 $</td>
<td>22</td><td>27</td><td>49</td></tr>
<tr><td>Philadelphia Flyers</td>
<td>103 146 917 $</td>
<td>76 150 021 $</td>
<td>6 349 979 $</td>
<td>12 650 021 $</td>
<td>22</td><td>20</td><td>42</td></tr>
<tr><td>Pittsburgh Penguins</td>
<td>541 710 538 $</td>
<td>80 549 978 $</td>
<td>1 950 022 $</td>
<td>17 049 978 $</td>
<td>21</td><td>27</td><td>48</td></tr>
<tr><td>Quebec Nordiques</td>
<td>126 437 207 $</td>
<td>80 400 013 $</td>
<td>2 099 987 $</td>
<td>16 900 013 $</td>
<td>21</td><td>25</td><td>46</td></tr>
<tr><td>San Jose Sharks</td>
<td>150 905 067 $</td>
<td>64 550 021 $</td>
<td>17 949 979 $</td>
<td>1 050 021 $</td>
<td>23</td><td>26</td><td>49</td></tr>
<tr><td>Seattle Kraken</td>
<td>54 352 704 $</td>
<td>69 149 990 $</td>
<td>13 350 010 $</td>
<td>5 649 990 $</td>
<td>20</td><td>27</td><td>47</td></tr>
<tr><td>St. Louis Blues</td>
<td>318 232 478 $</td>
<td>81 383 333 $</td>
<td>1 116 667 $</td>
<td>17 883 333 $</td>
<td>20</td><td>22</td><td>42</td></tr>
<tr><td>Tampa Bay Lightning</td>
<td>186 294 637 $</td>
<td>75 024 998 $</td>
<td>7 475 002 $</td>
<td>11 524 998 $</td>
<td>20</td><td>21</td><td>41</td></tr>
<tr><td>Toronto Maple Leafs</td>
<td>91 280 935 $</td>
<td>78 899 989 $</td>
<td>3 600 011 $</td>
<td>15 399 989 $</td>
<td>23</td><td>21</td><td>44</td></tr>
<tr><td>Vancouver Canucks</td>
<td>106 148 902 $</td>
<td>79 683 351 $</td>
<td>2 816 649 $</td>
<td>16 183 351 $</td>
<td>21</td><td>27</td><td>48</td></tr>
<tr><td>Vegas Golden Knights</td>
<td>111 491 662 $</td>
<td>81 419 990 $</td>
<td>1 080 010 $</td>
<td>17 919 990 $</td>
<td>22</td><td>26</td><td>48</td></tr>
<tr><td>Washington Capitals</td>
<td>3 381 097 $</td>
<td>75 050 008 $</td>
<td>7 449 992 $</td>
<td>11 550 008 $</td>
<td>23</td><td>27</td><td>50</td></tr>
<tr><td>Winnipeg Jets</td>
<td>3 391 927 $</td>
<td>77 899 976 $</td>
<td>4 600 024 $</td>
<td>14 399 976 $</td>
<td>20</td><td>20</td><td>40</td></tr>
</table>
<?php include "Footer.php";?>
