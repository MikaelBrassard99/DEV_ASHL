<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Today Games</title>
<script src="WC2024.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.9.9 - WC2024-STHS.bin - WC2024-STHSCareerStat.bin"/>
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
SUISSE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: J.J. Moser - 0 | G: J.J. Moser - 0 | A: J.J. Moser - 0<br /><strong>VS</strong><br />TCHÉQUIE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Jakub Zboril - 0 | G: Jakub Zboril - 0 | A: Jakub Zboril - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">2</td><td class="STHSTomorrowGame_TeamInfo">
LETTONIE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Rodrigo Abols - 0 | G: Rodrigo Abols - 0 | A: Rodrigo Abols - 0<br /><strong>VS</strong><br />ALLEMAGNE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Nico Sturm - 0 | G: Nico Sturm - 0 | A: Nico Sturm - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">3</td><td class="STHSTomorrowGame_TeamInfo">
SLOVAQUIE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Maxim Cajkovic - 0 | G: Maxim Cajkovic - 0 | A: Maxim Cajkovic - 0<br /><strong>VS</strong><br />QUÉBEC (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Maxime Comtois - 0 | G: Maxime Comtois - 0 | A: Maxime Comtois - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">4</td><td class="STHSTomorrowGame_TeamInfo">
FINLANDE (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Joel Kiviranta - 0 | G: Joel Kiviranta - 0 | A: Joel Kiviranta - 0<br /><strong>VS</strong><br />WORLD (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Aliaksei Protas - 0 | G: Aliaksei Protas - 0 | A: Aliaksei Protas - 0<hr class="STHSTodayGame_HR"></td></tr>
</table>
</td><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
