<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Schedule</title>
<script src="ASHL8.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="ASHL RSS Feed" href="http://www.ashligue.com/site//RSSFeed.xml" />
<link href="ASHL8.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL8-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL8-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1.php">Anaheim Ducks (5) vs Edmonton Oilers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-2.php">Detroit Red Wings (4) vs Minnesota Wild (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-3.php">Dallas Stars (1) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-4.php">Arizona Coyotes (4) vs San Jose Sharks (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-5.php">Colorado Avalanche (1) vs Chicago Blackhawks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-6.php">Philadelphia Flyers (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-7.php">New Jersey Devils (1) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-8.php">Ottawa Senators (1) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-9.php">New York Rangers (2) vs Florida Panthers (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-10.php">New York Islanders (1) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-11.php">Montreal Canadiens (3) vs Boston Bruins (5)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1.php">Binghamton Senators (2) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-2.php">Connecticut Whale (3) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-3.php">Mercer Island Archangels (5) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-4.php">Houston Aeros (3) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-5.php">San Antonio Rampage (4) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-6.php">Peoria Rivermen (2) vs Las Vegas Gamblers (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-12.php">Chicago Blackhawks (4) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-13.php">Minnesota Wild (1) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-14.php">Pittsburgh Penguins (4) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-15.php">Tampa Bay Lightning (3) vs Buffalo Sabres (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-16.php">New Jersey Devils (3) vs Carolina Hurricanes (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-17.php">Boston Bruins (2) vs Toronto Maple Leafs (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-18.php">Seattle Saints (5) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-19.php">San Jose Sharks (2) vs Calgary Flames (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-20.php">Arizona Coyotes (2) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-21.php">Detroit Red Wings (2) vs Anaheim Ducks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-7.php">Manitoba Moose (1) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-8.php">Adirondack Phantoms (0) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-9.php">Gatineau Olympiques (4) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-10.php">Connecticut Whale (2) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-11.php">Bridgeport Sound Tigers (5) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-12.php">Las Vegas Gamblers (1) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-13.php">Binghamton Senators (5) vs Rochester Americans (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-14.php">Oklahoma City Barons (2) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-15.php">Houston Aeros (4) vs Milwaukee Admirals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-16.php">Roberval Dwarfs (3) vs Lake Erie Monsters (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-17.php">Grand Rapids Griffins (3) vs Rockford IceHogs (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-22.php">Dallas Stars (2) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-23.php">Washington Capitals (4) vs New York Rangers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-24.php">Philadelphia Flyers (6) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-25.php">Florida Panthers (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-26.php">Quebec Nordiques (2) vs Montreal Canadiens (4)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-27.php">Vancouver Canucks (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-28.php">St. Louis Blues (1) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-29.php">Calgary Flames (1) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-30.php">Carolina Hurricanes (3) vs Columbus Blue Jackets (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-31.php">Los Angeles Kings (4) vs Winnipeg Jets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-18.php">Trois-Rivières Draveurs (3) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-19.php">Albany Devils (1) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-20.php">Laval Chiefs (5) vs Chicoutimi Saguenéens (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-21.php">Springfield Falcons (3) vs Portland Pirates (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-22.php">Lake Erie Monsters (1) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-23.php">Manitoba Moose (2) vs San Antonio Rampage (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-24.php">Chicago Wolves (3) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-25.php">Rochester Americans (6) vs Adirondack Phantoms (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-26.php">Rockford IceHogs (2) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-27.php">Milwaukee Admirals (7) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-28.php">Rouyn-Noranda Huskies (3) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-29.php">Norfolk Admirals (1) vs Charlotte Checkers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-32.php">New York Islanders (2) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-33.php">Edmonton Oilers (4) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-34.php">Arizona Coyotes (5) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-35.php">Ottawa Senators (4) vs Philadelphia Flyers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-36.php">Toronto Maple Leafs (3) vs Buffalo Sabres (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-37.php">Pittsburgh Penguins (1) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-38.php">Minnesota Wild (0) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-39.php">Quebec Nordiques (1) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-40.php">Washington Capitals (2) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-41.php">San Jose Sharks (4) vs St. Louis Blues (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-30.php">Chicoutimi Saguenéens (3) vs Connecticut Whale (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-31.php">Bridgeport Sound Tigers (1) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-32.php">Joliette Sportif (3) vs Houston Aeros (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-33.php">San Antonio Rampage (4) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-34.php">Roberval Dwarfs (2) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-35.php">Trois-Rivières Draveurs (3) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-36.php">Mercer Island Archangels (2) vs Portland Pirates (1)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-42.php">Toronto Maple Leafs (0) vs Montreal Canadiens (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-43.php">Buffalo Sabres (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-44.php">Nashville Predators (4) vs Chicago Blackhawks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-45.php">Winnipeg Jets (3) vs Anaheim Ducks (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-46.php">Columbus Blue Jackets (4) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-47.php">Seattle Saints (4) vs Los Angeles Kings (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-37.php">Chicago Wolves (2) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-38.php">Springfield Falcons (3) vs Peoria Rivermen (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-39.php">Lake Erie Monsters (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-40.php">Gatineau Olympiques (2) vs Joliette Sportif (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-41.php">Milwaukee Admirals (2) vs Grand Rapids Griffins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-42.php">Laval Chiefs (1) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-43.php">Rochester Americans (2) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-44.php">Landshut Cannibals (3) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-45.php">Albany Devils (1) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-46.php">Charlotte Checkers (1) vs Adirondack Phantoms (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-48.php">Calgary Flames (0) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-49.php">Anaheim Ducks (0) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-50.php">St. Louis Blues (1) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-51.php">New Jersey Devils (4) vs Ottawa Senators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-52.php">Pittsburgh Penguins (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-53.php">Detroit Red Wings (2) vs San Jose Sharks (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-47.php">Providence Bruins (3) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-48.php">Roberval Dwarfs (1) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-49.php">Bridgeport Sound Tigers (3) vs Connecticut Whale (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-50.php">Chicago Wolves (2) vs Houston Aeros (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-54.php">Chicago Blackhawks (0) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-55.php">New York Rangers (1) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-56.php">Montreal Canadiens (5) vs Quebec Nordiques (4)</a>  - SO (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-57.php">Vancouver Canucks (5) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-58.php">Los Angeles Kings (1) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-59.php">Edmonton Oilers (3) vs Calgary Flames (2)</a>  - OT (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-51.php">Trois-Rivières Draveurs (2) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-52.php">Portland Pirates (5) vs Mercer Island Archangels (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-53.php">Lake Erie Monsters (2) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-54.php">Wilkes-Barre/Scranton Penguins (2) vs Albany Devils (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-60.php">Tampa Bay Lightning (4) vs Toronto Maple Leafs (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-61.php">Carolina Hurricanes (6) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-62.php">Columbus Blue Jackets (1) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-63.php">Nashville Predators (4) vs Detroit Red Wings (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-64.php">Colorado Avalanche (3) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-65.php">Florida Panthers (2) vs Boston Bruins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-66.php">Ottawa Senators (4) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-67.php">St. Louis Blues (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-68.php">Dallas Stars (3) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-69.php">San Jose Sharks (1) vs Edmonton Oilers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-55.php">Norfolk Admirals (7) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-56.php">Peoria Rivermen (3) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-57.php">Rockford IceHogs (5) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-58.php">Landshut Cannibals (2) vs Rochester Americans (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-59.php">Wilkes-Barre/Scranton Penguins (4) vs Manitoba Moose (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-60.php">Oklahoma City Barons (0) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-61.php">Mercer Island Archangels (5) vs Trois-Rivières Draveurs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-62.php">Adirondack Phantoms (5) vs Bridgeport Sound Tigers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-70.php">Toronto Maple Leafs (2) vs Quebec Nordiques (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-71.php">Carolina Hurricanes (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-72.php">Florida Panthers (3) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-73.php">Winnipeg Jets (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-74.php">Los Angeles Kings (6) vs Anaheim Ducks (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-75.php">Washington Capitals (2) vs Philadelphia Flyers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-76.php">Columbus Blue Jackets (4) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-77.php">Seattle Saints (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-78.php">Boston Bruins (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-79.php">Colorado Avalanche (1) vs Nashville Predators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-63.php">Charlotte Checkers (2) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-64.php">Houston Aeros (4) vs Lake Erie Monsters (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-65.php">Las Vegas Gamblers (2) vs Joliette Sportif (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-66.php">Binghamton Senators (2) vs Chicoutimi Saguenéens (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-67.php">Connecticut Whale (3) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-68.php">Springfield Falcons (4) vs Grand Rapids Griffins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-69.php">Portland Pirates (0) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-70.php">Landshut Cannibals (4) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-71.php">Milwaukee Admirals (2) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-72.php">Albany Devils (4) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-73.php">Norfolk Admirals (2) vs Manitoba Moose (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-74.php">Rochester Americans (2) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-75.php">Rockford IceHogs (4) vs Gatineau Olympiques (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-80.php">Detroit Red Wings (5) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-81.php">Minnesota Wild (3) vs St. Louis Blues (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-82.php">Washington Capitals (2) vs New Jersey Devils (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-83.php">Arizona Coyotes (5) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-84.php">Buffalo Sabres (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-85.php">New York Islanders (4) vs Ottawa Senators (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-76.php">Providence Bruins (2) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-77.php">Connecticut Whale (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-78.php">Joliette Sportif (1) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-79.php">San Antonio Rampage (3) vs Charlotte Checkers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-86.php">Nashville Predators (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-87.php">Florida Panthers (0) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-88.php">New York Rangers (6) vs Carolina Hurricanes (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-89.php">Edmonton Oilers (3) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-90.php">Philadelphia Flyers (1) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-91.php">Winnipeg Jets (2) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-92.php">Anaheim Ducks (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-93.php">Tampa Bay Lightning (4) vs Montreal Canadiens (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-94.php">Vancouver Canucks (2) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-95.php">Buffalo Sabres (4) vs Quebec Nordiques (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-80.php">Springfield Falcons (1) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-81.php">Mercer Island Archangels (6) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-82.php">Albany Devils (2) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-83.php">Chicoutimi Saguenéens (1) vs Roberval Dwarfs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-96.php">Pittsburgh Penguins (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-97.php">Edmonton Oilers (2) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-98.php">St. Louis Blues (0) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-99.php">Quebec Nordiques (3) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-100.php">Anaheim Ducks (3) vs Calgary Flames (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-101.php">Chicago Blackhawks (1) vs Dallas Stars (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-102.php">Montreal Canadiens (2) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-103.php">New York Islanders (1) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-104.php">New York Rangers (4) vs Ottawa Senators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-105.php">San Jose Sharks (4) vs Minnesota Wild (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-84.php">Adirondack Phantoms (4) vs Landshut Cannibals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-85.php">Joliette Sportif (1) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-86.php">Bridgeport Sound Tigers (2) vs Binghamton Senators (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-87.php">Rochester Americans (3) vs Trois-Rivières Draveurs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-88.php">Grand Rapids Griffins (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-89.php">Manitoba Moose (3) vs Norfolk Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-90.php">Springfield Falcons (2) vs Milwaukee Admirals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-91.php">Laval Chiefs (1) vs Houston Aeros (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-92.php">Charlotte Checkers (1) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-93.php">Oklahoma City Barons (2) vs Mercer Island Archangels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-94.php">Las Vegas Gamblers (2) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-95.php">Portland Pirates (2) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-96.php">Roberval Dwarfs (3) vs Peoria Rivermen (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-106.php">Tampa Bay Lightning (4) vs Florida Panthers (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-107.php">Calgary Flames (2) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-108.php">Boston Bruins (3) vs Toronto Maple Leafs (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-109.php">Colorado Avalanche (1) vs Nashville Predators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-110.php">Los Angeles Kings (3) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-111.php">Columbus Blue Jackets (2) vs Carolina Hurricanes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-112.php">Winnipeg Jets (3) vs Buffalo Sabres (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-97.php">San Antonio Rampage (2) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-98.php">Chicoutimi Saguenéens (0) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-99.php">Adirondack Phantoms (2) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-100.php">Manitoba Moose (2) vs Providence Bruins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-101.php">Peoria Rivermen (2) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-102.php">Lake Erie Monsters (3) vs Chicago Wolves (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-113.php">New York Islanders (2) vs New York Rangers (3)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-114.php">Philadelphia Flyers (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-115.php">Chicago Blackhawks (5) vs Arizona Coyotes (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-103.php">Houston Aeros (1) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-104.php">Las Vegas Gamblers (1) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-105.php">Roberval Dwarfs (3) vs Trois-Rivières Draveurs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-116.php">New Jersey Devils (3) vs Pittsburgh Penguins (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-117.php">Vancouver Canucks (1) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-118.php">Dallas Stars (2) vs St. Louis Blues (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-106.php">Oklahoma City Barons (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-107.php">Rockford IceHogs (2) vs Portland Pirates (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-108.php">Providence Bruins (0) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-109.php">Landshut Cannibals (3) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-110.php">Manitoba Moose (4) vs Charlotte Checkers (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-111.php">Rouyn-Noranda Huskies (3) vs Laval Chiefs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-112.php">Chicago Wolves (1) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-113.php">Rochester Americans (5) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-114.php">Albany Devils (2) vs Connecticut Whale (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-115.php">Grand Rapids Griffins (2) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-116.php">Wilkes-Barre/Scranton Penguins (3) vs Bridgeport Sound Tigers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-117.php">Houston Aeros (2) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-118.php">Trois-Rivières Draveurs (6) vs Adirondack Phantoms (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-119.php">San Jose Sharks (6) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-120.php">Nashville Predators (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-121.php">Minnesota Wild (4) vs Colorado Avalanche (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-122.php">Philadelphia Flyers (0) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-123.php">Pittsburgh Penguins (1) vs Columbus Blue Jackets (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-124.php">Edmonton Oilers (2) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-125.php">Quebec Nordiques (0) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-126.php">Arizona Coyotes (2) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-127.php">New Jersey Devils (2) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-128.php">Buffalo Sabres (3) vs Calgary Flames (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-119.php">Gatineau Olympiques (4) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-120.php">Chicago Wolves (7) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-121.php">Peoria Rivermen (4) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-122.php">Portland Pirates (4) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-123.php">Milwaukee Admirals (3) vs Springfield Falcons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-124.php">Charlotte Checkers (1) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-125.php">Mercer Island Archangels (2) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-126.php">Laval Chiefs (2) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-127.php">Connecticut Whale (2) vs Norfolk Admirals (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-128.php">Binghamton Senators (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-129.php">San Antonio Rampage (4) vs Joliette Sportif (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-130.php">Bridgeport Sound Tigers (1) vs Providence Bruins (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-129.php">Seattle Saints (0) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-130.php">Ottawa Senators (2) vs Toronto Maple Leafs (1)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-131.php">Carolina Hurricanes (2) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-132.php">New York Rangers (4) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-133.php">Buffalo Sabres (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-134.php">Colorado Avalanche (4) vs St. Louis Blues (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-131.php">Gatineau Olympiques (3) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-132.php">Albany Devils (1) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-133.php">Trois-Rivières Draveurs (4) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-134.php">Rockford IceHogs (1) vs Grand Rapids Griffins (0)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-135.php">Peoria Rivermen (5) vs Lake Erie Monsters (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-135.php">Vancouver Canucks (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-136.php">New York Islanders (4) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-137.php">Anaheim Ducks (6) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-138.php">Chicago Blackhawks (5) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-139.php">Dallas Stars (3) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-140.php">Quebec Nordiques (3) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-141.php">Minnesota Wild (3) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-142.php">Washington Capitals (2) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-143.php">Boston Bruins (0) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-144.php">San Jose Sharks (3) vs Seattle Saints (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-145.php">New Jersey Devils (3) vs Philadelphia Flyers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-136.php">Portland Pirates (4) vs Albany Devils (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-137.php">Wilkes-Barre/Scranton Penguins (0) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-138.php">Landshut Cannibals (3) vs Charlotte Checkers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-139.php">Lake Erie Monsters (1) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-140.php">Springfield Falcons (4) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-141.php">Bridgeport Sound Tigers (3) vs Binghamton Senators (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-146.php">Pittsburgh Penguins (0) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-147.php">St. Louis Blues (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-148.php">Montreal Canadiens (2) vs Colorado Avalanche (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-149.php">Quebec Nordiques (4) vs Buffalo Sabres (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-142.php">Las Vegas Gamblers (5) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-143.php">Rouyn-Noranda Huskies (2) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-144.php">San Antonio Rampage (3) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-145.php">Norfolk Admirals (2) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-146.php">Oklahoma City Barons (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-147.php">Mercer Island Archangels (1) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-148.php">Providence Bruins (4) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-149.php">Chicoutimi Saguenéens (0) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-150.php">Adirondack Phantoms (5) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-151.php">Bridgeport Sound Tigers (5) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-152.php">Joliette Sportif (3) vs Rockford IceHogs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-150.php">Edmonton Oilers (4) vs Chicago Blackhawks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-151.php">San Jose Sharks (3) vs Anaheim Ducks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-152.php">Detroit Red Wings (3) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-153.php">Los Angeles Kings (7) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-154.php">Winnipeg Jets (1) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-155.php">Columbus Blue Jackets (4) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-156.php">Toronto Maple Leafs (3) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-157.php">Philadelphia Flyers (3) vs New York Islanders (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-158.php">Florida Panthers (2) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-159.php">Washington Capitals (3) vs Tampa Bay Lightning (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-160.php">Seattle Saints (1) vs Nashville Predators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-153.php">Manitoba Moose (1) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-154.php">Milwaukee Admirals (5) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-155.php">Peoria Rivermen (3) vs Las Vegas Gamblers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-156.php">Grand Rapids Griffins (3) vs Springfield Falcons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-157.php">Charlotte Checkers (2) vs Albany Devils (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-158.php">Joliette Sportif (4) vs Mercer Island Archangels (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-159.php">Norfolk Admirals (2) vs San Antonio Rampage (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-160.php">Rockford IceHogs (2) vs Rouyn-Noranda Huskies (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-161.php">Rochester Americans (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-162.php">Providence Bruins (2) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-163.php">Laval Chiefs (4) vs Gatineau Olympiques (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-161.php">Vancouver Canucks (5) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-162.php">Columbus Blue Jackets (1) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-163.php">Ottawa Senators (3) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-164.php">New York Rangers (2) vs Carolina Hurricanes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-165.php">Florida Panthers (3) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-166.php">Colorado Avalanche (5) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-167.php">Nashville Predators (0) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-168.php">Los Angeles Kings (2) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-169.php">Chicago Blackhawks (3) vs Winnipeg Jets (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-170.php">Dallas Stars (1) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-171.php">Tampa Bay Lightning (4) vs Buffalo Sabres (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-164.php">Connecticut Whale (4) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-165.php">Trois-Rivières Draveurs (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-166.php">Roberval Dwarfs (3) vs Grand Rapids Griffins (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-172.php">Anaheim Ducks (2) vs San Jose Sharks (1)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-173.php">Seattle Saints (1) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-174.php">Carolina Hurricanes (4) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-175.php">New Jersey Devils (4) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-176.php">Philadelphia Flyers (5) vs New York Rangers (4)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-177.php">Washington Capitals (2) vs Pittsburgh Penguins (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-167.php">Albany Devils (3) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-168.php">Houston Aeros (4) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-169.php">Lake Erie Monsters (6) vs Oklahoma City Barons (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-178.php">St. Louis Blues (3) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-179.php">Winnipeg Jets (3) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-180.php">Arizona Coyotes (4) vs Los Angeles Kings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-181.php">Minnesota Wild (1) vs Colorado Avalanche (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-182.php">Montreal Canadiens (5) vs Quebec Nordiques (4)</a>  - OT (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-183.php">Calgary Flames (2) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-184.php">Vancouver Canucks (1) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-185.php">Detroit Red Wings (2) vs Chicago Blackhawks (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-186.php">Buffalo Sabres (2) vs Columbus Blue Jackets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-187.php">Toronto Maple Leafs (2) vs Boston Bruins (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-188.php">Nashville Predators (1) vs Tampa Bay Lightning (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-170.php">Landshut Cannibals (4) vs Providence Bruins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-171.php">Trois-Rivières Draveurs (3) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-172.php">Milwaukee Admirals (1) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-173.php">Portland Pirates (3) vs Laval Chiefs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-189.php">San Jose Sharks (4) vs Seattle Saints (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-190.php">Pittsburgh Penguins (1) vs Philadelphia Flyers (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-191.php">New York Islanders (3) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-192.php">Boston Bruins (2) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-193.php">Arizona Coyotes (5) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-194.php">New York Rangers (2) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-195.php">St. Louis Blues (3) vs Ottawa Senators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-174.php">Rockford IceHogs (6) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-175.php">Adirondack Phantoms (2) vs Charlotte Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-176.php">Gatineau Olympiques (4) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-177.php">Binghamton Senators (2) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-178.php">Albany Devils (1) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-179.php">Manitoba Moose (2) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-180.php">Rouyn-Noranda Huskies (4) vs Peoria Rivermen (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-181.php">Mercer Island Archangels (0) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-182.php">Landshut Cannibals (2) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-183.php">Oklahoma City Barons (0) vs Lake Erie Monsters (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-184.php">Las Vegas Gamblers (2) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-185.php">Bridgeport Sound Tigers (6) vs Portland Pirates (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-196.php">Anaheim Ducks (3) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-197.php">Colorado Avalanche (3) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-198.php">Buffalo Sabres (3) vs Toronto Maple Leafs (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-199.php">Philadelphia Flyers (5) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-200.php">Detroit Red Wings (1) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-201.php">Washington Capitals (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-202.php">Dallas Stars (1) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-203.php">Chicago Blackhawks (2) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-204.php">Florida Panthers (5) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-205.php">St. Louis Blues (4) vs Nashville Predators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-206.php">Tampa Bay Lightning (1) vs Quebec Nordiques (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-186.php">Chicoutimi Saguenéens (4) vs Trois-Rivières Draveurs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-187.php">Peoria Rivermen (1) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-188.php">Wilkes-Barre/Scranton Penguins (3) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-189.php">Rouyn-Noranda Huskies (3) vs Mercer Island Archangels (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-190.php">Adirondack Phantoms (2) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-191.php">Gatineau Olympiques (5) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-192.php">Rochester Americans (4) vs Providence Bruins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-207.php">Calgary Flames (3) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-208.php">Pittsburgh Penguins (0) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-209.php">Boston Bruins (4) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-210.php">Ottawa Senators (2) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-211.php">Vancouver Canucks (4) vs Arizona Coyotes (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-212.php">Montreal Canadiens (0) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-213.php">Florida Panthers (5) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-214.php">Anaheim Ducks (5) vs Colorado Avalanche (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-215.php">Dallas Stars (2) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-216.php">Columbus Blue Jackets (5) vs Toronto Maple Leafs (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-193.php">Charlotte Checkers (2) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-194.php">Connecticut Whale (2) vs Albany Devils (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-195.php">Roberval Dwarfs (1) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-196.php">Laval Chiefs (1) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-197.php">San Antonio Rampage (2) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-198.php">Lake Erie Monsters (3) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-199.php">Springfield Falcons (4) vs Chicoutimi Saguenéens (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-200.php">Oklahoma City Barons (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-201.php">Houston Aeros (2) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-202.php">Portland Pirates (4) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-203.php">Providence Bruins (1) vs Trois-Rivières Draveurs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-217.php">Minnesota Wild (2) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-218.php">Nashville Predators (3) vs San Jose Sharks (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-204.php">Grand Rapids Griffins (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-205.php">Gatineau Olympiques (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-206.php">Albany Devils (3) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-207.php">Springfield Falcons (4) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-208.php">Lake Erie Monsters (2) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-209.php">Wilkes-Barre/Scranton Penguins (3) vs Adirondack Phantoms (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-210.php">Norfolk Admirals (1) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-211.php">Providence Bruins (1) vs Roberval Dwarfs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-212.php">San Antonio Rampage (3) vs Houston Aeros (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-213.php">Binghamton Senators (3) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-214.php">Bridgeport Sound Tigers (4) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-215.php">Joliette Sportif (4) vs Mercer Island Archangels (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-219.php">Columbus Blue Jackets (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-220.php">Carolina Hurricanes (2) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-221.php">Quebec Nordiques (4) vs Washington Capitals (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-222.php">New York Islanders (5) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-223.php">Los Angeles Kings (2) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-224.php">Nashville Predators (5) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-225.php">Seattle Saints (3) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-226.php">Edmonton Oilers (6) vs Calgary Flames (4)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-227.php">New Jersey Devils (4) vs Tampa Bay Lightning (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-228.php">Montreal Canadiens (3) vs Ottawa Senators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-229.php">New York Rangers (4) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-230.php">Detroit Red Wings (2) vs Winnipeg Jets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-216.php">Las Vegas Gamblers (3) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-217.php">Adirondack Phantoms (2) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-218.php">Binghamton Senators (0) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-219.php">Milwaukee Admirals (2) vs Gatineau Olympiques (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-220.php">Chicoutimi Saguenéens (5) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-221.php">Chicago Wolves (3) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-222.php">Houston Aeros (4) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-223.php">Trois-Rivières Draveurs (2) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-224.php">Manitoba Moose (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-225.php">Oklahoma City Barons (4) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-226.php">Charlotte Checkers (3) vs Norfolk Admirals (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-231.php">Pittsburgh Penguins (5) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-232.php">Seattle Saints (3) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-233.php">Chicago Blackhawks (4) vs Colorado Avalanche (0)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-234.php">Boston Bruins (3) vs Buffalo Sabres (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-235.php">Washington Capitals (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-236.php">San Jose Sharks (2) vs Edmonton Oilers (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-227.php">Roberval Dwarfs (4) vs Albany Devils (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-228.php">Peoria Rivermen (3) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-229.php">Las Vegas Gamblers (2) vs Laval Chiefs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-230.php">Providence Bruins (6) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-231.php">Connecticut Whale (2) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-232.php">Mercer Island Archangels (5) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-233.php">Rochester Americans (2) vs Rockford IceHogs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-234.php">Milwaukee Admirals (1) vs Landshut Cannibals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-237.php">Philadelphia Flyers (3) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-238.php">Tampa Bay Lightning (2) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-239.php">Calgary Flames (5) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-240.php">Toronto Maple Leafs (4) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-241.php">New York Rangers (2) vs New Jersey Devils (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-242.php">Winnipeg Jets (1) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-243.php">Ottawa Senators (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-244.php">Chicago Blackhawks (1) vs Nashville Predators (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-245.php">Detroit Red Wings (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-246.php">Arizona Coyotes (4) vs Vancouver Canucks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-247.php">Colorado Avalanche (0) vs Columbus Blue Jackets (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-235.php">Manitoba Moose (1) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-236.php">Rouyn-Noranda Huskies (4) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-237.php">Landshut Cannibals (4) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-238.php">Oklahoma City Barons (2) vs Portland Pirates (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-239.php">Rockford IceHogs (3) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-240.php">Adirondack Phantoms (3) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-241.php">Norfolk Admirals (3) vs San Antonio Rampage (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-242.php">Laval Chiefs (2) vs Mercer Island Archangels (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-243.php">Lake Erie Monsters (2) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-244.php">Albany Devils (5) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-245.php">Bridgeport Sound Tigers (3) vs Roberval Dwarfs (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-248.php">Carolina Hurricanes (3) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-249.php">Minnesota Wild (3) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-250.php">Buffalo Sabres (2) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-246.php">Las Vegas Gamblers (4) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-247.php">Roberval Dwarfs (1) vs Rochester Americans (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-248.php">Grand Rapids Griffins (2) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-249.php">Peoria Rivermen (4) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-250.php">Wilkes-Barre/Scranton Penguins (3) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-251.php">Joliette Sportif (1) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-252.php">Connecticut Whale (5) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-253.php">Chicago Wolves (4) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-254.php">Chicoutimi Saguenéens (5) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-255.php">Rockford IceHogs (4) vs Rouyn-Noranda Huskies (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-256.php">Norfolk Admirals (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-257.php">Springfield Falcons (6) vs Gatineau Olympiques (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-251.php">New York Rangers (1) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-252.php">New York Islanders (5) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-253.php">Edmonton Oilers (6) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-254.php">Colorado Avalanche (2) vs Detroit Red Wings (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-255.php">St. Louis Blues (2) vs Chicago Blackhawks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-256.php">Los Angeles Kings (3) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-257.php">Tampa Bay Lightning (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-258.php">Montreal Canadiens (2) vs Boston Bruins (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-259.php">Quebec Nordiques (2) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-260.php">Nashville Predators (2) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-261.php">Florida Panthers (3) vs New Jersey Devils (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-258.php">Grand Rapids Griffins (5) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-259.php">Portland Pirates (5) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-260.php">Charlotte Checkers (4) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-261.php">Chicago Wolves (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-262.php">Mercer Island Archangels (2) vs Joliette Sportif (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-263.php">San Antonio Rampage (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-264.php">Providence Bruins (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-262.php">New Jersey Devils (0) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-263.php">Dallas Stars (1) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-264.php">Buffalo Sabres (0) vs Vancouver Canucks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-265.php">Rochester Americans (2) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-266.php">Oklahoma City Barons (4) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-267.php">San Antonio Rampage (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-268.php">Connecticut Whale (2) vs Charlotte Checkers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-269.php">Roberval Dwarfs (4) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-270.php">Manitoba Moose (3) vs Portland Pirates (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-271.php">Springfield Falcons (5) vs Peoria Rivermen (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-272.php">Rockford IceHogs (1) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-273.php">Gatineau Olympiques (5) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-274.php">Rouyn-Noranda Huskies (3) vs Mercer Island Archangels (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-275.php">Trois-Rivières Draveurs (3) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-276.php">Binghamton Senators (1) vs Laval Chiefs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-265.php">New York Islanders (6) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-266.php">San Jose Sharks (2) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-267.php">St. Louis Blues (3) vs Edmonton Oilers (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-277.php">Chicoutimi Saguenéens (2) vs Grand Rapids Griffins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-278.php">Houston Aeros (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-279.php">Landshut Cannibals (3) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-280.php">Joliette Sportif (3) vs Rochester Americans (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-281.php">Wilkes-Barre/Scranton Penguins (2) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-282.php">Milwaukee Admirals (3) vs Albany Devils (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-268.php">Dallas Stars (2) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-269.php">Winnipeg Jets (1) vs Anaheim Ducks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-270.php">Buffalo Sabres (3) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-271.php">Nashville Predators (1) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-272.php">Chicago Blackhawks (2) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-273.php">Boston Bruins (3) vs Columbus Blue Jackets (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-274.php">Washington Capitals (1) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-275.php">Toronto Maple Leafs (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-276.php">Colorado Avalanche (4) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-277.php">Vancouver Canucks (2) vs Detroit Red Wings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-278.php">Calgary Flames (4) vs Pittsburgh Penguins (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-283.php">Peoria Rivermen (4) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-284.php">Connecticut Whale (2) vs Roberval Dwarfs (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-285.php">Mercer Island Archangels (1) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-286.php">Rouyn-Noranda Huskies (2) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-287.php">Trois-Rivières Draveurs (4) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-288.php">Adirondack Phantoms (2) vs Oklahoma City Barons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-289.php">Portland Pirates (1) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-290.php">Lake Erie Monsters (2) vs Charlotte Checkers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-291.php">Bridgeport Sound Tigers (0) vs Norfolk Admirals (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-292.php">Laval Chiefs (4) vs Gatineau Olympiques (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-279.php">Carolina Hurricanes (1) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-280.php">Los Angeles Kings (4) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-281.php">Edmonton Oilers (6) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-282.php">Tampa Bay Lightning (5) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-283.php">Ottawa Senators (2) vs Nashville Predators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-284.php">New Jersey Devils (2) vs Washington Capitals (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-285.php">Florida Panthers (7) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-286.php">Calgary Flames (3) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-287.php">Anaheim Ducks (3) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-288.php">Quebec Nordiques (2) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-289.php">Winnipeg Jets (6) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-290.php">Columbus Blue Jackets (4) vs Montreal Canadiens (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-293.php">Wilkes-Barre/Scranton Penguins (4) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-294.php">Las Vegas Gamblers (1) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-295.php">Milwaukee Admirals (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-296.php">Landshut Cannibals (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-297.php">Houston Aeros (4) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-298.php">Albany Devils (4) vs Providence Bruins (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-291.php">Boston Bruins (2) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-292.php">Seattle Saints (2) vs Arizona Coyotes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-293.php">Philadelphia Flyers (6) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-294.php">Pittsburgh Penguins (7) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-295.php">Vancouver Canucks (2) vs Detroit Red Wings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-296.php">New York Rangers (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-297.php">San Jose Sharks (2) vs Los Angeles Kings (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-299.php">Laval Chiefs (5) vs Connecticut Whale (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-300.php">Portland Pirates (1) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-301.php">Binghamton Senators (1) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-302.php">Bridgeport Sound Tigers (4) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-303.php">Lake Erie Monsters (4) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-304.php">Roberval Dwarfs (5) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-305.php">Gatineau Olympiques (4) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-306.php">Charlotte Checkers (3) vs Peoria Rivermen (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-307.php">Rockford IceHogs (3) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-308.php">Norfolk Admirals (4) vs Adirondack Phantoms (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-298.php">Detroit Red Wings (5) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-299.php">Edmonton Oilers (4) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-300.php">Toronto Maple Leafs (0) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-301.php">Minnesota Wild (4) vs Quebec Nordiques (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-302.php">Pittsburgh Penguins (3) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-303.php">Anaheim Ducks (3) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-304.php">Vancouver Canucks (3) vs New Jersey Devils (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-305.php">Chicago Blackhawks (1) vs Colorado Avalanche (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-306.php">Buffalo Sabres (5) vs New York Islanders (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-307.php">Montreal Canadiens (3) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-308.php">Arizona Coyotes (5) vs Nashville Predators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-309.php">Albany Devils (1) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-310.php">Houston Aeros (2) vs Milwaukee Admirals (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-311.php">Grand Rapids Griffins (3) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-312.php">Chicago Wolves (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-313.php">Chicoutimi Saguenéens (3) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-314.php">Providence Bruins (4) vs Rochester Americans (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-309.php">San Jose Sharks (2) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-310.php">Ottawa Senators (2) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-311.php">New York Rangers (6) vs Washington Capitals (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-312.php">Los Angeles Kings (5) vs Florida Panthers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-313.php">Tampa Bay Lightning (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-314.php">Carolina Hurricanes (2) vs Anaheim Ducks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-315.php">Colorado Avalanche (2) vs Vancouver Canucks (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-316.php">New Jersey Devils (4) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-317.php">St. Louis Blues (2) vs Chicago Blackhawks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-318.php">Arizona Coyotes (3) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-319.php">Seattle Saints (4) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-320.php">New York Islanders (0) vs Toronto Maple Leafs (7)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-315.php">San Antonio Rampage (3) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-316.php">Peoria Rivermen (2) vs Connecticut Whale (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-317.php">Mercer Island Archangels (3) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-318.php">Norfolk Admirals (5) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-319.php">Rouyn-Noranda Huskies (2) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-320.php">Adirondack Phantoms (4) vs Bridgeport Sound Tigers (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-321.php">Springfield Falcons (2) vs Charlotte Checkers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-321.php">Winnipeg Jets (3) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-322.php">Boston Bruins (5) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-323.php">Nashville Predators (3) vs Minnesota Wild (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-324.php">Quebec Nordiques (1) vs Montreal Canadiens (3)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-325.php">Carolina Hurricanes (3) vs Columbus Blue Jackets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-326.php">Washington Capitals (2) vs Ottawa Senators (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-327.php">Dallas Stars (0) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-328.php">Florida Panthers (2) vs Tampa Bay Lightning (3)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-329.php">Los Angeles Kings (5) vs Philadelphia Flyers (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-322.php">Laval Chiefs (3) vs Houston Aeros (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-323.php">Trois-Rivières Draveurs (2) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-324.php">Gatineau Olympiques (1) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-325.php">Manitoba Moose (2) vs Binghamton Senators (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-326.php">Oklahoma City Barons (4) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-327.php">Providence Bruins (2) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-330.php">St. Louis Blues (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-331.php">Columbus Blue Jackets (2) vs Quebec Nordiques (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-332.php">Winnipeg Jets (2) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-333.php">Nashville Predators (3) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-334.php">Minnesota Wild (3) vs Seattle Saints (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-328.php">Rochester Americans (6) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-329.php">Las Vegas Gamblers (5) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-330.php">Joliette Sportif (1) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-331.php">Manitoba Moose (1) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-332.php">Peoria Rivermen (3) vs Norfolk Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-333.php">Charlotte Checkers (3) vs Laval Chiefs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-334.php">Springfield Falcons (4) vs Gatineau Olympiques (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-335.php">Connecticut Whale (4) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-336.php">Bridgeport Sound Tigers (3) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-337.php">Trois-Rivières Draveurs (3) vs Rockford IceHogs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-338.php">San Antonio Rampage (3) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-339.php">Mercer Island Archangels (2) vs Adirondack Phantoms (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-335.php">Montreal Canadiens (2) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-336.php">New Jersey Devils (1) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-337.php">Detroit Red Wings (6) vs Chicago Blackhawks (5)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-338.php">Calgary Flames (2) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-339.php">Buffalo Sabres (4) vs Pittsburgh Penguins (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-340.php">Toronto Maple Leafs (2) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-341.php">Tampa Bay Lightning (4) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-342.php">New York Rangers (3) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-343.php">San Jose Sharks (3) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-344.php">Ottawa Senators (3) vs Florida Panthers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-340.php">Binghamton Senators (7) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-341.php">Wilkes-Barre/Scranton Penguins (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-342.php">Rochester Americans (4) vs Providence Bruins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-343.php">Grand Rapids Griffins (2) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-344.php">Chicago Wolves (0) vs Albany Devils (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-345.php">New Jersey Devils (2) vs Winnipeg Jets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-346.php">Boston Bruins (3) vs Dallas Stars (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-347.php">Calgary Flames (3) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-348.php">Detroit Red Wings (0) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-349.php">New York Islanders (2) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-350.php">Minnesota Wild (3) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-351.php">Anaheim Ducks (3) vs San Jose Sharks (0)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-352.php">Chicago Blackhawks (2) vs Toronto Maple Leafs (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-353.php">Arizona Coyotes (4) vs Columbus Blue Jackets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-354.php">Montreal Canadiens (5) vs Edmonton Oilers (6)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-345.php">Milwaukee Admirals (3) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-346.php">Joliette Sportif (4) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-347.php">Landshut Cannibals (3) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-348.php">Chicoutimi Saguenéens (6) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-349.php">Norfolk Admirals (3) vs Trois-Rivières Draveurs (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-350.php">Roberval Dwarfs (2) vs San Antonio Rampage (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-351.php">Rockford IceHogs (1) vs Peoria Rivermen (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-352.php">Rouyn-Noranda Huskies (4) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-353.php">Lake Erie Monsters (3) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-354.php">Adirondack Phantoms (2) vs Gatineau Olympiques (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-355.php">Laval Chiefs (4) vs Charlotte Checkers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-356.php">Oklahoma City Barons (4) vs Portland Pirates (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-355.php">Los Angeles Kings (2) vs New Jersey Devils (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-356.php">Philadelphia Flyers (3) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-357.php">Florida Panthers (3) vs Ottawa Senators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-358.php">Seattle Saints (1) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-359.php">Colorado Avalanche (2) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-360.php">Vancouver Canucks (0) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-361.php">Washington Capitals (3) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-362.php">Montreal Canadiens (4) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-363.php">Columbus Blue Jackets (4) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-364.php">Chicago Blackhawks (4) vs Winnipeg Jets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-357.php">Houston Aeros (2) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-358.php">Wilkes-Barre/Scranton Penguins (0) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-359.php">Providence Bruins (3) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-360.php">Rochester Americans (0) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-361.php">Albany Devils (4) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-362.php">Las Vegas Gamblers (4) vs Milwaukee Admirals (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-365.php">Detroit Red Wings (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-366.php">Nashville Predators (2) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-367.php">St. Louis Blues (3) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-368.php">New York Islanders (3) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-369.php">Buffalo Sabres (3) vs Seattle Saints (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-370.php">Toronto Maple Leafs (2) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-371.php">Pittsburgh Penguins (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-372.php">Edmonton Oilers (2) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-373.php">San Jose Sharks (5) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-374.php">Tampa Bay Lightning (0) vs Los Angeles Kings (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-375.php">Carolina Hurricanes (5) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-376.php">Ottawa Senators (1) vs Quebec Nordiques (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-363.php">Charlotte Checkers (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-364.php">Connecticut Whale (3) vs Norfolk Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-365.php">San Antonio Rampage (3) vs Laval Chiefs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-366.php">Adirondack Phantoms (4) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-367.php">Peoria Rivermen (4) vs Springfield Falcons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-368.php">Lake Erie Monsters (3) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-369.php">Manitoba Moose (3) vs Trois-Rivières Draveurs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 46</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-377.php">Calgary Flames (4) vs Montreal Canadiens (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-378.php">St. Louis Blues (2) vs Detroit Red Wings (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-379.php">Nashville Predators (4) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-380.php">Winnipeg Jets (3) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-381.php">Buffalo Sabres (3) vs Chicago Blackhawks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-370.php">Bridgeport Sound Tigers (3) vs Wilkes-Barre/Scranton Penguins (8)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-371.php">Gatineau Olympiques (2) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-372.php">Binghamton Senators (1) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-373.php">Grand Rapids Griffins (3) vs Providence Bruins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-374.php">Portland Pirates (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-375.php">Landshut Cannibals (3) vs Las Vegas Gamblers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 47</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-382.php">Arizona Coyotes (5) vs San Jose Sharks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-383.php">Edmonton Oilers (4) vs Toronto Maple Leafs (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-384.php">Dallas Stars (4) vs Anaheim Ducks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-376.php">Albany Devils (2) vs Rochester Americans (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-377.php">Chicago Wolves (4) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-378.php">Joliette Sportif (4) vs Lake Erie Monsters (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-379.php">Chicoutimi Saguenéens (0) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-380.php">Rouyn-Noranda Huskies (3) vs San Antonio Rampage (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-381.php">Milwaukee Admirals (2) vs Manitoba Moose (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 48</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-385.php">Seattle Saints (4) vs St. Louis Blues (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-386.php">Carolina Hurricanes (2) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-387.php">New York Rangers (3) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-388.php">Philadelphia Flyers (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-389.php">Ottawa Senators (2) vs Boston Bruins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-390.php">Tampa Bay Lightning (2) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-391.php">Colorado Avalanche (1) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-392.php">Florida Panthers (1) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-393.php">Quebec Nordiques (1) vs Los Angeles Kings (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-394.php">Arizona Coyotes (5) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-395.php">Detroit Red Wings (0) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-396.php">Toronto Maple Leafs (2) vs Edmonton Oilers (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-382.php">Mercer Island Archangels (1) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-383.php">Rockford IceHogs (2) vs Bridgeport Sound Tigers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-384.php">Gatineau Olympiques (5) vs Albany Devils (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-385.php">Trois-Rivières Draveurs (3) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-386.php">Charlotte Checkers (4) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-387.php">Oklahoma City Barons (3) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-388.php">Springfield Falcons (3) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-389.php">Las Vegas Gamblers (3) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-390.php">Roberval Dwarfs (3) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-391.php">Houston Aeros (4) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-392.php">Providence Bruins (2) vs Joliette Sportif (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 49</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-397.php">New Jersey Devils (1) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-398.php">Anaheim Ducks (1) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-399.php">New York Islanders (3) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-400.php">Chicago Blackhawks (2) vs Carolina Hurricanes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-393.php">Landshut Cannibals (2) vs Chicoutimi Saguenéens (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-394.php">Milwaukee Admirals (3) vs Rouyn-Noranda Huskies (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-395.php">Adirondack Phantoms (3) vs Rochester Americans (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 50</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-401.php">Florida Panthers (5) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-402.php">Colorado Avalanche (4) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-403.php">Boston Bruins (5) vs Ottawa Senators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-396.php">Peoria Rivermen (4) vs Gatineau Olympiques (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-397.php">Binghamton Senators (3) vs Charlotte Checkers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-398.php">Manitoba Moose (4) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-399.php">Trois-Rivières Draveurs (4) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-400.php">Roberval Dwarfs (6) vs Mercer Island Archangels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-401.php">Bridgeport Sound Tigers (4) vs Connecticut Whale (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-402.php">San Antonio Rampage (5) vs Lake Erie Monsters (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-403.php">Portland Pirates (1) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-404.php">Laval Chiefs (0) vs Milwaukee Admirals (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-405.php">Chicoutimi Saguenéens (6) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-406.php">Norfolk Admirals (4) vs Providence Bruins (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 51</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-404.php">Arizona Coyotes (5) vs Tampa Bay Lightning (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-405.php">Columbus Blue Jackets (3) vs Detroit Red Wings (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-406.php">Minnesota Wild (5) vs St. Louis Blues (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-407.php">New Jersey Devils (5) vs New York Rangers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-408.php">Quebec Nordiques (3) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-409.php">Pittsburgh Penguins (7) vs Chicago Blackhawks (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-407.php">Joliette Sportif (2) vs Houston Aeros (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-408.php">Chicago Wolves (5) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-409.php">Rochester Americans (5) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-410.php">Wilkes-Barre/Scranton Penguins (2) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-411.php">Grand Rapids Griffins (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-412.php">Bridgeport Sound Tigers (2) vs San Antonio Rampage (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-413.php">Trois-Rivières Draveurs (5) vs Peoria Rivermen (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-414.php">Oklahoma City Barons (4) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-415.php">Rockford IceHogs (6) vs Rouyn-Noranda Huskies (7)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-416.php">Portland Pirates (3) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-417.php">Norfolk Admirals (0) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-418.php">Connecticut Whale (4) vs Binghamton Senators (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 52</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-410.php">Winnipeg Jets (2) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-411.php">Carolina Hurricanes (4) vs Colorado Avalanche (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-412.php">Boston Bruins (5) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-413.php">Edmonton Oilers (5) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-414.php">Philadelphia Flyers (2) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-415.php">Dallas Stars (3) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-416.php">Washington Capitals (3) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-417.php">Ottawa Senators (2) vs Toronto Maple Leafs (3)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-418.php">Los Angeles Kings (1) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-419.php">Seattle Saints (3) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-420.php">Anaheim Ducks (4) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-421.php">Detroit Red Wings (3) vs Quebec Nordiques (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-419.php">Mercer Island Archangels (5) vs Grand Rapids Griffins (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-420.php">Wilkes-Barre/Scranton Penguins (7) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-421.php">Lake Erie Monsters (5) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-422.php">Springfield Falcons (1) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-423.php">Albany Devils (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-424.php">Las Vegas Gamblers (2) vs Houston Aeros (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-425.php">Milwaukee Admirals (1) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-426.php">Landshut Cannibals (4) vs Rochester Americans (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 53</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-422.php">Tampa Bay Lightning (0) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-423.php">San Jose Sharks (2) vs Minnesota Wild (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-424.php">New York Rangers (4) vs Pittsburgh Penguins (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-425.php">Chicago Blackhawks (4) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-426.php">St. Louis Blues (3) vs Washington Capitals (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-427.php">Nashville Predators (1) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-428.php">Anaheim Ducks (6) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-429.php">Toronto Maple Leafs (2) vs Ottawa Senators (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-430.php">Calgary Flames (2) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-431.php">New York Islanders (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-432.php">Carolina Hurricanes (2) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-433.php">Colorado Avalanche (3) vs Seattle Saints (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-427.php">Mercer Island Archangels (1) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-428.php">Manitoba Moose (2) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-429.php">Binghamton Senators (3) vs Norfolk Admirals (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-430.php">Peoria Rivermen (4) vs Portland Pirates (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 54</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-434.php">Montreal Canadiens (7) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-435.php">San Jose Sharks (3) vs Florida Panthers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-436.php">Detroit Red Wings (2) vs Tampa Bay Lightning (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-431.php">Laval Chiefs (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-432.php">Gatineau Olympiques (7) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-433.php">Springfield Falcons (2) vs Rockford IceHogs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-434.php">Lake Erie Monsters (6) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-435.php">Adirondack Phantoms (3) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-436.php">Charlotte Checkers (1) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-437.php">Rouyn-Noranda Huskies (3) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-438.php">Chicago Wolves (1) vs Landshut Cannibals (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-439.php">Houston Aeros (3) vs Las Vegas Gamblers (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-440.php">Grand Rapids Griffins (5) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-441.php">Providence Bruins (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 55</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-437.php">Chicago Blackhawks (3) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-438.php">St. Louis Blues (2) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-439.php">New Jersey Devils (3) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-440.php">Quebec Nordiques (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-441.php">Vancouver Canucks (0) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-442.php">Columbus Blue Jackets (3) vs New York Islanders (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-443.php">Minnesota Wild (3) vs Colorado Avalanche (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-444.php">Pittsburgh Penguins (3) vs Toronto Maple Leafs (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-445.php">Edmonton Oilers (3) vs Calgary Flames (1)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-446.php">Seattle Saints (3) vs Dallas Stars (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-447.php">Boston Bruins (4) vs Washington Capitals (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-442.php">Bridgeport Sound Tigers (4) vs Trois-Rivières Draveurs (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-443.php">Rochester Americans (2) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-444.php">Connecticut Whale (1) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-445.php">Oklahoma City Barons (2) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-446.php">Manitoba Moose (1) vs Adirondack Phantoms (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 56</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-448.php">Los Angeles Kings (3) vs St. Louis Blues (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-449.php">Montreal Canadiens (5) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-450.php">Philadelphia Flyers (1) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-451.php">Ottawa Senators (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-452.php">Buffalo Sabres (2) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-453.php">Florida Panthers (5) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-454.php">Tampa Bay Lightning (6) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-455.php">Vancouver Canucks (4) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-456.php">Pittsburgh Penguins (4) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-457.php">New York Rangers (4) vs Arizona Coyotes (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-447.php">Albany Devils (2) vs Mercer Island Archangels (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-448.php">Joliette Sportif (2) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-449.php">Chicoutimi Saguenéens (1) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-450.php">Gatineau Olympiques (2) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-451.php">Chicago Wolves (3) vs Grand Rapids Griffins (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 57</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-458.php">Buffalo Sabres (4) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-459.php">Philadelphia Flyers (2) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-460.php">Calgary Flames (1) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-461.php">Carolina Hurricanes (3) vs Ottawa Senators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-462.php">Edmonton Oilers (3) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-463.php">Nashville Predators (3) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-464.php">Washington Capitals (2) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-465.php">Colorado Avalanche (2) vs New York Islanders (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-466.php">Dallas Stars (3) vs Toronto Maple Leafs (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-452.php">Adirondack Phantoms (2) vs Laval Chiefs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-453.php">Landshut Cannibals (3) vs Portland Pirates (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-454.php">Connecticut Whale (5) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-455.php">Peoria Rivermen (3) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-456.php">Norfolk Admirals (2) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-457.php">Las Vegas Gamblers (2) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-458.php">Springfield Falcons (1) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-459.php">Rockford IceHogs (5) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-460.php">Oklahoma City Barons (2) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-461.php">San Antonio Rampage (1) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-462.php">Trois-Rivières Draveurs (5) vs Roberval Dwarfs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 58</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-467.php">Arizona Coyotes (4) vs Vancouver Canucks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-468.php">Tampa Bay Lightning (2) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-469.php">Quebec Nordiques (4) vs Philadelphia Flyers (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-470.php">Winnipeg Jets (3) vs Carolina Hurricanes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-471.php">Detroit Red Wings (5) vs Edmonton Oilers (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-472.php">San Jose Sharks (3) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-473.php">Columbus Blue Jackets (4) vs New Jersey Devils (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-474.php">St. Louis Blues (5) vs Chicago Blackhawks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-475.php">Minnesota Wild (1) vs Nashville Predators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-476.php">Los Angeles Kings (4) vs Colorado Avalanche (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-463.php">Rouyn-Noranda Huskies (3) vs Gatineau Olympiques (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-464.php">Grand Rapids Griffins (3) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-465.php">Albany Devils (1) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-466.php">Chicoutimi Saguenéens (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-467.php">Rochester Americans (3) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-468.php">Manitoba Moose (5) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-469.php">Bridgeport Sound Tigers (3) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-470.php">Trois-Rivières Draveurs (6) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-471.php">Wilkes-Barre/Scranton Penguins (3) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-472.php">Oklahoma City Barons (3) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-473.php">Providence Bruins (2) vs Peoria Rivermen (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-474.php">Milwaukee Admirals (3) vs Connecticut Whale (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 59</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-477.php">Boston Bruins (2) vs Buffalo Sabres (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-478.php">Ottawa Senators (1) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-479.php">Seattle Saints (4) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-480.php">Anaheim Ducks (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-481.php">Dallas Stars (4) vs Detroit Red Wings (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-475.php">Albany Devils (2) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-476.php">Houston Aeros (2) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-477.php">Portland Pirates (5) vs Laval Chiefs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-478.php">Roberval Dwarfs (1) vs Charlotte Checkers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 60</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-482.php">Washington Capitals (1) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-483.php">Vancouver Canucks (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-484.php">Pittsburgh Penguins (4) vs Columbus Blue Jackets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-479.php">Chicago Wolves (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-480.php">Rouyn-Noranda Huskies (3) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-481.php">Mercer Island Archangels (3) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-482.php">Grand Rapids Griffins (0) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-483.php">Gatineau Olympiques (4) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-484.php">Lake Erie Monsters (4) vs Chicoutimi Saguenéens (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-485.php">Adirondack Phantoms (4) vs Norfolk Admirals (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-486.php">Rochester Americans (3) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-487.php">Peoria Rivermen (6) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-488.php">Landshut Cannibals (5) vs Houston Aeros (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-489.php">Roberval Dwarfs (5) vs Providence Bruins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 61</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-485.php">Anaheim Ducks (2) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-486.php">New York Islanders (2) vs Montreal Canadiens (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-487.php">Ottawa Senators (1) vs Quebec Nordiques (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-490.php">Laval Chiefs (3) vs Albany Devils (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-491.php">Connecticut Whale (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-492.php">Las Vegas Gamblers (2) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-493.php">Charlotte Checkers (3) vs San Antonio Rampage (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-494.php">Binghamton Senators (2) vs Rockford IceHogs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 62</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-488.php">Boston Bruins (2) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-489.php">Florida Panthers (6) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-490.php">Buffalo Sabres (5) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-491.php">Colorado Avalanche (3) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-492.php">New York Rangers (3) vs Vancouver Canucks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-495.php">Lake Erie Monsters (1) vs Chicago Wolves (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-496.php">Wilkes-Barre/Scranton Penguins (3) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-497.php">Mercer Island Archangels (3) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-498.php">Joliette Sportif (3) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-499.php">Peoria Rivermen (3) vs Las Vegas Gamblers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-500.php">Chicoutimi Saguenéens (5) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-501.php">Houston Aeros (3) vs Roberval Dwarfs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-502.php">Manitoba Moose (3) vs Landshut Cannibals (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-503.php">Bridgeport Sound Tigers (5) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-504.php">Norfolk Admirals (4) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-505.php">Binghamton Senators (4) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-506.php">Portland Pirates (6) vs Oklahoma City Barons (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 63</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-493.php">St. Louis Blues (5) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-494.php">Anaheim Ducks (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-495.php">Ottawa Senators (2) vs Carolina Hurricanes (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-496.php">Minnesota Wild (2) vs Edmonton Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-497.php">Montreal Canadiens (5) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-498.php">San Jose Sharks (1) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-499.php">Quebec Nordiques (2) vs Pittsburgh Penguins (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-500.php">Detroit Red Wings (4) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-501.php">Columbus Blue Jackets (4) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-502.php">Toronto Maple Leafs (4) vs Tampa Bay Lightning (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-507.php">Rockford IceHogs (3) vs Lake Erie Monsters (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-508.php">Laval Chiefs (3) vs Mercer Island Archangels (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-509.php">Providence Bruins (5) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-510.php">San Antonio Rampage (4) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-511.php">Chicoutimi Saguenéens (4) vs Rouyn-Noranda Huskies (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-512.php">Grand Rapids Griffins (0) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-513.php">Springfield Falcons (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-514.php">Gatineau Olympiques (2) vs Chicago Wolves (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 64</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-503.php">New York Rangers (1) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-504.php">Arizona Coyotes (4) vs Florida Panthers (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-505.php">Los Angeles Kings (7) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-506.php">Washington Capitals (4) vs Buffalo Sabres (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-515.php">Norfolk Admirals (3) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-516.php">Rochester Americans (4) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-517.php">Providence Bruins (3) vs Bridgeport Sound Tigers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-518.php">Landshut Cannibals (3) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-519.php">Wilkes-Barre/Scranton Penguins (2) vs Binghamton Senators (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-520.php">Houston Aeros (4) vs Portland Pirates (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 65</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-507.php">Chicago Blackhawks (4) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-508.php">New York Islanders (2) vs Ottawa Senators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-509.php">Toronto Maple Leafs (9) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-510.php">Dallas Stars (3) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-511.php">Pittsburgh Penguins (2) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-512.php">Carolina Hurricanes (6) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-513.php">Minnesota Wild (1) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-514.php">Columbus Blue Jackets (0) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-515.php">Vancouver Canucks (2) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-516.php">Montreal Canadiens (5) vs Quebec Nordiques (6)</a>  - OT (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-517.php">Tampa Bay Lightning (2) vs Philadelphia Flyers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-518.php">Nashville Predators (5) vs Seattle Saints (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-521.php">Connecticut Whale (4) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-522.php">Trois-Rivières Draveurs (2) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-523.php">Oklahoma City Barons (5) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-524.php">San Antonio Rampage (2) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-525.php">Charlotte Checkers (3) vs Gatineau Olympiques (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-526.php">Adirondack Phantoms (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-527.php">Rouyn-Noranda Huskies (5) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-528.php">Joliette Sportif (2) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-529.php">Chicago Wolves (4) vs Mercer Island Archangels (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 66</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-519.php">Colorado Avalanche (1) vs Toronto Maple Leafs (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-520.php">Florida Panthers (2) vs Los Angeles Kings (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-530.php">Landshut Cannibals (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-531.php">Las Vegas Gamblers (2) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-532.php">Manitoba Moose (4) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-533.php">Charlotte Checkers (3) vs Houston Aeros (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-534.php">Binghamton Senators (3) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-535.php">Peoria Rivermen (4) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-536.php">Laval Chiefs (2) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-537.php">Portland Pirates (3) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-538.php">Oklahoma City Barons (3) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-539.php">Bridgeport Sound Tigers (5) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-540.php">Rockford IceHogs (1) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-541.php">Gatineau Olympiques (1) vs Rouyn-Noranda Huskies (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 67</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-521.php">Columbus Blue Jackets (4) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-522.php">Quebec Nordiques (3) vs Vancouver Canucks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-523.php">New York Islanders (4) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-524.php">Ottawa Senators (4) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-525.php">New Jersey Devils (1) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-526.php">Seattle Saints (2) vs Minnesota Wild (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-527.php">Nashville Predators (3) vs Dallas Stars (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-528.php">San Jose Sharks (4) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-529.php">Anaheim Ducks (4) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-530.php">Philadelphia Flyers (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-531.php">St. Louis Blues (4) vs Tampa Bay Lightning (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-542.php">Mercer Island Archangels (4) vs Landshut Cannibals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-543.php">Roberval Dwarfs (3) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-544.php">Chicoutimi Saguenéens (2) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-545.php">Grand Rapids Griffins (5) vs Oklahoma City Barons (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-546.php">Springfield Falcons (0) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-547.php">Chicago Wolves (5) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-548.php">Trois-Rivières Draveurs (4) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-549.php">Lake Erie Monsters (5) vs Portland Pirates (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-550.php">Albany Devils (5) vs Charlotte Checkers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-551.php">Norfolk Admirals (6) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-552.php">Rockford IceHogs (5) vs Laval Chiefs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-553.php">Connecticut Whale (3) vs Rochester Americans (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 68</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-532.php">New York Rangers (3) vs Chicago Blackhawks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-533.php">Detroit Red Wings (5) vs Florida Panthers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-534.php">Colorado Avalanche (3) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-535.php">Calgary Flames (1) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-536.php">Ottawa Senators (3) vs New York Islanders (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-537.php">Winnipeg Jets (2) vs Nashville Predators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-538.php">Edmonton Oilers (2) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-539.php">Los Angeles Kings (2) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-540.php">Boston Bruins (4) vs St. Louis Blues (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-541.php">Montreal Canadiens (2) vs Toronto Maple Leafs (5)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-554.php">Las Vegas Gamblers (4) vs Grand Rapids Griffins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-555.php">Adirondack Phantoms (3) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-556.php">Mercer Island Archangels (5) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-557.php">Milwaukee Admirals (5) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-558.php">Chicoutimi Saguenéens (4) vs Roberval Dwarfs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-559.php">Gatineau Olympiques (6) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-560.php">Rouyn-Noranda Huskies (2) vs Lake Erie Monsters (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 69</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-542.php">Pittsburgh Penguins (5) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-543.php">Carolina Hurricanes (6) vs Detroit Red Wings (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-544.php">Buffalo Sabres (5) vs Colorado Avalanche (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-545.php">Tampa Bay Lightning (2) vs Calgary Flames (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-546.php">Vancouver Canucks (4) vs Winnipeg Jets (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-547.php">Washington Capitals (4) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-548.php">Seattle Saints (5) vs Minnesota Wild (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-549.php">Arizona Coyotes (3) vs Quebec Nordiques (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-550.php">Los Angeles Kings (2) vs Dallas Stars (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-551.php">Chicago Blackhawks (0) vs Edmonton Oilers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-561.php">Joliette Sportif (5) vs Norfolk Admirals (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-562.php">Portland Pirates (2) vs Springfield Falcons (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-563.php">Binghamton Senators (2) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-564.php">Laval Chiefs (3) vs Las Vegas Gamblers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-565.php">Peoria Rivermen (4) vs Rockford IceHogs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 70</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-552.php">New Jersey Devils (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-553.php">Quebec Nordiques (4) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-554.php">St. Louis Blues (3) vs Vancouver Canucks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-555.php">Carolina Hurricanes (2) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-556.php">Seattle Saints (4) vs Columbus Blue Jackets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-557.php">New York Islanders (0) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-558.php">Minnesota Wild (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-559.php">Nashville Predators (3) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-560.php">Pittsburgh Penguins (3) vs Tampa Bay Lightning (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-561.php">Anaheim Ducks (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-562.php">Dallas Stars (4) vs San Jose Sharks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-566.php">Charlotte Checkers (2) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-567.php">Oklahoma City Barons (5) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-568.php">Connecticut Whale (0) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-569.php">Albany Devils (2) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 71</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-563.php">Toronto Maple Leafs (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-564.php">Colorado Avalanche (3) vs Chicago Blackhawks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-565.php">Philadelphia Flyers (3) vs New York Rangers (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-566.php">Calgary Flames (0) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-567.php">Edmonton Oilers (4) vs Winnipeg Jets (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-570.php">Houston Aeros (3) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-571.php">Springfield Falcons (4) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-572.php">Roberval Dwarfs (2) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-573.php">Rochester Americans (2) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-574.php">Joliette Sportif (4) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-575.php">Chicago Wolves (2) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-576.php">Rouyn-Noranda Huskies (0) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-577.php">Lake Erie Monsters (5) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-578.php">Trois-Rivières Draveurs (2) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-579.php">San Antonio Rampage (2) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-580.php">Rockford IceHogs (5) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-581.php">Charlotte Checkers (3) vs Binghamton Senators (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 72</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-568.php">Toronto Maple Leafs (3) vs New Jersey Devils (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-569.php">San Jose Sharks (6) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-570.php">Arizona Coyotes (3) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-571.php">Quebec Nordiques (4) vs Anaheim Ducks (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-572.php">Florida Panthers (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-573.php">Tampa Bay Lightning (3) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-574.php">Boston Bruins (3) vs Pittsburgh Penguins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-575.php">Minnesota Wild (3) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-576.php">Columbus Blue Jackets (3) vs St. Louis Blues (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-577.php">Montreal Canadiens (3) vs Colorado Avalanche (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-578.php">Buffalo Sabres (1) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-579.php">Washington Capitals (3) vs Philadelphia Flyers (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-582.php">Landshut Cannibals (2) vs Norfolk Admirals (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-583.php">Las Vegas Gamblers (1) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-584.php">Milwaukee Admirals (5) vs Portland Pirates (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-585.php">Lake Erie Monsters (4) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-586.php">Grand Rapids Griffins (2) vs Rouyn-Noranda Huskies (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-587.php">Adirondack Phantoms (7) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-588.php">Chicago Wolves (3) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-589.php">Providence Bruins (6) vs Rochester Americans (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 73</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-580.php">New York Rangers (1) vs Toronto Maple Leafs (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-581.php">Dallas Stars (2) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-582.php">Los Angeles Kings (2) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-583.php">Detroit Red Wings (2) vs Chicago Blackhawks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-584.php">Seattle Saints (0) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-585.php">Tampa Bay Lightning (3) vs Florida Panthers (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-586.php">Washington Capitals (0) vs Montreal Canadiens (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-590.php">Manitoba Moose (5) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-591.php">Springfield Falcons (2) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-592.php">Bridgeport Sound Tigers (0) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-593.php">Mercer Island Archangels (5) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-594.php">Wilkes-Barre/Scranton Penguins (4) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-595.php">Las Vegas Gamblers (2) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-596.php">Binghamton Senators (4) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-597.php">Peoria Rivermen (2) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-598.php">Trois-Rivières Draveurs (5) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-599.php">Norfolk Admirals (3) vs Albany Devils (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-600.php">Laval Chiefs (4) vs Portland Pirates (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 74</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-587.php">New York Islanders (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-588.php">Quebec Nordiques (2) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-589.php">Anaheim Ducks (3) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-590.php">Columbus Blue Jackets (2) vs Carolina Hurricanes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-591.php">Pittsburgh Penguins (0) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-592.php">St. Louis Blues (0) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-593.php">Ottawa Senators (5) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-594.php">Winnipeg Jets (2) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-595.php">Vancouver Canucks (2) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-596.php">Colorado Avalanche (5) vs Detroit Red Wings (1)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-597.php">Philadelphia Flyers (7) vs New York Rangers (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-598.php">Chicago Blackhawks (1) vs Calgary Flames (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-601.php">Rouyn-Noranda Huskies (1) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-602.php">Providence Bruins (1) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-603.php">Chicoutimi Saguenéens (3) vs Manitoba Moose (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-604.php">Grand Rapids Griffins (2) vs Springfield Falcons (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-605.php">Gatineau Olympiques (0) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-606.php">Rochester Americans (3) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-607.php">Milwaukee Admirals (2) vs Joliette Sportif (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 75</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-599.php">Edmonton Oilers (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-600.php">Florida Panthers (3) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-601.php">Tampa Bay Lightning (5) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-602.php">Boston Bruins (3) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-603.php">Anaheim Ducks (4) vs Ottawa Senators (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-608.php">Binghamton Senators (2) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-609.php">Landshut Cannibals (4) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-610.php">Houston Aeros (5) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-611.php">Albany Devils (3) vs Wilkes-Barre/Scranton Penguins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-612.php">Oklahoma City Barons (0) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-613.php">Norfolk Admirals (1) vs Roberval Dwarfs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 76</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-604.php">Philadelphia Flyers (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-605.php">Buffalo Sabres (4) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-606.php">Winnipeg Jets (0) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-607.php">San Jose Sharks (1) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-608.php">New Jersey Devils (3) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-609.php">Nashville Predators (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-610.php">Arizona Coyotes (4) vs Montreal Canadiens (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-611.php">New York Rangers (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-612.php">Dallas Stars (3) vs Vancouver Canucks (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-613.php">Los Angeles Kings (3) vs Edmonton Oilers (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-614.php">Grand Rapids Griffins (4) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-615.php">Mercer Island Archangels (4) vs Laval Chiefs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-616.php">Rochester Americans (2) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-617.php">Chicago Wolves (5) vs Rouyn-Noranda Huskies (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-618.php">Lake Erie Monsters (1) vs Gatineau Olympiques (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-619.php">Chicoutimi Saguenéens (2) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-620.php">Bridgeport Sound Tigers (1) vs Providence Bruins (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 77</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-614.php">Chicago Blackhawks (4) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-615.php">Calgary Flames (4) vs Anaheim Ducks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-616.php">Detroit Red Wings (5) vs Winnipeg Jets (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-617.php">Washington Capitals (2) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-618.php">Quebec Nordiques (3) vs New Jersey Devils (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-619.php">Pittsburgh Penguins (4) vs Philadelphia Flyers (1)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-620.php">Montreal Canadiens (5) vs Florida Panthers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-621.php">San Jose Sharks (3) vs Seattle Saints (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-622.php">Toronto Maple Leafs (2) vs Arizona Coyotes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-623.php">Minnesota Wild (4) vs Columbus Blue Jackets (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-621.php">Adirondack Phantoms (2) vs Binghamton Senators (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-622.php">Houston Aeros (3) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-623.php">Joliette Sportif (4) vs Grand Rapids Griffins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-624.php">Wilkes-Barre/Scranton Penguins (2) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-625.php">Albany Devils (2) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-626.php">Peoria Rivermen (3) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-627.php">Trois-Rivières Draveurs (3) vs Manitoba Moose (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-628.php">Oklahoma City Barons (5) vs Las Vegas Gamblers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 78</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-624.php">Buffalo Sabres (2) vs Dallas Stars (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-625.php">Ottawa Senators (3) vs New York Islanders (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-626.php">Colorado Avalanche (3) vs Nashville Predators (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-627.php">St. Louis Blues (4) vs Los Angeles Kings (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-628.php">Edmonton Oilers (4) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-629.php">Detroit Red Wings (0) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-630.php">Carolina Hurricanes (0) vs Calgary Flames (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-629.php">Bridgeport Sound Tigers (4) vs Rochester Americans (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-630.php">Mercer Island Archangels (1) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-631.php">Laval Chiefs (2) vs Chicoutimi Saguenéens (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-632.php">Providence Bruins (3) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-633.php">Portland Pirates (3) vs Lake Erie Monsters (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-634.php">Rouyn-Noranda Huskies (2) vs Adirondack Phantoms (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-635.php">Milwaukee Admirals (4) vs Oklahoma City Barons (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-636.php">Roberval Dwarfs (3) vs Peoria Rivermen (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-637.php">Gatineau Olympiques (1) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-638.php">Charlotte Checkers (1) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-639.php">Rockford IceHogs (5) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-640.php">Springfield Falcons (5) vs Joliette Sportif (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 79</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-631.php">Toronto Maple Leafs (4) vs Quebec Nordiques (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-632.php">Buffalo Sabres (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-633.php">New Jersey Devils (3) vs Ottawa Senators (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-634.php">Montreal Canadiens (4) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-635.php">Arizona Coyotes (5) vs Anaheim Ducks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-636.php">New York Islanders (3) vs Tampa Bay Lightning (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-637.php">Seattle Saints (4) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-638.php">Winnipeg Jets (4) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-639.php">Boston Bruins (2) vs Detroit Red Wings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-640.php">Florida Panthers (2) vs Colorado Avalanche (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-641.php">Connecticut Whale (2) vs Mercer Island Archangels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-642.php">Binghamton Senators (2) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-643.php">Norfolk Admirals (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-644.php">Chicago Wolves (3) vs Portland Pirates (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-645.php">Manitoba Moose (3) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-646.php">Lake Erie Monsters (6) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-647.php">Las Vegas Gamblers (1) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-648.php">Landshut Cannibals (6) vs Roberval Dwarfs (7)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-649.php">Grand Rapids Griffins (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-650.php">Rockford IceHogs (3) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-651.php">Chicoutimi Saguenéens (4) vs Rochester Americans (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-652.php">San Antonio Rampage (2) vs Providence Bruins (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 80</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-641.php">Minnesota Wild (3) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-642.php">Calgary Flames (2) vs Vancouver Canucks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-643.php">Columbus Blue Jackets (3) vs Toronto Maple Leafs (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-653.php">Binghamton Senators (2) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-654.php">Oklahoma City Barons (3) vs Houston Aeros (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-655.php">Connecticut Whale (4) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-656.php">Springfield Falcons (2) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-657.php">Wilkes-Barre/Scranton Penguins (4) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-658.php">Trois-Rivières Draveurs (7) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-659.php">Peoria Rivermen (5) vs Albany Devils (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 81</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-644.php">Tampa Bay Lightning (4) vs Winnipeg Jets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-645.php">Carolina Hurricanes (1) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-646.php">New Jersey Devils (1) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-647.php">Boston Bruins (3) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-648.php">Quebec Nordiques (3) vs Los Angeles Kings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-649.php">St. Louis Blues (2) vs Montreal Canadiens (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-650.php">Nashville Predators (4) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-651.php">Arizona Coyotes (2) vs Chicago Blackhawks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-652.php">New York Islanders (2) vs Washington Capitals (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-653.php">San Jose Sharks (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-654.php">New York Rangers (4) vs Columbus Blue Jackets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-660.php">Joliette Sportif (5) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-661.php">Chicago Wolves (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-662.php">Rouyn-Noranda Huskies (3) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-663.php">Roberval Dwarfs (0) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-664.php">Gatineau Olympiques (6) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-665.php">Laval Chiefs (1) vs Bridgeport Sound Tigers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 82</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-655.php">Calgary Flames (4) vs Minnesota Wild (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-656.php">Tampa Bay Lightning (4) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-657.php">Detroit Red Wings (3) vs Ottawa Senators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-658.php">Nashville Predators (4) vs Pittsburgh Penguins (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-666.php">San Antonio Rampage (6) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-667.php">Rochester Americans (2) vs Connecticut Whale (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-668.php">Providence Bruins (4) vs Springfield Falcons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-669.php">Portland Pirates (3) vs Trois-Rivières Draveurs (8)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-670.php">Joliette Sportif (0) vs Oklahoma City Barons (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 83</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-659.php">New Jersey Devils (3) vs Arizona Coyotes (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-660.php">Washington Capitals (0) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-661.php">Seattle Saints (2) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-662.php">New York Islanders (3) vs Quebec Nordiques (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-663.php">Dallas Stars (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-664.php">Toronto Maple Leafs (2) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-665.php">Vancouver Canucks (2) vs Colorado Avalanche (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-671.php">Norfolk Admirals (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-672.php">Houston Aeros (3) vs Peoria Rivermen (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-673.php">Albany Devils (4) vs Charlotte Checkers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 84</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-666.php">Pittsburgh Penguins (2) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-667.php">Calgary Flames (2) vs Nashville Predators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-668.php">St. Louis Blues (3) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-669.php">Winnipeg Jets (3) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-670.php">Montreal Canadiens (2) vs New York Islanders (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-674.php">Rochester Americans (3) vs Milwaukee Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-675.php">Mercer Island Archangels (2) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-676.php">Rouyn-Noranda Huskies (2) vs Portland Pirates (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 85</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-671.php">Columbus Blue Jackets (1) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-672.php">Edmonton Oilers (2) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-673.php">Dallas Stars (2) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-674.php">New York Rangers (3) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-675.php">Ottawa Senators (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-676.php">Colorado Avalanche (3) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-677.php">Chicago Blackhawks (3) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-678.php">Anaheim Ducks (4) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-679.php">Boston Bruins (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-680.php">Seattle Saints (3) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-681.php">Washington Capitals (4) vs Minnesota Wild (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-677.php">Providence Bruins (1) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-678.php">Manitoba Moose (1) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-679.php">Houston Aeros (4) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-680.php">Binghamton Senators (5) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-681.php">Gatineau Olympiques (1) vs Grand Rapids Griffins (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-682.php">Las Vegas Gamblers (3) vs Rockford IceHogs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-683.php">Peoria Rivermen (7) vs Chicoutimi Saguenéens (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-684.php">Norfolk Admirals (4) vs Adirondack Phantoms (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-685.php">Bridgeport Sound Tigers (4) vs Landshut Cannibals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-686.php">Lake Erie Monsters (5) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-687.php">Charlotte Checkers (1) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-688.php">Chicago Wolves (3) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-689.php">Trois-Rivières Draveurs (1) vs Rochester Americans (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 86</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-682.php">San Jose Sharks (3) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-683.php">Quebec Nordiques (1) vs Montreal Canadiens (2)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-684.php">Detroit Red Wings (3) vs Arizona Coyotes (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-685.php">Buffalo Sabres (1) vs Columbus Blue Jackets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-686.php">Tampa Bay Lightning (5) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-687.php">Pittsburgh Penguins (4) vs Chicago Blackhawks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-688.php">Nashville Predators (2) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-689.php">Los Angeles Kings (0) vs Anaheim Ducks (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-690.php">Philadelphia Flyers (1) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-691.php">New York Rangers (4) vs Ottawa Senators (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-690.php">Mercer Island Archangels (5) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-691.php">Wilkes-Barre/Scranton Penguins (4) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-692.php">Milwaukee Admirals (3) vs Norfolk Admirals (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-693.php">Portland Pirates (2) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-694.php">Oklahoma City Barons (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-695.php">Landshut Cannibals (3) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-696.php">Peoria Rivermen (1) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-697.php">Rockford IceHogs (4) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-698.php">Roberval Dwarfs (0) vs Lake Erie Monsters (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-699.php">Chicoutimi Saguenéens (1) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-700.php">San Antonio Rampage (1) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-701.php">Joliette Sportif (1) vs Laval Chiefs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 87</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-692.php">Florida Panthers (2) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-693.php">Toronto Maple Leafs (0) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-694.php">Colorado Avalanche (3) vs Quebec Nordiques (2)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-695.php">Vancouver Canucks (1) vs New York Islanders (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-702.php">Charlotte Checkers (4) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-703.php">Grand Rapids Griffins (2) vs Mercer Island Archangels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-704.php">Connecticut Whale (2) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-705.php">Springfield Falcons (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-706.php">Adirondack Phantoms (1) vs Milwaukee Admirals (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-707.php">Rouyn-Noranda Huskies (6) vs Portland Pirates (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 88</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-696.php">Carolina Hurricanes (5) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-697.php">Montreal Canadiens (3) vs Buffalo Sabres (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-698.php">San Jose Sharks (5) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-699.php">Minnesota Wild (5) vs Detroit Red Wings (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-700.php">Arizona Coyotes (1) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-701.php">Winnipeg Jets (4) vs Colorado Avalanche (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-702.php">Toronto Maple Leafs (5) vs Tampa Bay Lightning (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-703.php">Calgary Flames (4) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-704.php">Vancouver Canucks (1) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-705.php">Anaheim Ducks (3) vs Edmonton Oilers (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-708.php">Gatineau Olympiques (2) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-709.php">Norfolk Admirals (2) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-710.php">Chicoutimi Saguenéens (5) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-711.php">Adirondack Phantoms (0) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-712.php">Rockford IceHogs (3) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-713.php">Laval Chiefs (2) vs Joliette Sportif (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 89</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-706.php">Los Angeles Kings (5) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-707.php">Ottawa Senators (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-708.php">Dallas Stars (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-709.php">New York Islanders (4) vs Columbus Blue Jackets (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-710.php">New Jersey Devils (4) vs Florida Panthers (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-711.php">Seattle Saints (1) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-712.php">Washington Capitals (3) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-713.php">Arizona Coyotes (3) vs Minnesota Wild (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-714.php">Buffalo Sabres (3) vs Boston Bruins (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-715.php">Pittsburgh Penguins (2) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-716.php">St. Louis Blues (4) vs Quebec Nordiques (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-714.php">Wilkes-Barre/Scranton Penguins (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-715.php">Connecticut Whale (6) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-716.php">Landshut Cannibals (3) vs Binghamton Senators (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-717.php">Lake Erie Monsters (4) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-718.php">Portland Pirates (5) vs Houston Aeros (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 90</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-717.php">Seattle Saints (5) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-718.php">New Jersey Devils (3) vs Toronto Maple Leafs (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-719.php">Detroit Red Wings (3) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-720.php">Edmonton Oilers (1) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-721.php">Nashville Predators (3) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-722.php">Tampa Bay Lightning (4) vs Ottawa Senators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-723.php">Chicago Blackhawks (1) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-724.php">Florida Panthers (1) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-725.php">Boston Bruins (6) vs New York Islanders (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-719.php">Bridgeport Sound Tigers (2) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-720.php">Trois-Rivières Draveurs (6) vs Providence Bruins (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-721.php">Chicago Wolves (5) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-722.php">Mercer Island Archangels (0) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-723.php">Grand Rapids Griffins (4) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-724.php">Milwaukee Admirals (5) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-725.php">Charlotte Checkers (1) vs Albany Devils (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-726.php">Norfolk Admirals (3) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-727.php">Oklahoma City Barons (4) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-728.php">Roberval Dwarfs (3) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-729.php">Laval Chiefs (3) vs Lake Erie Monsters (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 91</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-726.php">Carolina Hurricanes (4) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-727.php">Montreal Canadiens (3) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-728.php">Detroit Red Wings (2) vs Colorado Avalanche (3)</a>  - OT (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-730.php">Houston Aeros (3) vs Norfolk Admirals (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-731.php">Manitoba Moose (2) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-732.php">Portland Pirates (3) vs Peoria Rivermen (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-733.php">Binghamton Senators (5) vs Oklahoma City Barons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-734.php">Wilkes-Barre/Scranton Penguins (4) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-735.php">San Antonio Rampage (4) vs Trois-Rivières Draveurs (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-736.php">Rouyn-Noranda Huskies (4) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-737.php">Roberval Dwarfs (4) vs Joliette Sportif (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 92</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-729.php">Chicago Blackhawks (4) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-730.php">Washington Capitals (3) vs Pittsburgh Penguins (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-731.php">Columbus Blue Jackets (1) vs Nashville Predators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-738.php">Adirondack Phantoms (3) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-739.php">Rockford IceHogs (4) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-740.php">Las Vegas Gamblers (2) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-741.php">Gatineau Olympiques (2) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-742.php">Albany Devils (0) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-743.php">Chicoutimi Saguenéens (4) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-744.php">Springfield Falcons (4) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-745.php">Houston Aeros (3) vs Portland Pirates (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-746.php">Manitoba Moose (2) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-747.php">Rouyn-Noranda Huskies (5) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-748.php">Lake Erie Monsters (3) vs Landshut Cannibals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 93</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-732.php">Winnipeg Jets (2) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-733.php">Carolina Hurricanes (4) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-734.php">Colorado Avalanche (3) vs St. Louis Blues (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-735.php">Vancouver Canucks (2) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-736.php">Edmonton Oilers (1) vs Detroit Red Wings (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-749.php">Joliette Sportif (6) vs Roberval Dwarfs (7)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-750.php">Providence Bruins (2) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-751.php">Bridgeport Sound Tigers (0) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-752.php">Milwaukee Admirals (2) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-753.php">Adirondack Phantoms (1) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-754.php">Mercer Island Archangels (3) vs Springfield Falcons (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-755.php">Grand Rapids Griffins (2) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-756.php">Trois-Rivières Draveurs (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-757.php">Rochester Americans (5) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-758.php">Peoria Rivermen (3) vs Chicago Wolves (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-759.php">Oklahoma City Barons (2) vs Houston Aeros (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 94</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-737.php">Minnesota Wild (4) vs Philadelphia Flyers (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-738.php">Ottawa Senators (3) vs Calgary Flames (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-739.php">Quebec Nordiques (4) vs Toronto Maple Leafs (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-740.php">Nashville Predators (2) vs Winnipeg Jets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-741.php">New York Rangers (3) vs Florida Panthers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-760.php">Portland Pirates (3) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-761.php">Lake Erie Monsters (3) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-762.php">Wilkes-Barre/Scranton Penguins (4) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-763.php">Las Vegas Gamblers (3) vs Mercer Island Archangels (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-764.php">San Antonio Rampage (3) vs Bridgeport Sound Tigers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-765.php">Laval Chiefs (3) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-766.php">Roberval Dwarfs (0) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-767.php">Landshut Cannibals (2) vs Trois-Rivières Draveurs (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 95</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-742.php">Los Angeles Kings (6) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-743.php">Washington Capitals (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-744.php">Boston Bruins (3) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-745.php">Anaheim Ducks (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-746.php">Colorado Avalanche (1) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-747.php">San Jose Sharks (2) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-748.php">Seattle Saints (2) vs Montreal Canadiens (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-768.php">Springfield Falcons (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-769.php">Joliette Sportif (3) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-770.php">Gatineau Olympiques (4) vs Milwaukee Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 96</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-749.php">Philadelphia Flyers (4) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-750.php">Quebec Nordiques (3) vs Chicago Blackhawks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-751.php">St. Louis Blues (1) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-752.php">Ottawa Senators (6) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-753.php">Toronto Maple Leafs (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-754.php">Florida Panthers (2) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-755.php">Detroit Red Wings (1) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-756.php">Edmonton Oilers (1) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-757.php">Calgary Flames (1) vs Boston Bruins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-758.php">New York Rangers (2) vs Nashville Predators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-771.php">Norfolk Admirals (5) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-772.php">Landshut Cannibals (3) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-773.php">Rouyn-Noranda Huskies (3) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-774.php">Manitoba Moose (4) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-775.php">Laval Chiefs (4) vs Rochester Americans (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-776.php">Chicago Wolves (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-777.php">Rockford IceHogs (4) vs Portland Pirates (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-778.php">Houston Aeros (1) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-779.php">Albany Devils (3) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-780.php">Charlotte Checkers (3) vs Chicoutimi Saguenéens (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-781.php">Milwaukee Admirals (4) vs Roberval Dwarfs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-782.php">Mercer Island Archangels (5) vs Las Vegas Gamblers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 97</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-759.php">Washington Capitals (4) vs Quebec Nordiques (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-760.php">Montreal Canadiens (2) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-761.php">Vancouver Canucks (4) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-762.php">Columbus Blue Jackets (2) vs Ottawa Senators (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-763.php">Colorado Avalanche (5) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-764.php">Calgary Flames (2) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-765.php">Dallas Stars (1) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-766.php">Arizona Coyotes (1) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-767.php">Minnesota Wild (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-768.php">Toronto Maple Leafs (1) vs Philadelphia Flyers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-783.php">Oklahoma City Barons (3) vs Laval Chiefs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-784.php">Peoria Rivermen (3) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-785.php">Houston Aeros (1) vs Gatineau Olympiques (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-786.php">Norfolk Admirals (2) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-787.php">Connecticut Whale (3) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-788.php">Bridgeport Sound Tigers (4) vs Rockford IceHogs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 98</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-769.php">Pittsburgh Penguins (0) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-770.php">Carolina Hurricanes (2) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-771.php">Chicago Blackhawks (2) vs Florida Panthers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-772.php">New York Islanders (3) vs Columbus Blue Jackets (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-773.php">Nashville Predators (2) vs Los Angeles Kings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-774.php">Buffalo Sabres (4) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-775.php">Vancouver Canucks (4) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-776.php">Anaheim Ducks (2) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-777.php">Boston Bruins (2) vs Montreal Canadiens (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-778.php">Seattle Saints (6) vs Arizona Coyotes (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-789.php">Lake Erie Monsters (4) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-790.php">Binghamton Senators (6) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-791.php">Providence Bruins (4) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-792.php">Trois-Rivières Draveurs (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-793.php">Wilkes-Barre/Scranton Penguins (3) vs Peoria Rivermen (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-794.php">Charlotte Checkers (2) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-795.php">Rochester Americans (2) vs Oklahoma City Barons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-796.php">Grand Rapids Griffins (3) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-797.php">Chicoutimi Saguenéens (3) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-798.php">Gatineau Olympiques (3) vs Portland Pirates (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-799.php">Joliette Sportif (3) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-800.php">Roberval Dwarfs (2) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-801.php">Adirondack Phantoms (3) vs Springfield Falcons (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 99</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-779.php">Nashville Predators (1) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-780.php">Ottawa Senators (2) vs Toronto Maple Leafs (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-781.php">St. Louis Blues (6) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-782.php">Philadelphia Flyers (3) vs Carolina Hurricanes (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-783.php">Pittsburgh Penguins (5) vs Quebec Nordiques (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-802.php">Trois-Rivières Draveurs (4) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-803.php">Laval Chiefs (5) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-804.php">Grand Rapids Griffins (4) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-805.php">Rochester Americans (2) vs Binghamton Senators (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-806.php">Connecticut Whale (2) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-807.php">Rouyn-Noranda Huskies (0) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-808.php">San Antonio Rampage (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-809.php">Rockford IceHogs (2) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-810.php">Chicoutimi Saguenéens (2) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-811.php">Portland Pirates (3) vs Chicago Wolves (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 100</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-784.php">Montreal Canadiens (0) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-785.php">Boston Bruins (5) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-786.php">Arizona Coyotes (3) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-787.php">Edmonton Oilers (3) vs Tampa Bay Lightning (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-788.php">Washington Capitals (3) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-789.php">Colorado Avalanche (3) vs Anaheim Ducks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-790.php">New Jersey Devils (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-791.php">Seattle Saints (1) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-792.php">Florida Panthers (2) vs Ottawa Senators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-793.php">Los Angeles Kings (6) vs Pittsburgh Penguins (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-812.php">Bridgeport Sound Tigers (4) vs Charlotte Checkers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-813.php">Peoria Rivermen (0) vs Joliette Sportif (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 101</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-794.php">Winnipeg Jets (1) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-795.php">Quebec Nordiques (1) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-796.php">Anaheim Ducks (1) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-797.php">Toronto Maple Leafs (4) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-798.php">Dallas Stars (4) vs Washington Capitals (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-814.php">Chicago Wolves (2) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-815.php">Landshut Cannibals (1) vs Rochester Americans (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-816.php">Grand Rapids Griffins (6) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-817.php">Portland Pirates (3) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-818.php">Providence Bruins (5) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-819.php">Chicoutimi Saguenéens (3) vs Connecticut Whale (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 102</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-799.php">Calgary Flames (4) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-800.php">Arizona Coyotes (4) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-801.php">Columbus Blue Jackets (1) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-802.php">Minnesota Wild (0) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-803.php">Los Angeles Kings (2) vs Chicago Blackhawks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-804.php">San Jose Sharks (5) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-805.php">Buffalo Sabres (2) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-806.php">Tampa Bay Lightning (4) vs Florida Panthers (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-807.php">New York Rangers (2) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-808.php">Montreal Canadiens (2) vs Toronto Maple Leafs (3)</a>  - SO (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-820.php">San Antonio Rampage (2) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-821.php">Lake Erie Monsters (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-822.php">Las Vegas Gamblers (0) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-823.php">Mercer Island Archangels (6) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-824.php">Springfield Falcons (3) vs Rouyn-Noranda Huskies (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-825.php">Charlotte Checkers (3) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-826.php">Albany Devils (2) vs Oklahoma City Barons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-827.php">Bridgeport Sound Tigers (6) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-828.php">Joliette Sportif (4) vs Peoria Rivermen (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-829.php">Milwaukee Admirals (2) vs Trois-Rivières Draveurs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-830.php">Providence Bruins (3) vs Binghamton Senators (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 103</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-809.php">Detroit Red Wings (2) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-810.php">Chicago Blackhawks (3) vs Minnesota Wild (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-811.php">San Jose Sharks (4) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-812.php">Edmonton Oilers (5) vs Dallas Stars (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-831.php">Chicago Wolves (3) vs Mercer Island Archangels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-832.php">Portland Pirates (2) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-833.php">Manitoba Moose (2) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-834.php">Laval Chiefs (3) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-835.php">Binghamton Senators (4) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-836.php">Roberval Dwarfs (1) vs Rochester Americans (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-837.php">Landshut Cannibals (3) vs Charlotte Checkers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-838.php">Connecticut Whale (4) vs Joliette Sportif (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-839.php">Adirondack Phantoms (1) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-840.php">Gatineau Olympiques (2) vs Las Vegas Gamblers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-841.php">Houston Aeros (3) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-842.php">Oklahoma City Barons (4) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-843.php">Rockford IceHogs (4) vs Norfolk Admirals (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 104</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-813.php">Washington Capitals (2) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-814.php">Quebec Nordiques (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-815.php">Anaheim Ducks (3) vs Los Angeles Kings (6)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-844.php">Roberval Dwarfs (3) vs Albany Devils (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-845.php">Peoria Rivermen (1) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-846.php">Gatineau Olympiques (5) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-847.php">Landshut Cannibals (0) vs Manitoba Moose (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 105</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-816.php">Carolina Hurricanes (2) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-817.php">Montreal Canadiens (5) vs Boston Bruins (4)</a>  - OT (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-818.php">Columbus Blue Jackets (3) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-819.php">San Jose Sharks (4) vs Ottawa Senators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-848.php">Providence Bruins (3) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-849.php">Chicoutimi Saguenéens (0) vs Connecticut Whale (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-850.php">Trois-Rivières Draveurs (2) vs Chicago Wolves (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-851.php">Rochester Americans (3) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-852.php">Houston Aeros (3) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-853.php">Wilkes-Barre/Scranton Penguins (1) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-854.php">Rouyn-Noranda Huskies (2) vs Oklahoma City Barons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-855.php">Joliette Sportif (1) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-856.php">Norfolk Admirals (2) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-857.php">Binghamton Senators (1) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-858.php">Charlotte Checkers (4) vs Milwaukee Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 106</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-820.php">Florida Panthers (0) vs Tampa Bay Lightning (6)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-821.php">Calgary Flames (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-822.php">Toronto Maple Leafs (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-823.php">St. Louis Blues (1) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-824.php">Dallas Stars (3) vs Seattle Saints (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-825.php">Philadelphia Flyers (0) vs Nashville Predators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-859.php">Albany Devils (2) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-860.php">San Antonio Rampage (3) vs Providence Bruins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-861.php">Springfield Falcons (4) vs Landshut Cannibals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-862.php">Las Vegas Gamblers (5) vs Gatineau Olympiques (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 107</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-826.php">Boston Bruins (1) vs Montreal Canadiens (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-827.php">Detroit Red Wings (3) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-828.php">Vancouver Canucks (4) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-829.php">Los Angeles Kings (2) vs Washington Capitals (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-830.php">New Jersey Devils (3) vs St. Louis Blues (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-831.php">Minnesota Wild (6) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-832.php">Edmonton Oilers (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-833.php">Columbus Blue Jackets (3) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-834.php">New York Islanders (2) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-835.php">Seattle Saints (4) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-836.php">Tampa Bay Lightning (9) vs Carolina Hurricanes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-863.php">Wilkes-Barre/Scranton Penguins (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-864.php">Trois-Rivières Draveurs (2) vs Houston Aeros (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-865.php">Chicago Wolves (3) vs Rochester Americans (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-866.php">Bridgeport Sound Tigers (1) vs Manitoba Moose (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 108</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-837.php">Quebec Nordiques (6) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-838.php">Florida Panthers (1) vs Dallas Stars (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-867.php">Albany Devils (4) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-868.php">San Antonio Rampage (0) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-869.php">Springfield Falcons (4) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-870.php">Peoria Rivermen (4) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-871.php">Rouyn-Noranda Huskies (5) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-872.php">Adirondack Phantoms (4) vs Binghamton Senators (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-873.php">Norfolk Admirals (4) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-874.php">Milwaukee Admirals (5) vs Las Vegas Gamblers (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 109</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-839.php">New York Islanders (4) vs Toronto Maple Leafs (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-840.php">Edmonton Oilers (1) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-841.php">Nashville Predators (3) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-842.php">Anaheim Ducks (2) vs Los Angeles Kings (3)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-843.php">Washington Capitals (1) vs Columbus Blue Jackets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-875.php">Landshut Cannibals (2) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-876.php">Providence Bruins (5) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-877.php">Rochester Americans (1) vs Roberval Dwarfs (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-878.php">Lake Erie Monsters (1) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-879.php">Manitoba Moose (2) vs San Antonio Rampage (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 110</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-844.php">Philadelphia Flyers (2) vs Pittsburgh Penguins (5)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-845.php">Tampa Bay Lightning (3) vs Buffalo Sabres (9)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-846.php">Chicago Blackhawks (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-847.php">Boston Bruins (5) vs Florida Panthers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-848.php">Calgary Flames (3) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-849.php">Quebec Nordiques (0) vs Ottawa Senators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-880.php">Springfield Falcons (2) vs Albany Devils (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-881.php">Joliette Sportif (2) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-882.php">Las Vegas Gamblers (3) vs Mercer Island Archangels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-883.php">Chicago Wolves (4) vs Rouyn-Noranda Huskies (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-884.php">Bridgeport Sound Tigers (4) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-885.php">Oklahoma City Barons (2) vs Chicoutimi Saguenéens (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-886.php">Gatineau Olympiques (4) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-887.php">Charlotte Checkers (3) vs Providence Bruins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 111</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-850.php">Carolina Hurricanes (2) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-851.php">Toronto Maple Leafs (1) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-852.php">Anaheim Ducks (6) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-853.php">Washington Capitals (1) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-854.php">Seattle Saints (6) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-855.php">Detroit Red Wings (1) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-856.php">Winnipeg Jets (3) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-857.php">Columbus Blue Jackets (2) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-858.php">Los Angeles Kings (2) vs Boston Bruins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-859.php">New Jersey Devils (1) vs Tampa Bay Lightning (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-888.php">Connecticut Whale (1) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-889.php">Milwaukee Admirals (4) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-890.php">Portland Pirates (3) vs Gatineau Olympiques (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-891.php">Laval Chiefs (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-892.php">Rockford IceHogs (4) vs Springfield Falcons (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-893.php">Mercer Island Archangels (1) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-894.php">Rochester Americans (1) vs Trois-Rivières Draveurs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-895.php">Grand Rapids Griffins (3) vs Peoria Rivermen (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-896.php">Binghamton Senators (3) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-897.php">Manitoba Moose (2) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-898.php">Rouyn-Noranda Huskies (3) vs Roberval Dwarfs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 112</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-860.php">Dallas Stars (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-861.php">Chicago Blackhawks (3) vs Anaheim Ducks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-862.php">Vancouver Canucks (3) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-863.php">Pittsburgh Penguins (1) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-864.php">Ottawa Senators (3) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-865.php">Arizona Coyotes (2) vs Winnipeg Jets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-866.php">Buffalo Sabres (4) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-899.php">Chicoutimi Saguenéens (2) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-900.php">Norfolk Admirals (3) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-901.php">Albany Devils (1) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-902.php">Rockford IceHogs (3) vs Joliette Sportif (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-903.php">Laval Chiefs (1) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-904.php">Roberval Dwarfs (2) vs Grand Rapids Griffins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 113</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-867.php">Colorado Avalanche (3) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-868.php">Los Angeles Kings (5) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-869.php">Carolina Hurricanes (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-870.php">St. Louis Blues (5) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-871.php">Nashville Predators (0) vs Vancouver Canucks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-872.php">Chicago Blackhawks (2) vs Dallas Stars (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-873.php">New York Rangers (3) vs New York Islanders (2)</a>  - OT (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-905.php">Wilkes-Barre/Scranton Penguins (4) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-906.php">Rochester Americans (4) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-907.php">Manitoba Moose (2) vs Adirondack Phantoms (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 114</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-874.php">Tampa Bay Lightning (3) vs Buffalo Sabres (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-875.php">Quebec Nordiques (0) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-876.php">Pittsburgh Penguins (1) vs Montreal Canadiens (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-877.php">Arizona Coyotes (3) vs Ottawa Senators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-878.php">Colorado Avalanche (4) vs Edmonton Oilers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-879.php">Boston Bruins (1) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-880.php">Calgary Flames (1) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-881.php">Washington Capitals (3) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-882.php">Winnipeg Jets (2) vs Los Angeles Kings (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-883.php">Detroit Red Wings (1) vs San Jose Sharks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-908.php">Houston Aeros (3) vs Connecticut Whale (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-909.php">Chicoutimi Saguenéens (5) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-910.php">Chicago Wolves (3) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-911.php">Rouyn-Noranda Huskies (1) vs Norfolk Admirals (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-912.php">Joliette Sportif (1) vs Landshut Cannibals (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-913.php">Las Vegas Gamblers (2) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-914.php">Trois-Rivières Draveurs (2) vs Lake Erie Monsters (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 115</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-884.php">Anaheim Ducks (5) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-885.php">Philadelphia Flyers (4) vs Pittsburgh Penguins (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-886.php">Nashville Predators (1) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-887.php">St. Louis Blues (1) vs Seattle Saints (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-915.php">Roberval Dwarfs (3) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-916.php">San Antonio Rampage (3) vs Manitoba Moose (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-917.php">Gatineau Olympiques (1) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-918.php">Mercer Island Archangels (0) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-919.php">Binghamton Senators (2) vs Springfield Falcons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-920.php">Peoria Rivermen (2) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-921.php">Milwaukee Admirals (5) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-922.php">Portland Pirates (1) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-923.php">Wilkes-Barre/Scranton Penguins (1) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-924.php">Connecticut Whale (4) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-925.php">Charlotte Checkers (2) vs Trois-Rivières Draveurs (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 116</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-888.php">Buffalo Sabres (3) vs Quebec Nordiques (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-889.php">Tampa Bay Lightning (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-890.php">Minnesota Wild (5) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-891.php">Edmonton Oilers (5) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-892.php">Vancouver Canucks (3) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-893.php">Dallas Stars (4) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-894.php">Columbus Blue Jackets (2) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-895.php">San Jose Sharks (2) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-896.php">Montreal Canadiens (1) vs Winnipeg Jets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-897.php">New Jersey Devils (5) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-898.php">Florida Panthers (3) vs Toronto Maple Leafs (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-926.php">Rochester Americans (3) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-927.php">Peoria Rivermen (5) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-928.php">Springfield Falcons (0) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-929.php">Wilkes-Barre/Scranton Penguins (3) vs Milwaukee Admirals (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-930.php">Portland Pirates (4) vs Joliette Sportif (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-931.php">Roberval Dwarfs (1) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-932.php">Albany Devils (2) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-933.php">Manitoba Moose (1) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-934.php">Landshut Cannibals (0) vs San Antonio Rampage (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-935.php">Bridgeport Sound Tigers (3) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-936.php">Rockford IceHogs (4) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-937.php">Norfolk Admirals (1) vs Charlotte Checkers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 117</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-899.php">Ottawa Senators (5) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-900.php">Arizona Coyotes (5) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-901.php">Los Angeles Kings (5) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-902.php">Carolina Hurricanes (0) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-903.php">Seattle Saints (4) vs Florida Panthers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-904.php">Edmonton Oilers (5) vs Vancouver Canucks (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-905.php">San Jose Sharks (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-906.php">Boston Bruins (4) vs New York Rangers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-907.php">New Jersey Devils (0) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-908.php">Columbus Blue Jackets (3) vs Chicago Blackhawks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-909.php">Quebec Nordiques (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-910.php">Toronto Maple Leafs (2) vs Montreal Canadiens (3)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-938.php">Lake Erie Monsters (3) vs Peoria Rivermen (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-939.php">Charlotte Checkers (0) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-940.php">Houston Aeros (0) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-941.php">Chicoutimi Saguenéens (4) vs Wilkes-Barre/Scranton Penguins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-942.php">Rockford IceHogs (4) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-943.php">Milwaukee Admirals (5) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-944.php">San Antonio Rampage (2) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-945.php">Providence Bruins (0) vs Norfolk Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-946.php">Landshut Cannibals (2) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-947.php">Laval Chiefs (6) vs Roberval Dwarfs (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-948.php">Trois-Rivières Draveurs (2) vs Rochester Americans (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-949.php">Las Vegas Gamblers (3) vs Gatineau Olympiques (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 118</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-911.php">Seattle Saints (2) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-912.php">Los Angeles Kings (0) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-913.php">Detroit Red Wings (5) vs Colorado Avalanche (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-914.php">Anaheim Ducks (3) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-915.php">Calgary Flames (2) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-916.php">Winnipeg Jets (3) vs Washington Capitals (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-950.php">Bridgeport Sound Tigers (1) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-951.php">Joliette Sportif (4) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-952.php">Oklahoma City Barons (3) vs Mercer Island Archangels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-953.php">Grand Rapids Griffins (4) vs Houston Aeros (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-954.php">Adirondack Phantoms (4) vs Lake Erie Monsters (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-955.php">Binghamton Senators (1) vs Chicoutimi Saguenéens (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-956.php">Connecticut Whale (4) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 119</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-917.php">Minnesota Wild (4) vs Edmonton Oilers (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-918.php">Philadelphia Flyers (1) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-919.php">New York Rangers (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-920.php">Vancouver Canucks (3) vs Arizona Coyotes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-921.php">Florida Panthers (3) vs Boston Bruins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-922.php">New York Islanders (3) vs Tampa Bay Lightning (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-957.php">Rockford IceHogs (4) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-958.php">Adirondack Phantoms (0) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-959.php">Milwaukee Admirals (2) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-960.php">Springfield Falcons (1) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-961.php">Roberval Dwarfs (3) vs Joliette Sportif (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-962.php">Gatineau Olympiques (5) vs Wilkes-Barre/Scranton Penguins (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-963.php">Albany Devils (2) vs Binghamton Senators (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 120</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-923.php">Anaheim Ducks (3) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-924.php">Dallas Stars (3) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-925.php">Montreal Canadiens (5) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-926.php">Chicago Blackhawks (2) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-927.php">Buffalo Sabres (4) vs Detroit Red Wings (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-964.php">Laval Chiefs (5) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-965.php">Chicoutimi Saguenéens (1) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-966.php">Lake Erie Monsters (2) vs Las Vegas Gamblers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-967.php">Rochester Americans (3) vs Charlotte Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-968.php">Connecticut Whale (4) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-969.php">Norfolk Admirals (4) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-970.php">Chicago Wolves (6) vs Milwaukee Admirals (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-971.php">Manitoba Moose (4) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-972.php">Houston Aeros (3) vs Oklahoma City Barons (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 121</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-928.php">Colorado Avalanche (1) vs Winnipeg Jets (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-929.php">Nashville Predators (5) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-930.php">Carolina Hurricanes (2) vs Toronto Maple Leafs (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-931.php">St. Louis Blues (3) vs Calgary Flames (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-932.php">Vancouver Canucks (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-933.php">Pittsburgh Penguins (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-934.php">New York Rangers (6) vs New York Islanders (1)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-935.php">Columbus Blue Jackets (0) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-936.php">Arizona Coyotes (2) vs Dallas Stars (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-937.php">Quebec Nordiques (3) vs Buffalo Sabres (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-938.php">Edmonton Oilers (1) vs New Jersey Devils (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-973.php">Portland Pirates (3) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-974.php">Providence Bruins (4) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-975.php">Norfolk Admirals (2) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-976.php">Binghamton Senators (2) vs Rochester Americans (1)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 122</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-939.php">San Jose Sharks (2) vs Anaheim Ducks (1)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-940.php">Tampa Bay Lightning (6) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-941.php">Boston Bruins (3) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-942.php">Washington Capitals (5) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-943.php">Toronto Maple Leafs (1) vs Pittsburgh Penguins (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-977.php">Houston Aeros (1) vs Springfield Falcons (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-978.php">San Antonio Rampage (1) vs Gatineau Olympiques (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-979.php">Oklahoma City Barons (8) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-980.php">Charlotte Checkers (3) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-981.php">Connecticut Whale (1) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-982.php">Bridgeport Sound Tigers (2) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-983.php">Peoria Rivermen (5) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-984.php">Las Vegas Gamblers (2) vs Chicago Wolves (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-985.php">Norfolk Admirals (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-986.php">Wilkes-Barre/Scranton Penguins (3) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-987.php">Milwaukee Admirals (2) vs Rockford IceHogs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-988.php">Rouyn-Noranda Huskies (0) vs Grand Rapids Griffins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 123</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-944.php">Seattle Saints (2) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-945.php">Ottawa Senators (2) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-946.php">Detroit Red Wings (0) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-947.php">Colorado Avalanche (4) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-948.php">Calgary Flames (6) vs Edmonton Oilers (1)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-989.php">Mercer Island Archangels (5) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-990.php">Joliette Sportif (7) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-991.php">Laval Chiefs (1) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-992.php">Chicago Wolves (1) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-993.php">Albany Devils (6) vs Binghamton Senators (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-994.php">Rochester Americans (2) vs Adirondack Phantoms (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 124</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-949.php">St. Louis Blues (4) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-950.php">Quebec Nordiques (3) vs Boston Bruins (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-951.php">Buffalo Sabres (2) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-952.php">Chicago Blackhawks (3) vs Nashville Predators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-953.php">Philadelphia Flyers (3) vs Washington Capitals (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-954.php">New Jersey Devils (3) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-955.php">Winnipeg Jets (5) vs Anaheim Ducks (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-956.php">Dallas Stars (2) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-957.php">New York Islanders (3) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-958.php">Los Angeles Kings (4) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-959.php">Florida Panthers (4) vs Minnesota Wild (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-995.php">Landshut Cannibals (1) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-996.php">Lake Erie Monsters (3) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-997.php">Wilkes-Barre/Scranton Penguins (5) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-998.php">Portland Pirates (3) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-999.php">Las Vegas Gamblers (1) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1000.php">Rouyn-Noranda Huskies (1) vs Joliette Sportif (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1001.php">Manitoba Moose (0) vs Gatineau Olympiques (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 125</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-960.php">Calgary Flames (3) vs St. Louis Blues (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-961.php">New York Rangers (3) vs Quebec Nordiques (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-962.php">Montreal Canadiens (4) vs Winnipeg Jets (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-963.php">Pittsburgh Penguins (4) vs Philadelphia Flyers (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-964.php">Washington Capitals (2) vs Toronto Maple Leafs (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1002.php">Springfield Falcons (1) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1003.php">Grand Rapids Griffins (1) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1004.php">Binghamton Senators (5) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1005.php">Chicoutimi Saguenéens (3) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1006.php">Adirondack Phantoms (6) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1007.php">Bridgeport Sound Tigers (4) vs Portland Pirates (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 126</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-965.php">Arizona Coyotes (5) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-966.php">Edmonton Oilers (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-967.php">Boston Bruins (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-968.php">Tampa Bay Lightning (5) vs Ottawa Senators (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-969.php">Chicago Blackhawks (4) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-970.php">Minnesota Wild (4) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-971.php">San Jose Sharks (1) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-972.php">Buffalo Sabres (3) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-973.php">Toronto Maple Leafs (5) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-974.php">Seattle Saints (4) vs Pittsburgh Penguins (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1008.php">Milwaukee Admirals (3) vs Las Vegas Gamblers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1009.php">Providence Bruins (3) vs Manitoba Moose (8)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1010.php">Chicago Wolves (5) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1011.php">San Antonio Rampage (0) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1012.php">Roberval Dwarfs (6) vs Rockford IceHogs (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 127</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-975.php">Colorado Avalanche (3) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-976.php">Anaheim Ducks (2) vs Nashville Predators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-977.php">New York Islanders (1) vs New York Rangers (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-978.php">Columbus Blue Jackets (1) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-979.php">Detroit Red Wings (3) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-980.php">Carolina Hurricanes (3) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-981.php">Winnipeg Jets (0) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-982.php">Washington Capitals (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-983.php">Tampa Bay Lightning (2) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-984.php">Philadelphia Flyers (4) vs St. Louis Blues (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1013.php">Laval Chiefs (5) vs Springfield Falcons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1014.php">Albany Devils (4) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1015.php">Rochester Americans (4) vs Trois-Rivières Draveurs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1016.php">Peoria Rivermen (2) vs Landshut Cannibals (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1017.php">Mercer Island Archangels (2) vs Rouyn-Noranda Huskies (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1018.php">Binghamton Senators (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1019.php">Grand Rapids Griffins (5) vs Norfolk Admirals (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 128</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-985.php">Florida Panthers (0) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-986.php">Nashville Predators (3) vs San Jose Sharks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-987.php">Dallas Stars (4) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-988.php">Ottawa Senators (4) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-989.php">Vancouver Canucks (6) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-990.php">Los Angeles Kings (3) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-991.php">Toronto Maple Leafs (0) vs Minnesota Wild (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1020.php">Oklahoma City Barons (5) vs Chicago Wolves (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1021.php">Wilkes-Barre/Scranton Penguins (2) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1022.php">Portland Pirates (4) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1023.php">Gatineau Olympiques (1) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1024.php">Houston Aeros (3) vs Bridgeport Sound Tigers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 129</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-992.php">Philadelphia Flyers (3) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-993.php">Columbus Blue Jackets (2) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-994.php">San Jose Sharks (2) vs Winnipeg Jets (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-995.php">Florida Panthers (3) vs Calgary Flames (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1025.php">Landshut Cannibals (2) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1026.php">Laval Chiefs (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1027.php">Mercer Island Archangels (1) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1028.php">San Antonio Rampage (3) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1029.php">Connecticut Whale (4) vs Providence Bruins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1030.php">Lake Erie Monsters (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1031.php">Rockford IceHogs (3) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1032.php">Trois-Rivières Draveurs (1) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1033.php">Roberval Dwarfs (2) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1034.php">Gatineau Olympiques (3) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1035.php">Houston Aeros (2) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1036.php">Chicoutimi Saguenéens (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 130</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-996.php">New York Rangers (3) vs Philadelphia Flyers (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-997.php">Buffalo Sabres (3) vs Ottawa Senators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-998.php">Arizona Coyotes (6) vs Dallas Stars (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-999.php">Los Angeles Kings (3) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1000.php">Chicago Blackhawks (2) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1001.php">Detroit Red Wings (6) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1002.php">Quebec Nordiques (3) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1003.php">Boston Bruins (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1004.php">Minnesota Wild (1) vs Pittsburgh Penguins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1005.php">Washington Capitals (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1006.php">Seattle Saints (2) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1007.php">Columbus Blue Jackets (3) vs Florida Panthers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1037.php">Norfolk Admirals (3) vs Oklahoma City Barons (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1038.php">Grand Rapids Griffins (3) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1039.php">Rochester Americans (0) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1040.php">Rockford IceHogs (2) vs Chicago Wolves (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 131</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1008.php">Montreal Canadiens (3) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1009.php">Colorado Avalanche (2) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1010.php">Anaheim Ducks (5) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1011.php">Calgary Flames (3) vs Buffalo Sabres (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1012.php">Winnipeg Jets (0) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1013.php">Los Angeles Kings (2) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1014.php">Seattle Saints (2) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1015.php">New Jersey Devils (2) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1016.php">Edmonton Oilers (1) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1017.php">Detroit Red Wings (2) vs San Jose Sharks (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1018.php">Dallas Stars (2) vs Minnesota Wild (8)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1041.php">Adirondack Phantoms (2) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1042.php">Providence Bruins (1) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1043.php">Connecticut Whale (3) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1044.php">Milwaukee Admirals (2) vs Mercer Island Archangels (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1045.php">Binghamton Senators (1) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1046.php">Las Vegas Gamblers (2) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1047.php">Peoria Rivermen (2) vs Laval Chiefs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1048.php">Joliette Sportif (3) vs Gatineau Olympiques (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1049.php">Manitoba Moose (4) vs Chicoutimi Saguenéens (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1050.php">Wilkes-Barre/Scranton Penguins (2) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1051.php">Rouyn-Noranda Huskies (3) vs Houston Aeros (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 132</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1019.php">Vancouver Canucks (1) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1020.php">Pittsburgh Penguins (1) vs Colorado Avalanche (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1021.php">Toronto Maple Leafs (1) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1022.php">Carolina Hurricanes (5) vs Washington Capitals (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1052.php">Laval Chiefs (3) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1053.php">Manitoba Moose (1) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1054.php">Springfield Falcons (3) vs Rochester Americans (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1055.php">Peoria Rivermen (4) vs Bridgeport Sound Tigers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1056.php">Portland Pirates (4) vs Charlotte Checkers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1057.php">Oklahoma City Barons (5) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1058.php">Trois-Rivières Draveurs (0) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1059.php">Landshut Cannibals (2) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1060.php">Mercer Island Archangels (4) vs Milwaukee Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1061.php">Rouyn-Noranda Huskies (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1062.php">Binghamton Senators (1) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1063.php">Albany Devils (4) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1064.php">Chicago Wolves (3) vs Lake Erie Monsters (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 133</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1023.php">Ottawa Senators (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1024.php">Calgary Flames (2) vs Seattle Saints (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1025.php">Winnipeg Jets (1) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1026.php">New York Rangers (4) vs Philadelphia Flyers (1)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1065.php">Wilkes-Barre/Scranton Penguins (5) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1066.php">Landshut Cannibals (0) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1067.php">Rouyn-Noranda Huskies (2) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1068.php">Providence Bruins (3) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1069.php">Laval Chiefs (0) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1070.php">Mercer Island Archangels (2) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1071.php">Chicoutimi Saguenéens (3) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1072.php">Lake Erie Monsters (1) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1073.php">San Antonio Rampage (3) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1074.php">Bridgeport Sound Tigers (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1075.php">Grand Rapids Griffins (3) vs Binghamton Senators (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1076.php">Charlotte Checkers (2) vs Rochester Americans (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 134</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1027.php">Arizona Coyotes (2) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1028.php">Chicago Blackhawks (2) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1029.php">Vancouver Canucks (6) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1030.php">Quebec Nordiques (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1031.php">Minnesota Wild (2) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1032.php">Tampa Bay Lightning (2) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1033.php">Florida Panthers (1) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1034.php">Nashville Predators (3) vs Carolina Hurricanes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1035.php">Boston Bruins (3) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1036.php">San Jose Sharks (2) vs Calgary Flames (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1077.php">Adirondack Phantoms (2) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1078.php">Joliette Sportif (2) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1079.php">Las Vegas Gamblers (2) vs Chicago Wolves (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 135</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1037.php">Pittsburgh Penguins (4) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1038.php">New Jersey Devils (3) vs Buffalo Sabres (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1039.php">Philadelphia Flyers (2) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1040.php">Montreal Canadiens (6) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1041.php">Washington Capitals (3) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1042.php">Dallas Stars (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1043.php">Anaheim Ducks (3) vs Chicago Blackhawks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1080.php">Bridgeport Sound Tigers (6) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1081.php">Landshut Cannibals (6) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1082.php">Peoria Rivermen (4) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1083.php">Milwaukee Admirals (2) vs Laval Chiefs (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1084.php">Connecticut Whale (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1085.php">Oklahoma City Barons (4) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1086.php">Adirondack Phantoms (4) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1087.php">Portland Pirates (2) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1088.php">Chicago Wolves (1) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1089.php">Lake Erie Monsters (3) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1090.php">Gatineau Olympiques (1) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1091.php">Rochester Americans (4) vs Roberval Dwarfs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 136</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1044.php">Los Angeles Kings (4) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1045.php">Minnesota Wild (3) vs Arizona Coyotes (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1046.php">New York Islanders (4) vs New York Rangers (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1047.php">Quebec Nordiques (5) vs Tampa Bay Lightning (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1048.php">Seattle Saints (1) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1049.php">St. Louis Blues (4) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1050.php">Calgary Flames (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1051.php">Detroit Red Wings (0) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1052.php">Carolina Hurricanes (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1053.php">Philadelphia Flyers (4) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1054.php">Buffalo Sabres (3) vs Toronto Maple Leafs (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1092.php">Providence Bruins (5) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1093.php">Albany Devils (4) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1094.php">Grand Rapids Griffins (5) vs Peoria Rivermen (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1095.php">Wilkes-Barre/Scranton Penguins (1) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1096.php">Rockford IceHogs (3) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1097.php">Binghamton Senators (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1098.php">Chicago Wolves (1) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1099.php">Rouyn-Noranda Huskies (4) vs Houston Aeros (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 137</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1055.php">Columbus Blue Jackets (3) vs Los Angeles Kings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1056.php">Carolina Hurricanes (2) vs Quebec Nordiques (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1057.php">Dallas Stars (4) vs Seattle Saints (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1100.php">Roberval Dwarfs (3) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1101.php">Las Vegas Gamblers (3) vs Oklahoma City Barons (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1102.php">Gatineau Olympiques (3) vs Portland Pirates (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1103.php">Rochester Americans (3) vs Manitoba Moose (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1104.php">Mercer Island Archangels (4) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1105.php">Charlotte Checkers (2) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1106.php">Houston Aeros (4) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1107.php">Rockford IceHogs (2) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1108.php">Springfield Falcons (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1109.php">San Antonio Rampage (2) vs Binghamton Senators (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 138</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1058.php">Edmonton Oilers (3) vs Detroit Red Wings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1059.php">San Jose Sharks (6) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1060.php">Chicago Blackhawks (4) vs Ottawa Senators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1061.php">Arizona Coyotes (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1062.php">Montreal Canadiens (1) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1063.php">New York Rangers (2) vs New Jersey Devils (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1064.php">Boston Bruins (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1065.php">Buffalo Sabres (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1066.php">St. Louis Blues (2) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1067.php">Toronto Maple Leafs (5) vs Calgary Flames (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1110.php">Chicoutimi Saguenéens (3) vs Albany Devils (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1111.php">Grand Rapids Griffins (3) vs Wilkes-Barre/Scranton Penguins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1112.php">Rouyn-Noranda Huskies (1) vs Gatineau Olympiques (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 139</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1068.php">Los Angeles Kings (4) vs Nashville Predators (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1069.php">Ottawa Senators (3) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1070.php">Winnipeg Jets (1) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1071.php">Anaheim Ducks (5) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1072.php">Toronto Maple Leafs (1) vs Carolina Hurricanes (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1073.php">Quebec Nordiques (0) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1074.php">Florida Panthers (1) vs Columbus Blue Jackets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1113.php">Portland Pirates (4) vs Chicago Wolves (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1114.php">Charlotte Checkers (2) vs Rochester Americans (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1115.php">Joliette Sportif (4) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1116.php">Adirondack Phantoms (2) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1117.php">Lake Erie Monsters (5) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1118.php">Connecticut Whale (3) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1119.php">Las Vegas Gamblers (3) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1120.php">Springfield Falcons (5) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1121.php">Oklahoma City Barons (5) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1122.php">San Antonio Rampage (1) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1123.php">Providence Bruins (2) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1124.php">Albany Devils (1) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1125.php">Chicoutimi Saguenéens (4) vs Norfolk Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 140</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1075.php">New York Rangers (2) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1076.php">Minnesota Wild (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1077.php">Vancouver Canucks (0) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1078.php">Pittsburgh Penguins (2) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1079.php">San Jose Sharks (1) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1080.php">New Jersey Devils (4) vs Boston Bruins (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1081.php">Winnipeg Jets (1) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1082.php">Detroit Red Wings (3) vs Seattle Saints (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1083.php">Philadelphia Flyers (3) vs Anaheim Ducks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1126.php">Wilkes-Barre/Scranton Penguins (1) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1127.php">Binghamton Senators (3) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1128.php">Trois-Rivières Draveurs (2) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1129.php">Mercer Island Archangels (5) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1130.php">Milwaukee Admirals (1) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1131.php">Roberval Dwarfs (3) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1132.php">Portland Pirates (5) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1133.php">Peoria Rivermen (1) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1134.php">San Antonio Rampage (4) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1135.php">Chicago Wolves (2) vs Adirondack Phantoms (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4"><b>----------- Trade Deadline --- Trades can’t be done after this day is simulated!</b></td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 141</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1084.php">Montreal Canadiens (1) vs New York Rangers (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1085.php">Dallas Stars (1) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1086.php">Florida Panthers (1) vs Quebec Nordiques (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1087.php">Calgary Flames (5) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1088.php">Seattle Saints (2) vs Detroit Red Wings (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1089.php">New Jersey Devils (3) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1090.php">St. Louis Blues (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1091.php">Minnesota Wild (2) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1092.php">Arizona Coyotes (3) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1093.php">Toronto Maple Leafs (0) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1094.php">Nashville Predators (3) vs Carolina Hurricanes (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1136.php">Gatineau Olympiques (4) vs Oklahoma City Barons (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1137.php">Rouyn-Noranda Huskies (2) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1138.php">Lake Erie Monsters (3) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1139.php">Chicoutimi Saguenéens (1) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1140.php">Binghamton Senators (1) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1141.php">Manitoba Moose (2) vs Connecticut Whale (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 142</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1095.php">Calgary Flames (2) vs Edmonton Oilers (0)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1096.php">Washington Capitals (3) vs Vancouver Canucks (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1142.php">Grand Rapids Griffins (1) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1143.php">Houston Aeros (5) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1144.php">Laval Chiefs (2) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1145.php">Las Vegas Gamblers (1) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1146.php">Charlotte Checkers (3) vs Chicago Wolves (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 143</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1097.php">Chicago Blackhawks (4) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1098.php">San Jose Sharks (0) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1099.php">Buffalo Sabres (5) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1100.php">Montreal Canadiens (1) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1101.php">Pittsburgh Penguins (1) vs Tampa Bay Lightning (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1102.php">Carolina Hurricanes (2) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1103.php">Seattle Saints (4) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1104.php">Ottawa Senators (2) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1105.php">Winnipeg Jets (5) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1106.php">Washington Capitals (1) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1107.php">Arizona Coyotes (2) vs Boston Bruins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1147.php">Trois-Rivières Draveurs (2) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1148.php">Milwaukee Admirals (5) vs Mercer Island Archangels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1149.php">Norfolk Admirals (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1150.php">Oklahoma City Barons (2) vs Peoria Rivermen (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1151.php">Albany Devils (7) vs Rouyn-Noranda Huskies (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1152.php">Gatineau Olympiques (4) vs Chicoutimi Saguenéens (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1153.php">Laval Chiefs (2) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1154.php">Providence Bruins (3) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1155.php">Portland Pirates (4) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1156.php">Connecticut Whale (4) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1157.php">Las Vegas Gamblers (2) vs Springfield Falcons (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1158.php">Rochester Americans (0) vs Manitoba Moose (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 144</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1108.php">Anaheim Ducks (3) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1109.php">Detroit Red Wings (1) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1110.php">Edmonton Oilers (2) vs Chicago Blackhawks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1111.php">Los Angeles Kings (1) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1112.php">Vancouver Canucks (5) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1113.php">New York Rangers (3) vs Quebec Nordiques (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1159.php">Milwaukee Admirals (3) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1160.php">Rockford IceHogs (4) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1161.php">San Antonio Rampage (0) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1162.php">Albany Devils (2) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1163.php">Chicago Wolves (1) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1164.php">Providence Bruins (4) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1165.php">Bridgeport Sound Tigers (5) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1166.php">Adirondack Phantoms (4) vs Connecticut Whale (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1167.php">Binghamton Senators (5) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1168.php">Mercer Island Archangels (1) vs Lake Erie Monsters (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 145</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1114.php">Colorado Avalanche (1) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1115.php">Minnesota Wild (2) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1116.php">San Jose Sharks (1) vs Anaheim Ducks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1117.php">Boston Bruins (5) vs Seattle Saints (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1169.php">Chicago Wolves (3) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1170.php">Grand Rapids Griffins (4) vs San Antonio Rampage (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1171.php">Rouyn-Noranda Huskies (3) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1172.php">Landshut Cannibals (1) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1173.php">Springfield Falcons (4) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1174.php">Joliette Sportif (5) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1175.php">Mercer Island Archangels (2) vs Portland Pirates (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 146</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1118.php">Quebec Nordiques (5) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1119.php">Winnipeg Jets (5) vs Detroit Red Wings (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1120.php">Tampa Bay Lightning (6) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1121.php">New Jersey Devils (7) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1122.php">Ottawa Senators (2) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1123.php">Edmonton Oilers (3) vs Nashville Predators (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1124.php">Carolina Hurricanes (0) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1125.php">Vancouver Canucks (6) vs Toronto Maple Leafs (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1126.php">Columbus Blue Jackets (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1127.php">Calgary Flames (2) vs Dallas Stars (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1128.php">St. Louis Blues (3) vs Minnesota Wild (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1176.php">Wilkes-Barre/Scranton Penguins (4) vs Providence Bruins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1177.php">Lake Erie Monsters (5) vs Peoria Rivermen (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1178.php">Roberval Dwarfs (3) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1179.php">Albany Devils (1) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1180.php">Adirondack Phantoms (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1181.php">Rockford IceHogs (2) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1182.php">Joliette Sportif (3) vs Rouyn-Noranda Huskies (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 147</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1129.php">Seattle Saints (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1130.php">Montreal Canadiens (0) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1131.php">Colorado Avalanche (4) vs Chicago Blackhawks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1132.php">New York Rangers (1) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1133.php">Philadelphia Flyers (4) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1134.php">Arizona Coyotes (4) vs Edmonton Oilers (5)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1183.php">Landshut Cannibals (3) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1184.php">Portland Pirates (3) vs Mercer Island Archangels (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1185.php">Trois-Rivières Draveurs (3) vs Charlotte Checkers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1186.php">Connecticut Whale (2) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1187.php">San Antonio Rampage (1) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1188.php">Rochester Americans (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1189.php">Gatineau Olympiques (5) vs Oklahoma City Barons (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1190.php">Laval Chiefs (5) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1191.php">Providence Bruins (3) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1192.php">Binghamton Senators (3) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1193.php">Peoria Rivermen (3) vs Milwaukee Admirals (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 148</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1135.php">New York Islanders (1) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1136.php">Florida Panthers (3) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1137.php">Anaheim Ducks (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1138.php">Montreal Canadiens (1) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1139.php">Dallas Stars (5) vs Calgary Flames (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1194.php">Bridgeport Sound Tigers (5) vs Joliette Sportif (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1195.php">Trois-Rivières Draveurs (3) vs Adirondack Phantoms (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1196.php">Oklahoma City Barons (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1197.php">Rouyn-Noranda Huskies (6) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1198.php">Rochester Americans (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1199.php">Gatineau Olympiques (6) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1200.php">Connecticut Whale (3) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1201.php">Springfield Falcons (3) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1202.php">Houston Aeros (0) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1203.php">Norfolk Admirals (1) vs Landshut Cannibals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 149</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1140.php">Boston Bruins (3) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1141.php">Pittsburgh Penguins (4) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1142.php">Buffalo Sabres (2) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1143.php">Minnesota Wild (3) vs Los Angeles Kings (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1204.php">Laval Chiefs (2) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1205.php">Binghamton Senators (0) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1206.php">San Antonio Rampage (5) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1207.php">Adirondack Phantoms (5) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1208.php">Bridgeport Sound Tigers (3) vs Peoria Rivermen (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1209.php">Rockford IceHogs (1) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1210.php">Las Vegas Gamblers (0) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1211.php">Wilkes-Barre/Scranton Penguins (3) vs Rochester Americans (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1212.php">Milwaukee Admirals (4) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1213.php">Joliette Sportif (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1214.php">Portland Pirates (3) vs Charlotte Checkers (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 150</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1144.php">Edmonton Oilers (6) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1145.php">New Jersey Devils (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1146.php">Carolina Hurricanes (5) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1147.php">Anaheim Ducks (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1148.php">Tampa Bay Lightning (2) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1149.php">Columbus Blue Jackets (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1150.php">Winnipeg Jets (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1151.php">Chicago Blackhawks (3) vs Detroit Red Wings (0)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1152.php">Pittsburgh Penguins (2) vs New York Islanders (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1153.php">Ottawa Senators (3) vs Philadelphia Flyers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1154.php">Toronto Maple Leafs (2) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1155.php">New York Rangers (0) vs Florida Panthers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1215.php">Lake Erie Monsters (4) vs Laval Chiefs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1216.php">Springfield Falcons (5) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1217.php">Las Vegas Gamblers (1) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1218.php">Adirondack Phantoms (2) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1219.php">Charlotte Checkers (3) vs Roberval Dwarfs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1220.php">Rochester Americans (3) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1221.php">Milwaukee Admirals (3) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1222.php">Oklahoma City Barons (3) vs Joliette Sportif (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1223</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1223.php">Chicoutimi Saguenéens (3) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1224.php">Connecticut Whale (1) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1225.php">Albany Devils (1) vs Wilkes-Barre/Scranton Penguins (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 151</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1156.php">Los Angeles Kings (4) vs Anaheim Ducks (3)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1157.php">St. Louis Blues (4) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1158.php">Florida Panthers (3) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1159.php">Calgary Flames (0) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1160.php">Edmonton Oilers (3) vs Vancouver Canucks (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1161.php">Philadelphia Flyers (3) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1162.php">Buffalo Sabres (2) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1163.php">Tampa Bay Lightning (3) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1164.php">New Jersey Devils (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1165.php">Quebec Nordiques (4) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1166.php">Nashville Predators (5) vs Chicago Blackhawks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1226.php">Rockford IceHogs (2) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1227.php">Gatineau Olympiques (5) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1228.php">Roberval Dwarfs (2) vs Trois-Rivières Draveurs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1229.php">Providence Bruins (2) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1230.php">Norfolk Admirals (4) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1231.php">San Antonio Rampage (1) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1232.php">Albany Devils (1) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1233.php">Binghamton Senators (2) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1234.php">Mercer Island Archangels (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1235.php">Joliette Sportif (3) vs Las Vegas Gamblers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1236.php">Rouyn-Noranda Huskies (5) vs Laval Chiefs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 152</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1167.php">New York Islanders (8) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1168.php">Minnesota Wild (2) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1169.php">Vancouver Canucks (3) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1170.php">New York Rangers (3) vs Buffalo Sabres (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1237.php">Grand Rapids Griffins (2) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1238.php">Milwaukee Admirals (1) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1239.php">Wilkes-Barre/Scranton Penguins (3) vs Bridgeport Sound Tigers (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1240.php">Norfolk Admirals (1) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1241.php">Las Vegas Gamblers (3) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1242.php">Springfield Falcons (2) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1243.php">Houston Aeros (3) vs Mercer Island Archangels (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1244.php">Providence Bruins (4) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1245.php">Chicago Wolves (4) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1246.php">Manitoba Moose (1) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1247.php">Chicoutimi Saguenéens (1) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1248.php">Laval Chiefs (1) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1249.php">Adirondack Phantoms (2) vs Charlotte Checkers (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 153</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1171.php">Toronto Maple Leafs (2) vs Montreal Canadiens (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1172.php">Nashville Predators (2) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1173.php">New York Islanders (4) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1174.php">Philadelphia Flyers (1) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1175.php">Columbus Blue Jackets (4) vs Boston Bruins (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1176.php">Arizona Coyotes (4) vs Edmonton Oilers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1177.php">San Jose Sharks (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1178.php">Seattle Saints (2) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1179.php">Winnipeg Jets (3) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1180.php">Colorado Avalanche (2) vs Detroit Red Wings (5)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1250.php">Charlotte Checkers (2) vs Manitoba Moose (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1251.php">Portland Pirates (2) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1252.php">Trois-Rivières Draveurs (2) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1253.php">Rochester Americans (4) vs Grand Rapids Griffins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 154</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1181.php">Buffalo Sabres (4) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1182.php">Vancouver Canucks (3) vs Anaheim Ducks (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1254.php">Manitoba Moose (3) vs Norfolk Admirals (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1255.php">Roberval Dwarfs (2) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1256.php">Las Vegas Gamblers (3) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1257.php">Grand Rapids Griffins (3) vs Houston Aeros (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1258.php">Peoria Rivermen (1) vs Milwaukee Admirals (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 155</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1183.php">Quebec Nordiques (5) vs Seattle Saints (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1184.php">St. Louis Blues (2) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1185.php">Carolina Hurricanes (2) vs New York Islanders (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1186.php">Toronto Maple Leafs (3) vs Ottawa Senators (1)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1187.php">Calgary Flames (3) vs Philadelphia Flyers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1188.php">Minnesota Wild (4) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1189.php">Detroit Red Wings (1) vs Winnipeg Jets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1190.php">Columbus Blue Jackets (4) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1191.php">Edmonton Oilers (3) vs Nashville Predators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1259.php">Springfield Falcons (3) vs Trois-Rivières Draveurs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1260.php">Charlotte Checkers (2) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1261.php">Houston Aeros (2) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1262.php">Milwaukee Admirals (1) vs Gatineau Olympiques (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 156</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1192.php">New York Islanders (3) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1193.php">Dallas Stars (2) vs Chicago Blackhawks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1194.php">Anaheim Ducks (5) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1195.php">Montreal Canadiens (0) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1196.php">Vancouver Canucks (4) vs Calgary Flames (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1263.php">Grand Rapids Griffins (2) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1264.php">San Antonio Rampage (1) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1265.php">Joliette Sportif (5) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1266.php">Roberval Dwarfs (2) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1267.php">Providence Bruins (1) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1268.php">Norfolk Admirals (2) vs Mercer Island Archangels (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1269.php">Chicago Wolves (0) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1270.php">Landshut Cannibals (2) vs Bridgeport Sound Tigers (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1271.php">Wilkes-Barre/Scranton Penguins (3) vs Connecticut Whale (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 157</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1197.php">St. Louis Blues (1) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1198.php">New Jersey Devils (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1199.php">Philadelphia Flyers (4) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1200.php">Ottawa Senators (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1201.php">New York Islanders (1) vs Buffalo Sabres (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1272.php">Connecticut Whale (5) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1273.php">Oklahoma City Barons (2) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1274.php">Houston Aeros (4) vs Albany Devils (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1275.php">Peoria Rivermen (1) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1276.php">Manitoba Moose (3) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1277.php">Joliette Sportif (0) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1278.php">Mercer Island Archangels (2) vs Rouyn-Noranda Huskies (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1279.php">Chicoutimi Saguenéens (1) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1280.php">Landshut Cannibals (4) vs Las Vegas Gamblers (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1281.php">Bridgeport Sound Tigers (3) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1282.php">Roberval Dwarfs (4) vs Trois-Rivières Draveurs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 158</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1202.php">Florida Panthers (1) vs Montreal Canadiens (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1203.php">Arizona Coyotes (3) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1204.php">Seattle Saints (3) vs Edmonton Oilers (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1205.php">New Jersey Devils (4) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1206.php">Colorado Avalanche (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1207.php">Calgary Flames (1) vs Vancouver Canucks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1208.php">Boston Bruins (4) vs Quebec Nordiques (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1209.php">Tampa Bay Lightning (2) vs New York Rangers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1210.php">Chicago Blackhawks (4) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1211.php">Nashville Predators (4) vs Detroit Red Wings (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1283.php">Charlotte Checkers (3) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1284.php">Oklahoma City Barons (5) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1285.php">Portland Pirates (5) vs Grand Rapids Griffins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 159</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1212.php">Edmonton Oilers (7) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1213.php">Minnesota Wild (3) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1214.php">Washington Capitals (2) vs Anaheim Ducks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1215.php">Tampa Bay Lightning (3) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1216.php">Los Angeles Kings (1) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1217.php">Dallas Stars (4) vs Winnipeg Jets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1218.php">Ottawa Senators (5) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1219.php">Quebec Nordiques (2) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1220.php">Detroit Red Wings (2) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1221.php">Boston Bruins (4) vs Toronto Maple Leafs (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1286.php">Charlotte Checkers (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1287.php">Manitoba Moose (3) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1288</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1288.php">Rockford IceHogs (4) vs Springfield Falcons (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1289</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1289.php">Adirondack Phantoms (1) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1290</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1290.php">Grand Rapids Griffins (3) vs Milwaukee Admirals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 160</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1222.php">Montreal Canadiens (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1223</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1223.php">Buffalo Sabres (4) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1224.php">Dallas Stars (3) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1225.php">Philadelphia Flyers (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1226.php">Washington Capitals (3) vs Ottawa Senators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1227.php">Vancouver Canucks (5) vs Calgary Flames (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1291</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1291.php">Springfield Falcons (1) vs Oklahoma City Barons (0)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1292</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1292.php">Lake Erie Monsters (4) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1293</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1293.php">Manitoba Moose (0) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1294</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1294.php">Landshut Cannibals (2) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1295</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1295.php">Charlotte Checkers (2) vs Roberval Dwarfs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 161</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1228.php">Nashville Predators (4) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1229.php">Philadelphia Flyers (1) vs Columbus Blue Jackets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1230.php">Carolina Hurricanes (4) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1231.php">Winnipeg Jets (6) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1232.php">Buffalo Sabres (4) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1233.php">New York Islanders (3) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1234.php">Pittsburgh Penguins (5) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1235.php">Edmonton Oilers (3) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1236.php">Calgary Flames (2) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1237.php">Tampa Bay Lightning (5) vs New York Rangers (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1238.php">Florida Panthers (2) vs Montreal Canadiens (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1296</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1296.php">Norfolk Admirals (4) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1297</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1297.php">Laval Chiefs (3) vs Rouyn-Noranda Huskies (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1298</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1298.php">Milwaukee Admirals (3) vs Peoria Rivermen (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1299</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1299.php">Joliette Sportif (2) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1300</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1300.php">Trois-Rivières Draveurs (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1301</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1301.php">Oklahoma City Barons (5) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1302</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1302.php">Roberval Dwarfs (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1303</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1303.php">Charlotte Checkers (0) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1304</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1304.php">Lake Erie Monsters (2) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1305</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1305.php">Gatineau Olympiques (2) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1306</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1306.php">Wilkes-Barre/Scranton Penguins (4) vs Connecticut Whale (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1307</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1307.php">Manitoba Moose (2) vs Albany Devils (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 162</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1239.php">Minnesota Wild (2) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1240.php">Chicago Blackhawks (3) vs San Jose Sharks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1241.php">Toronto Maple Leafs (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1242.php">St. Louis Blues (3) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1243.php">Los Angeles Kings (4) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1244.php">Boston Bruins (0) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1245.php">Ottawa Senators (3) vs Buffalo Sabres (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1246.php">Winnipeg Jets (4) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1247.php">Nashville Predators (4) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1248.php">Arizona Coyotes (1) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1249.php">Pittsburgh Penguins (4) vs New York Islanders (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1308</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1308.php">Norfolk Admirals (4) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1309</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1309.php">Grand Rapids Griffins (3) vs Rockford IceHogs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1310</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1310.php">Trois-Rivières Draveurs (3) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1311</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1311.php">Joliette Sportif (1) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1312</td><td class="STHSSchedule_FarmLink">
<a href="ASHL8-Farm-1312.php">Houston Aeros (4) vs Mercer Island Archangels (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 163</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1250.php">Ottawa Senators (6) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1251.php">Dallas Stars (1) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1252.php">Florida Panthers (2) vs Carolina Hurricanes (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1253.php">Montreal Canadiens (4) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 164</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1254.php">Calgary Flames (2) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1255.php">Quebec Nordiques (4) vs Toronto Maple Leafs (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1256.php">Minnesota Wild (2) vs Chicago Blackhawks (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 165</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1257.php">New York Islanders (5) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1258.php">Carolina Hurricanes (4) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1259.php">Toronto Maple Leafs (3) vs Nashville Predators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 166</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1260.php">Philadelphia Flyers (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1261.php">Columbus Blue Jackets (2) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1262.php">Pittsburgh Penguins (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1263.php">Winnipeg Jets (1) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1264.php">Colorado Avalanche (2) vs Dallas Stars (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 167</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1265.php">New York Islanders (0) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1266.php">Chicago Blackhawks (2) vs San Jose Sharks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1267.php">Carolina Hurricanes (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1268.php">Florida Panthers (4) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1269.php">Nashville Predators (4) vs St. Louis Blues (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1270.php">Arizona Coyotes (3) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1271.php">Vancouver Canucks (2) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1272.php">Philadelphia Flyers (2) vs Montreal Canadiens (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1273.php">Toronto Maple Leafs (3) vs Washington Capitals (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 168</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1274.php">Anaheim Ducks (2) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1275.php">Boston Bruins (0) vs Tampa Bay Lightning (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 169</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1276.php">Winnipeg Jets (4) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1277.php">Los Angeles Kings (4) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1278.php">New Jersey Devils (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1279.php">New York Rangers (4) vs Seattle Saints (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1280.php">Chicago Blackhawks (1) vs Detroit Red Wings (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1281.php">Ottawa Senators (5) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1282.php">San Jose Sharks (2) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1283.php">Colorado Avalanche (3) vs Dallas Stars (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 170</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1284.php">Dallas Stars (1) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1285.php">New Jersey Devils (1) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1286.php">Columbus Blue Jackets (3) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1287.php">Florida Panthers (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1288</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1288.php">Ottawa Senators (2) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1289</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1289.php">Buffalo Sabres (5) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1290</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1290.php">Montreal Canadiens (2) vs Washington Capitals (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1291</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1291.php">New York Islanders (4) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1292</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1292.php">Chicago Blackhawks (2) vs St. Louis Blues (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 171</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1293</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1293.php">Edmonton Oilers (1) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1294</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1294.php">Winnipeg Jets (4) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1295</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1295.php">Tampa Bay Lightning (4) vs Toronto Maple Leafs (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1296</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1296.php">Nashville Predators (3) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1297</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1297.php">Carolina Hurricanes (0) vs Vancouver Canucks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 172</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1298</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1298.php">Winnipeg Jets (2) vs Calgary Flames (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1299</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1299.php">Washington Capitals (4) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1300</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1300.php">Vancouver Canucks (2) vs Los Angeles Kings (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 173</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1301</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1301.php">Dallas Stars (2) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1302</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1302.php">Colorado Avalanche (2) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1303</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1303.php">Calgary Flames (2) vs Quebec Nordiques (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1304</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1304.php">Pittsburgh Penguins (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1305</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1305.php">Columbus Blue Jackets (2) vs San Jose Sharks (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1306</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1306.php">Philadelphia Flyers (3) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1307</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1307.php">New York Islanders (4) vs Ottawa Senators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1308</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1308.php">Minnesota Wild (6) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1309</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1309.php">St. Louis Blues (3) vs Anaheim Ducks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1310</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1310.php">New York Rangers (2) vs Montreal Canadiens (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1311</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1311.php">Toronto Maple Leafs (4) vs Buffalo Sabres (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 174</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1312</td><td class="STHSSchedule_ProLink">
<a href="ASHL8-1312.php">Pittsburgh Penguins (3) vs Boston Bruins (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 175</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
</table>
<?php include "Footer.php";?>
