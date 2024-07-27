<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - index</title>
<script src="WC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - WC-STHS.bin - WC-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
.CarouselTable {border-width: 0.5px;border-style: solid;border-collapse: collapse; width: 92%;}
.CarouselTable th {font-weight: bold;}
.CarouselTable td {padding-left: 5px;padding-right: 10px;}
.CarouselTable td > a {text-decoration: none;}
@media screen and (max-width: 890px) {.STHSIndex_Score{display:none;}}
@media screen and (max-width: 1200px) {.STHSIndex_Top5 {display:none;}.STHSIndex_OutputSetting_Table{display:none;}}
</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<table class="STHSIndex_Main"><tr><td class="STHSIndex_Score">
<table class="STHSTableFullW"><tr><td>
<div class="STHSIndex_LastestResult">Latest Scores</div>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 25</th><th class="STHSCTRight">#64</th></tr>
<tr><td>SUISSE</td><td class="STHSRight">1</td></tr>
<tr><td>CANADA</td><td class="STHSRight">3</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="WC-64.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 25</th><th class="STHSCTRight">#65</th></tr>
<tr><td>SLOVAQUIE</td><td class="STHSRight">1</td></tr>
<tr><td>SUÈDE</td><td class="STHSRight">3</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="WC-65.php">Boxscore</a></td>
</tr></table>
<table class="CarouselTable" style="width:200px;">
<tr><th>Day 25</th><th class="STHSCTRight">#66</th></tr>
<tr><td>USA</td><td class="STHSRight">3</td></tr>
<tr><td>FINLANDE</td><td class="STHSRight">1</td></tr>
<tr><td colspan="2" class="STHSCenter"><a href="WC-66.php">Boxscore</a></td>
</tr></table>
</td></tr></table>
</td><td class="STHSIndex_NewsTD">
<div class="STHSIndex_TheNews">WORLD CUP 2023 News</div>
<br /><br /><h2>Latest Trade, Waiver, Injury & Suspension Transactions</h2>
[2023-08-20 07:22:47] - Martin Reway from SLOVAQUIE is back from Exhaustion.<br />
[2023-08-19 06:21:50] - Martin Reway from SLOVAQUIE is injured from Exhaustion.<br />
[2023-08-18 07:12:16] - Martin Reway from SLOVAQUIE is back from Exhaustion.<br />
[2023-08-17 06:30:00] - Leon Gawanke from ALLEMAGNE is back from Torn Left Knee Ligaments Injury.<br />
[2023-08-17 06:30:00] - Martin Reway from SLOVAQUIE is injured from Exhaustion.<br />
[2023-08-15 17:40:30] - Hampus Lindholm from SUÈDE is back from Torn Left ACL Injury.<br />
[2023-08-14 05:46:59] - Mads Søgaard from DANEMARK is back from Exhaustion.<br />
[2023-08-14 05:46:59] - Martin Reway from SLOVAQUIE is back from Right Leg Injury.<br />
[2023-08-14 05:46:59] - Ivan Provorov from RUSSIE is back from Strained Right Elbow Injury.<br />
[2023-08-13 07:30:33] - Mads Søgaard from DANEMARK injured  (Exhaustion)<br />
</td><td class="STHSIndex_Top5">
<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5">Top 5 Point</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<tr><td>Connor McDavid (CAN)</td><td>11-9-20</td></tr>
<tr><td>Nathan MacKinnon (CAN)</td><td>6-14-20</td></tr>
<tr><td>David Pastrnak (CZE)</td><td>9-9-18</td></tr>
<tr><td>Nikita Kucherov (RUS)</td><td>7-11-18</td></tr>
<tr><td>Tomas Hertl (CZE)</td><td>6-11-17</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goal</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">GP-G</td></tr>
<tr><td>Connor McDavid (CAN)</td><td>11 - 11</td></tr>
<tr><td>David Pastrnak (CZE)</td><td>11 - 9</td></tr>
<tr><td>Brock Boeser (USA)</td><td>11 - 8</td></tr>
<tr><td>Auston Matthews (USA)</td><td>11 - 7</td></tr>
<tr><td>Rudolfs Balcers (LET)</td><td>11 - 7</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goalies</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">W-PCT</td></tr>
<tr><td>Andrey Vasilevskiy (RUS)</td><td>7 - 0,942</td></tr>
<tr><td>Matt Murray (CAN)</td><td>7 - 0,941</td></tr>
<tr><td>Ondrej Pavelec (CZE)</td><td>6 - 0,938</td></tr>
<tr><td>Connor Hellebuyck (USA)</td><td>6 - 0,931</td></tr>
<tr><td>Juuse Saros (FIN)</td><td>5 - 0,920</td></tr>
</table></td></tr></table>
<?php include "Footer.php";?>
