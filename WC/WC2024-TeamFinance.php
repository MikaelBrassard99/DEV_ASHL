<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Team Finance</title>
<script src="WC2024.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.9.9 - WC2024-STHS.bin - WC2024-STHSCareerStat.bin"/>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#ÉTATS-UNIS">ÉTATS-UNIS</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#QUÉBEC">QUÉBEC</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUÈDE">SUÈDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TCHÉQUIE">TCHÉQUIE</a> | <a href="#WORLD">WORLD</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
 | <a href="#SalaryCapCentrale">Salary Cap Centrale Report</a></div>
<h1 class="TeamFinancePro_GER"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">ALLEMAGNE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$5,500,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$5,500,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$423,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$423,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$5,500,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$5,500,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$5,500,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$73,999,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$5,500,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$4,499,999</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Philipp Grubauer</td>
<td>$500,000 (1)</td></tr>
<tr><td>Tim Stützle</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dominik Bokk</td>
<td>$500,000 (1)</td></tr>
<tr><td>Tobias Rieder</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dominik Kahun</td>
<td>$500,000 (1)</td></tr>
<tr><td>Moritz Seider</td>
<td>$500,000 (1)</td></tr>
<tr><td>JJ Peterka</td>
<td>$500,000 (1)</td></tr>
<tr><td>Lean Bergmann</td>
<td>$500,000 (1)</td></tr>
<tr><td>Leon Gawanke</td>
<td>$500,000 (1)</td></tr>
<tr><td>Leon Draisaitl</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nico Sturm</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $5,500,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $5,500,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $5,500,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Carter Hart</td>
<td>$500,000 (1)</td></tr>
<tr><td>Matt Murray</td>
<td>$500,000 (1)</td></tr>
<tr><td>Drew Doughty</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jeff Skinner</td>
<td>$500,000 (1)</td></tr>
<tr><td>Travis Konecny</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mitchell Marner</td>
<td>$500,000 (1)</td></tr>
<tr><td>Aaron Ekblad</td>
<td>$500,000 (1)</td></tr>
<tr><td>Owen Power</td>
<td>$500,000 (1)</td></tr>
<tr><td>Brayden Point</td>
<td>$500,000 (1)</td></tr>
<tr><td>Sidney Crosby</td>
<td>$500,000 (1)</td></tr>
<tr><td>Steven Stamkos</td>
<td>$500,000 (1)</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>$500,000 (1)</td></tr>
<tr><td>Connor Bedard</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nathan MacKinnon</td>
<td>$500,000 (1)</td></tr>
<tr><td>Shea Theodore</td>
<td>$500,000 (1)</td></tr>
<tr><td>Sean Monahan</td>
<td>$500,000 (1)</td></tr>
<tr><td>Robert Thomas</td>
<td>$500,000 (1)</td></tr>
<tr><td>Connor McDavid</td>
<td>$500,000 (1)</td></tr>
<tr><td>Robby Fabbri</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mathew Barzal</td>
<td>$500,000 (1)</td></tr>
<tr><td>Cale Makar</td>
<td>$500,000 (1)</td></tr>
<tr><td>Noah Dobson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jordan Binnington</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alex Pietrangelo</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_USA"><a id="ÉTATS-UNIS">ÉTATS-UNIS</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">ÉTATS-UNIS Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#ÉTATS-UNIS">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#ÉTATS-UNIS">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#ÉTATS-UNIS">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#ÉTATS-UNIS">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#ÉTATS-UNIS">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#ÉTATS-UNIS">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#ÉTATS-UNIS">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#ÉTATS-UNIS">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#ÉTATS-UNIS">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#ÉTATS-UNIS">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#ÉTATS-UNIS">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#ÉTATS-UNIS">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ÉTATS-UNIS');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ÉTATS-UNIS" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Connor Hellebuyck</td>
<td>$500,000 (1)</td></tr>
<tr><td>Thatcher Demko</td>
<td>$500,000 (1)</td></tr>
<tr><td>Auston Matthews</td>
<td>$500,000 (1)</td></tr>
<tr><td>Cam Fowler</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jake Guentzel</td>
<td>$500,000 (1)</td></tr>
<tr><td>Adam Fox</td>
<td>$500,000 (1)</td></tr>
<tr><td>Charlie McAvoy</td>
<td>$500,000 (1)</td></tr>
<tr><td>Clayton Keller</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alex DeBrincat</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jacob Trouba</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kailer Yamamoto</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>$500,000 (1)</td></tr>
<tr><td>Cole Cassels</td>
<td>$500,000 (1)</td></tr>
<tr><td>Seth Jones</td>
<td>$500,000 (1)</td></tr>
<tr><td>Noah Hanifin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Zachary Werenski</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dylan Larkin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jack Eichel</td>
<td>$500,000 (1)</td></tr>
<tr><td>Brock Boeser</td>
<td>$500,000 (1)</td></tr>
<tr><td>Matthew Tkachuk</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kyle Connor</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jack Hughes</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jeremy Swayman</td>
<td>$500,000 (1)</td></tr>
<tr><td>Matt Boldy</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">FINLANDE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kaapo Kähkönen</td>
<td>$500,000 (1)</td></tr>
<tr><td>Juuse Saros</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kaapo Kakko</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>$500,000 (1)</td></tr>
<tr><td>Patrik Laine</td>
<td>$500,000 (1)</td></tr>
<tr><td>Artturi Lehkonen</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mikko Rantanen</td>
<td>$500,000 (1)</td></tr>
<tr><td>Sebastian Aho</td>
<td>$500,000 (1)</td></tr>
<tr><td>Miro Heiskanen</td>
<td>$500,000 (1)</td></tr>
<tr><td>Anton Lundell</td>
<td>$500,000 (1)</td></tr>
<tr><td>Esa Lindell</td>
<td>$500,000 (1)</td></tr>
<tr><td>Eeli Tolvanen</td>
<td>$500,000 (1)</td></tr>
<tr><td>Julius Honka</td>
<td>$500,000 (1)</td></tr>
<tr><td>Juho Lammikko</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mikael Granlund</td>
<td>$500,000 (1)</td></tr>
<tr><td>Olli Maatta</td>
<td>$500,000 (1)</td></tr>
<tr><td>Ville Pokka</td>
<td>$500,000 (1)</td></tr>
<tr><td>Teuvo Teravainen</td>
<td>$500,000 (1)</td></tr>
<tr><td>Aleksander Barkov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>$500,000 (1)</td></tr>
<tr><td>Markus Nutivaara</td>
<td>$500,000 (1)</td></tr>
<tr><td>Ukko-Pekka Luukkonen</td>
<td>$500,000 (1)</td></tr>
<tr><td>Joel Kiviranta</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">LETTONIE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Arturs Silovs</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kristers Gudlevskis</td>
<td>$500,000 (1)</td></tr>
<tr><td>Martins Dzierkals</td>
<td>$500,000 (1)</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>$500,000 (1)</td></tr>
<tr><td>Ralfs Bergmanis</td>
<td>$500,000 (1)</td></tr>
<tr><td>Karlis Cukste</td>
<td>$500,000 (1)</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>$500,000 (1)</td></tr>
<tr><td>Theodor Blueger</td>
<td>$500,000 (1)</td></tr>
<tr><td>Rihards Bukarts</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nikita Jevpalovs</td>
<td>$500,000 (1)</td></tr>
<tr><td>Uvis Balinskis</td>
<td>$500,000 (1)</td></tr>
<tr><td>Oskars Batna</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kaspars Daugavins</td>
<td>$500,000 (1)</td></tr>
<tr><td>Raivis Ansons</td>
<td>$500,000 (1)</td></tr>
<tr><td>Miks Indrasis</td>
<td>$500,000 (1)</td></tr>
<tr><td>Eduards Tralmaks</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dans Locmelis</td>
<td>$500,000 (1)</td></tr>
<tr><td>Sandis Vilmanis</td>
<td>$500,000 (1)</td></tr>
<tr><td>Arvils Bergmanis</td>
<td>$500,000 (1)</td></tr>
<tr><td>Janis Jaks</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kristaps Zile</td>
<td>$500,000 (1)</td></tr>
<tr><td>Roberts Mamcics</td>
<td>$500,000 (1)</td></tr>
<tr><td>Elvis Merzlikins</td>
<td>$500,000 (1)</td></tr>
<tr><td>Rodrigo Abols</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_QUÉ"><a id="QUÉBEC">QUÉBEC</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">QUÉBEC Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#QUÉBEC">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#QUÉBEC">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#QUÉBEC">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#QUÉBEC">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#QUÉBEC">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#QUÉBEC">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#QUÉBEC">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#QUÉBEC">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#QUÉBEC">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#QUÉBEC">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#QUÉBEC">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#QUÉBEC">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QUÉBEC');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QUÉBEC" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Devon Levi</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kevin Poulin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Maxime Lajoie</td>
<td>$500,000 (1)</td></tr>
<tr><td>Pierre-Luc Dubois</td>
<td>$500,000 (1)</td></tr>
<tr><td>A.J. Greer</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alexandre Carrier</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kris Letang</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nicolas Roy</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jonathan Huberdeau</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mike Matheson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jonathan Drouin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Samuel Morin</td>
<td>$500,000 (1)</td></tr>
<tr><td>William Carrier</td>
<td>$500,000 (1)</td></tr>
<tr><td>Anthony Duclair</td>
<td>$500,000 (1)</td></tr>
<tr><td>Anthony Mantha</td>
<td>$500,000 (1)</td></tr>
<tr><td>Thomas Chabot</td>
<td>$500,000 (1)</td></tr>
<tr><td>Samuel Girard</td>
<td>$500,000 (1)</td></tr>
<tr><td>Émile Poirier</td>
<td>$500,000 (1)</td></tr>
<tr><td>Frédérik Gauthier</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alexis Lafrenière</td>
<td>$500,000 (1)</td></tr>
<tr><td>Hendrix Lapierre</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mavrik Bourque</td>
<td>$500,000 (1)</td></tr>
<tr><td>Samuel Montembeault</td>
<td>$500,000 (1)</td></tr>
<tr><td>Maxime Comtois</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">RUSSIE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>$500,000 (1)</td></tr>
<tr><td>Andrey Vasilevskiy</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alexander Burmistrov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dmitri Kulikov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Ilya Mikheyev</td>
<td>$500,000 (1)</td></tr>
<tr><td>Ivan Provorov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Vyacheslav Voynov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dmitri Orlov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Andrey Kuzmenko</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mikhail Grigorenko</td>
<td>$500,000 (1)</td></tr>
<tr><td>Valeri Nichushkin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nikita Kucherov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>$500,000 (1)</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>$500,000 (1)</td></tr>
<tr><td>Denis Guryanov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nikita Zadorov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Vladislav Kamenev</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nikita Nesterov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kirill Kaprizov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Andrei Svechnikov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Matvei Michkov</td>
<td>$500,000 (1)</td></tr>
<tr><td>Igor Shestyorkin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alex Ovechkin</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SLO"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">SLOVAQUIE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Adam Gajan</td>
<td>$500,000 (1)</td></tr>
<tr><td>Samuel Hlavaj</td>
<td>$500,000 (1)</td></tr>
<tr><td>Adam Ruzicka</td>
<td>$500,000 (1)</td></tr>
<tr><td>Christian Jaros</td>
<td>$500,000 (1)</td></tr>
<tr><td>Martin Fehervary</td>
<td>$500,000 (1)</td></tr>
<tr><td>Marian Studenic</td>
<td>$500,000 (1)</td></tr>
<tr><td>Martin Pospisil</td>
<td>$500,000 (1)</td></tr>
<tr><td>Tomas Tatar</td>
<td>$500,000 (1)</td></tr>
<tr><td>Juraj Slafkovsky</td>
<td>$500,000 (1)</td></tr>
<tr><td>Martin Marincin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Martin Gernat</td>
<td>$500,000 (1)</td></tr>
<tr><td>Marko Dano</td>
<td>$500,000 (1)</td></tr>
<tr><td>David Griger</td>
<td>$500,000 (1)</td></tr>
<tr><td>Martin Reway</td>
<td>$500,000 (1)</td></tr>
<tr><td>Erik Cernak</td>
<td>$500,000 (1)</td></tr>
<tr><td>Peter Cehlarik</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dalibor Dvorský</td>
<td>$500,000 (1)</td></tr>
<tr><td>Marek Hrivík</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kristian Pospisil</td>
<td>$500,000 (1)</td></tr>
<tr><td>Michal Kristof</td>
<td>$500,000 (1)</td></tr>
<tr><td>Simon Nemec</td>
<td>$500,000 (1)</td></tr>
<tr><td>Samuel Knazko</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jaroslav Halak</td>
<td>$500,000 (1)</td></tr>
<tr><td>Maxim Cajkovic</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SWE"><a id="SUÈDE">SUÈDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SUÈDE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#SUÈDE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#SUÈDE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#SUÈDE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#SUÈDE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#SUÈDE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#SUÈDE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#SUÈDE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#SUÈDE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#SUÈDE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#SUÈDE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#SUÈDE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#SUÈDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUÈDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUÈDE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Robin Lehner</td>
<td>$500,000 (1)</td></tr>
<tr><td>Filip Gustavsson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Erik Karlsson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Lucas Raymond</td>
<td>$500,000 (1)</td></tr>
<tr><td>William Nylander</td>
<td>$500,000 (1)</td></tr>
<tr><td>Viktor Arvidsson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Victor Hedman</td>
<td>$500,000 (1)</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mika Zibanejad</td>
<td>$500,000 (1)</td></tr>
<tr><td>Adam Larsson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Hampus Lindholm</td>
<td>$500,000 (1)</td></tr>
<tr><td>Filip Forsberg</td>
<td>$500,000 (1)</td></tr>
<tr><td>Elias Lindholm</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alexander Wennberg</td>
<td>$500,000 (1)</td></tr>
<tr><td>William Karlsson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Adam Boqvist</td>
<td>$500,000 (1)</td></tr>
<tr><td>John Klingberg</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jesper Bratt</td>
<td>$500,000 (1)</td></tr>
<tr><td>Elias Pettersson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alexander Holtz</td>
<td>$500,000 (1)</td></tr>
<tr><td>Leo Carlsson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jacob Markstrom</td>
<td>$500,000 (1)</td></tr>
<tr><td>Fabian Zetterlund</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SUI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">SUISSE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Leonardo Genoni</td>
<td>$500,000 (1)</td></tr>
<tr><td>Akira Schmid</td>
<td>$500,000 (1)</td></tr>
<tr><td>Pius Suter</td>
<td>$500,000 (1)</td></tr>
<tr><td>Philipp Kurashev</td>
<td>$500,000 (1)</td></tr>
<tr><td>Noah Rod</td>
<td>$500,000 (1)</td></tr>
<tr><td>Calvin Thurkauf</td>
<td>$500,000 (1)</td></tr>
<tr><td>Denis Malgin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nino Niederreiter</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dean Kukan</td>
<td>$500,000 (1)</td></tr>
<tr><td>Sven Baertschi</td>
<td>$500,000 (1)</td></tr>
<tr><td>Roman Josi</td>
<td>$500,000 (1)</td></tr>
<tr><td>Sven Andrighetto</td>
<td>$500,000 (1)</td></tr>
<tr><td>Mirco Mueller</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nico Hischier</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>$500,000 (1)</td></tr>
<tr><td>Kevin Fiala</td>
<td>$500,000 (1)</td></tr>
<tr><td>Christoph Bertschy</td>
<td>$500,000 (1)</td></tr>
<tr><td>Timo Meier</td>
<td>$500,000 (1)</td></tr>
<tr><td>Andres Ambühl</td>
<td>$500,000 (1)</td></tr>
<tr><td>Damien Riat</td>
<td>$500,000 (1)</td></tr>
<tr><td>Romain Loeffel</td>
<td>$500,000 (1)</td></tr>
<tr><td>Tim Berni</td>
<td>$500,000 (1)</td></tr>
<tr><td>Benjamin Conz</td>
<td>$500,000 (1)</td></tr>
<tr><td>J.J. Moser</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TCH"><a id="TCHÉQUIE">TCHÉQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">TCHÉQUIE Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#TCHÉQUIE">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#TCHÉQUIE">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#TCHÉQUIE">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#TCHÉQUIE">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#TCHÉQUIE">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#TCHÉQUIE">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#TCHÉQUIE">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#TCHÉQUIE">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#TCHÉQUIE">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#TCHÉQUIE">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#TCHÉQUIE">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#TCHÉQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TCHÉQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TCHÉQUIE" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$12,000,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$12,000,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$923,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$12,000,001</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$12,000,001</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$12,000,001</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$67,499,999</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$12,000,001</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($2,000,001)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Vitek Vanecek</td>
<td>$500,000 (1)</td></tr>
<tr><td>Michal Neuvirth</td>
<td>$500,000 (1)</td></tr>
<tr><td>Filip Chytil</td>
<td>$500,000 (1)</td></tr>
<tr><td>Martin Necas</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dominik Masin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Filip Hronek</td>
<td>$500,000 (1)</td></tr>
<tr><td>Tomas Nosek</td>
<td>$500,000 (1)</td></tr>
<tr><td>Dominik Kubalik</td>
<td>$500,000 (1)</td></tr>
<tr><td>Radim Zohorna</td>
<td>$500,000 (1)</td></tr>
<tr><td>Radko Gudas</td>
<td>$500,000 (1)</td></tr>
<tr><td>Ondrej Kase</td>
<td>$500,000 (1)</td></tr>
<tr><td>David Musil</td>
<td>$500,000 (1)</td></tr>
<tr><td>Tomas Hertl</td>
<td>$500,000 (1)</td></tr>
<tr><td>Radek Faksa</td>
<td>$500,000 (1)</td></tr>
<tr><td>Pavel Zacha</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jakub Vrana</td>
<td>$500,000 (1)</td></tr>
<tr><td>David Pastrnak</td>
<td>$500,000 (1)</td></tr>
<tr><td>Filip Zadina</td>
<td>$500,000 (1)</td></tr>
<tr><td>Filip Chlapik</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jiri Kulich</td>
<td>$500,000 (1)</td></tr>
<tr><td>David Jiricek</td>
<td>$500,000 (1)</td></tr>
<tr><td>Stanislav Svozil</td>
<td>$500,000 (1)</td></tr>
<tr><td>Karel Vejmelka</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jakub Zboril</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,000,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WOR"><a id="WORLD">WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">WORLD Page</a> ]
[ <a href="WC2024-ProTeamRoster.php#WORLD">Pro Team Roster</a> ]
[ <a href="WC2024-ProTeamScoring.php#WORLD">Pro Team Scoring</a> ]
[ <a href="WC2024-TeamFinance.php#WORLD">Team Finance</a> ]
[ <a href="WC2024-ProTeamPlayersInfo.php#WORLD">Pro Team PlayersInfo</a> ]
[ <a href="WC2024-ProTeamLines.php#WORLD">Pro Team Lines</a> ]
[ <a href="WC2024-TeamProspects.php#WORLD">Team Prospects</a> ]
[ <a href="WC2024-ProTeamSchedule.php#WORLD">Pro Team Schedule</a> ]
[ <a href="WC2024-ProTeamStats.php#WORLD">Pro Team Stats</a> ]
[ <a href="WC2024-ProTeamStatsVS.php#WORLD">Pro Team Stats VS</a> ]
[ <a href="WC2024-TeamInjurySuspension.php#WORLD">Team Injury Suspension</a> ]
[ <a href="WC2024-TeamHistory.php#WORLD">Team History</a> ]
[ <a href="WC2024-TeamRecords.php#WORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WORLD" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0,00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 0 - 0,00%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 0 - 0,00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 0 - 0,00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0,00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>2</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0,00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$11,500,000</td></tr>
<tr><td>Pro Players Total Average Salaries</td><td>$11,500,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Farm Players Total Average Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap Per Days</td><td>$884,615</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap Per Days</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>13</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$884,615</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$11,499,995</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$11,499,995</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$11,499,995</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $79,500,000</td><td>$68,000,005</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $0 </td><td>$11,499,995</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$10,000,000</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>($1,499,995)</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mads Sogaard</td>
<td>$500,000 (1)</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alexandre Texier</td>
<td>$500,000 (1)</td></tr>
<tr><td>Andrey Pedan</td>
<td>$500,000 (1)</td></tr>
<tr><td>Vadim Vasjonkin</td>
<td>$500,000 (1)</td></tr>
<tr><td>Luca Sbisa</td>
<td>$500,000 (1)</td></tr>
<tr><td>Marco Scandella</td>
<td>$500,000 (1)</td></tr>
<tr><td>Marco Rossi</td>
<td>$500,000 (1)</td></tr>
<tr><td>Joachim Blichfeld</td>
<td>$500,000 (1)</td></tr>
<tr><td>Raman Hrabarenka</td>
<td>$500,000 (1)</td></tr>
<tr><td>Andre Burakovsky</td>
<td>$500,000 (1)</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>$500,000 (1)</td></tr>
<tr><td>Alexandar Georgiyev</td>
<td>$500,000 (1)</td></tr>
<tr><td>Hafthor Sigrunarson</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jermaine Loewen</td>
<td>$500,000 (1)</td></tr>
<tr><td>Daniel Sprong</td>
<td>$500,000 (1)</td></tr>
<tr><td>Marco Kasper</td>
<td>$500,000 (1)</td></tr>
<tr><td>Arthur Kaliyev</td>
<td>$500,000 (1)</td></tr>
<tr><td>Stian Solberg</td>
<td>$500,000 (1)</td></tr>
<tr><td>David Reinbacher</td>
<td>$500,000 (1)</td></tr>
<tr><td>Jordan Spence</td>
<td>$500,000 (1)</td></tr>
<tr><td>Demid Yeremeyev</td>
<td>$500,000 (1)</td></tr>
<tr><td>Aliaksei Protas</td>
<td>$500,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $11,500,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $11,500,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $11,500,000</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>0</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2025 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2026 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2027 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="STHSTeamFinance_SalaryCapCentrale"><a id="SalaryCapCentrale">Salary Cap Centrale</a></h1>
<table class="STHSFinance_TeamTable"><tr>
<td class="STHSCenter"><h3 class="STHSTeamFinance_Team">Team</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_CurrentFund">Current Fund</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_EstimatedSeasonSalaryCap">Estimated Season Salary Cap</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_UnderMaximum">Under Maximum of $79,500,000 <br/> Available Cap Space</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_OverMinimum">Over Minimum of<br />$0</h3></td>
<td><h3 class="STHSTeamFinance_ProPlayers">Pro Players</h3></td><td><h3 class="STHSTeamFinance_FarmPlayers">Farm Players</h3></td><td><h3 class="STHSTeamFinance_TotalPlayers">Total Players</h3></td></tr>
<tr><td>ALLEMAGNE</td>
<td>$10,000,000</td>
<td>$5,500,001</td>
<td>$73,999,999</td>
<td>$5,500,001</td>
<td>11</td><td>0</td><td>11</td></tr>
<tr><td>CANADA</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>ÉTATS-UNIS</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>FINLANDE</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>LETTONIE</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>QUÉBEC</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>RUSSIE</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>SLOVAQUIE</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>SUÈDE</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>SUISSE</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>TCHÉQUIE</td>
<td>$10,000,000</td>
<td>$12,000,001</td>
<td>$67,499,999</td>
<td>$12,000,001</td>
<td>24</td><td>0</td><td>24</td></tr>
<tr><td>WORLD</td>
<td>$10,000,000</td>
<td>$11,499,995</td>
<td>$68,000,005</td>
<td>$11,499,995</td>
<td>23</td><td>0</td><td>23</td></tr>
</table>
<?php include "Footer.php";?>
