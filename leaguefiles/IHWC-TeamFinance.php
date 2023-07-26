<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Team Finance</title>
<script src="IHWC.js"></script>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#ETATS-UNIS">ETATS-UNIS</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUEDE">SUEDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TEAMWORLD">TEAM WORLD</a> | <a href="#U23NORTHAMERICA">U23 NORTH AMERICA</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
 | <a href="#SalaryCapCentrale">Salary Cap Centrale Report</a></div>
<h1 class="TeamFinancePro_ALL"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="IHWC-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>-2</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>18 399 997 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>2 485 714 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>17 399 998 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>2 628 571 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>17 399 998 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>182 600 002 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>17 399 998 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#CANADA">Team Records</a> ]
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
<tr><td>Pro Year To Date Expenses</td><td>148 757 145 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>21 014 286 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>146 257 145 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>21 371 429 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>146 257 145 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>53 742 855 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>146 257 145 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#ETATS-UNIS">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#ETATS-UNIS">Team Records</a> ]
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
<tr><td>Pro Year To Date Expenses</td><td>134 050 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>18 164 286 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>127 150 002 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>19 150 000 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>127 150 002 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>72 849 998 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>127 150 002 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#FINLANDE">Team Records</a> ]
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
<tr><td>Pro Year To Date Expenses</td><td>56 275 002 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>7 910 714 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>55 374 998 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>8 039 286 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>55 374 998 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>144 625 002 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>55 374 998 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#LETTONIE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>2</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>17 500 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>2 428 571 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>16 999 997 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>2 500 000 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>16 999 997 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>183 000 003 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>16 999 997 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#REPUBLIQUETCHEQUE">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#REPUBLIQUETCHEQUE">Team Records</a> ]
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
<tr><td>Pro Year To Date Expenses</td><td>41 000 001 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>5 785 714 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>40 499 998 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>5 857 143 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>40 499 998 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>159 500 002 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>40 499 998 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#RUSSIE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>-2</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>81 351 669 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>11 550 238 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>80 851 666 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>11 621 667 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>80 851 666 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>119 148 334 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>80 851 666 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
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
<tr><td>Pro Year To Date Expenses</td><td>18 550 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>2 578 571 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>18 049 997 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>2 650 000 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>18 049 997 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>181 950 003 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>18 049 997 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#SUEDE">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#SUEDE">Team Records</a> ]
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
<tr><td>Pro Year To Date Expenses</td><td>108 699 997 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>15 457 143 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>108 200 001 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>15 528 571 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>108 200 001 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>91 799 999 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>108 200 001 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#SUISSE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>-2</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>30 124 997 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>4 232 143 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>29 625 001 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>4 303 571 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>29 625 001 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>170 374 999 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>29 625 001 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#TEAMWORLD">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#TEAMWORLD">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>2</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>46 099 998 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>6 442 857 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>45 099 999 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>6 585 714 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>45 099 999 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>154 900 001 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>45 099 999 $</td></tr>
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
[ <a href="IHWC-TeamFinance.php#U23NORTHAMERICA">Team Finance</a> ]
[ <a href="IHWC-TeamRecords.php#U23NORTHAMERICA">Team Records</a> ]
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
<tr><td>Pro Year To Date Expenses</td><td>31 214 288 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>4 332 143 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>28 739 285 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>4 685 714 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>28 739 285 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 200 000 000 $</td><td>171 260 715 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>28 739 285 $</td></tr>
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
<h1 class="STHSTeamFinance_SalaryCapCentrale"><a id="SalaryCapCentrale">Salary Cap Centrale</a></h1>
<table class="STHSFinance_TeamTable"><tr>
<td class="STHSCenter"><h3 class="STHSTeamFinance_Team">Team</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_CurrentFund">Current Fund</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_EstimatedSeasonSalaryCap">Estimated Season Salary Cap</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_UnderMaximum">Under Maximum of 200 000 000 $ <br/> Available Cap Space</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_OverMinimum">Over Minimum of<br />0 $</h3></td>
<td><h3 class="STHSTeamFinance_ProPlayers">Pro Players</h3></td><td><h3 class="STHSTeamFinance_FarmPlayers">Farm Players</h3></td><td><h3 class="STHSTeamFinance_TotalPlayers">Total Players</h3></td></tr>
<tr><td>ALLEMAGNE</td>
<td>(8 399 997 $)</td>
<td>17 399 998 $</td>
<td>182 600 002 $</td>
<td>17 399 998 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>CANADA</td>
<td>(138 757 145 $)</td>
<td>146 257 145 $</td>
<td>53 742 855 $</td>
<td>146 257 145 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>ETATS-UNIS</td>
<td>(124 050 000 $)</td>
<td>127 150 002 $</td>
<td>72 849 998 $</td>
<td>127 150 002 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>FINLANDE</td>
<td>(46 275 002 $)</td>
<td>55 374 998 $</td>
<td>144 625 002 $</td>
<td>55 374 998 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>LETTONIE</td>
<td>(7 500 000 $)</td>
<td>16 999 997 $</td>
<td>183 000 003 $</td>
<td>16 999 997 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>REPUBLIQUE TCHEQUE</td>
<td>(31 000 001 $)</td>
<td>40 499 998 $</td>
<td>159 500 002 $</td>
<td>40 499 998 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>RUSSIE</td>
<td>(71 351 669 $)</td>
<td>80 851 666 $</td>
<td>119 148 334 $</td>
<td>80 851 666 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>SLOVAQUIE</td>
<td>(8 550 000 $)</td>
<td>18 049 997 $</td>
<td>181 950 003 $</td>
<td>18 049 997 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>SUEDE</td>
<td>(98 699 997 $)</td>
<td>108 200 001 $</td>
<td>91 799 999 $</td>
<td>108 200 001 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>SUISSE</td>
<td>(20 124 997 $)</td>
<td>29 625 001 $</td>
<td>170 374 999 $</td>
<td>29 625 001 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>TEAM WORLD</td>
<td>(36 099 998 $)</td>
<td>45 099 999 $</td>
<td>154 900 001 $</td>
<td>45 099 999 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>U23 NORTH AMERICA</td>
<td>(21 214 288 $)</td>
<td>28 739 285 $</td>
<td>171 260 715 $</td>
<td>28 739 285 $</td>
<td>22</td><td>1</td><td>23</td></tr>
</table>
<?php include "Footer.php";?>
