<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Today Games</title>
<script src="ASHL13.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - ASHL13-STHS.db - ASHL13-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<h1 class="STHSTodayGame_NoGamePlayYet">No Game has been played yet!</h1>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleSchedule"><b>Schedule</b></td>
</tr>
<tr><td colspan="2" class="STHSTomorrowGame_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
<tr><td class="STHSTomorrowGame_GameNumber">1</td><td class="STHSTomorrowGame_TeamInfo">
Verdun Junior (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Dennis Cholowski - 0 | G: Dennis Cholowski - 0 | A: Dennis Cholowski - 0<br />Projected Goalies: Connor Ingram<br /><strong>VS</strong><br />Milwaukee Admirals (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Alexander Burmistrov - 0 | G: Alexander Burmistrov - 0 | A: Alexander Burmistrov - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">2</td><td class="STHSTomorrowGame_TeamInfo">
San Antonio Rampage (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Alex Biega - 0 | G: Alex Biega - 0 | A: Alex Biega - 0<br />Projected Goalies: Keith Petruzzelli<br /><strong>VS</strong><br />Providence Bruins (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Brett Kulak - 0 | G: Brett Kulak - 0 | A: Brett Kulak - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">3</td><td class="STHSTomorrowGame_TeamInfo">
Houston Aeros (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Jordan Harris - 0 | G: Jordan Harris - 0 | A: Jordan Harris - 0<br />Projected Goalies: Igor Bobkov<br /><strong>VS</strong><br />Rochester Americans (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Niko Mikkola - 0 | G: Niko Mikkola - 0 | A: Niko Mikkola - 0<br />Projected Goalies: Brendan Burke<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">4</td><td class="STHSTomorrowGame_TeamInfo">
Norfolk Admirals (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Robbie Russo - 0 | G: Robbie Russo - 0 | A: Robbie Russo - 0<br /><strong>VS</strong><br />Charlotte Checkers (0-0-0) -- Last 10 Game : 0-0-0 - N/A<br />Leaders - P: Johannes Kinnvall - 0 | G: Johannes Kinnvall - 0 | A: Johannes Kinnvall - 0<hr class="STHSTodayGame_HR"></td></tr>
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
