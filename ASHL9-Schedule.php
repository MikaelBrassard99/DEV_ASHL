<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Schedule</title>
<script src="ASHL9.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL9-STHS.db - ASHL9-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="ASHL RSS Feed" href="http://www.ashligue.com/site//RSSFeed.xml" />
<link href="ASHL9.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL9-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL9-STHSCareerStat.db";
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
<a href="ASHL9-1.php">Calgary Flames (3) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-2.php">Philadelphia Flyers (1) vs New York Rangers (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-3.php">Boston Bruins (1) vs Toronto Maple Leafs (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1.php">Mercer Island Archangels (2) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-2.php">San Antonio Rampage (1) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-3.php">Rouyn-Noranda Huskies (1) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-4.php">Laval Chiefs (4) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-5.php">Peoria Rivermen (2) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-6.php">Milwaukee Admirals (7) vs Las Vegas Gamblers (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-4.php">Vancouver Canucks (2) vs Chicago Blackhawks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-5.php">Buffalo Sabres (4) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-6.php">Dallas Stars (2) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-7.php">Vegas Golden Knights (3) vs Detroit Red Wings (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-7.php">Chicago Wolves (2) vs Paradise Dark Angels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-8.php">Springfield Falcons (4) vs Rockford IceHogs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-9.php">Grand Rapids Griffins (4) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-10.php">Trois-Rivières Draveurs (2) vs Rochester Americans (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-11.php">Chicoutimi Saguenéens (2) vs Charlotte Checkers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-12.php">Albany Devils (3) vs Binghamton Senators (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-8.php">Arizona Coyotes (4) vs Edmonton Oilers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-9.php">Vancouver Canucks (4) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-10.php">Columbus Blue Jackets (5) vs Quebec Nordiques (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-11.php">Colorado Avalanche (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-12.php">Winnipeg Jets (5) vs Los Angeles Kings (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-13.php">New Jersey Devils (2) vs Pittsburgh Penguins (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-13.php">Springfield Falcons (5) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-14.php">Adirondack Phantoms (3) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-15.php">Connecticut Whale (3) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-16.php">Charlotte Checkers (6) vs Wilkes-Barre/Scranton Penguins (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-17.php">Manitoba Moose (4) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-18.php">Trois-Rivières Draveurs (2) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-19.php">San Antonio Rampage (5) vs Norfolk Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-14.php">New York Rangers (4) vs New York Islanders (1)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-15.php">Pittsburgh Penguins (2) vs Tampa Bay Lightning (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-16.php">Edmonton Oilers (0) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-17.php">St. Louis Blues (3) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-18.php">Ottawa Senators (2) vs Montreal Canadiens (8)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-20.php">Paradise Dark Angels (5) vs Lake Erie Monsters (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-21.php">Mercer Island Archangels (2) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-22.php">Landshut Cannibals (2) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-23.php">Binghamton Senators (2) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-24.php">Roberval Dwarfs (2) vs Peoria Rivermen (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-19.php">Buffalo Sabres (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-20.php">New York Islanders (1) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-21.php">Boston Bruins (0) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-22.php">Anaheim Ducks (2) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-23.php">Vegas Golden Knights (2) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-24.php">Chicago Blackhawks (2) vs Winnipeg Jets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-25.php">Portland Pirates (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-26.php">Albany Devils (5) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-27.php">Rouyn-Noranda Huskies (4) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-28.php">Norfolk Admirals (2) vs Connecticut Whale (8)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-25.php">Washington Capitals (2) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-26.php">Tampa Bay Lightning (6) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-27.php">Seattle Saints (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-28.php">Vancouver Canucks (5) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-29.php">Detroit Red Wings (2) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-30.php">Minnesota Wild (5) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-31.php">Florida Panthers (3) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-32.php">Pittsburgh Penguins (2) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-33.php">Quebec Nordiques (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-34.php">Los Angeles Kings (2) vs Nashville Predators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-35.php">Winnipeg Jets (5) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-36.php">Anaheim Ducks (5) vs San Jose Sharks (0)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-29.php">Bridgeport Sound Tigers (3) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-30.php">Oklahoma City Barons (3) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-31.php">Rochester Americans (2) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-32.php">Joliette Sportif (1) vs Springfield Falcons (0)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-33.php">Grand Rapids Griffins (2) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-34.php">Houston Aeros (3) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-35.php">Binghamton Senators (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-36.php">Manitoba Moose (2) vs Gatineau Olympiques (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-37.php">Peoria Rivermen (4) vs Lake Erie Monsters (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-37.php">San Jose Sharks (4) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-38.php">Quebec Nordiques (5) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-39.php">Columbus Blue Jackets (1) vs New Jersey Devils (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-40.php">Edmonton Oilers (1) vs Chicago Blackhawks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-38.php">Rockford IceHogs (3) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-39.php">Norfolk Admirals (4) vs Landshut Cannibals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-40.php">Joliette Sportif (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-41.php">Portland Pirates (3) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-42.php">Laval Chiefs (3) vs Milwaukee Admirals (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-43.php">Adirondack Phantoms (6) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-44.php">Binghamton Senators (3) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-45.php">Bridgeport Sound Tigers (2) vs Charlotte Checkers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-46.php">Mercer Island Archangels (1) vs Paradise Dark Angels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-47.php">Providence Bruins (3) vs Rochester Americans (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-41.php">Philadelphia Flyers (1) vs New York Rangers (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-42.php">Minnesota Wild (0) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-43.php">Toronto Maple Leafs (3) vs New York Islanders (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-44.php">Ottawa Senators (4) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-45.php">Chicago Blackhawks (3) vs Dallas Stars (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-46.php">Montreal Canadiens (0) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-47.php">Pittsburgh Penguins (3) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-48.php">Detroit Red Wings (3) vs St. Louis Blues (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-49.php">Los Angeles Kings (5) vs Arizona Coyotes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-50.php">Seattle Saints (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-51.php">Columbus Blue Jackets (3) vs Boston Bruins (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-48.php">Chicago Wolves (1) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-49.php">Lake Erie Monsters (5) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-50.php">Grand Rapids Griffins (0) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-51.php">Trois-Rivières Draveurs (3) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-52.php">Wilkes-Barre/Scranton Penguins (3) vs Albany Devils (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-52.php">New York Islanders (1) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-53.php">Vegas Golden Knights (3) vs Anaheim Ducks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-54.php">Detroit Red Wings (1) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-55.php">Seattle Saints (1) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-56.php">New York Rangers (4) vs Ottawa Senators (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-57.php">Vancouver Canucks (5) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-58.php">Carolina Hurricanes (4) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-59.php">New Jersey Devils (4) vs Philadelphia Flyers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-60.php">Tampa Bay Lightning (3) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-61.php">St. Louis Blues (4) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-62.php">Arizona Coyotes (4) vs Colorado Avalanche (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-53.php">Albany Devils (3) vs Adirondack Phantoms (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-54.php">Connecticut Whale (4) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-55.php">Portland Pirates (1) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-56.php">Roberval Dwarfs (8) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-57.php">Landshut Cannibals (4) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-58.php">Rouyn-Noranda Huskies (4) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-59.php">Las Vegas Gamblers (4) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-60.php">Paradise Dark Angels (5) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-61.php">Wilkes-Barre/Scranton Penguins (1) vs Grand Rapids Griffins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-63.php">Florida Panthers (2) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-64.php">Dallas Stars (2) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-65.php">Washington Capitals (3) vs Columbus Blue Jackets (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-66.php">Boston Bruins (6) vs Montreal Canadiens (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-67.php">Buffalo Sabres (5) vs Toronto Maple Leafs (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-68.php">San Jose Sharks (1) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-69.php">New Jersey Devils (4) vs Carolina Hurricanes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-70.php">Chicago Blackhawks (4) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-71.php">Winnipeg Jets (4) vs Edmonton Oilers (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-62.php">Oklahoma City Barons (2) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-63.php">Providence Bruins (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-64.php">Connecticut Whale (3) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-65.php">Paradise Dark Angels (3) vs Rouyn-Noranda Huskies (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-72.php">San Jose Sharks (4) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-73.php">Los Angeles Kings (4) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-74.php">Colorado Avalanche (2) vs Vancouver Canucks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-75.php">Minnesota Wild (4) vs Dallas Stars (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-76.php">New Jersey Devils (2) vs New York Rangers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-66.php">Springfield Falcons (0) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-67.php">Manitoba Moose (4) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-68.php">Norfolk Admirals (2) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-69.php">Peoria Rivermen (2) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-70.php">Chicago Wolves (3) vs Rockford IceHogs (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-71.php">Roberval Dwarfs (4) vs Rochester Americans (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-72.php">Adirondack Phantoms (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-73.php">Oklahoma City Barons (6) vs Lake Erie Monsters (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-74.php">Laval Chiefs (7) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-75.php">San Antonio Rampage (4) vs Houston Aeros (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-77.php">New York Islanders (5) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-78.php">Chicago Blackhawks (3) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-79.php">New York Rangers (2) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-80.php">Montreal Canadiens (1) vs Philadelphia Flyers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-81.php">Quebec Nordiques (5) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-82.php">Florida Panthers (2) vs Columbus Blue Jackets (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-83.php">Toronto Maple Leafs (2) vs Buffalo Sabres (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-76.php">Bridgeport Sound Tigers (4) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-77.php">Albany Devils (3) vs Wilkes-Barre/Scranton Penguins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-78.php">Trois-Rivières Draveurs (3) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-79.php">Mercer Island Archangels (4) vs Joliette Sportif (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-80.php">Las Vegas Gamblers (2) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-81.php">Norfolk Admirals (0) vs Binghamton Senators (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-84.php">Arizona Coyotes (5) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-85.php">Colorado Avalanche (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-86.php">Pittsburgh Penguins (2) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-87.php">Vancouver Canucks (3) vs Winnipeg Jets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-82.php">Gatineau Olympiques (2) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-83.php">Milwaukee Admirals (3) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-84.php">Trois-Rivières Draveurs (3) vs Connecticut Whale (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-85.php">Charlotte Checkers (5) vs Manitoba Moose (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-86.php">San Antonio Rampage (4) vs Chicago Wolves (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-88.php">Columbus Blue Jackets (1) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-89.php">Dallas Stars (4) vs Los Angeles Kings (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-87.php">Rouyn-Noranda Huskies (2) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-88.php">Binghamton Senators (4) vs Roberval Dwarfs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-89.php">Adirondack Phantoms (3) vs Bridgeport Sound Tigers (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-90.php">Joliette Sportif (0) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-91.php">Portland Pirates (3) vs Springfield Falcons (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-90.php">Pittsburgh Penguins (2) vs New York Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-91.php">Nashville Predators (2) vs Vegas Golden Knights (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-92.php">St. Louis Blues (2) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-93.php">Seattle Saints (1) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-94.php">Buffalo Sabres (3) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-95.php">Winnipeg Jets (4) vs Chicago Blackhawks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-96.php">Anaheim Ducks (3) vs Arizona Coyotes (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-97.php">Edmonton Oilers (4) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-98.php">Calgary Flames (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-99.php">Philadelphia Flyers (5) vs Toronto Maple Leafs (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-92.php">Las Vegas Gamblers (6) vs Paradise Dark Angels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-93.php">Houston Aeros (4) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-94.php">Landshut Cannibals (3) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-95.php">Rochester Americans (4) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-96.php">Wilkes-Barre/Scranton Penguins (4) vs Norfolk Admirals (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-100.php">Quebec Nordiques (4) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-101.php">Colorado Avalanche (4) vs Nashville Predators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-102.php">Boston Bruins (4) vs Tampa Bay Lightning (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-103.php">Florida Panthers (1) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-104.php">Washington Capitals (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-105.php">Minnesota Wild (1) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-106.php">Seattle Saints (3) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-107.php">Columbus Blue Jackets (4) vs New York Rangers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-108.php">Anaheim Ducks (1) vs Los Angeles Kings (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-109.php">Vancouver Canucks (4) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-110.php">Philadelphia Flyers (1) vs New York Islanders (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-97.php">Providence Bruins (4) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-98.php">Grand Rapids Griffins (3) vs Rouyn-Noranda Huskies (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-99.php">Albany Devils (3) vs Trois-Rivières Draveurs (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-111.php">Winnipeg Jets (3) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-112.php">Vegas Golden Knights (3) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-113.php">Arizona Coyotes (5) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-114.php">New Jersey Devils (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-115.php">Carolina Hurricanes (4) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-116.php">Toronto Maple Leafs (2) vs Chicago Blackhawks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-100.php">Mercer Island Archangels (2) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-101.php">Connecticut Whale (2) vs Chicoutimi Saguenéens (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-102.php">Rouyn-Noranda Huskies (5) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-103.php">Oklahoma City Barons (1) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-104.php">Peoria Rivermen (3) vs Milwaukee Admirals (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-117.php">Boston Bruins (1) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-118.php">Los Angeles Kings (3) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-119.php">Dallas Stars (6) vs Colorado Avalanche (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-120.php">Montreal Canadiens (4) vs Quebec Nordiques (3)</a>  - OT (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-121.php">San Jose Sharks (3) vs Anaheim Ducks (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-122.php">Columbus Blue Jackets (2) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-123.php">Chicago Blackhawks (0) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-124.php">New York Rangers (6) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-125.php">Ottawa Senators (4) vs Pittsburgh Penguins (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-126.php">Detroit Red Wings (1) vs Arizona Coyotes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-105.php">Bridgeport Sound Tigers (1) vs Rochester Americans (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-106.php">Wilkes-Barre/Scranton Penguins (6) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-107.php">Chicago Wolves (4) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-108.php">Laval Chiefs (2) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-109.php">Norfolk Admirals (4) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-110.php">Binghamton Senators (2) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-111.php">Paradise Dark Angels (5) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-112.php">Manitoba Moose (2) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-113.php">San Antonio Rampage (4) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-114.php">Albany Devils (1) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-115.php">Mercer Island Archangels (1) vs Grand Rapids Griffins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-127.php">Vancouver Canucks (5) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-128.php">Edmonton Oilers (4) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-129.php">Washington Capitals (2) vs Boston Bruins (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-130.php">Toronto Maple Leafs (2) vs Columbus Blue Jackets (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-131.php">Minnesota Wild (2) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-132.php">Buffalo Sabres (1) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-133.php">New York Islanders (4) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-134.php">Colorado Avalanche (2) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-135.php">Ottawa Senators (2) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-136.php">Quebec Nordiques (2) vs Montreal Canadiens (3)</a>  - SO (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-116.php">Gatineau Olympiques (1) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-117.php">Trois-Rivières Draveurs (5) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-118.php">Portland Pirates (5) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-119.php">Adirondack Phantoms (3) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-120.php">Norfolk Admirals (0) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-121.php">Lake Erie Monsters (2) vs Laval Chiefs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-122.php">Chicoutimi Saguenéens (3) vs Manitoba Moose (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-123.php">Rochester Americans (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-124.php">Springfield Falcons (3) vs Paradise Dark Angels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-125.php">Rockford IceHogs (1) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-126.php">Milwaukee Admirals (3) vs Binghamton Senators (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-137.php">San Jose Sharks (4) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-138.php">Calgary Flames (2) vs Los Angeles Kings (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-139.php">Pittsburgh Penguins (4) vs New York Rangers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-140.php">Vegas Golden Knights (6) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-141.php">Tampa Bay Lightning (4) vs Florida Panthers (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-142.php">Nashville Predators (0) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-143.php">New York Islanders (2) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-144.php">Carolina Hurricanes (6) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-145.php">St. Louis Blues (4) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-146.php">Seattle Saints (1) vs Anaheim Ducks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-147.php">Winnipeg Jets (1) vs Chicago Blackhawks (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-127.php">Grand Rapids Griffins (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-128.php">Milwaukee Admirals (3) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-129.php">Roberval Dwarfs (2) vs Trois-Rivières Draveurs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-130.php">Landshut Cannibals (2) vs Albany Devils (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-148.php">Buffalo Sabres (3) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-149.php">Columbus Blue Jackets (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-150.php">Minnesota Wild (4) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-151.php">Boston Bruins (4) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-152.php">Los Angeles Kings (1) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-153.php">Florida Panthers (3) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-154.php">Dallas Stars (3) vs Montreal Canadiens (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-131.php">Laval Chiefs (5) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-132.php">Connecticut Whale (4) vs Norfolk Admirals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-133.php">Peoria Rivermen (2) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-134.php">Chicoutimi Saguenéens (0) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-135.php">Gatineau Olympiques (4) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-136.php">Joliette Sportif (2) vs Lake Erie Monsters (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-137.php">Binghamton Senators (0) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-138.php">Manitoba Moose (5) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-139.php">Adirondack Phantoms (3) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-140.php">Grand Rapids Griffins (4) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-141.php">Roberval Dwarfs (4) vs Bridgeport Sound Tigers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-155.php">Vegas Golden Knights (4) vs San Jose Sharks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-156.php">New York Rangers (4) vs New York Islanders (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-157.php">New Jersey Devils (3) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-158.php">Seattle Saints (1) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-159.php">Nashville Predators (3) vs Winnipeg Jets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-142.php">Paradise Dark Angels (4) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-143.php">Wilkes-Barre/Scranton Penguins (2) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-144.php">San Antonio Rampage (4) vs Landshut Cannibals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-145.php">Mercer Island Archangels (5) vs Springfield Falcons (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-146.php">Rouyn-Noranda Huskies (5) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-147.php">Lake Erie Monsters (4) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-148.php">Rockford IceHogs (1) vs Joliette Sportif (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-149.php">Las Vegas Gamblers (4) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-150.php">Albany Devils (4) vs Connecticut Whale (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-160.php">Washington Capitals (3) vs Boston Bruins (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-161.php">Detroit Red Wings (5) vs Minnesota Wild (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-162.php">Los Angeles Kings (4) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-163.php">Quebec Nordiques (5) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-164.php">Arizona Coyotes (5) vs Vancouver Canucks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-165.php">Anaheim Ducks (5) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-166.php">Tampa Bay Lightning (2) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-167.php">Florida Panthers (3) vs Carolina Hurricanes (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-168.php">Edmonton Oilers (2) vs Nashville Predators (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-169.php">Montreal Canadiens (3) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-170.php">Philadelphia Flyers (2) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-171.php">Dallas Stars (4) vs St. Louis Blues (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-151.php">Oklahoma City Barons (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-152.php">Roberval Dwarfs (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-153.php">Providence Bruins (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-154.php">Houston Aeros (2) vs Paradise Dark Angels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-155.php">Chicago Wolves (3) vs Laval Chiefs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-156.php">Bridgeport Sound Tigers (4) vs Trois-Rivières Draveurs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-172.php">Pittsburgh Penguins (5) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-173.php">Buffalo Sabres (4) vs New York Rangers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-157.php">Charlotte Checkers (2) vs Norfolk Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-158.php">Rochester Americans (2) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-159.php">Landshut Cannibals (4) vs San Antonio Rampage (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-174.php">St. Louis Blues (3) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-175.php">Philadelphia Flyers (4) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-176.php">Montreal Canadiens (2) vs Detroit Red Wings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-177.php">Calgary Flames (3) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-178.php">Boston Bruins (4) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-179.php">Washington Capitals (1) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-180.php">Arizona Coyotes (1) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-181.php">New Jersey Devils (0) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-182.php">Toronto Maple Leafs (6) vs Florida Panthers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-183.php">Minnesota Wild (4) vs Winnipeg Jets (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-160.php">Connecticut Whale (5) vs Adirondack Phantoms (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-161.php">Rockford IceHogs (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-162.php">Trois-Rivières Draveurs (4) vs Binghamton Senators (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-163.php">Albany Devils (3) vs Roberval Dwarfs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-184.php">Nashville Predators (2) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-185.php">Seattle Saints (3) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-186.php">Vancouver Canucks (4) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-187.php">New York Rangers (4) vs Philadelphia Flyers (7)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-164.php">Oklahoma City Barons (3) vs Mercer Island Archangels (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-165.php">Rochester Americans (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-166.php">Norfolk Admirals (2) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-167.php">Joliette Sportif (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-168.php">Paradise Dark Angels (3) vs Houston Aeros (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-169.php">Milwaukee Admirals (1) vs Lake Erie Monsters (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-188.php">Montreal Canadiens (3) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-189.php">Winnipeg Jets (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-190.php">Pittsburgh Penguins (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-191.php">Anaheim Ducks (3) vs Minnesota Wild (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-170.php">Rouyn-Noranda Huskies (1) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-171.php">Portland Pirates (5) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-172.php">Connecticut Whale (4) vs Rockford IceHogs (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-192.php">Boston Bruins (2) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-193.php">Tampa Bay Lightning (3) vs New Jersey Devils (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-173.php">Grand Rapids Griffins (5) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-174.php">Trois-Rivières Draveurs (2) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-175.php">Joliette Sportif (4) vs Bridgeport Sound Tigers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-176.php">Milwaukee Admirals (1) vs Peoria Rivermen (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-177.php">Charlotte Checkers (1) vs Wilkes-Barre/Scranton Penguins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-178.php">Adirondack Phantoms (4) vs Landshut Cannibals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-179.php">San Antonio Rampage (1) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-180.php">Chicoutimi Saguenéens (2) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-181.php">Paradise Dark Angels (6) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-182.php">Lake Erie Monsters (2) vs Chicago Wolves (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-194.php">St. Louis Blues (2) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-195.php">Florida Panthers (3) vs Pittsburgh Penguins (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-196.php">San Jose Sharks (4) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-197.php">Montreal Canadiens (0) vs Boston Bruins (4)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-183.php">Connecticut Whale (5) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-184.php">Springfield Falcons (3) vs Portland Pirates (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-185.php">Gatineau Olympiques (6) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-186.php">Las Vegas Gamblers (3) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-187.php">Mercer Island Archangels (0) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-188.php">Houston Aeros (4) vs Joliette Sportif (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-198.php">Buffalo Sabres (0) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-199.php">Tampa Bay Lightning (2) vs Ottawa Senators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-200.php">Chicago Blackhawks (2) vs Nashville Predators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-201.php">Los Angeles Kings (2) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-202.php">New Jersey Devils (1) vs Toronto Maple Leafs (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-203.php">Anaheim Ducks (6) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-204.php">Washington Capitals (1) vs New York Islanders (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-205.php">Edmonton Oilers (1) vs Colorado Avalanche (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-206.php">Winnipeg Jets (3) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-207.php">Minnesota Wild (2) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-208.php">Quebec Nordiques (3) vs Philadelphia Flyers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-189.php">Wilkes-Barre/Scranton Penguins (4) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-190.php">Charlotte Checkers (2) vs Adirondack Phantoms (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-191.php">Paradise Dark Angels (3) vs Rouyn-Noranda Huskies (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-192.php">Manitoba Moose (0) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-193.php">Rochester Americans (5) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-194.php">Bridgeport Sound Tigers (3) vs Albany Devils (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-195.php">Chicoutimi Saguenéens (3) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-196.php">Lake Erie Monsters (2) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-197.php">Providence Bruins (5) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-198.php">Chicago Wolves (3) vs Rockford IceHogs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-199.php">Laval Chiefs (0) vs Houston Aeros (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-209.php">Pittsburgh Penguins (4) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-210.php">St. Louis Blues (4) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-211.php">Columbus Blue Jackets (5) vs Tampa Bay Lightning (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-212.php">Seattle Saints (6) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-213.php">Vancouver Canucks (3) vs Edmonton Oilers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-214.php">Calgary Flames (3) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-215.php">Toronto Maple Leafs (1) vs Montreal Canadiens (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-216.php">Minnesota Wild (4) vs Florida Panthers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-217.php">Colorado Avalanche (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-218.php">Vegas Golden Knights (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-219.php">Nashville Predators (5) vs Anaheim Ducks (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-200.php">Peoria Rivermen (5) vs Paradise Dark Angels (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-201.php">Las Vegas Gamblers (3) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-202.php">Roberval Dwarfs (1) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-203.php">Manitoba Moose (2) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-204.php">Oklahoma City Barons (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-205.php">Albany Devils (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-206.php">Portland Pirates (5) vs Springfield Falcons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-207.php">Rochester Americans (5) vs Providence Bruins (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-208.php">San Antonio Rampage (5) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-209.php">Joliette Sportif (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-210.php">Wilkes-Barre/Scranton Penguins (4) vs Bridgeport Sound Tigers (5)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-220.php">New York Islanders (7) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-221.php">Winnipeg Jets (0) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-222.php">Ottawa Senators (6) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-223.php">Columbus Blue Jackets (2) vs Buffalo Sabres (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-224.php">Philadelphia Flyers (5) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-225.php">Carolina Hurricanes (3) vs Pittsburgh Penguins (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-211.php">Rockford IceHogs (4) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-212.php">Las Vegas Gamblers (5) vs Laval Chiefs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-213.php">Rouyn-Noranda Huskies (3) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-214.php">Trois-Rivières Draveurs (3) vs Adirondack Phantoms (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-215.php">Landshut Cannibals (2) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-216.php">Houston Aeros (3) vs Grand Rapids Griffins (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-226.php">Detroit Red Wings (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-227.php">Calgary Flames (3) vs Seattle Saints (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-228.php">Dallas Stars (0) vs Winnipeg Jets (9)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-229.php">Arizona Coyotes (4) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-230.php">New York Rangers (7) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-231.php">Florida Panthers (3) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-232.php">San Jose Sharks (1) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-233.php">Los Angeles Kings (4) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-234.php">Montreal Canadiens (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-235.php">Chicago Blackhawks (5) vs Colorado Avalanche (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-236.php">Boston Bruins (2) vs Toronto Maple Leafs (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-217.php">Mercer Island Archangels (5) vs Portland Pirates (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-218.php">Trois-Rivières Draveurs (3) vs Roberval Dwarfs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-219.php">Lake Erie Monsters (2) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-220.php">Connecticut Whale (2) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-221.php">Binghamton Senators (4) vs Rochester Americans (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-222.php">Albany Devils (3) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-223.php">Milwaukee Admirals (2) vs Joliette Sportif (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-224.php">Laval Chiefs (2) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-225.php">Gatineau Olympiques (0) vs Paradise Dark Angels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-226.php">Grand Rapids Griffins (1) vs Rouyn-Noranda Huskies (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-237.php">New Jersey Devils (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-238.php">Detroit Red Wings (3) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-239.php">Florida Panthers (1) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-240.php">Washington Capitals (3) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-241.php">Buffalo Sabres (3) vs Philadelphia Flyers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-242.php">Arizona Coyotes (4) vs Vegas Golden Knights (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-243.php">Vancouver Canucks (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-244.php">Seattle Saints (1) vs St. Louis Blues (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-227.php">Springfield Falcons (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-228.php">Adirondack Phantoms (3) vs Connecticut Whale (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-229.php">Chicago Wolves (2) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-230.php">Rockford IceHogs (3) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-231.php">Bridgeport Sound Tigers (3) vs Providence Bruins (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-245.php">Edmonton Oilers (3) vs Calgary Flames (4)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-246.php">Los Angeles Kings (5) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-247.php">Winnipeg Jets (3) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-248.php">Minnesota Wild (3) vs Detroit Red Wings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-249.php">Pittsburgh Penguins (3) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-250.php">New York Islanders (2) vs New Jersey Devils (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-251.php">Quebec Nordiques (2) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-252.php">Ottawa Senators (3) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-253.php">Vegas Golden Knights (3) vs Arizona Coyotes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-254.php">Tampa Bay Lightning (4) vs Montreal Canadiens (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-232.php">Norfolk Admirals (5) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-233.php">Binghamton Senators (1) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-234.php">Portland Pirates (3) vs Houston Aeros (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-235.php">Oklahoma City Barons (2) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-236.php">Grand Rapids Griffins (6) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-237.php">Lake Erie Monsters (5) vs Landshut Cannibals (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-255.php">Carolina Hurricanes (6) vs Columbus Blue Jackets (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-256.php">New York Rangers (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-257.php">Seattle Saints (2) vs Los Angeles Kings (1)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-238.php">Providence Bruins (6) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-239.php">Paradise Dark Angels (1) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-240.php">Joliette Sportif (2) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-241.php">Rochester Americans (1) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-242.php">Manitoba Moose (6) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-243.php">Milwaukee Admirals (2) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-244.php">Adirondack Phantoms (3) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-245.php">Landshut Cannibals (4) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-246.php">Rouyn-Noranda Huskies (4) vs Las Vegas Gamblers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-247.php">Charlotte Checkers (3) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-248.php">Chicoutimi Saguenéens (7) vs Binghamton Senators (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-258.php">San Jose Sharks (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-259.php">Minnesota Wild (1) vs Winnipeg Jets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-249.php">Portland Pirates (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-250.php">Houston Aeros (3) vs Oklahoma City Barons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-251.php">Wilkes-Barre/Scranton Penguins (2) vs Norfolk Admirals (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-252.php">Grand Rapids Griffins (4) vs Manitoba Moose (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-260.php">Anaheim Ducks (4) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-261.php">Columbus Blue Jackets (3) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-262.php">Toronto Maple Leafs (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-263.php">Montreal Canadiens (5) vs New York Rangers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-264.php">St. Louis Blues (2) vs Carolina Hurricanes (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-253.php">Providence Bruins (4) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-254.php">Roberval Dwarfs (2) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-255.php">Rouyn-Noranda Huskies (2) vs Milwaukee Admirals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-256.php">Chicago Wolves (3) vs Paradise Dark Angels (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-257.php">Peoria Rivermen (3) vs Mercer Island Archangels (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-258.php">Bridgeport Sound Tigers (5) vs Connecticut Whale (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-259.php">Albany Devils (3) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-260.php">Laval Chiefs (4) vs Portland Pirates (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-261.php">San Antonio Rampage (5) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-262.php">Rockford IceHogs (5) vs Gatineau Olympiques (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-265.php">Winnipeg Jets (3) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-266.php">Vegas Golden Knights (2) vs Ottawa Senators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-267.php">Boston Bruins (2) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-268.php">Washington Capitals (3) vs Colorado Avalanche (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-269.php">Arizona Coyotes (2) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-270.php">Florida Panthers (2) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-271.php">Pittsburgh Penguins (4) vs New York Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-272.php">Buffalo Sabres (4) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-273.php">San Jose Sharks (3) vs Tampa Bay Lightning (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-274.php">Los Angeles Kings (4) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-275.php">Quebec Nordiques (4) vs Dallas Stars (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-263.php">Las Vegas Gamblers (2) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-264.php">Springfield Falcons (1) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-265.php">Chicoutimi Saguenéens (0) vs Albany Devils (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-276.php">New York Rangers (1) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-277.php">Vancouver Canucks (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-278.php">Seattle Saints (3) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-279.php">Columbus Blue Jackets (2) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-280.php">Carolina Hurricanes (3) vs Montreal Canadiens (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-281.php">Colorado Avalanche (0) vs San Jose Sharks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-282.php">Detroit Red Wings (3) vs Vegas Golden Knights (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-283.php">Buffalo Sabres (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-284.php">Los Angeles Kings (7) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-285.php">Ottawa Senators (1) vs Florida Panthers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-266.php">Lake Erie Monsters (2) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-267.php">Rockford IceHogs (7) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-268.php">Wilkes-Barre/Scranton Penguins (1) vs Providence Bruins (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-269.php">Milwaukee Admirals (2) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-270.php">Trois-Rivières Draveurs (4) vs Peoria Rivermen (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-271.php">Paradise Dark Angels (1) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-272.php">Adirondack Phantoms (4) vs Chicoutimi Saguenéens (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-273.php">Norfolk Admirals (4) vs Roberval Dwarfs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-274.php">Rochester Americans (1) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-275.php">Chicago Wolves (3) vs Joliette Sportif (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-286.php">Chicago Blackhawks (3) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-287.php">Arizona Coyotes (2) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-288.php">Calgary Flames (4) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-289.php">Minnesota Wild (3) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-290.php">Tampa Bay Lightning (3) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-291.php">Edmonton Oilers (5) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-292.php">Dallas Stars (3) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-293.php">Philadelphia Flyers (5) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-294.php">New York Islanders (3) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-295.php">Montreal Canadiens (4) vs Toronto Maple Leafs (1)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-276.php">Connecticut Whale (1) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-277.php">Oklahoma City Barons (4) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-278.php">Las Vegas Gamblers (2) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-279.php">Mercer Island Archangels (3) vs Rockford IceHogs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-296.php">Anaheim Ducks (4) vs Buffalo Sabres (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-297.php">St. Louis Blues (3) vs Los Angeles Kings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-298.php">Colorado Avalanche (4) vs Arizona Coyotes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-299.php">Vegas Golden Knights (5) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-300.php">New Jersey Devils (3) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-301.php">Edmonton Oilers (4) vs Calgary Flames (6)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-302.php">Pittsburgh Penguins (3) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-303.php">Florida Panthers (3) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-304.php">Philadelphia Flyers (4) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-305.php">Winnipeg Jets (2) vs Detroit Red Wings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-306.php">Nashville Predators (0) vs Dallas Stars (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-280.php">Grand Rapids Griffins (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-281.php">Landshut Cannibals (3) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-282.php">Chicago Wolves (4) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-283.php">Norfolk Admirals (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-284.php">Roberval Dwarfs (1) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-285.php">Peoria Rivermen (3) vs Portland Pirates (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-307.php">Boston Bruins (1) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-308.php">Washington Capitals (1) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-309.php">New Jersey Devils (2) vs New York Rangers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-310.php">Vancouver Canucks (3) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-311.php">Columbus Blue Jackets (1) vs St. Louis Blues (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-286.php">Las Vegas Gamblers (4) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-287.php">Albany Devils (1) vs Adirondack Phantoms (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-288.php">Providence Bruins (2) vs Mercer Island Archangels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-289.php">Paradise Dark Angels (3) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-290.php">Charlotte Checkers (6) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-291.php">Manitoba Moose (4) vs Chicago Wolves (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-312.php">Seattle Saints (4) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-313.php">Montreal Canadiens (4) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-314.php">Toronto Maple Leafs (0) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-315.php">Carolina Hurricanes (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-316.php">Florida Panthers (4) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-317.php">Chicago Blackhawks (2) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-318.php">San Jose Sharks (4) vs Los Angeles Kings (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-292.php">Rockford IceHogs (4) vs Norfolk Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-293.php">Gatineau Olympiques (4) vs Las Vegas Gamblers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-294.php">Rochester Americans (3) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-295.php">Binghamton Senators (3) vs Grand Rapids Griffins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-296.php">San Antonio Rampage (5) vs Paradise Dark Angels (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-297.php">Bridgeport Sound Tigers (4) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-298.php">Laval Chiefs (4) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-299.php">Lake Erie Monsters (3) vs Springfield Falcons (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-300.php">Landshut Cannibals (1) vs Chicoutimi Saguenéens (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-319.php">New York Islanders (1) vs Arizona Coyotes (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-320.php">Tampa Bay Lightning (3) vs Buffalo Sabres (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-321.php">Minnesota Wild (6) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-322.php">Quebec Nordiques (3) vs New Jersey Devils (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-323.php">Pittsburgh Penguins (2) vs Winnipeg Jets (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-324.php">Dallas Stars (5) vs Columbus Blue Jackets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-301.php">Portland Pirates (1) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-302.php">Adirondack Phantoms (4) vs Charlotte Checkers (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-303.php">Oklahoma City Barons (3) vs Joliette Sportif (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-304.php">Mercer Island Archangels (2) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-305.php">Milwaukee Admirals (6) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-306.php">Connecticut Whale (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-307.php">Rouyn-Noranda Huskies (4) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-308.php">Lake Erie Monsters (6) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-309.php">Binghamton Senators (3) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-310.php">Trois-Rivières Draveurs (5) vs Rockford IceHogs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 46</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-325.php">Detroit Red Wings (1) vs Vancouver Canucks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-326.php">St. Louis Blues (4) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-327.php">Anaheim Ducks (2) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-328.php">Calgary Flames (4) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-329.php">New York Rangers (4) vs Pittsburgh Penguins (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-311.php">Springfield Falcons (4) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-312.php">Chicago Wolves (4) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-313.php">Norfolk Admirals (3) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-314.php">Grand Rapids Griffins (4) vs San Antonio Rampage (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 47</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-330.php">Colorado Avalanche (5) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-331.php">Carolina Hurricanes (4) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-332.php">Dallas Stars (1) vs Toronto Maple Leafs (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-333.php">Chicago Blackhawks (2) vs Calgary Flames (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-315.php">Charlotte Checkers (4) vs Oklahoma City Barons (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-316.php">Houston Aeros (4) vs Milwaukee Admirals (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-317.php">Manitoba Moose (1) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-318.php">Albany Devils (4) vs Portland Pirates (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-319.php">Rouyn-Noranda Huskies (2) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-320.php">Chicoutimi Saguenéens (0) vs Binghamton Senators (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 48</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-334.php">Detroit Red Wings (4) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-335.php">Philadelphia Flyers (5) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-336.php">New Jersey Devils (6) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-337.php">San Jose Sharks (5) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-338.php">Seattle Saints (6) vs Colorado Avalanche (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-321.php">Bridgeport Sound Tigers (2) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-322.php">Paradise Dark Angels (1) vs Mercer Island Archangels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-323.php">Grand Rapids Griffins (5) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-324.php">Chicago Wolves (5) vs Adirondack Phantoms (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 49</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-339.php">Los Angeles Kings (4) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-340.php">Ottawa Senators (1) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-341.php">Toronto Maple Leafs (2) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-342.php">Pittsburgh Penguins (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-343.php">Columbus Blue Jackets (3) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-344.php">Nashville Predators (3) vs Anaheim Ducks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-325.php">Laval Chiefs (3) vs Trois-Rivières Draveurs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-326.php">Albany Devils (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-327.php">Chicoutimi Saguenéens (3) vs Chicago Wolves (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-328.php">Rockford IceHogs (4) vs Paradise Dark Angels (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-329.php">Oklahoma City Barons (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-330.php">Houston Aeros (1) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-331.php">Joliette Sportif (1) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-332.php">Rochester Americans (2) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-333.php">Portland Pirates (3) vs Charlotte Checkers (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 50</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-345.php">New Jersey Devils (4) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-346.php">Winnipeg Jets (4) vs Vegas Golden Knights (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-347.php">Edmonton Oilers (4) vs Detroit Red Wings (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-348.php">Tampa Bay Lightning (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-349.php">Minnesota Wild (2) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-350.php">Seattle Saints (4) vs Montreal Canadiens (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-334.php">Manitoba Moose (4) vs Albany Devils (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-335.php">Lake Erie Monsters (4) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-336.php">Milwaukee Admirals (3) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-337.php">San Antonio Rampage (2) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-338.php">Bridgeport Sound Tigers (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-339.php">Binghamton Senators (0) vs Roberval Dwarfs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 51</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-351.php">Nashville Predators (4) vs Buffalo Sabres (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-352.php">Chicago Blackhawks (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-353.php">Colorado Avalanche (4) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-354.php">Columbus Blue Jackets (3) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-355.php">Dallas Stars (0) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-356.php">Carolina Hurricanes (4) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-357.php">Washington Capitals (3) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-358.php">Calgary Flames (3) vs Winnipeg Jets (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-359.php">Anaheim Ducks (1) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-360.php">St. Louis Blues (2) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-361.php">New York Islanders (3) vs Seattle Saints (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-340.php">Chicoutimi Saguenéens (4) vs Joliette Sportif (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-341.php">Providence Bruins (2) vs Laval Chiefs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-342.php">Portland Pirates (3) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-343.php">Adirondack Phantoms (2) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-344.php">Charlotte Checkers (3) vs Rochester Americans (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 52</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-362.php">New York Rangers (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-363.php">Tampa Bay Lightning (4) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-364.php">Detroit Red Wings (5) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-365.php">Montreal Canadiens (0) vs Toronto Maple Leafs (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-366.php">Philadelphia Flyers (5) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-367.php">Vegas Golden Knights (1) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-368.php">Quebec Nordiques (4) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-369.php">Colorado Avalanche (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-370.php">St. Louis Blues (4) vs Arizona Coyotes (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-371.php">Pittsburgh Penguins (2) vs Boston Bruins (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-372.php">Vancouver Canucks (2) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-373.php">Chicago Blackhawks (2) vs Buffalo Sabres (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-345.php">Trois-Rivières Draveurs (2) vs Chicoutimi Saguenéens (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-346.php">Binghamton Senators (2) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-347.php">Manitoba Moose (2) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-348.php">Lake Erie Monsters (6) vs Bridgeport Sound Tigers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-349.php">Paradise Dark Angels (4) vs Connecticut Whale (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-350.php">Grand Rapids Griffins (4) vs Mercer Island Archangels (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 53</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-374.php">Florida Panthers (7) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-375.php">Dallas Stars (2) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-376.php">Los Angeles Kings (2) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-377.php">New Jersey Devils (2) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-378.php">New York Rangers (5) vs Philadelphia Flyers (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-379.php">Minnesota Wild (2) vs Tampa Bay Lightning (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-380.php">Ottawa Senators (4) vs Quebec Nordiques (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-351.php">Joliette Sportif (4) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-352.php">Charlotte Checkers (2) vs Oklahoma City Barons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-353.php">Chicago Wolves (4) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-354.php">Springfield Falcons (2) vs Adirondack Phantoms (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-355.php">Providence Bruins (2) vs Portland Pirates (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-356.php">Rochester Americans (4) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-357.php">Wilkes-Barre/Scranton Penguins (4) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-358.php">Rockford IceHogs (4) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-359.php">Las Vegas Gamblers (2) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-360.php">Peoria Rivermen (4) vs Paradise Dark Angels (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 54</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-381.php">Arizona Coyotes (2) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-382.php">Winnipeg Jets (3) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-383.php">Seattle Saints (1) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-384.php">Edmonton Oilers (3) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-385.php">Los Angeles Kings (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-386.php">Toronto Maple Leafs (4) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-387.php">Boston Bruins (5) vs Vancouver Canucks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-388.php">Washington Capitals (2) vs Columbus Blue Jackets (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-389.php">Buffalo Sabres (5) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-390.php">San Jose Sharks (2) vs Nashville Predators (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-391.php">Anaheim Ducks (2) vs Carolina Hurricanes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-361.php">Grand Rapids Griffins (2) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-362.php">Connecticut Whale (2) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-363.php">Laval Chiefs (0) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-364.php">San Antonio Rampage (1) vs Houston Aeros (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 55</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-392.php">New York Islanders (3) vs New York Rangers (4)</a>  - SO (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-393.php">Calgary Flames (2) vs New Jersey Devils (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-394.php">Detroit Red Wings (7) vs Winnipeg Jets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-395.php">Montreal Canadiens (4) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-396.php">Vegas Golden Knights (4) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-397.php">Arizona Coyotes (1) vs Edmonton Oilers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-398.php">Philadelphia Flyers (0) vs Quebec Nordiques (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-365.php">Springfield Falcons (5) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-366.php">Peoria Rivermen (5) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-367.php">Charlotte Checkers (4) vs Roberval Dwarfs (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-368.php">Bridgeport Sound Tigers (3) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-369.php">Adirondack Phantoms (3) vs Wilkes-Barre/Scranton Penguins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-370.php">Mercer Island Archangels (1) vs Joliette Sportif (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-371.php">Rochester Americans (5) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-372.php">Oklahoma City Barons (5) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-373.php">Las Vegas Gamblers (1) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-374.php">Rouyn-Noranda Huskies (4) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-375.php">Portland Pirates (5) vs Laval Chiefs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 56</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-399.php">Chicago Blackhawks (4) vs Los Angeles Kings (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-400.php">Washington Capitals (1) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-401.php">Pittsburgh Penguins (3) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-402.php">San Jose Sharks (1) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-403.php">Columbus Blue Jackets (2) vs Tampa Bay Lightning (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-376.php">Houston Aeros (2) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-377.php">Binghamton Senators (5) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-378.php">San Antonio Rampage (2) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-379.php">Paradise Dark Angels (1) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-380.php">Gatineau Olympiques (2) vs Connecticut Whale (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 57</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-404.php">Minnesota Wild (1) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-405.php">Buffalo Sabres (3) vs Dallas Stars (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-406.php">Arizona Coyotes (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-407.php">New Jersey Devils (6) vs Philadelphia Flyers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-381.php">Chicago Wolves (1) vs Oklahoma City Barons (0)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-382.php">Chicoutimi Saguenéens (4) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-383.php">Joliette Sportif (4) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-384.php">Adirondack Phantoms (3) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-385.php">Trois-Rivières Draveurs (5) vs Mercer Island Archangels (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-386.php">Portland Pirates (2) vs Rouyn-Noranda Huskies (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 58</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-408.php">Vancouver Canucks (3) vs Detroit Red Wings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-409.php">Quebec Nordiques (3) vs New York Rangers (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-410.php">Seattle Saints (1) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-411.php">Pittsburgh Penguins (2) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-412.php">Winnipeg Jets (0) vs Boston Bruins (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-387.php">Connecticut Whale (2) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-388.php">Norfolk Admirals (4) vs Binghamton Senators (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-389.php">Laval Chiefs (1) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-390.php">Albany Devils (2) vs Paradise Dark Angels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-391.php">Milwaukee Admirals (5) vs Chicago Wolves (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 59</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-413.php">Columbus Blue Jackets (2) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-414.php">Calgary Flames (4) vs Anaheim Ducks (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-415.php">Arizona Coyotes (4) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-416.php">Dallas Stars (1) vs Chicago Blackhawks (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-417.php">New Jersey Devils (1) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-418.php">Buffalo Sabres (2) vs Florida Panthers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-419.php">Tampa Bay Lightning (5) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-420.php">Colorado Avalanche (5) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-421.php">New York Islanders (2) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-422.php">Edmonton Oilers (2) vs Winnipeg Jets (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-392.php">Peoria Rivermen (2) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-393.php">Providence Bruins (1) vs Adirondack Phantoms (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-394.php">Rouyn-Noranda Huskies (4) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-395.php">Bridgeport Sound Tigers (3) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-396.php">Roberval Dwarfs (3) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-397.php">Las Vegas Gamblers (5) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-398.php">Charlotte Checkers (4) vs Landshut Cannibals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 60</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-423.php">Toronto Maple Leafs (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-424.php">Carolina Hurricanes (2) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-425.php">Seattle Saints (0) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-426.php">Boston Bruins (1) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-427.php">Philadelphia Flyers (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-428.php">Quebec Nordiques (3) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-429.php">New York Rangers (3) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-430.php">Detroit Red Wings (3) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-431.php">St. Louis Blues (1) vs Calgary Flames (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-432.php">Chicago Blackhawks (4) vs Vegas Golden Knights (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-433.php">Florida Panthers (3) vs Tampa Bay Lightning (4)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-399.php">Oklahoma City Barons (5) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-400.php">Laval Chiefs (2) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-401.php">Milwaukee Admirals (1) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-402.php">San Antonio Rampage (1) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-403.php">Joliette Sportif (1) vs Chicoutimi Saguenéens (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-404.php">Connecticut Whale (1) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-405.php">Norfolk Admirals (3) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-406.php">Mercer Island Archangels (1) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-407.php">Binghamton Senators (3) vs Manitoba Moose (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-408.php">Paradise Dark Angels (2) vs Lake Erie Monsters (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-409.php">Rochester Americans (5) vs Charlotte Checkers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 61</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-434.php">San Jose Sharks (4) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-435.php">Montreal Canadiens (3) vs Carolina Hurricanes (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-436.php">Colorado Avalanche (1) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-437.php">Edmonton Oilers (4) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-438.php">Dallas Stars (1) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-439.php">Winnipeg Jets (1) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-440.php">Los Angeles Kings (6) vs Philadelphia Flyers (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-441.php">Pittsburgh Penguins (3) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-442.php">Ottawa Senators (4) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-443.php">Nashville Predators (2) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-444.php">Quebec Nordiques (4) vs St. Louis Blues (7)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-410.php">Landshut Cannibals (1) vs Joliette Sportif (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-411.php">Gatineau Olympiques (3) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-412.php">Trois-Rivières Draveurs (0) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-413.php">Portland Pirates (2) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-414.php">Chicago Wolves (0) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-415.php">Rouyn-Noranda Huskies (1) vs Mercer Island Archangels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-416.php">Adirondack Phantoms (1) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-417.php">Grand Rapids Griffins (3) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-418.php">Rockford IceHogs (4) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-419.php">Houston Aeros (4) vs Connecticut Whale (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-420.php">Albany Devils (4) vs Binghamton Senators (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 62</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-445.php">Vancouver Canucks (4) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-446.php">Minnesota Wild (2) vs Edmonton Oilers (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-447.php">New Jersey Devils (3) vs Chicago Blackhawks (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-448.php">Arizona Coyotes (4) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-449.php">Anaheim Ducks (6) vs San Jose Sharks (5)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-450.php">Tampa Bay Lightning (5) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-451.php">Washington Capitals (4) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-452.php">Vegas Golden Knights (4) vs Columbus Blue Jackets (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-421.php">Springfield Falcons (3) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-422.php">Chicoutimi Saguenéens (3) vs Paradise Dark Angels (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-423.php">Lake Erie Monsters (2) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-424.php">Las Vegas Gamblers (3) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-425.php">Manitoba Moose (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 63</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-453.php">Detroit Red Wings (4) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-454.php">Pittsburgh Penguins (4) vs Vancouver Canucks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-455.php">Philadelphia Flyers (1) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-456.php">Calgary Flames (4) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-457.php">Nashville Predators (2) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-458.php">Boston Bruins (6) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-459.php">Toronto Maple Leafs (3) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-460.php">St. Louis Blues (4) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-461.php">New York Rangers (2) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-462.php">Colorado Avalanche (3) vs Carolina Hurricanes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-426.php">Charlotte Checkers (5) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-427.php">Landshut Cannibals (3) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-428.php">Wilkes-Barre/Scranton Penguins (4) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-429.php">Gatineau Olympiques (3) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-430.php">Bridgeport Sound Tigers (1) vs Roberval Dwarfs (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 64</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-463.php">Washington Capitals (3) vs Pittsburgh Penguins (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-464.php">Edmonton Oilers (3) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-465.php">Tampa Bay Lightning (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-466.php">Buffalo Sabres (2) vs Toronto Maple Leafs (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-467.php">Dallas Stars (4) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-468.php">Vegas Golden Knights (4) vs Anaheim Ducks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-469.php">Chicago Blackhawks (2) vs Florida Panthers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-470.php">Los Angeles Kings (5) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-471.php">Columbus Blue Jackets (3) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-472.php">Ottawa Senators (1) vs Philadelphia Flyers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-431.php">San Antonio Rampage (3) vs Gatineau Olympiques (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-432.php">Lake Erie Monsters (3) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-433.php">Joliette Sportif (2) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-434.php">Rockford IceHogs (5) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-435.php">Norfolk Admirals (3) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-436.php">Binghamton Senators (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-437.php">Paradise Dark Angels (3) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-438.php">Mercer Island Archangels (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-439.php">Connecticut Whale (3) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-440.php">Milwaukee Admirals (5) vs Oklahoma City Barons (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 65</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-473.php">Winnipeg Jets (3) vs New York Rangers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-474.php">St. Louis Blues (1) vs Boston Bruins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-475.php">Minnesota Wild (3) vs Quebec Nordiques (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-476.php">Carolina Hurricanes (4) vs Colorado Avalanche (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-477.php">New York Islanders (2) vs Tampa Bay Lightning (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-441.php">Portland Pirates (2) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-442.php">Roberval Dwarfs (4) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-443.php">Rouyn-Noranda Huskies (5) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-444.php">Grand Rapids Griffins (2) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-445.php">Bridgeport Sound Tigers (2) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-446.php">Chicago Wolves (4) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-447.php">Albany Devils (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-448.php">Trois-Rivières Draveurs (3) vs Norfolk Admirals (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-449.php">Oklahoma City Barons (3) vs Lake Erie Monsters (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 66</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-478.php">Seattle Saints (6) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-479.php">San Jose Sharks (3) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-480.php">Anaheim Ducks (3) vs Dallas Stars (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-481.php">Florida Panthers (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-482.php">Columbus Blue Jackets (5) vs Buffalo Sabres (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-483.php">Montreal Canadiens (0) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-484.php">Los Angeles Kings (4) vs Chicago Blackhawks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-450.php">Paradise Dark Angels (3) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-451.php">Binghamton Senators (3) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-452.php">San Antonio Rampage (2) vs Adirondack Phantoms (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-453.php">Springfield Falcons (3) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-454.php">Peoria Rivermen (0) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-455.php">Chicoutimi Saguenéens (5) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-456.php">Providence Bruins (4) vs Rouyn-Noranda Huskies (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-457.php">Houston Aeros (4) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-458.php">Las Vegas Gamblers (3) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-459.php">Manitoba Moose (5) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-460.php">Charlotte Checkers (1) vs Roberval Dwarfs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 67</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-485.php">New York Rangers (2) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-486.php">Quebec Nordiques (2) vs Arizona Coyotes (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-487.php">Pittsburgh Penguins (2) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-488.php">Ottawa Senators (3) vs New Jersey Devils (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-489.php">Toronto Maple Leafs (2) vs Winnipeg Jets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-490.php">Boston Bruins (1) vs Los Angeles Kings (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-491.php">Detroit Red Wings (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-492.php">Carolina Hurricanes (4) vs Columbus Blue Jackets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-493.php">Philadelphia Flyers (2) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-494.php">Calgary Flames (3) vs Nashville Predators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-461.php">Rochester Americans (4) vs San Antonio Rampage (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-462.php">Landshut Cannibals (4) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-463.php">Wilkes-Barre/Scranton Penguins (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-464.php">Laval Chiefs (2) vs Paradise Dark Angels (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-465.php">Oklahoma City Barons (5) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-466.php">Adirondack Phantoms (2) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-467.php">Manitoba Moose (0) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-468.php">Rockford IceHogs (2) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-469.php">Connecticut Whale (2) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-470.php">Milwaukee Admirals (2) vs Joliette Sportif (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 68</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-495.php">Vancouver Canucks (2) vs Pittsburgh Penguins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-496.php">Chicago Blackhawks (4) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-497.php">Vegas Golden Knights (4) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-498.php">Florida Panthers (2) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-499.php">San Jose Sharks (5) vs Toronto Maple Leafs (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-500.php">Colorado Avalanche (3) vs Calgary Flames (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-471.php">Norfolk Admirals (3) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-472.php">Charlotte Checkers (0) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-473.php">Mercer Island Archangels (1) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-474.php">Roberval Dwarfs (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-475.php">Gatineau Olympiques (2) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-476.php">Portland Pirates (2) vs Rochester Americans (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-477.php">Rouyn-Noranda Huskies (2) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-478.php">Chicago Wolves (2) vs Trois-Rivières Draveurs (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 69</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-501.php">New York Rangers (6) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-502.php">Detroit Red Wings (2) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-503.php">Boston Bruins (5) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-504.php">New Jersey Devils (2) vs St. Louis Blues (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-505.php">Quebec Nordiques (3) vs Philadelphia Flyers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-479.php">Houston Aeros (2) vs Rockford IceHogs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-480.php">Peoria Rivermen (3) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-481.php">San Antonio Rampage (4) vs Mercer Island Archangels (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-482.php">Connecticut Whale (1) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-483.php">Paradise Dark Angels (4) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-484.php">Springfield Falcons (6) vs Oklahoma City Barons (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 70</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-506.php">Montreal Canadiens (3) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-507.php">Florida Panthers (6) vs Washington Capitals (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-485.php">Bridgeport Sound Tigers (3) vs Charlotte Checkers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-486.php">Chicoutimi Saguenéens (7) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-487.php">Las Vegas Gamblers (4) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-488.php">Rochester Americans (4) vs Rouyn-Noranda Huskies (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-489.php">Lake Erie Monsters (2) vs Portland Pirates (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 71</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-508.php">Carolina Hurricanes (5) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-509.php">Anaheim Ducks (2) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-510.php">Seattle Saints (2) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-511.php">Nashville Predators (6) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-512.php">Tampa Bay Lightning (2) vs Boston Bruins (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-513.php">Minnesota Wild (1) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-514.php">St. Louis Blues (4) vs Vancouver Canucks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-515.php">Pittsburgh Penguins (1) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-516.php">Calgary Flames (3) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-517.php">Winnipeg Jets (3) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-518.php">Columbus Blue Jackets (3) vs Quebec Nordiques (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-490.php">Manitoba Moose (2) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-491.php">Albany Devils (5) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-492.php">Providence Bruins (0) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-493.php">Norfolk Admirals (4) vs Chicago Wolves (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-494.php">Springfield Falcons (3) vs Paradise Dark Angels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-495.php">Landshut Cannibals (1) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-496.php">Rockford IceHogs (3) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-497.php">Houston Aeros (0) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-498.php">Oklahoma City Barons (4) vs Peoria Rivermen (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-499.php">Laval Chiefs (2) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-500.php">Milwaukee Admirals (2) vs Chicoutimi Saguenéens (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 72</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-519.php">Ottawa Senators (2) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-520.php">Washington Capitals (0) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-521.php">New York Islanders (1) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-522.php">Philadelphia Flyers (2) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-523.php">Dallas Stars (6) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-524.php">Edmonton Oilers (3) vs Columbus Blue Jackets (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-525.php">Chicago Blackhawks (2) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-526.php">Arizona Coyotes (3) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-527.php">Buffalo Sabres (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-528.php">Toronto Maple Leafs (4) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-529.php">New York Rangers (2) vs Carolina Hurricanes (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-501.php">Lake Erie Monsters (2) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-502.php">Binghamton Senators (4) vs Providence Bruins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-503.php">Las Vegas Gamblers (3) vs Landshut Cannibals (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-504.php">Charlotte Checkers (5) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-505.php">Trois-Rivières Draveurs (4) vs Springfield Falcons (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 73</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-530.php">Calgary Flames (4) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-531.php">Detroit Red Wings (2) vs Toronto Maple Leafs (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-532.php">Tampa Bay Lightning (3) vs New York Islanders (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-533.php">Anaheim Ducks (4) vs Colorado Avalanche (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-506.php">Chicago Wolves (5) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-507.php">Manitoba Moose (2) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-508.php">Gatineau Olympiques (6) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-509.php">Peoria Rivermen (3) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-510.php">Paradise Dark Angels (5) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-511.php">Joliette Sportif (4) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-512.php">Grand Rapids Griffins (0) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-513.php">Roberval Dwarfs (1) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-514.php">San Antonio Rampage (1) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-515.php">Connecticut Whale (2) vs Charlotte Checkers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 74</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-534.php">Vancouver Canucks (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-535.php">Washington Capitals (6) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-536.php">Buffalo Sabres (2) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-537.php">St. Louis Blues (1) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-538.php">New Jersey Devils (6) vs Boston Bruins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-516.php">Trois-Rivières Draveurs (2) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-517.php">Chicoutimi Saguenéens (3) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-518.php">Portland Pirates (0) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-519.php">Roberval Dwarfs (2) vs Binghamton Senators (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-520.php">Wilkes-Barre/Scranton Penguins (3) vs Manitoba Moose (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-521.php">Paradise Dark Angels (3) vs Grand Rapids Griffins (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 75</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-539.php">Quebec Nordiques (4) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-540.php">Columbus Blue Jackets (1) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-541.php">Montreal Canadiens (2) vs Florida Panthers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-522.php">Adirondack Phantoms (2) vs Albany Devils (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-523.php">Bridgeport Sound Tigers (1) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-524.php">Rockford IceHogs (4) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-525.php">Gatineau Olympiques (4) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-526.php">Milwaukee Admirals (2) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-527.php">Mercer Island Archangels (4) vs Portland Pirates (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-528.php">Landshut Cannibals (2) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-529.php">Joliette Sportif (4) vs Houston Aeros (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-530.php">Springfield Falcons (3) vs Wilkes-Barre/Scranton Penguins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-531.php">Rochester Americans (3) vs Peoria Rivermen (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-532.php">Oklahoma City Barons (3) vs Laval Chiefs (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 76</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-542.php">New Jersey Devils (3) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-543.php">New York Rangers (3) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-544.php">Buffalo Sabres (5) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-545.php">Colorado Avalanche (3) vs Chicago Blackhawks (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-546.php">Winnipeg Jets (4) vs Vancouver Canucks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-533.php">Las Vegas Gamblers (4) vs Paradise Dark Angels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-534.php">Charlotte Checkers (0) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-535.php">Lake Erie Monsters (5) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-536.php">Binghamton Senators (1) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-537.php">Norfolk Admirals (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-538.php">Rouyn-Noranda Huskies (4) vs Springfield Falcons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-539.php">Houston Aeros (5) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-540.php">Peoria Rivermen (2) vs Rockford IceHogs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-541.php">Laval Chiefs (3) vs Mercer Island Archangels (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 77</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-547.php">Vegas Golden Knights (3) vs Los Angeles Kings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-548.php">Columbus Blue Jackets (3) vs Detroit Red Wings (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-549.php">Nashville Predators (2) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-550.php">Montreal Canadiens (1) vs Quebec Nordiques (5)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-551.php">Carolina Hurricanes (3) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-552.php">San Jose Sharks (0) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-553.php">Boston Bruins (5) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-554.php">New York Islanders (3) vs New York Rangers (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-555.php">Philadelphia Flyers (3) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-556.php">Seattle Saints (4) vs Winnipeg Jets (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-542.php">Connecticut Whale (4) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-543.php">Rochester Americans (3) vs Milwaukee Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-544.php">Manitoba Moose (5) vs Adirondack Phantoms (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-545.php">Providence Bruins (2) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-546.php">Albany Devils (2) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-547.php">Grand Rapids Griffins (2) vs Norfolk Admirals (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-548.php">San Antonio Rampage (4) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-549.php">Rouyn-Noranda Huskies (2) vs Chicago Wolves (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-550.php">Trois-Rivières Draveurs (4) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-551.php">Chicoutimi Saguenéens (5) vs Portland Pirates (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 78</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-557.php">Vancouver Canucks (1) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-558.php">Arizona Coyotes (0) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-559.php">Tampa Bay Lightning (3) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-560.php">Toronto Maple Leafs (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-561.php">Calgary Flames (2) vs Seattle Saints (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-552.php">Landshut Cannibals (1) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-553.php">Adirondack Phantoms (3) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-554.php">Houston Aeros (5) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-555.php">Roberval Dwarfs (1) vs San Antonio Rampage (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 79</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-562.php">Carolina Hurricanes (3) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-563.php">Boston Bruins (1) vs Ottawa Senators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-564.php">Chicago Blackhawks (0) vs Edmonton Oilers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-565.php">St. Louis Blues (4) vs New York Islanders (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-566.php">Florida Panthers (2) vs Toronto Maple Leafs (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-567.php">Vegas Golden Knights (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-568.php">San Jose Sharks (2) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-569.php">Minnesota Wild (4) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-570.php">Detroit Red Wings (2) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-571.php">Washington Capitals (4) vs Philadelphia Flyers (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-556.php">Norfolk Admirals (2) vs Albany Devils (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-557.php">Chicoutimi Saguenéens (2) vs Grand Rapids Griffins (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-558.php">Mercer Island Archangels (5) vs Connecticut Whale (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 80</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-572.php">Quebec Nordiques (3) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-573.php">New York Rangers (4) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-574.php">Buffalo Sabres (4) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-575.php">Vancouver Canucks (3) vs Arizona Coyotes (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-559.php">Rockford IceHogs (4) vs Trois-Rivières Draveurs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-560.php">Peoria Rivermen (1) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-561.php">Bridgeport Sound Tigers (3) vs Paradise Dark Angels (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-562.php">Lake Erie Monsters (4) vs Gatineau Olympiques (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 81</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-576.php">Dallas Stars (5) vs Vegas Golden Knights (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-577.php">Nashville Predators (3) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-578.php">Columbus Blue Jackets (1) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-579.php">Washington Capitals (0) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-580.php">New York Islanders (1) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-581.php">Ottawa Senators (3) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-582.php">Colorado Avalanche (5) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-583.php">Winnipeg Jets (1) vs St. Louis Blues (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-584.php">Pittsburgh Penguins (4) vs Quebec Nordiques (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-585.php">New Jersey Devils (3) vs New York Rangers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-563.php">San Antonio Rampage (1) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-564.php">Grand Rapids Griffins (3) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-565.php">Charlotte Checkers (1) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-566.php">Chicago Wolves (3) vs Roberval Dwarfs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-567.php">Manitoba Moose (6) vs Joliette Sportif (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 82</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-586.php">Los Angeles Kings (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-587.php">Anaheim Ducks (2) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-588.php">Minnesota Wild (5) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-589.php">Arizona Coyotes (3) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-590.php">Tampa Bay Lightning (3) vs Seattle Saints (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-591.php">Philadelphia Flyers (5) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-592.php">Calgary Flames (2) vs Columbus Blue Jackets (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-593.php">Toronto Maple Leafs (3) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-594.php">Detroit Red Wings (2) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-595.php">Carolina Hurricanes (5) vs Ottawa Senators (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-568.php">Lake Erie Monsters (4) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-569.php">Portland Pirates (5) vs Springfield Falcons (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-570.php">Paradise Dark Angels (3) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-571.php">Albany Devils (1) vs Laval Chiefs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 83</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-596.php">New York Islanders (7) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-597.php">Boston Bruins (1) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-598.php">Florida Panthers (3) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-599.php">Dallas Stars (7) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-600.php">St. Louis Blues (3) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-601.php">San Jose Sharks (2) vs Calgary Flames (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-572.php">Oklahoma City Barons (4) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-573.php">Adirondack Phantoms (4) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-574.php">Gatineau Olympiques (5) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-575.php">Norfolk Admirals (3) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-576.php">Providence Bruins (3) vs Bridgeport Sound Tigers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-577.php">Manitoba Moose (4) vs Rochester Americans (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-578.php">Joliette Sportif (4) vs Las Vegas Gamblers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-579.php">Connecticut Whale (5) vs Binghamton Senators (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-580.php">Grand Rapids Griffins (1) vs Charlotte Checkers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 84</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-602.php">Buffalo Sabres (3) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-603.php">Chicago Blackhawks (4) vs Anaheim Ducks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-604.php">New York Rangers (5) vs New York Islanders (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-605.php">Los Angeles Kings (1) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-606.php">Vancouver Canucks (4) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-607.php">Winnipeg Jets (5) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-608.php">Columbus Blue Jackets (2) vs Montreal Canadiens (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-609.php">Seattle Saints (2) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-610.php">Boston Bruins (2) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-611.php">Edmonton Oilers (4) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-612.php">Vegas Golden Knights (3) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-613.php">Colorado Avalanche (3) vs Florida Panthers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-581.php">Houston Aeros (2) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-582.php">Paradise Dark Angels (4) vs Portland Pirates (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-583.php">Peoria Rivermen (2) vs Lake Erie Monsters (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-584.php">Wilkes-Barre/Scranton Penguins (4) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-585.php">Landshut Cannibals (5) vs Chicago Wolves (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 85</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-614.php">Ottawa Senators (1) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-615.php">Nashville Predators (1) vs Washington Capitals (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-586.php">Milwaukee Admirals (1) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-587.php">Chicoutimi Saguenéens (2) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-588.php">Joliette Sportif (2) vs Norfolk Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-589.php">Las Vegas Gamblers (2) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-590.php">San Antonio Rampage (5) vs Albany Devils (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 86</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-616.php">Calgary Flames (3) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-617.php">Anaheim Ducks (1) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-618.php">New York Rangers (3) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-619.php">Minnesota Wild (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-620.php">Tampa Bay Lightning (2) vs Boston Bruins (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-621.php">Montreal Canadiens (4) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-622.php">Philadelphia Flyers (2) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-623.php">Toronto Maple Leafs (3) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-624.php">Quebec Nordiques (4) vs Seattle Saints (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-625.php">Arizona Coyotes (1) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-626.php">St. Louis Blues (4) vs Nashville Predators (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-591.php">Trois-Rivières Draveurs (1) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-592.php">Landshut Cannibals (1) vs Grand Rapids Griffins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-593.php">Providence Bruins (3) vs San Antonio Rampage (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-594.php">Mercer Island Archangels (2) vs Paradise Dark Angels (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-595.php">Portland Pirates (0) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-596.php">Roberval Dwarfs (3) vs Wilkes-Barre/Scranton Penguins (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-597.php">Charlotte Checkers (3) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-598.php">Chicago Wolves (1) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-599.php">Lake Erie Monsters (4) vs Laval Chiefs (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 87</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-627.php">Edmonton Oilers (1) vs New York Rangers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-628.php">Carolina Hurricanes (2) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-629.php">Dallas Stars (2) vs Ottawa Senators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-630.php">Washington Capitals (1) vs New York Islanders (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-600.php">Chicoutimi Saguenéens (5) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-601.php">Norfolk Admirals (2) vs Providence Bruins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-602.php">Rouyn-Noranda Huskies (2) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-603.php">Adirondack Phantoms (3) vs Rockford IceHogs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-604.php">Las Vegas Gamblers (6) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-605.php">Rochester Americans (4) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-606.php">Oklahoma City Barons (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-607.php">Connecticut Whale (2) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-608.php">Albany Devils (4) vs Binghamton Senators (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-609.php">Chicago Wolves (4) vs Mercer Island Archangels (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 88</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-631.php">Anaheim Ducks (2) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-632.php">Vegas Golden Knights (5) vs Edmonton Oilers (6)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-610.php">Wilkes-Barre/Scranton Penguins (4) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-611.php">Paradise Dark Angels (4) vs Oklahoma City Barons (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-612.php">Manitoba Moose (2) vs Rochester Americans (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-613.php">Gatineau Olympiques (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-614.php">Springfield Falcons (4) vs Lake Erie Monsters (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-615.php">Grand Rapids Griffins (3) vs Trois-Rivières Draveurs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-616.php">Laval Chiefs (6) vs Portland Pirates (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 89</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-633.php">Tampa Bay Lightning (2) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-634.php">Detroit Red Wings (4) vs Colorado Avalanche (1)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-635.php">Winnipeg Jets (5) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-636.php">San Jose Sharks (4) vs Chicago Blackhawks (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-637.php">Dallas Stars (2) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-638.php">Montreal Canadiens (1) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-639.php">Philadelphia Flyers (2) vs Florida Panthers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-640.php">Washington Capitals (3) vs Quebec Nordiques (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-641.php">Ottawa Senators (1) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-642.php">Vancouver Canucks (2) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-643.php">New Jersey Devils (5) vs Buffalo Sabres (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-617.php">Las Vegas Gamblers (3) vs Norfolk Admirals (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-618.php">Houston Aeros (2) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-619.php">Bridgeport Sound Tigers (5) vs Rouyn-Noranda Huskies (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-620.php">Peoria Rivermen (3) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-621.php">Rockford IceHogs (5) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-622.php">Milwaukee Admirals (5) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-623.php">Springfield Falcons (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-624.php">Binghamton Senators (3) vs Chicago Wolves (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-625.php">Joliette Sportif (2) vs Grand Rapids Griffins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-626.php">Charlotte Checkers (2) vs Paradise Dark Angels (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 90</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-644.php">Seattle Saints (4) vs Boston Bruins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-645.php">Nashville Predators (1) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-646.php">New York Islanders (5) vs Philadelphia Flyers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-647.php">Minnesota Wild (2) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-648.php">New York Rangers (2) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-649.php">Calgary Flames (1) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-650.php">Toronto Maple Leafs (3) vs Tampa Bay Lightning (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-651.php">Florida Panthers (3) vs Dallas Stars (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-652.php">Columbus Blue Jackets (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-653.php">Pittsburgh Penguins (3) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-654.php">Carolina Hurricanes (2) vs New Jersey Devils (1)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-627.php">Laval Chiefs (2) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-628.php">Providence Bruins (3) vs Gatineau Olympiques (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-629.php">Roberval Dwarfs (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-630.php">Trois-Rivières Draveurs (5) vs Landshut Cannibals (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-631.php">Portland Pirates (1) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-632.php">Lake Erie Monsters (1) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-633.php">Rochester Americans (4) vs Joliette Sportif (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-634.php">Chicoutimi Saguenéens (3) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-635.php">Binghamton Senators (5) vs Peoria Rivermen (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 91</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-655.php">Los Angeles Kings (7) vs Winnipeg Jets (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-656.php">Buffalo Sabres (3) vs New York Rangers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-657.php">Chicago Blackhawks (2) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-658.php">Quebec Nordiques (4) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-659.php">Arizona Coyotes (4) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-660.php">Edmonton Oilers (5) vs Columbus Blue Jackets (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-636.php">Milwaukee Admirals (2) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-637.php">Albany Devils (4) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-638.php">Adirondack Phantoms (5) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-639.php">San Antonio Rampage (2) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-640.php">Oklahoma City Barons (5) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-641.php">Wilkes-Barre/Scranton Penguins (3) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-642.php">Portland Pirates (5) vs Rouyn-Noranda Huskies (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-643.php">Connecticut Whale (0) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-644.php">Gatineau Olympiques (1) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-645.php">Grand Rapids Griffins (4) vs Manitoba Moose (7)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 92</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-661.php">Vegas Golden Knights (5) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-662.php">Boston Bruins (6) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-663.php">Anaheim Ducks (6) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-664.php">New York Islanders (6) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-665.php">St. Louis Blues (4) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-666.php">Quebec Nordiques (2) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-667.php">Los Angeles Kings (7) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-668.php">Philadelphia Flyers (3) vs Detroit Red Wings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-669.php">San Jose Sharks (7) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-670.php">Arizona Coyotes (4) vs Dallas Stars (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-671.php">Montreal Canadiens (3) vs Florida Panthers (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-646.php">Mercer Island Archangels (9) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-647.php">Landshut Cannibals (4) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-648.php">Peoria Rivermen (2) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-649.php">Lake Erie Monsters (3) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-650.php">Paradise Dark Angels (7) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-651.php">San Antonio Rampage (3) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-652.php">Connecticut Whale (3) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-653.php">Houston Aeros (6) vs Las Vegas Gamblers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 93</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-672.php">New Jersey Devils (2) vs New York Islanders (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-673.php">Winnipeg Jets (3) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-674.php">Boston Bruins (3) vs Vegas Golden Knights (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-654.php">Grand Rapids Griffins (4) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-655.php">Joliette Sportif (4) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-656.php">Rockford IceHogs (5) vs Portland Pirates (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-657.php">Rouyn-Noranda Huskies (3) vs Connecticut Whale (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 94</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-675.php">Vancouver Canucks (5) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-676.php">Ottawa Senators (4) vs Buffalo Sabres (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-677.php">Colorado Avalanche (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-678.php">Nashville Predators (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-679.php">Pittsburgh Penguins (2) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-680.php">New York Rangers (2) vs Quebec Nordiques (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-658.php">Roberval Dwarfs (2) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-659.php">Gatineau Olympiques (1) vs Paradise Dark Angels (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-660.php">Peoria Rivermen (1) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-661.php">Chicoutimi Saguenéens (4) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-662.php">Providence Bruins (3) vs Springfield Falcons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-663.php">Las Vegas Gamblers (3) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-664.php">Adirondack Phantoms (2) vs Landshut Cannibals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 95</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-681.php">Edmonton Oilers (1) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-682.php">Arizona Coyotes (5) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-683.php">Toronto Maple Leafs (0) vs Los Angeles Kings (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-684.php">Columbus Blue Jackets (2) vs Boston Bruins (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-685.php">Seattle Saints (1) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-686.php">Florida Panthers (7) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-687.php">Dallas Stars (2) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-688.php">Detroit Red Wings (5) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-689.php">Carolina Hurricanes (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-690.php">Chicago Blackhawks (4) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-691.php">Anaheim Ducks (1) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-692.php">Washington Capitals (3) vs Ottawa Senators (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-665.php">Joliette Sportif (4) vs Gatineau Olympiques (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-666.php">Milwaukee Admirals (3) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-667.php">Portland Pirates (5) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-668.php">Trois-Rivières Draveurs (4) vs Providence Bruins (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 96</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-693.php">St. Louis Blues (3) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-694.php">Colorado Avalanche (1) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-695.php">Buffalo Sabres (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-696.php">Calgary Flames (3) vs New York Islanders (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-697.php">Tampa Bay Lightning (5) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-698.php">Winnipeg Jets (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-699.php">Vegas Golden Knights (3) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-700.php">Detroit Red Wings (6) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-701.php">San Jose Sharks (4) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-702.php">Chicago Blackhawks (4) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-703.php">Florida Panthers (2) vs Quebec Nordiques (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-669.php">Chicago Wolves (0) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-670.php">Wilkes-Barre/Scranton Penguins (6) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-671.php">Binghamton Senators (3) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-672.php">Manitoba Moose (1) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-673.php">Rochester Americans (5) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-674.php">Las Vegas Gamblers (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-675.php">Landshut Cannibals (2) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-676.php">Springfield Falcons (3) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-677.php">San Antonio Rampage (1) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-678.php">Paradise Dark Angels (3) vs Chicoutimi Saguenéens (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 97</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-704.php">Minnesota Wild (1) vs Calgary Flames (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-705.php">Los Angeles Kings (7) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-706.php">New Jersey Devils (2) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-707.php">Tampa Bay Lightning (5) vs Anaheim Ducks (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-708.php">St. Louis Blues (5) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-709.php">Ottawa Senators (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-710.php">Pittsburgh Penguins (4) vs Buffalo Sabres (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-711.php">New York Rangers (5) vs Boston Bruins (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-679.php">Lake Erie Monsters (3) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-680.php">Adirondack Phantoms (4) vs Binghamton Senators (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-681.php">Albany Devils (4) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-682.php">Connecticut Whale (4) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 98</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-712.php">Quebec Nordiques (2) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-713.php">Arizona Coyotes (5) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-714.php">San Jose Sharks (7) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-715.php">Minnesota Wild (3) vs Detroit Red Wings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-716.php">Toronto Maple Leafs (2) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-717.php">Dallas Stars (3) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-718.php">Carolina Hurricanes (1) vs Seattle Saints (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-719.php">Nashville Predators (8) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-720.php">Columbus Blue Jackets (0) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-721.php">Montreal Canadiens (1) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-722.php">New York Islanders (3) vs Pittsburgh Penguins (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-723.php">Philadelphia Flyers (0) vs Ottawa Senators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-683.php">Providence Bruins (2) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-684.php">Laval Chiefs (3) vs Chicago Wolves (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-685.php">Springfield Falcons (1) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-686.php">Grand Rapids Griffins (7) vs Portland Pirates (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 99</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-724.php">Vancouver Canucks (6) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-725.php">Calgary Flames (3) vs San Jose Sharks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-726.php">Anaheim Ducks (4) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-727.php">Boston Bruins (5) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-728.php">Dallas Stars (2) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-729.php">Colorado Avalanche (3) vs Edmonton Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-730.php">Washington Capitals (3) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-731.php">Vegas Golden Knights (4) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-732.php">Florida Panthers (0) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-733.php">Winnipeg Jets (4) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-734.php">Chicago Blackhawks (0) vs Philadelphia Flyers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-687.php">Houston Aeros (1) vs Albany Devils (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-688.php">Milwaukee Admirals (1) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-689.php">Rouyn-Noranda Huskies (5) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-690.php">Chicoutimi Saguenéens (1) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-691.php">Peoria Rivermen (0) vs San Antonio Rampage (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-692.php">Joliette Sportif (5) vs Paradise Dark Angels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-693.php">Gatineau Olympiques (4) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-694.php">Bridgeport Sound Tigers (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-695.php">Mercer Island Archangels (1) vs Roberval Dwarfs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 100</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-735.php">Seattle Saints (1) vs Calgary Flames (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-736.php">Detroit Red Wings (2) vs Colorado Avalanche (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-737.php">Quebec Nordiques (6) vs Montreal Canadiens (5)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-738.php">Anaheim Ducks (3) vs Los Angeles Kings (4)</a>  - SO (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-696.php">Manitoba Moose (1) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-697.php">Springfield Falcons (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-698.php">Oklahoma City Barons (4) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-699.php">Charlotte Checkers (3) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-700.php">Las Vegas Gamblers (5) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-701.php">Binghamton Senators (4) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-702.php">Chicago Wolves (2) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-703.php">Portland Pirates (1) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-704.php">Trois-Rivières Draveurs (3) vs Bridgeport Sound Tigers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-705.php">Albany Devils (5) vs Rochester Americans (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 101</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-739.php">St. Louis Blues (1) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-740.php">Washington Capitals (6) vs Tampa Bay Lightning (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-741.php">Pittsburgh Penguins (0) vs Boston Bruins (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-706.php">Joliette Sportif (4) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-707.php">Chicoutimi Saguenéens (4) vs Peoria Rivermen (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-708.php">Milwaukee Admirals (1) vs Charlotte Checkers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-709.php">Roberval Dwarfs (4) vs Oklahoma City Barons (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 102</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-742.php">San Jose Sharks (4) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-743.php">Los Angeles Kings (3) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-744.php">New York Islanders (1) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-745.php">Carolina Hurricanes (3) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-746.php">New York Rangers (5) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-747.php">Winnipeg Jets (3) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-748.php">Buffalo Sabres (3) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-749.php">Montreal Canadiens (5) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-750.php">Minnesota Wild (4) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-751.php">Toronto Maple Leafs (3) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-752.php">Columbus Blue Jackets (2) vs Washington Capitals (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-710.php">Landshut Cannibals (6) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-711.php">Norfolk Admirals (5) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-712.php">Paradise Dark Angels (6) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-713.php">Wilkes-Barre/Scranton Penguins (1) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-714.php">Grand Rapids Griffins (1) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-715.php">San Antonio Rampage (3) vs Trois-Rivières Draveurs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 103</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-753.php">Vegas Golden Knights (0) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-754.php">Edmonton Oilers (2) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-755.php">Philadelphia Flyers (5) vs New York Rangers (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-756.php">Ottawa Senators (4) vs Pittsburgh Penguins (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-757.php">Colorado Avalanche (6) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-758.php">Nashville Predators (3) vs Minnesota Wild (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-759.php">Boston Bruins (1) vs Columbus Blue Jackets (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-716.php">Las Vegas Gamblers (2) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-717.php">Albany Devils (2) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-718.php">Houston Aeros (2) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-719.php">Portland Pirates (4) vs Chicago Wolves (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-720.php">Providence Bruins (4) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-721.php">Bridgeport Sound Tigers (1) vs San Antonio Rampage (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 104</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-760.php">Arizona Coyotes (2) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-761.php">Buffalo Sabres (3) vs Ottawa Senators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-762.php">Calgary Flames (6) vs Edmonton Oilers (1)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-722.php">Paradise Dark Angels (2) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-723.php">Mercer Island Archangels (5) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-724.php">Springfield Falcons (6) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-725.php">Rochester Americans (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-726.php">Rouyn-Noranda Huskies (1) vs Gatineau Olympiques (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-727.php">Manitoba Moose (3) vs Wilkes-Barre/Scranton Penguins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-728.php">Landshut Cannibals (3) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-729.php">Charlotte Checkers (4) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-730.php">Trois-Rivières Draveurs (3) vs Roberval Dwarfs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-731.php">Peoria Rivermen (3) vs Providence Bruins (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 105</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-763.php">Montreal Canadiens (3) vs New York Islanders (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-764.php">Tampa Bay Lightning (4) vs Toronto Maple Leafs (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-765.php">Boston Bruins (3) vs Carolina Hurricanes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-766.php">Chicago Blackhawks (3) vs Colorado Avalanche (6)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-767.php">Washington Capitals (3) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-768.php">Pittsburgh Penguins (4) vs Philadelphia Flyers (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-769.php">Anaheim Ducks (3) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-770.php">Dallas Stars (4) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-771.php">New Jersey Devils (0) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-772.php">Florida Panthers (5) vs Los Angeles Kings (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-732.php">Milwaukee Admirals (4) vs Paradise Dark Angels (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-733.php">Chicoutimi Saguenéens (4) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-734.php">Norfolk Admirals (4) vs Bridgeport Sound Tigers (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-735.php">Adirondack Phantoms (3) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-736.php">Connecticut Whale (3) vs Springfield Falcons (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-737.php">Joliette Sportif (3) vs Mercer Island Archangels (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-738.php">Rouyn-Noranda Huskies (3) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-739.php">Roberval Dwarfs (2) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-740.php">Gatineau Olympiques (4) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-741.php">Chicago Wolves (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-742.php">Rockford IceHogs (1) vs Charlotte Checkers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 106</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-773.php">San Jose Sharks (2) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-774.php">Arizona Coyotes (1) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-775.php">Minnesota Wild (0) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-776.php">Detroit Red Wings (1) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-777.php">Seattle Saints (2) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-778.php">Columbus Blue Jackets (3) vs Florida Panthers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-779.php">Winnipeg Jets (5) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-780.php">Carolina Hurricanes (2) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-781.php">Philadelphia Flyers (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-782.php">Ottawa Senators (1) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-783.php">New York Islanders (2) vs Boston Bruins (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-743.php">Manitoba Moose (3) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-744.php">Laval Chiefs (1) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-745.php">Wilkes-Barre/Scranton Penguins (1) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-746.php">Providence Bruins (1) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-747.php">Las Vegas Gamblers (3) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-748.php">San Antonio Rampage (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-749.php">Bridgeport Sound Tigers (3) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-750.php">Grand Rapids Griffins (3) vs Milwaukee Admirals (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-751.php">Oklahoma City Barons (7) vs Albany Devils (6)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 107</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-784.php">Pittsburgh Penguins (2) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-785.php">Toronto Maple Leafs (3) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-786.php">Los Angeles Kings (3) vs San Jose Sharks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-787.php">Vegas Golden Knights (3) vs Arizona Coyotes (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-788.php">Edmonton Oilers (5) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-789.php">Nashville Predators (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-790.php">Colorado Avalanche (4) vs Winnipeg Jets (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-752.php">Houston Aeros (3) vs Rouyn-Noranda Huskies (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-753.php">Portland Pirates (2) vs Connecticut Whale (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-754.php">San Antonio Rampage (6) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-755.php">Peoria Rivermen (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-756.php">Binghamton Senators (4) vs Paradise Dark Angels (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-757.php">Laval Chiefs (5) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-758.php">Rochester Americans (1) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-759.php">Landshut Cannibals (4) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-760.php">Trois-Rivières Draveurs (4) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-761.php">Mercer Island Archangels (2) vs Springfield Falcons (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 108</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-791.php">Quebec Nordiques (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-792.php">New York Rangers (5) vs Pittsburgh Penguins (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-793.php">Vancouver Canucks (2) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-794.php">Florida Panthers (2) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-795.php">Calgary Flames (2) vs Edmonton Oilers (5)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-796.php">Buffalo Sabres (5) vs New York Islanders (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-762.php">Charlotte Checkers (1) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-763.php">Milwaukee Admirals (1) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-764.php">Bridgeport Sound Tigers (1) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-765.php">Lake Erie Monsters (2) vs Providence Bruins (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-766.php">Oklahoma City Barons (3) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-767.php">Joliette Sportif (5) vs Binghamton Senators (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 109</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-797.php">Carolina Hurricanes (1) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-798.php">Colorado Avalanche (3) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-799.php">Philadelphia Flyers (2) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-800.php">Boston Bruins (1) vs Montreal Canadiens (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-801.php">Anaheim Ducks (4) vs St. Louis Blues (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-768.php">Chicoutimi Saguenéens (3) vs San Antonio Rampage (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-769.php">Paradise Dark Angels (2) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-770.php">Wilkes-Barre/Scranton Penguins (5) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-771.php">Rouyn-Noranda Huskies (6) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-772.php">Albany Devils (4) vs Charlotte Checkers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-773.php">Springfield Falcons (5) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-774.php">Chicago Wolves (2) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-775.php">Roberval Dwarfs (6) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-776.php">Rockford IceHogs (5) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-777.php">Manitoba Moose (4) vs Adirondack Phantoms (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-778.php">Gatineau Olympiques (3) vs Lake Erie Monsters (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 110</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-802.php">Washington Capitals (2) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-803.php">Minnesota Wild (3) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-804.php">New Jersey Devils (2) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-805.php">Vancouver Canucks (4) vs Chicago Blackhawks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-806.php">Arizona Coyotes (4) vs Detroit Red Wings (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-779.php">Connecticut Whale (1) vs Joliette Sportif (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-780.php">Norfolk Admirals (0) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-781.php">Grand Rapids Griffins (7) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-782.php">Las Vegas Gamblers (5) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-783.php">Houston Aeros (4) vs Rouyn-Noranda Huskies (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-784.php">Binghamton Senators (2) vs Chicoutimi Saguenéens (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-785.php">Springfield Falcons (3) vs Portland Pirates (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-786.php">Providence Bruins (3) vs Albany Devils (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-787.php">Charlotte Checkers (5) vs Manitoba Moose (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-788.php">Adirondack Phantoms (1) vs San Antonio Rampage (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 111</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-807.php">Colorado Avalanche (2) vs Dallas Stars (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-808.php">New York Rangers (3) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-809.php">San Jose Sharks (4) vs Anaheim Ducks (1)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-789.php">Rochester Americans (1) vs Connecticut Whale (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-790.php">Laval Chiefs (7) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-791.php">Lake Erie Monsters (3) vs Paradise Dark Angels (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-792.php">Rockford IceHogs (4) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-793.php">Peoria Rivermen (0) vs Gatineau Olympiques (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 112</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-810.php">Calgary Flames (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-811.php">Ottawa Senators (2) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-812.php">Seattle Saints (1) vs Buffalo Sabres (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-794.php">Binghamton Senators (5) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-795.php">Bridgeport Sound Tigers (3) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-796.php">Landshut Cannibals (5) vs Providence Bruins (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-797.php">Mercer Island Archangels (4) vs Houston Aeros (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 113</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-813.php">Edmonton Oilers (0) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-814.php">San Jose Sharks (4) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-815.php">Boston Bruins (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-816.php">Anaheim Ducks (2) vs New Jersey Devils (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-798.php">Springfield Falcons (2) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-799.php">Adirondack Phantoms (3) vs Laval Chiefs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-800.php">Albany Devils (4) vs Norfolk Admirals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-801.php">Gatineau Olympiques (2) vs Oklahoma City Barons (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 114</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-817.php">Seattle Saints (2) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-818.php">St. Louis Blues (2) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-819.php">Carolina Hurricanes (4) vs New York Rangers (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-802.php">Chicoutimi Saguenéens (2) vs Landshut Cannibals (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-803.php">Houston Aeros (1) vs Mercer Island Archangels (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-804.php">San Antonio Rampage (5) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-805.php">Bridgeport Sound Tigers (0) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-806.php">Manitoba Moose (0) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-807.php">Portland Pirates (1) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-808.php">Grand Rapids Griffins (1) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-809.php">Connecticut Whale (3) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-810.php">Rouyn-Noranda Huskies (4) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-811.php">Paradise Dark Angels (5) vs Chicago Wolves (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 115</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-820.php">Philadelphia Flyers (3) vs Boston Bruins (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-821.php">Buffalo Sabres (6) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-822.php">Minnesota Wild (2) vs Columbus Blue Jackets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-812.php">Las Vegas Gamblers (2) vs Milwaukee Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-813.php">Wilkes-Barre/Scranton Penguins (5) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-814.php">Providence Bruins (5) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-815.php">Norfolk Admirals (3) vs Adirondack Phantoms (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 116</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-823.php">Vegas Golden Knights (6) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-824.php">Florida Panthers (2) vs Seattle Saints (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-825.php">Ottawa Senators (4) vs Minnesota Wild (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-816.php">Joliette Sportif (5) vs Rouyn-Noranda Huskies (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-817.php">Charlotte Checkers (1) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-818.php">Landshut Cannibals (1) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-819.php">Trois-Rivières Draveurs (5) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-820.php">Portland Pirates (0) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-821.php">Oklahoma City Barons (5) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-822.php">Rockford IceHogs (2) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-823.php">Chicago Wolves (3) vs Paradise Dark Angels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-824.php">Houston Aeros (3) vs Grand Rapids Griffins (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-825.php">Mercer Island Archangels (1) vs Gatineau Olympiques (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 117</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-826.php">Dallas Stars (4) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-827.php">Detroit Red Wings (3) vs New York Islanders (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-828.php">Columbus Blue Jackets (3) vs Toronto Maple Leafs (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-829.php">Washington Capitals (2) vs Edmonton Oilers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-826.php">Binghamton Senators (3) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-827.php">Rochester Americans (2) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-828.php">Providence Bruins (3) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-829.php">Peoria Rivermen (4) vs Laval Chiefs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-830.php">Lake Erie Monsters (3) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-831.php">Adirondack Phantoms (3) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-832.php">Milwaukee Admirals (2) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-833.php">Gatineau Olympiques (5) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-834.php">Trois-Rivières Draveurs (4) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-835.php">Connecticut Whale (4) vs Oklahoma City Barons (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 118</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-830.php">Arizona Coyotes (3) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-831.php">New Jersey Devils (3) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-832.php">Vancouver Canucks (6) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-833.php">Los Angeles Kings (4) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-834.php">Colorado Avalanche (5) vs Chicago Blackhawks (1)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-835.php">Pittsburgh Penguins (4) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-836.php">Boston Bruins (3) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-837.php">San Jose Sharks (2) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-838.php">Buffalo Sabres (4) vs St. Louis Blues (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-839.php">Seattle Saints (4) vs Detroit Red Wings (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-836.php">Joliette Sportif (2) vs Mercer Island Archangels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-837.php">Chicoutimi Saguenéens (1) vs Providence Bruins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-838.php">Peoria Rivermen (3) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-839.php">Chicago Wolves (3) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-840.php">San Antonio Rampage (2) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-841.php">Springfield Falcons (2) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-842.php">Paradise Dark Angels (2) vs Milwaukee Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-843.php">Manitoba Moose (4) vs Binghamton Senators (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-844.php">Norfolk Admirals (4) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-845.php">Las Vegas Gamblers (2) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-846.php">Wilkes-Barre/Scranton Penguins (6) vs Adirondack Phantoms (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 119</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-840.php">Minnesota Wild (2) vs Dallas Stars (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-841.php">Nashville Predators (4) vs Los Angeles Kings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-842.php">Florida Panthers (4) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-843.php">Toronto Maple Leafs (1) vs Anaheim Ducks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-847.php">Roberval Dwarfs (4) vs Joliette Sportif (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-848.php">Paradise Dark Angels (3) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-849.php">Laval Chiefs (3) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-850.php">Gatineau Olympiques (2) vs Trois-Rivières Draveurs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 120</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-844.php">Ottawa Senators (5) vs Colorado Avalanche (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-845.php">Chicago Blackhawks (2) vs Vancouver Canucks (1)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-851.php">Grand Rapids Griffins (2) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-852.php">Rockford IceHogs (5) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-853.php">Rouyn-Noranda Huskies (2) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-854.php">San Antonio Rampage (3) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-855.php">Mercer Island Archangels (3) vs Las Vegas Gamblers (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-856.php">Albany Devils (2) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-857.php">Adirondack Phantoms (4) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-858.php">Houston Aeros (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-859.php">Norfolk Admirals (3) vs Oklahoma City Barons (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-860.php">Bridgeport Sound Tigers (2) vs Landshut Cannibals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 121</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-846.php">Quebec Nordiques (5) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-847.php">Vegas Golden Knights (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-848.php">Minnesota Wild (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-849.php">New Jersey Devils (3) vs Buffalo Sabres (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-850.php">Philadelphia Flyers (2) vs New York Rangers (3)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-851.php">Dallas Stars (0) vs Arizona Coyotes (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-852.php">Toronto Maple Leafs (2) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-853.php">Seattle Saints (1) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-854.php">New York Islanders (4) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-855.php">Anaheim Ducks (1) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-856.php">Montreal Canadiens (5) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-857.php">Detroit Red Wings (3) vs Edmonton Oilers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-861.php">Milwaukee Admirals (2) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-862.php">Lake Erie Monsters (1) vs San Antonio Rampage (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-863.php">Providence Bruins (4) vs Paradise Dark Angels (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-864.php">Springfield Falcons (3) vs Gatineau Olympiques (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-865.php">Binghamton Senators (2) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-866.php">Charlotte Checkers (3) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-867.php">Mercer Island Archangels (2) vs Houston Aeros (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-868.php">Landshut Cannibals (4) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-869.php">Albany Devils (2) vs Joliette Sportif (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-870.php">Rouyn-Noranda Huskies (4) vs Trois-Rivières Draveurs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-871.php">Oklahoma City Barons (1) vs Chicago Wolves (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 122</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-858.php">Los Angeles Kings (3) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-859.php">Vancouver Canucks (3) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-860.php">Colorado Avalanche (3) vs Minnesota Wild (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-861.php">Quebec Nordiques (5) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-862.php">Carolina Hurricanes (4) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-863.php">Boston Bruins (3) vs New York Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-864.php">Toronto Maple Leafs (2) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-865.php">St. Louis Blues (4) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-866.php">Washington Capitals (2) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-867.php">Dallas Stars (1) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-868.php">Arizona Coyotes (3) vs Vegas Golden Knights (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-872.php">Connecticut Whale (2) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-873.php">Chicoutimi Saguenéens (3) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-874.php">Portland Pirates (3) vs Norfolk Admirals (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-875.php">Wilkes-Barre/Scranton Penguins (2) vs Peoria Rivermen (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-876.php">Laval Chiefs (5) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-877.php">Manitoba Moose (1) vs Binghamton Senators (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 123</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-869.php">Columbus Blue Jackets (5) vs Carolina Hurricanes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-870.php">Calgary Flames (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-871.php">Winnipeg Jets (1) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-872.php">Florida Panthers (1) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-873.php">Edmonton Oilers (5) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-874.php">Pittsburgh Penguins (4) vs Philadelphia Flyers (5)</a>  - SO (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-875.php">Tampa Bay Lightning (1) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-876.php">San Jose Sharks (4) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-877.php">Nashville Predators (0) vs Colorado Avalanche (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-878.php">Las Vegas Gamblers (3) vs Mercer Island Archangels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-879.php">Rochester Americans (4) vs Milwaukee Admirals (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-880.php">Roberval Dwarfs (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-881.php">Gatineau Olympiques (2) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-882.php">Oklahoma City Barons (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-883.php">Manitoba Moose (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-884.php">Trois-Rivières Draveurs (1) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-885.php">Chicago Wolves (4) vs Albany Devils (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-886.php">Bridgeport Sound Tigers (3) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-887.php">Houston Aeros (3) vs San Antonio Rampage (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-888.php">Joliette Sportif (0) vs Grand Rapids Griffins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 124</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-878.php">Philadelphia Flyers (3) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-879.php">Chicago Blackhawks (2) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-880.php">Edmonton Oilers (5) vs Dallas Stars (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-881.php">New York Rangers (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-882.php">Montreal Canadiens (4) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-883.php">Detroit Red Wings (3) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-884.php">Seattle Saints (5) vs Winnipeg Jets (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-885.php">Nashville Predators (1) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-886.php">Boston Bruins (2) vs San Jose Sharks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-887.php">Columbus Blue Jackets (0) vs Pittsburgh Penguins (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-889.php">Rockford IceHogs (3) vs Las Vegas Gamblers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-890.php">Lake Erie Monsters (2) vs Paradise Dark Angels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-891.php">Landshut Cannibals (4) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-892.php">Adirondack Phantoms (2) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-893.php">Binghamton Senators (3) vs Laval Chiefs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-894.php">Charlotte Checkers (4) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-895.php">Springfield Falcons (3) vs Peoria Rivermen (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 125</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-888.php">Buffalo Sabres (2) vs Boston Bruins (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-889.php">Los Angeles Kings (2) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-890.php">New York Islanders (2) vs Columbus Blue Jackets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-891.php">Vegas Golden Knights (2) vs Seattle Saints (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-892.php">Vancouver Canucks (3) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-893.php">Winnipeg Jets (0) vs Ottawa Senators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-896.php">Albany Devils (3) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-897.php">Rockford IceHogs (2) vs Gatineau Olympiques (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-898.php">Landshut Cannibals (2) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-899.php">Rouyn-Noranda Huskies (3) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-900.php">Rochester Americans (1) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-901.php">Connecticut Whale (0) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-902.php">Chicoutimi Saguenéens (1) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-903.php">Paradise Dark Angels (3) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-904.php">San Antonio Rampage (5) vs Joliette Sportif (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-905.php">Trois-Rivières Draveurs (3) vs Charlotte Checkers (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 126</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-894.php">Chicago Blackhawks (3) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-895.php">Dallas Stars (3) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-896.php">Quebec Nordiques (6) vs New York Islanders (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-906.php">Roberval Dwarfs (0) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-907.php">Peoria Rivermen (3) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-908.php">Laval Chiefs (4) vs Landshut Cannibals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-909.php">Binghamton Senators (2) vs Rochester Americans (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-910.php">Providence Bruins (5) vs Lake Erie Monsters (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-911.php">Wilkes-Barre/Scranton Penguins (3) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-912.php">Portland Pirates (1) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-913.php">Gatineau Olympiques (0) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-914.php">Mercer Island Archangels (4) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-915.php">Norfolk Admirals (4) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-916.php">Grand Rapids Griffins (0) vs Las Vegas Gamblers (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 127</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-897.php">New Jersey Devils (0) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-898.php">Vancouver Canucks (5) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-899.php">New York Rangers (4) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-900.php">Florida Panthers (4) vs Montreal Canadiens (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-901.php">Vegas Golden Knights (1) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-902.php">Buffalo Sabres (2) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-903.php">Los Angeles Kings (2) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-904.php">Washington Capitals (1) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-905.php">Pittsburgh Penguins (5) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-906.php">Ottawa Senators (2) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-907.php">Boston Bruins (2) vs Philadelphia Flyers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-917.php">Oklahoma City Barons (4) vs Binghamton Senators (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-918.php">Albany Devils (4) vs Connecticut Whale (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-919.php">Milwaukee Admirals (7) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-920.php">Joliette Sportif (2) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-921.php">Houston Aeros (4) vs San Antonio Rampage (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-922.php">Las Vegas Gamblers (1) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-923.php">Adirondack Phantoms (2) vs Paradise Dark Angels (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-924.php">Providence Bruins (2) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-925.php">Chicago Wolves (4) vs Roberval Dwarfs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 128</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-908.php">San Jose Sharks (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-909.php">Winnipeg Jets (3) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-910.php">Minnesota Wild (1) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-911.php">Edmonton Oilers (2) vs Los Angeles Kings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-912.php">Tampa Bay Lightning (2) vs Florida Panthers (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-913.php">Anaheim Ducks (6) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-914.php">Toronto Maple Leafs (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-915.php">Seattle Saints (1) vs Vancouver Canucks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-916.php">St. Louis Blues (3) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-917.php">Montreal Canadiens (3) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-918.php">Pittsburgh Penguins (2) vs Columbus Blue Jackets (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-926.php">Peoria Rivermen (3) vs Albany Devils (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-927.php">Norfolk Admirals (2) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-928.php">Joliette Sportif (4) vs Laval Chiefs (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-929.php">Bridgeport Sound Tigers (3) vs Rockford IceHogs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-930.php">Springfield Falcons (4) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-931.php">Oklahoma City Barons (1) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-932.php">Manitoba Moose (3) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-933.php">Milwaukee Admirals (4) vs Mercer Island Archangels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-934.php">Chicoutimi Saguenéens (5) vs Rochester Americans (6)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 129</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-919.php">New York Islanders (2) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-920.php">Nashville Predators (3) vs San Jose Sharks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-921.php">Detroit Red Wings (4) vs Boston Bruins (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-935.php">Chicago Wolves (4) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-936.php">Portland Pirates (6) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-937.php">Trois-Rivières Draveurs (5) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-938.php">Grand Rapids Griffins (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-939.php">Adirondack Phantoms (3) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-940.php">Wilkes-Barre/Scranton Penguins (2) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-941.php">Las Vegas Gamblers (6) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-942.php">San Antonio Rampage (3) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-943.php">Roberval Dwarfs (7) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-944.php">Connecticut Whale (3) vs Milwaukee Admirals (7)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 130</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-922.php">Arizona Coyotes (1) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-923.php">Chicago Blackhawks (1) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-924.php">Columbus Blue Jackets (4) vs Pittsburgh Penguins (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-925.php">Quebec Nordiques (6) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-926.php">Los Angeles Kings (3) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-927.php">Tampa Bay Lightning (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-928.php">Edmonton Oilers (4) vs Carolina Hurricanes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-945.php">Rockford IceHogs (3) vs Joliette Sportif (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-946.php">Rochester Americans (2) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-947.php">Landshut Cannibals (5) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-948.php">Mercer Island Archangels (3) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-949.php">Charlotte Checkers (4) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-950.php">Adirondack Phantoms (3) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-951.php">Lake Erie Monsters (1) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-952.php">Gatineau Olympiques (6) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-953.php">Houston Aeros (1) vs Paradise Dark Angels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-954.php">Grand Rapids Griffins (2) vs San Antonio Rampage (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 131</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-929.php">Toronto Maple Leafs (1) vs New York Islanders (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-930.php">Dallas Stars (3) vs Edmonton Oilers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-931.php">St. Louis Blues (4) vs Tampa Bay Lightning (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-932.php">Colorado Avalanche (4) vs Montreal Canadiens (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-933.php">Anaheim Ducks (3) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-934.php">Washington Capitals (2) vs Philadelphia Flyers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-955.php">Roberval Dwarfs (2) vs Las Vegas Gamblers (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-956.php">Rouyn-Noranda Huskies (8) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-957.php">Joliette Sportif (3) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-958.php">Oklahoma City Barons (3) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-959.php">Albany Devils (3) vs Providence Bruins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-960.php">Milwaukee Admirals (1) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-961.php">Peoria Rivermen (3) vs Springfield Falcons (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-962.php">Binghamton Senators (2) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-963.php">Mercer Island Archangels (2) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-964.php">Chicoutimi Saguenéens (1) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-965.php">Rochester Americans (6) vs Houston Aeros (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 132</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-935.php">Boston Bruins (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-936.php">Detroit Red Wings (2) vs Chicago Blackhawks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-937.php">Calgary Flames (2) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-938.php">Minnesota Wild (1) vs St. Louis Blues (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-939.php">Columbus Blue Jackets (4) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-940.php">Vancouver Canucks (4) vs New Jersey Devils (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-941.php">Ottawa Senators (2) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-942.php">Los Angeles Kings (1) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-943.php">Dallas Stars (4) vs New York Rangers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-944.php">San Jose Sharks (4) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-945.php">New York Islanders (4) vs Anaheim Ducks (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-966.php">Charlotte Checkers (3) vs Adirondack Phantoms (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-967.php">Chicago Wolves (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-968.php">Manitoba Moose (2) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-969.php">Binghamton Senators (2) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-970.php">Laval Chiefs (2) vs Rouyn-Noranda Huskies (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 133</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-946.php">Montreal Canadiens (3) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-947.php">Philadelphia Flyers (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-948.php">New Jersey Devils (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-949.php">Nashville Predators (6) vs Vancouver Canucks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-950.php">Carolina Hurricanes (4) vs San Jose Sharks (5)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-971.php">Rockford IceHogs (3) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-972.php">Peoria Rivermen (0) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-973.php">Mercer Island Archangels (7) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-974.php">Joliette Sportif (1) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-975.php">Springfield Falcons (1) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-976.php">Las Vegas Gamblers (2) vs Portland Pirates (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 134</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-951.php">Minnesota Wild (1) vs Los Angeles Kings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-952.php">Calgary Flames (1) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-953.php">Florida Panthers (4) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-954.php">Vegas Golden Knights (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-955.php">Quebec Nordiques (4) vs Boston Bruins (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-956.php">Ottawa Senators (4) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-957.php">Chicago Blackhawks (4) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-958.php">Buffalo Sabres (2) vs Edmonton Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-959.php">Montreal Canadiens (5) vs Tampa Bay Lightning (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-960.php">Philadelphia Flyers (3) vs Carolina Hurricanes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-977.php">Bridgeport Sound Tigers (4) vs Peoria Rivermen (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-978.php">Houston Aeros (5) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-979.php">Lake Erie Monsters (1) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-980.php">Roberval Dwarfs (2) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-981.php">Manitoba Moose (6) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-982.php">Providence Bruins (2) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-983.php">Adirondack Phantoms (3) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-984.php">Grand Rapids Griffins (4) vs Paradise Dark Angels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-985.php">Wilkes-Barre/Scranton Penguins (5) vs San Antonio Rampage (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-986.php">Landshut Cannibals (2) vs Albany Devils (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 135</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-961.php">St. Louis Blues (4) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-962.php">Toronto Maple Leafs (1) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-963.php">New York Rangers (3) vs Ottawa Senators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-964.php">Anaheim Ducks (2) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-965.php">Winnipeg Jets (3) vs Colorado Avalanche (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-966.php">Chicago Blackhawks (3) vs Arizona Coyotes (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-967.php">Buffalo Sabres (6) vs Detroit Red Wings (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-968.php">Vegas Golden Knights (5) vs Quebec Nordiques (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-969.php">New Jersey Devils (1) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-970.php">Boston Bruins (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-971.php">Tampa Bay Lightning (4) vs Vancouver Canucks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-987.php">Milwaukee Admirals (5) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-988.php">Trois-Rivières Draveurs (3) vs Adirondack Phantoms (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-989.php">Norfolk Admirals (4) vs Manitoba Moose (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-990.php">Rockford IceHogs (2) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-991.php">Albany Devils (5) vs Gatineau Olympiques (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-992.php">Rouyn-Noranda Huskies (1) vs Laval Chiefs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 136</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-972.php">Seattle Saints (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-973.php">Colorado Avalanche (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-974.php">San Jose Sharks (0) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-975.php">Carolina Hurricanes (4) vs Philadelphia Flyers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-993.php">Landshut Cannibals (3) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-994.php">Chicoutimi Saguenéens (3) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-995.php">San Antonio Rampage (4) vs Providence Bruins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-996.php">Binghamton Senators (3) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-997.php">Laval Chiefs (2) vs Bridgeport Sound Tigers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 137</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-976.php">Washington Capitals (5) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-977.php">Arizona Coyotes (4) vs Anaheim Ducks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-978.php">Winnipeg Jets (0) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-979.php">New York Islanders (4) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-980.php">Nashville Predators (2) vs Chicago Blackhawks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-981.php">Edmonton Oilers (1) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-982.php">Quebec Nordiques (4) vs Buffalo Sabres (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-983.php">Pittsburgh Penguins (4) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-984.php">Calgary Flames (2) vs San Jose Sharks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-985.php">Florida Panthers (7) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-986.php">Minnesota Wild (4) vs Seattle Saints (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-998.php">Peoria Rivermen (3) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-999.php">Gatineau Olympiques (4) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1000.php">Portland Pirates (1) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1001.php">Rockford IceHogs (2) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1002.php">Paradise Dark Angels (3) vs Norfolk Admirals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 138</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-987.php">St. Louis Blues (2) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-988.php">Washington Capitals (1) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-989.php">Toronto Maple Leafs (3) vs Boston Bruins (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-990.php">Dallas Stars (4) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-991.php">Arizona Coyotes (2) vs Nashville Predators (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-992.php">Columbus Blue Jackets (4) vs Ottawa Senators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-993.php">Tampa Bay Lightning (3) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-994.php">Anaheim Ducks (6) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-995.php">Philadelphia Flyers (4) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-996.php">Vancouver Canucks (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-997.php">Los Angeles Kings (3) vs Detroit Red Wings (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1003.php">Chicoutimi Saguenéens (2) vs Lake Erie Monsters (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1004.php">Connecticut Whale (1) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1005.php">Las Vegas Gamblers (0) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1006.php">Joliette Sportif (3) vs Rockford IceHogs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1007.php">Roberval Dwarfs (2) vs Trois-Rivières Draveurs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 139</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-998.php">Vegas Golden Knights (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-999.php">New York Rangers (5) vs Colorado Avalanche (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1000.php">Buffalo Sabres (4) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1001.php">Quebec Nordiques (1) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1002.php">St. Louis Blues (4) vs Chicago Blackhawks (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1003.php">Washington Capitals (3) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1004.php">Edmonton Oilers (3) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1005.php">San Jose Sharks (1) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1006.php">Los Angeles Kings (1) vs Anaheim Ducks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1007.php">Vancouver Canucks (1) vs Dallas Stars (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1008.php">Laval Chiefs (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1009.php">Oklahoma City Barons (4) vs Chicago Wolves (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1010.php">Springfield Falcons (3) vs Peoria Rivermen (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1011.php">Gatineau Olympiques (5) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1012.php">Rochester Americans (3) vs Binghamton Senators (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1013.php">Grand Rapids Griffins (5) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1014.php">Manitoba Moose (1) vs Connecticut Whale (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 140</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1008.php">Carolina Hurricanes (3) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1009.php">Detroit Red Wings (1) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1010.php">New York Islanders (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1011.php">Winnipeg Jets (3) vs Vegas Golden Knights (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1012.php">Florida Panthers (3) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1013.php">Seattle Saints (3) vs Pittsburgh Penguins (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1014.php">Montreal Canadiens (3) vs Boston Bruins (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1015.php">Nashville Predators (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1016.php">Ottawa Senators (1) vs Columbus Blue Jackets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1015.php">Providence Bruins (3) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1016.php">Charlotte Checkers (4) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1017.php">Chicoutimi Saguenéens (1) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1018.php">Trois-Rivières Draveurs (3) vs Paradise Dark Angels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1019.php">Wilkes-Barre/Scranton Penguins (2) vs Adirondack Phantoms (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 141</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1017.php">Calgary Flames (4) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1018.php">Arizona Coyotes (1) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1019.php">Washington Capitals (1) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1020.php">Anaheim Ducks (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1021.php">Nashville Predators (3) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1022.php">Columbus Blue Jackets (4) vs Minnesota Wild (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1020.php">Milwaukee Admirals (3) vs Manitoba Moose (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1021.php">Houston Aeros (4) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1022.php">Springfield Falcons (2) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1023.php">Chicago Wolves (4) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1024.php">Mercer Island Archangels (2) vs Gatineau Olympiques (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 142</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1023.php">Dallas Stars (2) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1024.php">Toronto Maple Leafs (6) vs Ottawa Senators (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1025.php">Montreal Canadiens (1) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1026.php">Carolina Hurricanes (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1027.php">Quebec Nordiques (3) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1028.php">Pittsburgh Penguins (3) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1029.php">Boston Bruins (2) vs Colorado Avalanche (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1030.php">Vegas Golden Knights (6) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1031.php">Detroit Red Wings (0) vs Chicago Blackhawks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1032.php">Florida Panthers (4) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1033.php">Buffalo Sabres (3) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1034.php">Anaheim Ducks (4) vs Philadelphia Flyers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1025.php">Trois-Rivières Draveurs (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1026.php">Connecticut Whale (1) vs Laval Chiefs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1027.php">Rochester Americans (5) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1028.php">Providence Bruins (4) vs Norfolk Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 143</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1035.php">Columbus Blue Jackets (4) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1036.php">Winnipeg Jets (1) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1037.php">Arizona Coyotes (3) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1038.php">New York Islanders (3) vs Montreal Canadiens (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1029.php">Las Vegas Gamblers (3) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1030.php">Charlotte Checkers (1) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1031.php">Houston Aeros (6) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1032.php">Rouyn-Noranda Huskies (3) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1033.php">Mercer Island Archangels (5) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1034.php">Paradise Dark Angels (5) vs Providence Bruins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 144</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1039.php">Vancouver Canucks (4) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1040.php">Buffalo Sabres (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1041.php">Edmonton Oilers (6) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1042.php">Colorado Avalanche (2) vs Dallas Stars (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1043.php">Seattle Saints (4) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1044.php">New York Rangers (5) vs San Jose Sharks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1035.php">Wilkes-Barre/Scranton Penguins (6) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1036.php">Gatineau Olympiques (1) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1037.php">Chicago Wolves (1) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1038.php">Trois-Rivières Draveurs (6) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1039.php">Norfolk Admirals (2) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1040.php">Portland Pirates (2) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1041.php">Bridgeport Sound Tigers (4) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1042.php">Lake Erie Monsters (5) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1043.php">Laval Chiefs (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 145</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1045.php">Pittsburgh Penguins (5) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1046.php">Arizona Coyotes (2) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1047.php">Calgary Flames (2) vs Vancouver Canucks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1048.php">Philadelphia Flyers (2) vs Washington Capitals (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1049.php">Buffalo Sabres (3) vs Boston Bruins (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1044.php">Oklahoma City Barons (3) vs Mercer Island Archangels (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1045.php">Manitoba Moose (3) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1046.php">Connecticut Whale (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1047.php">Landshut Cannibals (1) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1048.php">Rockford IceHogs (1) vs Chicago Wolves (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4"><b>----------- Trade Deadline --- Trades can’t be done after this day is simulated!</b></td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 146</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1050.php">Montreal Canadiens (4) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1051.php">Toronto Maple Leafs (3) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1052.php">San Jose Sharks (1) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1053.php">Detroit Red Wings (2) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1054.php">Colorado Avalanche (1) vs Pittsburgh Penguins (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1049.php">Trois-Rivières Draveurs (3) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1050.php">Providence Bruins (2) vs Chicoutimi Saguenéens (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1051.php">Grand Rapids Griffins (1) vs Paradise Dark Angels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1052.php">Roberval Dwarfs (3) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1053.php">Milwaukee Admirals (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1054.php">Norfolk Admirals (2) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1055.php">Joliette Sportif (4) vs Gatineau Olympiques (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 147</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1055.php">Carolina Hurricanes (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1056.php">New Jersey Devils (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1057.php">Quebec Nordiques (0) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1058.php">Los Angeles Kings (5) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1059.php">Dallas Stars (4) vs Tampa Bay Lightning (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1060.php">Anaheim Ducks (5) vs Edmonton Oilers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1056.php">Binghamton Senators (2) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1057.php">Mercer Island Archangels (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1058.php">Las Vegas Gamblers (2) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1059.php">Paradise Dark Angels (4) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1060.php">Rockford IceHogs (3) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1061.php">San Antonio Rampage (4) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1062.php">Gatineau Olympiques (3) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1063.php">Portland Pirates (4) vs Peoria Rivermen (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1064.php">Houston Aeros (5) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1065.php">Charlotte Checkers (1) vs Providence Bruins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1066.php">Joliette Sportif (3) vs Oklahoma City Barons (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 148</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1061.php">Carolina Hurricanes (2) vs New York Islanders (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1062.php">Nashville Predators (2) vs Chicago Blackhawks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1063.php">Ottawa Senators (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1064.php">Pittsburgh Penguins (6) vs Toronto Maple Leafs (7)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1065.php">Minnesota Wild (2) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1066.php">Philadelphia Flyers (1) vs Colorado Avalanche (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1067.php">Albany Devils (3) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1068.php">Chicoutimi Saguenéens (7) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1069.php">Manitoba Moose (4) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1070.php">Peoria Rivermen (2) vs Rouyn-Noranda Huskies (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1071.php">Adirondack Phantoms (3) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1072.php">Milwaukee Admirals (4) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1073.php">Springfield Falcons (2) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1074.php">Mercer Island Archangels (1) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1075.php">Gatineau Olympiques (0) vs Binghamton Senators (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 149</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1067.php">Washington Capitals (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1068.php">Quebec Nordiques (4) vs New Jersey Devils (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1069.php">Tampa Bay Lightning (2) vs New York Rangers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1070.php">Dallas Stars (2) vs Detroit Red Wings (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1076.php">Oklahoma City Barons (5) vs Joliette Sportif (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1077.php">Trois-Rivières Draveurs (6) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1078.php">Milwaukee Admirals (8) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1079.php">Rochester Americans (2) vs Connecticut Whale (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 150</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1071.php">Boston Bruins (3) vs Montreal Canadiens (6)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1072.php">Calgary Flames (5) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1073.php">Toronto Maple Leafs (3) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1074.php">Buffalo Sabres (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1075.php">Colorado Avalanche (6) vs Vancouver Canucks (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1076.php">St. Louis Blues (6) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1077.php">Edmonton Oilers (4) vs San Jose Sharks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1078.php">Anaheim Ducks (4) vs Winnipeg Jets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1079.php">Chicago Blackhawks (3) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1080.php">Detroit Red Wings (3) vs Dallas Stars (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1080.php">Wilkes-Barre/Scranton Penguins (2) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1081.php">Providence Bruins (5) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1082.php">Laval Chiefs (3) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1083.php">Bridgeport Sound Tigers (3) vs Chicoutimi Saguenéens (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1084.php">Rouyn-Noranda Huskies (4) vs Paradise Dark Angels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1085.php">Las Vegas Gamblers (3) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1086.php">Lake Erie Monsters (1) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1087.php">Norfolk Admirals (3) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1088.php">Connecticut Whale (3) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1089.php">Chicago Wolves (3) vs Gatineau Olympiques (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1090.php">Springfield Falcons (1) vs Landshut Cannibals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 151</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1081.php">Toronto Maple Leafs (4) vs Quebec Nordiques (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1082.php">Carolina Hurricanes (6) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1083.php">Edmonton Oilers (4) vs Anaheim Ducks (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1091.php">Rockford IceHogs (5) vs Milwaukee Admirals (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1092.php">Oklahoma City Barons (3) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1093.php">Portland Pirates (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1094.php">Manitoba Moose (3) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1095.php">Binghamton Senators (1) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1096.php">Joliette Sportif (3) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1097.php">Landshut Cannibals (3) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1098.php">Roberval Dwarfs (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1099.php">Paradise Dark Angels (0) vs Houston Aeros (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1100.php">Chicoutimi Saguenéens (5) vs Providence Bruins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1101.php">San Antonio Rampage (2) vs Norfolk Admirals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 152</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1084.php">New York Islanders (3) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1085.php">New York Rangers (3) vs Seattle Saints (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1086.php">Florida Panthers (3) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1087.php">Philadelphia Flyers (1) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1088.php">Montreal Canadiens (2) vs Pittsburgh Penguins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1089.php">San Jose Sharks (3) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1090.php">Toronto Maple Leafs (1) vs Ottawa Senators (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1091.php">Winnipeg Jets (2) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1092.php">Detroit Red Wings (7) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1093.php">Calgary Flames (3) vs Chicago Blackhawks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1094.php">New Jersey Devils (3) vs Edmonton Oilers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1102.php">Chicago Wolves (3) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1103.php">Rockford IceHogs (5) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1104.php">Oklahoma City Barons (3) vs Springfield Falcons (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 153</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1095.php">Columbus Blue Jackets (2) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1096.php">Dallas Stars (3) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1097.php">Calgary Flames (3) vs Carolina Hurricanes (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1098.php">Arizona Coyotes (5) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1099.php">Ottawa Senators (4) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1100.php">Anaheim Ducks (3) vs Vegas Golden Knights (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1101.php">Vancouver Canucks (3) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1102.php">Quebec Nordiques (3) vs New York Rangers (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1105.php">Binghamton Senators (4) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1106.php">San Antonio Rampage (6) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1107.php">Gatineau Olympiques (1) vs Mercer Island Archangels (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1108.php">Wilkes-Barre/Scranton Penguins (3) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1109.php">Peoria Rivermen (6) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1110.php">Chicago Wolves (2) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1111.php">Providence Bruins (4) vs Milwaukee Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 154</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1103.php">Tampa Bay Lightning (2) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1104.php">Ottawa Senators (3) vs Montreal Canadiens (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1105.php">Philadelphia Flyers (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1106.php">Buffalo Sabres (0) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1107.php">Nashville Predators (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1108.php">Los Angeles Kings (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1109.php">Edmonton Oilers (2) vs San Jose Sharks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1110.php">Chicago Blackhawks (2) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1111.php">Quebec Nordiques (3) vs Seattle Saints (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1112.php">Washington Capitals (5) vs Boston Bruins (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1112.php">Paradise Dark Angels (4) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1113.php">Houston Aeros (5) vs Rockford IceHogs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1114.php">Bridgeport Sound Tigers (2) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1115.php">Charlotte Checkers (4) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1116.php">Laval Chiefs (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1117.php">Lake Erie Monsters (4) vs Chicoutimi Saguenéens (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1118.php">Norfolk Admirals (3) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1119.php">Landshut Cannibals (7) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1120.php">Peoria Rivermen (0) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1121.php">Rochester Americans (6) vs Roberval Dwarfs (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 155</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1113.php">Montreal Canadiens (3) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1114.php">Detroit Red Wings (2) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1115.php">Vegas Golden Knights (5) vs Philadelphia Flyers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1116.php">Chicago Blackhawks (3) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1117.php">Colorado Avalanche (3) vs Quebec Nordiques (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1118.php">Nashville Predators (4) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1119.php">New York Islanders (2) vs Washington Capitals (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1120.php">Winnipeg Jets (3) vs Minnesota Wild (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1121.php">Carolina Hurricanes (1) vs Pittsburgh Penguins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1122.php">St. Louis Blues (5) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1123.php">San Jose Sharks (2) vs Columbus Blue Jackets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1122.php">Joliette Sportif (4) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1123.php">Portland Pirates (1) vs Paradise Dark Angels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1124.php">Gatineau Olympiques (2) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1125.php">Mercer Island Archangels (1) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1126.php">Albany Devils (4) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1127.php">Charlotte Checkers (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1128.php">Roberval Dwarfs (3) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1129.php">Connecticut Whale (1) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1130.php">Houston Aeros (7) vs Providence Bruins (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 156</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1124.php">Vancouver Canucks (3) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1125.php">New York Islanders (3) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1126.php">Boston Bruins (6) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1127.php">Florida Panthers (3) vs Tampa Bay Lightning (6)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1128.php">New York Rangers (6) vs Philadelphia Flyers (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1129.php">Pittsburgh Penguins (6) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1130.php">Seattle Saints (2) vs Quebec Nordiques (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1131.php">San Jose Sharks (3) vs Edmonton Oilers (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1131.php">Grand Rapids Griffins (1) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1132.php">Adirondack Phantoms (3) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1133.php">Las Vegas Gamblers (6) vs Rochester Americans (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1134.php">Springfield Falcons (3) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1135.php">Rockford IceHogs (2) vs Peoria Rivermen (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 157</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1132.php">Colorado Avalanche (1) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1133.php">Washington Capitals (1) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1134.php">Carolina Hurricanes (3) vs Chicago Blackhawks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1135.php">Buffalo Sabres (5) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1136.php">Montreal Canadiens (3) vs St. Louis Blues (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1137.php">Arizona Coyotes (3) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1138.php">Detroit Red Wings (3) vs Los Angeles Kings (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1139.php">Ottawa Senators (4) vs Toronto Maple Leafs (3)</a>  - SO (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1140.php">Quebec Nordiques (4) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1141.php">Florida Panthers (3) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1142.php">Winnipeg Jets (5) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1143.php">Anaheim Ducks (4) vs Vancouver Canucks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1136.php">Rouyn-Noranda Huskies (1) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1137.php">Joliette Sportif (2) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1138.php">Mercer Island Archangels (1) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1139.php">Portland Pirates (2) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1140.php">Binghamton Senators (2) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1141.php">Roberval Dwarfs (2) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1142.php">Rochester Americans (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1143.php">Chicago Wolves (2) vs Connecticut Whale (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1144.php">Providence Bruins (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 158</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1144.php">Columbus Blue Jackets (4) vs New York Islanders (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1145.php">Toronto Maple Leafs (2) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1146.php">Tampa Bay Lightning (4) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1147.php">St. Louis Blues (4) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1148.php">Calgary Flames (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1149.php">Chicago Blackhawks (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1150.php">Edmonton Oilers (2) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1151.php">Philadelphia Flyers (4) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1152.php">Los Angeles Kings (5) vs Anaheim Ducks (3)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1145.php">Lake Erie Monsters (4) vs Rockford IceHogs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1146.php">Norfolk Admirals (2) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1147.php">Landshut Cannibals (4) vs Mercer Island Archangels (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1148.php">Milwaukee Admirals (3) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1149.php">Laval Chiefs (2) vs Grand Rapids Griffins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 159</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1153.php">Quebec Nordiques (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1154.php">Colorado Avalanche (4) vs Detroit Red Wings (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1155.php">Chicago Blackhawks (1) vs Winnipeg Jets (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1156.php">Tampa Bay Lightning (4) vs Washington Capitals (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1157.php">Dallas Stars (0) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1158.php">Los Angeles Kings (3) vs Pittsburgh Penguins (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1159.php">Vegas Golden Knights (5) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1160.php">New York Islanders (3) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1161.php">Seattle Saints (3) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1162.php">Minnesota Wild (5) vs Nashville Predators (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1150.php">Gatineau Olympiques (3) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1151.php">Bridgeport Sound Tigers (4) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1152.php">Oklahoma City Barons (5) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1153.php">Rouyn-Noranda Huskies (5) vs Paradise Dark Angels (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1154.php">Springfield Falcons (3) vs Chicago Wolves (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1155.php">Peoria Rivermen (3) vs Las Vegas Gamblers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1156.php">Connecticut Whale (4) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1157.php">Providence Bruins (1) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1158.php">Landshut Cannibals (2) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1159.php">Grand Rapids Griffins (3) vs Houston Aeros (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 160</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1163.php">Boston Bruins (4) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1164.php">Toronto Maple Leafs (4) vs New York Rangers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1165.php">Nashville Predators (4) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1166.php">Carolina Hurricanes (0) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1167.php">Ottawa Senators (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1168.php">Colorado Avalanche (4) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1169.php">Arizona Coyotes (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1170.php">Quebec Nordiques (2) vs Vancouver Canucks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1171.php">Buffalo Sabres (1) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1172.php">Seattle Saints (4) vs Vegas Golden Knights (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1173.php">Minnesota Wild (3) vs Chicago Blackhawks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1160.php">Norfolk Admirals (1) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1161.php">Albany Devils (3) vs Bridgeport Sound Tigers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1162.php">Las Vegas Gamblers (2) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1163.php">Trois-Rivières Draveurs (3) vs Rochester Americans (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 161</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1174.php">Pittsburgh Penguins (2) vs Carolina Hurricanes (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1175.php">New Jersey Devils (4) vs Florida Panthers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1176.php">St. Louis Blues (2) vs Detroit Red Wings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1177.php">Montreal Canadiens (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1178.php">Dallas Stars (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1179.php">Calgary Flames (3) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1180.php">Arizona Coyotes (5) vs Quebec Nordiques (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1181.php">Edmonton Oilers (2) vs Anaheim Ducks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1164.php">Chicago Wolves (2) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1165.php">Mercer Island Archangels (1) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1166.php">Paradise Dark Angels (1) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1167.php">Joliette Sportif (2) vs Adirondack Phantoms (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1168.php">Connecticut Whale (4) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1169.php">Peoria Rivermen (4) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1170.php">San Antonio Rampage (2) vs Springfield Falcons (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 162</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1182.php">New York Rangers (1) vs Boston Bruins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1183.php">New Jersey Devils (4) vs New York Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1184.php">Ottawa Senators (1) vs Toronto Maple Leafs (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1185.php">Vegas Golden Knights (3) vs Washington Capitals (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1186.php">Los Angeles Kings (4) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1187.php">Pittsburgh Penguins (0) vs Tampa Bay Lightning (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1171.php">Bridgeport Sound Tigers (6) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1172.php">Roberval Dwarfs (3) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1173.php">Rochester Americans (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1174.php">Wilkes-Barre/Scranton Penguins (4) vs Chicoutimi Saguenéens (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1175.php">Charlotte Checkers (4) vs Binghamton Senators (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1176.php">Oklahoma City Barons (1) vs Milwaukee Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1177.php">Laval Chiefs (4) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1178.php">Adirondack Phantoms (2) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1179.php">Rouyn-Noranda Huskies (2) vs Manitoba Moose (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 163</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1188.php">Calgary Flames (4) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1189.php">Nashville Predators (3) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1190.php">New York Rangers (2) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1191.php">St. Louis Blues (4) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1192.php">Vegas Golden Knights (0) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1193.php">Philadelphia Flyers (3) vs Anaheim Ducks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1194.php">Detroit Red Wings (3) vs Edmonton Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1195.php">New Jersey Devils (6) vs San Jose Sharks (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1196.php">Chicago Blackhawks (2) vs Washington Capitals (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1180.php">Connecticut Whale (3) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1181.php">Rockford IceHogs (2) vs Portland Pirates (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1182.php">Springfield Falcons (4) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1183.php">Houston Aeros (5) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1184.php">Joliette Sportif (2) vs Paradise Dark Angels (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1185.php">Lake Erie Monsters (6) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1186.php">Chicoutimi Saguenéens (2) vs Las Vegas Gamblers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1187.php">Providence Bruins (4) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1188.php">Milwaukee Admirals (1) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1189.php">Manitoba Moose (3) vs Laval Chiefs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 164</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1197.php">Florida Panthers (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1198.php">Detroit Red Wings (2) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1199.php">Chicago Blackhawks (3) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1200.php">Edmonton Oilers (2) vs Minnesota Wild (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1201.php">Philadelphia Flyers (1) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1202.php">Boston Bruins (3) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1203.php">Carolina Hurricanes (2) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1204.php">New York Islanders (2) vs Buffalo Sabres (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1205.php">Ottawa Senators (2) vs Tampa Bay Lightning (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1190.php">Binghamton Senators (1) vs Joliette Sportif (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1191.php">Norfolk Admirals (1) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1192.php">Gatineau Olympiques (3) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1193.php">Charlotte Checkers (3) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1194.php">Providence Bruins (1) vs Landshut Cannibals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 165</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1206.php">Ottawa Senators (2) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1207.php">Colorado Avalanche (5) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1208.php">Winnipeg Jets (1) vs Calgary Flames (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1209.php">Anaheim Ducks (3) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1210.php">Toronto Maple Leafs (2) vs St. Louis Blues (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1211.php">Dallas Stars (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1212.php">Boston Bruins (2) vs Arizona Coyotes (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1195.php">Mercer Island Archangels (3) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1196.php">Houston Aeros (2) vs Lake Erie Monsters (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1197.php">Binghamton Senators (1) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1198.php">Grand Rapids Griffins (4) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1199.php">Landshut Cannibals (0) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1200.php">Laval Chiefs (3) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1201.php">Springfield Falcons (4) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1202.php">Wilkes-Barre/Scranton Penguins (4) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1203.php">Charlotte Checkers (3) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1204.php">Bridgeport Sound Tigers (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 166</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1213.php">Seattle Saints (4) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1214.php">Nashville Predators (2) vs New York Islanders (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1215.php">Tampa Bay Lightning (2) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1216.php">Chicago Blackhawks (2) vs St. Louis Blues (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1217.php">Florida Panthers (2) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1218.php">Vegas Golden Knights (1) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1219.php">New York Rangers (2) vs New Jersey Devils (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1205.php">Peoria Rivermen (4) vs Houston Aeros (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1206.php">Chicoutimi Saguenéens (5) vs San Antonio Rampage (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1207.php">Gatineau Olympiques (5) vs Portland Pirates (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1208.php">Springfield Falcons (2) vs Milwaukee Admirals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 167</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1220.php">Toronto Maple Leafs (1) vs Montreal Canadiens (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1221.php">Carolina Hurricanes (1) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1222.php">Nashville Predators (5) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1224.php">Calgary Flames (5) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1225.php">Detroit Red Wings (5) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1226.php">Arizona Coyotes (2) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1227.php">Boston Bruins (4) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1228.php">Edmonton Oilers (3) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1229.php">Tampa Bay Lightning (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1230.php">St. Louis Blues (2) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1231.php">San Jose Sharks (1) vs Winnipeg Jets (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1209.php">Albany Devils (5) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1210.php">Norfolk Admirals (4) vs Charlotte Checkers (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1211.php">Rockford IceHogs (3) vs Mercer Island Archangels (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1212.php">Roberval Dwarfs (1) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1213.php">Oklahoma City Barons (2) vs Paradise Dark Angels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1214.php">Rochester Americans (1) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1215.php">Trois-Rivières Draveurs (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 168</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1232.php">Quebec Nordiques (2) vs Florida Panthers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1233.php">Minnesota Wild (2) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1234.php">Nashville Predators (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1235.php">New York Islanders (5) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1236.php">Ottawa Senators (1) vs Carolina Hurricanes (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1216.php">Springfield Falcons (2) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1217.php">Adirondack Phantoms (5) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1218.php">Rouyn-Noranda Huskies (2) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1219.php">San Antonio Rampage (0) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1220.php">Chicago Wolves (3) vs Joliette Sportif (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1221.php">Paradise Dark Angels (5) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1222.php">Mercer Island Archangels (6) vs Laval Chiefs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 169</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1237.php">Calgary Flames (3) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1238.php">Detroit Red Wings (3) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1239.php">New Jersey Devils (3) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1240.php">St. Louis Blues (4) vs Vancouver Canucks (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1241.php">Florida Panthers (3) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1242.php">Dallas Stars (2) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1243.php">New York Rangers (3) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1244.php">Montreal Canadiens (4) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1245.php">Los Angeles Kings (5) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1246.php">Washington Capitals (4) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1247.php">Winnipeg Jets (1) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1248.php">Anaheim Ducks (3) vs Quebec Nordiques (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1223</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1223.php">Gatineau Olympiques (3) vs Springfield Falcons (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1224.php">San Antonio Rampage (5) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1225.php">Charlotte Checkers (4) vs Bridgeport Sound Tigers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1226.php">Houston Aeros (4) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1227.php">Laval Chiefs (4) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1228.php">Wilkes-Barre/Scranton Penguins (3) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1229.php">Las Vegas Gamblers (3) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1230.php">Rouyn-Noranda Huskies (4) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1231.php">Binghamton Senators (0) vs Albany Devils (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1232.php">Joliette Sportif (3) vs Portland Pirates (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1233.php">Mercer Island Archangels (3) vs Adirondack Phantoms (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 170</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1249.php">Nashville Predators (3) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1250.php">Colorado Avalanche (4) vs Detroit Red Wings (6)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1251.php">Arizona Coyotes (1) vs Dallas Stars (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1252.php">Tampa Bay Lightning (3) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1253.php">Ottawa Senators (1) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1254.php">Vancouver Canucks (3) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1255.php">Montreal Canadiens (4) vs Carolina Hurricanes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1234.php">Chicago Wolves (2) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1235.php">Roberval Dwarfs (3) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1236.php">Rockford IceHogs (2) vs Peoria Rivermen (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 171</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1256.php">Buffalo Sabres (1) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1257.php">Carolina Hurricanes (1) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1258.php">Ottawa Senators (4) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1259.php">Los Angeles Kings (2) vs New York Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1260.php">Columbus Blue Jackets (2) vs Nashville Predators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1261.php">San Jose Sharks (3) vs Florida Panthers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1262.php">Vegas Golden Knights (6) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1263.php">Colorado Avalanche (5) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1264.php">Boston Bruins (0) vs New York Rangers (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1237.php">Wilkes-Barre/Scranton Penguins (6) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1238.php">Bridgeport Sound Tigers (1) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1239.php">Albany Devils (0) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1240.php">Providence Bruins (2) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1241.php">Landshut Cannibals (4) vs Manitoba Moose (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 172</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1265.php">Tampa Bay Lightning (5) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1266.php">Ottawa Senators (2) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1267.php">Calgary Flames (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1268.php">New York Islanders (0) vs Toronto Maple Leafs (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1269.php">Florida Panthers (5) vs New Jersey Devils (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1270.php">Arizona Coyotes (4) vs Los Angeles Kings (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1271.php">Detroit Red Wings (2) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1272.php">Vegas Golden Knights (4) vs Chicago Blackhawks (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1242.php">Laval Chiefs (4) vs Rockford IceHogs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1243.php">Lake Erie Monsters (3) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1244.php">Bridgeport Sound Tigers (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1245.php">Portland Pirates (3) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1246.php">Norfolk Admirals (1) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1247.php">Wilkes-Barre/Scranton Penguins (2) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1248.php">Oklahoma City Barons (5) vs Springfield Falcons (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1249.php">Rochester Americans (1) vs Binghamton Senators (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 173</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1273.php">Colorado Avalanche (3) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1274.php">Tampa Bay Lightning (3) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1275.php">Nashville Predators (3) vs Carolina Hurricanes (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1276.php">Minnesota Wild (1) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1277.php">New York Islanders (4) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1278.php">Edmonton Oilers (1) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1279.php">St. Louis Blues (1) vs Dallas Stars (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1280.php">Buffalo Sabres (4) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1281.php">Toronto Maple Leafs (3) vs Boston Bruins (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1282.php">New York Rangers (3) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1283.php">San Jose Sharks (6) vs Winnipeg Jets (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1250.php">Oklahoma City Barons (0) vs Paradise Dark Angels (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1251.php">Houston Aeros (4) vs Chicago Wolves (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1252.php">Chicoutimi Saguenéens (6) vs Las Vegas Gamblers (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1253.php">Rockford IceHogs (2) vs Mercer Island Archangels (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1254.php">Lake Erie Monsters (4) vs Joliette Sportif (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1255.php">Grand Rapids Griffins (5) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1256.php">Trois-Rivières Draveurs (5) vs Wilkes-Barre/Scranton Penguins (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1257.php">Gatineau Olympiques (1) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1258.php">Providence Bruins (1) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1259.php">Charlotte Checkers (4) vs Peoria Rivermen (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 174</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1284.php">Nashville Predators (3) vs Calgary Flames (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1285.php">Ottawa Senators (1) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1286.php">Washington Capitals (4) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1287.php">Chicago Blackhawks (3) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1288</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1288.php">Philadelphia Flyers (4) vs Pittsburgh Penguins (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1289</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1289.php">Montreal Canadiens (2) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1290</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1290.php">New York Islanders (2) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1291</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1291.php">Los Angeles Kings (3) vs Seattle Saints (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1260.php">Manitoba Moose (4) vs Bridgeport Sound Tigers (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1261.php">Gatineau Olympiques (3) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1262.php">Rochester Americans (4) vs Adirondack Phantoms (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 175</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1292</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1292.php">Pittsburgh Penguins (6) vs Ottawa Senators (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1293</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1293.php">Edmonton Oilers (3) vs Detroit Red Wings (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1294</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1294.php">New Jersey Devils (2) vs Vegas Golden Knights (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1295</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1295.php">San Jose Sharks (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1296</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1296.php">New York Rangers (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1297</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1297.php">Florida Panthers (4) vs Boston Bruins (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1263.php">Gatineau Olympiques (2) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1264.php">Wilkes-Barre/Scranton Penguins (3) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1265.php">Peoria Rivermen (4) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1266.php">Adirondack Phantoms (2) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1267.php">Laval Chiefs (2) vs Norfolk Admirals (1)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1268.php">Landshut Cannibals (7) vs Rouyn-Noranda Huskies (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 176</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1298</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1298.php">New York Islanders (0) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1299</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1299.php">Edmonton Oilers (0) vs Arizona Coyotes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1300</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1300.php">Vancouver Canucks (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1301</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1301.php">Calgary Flames (5) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1302</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1302.php">Philadelphia Flyers (5) vs New York Rangers (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1303</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1303.php">Chicago Blackhawks (2) vs Detroit Red Wings (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1304</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1304.php">Toronto Maple Leafs (3) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1305</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1305.php">Vegas Golden Knights (4) vs Colorado Avalanche (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1306</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1306.php">Dallas Stars (5) vs San Jose Sharks (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1307</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1307.php">Nashville Predators (3) vs Tampa Bay Lightning (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1269.php">Oklahoma City Barons (6) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1270.php">Milwaukee Admirals (6) vs Connecticut Whale (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1271.php">Roberval Dwarfs (3) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1272.php">Charlotte Checkers (2) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1273.php">Bridgeport Sound Tigers (4) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1274.php">Houston Aeros (2) vs Springfield Falcons (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1275.php">Adirondack Phantoms (2) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1276.php">Peoria Rivermen (4) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1277.php">Wilkes-Barre/Scranton Penguins (1) vs Rockford IceHogs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 177</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1308</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1308.php">New York Islanders (2) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1309</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1309.php">Los Angeles Kings (2) vs Vancouver Canucks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1310</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1310.php">Edmonton Oilers (1) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1311</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1311.php">San Jose Sharks (4) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1312</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1312.php">St. Louis Blues (1) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1313</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1313.php">Vegas Golden Knights (1) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1314</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1314.php">Nashville Predators (4) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1315</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1315.php">Dallas Stars (3) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1316</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1316.php">Colorado Avalanche (1) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1317</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1317.php">Toronto Maple Leafs (6) vs New York Rangers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1278.php">Roberval Dwarfs (3) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1279.php">Chicoutimi Saguenéens (1) vs Paradise Dark Angels (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1280.php">Milwaukee Admirals (4) vs Gatineau Olympiques (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1281.php">Springfield Falcons (4) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1282.php">Rouyn-Noranda Huskies (2) vs Joliette Sportif (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1283.php">Landshut Cannibals (3) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1284.php">Adirondack Phantoms (4) vs Grand Rapids Griffins (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 178</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1318</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1318.php">New York Rangers (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1319</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1319.php">Tampa Bay Lightning (0) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1320</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1320.php">Anaheim Ducks (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1321</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1321.php">Columbus Blue Jackets (1) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1322</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1322.php">Vancouver Canucks (2) vs Winnipeg Jets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1323</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1323.php">New Jersey Devils (2) vs Seattle Saints (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1324</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1324.php">New York Islanders (4) vs Ottawa Senators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1285.php">Laval Chiefs (4) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1286.php">Lake Erie Monsters (5) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1287.php">Peoria Rivermen (1) vs Mercer Island Archangels (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1288</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1288.php">Portland Pirates (4) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 179</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1326</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1326.php">Tampa Bay Lightning (1) vs Philadelphia Flyers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1327</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1327.php">Chicago Blackhawks (1) vs Quebec Nordiques (0)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1328</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1328.php">Montreal Canadiens (1) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1329</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1329.php">Carolina Hurricanes (3) vs Toronto Maple Leafs (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1330</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1330.php">Seattle Saints (5) vs Nashville Predators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1331</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1331.php">Winnipeg Jets (3) vs Vegas Golden Knights (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1332</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1332.php">St. Louis Blues (1) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1333</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1333.php">Ottawa Senators (5) vs Edmonton Oilers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1289</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1289.php">Wilkes-Barre/Scranton Penguins (4) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1290</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1290.php">Rockford IceHogs (4) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1291</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1291.php">Trois-Rivières Draveurs (1) vs Rochester Americans (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1292</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1292.php">Manitoba Moose (4) vs Bridgeport Sound Tigers (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 180</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1334</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1334.php">Tampa Bay Lightning (4) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1335</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1335.php">Philadelphia Flyers (3) vs Pittsburgh Penguins (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1336</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1336.php">New Jersey Devils (4) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1337</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1337.php">Edmonton Oilers (1) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1338</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1338.php">Carolina Hurricanes (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1339</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1339.php">Calgary Flames (1) vs Vegas Golden Knights (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1340</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1340.php">Nashville Predators (5) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1341</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1341.php">Washington Capitals (4) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1342</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1342.php">Vancouver Canucks (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1343</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1343.php">Dallas Stars (4) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1344</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1344.php">Montreal Canadiens (4) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1345</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1345.php">Chicago Blackhawks (2) vs Detroit Red Wings (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1346</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1346.php">Minnesota Wild (2) vs Colorado Avalanche (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1293</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1293.php">Laval Chiefs (2) vs Norfolk Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1294</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1294.php">Rochester Americans (2) vs Albany Devils (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 181</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1347</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1347.php">New Jersey Devils (3) vs Florida Panthers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1348</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1348.php">Carolina Hurricanes (3) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1349</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1349.php">Vancouver Canucks (2) vs Minnesota Wild (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1350</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1350.php">Winnipeg Jets (2) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1351</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1351.php">St. Louis Blues (1) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1352</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1352.php">Montreal Canadiens (4) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1353</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1353.php">Ottawa Senators (2) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1354</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1354.php">Seattle Saints (3) vs Pittsburgh Penguins (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1355</td><td class="STHSSchedule_ProLink">
<a href="ASHL9-1355.php">Anaheim Ducks (0) vs Calgary Flames (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1295</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1295.php">Rochester Americans (1) vs Lake Erie Monsters (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1296</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1296.php">Paradise Dark Angels (3) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1297</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1297.php">Norfolk Admirals (3) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1298</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1298.php">Bridgeport Sound Tigers (3) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1299</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1299.php">Wilkes-Barre/Scranton Penguins (4) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1300</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1300.php">Providence Bruins (3) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1301</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1301.php">San Antonio Rampage (0) vs Portland Pirates (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 182</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1302</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1302.php">Lake Erie Monsters (4) vs Rouyn-Noranda Huskies (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1303</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1303.php">Wilkes-Barre/Scranton Penguins (0) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1304</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1304.php">Milwaukee Admirals (6) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1305</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1305.php">Landshut Cannibals (3) vs Charlotte Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1306</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1306.php">Roberval Dwarfs (2) vs Peoria Rivermen (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1307</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1307.php">Norfolk Admirals (3) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1308</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1308.php">Bridgeport Sound Tigers (1) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1309</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1309.php">Laval Chiefs (5) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1310</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1310.php">Albany Devils (1) vs Trois-Rivières Draveurs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 183</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1311</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1311.php">Connecticut Whale (1) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1312</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1312.php">Lake Erie Monsters (4) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1313</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1313.php">Roberval Dwarfs (1) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1314</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1314.php">Binghamton Senators (4) vs Mercer Island Archangels (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1315</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1315.php">Albany Devils (5) vs Manitoba Moose (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1316</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1316.php">Rouyn-Noranda Huskies (6) vs Joliette Sportif (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1317</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1317.php">Gatineau Olympiques (3) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1318</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1318.php">Houston Aeros (3) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1319</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1319.php">Portland Pirates (3) vs Paradise Dark Angels (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 184</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1320</td><td class="STHSSchedule_FarmLink">
<a href="ASHL9-Farm-1320.php">Roberval Dwarfs (2) vs Chicoutimi Saguenéens (1)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 185</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
</td><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td></tr>
</table>
<?php include "Footer.php";?>
