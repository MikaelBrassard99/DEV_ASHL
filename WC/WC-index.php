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
</td></tr></table>
</td><td class="STHSIndex_NewsTD">
<div class="STHSIndex_TheNews">WORLD CUP 2023 News</div>
<br /><br /><h2>Latest Trade, Waiver, Injury & Suspension Transactions</h2>
[2023-07-24 23:02:15] - Liam Kirk was added to WORLD.<br />
[2023-07-24 21:16:26] - Adam Húska was added to SLOVAQUIE.<br />
[2023-07-24 21:16:17] - Michal Ivan was added to SLOVAQUIE.<br />
[2023-07-24 21:16:05] - Simon Nemec was added to SLOVAQUIE.<br />
[2023-07-24 21:15:56] - Samuel Knazko was added to SLOVAQUIE.<br />
[2023-07-24 18:58:33] - Adam Sýkora was added to SLOVAQUIE.<br />
[2023-07-24 18:58:24] - Dalibor Dvorský was added to SLOVAQUIE.<br />
[2023-07-24 18:58:16] - Filip Mesar was added to SLOVAQUIE.<br />
[2023-07-24 18:58:08] - Martin Pospisil was added to SLOVAQUIE.<br />
[2023-07-23 20:51:14] - Juraj Slafkovský was added to SLOVAQUIE.<br />
</td><td class="STHSIndex_Top5">
<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5">Top 5 Point</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">G-A-P</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goal</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">GP-G</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 5 Goalies</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">W-PCT</td></tr>
</table></td></tr></table>
<?php include "Footer.php";?>
