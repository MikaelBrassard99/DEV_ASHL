<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - index</title>
<script src="ASHL101-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="ASHL RSS Feed" href="http://www.ashligue.com/site//RSSFeed.xml" />
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
<tr><th>Day 49</th><th class="STHSCTRight">#105</th></tr>
<tr><td>Toronto Maple Leafs</td><td class="STHSRight">4</td></tr>
<tr><td>Winnipeg Jets</td><td class="STHSRight">3</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="ASHL101-PLF-105.php">Boxscore</a></td>
</tr></table>
</td></tr></table>
</td><td class="STHSIndex_NewsTD">
<div class="STHSIndex_TheNews">ASHL News</div>
<br /><br /><h2>Latest Trade, Waiver, Injury & Suspension Transactions</h2>
[2021-06-29 15:47:31] - Petteri Lindbohm from Toronto Maple Leafs is back from Upper Body Injury.<br />
[2021-06-29 15:47:31] - Erik Haula from Connecticut Whale is back from Left Knee Injury.<br />
[2021-06-29 05:43:13] - Sami Vatanen from Winnipeg Jets is back from Bruised Right Arm Injury.<br />
[2021-06-28 22:47:26] - Brandon Saigeon has been deleted from Buffalo Sabres.<br />
[2021-06-27 05:08:33] - Game 102 - Petteri Lindbohm from Toronto Maple Leafs is injured  (Upper Body) and is out for 2 weeks.<br />
[2021-06-25 05:45:37] - Game 100 - Dmitri Kulikov from Winnipeg Jets is injured  (Torn Right ACL) and is out for 1 month.<br />
[2021-06-21 06:14:28] - Gustav Forsling from Connecticut Whale is back from Chest/Ribs Injury.<br />
[2021-06-21 06:14:28] - Michael Del Zotto from Los Angeles Kings is back from Bruised Right Leg Injury.<br />
[2021-06-20 05:01:20] - Spencer Stastney from Milwaukee Admirals is back from Lower Body Injury.<br />
[2021-06-20 05:01:20] - Game 94 - Spencer Stastney from Milwaukee Admirals is injured  (Lower Body) and is out for 3 days.<br />
</td><td class="STHSIndex_Top5">
<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5">Top 5 Point</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<tr><td>Anze Kopitar (LOS)</td><td>11-16-27</td></tr>
<tr><td>Jeff Skinner (LOS)</td><td>12-14-26</td></tr>
<tr><td>Mikael Granlund (TOR)</td><td>12-12-24</td></tr>
<tr><td>Gabriel Landeskog (WPG)</td><td>11-13-24</td></tr>
<tr><td>Auston Matthews (WPG)</td><td>8-15-23</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goal</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">GP-G</td></tr>
<tr><td>Jeff Skinner (LOS)</td><td>20 - 12</td></tr>
<tr><td>Sebastian Aho (TOR)</td><td>21 - 12</td></tr>
<tr><td>Mikael Granlund (TOR)</td><td>21 - 12</td></tr>
<tr><td>Anze Kopitar (LOS)</td><td>20 - 11</td></tr>
<tr><td>Alexander Burmistrov (WPG)</td><td>25 - 11</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goalies</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">W-PCT</td></tr>
<tr><td>Sergei Bobrovsky (FLA)</td><td>5 - 0,930</td></tr>
<tr><td>Carey Price (WPG)</td><td>15 - 0,918</td></tr>
<tr><td>Steve Mason (TOR)</td><td>16 - 0,917</td></tr>
<tr><td>Cam Ward (PIT)</td><td>8 - 0,916</td></tr>
<tr><td>Kevin Poulin (STL)</td><td>3 - 0,906</td></tr>
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
