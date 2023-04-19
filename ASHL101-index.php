<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - index</title>
<script src="ASHL101.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="ASHL RSS Feed" href="https://www.ashligue.com/site//RSSFeed.xml" />
<style>
.CarouselTable {border-width: 0.5px;border-style: solid;border-collapse: collapse; width: 92%;}
.CarouselTable th {font-weight: bold;}
.CarouselTable td {padding-left: 5px;padding-right: 10px;}
.CarouselTable td > a {text-decoration: none;}
@media screen and (max-width: 890px) {.STHSIndex_Score{display:none;}}
@media screen and (max-width: 1200px) {.STHSIndex_Top5 {display:none;}.STHSIndex_OutputSetting_Table{display:none;}}
</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL101-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL101-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<table class="STHSIndex_Main"><tr><td class="STHSIndex_Score">
<table class="STHSTableFullW"><tr><td>
<div class="STHSIndex_LastestResult">Latest Scores</div>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1343</th></tr>
<tr><td>Arizona Coyotes</td><td class="STHSRight">0</td></tr>
<tr><td>Boston Bruins</td><td class="STHSRight">4</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1343.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1344</th></tr>
<tr><td>Columbus Blue Jackets</td><td class="STHSRight">7</td></tr>
<tr><td>Colorado Avalanche</td><td class="STHSRight">6</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1344.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1345</th></tr>
<tr><td>Los Angeles Kings</td><td class="STHSRight">2</td></tr>
<tr><td>Minnesota Wild</td><td class="STHSRight">5</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1345.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1346</th></tr>
<tr><td>Nashville Predators</td><td class="STHSRight">3</td></tr>
<tr><td>New Jersey Devils</td><td class="STHSRight">2</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1346.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1347</th></tr>
<tr><td>Toronto Maple Leafs</td><td class="STHSRight">2</td></tr>
<tr><td>Vancouver Canucks</td><td class="STHSRight">4</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1347.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1348</th></tr>
<tr><td>Edmonton Oilers</td><td class="STHSRight">4</td></tr>
<tr><td>Detroit Red Wings</td><td class="STHSRight">3</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1348.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1349</th></tr>
<tr><td>Seattle Kraken</td><td class="STHSRight">4</td></tr>
<tr><td>St. Louis Blues</td><td class="STHSRight">5</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1349.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1350</th></tr>
<tr><td>New York Rangers</td><td class="STHSRight">1</td></tr>
<tr><td>Ottawa Senators</td><td class="STHSRight">2</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1350.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1351</th></tr>
<tr><td>Washington Capitals</td><td class="STHSRight">4</td></tr>
<tr><td>Winnipeg Jets</td><td class="STHSRight">3</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1351.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1352</th></tr>
<tr><td>Quebec Nordiques</td><td class="STHSRight">5</td></tr>
<tr><td>Pittsburgh Penguins</td><td class="STHSRight">4</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1352.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 193</th><th class="STHSCTRight">#1353</th></tr>
<tr><td>Calgary Flames</td><td class="STHSRight">5</td></tr>
<tr><td>Carolina Hurricanes</td><td class="STHSRight">4</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-1353.php">Boxscore</a></td>
</tr></table>
</td></tr></table>
</td><td class="STHSIndex_NewsTD">
<div class="STHSIndex_TheNews">ASHL News</div>
<br /><br /><h2>Latest Trade, Waiver, Injury & Suspension Transactions</h2>
[2021-05-10 19:09:32] - Jack Hughes from Ottawa Senators is back from Torn Left ACL Injury.<br />
[2021-05-10 19:09:32] - Game 1352 - Conor Sheary from Pittsburgh Penguins is injured  (Strained Right Knee) and is out for 2 weeks.<br />
[2021-05-10 18:57:41] - Boston Bruins placed Ludwig Blomstrand on waivers.<br />
[2021-05-10 18:37:32] - Charles-Olivier Roussel from Houston Aeros is back from Strained Groin Injury.<br />
[2021-05-10 18:37:32] - Magnus Nygren from Quebec Nordiques is back from Strained Right Elbow Injury.<br />
[2021-05-10 18:37:32] - Nikita Jevpalovs(Toronto Maple Leafs) cleared from waivers and was sent to down farm.<br />
[2021-05-10 18:37:32] - Jesse Blacker(Toronto Maple Leafs) cleared from waivers and was sent to down farm.<br />
[2021-05-10 18:37:32] - Nick Foligno(Los Angeles Kings) cleared from waivers and was sent to down farm.<br />
[2021-05-10 18:37:32] - Game 1340 - Magnus Nygren from Quebec Nordiques is injured  (Strained Right Elbow) and is out for 5 days.<br />
[2021-05-10 05:41:18] - Brendan Guhle from Springfield Falcons is back from Dislocated Patella Injury.<br />
</td><td class="STHSIndex_Top5">
<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5">Top 5 Point</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<tr><td>Anze Kopitar (LOS)</td><td>35-60-95</td></tr>
<tr><td>Jeff Skinner (LOS)</td><td>46-43-89</td></tr>
<tr><td>Sean Monahan (COL)</td><td>36-51-87</td></tr>
<tr><td>Steven Stamkos (ARZ)</td><td>44-42-86</td></tr>
<tr><td>Drew Doughty (LOS)</td><td>12-73-85</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goal</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">GP-G</td></tr>
<tr><td>Jeff Skinner (LOS)</td><td>82 - 46</td></tr>
<tr><td>Steven Stamkos (ARZ)</td><td>82 - 44</td></tr>
<tr><td>Auston Matthews (WPG)</td><td>82 - 41</td></tr>
<tr><td>Connor McDavid (VAN)</td><td>82 - 41</td></tr>
<tr><td>Nathan MacKinnon (CLB)</td><td>82 - 38</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goalies</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">W-PCT</td></tr>
<tr><td>Keith Kinkaid (PIT)</td><td>22 - 0,920</td></tr>
<tr><td>Matt Murray (VEG)</td><td>47 - 0,916</td></tr>
<tr><td>Juuse Saros (SEA)</td><td>16 - 0,914</td></tr>
<tr><td>Henrik Lundqvist (CLB)</td><td>25 - 0,913</td></tr>
<tr><td>Carey Price (WPG)</td><td>40 - 0,913</td></tr>
</table></td></tr></table>
<br /><table class="STHSIndex_OutputSetting_Table"><tr>
<td colspan="11"><h3>Pro and Farm League Simulator Setting</h3></td></tr><tr>
<td class="STHSW100"><b>Pro</b> League</td>
<td class="STHSW100"><b>Coaches :</b> 40</td>
<td class="STHSW100"><b>Fights :</b> 10</td>
<td class="STHSW100"><b>Finances :</b> 50</td>
<td class="STHSW100"><b>Goals :</b> 30</td>
<td class="STHSW100"><b>Injuries :</b> 33</td>
<td class="STHSW100"><b>Morale :</b> 2</td>
<td class="STHSW100"><b>Penalties :</b> 28</td>
<td class="STHSW100"><b>Shots :</b> 73</td>
<td class="STHSW75"><b>Hits :</b> 50</td>
<td class="STHSW75"></td>
</tr><tr>
<td class="STHSW100"><b>Farm</b> League</td>
<td class="STHSW100"><b>Coaches :</b> 40</td>
<td class="STHSW100"><b>Fights :</b> 10</td>
<td class="STHSW100"><b>Finances :</b> 50</td>
<td class="STHSW100"><b>Goals :</b> 30</td>
<td class="STHSW100"><b>Injuries :</b> 33</td>
<td class="STHSW100"><b>Morale :</b> 2</td>
<td class="STHSW100"><b>Penalties :</b> 28</td>
<td class="STHSW100"><b>Shots :</b> 73</td>
<td class="STHSW75"><b>Hits :</b> 50</td>
<td class="STHSW75"></td>
</tr></table>
<?php include "Footer.php";?>
