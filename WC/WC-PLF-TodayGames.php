<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - Today Games</title>
<script src="WC-PLF.js"></script>
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
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Mathew Barzal (CANADA) / 2 - Steven Stamkos (CANADA) / 3 - Jake Guentzel (USA)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 5</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="WC-PLF-5.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>TCHÉQUIE</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Ondrej Kase(2), Tomas Hertl(7,8)<br /><br />
Michal Neuvirth (CZE), 10 saves from 13 shots - (0,769), 25:59 minutes<br />Ondrej Pavelec (CZE), 13 saves from 17 shots - (0,765), L, 7-3-0, 34:01 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>USA</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jake Guentzel(4,5), Charlie McAvoy(2), Alex Galchenyuk(5), Zachary Werenski(1), Brock Boeser(11), Brady Tkachuk(3)<br /><br />
Connor Hellebuyck (USA), 26 saves from 29 shots - (0,897), W, 8-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 6</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="WC-PLF-6.php">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>RUSSIE</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Valeri Nichushkin(2), Mikhail Sergachev(5)<br /><br />
Igor Shestyorkin (RUS), 6 saves from 10 shots - (0,600), 14:44 minutes<br />Andrey Vasilevskiy (RUS), 17 saves from 22 shots - (0,773), L, 8-3-0, 45:16 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>CANADA</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">9</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Aaron Ekblad(2), Brayden Point(7), Steven Stamkos(8,9), Connor McDavid(13), Mathew Barzal(5,6,7), Cale Makar(2)<br /><br />
Matt Murray (CAN), 17 saves from 19 shots - (0,895), W, 9-0-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
</table>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
End of Season
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSTomorrowGame_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
