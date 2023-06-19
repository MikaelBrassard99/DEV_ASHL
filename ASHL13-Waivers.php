<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Waivers</title>
<script src="ASHL13.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - ASHL13-STHS.db - ASHL13-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<table class="STHSWaiver_Table"><thead><tr><th>
<b>Player</b></th><th>
<b>From Team</b></th><th>
<b>Picked by</b></th><th>
<b>Day Put on Waivers</b></th><th>
<b>Day Removed from Waivers</b></th></tr></thead><tbody>
<tr><td colspan="5" style="text-align:center;"><br /><h2 class="STHSWaivers_NoPlayerOnWaiver">No Player on Waivers</h2></td></tr>
</tbody></table>
<br />
<h1 class="STHSWaivers_WaiverOrder">Waiver Order</h1>
1 - Quebec Nordiques<br />
2 - Carolina Hurricanes<br />
3 - Washington Capitals<br />
4 - San Jose Sharks<br />
5 - Calgary Flames<br />
6 - Toronto Maple Leafs<br />
7 - Colorado Avalanche<br />
8 - Chicago Blackhawks<br />
9 - Pittsburgh Penguins<br />
10 - New Jersey Devils<br />
11 - St. Louis Blues<br />
12 - Buffalo Sabres<br />
13 - Minnesota Wild<br />
14 - Edmonton Oilers<br />
15 - Philadelphia Flyers<br />
16 - Arizona Coyotes<br />
17 - Tampa Bay Lightning<br />
18 - Dallas Stars<br />
19 - New York Islanders<br />
20 - Seattle Kraken<br />
21 - Detroit Red Wings<br />
22 - Nashville Predators<br />
23 - Winnipeg Jets<br />
24 - Ottawa Senators<br />
25 - Los Angeles Kings<br />
26 - Anaheim Ducks<br />
27 - Boston Bruins<br />
28 - Florida Panthers<br />
29 - Montreal Canadiens<br />
30 - Vancouver Canucks<br />
31 - Columbus Blue Jackets<br />
32 - New York Rangers<br />
33 - Vegas Golden Knights<br />
<?php include "Footer.php";?>
