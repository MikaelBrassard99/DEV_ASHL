<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Waivers</title>
<script src="ASHL11-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL11-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL11-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<table class="STHSWaiver_Table"><thead><tr><th>
<b>Player</b></th><th>
<b>From Team</b></th><th>
<b>Picked by</b></th><th>
<b>Day Put on Waivers</b></th><th>
<b>Day Removed from Waivers</b></th></tr></thead><tbody>
<tr><td>Josh Manson</td><td>
<a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>
</td><td>10</td><td>12</td></tr>
<tr><td>Jens Lööke</td><td>
<a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>
</td><td>10</td><td>12</td></tr>
<tr><td>Calvin Pickard</td><td>
<a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>
</td><td>10</td><td>12</td></tr>
<tr><td>Ryan Getzlaf</td><td>
<a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>
</td><td>10</td><td>12</td></tr>
<tr><td>Marcel Noebels</td><td>
<a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>
</td><td>10</td><td>12</td></tr>
<tr><td>Nikita Gusev</td><td>
<a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>
</td><td>10</td><td>12</td></tr>
<tr><td>Jake Walman</td><td>
<a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>
</td><td>10</td><td>12</td></tr>
<tr><td>Kevin Hayes</td><td>
<a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>
</td><td>10</td><td>12</td></tr>
</tbody></table>
<br />
<h1 class="STHSWaivers_WaiverOrder">Waiver Order</h1>
1 - Tampa Bay Lightning<br />
2 - Arizona Coyotes<br />
3 - Calgary Flames<br />
4 - Minnesota Wild<br />
5 - Boston Bruins<br />
6 - Dallas Stars<br />
7 - San Jose Sharks<br />
8 - Toronto Maple Leafs<br />
9 - Chicago Blackhawks<br />
10 - New York Islanders<br />
11 - Winnipeg Jets<br />
12 - Montreal Canadiens<br />
13 - Quebec Nordiques<br />
14 - New Jersey Devils<br />
15 - Philadelphia Flyers<br />
16 - Washington Capitals<br />
17 - Seattle Kraken<br />
18 - Anaheim Ducks<br />
19 - Detroit Red Wings<br />
20 - St. Louis Blues<br />
21 - Florida Panthers<br />
22 - Ottawa Senators<br />
23 - New York Rangers<br />
24 - Carolina Hurricanes<br />
25 - Edmonton Oilers<br />
26 - Vegas Golden Knights<br />
27 - Buffalo Sabres<br />
28 - Los Angeles Kings<br />
29 - Vancouver Canucks<br />
30 - Nashville Predators<br />
31 - Columbus Blue Jackets<br />
32 - Colorado Avalanche<br />
33 - Pittsburgh Penguins<br />
<?php include "Footer.php";?>
