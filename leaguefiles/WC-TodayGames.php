<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Today Games</title>
<script src="WC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<h1 class="STHSTodayGame_NoGamePlayYet">No Game has been played yet!</h1>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSTomorrowGame_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
<tr><td class="STHSTomorrowGame_GameNumber">1</td><td class="STHSTomorrowGame_TeamInfo">
TCHÉQUIE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Jakub Zboril - 0 | G: Jakub Zboril - 0 | A: Jakub Zboril - 0<br /><strong>VS</strong><br />LETTONIE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Rodrigo Abols - 0 | G: Rodrigo Abols - 0 | A: Rodrigo Abols - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">2</td><td class="STHSTomorrowGame_TeamInfo">
CANADA (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Alex Pietrangelo - 0 | G: Alex Pietrangelo - 0 | A: Alex Pietrangelo - 0<br />Projected Goalies: Matt Murray<br /><strong>VS</strong><br />SLOVAQUIE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Adam Ruzicka - 0 | G: Adam Ruzicka - 0 | A: Adam Ruzicka - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">3</td><td class="STHSTomorrowGame_TeamInfo">
DANEMARK (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Alexander True - 0 | G: Alexander True - 0 | A: Alexander True - 0<br /><strong>VS</strong><br />FINLANDE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Joel Kiviranta - 0 | G: Joel Kiviranta - 0 | A: Joel Kiviranta - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">4</td><td class="STHSTomorrowGame_TeamInfo">
USA (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Joel Farabee - 0 | G: Joel Farabee - 0 | A: Joel Farabee - 0<br /><strong>VS</strong><br />SUÈDE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Erik Karlsson - 0 | G: Erik Karlsson - 0 | A: Erik Karlsson - 0<hr class="STHSTodayGame_HR"></td></tr>
</table>
</td><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
