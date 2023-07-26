<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Team Finance</title>
<script src="WC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
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
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#DANEMARK">DANEMARK</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUÈDE">SUÈDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TCHÉQUIE">TCHÉQUIE</a> | <a href="#USA">USA</a> | <a href="#WORLD">WORLD</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
 | <a href="#SalaryCapCentrale">Salary Cap Centrale Report</a></div>
<h1 class="TeamFinancePro_GER"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">ALLEMAGNE Page</a> ]
[ <a href="WC-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="WC-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>12 000 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>12 000 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>461 538 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>480 769 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>12 499 994 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>12 499 994 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>11 999 988 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>67 500 012 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>11 999 988 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(2 499 994 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mathias Niederberger</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Dustin Strahlmeier</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Leon Draisaitl</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Leon Gawanke</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Moritz Seider</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Dominik Kahun</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Tom Kuhnhackl</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Dominik Bokk</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Tim Stützle</td>
<td>500 000 $ (1)</td></tr>
<tr><td>JJ Peterka</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Lukas Reichel</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Julian Napravnik</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Brooks Macek</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Marc Michaelis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Yasin Ehliz</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Marcel Noebels</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Maximilian Kammerer</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Yegor Alanov</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Marcel Brandt</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Bernhard Ebner</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Leon Hüttl</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Marcus Weber</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Philipp Grubauer</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Nico Sturm</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="WC-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="WC-TeamRecords.php#CANADA">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>6</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>10 000 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>10 000 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>384 615 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>403 846 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>10 499 996 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>10 499 996 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>9 999 990 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>69 500 010 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>9 999 990 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(499 996 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Matt Murray</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Carey Price</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Drew Doughty</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Jeff Skinner</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Kris Letang</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Matt Duchene</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Mitchell Marner</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Aaron Ekblad</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Brayden Point</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Sidney Crosby</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Steven Stamkos</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Taylor Hall</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Nathan MacKinnon</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Shea Theodore</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Sean Monahan</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Connor McDavid</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Mathew Barzal</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Cale Makar</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Alex Pietrangelo</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 10 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 10 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 10 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Carter Hart</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Samuel Girard</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Danton Heinen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Travis Konecny</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>4</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DAN"><a id="DANEMARK">DANEMARK</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">DANEMARK Page</a> ]
[ <a href="WC-ProTeamRoster.php#DANEMARK">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#DANEMARK">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#DANEMARK">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#DANEMARK">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#DANEMARK">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#DANEMARK">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#DANEMARK">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#DANEMARK">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#DANEMARK">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#DANEMARK">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#DANEMARK">Team History</a> ]
[ <a href="WC-TeamRecords.php#DANEMARK">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DANEMARK');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DANEMARK" style="display: block;">
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
<tr><td>Home Games Left</td><td>3</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>0 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>10 000 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Mads Søgaard</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Frederik Andersen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Frans Nielsen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Lars Eller</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Philip Larsen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Joachim Blichfeld</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Patrick Bjorkstrand</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Mads Eller</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Nicklas Jensen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Mathias From</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Anders Koch</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jesper Jensen Aabo</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Markus Lauridsen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Matias Lassen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Oliver Joakim Larsen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Oliver Lauridsen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jonas Røndbjerg</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Mikkel Bødker</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Oscar Fisker Mølgaard</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Patrick Russell</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Frederik Dichow</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Alexander True</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">FINLANDE Page</a> ]
[ <a href="WC-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="WC-TeamRecords.php#FINLANDE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>7</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>19 231 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>500 006 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>500 006 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 499 994 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Kaapo Kähkönen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Juuse Saros</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Patrik Laine</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Mikko Rantanen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Sebastian Aho</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Miro Heiskanen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Esa Lindell</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Julius Honka</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Juho Lammikko</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Eetu Luostarinen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Mikael Granlund</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Olli Maatta</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Ville Pokka</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Teuvo Teravainen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Aleksander Barkov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Markus Nutivaara</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Ahti Oksanen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Antti Suomela</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Miikka Salomäki</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Julis Nättinen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Mikko Koskinen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Joel Kiviranta</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">LETTONIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#LETTONIE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>5</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>12 000 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>12 000 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>461 538 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>480 769 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>12 499 994 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>12 499 994 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>11 999 988 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>67 500 012 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>11 999 988 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>(2 499 994 $)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Gustavs Davis Grigals</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Elvis Merzlikins</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Martins Dzierkals</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Ralfs Bergmanis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Karlis Cukste</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Theodor Blueger</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Ralfs Freibergs</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Rihards Bukarts</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Kaspars Daugavins</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Eduards Tralmaks</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Miks Indrasis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Nikolajs Jelisejevs</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Dans Locmelis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Raivis Ansons</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Oskars Batna</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Oskars Lapinskis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Janis Jaks</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Uvis Balinskis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Oskars Cibulskis</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Kristians Rubins</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Arturs Silovs</td>
<td>500 000 $ (1)</td></tr>
<tr><td>Rodrigo Abols</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 12 000 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">RUSSIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#RUSSIE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>4</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>19 231 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>500 006 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>500 006 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 499 994 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Andrey Vasilevskiy</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Alexander Burmistrov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>German Rubtsov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Dmitri Kulikov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Ilya Mikheyev</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Ivan Provorov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Vyacheslav Voynov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Dmitri Orlov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Andrey Kuzmenko</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Mikhail Grigorenko</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Valeri Nichushkin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Nikita Kucherov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Denis Guryanov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Nikita Zadorov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Vladislav Kamenev</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Nikita Nesterov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Kirill Kaprizov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Andrei Svechnikov</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Igor Shestyorkin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Alex Ovechkin</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SVK"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SLOVAQUIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>5</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>0 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>10 000 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Adam Húska</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jaroslav Janus</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Christian Jaros</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Martin Fehervary</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Marian Studenic</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Martin Chromiak</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Tomas Tatar</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Martin Marincin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Marko Dano</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Martin Reway</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Erik Cernak</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Peter Cehlarik</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Juraj Slafkovský</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Pavol Regenda</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Milos Kelemen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Martin Pospisil</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Filip Mesar</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Dalibor Dvorský</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Adam Sýkora</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Samuel Knazko</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Simon Nemec</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Michal Ivan</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jaroslav Halak</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Adam Ruzicka</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SWE"><a id="SUÈDE">SUÈDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">SUÈDE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SUÈDE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SUÈDE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SUÈDE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SUÈDE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SUÈDE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SUÈDE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SUÈDE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SUÈDE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SUÈDE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SUÈDE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SUÈDE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SUÈDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUÈDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUÈDE" style="display: block;">
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
<tr><td>Home Games Left</td><td>8</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>500 000 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>500 000 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>19 231 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>38 462 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>1 000 012 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>1 000 012 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>500 006 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>78 999 994 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>500 006 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>8 999 988 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Andre Burakovsky</td>
<td>500 000 $ (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>1</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 500 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Robin Lehner</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Filip Forsberg</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Oskar Lindblom</td>
<td>50 000 $ (1)</td></tr>
<tr><td>William Nylander</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Viktor Arvidsson</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Victor Hedman</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Oscar Klefbom</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Mika Zibanejad</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jonas Brodin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Hampus Lindholm</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Elias Lindholm</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Filip Gustavsson</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Alexander Wennberg</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jacob De La Rose</td>
<td>50 000 $ (1)</td></tr>
<tr><td>William Karlsson</td>
<td>50 000 $ (1)</td></tr>
<tr><td>John Klingberg</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jesper Bratt</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Elias Pettersson</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Lucas Raymond</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jacob Markstrom</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Erik Karlsson</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 150 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SWI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">SUISSE Page</a> ]
[ <a href="WC-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="WC-TeamRecords.php#SUISSE">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>7</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>0 $</td></tr>
<tr><td>Year to Date Revenue</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Salaries</td><td>0 $</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>0 $</td></tr>
<tr><td>Coaches Total Salaries</td><td>0 $</td></tr>
<tr><td>Luxury Taxe Total</td><td>0 $</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>10 000 000 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Leonardo Genoni</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Sandro Aeschlimann</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Pius Suter</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Denis Malgin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Nino Niederreiter</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Dean Kukan</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Roman Josi</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Sven Andrighetto</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Nico Hischier</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Kevin Fiala</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Timo Meier</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Grégory Hofmann</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Tyler Moy</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Lino Martschini</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Dario Bürgler</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Inti Pestoni</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Enzo Corvi</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Marco Müller</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Tim Berni</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Lian Bichsel</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Ramon Untersander</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Akira Schmid</td>
<td>50 000 $ (1)</td></tr>
<tr><td>J.J. Moser</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CZE"><a id="TCHÉQUIE">TCHÉQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">TCHÉQUIE Page</a> ]
[ <a href="WC-ProTeamRoster.php#TCHÉQUIE">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#TCHÉQUIE">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#TCHÉQUIE">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#TCHÉQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#TCHÉQUIE">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#TCHÉQUIE">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#TCHÉQUIE">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#TCHÉQUIE">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#TCHÉQUIE">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#TCHÉQUIE">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#TCHÉQUIE">Team History</a> ]
[ <a href="WC-TeamRecords.php#TCHÉQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TCHÉQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TCHÉQUIE" style="display: block;">
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
<tr><td>Home Games Left</td><td>6</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>19 231 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>500 006 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>500 006 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 499 994 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ondrej Pavelec</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Michal Neuvirth</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Filip Chytil</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Martin Necas</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jakub Voracek</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Dominik Masin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Filip Hronek</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Tomas Nosek</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Dominik Kubalik</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Radim Simek</td>
<td>50 000 $ (1)</td></tr>
<tr><td>David Kampf</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Ondrej Kase</td>
<td>50 000 $ (1)</td></tr>
<tr><td>David Musil</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Tomas Hertl</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Radek Faksa</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Pavel Zacha</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jakub Vrana</td>
<td>50 000 $ (1)</td></tr>
<tr><td>David Pastrnak</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Filip Zadina</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jiri Kulich</td>
<td>50 000 $ (1)</td></tr>
<tr><td>David Jiricek</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Stanislav Svozil</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Karel Vejmelka</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jakub Zboril</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_USA"><a id="USA">USA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">USA Page</a> ]
[ <a href="WC-ProTeamRoster.php#USA">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#USA">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#USA">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#USA">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#USA">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#USA">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#USA">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#USA">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#USA">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#USA">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#USA">Team History</a> ]
[ <a href="WC-TeamRecords.php#USA">Team Records</a> ]
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
<tr><td>Home Games Left</td><td>4</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>19 231 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>500 006 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>500 006 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 499 994 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Connor Hellebuyck</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jeremy Swayman</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Auston Matthews</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Quinn Hughes</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jake Guentzel</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Charlie McAvoy</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Clayton Keller</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Tyler Myers</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jacob Trouba</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Adam Erne</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Seth Jones</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Noah Hanifin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Zachary Werenski</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Dylan Larkin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jack Eichel</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Brock Boeser</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Matthew Tkachuk</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Kyle Connor</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Brady Tkachuk</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jack Hughes</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Cole Caufield</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jack Campbell</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Joel Farabee</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WLD"><a id="WORLD">WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">WORLD Page</a> ]
[ <a href="WC-ProTeamRoster.php#WORLD">Pro Team Roster</a> ]
[ <a href="WC-ProTeamScoring.php#WORLD">Pro Team Scoring</a> ]
[ <a href="WC-TeamFinance.php#WORLD">Team Finance</a> ]
[ <a href="WC-ProTeamPlayersInfo.php#WORLD">Pro Team PlayersInfo</a> ]
[ <a href="WC-ProTeamLines.php#WORLD">Pro Team Lines</a> ]
[ <a href="WC-TeamProspects.php#WORLD">Team Prospects</a> ]
[ <a href="WC-ProTeamSchedule.php#WORLD">Pro Team Schedule</a> ]
[ <a href="WC-ProTeamStats.php#WORLD">Pro Team Stats</a> ]
[ <a href="WC-ProTeamStatsVS.php#WORLD">Pro Team Stats VS</a> ]
[ <a href="WC-TeamInjurySuspension.php#WORLD">Team Injury Suspension</a> ]
[ <a href="WC-TeamHistory.php#WORLD">Team History</a> ]
[ <a href="WC-TeamRecords.php#WORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WORLD" style="display: block;">
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
<tr><td>Home Games Left</td><td>3</td></tr>
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
<tr><td>Pro Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>0 $</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>0 $</td></tr>
<tr><td>Pro Remaining Season Days</td><td>26</td></tr>
<tr><td>Pro Expenses Per Days</td><td>19 231 $</td></tr>
<tr><td>Pro Estimated Expenses</td><td>500 006 $</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>0 $</td></tr>
<tr><td>Farm Estimated Expenses</td><td>0 $</td></tr>
<tr><td>Estimated Season Expenses</td><td>500 006 $</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>0 $</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of 79 500 000 $</td><td>79 500 000 $</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of 0 $ </td><td>0 $</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>10 000 000 $</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>9 499 994 $</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alexandar Georgiyev</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Ahmad Al Saegh</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Aliaksei Protas</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Alexandre Texier</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Andrey Pedan</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Vadim Vasjonkin</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Luca Sbisa</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Marco Scandella</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Reinhard Venter</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Marco Rossi</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Raman Hrabarenka</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Angelo Miceli</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Hafthor Sigrunarson</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jermaine Loewen</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Daniel Sprong</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Marco Kasper</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Yusaku Ando</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Arthur Kaliyev</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Jordan Spence</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Nick Cicek</td>
<td>50 000 $ (1)</td></tr>
<tr><td>David Reinbacher</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Liam Kirk</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Demid Yeremeyev</td>
<td>50 000 $ (1)</td></tr>
<tr><td>Anze Kopitar</td>
<td>50 000 $ (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> 1 200 000 $</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> 0 $</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> 0 $</td></tr>
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
<tr><td>ALLEMAGNE</td>
<td>10 000 000 $</td>
<td>11 999 988 $</td>
<td>67 500 012 $</td>
<td>11 999 988 $</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>CANADA</td>
<td>10 000 000 $</td>
<td>9 999 990 $</td>
<td>69 500 010 $</td>
<td>9 999 990 $</td>
<td>20</td><td>4</td><td>24</td></tr>
<tr><td>DANEMARK</td>
<td>10 000 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>0</td><td>24</td><td>24</td></tr>
<tr><td>FINLANDE</td>
<td>10 000 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>0</td><td>24</td><td>24</td></tr>
<tr><td>LETTONIE</td>
<td>10 000 000 $</td>
<td>11 999 988 $</td>
<td>67 500 012 $</td>
<td>11 999 988 $</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>RUSSIE</td>
<td>10 000 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>0</td><td>24</td><td>24</td></tr>
<tr><td>SLOVAQUIE</td>
<td>10 000 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>0</td><td>24</td><td>24</td></tr>
<tr><td>SUÈDE</td>
<td>10 000 000 $</td>
<td>500 006 $</td>
<td>78 999 994 $</td>
<td>500 006 $</td>
<td>1</td><td>23</td><td>24</td></tr>
<tr><td>SUISSE</td>
<td>10 000 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>0</td><td>24</td><td>24</td></tr>
<tr><td>TCHÉQUIE</td>
<td>10 000 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>0</td><td>24</td><td>24</td></tr>
<tr><td>USA</td>
<td>10 000 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>0</td><td>24</td><td>24</td></tr>
<tr><td>WORLD</td>
<td>10 000 000 $</td>
<td>0 $</td>
<td>79 500 000 $</td>
<td>0 $</td>
<td>0</td><td>24</td><td>24</td></tr>
</table>
<?php include "Footer.php";?>
