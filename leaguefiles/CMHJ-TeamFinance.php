<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CMHJ - Team Finance</title>
<script src="CMHJ.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - CMHJ-STHS.db - CMHJ-STHSCareerStat.db"/>
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
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"CMHJ-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"CMHJ-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Allemagne">Allemagne</a> | <a href="#Canada">Canada</a> | <a href="#Finlande">Finlande</a> | <a href="#RépubliqueTchèque">République Tchèque</a> | <a href="#Russie">Russie</a> | <a href="#Suède">Suède</a> | <a href="#TeamWorld">Team World</a> | <a href="#USA">USA</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
 | <a href="#SalaryCapCentrale">Salary Cap Centrale Report</a></div>
<h1 class="TeamFinancePro_GER"><a id="Allemagne">Allemagne</a></h1>
<div class="STHSTeamLink">
[ <a href="CMHJ-TeamFinance.php#Allemagne">Team Finance</a> ]
[ <a href="CMHJ-TeamRecords.php#Allemagne">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Allemagne');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Allemagne" style="display: block;">
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
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>500 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>62 500 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>9 500 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 500 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Arno Tiefensee</td>
<td>0 $ (1)</td></tr>
<tr><td>Haakon Hänelt</td>
<td>0 $ (1)</td></tr>
<tr><td>Simon Gnyp</td>
<td>0 $ (1)</td></tr>
<tr><td>Tommy Pasanen</td>
<td>0 $ (1)</td></tr>
<tr><td>Maksymilian Szuber</td>
<td>0 $ (1)</td></tr>
<tr><td>Maximilian Glötzl</td>
<td>0 $ (1)</td></tr>
<tr><td>Niklas Länger</td>
<td>0 $ (1)</td></tr>
<tr><td>Luca Münzenberger</td>
<td>0 $ (1)</td></tr>
<tr><td>Tim Stützle</td>
<td>0 $ (1)</td></tr>
<tr><td>John-Jason Peterka</td>
<td>0 $ (1)</td></tr>
<tr><td>Lukas Reichel</td>
<td>0 $ (1)</td></tr>
<tr><td>Jan Nijenhuis</td>
<td>0 $ (1)</td></tr>
<tr><td>Tobias Ancicka</td>
<td>0 $ (1)</td></tr>
<tr><td>Filip Reisnecker</td>
<td>0 $ (1)</td></tr>
<tr><td>Markus Schweiger</td>
<td>0 $ (1)</td></tr>
<tr><td>Elias Lindner</td>
<td>0 $ (1)</td></tr>
<tr><td>Samuel Dubé</td>
<td>0 $ (1)</td></tr>
<tr><td>Joshua Samanski</td>
<td>0 $ (1)</td></tr>
<tr><td>Jakub Borzecki</td>
<td>0 $ (1)</td></tr>
<tr><td>Florian Elias</td>
<td>0 $ (1)</td></tr>
<tr><td>Connor Korte</td>
<td>0 $ (1)</td></tr>
<tr><td>Nikita Quapp</td>
<td>0 $ (1)</td></tr>
<tr><td>Moritz Seider</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
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
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
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
<h1 class="TeamFinancePro_CAN"><a id="Canada">Canada</a></h1>
<div class="STHSTeamLink">
[ <a href="CMHJ-TeamFinance.php#Canada">Team Finance</a> ]
[ <a href="CMHJ-TeamRecords.php#Canada">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canada');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canada" style="display: block;">
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
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>500 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>62 500 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>9 500 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 500 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brett Brochu</td>
<td>0 $ (1)</td></tr>
<tr><td>Cole Perfetti</td>
<td>0 $ (1)</td></tr>
<tr><td>Dylan Cozens</td>
<td>0 $ (1)</td></tr>
<tr><td>Dawson Mercer</td>
<td>0 $ (1)</td></tr>
<tr><td>Shane Wright</td>
<td>0 $ (1)</td></tr>
<tr><td>Connor McMichael</td>
<td>0 $ (1)</td></tr>
<tr><td>Alexis Lafrenière</td>
<td>0 $ (1)</td></tr>
<tr><td>Jakob Pelletier</td>
<td>0 $ (1)</td></tr>
<tr><td>Connor Zary</td>
<td>0 $ (1)</td></tr>
<tr><td>Alex Newhook</td>
<td>0 $ (1)</td></tr>
<tr><td>Alex Beaucage</td>
<td>0 $ (1)</td></tr>
<tr><td>Jack Quinn</td>
<td>0 $ (1)</td></tr>
<tr><td>Jonathan Lemieux</td>
<td>0 $ (1)</td></tr>
<tr><td>Kirby Dach</td>
<td>0 $ (1)</td></tr>
<tr><td>Bowen Byram</td>
<td>0 $ (1)</td></tr>
<tr><td>Jamie Drysdale</td>
<td>0 $ (1)</td></tr>
<tr><td>Samuel Régis</td>
<td>0 $ (1)</td></tr>
<tr><td>Kaiden Guhle</td>
<td>0 $ (1)</td></tr>
<tr><td>Thomas Harley</td>
<td>0 $ (1)</td></tr>
<tr><td>Justin Barron</td>
<td>0 $ (1)</td></tr>
<tr><td>Braden Schneider</td>
<td>0 $ (1)</td></tr>
<tr><td>Dylan Garand</td>
<td>0 $ (1)</td></tr>
<tr><td>Quinton Byfield</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
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
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
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
<h1 class="TeamFinancePro_FIN"><a id="Finlande">Finlande</a></h1>
<div class="STHSTeamLink">
[ <a href="CMHJ-TeamFinance.php#Finlande">Team Finance</a> ]
[ <a href="CMHJ-TeamRecords.php#Finlande">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Finlande');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Finlande" style="display: block;">
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
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>500 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>62 500 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>9 500 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 500 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Leevi Merilainen</td>
<td>0 $ (1)</td></tr>
<tr><td>Roni Hirvonen</td>
<td>0 $ (1)</td></tr>
<tr><td>Patrik Puistola</td>
<td>0 $ (1)</td></tr>
<tr><td>Henri Nikkanen</td>
<td>0 $ (1)</td></tr>
<tr><td>Brad Lambert</td>
<td>0 $ (1)</td></tr>
<tr><td>Antti Saarela</td>
<td>0 $ (1)</td></tr>
<tr><td>Leevi Aaltonen</td>
<td>0 $ (1)</td></tr>
<tr><td>Aku Räty</td>
<td>0 $ (1)</td></tr>
<tr><td>Juuso Parssinen</td>
<td>0 $ (1)</td></tr>
<tr><td>Anton Lundell</td>
<td>0 $ (1)</td></tr>
<tr><td>Roby Jarventie</td>
<td>0 $ (1)</td></tr>
<tr><td>Kasper Simontaival</td>
<td>0 $ (1)</td></tr>
<tr><td>Kari Piiroinen</td>
<td>0 $ (1)</td></tr>
<tr><td>Aatu Räty</td>
<td>0 $ (1)</td></tr>
<tr><td>Ville Heinola</td>
<td>0 $ (1)</td></tr>
<tr><td>Antti Tuomisto</td>
<td>0 $ (1)</td></tr>
<tr><td>Mikko Kokkonen</td>
<td>0 $ (1)</td></tr>
<tr><td>Santeri Hatakka</td>
<td>0 $ (1)</td></tr>
<tr><td>Topi Niemela</td>
<td>0 $ (1)</td></tr>
<tr><td>Eemil Viro</td>
<td>0 $ (1)</td></tr>
<tr><td>Joni Jurmo</td>
<td>0 $ (1)</td></tr>
<tr><td>Joel Blomqvist</td>
<td>0 $ (1)</td></tr>
<tr><td>Kaapo Kakko</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
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
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
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
<h1 class="TeamFinancePro_CZE"><a id="RépubliqueTchèque">République Tchèque</a></h1>
<div class="STHSTeamLink">
[ <a href="CMHJ-TeamFinance.php#RépubliqueTchèque">Team Finance</a> ]
[ <a href="CMHJ-TeamRecords.php#RépubliqueTchèque">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RépubliqueTchèque');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RépubliqueTchèque" style="display: block;">
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
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>500 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>62 500 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>9 500 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 500 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Lukas Parik</td>
<td>0 $ (1)</td></tr>
<tr><td>Filip Prikryl</td>
<td>0 $ (1)</td></tr>
<tr><td>Jan Mysak</td>
<td>0 $ (1)</td></tr>
<tr><td>Michal Teply</td>
<td>0 $ (1)</td></tr>
<tr><td>Jaromir Pytlik</td>
<td>0 $ (1)</td></tr>
<tr><td>Adam Najman</td>
<td>0 $ (1)</td></tr>
<tr><td>Adam Raska</td>
<td>0 $ (1)</td></tr>
<tr><td>Martin Lang</td>
<td>0 $ (1)</td></tr>
<tr><td>Radek Muzik</td>
<td>0 $ (1)</td></tr>
<tr><td>Ondrej Psenicka</td>
<td>0 $ (1)</td></tr>
<tr><td>David Jindra</td>
<td>0 $ (1)</td></tr>
<tr><td>Jonas Peterek</td>
<td>0 $ (1)</td></tr>
<tr><td>Jan Bednar</td>
<td>0 $ (1)</td></tr>
<tr><td>Stanislav Svozil</td>
<td>0 $ (1)</td></tr>
<tr><td>Martin Hugo Has</td>
<td>0 $ (1)</td></tr>
<tr><td>Simon Kubicek</td>
<td>0 $ (1)</td></tr>
<tr><td>Karel Klikorka</td>
<td>0 $ (1)</td></tr>
<tr><td>Radek Kucerik</td>
<td>0 $ (1)</td></tr>
<tr><td>David Jiricek</td>
<td>0 $ (1)</td></tr>
<tr><td>Ondrej Balaz</td>
<td>0 $ (1)</td></tr>
<tr><td>David Vitouch</td>
<td>0 $ (1)</td></tr>
<tr><td>Nick Malik</td>
<td>0 $ (1)</td></tr>
<tr><td>Pavel Novak</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
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
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
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
<h1 class="TeamFinancePro_RUS"><a id="Russie">Russie</a></h1>
<div class="STHSTeamLink">
[ <a href="CMHJ-TeamFinance.php#Russie">Team Finance</a> ]
[ <a href="CMHJ-TeamRecords.php#Russie">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Russie');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Russie" style="display: block;">
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
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>500 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>62 500 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>9 500 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 500 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Iaroslav Askarov</td>
<td>0 $ (1)</td></tr>
<tr><td>Ivan Sapozhnikov</td>
<td>0 $ (1)</td></tr>
<tr><td>Nikita Chibrikov</td>
<td>0 $ (1)</td></tr>
<tr><td>Vasili Ponomaryov</td>
<td>0 $ (1)</td></tr>
<tr><td>Rodion Amirov</td>
<td>0 $ (1)</td></tr>
<tr><td>Yegor Chinakhov</td>
<td>0 $ (1)</td></tr>
<tr><td>Marat Khusnutdinov</td>
<td>0 $ (1)</td></tr>
<tr><td>Dmitri Ovchinnikov</td>
<td>0 $ (1)</td></tr>
<tr><td>Vasili Podkolzin</td>
<td>0 $ (1)</td></tr>
<tr><td>Yegor Afanasyev</td>
<td>0 $ (1)</td></tr>
<tr><td>Ilya Nikolayev</td>
<td>0 $ (1)</td></tr>
<tr><td>Danil Gushchin</td>
<td>0 $ (1)</td></tr>
<tr><td>Semyon Chistyakov</td>
<td>0 $ (1)</td></tr>
<tr><td>Yegor Savikov</td>
<td>0 $ (1)</td></tr>
<tr><td>Daniil Chayka</td>
<td>0 $ (1)</td></tr>
<tr><td>Shakir Mukhamadullin</td>
<td>0 $ (1)</td></tr>
<tr><td>Yan Kuznetsov</td>
<td>0 $ (1)</td></tr>
<tr><td>Alexander Nikishin</td>
<td>0 $ (1)</td></tr>
<tr><td>Vladislav Lukashevich</td>
<td>0 $ (1)</td></tr>
<tr><td>Mikhail Abramov</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
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
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Vsevolod Skotnikov</td>
<td>0 $ (1)</td></tr>
<tr><td>Prokhor Poltapov</td>
<td>0 $ (1)</td></tr>
<tr><td>Vladislav Firstov</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>3</b></td></tr>
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
<h1 class="TeamFinancePro_SWE"><a id="Suède">Suède</a></h1>
<div class="STHSTeamLink">
[ <a href="CMHJ-TeamFinance.php#Suède">Team Finance</a> ]
[ <a href="CMHJ-TeamRecords.php#Suède">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Suède');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Suède" style="display: block;">
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
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>500 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>62 500 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>9 500 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 500 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Calle Clang</td>
<td>0 $ (1)</td></tr>
<tr><td>Simon Holmström</td>
<td>0 $ (1)</td></tr>
<tr><td>Philip Broberg</td>
<td>0 $ (1)</td></tr>
<tr><td>Tobias Björnfot</td>
<td>0 $ (1)</td></tr>
<tr><td>Helge Grans</td>
<td>0 $ (1)</td></tr>
<tr><td>Emil Andrae</td>
<td>0 $ (1)</td></tr>
<tr><td>William Wallinder</td>
<td>0 $ (1)</td></tr>
<tr><td>Albert Johansson</td>
<td>0 $ (1)</td></tr>
<tr><td>Alexander Holtz</td>
<td>0 $ (1)</td></tr>
<tr><td>Noel Gunler</td>
<td>0 $ (1)</td></tr>
<tr><td>Emil Heineman</td>
<td>0 $ (1)</td></tr>
<tr><td>Simon Robertsson</td>
<td>0 $ (1)</td></tr>
<tr><td>Jesper Wallstedt</td>
<td>0 $ (1)</td></tr>
<tr><td>Lucas Raymond</td>
<td>0 $ (1)</td></tr>
<tr><td>Daniel Torgersson</td>
<td>0 $ (1)</td></tr>
<tr><td>Oskar Magnusson</td>
<td>0 $ (1)</td></tr>
<tr><td>Albin Grewe</td>
<td>0 $ (1)</td></tr>
<tr><td>Karl Henriksson</td>
<td>0 $ (1)</td></tr>
<tr><td>Zion Nybeck</td>
<td>0 $ (1)</td></tr>
<tr><td>Theodor Niederbach</td>
<td>0 $ (1)</td></tr>
<tr><td>William Eklund</td>
<td>0 $ (1)</td></tr>
<tr><td>Hugo Alnefelt</td>
<td>0 $ (1)</td></tr>
<tr><td>Victor Soderström</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
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
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
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
<h1 class="TeamFinancePro_TWO"><a id="TeamWorld">Team World</a></h1>
<div class="STHSTeamLink">
[ <a href="CMHJ-TeamFinance.php#TeamWorld">Team Finance</a> ]
[ <a href="CMHJ-TeamRecords.php#TeamWorld">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TeamWorld');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TeamWorld" style="display: block;">
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
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>500 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>62 500 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>9 500 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 500 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tobias Johansen Breivold</td>
<td>0 $ (1)</td></tr>
<tr><td>Rudolfs Polcs</td>
<td>0 $ (1)</td></tr>
<tr><td>Thimo Nickl</td>
<td>0 $ (1)</td></tr>
<tr><td>Arthur Kaliyev</td>
<td>0 $ (1)</td></tr>
<tr><td>Jordan Spence</td>
<td>0 $ (1)</td></tr>
<tr><td>Martin Chromiak</td>
<td>0 $ (1)</td></tr>
<tr><td>Maxim Cajkovic</td>
<td>0 $ (1)</td></tr>
<tr><td>Simon Knak</td>
<td>0 $ (1)</td></tr>
<tr><td>Jonas Brondberg</td>
<td>0 $ (1)</td></tr>
<tr><td>Ole Julian Bjorvik Holm</td>
<td>0 $ (1)</td></tr>
<tr><td>Sander Vold Engebratten</td>
<td>0 $ (1)</td></tr>
<tr><td>Raivis Ansons</td>
<td>0 $ (1)</td></tr>
<tr><td>Frederik Dichow</td>
<td>0 $ (1)</td></tr>
<tr><td>Marko Mladenovic</td>
<td>0 $ (1)</td></tr>
<tr><td>Kirill Steklov</td>
<td>0 $ (1)</td></tr>
<tr><td>Reinhard Venter</td>
<td>0 $ (1)</td></tr>
<tr><td>Théo Rochette</td>
<td>0 $ (1)</td></tr>
<tr><td>Rapolas Marcinkevicius</td>
<td>0 $ (1)</td></tr>
<tr><td>Yusaku Ando</td>
<td>0 $ (1)</td></tr>
<tr><td>Mike Collard</td>
<td>0 $ (1)</td></tr>
<tr><td>Joaquim Muratet</td>
<td>0 $ (1)</td></tr>
<tr><td>Samuel Hlavaj</td>
<td>0 $ (1)</td></tr>
<tr><td>Marco Rossi</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
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
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
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
<h1 class="TeamFinancePro_USA"><a id="USA">USA</a></h1>
<div class="STHSTeamLink">
[ <a href="CMHJ-TeamFinance.php#USA">Team Finance</a> ]
[ <a href="CMHJ-TeamRecords.php#USA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_USA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_USA" style="display: block;">
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
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>500 000 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>62 500 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>9 500 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 500 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Drew Commesso</td>
<td>0 $ (1)</td></tr>
<tr><td>Brendan Brisson</td>
<td>0 $ (1)</td></tr>
<tr><td>Nick Robertson</td>
<td>0 $ (1)</td></tr>
<tr><td>Jack Hughes</td>
<td>0 $ (1)</td></tr>
<tr><td>Matthew Boldy</td>
<td>0 $ (1)</td></tr>
<tr><td>Alex Turcotte</td>
<td>0 $ (1)</td></tr>
<tr><td>Trevor Zegras</td>
<td>0 $ (1)</td></tr>
<tr><td>Bobby Brink</td>
<td>0 $ (1)</td></tr>
<tr><td>John Farinacci</td>
<td>0 $ (1)</td></tr>
<tr><td>Jacob Perreault</td>
<td>0 $ (1)</td></tr>
<tr><td>Thomas Bordeleau</td>
<td>0 $ (1)</td></tr>
<tr><td>Patrick Moynihan</td>
<td>0 $ (1)</td></tr>
<tr><td>Dustin Wolf</td>
<td>0 $ (1)</td></tr>
<tr><td>Matthew Beniers</td>
<td>0 $ (1)</td></tr>
<tr><td>Jake Sanderson</td>
<td>0 $ (1)</td></tr>
<tr><td>Cam York</td>
<td>0 $ (1)</td></tr>
<tr><td>Ryan Johnson</td>
<td>0 $ (1)</td></tr>
<tr><td>Drew Helleson</td>
<td>0 $ (1)</td></tr>
<tr><td>Jayden Struble</td>
<td>0 $ (1)</td></tr>
<tr><td>Jackson LaCombe</td>
<td>0 $ (1)</td></tr>
<tr><td>Henry Thrun</td>
<td>0 $ (1)</td></tr>
<tr><td>Spencer Knight</td>
<td>0 $ (1)</td></tr>
<tr><td>Cole Caufield</td>
<td>0 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
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
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> 0 $</td></tr>
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
<h1 class="STHSTeamFinance_SalaryCapCentrale"><a id="SalaryCapCentrale">Salary Cap Centrale</a></h1>
<table class="STHSFinance_TeamTable"><tr>
<td class="STHSCenter"><h3 class="STHSTeamFinance_Team">Team</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_CurrentFund">Current Fund</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_EstimatedSeasonSalaryCap">Estimated Season Salary Cap</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_UnderMaximum">Under Maximum of 79 500 000 $ <br/> Available Cap Space</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_OverMinimum">Over Minimum of<br />0 $</h3></td>
<td><h3 class="STHSTeamFinance_ProPlayers">Pro Players</h3></td><td><h3 class="STHSTeamFinance_FarmPlayers">Farm Players</h3></td><td><h3 class="STHSTeamFinance_TotalPlayers">Total Players</h3></td></tr>
<tr><td>Allemagne</td>
<td>9 500 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>Canada</td>
<td>9 500 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>Finlande</td>
<td>9 500 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>République Tchèque</td>
<td>9 500 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>Russie</td>
<td>9 500 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>20</td><td>3</td><td>23</td></tr>
<tr><td>Suède</td>
<td>9 500 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>Team World</td>
<td>9 500 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>23</td><td>0</td><td>23</td></tr>
<tr><td>USA</td>
<td>9 500 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>23</td><td>0</td><td>23</td></tr>
</table>
<?php include "Footer.php";?>
