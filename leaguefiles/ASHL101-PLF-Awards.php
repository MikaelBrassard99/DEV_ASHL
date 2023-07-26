<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Awards</title>
<script src="ASHL101-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
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
<table class="STHSAward_Table"><thead><tr><th>Awards</th><th>Winner</th></tr></thead>
<tbody><tr><td><b>Stanley Cup</b> : Playoff Champion</td><td>
<b>Toronto Maple Leafs</b>
</td></tr>
<tr><td><b>Presidents' Trophy</b> : Best Overall Record</td><td>
<b>Los Angeles Kings</b>
</td></tr>
<tr><td><b>Prince of Wales Trophy</b> : Eastern Conference Champion</td><td>
<b>Toronto Maple Leafs</b>
</td></tr>
<tr><td><b>Clarence S. Campbell Bowl</b>  : Western Conference Champion</td><td>
<b>Winnipeg Jets</b>
</td></tr>
<tr><td><b>Art Ross Trophy</b> : Top Point Scorer in the NHL</td><td>
<b>Anze Kopitar</b> from <b>Los Angeles Kings</b> with 95 points.
</td></tr>
<tr><td><b>Maurice Richard Trophy</b> : Top Goal Scorer in the NHL</td><td>
<b>Jeff Skinner</b> from <b>Los Angeles Kings</b> with 46 goals.
</td></tr>
<tr><td><b>Hart Memorial Trophy </b> :  NHL Most Valuable Player</td><td>
<b>Anze Kopitar</b> from <b>Los Angeles Kings</b>.
</td></tr>
<tr><td><b>Calder Memorial Trophy :</b> Rookie of the Year</td><td>
<b>Jordan Subban</b> from <b>Los Angeles Kings</b>.
</td></tr>
<tr><td><b>Frank J. Selke Trophy</b> : Top Defensive Forward in the NHL</td><td>
<b>Ryan Callahan</b> from <b>Edmonton Oilers</b>.
</td></tr>
<tr><td><b>James Norris Memorial Trophy</b> : Top Defenseman in the NHL</td><td>
<b>Ryan Murray</b> from <b>Philadelphia Flyers</b>.
</td></tr>
<tr><td><b>Vezina Trophy</b> :  Top Goalie in the NHL</td><td>
<b>Keith Kinkaid</b> from <b>Pittsburgh Penguins</b>.
</td></tr>
<tr><td><b>Lester B. Pearson Award</b> : Most Outstanding Player</td><td>
<b>Steven Stamkos</b> from <b>Arizona Coyotes</b>.
</td></tr>
<tr><td><b>Lady Byng Memorial Trophy</b> : Player who Displays Gentlemanly Conduct</td><td>
<b>Brandon Pirri</b> from <b>Dallas Stars</b>.
</td></tr>
<tr><td><b>Conn Smythe Trophy</b> : Most Valuable Player in the Stanley Cup Playoffs</td><td>
<b>Carey Price</b> from <b>Winnipeg Jets</b>.
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
