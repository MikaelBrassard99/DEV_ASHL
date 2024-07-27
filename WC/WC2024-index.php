<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>WC - index</title>
<script src="WC2024.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.9.9 - WC2024-STHS.bin - WC2024-STHSCareerStat.bin"/>
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
</td><td class="STHSIndex_NewsTD">
<div class="STHSIndex_TheNews">WC2024 News</div>
<br /><br /><h2>Latest Trade, Waiver, Injury & Suspension Transactions</h2>
[2024-07-19 15:23:42] - Stanislav Svozil was added to TCHÉQUIE.<br />
[2024-07-19 15:23:35] - David Jiricek was added to TCHÉQUIE.<br />
[2024-07-19 15:23:27] - Jiri Kulich was added to TCHÉQUIE.<br />
[2024-07-19 15:12:09] - Vitek Vanecek was added to TCHÉQUIE.<br />
[2024-07-19 15:12:01] - Karel Vejmelka was added to TCHÉQUIE.<br />
[2024-07-19 15:11:52] - Michal Neuvirth was added to TCHÉQUIE.<br />
[2024-07-19 15:11:40] - Dominik Masin was added to TCHÉQUIE.<br />
[2024-07-19 15:11:32] - Jakub Zboril was added to TCHÉQUIE.<br />
[2024-07-19 15:11:25] - Radko Gudas was added to TCHÉQUIE.<br />
[2024-07-19 15:11:19] - David Musil was added to TCHÉQUIE.<br />
</td><td class="STHSIndex_Top5">
<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5">Top 10 Free Agents</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">Salary</td></tr>
<tr><th colspan="2" class="STHSTop5"><br /><br />Top 10 Unassigned</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">Age</td></tr>
<tr><td>Ondrej Pavelec</td><td>37</td></tr><tr><td>Carey Price</td><td>37</td></tr><tr><td>Mackenzie Blackwood</td><td>28</td></tr><tr><td>Jack Campbell</td><td>32</td></tr><tr><td>Martin Jones</td><td>34</td></tr><tr><td>Braden Holtby</td><td>35</td></tr><tr><td>Petr Mrazek</td><td>32</td></tr><tr><td>Ilya Sorokin</td><td>29</td></tr><tr><td>Linus Ullmark</td><td>31</td></tr><tr><td>Matt Hackett</td><td>34</td></tr><tr><td>Ken Appleby</td><td>29</td></tr></table></td></tr></table>
<?php include "Footer.php";?>
