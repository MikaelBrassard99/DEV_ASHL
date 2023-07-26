<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Today Games</title>
<script src="ASHL10.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL10.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Travis Konecny (New York Rangers) / 2 - Adam Larsson (Philadelphia Flyers) / 3 - Nail Yakupov (New York Rangers)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 400</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL10-400.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Chicago Blackhawks</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Anders Lindback (CHI), 33 saves from 35 shots - (0,943), L, 9-6-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>New York Islanders</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">David Krejci(3), Dominik Kubalik(7)<br /><br />
Jake Paterson (NYI), 20 saves from 20 shots - (1,000), W, 4-2-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 402</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL10-402.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>New York Rangers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Travis Konecny(2,3), Viktor Arvidsson(4), Brayden Point(10), Nail Yakupov(7,8), Jesper Bratt(3)<br /><br />
Jack Campbell (NYR), 30 saves from 31 shots - (0,968), W, 8-6-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Montreal Canadiens</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alex Pietrangelo(5)<br /><br />
Pavel Francouz (MTL), 27 saves from 34 shots - (0,794), L, 4-3-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 403</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL10-403.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Pittsburgh Penguins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Bobby Ryan(7,8), Derek Stepan(8), Jonathan Audy-Marchessault(2), Andrew O'Brien(1)<br /><br />
John Gibson (PIT), 17 saves from 20 shots - (0,850), W, 4-6-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Winnipeg Jets</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Noah Rod(1), Casey Cizikas(3), Cole Ully(4)<br /><br />
Carey Price (WPG), 40 saves from 45 shots - (0,889), L, 6-9-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 404</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL10-404.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Minnesota Wild</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
JC Lipon(6), Jake Virtanen(6)<br /><br />
Thatcher Demko (MIN), 41 saves from 44 shots - (0,932), L, 9-9-2, 59:02 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Philadelphia Flyers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Claude Giroux(11), Oscar Klefbom(1), Adam Larsson(6,7)<br /><br />
Jonathan Quick (PHI), 26 saves from 28 shots - (0,929), W, 15-5-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 405 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="ASHL10-405.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>St. Louis Blues</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Theodor Blueger(3), Tanner Pearson(5)<br /><br />
Tuukka Rask (STL), 25 saves from 27 shots - (0,926), OTL, 11-3-2, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Washington Capitals</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Colton Parayko(2), Mikhail Sergachev(6)<br /><br />
Braden Holtby (WSH), 26 saves from 28 shots - (0,929), W, 11-3-4, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td></td></tr></table>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
End of Season
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleSchedule"><b>Schedule</b></td>
</tr>
<tr><td colspan="2" class="STHSTomorrowGame_GameDay"><b>Day 62</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
