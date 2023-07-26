<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Waivers</title>
<script src="ASHL12.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.3.3 - ASHL12-STHS.db - ASHL12-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
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
1 - New York Islanders<br />
2 - Seattle Kraken<br />
3 - Pittsburgh Penguins<br />
4 - Calgary Flames<br />
5 - Buffalo Sabres<br />
6 - Winnipeg Jets<br />
7 - Vancouver Canucks<br />
8 - Edmonton Oilers<br />
9 - Colorado Avalanche<br />
10 - San Jose Sharks<br />
11 - Anaheim Ducks<br />
12 - Minnesota Wild<br />
13 - Nashville Predators<br />
14 - Carolina Hurricanes<br />
15 - Detroit Red Wings<br />
16 - Boston Bruins<br />
17 - Philadelphia Flyers<br />
18 - Toronto Maple Leafs<br />
19 - New York Rangers<br />
20 - Los Angeles Kings<br />
21 - Ottawa Senators<br />
22 - New Jersey Devils<br />
23 - St. Louis Blues<br />
24 - Dallas Stars<br />
25 - Chicago Blackhawks<br />
26 - Tampa Bay Lightning<br />
27 - Florida Panthers<br />
28 - Montreal Canadiens<br />
29 - Vegas Golden Knights<br />
30 - Arizona Coyotes<br />
31 - Quebec Nordiques<br />
32 - Columbus Blue Jackets<br />
33 - Washington Capitals<br />
<?php include "Footer.php";?>
