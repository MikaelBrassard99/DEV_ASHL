<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Team Finance</title>
<script src="IHWC-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 960px) {.STHSWarning {display:block;}
.STHSFinance_FarmSalaryTable {display:none;}
.STHSFinance_TeamTable tr > td:nth-child(6){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(7){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(8){display:none;}}
@media screen and (max-width: 720px) {.STHSFinance_ProSalaryTable{display:none}}
</style>
<link href="IHWC-PLF.css" rel="stylesheet" type="text/css" />
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#ETATS-UNIS">ETATS-UNIS</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUEDE">SUEDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TEAMWORLD">TEAM WORLD</a> | <a href="#U23NORTHAMERICA">U23 NORTH AMERICA</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamFinancePro_ALL"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">ALLEMAGNE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>17 400 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>17 400 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>1 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(8 399 997 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(8 399 997 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tobias Rieder</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td>Laurin Braun</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td>Danny aus den Birken</td>
<td>1 350 000 $ (2)</td></tr>
<tr><td>Dominik Kahun</td>
<td>1 300 000 $ (1)</td></tr>
<tr><td>Konrad Abeltshauser</td>
<td>1 200 000 $ (3)</td></tr>
<tr><td>Brooks Macek</td>
<td>1 200 000 $ (2)</td></tr>
<tr><td>Dominik Bokk</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Yannic Seidenberg</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Lukas Reichel</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Lean Bergmann</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Eduard Lewandowski</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Philip Gogulla</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Daniel Pietta</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Mathias Niederberger</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Marc Michaelis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Denis Reul</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Simon Sezemsky</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Leon Gawanke</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Jonas Müller</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Nico Sturm</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Markus Eisenschmid</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Tim Stützle</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Moritz Seider</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 17 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 6 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 17 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 6 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 17 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 6 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>147 100 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>147 100 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(138 757 145 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(138 757 145 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Carey Price</td>
<td>10 500 000 $ (8)</td></tr>
<tr><td>John Tavares</td>
<td>10 000 000 $ (7)</td></tr>
<tr><td>Steven Stamkos</td>
<td>9 500 000 $ (6)</td></tr>
<tr><td>Brad Marchand</td>
<td>9 000 000 $ (4)</td></tr>
<tr><td>Jonathan Toews</td>
<td>9 000 000 $ (4)</td></tr>
<tr><td>Cam Fowler</td>
<td>7 500 000 $ (8)</td></tr>
<tr><td>Braden Holtby</td>
<td>7 500 000 $ (5)</td></tr>
<tr><td>Logan Couture</td>
<td>7 250 000 $ (3)</td></tr>
<tr><td>Brayden Schenn</td>
<td>7 000 000 $ (6)</td></tr>
<tr><td>Mark Stone</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td>Brent Burns</td>
<td>6 750 000 $ (5)</td></tr>
<tr><td>Taylor Hall</td>
<td>6 500 000 $ (1)</td></tr>
<tr><td>Sean Monahan</td>
<td>6 000 000 $ (2)</td></tr>
<tr><td>Luke Schenn</td>
<td>5 900 000 $ (2)</td></tr>
<tr><td>Jonathan Drouin</td>
<td>5 700 000 $ (2)</td></tr>
<tr><td>Sam Reinhart</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td>Ty Rattie</td>
<td>5 500 000 $ (6)</td></tr>
<tr><td>Ryan Ellis</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td>Bo Horvat</td>
<td>4 500 000 $ (2)</td></tr>
<tr><td>Colton Parayko</td>
<td>4 500 000 $ (7)</td></tr>
<tr><td>David Musil</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td>Cody Ceci</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td>Phillip Danault</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 147 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 138 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 111 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 93 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 147 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 138 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 111 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 93 750 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 147 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 138 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 111 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 93 750 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_USA"><a id="ETATS-UNIS">ETATS-UNIS</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">ETATS-UNIS Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#ETATS-UNIS">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#ETATS-UNIS">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#ETATS-UNIS">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#ETATS-UNIS">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#ETATS-UNIS">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#ETATS-UNIS">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#ETATS-UNIS">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#ETATS-UNIS">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#ETATS-UNIS">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#ETATS-UNIS">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#ETATS-UNIS">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#ETATS-UNIS">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ETATS-UNIS');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ETATS-UNIS" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>132 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>127 150 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(124 050 000 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(124 050 000 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tyler Johnson</td>
<td>9 800 000 $ (7)</td></tr>
<tr><td>Ryan Suter</td>
<td>8 500 000 $ (7)</td></tr>
<tr><td>Max Pacioretty</td>
<td>8 000 000 $ (5)</td></tr>
<tr><td>Zach Parise</td>
<td>8 000 000 $ (1)</td></tr>
<tr><td>Blake Wheeler</td>
<td>7 750 000 $ (5)</td></tr>
<tr><td>Tyler Myers</td>
<td>7 500 000 $ (5)</td></tr>
<tr><td>Johnny Gaudreau</td>
<td>7 500 000 $ (8)</td></tr>
<tr><td>Phil Kessel</td>
<td>7 500 000 $ (5)</td></tr>
<tr><td>Derek Stepan</td>
<td>6 750 000 $ (5)</td></tr>
<tr><td>Jake Gardiner</td>
<td>6 500 000 $ (6)</td></tr>
<tr><td>Ben Bishop</td>
<td>6 500 000 $ (6)</td></tr>
<tr><td>Jack Eichel</td>
<td>6 500 000 $ (1)</td></tr>
<tr><td>Zach Bogosian</td>
<td>6 000 000 $ (6)</td></tr>
<tr><td>John Carlson</td>
<td>6 000 000 $ (4)</td></tr>
<tr><td>James Van Riemsdyk</td>
<td>5 500 000 $ (3)</td></tr>
<tr><td>Jacob Trouba</td>
<td>5 000 000 $ (1)</td></tr>
<tr><td>Ryan Callahan</td>
<td>4 900 000 $ (2)</td></tr>
<tr><td>Jamie McBain</td>
<td>4 500 000 $ (1)</td></tr>
<tr><td>Cole Cassels</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td>Emerson Etem</td>
<td>2 700 000 $ (5)</td></tr>
<tr><td>Connor Hellebuyck</td>
<td>1 750 000 $ (1)</td></tr>
<tr><td>Kyle Connor</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Kevin Labanc</td>
<td>950 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 132 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 104 400 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 99 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 91 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 127 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 99 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 99 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 91 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 127 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 99 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 99 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 91 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">FINLANDE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>55 375 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>55 375 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>900 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(46 275 002 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(46 275 002 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mikko Rantanen</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td>Sebastian Aho</td>
<td>7 000 000 $ (3)</td></tr>
<tr><td>Pekka Rinne</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td>Jani Hakanpaa</td>
<td>3 500 000 $ (5)</td></tr>
<tr><td>Olli Maatta</td>
<td>3 500 000 $ (2)</td></tr>
<tr><td>Sami Vatanen</td>
<td>3 200 000 $ (3)</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>3 000 000 $ (3)</td></tr>
<tr><td>Teemu Pulkkinen</td>
<td>3 000 000 $ (4)</td></tr>
<tr><td>Jyrki Jokipakka</td>
<td>2 250 000 $ (3)</td></tr>
<tr><td>Saku Maenalanen</td>
<td>2 100 000 $ (2)</td></tr>
<tr><td>Ville Leskinen</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td>Toni Rajala</td>
<td>1 900 000 $ (2)</td></tr>
<tr><td>Ville Pokka</td>
<td>1 750 000 $ (2)</td></tr>
<tr><td>Juuse Saros</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td>Julius Honka</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td>Miikka Salomaki</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td>Miro Heiskanen</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Joel Armia</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Kasperi Kapanen</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Roope Hintz</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Antti Suomela</td>
<td>925 000 $ (2)</td></tr>
<tr><td>Tuomo Ruutu</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 55 375 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 53 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 39 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 6 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 55 375 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 53 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 39 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 6 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 55 375 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 53 425 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 39 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 6 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">LETTONIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>17 000 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>17 000 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(7 500 000 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(7 500 000 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ronalds Kenins</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td>Rodrigo Abols</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td>Karlis Cukste</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td>Nikita Jevpalovs</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td>Mareks Mitens</td>
<td>1 200 000 $ (3)</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Kaspars Daugavins</td>
<td>650 000 $ (2)</td></tr>
<tr><td>Kalvis Ozols</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Janis Jaks</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Oskars Bartulis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Uvis Janis Balinskis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Lauris Darzins</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Emils Gegeris</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Martin Karsums</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Andris Dzerins</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Frenks Razgals</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Raimonds Vitolins</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Miks Indrasis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Arturs Silovs</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Harijs Brants</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Kristaps Sotnieks</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Vitalijs Pavlovs</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Oskars Batna</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 17 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 4 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 17 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 4 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 17 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 4 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 2 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TCH"><a id="REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">REPUBLIQUE TCHEQUE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#REPUBLIQUETCHEQUE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#REPUBLIQUETCHEQUE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#REPUBLIQUETCHEQUE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#REPUBLIQUETCHEQUE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#REPUBLIQUETCHEQUE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#REPUBLIQUETCHEQUE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#REPUBLIQUETCHEQUE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#REPUBLIQUETCHEQUE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#REPUBLIQUETCHEQUE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#REPUBLIQUETCHEQUE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#REPUBLIQUETCHEQUE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#REPUBLIQUETCHEQUE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_REPUBLIQUETCHEQUE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_REPUBLIQUETCHEQUE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>40 500 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>40 500 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(31 000 001 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(31 000 001 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>David Krejci</td>
<td>6 800 000 $ (5)</td></tr>
<tr><td>Michael Frolik</td>
<td>4 650 000 $ (3)</td></tr>
<tr><td>Petr Mrazek</td>
<td>4 500 000 $ (3)</td></tr>
<tr><td>Martin Hanzal</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td>Andrej Sustr</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td>Ondrej Palat</td>
<td>3 000 000 $ (1)</td></tr>
<tr><td>Pavel Francouz</td>
<td>1 800 000 $ (2)</td></tr>
<tr><td>Jakub Kindl</td>
<td>1 700 000 $ (1)</td></tr>
<tr><td>David Kampf</td>
<td>1 500 000 $ (3)</td></tr>
<tr><td>Pavel Zacha</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Filip Zadina</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Ondrej Kase</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Filip Hronek</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Dominik Simon</td>
<td>900 000 $ (2)</td></tr>
<tr><td>Filip Chlapik</td>
<td>850 000 $ (3)</td></tr>
<tr><td>Vojtech Budik</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Jindrich Abdul</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Filip Chytil</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Tomas Kundratek</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Jakub Zboril</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Martin Necas</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Filip Kral</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Jaromir Jagr</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 40 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 26 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 19 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 6 800 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 40 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 26 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 19 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 6 800 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 40 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 26 900 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 19 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 6 800 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">RUSSIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>80 851 666 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>80 851 666 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(71 351 669 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(71 351 669 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alexander Ovechkin</td>
<td>9 500 000 $ (2)</td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>8 500 000 $ (6)</td></tr>
<tr><td>Dmitri Kulikov</td>
<td>7 000 000 $ (6)</td></tr>
<tr><td>Ilya Kovalchuk</td>
<td>6 666 666 $ (1)</td></tr>
<tr><td>Evgeny Grachev</td>
<td>6 500 000 $ (5)</td></tr>
<tr><td>Dmitri Orlov</td>
<td>6 000 000 $ (5)</td></tr>
<tr><td>Nikita Gusev</td>
<td>5 250 000 $ (5)</td></tr>
<tr><td>Alexander Radulov</td>
<td>5 000 000 $ (2)</td></tr>
<tr><td>Nikita Filatov</td>
<td>4 250 000 $ (3)</td></tr>
<tr><td>Evgeny Dadonov</td>
<td>3 785 000 $ (1)</td></tr>
<tr><td>Mikhail Grigorenko</td>
<td>2 200 000 $ (2)</td></tr>
<tr><td>Anton Volchenkov</td>
<td>2 000 000 $ (1)</td></tr>
<tr><td>Vladislav Namestnikov</td>
<td>1 800 000 $ (2)</td></tr>
<tr><td>Dmitrij Jaskin</td>
<td>1 700 000 $ (1)</td></tr>
<tr><td>Vladislav Kamenev</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td>Nikita Tryamkin</td>
<td>1 500 000 $ (1)</td></tr>
<tr><td>Bogdan Yakimov</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td>Yegor Rykov</td>
<td>1 300 000 $ (3)</td></tr>
<tr><td>Nikita Nesterov</td>
<td>1 200 000 $ (1)</td></tr>
<tr><td>Ilya Sorokin</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Kirill Kaprizov</td>
<td>950 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 80 851 666 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 61 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 38 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 33 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 80 851 666 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 61 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 38 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 33 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 80 851 666 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 61 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 38 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 33 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SLO"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SLOVAQUIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>18 050 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>18 050 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(8 550 000 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(8 550 000 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Martin Marincin</td>
<td>3 250 000 $ (6)</td></tr>
<tr><td>Andrej Sekera</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td>Marko Dano</td>
<td>2 000 000 $ (2)</td></tr>
<tr><td>Denis Godla</td>
<td>800 000 $ (2)</td></tr>
<tr><td>Andrej Kudrna</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Lukas Cingel</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Patrik Lamper</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Michal Kristof</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Libor Hudacek</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Robert Lantosi</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Tomas Zigo</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Marian Studenic</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Adam Liska</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Martin Fehervary</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Patrik Koch</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Marek Daloga</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Patrik Rybar</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Peter Ceresnak</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Martin Bakos</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Matus Sukel</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Tomas Marcinko</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Michal Cajkovsky</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Marcel Hascak</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 18 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 6 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 3 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 18 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 6 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 3 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 250 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 18 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 6 050 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 3 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 3 250 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SWE"><a id="SUEDE">SUEDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">SUEDE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SUEDE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SUEDE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SUEDE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SUEDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SUEDE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SUEDE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SUEDE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SUEDE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SUEDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SUEDE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SUEDE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SUEDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUEDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUEDE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>108 200 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>108 200 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(98 699 997 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(98 699 997 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Erik Karlsson</td>
<td>8 500 000 $ (3)</td></tr>
<tr><td>Loui Eriksson</td>
<td>7 500 000 $ (4)</td></tr>
<tr><td>Henrik Sedin</td>
<td>7 300 000 $ (2)</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>7 000 000 $ (5)</td></tr>
<tr><td>Nicklas Backstrom</td>
<td>6 700 000 $ (2)</td></tr>
<tr><td>Victor Hedman</td>
<td>6 500 000 $ (4)</td></tr>
<tr><td>Tobias Enstrom</td>
<td>6 500 000 $ (3)</td></tr>
<tr><td>Hampus Lindholm</td>
<td>6 500 000 $ (2)</td></tr>
<tr><td>Mattias Tedenby</td>
<td>6 000 000 $ (3)</td></tr>
<tr><td>Patrik Berglund</td>
<td>5 750 000 $ (3)</td></tr>
<tr><td>Magnus Paajarvi</td>
<td>5 200 000 $ (2)</td></tr>
<tr><td>William Nylander</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td>Niklas Hjalmarsson</td>
<td>4 750 000 $ (1)</td></tr>
<tr><td>Max Friberg</td>
<td>4 300 000 $ (4)</td></tr>
<tr><td>Robin Lehner</td>
<td>4 250 000 $ (3)</td></tr>
<tr><td>Jonas Brodin</td>
<td>4 000 000 $ (6)</td></tr>
<tr><td>Rickard Rakell</td>
<td>3 650 000 $ (1)</td></tr>
<tr><td>Rasmus Andersson</td>
<td>2 000 000 $ (4)</td></tr>
<tr><td>Gustav Nyquist</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td>Jacob De La Rose</td>
<td>2 000 000 $ (3)</td></tr>
<tr><td>Anders Nilsson</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Joel Eriksson Ek</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Victor Olofsson</td>
<td>900 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 108 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 97 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 31 300 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 108 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 97 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 31 300 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 108 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 97 950 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 71 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 31 300 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SUI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">SUISSE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>29 625 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>29 625 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(20 124 997 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(20 124 997 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nino Niederreiter</td>
<td>5 000 000 $ (4)</td></tr>
<tr><td>Luca Sbisa</td>
<td>5 000 000 $ (3)</td></tr>
<tr><td>Sven Baertschi</td>
<td>5 000 000 $ (5)</td></tr>
<tr><td>Mirco Mueller</td>
<td>2 000 000 $ (5)</td></tr>
<tr><td>Reto Berra</td>
<td>1 500 000 $ (3)</td></tr>
<tr><td>Noah Rod</td>
<td>1 000 000 $ (2)</td></tr>
<tr><td>Raphael Diaz</td>
<td>975 000 $ (1)</td></tr>
<tr><td>Yannick Weber</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Nico Hischier</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Christoph Bertschy</td>
<td>750 000 $ (2)</td></tr>
<tr><td>Andreas Ambuhl</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Vincent Praplan</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Damien Brunner</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Simon Moser</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Lukas Frick</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Romain Loeffel</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Robert Mayer</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Michael Fora</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Gregory Hofmann</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Calvin Thurkauf</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Philipp Kurashev</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Fabrice Herzog</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Damien Riat</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 29 625 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 21 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 19 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 29 625 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 21 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 19 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 29 625 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 21 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 19 450 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 12 000 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TWO"><a id="TEAMWORLD">TEAM WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">TEAM WORLD Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#TEAMWORLD">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#TEAMWORLD">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#TEAMWORLD">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#TEAMWORLD">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#TEAMWORLD">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#TEAMWORLD">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#TEAMWORLD">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#TEAMWORLD">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#TEAMWORLD">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#TEAMWORLD">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#TEAMWORLD">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#TEAMWORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TEAMWORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TEAMWORLD" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>45 100 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>45 100 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>1 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(36 099 998 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(36 099 998 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Thomas Vanek</td>
<td>7 500 000 $ (3)</td></tr>
<tr><td>Lars Eller</td>
<td>5 225 000 $ (4)</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td>Frederik Andersen</td>
<td>3 500 000 $ (1)</td></tr>
<tr><td>Raman Hrabarenka</td>
<td>2 950 000 $ (2)</td></tr>
<tr><td>Antoine Roussel</td>
<td>2 800 000 $ (2)</td></tr>
<tr><td>Wojtek Wolski</td>
<td>2 700 000 $ (1)</td></tr>
<tr><td>Jesper Jensen</td>
<td>2 500 000 $ (1)</td></tr>
<tr><td>Darren Dietz</td>
<td>1 500 000 $ (2)</td></tr>
<tr><td>Max Hermens</td>
<td>1 400 000 $ (2)</td></tr>
<tr><td>Enrico Miglioranzi</td>
<td>1 250 000 $ (2)</td></tr>
<tr><td>Hafthor Sigrunarson</td>
<td>1 000 000 $ (2)</td></tr>
<tr><td>Markus Lauridsen</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td>Mattias Norstebo</td>
<td>1 000 000 $ (1)</td></tr>
<tr><td>Daniel Sprong</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Alexandar Georgiyev</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Andrey Pedan</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Joachim Blichfeld</td>
<td>850 000 $ (3)</td></tr>
<tr><td>Dustin Boyd</td>
<td>800 000 $ (1)</td></tr>
<tr><td>Yegor Sharangovich</td>
<td>775 000 $ (3)</td></tr>
<tr><td>Tim Bozon</td>
<td>750 000 $ (1)</td></tr>
<tr><td>Mathias From</td>
<td>750 000 $ (2)</td></tr>
<tr><td>Nigel Dawes</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 45 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 28 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 16 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 5 225 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 45 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 28 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 16 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 5 225 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 45 100 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 28 850 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 16 250 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 5 225 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_U23"><a id="U23NORTHAMERICA">U23 NORTH AMERICA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">U23 NORTH AMERICA Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#U23NORTHAMERICA">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#U23NORTHAMERICA">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#U23NORTHAMERICA">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#U23NORTHAMERICA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#U23NORTHAMERICA">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#U23NORTHAMERICA">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#U23NORTHAMERICA">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#U23NORTHAMERICA">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#U23NORTHAMERICA">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#U23NORTHAMERICA">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#U23NORTHAMERICA">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#U23NORTHAMERICA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_U23NORTHAMERICA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_U23NORTHAMERICA" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - 100 $ - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - 60 $ - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - 35 $ - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - 25 $ - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - 200 $ - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>30 800 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>30 325 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>2 000 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>(21 214 288 $)</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(21 214 288 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mitch Marner</td>
<td>9 500 000 $ (8)</td></tr>
<tr><td>Noah Hanifin</td>
<td>4 000 000 $ (2)</td></tr>
<tr><td>Zachary Senyshyn</td>
<td>1 250 000 $ (1)</td></tr>
<tr><td>Carter Hart</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Charles McAvoy</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Samuel Girard</td>
<td>950 000 $ (3)</td></tr>
<tr><td>Anthony Beauvillier</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Brock Boeser</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Owen Tippett</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Anthony Cirelli</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Jack Roslovic</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Thomas Chabot</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Cale Makar</td>
<td>950 000 $ (2)</td></tr>
<tr><td>Alex DeBrincat</td>
<td>950 000 $ (1)</td></tr>
<tr><td>Tage Thompson</td>
<td>900 000 $ (3)</td></tr>
<tr><td>Dylan Strome</td>
<td>900 000 $ (1)</td></tr>
<tr><td>Colton Point</td>
<td>900 000 $ (2)</td></tr>
<tr><td>Kieffer Bellows</td>
<td>900 000 $ (1)</td></tr>
<tr><td>Quinn Hughes</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Adam Fox</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Alexis Lafrenière</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Kirby Dach</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 30 800 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 21 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 12 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 9 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 30 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 21 475 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 12 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 9 500 000 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 30 325 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 21 475 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 12 300 000 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 9 500 000 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Nick Suzuki</td>
<td>95 000 $ (2)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>1</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 95 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 95 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 95 000 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 95 000 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<?php include "Footer.php";?>
