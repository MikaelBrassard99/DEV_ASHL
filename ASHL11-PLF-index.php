<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - index</title>
<script src="ASHL11-PLF.js"></script>
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
[2022-05-06 07:01:35] - Miles Wood from Los Angeles Kings is back from Fractured Right Foot Injury.<br />
[2022-05-06 07:01:35] - Ryan Nugent-Hopkins from Philadelphia Flyers is back from Strained Right Elbow Injury.<br />
[2022-05-05 22:27:00] - Brandon Pirri from Trois-Rivières Lions is back from Upper Body Injury.<br />
[2022-05-05 22:27:00] - Jordan Schneider from Mercer Island Hafgufa is back from Lower Body Injury.<br />
[2022-05-05 22:27:00] - Game 99 - Jordan Schneider from Mercer Island Hafgufa is injured  (Lower Body) and is out for 4 days.<br />
[2022-05-01 05:49:47] - Game 95 - Ryan Nugent-Hopkins from Philadelphia Flyers is injured  (Strained Right Elbow) and is out for 1 week.<br />
[2022-04-30 07:29:08] - Hampus Lindholm from Arizona Coyotes is back from Strained Left Knee Injury.<br />
[2022-04-27 05:49:50] - Nicolas Aubé-Kubel from Norfolk Admirals is back from Back Spasms Injury.<br />
[2022-04-25 05:51:06] - Nils Lundkvist from Rochester Americans is back from Separated Right Shoulder Injury.<br />
[2022-04-25 05:51:05] - Game 88 - Hampus Lindholm from Arizona Coyotes is injured  (Strained Left Knee) and is out for 2 weeks.<br />
</td><td class="STHSIndex_Top5">
<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5">Top 5 Point</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<tr><td>Ryan Nugent-Hopkins (PHI)</td><td>8-17-25</td></tr>
<tr><td>Claude Giroux (PHI)</td><td>12-11-23</td></tr>
<tr><td>Oscar Klefbom (STL)</td><td>6-14-20</td></tr>
<tr><td>Ryan Murray (PHI)</td><td>4-16-20</td></tr>
<tr><td>Matt Dumba (PHI)</td><td>3-16-19</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goal</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">GP-G</td></tr>
<tr><td>Claude Giroux (PHI)</td><td>22 - 12</td></tr>
<tr><td>Brady Tkachuk (STL)</td><td>23 - 10</td></tr>
<tr><td>Brayden Point (NYR)</td><td>18 - 8</td></tr>
<tr><td>Ryan Nugent-Hopkins (PHI)</td><td>20 - 8</td></tr>
<tr><td>Tomas Tatar (STL)</td><td>23 - 8</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goalies</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">W-PCT</td></tr>
<tr><td>Andrey Vasilevskiy (NYR)</td><td>10 - 0,917</td></tr>
<tr><td>Ken Appleby (TBL)</td><td>5 - 0,914</td></tr>
<tr><td>Petr Mrazek (STL)</td><td>12 - 0,906</td></tr>
<tr><td>Cory Schneider (NJD)</td><td>4 - 0,906</td></tr>
<tr><td>Steve Mason (PHI)</td><td>16 - 0,903</td></tr>
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
