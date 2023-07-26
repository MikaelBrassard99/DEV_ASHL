<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - index</title>
<script src="ASHL11.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.2.2 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
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
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<table class="STHSIndex_Main"><tr><td class="STHSIndex_Score">
<table class="STHSTableFullW"><tr><td>
<div class="STHSIndex_LastestResult">Latest Scores</div>
</td></tr></table>
</td><td class="STHSIndex_NewsTD">
<div class="STHSIndex_TheNews">ASHL News</div>
<br /><br /><h2>Latest Trade, Waiver, Injury & Suspension Transactions</h2>
[2022-03-24 19:19:13] - Dalton Prout from Grand Rapids Griffins is back from Separated Right Shoulder Injury.<br />
[2022-03-24 19:19:13] - Mario Ferraro from Chicago Blackhawks is back from Strained Groin Injury.<br />
[2022-03-24 19:19:13] - Alex Turcotte from Milwaukee Admirals is back from Bruised Right Leg Injury.<br />
[2022-03-24 19:16:36] - Josh Mahura from Connecticut Whale is back from Lower Body Injury.<br />
[2022-03-24 19:11:17] - Ben Hutton from Los Angeles Kings is back from Sprained Right Finger Injury.<br />
[2022-03-24 18:59:26] - Jamie Benn from Quebec Nordiques is back from Left Foot Injury.<br />
[2022-03-24 18:51:01] - David Perron from Henderson Silver Knights is back from Strained Right Elbow Injury.<br />
[2022-03-24 18:51:00] - Game 1340 - David Perron from Henderson Silver Knights is injured  (Strained Right Elbow) and is out for 5 days.<br />
[2022-03-24 18:41:54] - Connor Hurley from Henderson Silver Knights is back from Left Ankle Injury.<br />
[2022-03-24 18:41:54] - Sam Carrick from Houston Aeros is back from Bruised Right Leg Injury.<br />
</td><td class="STHSIndex_Top5">
<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5">Top 5 Point</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<tr><td>Jeff Skinner (LOS)</td><td>42-42-84</td></tr>
<tr><td>Aleksander Barkov (FLA)</td><td>36-48-84</td></tr>
<tr><td>Nikita Kucherov (DET)</td><td>33-47-80</td></tr>
<tr><td>Drew Doughty (LOS)</td><td>19-61-80</td></tr>
<tr><td>Mathew Barzal (DAL)</td><td>28-50-78</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goal</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">GP-G</td></tr>
<tr><td>Jeff Skinner (LOS)</td><td>82 - 42</td></tr>
<tr><td>Aleksander Barkov (FLA)</td><td>82 - 36</td></tr>
<tr><td>Connor McDavid (VAN)</td><td>82 - 36</td></tr>
<tr><td>Vladimir Tarasenko (MIN)</td><td>82 - 34</td></tr>
<tr><td>Dylan Larkin (OTT)</td><td>83 - 34</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goalies</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">W-PCT</td></tr>
<tr><td>Ken Appleby (TBL)</td><td>33 - 0,915</td></tr>
<tr><td>Steve Mason (PHI)</td><td>28 - 0,912</td></tr>
<tr><td>Robin Lehner (OTT)</td><td>44 - 0,911</td></tr>
<tr><td>Sergei Bobrovsky (FLA)</td><td>32 - 0,910</td></tr>
<tr><td>Michal Neuvirth (MTL)</td><td>37 - 0,909</td></tr>
</table></td></tr></table>
<br /><table class="STHSIndex_OutputSetting_Table"><tr>
<td colspan="11"><h3>Pro and Farm League Simulator Setting</h3></td></tr><tr>
<td class="STHSW100"><b>Pro</b> League</td>
<td class="STHSW100"><b>Coaches :</b> 40</td>
<td class="STHSW100"><b>Fights :</b> 10</td>
<td class="STHSW100"><b>Finances :</b> 50</td>
<td class="STHSW100"><b>Goals :</b> 37</td>
<td class="STHSW100"><b>Injuries :</b> 33</td>
<td class="STHSW100"><b>Morale :</b> 2</td>
<td class="STHSW100"><b>Penalties :</b> 28</td>
<td class="STHSW100"><b>Shots :</b> 67</td>
<td class="STHSW75"><b>Hits :</b> 50</td>
<td class="STHSW75"></td>
</tr><tr>
<td class="STHSW100"><b>Farm</b> League</td>
<td class="STHSW100"><b>Coaches :</b> 40</td>
<td class="STHSW100"><b>Fights :</b> 10</td>
<td class="STHSW100"><b>Finances :</b> 50</td>
<td class="STHSW100"><b>Goals :</b> 37</td>
<td class="STHSW100"><b>Injuries :</b> 33</td>
<td class="STHSW100"><b>Morale :</b> 2</td>
<td class="STHSW100"><b>Penalties :</b> 28</td>
<td class="STHSW100"><b>Shots :</b> 67</td>
<td class="STHSW75"><b>Hits :</b> 50</td>
<td class="STHSW75"></td>
</tr></table>
<?php include "Footer.php";?>
