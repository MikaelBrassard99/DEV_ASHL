<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - index</title>
<script src="ASHL12.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.3.3 - ASHL12-STHS.db - ASHL12-STHSCareerStat.db"/>
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
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<table class="STHSIndex_Main"><tr><td class="STHSIndex_Score">
</td><td class="STHSIndex_NewsTD">
<div class="STHSIndex_TheNews">ASHL News</div>
<br /><br /><h2>Latest Trade, Waiver, Injury & Suspension Transactions</h2>
[2022-06-11 07:52:50] - TRADE : From Arizona Coyotes to Anaheim Ducks : Oskar Lindblom, Mike Hardman, Y:2022-RND:5-VEG.<br />
[2022-06-11 07:52:50] - TRADE : From Anaheim Ducks to Arizona Coyotes : Lawson Crouse, Y:2022-RND:1-STL.<br />
[2022-06-11 07:45:46] - TRADE : From Detroit Red Wings to Dallas Stars : Vince Dunn, Y:2022-RND:2-CHI, Y:2022-RND:2-PHI.<br />
[2022-06-11 07:45:46] - TRADE : From Dallas Stars to Detroit Red Wings : Y:2022-RND:1-DAL, Y:2022-RND:3-MTL.<br />
[2022-06-11 07:42:26] - TRADE : From Philadelphia Flyers to Chicago Blackhawks : Martin Frk, Ryan Hartman.<br />
[2022-06-11 07:42:26] - TRADE : From Chicago Blackhawks to Philadelphia Flyers : Ben Bishop.<br />
[2022-06-09 07:16:10] - Xavier Parent was added to Seattle Kraken.<br />
[2022-06-09 07:02:19] - TRADE : From Vegas Golden Knights to Philadelphia Flyers : Tim Stützle.<br />
[2022-06-09 07:02:19] - TRADE : From Philadelphia Flyers to Vegas Golden Knights : Nick Schmaltz, Dylan Holloway (P), Y:2022-RND:1-QUE, Y:2024-RND:2-PHI.<br />
[2022-06-08 06:53:02] - TRADE : From Minnesota Wild to Carolina Hurricanes : Y:2023-RND:5-FLA.<br />
</td><td class="STHSIndex_Top5">
<table class="STHSIndex_Top5Table">
<tr><th colspan="2" class="STHSTop5">Top 10 Free Agents</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">Salary</td></tr>
<tr><td>Carter Hart (NSH)</td><td>950 000 $</td></tr><tr><td>Jaroslav Halak (SJS)</td><td>12 000 000 $</td></tr><tr><td>Jonathan Quick (VEG)</td><td>1 000 000 $</td></tr><tr><td>Linus Ullmark (CAR)</td><td>1 500 000 $</td></tr><tr><td>Brian Elliott (MIN)</td><td>1 260 000 $</td></tr><tr><td>Petr Mrazek (STL)</td><td>4 500 000 $</td></tr><tr><td>Anders Lindback (OTT)</td><td>2 150 000 $</td></tr><tr><td>Jake Allen (MTL)</td><td>1 200 000 $</td></tr><tr><td>Frederik Andersen (FLA)</td><td>1 100 000 $</td></tr><tr><td>Chet Pickard (NSH)</td><td>1 500 000 $</td></tr><tr><td>Marc-Andre Fleury (EDM)</td><td>7 500 000 $</td></tr><tr><th colspan="2" class="STHSTop5"><br /><br />Top 10 Unassigned</th></tr>
<tr><td class="STHSIndex_Top5PointNameHeader">Name</td><td class="STHSIndex_Top5PointResultHeader">Age</td></tr>
<tr><td>James Reimer</td><td>34</td></tr><tr><td>Tuukka Rask</td><td>34</td></tr><tr><td>Timo Pielmeier</td><td>33</td></tr><tr><td>Tom McCollum</td><td>33</td></tr><tr><td>Michael Hutchinson</td><td>32</td></tr><tr><td>Leland Irving</td><td>34</td></tr><tr><td>Karri Ramo</td><td>36</td></tr><tr><td>Robert Mayer</td><td>33</td></tr><tr><td>Cameron Talbot</td><td>35</td></tr><tr><td>Thomas Greiss</td><td>36</td></tr><tr><td>Emil Garipov</td><td>31</td></tr></table></td></tr></table>
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
