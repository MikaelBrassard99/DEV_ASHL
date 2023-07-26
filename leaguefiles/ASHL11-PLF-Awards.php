<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Awards</title>
<script src="ASHL11-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.2.2 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<table class="STHSAward_Table"><thead><tr><th>Awards</th><th>Winner</th></tr></thead>
<tbody><tr><td><b>Stanley Cup</b> : Playoff Champion</td><td>
<b>Philadelphia Flyers</b>
</td></tr>
<tr><td><b>Presidents' Trophy</b> : Best Overall Record</td><td>
<b>Arizona Coyotes</b>
</td></tr>
<tr><td><b>Prince of Wales Trophy</b> : Eastern Conference Champion</td><td>
<b>Philadelphia Flyers</b>
</td></tr>
<tr><td><b>Clarence S. Campbell Bowl</b>  : Western Conference Champion</td><td>
<b>St. Louis Blues</b>
</td></tr>
<tr><td><b>Art Ross Trophy</b> : Top Point Scorer in the NHL</td><td>
<b>Jeff Skinner</b> from <b>Los Angeles Kings</b> with 84 points.
</td></tr>
<tr><td><b>Maurice Richard Trophy</b> : Top Goal Scorer in the NHL</td><td>
<b>Jeff Skinner</b> from <b>Los Angeles Kings</b> with 42 goals.
</td></tr>
<tr><td><b>Hart Memorial Trophy </b> :  NHL Most Valuable Player</td><td>
<b>Aleksander Barkov</b> from <b>Florida Panthers</b>.
</td></tr>
<tr><td><b>Calder Memorial Trophy :</b> Rookie of the Year</td><td>
<b>Ethan Bear</b> from <b>San Jose Sharks</b>.
</td></tr>
<tr><td><b>Frank J. Selke Trophy</b> : Top Defensive Forward in the NHL</td><td>
<b>Jordan Staal</b> from <b>Los Angeles Kings</b>.
</td></tr>
<tr><td><b>James Norris Memorial Trophy</b> : Top Defenseman in the NHL</td><td>
<b>Victor Hedman</b> from <b>Winnipeg Jets</b>.
</td></tr>
<tr><td><b>Vezina Trophy</b> :  Top Goalie in the NHL</td><td>
<b>Ken Appleby</b> from <b>Tampa Bay Lightning</b>.
</td></tr>
<tr><td><b>Lester B. Pearson Award</b> : Most Outstanding Player</td><td>
<b>Jeff Skinner</b> from <b>Los Angeles Kings</b>.
</td></tr>
<tr><td><b>Lady Byng Memorial Trophy</b> : Player who Displays Gentlemanly Conduct</td><td>
<b>Mitch Holmberg</b> from <b>New York Islanders</b>.
</td></tr>
<tr><td><b>Conn Smythe Trophy</b> : Most Valuable Player in the Stanley Cup Playoffs</td><td>
<b>Unknown - Fill Manually</b>
</td></tr>
<tr><td><b>William M. Jennings Trophy</b> : Goalie(s) With the Fewest Goals Scored Against</td><td>
<b>Unknown - Fill Manually</b>
</td></tr>
<tr><td><b>Jack Adams Award</b> : Coach of the Year</td><td>
<b>Unknown - Fill Manually</b>
</td></tr>
<tr><td><b>Bill Masterton Memorial Trophy</b> : Qualities of Perseverance and Sportsmanship</td><td>
<b>Unknown - Fill Manually</b>
</td></tr>
<tr><td><b>King Clancy Memorial Trophy</b> : Leadership and Humanitarian Contribution</td><td>
<b>Unknown - Fill Manually</b>
</td></tr>
</tbody></table>
<?php include "Footer.php";?>
