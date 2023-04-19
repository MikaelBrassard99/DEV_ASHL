<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Schedule</title>
<script type="text/javascript" src="ASHL7.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.2.2" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="ASHL RSS Feed" href="http://www.ashligue.com/site//RSSFeed.xml" />
<link href="ASHL7.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL7-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL7-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 7; /* Show Webpage Top Menu */
include "Menu.php";?>
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1.php">Buffalo Sabres (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-2.php">Boston Bruins (4) vs Montreal Canadiens (5)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-3.php">Toronto Maple Leafs (2) vs New Jersey Devils (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-4.php">Arizona Coyotes (1) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-5.php">Vancouver Canucks (2) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-6.php">Dallas Stars (2) vs Colorado Avalanche (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-7.php">St. Louis Blues (0) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-8.php">Minnesota Wild (1) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-9.php">Philadelphia Flyers (3) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-10.php">Seattle Saints (1) vs Calgary Flames (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1.php">Albany Devils (2) vs Rochester Americans (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-2.php">Grand Rapids Griffins (2) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-3.php">Binghamton Senators (5) vs Lake Erie Monsters (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-4.php">Landshut Cannibals (2) vs Gatineau Olympiques (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-5.php">Manitoba Moose (4) vs Charlotte Checkers (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-6.php">Bridgeport Sound Tigers (1) vs Providence Bruins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-7.php">Houston Aeros (3) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-8.php">Portland Pirates (1) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-9.php">Roberval Dwarfs (3) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-10.php">Trois-Rivières Draveurs (3) vs Chicoutimi Saguenéens (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-11.php">Chicago Wolves (2) vs Springfield Falcons (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-12.php">Wilkes-Barre/Scranton Penguins (2) vs Connecticut Whale (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-11.php">Pittsburgh Penguins (1) vs Carolina Hurricanes (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-12.php">San Jose Sharks (1) vs Anaheim Ducks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-13.php">Florida Panthers (2) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-14.php">Chicago Blackhawks (2) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-15.php">New York Rangers (2) vs New York Islanders (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-16.php">Montreal Canadiens (2) vs Columbus Blue Jackets (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-17.php">Colorado Avalanche (2) vs Nashville Predators (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-18.php">Quebec Nordiques (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-19.php">New Jersey Devils (4) vs Philadelphia Flyers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-20.php">Calgary Flames (4) vs Arizona Coyotes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-13.php">Bridgeport Sound Tigers (5) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-14.php">Rockford IceHogs (2) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-15.php">Cleveland Knights (3) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-16.php">Springfield Falcons (2) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-17.php">Manitoba Moose (4) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-18.php">Portland Pirates (1) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-19.php">Rochester Americans (4) vs Binghamton Senators (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-21.php">Washington Capitals (3) vs Buffalo Sabres (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-22.php">Nashville Predators (3) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-23.php">Boston Bruins (1) vs Toronto Maple Leafs (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-24.php">St. Louis Blues (5) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-25.php">Vancouver Canucks (2) vs Seattle Saints (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-26.php">Columbus Blue Jackets (3) vs Pittsburgh Penguins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-20.php">Manitoba Moose (4) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-21.php">Albany Devils (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-22.php">Providence Bruins (5) vs Trois-Rivières Draveurs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-23.php">Oklahoma City Barons (2) vs Chicago Wolves (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-24.php">Binghamton Senators (6) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-25.php">Peoria Rivermen (3) vs Grand Rapids Griffins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-26.php">Chicoutimi Saguenéens (1) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-27.php">Lake Erie Monsters (7) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-28.php">St-Cyrille Condors (3) vs Cleveland Knights (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-27.php">Toronto Maple Leafs (3) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-28.php">New Jersey Devils (4) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-29.php">Detroit Red Wings (3) vs San Jose Sharks (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-30.php">New York Islanders (2) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-31.php">Edmonton Oilers (2) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-32.php">Winnipeg Jets (4) vs Vancouver Canucks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-29.php">Landshut Cannibals (3) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-30.php">Springfield Falcons (2) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-31.php">Connecticut Whale (3) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-32.php">Wilkes-Barre/Scranton Penguins (2) vs Manitoba Moose (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-33.php">St-Cyrille Condors (4) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-34.php">Grand Rapids Griffins (7) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-35.php">San Antonio Rampage (0) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-36.php">Rouyn-Noranda Huskies (2) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-37.php">Rochester Americans (1) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-38.php">Trois-Rivières Draveurs (2) vs Charlotte Checkers (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-33.php">Seattle Saints (1) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-34.php">Ottawa Senators (1) vs Tampa Bay Lightning (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-35.php">Washington Capitals (2) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-36.php">Arizona Coyotes (2) vs Anaheim Ducks (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-37.php">New York Islanders (1) vs Philadelphia Flyers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-38.php">Florida Panthers (4) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-39.php">Quebec Nordiques (3) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-40.php">Edmonton Oilers (2) vs Calgary Flames (3)</a>  - SO (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-41.php">Minnesota Wild (2) vs Colorado Avalanche (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-42.php">Nashville Predators (2) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-43.php">Detroit Red Wings (4) vs Dallas Stars (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-39.php">Rouyn-Noranda Huskies (4) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-40.php">Providence Bruins (2) vs Chicoutimi Saguenéens (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-41.php">Cleveland Knights (4) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-42.php">Houston Aeros (3) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-43.php">Lake Erie Monsters (2) vs Roberval Dwarfs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-44.php">Wilkes-Barre/Scranton Penguins (1) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-45.php">Rochester Americans (2) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-46.php">Albany Devils (3) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-47.php">Landshut Cannibals (2) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-48.php">Adirondack Phantoms (1) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-49.php">Trois-Rivières Draveurs (2) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-50.php">Portland Pirates (2) vs Grand Rapids Griffins (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-44.php">New Jersey Devils (2) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-45.php">San Jose Sharks (2) vs Winnipeg Jets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-46.php">Buffalo Sabres (1) vs Pittsburgh Penguins (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-51.php">Trois-Rivières Draveurs (2) vs Springfield Falcons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-52.php">Cleveland Knights (6) vs St-Cyrille Condors (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-47.php">Boston Bruins (4) vs Ottawa Senators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-48.php">Washington Capitals (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-49.php">Tampa Bay Lightning (5) vs Florida Panthers (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-50.php">Colorado Avalanche (1) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-51.php">Anaheim Ducks (0) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-52.php">Nashville Predators (1) vs Minnesota Wild (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-53.php">New York Islanders (3) vs Toronto Maple Leafs (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-54.php">Calgary Flames (1) vs Arizona Coyotes (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-55.php">San Jose Sharks (2) vs Seattle Saints (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-56.php">Winnipeg Jets (3) vs Edmonton Oilers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">53</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-53.php">Norfolk Admirals (1) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-54.php">Chicago Wolves (2) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-55.php">Rockford IceHogs (2) vs Houston Aeros (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-57.php">Calgary Flames (2) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-58.php">Pittsburgh Penguins (2) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-59.php">Montreal Canadiens (3) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-60.php">New York Rangers (5) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-61.php">Buffalo Sabres (3) vs Boston Bruins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-62.php">Arizona Coyotes (1) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-63.php">Philadelphia Flyers (3) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-64.php">Chicago Blackhawks (3) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-65.php">Toronto Maple Leafs (6) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-66.php">Anaheim Ducks (4) vs Columbus Blue Jackets (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-67.php">Florida Panthers (3) vs Ottawa Senators (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-56.php">Manitoba Moose (5) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-57.php">Bridgeport Sound Tigers (3) vs Albany Devils (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-58.php">Adirondack Phantoms (3) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-59.php">Roberval Dwarfs (1) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-60.php">Chicoutimi Saguenéens (1) vs Rochester Americans (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-61.php">Springfield Falcons (2) vs Portland Pirates (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-62.php">Houston Aeros (2) vs Cleveland Knights (1)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-68.php">New York Rangers (6) vs New York Islanders (0)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-69.php">Seattle Saints (2) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-70.php">St. Louis Blues (2) vs Nashville Predators (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-71.php">Winnipeg Jets (3) vs Colorado Avalanche (7)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-63.php">Chicoutimi Saguenéens (2) vs Trois-Rivières Draveurs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-64.php">Connecticut Whale (2) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-65.php">Peoria Rivermen (1) vs Milwaukee Admirals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-72.php">Pittsburgh Penguins (1) vs Philadelphia Flyers (5)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-73.php">St. Louis Blues (5) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-74.php">Seattle Saints (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-75.php">Quebec Nordiques (4) vs Montreal Canadiens (2)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-66.php">Las Vegas Gamblers (6) vs Gatineau Olympiques (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-67.php">Landshut Cannibals (3) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-68.php">San Antonio Rampage (2) vs Laval Chiefs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-76.php">Colorado Avalanche (4) vs Detroit Red Wings (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-77.php">Arizona Coyotes (2) vs Vancouver Canucks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-78.php">Anaheim Ducks (2) vs Minnesota Wild (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-79.php">Buffalo Sabres (4) vs Florida Panthers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-80.php">Tampa Bay Lightning (2) vs Toronto Maple Leafs (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-69.php">Adirondack Phantoms (6) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-70.php">Chicago Wolves (2) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-71.php">Milwaukee Admirals (3) vs Las Vegas Gamblers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-81.php">Montreal Canadiens (2) vs Washington Capitals (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-82.php">Columbus Blue Jackets (4) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-83.php">Detroit Red Wings (3) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-84.php">Carolina Hurricanes (6) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-85.php">Arizona Coyotes (0) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-86.php">Quebec Nordiques (1) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-87.php">Winnipeg Jets (3) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-88.php">Philadelphia Flyers (4) vs New York Islanders (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-89.php">Buffalo Sabres (2) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-90.php">Los Angeles Kings (2) vs Anaheim Ducks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-91.php">Minnesota Wild (2) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-92.php">Dallas Stars (0) vs Seattle Saints (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-72.php">Bridgeport Sound Tigers (3) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-73.php">Gatineau Olympiques (2) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-74.php">Springfield Falcons (2) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-75.php">Providence Bruins (2) vs Roberval Dwarfs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-93.php">Dallas Stars (1) vs Winnipeg Jets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-94.php">Tampa Bay Lightning (4) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-95.php">Montreal Canadiens (2) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-96.php">Edmonton Oilers (3) vs Los Angeles Kings (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-76.php">Albany Devils (4) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-77.php">Milwaukee Admirals (5) vs Rockford IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-78.php">St-Cyrille Condors (5) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-79.php">Peoria Rivermen (3) vs Grand Rapids Griffins (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-97.php">Colorado Avalanche (2) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-98.php">New Jersey Devils (4) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-99.php">Pittsburgh Penguins (4) vs Carolina Hurricanes (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-100.php">Philadelphia Flyers (4) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-101.php">St. Louis Blues (2) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-102.php">Edmonton Oilers (2) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-103.php">Florida Panthers (2) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-104.php">Anaheim Ducks (4) vs San Jose Sharks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-105.php">Washington Capitals (3) vs New York Islanders (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-106.php">Tampa Bay Lightning (5) vs Boston Bruins (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-80.php">Cleveland Knights (4) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-81.php">Charlotte Checkers (2) vs Rochester Americans (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">82</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-82.php">Springfield Falcons (2) vs Portland Pirates (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-107.php">Minnesota Wild (4) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-108.php">Philadelphia Flyers (2) vs New York Rangers (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-109.php">Seattle Saints (2) vs Detroit Red Wings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-110.php">Vancouver Canucks (3) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-111.php">Columbus Blue Jackets (3) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-112.php">Colorado Avalanche (1) vs Winnipeg Jets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-113.php">New York Islanders (3) vs New Jersey Devils (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-114.php">Florida Panthers (2) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-115.php">Pittsburgh Penguins (2) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-116.php">Ottawa Senators (0) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-117.php">Toronto Maple Leafs (1) vs Carolina Hurricanes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-83.php">Albany Devils (3) vs Wilkes-Barre/Scranton Penguins (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-84.php">Oklahoma City Barons (4) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-85.php">Chicoutimi Saguenéens (6) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-86.php">Binghamton Senators (3) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-87.php">Roberval Dwarfs (3) vs St-Cyrille Condors (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-88.php">Laval Chiefs (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-89.php">Manitoba Moose (8) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-90.php">Norfolk Admirals (2) vs Trois-Rivières Draveurs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-91.php">Connecticut Whale (2) vs Bridgeport Sound Tigers (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-92.php">Lake Erie Monsters (2) vs Cleveland Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-93.php">Milwaukee Admirals (2) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-94.php">Las Vegas Gamblers (5) vs Gatineau Olympiques (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-118.php">New York Rangers (2) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-119.php">San Jose Sharks (3) vs Edmonton Oilers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-120.php">Chicago Blackhawks (5) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-121.php">Detroit Red Wings (2) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-122.php">Los Angeles Kings (3) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-123.php">Boston Bruins (4) vs Buffalo Sabres (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-95.php">Roberval Dwarfs (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-96.php">San Antonio Rampage (4) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-97.php">Rochester Americans (6) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-98.php">Landshut Cannibals (2) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-99.php">Portland Pirates (3) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-100.php">Grand Rapids Griffins (3) vs Rockford IceHogs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-101.php">Milwaukee Admirals (2) vs Rouyn-Noranda Huskies (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-102.php">Connecticut Whale (3) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-103.php">Peoria Rivermen (3) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-104.php">Chicago Wolves (1) vs Las Vegas Gamblers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-124.php">Calgary Flames (2) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-125.php">Vancouver Canucks (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-126.php">Ottawa Senators (2) vs Philadelphia Flyers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-105.php">Chicago Wolves (2) vs St-Cyrille Condors (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">106</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-106.php">Adirondack Phantoms (3) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">107</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-107.php">Houston Aeros (6) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">108</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-108.php">Bridgeport Sound Tigers (3) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">109</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-109.php">Trois-Rivières Draveurs (2) vs Wilkes-Barre/Scranton Penguins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">110</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-110.php">Manitoba Moose (6) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">111</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-111.php">Springfield Falcons (1) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">112</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-112.php">Albany Devils (3) vs Rochester Americans (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">113</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-113.php">Laval Chiefs (2) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">114</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-114.php">Milwaukee Admirals (5) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">115</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-115.php">Oklahoma City Barons (4) vs Cleveland Knights (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-127.php">Dallas Stars (1) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-128.php">New York Islanders (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-129.php">Quebec Nordiques (4) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-130.php">San Jose Sharks (1) vs Los Angeles Kings (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-131.php">Chicago Blackhawks (3) vs Nashville Predators (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-132.php">Carolina Hurricanes (3) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-133.php">Tampa Bay Lightning (3) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-134.php">Toronto Maple Leafs (2) vs New Jersey Devils (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-135.php">Washington Capitals (3) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-136.php">Buffalo Sabres (4) vs Montreal Canadiens (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">116</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-116.php">Charlotte Checkers (1) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">117</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-117.php">Providence Bruins (5) vs Roberval Dwarfs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">118</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-118.php">St-Cyrille Condors (4) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">119</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-119.php">Wilkes-Barre/Scranton Penguins (2) vs Connecticut Whale (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">120</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-120.php">Binghamton Senators (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">121</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-121.php">Trois-Rivières Draveurs (4) vs Landshut Cannibals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-137.php">Detroit Red Wings (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-138.php">Calgary Flames (2) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-139.php">Carolina Hurricanes (2) vs New York Rangers (9)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-140.php">Arizona Coyotes (2) vs Winnipeg Jets (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-141.php">Seattle Saints (2) vs Anaheim Ducks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">122</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-122.php">Albany Devils (1) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">123</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-123.php">Lake Erie Monsters (2) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">124</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-124.php">Gatineau Olympiques (3) vs Chicago Wolves (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-142.php">St. Louis Blues (5) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-143.php">Colorado Avalanche (2) vs Chicago Blackhawks (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-144.php">San Jose Sharks (2) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-145.php">New Jersey Devils (1) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-146.php">Philadelphia Flyers (2) vs Washington Capitals (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-147.php">Montreal Canadiens (3) vs Quebec Nordiques (5)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-148.php">Buffalo Sabres (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-149.php">Columbus Blue Jackets (1) vs New York Islanders (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-150.php">New York Rangers (4) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-151.php">Nashville Predators (3) vs Detroit Red Wings (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">125</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-125.php">Portland Pirates (5) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">126</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-126.php">Providence Bruins (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">127</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-127.php">Charlotte Checkers (1) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">128</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-128.php">Grand Rapids Griffins (4) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">129</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-129.php">Las Vegas Gamblers (3) vs Rockford IceHogs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">130</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-130.php">Landshut Cannibals (1) vs Norfolk Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">131</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-131.php">Gatineau Olympiques (3) vs Laval Chiefs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">132</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-132.php">Rochester Americans (1) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">133</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-133.php">Cleveland Knights (1) vs Oklahoma City Barons (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">134</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-134.php">Houston Aeros (2) vs Peoria Rivermen (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-152.php">Anaheim Ducks (4) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-153.php">Montreal Canadiens (4) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-154.php">Vancouver Canucks (4) vs Arizona Coyotes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-155.php">Minnesota Wild (2) vs Seattle Saints (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-156.php">Los Angeles Kings (1) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-157.php">Edmonton Oilers (4) vs San Jose Sharks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-158.php">Winnipeg Jets (1) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-159.php">Boston Bruins (3) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-160.php">Quebec Nordiques (4) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-161.php">New Jersey Devils (4) vs Carolina Hurricanes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">135</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-135.php">Binghamton Senators (1) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">136</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-136.php">Rockford IceHogs (3) vs Las Vegas Gamblers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">137</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-137.php">Norfolk Admirals (1) vs Charlotte Checkers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">138</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-138.php">Portland Pirates (4) vs Gatineau Olympiques (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">139</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-139.php">Bridgeport Sound Tigers (3) vs Roberval Dwarfs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">140</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-140.php">Oklahoma City Barons (3) vs Lake Erie Monsters (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-162.php">Tampa Bay Lightning (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-163.php">Nashville Predators (5) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-164.php">Detroit Red Wings (3) vs Chicago Blackhawks (2)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-165.php">New York Rangers (3) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-166.php">Minnesota Wild (3) vs Dallas Stars (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-167.php">Pittsburgh Penguins (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-168.php">Toronto Maple Leafs (5) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-169.php">Boston Bruins (3) vs Florida Panthers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-170.php">Arizona Coyotes (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-171.php">Seattle Saints (5) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-172.php">Calgary Flames (1) vs Anaheim Ducks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">141</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-141.php">Rouyn-Noranda Huskies (4) vs St-Cyrille Condors (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">142</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-142.php">Adirondack Phantoms (3) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">143</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-143.php">San Antonio Rampage (2) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">144</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-144.php">Rochester Americans (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">145</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-145.php">Milwaukee Admirals (3) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">146</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-146.php">Houston Aeros (3) vs Cleveland Knights (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-173.php">Dallas Stars (4) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-174.php">Chicago Blackhawks (1) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-175.php">Ottawa Senators (4) vs Toronto Maple Leafs (1)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-176.php">New Jersey Devils (2) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-177.php">Florida Panthers (1) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-178.php">St. Louis Blues (2) vs Colorado Avalanche (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">147</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-147.php">Rochester Americans (1) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">148</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-148.php">Manitoba Moose (1) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">149</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-149.php">Bridgeport Sound Tigers (4) vs Binghamton Senators (8)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">150</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-150.php">Albany Devils (2) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">151</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-151.php">Roberval Dwarfs (5) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">152</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-152.php">Wilkes-Barre/Scranton Penguins (4) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">153</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-153.php">Peoria Rivermen (3) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">154</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-154.php">Laval Chiefs (3) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">155</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-155.php">Lake Erie Monsters (2) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">156</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-156.php">Rockford IceHogs (1) vs Milwaukee Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-179.php">New York Islanders (5) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-180.php">Boston Bruins (1) vs Montreal Canadiens (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-181.php">Arizona Coyotes (2) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-182.php">Columbus Blue Jackets (4) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-183.php">Seattle Saints (4) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-184.php">Winnipeg Jets (1) vs Minnesota Wild (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">157</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-157.php">Wilkes-Barre/Scranton Penguins (1) vs Bridgeport Sound Tigers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">158</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-158.php">San Antonio Rampage (6) vs Manitoba Moose (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">159</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-159.php">Roberval Dwarfs (3) vs Rochester Americans (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">160</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-160.php">Connecticut Whale (3) vs Charlotte Checkers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">161</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-161.php">St-Cyrille Condors (1) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">162</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-162.php">Las Vegas Gamblers (4) vs Rouyn-Noranda Huskies (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">163</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-163.php">Chicago Wolves (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">164</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-164.php">Landshut Cannibals (4) vs Gatineau Olympiques (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">165</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-165.php">Oklahoma City Barons (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">166</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-166.php">Peoria Rivermen (2) vs Grand Rapids Griffins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-185.php">Buffalo Sabres (2) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-186.php">St. Louis Blues (2) vs Detroit Red Wings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-187.php">Pittsburgh Penguins (1) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-188.php">Washington Capitals (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-189.php">Edmonton Oilers (3) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-190.php">Toronto Maple Leafs (2) vs Ottawa Senators (8)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-191.php">San Jose Sharks (3) vs Anaheim Ducks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-192.php">Colorado Avalanche (3) vs Chicago Blackhawks (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-193.php">Nashville Predators (4) vs Dallas Stars (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-194.php">Florida Panthers (4) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-195.php">Philadelphia Flyers (1) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-196.php">Quebec Nordiques (5) vs New York Islanders (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">167</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-167.php">Binghamton Senators (3) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">168</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-168.php">Portland Pirates (5) vs Las Vegas Gamblers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">169</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-169.php">Springfield Falcons (4) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">170</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-170.php">Charlotte Checkers (5) vs Providence Bruins (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">171</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-171.php">Oklahoma City Barons (5) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">172</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-172.php">Norfolk Admirals (1) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">173</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-173.php">Landshut Cannibals (3) vs San Antonio Rampage (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">174</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-174.php">Cleveland Knights (6) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">175</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-175.php">Grand Rapids Griffins (2) vs Adirondack Phantoms (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">176</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-176.php">Chicoutimi Saguenéens (4) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-197.php">Montreal Canadiens (2) vs Boston Bruins (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-198.php">Ottawa Senators (5) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-199.php">Anaheim Ducks (4) vs Arizona Coyotes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-200.php">Los Angeles Kings (1) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-201.php">New York Rangers (3) vs Washington Capitals (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-202.php">Minnesota Wild (3) vs Tampa Bay Lightning (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">177</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-177.php">Adirondack Phantoms (2) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">178</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-178.php">Chicago Wolves (3) vs Houston Aeros (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">179</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-179.php">Peoria Rivermen (2) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">180</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-180.php">Bridgeport Sound Tigers (1) vs Binghamton Senators (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">181</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-181.php">Rouyn-Noranda Huskies (1) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">182</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-182.php">Laval Chiefs (2) vs Cleveland Knights (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">183</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-183.php">St-Cyrille Condors (2) vs Oklahoma City Barons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">184</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-184.php">Connecticut Whale (2) vs Manitoba Moose (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">185</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-185.php">Gatineau Olympiques (2) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">186</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-186.php">Trois-Rivières Draveurs (1) vs Rochester Americans (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-203.php">Edmonton Oilers (1) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-204.php">Winnipeg Jets (4) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-205.php">San Jose Sharks (4) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-206.php">Vancouver Canucks (4) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-207.php">Chicago Blackhawks (3) vs Colorado Avalanche (4)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-208.php">Toronto Maple Leafs (7) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-209.php">Carolina Hurricanes (1) vs New Jersey Devils (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-210.php">New York Islanders (3) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-211.php">Dallas Stars (5) vs Philadelphia Flyers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-212.php">Montreal Canadiens (3) vs Florida Panthers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">187</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-187.php">Grand Rapids Griffins (2) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">188</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-188.php">Charlotte Checkers (2) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">189</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-189.php">Trois-Rivières Draveurs (1) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">190</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-190.php">Chicoutimi Saguenéens (4) vs Albany Devils (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">191</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-191.php">Adirondack Phantoms (3) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">192</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-192.php">Rouyn-Noranda Huskies (3) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">193</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-193.php">Manitoba Moose (3) vs Norfolk Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">194</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-194.php">Lake Erie Monsters (5) vs Rockford IceHogs (6)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">195</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-195.php">Milwaukee Admirals (3) vs Las Vegas Gamblers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">196</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-196.php">San Antonio Rampage (2) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">197</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-197.php">St-Cyrille Condors (3) vs Gatineau Olympiques (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">198</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-198.php">Roberval Dwarfs (3) vs Providence Bruins (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-213.php">Anaheim Ducks (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-214.php">Detroit Red Wings (4) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-215.php">Florida Panthers (2) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-216.php">St. Louis Blues (4) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-217.php">Washington Capitals (4) vs New York Rangers (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-218.php">Arizona Coyotes (3) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-219.php">Montreal Canadiens (5) vs Buffalo Sabres (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-220.php">Tampa Bay Lightning (4) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-221.php">Vancouver Canucks (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-222.php">Los Angeles Kings (3) vs Carolina Hurricanes (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">199</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-199.php">San Antonio Rampage (4) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">200</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-200.php">Portland Pirates (5) vs Rouyn-Noranda Huskies (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">201</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-201.php">Rockford IceHogs (2) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">202</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-202.php">Las Vegas Gamblers (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">203</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-203.php">Binghamton Senators (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">204</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-204.php">Rochester Americans (1) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">205</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-205.php">Springfield Falcons (1) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">206</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-206.php">Chicago Wolves (5) vs Cleveland Knights (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">207</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-207.php">Providence Bruins (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">208</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-208.php">Laval Chiefs (3) vs Oklahoma City Barons (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-223.php">Dallas Stars (2) vs Arizona Coyotes (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-224.php">New York Islanders (5) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-225.php">Quebec Nordiques (5) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-226.php">Calgary Flames (3) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-227.php">Nashville Predators (2) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-228.php">Pittsburgh Penguins (5) vs Philadelphia Flyers (1)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-229.php">Minnesota Wild (3) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-230.php">New York Rangers (4) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-231.php">Boston Bruins (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-232.php">Edmonton Oilers (2) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-233.php">Carolina Hurricanes (3) vs Washington Capitals (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">209</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-209.php">Norfolk Admirals (1) vs Roberval Dwarfs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">210</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-210.php">Gatineau Olympiques (3) vs Milwaukee Admirals (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-234.php">Detroit Red Wings (1) vs St. Louis Blues (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-235.php">Toronto Maple Leafs (1) vs Montreal Canadiens (2)</a>  - SO (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-236.php">Seattle Saints (2) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-237.php">Buffalo Sabres (2) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-238.php">Calgary Flames (0) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-239.php">Chicago Blackhawks (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-240.php">Florida Panthers (2) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-241.php">New Jersey Devils (1) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-242.php">Ottawa Senators (1) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-243.php">Colorado Avalanche (1) vs San Jose Sharks (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">211</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-211.php">Portland Pirates (4) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">212</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-212.php">Bridgeport Sound Tigers (4) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">213</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-213.php">Houston Aeros (4) vs St-Cyrille Condors (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">214</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-214.php">Norfolk Admirals (6) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">215</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-215.php">Manitoba Moose (3) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">216</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-216.php">Connecticut Whale (5) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">217</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-217.php">Wilkes-Barre/Scranton Penguins (4) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">218</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-218.php">Rochester Americans (4) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">219</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-219.php">Rockford IceHogs (1) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">220</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-220.php">Lake Erie Monsters (5) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">221</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-221.php">Las Vegas Gamblers (4) vs Charlotte Checkers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-244.php">Philadelphia Flyers (3) vs New York Rangers (1)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-245.php">Columbus Blue Jackets (4) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-246.php">Minnesota Wild (1) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-247.php">Los Angeles Kings (5) vs Edmonton Oilers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-248.php">Anaheim Ducks (6) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-249.php">Carolina Hurricanes (5) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-250.php">Winnipeg Jets (3) vs Arizona Coyotes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-251.php">Washington Capitals (6) vs Tampa Bay Lightning (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">222</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-222.php">Chicoutimi Saguenéens (3) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">223</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-223.php">Houston Aeros (3) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">224</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-224.php">Providence Bruins (2) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">225</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-225.php">Cleveland Knights (2) vs Portland Pirates (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-252.php">Nashville Predators (3) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-253.php">Pittsburgh Penguins (4) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-254.php">Toronto Maple Leafs (4) vs St. Louis Blues (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-255.php">Quebec Nordiques (5) vs Montreal Canadiens (2)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">226</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-226.php">Las Vegas Gamblers (3) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">227</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-227.php">Rockford IceHogs (2) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">228</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-228.php">Grand Rapids Griffins (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">229</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-229.php">Providence Bruins (6) vs Oklahoma City Barons (7)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">230</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-230.php">Albany Devils (1) vs Norfolk Admirals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-256.php">Colorado Avalanche (1) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-257.php">New Jersey Devils (4) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-258.php">Vancouver Canucks (3) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-259.php">New York Islanders (4) vs Carolina Hurricanes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-260.php">Chicago Blackhawks (3) vs Los Angeles Kings (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-261.php">San Jose Sharks (4) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-262.php">Washington Capitals (4) vs Philadelphia Flyers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-263.php">New York Rangers (3) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-264.php">Detroit Red Wings (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-265.php">Seattle Saints (3) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-266.php">Tampa Bay Lightning (3) vs Anaheim Ducks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">231</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-231.php">Binghamton Senators (2) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">232</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-232.php">Cleveland Knights (4) vs Peoria Rivermen (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">233</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-233.php">Charlotte Checkers (4) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">234</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-234.php">Albany Devils (2) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">235</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-235.php">Roberval Dwarfs (2) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">236</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-236.php">Milwaukee Admirals (4) vs St-Cyrille Condors (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">237</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-237.php">Bridgeport Sound Tigers (2) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">238</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-238.php">Oklahoma City Barons (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">239</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-239.php">Trois-Rivières Draveurs (5) vs Grand Rapids Griffins (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">240</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-240.php">Springfield Falcons (4) vs Rockford IceHogs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-267.php">Arizona Coyotes (4) vs Toronto Maple Leafs (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-268.php">Buffalo Sabres (2) vs Nashville Predators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-269.php">New York Islanders (3) vs Chicago Blackhawks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-270.php">Dallas Stars (3) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-271.php">San Jose Sharks (2) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-272.php">St. Louis Blues (3) vs Colorado Avalanche (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-273.php">Pittsburgh Penguins (6) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-274.php">Columbus Blue Jackets (4) vs Montreal Canadiens (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-275.php">Ottawa Senators (1) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-276.php">Philadelphia Flyers (5) vs Quebec Nordiques (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">241</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-241.php">Peoria Rivermen (2) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">242</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-242.php">Manitoba Moose (2) vs Landshut Cannibals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">243</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-243.php">Gatineau Olympiques (2) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">244</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-244.php">Rouyn-Noranda Huskies (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">245</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-245.php">Binghamton Senators (3) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">246</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-246.php">Lake Erie Monsters (5) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">247</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-247.php">Oklahoma City Barons (1) vs Cleveland Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">248</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-248.php">Chicoutimi Saguenéens (3) vs Roberval Dwarfs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">249</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-249.php">St-Cyrille Condors (3) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">250</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-250.php">Laval Chiefs (5) vs Rochester Americans (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-277.php">Arizona Coyotes (2) vs Minnesota Wild (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-278.php">Tampa Bay Lightning (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-279.php">Edmonton Oilers (4) vs Washington Capitals (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-280.php">Winnipeg Jets (2) vs Detroit Red Wings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-281.php">Anaheim Ducks (3) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-282.php">Los Angeles Kings (4) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-283.php">Boston Bruins (3) vs Carolina Hurricanes (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">251</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-251.php">Binghamton Senators (3) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">252</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-252.php">Grand Rapids Griffins (3) vs Portland Pirates (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">253</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-253.php">Wilkes-Barre/Scranton Penguins (4) vs Manitoba Moose (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-284.php">Chicago Blackhawks (2) vs St. Louis Blues (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-285.php">Florida Panthers (2) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-286.php">Vancouver Canucks (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-287.php">Columbus Blue Jackets (4) vs New York Islanders (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-288.php">Ottawa Senators (1) vs Toronto Maple Leafs (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-289.php">Philadelphia Flyers (2) vs Calgary Flames (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-290.php">Dallas Stars (2) vs Nashville Predators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-291.php">New Jersey Devils (3) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-292.php">Montreal Canadiens (1) vs Quebec Nordiques (3)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">254</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-254.php">Adirondack Phantoms (2) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">255</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-255.php">San Antonio Rampage (1) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">256</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-256.php">Rouyn-Noranda Huskies (2) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">257</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-257.php">Landshut Cannibals (6) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">258</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-258.php">Connecticut Whale (1) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">259</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-259.php">Portland Pirates (2) vs Gatineau Olympiques (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-293.php">Detroit Red Wings (3) vs Arizona Coyotes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-294.php">Minnesota Wild (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-295.php">Carolina Hurricanes (1) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-296.php">Edmonton Oilers (1) vs New York Rangers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">260</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-260.php">Roberval Dwarfs (3) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">261</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-261.php">Milwaukee Admirals (3) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">262</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-262.php">Springfield Falcons (1) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">263</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-263.php">Cleveland Knights (1) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">264</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-264.php">Rochester Americans (1) vs Providence Bruins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">265</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-265.php">Lake Erie Monsters (4) vs St-Cyrille Condors (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">266</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-266.php">Houston Aeros (3) vs Peoria Rivermen (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">267</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-267.php">Chicoutimi Saguenéens (3) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">268</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-268.php">Landshut Cannibals (1) vs Chicago Wolves (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">269</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-269.php">Trois-Rivières Draveurs (5) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">270</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-270.php">Bridgeport Sound Tigers (2) vs Grand Rapids Griffins (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-297.php">Buffalo Sabres (3) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-298.php">Winnipeg Jets (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-299.php">Seattle Saints (3) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-300.php">New Jersey Devils (1) vs Washington Capitals (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">271</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-271.php">Gatineau Olympiques (1) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">272</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-272.php">Norfolk Admirals (2) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">273</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-273.php">Albany Devils (0) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">274</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-274.php">Charlotte Checkers (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">275</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-275.php">Laval Chiefs (4) vs Houston Aeros (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">276</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-276.php">St-Cyrille Condors (4) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">277</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-277.php">Manitoba Moose (4) vs Roberval Dwarfs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">278</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-278.php">Las Vegas Gamblers (1) vs Cleveland Knights (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">279</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-279.php">Rockford IceHogs (3) vs Lake Erie Monsters (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">280</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-280.php">Wilkes-Barre/Scranton Penguins (2) vs Rochester Americans (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">281</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-281.php">Portland Pirates (4) vs Trois-Rivières Draveurs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">282</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-282.php">Chicago Wolves (1) vs Springfield Falcons (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-301.php">Quebec Nordiques (2) vs Dallas Stars (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-302.php">Montreal Canadiens (1) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-303.php">Colorado Avalanche (4) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-304.php">Nashville Predators (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-305.php">St. Louis Blues (4) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-306.php">Florida Panthers (5) vs New York Islanders (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-307.php">Pittsburgh Penguins (2) vs Toronto Maple Leafs (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-308.php">Calgary Flames (0) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-309.php">Arizona Coyotes (2) vs Edmonton Oilers (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-310.php">Buffalo Sabres (2) vs Detroit Red Wings (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-311.php">Washington Capitals (4) vs Minnesota Wild (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-312.php">Los Angeles Kings (3) vs Winnipeg Jets (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">283</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-283.php">Peoria Rivermen (1) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">284</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-284.php">Providence Bruins (2) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">285</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-285.php">Grand Rapids Griffins (0) vs Manitoba Moose (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-313.php">Boston Bruins (3) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-314.php">Tampa Bay Lightning (2) vs Florida Panthers (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-315.php">Carolina Hurricanes (4) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-316.php">New York Rangers (4) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-317.php">Colorado Avalanche (6) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-318.php">Vancouver Canucks (1) vs Montreal Canadiens (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-319.php">Quebec Nordiques (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-320.php">Anaheim Ducks (4) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-321.php">Chicago Blackhawks (3) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-322.php">San Jose Sharks (1) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-323.php">Toronto Maple Leafs (4) vs Calgary Flames (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-324.php">Philadelphia Flyers (2) vs New York Islanders (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">286</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-286.php">Gatineau Olympiques (4) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">287</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-287.php">Charlotte Checkers (2) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">288</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-288.php">Rouyn-Noranda Huskies (3) vs Portland Pirates (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">289</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-289.php">San Antonio Rampage (2) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">290</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-290.php">Oklahoma City Barons (0) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">291</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-291.php">Adirondack Phantoms (3) vs Connecticut Whale (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">292</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-292.php">Wilkes-Barre/Scranton Penguins (2) vs Rockford IceHogs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">293</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-293.php">Chicago Wolves (2) vs Las Vegas Gamblers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">294</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-294.php">Peoria Rivermen (6) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">295</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-295.php">Cleveland Knights (2) vs Chicoutimi Saguenéens (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">296</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-296.php">Milwaukee Admirals (3) vs Lake Erie Monsters (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-325.php">Washington Capitals (1) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-326.php">Minnesota Wild (3) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-327.php">Los Angeles Kings (4) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-328.php">Boston Bruins (1) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-329.php">Seattle Saints (4) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-330.php">Detroit Red Wings (2) vs Tampa Bay Lightning (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">297</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-297.php">St-Cyrille Condors (3) vs Gatineau Olympiques (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">298</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-298.php">San Antonio Rampage (2) vs Charlotte Checkers (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">299</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-299.php">Manitoba Moose (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">300</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-300.php">Rochester Americans (3) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">301</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-301.php">Trois-Rivières Draveurs (4) vs Providence Bruins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">302</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-302.php">Springfield Falcons (6) vs Grand Rapids Griffins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-331.php">St. Louis Blues (1) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-332.php">Florida Panthers (1) vs Vancouver Canucks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-333.php">Ottawa Senators (3) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-334.php">Dallas Stars (3) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-335.php">New York Islanders (1) vs Anaheim Ducks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-336.php">Calgary Flames (1) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-337.php">New Jersey Devils (4) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-338.php">Columbus Blue Jackets (2) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-339.php">Nashville Predators (2) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-340.php">Colorado Avalanche (2) vs Philadelphia Flyers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">303</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-303.php">Oklahoma City Barons (0) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">304</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-304.php">Bridgeport Sound Tigers (6) vs Landshut Cannibals (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">305</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-305.php">Connecticut Whale (3) vs Peoria Rivermen (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">306</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-306.php">Norfolk Admirals (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">307</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-307.php">Laval Chiefs (5) vs Binghamton Senators (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">308</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-308.php">Lake Erie Monsters (7) vs Cleveland Knights (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">309</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-309.php">Roberval Dwarfs (3) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">310</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-310.php">Portland Pirates (4) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">311</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-311.php">Albany Devils (3) vs Chicago Wolves (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-341.php">Carolina Hurricanes (2) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-342.php">Arizona Coyotes (2) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-343.php">Buffalo Sabres (3) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-344.php">Tampa Bay Lightning (3) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-345.php">Seattle Saints (2) vs San Jose Sharks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-346.php">New York Rangers (3) vs Florida Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-347.php">Edmonton Oilers (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-348.php">Vancouver Canucks (4) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-349.php">Ottawa Senators (3) vs New Jersey Devils (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-350.php">Philadelphia Flyers (4) vs Columbus Blue Jackets (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-351.php">Calgary Flames (4) vs Nashville Predators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">312</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-312.php">Manitoba Moose (1) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">313</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-313.php">Rouyn-Noranda Huskies (6) vs Oklahoma City Barons (8)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">314</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-314.php">Las Vegas Gamblers (1) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">315</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-315.php">Gatineau Olympiques (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">316</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-316.php">Grand Rapids Griffins (4) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">317</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-317.php">Adirondack Phantoms (5) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">318</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-318.php">Charlotte Checkers (1) vs Albany Devils (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">319</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-319.php">Rockford IceHogs (1) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">320</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-320.php">Landshut Cannibals (3) vs Laval Chiefs (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">321</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-321.php">Connecticut Whale (2) vs Norfolk Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">322</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-322.php">Providence Bruins (1) vs Chicoutimi Saguenéens (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-352.php">Chicago Blackhawks (1) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-353.php">New York Islanders (6) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-354.php">Dallas Stars (1) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-355.php">Montreal Canadiens (5) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-356.php">Toronto Maple Leafs (2) vs Los Angeles Kings (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-357.php">San Jose Sharks (2) vs Winnipeg Jets (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">323</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-323.php">Binghamton Senators (0) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">324</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-324.php">St-Cyrille Condors (2) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">325</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-325.php">Lake Erie Monsters (0) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">326</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-326.php">Cleveland Knights (4) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">327</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-327.php">Wilkes-Barre/Scranton Penguins (1) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">328</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-328.php">Milwaukee Admirals (1) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">329</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-329.php">Chicago Wolves (3) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">330</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-330.php">Peoria Rivermen (1) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">331</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-331.php">Adirondack Phantoms (1) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">332</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-332.php">Bridgeport Sound Tigers (3) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">333</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-333.php">Grand Rapids Griffins (2) vs Oklahoma City Barons (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-358.php">Quebec Nordiques (2) vs Anaheim Ducks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-359.php">New York Rangers (2) vs Ottawa Senators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">334</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-334.php">Chicoutimi Saguenéens (2) vs San Antonio Rampage (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">335</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-335.php">Springfield Falcons (2) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">336</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-336.php">Albany Devils (3) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">337</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-337.php">Laval Chiefs (1) vs Rochester Americans (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 46</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-360.php">Toronto Maple Leafs (3) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-361.php">Tampa Bay Lightning (6) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-362.php">Edmonton Oilers (1) vs Calgary Flames (3)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-363.php">Columbus Blue Jackets (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-364.php">Minnesota Wild (7) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-365.php">Dallas Stars (4) vs Chicago Blackhawks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-366.php">New York Islanders (3) vs Detroit Red Wings (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">338</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-338.php">Chicago Wolves (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">339</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-339.php">Roberval Dwarfs (1) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">340</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-340.php">Houston Aeros (3) vs St-Cyrille Condors (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">341</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-341.php">Cleveland Knights (4) vs Binghamton Senators (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 47</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-367.php">Anaheim Ducks (3) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-368.php">Arizona Coyotes (3) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-369.php">Winnipeg Jets (1) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-370.php">Los Angeles Kings (3) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-371.php">Nashville Predators (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-372.php">Buffalo Sabres (3) vs New Jersey Devils (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-373.php">Seattle Saints (4) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-374.php">Florida Panthers (2) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-375.php">Carolina Hurricanes (3) vs Tampa Bay Lightning (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-376.php">Toronto Maple Leafs (2) vs Edmonton Oilers (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-377.php">Pittsburgh Penguins (3) vs Minnesota Wild (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">342</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-342.php">Manitoba Moose (2) vs Adirondack Phantoms (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">343</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-343.php">Landshut Cannibals (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">344</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-344.php">Portland Pirates (4) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">345</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-345.php">Rouyn-Noranda Huskies (3) vs Lake Erie Monsters (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">346</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-346.php">Charlotte Checkers (5) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">347</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-347.php">Oklahoma City Barons (2) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">348</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-348.php">Gatineau Olympiques (2) vs Cleveland Knights (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 48</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-378.php">Vancouver Canucks (3) vs Dallas Stars (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-379.php">Washington Capitals (2) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-380.php">Ottawa Senators (2) vs Florida Panthers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">349</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-349.php">San Antonio Rampage (3) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">350</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-350.php">Roberval Dwarfs (3) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">351</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-351.php">St-Cyrille Condors (1) vs Portland Pirates (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">352</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-352.php">Wilkes-Barre/Scranton Penguins (3) vs Manitoba Moose (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 49</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-381.php">San Jose Sharks (1) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-382.php">Quebec Nordiques (1) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-383.php">Los Angeles Kings (7) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-384.php">Montreal Canadiens (3) vs Toronto Maple Leafs (2)</a>  - OT (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">353</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-353.php">Springfield Falcons (1) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">354</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-354.php">Providence Bruins (2) vs Rockford IceHogs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">355</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-355.php">Lake Erie Monsters (2) vs Laval Chiefs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 50</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-385.php">New York Islanders (3) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-386.php">Tampa Bay Lightning (4) vs Columbus Blue Jackets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-387.php">Anaheim Ducks (1) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-388.php">Detroit Red Wings (3) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-389.php">Philadelphia Flyers (5) vs Winnipeg Jets (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-390.php">St. Louis Blues (3) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-391.php">New Jersey Devils (2) vs Boston Bruins (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-392.php">Dallas Stars (2) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-393.php">Washington Capitals (2) vs Los Angeles Kings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-394.php">New York Rangers (1) vs Pittsburgh Penguins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-395.php">Colorado Avalanche (5) vs Edmonton Oilers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">356</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-356.php">Cleveland Knights (3) vs Las Vegas Gamblers (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">357</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-357.php">San Antonio Rampage (1) vs Gatineau Olympiques (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">358</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-358.php">Landshut Cannibals (7) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">359</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-359.php">Peoria Rivermen (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 51</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-396.php">Montreal Canadiens (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-397.php">Seattle Saints (3) vs Vancouver Canucks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-398.php">San Jose Sharks (2) vs Detroit Red Wings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-399.php">Arizona Coyotes (1) vs Anaheim Ducks (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-400.php">Florida Panthers (2) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-401.php">Boston Bruins (1) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-402.php">Buffalo Sabres (1) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-403.php">St. Louis Blues (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-404.php">Toronto Maple Leafs (1) vs Tampa Bay Lightning (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-405.php">New York Islanders (5) vs Colorado Avalanche (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">360</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-360.php">Manitoba Moose (0) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">361</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-361.php">Chicoutimi Saguenéens (1) vs Connecticut Whale (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">362</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-362.php">Norfolk Admirals (2) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">363</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-363.php">Providence Bruins (2) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">364</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-364.php">Oklahoma City Barons (6) vs Rochester Americans (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 52</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-406.php">Dallas Stars (0) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-407.php">Ottawa Senators (1) vs Montreal Canadiens (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-408.php">Carolina Hurricanes (0) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-409.php">Columbus Blue Jackets (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-410.php">Pittsburgh Penguins (4) vs Arizona Coyotes (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-411.php">Calgary Flames (1) vs Seattle Saints (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">365</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-365.php">Trois-Rivières Draveurs (3) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">366</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-366.php">Gatineau Olympiques (6) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">367</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-367.php">Rockford IceHogs (2) vs Chicoutimi Saguenéens (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">368</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-368.php">Houston Aeros (1) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">369</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-369.php">Laval Chiefs (2) vs St-Cyrille Condors (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">370</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-370.php">Landshut Cannibals (5) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">371</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-371.php">Portland Pirates (1) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">372</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-372.php">Bridgeport Sound Tigers (1) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">373</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-373.php">Las Vegas Gamblers (4) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">374</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-374.php">Rouyn-Noranda Huskies (2) vs Chicago Wolves (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 53</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-412.php">Minnesota Wild (5) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-413.php">Los Angeles Kings (2) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-414.php">Edmonton Oilers (3) vs Buffalo Sabres (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-415.php">Nashville Predators (1) vs New York Islanders (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-416.php">Vancouver Canucks (3) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-417.php">Quebec Nordiques (6) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-418.php">New York Rangers (1) vs Chicago Blackhawks (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">375</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-375.php">Albany Devils (3) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">376</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-376.php">Norfolk Admirals (4) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">377</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-377.php">Adirondack Phantoms (4) vs Trois-Rivières Draveurs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">378</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-378.php">Milwaukee Admirals (2) vs Cleveland Knights (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">379</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-379.php">Connecticut Whale (1) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">380</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-380.php">Manitoba Moose (1) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">381</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-381.php">Rochester Americans (3) vs Landshut Cannibals (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">382</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-382.php">Houston Aeros (2) vs Portland Pirates (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">383</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-383.php">Las Vegas Gamblers (1) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">384</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-384.php">Laval Chiefs (2) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">385</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-385.php">Peoria Rivermen (2) vs Rouyn-Noranda Huskies (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 54</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-419.php">Columbus Blue Jackets (0) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-420.php">Detroit Red Wings (5) vs Calgary Flames (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-421.php">New Jersey Devils (2) vs Ottawa Senators (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-422.php">Anaheim Ducks (5) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-423.php">Colorado Avalanche (4) vs Nashville Predators (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">386</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-386.php">Lake Erie Monsters (2) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">387</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-387.php">St-Cyrille Condors (2) vs Manitoba Moose (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">388</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-388.php">Gatineau Olympiques (1) vs Norfolk Admirals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 55</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-424.php">Chicago Blackhawks (1) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-425.php">Montreal Canadiens (1) vs Columbus Blue Jackets (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-426.php">San Jose Sharks (4) vs Vancouver Canucks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">389</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-389.php">Providence Bruins (1) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">390</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-390.php">Chicago Wolves (4) vs Chicoutimi Saguenéens (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">391</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-391.php">Cleveland Knights (2) vs Binghamton Senators (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">392</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-392.php">Oklahoma City Barons (1) vs Grand Rapids Griffins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">393</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-393.php">Charlotte Checkers (4) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">394</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-394.php">Springfield Falcons (1) vs Las Vegas Gamblers (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">395</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-395.php">San Antonio Rampage (1) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">396</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-396.php">Adirondack Phantoms (2) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">397</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-397.php">Rochester Americans (3) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">398</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-398.php">Houston Aeros (1) vs Gatineau Olympiques (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 56</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-427.php">Carolina Hurricanes (1) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-428.php">Ottawa Senators (4) vs Philadelphia Flyers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">399</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-399.php">St-Cyrille Condors (2) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">400</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-400.php">Rockford IceHogs (3) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">401</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-401.php">Portland Pirates (5) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">402</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-402.php">Rouyn-Noranda Huskies (1) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">403</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-403.php">Bridgeport Sound Tigers (2) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">404</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-404.php">Landshut Cannibals (3) vs Providence Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">405</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-405.php">Cleveland Knights (5) vs Oklahoma City Barons (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">406</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-406.php">Manitoba Moose (2) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">407</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-407.php">Springfield Falcons (1) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">408</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-408.php">Connecticut Whale (1) vs Houston Aeros (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 57</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-429.php">Pittsburgh Penguins (3) vs Tampa Bay Lightning (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-430.php">New Jersey Devils (1) vs Detroit Red Wings (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">409</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-409.php">Binghamton Senators (0) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">410</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-410.php">Charlotte Checkers (3) vs St-Cyrille Condors (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">411</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-411.php">Roberval Dwarfs (1) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">412</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-412.php">Chicoutimi Saguenéens (5) vs Bridgeport Sound Tigers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">413</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-413.php">Grand Rapids Griffins (2) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">414</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-414.php">Rouyn-Noranda Huskies (2) vs Cleveland Knights (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 58</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-431.php">Winnipeg Jets (1) vs Anaheim Ducks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-432.php">Florida Panthers (2) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-433.php">Los Angeles Kings (2) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-434.php">Quebec Nordiques (2) vs New York Rangers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-435.php">Vancouver Canucks (5) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-436.php">Toronto Maple Leafs (3) vs Colorado Avalanche (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">415</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-415.php">Las Vegas Gamblers (2) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">416</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-416.php">Rockford IceHogs (4) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">417</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-417.php">Milwaukee Admirals (3) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">418</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-418.php">Wilkes-Barre/Scranton Penguins (3) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">419</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-419.php">Charlotte Checkers (1) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">420</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-420.php">Peoria Rivermen (1) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">421</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-421.php">Lake Erie Monsters (2) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">422</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-422.php">Oklahoma City Barons (2) vs Connecticut Whale (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">423</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-423.php">Providence Bruins (3) vs Binghamton Senators (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">424</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-424.php">San Antonio Rampage (2) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">425</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-425.php">Rochester Americans (2) vs Adirondack Phantoms (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 59</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-437.php">Tampa Bay Lightning (3) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-438.php">Nashville Predators (4) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-439.php">San Jose Sharks (4) vs New Jersey Devils (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-440.php">Carolina Hurricanes (2) vs New York Islanders (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-441.php">Boston Bruins (1) vs Buffalo Sabres (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-442.php">Washington Capitals (0) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-443.php">Detroit Red Wings (1) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-444.php">Calgary Flames (2) vs Seattle Saints (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-445.php">Columbus Blue Jackets (3) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-446.php">Chicago Blackhawks (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-447.php">Ottawa Senators (4) vs Toronto Maple Leafs (2)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">426</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-426.php">Chicago Wolves (3) vs Rockford IceHogs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">427</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-427.php">Milwaukee Admirals (2) vs Las Vegas Gamblers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">428</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-428.php">Albany Devils (3) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">429</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-429.php">Bridgeport Sound Tigers (2) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">430</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-430.php">Gatineau Olympiques (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">431</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-431.php">Lake Erie Monsters (3) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">432</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-432.php">Landshut Cannibals (0) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">433</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-433.php">Trois-Rivières Draveurs (3) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">434</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-434.php">Laval Chiefs (3) vs St-Cyrille Condors (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 60</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-448.php">Los Angeles Kings (5) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-449.php">St. Louis Blues (5) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-450.php">Minnesota Wild (3) vs Philadelphia Flyers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-451.php">Edmonton Oilers (2) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-452.php">Colorado Avalanche (4) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-453.php">Vancouver Canucks (2) vs Nashville Predators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">435</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-435.php">Connecticut Whale (2) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">436</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-436.php">Albany Devils (4) vs Rochester Americans (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">437</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-437.php">Binghamton Senators (4) vs Providence Bruins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">438</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-438.php">Springfield Falcons (3) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">439</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-439.php">Manitoba Moose (3) vs Chicago Wolves (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">440</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-440.php">Portland Pirates (3) vs Milwaukee Admirals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 61</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-454.php">New York Rangers (4) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-455.php">Calgary Flames (3) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-456.php">Pittsburgh Penguins (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-457.php">Tampa Bay Lightning (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-458.php">Arizona Coyotes (1) vs Ottawa Senators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">441</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-441.php">Grand Rapids Griffins (4) vs Cleveland Knights (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">442</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-442.php">Roberval Dwarfs (4) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">443</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-443.php">Las Vegas Gamblers (5) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">444</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-444.php">Norfolk Admirals (2) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">445</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-445.php">Chicoutimi Saguenéens (4) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">446</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-446.php">St-Cyrille Condors (3) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">447</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-447.php">Trois-Rivières Draveurs (1) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">448</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-448.php">Peoria Rivermen (6) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">449</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-449.php">Rouyn-Noranda Huskies (3) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">450</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-450.php">Houston Aeros (3) vs Laval Chiefs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">451</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-451.php">Adirondack Phantoms (3) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">452</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-452.php">Rochester Americans (3) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 62</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-459.php">Seattle Saints (4) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-460.php">Dallas Stars (0) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-461.php">Philadelphia Flyers (2) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-462.php">Anaheim Ducks (4) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-463.php">St. Louis Blues (1) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-464.php">Vancouver Canucks (3) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-465.php">New York Islanders (1) vs Buffalo Sabres (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">453</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-453.php">San Antonio Rampage (5) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">454</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-454.php">Connecticut Whale (1) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">455</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-455.php">Chicoutimi Saguenéens (2) vs Charlotte Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">456</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-456.php">Oklahoma City Barons (4) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">457</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-457.php">Peoria Rivermen (3) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">458</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-458.php">Milwaukee Admirals (2) vs Providence Bruins (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 63</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-466.php">San Jose Sharks (4) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-467.php">Colorado Avalanche (3) vs New York Rangers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-468.php">Winnipeg Jets (2) vs New Jersey Devils (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-469.php">Columbus Blue Jackets (1) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-470.php">Boston Bruins (4) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-471.php">Nashville Predators (4) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-472.php">Arizona Coyotes (2) vs Dallas Stars (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-473.php">Washington Capitals (1) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-474.php">Ottawa Senators (2) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-475.php">Chicago Blackhawks (1) vs Seattle Saints (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">459</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-459.php">Rockford IceHogs (4) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">460</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-460.php">Trois-Rivières Draveurs (3) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">461</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-461.php">Gatineau Olympiques (3) vs Rouyn-Noranda Huskies (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">462</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-462.php">Lake Erie Monsters (4) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">463</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-463.php">Bridgeport Sound Tigers (4) vs Houston Aeros (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">464</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-464.php">Cleveland Knights (1) vs Connecticut Whale (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 64</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-476.php">Anaheim Ducks (2) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-477.php">Carolina Hurricanes (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-478.php">Los Angeles Kings (0) vs Colorado Avalanche (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-479.php">Minnesota Wild (2) vs San Jose Sharks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-480.php">Quebec Nordiques (2) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-481.php">Edmonton Oilers (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-482.php">Boston Bruins (1) vs Detroit Red Wings (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-483.php">Buffalo Sabres (3) vs Philadelphia Flyers (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-484.php">Ottawa Senators (3) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-485.php">Pittsburgh Penguins (2) vs Chicago Blackhawks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-486.php">Washington Capitals (3) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-487.php">New York Rangers (2) vs Calgary Flames (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">465</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-465.php">Landshut Cannibals (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">466</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-466.php">Rochester Americans (1) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">467</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-467.php">Manitoba Moose (0) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">468</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-468.php">Providence Bruins (3) vs St-Cyrille Condors (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">469</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-469.php">Wilkes-Barre/Scranton Penguins (2) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">470</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-470.php">Springfield Falcons (1) vs Milwaukee Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">471</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-471.php">Laval Chiefs (5) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">472</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-472.php">Binghamton Senators (3) vs Portland Pirates (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">473</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-473.php">Charlotte Checkers (4) vs Lake Erie Monsters (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">474</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-474.php">Gatineau Olympiques (1) vs Peoria Rivermen (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 65</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-488.php">Toronto Maple Leafs (2) vs Carolina Hurricanes (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-489.php">Montreal Canadiens (4) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-490.php">Tampa Bay Lightning (3) vs Florida Panthers (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-491.php">Anaheim Ducks (1) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-492.php">Detroit Red Wings (1) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-493.php">Dallas Stars (3) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-494.php">Quebec Nordiques (1) vs New York Islanders (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-495.php">Seattle Saints (2) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-496.php">Philadelphia Flyers (3) vs Buffalo Sabres (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">475</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-475.php">Houston Aeros (1) vs Cleveland Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">476</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-476.php">Bridgeport Sound Tigers (2) vs Rochester Americans (8)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">477</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-477.php">Rockford IceHogs (2) vs Landshut Cannibals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">478</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-478.php">Roberval Dwarfs (3) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">479</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-479.php">Las Vegas Gamblers (1) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">480</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-480.php">Grand Rapids Griffins (3) vs Norfolk Admirals (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 66</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-497.php">Montreal Canadiens (1) vs Boston Bruins (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-498.php">New Jersey Devils (4) vs Washington Capitals (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-499.php">Columbus Blue Jackets (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-500.php">Calgary Flames (2) vs Colorado Avalanche (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-501.php">San Jose Sharks (2) vs Tampa Bay Lightning (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">481</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-481.php">Oklahoma City Barons (1) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">482</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-482.php">Portland Pirates (3) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">483</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-483.php">Charlotte Checkers (1) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">484</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-484.php">St-Cyrille Condors (3) vs Connecticut Whale (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">485</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-485.php">Providence Bruins (4) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">486</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-486.php">Albany Devils (2) vs Binghamton Senators (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 67</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-502.php">Arizona Coyotes (3) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-503.php">Winnipeg Jets (3) vs Anaheim Ducks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">487</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-487.php">Norfolk Admirals (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">488</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-488.php">Houston Aeros (2) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">489</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-489.php">Milwaukee Admirals (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">490</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-490.php">Las Vegas Gamblers (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">491</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-491.php">Gatineau Olympiques (2) vs Chicoutimi Saguenéens (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">492</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-492.php">Roberval Dwarfs (1) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 68</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-504.php">Carolina Hurricanes (3) vs Pittsburgh Penguins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-505.php">Los Angeles Kings (1) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-506.php">Colorado Avalanche (2) vs Dallas Stars (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-507.php">Buffalo Sabres (1) vs Montreal Canadiens (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">493</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-493.php">Albany Devils (2) vs Charlotte Checkers (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">494</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-494.php">Landshut Cannibals (1) vs San Antonio Rampage (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 69</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-508.php">Quebec Nordiques (1) vs Toronto Maple Leafs (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-509.php">Florida Panthers (3) vs Seattle Saints (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-510.php">Chicago Blackhawks (2) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-511.php">Vancouver Canucks (3) vs Arizona Coyotes (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-512.php">Nashville Predators (4) vs Winnipeg Jets (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-513.php">Edmonton Oilers (2) vs Calgary Flames (5)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-514.php">Philadelphia Flyers (1) vs Boston Bruins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-515.php">St. Louis Blues (2) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-516.php">Columbus Blue Jackets (1) vs Detroit Red Wings (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-517.php">Tampa Bay Lightning (1) vs Carolina Hurricanes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-518.php">New Jersey Devils (3) vs Washington Capitals (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-519.php">New York Rangers (5) vs Anaheim Ducks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">495</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-495.php">Norfolk Admirals (3) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">496</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-496.php">Grand Rapids Griffins (2) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">497</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-497.php">Houston Aeros (4) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">498</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-498.php">Manitoba Moose (3) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">499</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-499.php">Trois-Rivières Draveurs (3) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">500</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-500.php">Springfield Falcons (3) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">501</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-501.php">St-Cyrille Condors (4) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">502</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-502.php">Connecticut Whale (2) vs Gatineau Olympiques (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">503</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-503.php">Chicago Wolves (3) vs Cleveland Knights (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">504</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-504.php">Rockford IceHogs (4) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">505</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-505.php">Bridgeport Sound Tigers (2) vs Portland Pirates (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 70</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-520.php">Buffalo Sabres (2) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-521.php">Colorado Avalanche (5) vs Nashville Predators (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-522.php">Ottawa Senators (2) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-523.php">Dallas Stars (0) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-524.php">Montreal Canadiens (3) vs New York Islanders (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">506</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-506.php">Rouyn-Noranda Huskies (2) vs St-Cyrille Condors (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">507</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-507.php">San Antonio Rampage (4) vs Houston Aeros (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">508</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-508.php">Landshut Cannibals (2) vs Albany Devils (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">509</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-509.php">Adirondack Phantoms (2) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">510</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-510.php">Binghamton Senators (2) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">511</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-511.php">Charlotte Checkers (3) vs Manitoba Moose (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">512</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-512.php">Chicoutimi Saguenéens (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">513</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-513.php">Wilkes-Barre/Scranton Penguins (3) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">514</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-514.php">Grand Rapids Griffins (1) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">515</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-515.php">Cleveland Knights (3) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">516</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-516.php">Oklahoma City Barons (2) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">517</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-517.php">Rochester Americans (2) vs Connecticut Whale (1)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 71</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-525.php">Toronto Maple Leafs (3) vs Columbus Blue Jackets (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-526.php">St. Louis Blues (3) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-527.php">Detroit Red Wings (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-528.php">Washington Capitals (3) vs Philadelphia Flyers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-529.php">Arizona Coyotes (4) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-530.php">Vancouver Canucks (2) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-531.php">Winnipeg Jets (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-532.php">Boston Bruins (2) vs Tampa Bay Lightning (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-533.php">Minnesota Wild (4) vs New Jersey Devils (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-534.php">New York Islanders (3) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-535.php">San Jose Sharks (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-536.php">Los Angeles Kings (2) vs Buffalo Sabres (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">518</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-518.php">Milwaukee Admirals (5) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">519</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-519.php">Roberval Dwarfs (6) vs Adirondack Phantoms (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">520</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-520.php">Gatineau Olympiques (3) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">521</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-521.php">Portland Pirates (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">522</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-522.php">Peoria Rivermen (6) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">523</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-523.php">Trois-Rivières Draveurs (4) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">524</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-524.php">Lake Erie Monsters (5) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">525</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-525.php">San Antonio Rampage (1) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">526</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-526.php">Laval Chiefs (2) vs Grand Rapids Griffins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 72</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-537.php">Calgary Flames (3) vs Montreal Canadiens (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-538.php">Anaheim Ducks (2) vs Colorado Avalanche (1)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">527</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-527.php">Albany Devils (5) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">528</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-528.php">Cleveland Knights (5) vs St-Cyrille Condors (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">529</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-529.php">Oklahoma City Barons (2) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">530</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-530.php">Las Vegas Gamblers (2) vs Roberval Dwarfs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 73</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-539.php">Detroit Red Wings (2) vs Toronto Maple Leafs (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-540.php">Boston Bruins (2) vs St. Louis Blues (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-541.php">Carolina Hurricanes (1) vs Quebec Nordiques (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-542.php">Chicago Blackhawks (4) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-543.php">Tampa Bay Lightning (5) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-544.php">Philadelphia Flyers (5) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-545.php">Minnesota Wild (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-546.php">Columbus Blue Jackets (1) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-547.php">Pittsburgh Penguins (5) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-548.php">New Jersey Devils (3) vs Edmonton Oilers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">531</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-531.php">Laval Chiefs (8) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">532</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-532.php">Rockford IceHogs (3) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">533</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-533.php">Norfolk Admirals (2) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">534</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-534.php">Chicoutimi Saguenéens (2) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">535</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-535.php">Portland Pirates (2) vs Gatineau Olympiques (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 74</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-549.php">Seattle Saints (2) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-550.php">Colorado Avalanche (4) vs Carolina Hurricanes (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-551.php">Los Angeles Kings (3) vs Chicago Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-552.php">Washington Capitals (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-553.php">Ottawa Senators (1) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-554.php">Dallas Stars (4) vs New York Islanders (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">536</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-536.php">Oklahoma City Barons (3) vs Houston Aeros (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">537</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-537.php">Albany Devils (1) vs Cleveland Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">538</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-538.php">Rouyn-Noranda Huskies (2) vs Springfield Falcons (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">539</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-539.php">Chicago Wolves (3) vs Bridgeport Sound Tigers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">540</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-540.php">Charlotte Checkers (2) vs Landshut Cannibals (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">541</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-541.php">Wilkes-Barre/Scranton Penguins (2) vs Portland Pirates (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">542</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-542.php">Connecticut Whale (5) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">543</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-543.php">Trois-Rivières Draveurs (3) vs Norfolk Admirals (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">544</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-544.php">Peoria Rivermen (4) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">545</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-545.php">Grand Rapids Griffins (1) vs Adirondack Phantoms (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 75</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-555.php">Florida Panthers (0) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-556.php">Arizona Coyotes (3) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-557.php">Nashville Predators (0) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-558.php">Buffalo Sabres (5) vs Philadelphia Flyers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-559.php">San Jose Sharks (5) vs Minnesota Wild (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">546</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-546.php">Las Vegas Gamblers (2) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">547</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-547.php">San Antonio Rampage (3) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">548</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-548.php">Rockford IceHogs (2) vs Laval Chiefs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 76</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-560.php">Quebec Nordiques (4) vs Pittsburgh Penguins (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-561.php">New York Rangers (4) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-562.php">Dallas Stars (2) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-563.php">Washington Capitals (5) vs New Jersey Devils (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-564.php">Calgary Flames (3) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-565.php">Seattle Saints (1) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-566.php">Colorado Avalanche (5) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-567.php">New York Islanders (1) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-568.php">Anaheim Ducks (2) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-569.php">Arizona Coyotes (4) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-570.php">Edmonton Oilers (5) vs San Jose Sharks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">549</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-549.php">Connecticut Whale (1) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">550</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-550.php">Adirondack Phantoms (0) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">551</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-551.php">Rockford IceHogs (4) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">552</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-552.php">Lake Erie Monsters (2) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">553</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-553.php">Bridgeport Sound Tigers (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">554</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-554.php">Peoria Rivermen (3) vs Gatineau Olympiques (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">555</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-555.php">Rochester Americans (4) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">556</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-556.php">Milwaukee Admirals (4) vs Grand Rapids Griffins (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">557</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-557.php">Roberval Dwarfs (3) vs St-Cyrille Condors (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">558</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-558.php">Manitoba Moose (0) vs Charlotte Checkers (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 77</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-571.php">Winnipeg Jets (2) vs Dallas Stars (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-572.php">Philadelphia Flyers (4) vs Washington Capitals (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">559</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-559.php">Portland Pirates (4) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">560</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-560.php">Norfolk Admirals (1) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">561</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-561.php">Landshut Cannibals (3) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">562</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-562.php">San Antonio Rampage (1) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">563</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-563.php">Laval Chiefs (4) vs Cleveland Knights (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">564</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-564.php">Binghamton Senators (2) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">565</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-565.php">Charlotte Checkers (3) vs Roberval Dwarfs (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">566</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-566.php">Albany Devils (2) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">567</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-567.php">Chicago Wolves (4) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">568</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-568.php">Peoria Rivermen (4) vs Rockford IceHogs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 78</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-573.php">Calgary Flames (3) vs Quebec Nordiques (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-574.php">Toronto Maple Leafs (1) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-575.php">Carolina Hurricanes (2) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-576.php">Minnesota Wild (2) vs Arizona Coyotes (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-577.php">Los Angeles Kings (2) vs Nashville Predators (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-578.php">St. Louis Blues (3) vs Chicago Blackhawks (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-579.php">Columbus Blue Jackets (1) vs Winnipeg Jets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">569</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-569.php">Rouyn-Noranda Huskies (2) vs Oklahoma City Barons (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">570</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-570.php">Grand Rapids Griffins (2) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">571</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-571.php">Gatineau Olympiques (5) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">572</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-572.php">Providence Bruins (3) vs Landshut Cannibals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">573</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-573.php">Chicoutimi Saguenéens (5) vs Portland Pirates (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 79</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-580.php">Detroit Red Wings (3) vs Edmonton Oilers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-581.php">New York Islanders (2) vs Pittsburgh Penguins (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-582.php">Buffalo Sabres (3) vs Boston Bruins (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-583.php">Montreal Canadiens (1) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-584.php">New York Rangers (5) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-585.php">Vancouver Canucks (2) vs Anaheim Ducks (1)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">574</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-574.php">Cleveland Knights (4) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">575</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-575.php">Laval Chiefs (3) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">576</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-576.php">St-Cyrille Condors (4) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">577</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-577.php">Binghamton Senators (6) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">578</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-578.php">Houston Aeros (3) vs Adirondack Phantoms (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">579</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-579.php">Trois-Rivières Draveurs (0) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">580</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-580.php">Chicoutimi Saguenéens (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">581</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-581.php">Grand Rapids Griffins (1) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">582</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-582.php">Rochester Americans (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">583</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-583.php">Rouyn-Noranda Huskies (1) vs Connecticut Whale (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 80</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-586.php">Chicago Blackhawks (3) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-587.php">Tampa Bay Lightning (1) vs New Jersey Devils (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-588.php">Washington Capitals (2) vs Ottawa Senators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-589.php">Calgary Flames (2) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-590.php">Dallas Stars (5) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-591.php">St. Louis Blues (7) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-592.php">Colorado Avalanche (3) vs Los Angeles Kings (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-593.php">San Jose Sharks (1) vs Toronto Maple Leafs (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-594.php">Nashville Predators (2) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-595.php">Edmonton Oilers (1) vs Quebec Nordiques (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">584</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-584.php">Bridgeport Sound Tigers (2) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">585</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-585.php">Milwaukee Admirals (1) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">586</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-586.php">Roberval Dwarfs (4) vs Gatineau Olympiques (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 81</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-596.php">New York Islanders (5) vs New York Rangers (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-597.php">Boston Bruins (5) vs Vancouver Canucks (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-598.php">Arizona Coyotes (3) vs Montreal Canadiens (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">587</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-587.php">Houston Aeros (2) vs Charlotte Checkers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">588</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-588.php">Lake Erie Monsters (3) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">589</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-589.php">Portland Pirates (2) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">590</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-590.php">San Antonio Rampage (4) vs St-Cyrille Condors (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">591</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-591.php">Oklahoma City Barons (5) vs Chicoutimi Saguenéens (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">592</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-592.php">Laval Chiefs (1) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">593</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-593.php">Las Vegas Gamblers (1) vs Cleveland Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">594</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-594.php">Manitoba Moose (2) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">595</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-595.php">Wilkes-Barre/Scranton Penguins (3) vs Milwaukee Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">596</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-596.php">Norfolk Admirals (3) vs Rochester Americans (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 82</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-599.php">Columbus Blue Jackets (1) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-600.php">Carolina Hurricanes (4) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-601.php">St. Louis Blues (2) vs Buffalo Sabres (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">597</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-597.php">Connecticut Whale (3) vs Roberval Dwarfs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">598</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-598.php">Adirondack Phantoms (2) vs Grand Rapids Griffins (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">599</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-599.php">Peoria Rivermen (2) vs Lake Erie Monsters (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">600</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-600.php">Providence Bruins (1) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">601</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-601.php">Albany Devils (2) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-602.php">Chicago Wolves (4) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-603.php">Bridgeport Sound Tigers (2) vs San Antonio Rampage (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-604.php">Gatineau Olympiques (1) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-605.php">Trois-Rivières Draveurs (5) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-606.php">St-Cyrille Condors (3) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-607.php">Binghamton Senators (1) vs Wilkes-Barre/Scranton Penguins (10)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-608.php">Rockford IceHogs (2) vs Springfield Falcons (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 83</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">602</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-602.php">Boston Bruins (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">603</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-603.php">Arizona Coyotes (2) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">604</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-604.php">Minnesota Wild (2) vs Dallas Stars (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">605</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-605.php">Edmonton Oilers (2) vs Colorado Avalanche (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">606</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-606.php">Nashville Predators (2) vs San Jose Sharks (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">607</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-607.php">Toronto Maple Leafs (3) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">608</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-608.php">Vancouver Canucks (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-609.php">Quebec Nordiques (4) vs Florida Panthers (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-610.php">New York Rangers (3) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-611.php">Los Angeles Kings (1) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-612.php">Ottawa Senators (6) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-613.php">Montreal Canadiens (4) vs Philadelphia Flyers (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">609</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-609.php">Charlotte Checkers (3) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">610</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-610.php">Cleveland Knights (4) vs Albany Devils (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">611</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-611.php">Rouyn-Noranda Huskies (3) vs Bridgeport Sound Tigers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">612</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-612.php">Landshut Cannibals (1) vs Adirondack Phantoms (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 84</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-614.php">Seattle Saints (2) vs Arizona Coyotes (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-615.php">Anaheim Ducks (3) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-616.php">Tampa Bay Lightning (1) vs Carolina Hurricanes (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-617.php">Los Angeles Kings (3) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-618.php">Buffalo Sabres (2) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-619.php">Boston Bruins (1) vs Columbus Blue Jackets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-620.php">Chicago Blackhawks (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-621.php">Vancouver Canucks (2) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-622.php">Dallas Stars (2) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-623.php">Toronto Maple Leafs (2) vs New York Islanders (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-624.php">New York Rangers (1) vs Quebec Nordiques (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">613</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-613.php">Chicoutimi Saguenéens (4) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">614</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-614.php">Milwaukee Admirals (3) vs Las Vegas Gamblers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">615</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-615.php">Providence Bruins (2) vs Chicago Wolves (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">616</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-616.php">Roberval Dwarfs (1) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">617</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-617.php">Grand Rapids Griffins (1) vs Binghamton Senators (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 85</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-625.php">Washington Capitals (5) vs Anaheim Ducks (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-626.php">Pittsburgh Penguins (5) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-627.php">Winnipeg Jets (2) vs Tampa Bay Lightning (3)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">618</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-618.php">St-Cyrille Condors (1) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">619</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-619.php">San Antonio Rampage (1) vs Rochester Americans (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">620</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-620.php">Portland Pirates (4) vs Charlotte Checkers (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">621</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-621.php">Trois-Rivières Draveurs (2) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">622</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-622.php">Springfield Falcons (4) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">623</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-623.php">Cleveland Knights (2) vs Gatineau Olympiques (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">624</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-624.php">Oklahoma City Barons (4) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">625</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-625.php">Wilkes-Barre/Scranton Penguins (6) vs Providence Bruins (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">626</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-626.php">Manitoba Moose (2) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">627</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-627.php">Peoria Rivermen (6) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-628.php">Norfolk Admirals (2) vs Roberval Dwarfs (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 86</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">628</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-628.php">Detroit Red Wings (2) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-629.php">Philadelphia Flyers (4) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-630.php">Calgary Flames (1) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-631.php">San Jose Sharks (3) vs Colorado Avalanche (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-632.php">Carolina Hurricanes (3) vs Buffalo Sabres (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-633.php">Florida Panthers (2) vs New York Rangers (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-634.php">New York Islanders (2) vs Los Angeles Kings (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-635.php">New Jersey Devils (1) vs Toronto Maple Leafs (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-636.php">Columbus Blue Jackets (4) vs Washington Capitals (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-637.php">Arizona Coyotes (3) vs Vancouver Canucks (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">629</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-629.php">Connecticut Whale (2) vs Grand Rapids Griffins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">630</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-630.php">Chicago Wolves (3) vs St-Cyrille Condors (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">631</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-631.php">Albany Devils (3) vs Landshut Cannibals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">632</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-632.php">Bridgeport Sound Tigers (1) vs Cleveland Knights (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">633</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-633.php">Adirondack Phantoms (3) vs San Antonio Rampage (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">634</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-634.php">Oklahoma City Barons (2) vs Trois-Rivières Draveurs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">635</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-635.php">Las Vegas Gamblers (1) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">636</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-636.php">Laval Chiefs (1) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">637</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-637.php">Lake Erie Monsters (2) vs Manitoba Moose (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-638.php">Rochester Americans (1) vs Norfolk Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 87</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">638</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-638.php">Nashville Predators (4) vs Dallas Stars (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-639.php">Chicago Blackhawks (1) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-640.php">Pittsburgh Penguins (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-641.php">Quebec Nordiques (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-642.php">Edmonton Oilers (2) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-643.php">Montreal Canadiens (3) vs Ottawa Senators (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-644.php">St. Louis Blues (2) vs Detroit Red Wings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-645.php">Tampa Bay Lightning (1) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-646.php">Carolina Hurricanes (1) vs Anaheim Ducks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-647.php">Columbus Blue Jackets (3) vs Philadelphia Flyers (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-648.php">Colorado Avalanche (1) vs Calgary Flames (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">639</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-639.php">Binghamton Senators (3) vs Oklahoma City Barons (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">640</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-640.php">Rockford IceHogs (1) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">641</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-641.php">Wilkes-Barre/Scranton Penguins (3) vs Bridgeport Sound Tigers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">642</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-642.php">Connecticut Whale (2) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">643</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-643.php">Springfield Falcons (4) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">644</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-644.php">Grand Rapids Griffins (2) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">645</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-645.php">Providence Bruins (1) vs Houston Aeros (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">646</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-646.php">Rouyn-Noranda Huskies (2) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">647</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-647.php">Roberval Dwarfs (2) vs Chicoutimi Saguenéens (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">648</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-648.php">Milwaukee Admirals (5) vs Chicago Wolves (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 88</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-649.php">Seattle Saints (2) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-650.php">Minnesota Wild (3) vs Chicago Blackhawks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">649</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-649.php">Landshut Cannibals (2) vs Binghamton Senators (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">650</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-650.php">Gatineau Olympiques (1) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-651.php">Norfolk Admirals (6) vs Laval Chiefs (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-652.php">St-Cyrille Condors (3) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-653.php">Springfield Falcons (0) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-654.php">San Antonio Rampage (3) vs Lake Erie Monsters (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-655.php">Manitoba Moose (1) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-656.php">Houston Aeros (1) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-657.php">Charlotte Checkers (1) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-658.php">Chicago Wolves (2) vs Trois-Rivières Draveurs (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 89</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">651</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-651.php">Washington Capitals (1) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">652</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-652.php">Boston Bruins (5) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">653</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-653.php">Winnipeg Jets (2) vs Edmonton Oilers (1)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">654</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-654.php">Ottawa Senators (4) vs Carolina Hurricanes (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">655</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-655.php">Los Angeles Kings (1) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">656</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-656.php">New York Islanders (4) vs Toronto Maple Leafs (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">657</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-657.php">New York Rangers (5) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">658</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-658.php">Quebec Nordiques (5) vs Montreal Canadiens (1)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-659.php">Calgary Flames (2) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-660.php">New Jersey Devils (6) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-661.php">Columbus Blue Jackets (5) vs Seattle Saints (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">659</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-659.php">Portland Pirates (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">660</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-660.php">Chicoutimi Saguenéens (1) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">661</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-661.php">Las Vegas Gamblers (5) vs Milwaukee Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-662.php">Peoria Rivermen (3) vs Cleveland Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-663.php">Albany Devils (3) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-664.php">Adirondack Phantoms (3) vs St-Cyrille Condors (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-665.php">Norfolk Admirals (1) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-666.php">Wilkes-Barre/Scranton Penguins (2) vs Landshut Cannibals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-667.php">Gatineau Olympiques (3) vs San Antonio Rampage (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-668.php">Rochester Americans (2) vs Bridgeport Sound Tigers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 90</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">662</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-662.php">Florida Panthers (2) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">663</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-663.php">San Jose Sharks (1) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">664</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-664.php">Detroit Red Wings (2) vs Colorado Avalanche (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">665</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-665.php">Philadelphia Flyers (1) vs New York Islanders (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">666</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-666.php">Quebec Nordiques (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">667</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-667.php">Pittsburgh Penguins (3) vs New York Rangers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">668</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-668.php">Anaheim Ducks (6) vs Los Angeles Kings (1)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-669.php">Chicago Blackhawks (3) vs Arizona Coyotes (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-670.php">Montreal Canadiens (2) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-671.php">Minnesota Wild (3) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-672.php">Buffalo Sabres (3) vs Ottawa Senators (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">669</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-669.php">Laval Chiefs (1) vs Peoria Rivermen (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">670</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-670.php">Manitoba Moose (1) vs Portland Pirates (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">671</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-671.php">Providence Bruins (5) vs Albany Devils (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 91</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-673.php">Toronto Maple Leafs (4) vs Columbus Blue Jackets (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-674.php">Dallas Stars (1) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-675.php">New Jersey Devils (3) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-676.php">Vancouver Canucks (4) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-677.php">Seattle Saints (7) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-678.php">Tampa Bay Lightning (0) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-679.php">Calgary Flames (1) vs Anaheim Ducks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">672</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-672.php">Chicoutimi Saguenéens (4) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">673</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-673.php">Rockford IceHogs (1) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">674</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-674.php">Las Vegas Gamblers (1) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">675</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-675.php">Houston Aeros (3) vs Norfolk Admirals (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">676</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-676.php">Charlotte Checkers (2) vs Chicago Wolves (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">677</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-677.php">Bridgeport Sound Tigers (4) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">678</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-678.php">Cleveland Knights (3) vs Lake Erie Monsters (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">679</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-679.php">Grand Rapids Griffins (3) vs Rouyn-Noranda Huskies (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-680.php">Roberval Dwarfs (0) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-681.php">Milwaukee Admirals (2) vs Laval Chiefs (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-682.php">San Antonio Rampage (3) vs Trois-Rivières Draveurs (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 92</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">680</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-680.php">New York Rangers (1) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">681</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-681.php">Toronto Maple Leafs (2) vs Pittsburgh Penguins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">682</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-682.php">Buffalo Sabres (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-683.php">Colorado Avalanche (3) vs Chicago Blackhawks (0)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-684.php">Washington Capitals (1) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-685.php">Nashville Predators (1) vs Minnesota Wild (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-686.php">Arizona Coyotes (3) vs New Jersey Devils (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-687.php">Winnipeg Jets (1) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-688.php">Edmonton Oilers (0) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-689.php">Montreal Canadiens (3) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-690.php">Vancouver Canucks (4) vs New York Islanders (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">683</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-683.php">St-Cyrille Condors (2) vs Rochester Americans (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">684</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-684.php">Gatineau Olympiques (3) vs Springfield Falcons (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">685</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-685.php">Oklahoma City Barons (1) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">686</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-686.php">Houston Aeros (1) vs Chicoutimi Saguenéens (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">687</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-687.php">Albany Devils (5) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">688</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-688.php">Landshut Cannibals (1) vs Providence Bruins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">689</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-689.php">Adirondack Phantoms (0) vs Las Vegas Gamblers (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 93</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-691.php">Anaheim Ducks (2) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-692.php">Ottawa Senators (1) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-693.php">Philadelphia Flyers (3) vs Seattle Saints (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-694.php">Colorado Avalanche (3) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-695.php">Detroit Red Wings (4) vs San Jose Sharks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">690</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-690.php">Chicago Wolves (3) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">691</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-691.php">Rouyn-Noranda Huskies (6) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">692</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-692.php">Lake Erie Monsters (1) vs Milwaukee Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">693</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-693.php">Portland Pirates (5) vs Cleveland Knights (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">694</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-694.php">Norfolk Admirals (7) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">695</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-695.php">Bridgeport Sound Tigers (2) vs St-Cyrille Condors (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-696.php">Oklahoma City Barons (5) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-697.php">Trois-Rivières Draveurs (2) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-698.php">Binghamton Senators (7) vs San Antonio Rampage (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-699.php">Connecticut Whale (4) vs Landshut Cannibals (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 94</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">696</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-696.php">Washington Capitals (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">697</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-697.php">New York Islanders (3) vs Montreal Canadiens (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-700.php">Laval Chiefs (4) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-701.php">Wilkes-Barre/Scranton Penguins (4) vs Oklahoma City Barons (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-702.php">Rochester Americans (2) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-703.php">Grand Rapids Griffins (4) vs Albany Devils (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-704.php">Springfield Falcons (2) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-705.php">Chicoutimi Saguenéens (3) vs Adirondack Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-706.php">Roberval Dwarfs (3) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-707.php">Providence Bruins (4) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-708.php">Connecticut Whale (4) vs Lake Erie Monsters (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-709.php">Las Vegas Gamblers (6) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-710.php">Peoria Rivermen (2) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-711.php">Cleveland Knights (3) vs Rockford IceHogs (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 95</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">698</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-698.php">Quebec Nordiques (3) vs Toronto Maple Leafs (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">699</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-699.php">Carolina Hurricanes (1) vs New York Rangers (2)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-712.php">Milwaukee Admirals (3) vs Rouyn-Noranda Huskies (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-713.php">Landshut Cannibals (1) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-714.php">Springfield Falcons (1) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-715.php">Manitoba Moose (5) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-716.php">Gatineau Olympiques (4) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-717.php">Rockford IceHogs (2) vs St-Cyrille Condors (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-718.php">Lake Erie Monsters (3) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-719.php">San Antonio Rampage (2) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-720.php">Chicoutimi Saguenéens (2) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-721.php">Portland Pirates (1) vs Las Vegas Gamblers (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 96</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">700</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-700.php">Ottawa Senators (3) vs Buffalo Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">701</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-701.php">Montreal Canadiens (5) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">702</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-702.php">Seattle Saints (10) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">703</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-703.php">Boston Bruins (4) vs Quebec Nordiques (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">704</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-704.php">Anaheim Ducks (3) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">705</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-705.php">Chicago Blackhawks (3) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">706</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-706.php">Calgary Flames (2) vs Winnipeg Jets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-722.php">Rouyn-Noranda Huskies (1) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-723.php">Trois-Rivières Draveurs (4) vs Cleveland Knights (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-724.php">Chicago Wolves (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-725.php">Albany Devils (5) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-726.php">Peoria Rivermen (8) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-727.php">Charlotte Checkers (2) vs Gatineau Olympiques (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-728.php">Adirondack Phantoms (3) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-729.php">Laval Chiefs (5) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-730.php">Binghamton Senators (2) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-731.php">Wilkes-Barre/Scranton Penguins (3) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-732.php">Norfolk Admirals (4) vs Manitoba Moose (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 97</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">707</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-707.php">Los Angeles Kings (1) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">708</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-708.php">Detroit Red Wings (5) vs Nashville Predators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">709</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-709.php">Toronto Maple Leafs (4) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">710</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-710.php">St. Louis Blues (4) vs Edmonton Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">711</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-711.php">New York Islanders (2) vs New Jersey Devils (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">712</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-712.php">Columbus Blue Jackets (3) vs Carolina Hurricanes (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">713</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-713.php">Tampa Bay Lightning (3) vs Minnesota Wild (11)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">714</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-714.php">Dallas Stars (3) vs Chicago Blackhawks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">715</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-715.php">Florida Panthers (4) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">716</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-716.php">Buffalo Sabres (4) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">717</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-717.php">San Jose Sharks (3) vs Anaheim Ducks (2)</a>  - SO (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-733.php">St-Cyrille Condors (5) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-734.php">Rochester Americans (2) vs Peoria Rivermen (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-735.php">Connecticut Whale (4) vs Portland Pirates (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-736.php">Las Vegas Gamblers (4) vs Albany Devils (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 98</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">718</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-718.php">Vancouver Canucks (4) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">719</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-719.php">Calgary Flames (1) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">720</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-720.php">Colorado Avalanche (3) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">721</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-721.php">Arizona Coyotes (3) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">722</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-722.php">Washington Capitals (0) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">723</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-723.php">New Jersey Devils (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">724</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-724.php">Montreal Canadiens (1) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">725</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-725.php">Winnipeg Jets (1) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">726</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-726.php">Carolina Hurricanes (4) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">727</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-727.php">Philadelphia Flyers (2) vs Toronto Maple Leafs (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-737.php">Cleveland Knights (3) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-738.php">Houston Aeros (4) vs Binghamton Senators (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-739.php">Rockford IceHogs (4) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-740.php">Lake Erie Monsters (2) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-741.php">Roberval Dwarfs (1) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-742.php">Bridgeport Sound Tigers (3) vs Providence Bruins (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-743.php">Milwaukee Admirals (2) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-744.php">Manitoba Moose (3) vs Wilkes-Barre/Scranton Penguins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-745.php">Grand Rapids Griffins (2) vs Laval Chiefs (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-746.php">Landshut Cannibals (4) vs Trois-Rivières Draveurs (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 99</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">728</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-728.php">Quebec Nordiques (1) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">729</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-729.php">Pittsburgh Penguins (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">730</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-730.php">Minnesota Wild (3) vs Calgary Flames (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">731</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-731.php">Edmonton Oilers (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">732</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-732.php">Nashville Predators (0) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">733</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-733.php">Ottawa Senators (1) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">734</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-734.php">Seattle Saints (2) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">735</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-735.php">Chicago Blackhawks (3) vs Arizona Coyotes (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">736</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-736.php">Winnipeg Jets (2) vs Florida Panthers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-747.php">Springfield Falcons (1) vs Gatineau Olympiques (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-748.php">Oklahoma City Barons (2) vs St-Cyrille Condors (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-749.php">Roberval Dwarfs (5) vs Rochester Americans (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 100</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">737</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-737.php">Tampa Bay Lightning (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">738</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-738.php">San Jose Sharks (4) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">739</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-739.php">Edmonton Oilers (3) vs Nashville Predators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-750.php">San Antonio Rampage (3) vs Connecticut Whale (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-751.php">Binghamton Senators (5) vs Lake Erie Monsters (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-752.php">Rouyn-Noranda Huskies (2) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-753.php">Adirondack Phantoms (3) vs Rockford IceHogs (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-754.php">Grand Rapids Griffins (3) vs Chicoutimi Saguenéens (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-755.php">Cleveland Knights (3) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-756.php">Providence Bruins (4) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-757.php">Trois-Rivières Draveurs (4) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-758.php">Albany Devils (4) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-759.php">Bridgeport Sound Tigers (5) vs Peoria Rivermen (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 101</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">740</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-740.php">Minnesota Wild (4) vs Winnipeg Jets (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">741</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-741.php">Detroit Red Wings (3) vs Philadelphia Flyers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">742</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-742.php">Calgary Flames (3) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">743</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-743.php">Washington Capitals (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">744</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-744.php">Dallas Stars (1) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">745</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-745.php">Vancouver Canucks (1) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">746</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-746.php">Ottawa Senators (5) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">747</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-747.php">Buffalo Sabres (3) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">748</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-748.php">Los Angeles Kings (3) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">749</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-749.php">Florida Panthers (3) vs St. Louis Blues (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">750</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-750.php">Quebec Nordiques (5) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">751</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-751.php">Montreal Canadiens (3) vs New York Islanders (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-760.php">Manitoba Moose (4) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-761.php">Wilkes-Barre/Scranton Penguins (2) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-762.php">Chicago Wolves (3) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-763.php">Laval Chiefs (3) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-764.php">Charlotte Checkers (4) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-765.php">Norfolk Admirals (2) vs Cleveland Knights (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-766.php">Rochester Americans (2) vs Bridgeport Sound Tigers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-767.php">Providence Bruins (3) vs Albany Devils (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-768.php">St-Cyrille Condors (1) vs Binghamton Senators (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-769.php">Peoria Rivermen (4) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-770.php">Milwaukee Admirals (2) vs Gatineau Olympiques (1)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 102</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">752</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-752.php">Seattle Saints (5) vs Detroit Red Wings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">753</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-753.php">Nashville Predators (2) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">754</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-754.php">Tampa Bay Lightning (6) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">755</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-755.php">Pittsburgh Penguins (2) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">756</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-756.php">Colorado Avalanche (4) vs Los Angeles Kings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">757</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-757.php">Chicago Blackhawks (2) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">758</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-758.php">Arizona Coyotes (4) vs San Jose Sharks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">759</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-759.php">Calgary Flames (3) vs Vancouver Canucks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">760</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-760.php">Columbus Blue Jackets (5) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">761</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-761.php">Carolina Hurricanes (3) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">762</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-762.php">Winnipeg Jets (5) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">763</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-763.php">New York Rangers (3) vs Florida Panthers (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-771.php">Houston Aeros (4) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-772.php">Portland Pirates (3) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-773.php">Rockford IceHogs (1) vs Connecticut Whale (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-774.php">Lake Erie Monsters (1) vs Las Vegas Gamblers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-775.php">Chicoutimi Saguenéens (8) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-776.php">Chicago Wolves (0) vs Laval Chiefs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-777.php">Trois-Rivières Draveurs (4) vs Charlotte Checkers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-778.php">San Antonio Rampage (3) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-779.php">Gatineau Olympiques (0) vs Springfield Falcons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-780.php">Oklahoma City Barons (4) vs St-Cyrille Condors (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-781.php">Landshut Cannibals (2) vs Rochester Americans (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 103</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">764</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-764.php">New York Islanders (3) vs Tampa Bay Lightning (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">765</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-765.php">New Jersey Devils (1) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">766</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-766.php">Arizona Coyotes (3) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">767</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-767.php">Boston Bruins (3) vs Quebec Nordiques (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-782.php">Roberval Dwarfs (3) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-783.php">Bridgeport Sound Tigers (1) vs Chicoutimi Saguenéens (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-784.php">Rouyn-Noranda Huskies (4) vs Houston Aeros (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-785.php">Trois-Rivières Draveurs (3) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-786.php">Peoria Rivermen (3) vs Rockford IceHogs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-787.php">Binghamton Senators (2) vs Chicago Wolves (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 104</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">768</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-768.php">Nashville Predators (4) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">769</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-769.php">Pittsburgh Penguins (5) vs Philadelphia Flyers (4)</a>  - SO (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">770</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-770.php">Edmonton Oilers (3) vs Anaheim Ducks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">771</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-771.php">St. Louis Blues (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">772</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-772.php">Montreal Canadiens (0) vs Detroit Red Wings (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">773</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-773.php">Toronto Maple Leafs (1) vs Boston Bruins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">774</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-774.php">New York Rangers (2) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">775</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-775.php">San Jose Sharks (4) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">776</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-776.php">Dallas Stars (1) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">777</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-777.php">Columbus Blue Jackets (4) vs Chicago Blackhawks (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">778</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-778.php">Washington Capitals (4) vs Ottawa Senators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-788.php">St-Cyrille Condors (4) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-789.php">Charlotte Checkers (5) vs Grand Rapids Griffins (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-790.php">Oklahoma City Barons (6) vs Cleveland Knights (5)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 105</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">779</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-779.php">Vancouver Canucks (3) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">780</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-780.php">Anaheim Ducks (4) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">781</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-781.php">Florida Panthers (2) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">782</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-782.php">San Jose Sharks (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">783</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-783.php">Tampa Bay Lightning (7) vs St. Louis Blues (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-791.php">Chicoutimi Saguenéens (3) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-792.php">Roberval Dwarfs (2) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 106</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">784</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-784.php">Ottawa Senators (3) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">785</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-785.php">Florida Panthers (4) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">786</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-786.php">Buffalo Sabres (4) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">787</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-787.php">Philadelphia Flyers (6) vs Columbus Blue Jackets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">788</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-788.php">Montreal Canadiens (2) vs New York Rangers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">789</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-789.php">Minnesota Wild (1) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">790</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-790.php">Detroit Red Wings (5) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">791</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-791.php">Calgary Flames (2) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">792</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-792.php">Chicago Blackhawks (1) vs Colorado Avalanche (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-793.php">New Jersey Devils (5) vs Quebec Nordiques (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">793</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-793.php">Charlotte Checkers (6) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-794.php">Peoria Rivermen (7) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-795.php">Rochester Americans (4) vs Oklahoma City Barons (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 107</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">794</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-794.php">Los Angeles Kings (2) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">795</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-795.php">Boston Bruins (2) vs Buffalo Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-796.php">Pittsburgh Penguins (2) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-797.php">Winnipeg Jets (2) vs San Jose Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-798.php">Anaheim Ducks (5) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-799.php">Nashville Predators (4) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-800.php">Carolina Hurricanes (5) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-801.php">Dallas Stars (4) vs Florida Panthers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-802.php">New York Islanders (1) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-803.php">Minnesota Wild (5) vs St. Louis Blues (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">796</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-796.php">Laval Chiefs (4) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">797</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-797.php">Norfolk Admirals (1) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">798</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-798.php">Rouyn-Noranda Huskies (3) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">799</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-799.php">Providence Bruins (4) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">800</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-800.php">Las Vegas Gamblers (6) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">801</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-801.php">Binghamton Senators (3) vs Adirondack Phantoms (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">802</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-802.php">Landshut Cannibals (4) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">803</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-803.php">Lake Erie Monsters (1) vs Wilkes-Barre/Scranton Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-804.php">Cleveland Knights (1) vs Houston Aeros (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-805.php">Chicoutimi Saguenéens (5) vs Springfield Falcons (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 108</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">804</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-804.php">Colorado Avalanche (1) vs Winnipeg Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">805</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-805.php">Chicago Blackhawks (2) vs Edmonton Oilers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-806.php">Quebec Nordiques (3) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-807.php">Nashville Predators (3) vs Detroit Red Wings (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-808.php">New York Rangers (2) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-809.php">Toronto Maple Leafs (4) vs Boston Bruins (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-810.php">Seattle Saints (4) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-811.php">Vancouver Canucks (4) vs Carolina Hurricanes (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-812.php">Columbus Blue Jackets (3) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-813.php">Washington Capitals (1) vs Los Angeles Kings (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">806</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-806.php">Charlotte Checkers (0) vs Norfolk Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">807</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-807.php">Chicago Wolves (2) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">808</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-808.php">Grand Rapids Griffins (2) vs Rockford IceHogs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 109</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-814.php">St. Louis Blues (3) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-815.php">Arizona Coyotes (4) vs Chicago Blackhawks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-816.php">Philadelphia Flyers (3) vs Tampa Bay Lightning (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-817.php">New Jersey Devils (7) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-818.php">Calgary Flames (2) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-819.php">San Jose Sharks (4) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-820.php">Buffalo Sabres (2) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-821.php">Detroit Red Wings (5) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-822.php">Ottawa Senators (3) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-823.php">Edmonton Oilers (5) vs Vancouver Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-824.php">Colorado Avalanche (2) vs Quebec Nordiques (4)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-825.php">Florida Panthers (1) vs Montreal Canadiens (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">809</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-809.php">Las Vegas Gamblers (2) vs Laval Chiefs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">810</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-810.php">Oklahoma City Barons (1) vs Binghamton Senators (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">811</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-811.php">Rochester Americans (4) vs Providence Bruins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">812</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-812.php">San Antonio Rampage (5) vs Lake Erie Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">813</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-813.php">Cleveland Knights (3) vs St-Cyrille Condors (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">814</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-814.php">Wilkes-Barre/Scranton Penguins (4) vs Milwaukee Admirals (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 110</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-826.php">Carolina Hurricanes (2) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-827.php">Boston Bruins (1) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-828.php">St. Louis Blues (2) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-829.php">Anaheim Ducks (0) vs Arizona Coyotes (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">815</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-815.php">Portland Pirates (2) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">816</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-816.php">Gatineau Olympiques (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">817</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-817.php">Peoria Rivermen (3) vs Las Vegas Gamblers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">818</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-818.php">Rockford IceHogs (2) vs Charlotte Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">819</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-819.php">Bridgeport Sound Tigers (2) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">820</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-820.php">Houston Aeros (5) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">821</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-821.php">Albany Devils (6) vs Chicoutimi Saguenéens (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 111</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-830.php">Seattle Saints (4) vs Buffalo Sabres (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-831.php">New Jersey Devils (3) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-832.php">Montreal Canadiens (3) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-833.php">Minnesota Wild (1) vs Winnipeg Jets (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">822</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-822.php">Landshut Cannibals (4) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">823</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-823.php">Adirondack Phantoms (4) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">824</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-824.php">Milwaukee Admirals (2) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">825</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-825.php">Springfield Falcons (2) vs Cleveland Knights (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">826</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-826.php">Laval Chiefs (3) vs Portland Pirates (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 112</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-834.php">Columbus Blue Jackets (2) vs Philadelphia Flyers (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-835.php">Nashville Predators (3) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-836.php">Carolina Hurricanes (4) vs Pittsburgh Penguins (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-837.php">Chicago Blackhawks (1) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-838.php">Vancouver Canucks (5) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-839.php">Quebec Nordiques (3) vs Boston Bruins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">827</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-827.php">Connecticut Whale (3) vs Albany Devils (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">828</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-828.php">Norfolk Admirals (2) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">829</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-829.php">St-Cyrille Condors (4) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">830</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-830.php">Rouyn-Noranda Huskies (4) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">831</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-831.php">Lake Erie Monsters (1) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">832</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-832.php">Rockford IceHogs (2) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">833</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-833.php">Trois-Rivières Draveurs (2) vs Adirondack Phantoms (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">834</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-834.php">Charlotte Checkers (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">835</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-835.php">Chicoutimi Saguenéens (3) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">836</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-836.php">Gatineau Olympiques (1) vs Providence Bruins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 113</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-840.php">Colorado Avalanche (5) vs Detroit Red Wings (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-841.php">San Jose Sharks (4) vs Los Angeles Kings (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-842.php">Tampa Bay Lightning (6) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-843.php">Minnesota Wild (3) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-844.php">Ottawa Senators (5) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-845.php">Montreal Canadiens (8) vs Toronto Maple Leafs (2)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-846.php">New York Islanders (1) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-847.php">Seattle Saints (1) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-848.php">Arizona Coyotes (5) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-849.php">Winnipeg Jets (3) vs Carolina Hurricanes (4)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">837</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-837.php">Laval Chiefs (0) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">838</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-838.php">Roberval Dwarfs (4) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">839</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-839.php">Las Vegas Gamblers (3) vs Houston Aeros (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">840</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-840.php">Milwaukee Admirals (2) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">841</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-841.php">Grand Rapids Griffins (1) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">842</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-842.php">Bridgeport Sound Tigers (3) vs Rochester Americans (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">843</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-843.php">Gatineau Olympiques (0) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">844</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-844.php">Chicoutimi Saguenéens (3) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">845</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-845.php">Cleveland Knights (1) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">846</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-846.php">Charlotte Checkers (7) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">847</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-847.php">Peoria Rivermen (4) vs San Antonio Rampage (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 114</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-850.php">Washington Capitals (1) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-851.php">Pittsburgh Penguins (5) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-852.php">Edmonton Oilers (5) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-853.php">Philadelphia Flyers (3) vs Tampa Bay Lightning (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">848</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-848.php">Portland Pirates (3) vs Laval Chiefs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">849</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-849.php">Oklahoma City Barons (5) vs Las Vegas Gamblers (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">850</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-850.php">Binghamton Senators (2) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">851</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-851.php">Wilkes-Barre/Scranton Penguins (7) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">852</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-852.php">Chicago Wolves (3) vs Milwaukee Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">853</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-853.php">Manitoba Moose (3) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-854.php">Adirondack Phantoms (3) vs Albany Devils (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-855.php">Providence Bruins (4) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-856.php">Cleveland Knights (1) vs Landshut Cannibals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 115</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">854</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-854.php">Florida Panthers (0) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">855</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-855.php">Boston Bruins (7) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">856</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-856.php">Colorado Avalanche (3) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-857.php">Seattle Saints (4) vs Vancouver Canucks (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-858.php">Dallas Stars (3) vs Quebec Nordiques (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-859.php">Los Angeles Kings (2) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-860.php">Montreal Canadiens (2) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-861.php">New York Rangers (5) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-862.php">Toronto Maple Leafs (2) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-863.php">Anaheim Ducks (3) vs Detroit Red Wings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-864.php">New Jersey Devils (2) vs Pittsburgh Penguins (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-865.php">Nashville Predators (2) vs Philadelphia Flyers (1)</a>  - SO</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">857</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-857.php">Lake Erie Monsters (3) vs Portland Pirates (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">858</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-858.php">Wilkes-Barre/Scranton Penguins (2) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">859</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-859.php">Binghamton Senators (4) vs Chicoutimi Saguenéens (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">860</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-860.php">San Antonio Rampage (4) vs Manitoba Moose (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">861</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-861.php">Houston Aeros (3) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">862</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-862.php">St-Cyrille Condors (6) vs Cleveland Knights (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 116</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-866.php">Edmonton Oilers (1) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-867.php">Buffalo Sabres (4) vs Colorado Avalanche (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-868.php">Anaheim Ducks (2) vs Montreal Canadiens (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-869.php">Calgary Flames (0) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-870.php">Chicago Blackhawks (6) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-871.php">Quebec Nordiques (3) vs Carolina Hurricanes (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-872.php">Columbus Blue Jackets (2) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-873.php">Winnipeg Jets (2) vs Los Angeles Kings (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-874.php">Toronto Maple Leafs (3) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-875.php">Minnesota Wild (3) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-876.php">Tampa Bay Lightning (2) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-877.php">Detroit Red Wings (4) vs Dallas Stars (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">863</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-863.php">Roberval Dwarfs (3) vs Bridgeport Sound Tigers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">864</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-864.php">Grand Rapids Griffins (3) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">865</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-865.php">Rochester Americans (3) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">866</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-866.php">Chicago Wolves (4) vs Adirondack Phantoms (8)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">867</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-867.php">Laval Chiefs (2) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">868</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-868.php">Rouyn-Noranda Huskies (5) vs Springfield Falcons (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">869</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-869.php">Las Vegas Gamblers (0) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">870</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-870.php">Milwaukee Admirals (3) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">871</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-871.php">Albany Devils (5) vs Houston Aeros (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">872</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-872.php">Manitoba Moose (5) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 117</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-878.php">Columbus Blue Jackets (2) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-879.php">Arizona Coyotes (5) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-880.php">San Jose Sharks (3) vs Chicago Blackhawks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-881.php">Carolina Hurricanes (2) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-882.php">Buffalo Sabres (3) vs Vancouver Canucks (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">873</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-873.php">Chicoutimi Saguenéens (5) vs Binghamton Senators (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">874</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-874.php">Rockford IceHogs (2) vs Trois-Rivières Draveurs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">875</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-875.php">Gatineau Olympiques (3) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">876</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-876.php">Landshut Cannibals (4) vs Lake Erie Monsters (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">877</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-877.php">Portland Pirates (3) vs Rouyn-Noranda Huskies (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 118</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-883.php">Philadelphia Flyers (2) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-884.php">Montreal Canadiens (1) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-885.php">Winnipeg Jets (3) vs Toronto Maple Leafs (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">878</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-878.php">San Antonio Rampage (3) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">879</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-879.php">Cleveland Knights (1) vs Laval Chiefs (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 119</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-886.php">Seattle Saints (3) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-887.php">Calgary Flames (2) vs Washington Capitals (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-888.php">St. Louis Blues (6) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-889.php">New York Rangers (3) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-890.php">New Jersey Devils (3) vs Buffalo Sabres (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-891.php">New York Islanders (3) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-892.php">Detroit Red Wings (3) vs Colorado Avalanche (2)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-893.php">Florida Panthers (0) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-894.php">Boston Bruins (2) vs Pittsburgh Penguins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-895.php">Vancouver Canucks (4) vs Los Angeles Kings (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-896.php">Carolina Hurricanes (1) vs Philadelphia Flyers (8)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">880</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-880.php">Milwaukee Admirals (5) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">881</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-881.php">Grand Rapids Griffins (3) vs Las Vegas Gamblers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">882</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-882.php">Manitoba Moose (5) vs Gatineau Olympiques (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">883</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-883.php">Chicoutimi Saguenéens (2) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">884</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-884.php">Bridgeport Sound Tigers (4) vs Albany Devils (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">885</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-885.php">Providence Bruins (4) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">886</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-886.php">Binghamton Senators (2) vs Landshut Cannibals (9)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">887</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-887.php">Trois-Rivières Draveurs (2) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">888</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-888.php">St-Cyrille Condors (0) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">889</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-889.php">Wilkes-Barre/Scranton Penguins (0) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">890</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-890.php">Springfield Falcons (6) vs Peoria Rivermen (5)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 120</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-897.php">Chicago Blackhawks (5) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-898.php">Dallas Stars (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-899.php">Edmonton Oilers (2) vs Montreal Canadiens (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-900.php">Toronto Maple Leafs (0) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-901.php">Nashville Predators (5) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-902.php">New Jersey Devils (3) vs Ottawa Senators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-903.php">Quebec Nordiques (6) vs Detroit Red Wings (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">891</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-891.php">Cleveland Knights (4) vs Grand Rapids Griffins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">892</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-892.php">Chicago Wolves (5) vs Milwaukee Admirals (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">893</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-893.php">Adirondack Phantoms (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">894</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-894.php">Norfolk Admirals (6) vs Bridgeport Sound Tigers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">895</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-895.php">Landshut Cannibals (4) vs Manitoba Moose (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 121</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-904.php">Colorado Avalanche (0) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-905.php">Arizona Coyotes (4) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-906.php">Pittsburgh Penguins (5) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-907.php">Washington Capitals (2) vs New York Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-908.php">San Jose Sharks (1) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-909.php">Ottawa Senators (6) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-910.php">Vancouver Canucks (4) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-911.php">Edmonton Oilers (3) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-912.php">Los Angeles Kings (4) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-913.php">Philadelphia Flyers (3) vs Carolina Hurricanes (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">896</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-896.php">Wilkes-Barre/Scranton Penguins (2) vs Cleveland Knights (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">897</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-897.php">Providence Bruins (2) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">898</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-898.php">Charlotte Checkers (5) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">899</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-899.php">Portland Pirates (3) vs Adirondack Phantoms (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">900</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-900.php">Laval Chiefs (5) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">901</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-901.php">Rouyn-Noranda Huskies (3) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">902</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-902.php">Gatineau Olympiques (3) vs Rockford IceHogs (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">903</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-903.php">Rochester Americans (4) vs Binghamton Senators (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">904</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-904.php">Trois-Rivières Draveurs (4) vs Las Vegas Gamblers (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">905</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-905.php">St-Cyrille Condors (3) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">906</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-906.php">Peoria Rivermen (3) vs Chicago Wolves (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 122</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-914.php">Montreal Canadiens (3) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-915.php">New York Islanders (4) vs Buffalo Sabres (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-916.php">Minnesota Wild (2) vs Columbus Blue Jackets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-917.php">Florida Panthers (3) vs New Jersey Devils (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">907</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-907.php">San Antonio Rampage (2) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">908</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-908.php">Albany Devils (3) vs Wilkes-Barre/Scranton Penguins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">909</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-909.php">Roberval Dwarfs (2) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">910</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-910.php">Charlotte Checkers (4) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">911</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-911.php">Binghamton Senators (4) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">912</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-912.php">Peoria Rivermen (6) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">913</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-913.php">St-Cyrille Condors (3) vs Grand Rapids Griffins (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 123</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-918.php">Anaheim Ducks (4) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-919.php">San Jose Sharks (1) vs Edmonton Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-920.php">Detroit Red Wings (4) vs Washington Capitals (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-921.php">Arizona Coyotes (2) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-922.php">Pittsburgh Penguins (8) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-923.php">Colorado Avalanche (5) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-924.php">St. Louis Blues (1) vs Seattle Saints (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-925.php">Boston Bruins (1) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-926.php">New York Rangers (5) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-927.php">Tampa Bay Lightning (6) vs Philadelphia Flyers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">914</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-914.php">Houston Aeros (2) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">915</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-915.php">Las Vegas Gamblers (4) vs Gatineau Olympiques (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">916</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-916.php">Rockford IceHogs (0) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">917</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-917.php">Springfield Falcons (4) vs Portland Pirates (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">918</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-918.php">Chicoutimi Saguenéens (2) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">919</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-919.php">Bridgeport Sound Tigers (2) vs Albany Devils (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">920</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-920.php">Cleveland Knights (4) vs Roberval Dwarfs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">921</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-921.php">Norfolk Admirals (1) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">922</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-922.php">Connecticut Whale (1) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">923</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-923.php">Lake Erie Monsters (1) vs St-Cyrille Condors (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">924</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-924.php">Adirondack Phantoms (5) vs Manitoba Moose (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 124</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-928.php">Nashville Predators (0) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-929.php">Columbus Blue Jackets (3) vs San Jose Sharks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-930.php">Dallas Stars (4) vs Montreal Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-931.php">New Jersey Devils (4) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-932.php">Buffalo Sabres (0) vs Pittsburgh Penguins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-933.php">New York Islanders (1) vs Florida Panthers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">925</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-925.php">Wilkes-Barre/Scranton Penguins (3) vs Chicoutimi Saguenéens (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">926</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-926.php">Grand Rapids Griffins (2) vs Peoria Rivermen (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">927</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-927.php">Milwaukee Admirals (1) vs Bridgeport Sound Tigers (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 125</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-934.php">Los Angeles Kings (2) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-935.php">Quebec Nordiques (5) vs Carolina Hurricanes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">928</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-928.php">San Antonio Rampage (3) vs Cleveland Knights (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">929</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-929.php">Binghamton Senators (4) vs Connecticut Whale (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">930</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-930.php">Albany Devils (3) vs Adirondack Phantoms (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">931</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-931.php">Manitoba Moose (4) vs Norfolk Admirals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">932</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-932.php">Oklahoma City Barons (2) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">933</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-933.php">Chicago Wolves (4) vs Houston Aeros (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">934</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-934.php">Portland Pirates (6) vs Rockford IceHogs (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 126</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-936.php">Seattle Saints (3) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-937.php">Dallas Stars (4) vs Anaheim Ducks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-938.php">Nashville Predators (2) vs St. Louis Blues (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-939.php">Buffalo Sabres (2) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-940.php">Calgary Flames (4) vs Boston Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-941.php">New York Rangers (6) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-942.php">Minnesota Wild (3) vs Toronto Maple Leafs (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-943.php">Winnipeg Jets (1) vs Edmonton Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-944.php">Washington Capitals (1) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-945.php">Los Angeles Kings (3) vs Vancouver Canucks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">935</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-935.php">St-Cyrille Condors (0) vs Rouyn-Noranda Huskies (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">936</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-936.php">Chicoutimi Saguenéens (4) vs Rochester Americans (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">937</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-937.php">Gatineau Olympiques (2) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">938</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-938.php">Oklahoma City Barons (3) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">939</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-939.php">Trois-Rivières Draveurs (3) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">940</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-940.php">Connecticut Whale (7) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">941</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-941.php">Charlotte Checkers (1) vs Wilkes-Barre/Scranton Penguins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">942</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-942.php">Adirondack Phantoms (2) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">943</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-943.php">Peoria Rivermen (1) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">944</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-944.php">Grand Rapids Griffins (1) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">945</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-945.php">Houston Aeros (1) vs Milwaukee Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-946.php">Norfolk Admirals (4) vs Landshut Cannibals (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 127</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">946</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-946.php">Pittsburgh Penguins (6) vs New Jersey Devils (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-947.php">Carolina Hurricanes (5) vs New York Islanders (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-948.php">Montreal Canadiens (3) vs New York Rangers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-949.php">St. Louis Blues (6) vs Nashville Predators (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-950.php">Colorado Avalanche (1) vs Minnesota Wild (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-951.php">Columbus Blue Jackets (3) vs Dallas Stars (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">947</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-947.php">Rockford IceHogs (0) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">948</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-948.php">Grand Rapids Griffins (4) vs Trois-Rivières Draveurs (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">949</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-949.php">Manitoba Moose (3) vs Albany Devils (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">950</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-950.php">Portland Pirates (1) vs San Antonio Rampage (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">951</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-951.php">Cleveland Knights (3) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-952.php">Springfield Falcons (5) vs St-Cyrille Condors (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-953.php">Las Vegas Gamblers (3) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-954.php">Laval Chiefs (3) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-955.php">Roberval Dwarfs (9) vs Chicoutimi Saguenéens (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-956.php">Rouyn-Noranda Huskies (4) vs Peoria Rivermen (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-957.php">Wilkes-Barre/Scranton Penguins (5) vs Connecticut Whale (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 128</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">952</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-952.php">Seattle Saints (4) vs Quebec Nordiques (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">953</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-953.php">Arizona Coyotes (5) vs Calgary Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">954</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-954.php">Ottawa Senators (6) vs Washington Capitals (7)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">955</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-955.php">Florida Panthers (4) vs Buffalo Sabres (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">956</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-956.php">Detroit Red Wings (5) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">957</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-957.php">Vancouver Canucks (4) vs Colorado Avalanche (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-958.php">Toronto Maple Leafs (2) vs Montreal Canadiens (7)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-959.php">Anaheim Ducks (4) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-960.php">Boston Bruins (4) vs Philadelphia Flyers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-961.php">Carolina Hurricanes (4) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-962.php">Edmonton Oilers (3) vs Pittsburgh Penguins (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">958</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-958.php">Lake Erie Monsters (2) vs Portland Pirates (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">959</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-959.php">Rochester Americans (3) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">960</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-960.php">Providence Bruins (1) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">961</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-961.php">Milwaukee Admirals (3) vs Cleveland Knights (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">962</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-962.php">Landshut Cannibals (4) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-963.php">Albany Devils (4) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-964.php">Chicago Wolves (3) vs Houston Aeros (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-965.php">Binghamton Senators (5) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-966.php">Bridgeport Sound Tigers (3) vs Rockford IceHogs (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 129</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">963</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-963.php">Edmonton Oilers (5) vs Seattle Saints (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">964</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-964.php">New York Islanders (5) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">965</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-965.php">Los Angeles Kings (3) vs Florida Panthers (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">966</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-966.php">Nashville Predators (3) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-967.php">Minnesota Wild (5) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-968.php">Columbus Blue Jackets (6) vs Ottawa Senators (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">967</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-967.php">St-Cyrille Condors (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">968</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-968.php">Las Vegas Gamblers (2) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-969.php">Chicoutimi Saguenéens (5) vs Providence Bruins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-970.php">Gatineau Olympiques (2) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-971.php">Charlotte Checkers (1) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-972.php">Norfolk Admirals (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-973.php">Binghamton Senators (4) vs Trois-Rivières Draveurs (8)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-974.php">San Antonio Rampage (5) vs Chicago Wolves (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-975.php">Springfield Falcons (2) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-976.php">Rockford IceHogs (3) vs Roberval Dwarfs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-977.php">Connecticut Whale (2) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-978.php">Portland Pirates (6) vs Oklahoma City Barons (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 130</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">969</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-969.php">Chicago Blackhawks (2) vs Boston Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">970</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-970.php">Detroit Red Wings (3) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">971</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-971.php">New York Rangers (1) vs Dallas Stars (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">972</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-972.php">Washington Capitals (2) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">973</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-973.php">Philadelphia Flyers (4) vs Toronto Maple Leafs (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-979.php">Houston Aeros (4) vs Las Vegas Gamblers (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-980.php">Landshut Cannibals (4) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-981.php">Manitoba Moose (4) vs Binghamton Senators (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-982.php">Peoria Rivermen (5) vs Albany Devils (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-983.php">Roberval Dwarfs (4) vs San Antonio Rampage (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-984.php">Rochester Americans (2) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-985.php">Adirondack Phantoms (0) vs Charlotte Checkers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-986.php">Milwaukee Admirals (3) vs St-Cyrille Condors (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-987.php">Trois-Rivières Draveurs (3) vs Bridgeport Sound Tigers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-988.php">Rouyn-Noranda Huskies (1) vs Cleveland Knights (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-989.php">Wilkes-Barre/Scranton Penguins (5) vs Chicoutimi Saguenéens (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 131</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">974</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-974.php">Pittsburgh Penguins (4) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">975</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-975.php">Vancouver Canucks (1) vs Los Angeles Kings (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-990.php">Springfield Falcons (4) vs Portland Pirates (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-991.php">Bridgeport Sound Tigers (2) vs Manitoba Moose (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-992.php">Providence Bruins (5) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-993.php">Norfolk Admirals (2) vs Connecticut Whale (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-994.php">Laval Chiefs (4) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-995.php">Oklahoma City Barons (3) vs Lake Erie Monsters (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-996.php">Rockford IceHogs (8) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-997.php">Las Vegas Gamblers (3) vs Chicago Wolves (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 132</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">976</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-976.php">Edmonton Oilers (3) vs Detroit Red Wings (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">977</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-977.php">Boston Bruins (3) vs Calgary Flames (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">978</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-978.php">New York Rangers (1) vs New York Islanders (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">979</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-979.php">Quebec Nordiques (5) vs Buffalo Sabres (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">980</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-980.php">Chicago Blackhawks (2) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">981</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-981.php">Ottawa Senators (2) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">982</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-982.php">Arizona Coyotes (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">983</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-983.php">Washington Capitals (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">984</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-984.php">Colorado Avalanche (4) vs San Jose Sharks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">985</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-985.php">Dallas Stars (2) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">986</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-986.php">Florida Panthers (1) vs Montreal Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">987</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-987.php">Philadelphia Flyers (5) vs Winnipeg Jets (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-998.php">Chicoutimi Saguenéens (2) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-999.php">Rouyn-Noranda Huskies (3) vs Laval Chiefs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1000.php">Lake Erie Monsters (4) vs Rochester Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1001.php">San Antonio Rampage (4) vs Providence Bruins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1002.php">Wilkes-Barre/Scranton Penguins (3) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1003.php">Connecticut Whale (3) vs Trois-Rivières Draveurs (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1004.php">Landshut Cannibals (2) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1005.php">St-Cyrille Condors (2) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1006.php">Charlotte Checkers (5) vs Binghamton Senators (6)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 133</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">988</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-988.php">Los Angeles Kings (8) vs Edmonton Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">989</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-989.php">Pittsburgh Penguins (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">990</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-990.php">Toronto Maple Leafs (3) vs Quebec Nordiques (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">991</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-991.php">Dallas Stars (5) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">992</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-992.php">Tampa Bay Lightning (3) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">993</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-993.php">St. Louis Blues (3) vs Arizona Coyotes (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1007.php">Cleveland Knights (5) vs Rouyn-Noranda Huskies (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1008.php">San Antonio Rampage (3) vs Las Vegas Gamblers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1009.php">Oklahoma City Barons (3) vs Milwaukee Admirals (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1010.php">Wilkes-Barre/Scranton Penguins (4) vs Albany Devils (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1011.php">Rochester Americans (0) vs Roberval Dwarfs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1012.php">Charlotte Checkers (3) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1013.php">St-Cyrille Condors (1) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1014.php">Chicago Wolves (2) vs Portland Pirates (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1015.php">Laval Chiefs (3) vs Bridgeport Sound Tigers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1016.php">Chicoutimi Saguenéens (3) vs Manitoba Moose (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1017.php">Lake Erie Monsters (2) vs Peoria Rivermen (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1018.php">Connecticut Whale (3) vs Adirondack Phantoms (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 134</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">994</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-994.php">Buffalo Sabres (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">995</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-995.php">Winnipeg Jets (4) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">996</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-996.php">Carolina Hurricanes (2) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">997</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-997.php">Chicago Blackhawks (6) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">998</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-998.php">Boston Bruins (4) vs Ottawa Senators (5)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1019.php">Rockford IceHogs (1) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1020.php">Houston Aeros (3) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1021.php">Norfolk Admirals (3) vs San Antonio Rampage (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1022.php">Trois-Rivières Draveurs (1) vs St-Cyrille Condors (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1023.php">Gatineau Olympiques (3) vs Cleveland Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1024.php">Providence Bruins (1) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1025.php">Binghamton Senators (3) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1026.php">Manitoba Moose (1) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1027.php">Chicago Wolves (2) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1028.php">Adirondack Phantoms (3) vs Rouyn-Noranda Huskies (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1029.php">Laval Chiefs (5) vs Lake Erie Monsters (6)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 135</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">999</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-999.php">Montreal Canadiens (4) vs Tampa Bay Lightning (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1000</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1000.php">Columbus Blue Jackets (3) vs St. Louis Blues (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1001</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1001.php">Detroit Red Wings (1) vs Pittsburgh Penguins (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1030.php">Peoria Rivermen (2) vs Norfolk Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1031.php">Springfield Falcons (2) vs Houston Aeros (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1032.php">Albany Devils (1) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1033.php">Trois-Rivières Draveurs (4) vs Rochester Americans (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1034.php">Gatineau Olympiques (3) vs Las Vegas Gamblers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1035.php">Grand Rapids Griffins (2) vs Milwaukee Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1036.php">Bridgeport Sound Tigers (2) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1037.php">Adirondack Phantoms (3) vs Binghamton Senators (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1038.php">Portland Pirates (2) vs Rockford IceHogs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1039.php">Manitoba Moose (3) vs Laval Chiefs (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 136</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1002</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1002.php">Seattle Saints (1) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1003</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1003.php">New Jersey Devils (4) vs Boston Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1004</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1004.php">Minnesota Wild (2) vs New York Islanders (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1005</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1005.php">Quebec Nordiques (2) vs Los Angeles Kings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1006</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1006.php">Vancouver Canucks (2) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1007</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1007.php">Buffalo Sabres (3) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1008</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1008.php">San Jose Sharks (5) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1009</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1009.php">Washington Capitals (4) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1010</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1010.php">Anaheim Ducks (3) vs Detroit Red Wings (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1011</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1011.php">Edmonton Oilers (1) vs Dallas Stars (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1040.php">St-Cyrille Condors (1) vs Chicago Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1041.php">Charlotte Checkers (2) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1042.php">Rouyn-Noranda Huskies (3) vs Wilkes-Barre/Scranton Penguins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1043.php">Lake Erie Monsters (4) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1044.php">Las Vegas Gamblers (4) vs Gatineau Olympiques (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1045.php">Chicoutimi Saguenéens (2) vs Trois-Rivières Draveurs (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1046.php">Peoria Rivermen (3) vs Grand Rapids Griffins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1047.php">Milwaukee Admirals (3) vs Albany Devils (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1048.php">Roberval Dwarfs (3) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1049.php">Rockford IceHogs (3) vs Cleveland Knights (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1050.php">Rochester Americans (6) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1051.php">Springfield Falcons (0) vs Bridgeport Sound Tigers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 137</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1012</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1012.php">Ottawa Senators (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1013</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1013.php">Winnipeg Jets (2) vs Minnesota Wild (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1014</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1014.php">Tampa Bay Lightning (8) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1015</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1015.php">Chicago Blackhawks (5) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1016</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1016.php">Calgary Flames (4) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1017</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1017.php">St. Louis Blues (4) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1018</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1018.php">Florida Panthers (2) vs Buffalo Sabres (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1052.php">Binghamton Senators (2) vs Charlotte Checkers (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1053.php">Chicago Wolves (1) vs St-Cyrille Condors (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1054.php">Houston Aeros (5) vs Chicoutimi Saguenéens (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1055.php">Adirondack Phantoms (6) vs Manitoba Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1056.php">Lake Erie Monsters (1) vs Peoria Rivermen (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1057.php">Wilkes-Barre/Scranton Penguins (2) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1058.php">Landshut Cannibals (2) vs Norfolk Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1059.php">Cleveland Knights (3) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1060.php">Las Vegas Gamblers (3) vs Laval Chiefs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1061.php">Springfield Falcons (7) vs Rouyn-Noranda Huskies (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 138</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1019</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1019.php">Seattle Saints (3) vs Quebec Nordiques (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1020</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1020.php">Dallas Stars (5) vs Colorado Avalanche (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1021</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1021.php">Pittsburgh Penguins (3) vs Washington Capitals (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1022</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1022.php">Columbus Blue Jackets (3) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1023</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1023.php">Toronto Maple Leafs (0) vs Montreal Canadiens (4)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1024</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1024.php">Carolina Hurricanes (2) vs Philadelphia Flyers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1062.php">Norfolk Admirals (4) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1063.php">San Antonio Rampage (3) vs Adirondack Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1064.php">Providence Bruins (3) vs Rochester Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1065.php">Roberval Dwarfs (2) vs Oklahoma City Barons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1066.php">Chicoutimi Saguenéens (0) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1067.php">Connecticut Whale (4) vs Trois-Rivières Draveurs (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1068.php">Gatineau Olympiques (4) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1069.php">Wilkes-Barre/Scranton Penguins (0) vs Binghamton Senators (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1070.php">Portland Pirates (4) vs Grand Rapids Griffins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1071.php">Cleveland Knights (3) vs Milwaukee Admirals (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1072.php">Chicago Wolves (2) vs Lake Erie Monsters (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 139</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1025</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1025.php">St. Louis Blues (3) vs Seattle Saints (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1026</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1026.php">Detroit Red Wings (3) vs Winnipeg Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1027</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1027.php">New York Islanders (2) vs Florida Panthers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1028</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1028.php">Nashville Predators (5) vs Anaheim Ducks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1029</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1029.php">Ottawa Senators (2) vs Boston Bruins (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1073.php">St-Cyrille Condors (1) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1074.php">Oklahoma City Barons (4) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1075.php">San Antonio Rampage (0) vs Landshut Cannibals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 140</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1030</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1030.php">Los Angeles Kings (2) vs New Jersey Devils (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1031</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1031.php">Tampa Bay Lightning (2) vs Pittsburgh Penguins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1032</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1032.php">New York Rangers (1) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1033</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1033.php">Minnesota Wild (4) vs Chicago Blackhawks (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1034</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1034.php">San Jose Sharks (0) vs Carolina Hurricanes (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1035</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1035.php">Vancouver Canucks (4) vs Calgary Flames (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1036</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1036.php">Colorado Avalanche (1) vs St. Louis Blues (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1037</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1037.php">Nashville Predators (4) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1038</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1038.php">Montreal Canadiens (2) vs Ottawa Senators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1039</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1039.php">Dallas Stars (1) vs Detroit Red Wings (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1040</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1040.php">Quebec Nordiques (3) vs Buffalo Sabres (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1076.php">Rouyn-Noranda Huskies (5) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1077.php">Laval Chiefs (3) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1078.php">Grand Rapids Griffins (4) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1079.php">Trois-Rivières Draveurs (3) vs Bridgeport Sound Tigers (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1080.php">Milwaukee Admirals (5) vs Charlotte Checkers (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1081.php">Cleveland Knights (1) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1082.php">Providence Bruins (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1083.php">Albany Devils (4) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1084.php">Rochester Americans (3) vs Peoria Rivermen (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1085.php">Oklahoma City Barons (5) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1086.php">Binghamton Senators (0) vs St-Cyrille Condors (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 141</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1041</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1041.php">Buffalo Sabres (5) vs Tampa Bay Lightning (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1042</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1042.php">Arizona Coyotes (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1043</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1043.php">Calgary Flames (6) vs Edmonton Oilers (3)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1044</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1044.php">Winnipeg Jets (4) vs New York Rangers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1045</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1045.php">Seattle Saints (2) vs Minnesota Wild (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1046</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1046.php">Anaheim Ducks (2) vs Nashville Predators (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1047</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1047.php">Quebec Nordiques (2) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1048</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1048.php">Florida Panthers (2) vs Washington Capitals (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1049</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1049.php">Boston Bruins (4) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1050</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1050.php">Ottawa Senators (1) vs San Jose Sharks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1087.php">Norfolk Admirals (4) vs Chicoutimi Saguenéens (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1088.php">Bridgeport Sound Tigers (3) vs Connecticut Whale (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 142</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1051</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1051.php">Colorado Avalanche (3) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1052</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1052.php">Pittsburgh Penguins (9) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1053</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1053.php">New York Islanders (2) vs Quebec Nordiques (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1054</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1054.php">Philadelphia Flyers (3) vs Montreal Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1055</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1055.php">St. Louis Blues (1) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1056</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1056.php">Detroit Red Wings (7) vs Winnipeg Jets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1089.php">Manitoba Moose (1) vs Cleveland Knights (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1090.php">Lake Erie Monsters (5) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1091.php">Milwaukee Admirals (5) vs Houston Aeros (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1092.php">Landshut Cannibals (4) vs Norfolk Admirals (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1093.php">Connecticut Whale (6) vs Rockford IceHogs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1094.php">Peoria Rivermen (3) vs Laval Chiefs (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1095.php">Providence Bruins (2) vs Rouyn-Noranda Huskies (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 143</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1057</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1057.php">Tampa Bay Lightning (5) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1058</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1058.php">New Jersey Devils (2) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1059</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1059.php">Washington Capitals (1) vs Florida Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1060</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1060.php">Los Angeles Kings (3) vs Anaheim Ducks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1061</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1061.php">Carolina Hurricanes (3) vs Toronto Maple Leafs (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1062</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1062.php">Pittsburgh Penguins (6) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1063</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1063.php">Columbus Blue Jackets (5) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1064</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1064.php">Vancouver Canucks (4) vs Calgary Flames (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1065</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1065.php">Minnesota Wild (5) vs Edmonton Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1066</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1066.php">New York Islanders (2) vs New York Rangers (1)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1096.php">Charlotte Checkers (3) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1097.php">Trois-Rivières Draveurs (1) vs Springfield Falcons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1098.php">Gatineau Olympiques (3) vs Las Vegas Gamblers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1099.php">San Antonio Rampage (3) vs Binghamton Senators (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 144</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1067</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1067.php">St. Louis Blues (2) vs New Jersey Devils (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1068</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1068.php">Nashville Predators (4) vs Ottawa Senators (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1069</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1069.php">Minnesota Wild (4) vs Detroit Red Wings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1070</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1070.php">Arizona Coyotes (3) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1071</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1071.php">Buffalo Sabres (3) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1072</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1072.php">Anaheim Ducks (3) vs Los Angeles Kings (5)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1073</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1073.php">Washington Capitals (4) vs San Jose Sharks (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1074</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1074.php">Columbus Blue Jackets (2) vs Dallas Stars (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1075</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1075.php">Edmonton Oilers (3) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1076</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1076.php">Winnipeg Jets (1) vs Vancouver Canucks (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1100.php">Wilkes-Barre/Scranton Penguins (7) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1101.php">Las Vegas Gamblers (4) vs Roberval Dwarfs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1102.php">St-Cyrille Condors (4) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1103.php">Houston Aeros (2) vs Lake Erie Monsters (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1104.php">Portland Pirates (4) vs Chicago Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1105.php">Manitoba Moose (3) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1106.php">Adirondack Phantoms (5) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1107.php">Trois-Rivières Draveurs (2) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1108.php">Chicoutimi Saguenéens (2) vs Milwaukee Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1109.php">Laval Chiefs (5) vs Gatineau Olympiques (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1110.php">Connecticut Whale (3) vs Bridgeport Sound Tigers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 145</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1077</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1077.php">Montreal Canadiens (2) vs Pittsburgh Penguins (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1078</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1078.php">Florida Panthers (2) vs New York Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1079</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1079.php">Seattle Saints (2) vs Nashville Predators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1080</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1080.php">San Jose Sharks (3) vs St. Louis Blues (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1081</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1081.php">Toronto Maple Leafs (2) vs Buffalo Sabres (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1082</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1082.php">Ottawa Senators (1) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1083</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1083.php">New York Rangers (3) vs Philadelphia Flyers (2)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1084</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1084.php">Dallas Stars (3) vs Boston Bruins (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1085</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1085.php">Detroit Red Wings (2) vs Chicago Blackhawks (4)</a>  (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1111.php">Rochester Americans (3) vs Charlotte Checkers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1112.php">Rouyn-Noranda Huskies (2) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1113.php">Binghamton Senators (4) vs Wilkes-Barre/Scranton Penguins (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1114.php">Norfolk Admirals (2) vs Trois-Rivières Draveurs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1115.php">Springfield Falcons (4) vs Peoria Rivermen (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1116.php">Landshut Cannibals (3) vs San Antonio Rampage (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4"><b>----------- Trade Deadline --- Trades can’t be done after this day is simulated!</b></td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 146</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1086</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1086.php">Anaheim Ducks (5) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1087</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1087.php">Chicago Blackhawks (5) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1088</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1088.php">New York Rangers (4) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1089</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1089.php">Arizona Coyotes (3) vs Seattle Saints (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1117.php">Chicago Wolves (5) vs Cleveland Knights (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1118.php">Grand Rapids Griffins (2) vs St-Cyrille Condors (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1119.php">Rochester Americans (4) vs Chicoutimi Saguenéens (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 147</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1090</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1090.php">Philadelphia Flyers (4) vs Montreal Canadiens (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1091</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1091.php">Calgary Flames (5) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1092</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1092.php">Dallas Stars (6) vs Winnipeg Jets (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1093</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1093.php">Colorado Avalanche (5) vs New Jersey Devils (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1094</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1094.php">Pittsburgh Penguins (6) vs Florida Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1095</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1095.php">New York Islanders (2) vs Tampa Bay Lightning (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1096</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1096.php">Detroit Red Wings (3) vs Los Angeles Kings (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1097</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1097.php">Boston Bruins (2) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1098</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1098.php">Vancouver Canucks (3) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1099</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1099.php">St. Louis Blues (1) vs Anaheim Ducks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1100</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1100.php">Edmonton Oilers (4) vs Nashville Predators (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1120.php">Milwaukee Admirals (3) vs Manitoba Moose (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1121.php">Portland Pirates (4) vs Houston Aeros (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1122.php">Albany Devils (0) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1123.php">Lake Erie Monsters (3) vs Adirondack Phantoms (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1124.php">Binghamton Senators (4) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1125.php">Bridgeport Sound Tigers (0) vs Norfolk Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1126.php">Providence Bruins (4) vs Roberval Dwarfs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1127.php">Cleveland Knights (3) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1128.php">Laval Chiefs (3) vs Rouyn-Noranda Huskies (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 148</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1101</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1101.php">Tampa Bay Lightning (4) vs Ottawa Senators (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1102</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1102.php">Los Angeles Kings (4) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1103</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1103.php">Dallas Stars (2) vs Pittsburgh Penguins (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1129.php">Lake Erie Monsters (6) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1130.php">Binghamton Senators (3) vs Rochester Americans (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1131.php">Landshut Cannibals (2) vs Oklahoma City Barons (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1132.php">Rouyn-Noranda Huskies (6) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1133.php">Rockford IceHogs (4) vs Gatineau Olympiques (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1134.php">Laval Chiefs (4) vs Chicago Wolves (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1135.php">Connecticut Whale (1) vs Providence Bruins (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 149</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1104</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1104.php">Winnipeg Jets (1) vs New York Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1105</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1105.php">Minnesota Wild (2) vs St. Louis Blues (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1106</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1106.php">New Jersey Devils (2) vs New York Rangers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1107</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1107.php">Carolina Hurricanes (3) vs Edmonton Oilers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1136.php">Trois-Rivières Draveurs (4) vs Grand Rapids Griffins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1137.php">Houston Aeros (3) vs Milwaukee Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1138.php">Bridgeport Sound Tigers (2) vs Charlotte Checkers (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1139.php">Adirondack Phantoms (3) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1140.php">Springfield Falcons (3) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1141.php">St-Cyrille Condors (3) vs Lake Erie Monsters (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1142.php">Roberval Dwarfs (4) vs Peoria Rivermen (5)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1143.php">Providence Bruins (1) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1144.php">Landshut Cannibals (6) vs Portland Pirates (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1145.php">Norfolk Admirals (3) vs Binghamton Senators (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1146.php">Connecticut Whale (5) vs Chicoutimi Saguenéens (6)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1147.php">Chicago Wolves (4) vs Cleveland Knights (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 150</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1108</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1108.php">Colorado Avalanche (0) vs Detroit Red Wings (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1109</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1109.php">Buffalo Sabres (2) vs Quebec Nordiques (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1110</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1110.php">Vancouver Canucks (1) vs San Jose Sharks (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1111</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1111.php">Edmonton Oilers (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1112</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1112.php">Anaheim Ducks (4) vs Seattle Saints (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1113</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1113.php">Toronto Maple Leafs (3) vs Washington Capitals (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1148.php">Rouyn-Noranda Huskies (3) vs Trois-Rivières Draveurs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1149.php">Bridgeport Sound Tigers (5) vs Manitoba Moose (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1150.php">Las Vegas Gamblers (4) vs St-Cyrille Condors (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1151.php">Adirondack Phantoms (4) vs Landshut Cannibals (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1152.php">Portland Pirates (2) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1153.php">Rochester Americans (3) vs Rockford IceHogs (4)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 151</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1114</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1114.php">Calgary Flames (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1115</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1115.php">New Jersey Devils (4) vs Buffalo Sabres (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1116</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1116.php">New York Rangers (4) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1117</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1117.php">Los Angeles Kings (0) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1118</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1118.php">St. Louis Blues (2) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1119</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1119.php">San Jose Sharks (0) vs Arizona Coyotes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1120</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1120.php">Winnipeg Jets (1) vs Colorado Avalanche (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1121</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1121.php">Quebec Nordiques (5) vs Philadelphia Flyers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1122</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1122.php">Toronto Maple Leafs (2) vs Florida Panthers (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1123</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1123.php">Carolina Hurricanes (2) vs Boston Bruins (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1154.php">Oklahoma City Barons (3) vs Bridgeport Sound Tigers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1155.php">Chicoutimi Saguenéens (4) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1156.php">Albany Devils (3) vs Connecticut Whale (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1157.php">Cleveland Knights (2) vs Adirondack Phantoms (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1158.php">Gatineau Olympiques (2) vs Grand Rapids Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1159.php">Springfield Falcons (4) vs Roberval Dwarfs (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1160.php">Laval Chiefs (4) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1161.php">Chicago Wolves (4) vs Wilkes-Barre/Scranton Penguins (5)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 152</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1124</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1124.php">Nashville Predators (3) vs Chicago Blackhawks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1125</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1125.php">Seattle Saints (3) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1126</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1126.php">Florida Panthers (3) vs Tampa Bay Lightning (4)</a>  - SO (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1127</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1127.php">Anaheim Ducks (3) vs Pittsburgh Penguins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1128</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1128.php">Philadelphia Flyers (2) vs Ottawa Senators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1129</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1129.php">Columbus Blue Jackets (3) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1130</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1130.php">Edmonton Oilers (2) vs Detroit Red Wings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1131</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1131.php">New York Rangers (2) vs New York Islanders (5)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1132</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1132.php">Los Angeles Kings (4) vs Calgary Flames (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1162.php">Manitoba Moose (3) vs Albany Devils (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1163.php">Trois-Rivières Draveurs (2) vs Rochester Americans (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1164.php">Gatineau Olympiques (4) vs Milwaukee Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1165.php">Lake Erie Monsters (6) vs Springfield Falcons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1166.php">Norfolk Admirals (1) vs Charlotte Checkers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1167.php">Portland Pirates (6) vs Oklahoma City Barons (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1168.php">Rockford IceHogs (5) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1169.php">Adirondack Phantoms (7) vs Providence Bruins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1170.php">San Antonio Rampage (4) vs Binghamton Senators (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1171.php">St-Cyrille Condors (6) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1172.php">Houston Aeros (3) vs Chicago Wolves (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 153</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1133</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1133.php">Pittsburgh Penguins (2) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1134</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1134.php">New York Islanders (3) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1135</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1135.php">Montreal Canadiens (4) vs Nashville Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1136</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1136.php">Vancouver Canucks (3) vs Anaheim Ducks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1137</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1137.php">Ottawa Senators (1) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1138</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1138.php">Dallas Stars (4) vs St. Louis Blues (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1173.php">Norfolk Admirals (0) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1174.php">Houston Aeros (4) vs Lake Erie Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1175.php">Springfield Falcons (4) vs Gatineau Olympiques (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1176.php">Grand Rapids Griffins (1) vs Landshut Cannibals (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 154</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1139</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1139.php">Philadelphia Flyers (5) vs Washington Capitals (6)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1140</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1140.php">Winnipeg Jets (3) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1141</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1141.php">Arizona Coyotes (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1142</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1142.php">Columbus Blue Jackets (1) vs Quebec Nordiques (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1177.php">Rochester Americans (3) vs Trois-Rivières Draveurs (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1178.php">Rouyn-Noranda Huskies (0) vs San Antonio Rampage (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1179.php">Connecticut Whale (3) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1180.php">St-Cyrille Condors (1) vs Chicoutimi Saguenéens (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 155</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1143</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1143.php">Boston Bruins (2) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1144</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1144.php">Anaheim Ducks (0) vs San Jose Sharks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1145</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1145.php">Toronto Maple Leafs (3) vs New York Rangers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1146</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1146.php">Dallas Stars (0) vs Edmonton Oilers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1147</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1147.php">Vancouver Canucks (1) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1148</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1148.php">New Jersey Devils (3) vs Montreal Canadiens (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1181.php">Roberval Dwarfs (3) vs Manitoba Moose (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1182.php">Oklahoma City Barons (2) vs Portland Pirates (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1183.php">Grand Rapids Griffins (3) vs Cleveland Knights (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 156</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1149</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1149.php">Quebec Nordiques (3) vs Columbus Blue Jackets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1150</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1150.php">Washington Capitals (1) vs Colorado Avalanche (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1151</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1151.php">Calgary Flames (5) vs Arizona Coyotes (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1184.php">Peoria Rivermen (4) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1185.php">Chicoutimi Saguenéens (4) vs Houston Aeros (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1186.php">Albany Devils (3) vs Adirondack Phantoms (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1187.php">Charlotte Checkers (1) vs Connecticut Whale (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1188.php">Springfield Falcons (4) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1189.php">Laval Chiefs (3) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1190.php">Cleveland Knights (2) vs Milwaukee Admirals (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1191.php">Norfolk Admirals (1) vs Providence Bruins (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 157</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1152</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1152.php">Toronto Maple Leafs (3) vs Vancouver Canucks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1153</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1153.php">St. Louis Blues (5) vs Dallas Stars (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1154</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1154.php">Buffalo Sabres (2) vs Florida Panthers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1155</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1155.php">New York Rangers (5) vs Philadelphia Flyers (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1156</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1156.php">San Jose Sharks (2) vs Winnipeg Jets (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1192.php">Connecticut Whale (6) vs Wilkes-Barre/Scranton Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1193.php">Trois-Rivières Draveurs (4) vs Roberval Dwarfs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1194.php">Milwaukee Admirals (6) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1195.php">Charlotte Checkers (1) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1196.php">Las Vegas Gamblers (1) vs Grand Rapids Griffins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1197.php">Gatineau Olympiques (5) vs Chicago Wolves (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 158</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1157</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1157.php">Detroit Red Wings (3) vs Chicago Blackhawks (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1158</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1158.php">Quebec Nordiques (3) vs Boston Bruins (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1159</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1159.php">Florida Panthers (3) vs Tampa Bay Lightning (4)</a>  - OT (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1160</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1160.php">Columbus Blue Jackets (3) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1161</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1161.php">Philadelphia Flyers (1) vs Carolina Hurricanes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1198.php">Adirondack Phantoms (0) vs Albany Devils (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1199.php">Manitoba Moose (3) vs Norfolk Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1200.php">Laval Chiefs (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1201.php">Binghamton Senators (3) vs Rochester Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1202.php">Springfield Falcons (1) vs Lake Erie Monsters (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1203.php">Providence Bruins (3) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1204.php">Trois-Rivières Draveurs (4) vs Landshut Cannibals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1205.php">Chicago Wolves (3) vs Peoria Rivermen (2)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1206.php">Bridgeport Sound Tigers (3) vs Charlotte Checkers (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1207.php">Oklahoma City Barons (3) vs Gatineau Olympiques (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 159</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1162</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1162.php">Washington Capitals (3) vs Pittsburgh Penguins (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1163</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1163.php">St. Louis Blues (5) vs Nashville Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1164</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1164.php">Toronto Maple Leafs (4) vs Ottawa Senators (1)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1165</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1165.php">New Jersey Devils (2) vs New York Islanders (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1166</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1166.php">Los Angeles Kings (3) vs Minnesota Wild (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1167</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1167.php">Winnipeg Jets (1) vs Calgary Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1168</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1168.php">Detroit Red Wings (1) vs Anaheim Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1169</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1169.php">Seattle Saints (4) vs San Jose Sharks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1170</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1170.php">Montreal Canadiens (5) vs Buffalo Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1171</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1171.php">Tampa Bay Lightning (4) vs Edmonton Oilers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1172</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1172.php">Boston Bruins (2) vs New York Rangers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1208.php">Las Vegas Gamblers (6) vs Portland Pirates (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1209.php">Cleveland Knights (2) vs Springfield Falcons (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1210.php">Rockford IceHogs (1) vs Laval Chiefs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1211.php">Wilkes-Barre/Scranton Penguins (1) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1212.php">Connecticut Whale (5) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1213.php">Roberval Dwarfs (3) vs Manitoba Moose (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1214.php">Landshut Cannibals (1) vs Bridgeport Sound Tigers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1215.php">Providence Bruins (1) vs Trois-Rivières Draveurs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1216.php">Grand Rapids Griffins (2) vs Houston Aeros (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1217.php">Peoria Rivermen (0) vs Adirondack Phantoms (7)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 160</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1173</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1173.php">Calgary Flames (5) vs Los Angeles Kings (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1174</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1174.php">Winnipeg Jets (1) vs Colorado Avalanche (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1175</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1175.php">Minnesota Wild (5) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1176</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1176.php">Chicago Blackhawks (1) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1177</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1177.php">Columbus Blue Jackets (3) vs Toronto Maple Leafs (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1178</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1178.php">Carolina Hurricanes (5) vs Seattle Saints (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1218.php">Lake Erie Monsters (3) vs Cleveland Knights (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1219.php">Las Vegas Gamblers (1) vs Rockford IceHogs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1220.php">Norfolk Admirals (4) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1221.php">Connecticut Whale (4) vs Rochester Americans (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1222.php">Oklahoma City Barons (3) vs Albany Devils (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 161</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1179</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1179.php">Carolina Hurricanes (2) vs Detroit Red Wings (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1180</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1180.php">Dallas Stars (3) vs St. Louis Blues (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1181</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1181.php">Tampa Bay Lightning (4) vs Montreal Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1182</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1182.php">Columbus Blue Jackets (2) vs Vancouver Canucks (1)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1223</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1223.php">Albany Devils (2) vs Wilkes-Barre/Scranton Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1224.php">Binghamton Senators (4) vs Roberval Dwarfs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1225.php">Grand Rapids Griffins (3) vs Milwaukee Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1226.php">Chicago Wolves (3) vs Charlotte Checkers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1227.php">Gatineau Olympiques (2) vs San Antonio Rampage (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1228.php">Laval Chiefs (2) vs Lake Erie Monsters (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 162</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1183</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1183.php">San Jose Sharks (5) vs Arizona Coyotes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1184</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1184.php">Anaheim Ducks (3) vs Dallas Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1185</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1185.php">Pittsburgh Penguins (5) vs Chicago Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1186</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1186.php">New Jersey Devils (0) vs Philadelphia Flyers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1187</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1187.php">Colorado Avalanche (3) vs Florida Panthers (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1188</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1188.php">New York Islanders (4) vs Boston Bruins (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1189</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1189.php">Toronto Maple Leafs (4) vs Nashville Predators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1229.php">Adirondack Phantoms (2) vs Providence Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1230.php">Bridgeport Sound Tigers (4) vs Norfolk Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1231.php">Chicago Wolves (2) vs Connecticut Whale (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1232.php">Houston Aeros (3) vs Las Vegas Gamblers (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1233.php">San Antonio Rampage (4) vs Landshut Cannibals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1234.php">Rouyn-Noranda Huskies (4) vs Peoria Rivermen (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1235.php">Roberval Dwarfs (2) vs Portland Pirates (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 163</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1190</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1190.php">Buffalo Sabres (1) vs Columbus Blue Jackets (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1191</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1191.php">Florida Panthers (4) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1192</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1192.php">Arizona Coyotes (3) vs Winnipeg Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1193</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1193.php">Montreal Canadiens (4) vs Pittsburgh Penguins (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1194</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1194.php">New York Rangers (4) vs Tampa Bay Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1195</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1195.php">New Jersey Devils (2) vs Carolina Hurricanes (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1196</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1196.php">Los Angeles Kings (5) vs Anaheim Ducks (3)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1197</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1197.php">Chicago Blackhawks (2) vs Minnesota Wild (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1198</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1198.php">San Jose Sharks (4) vs Edmonton Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1199</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1199.php">Calgary Flames (1) vs Detroit Red Wings (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1236.php">Charlotte Checkers (3) vs Oklahoma City Barons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1237.php">Rochester Americans (2) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1238.php">Lake Erie Monsters (3) vs Grand Rapids Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1239.php">Houston Aeros (3) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1240.php">Rouyn-Noranda Huskies (2) vs Gatineau Olympiques (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1241.php">Providence Bruins (4) vs Laval Chiefs (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 164</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1200</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1200.php">Tampa Bay Lightning (3) vs New York Islanders (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1201</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1201.php">Washington Capitals (2) vs Quebec Nordiques (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1202</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1202.php">Nashville Predators (5) vs St. Louis Blues (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1203</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1203.php">Anaheim Ducks (5) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1204</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1204.php">Boston Bruins (2) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1205</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1205.php">Toronto Maple Leafs (2) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1206</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1206.php">Philadelphia Flyers (0) vs New Jersey Devils (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1242.php">Landshut Cannibals (0) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1243.php">Las Vegas Gamblers (5) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1244.php">Norfolk Admirals (3) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1245.php">Rockford IceHogs (5) vs Chicago Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1246.php">San Antonio Rampage (1) vs Chicoutimi Saguenéens (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1247.php">Albany Devils (2) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1248.php">Houston Aeros (4) vs Cleveland Knights (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1249.php">Connecticut Whale (2) vs Milwaukee Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1250.php">Wilkes-Barre/Scranton Penguins (2) vs Adirondack Phantoms (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1251.php">Binghamton Senators (2) vs Roberval Dwarfs (3)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 165</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1207</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1207.php">Ottawa Senators (2) vs Calgary Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1208</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1208.php">Toronto Maple Leafs (1) vs New York Rangers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1209</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1209.php">Vancouver Canucks (3) vs San Jose Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1210</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1210.php">Minnesota Wild (2) vs Colorado Avalanche (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1211</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1211.php">New York Islanders (4) vs Washington Capitals (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1212</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1212.php">St. Louis Blues (2) vs Dallas Stars (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1213</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1213.php">Boston Bruins (1) vs Montreal Canadiens (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1214</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1214.php">Edmonton Oilers (3) vs Arizona Coyotes (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1215</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1215.php">Carolina Hurricanes (3) vs Columbus Blue Jackets (2)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1216</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1216.php">Chicago Blackhawks (5) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1217</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1217.php">Philadelphia Flyers (2) vs Florida Panthers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1252.php">Grand Rapids Griffins (2) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1253.php">Las Vegas Gamblers (4) vs Wilkes-Barre/Scranton Penguins (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1254.php">Adirondack Phantoms (4) vs Rochester Americans (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 166</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1218</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1218.php">Tampa Bay Lightning (3) vs Vancouver Canucks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1219</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1219.php">Florida Panthers (4) vs Toronto Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1220</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1220.php">Ottawa Senators (4) vs Pittsburgh Penguins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1255.php">Chicoutimi Saguenéens (6) vs Houston Aeros (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1256.php">Portland Pirates (1) vs Providence Bruins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1257.php">Roberval Dwarfs (1) vs Connecticut Whale (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1258.php">Rouyn-Noranda Huskies (6) vs Gatineau Olympiques (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1259.php">Adirondack Phantoms (3) vs Norfolk Admirals (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1260.php">Binghamton Senators (4) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1261.php">San Antonio Rampage (6) vs Springfield Falcons (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1262.php">Charlotte Checkers (5) vs Oklahoma City Barons (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1263.php">Milwaukee Admirals (1) vs Peoria Rivermen (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1264.php">Rochester Americans (1) vs Albany Devils (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1265.php">Laval Chiefs (1) vs Trois-Rivières Draveurs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 167</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1221</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1221.php">Pittsburgh Penguins (0) vs Nashville Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1222</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1222.php">Arizona Coyotes (2) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1223</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1223.php">Carolina Hurricanes (0) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1224</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1224.php">Dallas Stars (2) vs Boston Bruins (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1225</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1225.php">Chicago Blackhawks (3) vs Detroit Red Wings (2)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1226</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1226.php">Winnipeg Jets (3) vs Calgary Flames (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1227</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1227.php">Florida Panthers (0) vs New Jersey Devils (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1228</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1228.php">Quebec Nordiques (4) vs Tampa Bay Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1229</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1229.php">St. Louis Blues (3) vs Anaheim Ducks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1230</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1230.php">Buffalo Sabres (3) vs Minnesota Wild (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1266.php">Charlotte Checkers (1) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1267.php">Las Vegas Gamblers (1) vs Landshut Cannibals (9)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1268.php">Springfield Falcons (4) vs Manitoba Moose (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1269.php">Rockford IceHogs (2) vs Grand Rapids Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1270.php">Houston Aeros (2) vs Chicago Wolves (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1271.php">Milwaukee Admirals (2) vs Portland Pirates (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 168</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1231</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1231.php">New Jersey Devils (3) vs New York Islanders (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1232</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1232.php">San Jose Sharks (4) vs Seattle Saints (5)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1233</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1233.php">Nashville Predators (3) vs Edmonton Oilers (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1234</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1234.php">Calgary Flames (2) vs Los Angeles Kings (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1235</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1235.php">Boston Bruins (2) vs New York Rangers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1236</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1236.php">Ottawa Senators (3) vs Colorado Avalanche (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1272.php">Manitoba Moose (7) vs Rouyn-Noranda Huskies (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1273.php">Norfolk Admirals (2) vs Binghamton Senators (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1274.php">Trois-Rivières Draveurs (2) vs San Antonio Rampage (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1275.php">Rockford IceHogs (4) vs Las Vegas Gamblers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1276.php">Rochester Americans (1) vs Cleveland Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1277.php">Landshut Cannibals (4) vs Bridgeport Sound Tigers (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1278.php">Gatineau Olympiques (4) vs Laval Chiefs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1279.php">Peoria Rivermen (5) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1280.php">Albany Devils (3) vs Charlotte Checkers (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1281.php">Connecticut Whale (4) vs Wilkes-Barre/Scranton Penguins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 169</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1237</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1237.php">New York Rangers (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1238</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1238.php">Minnesota Wild (3) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1239</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1239.php">Montreal Canadiens (0) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1240</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1240.php">Florida Panthers (1) vs Carolina Hurricanes (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1241</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1241.php">Anaheim Ducks (2) vs San Jose Sharks (1)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1242</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1242.php">Los Angeles Kings (3) vs St. Louis Blues (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1243</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1243.php">Winnipeg Jets (3) vs Vancouver Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1244</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1244.php">Edmonton Oilers (2) vs Arizona Coyotes (1)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1245</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1245.php">New York Islanders (4) vs Columbus Blue Jackets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1246</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1246.php">Chicago Blackhawks (4) vs Toronto Maple Leafs (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1282.php">Wilkes-Barre/Scranton Penguins (4) vs Adirondack Phantoms (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1283.php">Portland Pirates (1) vs Providence Bruins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1284.php">Grand Rapids Griffins (4) vs Houston Aeros (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1285.php">Lake Erie Monsters (3) vs Oklahoma City Barons (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 170</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1247</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1247.php">Ottawa Senators (3) vs Dallas Stars (7)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1248</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1248.php">Tampa Bay Lightning (6) vs Montreal Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1249</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1249.php">Quebec Nordiques (4) vs Philadelphia Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1250</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1250.php">Winnipeg Jets (1) vs Nashville Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1251</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1251.php">Calgary Flames (2) vs Detroit Red Wings (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1286.php">Wilkes-Barre/Scranton Penguins (5) vs Roberval Dwarfs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1287.php">Oklahoma City Barons (4) vs Milwaukee Admirals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 171</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1252</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1252.php">Philadelphia Flyers (1) vs Pittsburgh Penguins (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1253</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1253.php">San Jose Sharks (2) vs Seattle Saints (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1254</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1254.php">Florida Panthers (3) vs Boston Bruins (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1288</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1288.php">Wilkes-Barre/Scranton Penguins (3) vs Rockford IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1289</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1289.php">Oklahoma City Barons (1) vs Gatineau Olympiques (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 172</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1255</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1255.php">St. Louis Blues (2) vs Chicago Blackhawks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1256</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1256.php">Buffalo Sabres (1) vs Winnipeg Jets (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1290</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1290.php">Adirondack Phantoms (3) vs Rochester Americans (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1291</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1291.php">Roberval Dwarfs (4) vs St-Cyrille Condors (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1292</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1292.php">Gatineau Olympiques (1) vs Lake Erie Monsters (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1293</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1293.php">Chicago Wolves (3) vs Rouyn-Noranda Huskies (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1294</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1294.php">Milwaukee Admirals (3) vs Peoria Rivermen (4)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1295</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1295.php">Houston Aeros (3) vs Springfield Falcons (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 173</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1257</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1257.php">Vancouver Canucks (4) vs Minnesota Wild (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1258</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1258.php">Pittsburgh Penguins (3) vs New York Islanders (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1259</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1259.php">Edmonton Oilers (4) vs Colorado Avalanche (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1260</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1260.php">Quebec Nordiques (3) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1261</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1261.php">Nashville Predators (2) vs New Jersey Devils (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1262</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1262.php">Detroit Red Wings (3) vs Anaheim Ducks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1263</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1263.php">Carolina Hurricanes (4) vs Ottawa Senators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1264</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1264.php">New York Rangers (4) vs Washington Capitals (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1265</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1265.php">Philadelphia Flyers (0) vs Florida Panthers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1296</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1296.php">Rochester Americans (1) vs Albany Devils (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1297</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1297.php">Roberval Dwarfs (3) vs Connecticut Whale (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1298</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1298.php">Adirondack Phantoms (2) vs Norfolk Admirals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 174</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1266</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1266.php">Nashville Predators (1) vs Los Angeles Kings (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1267</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1267.php">Tampa Bay Lightning (4) vs Buffalo Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1268</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1268.php">Minnesota Wild (4) vs Edmonton Oilers (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1269</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1269.php">Florida Panthers (1) vs Carolina Hurricanes (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1270</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1270.php">Ottawa Senators (3) vs Calgary Flames (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1299</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1299.php">Providence Bruins (5) vs Trois-Rivières Draveurs (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1300</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1300.php">Peoria Rivermen (1) vs Chicoutimi Saguenéens (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1301</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1301.php">Norfolk Admirals (3) vs Charlotte Checkers (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1302</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1302.php">Albany Devils (2) vs Bridgeport Sound Tigers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1303</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1303.php">Houston Aeros (2) vs Cleveland Knights (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1304</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1304.php">St-Cyrille Condors (3) vs Chicago Wolves (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1305</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1305.php">Connecticut Whale (4) vs Binghamton Senators (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1306</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1306.php">Lake Erie Monsters (4) vs Landshut Cannibals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1307</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1307.php">Rockford IceHogs (4) vs Las Vegas Gamblers (3)</a> - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1308</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1308.php">Rouyn-Noranda Huskies (3) vs San Antonio Rampage (2)</a> - SO</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 175</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1271</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1271.php">Washington Capitals (4) vs Quebec Nordiques (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1272</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1272.php">Boston Bruins (4) vs Montreal Canadiens (3)</a>  (R2)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1273</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1273.php">Nashville Predators (4) vs San Jose Sharks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1274</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1274.php">Philadelphia Flyers (4) vs New York Rangers (3)</a>  - OT (R1)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1309</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1309.php">Milwaukee Admirals (6) vs Portland Pirates (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1310</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1310.php">Springfield Falcons (2) vs Manitoba Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1311</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1311.php">Providence Bruins (2) vs Laval Chiefs (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">1312</td><td class="STHSSchedule_FarmLink">
<a href="ASHL7-Farm-1312.php">Rockford IceHogs (2) vs Grand Rapids Griffins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 176</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1275</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1275.php">Carolina Hurricanes (2) vs Columbus Blue Jackets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1276</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1276.php">Seattle Saints (1) vs Dallas Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1277</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1277.php">Anaheim Ducks (3) vs St. Louis Blues (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1278</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1278.php">Buffalo Sabres (0) vs Toronto Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1279</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1279.php">Detroit Red Wings (1) vs Vancouver Canucks (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1280</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1280.php">Colorado Avalanche (2) vs Arizona Coyotes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1281</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1281.php">Winnipeg Jets (2) vs Chicago Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1282</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1282.php">Philadelphia Flyers (3) vs Pittsburgh Penguins (4)</a>  (R2)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 177</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1283</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1283.php">Philadelphia Flyers (3) vs New Jersey Devils (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1284</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1284.php">Pittsburgh Penguins (2) vs New York Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1285</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1285.php">Chicago Blackhawks (3) vs Detroit Red Wings (0)</a>  (R1)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">1286</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1286.php">Minnesota Wild (4) vs Seattle Saints (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1287</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1287.php">Nashville Predators (2) vs Los Angeles Kings (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 178</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1288</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1288.php">New York Islanders (2) vs Boston Bruins (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1289</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1289.php">Florida Panthers (3) vs Anaheim Ducks (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1290</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1290.php">Pittsburgh Penguins (7) vs Ottawa Senators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1291</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1291.php">Seattle Saints (4) vs Colorado Avalanche (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1292</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1292.php">Calgary Flames (3) vs Edmonton Oilers (4)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 179</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1293</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1293.php">New York Islanders (3) vs Washington Capitals (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1294</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1294.php">Chicago Blackhawks (2) vs Winnipeg Jets (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1295</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1295.php">Detroit Red Wings (4) vs Vancouver Canucks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1296</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1296.php">New Jersey Devils (2) vs New York Rangers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1297</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1297.php">Boston Bruins (4) vs Toronto Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1298</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1298.php">Tampa Bay Lightning (5) vs Buffalo Sabres (6)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1299</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1299.php">Edmonton Oilers (2) vs Columbus Blue Jackets (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1300</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1300.php">Colorado Avalanche (4) vs Arizona Coyotes (3)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1301</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1301.php">Los Angeles Kings (2) vs Philadelphia Flyers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1302</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1302.php">Seattle Saints (3) vs Dallas Stars (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 180</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1303</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1303.php">Detroit Red Wings (2) vs Minnesota Wild (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1304</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1304.php">Los Angeles Kings (2) vs Montreal Canadiens (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1305</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1305.php">Chicago Blackhawks (8) vs Tampa Bay Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1306</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1306.php">Winnipeg Jets (3) vs Nashville Predators (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">1307</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1307.php">Pittsburgh Penguins (3) vs Calgary Flames (4)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1308</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1308.php">New Jersey Devils (3) vs Carolina Hurricanes (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1309</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1309.php">Washington Capitals (7) vs Florida Panthers (8)</a>  - SO</td></tr>
<tr><td class="STHSSchedule_GameNumber">1310</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1310.php">Anaheim Ducks (2) vs St. Louis Blues (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">1311</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1311.php">Ottawa Senators (3) vs Quebec Nordiques (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 181</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1312</td><td class="STHSSchedule_ProLink">
<a href="ASHL7-1312.php">Boston Bruins (3) vs San Jose Sharks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 182</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<b>--------------  Rest Day</b>
</td><td colspan="2" class="STHSAlignTopBorder">
</td></tr>
</table>
<?php include "Footer.php";?>
